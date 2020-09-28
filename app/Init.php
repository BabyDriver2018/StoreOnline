<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;

class Init extends Model
{
    //
    public static function index(){
        //buscamos los productos q tienen menores a 5
        //dd("mes");
        $stock_Prod_in_Almacen = Products::all()->where('stock','<=',5);
        //se condiciona la cantidad de productos
        if(count($stock_Prod_in_Almacen)){
            //si hay productos menores a 5
            return 'Productos Agotandose menos de 5!';
        }
        else{
            //cuando esta vacio
            return '';
        }
        
    }
}