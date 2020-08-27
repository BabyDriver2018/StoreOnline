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
Route::get('/store', 'StoreController@store');
Route::get('/addproducts', 'ProductsController@addproductsindex');

//use a resources
Route::resource('/products','ProductsController');
//tratar de usar 

///route for  delete product
Route::get("/products/{id}/delete","ProductsController@delete");


///route for  delete product
Route::get("/products/{id}","ProductsController@delete");

// add teste buy use a client
Route::get('/client','ClientController@index');
Route::get('/client/{productbuy_id}/buy','ProductsController@showProd');

//route search registros use a client
Route::post('/register/{product_id}/{idcategory}/buy','RegisterController@store');
Route::post('/register/month','RegisterController@indexSelect');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
