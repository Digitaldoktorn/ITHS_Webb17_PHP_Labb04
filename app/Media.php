<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Media extends Model
{
    protected $primaryKey = "media_id";
    public $timestamps = false;
    protected $fillable = [
    'ISBN', 'author', 'title', 'genre'
    ];


    public function genre()
    {
        return $this->hasOne('App\Genre', 'genre', 'genre');
    }

      public function reviews() {
        return $this->hasMany('App\Review', 'title', 'title');
      }

}
