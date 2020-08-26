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
        //
        return view('adminComponent.products',['allprod'=>Products::index()],['allcategory'=>Products::indexcategory()]);
    }
    
    //of addproducts 
    public function store(Request $request){
        return view ('adminComponent.index',['message'=> Products::addProd($request)]);
    }

    public function show(Products $products)
    {
        //
    }

    
    public function update(Request $request, Products $products)
    {
        //
    }

    public function destroy($idproddelete)
    {
        //
        
        return view ('adminComponent.index',[ 'message'=>Products::deleteProd($idproddelete)]);
    }

    //method for buy product use a client
    public function showProd($productbuy_id){
        
        return view('clientComponent.buyclient',['product'=>Products::showprod($productbuy_id)]);

    }
    //for use all categori
    public function addproducts()
    {
        //RETORNAMOS A LA VISTA ADDPRODUCTS
        return view('adminComponent.addproducts',["category" => Category::index()]);
    }
}