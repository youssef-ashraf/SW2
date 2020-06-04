
<?php $__env->startSection('styles'); ?>

<link rel="stylesheet" href="<?php echo e(asset('front/css')); ?>/form.css">

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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <!-- slider Area Start-->

 <div class="slider-area ">

            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider hero-overly  slider-height d-flex align-items-center" data-background="<?php echo e(asset('front/img')); ?>/hero/flights.jpg">
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
                                <form action="<?php echo e(route('front.reservesearch')); ?>"method="post" class="search-box">
                                <?php echo e(csrf_field()); ?>

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
  <form  action="<?php echo e(route('front.save_ticket')); ?>" method="post">
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
         <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
         
            <td><input type="radio" name="flight_id" value="<?php echo e($f->id); ?>"> <?php echo e($f->id); ?></td>
                      <td><?php echo e($f->from_country); ?></td>
                      <td><?php echo e($f->to_country); ?></td>
                      <td><?php echo e($f->take_off_date); ?></td>
            <td><?php echo e($f->take_off_time); ?></td>
            <td><?php echo e($f->land_date); ?></td>
                      <td><?php echo e($f->land_time); ?></td>
                    
                     
                      <td><?php echo e($f->seat_vip_num); ?></td>
            <td><?php echo e($f->vip_cost); ?></td>
            <td><?php echo e($f->seat_normal_num); ?></td>
                      <td><?php echo e($f->normal_cost); ?></td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    <?php echo e(csrf_field()); ?>

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
     


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\catym\Desktop\github flight2\SW2\laravel\resources\views/front/reservation.blade.php ENDPATH**/ ?>