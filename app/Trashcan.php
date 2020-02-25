<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trashcan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fill_level', 'longitude', 'latitude'
    ];
}
