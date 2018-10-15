<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
<<<<<<< HEAD
{
    public function category()
    {
         return $this->belongsTo('App\Category');
    }

=======

{   protected $primaryKey = "genre_id";
    protected $fillable = ['genre'];



    public function media() {
      return $this->hasMany('App\Media', 'genre', 'genre');
    }


    /*public function movies() {
      return $this->hasMany('App\Movie', 'category', 'categoryID');
    }*/
>>>>>>> 31dfa1dbe1f5e0358f6780f6a906190c31a8c73e
}
