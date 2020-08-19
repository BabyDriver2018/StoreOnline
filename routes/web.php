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

Route::get('/', function () {
    return view('welcome');
});

//Routes views
Route::get('/index', 'InitController@index');
Route::get('/registerVent', 'RegisterController@index');
Route::get('/products', 'ProductsController@products');
Route::get('/store', 'StoreController@store');
Route::get('/products/add', 'ProductsController@addproducts');


//rute for add productos
Route::post('/products/addProd','ProductsController@store');
Route::get('/products/{product_id}/delete','ProductsController@delete');

// add teste buy 

Route::get('/client','ClientController@index');
Route::get('/client/{productbuy_id}/buy','ProductsController@showProd');

//route search registros
Route::post('/register/{product_id}/{idcategory}/buy','RegisterController@store');
Route::post('/register/month','RegisterController@indexSelect');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
