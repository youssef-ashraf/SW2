<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>delete users</title>

  <!-- Custom fonts for this template -->
  <link href="{{asset('adminn')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('adminn')}}/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{asset('adminn')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow  bg-gradient-primary">
     <div class="place-cap-bottom ">
   <a href="{{route('admin.control')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" >GoBack</a>
          </div>
                                
</nav>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    


    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            
            <h1 class="h3 mb-2 text-gray-800">View Flights</h1>
			<p class="mb-4"></p>

            

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>ID</th>
                    <th>user_Name</th>

                    <th>flight_Email</th>
                  
                        <td>DeleteButton</td>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>ID</th>
                    <th>user_Name</th>

                    <th>flight_Email</th>
                    
                    <td>DeleteButton</td>
                  
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($users as $u)
                    <tr>
                    <th>{{$u->id}}</th>
                    <th>{{$u->name}}</th>

                    <th>{{$u->email}}</th>
                   
                        <td><a href="/listuser_after/{{$u->id}}"><button>delete</button></a></td>
         
                    </tr>
                   
                   @endforeach 
                
                  </tbody>
           
                      </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->



  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('adminn')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('adminn')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="v{{asset('adminn')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('adminn')}}/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="{{asset('adminn')}}/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="{{asset('adminn')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('adminn')}}/js/demo/datatables-demo.js"></script>

</body>

</html>
