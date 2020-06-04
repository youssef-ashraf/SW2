<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Add flight</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo e(asset('adminn')); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo e(asset('adminn')); ?>/css/sb-admin-2.min.css" rel="stylesheet">
  </head>

<body >
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow  bg-gradient-primary">
<div class="place-cap-bottom ">
   <a href="<?php echo e(route('admin.control')); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" >GoBack</a>
          </div>
                                
</nav>
  <div class="container">

  
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
             <div class="col-lg-6 d-none d-lg-block "><img src = "<?php echo e(asset('adminn')); ?>/img/crop.jpg" width ="500" height=" 590"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Add Flight</h1>
                  </div>
				          <hr>
                  <form class="user"method="post" action="<?php echo e(route('admin.add_flight')); ?>" enctype="multipart/form-data">
                  <?php echo e(csrf_field()); ?>

				<div class="form-group">
                   <input type="text"name="from" class="form-control form-control-user" id="exampleFirstName" placeholder="From Country">
                </div>
				<div class="form-group">
                  <input type="text" name="to" class="form-control form-control-user" id="exampleLastName" placeholder="To Country">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <label for ="img" > take_off date :</label>

                    <input type="date"name="off_date" class="form-control form-control-user" id="exampleInputLandTime" >
                  </div>
                  <div class="col-sm-6">
                  <label for ="img" > take_off time :</label>

				    <input type="time" name="off_time" class="form-control form-control-user" id="exampleInputTakeofftime" >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <label for ="img" > land date :</label>
                    <input type="date"name="land_date" class="form-control form-control-user" id="exampleInputLandTime">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <label for ="img" > land time :</label>

                    <input type="time"name="land_time" class="form-control form-control-user" id="exampleInputLandTime">
                  </div>
                  </div>
                  
				<div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" name="v_cost" class="form-control form-control-user" id="exampleInputVipCost" placeholder="Vip Cost">
                  </div>
                  <div class="col-sm-6">
                    <input type="number" name="v_num" class="form-control form-control-user" id="exampleRepeatVipNumber" placeholder="Vip Number">
                  </div>
                </div>
				        <div class="form-group row">
                
                  <div class="col-sm-6">
                    <input type="number" name="n_cost" class="form-control form-control-user" id="exampleRepeatNormalCost" placeholder="Normal Cost">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number"name="n_num" class="form-control form-control-user" id="exampleInputNormalNumber" placeholder="Normal Number">
                  </div>
                </div>
				 
				  <div class="form-group ">
				  <div class="col-sm-6 mb-3 mb-sm-0">
				        <label for ="img" > Select image :</label>
                    <input type="file" name="img" id="image"  accept="image/*" >
                </div>
				    </div>
                   
                  
                </div>
					
					
                    <input type="submit"class="btn btn-primary btn-user btn-block" value="Add_Flight">  
                  </form>
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <script src="<?php echo e(asset('adminn')); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo e(asset('adminn')); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo e(asset('adminn')); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo e(asset('adminn')); ?>/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo e(asset('adminn')); ?>/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo e(asset('adminn')); ?>/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo e(asset('adminn')); ?>/js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php /**PATH C:\Users\catym\Desktop\github flight2\SW2\laravel\resources\views/admin/addflight.blade.php ENDPATH**/ ?>