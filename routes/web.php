<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\StoreOnlinePermission\Models\Role;
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
Route::get('/home', 'HomeController@index')->name('home');

//Routes views
Route::get('/index', 'InitController@index');
Route::get('/registervent', 'RegisterController@index');
Route::get('/store', 'StoreController@index');
Route::get('/addproducts', 'AddProductsController@index');

//product index
Route::get('/products','ProductsController@index');
Route::post('/products','ProductsController@index');

//product add
Route::post('/addproducts','ProductsController@store');

///route for  delete product
Route::get("/{id}/delete","ProductsController@delete");

//route for edit prod
Route::get("/products/{id}","ProductsController@show");
Route::post("/products/edit","ProductsController@updateProd");
Route::get("/products/view/{id}","ProductsController@viewimg");


// add teste buy use a client
Route::get('/client','ClientController@index');
Route::get('/client/{productbuy_id}/buy','ClientController@showProd');

//route search registros use a client
Route::post('/register/{product_id}/{idcategory}/buy','RegisterController@store');
//route for see register of and using filter of month and year
Route::post('/registervent','RegisterController@indexSelect');


//test of roles
Route::get('/test-roles', function () {
    
    /*$user = User::find(2);
    $user->roles()->sync([2]);
    return $user->roles;
    */
    /*
     return Role::create([
         'name' => 'cliente',
         'slug' => 'client',
         'description' => 'Cliente del sistema',
         'full-acces' => 'no',
         ]);
    */
    /*
    Role::create([
     'name' => 'admin',
     'slug' => 'admin',
     'description' => 'Administrador del sistema',
     'full-acces' => 'yes',
     ]);
    */
    //ASSING ROLE OF ADMIN TO role
    
    //$role = role::find(1);
    //$role->roles()->sync([1]);
    //return $role->roles;

    //create permission for roles
    
    return Permission::create([
        'name' => 'View product',
        'slug' => 'client.index',
        'description' => 'vista del cliente',
        'full-acces' => 'no',
        ]);

    $role = Role::find(1);
    $role->roles()->sync([1]);
    return $role->permissions;
    

    
});