@extends('front.layout')
@section('styles')

<link rel="stylesheet" href="{{asset('front/login')}}/login.css">
@endsection

@section('content')
<main>
         
<form id="msform"action="{{route('front.login')}}" method="post" >
 
{{ csrf_field() }}
 
   <h2 class="fs-title">Login</h2>
   <input type="email"name='email' class="input-field" placeholder="User Email" required>
   <input type="password"name='pass' class="input-field" placeholder="User pass" required>
   <input type="submit"  class="next action-button" value="Login" />
   <a href="{{route('front.reg')}}" class="next action-button" role="button" aria-pressed="true" >new_account</a> 
</form>
</main>
@endsection