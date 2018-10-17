<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Categories';//use categories table when Working with this model
    public function genres()
  {  
    return $this->hasMany('App\genre'); //connecting to the genres model knowing its associated with categories id
  }


}

