<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usefil extends Model
{
    protected $guarded = ['id'];
    protected $hidden = ['password'];


    public function seats()
    {
        return $this->belongsTo('App\seat');
    }

}
