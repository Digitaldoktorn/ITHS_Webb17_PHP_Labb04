<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  protected $primaryKey = "ID";
  public $timestamps = false;
  protected $fillable = [
   'name', 'title'
  ];
}
