<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model

{   protected $primaryKey = "genre_id";
    protected $fillable = ['genre'];



    public function media() {
      return $this->hasMany('App\Media', 'genre', 'genre');
    }



}
