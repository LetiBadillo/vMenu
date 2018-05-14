<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreOrdersRequest;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['cart']);
    }

    public function index(Request $request){
        $orders = '';     
        if(Auth::user()->user_type != 4){
            $orders = Order::all();     
        }else{
            $orders = Order::where('user_id', Auth::id());
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

    public function store(StoreProductsRequest $request){
        try{
            DB::beginTransaction();
            $file = $request->picture;
            $extension = $file->getClientOriginalExtension();
            if($request->is_featured){
                if($request->is_featured != 9){
                    Order::where('is_featured', $request->is_featured)->update(['is_featured' => null]);
                }
            }
            $order = Order::create([
            'name' => $request->name, 
            'description' => $request->description, 
            'price' => $request->price, 
            'type' => $request->type, 
            'picture' => $file->getClientOriginalName(), 
            'is_featured' => $request->is_featured
            ]);
            $order->update(['picture' => 'platillo-'.$order->id.'.'.$extension]);

            $file->move('platillos', 'platillo-'.$order->id.'.'.$extension);
            DB::commit();
            
            return \Response::json(array(
                'response' => 'Cambios guardados correctamente.',
                'location' => '/menu'.'/'.$order->id,
                'title' => $order->name
            ), 200);
            
        }catch(\Exception $e){
            DB::rollback();
            \File::delete('platillos'.'/'.$file->getClientOriginalName());
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
            $enabled = $order->enabled;
            if($request->enabled){
                $enabled = $request->enabled;
            }
            if($request->is_featured){
                if($request->is_featured != 9){
                    Order::where('id', '!=', $order->id)->where('is_featured', $request->is_featured)->update(['is_featured' => null]);
                }
            }
            if($request->picture){
                \File::delete('platillos'.'/'.$order->picture);
                $file = $request->picture;
            $extension = $file->getClientOriginalExtension();
            $order->update([
                'name' => $request->name, 
                'description' => $request->description, 
                'price' => $request->price, 
                'type' => $request->type, 
                'picture' => $file->getClientOriginalName(), 
                'is_featured' => $request->is_featured,
                'enabled' => $enabled
            ]);
            $order->update(['picture' => 'platillo-'.$order->id.'.'.$extension]);
            $file->move('platillos', 'platillo-'.$order->id.'.'.$extension);
            }else{
                $order->update([
                    'name' => $request->name, 
                    'description' => $request->description, 
                    'price' => $request->price, 
                    'type' => $request->type, 
                    'is_featured' => $request->is_featured,
                    'enabled' => $enabled
                ]);
            }
            
            DB::commit();
             $response = 'Cambios guardados correctamente.';
            
            return \Response::json(array(
                'response' => $response,
                'location' => '/menu'.'/'.$id,
                'title' => $order->name
            ), 200);
            
        }catch(\Exception $e){
            DB::rollback();
            \File::delete('platillos'.'/'.$file->getClientOriginalName());
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


