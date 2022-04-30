@extends('welcome')
@section('content')
    
<!-- INNER PAGE WRAPPER
			============================================= -->	
			<div class="inner-page-wrapper">




				<!-- BREADCRUMB
				============================================= -->
				<div id="breadcrumb" class="bg-darkblue division">
					<div class="container">
						<div class="row">
							<div class="col">
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb white-color">
								    	<li class="breadcrumb-item"><a href="index-2.html">&#91; Home &#93;</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">About Golden Migration</li>
								  	</ol>
								</nav>
							</div>
						</div>  <!-- End row -->
					</div>	<!-- End container -->		
				</div>	<!-- END BREADCRUMB -->




				<!-- ABOUT-2
				============================================= -->
				<section id="about-2" class="wide-60 about-section division">
					<div class="container">	
				 		<div class="row d-flex align-items-center">


				 			<!-- ABOUT IMAGE -->
				 			<div class="col-md-6">
				 				<div class="about-img text-center mb-40">

				 					<!-- Image -->
									<img class="img-fluid" src="{{asset('images')}}/{{$check->image}}" alt="about-image" />

									
									
									
									

								</div>
				 			</div>






				 			<!-- ABOUT TEXT	-->
				 			<div class="col-md-6">
				 				<div class="about-2-txt pc-20 mb-40">


				 					<!-- Section ID -->	
						 			<span class="section-id noto-font-700 id-color">About us </span>

				 					<!-- Title -->
									<h3 class="h3-lg">Golden Migration Consultants</h3>

									<!-- INFO BOX #1 -->
									{!! $check->description !!}
										
										
										
								</div>
				 			</div>	<!-- END ABOUT TEXT	-->


						</div>	  <!-- End row -->
					</div>	   <!-- End container -->
				</section>	<!-- END ABOUT-2 -->




				<!-- SERVICES-6
				============================================= -->
				<section id="services-6" class="bg-lightgrey wide-100 services-section division">
					<div class="container">


						<!-- SECTION TITLE -->
						<div class="row">	
							<div class="col-md-12 section-title center">		

				 				<!-- Title -->
								<h2 class="h2-xs">Our Services</h2>

								<!-- Text -->	
								<p class="p-md">
								    We provide services in relation to:   
								    
								    </p> 

							</div>
						</div>


						<div class="row d-flex align-items-center">


							<!-- SERVICE BOX #1 -->
							<div id="sb-01" class="col-md-6 col-lg-4 sb-box">
								<div class="sbox-6">

									<!-- Text -->
									<h5 class="h5-lg darkblue-color">Partner Visas</h5>
									<p class="p-sm">If you are an Australian citizen, permanent resident or eligible New Zealand citizen who is in a de facto or marital relationship</p>

									<!--Link -->
									<a href="partner-visa.html">Read More <i class="fas fa-caret-right"></i></a>

								</div>							
							</div>


							<!-- SERVICE BOX #2 -->
							<div id="sb-02" class="col-md-6 col-lg-4 sb-box">
								<div class="sbox-6">

									<!-- Text -->
									<h5 class="h5-lg darkblue-color">Skilled Visas</h5>
									<p class="p-sm">The General Skilled Migration (GSM) allows skilled professionals to immigrate to Australia independently.</p>

									<!--Link -->
									<a href="skilled-visa.html">Read More <i class="fas fa-caret-right"></i></a>

								</div>							
							</div>


							<!-- SERVICE BOX #3 -->
							<div id="sb-03" class="col-md-6 col-lg-4 sb-box">
								<div class="sbox-6">

									<!-- Text -->
									<h5 class="h5-lg darkblue-color">Parent Visas</h5>
									<p class="p-sm">Parent visas enable Australian citizens, permanent residents or eligible New Zealand citizens to sponsor their parents to</p>

									<!--Link -->
									<a href="parent-visa.html">Read More <i class="fas fa-caret-right"></i></a>

								</div>							
							</div>


							<!-- SERVICE BOX #4 -->
							<div id="sb-04" class="col-md-6 col-lg-4 sb-box">
								<div class="sbox-6">

									<!-- Text -->
									<h5 class="h5-lg darkblue-color">Child Visas</h5>
									<p class="p-sm">A child visa allows the holder of the visa to live either temporarily or permanently.  These visas are available for children</p>

									<!--Link -->
									<a href="child-visa.html">Read More <i class="fas fa-caret-right"></i></a>

								</div>							
							</div>


							<!-- SERVICE BOX #5 -->
							<div id="sb-05" class="col-md-6 col-lg-4 sb-box">
								<div class="sbox-6">

									<!-- Text -->
									<h5 class="h5-lg darkblue-color">Tourist & Visitor Visas</h5>
									<p class="p-sm">If you would like to visit family, friends or travel for tourism.  Then a short-term tourist visa may be the solution for you.</p>

									<!--Link -->
									<a href="visitor-visa.html">Read More <i class="fas fa-caret-right"></i></a>

								</div>							
							</div>


							<!-- SERVICE BOX #6 -->
							<div id="sb-06" class="col-md-6 col-lg-4 sb-box">
								<div class="sbox-6">

									<!-- Text -->
									<h5 class="h5-lg darkblue-color">Student Visas</h5>
									<p class="p-sm">This visa allows you to pursue full time studies at an accredited educational institute in Australia.</p>

									<!--Link -->
									<a href="student-visa.html">Read More <i class="fas fa-caret-right"></i></a>

								</div>							
							</div>


							<!-- SERVICE BOX #7 -->
							<div id="sb-07" class="col-md-6 col-lg-4 sb-box">
								<div class="sbox-6">

									<!-- Text -->
									<h5 class="h5-lg darkblue-color">Work Visas</h5>
									<p class="p-sm">Employer Sponsored visas are designed for employers to address skill shortages in their business for positions that cannot be</p>

									<!--Link -->
									<a href="work-visa.html">Read More <i class="fas fa-caret-right"></i></a>

								</div>							
							</div>


							<!-- SERVICE BOX #8 -->
							<div id="sb-08" class="col-md-6 col-lg-4 sb-box">
								<div class="sbox-6">

									<!-- Text -->
									<h5 class="h5-lg darkblue-color">Business Visas</h5>
									<p class="p-sm">This Visa is for people who have an ownership interest in a business in their home country and would like to establish</p>

									<!--Link -->
									<a href="business-visa.html">Read More <i class="fas fa-caret-right"></i></a>

								</div>							
							</div>


							<!-- SERVICE BOX #9 -->
							<div id="sb-09" class="col-md-6 col-lg-4 sb-box">
								<div class="sbox-6">

									<!-- Text -->
									<h5 class="h5-lg darkblue-color">Australian Citizenship</h5>
									<p class="p-sm">This is the most common pathway for permanent residents. If you migrated to Australia and meet the eligibility</p>

									<!--Link -->
									<a href="citizenship.html">Read More <i class="fas fa-caret-right"></i></a>

								</div>							
							</div>


						</div>    <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END SERVICES-6 -->

			<!-- HERO-3
			============================================= -->	
			<section id="hero-3" class="bg-scroll hero-section division">
				<div class="container">	
					<div class="row d-flex align-items-center">


						<!-- HERO TEXT -->
						<div class="col-lg-7 col-xl-7">
							<div class="hero-3-txt mb-40">


								<!-- Title -->
								<h2 class="darkblue-color">Why Choose Us?</h2>

								<!-- Text Box #1 -->
								<div class="box-list">							
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p class="p-md">Our clients are our utmost priority and we pride ourselves in providing quality customer service.  We believe we owe a duty of care, honesty and a professionalism to our clients.


									</p>							
								</div>
									
								<!-- Text Box #2 -->
								<div class="box-list">							
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p class="p-md">Everyone has a different migration journey.  Migration law is complex and can be stressful.  Our consultants are knowledgeable and prompt.  Let us do the hard work for you and give you a peace of mind in this journey. 
									</p>							
								</div>			

								<!-- Text Box #3 -->
								<div class="box-list">							
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p class="p-md">Visa applications can be very time consuming.  Let us manage your file and save you time so you can focus on other aspects of your life.   
									</p>							
								</div>			



								<!-- Text Box #4 -->
								<div class="box-list">							
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p class="p-md">Our consultants are patient and empathetic.  We ensure each case is given our 100% attention.  We will answer all your queries, conduct follow up’s, keep you in the loop and act as a point of contact between you and the Department of Home Affairs (DHA).     
									</p>							
								</div>			


								<!-- Text Box #5 -->
								<div class="box-list">							
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p class="p-md">Our primary focus is to facilitate you with the most appropriate visa options to choose from.  We will then advise you accordingly to achieve the desired results.  We will ensure we prepare and present the best option of your file to be submitted to (Department of Home Affairs (DHA).   
									</p>							
								</div>			

								<!-- Text Box #6 -->
								<div class="box-list">							
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p class="p-md">In immigration matters timing is crucial.  As a registered migration agent, our priority is to ensure we meet all the legislative deadlines so that you are not disadvantaged in any manner. 
									</p>							
								</div>			

								<!-- Text Box #7 -->
								<div class="box-list">							
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p class="p-md">All registered migration agents are bound by the code of conduct.  If you wish to download a copy of the code please <a href="https://www.mara.gov.au/tools-for-registered-agents/code-of-conduct" target="_blank">Click here.</a>
									</p>							
								</div>			















					
							</div>
						</div>	<!-- END HERO TEXT -->


						<!-- HERO REQUEST FORM -->
						<div class="col-lg-5 col-xl-5">
							<div id="hero-form" class="text-center mb-40">
								<form name="heroRequestForm" class="row hero-request-form bg-darkblue">

									 <!-- Request Form Text -->      
                                    <div class="col-md-12 white-color">
                                        <h5 class="h5-lg">Request Free Consultation</h5>	
                                    </div> 

                                   <!-- Request Form Input -->
					                <div id="input-name" class="col-md-12">
					                	<input type="text" name="cname" id="cname" class="form-control name" placeholder="Enter Your Name*" required> 
					                </div>
					                     
					                <!-- Request Form Input -->       
					                <div id="input-email" class="col-md-12">
					                	<input type="text" name="cemail" id="cemail" class="form-control email" placeholder="Enter Your Email*" required> 
					                </div>

									<!-- Request Form Input -->
					                <div id="input-phone" class="col-md-12">
					                	<input type="tel" name="cphone"id="cphone" class="form-control phone" placeholder="Enter Your Phone Number*" required> 
					                </div>	

					                <!-- Request Form Select -->
					                <div id="input-visa" class="col-md-12 input-visa">
					                    <select id="inlineFormCustomSelect1" name="visa" class="custom-select visa" required>
					                        <option value="">Select Visa</option>  
					                      	<option>Student Visa</option>
					                      	<option>Work Visa</option>
					                      	<option>Business Visa</option>
					                      	<option>Partner Visa</option>
					                      	<option>Skilled Visa</option>
					                      	<option>Tourist Visa</option>
					                      	<option>Parent Visa</option>
					                      	<option>Other</option>
					                    </select>
					                </div>

					                <!-- Request Form Select -->
					                <div id="input-country" class="col-md-12 input-country">
					                    <textarea class="form-control" id="cmessage" name="cmessage" placeholder="Enquiry" style="width:100%; height:110px"></textarea>
					                </div>
						                                            
					                <!-- Request Form Button -->
					                <div class="col-md-12 form-btn">  
					                	<button onclick="contactus()" class="btn btn-primary tra-black-hover submit">Send Request</button> 
					                </div>
					                                               
					            </form>
							</div>
						</div>	<!-- END HERO REQUEST FORM -->
						

					</div>     <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END HERO-3 -->




			<!-- CALL TO ACTION-3
			============================================= -->
			<section id="cta-3" class="bg-darkblue cta-section division">
				<div class="container white-color">
					<div class="row d-flex align-items-center">


						<!-- CALL TO ACTION TEXT -->
						<div class="col-lg-12">
							<div class="cta-txt text-center">
								<h4 class="h4-xs txt-400">Need immigration & visa consultation? <a href="mailto:info@goldenmigration.com.au">Send a request</a> for free consultation</h4>
							</div>
						</div>


					</div>	  <!-- End row -->
				</div>	   <!-- End container -->	
			</section>	<!-- END CALL TO ACTION-3 -->		























				<!-- TESTIMONIALS-1
				============================================= -->
				<section id="reviews-1" class="bg-tra-city bg-lightgrey wide-100 reviews-section division">
					<div class="container">


						<!-- SECTION TITLE -->
						<div class="row">	
							<div class="col-md-12 section-title center">			

				 				<!-- Title -->
								<h2 class="h2-xs">How we work?</h2>

								<!-- Text -->	
								<p class="p-md"><!-- Text here if required -->	
								</p> 

							</div>
						</div>	 <!-- END SECTION TITLE -->	

						
						<!-- TESTIMONIALS CONTENT -->
						<div class="row">
							<div class="col-md-12">					
								<div class="owl-carousel owl-theme reviews-holder">

							
									<!-- TESTIMONIAL #1 -->
									<div class="review-1">

										<!-- Testimonial Author -->
										<div class="author-data clearfix">
										
											<!-- Author Avatar -->
											<div class="testimonial-avatar">
												<img src="images/review-author-2.jpg" alt="testimonial-avatar">
											</div>

											<!-- Author Data -->
											<div class="review-author">
												<h5 class="h5-sm">Step 1:</h5>	
												<h6 class="h5-sm">Initial Consultation</h6>	

												<span></span>									
											</div>

										</div>	<!-- End Testimonial Author -->	
																
										<!-- Testimonial Text -->
										<p>This can be done over the phone, video conference or by face-to-face (by appointment only).  Here we gather pre-liminary information about your enquiry and advise you:
										<br>
<span>•	On possible visa pathways</span><br>
<span>•	Potential visa and associated costs </span><br>
<span>•	Explain the visa application procedure and eligibility requirements.</span><br>
<span>•	Advice on any obstacles.</span>

										</p>
							
									</div>
							
							
									<!-- TESTIMONIAL #2 -->
									<div class="review-1">

										<!-- Testimonial Author -->
										<div class="author-data clearfix">
										
											<!-- Author Avatar -->
											<div class="testimonial-avatar">
												<img src="images/review-author-3.jpg" alt="testimonial-avatar">
											</div>

											<!-- Author Data -->
											<div class="review-author">
												<h5 class="h5-sm">Step 2:</h5>	
												<h6 class="h5-sm">Visa application</h6>	
												<span></span>										
											</div>

										</div>	<!-- End Testimonial Author -->	
																
										<!-- Testimonial Text -->
										<p>This involves communication between you and our staff to gather all relevant documentation required, filling in visa application forms and ensuring we have a complete application ready to be submitted to the Department of Home Affairs (DHA)				   
										</p>
						
									</div>
							
							
									<!-- TESTIMONIAL #3 -->
									<div class="review-1">

										<!-- Testimonial Author -->
										<div class="author-data clearfix">
										
											<!-- Author Avatar -->
											<div class="testimonial-avatar">
												<img src="images/review-author-1.jpg" alt="testimonial-avatar">
											</div>

											<!-- Author Data -->
											<div class="review-author">
												<h5 class="h5-sm">Step 3:</h5>	
												<h6 class="h5-sm">Keep you up-to-date</h6>	
												<span></span>										
											</div>

										</div>	<!-- End Testimonial Author -->	
																										
										<!-- Testimonial Text -->
										<p>The last stage involves keeping a track of your application and keeping you updated on the progress of the application until a decision is made.  									   
										</p>															
																
									</div>
									
									
									
									
								
								</div>
							</div>									
						</div>	<!-- END TESTIMONIALS CONTENT --> 
								
							
					</div>	   <!-- End container -->
				</section>	 <!-- END TESTIMONIALS-1 -->

@endsection