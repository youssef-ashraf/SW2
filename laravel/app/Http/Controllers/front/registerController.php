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
		$email = $request->input('email'); 
		$password = $request->input('pass');
		$data['user']= usefli::where('email', $email)->value('email');
		if($data==$email)
		{
            echo "you are already registered ";
            $message = "you are already registered.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			return back();
		}

		else
		{
			if($email="fci@helwan.com")
			{
			$lock=1;
			DB::insert('insert into useflis (id,name,email,password) values(?,?,?,?)',[null,$name,$email,$password]);
			$affectedRows = usefli::where('email',$email)->where('password',$password)->update(array('lock' => $lock));
            $dataa['flights']=flight::select('id','to_country','take_off_date','take_off_time','land_date','land_time','vip_cost','normal_cost','img')
        	->orderBy('id','desc')
            ->take(3)
            ->get();
			return view('admin.control')->with($dataa);
			}
			else
			{	
			return view('front/search_reserve');
		
			}

		}
	}
	 
}
