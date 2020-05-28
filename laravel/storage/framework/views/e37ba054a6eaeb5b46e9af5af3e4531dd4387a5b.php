
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Travel HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('img/favicon.png')); ?>">
    <!-- Place favicon.ico in the root directory -->
    
  <!-- CSS here -->
  <link rel="stylesheet" href="<?php echo e(asset('css/form.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/slicknav.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/animate.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome-all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/themify-icons.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/themify-icons.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/slick.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/nice-select.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo e(asset('img/logo/logo.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="header-info-left">
                                <ul>                          
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-info-right f-right">
                                <ul class="header-social">    
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                   <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
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
                                  <a href="index.html"><img src="<?php echo e(asset('img/logo/logo.png')); ?>" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>               
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About US</a></li>
                                            <li><a href="#">Package</a></li>
                                            <li><a href="#">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="#">Blog</a></li>
                                                    <li><a href="#">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="#">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Contact Us</a></li>
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
  
     <!-- slider Area Start-->
     <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo e(asset('img/hero/about.jpg')); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                        <h2>RESERVATION</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>             
    		<!-- start add form -->
 <div class="container">
  <form  action="/reserve" method="post">
  <table border = 1>
         <tr>
            <td>ID</td>
            <td>from_country</td>
            <td>to_country</td>
            <td>start_Time</td>
            <td>end_time</td>
            <td>cost</td>
            <td>seat_num</td>
            
         </tr>
         <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
         
            <td><input type="radio" name="flight" value="<?php echo e($flight->id); ?>"> <?php echo e($flight->id); ?></td>
            <td><?php echo e($flight->from_country); ?></td>
            <td><?php echo e($flight->to_country); ?></td>
            <td><?php echo e($flight->start_time); ?></td>
            <td><?php echo e($flight->end_time); ?></td>
            <td><?php echo e($flight->cost); ?></td>
            <td><?php echo e($flight->seat_num); ?></td>
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
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding footer-bg" data-background="<?php echo e(asset('img/service/footer_bg.jpg')); ?>">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                              <!-- logo -->
                             <div class="footer-logo">
                                 <a href="index.html"><img src="<?php echo e(asset('img/logo/logo2_footer.png')); ?>" alt=""></a>
                             </div>
                         </div>
                       </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#"> Offers & Discounts</a></li>
                                    <li><a href="#"> Get Coupon</a></li>
                                    <li><a href="#">  Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
      
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                 <li><a href="#">Frequently Asked Questions</a></li>
                                 <li><a href="#">Terms & Conditions</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Report a Payment Issue</a></li>
                             </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class="row pt-padding">
                  <div class="col-xl-5 col-lg-5 col-md-5">
                        <!-- social -->
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                        </div>
                 </div>
             </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="<?php echo e(asset('js/vendor/modernizr-3.5.0.min.js')); ?>"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="<?php echo e(asset('js/vendor/jquery-1.12.4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="<?php echo e(asset('js/jquery.slicknav.min.js')); ?>"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/animated.headline.js')); ?>"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="<?php echo e(asset('js/jquery.scrollUp.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.nice-select.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/jquery.sticky.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.magnific-popup.js')); ?>"></script>

        <!-- contact js -->
        <script src="<?php echo e(asset('js/contact.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.form.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.validate.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/mail-script.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.ajaxchimp.min.js')); ?>"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="<?php echo e(asset('js/plugins.js')); ?>"></script>
        <script src="<?php echo e(asset('js/main.js')); ?>"></script>

</body>
</html><?php /**PATH C:\Users\catym\Desktop\flight github\SW2\laravel\resources\views/addTicket.blade.php ENDPATH**/ ?>