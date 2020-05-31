@extends('front.layout')
@section('styles')

<link rel="stylesheet" href="{{asset('front/css')}}/form.css">
@endsection
@section('content')

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Engoy your Flight</span>
                            <h2>Your Ticket</h2>
                        </div>
                    </div>
                </div>
<table border = 1>
         <tr>
         <th>ID</th>

        <th>From Country</th>
        <th>To Country</th>
        <th>Take Off Date</th>
        <th>Take Off Time</th>
        <th>Land Date</th> 
        <th>Land Time</th>
        <th>Seat Type</th>
        <th>Seat Number</th>
        <th>Seat Cost</th> 
         </tr>
         <tr>
         
            <td> {{$ticket->id}}</td>
                      <td>{{$ticket->from_country}}</td>
                      <td>{{$ticket->to_country}}</td>
                      <td>{{$ticket->take_off_date}}</td>
            <td>{{$ticket->take_off_time}}</td>
            <td>{{$ticket->land_date}}</td>
                      <td>{{$ticket->land_time}}</td>
                    
                     
                      <td>{{$ticket->seat_type}}</td>
            <td>{{$ticket->seat_num}}</td>
            <td>{{$ticket->cost}}</td>  
         </tr>
      </table>
@endsection