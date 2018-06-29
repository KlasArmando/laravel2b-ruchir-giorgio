<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artists extends Model
{
    protected $table = "artists";

    public function albumRelation() {
        return $this->hasMany('App\Albums');
    }
}
