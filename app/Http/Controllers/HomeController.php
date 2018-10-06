<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Product::where('enabled', 1)->get(); 
        $products = $is_banner = $dish_of_the_day = $chef  =  $breakfast = $dinner = $lunch = $combos  = $desserts = $drinks =  array();  
       foreach($dishes as $dish){
          
            switch ($dish->type) {
                case '1':
                    array_push($breakfast, $dish);
                    break;
                case '2':
                    array_push($lunch, $dish);
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
            switch ($dish->is_featured) {
                case '7':
                    array_push($dish_of_the_day, $dish);
                    break;
                case '8':
                    array_push($chef, $dish);
                break;
                case '10':
                    array_push($is_banner, $dish);
                break;
            }


        }

        $products = [
            'suggestions' => $dishes->random(9),
            'breakfast' => $breakfast,
            'dinner' => $dinner,
            'lunch' => $lunch,
            'combos' => $combos,
            'with_combos' => array(),
            'drinks' => $drinks,
            'desserts' => $desserts,
            'dish_of_the_day' => $dish_of_the_day,
            'chef_recomendation' => $chef,
            'banners' => $is_banner
        ]; 

        

        return view('dashboard.welcome', compact('products'));
    }
}
