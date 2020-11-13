<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Init;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
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
                 ['allprod'=>Client::index()],
                 );

        return view('adminComponent.index',['message'=>Init::index()]);
    }
    
}
