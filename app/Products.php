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
        $allprod = Products::all();
        //dd($allProd);
        return $allprod->toarray();
    }
    public static function show($id){
        $oneprod = Products::findOrFail($id);
        //dd($oneprod->toarray());
        return $oneprod->toarray();
    }
    //Method for add products of ProductsController
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

    //Method for delete product
    public static function deleteProd($id){
        
        Products::destroy($id);
        return 'El Productos se Elimino con Exito!';
    }
    //Method for see producto test buy client
    public static function showprod($productbuy_id){
        $product=Products::findOrFail($productbuy_id);
        
        return $product->toarray();
    }

    //Method for edit product
    public static function editProd($product_id){
        //search product by id

    }
}