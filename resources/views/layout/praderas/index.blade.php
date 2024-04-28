<!DOCTYPE html>
<html lang="en" dir="ltr">



@section('htmlheader')
	@include('layout.praderas.htmlheader')
@show


<body>

    <!--  HEADER -->

     <header class="main-header clearfix">

         <div class="top-bar">

             <div class="container">

                 <div class="row clearfix">

                     <div class="col-md-6 col-sm-12">

                         {{-- <span class="top-phone-no">
                             <i class="fa fa-phone-square"></i>
                             +54 381-5758222
                         </span> --}}

                         <span class="top-email-info">
                             <i class="fa fa-paper-plane"></i>
                             <a href="#">comision@praderasdelnogal.com</a>
                         </span>

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
                         <a class="logo" href="index.html"><img alt="" src=" {{asset ('img/logo.png')}} "></a>
                     </div>
                     <div class="navbar-collapse collapse">
                         <ul class="nav navbar-nav navbar-right">
                             <li class="drop">
                                 <a href="index.html">Home</a>
                             </li>
                             <li class="drop"><a href="#servicios">Servicios</a>
                             </li>
                             <li>
                                 <a href="#ubicacion">Ubicación</a>
                             </li>
                             <li>
                                 <a href="#amenities">Amenities</a>
                             </li>
                             <li>
                                <a href="#gallery">Galería</a>
                            </li>
                             {{-- <li>
                                 <a href="#">Login</a>
                             </li> --}}
                             <li><a href="mailto:comision@praderasdelnogal.com">Contacto</a></li>
                         </ul>
                     </div>
                 </div>
             </div>

         </section>


     </header> <!-- end main-header  -->

     <!--  HOME SLIDER BLOCK  -->
<section>
    <div class="item">

        <img src="{{ asset('img/home_1_slider_1.png') }}" alt="img">

    </div>
