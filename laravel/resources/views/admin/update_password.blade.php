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
           <div class="col-lg-6 d-none d-lg-block "><img src = "{{asset('adminn')}}/img/home-blog1.jpg" width ="500" height=" 360"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update Password</h1>
              </div>
              <hr>
              <form class="user"method="post" action="{{route('admin.update_password')}}">
                  {{ csrf_field() }}
                
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                </div>
                    <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" name="oldpass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Old Password">
              </div>
              <div class="col-sm-6">
                <input type="password" name="newpass" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="New Password">
              </div>
              </div>
              <input type="submit"class="btn btn-primary btn-user btn-block" value="Update">  

              
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