<?php

namespace App\Http\Controllers;

use App\Models\Client;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('clientComponent.client',['allprod'=>Client::index()]);
    }

    public function showProd($productbuy_id){
        //dd($productbuy_id);
        return view('clientComponent.buyclient',['product'=>Client::showprod($productbuy_id)]);

    }

}
