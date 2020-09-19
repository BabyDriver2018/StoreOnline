<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $timestamps=false;
    public $table = "category";
    protected $primaryKey = 'id';
    protected $fillable = ['id','name'];

    public static function index(){
        $category = Category::all();
        //dd($category);
        return $category;
    }
    
    public function products()
    {
        //RELACION DE UNO A MUCHOS; UNA CATEGORIA TIENE MUCHOS PRODUCTOS
        return $this->hasMany('App\Products');
    }

}
