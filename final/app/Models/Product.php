<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name', 'description', 'price', 'type', 'picture', 'enabled', 'is_featured'];

     /*
    type:
    1 -> Breakfast
    2 -> comida
    3 -> Dinner
    4 -> Desserts
    5 -> Drinks
    6 -> Combos
    is_featured
    7 -> Dish of the day
    8 -> Cheff Recomendation
    9 -> is_banner

    */
    

}
