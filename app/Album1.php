<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album1 extends Model
{

    protected $table;
    protected $fillable = [
        'title', 'artist', 'description', 'album_art', 'popularity', 'vocabulary', 'rhymes', 'similes', 'profanity'
    ];

    public function artistRelation() {
        //return $this->belongsTo('App\artists');
    }
}
