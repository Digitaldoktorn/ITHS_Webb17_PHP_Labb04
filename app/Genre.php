<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Media;
class Genre extends Model
    {
        protected $table = "genre";
        protected $primaryKey = "genreID";
        public function media() {
            return $this->hasMany('App\Media', 'genre', 'genreID');
        }
    }