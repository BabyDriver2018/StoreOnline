<?php

namespace App\Models;
use App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    public static function index(){
        $allprod=Product::all();
        return $allprod;
    }
     //Method for see producto test buy client
     public static function showprod($productbuy_id){
        $product=Product::findOrFail($productbuy_id);
        return $product;
    }
}
