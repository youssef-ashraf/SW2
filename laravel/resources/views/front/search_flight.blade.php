@extends('front.layout')
@section('content')


<main>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('front/img')}}/hero/contact_hero.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Our Packages</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Favourite Places Start -->
        <div class="favourite-place place-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>FEATURED TOURS Packages</span>
                            <h2>Favourite Places</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                @foreach($flights as $f)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="{{asset('uploads/flight/'.$f->img)}}" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <h3>{{$f->to_country}}</h3>
                                    <li class="dolor">normal_cost:${{$f->normal_cost}}</li>
                                    <li class="dolor">vip_cost:${{$f->vip_cost}}</li>
                                      </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                    <li>off_date:<i class="far fa-clock"></i>{{$f->take_off_date}}</li>

                                        <li>off_time:<i class="far fa-clock"></i>{{$f->take_off_time}}</li>
                                        <li>land_date:<i class="far fa-clock"></i>{{$f->land_date}}</li>

                                        <li>land_time:<i class="far fa-clock"></i>{{$f->land_time}}</li>
                                    </ul>
                                </div> 
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Favourite Places End -->


    </main>

@endsection