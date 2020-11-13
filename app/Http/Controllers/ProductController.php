<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Init;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function buscador(Request $request){
        //dd(Product::buscador($request->name));
        $allprod = Product::buscador($request->name);
        //dd($allprod);
        return view('/adminComponent.product',compact('allprod')); 
    }

    public function store(Request $request){
        //dd($request->name);
        //buscamos si existe el mismo nombre de un producto en la bd actual
        $validarname = DB::table('products')->where('name','=',$request->name)->get();

        //si existe un nombre igual, entra y envia un mensaje eliminando los datos previamente ingresados
        if(count($validarname)){
            //dd($validarname);
            return redirect ('/home',['message_of_prod_stock'=> 'El nombre ya existe!']);
        }
        
        //si no existe, entra aca y agrega el producto
        else{
            //dd("el producto se agregara");
            Product::addProd($request);
            return redirect ('/home');
        }
    }

    public function updateProd(Request $request){
        //dd($request);
        Product::updateProd($request);
        return redirect ('/home');
    }

    public function delete($id){
        //
        //dd($id);
        Product::deleteProd($id);
        return redirect ('/home');
    }

    public function show($id){
        //dd($id);
        return view('adminComponent.edit',['oneprod'=>Product::show($id)],['message'=>Init::index()]);

    }

    public function showProd($productbuy_id){

        return view('clientComponent.buyclient',['product'=>Product::showprod($productbuy_id)]);

    }
    public function viewimg($id){
        //dd($imgprod);
        return view('adminComponent.viewimg',['imgprod'=>Product::viewimg($id)]);
    }
}
