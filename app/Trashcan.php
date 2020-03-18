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

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'last_collection_time',
    ];
}
