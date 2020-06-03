@extends('admin.layout')
@section('content')



<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
         <div class="col-lg-6 d-none d-lg-block "><img src = "{{asset('adminn')}}/img/home-blog2.jpg" width ="500" height=" 350"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Add User</h1>
              </div>
              <hr>
              <form class="user"method="post" action="{{route('admin.add_user')}}">
                  {{ csrf_field() }}
                  <div class="form-group">
                  <input type="text" name="name"class="form-control form-control-user"   placeholder="Enter your Name Address..."> 
                </div>
                <div class="form-group">
                  <input type="email" name="email"class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..."> 
                </div>
            
              <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password"name="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Password...">
              </div>
              </div>
              <input type="submit"class="btn btn-primary btn-user btn-block" value="Add_User">  

              </form>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>
@endsection