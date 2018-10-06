<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description');
            $table->decimal('price');
            $table->integer('type');
            $table->integer('is_featured')->nullable();
            $table->string('picture');
            $table->integer('enabled')->default(1);
            $table->timestamps();
        });
    }
/*
type:
1 -> Breakfast
2 -> Supper
3 -> Dinner
4 -> Desserts
5 -> Drinks
6 -> Dish of the day
7 -> Cheff Recomendation
8 -> Most reviewd
*/
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
