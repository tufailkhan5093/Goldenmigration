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
								    	<li class="breadcrumb-item"><a href="about.html">Visas</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Skilled Visa</li>
								  	</ol>
								</nav>
							</div>
						</div>  <!-- End row -->
					</div>	<!-- End container -->		
				</div>	<!-- END BREADCRUMB -->




				<!-- ABOUT-9
				============================================= -->
				<section id="about-9" class="wide-60 about-section division">
					<div class="container">	
						<div class="row">


							<!-- ABOUT TEXT -->
							<div class="col-lg-8">
								<div class="about-9-txt mb-40 pr-15">

									<!-- Image -->
									<div class="about-9-img mb-40">
										<img class="img-fluid" src="{{asset('images')}}/{{$check->image}}" alt="about-image" />
									</div>

									<!-- Title -->
									<h3 class="h3-md">Skilled visa</h3>
									
{!!$check->description!!}


 <p>A general summary of the different General Skilled Migration (GSM) visas: 
									</p>
<p></p>

	<div class="map bg-lightgrey division">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div >
								    
								    <img src="images/Skilledvisatbl.png" width=100% height=100% alt="mobile-logo"/>
								</div>
							</div>
						</div>
					</div>
				</div>


								</div>
							</div>	<!-- END ABOUT TEXT -->


							<!-- SIDEBAR -->
							<aside id="sidebar" class="col-lg-4">
								<!-- SIDEBAR CATEGORIES --> 
								<div class="blog-categories sidebar-div mb-50">
									<!-- Title -->
									<h5 class="h5-lg">Visa Categories: </h5>
									<!-- List -->
									<ul class="blog-category-list clearfix">
										<li><a href="{{route('student-visa')}}" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Study Visa in Australia</a></li>
										<li><a href="{{route('visitor-visa')}}" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Visitor Visas</a></li>
										<li><a href="{{route('work-visa')}}" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Work Visas</a></li>
										<li><a href="{{route('partner-visa')}}" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Partner Visas</a></li>
										<li><a href="{{route('business-visa')}}" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Business Visa</a></li>
										<li><a href="{{route('skilled-visa')}}" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Skilled Visas</a></li>
										<li><a href="{{route('parent-visa')}}" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Parent Visas</a></li>
										<li><a href="{{route('child-visa')}}" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Child Visas</a></li>
										<li><a href="{{route('appeals')}}" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Appeals</a></li>
										<li><a href="{{route('citizenship')}}" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Australian Citizenship</a></li>
										<li><a href="{{route('residentreturn-visa')}}" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Resident Return visas</a></li>
										<li><a href="{{route('contact-us')}}" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Other Services</a></li>
									</ul>
								</div>
							</aside>								<!-- END SIDEBAR -->


						</div>    <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END ABOUT-9 -->




				<!-- HORIZONTAL GREY LINE -->
				<div class="section-divider"><div class="container"><div class="row"><div class="grey-border"></div></div></div></div>
                <div class="section-divider"><div class="container"><div class="row"><div class="grey-border"></div></div></div></div>


<p></p>
				
			<!-- CONTACT FORM-3
			============================================= -->
			
			<div class="row">	
							<div class="col-md-12 section-title center">		

				 				<!-- Title -->
				 				<h5 class="h2-xs">If you need more information on whether you meet the eligibility of these visas, please</h5>
				 				<h4 style="color:Tomato;">book a free initial consultation </h4>
								<h5 class="h2-xs">with one of our friendly staff so we can assist you further.</h5>
								<P></P>
			
			
<div class="form-style-3">
 <!-- CONTACT FORM -->	
					 		<div class="col-lg-7" style="margin: auto !important;">
					 			<div class="form-holde">
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
					 		</div>	 <!-- END CONTACT FORM -->  </div>
  



	</div>
						</div>	 
			<!-- END CONTACT FORM-3
			============================================= -->

@endsection