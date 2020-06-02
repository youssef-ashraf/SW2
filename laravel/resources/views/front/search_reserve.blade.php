@extends('front.layout')
@section('styles')
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
@endsection