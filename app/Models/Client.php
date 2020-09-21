<?php

namespace App\Models;
use App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    public static function index(){
        $allprod=Products::all();
        return $allprod;
    }
     //Method for see producto test buy client
     public static function showprod($productbuy_id){
        $product=Products::findOrFail($productbuy_id);
        return $product;
    }
}
