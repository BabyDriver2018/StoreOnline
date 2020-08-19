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
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addproducts()
    {
        //RETORNAMOS A LA VISTA ADDPRODUCTS
        return view('adminComponent.addproducts',["category" => Category::index()]);
    }

    public function store(Request $request){
        
        return view ('adminComponent.products',['allprod'=> Products::addProd($request)]);
    }
    
}
