<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Travel </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('uploads/settings')); ?>/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="<?php echo e(asset('front/css')); ?>/bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo e(asset('front/css')); ?>/owl.carousel.min.css">
            <link rel="stylesheet" href="<?php echo e(asset('front/css')); ?>/flaticon.css">
            <link rel="stylesheet" href="<?php echo e(asset('front/css')); ?>/slicknav.css">
            <link rel="stylesheet" href="<?php echo e(asset('front/css')); ?>/animate.min.css">
            <link rel="stylesheet" href="<?php echo e(asset('front/css')); ?>/magnific-popup.css">
            <link rel="stylesheet" href="<?php echo e(asset('front/css')); ?>/fontawesome-all.min.css">
            <link rel="stylesheet" href="<?php echo e(asset('front/css')); ?>/themify-icons.css">
            <link rel="stylesheet" href="<?php echo e(asset('front/css')); ?>/slick.css">
            <link rel="stylesheet" href="<?php echo e(asset('front/css')); ?>/nice-select.css">
            <link rel="stylesheet" href="<?php echo e(asset('front/css')); ?>/style.css">
            

            <?php echo $__env->yieldContent('styles'); ?>
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo e(asset('front/img')); ?>/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="header-info-left">
                               
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-info-right f-right">
                                <ul class="header-social">    
                                    <li><a href="https://twitter.com/EGYPTAIR"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/EGYPTAIR/"><i class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                  <a href="<?php echo e(route('front.homepage')); ?>"><img src="<?php echo e(asset('uploads/settings')); ?>/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>               
                                        <ul id="navigation">                                                                                                                                     
                                        <li><a href="<?php echo e(route('front.homepage')); ?>">Home</a></li>
                                            <li><a href="<?php echo e(route('front.flight')); ?>">Flight</a></li>
                                            <li><a href="<?php echo e(route('front.log')); ?>">Log/Reg</a></li>
                                            <li><a href="<?php echo e(route('front.showreserve')); ?>">Reserve</a></li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
<?php /**PATH C:\Users\catym\Desktop\github flight2\SW2\laravel\resources\views/front/inc/header.blade.php ENDPATH**/ ?>