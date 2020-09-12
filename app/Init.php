<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;

class Init extends Model
{
    //
    public static function index(){
        //buscamos los productos q tienen menores a 5
        $stockProdinAlmacen = Products::all()->where('stock','<=',5);
        if(!empty($stockProdinAlmacen)){
            //cuando no esta vaci
            //dd($stockProdinAlmacen);
            return 'Productos Agotandose menos de 5!';
        }
        else{
            //cuando esta vacio
            //dd($stockProdinAlmacen);
            return 'Por el momento todo esta en orden!';
        }
        
    }
}