<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  protected $primaryKey = "review_id";
  public $timestamps = false;
  protected $fillable = [
   'user_name', 'title', 'review'
  ];


  public function media() {
    return $this->hasOne('App\Media', 'title', 'title');
  }

}
