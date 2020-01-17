<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'make',
        'model',
        'year',
        'color',
        'description',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function reservations() {
        return $this->hasMany('App\Reservation');
    }
}
