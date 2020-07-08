<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';

    protected $fillable = [
        'text','passware','time_destroy','views_destroy'
    ];

    protected $dates = [
        'time_destroy'
    ];
}
