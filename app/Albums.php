<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    protected $table = "albums";

    protected $fillable = [
        'title', 'artist', 'description', 'album_art',
    ];

    public function artistRelation() {
        return $this->belongsTo('App\artists');
    }
}
