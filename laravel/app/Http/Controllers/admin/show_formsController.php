<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\flight;
use App\ticket;
use App\usefli;
class show_formsController extends Controller
{
    public function showpage()
    {
        $data['flights']=flight::select('id','to_country','take_off_date','take_off_time','land_date','land_time','vip_cost','normal_cost','img')
        ->orderBy('id','desc')
        ->take(1)
        ->get();
        return view('admin/control')->with($data);
    }
    public function showaddflight()
    {
        return view('admin/addflight');
    }
    public function showdeleteflight()
    {
        $data['flights']=flight::all();
        return view('admin/deleteflight')->with($data);
    }
 
    public function showadduser()
    {
        return view('admin/adduser');
    }
    public function showaddticket()
    {
        return view('front/search_reserve');
    }
    public function showdeleteuser()
    {
        $data['users']=usefli::all();
  
        return view('admin/deleteuser')->with($data);
    }
 
    public function showupdatepassword()
    {
        return view('admin/update_password');
    }

    public function showdeleteticket()
    {
        $data['tickets']=ticket::all();
        return view('admin/deleteticket')->with($data);
    }
}

