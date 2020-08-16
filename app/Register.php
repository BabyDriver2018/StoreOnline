<?php

namespace App;

use App\Products;
use App\Category;
use App\Register;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'registers';
    protected $primaryKey = 'id';
    public $timestamps=false;
    protected $fillable = ['id', 'name', 'price','genero', 'cantidad','total','idproduct','idcategory'];

    public static function index(){
        dd(Category::all());
    }
    
}
