@extends('front.layout')

@section('styles')

<link rel="stylesheet" href="{{asset('front/login')}}/login.css">
@endsection

@section('content')
<main>


<form id="msform" action="{{route('front.register')}}" method="post" >
 
{{ csrf_field() }}
    <h2 class="fs-title">Registeration</h2>
    <input type="text" name="name" class="input-field" placeholder="User Name" required>
    <input type="email" name="email"class="input-field" placeholder="Email " required>
    <input type="password" name="password"class="input-field" placeholder="Pass" required>
	<input type="submit" class="next action-button" value="register"> 
  
</main>
@endsection