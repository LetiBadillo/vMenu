<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
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
        $dishes = Product::all(); 
        $products =  $breakfast = $dinner = $supper = $combos = $desserts = $drinks =  array();  
       foreach($dishes as $dish){
          
            switch ($dish->type) {
                case '1':
                    array_push($breakfast, $dish);
                    break;
                case '2':
                    array_push($supper, $dish);
                break;
                case '3':
                    array_push($dinner, $dish);
                break;
                case '4':
                    array_push($desserts, $dish);
                break;
                case '5':
                    array_push($drinks, $dish);
                break;
                case '6':
                    array_push($combos, $dish);
                break;
            }

        }

        $products = [
            'breakfast' => $breakfast,
            'dinner' => $dinner,
            'lunch' => $supper,
            'with_combos' => $combos,
            'drinks' => $drinks,
            'desserts' => $desserts,
        ]; 

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
            if($request->is_featured){
                if($request->is_featured != 9){
                    Product::where('is_featured', $request->is_featured)->update(['is_featured' => null]);
                }
            }
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
                'location' => '/menu'.'/'.$product->id,
                'title' => $product->name
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

    public function update(UpdateProductsRequest $request, $id){
        try{
            DB::beginTransaction();
            $product = Product::findOrFail($id);
            $enabled = $product->enabled;
            if($request->enabled){
                $enabled = $request->enabled;
            }
            if($request->is_featured){
                if($request->is_featured != 9){
                    Product::where('id', '!=', $product->id)->where('is_featured', $request->is_featured)->update(['is_featured' => null]);
                }
            }
            if($request->picture){
                \File::delete('platillos'.'/'.$product->picture);
                $file = $request->picture;
            $extension = $file->getClientOriginalExtension();
            $product->update([
                'name' => $request->name, 
                'description' => $request->description, 
                'price' => $request->price, 
                'type' => $request->type, 
                'picture' => $file->getClientOriginalName(), 
                'is_featured' => $request->is_featured,
                'enabled' => $enabled
            ]);
            $product->update(['picture' => 'platillo-'.$product->id.'.'.$extension]);
            $file->move('platillos', 'platillo-'.$product->id.'.'.$extension);
            }else{
                $product->update([
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
                'title' => $product->name
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
                'location' => '/menu'.'/'.$id,
                'title' => $product->name
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
