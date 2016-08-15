<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travelgo</title>
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


<header id="custom" style='background-image:url("../assets/images/banner/bg-tiket.jpg"); background-color:#F5B79F;background-blend-mode: multiply;'>
    <div class="container app-showcase wow fadeInDown" data-wow-delay=".5s">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <!-- Pulang Pergi -->
                <h2 class="text-left"><b class="tittle-head">Jakarta ⇆ Surabaya</b></h2>
                <!-- Sekali Pergi -->
                <!--  <h2 class="text-left"><b class="tittle-head">Jakarta → Medan</b></h2> -->

                <p class="sub-head-ticket text-left">
                    <a id="date">Rabu, 29 Juni 2016 - Kamis, 11 Agustus 2016</a>
                    <a id="dewasa">1 Dewasa</a>
                    <a id="anak">1 Anak</a>
                </p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
            </div>
        </div>
    </div>
</header>

<section id="portfolio" class="light-bg">
    <div class="container wow fadeInDown" data-wow-delay=".5s">
        <div class="row row-0-gutter">
            <div id="berangkat" class="col-lg-4 col-md-4 col-sm-4 text-left">
                <div class="row headBerangkat">
                    <div class="stepNumber col-lg-2 col-md-2 col-sm-2">
                        1
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <label class="judulPenerbangan">Pilih Penerbangan Pergi</label>
                        <label>Jakarta → Surabaya (Rabu, 29 Juni 2016)</label>
                    </div>
                </div>
                <div class="row Detailtiket">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="media">
                            <img class="partnerTiket media-object pull-left" src="<? echo base_url('assets/imagesLanding/partner2.svg');?>" alt="Image">
                            <div class="media-body pemisah">
                                <h4 class="media-heading judulTiket">05:50</h4>
                                <p>Jakarta (CGK)</p>
                            </div>
                             <div class="media-body pemisah">
                                <h4 class="media-heading judulTiket">06:55</h4>
                                <p>Yogya (JOG)</p>
                            </div>
                        </div>

                        <hr class="dashed">
                        
                        <div class="media">
                            <div class="media-body pemisah">
                                <p class="media-heading"><b>Durasi</b></p>
                                <p>1j 5m. (Langsung)</p>
                            </div>
                             <div class="media-body pemisah">
                                <p class="media-heading"><b>Garuda</b> GA-202</p>
                                <ul>
                                    <li>Bagasi 20 kg</li>
                                    <li>Gratis Makan</li>
                                    <li>Passenger Service Charge (PSC)</li>
                                </ul>
                            </div>
                        </div>

                        <hr class="dashed">

                        <div class="media">
                            <div class="media-body judulHarga">
                                <p class="media-heading"><b>Harga pergi</b></p>
                                <p class="subNote">(Termasuk semua pajak dan biaya penerbangan)</p>
                            </div>
                             <div class="media-body">
                               <b class="nominalHarga">Rp. 1.154</b><span class="lastNumber">.000</span>
                            </div>
                        </div>
                        <div class="media">
                            <p class="text-center"><button class="btnTiket">Ganti Penerbangan</button></p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pulang" class="col-lg-7 col-md-7 col-sm-7 text-left">
                <div class="row headBerangkat">
                    <div class="stepNumber col-lg-2 col-md-2 col-sm-2">
                        2
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <label class="judulPenerbangan">Pilih Penerbangan Pulang</label>
                        <label>Surabaya → Jakarta (Kamis, 30 Juni 2016)</label>
                    </div>
                </div>
                <div class="row Detailtiket">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="media">
                            <div class="media-body pemisah">
                                <p class="txtFilter">Filter :</p>
                            </div>
                            <div class="media-body">
                               <button class="filterTiket">Harga</button>
                               <button class="filterTiket">Transit</button>
                               <button class="filterTiket">Maskapai</button>
                               <button class="filterTiket">Waktu</button>
                            </div>
                        </div>
                        <div class="media tabelTiket">
                            <div class="media-body pemisah">
                                <a href="#" >Maskapai</a>
                                <a href="#" style="width: 117px;">Berangkat</a>
                                <a href="#"  style="width:111px;">Tiba</a>
                                <a href="#" style="width:90px;">Durasi</a>
                                <a href="#" style="width:80px;">Fasilitas</a>
                                <a href="#" class="text-right">Harga per orang</a>
                            </div>
                        </div>
                        <div class="media">
                            <img class="partnerTiket media-object pull-left" src="<? echo base_url('assets/imagesLanding/partner2.svg');?>" alt="Image">
                            <div class="media-body pemisah adjustLeft">
                                <h4 class="media-heading judulTiketBalik">05:50</h4>
                                <p>Jakarta (CGK)</p>
                            </div>
                             <div class="media-body pemisah adjustLeft">
                                <h4 class="media-heading judulTiketBalik">06:55</h4>
                                <p>Yogya (JOG)</p>
                            </div>
                            <div class="media-body pemisah adjustLeft">
                                <h4 class="media-heading judulTiketBalik">1j 5m.</h4>
                                <p>(Langsung)</p>
                            </div>
                            <div class="media-body pemisah adjustLeft">
                                <h4 class="media-heading judulTiketBalik">20 kg</h4>
                                <p>TAX</p>
                            </div>
                            <div class="media-body adjustLeftPrice">
                               <b class="nominalHargaTabel">Rp. 1.154</b><span class="lastNumber">.000</span>
                                 <p class="text-center"><button class="btnTiketTabel">Pilih Penerbangan</button></p>
                            </div>
                        </div>
                        <div class="media">
                            <img class="partnerTiket media-object pull-left" src="<? echo base_url('assets/imagesLanding/partner3.svg');?>" alt="Image">
                            <div class="media-body pemisah adjustLeft">
                                <h4 class="media-heading judulTiketBalik">05:50</h4>
                                <p>Jakarta (CGK)</p>
                            </div>
                             <div class="media-body pemisah adjustLeft">
                                <h4 class="media-heading judulTiketBalik">06:55</h4>
                                <p>Yogya (JOG)</p>
                            </div>
                            <div class="media-body pemisah adjustLeft">
                                <h4 class="media-heading judulTiketBalik">1j 5m.</h4>
                                <p>(Langsung)</p>
                            </div>
                            <div class="media-body pemisah adjustLeft">
                                <h4 class="media-heading judulTiketBalik">15 kg</h4>
                                <p>TAX</p>
                            </div>
                            <div class="media-body adjustLeftPrice">
                               <b class="nominalHargaTabel">Rp. 654</b><span class="lastNumber">.000</span>
                                 <p class="text-center"><button class="btnTiketTabel">Pilih Penerbangan</button></p>
                            </div>
                        </div>
                        <div class="media">
                            <img class="partnerTiket media-object pull-left" src="<? echo base_url('assets/imagesLanding/partner1.svg');?>" alt="Image">
                            <div class="media-body pemisah adjustLeft">
                                <h4 class="media-heading judulTiketBalik">05:50</h4>
                                <p>Jakarta (CGK)</p>
                            </div>
                             <div class="media-body pemisah adjustLeft">
                                <h4 class="media-heading judulTiketBalik">06:55</h4>
                                <p>Yogya (JOG)</p>
                            </div>
                            <div class="media-body pemisah adjustLeft">
                                <h4 class="media-heading judulTiketBalik">1j 5m.</h4>
                                <p>(Langsung)</p>
                            </div>
                            <div class="media-body pemisah adjustLeft">
                                <h4 class="media-heading judulTiketBalik">15 kg</h4>
                                <p>TAX</p>
                            </div>
                            <div class="media-body adjustLeftPrice">
                               <b class="nominalHargaTabel">Rp. 454</b><span class="lastNumber">.000</span>
                                 <p class="text-center"><button class="btnTiketTabel">Pilih Penerbangan</button></p>
                            </div>
                        </div>
                    </div>
                </div>
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
