<?php

namespace App\Http\Controllers;

use App\Init;
use Illuminate\Http\Request;

class InitController extends Controller
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
        return view('adminComponent.index',['message'=>Init::index()]);
    }

    
}
