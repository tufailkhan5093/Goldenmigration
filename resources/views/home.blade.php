@extends('welcome')
@section('content')
    
    <!-- HERO-1
			============================================= -->	
			<section id="hero-1" class="hero-section division">


				<!-- SLIDER -->
				<div class="slider">
			    	<ul class="slides">


				     	<!-- SLIDE #1 -->
						
				      	<li id="slide-1">

					        <!-- Background Image -->
				        	<img src="{{asset('images')}}/{{$slider->image1}}" alt="slide-background">

							<!-- Image Caption -->
		       				<div class="caption d-flex align-items-center center-align">
		       					<div class="container">
		       						<div class="row">
		       							<div class="col-md-12">
		       								<div class="caption-txt white-color">

						       					<!-- Title -->
					        					<h5 class="h5-xl" >Welcome to Golden Migration Consultants</h5>
								         	 	<h2 class="banner-text" >We make the Visa Process Smoother and hassle free</h2>
									          	
									          	<!-- Text -->
												<p class="p-md banner-text">Golden Migration Consultants is an Australian based organisation located in Melbourne.  
												
												
												</p>

												<!-- Button -->
												<a href="#" class="btn btn-md btn-primary tra-white-hover btn-arrow">
													<span>Discover More <i class="fas fa-arrow-right"></i></span>
												</a>

											</div>
										</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>	<!-- End Image Caption -->

					    </li>
							<!-- END SLIDE #1 -->
							


				      	<!-- SLIDE #2 -->
				      	<li id="slide-2">

				        	<!-- Background Image -->
				        	<img src="{{asset('images')}}/{{$slider->image2}}" alt="slide-background">

							<!-- Image Caption -->
	        				<div class="caption d-flex align-items-center center-align">
	        					<div class="container">
		       						<div class="row">
		       							<div class="col-md-12">
		       								<div class="caption-txt white-color">

					        					<!-- Title -->
					        					<h5 class="h5-xl"></h5>
								         	 	<h2 class="banner-text">Immigration & Visa Consultation</h2>
									          	
									          	<!-- Text -->
												<p class="p-md banner-text">
												All our consultants keep abreast with the rapid changes in the migration industry.
												</p>

												<!-- Button -->
												<a href="contact-us.html" class="btn btn-md btn-primary tra-white-hover btn-arrow">
													<span>Book Consultation Now <i class="fas fa-arrow-right"></i></span>
												</a>

											</div>	
				         				</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>	<!-- End Image Caption -->

				     	</li>	<!-- END SLIDE #2 -->


				     	<!-- SLIDE #3 -->
				      	<li id="slide-3">

				      		<!-- Background Image -->
				        	<img src="{{asset('images')}}/{{$slider->image3}}" alt="slide-background">

				        	<!-- Image Caption -->
		       			 	<div class="caption d-flex align-items-center center-align">
		       			 		<div class="container">
		       						<div class="row">
		       							<div class="col-md-12">
		       								<div class="caption-txt white-color">

						       			 		<!-- Title -->
					        					<h5 class="h5-xl"></h5>
								         	 	<h2 class="banner-text">Providing individualised attention to meet your needs</h2>

				                               <!-- Text -->
												<p class="p-md banner-text">A team of skilled and expert consultants 
												</p>

												<!-- Button -->
												<a href="#" class="btn btn-md btn-primary tra-white-hover btn-arrow">
													<span>What We Do <i class="fas fa-arrow-right"></i></span>
												</a>

											</div>
					        			</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>	<!-- End Image Caption -->

				     	</li>	<!-- END SLIDE #3 -->

				    </ul>
			  	</div>	<!-- END SLIDER -->

				
				<!-- SLIDER NAV -->
			  	<div class="hero-slider-nav icon-xs white-color">
			  		<div class="slider-btn">
						<a class="slide-prev"><span class="flaticon-442-left-arrow"></span></a>
						<a class="slide-next"><span class="flaticon-441-right-arrow"></span></a>
					</div>
				</div>


			</section>	<!-- END HERO-1 -->

            <!-- *************************************************************************************************************************
			 -->
			<!-- FAQs-1
			============================================= -->
			<section id="faqs-1" class="wide-100 faqs-section division">				
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row">	
						<div class="col-md-12 section-title center">		

			 				<!-- Title -->
							<h2 class="h2-xs darkblue-color">Who We Are</h2>

						{!! $service->description!!}




						</div>
					</div>	 <!-- END SECTION TITLE -->	




			<!-- 


