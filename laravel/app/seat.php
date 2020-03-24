<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seat extends Model
{
    public function flight()
    {
        return $this->belongsTo('App\Flight');
    }
}
