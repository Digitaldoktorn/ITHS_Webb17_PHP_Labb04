<?php
<<<<<<< HEAD

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model

{   protected $primaryKey = "id";
    protected $fillable = ['genre'];
}
=======
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
>>>>>>> e2df9ef4b1877ee832212b06da8eadd6712bb6d0
