<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    public static function index(){
        return "adminComponent.store";
    }
}
