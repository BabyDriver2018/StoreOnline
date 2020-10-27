<?php

namespace App\Http\Controllers;

use App\Models\Init;
use App\Models\Products;
use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
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
        return view('adminComponent.register',['allregister'=>Register::index()],['message_of_prod_stock'=>Init::index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSelect(Request $request)
    {
        //Buscar Todos los registro que tenga la fecha del mes
        
        return view('adminComponent.register',['allregister'=>Register::registermonth($request)]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$product_id,$idcategory)
    {
        
        return view('clientComponent.client',[Register::addregister($request,$product_id,$idcategory)]);
    }

}
