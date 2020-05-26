<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Users;
class RegisterController extends Controller
{
    public function register(Request $request)
	{

    	$name = $request->input('name');
		$password = $request->input('password');
		$email = $request->input('email'); 
		$data = Users::where('email', $email)->first();
		if($data)
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
						$user = new Users([
							'name' => $name,
							'email' => $email,
							'password' => $password,
						  ]);
						  $user->save();
					}
		}			
	}
	public function showregester()
	{
		return view('form');
	}
	 
}
