<?php

namespace App\Http\Controllers;
use App\Models\Init;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
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
        //
        return view(Store::index(),['message_of_prod_stock'=>Init::index()]);
    }
    public function about(){
        return view('admincomponent.about');
    }

    
}
