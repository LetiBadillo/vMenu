<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreProductsRequest;
class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index(Request $request){
        if($request->ws == "all"){
            return Product::all();
        }elseif($request->ws == "allowed"){
            return Product::where('enabled', 1);
        }elseif($request->ws == "search"){
            return Product::
            where('products.name', 'like', $request->search.'%')
	        ->orWhere( 'products.description', 'like', $request->search.'%')
            ->get();
        }
        return view('product.index', compact('products'));
    }
    public function create(){
        return view('product.create');
    }

    public function store(StoreProductsRequest $request){
        try{
            DB::beginTransaction();
            $file = $request->picture;
            $extension = $file->getClientOriginalExtension();
            $product = Product::create([
            'name' => $request->name, 
            'description' => $request->description, 
            'price' => $request->price, 
            'type' => $request->type, 
            'picture' => $file->getClientOriginalName(), 
            'is_featured' => $request->is_featured
            ]);
            $product->update(['picture' => 'platillo-'.$product->id.'.'.$extension]);
            $file->move('platillos', 'platillo-'.$product->id.'.'.$extension);
            DB::commit();
            
            return \Response::json(array(
                'response' => 'Cambios guardados correctamente.',
                'location' => '/products'.'/'.$product->id,
                'title' => $product->title
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
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    public function update(StoreSubject $request, $id){
        try{
            DB::beginTransaction();
            $product = Product::findOrFail($id);
            $product->update($request->all());
            
            DB::commit();
             $response = 'Cambios guardados correctamente.';
            
            return \Response::json(array(
                'response' => $response,
                'location' => '/products'.'/'.$id,
                'title' => $product->title
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
            $product = Product::findOrFail($id);
            $key = $product->enabled;
            if($key == 1){
                $product->enabled = 0;
                $product->save();
                $response = 'Este platillo ya no aparecerá en el menú. <br> Puede deshacer esta acción en cualquier momento.';
            }
            if($key == 0){
                $product->enabled = 1;
                $product->save();
                $response = 'Este platillo ahora aparecerá en el menú. <br> Puede deshacer esta acción en cualquier momento.';
            }
            
            DB::commit();
             
            
            return \Response::json(array(
                'response' => $response,
                'location' => '/products'.'/'.$id,
                'title' => $product->title
            ), 200);
            
        }catch(\Exception $e){
            DB::rollback();
            return \Response::json(array(
                'error' => $e->getMessage(),
            ), 400);
            ;
        }
    }
}
