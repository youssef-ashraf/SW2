<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usefli extends Model
{
    protected $guarded = ['id'];
    protected $hidden = ['password'];
    protected $fillable = [
        'name' , 'email' ,'password' 
       ];

    public function seats()
    {
        return $this->belongsTo('App\seat');
    }
}
