<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Travelgo - Tour International </title>
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
        <!-- <link href="//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet"/> -->
        <script src="<? echo base_url('assets/js/foundation-datepicker.js'); ?>"></script>
        <script src="<? echo base_url('assets/js/locales/foundation-datepicker.vi.js'); ?>"></script>

        <link href="//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet"/>
        <link rel="stylesheet" href="<? echo base_url('assets/css/foundation-datepicker.min.css');?>">
        

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


    <header id="custom" style='background-image:url("<?php echo base_url()?>/assets/images/banner/<?php echo $tour->tour_images;?>"); background-position-y: 30%;'>
        <div class="container app-showcase wow fadeInDown" data-wow-delay=".5s">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="text-left"><b class="tittle-head"><?php echo $tour->tour_name;?></b></h2>
                    <p class="sub-head text-left"><b><?php echo $tour->tour_description;?></b></p>
                </div>
            </div>
        </div>
    </header>

    <section id="portfolio" class="light-bg">
            <div class="container">
            <div class="row row-0-gutter">
                <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                    <h2>
                        <button class="filter-button orng1" onClick="showPlan()">Itinerary</button>
                        <button class="filter-button orng2" onClick="showPrice()">Prices</button>
                        <button class="filter-button orng2" onClick="showTerms('<?php echo $tour->tour_toc;?>')">Terms and Conditions</button>
                         <button class="filter-button pinBtn" data-reveal-id="tourModal" data-toggle="modal" data-target="#myModal"><span>Pesan Sekarang</span></button>
                    </h2>
                    <hr>
                </div>

                <!-- modal -->
                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Header</h4>
                      </div>
                      <div class="modal-body">
                        <p>Some text in the modal.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
            </div>
            <div class="row row-0-gutter">
                <div id='planning' class="col-lg-12 text-left">
                    <?php
                    $query = $this->db->query("select * from t_tour_itinerary where tour_id = '$tour->id'");
                    foreach ($query->result() as $row) {
                    ?>
                    <p><b><?php echo $row->day?> :</b> <?php echo $row->description;?></p><hr>  
                    <?php } ?>
                </div>
                <div id='price' class="col-lg-12 text-left">
                    <h2>Tour prices per person in IDR / USD </h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <td><h4><strong>DATE</strong></h4></td>
                                <td><h4><strong>ADULT FARE</strong></h4></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $query = $this->db->query("select *,date_format(tour_start,'%M') bulan,date_format(tour_start,'%d') tgl from t_tour_items where tour_id = '$tour->id'");
                                foreach($query->result() as $row){
                            ?>
                            <tr>
                                <td><p><?php echo $row->bulan?> : <?php echo $row->tgl?></p></td>
                                <td style=" vertical-align: middle;"><p>IDR :<?php echo $row->price;?>/pax</p></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                    <?php echo $tour->tour_price_toc;?>
                </div>
                <div id='terms' class="col-lg-12 text-left">
                   
                </div>
            </div>
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
  <script src="<? echo base_url('assets/bower_components/foundation/js/foundation.min.js'); ?>"></script>
  <script src="<? echo base_url('assets/bower_components/foundation/js/foundation/foundation.reveal.js'); ?>"></script>
  <script src="<? echo base_url('assets/bower_components/foundation/js/foundation/foundation.tooltip.js'); ?>"></script>
   <script src="<? echo base_url('assets/js/SmoothScroll.min.js');?>"></script>
  <script src="<? echo base_url('assets/js/app.js'); ?>"></script>
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

 $(document).ready(function(){
    $('.pinBtn').on('mouseover',function(){
        $('#inetary').text('Lihat Inetary');
    });
 }).on('mouseout',function(){
    $('#inetary').text('0 PIN');
 });
 

</script>



        
        

        
    </body>

</html>
