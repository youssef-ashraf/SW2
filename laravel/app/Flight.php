<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
    protected $guarded = ['id'];


    protected $fillable = [
     'from_country' , 'to_country' ,'take_off_date','take_off_time' ,'land_date','land_time', 'seat_vip_num' ,
     'vip_cost','seat_normal_num' ,'normal_cost','img'
    ];


    public function seats()
    {
        return $this->hasMany('App\seat');
    }

}
