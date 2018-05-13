<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name', 'description', 'price', 'type', 'picture', 'enabled', 'is_featured'];

    protected $appends = ['dishOfTheDay', 'chefRecomendation', 'bestDishes', 'combos', 'suggestions', 'banners'];
     /*
    type:
    1 -> Breakfast
    2 -> Supper
    3 -> Dinner
    4 -> Desserts
    5 -> Drinks
    6 -> Combos
    is_featured
    7 -> Dish of the day
    8 -> Cheff Recomendation
    9 -> Most reviewd
    10 -> is_banner

    */
    public function getdishOfTheDayAttribute(){
        return Product::where('is_featured', 7)
        ->limit(1)->get();
    }

    public function getchefRecomendationAttribute(){
        return Product::where('is_featured', 8)
                ->limit(1)->get();
    }

    public function getbestDishesAttribute(){
        return Product::where('is_featured', 9)
                ->limit(1)->get();
    }

    public function getbannersAttribute(){
        return Product::where('is_featured', 10)
                ->get();
    }

    public function getcombosAttribute(){
        return Product::where('type', 6)
                ->inRandomOrder()
                ->get();
    }

    public function getsuggestionsAttribute(){
        return Product::where('type', '<', 7)
                ->inRandomOrder()
                ->limit(9)->get();
    }

}
