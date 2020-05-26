<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seat extends Model
{
    protected $fillable = [
        'seat_type'
   ];

    public function flight()
    {
        return $this->belongsTo('App\Flight');
    }
}
