<footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding footer-bg" data-background="{{asset('front/img')}}/service/footer_bg.jpg">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                              <!-- logo -->
                             <div class="footer-logo">
                                 <a href="{{route('front.homepage')}}"><img src="{{asset('uploads/settings')}}/logo.png" alt=""></a>
                             </div>
                             <div class="footer-tittle">
                                 <div class="footer-pera">
                                     <p>Lorem iaspsum doldfor sit amvset, consectetur adipisicing cvelit csed do eiusmod tempor incididucvccnt ut labovre.</p>
                                </div>
                             </div>
                             <div class="col-xl-5 col-lg-5 col-md-5">
                        <!-- social -->
                        <div class="footer-social f-right">
                            <a href="https://twitter.com/EGYPTAIR"><i class="fab fa-twitter">Twitter</i></a>
                            <a href="https://www.facebook.com/EGYPTAIR/"><i class="fab fa-facebook-f">FaceBook</i></a>
                        </div>
                 </div>
                         </div>
                       </div>
                    </div>
                 
            
                
            </div>
        </div>
        <!-- Footer End-->
    </footer>

	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('front/js')}}/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('front/js')}}/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{asset('front/js')}}/popper.min.js"></script>
        <script src="{{asset('front/js')}}/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('front/js')}}/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('front/js')}}/owl.carousel.min.js"></script>
        <script src="{{asset('front/js')}}/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('front/js')}}/wow.min.js"></script>
		<script src="{{asset('front/js')}}/animated.headline.js"></script>
        <script src="{{asset('front/js')}}/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('front/js')}}/jquery.scrollUp.min.js"></script>
        <script src="{{asset('front/js')}}/jquery.nice-select.min.js"></script>
		<script src="{{asset('front/js')}}/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="{{asset('front/js')}}/contact.js"></script>
        <script src="{{asset('front/js')}}/jquery.form.js"></script>
        <script src="{{asset('front/js')}}/jquery.validate.min.js"></script>
        <script src="{{asset('front/js')}}/mail-script.js"></script>
        <script src="{{asset('front/js')}}/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('front/js')}}/plugins.js"></script>
        <script src="{{asset('front/js')}}/main.js"></script>
        @yield('scripts')

    </body>
</html>