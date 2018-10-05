<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $primaryKey = 'isbn';

    // creating pivot table "mediaPerReviews"
    public function reviews() {
        return $this->belongsToMany('App\Review', 'mediaPerReviews', 'media', 'review');
    }

    public function genre() {
        return $this->belongsTo('App\Genre', 'genre', 'genreID');
    }
}
