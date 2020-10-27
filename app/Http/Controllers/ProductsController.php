<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\DB;
use App\Models\Init;
use App\Models\Category;

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
        return view('adminComponent.index',
                ['allprod'=>Products::index($request->name)],
                ['category'=>Category::index()]
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
            return redirect ('/home',['message_of_prod_stock'=> 'El nombre ya existe!']);
        }
        
        //si no existe, entra aca y agrega el producto
        else{
            //dd("el producto se agregara");
            Products::addProd($request);
            return redirect ('/home');
        }
    }

    //Methos for Update prod
    public function updateProd(Request $request){
        //dd($request);
        Products::updateProd($request);
        return redirect ('/home');
    }

    public function delete($id){
        //
        //dd($id);
        Products::deleteProd($id);
        return redirect ('/home');
    }


    public function show($id){
        //dd($id);
        return view('adminComponent.edit',['oneprod'=>Products::show($id)]);

    }

    public function showProd($productbuy_id){

        return view('clientComponent.buyclient',['product'=>Products::showprod($productbuy_id)]);

    }
    public function viewimg($id){
        //dd($imgprod);
        return view('adminComponent.viewimg',['imgprod'=>Products::viewimg($id)]);
    }
    
}
