<!DOCTYPE html>
<html lang="en" dir="ltr">



@section('htmlheader')
	@include('layout.praderas.htmlheader')
@show


<body>

    {{-- @include('layout.praderas.menu') --}}

    <!--  HEADER -->

     <header class="main-header clearfix">

         <div class="top-bar">

             <div class="container">

                 <div class="row clearfix">

                     <div class="col-md-6 col-sm-12">

                         <span class="top-phone-no">
                             <i class="fa fa-phone-square"></i>
                             +093-120-525-9162
                         </span>

                         <span class="top-email-info">
                             <i class="fa fa-paper-plane"></i>
                             <a href="#">info@example.com</a>
                         </span>

                     </div> <!-- end col-sm-6  -->

                     <div class="col-md-6 col-sm-12 text-right hidden-xs top-donation-btn-container">

                         <a href="donation.html" title="Donate Now" class="btn top-donate-btn" >DONATE NOW</a>

                     </div> <!-- end col-sm-6  -->

                 </div> <!-- end .row  -->

             </div> <!--  end .container -->

         </div> <!--  end .top-bar  -->

         <section class="header-wrapper navgiation-wrapper">

             <div class="navbar navbar-default">
                 <div class="container">
                     <div class="navbar-header">
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                         </button>
                         <a class="logo" href="index.html"><img alt="" src=" {{asset ('theme/images/logo.png')}} "></a>
                     </div>
                     <div class="navbar-collapse collapse">
                         <ul class="nav navbar-nav navbar-right">
                             <li class="drop">
                                 <a href="index.html" title="Home Layout 01">Home</a>
                                 <ul class="drop-down">
                                     <li><a href="index.html" title="Home Layout 01">Home Layout 1</a></li>
                                     <li><a href="home-2.html" title="Home Layout 02">Home Layout 2</a></li>
                                 </ul>
                             </li>
                             <li class="drop"><a href="#">Pages</a>
                                 <ul class="drop-down">
                                     <li><a href="about-us.html" title="About Us">About Us</a></li>
                                     <li><a href="service.html" title="Services">Services</a></li>
                                     <li class="drop"><a href="#">Gallery</a>
                                          <ul class="drop-down level3">
                                             <li><a href="gallery-1.html">Layout 01</a></li>
                                             <li><a href="gallery-2.html">Layout 02</a></li>
                                             <li><a href="gallery-3.html">Layout 03</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="donation.html" title="Donation">Donation</a></li>
                                     <li><a href="404.html" title="404 Page">404 Page</a></li>
                                     <li class="drop"><a href="#">Level 3</a>
                                         <ul class="drop-down level3">
                                             <li><a href="#">Level 3.1</a></li>
                                             <li><a href="#">Level 3.2</a></li>
                                             <li><a href="#">Level 3.3</a></li>
                                         </ul>
                                     </li>
                                 </ul>
                             </li>

                             <li>
                                 <a href="#">Causes</a>
                                 <ul class="drop-down">
                                     <li><a href="causes.html">All Causes</a></li>
                                     <li><a href="cause-single.html">Single Cause</a></li>
                                 </ul>
                             </li>

                             <li>
                                 <a href="#">Events</a>
                                 <ul class="drop-down">
                                     <li><a href="events.html">All Events</a></li>
                                     <li><a href="event-single.html">Single Event</a></li>
                                 </ul>
                             </li>

                             <li>
                                 <a href="#">Blog</a>
                                 <ul class="drop-down">
                                     <li><a href="blog.html">All Posts</a></li>
                                     <li><a href="single.html">Single Page</a></li>
                                 </ul>
                             </li>

                             <li><a href="contact.html">Contact</a></li>
                         </ul>
                     </div>
                 </div>
             </div>

         </section>


     </header> <!-- end main-header  -->

     <!--  HOME SLIDER BLOCK  -->

     <!-- slider start -->
     <div class="slider-wrap">
         <div id="slider_1" class="owl-carousel owl-theme">

             <div class="item">

                 <img src="{{ asset('theme/images/home_1_slider_1.jpg') }}" alt="img">
                 <div class="slider-content">
                     <div class="container">
                         <h2>GROW TREES FOR YOUR FUTURE</h2>
                         <h3>Save The Environment and You Will Save Life And Your Future</h3>
                         <a href="#" class="btn btn-slider">JOIN CAMPAIGN</a>
                         <a href="#" class="btn btn-slider-2">DONATE NOW</a>
                     </div><!-- /.slider-content -->
                 </div>
             </div>

             <div class="item">

                 <img src="{{ asset('theme/images/home_1_slider_2.jpg') }}" alt="img">
                 <div class="slider-content">
                     <div class="container">
                         <h2>GREEN ENVIRONMENT FOR LIFE</h2>
                         <h3>Ensure Green and Healthy Environment For Better Living World</h3>
                         <a href="#" class="btn btn-slider">JOIN WITH US</a>
                         <a href="#" class="btn btn-slider-2">DONATE NOW</a>
                     </div><!-- /.slider-content -->
                 </div>
             </div>


         </div>
     </div>
     <!-- slider end -->

     <!--  HOW WE WORK SECTION 1 -->

     <section class="section-content-block section-how-we-work section-secondary-bg">

         <div class="container">

             <div class="row">

                 <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                     <h2 class="section-heading"><span>Our</span> Goals</h2>
                     <p class="section-subheading">
                         Increase in the awareness among people about various issues
                     </p>
                 </div> <!-- end .col-sm-10  -->

             </div> <!--  end .row  -->

             <div class="row wow fadeInUp">

                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                     <div class="service-block-bg">

                         <article class="service-block">
                             <h2>Awareness on Pollution</h2>
                             <p>Environmental activism has led to an Increase in the awareness among people about various issues human activities have had on the environment.
                                 <br /><br /><a href="#" class="service_read_more">Read More</a>
                             </p>

                             <i class="fa fa fa-flask"></i>

                         </article>

                     </div>
                 </div> <!--  end col-sm-6  -->

                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                     <div class="service-block-bg">

                         <article class="service-block">
                             <h2>Reduction Acid Rain</h2>
                             <p>Environmental activism has led to an Increase in the awareness among people about various issues human activities have had on the environment.
                                   <br /><br /><a href="#" class="service_read_more">Read More</a>
                             </p>
                             <i class="fa fa fa-line-chart"></i>
                         </article>

                     </div>

                 </div> <!--  end col-sm-6  -->

             </div>

             <div class="row wow fadeInUp">

                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                     <div class="service-block-bg">

                         <article class="service-block">

                             <h2>Secure Ozone Layer</h2>
                             <p>Environmental activism has led to an Increase in the awareness among people about various issues human activities have had on the environment.
                                   <br /><br /><a href="#" class="service_read_more">Read More</a>
                             </p>

                             <i class="fa fa fa-leaf"></i>

                         </article>

                     </div>

                 </div> <!--  end col-sm-6  -->

                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                     <div class="service-block-bg">

                         <article class="service-block">

                             <h2>Stop Global Warming</h2>
                             <p>Environmental activism has led to an Increase in the awareness among people about various issues human activities have had on the environment.
                                   <br /><br /><a href="#" class="service_read_more">Read More</a>
                             </p>
                             <i class="fa fa-area-chart"></i>
                         </article>

                     </div>

                 </div> <!--  end col-sm-6  -->

             </div> <!-- end row  -->


         </div> <!--  end .container  -->

     </section> <!--  end .section-how-we-work -->

     <!--  CAUSE SECTION  -->

     <section class="section-content-block cause-section-1">

         <div class="container wow fadeInUp">

             <div class="row section-heading-wrapper">

                 <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                     <h2 class="section-heading section-heading-alt"><span>Our</span> Causes</h2>
                      <p class="section-subheading section-subheading-alt">
                         Increase in the awareness among people about various issues
                     </p>
                 </div> <!-- end .col-sm-10  -->

             </div> <!-- end .row  -->

             <div class="row">

                 <div class="cause-items">

                     <div class="col-sm-12">

                         <div class="row">

                             <div class="cause-wrapper">

                             <div class="col-md-5 col-sm-12 hidden-xs no-padding">
                                 <figure class="cause-img">

                                     <img src="{{asset ('theme/images/social_cause_1.jpg')}} " alt="Cause" />
                                     <a class="btn btn-default cause-button" href="#">Donate Now</a>
                                 </figure> <!-- end .cause-img  -->
                             </div> <!-- end .col-sm-4  -->

                             <div class="col-md-7 col-sm-12 no-padding">

                                 <div class="cause-content">

                                     <div class="cause-text">
                                         <h5><a href="#">Save Greenest Amazon Forest</a></h5>
                                         <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                             Vestibulum tortor quam feugiat vitae ultricies eget tempor sit amet ante.
                                             Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                     </div> <!--  end .cause-text  -->

                                     <div class="progress">
                                         <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bcm"></div>
                                         <span data-raised_percentage="50" class="fund-raised">50%</span>
                                     </div> <!--  end .progress  -->

                                     <div class="fund-item-text">
                                         <span class="fund-raised-text">Raised: $22,000</span><span class="fund-goal-text">Goal: $30,000</span>
                                     </div> <!--  end .fund-item-text  -->

                                 </div> <!-- end .cause-content  -->

                             </div> <!-- end .col-sm-8  -->

                             </div> <!-- end .cause-wrapper  -->

                         </div> <!-- end .row  -->

                     </div> <!-- end .col-md-4  -->

                     <div class="col-sm-12">

                         <div class="row">

                             <div class="cause-wrapper">

                             <div class="col-md-5 col-sm-12 hidden-xs no-padding">
                                 <figure class="cause-img">
                                     <img src="{{asset ('theme/images/social_cause_2.jpg')}} " alt="Cause" />
                                     <a class="btn btn-default cause-button" href="#">Donate Now</a>
                                 </figure> <!-- end .cause-img  -->
                             </div> <!-- end .col-sm-4  -->

                             <div class="col-md-7 col-sm-12 no-padding">

                                 <div class="cause-content">

                                     <div class="cause-text">
                                         <h5><a href="#">Reduce Efect of Energy Industry</a></h5>
                                         <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                             Vestibulum tortor quam feugiat vitae ultricies eget tempor sit amet ante.
                                             Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                     </div> <!--  end .cause-text  -->

                                     <div class="progress">
                                         <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bcm"></div>
                                         <span data-raised_percentage="50" class="fund-raised">50%</span>
                                     </div> <!--  end .progress  -->

                                     <div class="fund-item-text">
                                         <span class="fund-raised-text">Raised: $22,000</span><span class="fund-goal-text">Goal: $30,000</span>
                                     </div> <!--  end .fund-item-text  -->

                                 </div> <!-- end .cause-content  -->

                             </div> <!-- end .col-sm-8  -->

                             </div> <!-- end .cause-wrapper  -->

                         </div> <!-- end .row  -->

                     </div> <!-- end .col-md-4  -->

                 </div>


             </div> <!-- end .row  -->


         </div> <!-- end .container  -->

     </section> <!-- end .cause-section-1  -->


     <!-- TEAM SECTION 2 -->

     <section class="section-content-block section-our-team  section-pure-white-bg">

         <div class="container wow fadeInUp">

             <div class="row section-heading-wrapper">

                 <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                     <h2 class="section-heading section-heading">Volunteers</h2>
                      <p class="section-subheading section-subheading">
                         Increase in the awareness among people about various issues
                     </p>
                 </div> <!-- end .col-sm-10  -->

             </div> <!-- end .row  -->

             <div class="row">

                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                     <div class="team-layout-1 text-center xs-margin">

                         <figure class="team-member">
                             <a href="#" title="Melissa Munoz">
                                 <img src="{{asset ('theme/images/team_6.jpg')}} " alt="" />
                             </a>
                         </figure> <!-- end. team-member  -->
                         <h3>ALEXANDER GARY</h3>
                         <h4>FOUNDER</h4>

                         <div class="team-social-share clearfix">

                             <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                             <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                             <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                             <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>

                         </div> <!-- end .author-social-box  -->

                     </div> <!--  end articles -->

                 </div> <!--  end .col-md-4 col-sm-12  -->

                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                     <div class="team-layout-1 text-center xs-margin">

                         <figure class="team-member">
                             <a href="#" title="Melissa Munoz">
                                 <img src="{{asset ('theme/images/team_7.jpg')}} " alt="" />
                             </a>
                         </figure> <!-- end. team-member  -->
                         <h3>MELISSA MUNOZ</h3>
                         <h4>CO-FOUNDER</h4>

                         <div class="team-social-share clearfix">

                             <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                             <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                             <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                             <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>

                         </div> <!-- end .author-social-box  -->

                     </div> <!--  end articles -->

                 </div> <!--  end .col-md-4 col-sm-12  -->

                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                     <div class="team-layout-1 text-center xs-margin">

                         <figure class="team-member">
                             <a href="#" title="Melissa Munoz">
                                 <img src="{{asset ('theme/images/team_8.jpg')}} " alt="" />
                             </a>
                         </figure> <!-- end. team-member  -->
                         <h3>JOHN ABRAHAM</h3>
                         <h4>CHIEF EDITOR</h4>

                         <div class="team-social-share clearfix">

                             <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                             <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                             <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                             <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>

                         </div> <!-- end .author-social-box  -->

                     </div> <!--  end articles -->

                 </div> <!--  end .col-md-4 col-sm-12  -->

                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                     <div class="team-layout-1 text-center xs-margin">

                         <figure class="team-member">
                             <a href="#" title="Melissa Munoz">
                                 <img src="{{asset ('theme/images/team_9.jpg')}} " alt="" />
                             </a>
                         </figure> <!-- end. team-member  -->
                         <h3>SILVIA STAN</h3>
                         <h4>MANAGER</h4>

                         <div class="team-social-share clearfix">

                             <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                             <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                             <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                             <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>

                         </div> <!-- end .author-social-box  -->

                     </div> <!--  end articles -->

                 </div> <!--  end .col-md-4 col-sm-12  -->

             </div> <!-- end .row  -->

         </div> <!-- end .container  -->

     </section> <!--  end .section-our-team -->

     <!--  CTA SECTION  -->

     <section class="cta-section-2">
         <div class="container wow fadeInUp animated">
             <div class="row">
                 <div class="col-sm-12 text-center">
                     <h5>WATCH AWESOME VIDEO OF</h5>
                     <h2> VOLUNTARY ACTIVITY </h2>
                     <a class="video-icon" href="#">
                        <span class="fa fa-play fa-4x"></span>
                     </a>
                 </div>
             </div>
         </div>
     </section>


     <!--  EVENT SECTION  -->

     <section class="section-content-block event-section-1 section-secondary-bg">

         <div class="container wow fadeInUp">

             <div class="row section-heading-wrapper">

                 <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                     <h2 class="section-heading"><span>Upcoming</span> Events</h2>
                      <p class="section-subheading">
                          Increase in the awareness among people about various issues
                     </p>
                 </div> <!-- end .col-sm-10  -->

             </div> <!-- end .row  -->

             <div class="row">

                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                     <div class="event_wrapper xs-margin">

                         <figure class="event-img">

                             <img src="{{asset ('theme/images/event_2.jpg')}} " alt="event" />
                             <p class="event-info">
                                 <span class="event-date"><i class="fa fa-calendar"></i> August 20, 2016</span>
                                 <span class="event-location"><i class="fa fa-map-marker"></i> Jordana Lows</span>
                             </p>

                         </figure> <!-- end .cause-img  -->

                         <div class="event-content">

                             <div class="event-text">

                                 <h5><a href="#">International Day of Forests</a></h5>
                                 <p class="event-time">01:00pm - 03:00pm</p>

                             </div> <!--  end .cause-text  -->



                         </div> <!-- end .cause-content  -->

                     </div><!-- end .custom-event-list-wrapper -->

                 </div> <!-- end .col-md-4  -->

                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                     <div class="event_wrapper xs-margin">

                         <figure class="event-img">

                             <img src="{{asset ('theme/images/event_1.jpg')}} " alt="event" />
                             <p class="event-info">
                                 <span class="event-date"><i class="fa fa-calendar"></i> August 17, 2016</span>
                                 <span class="event-location"><i class="fa fa-map-marker"></i> Almond Street</span>
                             </p>

                         </figure> <!-- end .cause-img  -->

                         <div class="event-content">

                             <div class="event-text">

                                 <h5><a href="#"> World Meteorological Day</a></h5>
                                 <p class="event-time">01:00pm - 03:00pm</p>

                             </div> <!--  end .cause-text  -->

                         </div> <!-- end .cause-content  -->

                     </div><!-- end .custom-event-list-wrapper -->

                 </div> <!-- end .col-md-4  -->

                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                     <div class="event_wrapper xs-margin">

                         <figure class="event-img">

                             <img src="{{asset ('theme/images/event_3.jpg')}} " alt="event" />
                             <p class="event-info">
                                 <span class="event-date"><i class="fa fa-calendar"></i> August 25, 2016</span>
                                 <span class="event-location"><i class="fa fa-map-marker"></i>Logan Vally</span>
                             </p>

                         </figure> <!-- end .cause-img  -->

                         <div class="event-content">

                             <div class="event-text">

                                 <h5><a href="#">World Environment Day </a></h5>
                                 <p class="event-time">01:00pm - 03:00pm</p>

                             </div> <!--  end .cause-text  -->



                         </div> <!-- end .cause-content  -->

                     </div><!-- end .custom-event-list-wrapper -->

                 </div> <!-- end .col-md-4  -->

             </div> <!-- end .row  -->

             <div class="row">
                 <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
                     <a href="#" class="btn btn-load-more">- Load All Events -</a>
                 </div>
             </div> <!-- end .row  -->

         </div> <!-- end .container  -->

     </section> <!-- end .event-section-1  -->


     <!--  COUNTER SECTION  -->

     <section class="section-content-block section-counter">

         <div class="container-fluid wow fadeInUp">

             <div class="row">

                 <div class="col-md-2 col-sm-12">

                     <div class="counter-block-1 text-center">

                         <h4>Campaigns</h4>
                         <span class="counter">400</span>

                     </div>

                 </div> <!--  end col-sm-3  -->

                 <div class="col-md-2 col-sm-12">

                     <div class="counter-block-1 text-center">


                         <h4>Volunteers</h4>
                         <span class="counter">262</span>


                     </div>

                 </div> <!--  end col-sm-3  -->

                 <div class="col-md-2 col-sm-12">

                     <div class="counter-block-1 text-center">


                         <h4>Projects</h4>
                         <span class="counter">653</span>


                     </div>

                 </div> <!--  end col-sm-3  -->

                 <div class="col-md-2 col-sm-12">

                     <div class="counter-block-1 text-center">

                         <h4>Awards</h4>
                         <span class="counter">364</span>

                     </div>

                 </div> <!--  end col-sm-3  -->

                 <div class="col-md-2 col-sm-12">

                     <div class="counter-block-1 text-center">


                         <h4>Mission</h4>
                         <span class="counter">964</span>

                     </div>

                 </div> <!--  end col-sm-3  -->

                 <div class="col-md-2 col-sm-12">

                     <div class="counter-block-1 text-center">

                         <h4>Donators</h4>
                          <span class="counter">101</span>

                     </div>

                 </div> <!--  end col-sm-3  -->

             </div> <!-- end row  -->

         </div> <!--  end .container  -->

     </section> <!--  end .section-counter -->


     <!--  GALLERY CONTENT  -->

     <section class="section-content-block no-bottom-padding">

         <div class="container">

             <div class="row section-heading-wrapper">

                 <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                     <h2 class="section-heading"><span>Photo</span> Gallery</h2>
                     <p class="section-subheading">
                          Increase in the awareness among people about various issues
                     </p>
                 </div> <!-- end .col-sm-10  -->

             </div> <!-- end .row  -->

         </div> <!--  end .container -->

         <div class="container-fluid wow fadeInUp">


             <div class="row no-padding-gallery">

                 <div class="col-md-3 col-sm-12 gallery-container">

                     <a class="gallery-light-box" data-gall="myGallery" href="{{asset ('theme/images/gallery_1.jpg')}}">

                         <figure class="gallery-img">

                             <img src="{{asset ('theme/images/gallery_1.jpg')}} " alt="gallery image" />

                         </figure> <!-- end .cause-img  -->

                     </a> <!-- end .gallery-light-box  -->

                 </div><!-- end .col-sm-3  -->

                 <div class="col-md-3 col-sm-12 gallery-container">

                     <a class="gallery-light-box"  data-gall="myGallery" href=" {{asset ('theme/images/gallery_2.jpg')}}">

                         <figure class="gallery-img">

                             <img src="{{asset ('theme/images/gallery_5.jpg')}} " alt="gallery image" />

                         </figure> <!-- end .cause-img  -->

                     </a>

                 </div><!-- end .col-sm-3  -->

                 <div class="col-md-6 col-sm-12 gallery-container">

                     <a class="gallery-light-box"  data-gall="myGallery" href="{{asset ('theme/images/gallery_3.jpg')}} ">

                         <figure class="gallery-img">

                             <img src="{{asset ('theme/images/gallery_3.jpg')}} " alt="gallery image" />

                         </figure> <!-- end .cause-img  -->

                     </a>

                 </div><!-- end .col-sm-3  -->

             </div> <!-- end .row  -->

             <div class="row no-padding-gallery">

                 <div class="col-md-6 col-sm-12 gallery-container">

                     <a class="gallery-light-box"  data-gall="myGallery" href=" {{asset ('theme/images/gallery_3.jpg')}}">

                         <figure class="gallery-img">

                             <img src="{{asset ('theme/images/gallery_4.jpg')}} " alt="gallery image" />

                         </figure> <!-- end .cause-img  -->

                     </a>

                 </div><!-- end .col-sm-3  -->

                 <div class="col-md-3 col-sm-12 gallery-container">

                     <a class="gallery-light-box" data-gall="myGallery" href="{{asset('theme/images/gallery_1.jpg')}}">

                         <figure class="gallery-img">

                             <img src="{{asset ('theme/images/gallery_2.jpg')}} " alt="gallery image" />

                         </figure> <!-- end .cause-img  -->

                     </a> <!-- end .gallery-light-box  -->

                 </div><!-- end .col-sm-3  -->

                 <div class="col-md-3 col-sm-12 gallery-container">

                     <a class="gallery-light-box"  data-gall="myGallery" href=" {{asset ('theme/images/gallery_2.jpg')}} ">

                         <figure class="gallery-img">

                             <img src="{{asset ('theme/images/gallery_6.jpg')}} " alt="gallery image" />

                         </figure> <!-- end .cause-img  -->

                     </a>

                 </div><!-- end .col-sm-3  -->


             </div> <!-- end .row  -->

         </div><!-- end .container-fluid  -->

     </section> <!-- end .section-content-block  -->

     <!-- CLIENT LOGO SECTION  -->

     <section class="section-content-block section-client-logo">

         <div class="container wow fadeInUp">

             <div class="row">

                 <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                     <h2 class="section-heading"><span>Our</span> Donors</h2>
                     <p class="section-subheading">
                          Increase in the awareness among people about various issues
                     </p>
                 </div> <!-- end .col-sm-10  -->

             </div> <!--  end .row  -->

             <div class="row">

                 <div class="logo-items logo-layout-1 text-center">

                     <div class="logo">

                         <img src="{{asset ('theme/images/logo_1.png')}} " alt="" />

                     </div>

                     <div class="logo">

                         <img src="{{asset ('theme/images/logo_2.png')}} " alt="" />

                     </div>

                     <div class="logo">

                         <img src="{{asset ('theme/images/logo_3.png')}} " alt="" />

                     </div>

                     <div class="logo">

                         <img src="{{asset ('theme/images/logo_4.png')}} " alt="" />

                     </div>

                     <div class="logo">

                         <img src="{{asset ('theme/images/logo_5.png')}} " alt="" />

                     </div>


                 </div> <!-- end .testimonial-container  -->

             </div> <!-- end row  -->

         </div> <!-- end .container  -->

     </section> <!--  end .section-client-logo -->


     @yield('content')


     @include('layout.praderas.footer')

     @section('scripts')
         @include('layout.praderas.scripts')
     @show

 </body>



</html>
