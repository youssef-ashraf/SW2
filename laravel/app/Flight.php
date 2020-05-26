<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
       'from_country' , 'to_country' , 'start_time' , 'end_time' , 'cost' , 'seat_num' , 'Vip' , 'Normal'
   ];
   protected $table = 'flight';
}
