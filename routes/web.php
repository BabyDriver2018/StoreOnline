<?php

use Illuminate\Support\Facades\Route;
use App\StoreOnlinePermission\Models\Permission;

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

//Route for login and register
Auth::routes();
//ruta para definir a cual vista se ira al momento de iniciar sesion
Route::get('/home', 'HomeController@index');

//Routes views
Route::get('/registerV', 'RegisterController@index');
Route::get('/contact', 'StoreController@index');
//product add
Route::post('/addproducts','ProductController@store');
//about store
Route::get('/about','StoreController@about');
///route for  delete product
Route::get('/{id}/delete','ProductController@delete');
//route for edit prod
Route::get('/products/{id}','ProductController@show');
Route::post('/products/edit','ProductController@updateProd');

//ruta para buscar producto
Route::get('/product/buscador','ProductController@buscador');

//ruta para la simulacion de la comprar de un producto
Route::get('/client','ClientController@index');
Route::get('/client/{productbuy_id}/buy','ClientController@showProd');

//rutas para los registros y busar los registros
Route::post('/register/{product_id}/{idcategory}/buy','RegisterController@buy');
//route for see register of and using filter of month and year
Route::post('/registervent','RegisterController@indexSelect');
