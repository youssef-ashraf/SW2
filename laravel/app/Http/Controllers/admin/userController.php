<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\usefli;
use App\flight;

class userController extends Controller
{
    public function adduser(Request $request)
	{

    	$name = $request->input('name');
		$email = $request->input('email'); 
		$password = $request->input('pass');
		$data['user']= usefli::where('email', $email)->value('email');
		if($data==$email)
		{
            echo "the user is already registered ";
			return back();
		}
		else
		{
			DB::insert('insert into useflis (id,name,email,password) values(?,?,?,?)',[null,$name,$email,$password]);

			return view('admin/adduser');
		}
	}
    
	public function deleteuser($id)
    {
        $deleteuser = usefli::where('id', $id)->delete();
        $data['users']=usefli::all();
        return view('admin/deleteuser')->with($data);
    
    }
    public function viewalluser()
    {
        $data['useflis']=usefli::orderBy('id','desc')->get();
         return view('admin/viewuser')->with($data);
    
	}


	public function updatepassword(Request $request)
	{
		$email = $request->input('email');
		$oldpass = $request->input('oldpass');
		$newpass = $request->input('newpass');
		$affectedRows = usefli::where('email',$email)->where('password',$oldpass)->update(array('password' => $newpass));
		$dataa['flights']=flight::select('id','to_country','take_off_date','take_off_time','land_date','land_time','vip_cost','normal_cost','img')
				->orderBy('id','desc')
            	->take(1)
          		->get();
				return view('admin/control')->with($dataa);
		


			
	}	  
	
	
}
