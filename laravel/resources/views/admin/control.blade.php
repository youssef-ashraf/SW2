<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Admin Page</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('adminn')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('adminn')}}/css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('front/css')}}/bootstrap.min.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/owl.carousel.min.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/flaticon.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/slicknav.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/animate.min.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/magnific-popup.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/fontawesome-all.min.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/themify-icons.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/slick.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/nice-select.css">
            <link rel="stylesheet" href="{{asset('front/css')}}/style.css">
            


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('admin.deleteuser')}}">Delete User</a>
            <a class="collapse-item" href="{{route('admin.view_user')}}">View Users </a>
            <a class="collapse-item" href="{{route('admin.adduser')}}">Add User </a>
      
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
            <span>Flights</span>
            </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('admin.deleteflight')}}">Delete Flight</a>
            <a class="collapse-item" href="{{route('admin.view_flight')}}">View_Flight</a>
			      <a class="collapse-item" href="{{route('admin.addflight')}}">Add Flight </a>
          </div>
        </div>
      </li>
	  
	    <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tickets</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('admin.addticket')}}">Book Flight</a>
            <a class="collapse-item" href="{{route('admin.view_ticket')}}">View Tickets </a>
            <a class="collapse-item" href="{{route('admin.deleteticket')}}">delete Tickets </a>
			
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('front.homepage')}}">
          <i class="fas fa-fw fa-folder"></i>
          <span>Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.updatepassword')}}">
          <i class="fas fa-fw fa-folder"></i>
          <span>Update_password</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('front.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>LogOut</span></a>
      </li>

	    <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
           <h1 class="h3 mb-0 text-gray-800">Welcome to your page ......</h1>
           <h1 class="h3 mb-0 text-gray-800">The last flight</h1>
            <div class="row pt-30">
                    @foreach($flights as $f)
                    <div class="col-xl-4 col-lg-4 col-md-6 ">
                        <div class="single-place mb-30 ">
                            <div class="place-img ">
                                <img src="{{asset('uploads/flight/'.$f->img)}}" alt="">
                            </div>
                            <div class="place-cap ">
                                <div class="place-cap-top ">
                                    <h3 class="h3 mb-0 text-gray-800">{{$f->to_country}}</h3>
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



  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('adminn')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('adminn')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('adminn')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('adminn')}}/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="{{asset('adminn')}}/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('adminn')}}/js/demo/chart-area-demo.js"></script>
  <script src="{{asset('adminn')}}/js/demo/chart-pie-demo.js"></script>

</body>

</html>
