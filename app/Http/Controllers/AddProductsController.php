<?php

namespace App\Http\Controllers;

use App\Category;
use App\Products;

use Illuminate\Http\Request;

class AddProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addproducts()
    {
        //RETORNAMOS A LA VISTA ADDPRODUCTS
        return view('addproducts',["category" => Category::index()]);
    }

    public function store(Request $request){
        
        return view ('products',['allprod'=> Products::addProd($request)]);
    }
    
}
