
<?php $__env->startSection('styles'); ?>
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
    <main>

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
                                <form action="<?php echo e(route('front.search')); ?>"method="post" class="search-box">
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
                    <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="<?php echo e(asset('uploads/flight/'.$f->img)); ?>" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <h3><?php echo e($f->to_country); ?></h3>
                                    <li class="dolor">normal_cost:$<?php echo e($f->normal_cost); ?></li>
                                    <li class="dolor">vip_cost:$<?php echo e($f->vip_cost); ?></li>

                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                    <li>off_date:<i class="far fa-clock"></i><?php echo e($f->take_off_date); ?></li>

                                        <li>off_time:<i class="far fa-clock"></i><?php echo e($f->take_off_time); ?></li>
                                        <li>land_date:<i class="far fa-clock"></i><?php echo e($f->land_date); ?></li>

                                        <li>land_time:<i class="far fa-clock"></i><?php echo e($f->land_time); ?></li>
                                        </ul>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div>
            </div>
        </div>
        <!-- Favourite Places End -->

    </main>
  <?php $__env->stopSection(); ?>



<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\catym\Desktop\github flight2\SW2\laravel\resources\views/front/index.blade.php ENDPATH**/ ?>