************************************************************************************************************************* -->



















			<!-- SERVICES-4
			============================================= -->
			<section id="services-4" class="wide-70 services-section division">
				<div class="container">
					<div class="row">


						<!-- SERVICE BOX #1 -->
						@foreach($visa as $visa)
							<div id="sb-01" class="col-md-6 col-lg-4 sb-box">
								<div class="sbox-6">

									<!-- Text -->
									<h5 class="h5-lg darkblue-color text-capitalize">{{$visa->title}} Visas</h5>
									<p class="p-sm">{!! \Illuminate\Support\Str::words($visa->description, 10,'....')  !!}</p>

									<!--Link -->
									<a href="partner-visa.html">Read More <i class="fas fa-caret-right"></i></a>

								</div>							
							</div>
						@endforeach







					</div>    <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END SERVICES-4 -->










			<!-- ABOUT-6
			============================================= -->
			<section id="about-6" class="bg-scroll pt-100 about-section division">
				<div class="container white-color">
					<div class="row d-flex align-items-center">


						<!-- ABOUT IMAGE -->
			 			<div class="col-lg-6">
			 				<div class="about-6-img text-center">
								<img class="img-fluid" src="images/image-08.jpg" alt="about-image" />
							</div>
			 			</div>

					
						<!-- ABOUT TEXT -->
						<div class="col-lg-6">
							<div class="about-6-txt pc-20">

								<!-- Section ID -->	
					 			<span class="section-id id-color"></span>

								<!-- Title -->
								<h2 class="h2-xs">Our Professional Affiliations</h2>

								<!-- Text -->
								<p class="p-md">
								
								
								</p>		

								<!-- Small Title -->
								<h5 class="h5-lg"></h5>		

								<!-- Flags list -->
								<ul class="flags-list">
									<li><a href="index-2.html"><img src="images/Mara.jpg" alt="flag"/><span>MARA</span></a></li>
									<li><a href="index-2.html"><img src="images/MIA.jpg" alt="flag"/><span>M.I.A</span></a></li>
									<li><a href="index-2.html"><img src="images/MARA_number.jpg" alt="flag"/><span>MARN</span></a></li>	
									<li><a href="index-2.html"><img src="images/VACTS.png" alt="flag"/><span>VACTS</span></a></li>
									<li><a href="index-2.html"><img src="images/EIC.png" style="background-color:lightBlue;" alt="flag"/><span>EIC</span></a></li>
									<li><a href="index-2.html"><img src="images/TECHIE.png" style="background-color:DodgerBlue;";" alt="flag"/><span>TECHIE</span></a></li>
									<li><a href="index-2.html"><img src="images/IBM.png" style="background-color:pink;" alt="flag"/><span>IBM-VIC</span></a></li>
									<li><a href="index-2.html"><img src="images/INNOVATIVE.png" style="background-color:cyan;" alt="flag"/><span>INNOVATIVE</span></a></li>
									<li><a href="index-2.html"><img src="images/allianz-logo.svg" style="background-color:#FFFAF0;" alt="flag"/><span>ALLIANZ</span></a></li>
								</ul>		

							</div>							
						</div> <!-- END ABOUT TEXT -->


					</div>    <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END ABOUT-6 -->


			

			<!-- REQUEST FORM
			============================================= -->
			<div id="request-1" class="bg-image wide-60 request-form-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- REQUEST FORM TEXT -->
						<div class="col-md-6 col-xl-6">
							<div class="request-txt white-color pc-20 mb-40">

								<!-- Section ID -->	
					 			<span class="section-id id-color"></span>

								<!-- Title -->
								<h2 class="h2-xs banner-text">Get Free & Quality Online Consultation</h2>

								<!-- Samll Title -->
								<h5 class="h5-md banner-text">Initial Consultation can be done over the phone, video conference or by face-to-face (by appointment only).
								Here we gather pre-liminary information about your enquiry and advise you: 
</h5>

								<!-- Text -->
								<p class="banner-text">•	On possible visa pathways</p>
	<p class="banner-text">•	Potential visa and associated costs.</p>
	<p class="banner-text">•	Explain the visa application procedure and eligibility requirements.</p>
	<p class="banner-text">•	Advice on any obstacles.</p>

							</div>
						</div>	<!-- END REQUEST FORM TEXT -->


						<!-- REQUEST FORM -->
						<div class="col-md-6 col-xl-5 offset-xl-1">
							<div id="request-form" class="text-center mb-40">
							<form method="POST" action="{{route('contact')}}">
                                @csrf
                                <!-- Contact Form Input -->
                                <div id="input-name" class="col-lg-12 mb-2">
                                    <input type="text" name="cname" id="cname" style="width:100%" class="form-control name"
                                        placeholder="Enter Your Name*" required>
                                </div>

                                <div id="input-name" class="col-lg-12 mb-2">
                                    <input type="text" name="cphone" id="cphone" class="form-control name"
                                        style="width:100%" placeholder="Enter Your Phone*" required>
                                </div>

                                <!-- Contact Form Input -->
                                <div id="input-email" class="col-lg-12 mb-2">
                                    <input type="text" name="cemail" id="cemail" class="form-control email"
                                        style="width:100%" placeholder="Enter Your Email*" required>
                                </div>

                                <!-- Contact Form Select -->
                                <div id="input-subject" class="col-lg-12 mb-2 input-subject">
                                    <select id="inlineFormCustomSelect1" name="subject" class="custom-select subject"
                                        required>
                                        <option value="">Your Question About..</option>
                                        <option>Student Visa</option>
                                        <option>Work visa</option>
                                        <option>Business Visa</option>
                                        <option>Partner Visa</option>
                                        <option>Skilled Visa</option>
                                        <option>Tourist Visa</option>
                                        <option>Parent Visa</option>
                                        <option>Other</option>
                                    </select>
                                </div>

                                <!-- Contact Form Mesaage -->
                                <div id="input-message" class="col-lg-12 mb-2 input-message">
                                    <textarea class="form-control message" name="cmessage" id="cmessage" rows="6" style="width:100%"
                                        placeholder="Your Message ..." required></textarea>
                                </div>

                                <!-- Contact Form Button -->
                                <div class="col-lg-12 mt-15 form-btn">
                                    <button type="submit" class="btn btn-primary tra-black-hover submit">Send Your
                                        Message</button>
                                </div>
                              
                            </form>
							</div>
						</div>	<!-- END REQUEST FORM -->


					</div>	<!-- End row -->
				</div>  <!-- End container -->
			</div>	<!-- END REQUEST FORM -->

@endsection