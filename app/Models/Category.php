<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //use HasFactory;
    protected $table = 'Categories'; //Para indicarle la tabal que va a usar el modelo


    //Indica una relación de uno a muchos. Una categoria puede estar asignada a muchos posts.
    public function posts() {
        return $this->hasMany('App\Models\Post', 'Category_ID', 'Category_ID');  //Llave foranea y la otra llave foranea
    }



}
