<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreOrdersRequest;
use Illuminate\Http\Request;
use Auth;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['cart']);
    }

    public function index(Request $request){
        $orders = '';     
        /**
         * Status
         * 1 - En espera
         * 2 - Orden tomada
         * 3 - Entregada
         */
        if(Auth::user()->user_type != 4){
            $orders = Order::all();     
        }elseif(Auth::user()->user_type == 3){
            $orders = Order::where('status', 1)->orWhere('status', 2)->get();
        }   
        else{
            $orders = Order::where('user_id', Auth::id())->get();
        
        }
        if(Auth::user()->user_type == 4  && $request->ws == "balance"){
            $orders = Order::where('user_id', Auth::id())->where('status', '!=', 4)->get();
            return view('order.balance', compact('orders'));
        }elseif(Auth::user()->user_type != 4  && $request->ws == "balance"){
            $orders = Order::where('user_id', $request->user)->where('status', '!=', 4)->get();
            return view('order.balance', compact('orders'));
        }

        if($request->ws == "all"){
            return $orders;
        }
        if($request->ws == "byUser"){
            $orders =  Order::where('user_id', $request->user)->get();
        }
        if($request->ws == "status"){
            $orders =  Order::where('status', $request->status)->get();
        }
        return view('order.index', compact('orders'));
    }
    public function create(){
        return view('order.create');
    }

    public function store(StoreOrdersRequest $request){
        try{
            DB::beginTransaction();
            $order = Order::create(
                ['user_id' => $request->user_id, 
                'total' => $request->total, 
                'status' => 1, 
            ]);
            
            foreach($request->product_id as $key => $product){
                OrderDetail::create([
                    'order_id' => $order->id, 
                    'product_id' => $product, 
                    'quantity' => $request->quantity[$key], 
                    'price' => $request->product_total[$key], 
                    'notes' => $request->notes[$key]
                    ]);
            }
            DB::commit();
            
            return \Response::json(array(
                'response' => 'Cambios guardados correctamente.',
                'location' => '/pedidos'.'/'.$order->id,
                'title' => 'Su orden se encuentra en espera'
            ), 200);
            
        }catch(\Exception $e){
            DB::rollback();
            return \Response::json(array(
                'error' => $e->getMessage(),
            ), 400);
            ;
        }
    }

    public function show(Request $request, $id){
        $order = Order::findOrFail($id);
        return view('order.show', compact('order'));
    }

    public function update(UpdateProductsRequest $request, $id){
        try{
            DB::beginTransaction();
            $order = Order::findOrFail($id);
            $order->update($request->all());
            
            DB::commit();
             $response = 'Cambios guardados correctamente.';
            
            return \Response::json(array(
                'response' => $response,
                'title' => 'Success'
            ), 200);
            
        }catch(\Exception $e){
            DB::rollback();
            return \Response::json(array(
                'error' => $e->getMessage(),
            ), 400);
            ;
        }
    }
    
    public function destroy($id){
        try{
            DB::beginTransaction();
            $response = '';
            $order = Order::findOrFail($id);
            $key = $order->enabled;
            if($key == 1){
                $order->enabled = 0;
                $order->save();
                $response = 'Este platillo ya no aparecerá en el menú. <br> Puede deshacer esta acción en cualquier momento.';
            }
            if($key == 0){
                $order->enabled = 1;
                $order->save();
                $response = 'Este platillo ahora aparecerá en el menú. <br> Puede deshacer esta acción en cualquier momento.';
            }
            
            DB::commit();
             
            
            return \Response::json(array(
                'response' => $response,
                'location' => '/menu'.'/'.$id,
                'title' => $order->name
            ), 200);
            
        }catch(\Exception $e){
            DB::rollback();
            return \Response::json(array(
                'error' => $e->getMessage(),
            ), 400);
            ;
        }
    }

    public function cart(){

    }
}


