<?php

namespace App\Http\Controllers;

use App\Products;
use App\Category;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('adminComponent.products',['allprod'=>Products::index()],['category'=>Category::index()]);
    }
    
    //comming of views addproducts 
    public function store(Request $request){
        return view ('adminComponent.index',['message'=> Products::addProd($request)]);
    }

    
    public function update(Request $request, $id)
    {
        //
        dd("update");
    }

<<<<<<< HEAD
    public function store(Request $request){

        return view ('adminComponent.index',['message'=> Products::addProd($request)]);
    }
    public function delete($product_id){

        //dd(Products::find($product_id));
        return view ('adminComponent.index',[ 'message'=>Products::deleteProd($product_id)]);
=======
    public function delete($id)
    {
        //
        //dd($id);
        return view ('adminComponent.index',[ 'message'=>Products::deleteProd($id)]);
    }

    
    public function show($id){
        //dd($id);
        return view('prodEditComponent.edit',['oneprod'=>Products::show($id)]);
>>>>>>> 46f149ff41df5a60216f93aa27797b0f1b99b70b
    }


    //method for buy product use a client
    public function showProd($productbuy_id){
<<<<<<< HEAD
        //hola

        return view('clientComponent.client',['product'=>Products::showprod($productbuy_id)]);

    }
    //probando sss

=======
        
        return view('clientComponent.buyclient',['product'=>Products::showprod($productbuy_id)]);

    }
    //for use all categori
    public function addproductsindex()
    {
        //RETORNAMOS A LA VISTA ADDPRODUCTS
        return view('adminComponent.addproducts',["category" => Category::index()]);
    }
>>>>>>> 46f149ff41df5a60216f93aa27797b0f1b99b70b
}
