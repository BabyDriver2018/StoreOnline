<?php

namespace App\Http\Controllers;

use App\Products;
use App\Category;
use App\Init;

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
        //retorna los productos,categorias,y un mensaje para la notificacion de cantidad de produtos
        return view('adminComponent.products',
                ['allprod'=>Products::index()],
                ['message_of_prod_stock'=>Init::index()]
                );
    }

    //comming of views addproducts
    public function store(Request $request){
        return view ('adminComponent.index',['message'=> Products::addProd($request)]);
    }

    //Methos for Update prod
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

}
