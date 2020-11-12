<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Init;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){   
        //sacamos los datos de la tabla role_user q tiene las id de la tabla role y users
        $role = DB::table('role_user')->select('id','role_id','user_id')->get();
        
        //dd($role[0]->role_id);
        //dd("sjfksj------");
        //se compara si es el administrador del sistema o  no
        //$value = Auth::user()->id == $role[0]->role_id;
        //dd($value);
        if(Auth::user()->id == $role[0]->role_id){
            //en caso q sea cierto 
            //retorna los productos,categorias,y un mensaje para la notificacion de cantidad de produtos
            return view('adminComponent.index',
            ['allprod'=>Product::index()],
            ['message'=>Init::index()]
            );     
        }
        return view('clientComponent.client',
                ['allprod'=>Product::index()],
                );

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
