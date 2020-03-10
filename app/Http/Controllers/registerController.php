<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
   public function register(Request $request)
	{

    	$name = $request->input('name');
		$password = $request->input('passowrd');
		$email = $request->input('email'); 
		$data=db::select('select email from fli_use where email =?',[$email]);
		if(count($data))
		{
			echo "you are already registered";
		}
		else
		{
				if(strlen($password)<8)
		             {
						echo "please enter more than 8 character in password";
					  }

				else
					{
						DB::insert('insert into fli_use (id,name,email,password) values(?,?,?,?)',[null,$name,$email,$password]);
        					echo "welcome";
					}
	}
	 
	}
	public function showregester()
	{
		return view('register');
	}
}