</section>
     <!-- slider start -->
     {{-- <div class="slider-wrap">
         <div id="slider_1" >

            <div class="item">

                <img src="{{ asset('img/home_1_slider_1.png') }}" alt="img">
                <div class="slider-content">
                    <div class="container">
                        <h2>COUNTRY <br> PRADERAS DEL NOGAL</h2>
                        <h3>Vive en plena armonía con la naturaleza a<br>solo 15 minutos de la ciudad.</h3>
                        <a href="#" class="btn btn-slider">Ingreso a Vecinos</a>
                    </div><!-- /.slider-content -->
                </div>
            </div>

             <div class="item">

                 <img src="{{ asset('img/home_1_slider_1.png') }}" alt="img">
                 <div class="slider-content">
                     <div class="container">
                        <h2>COUNTRY <br> PRADERAS DEL NOGAL</h2>
                        <h3>Cambia de aire y respira la frescura de la<br>naturaleza en tu hogar</h3>
                         <a href="#" class="btn btn-slider">Ingreso a Vecinos</a>
                     </div><!-- /.slider-content -->
                 </div>
             </div>

             <div class="item">

                <img src="{{ asset('img/home_1_slider_1.png') }}" alt="img">
                <div class="slider-content">
                    <div class="container">
                        <h2>COUNTRY <br> PRADERAS DEL NOGAL</h2>
                        <h3>Descubre la tranquilidad de la vida <br>en medio de la naturaleza  </h3>
                        <a href="#" class="btn btn-slider">Ingreso a Vecinos</a>
                    </div><!-- /.slider-content -->
                </div>
            </div>

            <div class="item">

                <img src="{{ asset('img/home_1_slider_1.png') }}" alt="img">
                <div class="slider-content">
                    <div class="container">
                        <h2>COUNTRY <br> PRADERAS DEL NOGAL</h2>
                        <h3>Disfruta cada día en compañía de familia y amigos,<br>rodeados de la belleza de la naturaleza</h3>
                        <a href="#" class="btn btn-slider">Ingreso a Vecinos</a>
                    </div><!-- /.slider-content -->
                </div>
            </div>


         </div>
     </div> --}}
     <!-- slider end -->

     <!--  HOW WE WORK SECTION 1 -->




     {{-- <section class="section-content-block section-how-we-work section-secondary-bg">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                    <h2 class="section-heading">Ubicación</h2>
                    <p class="section-subheading">
                        Emplazado sobre la Ruta Nacional N°9 – km 1309, Los Nogales – Tafí Viejo, con una vista increíble al cerro, es la nueva urbanización que revalorizará una de las zonas de mayor crecimiento de Tucumán. <br> <br> Rodeado de naturaleza y a quince minutos del centro de San Miguel de Tucumán, es el country que mejorará al máximo tu calidad de vida.
                     </p>
                     <br>

                     <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Barrio Privado Praderas del Nogal&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co"></a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://embedgooglemap.2yu.co/"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>

                     <p class="section-subheading"> <br>
                        Nuestros amenities invitan a una calidad de vida tranquila y segura, con todas las comodidades que un barrio privado debe tener.
                    </p>
                </div> <!-- end .col-sm-10  -->

            </div> <!--  end .row  -->
        </div> <!--  end .container  -->







</section> --}}
    <!--  end .container Map  -->

     <section class="section-content-block section-how-we-work section-secondary-bg" id="servicios">

         <div class="container">

             <div class="row">

                 <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                     <h2 class="section-heading"><span>Nuestros</span> Servicios</h2>
                     <p class="section-subheading">
                         Increase in the awareness among people about various issues
                     </p>
                 </div> <!-- end .col-sm-10  -->

             </div> <!--  end .row  -->

             <div class="row wow fadeInUp">

                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                     <div class="service-block-bg">

                         <article class="service-block">
                             <h2>Portería de Acceso</h2>
                             <p>Nuestro barrio, cuenta con una portería de acceso con personal las 24 horas del día, brindando seguridad y tranquilidad a todos nuestros vecinos.
                                 <br /><br />

                             </p>

                             <i class="fa fa  fa-shield"></i>

                         </article>

                     </div>
                 </div> <!--  end col-sm-6  -->

                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                     <div class="service-block-bg">

                         <article class="service-block">
                             <h2>Seguridad</h2>
                             <p>Contamos con personal capacitado recorriendo el barrio, asegurando y proporcionando seguridad a todas las viviendas en la comunidad.
                                   <br /><br />
                             </p>
                             <i class="fa fa  fa-motorcycle"></i>
                         </article>

                     </div>

                 </div> <!--  end col-sm-6  -->

             </div>



                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                     <div class="service-block-bg">

                         <article class="service-block">

                             <h2>Adoquines e iluminación</h2>
                             <p>En nuestro barrio, las calles están adoquinadas y cuentan con iluminación subterránea para preservar el hermoso paisaje de Los Nogales.
                                   <br /><br />
                             </p>
                             <i class="fa fa-car"></i>
                         </article>

                     </div>

                 </div> <!--  end col-sm-6  -->



                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div class="service-block-bg">

                        <article class="service-block">

                            <h2>Agua Potable</h2>
                            <p>Praderas del Nogal cuenta con su propio pozo de agua potable, garantizando un servicio continuo y sin cortes para todos los vecinos.
                                  <br /><br />
                            </p>
                            <i class="fa fa-tint"></i>
                        </article>

                    </div>

                </div> <!--  end col-sm-6  -->

             </div> <!-- end row  -->


         </div> <!--  end .container  -->

     </section>
     <!--  end .section-how-we-work -->

     <!--  CAUSE SECTION  -->

     <section class="section-content-block cause-section-1" id="ubicacion">

         <div class="container wow fadeInUp">

             <div class="row section-heading-wrapper">

                 <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                     <h2 class="section-heading section-heading-alt"><span>Ubicación </span></h2>
                      <p class="section-subheading section-subheading-alt">
                         Podes ingresar al mapa y llegar a nuestro Country
                     </p>
                 </div> <!-- end .col-sm-10  -->

             </div> <!-- end .row  -->

             <div class="row">

                <div style="text-align: center;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3564.504604413656!2d-65.22843482350483!3d-26.696321984199148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x942266ed8285bb99%3A0x3234fef7630866ab!2sBarrio%20Privado%20Praderas%20del%20Nogal!5e0!3m2!1ses-419!2sar!4v1693673852396!5m2!1ses-419!2sar" width="800" height="300" style="border:0; display: inline-block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>


                {{-- <div class="cause-items">

                     <div class="col-sm-12">

                         <div class="row">

                             <div class="cause-wrapper">

                             <div class="col-md-5 col-sm-12 hidden-xs no-padding">
                                 <figure class="cause-img">

                                     <img src="{{asset ('img/social_cause_1.jpg')}} " alt="Cause" />
                                     <a class="btn btn-default cause-button" href="#">Donate Now</a>
                                 </figure> <!-- end .cause-img  -->
                             </div>
                             <!-- end .col-sm-4  -->

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

                             </div>
                             <!-- end .col-sm-8  -->

                             </div> <!-- end .cause-wrapper  -->

                         </div> <!-- end .row  -->

                     </div> <!-- end .col-md-4  -->

                     <div class="col-sm-12">

                         <div class="row">

                             <div class="cause-wrapper">

                             <div class="col-md-5 col-sm-12 hidden-xs no-padding">
                                 <figure class="cause-img">
                                     <img src="{{asset ('img/social_cause_2.jpg')}} " alt="Cause" />
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

                     </div>
                     <!-- end .col-md-4  -->

                 </div> --}}


             </div>
             <!-- end .row  -->


         </div> <!-- end .container  -->

     </section> <!-- end .cause-section-1  -->


     <!-- TEAM SECTION 2 -->

     {{-- <section class="section-content-block section-our-team  section-pure-white-bg">

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
                                 <img src="{{asset ('img/team_6.jpg')}} " alt="" />
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
                                 <img src="{{asset ('img/team_7.jpg')}} " alt="" />
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
                                 <img src="{{asset ('img/team_8.jpg')}} " alt="" />
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
                                 <img src="{{asset ('img/team_9.jpg')}} " alt="" />
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

     </section>  --}}
     <!--  end .section-our-team -->

     <!--  CTA SECTION  -->

     {{-- <section class="cta-section-2">
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
     </section> --}}


     <!--  EVENT SECTION  -->

     <section class="section-content-block event-section-1 section-secondary-bg" id="amenities">

         <div class="container wow fadeInUp">

             <div class="row section-heading-wrapper">

                 <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                     <h2 class="section-heading"><span>Tus mejores</span> momentos</h2>
                      <p class="section-subheading">
                        Invita a tu familia y amigos a compartir tus momentos más especiales en nuestras instalaciones. En un ambiente acogedor y lleno de comodidades, crea recuerdos inolvidables que atesorarás para siempre.                     </p>
                 </div> <!-- end .col-sm-10  -->

             </div> <!-- end .row  -->

             <div class="row">

                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                     <div class="event_wrapper xs-margin">

                         <figure class="event-img">

                             <img src="{{asset ('img/event_2.jpg')}} " alt="event" />


                         </figure> <!-- end .cause-img  -->

                         <div class="event-content">

                             <div class="event-text">

                                 <h5><a href="#">Club House</a></h5>

                             </div> <!--  end .cause-text  -->



                         </div> <!-- end .cause-content  -->

                     </div><!-- end .custom-event-list-wrapper -->

                 </div> <!-- end .col-md-4  -->

                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                     <div class="event_wrapper xs-margin">

                         <figure class="event-img">

                             <img src="{{asset ('img/event_1.jpg')}} " alt="event" />


                         </figure> <!-- end .cause-img  -->

                         <div class="event-content">

                             <div class="event-text">

                                 <h5><a href="#"> Cancha de Fútbol</a></h5>


                             </div> <!--  end .cause-text  -->

                         </div> <!-- end .cause-content  -->

                     </div><!-- end .custom-event-list-wrapper -->

                 </div> <!-- end .col-md-4  -->

                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                     <div class="event_wrapper xs-margin">

                         <figure class="event-img">

                             <img src="{{asset ('img/event_3.jpg')}} " alt="event" />


                         </figure> <!-- end .cause-img  -->

                         <div class="event-content">

                             <div class="event-text">

                                 <h5><a href="#">Plaza con Juegos</a></h5>


                             </div> <!--  end .cause-text  -->



                         </div> <!-- end .cause-content  -->

                     </div><!-- end .custom-event-list-wrapper -->

                 </div> <!-- end .col-md-4  -->

             </div> <!-- end .row  -->


             </div> <!-- end .row  -->

         </div> <!-- end .container  -->

     </section> <!-- end .event-section-1  -->


     <!--  COUNTER SECTION  -->

     <section class="section-content-block section-counter">

         <div class="container-fluid wow fadeInUp">

             <div class="row">

                 <div class="col-md-2 col-sm-12">

                     <div class="counter-block-1 text-center">

                         <h4>Lotes</h4>
                         <span class="counter">266</span>

                     </div>

                 </div> <!--  end col-sm-3  -->

                 <div class="col-md-2 col-sm-12">

                     <div class="counter-block-1 text-center">


                         <h4>m2 del barrio</h4>
                         <span class="counter">50429</span>


                     </div>

                 </div> <!--  end col-sm-3  -->

                 <div class="col-md-2 col-sm-12">

                    <div class="counter-block-1 text-center">

                        <h4>cuadras</h4>
                         <span class="counter">21</span>

                    </div>
                </div> <!--  end col-sm-3  -->

                 <div class="col-md-2 col-sm-12">

                     <div class="counter-block-1 text-center">


                         <h4>Viviendas</h4>
                         <span class="counter">131</span>


                     </div>

                 </div> <!--  end col-sm-3  -->

                 <div class="col-md-2 col-sm-12">

                     <div class="counter-block-1 text-center">

                         <h4>En obra</h4>
                         <span class="counter">71</span>

                     </div>

                 </div> <!--  end col-sm-3  -->

                 <div class="col-md-2 col-sm-12">

                     <div class="counter-block-1 text-center">


                         <h4>min. al centro</h4>
                         <span class="counter">15</span>

                     </div>

                 </div> <!--  end col-sm-3  -->





             </div> <!-- end row  -->

         </div> <!--  end .container  -->

     </section> <!--  end .section-counter -->


     <!--  GALLERY CONTENT  -->

     <section class="section-content-block no-bottom-padding" id="gallery">

         <div class="container">

             <div class="row section-heading-wrapper">

                 <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                     <h2 class="section-heading"><span>Galería de </span> Fotos</h2>
                     <p class="section-subheading">
                          Algúnas imagenes de nuestro querído barrio
                     </p>
                 </div> <!-- end .col-sm-10  -->

             </div> <!-- end .row  -->

         </div> <!--  end .container -->

         <div class="container-fluid wow fadeInUp">


             <div class="row no-padding-gallery">

                 <div class="col-md-3 col-sm-12 gallery-container">

                     <a class="gallery-light-box" data-gall="myGallery" href="{{asset ('img/gallery_1.png')}}">

                         <figure class="gallery-img">

                             <img src="{{asset ('img/gallery_1.png')}} " alt="gallery image" />

                         </figure> <!-- end .cause-img  -->

                     </a> <!-- end .gallery-light-box  -->

                 </div><!-- end .col-sm-3  -->

                 <div class="col-md-3 col-sm-12 gallery-container">

                     <a class="gallery-light-box"  data-gall="myGallery" href=" {{asset ('img/gallery_5.png')}}">

                         <figure class="gallery-img">

                             <img src="{{asset ('img/gallery_5.png')}} " alt="gallery image" />

                         </figure> <!-- end .cause-img  -->

                     </a>

                 </div><!-- end .col-sm-3  -->

                 <div class="col-md-6 col-sm-12 gallery-container">

                     <a class="gallery-light-box"  data-gall="myGallery" href="{{asset ('img/gallery_3.png')}} ">

                         <figure class="gallery-img">

                             <img src="{{asset ('img/gallery_3.png')}} " alt="gallery image" />

                         </figure> <!-- end .cause-img  -->

                     </a>

                 </div><!-- end .col-sm-3  -->

             </div> <!-- end .row  -->

             <div class="row no-padding-gallery">

                 <div class="col-md-6 col-sm-12 gallery-container">

                     <a class="gallery-light-box"  data-gall="myGallery" href=" {{asset ('img/gallery_4.png')}}">

                         <figure class="gallery-img">

                             <img src="{{asset ('img/gallery_4.png')}} " alt="gallery image" />

                         </figure> <!-- end .cause-img  -->

                     </a>

                 </div><!-- end .col-sm-3  -->

                 <div class="col-md-3 col-sm-12 gallery-container">

                     <a class="gallery-light-box" data-gall="myGallery" href="{{asset('img/gallery_2.png')}}">

                         <figure class="gallery-img">

                             <img src="{{asset ('img/gallery_2.png')}} " alt="gallery image" />

                         </figure> <!-- end .cause-img  -->

                     </a> <!-- end .gallery-light-box  -->

                 </div><!-- end .col-sm-3  -->

                 <div class="col-md-3 col-sm-12 gallery-container">

                     <a class="gallery-light-box"  data-gall="myGallery" href=" {{asset ('img/gallery_6.png')}} ">

                         <figure class="gallery-img">

                             <img src="{{asset ('img/gallery_6.png')}} " alt="gallery image" />

                         </figure> <!-- end .cause-img  -->

                     </a>

                 </div><!-- end .col-sm-3  -->


             </div> <!-- end .row  -->

         </div><!-- end .container-fluid  -->

     </section> <!-- end .section-content-block  -->

     <!-- CLIENT LOGO SECTION  -->

     {{-- <section class="section-content-block section-client-logo">

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

                         <img src="{{asset ('img/logo_1.png')}} " alt="" />

                     </div>

                     <div class="logo">

                         <img src="{{asset ('img/logo_2.png')}} " alt="" />

                     </div>

                     <div class="logo">

                         <img src="{{asset ('img/logo_3.png')}} " alt="" />

                     </div>

                     <div class="logo">

                         <img src="{{asset ('img/logo_4.png')}} " alt="" />

                     </div>

                     <div class="logo">

                         <img src="{{asset ('img/logo_5.png')}} " alt="" />

                     </div>


                 </div> <!-- end .testimonial-container  -->

             </div> <!-- end row  -->

         </div> <!-- end .container  -->

     </section>  --}}

     <!--  end .section-client-logo -->


     @yield('content')
     @include('layout.praderas.footer')
     @section('scripts')
         @include('layout.praderas.scripts')
     @show

 </body>



</html>
