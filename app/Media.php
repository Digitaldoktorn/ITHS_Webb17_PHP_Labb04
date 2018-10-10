<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Media extends Model
{
    protected $primaryKey = "ID";
    public $timestamps = false;
    protected $fillable = [
    'ISBN', 'author', 'title', 'genre', 'media_type'
    ];


    /*public function cat() {
      return $this->belongsTo('App\Category', 'category', 'categoryID');
    }*/

      // Actors-kopplingen works like a charm.
      /*public function reviews() {
        return $this->belongsToMany('App\Review', 'reviewPerMedia', 'review', 'media');
      }*/

    public static function getAllMedia() {
      $media = Self::all();
      $result = [
        'media' => $media
      ];
      return $result;
    }

    /*public static function mbq($first, $last) {
      $movies = DB::table('movies')
    ->whereBetween('Year', [$first, $last])
    ->orderBy('Year')
    ->get();
    $result = [
    'movies' => $movies
    ];
    return $result;
    }

    public static function insert($request) {
      $data = ['movieTitle' => 'Hets', 'Year' => 1944, 'category' => 3];
      $newID = DB::table('movies')
        ->insertGetId($data);
      return $newID;
    }*/

}
