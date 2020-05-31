<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seat extends Model
{ protected $guarded = ['id'];
    protected $fillable = [
        'type' , 'seatnum' ,'seatcost','flight_id' 
       ];
   
   

    public function flights()
    {
        return $this->belongsTo('App\seat');
    }

    
    public function useflis()
    {
        return $this->belongsTo('App\usefli');
    }
}
