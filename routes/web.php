<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/home', 'InitController@index');
Route::get('/register', 'RegisterController@index');
Route::get('/products', 'ProductsController@products');
Route::get('/store', 'StoreController@store');
Route::get('/products/add', 'ProductsController@addproducts');
//Route::get('/products',"")
//rute for add productos
Route::post('/products/addProd','ProductsController@store');
Route::get('/products/{product_id}/delete','ProductsController@delete');

// add teste buy 

Route::get('/client','ClientController@index');
Route::get('/client/{productbuy_id}/buy','ProductsController@showProd');

//route add registros
Route::post('/register/{product_id}/{idcategory}/buy','RegisterController@store');
Route::post('/register/month','RegisterController@indexSelect');