<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps=false;
    protected $fillable = ['id', 'name', 'description','price', 'stock','image','idcategory'];

    public static function index(){
        $allProd = Products::all();
        //dd($allProd);
        return $allProd->toarray();
    }
    public static function indexcategory(){
        $allcategory = Category::all();
        return $allcategory->toarray();
    }
    //Method for add products
    public static function addProd($request){
        $newProd = new Products();
        $newProd->name =$request->input('name');
        $newProd->description =$request->input('description');
        $newProd->price =$request->input('price');
        $newProd->stock =$request->input('stock');
        if($request->hasfile('image')){
            //validar si existe nombre de la imagen
            $newProd->image = self::verifImage($request);
        }else {
            return $request;
            $newProd->image = '';
        }
        $newProd->idcategory = $request->input('category');
        
        $newProd->save();
        
        return 'El producto se agrego con exito!';
    }
    //Method for validate iamge
    public static function verifImage($request){
        $file=$request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.'.$extension;
        $file->move('uploads/products/img',$filename);
        return $filename;
    }

    public static function deleteProd($product_id){
        Products::destroy($product_id);
        return 'El Productos se Elimino con Exito!';
    }
}
