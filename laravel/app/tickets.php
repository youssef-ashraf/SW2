<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    protected $fillable = [
        'user_id' , 'seat_id', 'flight_id','from_country','to_country','start_time','end_time','cost','seat_type'
   ];
   
}
