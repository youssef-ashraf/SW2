<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\flight;
use App\seat;
use Image;
class FlightController extends Controller
{
    public function addflight(Request $request)
	{

    	$from = $request->input('from');
		$to = $request->input('to');
        $off_date = $request->input('off_date'); 
        $off_time = $request->input('off_time'); 
        $land_date = $request->input('land_date');
        $land_time = $request->input('land_time');
        $vip_cost = $request->input('v_cost');
        $vip_num = $request->input('v_num');
        $normal_cost= $request->input('n_cost');
        $normal_num= $request->input('n_num');
        $data=$request->validate([
            'img'=>'required|image|mimes:jpg,jpeg,png'
        ]);
        //dd($data);
        $new_name=$data['img']->hashName();
        Image::make($data['img'])->resize(324,327)->save(public_path('uploads/flight/'.$new_name));  
        $flight = new flight([
            'from_country'  =>$from ,
            'to_country'  => $to ,
            'take_off_date' => $off_date,
            'take_off_time' => $off_time,
            'land_date' =>  $land_date,
            'land_time' =>  $land_time,
            'seat_vip_num'  =>$vip_num,
            'vip_cost' => $vip_cost,
            'seat_normal_num' => $normal_num ,
            'normal_cost' => $normal_cost ,
            'img' => $new_name ,
          ]);
          $flight->save();
        $id=flight::where('to_country',$to)->where('take_off_date',$off_date)->orderBy('id','desc')->value('id');
        if($id)
        {
        for($i=1;$i<=$vip_num;$i++ )
        {
            $type='vip';
            $flight_id=$id;
            $cost=$vip_cost;
            $seat = new seat([
                'type'  =>$type ,
                'seatnum'  => $i ,
                'seatcost' => $cost,
                'flight_id' => $id
              ]);
              $seat->save();
        }
        for($i=$vip_num;$i<=$normal_num+$vip_num;$i++ )
        {
            $type='normal';
            $flight_id=$id;
            $cost=$normal_cost;
            $seat = new seat([
                'type'  =>$type ,
                'seatnum'  => $i ,
                'seatcost' => $cost,
                'flight_id' => $id
              ]);
              $seat->save();
        }
       
        return view('admin/addflight');
        }
        else
        {
            echo"your flight wasn't added";
            return view('admin/addflight');
        }
    }


    public function deleteflight($id)
    {
        $deleteflight = flight::where('id', $id)->delete();
        $data['flights']=flight::all();
        return view('admin/deleteflight')->with($data);
    }

    public function viewallflight()
    {
        $data['flights']=flight::orderBy('id','desc')->get();
         #dd($data['flights']);
         return view('admin/viewflight')->with($data);
    
    }


}

