<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // creating pivot table "mediaPerReviews"
    public function media() {
        return $this->belongsToMany('App\Review', 'mediaPerReviews', 'media', 'review');
    }


}
