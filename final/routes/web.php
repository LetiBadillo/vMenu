<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard.welcome');
});

Auth::routes();

Route::resource('/menu', 'ProductsController');
Route::resource('/pedidos', 'OrdersController');
Route::resource('/clientes', 'UsersController');

Route::post('/cart', 'OrdersController@cart');
Route::get('/', 'HomeController@index');