<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="MoldingMind"/>	
		<meta name="description" content="Golden Migration - Immigration and Visa Consulting"/>
		<meta name="keywords" content="Responsive, MoldingMind, One Page, Landing, Business, Coaching, Consulting, Creative, Immigration, Visa">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>Golden Migration - Immigration and Visa Consulting</title>
							
		<!-- FAVICON AND TOUCH ICONS  -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="icon" href="apple-touch-icon.html" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> 	
		<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&amp;display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="../use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">		
		<link href="css/flaticon.css" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="css/menu.css" rel="stylesheet">	
		<link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
		<link href="css/tweenmax.css" rel="stylesheet">	
		<link href="css/magnific-popup.css" rel="stylesheet">	
		<link href="css/owl.carousel.min.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css" rel="stylesheet">
	
		<!-- TEMPLATE CSS -->
		<!-- <link href="css/aqua.css" rel="stylesheet">    --> 
	    <!-- <link href="css/blue.css" rel="stylesheet">    --> 
	    <!-- <link href="css/darkred.css" rel="stylesheet"> --> 
	    <!-- <link href="css/green.css" rel="stylesheet">   --> 
	    <!-- <link href="css/olive.css" rel="stylesheet">   -->
	    <link href="css/red.css" rel="stylesheet">
	    <!-- <link href="css/orange.css" rel="stylesheet">  -->
	    <!-- <link href="css/salmon.css" rel="stylesheet">  -->
	    <!-- <link href="css/teal.css" rel="stylesheet">    -->
	    <!-- <link href="css/yellow.css" rel="stylesheet">  -->
		
		<!-- RESPONSIVE CSS -->
		<link href="css/responsive.css" rel="stylesheet"> 
	
	</head>
    <body class="antialiased">
        <!-- PRELOADER SPINNER
		============================================= -->		
		{{-- <div id="loader-wrapper">
			<div id="loader"><div class="cssload-box-loading"></div></div>
		</div> --}}

        <!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">

            <!-- HEADER -->
			<header id="header-2" class="header white-menu">
				<div class="header-wrapper">


					<!-- MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">	
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	    	
				    	<span class="smllogo"><img src="images/logo-black.png" width="200" height="50" alt="mobile-logo"/></span>
				    	<a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
				 	</div>


				 




					  
				  	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
	    				<div class="wsmainwp clearfix">


	    					<!-- LOGO IMAGE -->
	    					<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 90 pixels) -->
	    					<div class="desktoplogo"><a href="index.html" class="logo-black"><img src="images/logo-black.png" width="180" height="45" alt="header-logo"></a></div>
	    					<div class="desktoplogo"><a href="index.html" class="logo-white"><img src="images/logo-white.png" width="180" height="45" alt="header-logo"></a></div>


	    					<!-- MAIN MENU -->
	      					<nav class="wsmenu clearfix blue-header">
	        					<ul class="wsmenu-list">


	        						<!-- DROPDOWN MENU -->
						        	<li aria-haspopup="true"><a href="{{route('about_us')}}">About Us <span ></span></a>
						           		<!--
						           		<ul class="sub-menu">
						           			<li aria-haspopup="true"><a href="#">Dummy Link #1</a></li>
						              		<li aria-haspopup="true"><a href="#">Dummy Link #2</a></li>
						              		<li aria-haspopup="true"><a href="#">Dummy Link #3</a></li>
						              		<li aria-haspopup="true"><a href="#">Dummy Link #4</a></li>
						              		<li aria-haspopup="true"><a href="#">Dummy Link #5</a></li>
						           		</ul>
						           		-->
						          	</li>	<!-- END DROPDOWN MENU -->


						          							          	<!-- PAGES -->
						          	<li aria-haspopup="true"><a href="#">Services <span class="wsarrow"></span></a>
	            						<div class="wsmegamenu clearfix">
	             							<div class="container">
	               								<div class="row">

									                <!-- MEGAMENU LINKS -->
	               									<ul class="col-lg-4 col-md-12 col-xs-12 link-list">
									                    <li class="title">Family Visas:</li>
									                    <li><a href="{{route('partner-visa')}}">Partner Visa</a></li>
									                    <li><a href="{{route('parent-visa')}}">Parent Visa</a></li>
									                    <li><a href="{{route('child-visa')}}">Child Visa</a></li>
									                    <li><a href="{{route('carer-visa')}}">Carer Visa</a></li> 									 
									                     
									                </ul>

									                <!-- MEGAMENU LINKS -->
	               									<ul class="col-lg-4 col-md-12 col-xs-12 link-list">
									                    <li class="title">Business and Work Visas:</li>	
									                    <li><a href="{{route('skilled-visa')}}">Skilled Visa</a></li>
									                    <li><a href="{{route('work-visa')}}">Work Visa</a></li>				          
									                    <li><a href="{{route('business-visa')}}">Business Visa</a></li>
									                </ul>

									                <!-- MEGAMENU LINKS -->
	               									<ul class="col-lg-4 col-md-12 col-xs-12 link-list">
									                    <li class="title">Other Visas and Services:</li>
									                    <li><a href="{{route('student-visa')}}">Student Visa</a></li>
									                    <li><a href="{{route('visitor-visa')}}">Visitor Visa</a></li>								        
									                    <li><a href="{{route('residentreturn-visa')}}">Resident Return Visa</a></li>
									                    <li><a href="{{route('appeals')}}">Appeals</a></li> 
									                    <li><a href="{{route('citizenship')}}">Australian Citizenship</a></li> 						
									                </ul>
									                
								                </div>  <!-- End row -->	
								            </div>  <!-- End container -->	
								        </div>  <!-- End wsmegamenu -->	
								    </li>	<!-- END PAGES -->

						          
						         	<!-- MEGAMENU --
						          	<li aria-haspopup="true"><a href="#">Blog <span class="wsarrow"></span></a>
	            						<div class="wsmegamenu clearfix">
	             							<div class="container">
	               								<div class="row">


	               									<!-- MEGAMENU QUICK LINKS --
													<div class="col-md-12 col-lg-3">

														<!-- Title --
														<h3 class="title">What We Offer:</h3>  

		               									<ul class="link-list">   						                    
										                    <li><a href="#">Student Visa Assessment</a></li>
										                    <li><a href="#">Working Visa Assessment</a></li>	
										                    <li><a href="#">Business Visa Assessment</a></li>							                
										                    <li><a href="#">PR Visa Assessment</a></li>
										                    <li><a href="#">Visa Eligibility Assessment</a></li>
										                    <li><a href="#">Family Visa Assessment</a></li>	
										                    <li><a href="#">Immigration Consultation</a></li>	
										                </ul>

										            </div>	<!-- END MEGAMENU QUICK LINKS --


									                <!-- MEGAMENU FEATURED NEWS --
									                <div class="col-md-12 col-lg-5">

									                	<!-- Title --
									                    <h3 class="title">Featured News:</h3>

									                    <!-- Image --
									                    <div class="fluid-width-video-wrapper mb-15"><img src="images/blog/featured-news.jpg" alt="featured-news" /></div>

									                    <!-- Text --
									                    <h5 class="h5-md"><a href="#">We make the Visa Process Smoother and hassle free</a></h5>
									                    <p class="wsmwnutxt">Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor
									                       tempus feugiat dolor impedit magna...
									                    </p>

									                </div>	<!-- END MEGAMENU FEATURED NEWS --


									                <!-- MEGAMENU LATEST NEWS --
									                <div class="col-md-12 col-lg-4">

									                	<!-- Title --
	                    								<h3 class="title">Latest News:</h3>

	                    								<!-- Latest News --
	                    								<ul class="latest-news">
										
															<!-- Post #1 --
															<li class="clearfix d-flex align-items-center">

																<!-- Image --
																<img class="img-fluid" src="images/blog/latest-post-1.jpg" alt="blog-post-preview" />

																<!-- Text --
																<div class="post-summary">
																	<a href="#">Etiam sapien risus ante auctor tempus an accumsan ...</a>
																	<p>18 hours ago</p>
																</div>

															</li>
															
															<!-- Post #2 --
															<li class="clearfix d-flex align-items-center">

																<!-- Image --
																<img class="img-fluid" src="images/blog/latest-post-2.jpg" alt="blog-post-preview" />

																<!-- Text --
																<div class="post-summary">
																	<a href="#">Blandit tempor sapien ipsum, porta risus auctor justo ...</a>
																	<p>Dec 02, 2019</p>
																</div>

															</li>
															
															<!-- Post #3 --
															<li class="clearfix d-flex align-items-center">

																<!-- Image --
																<img class="img-fluid" src="images/blog/latest-post-3.jpg" alt="blog-post-preview" />

																<!-- Text --
																<div class="post-summary">
																	<a href="#">Cursus risus an auctor risus laoreet undo auctor varius ...</a>
																	<p>Nov 26, 2019</p>
																</div>

															</li>
														</ul>
	                    							</div>	<!-- END MEGAMENU LATEST NEWS --

									                
								                </div>  <!-- End row --	
								            </div>  <!-- End container --	
								        </div>  <!-- End wsmegamenu --
								    </li>	<!-- END MEGAMENU -->


						          	<!-- SIMPLE NAVIGATION LINK -->
								    <li class="nl-simple" aria-haspopup="true"><a href="{{route('contact-us')}}">Contact Us</a></li>

					    
								    <!-- LAST NAVIGATION LINK -->
								    <li class="nl-simple" aria-haspopup="true">
								    	<a href="{{route('contact-us')}}" class="header-btn btn-primary tra-black-hover last-link">Book a consultation</a>
								    </li>
								    
								    
								    <!-- START SOCIAL MEDIA -->
								    
								    <!-- FOOTER SOCIALS LINKS -->
							
						                <li><a href="#" class="ico-facebook"></a></li>
							
										<li><a href="https://www.facebook.com/goldenmigrationconsultants" target="_blank" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>

										<li><a href="https://www.instagram.com/goldenmigrationconsultants/" target="_blank" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>	


								    <!-- END SOCIAL MEDIA -->
								
								
								
								
								
								
								
								
								
								
								    

	        					</ul>
	        				</nav>	<!-- END MAIN MENU -->

	    				</div>
	    			</div>	<!-- END NAVIGATION MENU -->


				</div>     <!-- End header-wrapper -->
			</header>		    
			<!-- END HEADER -->
            

            @yield('content')

            <!-- FOOTER-3
			============================================= -->
			<footer id="footer-3" class="wide-40 footer division">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">	


						<!-- FOOTER CONTACTS -->
						<div class="col-lg-4 col-xl-4">
							<div class="footer-box mb-40">
							
								<!-- Title -->
								<h5 class="h5-md">Contact Details</h5>

								<!-- Address -->
								<p class="p-sm">5 Monash Crescent , Clayton South,</p> 
								<p class="p-sm">Victoria, 3169,  Australia.</p>

								<!-- Phone -->
								<p class="p-sm mt-20">Phone: +61 423 150 855</p>
								
								<!-- Email -->
								<p class="p-sm foo-email">Email: <a href="mailto:info@goldenmigration.com.au">info@goldenmigration.com.au</a></p>

								<!-- Working Hours -->
								<p class="p-sm mt-20">Mon-Fri:          10:00AM - 6:00PM</p>
								<p class="p-sm">Saturday: 10:00AM - 1:00PM</p>
								<p class="p-sm">Sunday: Closed</p>
								<p class="p-sm">By Appointment only</p>

							</div>
						</div>


						<!-- FOOTER LINKS -->
						<div class="col-lg-4 col-xl-4">
							<div class="footer-links mb-40">
							
								<!-- Title -->
								<h5 class="h5-md">Useful Links</h5>

								<!-- Footer Links -->
								<ul class="foo-links clearfix">
								    
									<li><a href="{{route('about_us')}}">About Us</a></li>
									<li><a href="{{route('contact-us')}}">Contact Us</a></li>
									<li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
									<li><a href="https://www.mara.gov.au/tools-for-registered-agents/code-of-conduct" target="_blank">Code of Conduct</a></li>
									
									<!---  
									<li><a href="#">Visa Information</a></li>
									<li><a href="#">Immigration FAQ</a></li>
									<li><a href="#">Immigration Assistance</a></li>	
									<li><a href="#">Golden Migration Testimonials</a></li>
									<li><a href="#">Terms and Conditions</a></li>
									--->
									
								</ul>

							</div>
						</div>


						<!-- FOOTER LINKS -->
						<div class="col-lg-4 col-xl-4">
							<div class="footer-links mb-40">
							
								<!-- Title -->
								<h5 class="h5-md">Visas</h5>

								<!-- Footer Links -->
								<ul class="foo-links clearfix">
									<li><a href="{{route('skilled-visa')}}">Skilled Visa</a></li>
									<li><a href="{{route('partner-visa')}}">Partner Visa</a></li>
									<li><a href="{{route('student-visa')}}">Student Visa</a></li>
									<li><a href="{{route('visitor-visa')}}">Vistor Visa</a></li>	
									<li><a href="{{route('work-visa')}}">Work Visa</a></li>
									<li><a href="{{route('business-visa')}}">Business  Visa</a></li>
									<li><a href="{{route('parent-visa')}}">Parent Visa</a></li>							
								</ul>
							</div>
						</div>	


						<!-- FOOTER NEWSLETTER FORM -->
						<!--<div class="col-lg-3 col-xl-3">-->
						<!--	<div class="footer-form mb-20">-->

								<!-- Title -->
								<!--<h5 class="h5-md">Stay Always In Touch</h5>-->

								<!-- Newsletter Form Input -->
								<!--<form class="newsletter-form">	-->

								<!--	<div class="input-group">-->
								<!--		<input type="email" class="form-control" placeholder="Your email address" required id="s-email">			-->
								<!--		<span class="input-group-btn">-->
								<!--			<button type="submit" class="btn btn-primary tra-black-hover">Subscribe</button> -->
								<!--		</span>-->
								<!--	</div>-->

									<!-- Newsletter Form Notification -->		
								<!--	<label for="s-email" class="form-notification"></label>-->
												
								<!--</form>-->
														
						<!--	</div>-->
						<!--</div>-->


					</div>	<!-- END FOOTER CONTENT -->


					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer">
						<div class="row d-flex align-items-center">


							<!-- FOOTER LOGO -->
							<div class="col-md-4 col-lg-3">
								<!-- Footer Logo -->
								<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 420 x 100 pixels) -->
								<img src="images/logo-black.png" style="width: 50% !important;" alt="footer-logo">
							</div>


							<!-- FOOTER SOCIALS LINKS -->
							<div class="col-md-8 col-lg-9 text-right">
								<p class="footer-copyright">&copy; Copyright <span>Golden Migration</span>. All Rights Reserved</p>
							</div>
						</div>
					</div>	<!-- END BOTTOM FOOTER -->


				</div>	   <!-- End container -->										
			</footer>	
			<!-- END FOOTER-3 -->

        </div>

		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.easing.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/jquery.stellar.min.js"></script>	
		<script src="js/menu.js"></script>
		<script src="js/materialize.js"></script>	
		<script src="js/jquery.scrollto.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>	
		<script src="js/hero-request-form.js"></script>
		<script src="js/hero-register-form.js"></script>
		<script src="js/request-form.js"></script>	
		<script src="js/contact-form.js"></script>
		<script src="js/comment-form.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>	
		<script src="js/jquery.validate.min.js"></script>	

		<!-- Custom Script -->		
		<script src="js/custom.js"></script>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!-- [if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.min.js" type="text/javascript"></script>
		<![endif] -->

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->	
		<!--
		<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', 'UA-XXXXX-Y', 'auto');
			ga('send', 'pageview');
		</script>
		<script async src='https://www.google-analytics.com/analytics.js'></script>
		-->
		<!-- End Google Analytics -->
		

<div id="WAButton"></div>

    </body>
</html>
