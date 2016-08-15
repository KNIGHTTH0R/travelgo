<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Travelgo - About </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<? echo base_url('assets/images/favicon.jpg'); ?>">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <!-- Fonts -->




        <!-- CSS -->

        <link rel="stylesheet" href="<? echo base_url('assets/cssLanding/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<? echo base_url('assets/cssLanding/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<? echo base_url('assets/cssLanding/owl.carousel.css'); ?>">
        <link rel="stylesheet" href="<? echo base_url('assets/cssLanding/owl.theme.css'); ?>">
        <link rel="stylesheet" href="<? echo base_url('assets/cssLanding/animate.css'); ?>">
        <link rel="stylesheet" href="<? echo base_url('assets/cssLanding/main.css'); ?>">
        <link rel="stylesheet" href="<? echo base_url('assets/cssLanding/responsive.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<? echo base_url('assets/cssLanding/custom.css'); ?>">
        

        <!-- Js -->
        <script src="<? echo base_url('assets/jsLanding/vendor/modernizr-2.6.2.min.js'); ?>"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<? echo base_url("assets/jsLanding/vendor/jquery-1.10.2.min.js"); ?>"><\/script>')</script>
        <script src="<? echo base_url('assets/jsLanding/bootstrap.min.js'); ?>"></script>
        <script src="<? echo base_url('assets/jsLanding/owl.carousel.min.js'); ?>"></script>
        <script src="<? echo base_url('assets/jsLanding/wow.min.js'); ?>"></script>
        <script src="<? echo base_url('assets/jsLanding/main.js'); ?>"></script>
        <script>
         new WOW(
            ).init();

        var Settings = {
            site_url: '<?php echo site_url()?>',
            base_url: '<?php echo base_url()?>'
        }
        </script>

    </head>
    <body>

     <nav class="nav-custom navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<? echo site_url('about');?>">
                    <img class="logo-nav" src="<? echo base_url('assets/images/logo.svg'); ?>" alt="Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden active">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="<? echo site_url(); ?>">
                            <img src="<? echo base_url('assets/images/homeOr.svg'); ?>">
                        </a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TOUR <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<? echo site_url('tourInt');?>">INTERNASIONAL</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<? echo site_url('tourDom');?>">DOMESTIK</a></li>
                      </ul>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#contact">TIKET</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="<? echo site_url('b2b');?>">B2B</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#contact">KONTAK</a>
                    </li>
                    
                </ul>
                 <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a class="page-scroll" href="#tes">DAFTAR</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#tes">MASUK</a>
                    </li>
                     <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">IDR <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">USD</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">YEN</a></li>
                      </ul>
                    </li>
                 </ul>
            </div>


            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <header id="custom">
        <div class="container app-showcase wow fadeInDown" data-wow-delay=".5s">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="desc-head text-center"><b>TRAVELGO DISCOVER INDONESIA EXPERIENCE</b></h3><hr class="head-hr">
                    <p class="head-p text-center">the mission is to provide all of our customers with the "Indonesia experience" based on individual needs, interests and budgets. We are entirely committed to help realize our clientele's dream of exploring and experiencing this amazing destination!We offer high-quality travel packages for various destination around the globe. Headquartered in Jakarta, Kristal tour serves the national and international travel markets as a top-quality, full-service provider.Hope you enjoy an excellent travel experience with us.</p>

                    <h3 class="text-center"> 
                        <video autoplay poster="<? echo base_url('assets/imagesLanding/about.png'); ?>" id="bgvid" loop>
                          <source src="<? echo base_url('assets/videos/pygmy accueil.mp4'); ?>" type="video/mp4">
                       </video>
                    </h3>
                </div>
            </div>
        </div>
        <div class="container-tagline col-lg-12 col-md-12 col-sm-12 app-showcase wow fadeInDown" data-wow-delay=".7s">
            <h3 class="text-center">Travel with us, travel with <b>joy and extraordinary fun</b>
            &nbsp;&nbsp;&nbsp;<button class="daftar">DAFTAR</button>&nbsp;&nbsp;&nbsp;<button class="masuk">MASUK</button></h3>
        </div>
    </header>

    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title wow pulse" data-wow-delay=".5s">
                        <h2>Our Services</h2>
                        <p>
                            Lorem Ipsum is used for help people to reach their success day by day
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="block wow fadeInLeft" data-wow-delay=".7s">
                        <img style="cursor:pointer;" class="services" src="<? echo base_url('assets/images/top-nav/tool.svg'); ?>" alt="">
                        <h3>Tours</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been typesetting industry 
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="block wow fadeInLeft" data-wow-delay=".8s">
                        <img class="services" src="<? echo base_url('assets/images/top-nav/tickets.svg'); ?>" alt="">
                        <h3>Tickets</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been typesetting industry 
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="block wow fadeInLeft" data-wow-delay="1.1s">
                        <img class="services" src="<? echo base_url('assets/images/top-nav/social.svg'); ?>" alt="">
                        <h3>B2B</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been typesetting industry 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="showcase">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center wow fadeInUp" data-wow-delay=".5s">
                        <h2><b>Why look for tours at Travelgo?</b></h2>
                        <img src="<? echo base_url('assets/imagesLanding/show.png'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title wow pulse" data-wow-delay=".5s">
                        <h2>Partner</h2>
                        <p>
                            Every people is deserved to have a better Tours
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="block">
                        <div class="media wow fadeInDown" data-wow-delay=".5s">
                            <img class="partner media-object pull-left" src="<? echo base_url('assets/imagesLanding/partner2.svg');?>" alt="Image">
                            <div class="media-body">
                                <h4 class="media-heading">Garuda Indonesia</h4>
                                <p>Start from now, you can easily manage your time and it has reminder to let you know every time.</p>
                            </div>
                        </div>
                        <div class="media wow fadeInDown" data-wow-delay=".8s">
                                <img class="partner media-object pull-left" src="<? echo base_url('assets/imagesLanding/partner1.svg');?>" alt="Image">
                            <div class="media-body">
                                <h4 class="media-heading">Sriwijaya</h4>
                                <p>Start from now, you can easily manage your time and it has reminder to let you know every time.</p>
                            </div>
                        </div>
                        <div class="media wow fadeInDown" data-wow-delay="1.1s">
                                <img class="partner media-object pull-left" src="<? echo base_url('assets/imagesLanding/partner3.svg'); ?>" alt="Image">
                            <div class="media-body">
                                <h4 class="media-heading">Lion Air</h4>
                                <p>Start from now, you can easily manage your time and it has reminder to let you know every time.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="block">
                        <div class="media wow fadeInDown" data-wow-delay=".5s">
                            <img class="partner media-object pull-left" src="<? echo base_url('assets/imagesLanding/partner2.svg'); ?>" alt="Image">
                            <div class="media-body">
                                <h4 class="media-heading">Garuda Indonesia</h4>
                                <p>Start from now, you can easily manage your time and it has reminder to let you know every time.</p>
                            </div>
                        </div>
                        <div class="media wow fadeInDown" data-wow-delay=".8s">
                                <img class="partner media-object pull-left" src="<? echo base_url('assets/imagesLanding/partner1.svg'); ?>" alt="Image">
                            <div class="media-body">
                                <h4 class="media-heading">Sriwijaya</h4>
                                <p>Start from now, you can easily manage your time and it has reminder to let you know every time.</p>
                            </div>
                        </div>
                        <div class="media wow fadeInDown" data-wow-delay="1.1s">
                                <img class="partner media-object pull-left" src="<? echo base_url('assets/imagesLanding/partner3.svg'); ?>" alt="Image">
                            <div class="media-body">
                                <h4 class="media-heading">Lion Air</h4>
                                <p>Start from now, you can easily manage your time and it has reminder to let you know every time.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
                                 

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default" role="navigation">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          
                            <p>Daftarkan email Anda untuk info tiket PROMO GRATIS!</p>
                              <input class="foot-text" type="text" placeholder="Example@email.com"/>
                              <button class="foot-btn">DAFTAR</button>
                          
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                        <div class="social-link pull-right">
                            <ul>
                                <li>

                                    <a href="#">
                                        <i class="fa fa-facebook"></i>    
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>    
                                    </a>
                                </li>
                            </ul>
                        </div>

                        </div><!-- /.navbar-collapse -->
                       
                      </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    <script src="<? echo base_url('assets/js/SmoothScroll.min.js');?>"></script>
<script type="text/javascript">
 var maxHeight = window.screen.height;

     // SVG / PNG
  if (!Modernizr.svg) {
   $('img[src*="svg"]').attr('src', function () {
     return $(this).attr('src').replace('.svg', '.png');
   });
 }


 $(document).ready(function(){
    $('#custom').css('height',maxHeight-143);
 });
</script>



        
        

        
    </body>

</html>
