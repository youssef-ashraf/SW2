<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\flight;
class homeController extends Controller
{
    public function index()
    {
        $data['flights']=flight::select('id','to_country','take_off_date','take_off_time','land_date','land_time','vip_cost','normal_cost','img')
       ->orderBy('id','desc')
       ->take(3)
       ->get();
        #dd($data['flights']);
        return view('front/index')->with($data);
    }
    
}
