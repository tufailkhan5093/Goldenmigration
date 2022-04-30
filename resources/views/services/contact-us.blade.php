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
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- End row -->
            </div> <!-- End container -->
        </div> <!-- END BREADCRUMB -->




        <!-- CONTACTS-4
        ============================================= -->
        <section id="contacts-4" class="bg-lightgrey wide-80 contacts-section division">
            <div class="container">


                <!-- SECTION TITLE -->
                <div class="row">
                    <div class="col-md-12 section-title center">

                        <!-- Title -->
                        <h2 class="h2-xs">Have Questions? Get in Touch</h2>

                        <!-- Text -->
                        <p class="p-md">Kindly provide us with more details regarding your enquiry so we can
                            assess your situation and provide you with a prompt response. Please fill in the enquiry form on
                            our enquiries page.
                        </p>

                    </div>
                </div> <!-- END SECTION TITLE -->


                <div class="row">


                    <div class="col-lg-5">
                        <div class="contact-boxes">


                            <!-- LOCATION -->
                            <div class="contact-box icon-xs clearfix mb-25">

                                <!-- Icon -->
                                <div class="contact-box-icon"><span class="flaticon-240-placeholder"></span></div>

                                <!-- Text -->
                                <div class="contact-box-txt">
                                    <h5 class="h5-sm deepblue-color">5 Monash Crescent ,</h5>
                                    <h5 class="h5-sm deepblue-color">Clayton South,</h5>
                                    <h5 class="h5-xs deepblue-color">Victoria, 3169, Australia.</h5>
                                    <p class="grey-color">Our Location</p>
                                </div>

                            </div>


                            <!-- PHONES -->
                            <div class="contact-box icon-xs clearfix mb-25">

                                <!-- Icon -->
                                <div class="contact-box-icon"><span class="flaticon-172-telephone-1"></span></div>

                                <!-- Text -->
                                <div class="contact-box-txt">
                                    <h5 class="h5-sm deepblue-color">P: +61 423 150 855</h5>
                                    <!-- <h5 class="h5-xs deepblue-color">F: +61 423 150 855</h5>	-->
                                    <p class="grey-color">Let's Talk</p>
                                </div>

                            </div>


                            <!-- EMAIL -->
                            <div class="contact-box icon-xs clearfix">

                                <!-- Icon -->
                                <div class="contact-box-icon"><span class="flaticon-235-mail"></span></div>

                                <!-- Text -->
                                <div class="contact-box-txt">
                                    <h6 class="h5-xs deepblue-color"><a
                                            href="info%40goldenmigration.com.html">info@goldenmigration.com.au</a></h6>

                                    <p class="grey-color">Drop a Line</p>
                                </div>

                            </div>


                        </div>
                    </div>


                    <!-- CONTACT FORM -->
                    <!-- CONTACT FORM -->
                    <div class="col-lg-7" style="margin: auto !important;">
                        <div class="form-holde">
                           <form method="POST">
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
                    </div> <!-- END CONTACT FORM -->
                    <!-- END CONTACT FORM -->


                </div> <!-- End row -->
            </div> <!-- End container -->
        </section> <!-- END CONTACTS-4 -->




        <!-- GOOGLE MAP
        ============================================= -->
        <div class="map bg-lightgrey division">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div><iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.453971481898!2d145.13347631519017!3d-37.94318474923276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66b34e39d604b%3A0xb1db853bdf7d4c49!2s5%20Monash%20Cres%2C%20Clayton%20South%20VIC%203169%2C%20Australia!5e0!3m2!1sen!2s!4v1637212726363!5m2!1sen!2s"
                                width=100% height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
