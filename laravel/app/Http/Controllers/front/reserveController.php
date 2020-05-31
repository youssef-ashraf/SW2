<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ticket;
use App\Flight;
use Illuminate\Support\Facades\DB;
class AddTickets extends Controller
{
      //view the reservation form to user 
      public function showForm()
      {
         
        return view('front/login');
          
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
          
          $user_id = DB::table('useflis')
          ->where('email',$email )
          ->where('password',$password)
          ->value('id');
          if(!$user_id)
          {
              echo "password and email not valid";
          }
          else
          {
              if(strlen( $visa_num)!=16)
              {
                  echo "password and visa number not valid";
              }
              else
              {
                  //retrive all flight information from flight table
                  $flight_info = DB::table('flights')->where('id', $selectValue)->first();
                  $state='on';
                  $seat_info = DB::table('seats')
                     ->where('flight_id', $selectValue)
                      ->where('type',$selectType)
                      ->where('seatstate',$state)
                      ->first();
                      $newstate='off';
                      $s_id=$seat_info->id;
                 $affectedRows = DB::table('seats')->where('id',$s_id)->update(array('seatstate' => $newstate));
                    $ticket = new Ticket([
                      'user_id'  => $user_id->id,
                      'seat_id'  => $seat_num,
                      'flight_id'  => $selectValue,
                      'from_country'  => $flight_info->from_country ,
                      'to_country'  => $flight_info->to_country ,
                      'start_time' => $flight_info->start_time,
                      'end_time' =>  $flight_info->end_time,
                      'cost'  =>$flight_info->cost,
                      'seat_type' => $selectType ,
                    ]);
                    $ticket->save();
                        return view('front/ticket',compact('ticket'));
            
                  }
          }
      }
      
     
  
}
