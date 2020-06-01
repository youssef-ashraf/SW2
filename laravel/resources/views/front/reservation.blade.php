@extends('front.layout')
@section('styles')

<link rel="stylesheet" href="{{asset('front/css')}}/form.css">

    <style>
    .button {
  position: relative;
  background-color: #FFE033;
  border-radius: 4px;
  border: none;
  font-size: 28px;
  color: #FFFFFF;
  padding: 20px;
  width: 200px;
  text-align: center;
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
  height: 80px;
}

.button:after {
  content: "";
  background: #f1f1f1;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px !important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}
     </style>   
@endsection
@section('content')
 <!-- slider Area Start-->

 <div class="slider-area ">

            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider hero-overly  slider-height d-flex align-items-center" data-background="{{asset('front/img')}}/hero/flights.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="hero__caption">
                                    <h1>Find your <span>Next tour!</span> </h1>
                                    <p>Where would you like to go?</p>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- form -->
                                <form action="{{route('front.reservesearch')}}"method="post" class="search-box">
                                {{ csrf_field() }}
                                    <div class="input-form mb-30">
                                        <input type="text" placeholder="Where Would you like to go ?" name="to_country">
                                    </div>
                                    <div class="search-form mb-30">  
                                        <button type="supmit" class="button" >Search</button>                    
                                    </div>	
                                </form>	
                            </div>
                        </div>
                    </div>
                </div>



            </div>


                

 </div>
 <div class="row">
    <div class="col-xl-12">
        <div class="hero-cap text-center">
            <h2 tyle="color:black;">RESERVATION</h2>
        </div>
    </div>
</div>
          		<!-- start add form -->
 <div class="container">
  <form  action="{{route('front.save_ticket')}}" method="post">
  <table border = 1>
         <tr>
         <th>ID</th>

        <th>From Country</th>
        <th>To Country</th>
        <th>Take Off Date</th>
        <th>Take Off Time</th>
        <th>Land Date</th> 
        <th>Land Time</th>

        <th>Vip Number</th>
        <th>Vip Cost</th>
      <th>Normal Number</th>
        <th>Normal Cost</th> 
         </tr>
         @foreach ($flights as $f)
         <tr>
         
            <td><input type="radio" name="flight_id" value="{{$f->id}}"> {{$f->id}}</td>
                      <td>{{$f->from_country}}</td>
                      <td>{{$f->to_country}}</td>
                      <td>{{$f->take_off_date}}</td>
            <td>{{$f->take_off_time}}</td>
            <td>{{$f->land_date}}</td>
                      <td>{{$f->land_time}}</td>
                    
                     
                      <td>{{$f->seat_vip_num}}</td>
            <td>{{$f->vip_cost}}</td>
            <td>{{$f->seat_normal_num}}</td>
                      <td>{{$f->normal_cost}}</td>
         </tr>
         @endforeach
      </table>
    {{csrf_field()}}
    <label for="pass">Password</label>
    <input type="text" id="password" name="password" placeholder="Your PASSWORD...">
    <label for="email">e-mail</label>
    <input type="text" id="email" name="email" placeholder="Your E-MAIL...">
    <label for="lname">Visa Number</label>
    <input type="text" id="visa_num" name="visa_num" placeholder="Your VISA NUMBER(should be 16 number)..">
    <label for="lname">Visa password</label>
    <input type="text" id="visa_pass" name="visa_pass" placeholder="Your VISA PASSWORD..">
    <label for="seat" >choose seat</label>
    <br>
    <select id="seat" name="seat">
      <option value="">--select seat type -- </option>  
      <option value="Normal">normal</option>
      <option value="Vip">vip</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Submit"> 
  </form>
</div>
		<!-- end add form -->
     


@endsection