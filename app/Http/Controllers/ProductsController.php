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

    
    public function updateProd(Request $request)
    {
        //dd($request);
        return view ('adminComponent.index',[ 'message'=>Products::updateProd($request)]);
    }

    public function delete($id)
    {
        //
        //dd($id);
        return view ('adminComponent.index',[ 'message'=>Products::deleteProd($id)]);
    }

    
    public function show($id){
        //dd($id);
        return view('prodEditComponent.edit',['oneprod'=>Products::show($id)]);
    }

    public function showProd($productbuy_id){
        
        return view('clientComponent.buyclient',['product'=>Products::showprod($productbuy_id)]);

    }
    //for use all categori
    public function addproductsindex()
    {
        //RETORNAMOS A LA VISTA ADDPRODUCTS
        return view('adminComponent.addproducts',["category" => Category::index()]);
    }

}
