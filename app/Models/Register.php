<?php

namespace App\Models;
use Carbon\Carbon;
use App\Models\Products;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'registers';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name', 'price','genero', 'cantidad','total','totalventa','idproduct','idcategory'];
    public $timestamps=false;

    public static function index(){
        $allregister = Register::all();
        
        return $allregister;
    }

    public static function addregister($request,$product_id,$idcategory){
        //encontramos el producto
        //dd($idcategory);
        $newproduct = Products::find($product_id);
        //validamos q haya stock, aunq previamente en el html se haya hecho eso
        if($newproduct->stock >= $request->input('cantidad')){
            //se reduce el stock
            $newproduct->stock = $newproduct->stock - $request->input('cantidad');
            //se guardan los cambios
            $newproduct->save();
            $newregister = new Register();
            $newregister->name =$newproduct['name'];
            $newregister->price =$newproduct['price'];
            $newregister->count =$request->input('cantidad');
            $newregister->total =($newproduct['price'])*($request->input('cantidad'));
            
            // calculamos las ventas totales
            $last = Register::all()->last();
            //dd($last);
            if($last){
                //dd("vXX");
                $newregister->totalventa =  $last->totalventa + $newregister->total ;
            }
            else{
                //dd("YYY");
                $last=0;
                $newregister->totalventa =  $last + $newregister->total ;
            }
            //dd($last->totalventa);
            $newregister->idproduct = $product_id;
            $newregister->idcategory = $idcategory;
                $month = Carbon::now();
                $month = $month->format('m');
                $year = Carbon::now();
                $year = $year->format('Y');
                $day = Carbon::now();
                $day = $day->format('d');
            $newregister->day = $day;
            $newregister->month = $month;
            $newregister->year = $year;

            $newregister->save();
            return "Se registro la compra con exito!";
        }
        else {
            return "Algo anda mal!!";
        }

    }
    public static function registermonth($request){

        $newregister = Register::all()->where('month',$request->month)->where('year',$request->year);
        //dd($newregister);

        return $newregister;
    }
}
