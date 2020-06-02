<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\flight;
class flightController extends Controller
{
    public function flight()
    {
        $data['flights']=flight::select('id','to_country','take_off_date','take_off_time','land_date','land_time','vip_cost','normal_cost','img')
       ->orderBy('id','desc')
       ->Paginate(6);
        #dd($data['flights']);
        return view('front/flight')->with($data);
    }

    
}
