<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps=false;
    protected $fillable = ['id', 'name', 'description','price', 'stock','image','idcategory'];

    //show all productos
    public static function index($request){

        if($request->name){
            //dd("sjfksj");
            //$allprod = new Products();
            // $allprod=DB::table('products')->where('id','=',$request->name)
            //                               ->orWhere('name','like',"%$request->name%")
            //                               ->get();
            // //dd($allprod[0]->name);
            $allprod=Products::where('id','=',$request->name)->orWhere('name','like',"%$request->name%")->get();

            //dd($allprod);
            
            return $allprod;
        }
        else{
            //dd("sjfksj------");
        $allprod = Products::all();
        //var_dump($allprod);exit();
        //dd($allprod[0]->category);
        //dd($allprod);
        return $allprod;
        }
    }
    //method for update prod
    public static function updateProd($request){
        //dd($request->product);
        //find product id
        $editprod=Products::findOrFail($request->product);
        $editprod->name=$request->input('name');
        $editprod->description=$request->input('description');
        $editprod->price=$request->input('price');
        $editprod->stock=$request->input('stock');

        if($request->hasfile('image')){
            //dd($request);
            $editprod->image = self::verifImage($request);
            //dd($editprod->image);

        }
        else{
            $editprod->image=$editprod->image;
            //dd($editprod->image);
        }
        $editprod->idcategory=$request->input('category');
        $editprod->save();
        return "El producto se edito con exito!";
    }
    //show one prod
    public static function show($id){
        $oneprod = Products::findOrFail($id);
        //dd($oneprod->toarray());
        return $oneprod->toarray();
    }
    //Method for add products of ProductsController
    public static function addProd($request){
        //en este metodo se agrega el producto
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
        //dd($file);
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
    public static function viewimg($id){
        $imgprod = Products::find($id);
        //dd($imgprod);
        return $imgprod;
    }
    public function category()
    {
        //RELACION DE UNO A MUCHOS; UNA CATEGORIA TIENE MUCHOS PRODUCTOS
        return $this->belongsTo('App\Models\Category','idcategory');
    }
}