<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Support\Facades\DB;
use App\Init;
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
    public function index(Request $request){   
        //retorna los productos,categorias,y un mensaje para la notificacion de cantidad de produtos
        //dd("test");
        return view('adminComponent.products',
                ['allprod'=>Products::index($request)],
                ['message_of_prod_stock'=>Init::index()]
                );
    }
    //comming of views addproducts
    public function store(Request $request){
        //dd($request->name);
        //buscamos si existe el mismo nombre de un producto en la bd actual
        $validarname = DB::table('products')->where('name','=',$request->name)->get();

        //si existe un nombre igual, entra y envia un mensaje eliminando los datos previamente ingresados
        if(count($validarname)){
            //dd($validarname);
            return view ('adminComponent.addproducts',['message_of_prod_stock'=> 'El nombre ya existe!'],['category'=>Category::index()]);
        }
        
        //si no existe, entra aca y agrega el producto
        else{
            //dd("el producto se agregara");
            return view ('adminComponent.index',['message'=> Products::addProd($request)]);
        }
    }

    //Methos for Update prod
    public function updateProd(Request $request){
        //dd($request);
        return view ('adminComponent.index',[ 'message'=>Products::updateProd($request)]);
    }

    public function delete($id){
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

}
