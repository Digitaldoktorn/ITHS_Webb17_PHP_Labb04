<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
<<<<<<< HEAD
  protected $primaryKey = "ID";
  public $timestamps = false;
  protected $fillable = [
   'name', 'title'
  ];
=======
    // creating pivot table "mediaPerReviews"
    public function media() {
        return $this->belongsToMany('App\Review', 'mediaPerReviews', 'media', 'review');
    }


>>>>>>> e2df9ef4b1877ee832212b06da8eadd6712bb6d0
}
