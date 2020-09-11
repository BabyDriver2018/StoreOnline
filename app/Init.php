<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;

class Init extends Model
{
    //
    public static function index(){
        $stockProd = Products::all()->where('stock','<=',5);
        if(empty($stockProd)){
            //cuando no esta vacio
            dd("no vacio");
        }
        else{
            //cuando esta vacio
            dd($stockProd);
        }
        return ;
    }
}
