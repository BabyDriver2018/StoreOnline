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
    public function index()
    {
        //
        return view(Init::index());
    }

    
}
