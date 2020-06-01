<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\flight;
class searchflightController extends Controller
{
    public function searchflight(Request $request)
	{
		$to = $request->input('to_country');
        $dataa['flights']=flight::where('to_country',$to)
		->orderBy('id','desc')
		->take(6)
		->get();
		return view('front/search_flight')->with($dataa);
			
}


public function reservesearchflight(Request $request)
{
	$to = $request->input('to_country');
	$dataa['flights']=flight::where('to_country',$to)
	->orderBy('id','desc')
	->get();
	return view('front/reservation')->with($dataa);
		
}

}