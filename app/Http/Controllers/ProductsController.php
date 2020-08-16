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
    public function products()
    {
        //
        return view('products',['allprod'=>Products::index()],['allcategory'=>Products::indexcategory()]);
    }
    public function addproducts()
    {
        //RETORNAMOS A LA VISTA ADDPRODUCTS
        return view('addproducts',["category" => Category::index()]);
    }

    public function store(Request $request){
        
        return view ('index',[ Products::addProd($request)]);
    }
    public function delete($product_id){
        
        //dd(Products::find($product_id));
        return view ('index',[ 'message'=>Products::deleteProd($product_id)]);
    }

    
}
