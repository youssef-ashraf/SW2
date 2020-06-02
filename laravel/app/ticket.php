<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $fillable = [
        'user_id' , 'seat_id' , 'flight_id' , 'from_country' , 'to_country' ,'take_off_date','take_off_time' ,'land_date','land_time', 'cost' , 'seat_type','seat_num'
       ];
}
