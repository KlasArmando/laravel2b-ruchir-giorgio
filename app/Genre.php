<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table;
    protected $fillable = [
        'name', 'popularity',
    ];
}
