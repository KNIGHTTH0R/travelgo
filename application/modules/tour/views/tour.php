<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Travelgo - <?php echo $title?> </title>
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
        <link rel="stylesheet" href="<? echo base_url('assets/cssLanding/mainTour.css'); ?>">
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
        <script src="<? echo base_url('assets/jsLanding/tour.js'); ?>"></script>
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
                        <li><a href="<? echo site_url('tour/int');?>">INTERNASIONAL</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<? echo site_url('tour/dom');?>">DOMESTIK</a></li>
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
                    <h2 class="text-left"><b class="tittle-head"><?php echo $title?></b></h2>
                    <p class="sub-head text-left">Explore your travel with our <b>Tour</b> package</p>
                </div>
            </div>
        </div>
    </header>

    <section id="portfolio" class="light-bg">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <div class="section-title">
                        <h2>
                            <a class="filter-button orng1" href="<?php echo site_url('tour/'.$location.'/FIT')?>">FIT</a>
                            <a class="filter-button orng2" href="<?php echo site_url('tour/'.$location.'/GIT')?>">GIT</a>
                            <a class="filter-button orng3" href="<?php echo site_url('tour/'.$location.'/SIC')?>">SIC</a>
                            <a class="filter-button orng4" href="<?php echo site_url('tour/'.$location.'/CUSTOMS')?>">Custom</a>

                            <!-- cahyo modal -->
                            <a class="filter-button orng4" href="#" >Pesan Sekarang</a>

                            


                            <a class="filter-button pinBtn"><span id="inetary">0 Pin</span></a>
                        </h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row row-0-gutter">
                <!-- start portfolio item -->
                <?php
                $query = $this->db->query("select * from t_tour where tour_location like('%$location%') and tour_type like('%$type%')");
                foreach ($query->result() as $row) {
                 ?>
                <div class="col-md-4 col-0-gutter">
                    <div class="ot-portfolio-item">
                        <figure class="effect-bubba" data-tour='bangkok' onclick='location="<?php echo site_url('tour/detail/'.$row->str_id)?>"'>
                            <img src="<? echo base_url('assets/imagesLanding/tour/'.$row->tour_images); ?>" alt="img02" class="img-responsive">
                            <figcaption>
                                <h2 class="in-Block"><?php echo $row->tour_name."-".$row->tour_description;?></h2>
                                <a href="#" data-toggle="modal" data-target="#Modal-1">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <?php } ?>
            </div><!-- end container -->
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

 function goTour(){
    window.location = 'http://127.0.0.1/travelgohome_2';
 }

 //$(document).ready(function(){
 //   $('.pinBtn').on('mouseover',function(){
 //       $('#inetary').text('Lihat Inetary');
 //   });
 //}).on('mouseout',function(){
 //   $('#inetary').text('0 PIN');
 //});
 

</script>
    </body>

</html>
