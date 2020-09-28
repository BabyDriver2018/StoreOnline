<?php

namespace App;
use Carbon\Carbon;
use App\Products;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'registers';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name', 'price','genero', 'cantidad','total','idproduct','idcategory'];
    public $timestamps=false;

    public static function index(){
        $allregister = Register::all();
        return $allregister->toarray();
    }
    
    public static function addregister($request,$product_id,$idcategory){
        //encontramos el producto
        //dd($idcategory);
        $newproduct = Products::find($product_id);
        //reducimos el stock
        if($newproduct->stock >= $request->input('cantidad')){
            $newregister = new Register();
            $newproduct->stock = $newproduct->stock - $request->input('cantidad');
            $newproduct->save();
            $newregister->name =$newproduct['name'];
            $newregister->price =$newproduct['price'];
            $newregister->count =$request->input('cantidad');
            $newregister->total =($newproduct['price'])*($request->input('cantidad'));
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
        
        $newregister = Register::all()->where('month','=',$request->month)->where('year','=',$request->year);
        //dd($newregister);
        return $newregister->toarray();
    }
}
