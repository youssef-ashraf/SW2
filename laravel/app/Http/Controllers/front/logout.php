<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\flight;
class logout extends Controller
{
    public function log_out()
    { $dataa['flights']=flight::select('id','to_country','take_off_date','take_off_time','land_date','land_time','vip_cost','normal_cost','img')
        ->orderBy('id','desc')
            	->take(3)
          		->get();
        return view('front/index')->with($dataa);
    }
}
