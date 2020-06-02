<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\usefli;
use App\flight;
use Illuminate\Support\Facades\DB;
class loginController extends Controller
{
    public function showForm()
    {
        return view('front/login');
    }

    public function login(Request $request)
	{
		$email = $request->input('email');
        $password = $request->input('pass');
		$data = usefli::where('email', $email)->where('password',$password)->value('lock') ;
			if($data==0)
			{
			
			return view('front/search_reserve');
			}
			else if($data==1)
			{ $dataa['flights']=flight::select('id','to_country','take_off_date','take_off_time','land_date','land_time','vip_cost','normal_cost','img')
				->orderBy('id','desc')
            	->take(1)
          		->get();
				return view('admin/control')->with($dataa);
		
			}
		else
		{
			return view('front/login');
		}
			
	}	  
}
