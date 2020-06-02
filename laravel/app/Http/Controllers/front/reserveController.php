<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ticket;
use App\flight;
use App\usefli;
use App\seat;
use Illuminate\Support\Facades\DB;
class reserveController extends Controller
{
  
      //view the reservation form to user 
      public function showForm()
      {
         
        return view('front/search_reserve');
          
      }
      //store the get data from user in ticket database
      public function Reserve(Request $request) 
      {
          
          //get flight number from user
          $selectValue = $request->input('flight_id');
          //get seat type from user
          $selectType = $request->input('seat');
          //get the password from user
          $password = $request->input('password');
          //get the email from user
          $email = $request->input('email');
          //get visa number from user
          $visa_num = $request->input('visa_num');  
          //get visa password from user
          $visa_pass = $request->input('visa_pass');
          //sure is the password and email is valid or not
          
          $user_id = usefli::where('email',$email )
          ->where('password',$password)
          ->value('id');
          if(!$user_id)
          {
              echo "password and email not valid";
              return back();
          }
          else
          {
              if(strlen( $visa_num)!=16)
              {
                  echo "password and visa number not valid";
                  return back();
              }
              else
              {
                  //retrive all flight information from flight table
                  $flight_info = flight::where('id', $selectValue)->first();
                  $state='on';
                  $seat_info = seat::where('flight_id', $selectValue)
                      ->where('type',$selectType)
                      ->where('seatstate',$state)
                      ->first();
                      
                      $newstate='off';
                      $s_id=$seat_info->id;
                 $affectedRows = seat::where('id',$s_id)->update(array('seatstate' => $newstate));
                    $ticket = new ticket([
                      'user_id'  => $user_id,
                      'seat_id'  => $s_id,
                      'flight_id'  => $selectValue,
                      'from_country'  => $flight_info->from_country ,
                      'to_country'  => $flight_info->to_country ,
                      'take_off_date' => $flight_info->take_off_date,
                      'take_off_time' => $flight_info->take_off_time,
                      'land_date' =>  $flight_info->land_date,
                      'land_time' =>  $flight_info->land_time,
                      'cost'  =>$seat_info->seatcost,
                      'seat_type' => $selectType ,
                      'seat_num' => $seat_info->seatnum ,
                    ]);
                    $ticket->save();
                        return view('front/ticket',compact('ticket'));
            
                  }
          }
      }
      
     
}
