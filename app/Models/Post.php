<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 //   use HasFactory;

    protected $table = 'Posts';

    //Relación de muchos a unos. Muchos post pueden ser creados por un usuario

    public function User () {
        return $this->belongsTo('App\Models\User', 'User_ID', 'User_ID');  //Llave foranea y la otra llave foranea
    }

    public function Category () {
        return $this->belongsTo('App\Models\Category', 'Category_ID' ,'Category_ID'); //Llave foranea y la otra llave foranea
    }

}
