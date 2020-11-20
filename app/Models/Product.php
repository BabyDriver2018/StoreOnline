<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps=false;
    protected $fillable = ['id', 'name', 'description','price', 'stock','image','idcategory'];

    public static function index(){     

        $allprod = Product::orderBy('id','DESC')->get();
        //dd($allprod);
        //dd($allprod);
        return $allprod; 

    }

    public static function buscador($name){
        
        $allprod=Product::where('id','=',$name)->orWhere('name','like',"%$name%")->take(10)->get();
        //dd($allprod);
        return $allprod ;
        
    }

    public static function updateProd($request){
        //dd($request->product);
        //buscamos el producto usando el id
        $editprod=Product::findOrFail($request->product);
        $editprod->name=$request->input('name');
        $editprod->description=$request->input('description');
        $editprod->price=$request->input('price');
        $editprod->stock=$request->input('stock');

        if($request->hasfile('image')){
            //se hace un test si todo esta correcto de la imagen
            //dd($request);
            //self::verifImage es un metodo q valida la imagen
            $editprod->image = self::verifImage($request);
            //dd($editprod->image);

        }
        else{
            $editprod->image=$editprod->image;
            //dd($editprod->image);
        }
        $editprod->idcategory=$request->input('category');
        //se guarda el producto
        $editprod->save();
        return "El producto se edito con exito!";
    }

     //show one prod
     public static function show($id){
        $oneprod = Product::findOrFail($id);
        //dd($oneprod->toarray());
        return $oneprod;
    }
    //Method for add Product of ProductController
    public static function addProd($request){
        //en este metodo se agrega el producto
        $newProd = new Product();
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
    }
    //Method for validate iamge
    public static function verifImage($request){
        $file=$request->file('image');
        //dd($file);
        $extension = $file->getClientOriginalExtension();
        
        $filename = time() . '.'.$extension;
        $file->move('uploads/Product/img',$filename);
        return $filename;
    }
    //Method for delete product
    public static function deleteProd($id){
        
        Product::destroy($id);
        
    }
    //Method for see producto test buy client
    public static function showprod($productbuy_id){
        $product=Product::findOrFail($productbuy_id);
        
        return $product->toarray();
    }
    
    public static function viewimg($id){
        $imgprod = Product::find($id);
        //dd($imgprod);
        //dd($imgprod->image);
        return $imgprod->image;
    }
    public function category(){
        //RELACION DE UNO A MUCHOS; UNA CATEGORIA TIENE MUCHOS PRODUCTOS
        return $this->belongsTo('App\Models\Category','idcategory');
    }

}
