<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use SoftDeletes;

    protected $table = 'notes';

    protected $fillable = [
        'sign','text','passphrase','time_destroy','views_destroy'
    ];

    protected $dates = [
        'time_destroy'
    ];

    public function getRouteKeyName()
    {
        return 'sign';
    }
}
