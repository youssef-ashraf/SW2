<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tickets;
use App\Flight;
use Illuminate\Support\Facades\DB;
class AddTickets extends Controller
{
      //view the reservation form to user 
      public function show()
      {
         
         $flights = Flight::all();
          return view('addTicket')->with(['flights'=> $flights]);;
          
      }
      //store the get data from user in ticket database
      public function store(Request $request) 
      {
          
          //get flight number from user
          $selectValue = $request->input('flight');
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
          
          $user_id = DB::table('Users')
          ->where('email',$email )
          ->where('password',$password)
          ->first();
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
                 $flight_info = DB::table('flight')->where('id', $selectValue)->first();
                 //retrive all seat in the flight from table flight_seat
                  $seat_ids =  DB::table('seat')->where('flight_id', $selectValue)
                  ->where('seat_type', $selectType)->pluck('id');
                  //choose random seat from seats    
                   $randomseat = rand(0, count($seat_ids));
                   $seat_num = $seat_ids[$randomseat];
                   $ticket_id = db::select('select id from tickets where flight_id=? and seat_id=?',[$selectValue,$seat_num]);
                   while($ticket_id)
                   {
                      $seat_num = $seat_info[$randomseat];
                      $ticket_id = db::select('select id from tickets where flight_id=? and seat_id=?',[$selectValue,$seat_num]);
                   } 
                    $ticket = new Tickets([
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
                   
            
                  }
          }
      }
      
     
  
}
