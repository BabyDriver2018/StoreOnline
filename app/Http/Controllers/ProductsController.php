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
    public function products()
    {
        //
        return view('adminComponent.products',['allprod'=>Products::index()],['allcategory'=>Products::indexcategory()]);
    }
    public function addproducts()
    {
        //RETORNAMOS A LA VISTA ADDPRODUCTS
        return view('adminComponent.addproducts',["category" => Category::index()]);
    }

    public function store(Request $request){

        return view ('adminComponent.index',['message'=> Products::addProd($request)]);
    }
    public function delete($product_id){

        //dd(Products::find($product_id));
        return view ('adminComponent.index',[ 'message'=>Products::deleteProd($product_id)]);
    }

    //method for buy product
    public function showProd($productbuy_id){
        //hola

        return view('clientComponent.client',['product'=>Products::showprod($productbuy_id)]);

    }
    //probando sss

}
