<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\usefli;
use App\flight;
class RegisterController extends Controller
{
	public function showReg()
    {
        return view('front/register');
    }
    public function register(Request $request)
	{

    	$name = $request->input('name');
		$password = $request->input('password');
		$email = $request->input('email'); 
		$data = usefli::where('email', $email)->first();
		if($data)
		{
			echo "you are already registered";
			return back();
		}
		else
		{
				
			$user = new usefli([
				'name' => $name,
				'email' => $email,
				'password' => $password
			  ]);
			  $user->save();
			if($email="fci@helwan.com")
			{
			$lock=1;
			$affectedRows = usefli::where('email',$email)->where('password',$password)->update(array('lock' => $lock));
			$dataa['flights']=flight::select('id','to_country','take_off_date','take_off_time','land_date','land_time','vip_cost','normal_cost','img')
			->orderBy('id','desc')
			->take(3)
			->get();
			return view('admin.control')->with($dataa);
			}
			else
			{	
			return view('front/index');
		
			}

		}			
	}

}
