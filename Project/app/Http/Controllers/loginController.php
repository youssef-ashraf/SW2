<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function showlogin()
	{
		return view('login');
	}
	public function login(Request $request)
	{
		$email = $request->input('email');
		$password = $request->input('password');
		
		$data = db::select('select id from fli_use where email=? and password=?',[$email,$password]);
        if(count($data))
        {
           echo "you have logged in successful";
        }
        else
        {
        	echo "try again";
        }
	}
}
