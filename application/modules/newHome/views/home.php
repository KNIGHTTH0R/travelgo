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
  <link rel="stylesheet" href="<? echo base_url('assets/css/custom-styles.css'); ?>" />
  <link rel="stylesheet" href="<? echo base_url('assets/css/bootstrap-datepicker3.min.css'); ?>" />


  <!-- Js -->
  <script src="<? echo base_url('assets/jsLanding/vendor/modernizr-2.6.2.min.js'); ?>"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<? echo base_url("assets/jsLanding/vendor/jquery-1.10.2.min.js"); ?>"><\/script>')</script>
  <script src="<? echo base_url('assets/jsLanding/bootstrap.min.js'); ?>"></script>
  <script src="<? echo base_url('assets/jsLanding/owl.carousel.min.js'); ?>"></script>
  <script src="<? echo base_url('assets/jsLanding/wow.min.js'); ?>"></script>
  <script src="<? echo base_url('assets/jsLanding/main.js'); ?>"></script>
  <script src="<? echo base_url('assets/jsLanding/tour.js'); ?>"></script>
  <script src="<? echo base_url('assets/js/bootstrap-datepicker.min.js'); ?>"></script>
  <script src="<? echo base_url('assets/js/TweenMax.min.js'); ?>"></script>
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
  <!-- nvigasi -->
  <section id="nav" class="light-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-5 container-logo left">
          <img data-toggle="tooltip" data-placement="bottom" title="About" onclick="goAbout()" class="logo-top iph5" src="<? echo base_url('assets/images/logo.svg'); ?>" alt="Logo" style="cursor:pointer;">
          <span data-reveal-id="tourModal" data-toggle="modal" data-target="#myModal">
            <img data-toggle="tooltip" data-placement="bottom" title="Tour"  id="tour" class="logo-top btn-top" src="<? echo base_url('assets/images/top-nav/tool.svg'); ?>" alt="Logo">
          </span>
          <img data-toggle="tooltip" data-placement="bottom" title="Tickets" id="tiket" class="logo-top btn-top" src="<? echo base_url('assets/images/top-nav/tickets.svg'); ?>" alt="Logo">
          <img data-toggle="tooltip" data-placement="bottom" title="B2B" onclick="goB2b()" id="b2b" class="logo-top btn-top" src="<? echo base_url('assets/images/top-nav/social.svg'); ?>" alt="Logo">
          <img data-toggle="tooltip" data-placement="bottom" title="Contact" id="kontak" class="logo-top btn-top" src="<? echo base_url('assets/images/top-nav/telephone.svg'); ?>" alt="Logo">
          <img data-toggle="tooltip" data-placement="bottom" title="Sign In" id="login" class="logo-top btn-top" src="<? echo base_url('assets/images/top-nav/login.svg'); ?>" alt="Logo">
        </div>
      </div>
    </div>
  </section>

  <!-- Tiket -->
  <section id="tiket" class="light-bg pad-top-global">
    <div class="container cont-center">
      <div class="row tabTicket">
        <div class="small-centered headSubTicket columns col-sm-12">
          <h1 class="col-sm-12 text-center"><img src="<? echo base_url('assets/images/kapalLogo.svg'); ?>"></h1>
          <h3 class="col-sm-12 text-center">Cari <b>Tiket</b> dengan cepat dan mudah di sini!</h3>
          <div class="row cont-tiket">

            <!-- Tujuan -->            
            <div class="col-sm-2 col-lg-4 tujuanPilih">
              <div class="col-lg-9 asal">
                <label for="tujuan">TUJUAN</label>
                <select class="form-control">
                  <option value="">Kota Asal</option>
                  <option value="starbuck">Jakarta</option>
                  <option value="hotdog">Bandung</option>
                  <option value="apollo">Medan</option>
                </select>
              </div>
              <div class="col-lg-9 tujuan">
                <select class="form-control">
                  <option value="">Kota Tujuan</option>
                  <option value="starbuck">Jakarta</option>
                  <option value="hotdog">Bandung</option>
                  <option value="apollo">Medan</option>
                </select>
              </div>
            </div>
            <!-- waktu -->
            <div class="col-lg-4 col-sm-2">          
              <div class="col-lg-9 asal tglTengah">
                <label for="waktu">WAKTU</label>
                <!--Tanggal Berangkat-->
                <div class="form-group">
                  <div class='input-group date' id='tglBerangkat'>
                    <input type='text' class="form-control" name='waktuKeberangkatan' placeholder="Waktu Keberangkatan" />
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
                </div>
                <input id="ppBtn" type="checkbox" name="checkPP" style="margin-left:31px;"><label for="checkbox1">Pulang Pergi</label>
              </div>
              <div class="col-lg-9 tglTengah" id="pp" data-myval="0">
                <!--Tanggal Pulang-->
                
              </div> 
            </div>
            <!-- Jumlah penumpang -->
            <div class="columns col-lg-4 col-sm-2">
              <h4 class="insideTicket tujuanPilih">JUMLAH PENUMPANG</h4>
              <div class="col-lg-9 col-md-9 col-sm-6 asal">
                <input class="Penumpang form-control" type="number" name="jumlah" placeholder="Penumpang Dewasa" style="margin-left:31px;"/>

              </div>
              <div class="col-lg-9 col-md-9 col-sm-6 tujuan">
                <input class="Penumpang form-control" type="number" name="jumlah" placeholder="Penumpang Anak" style="margin-left:31px;"/>
              </div>
            </div>
          </div>
          <div class="col-sm-12 pad-bot-25"><button onclick="cariTiket()" class="button btn-cari-top">CARI TIKET</button><i class="bantuan">Bantuan</i></div>
        </div>
      </div>
    </section>

    <!-- Tour -->
    <section id="tour" class="light-bg pad-top-25 pad-bot-high">
      <div class="container cont-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="top-container  col-lg-12 col-md-12 col-sm-12">
            <div class="top-circle-button col-lg-12 col-md-12 col-sm-12">
              <!--desc-->
              <div class="center-desc">
                <div class="animate2 column col-lg-2 col-md-2 col-sm-2 left container-btnNext">
                  <img onclick="animLayer1()"  class="nextBtn prevBtn" src="<? echo base_url('assets/images/top-nav/play.svg'); ?>" alt="Logo">
                </div>
                <div class="animate1 columns col-lg-8 col-md-8 col-sm-8">
                  <div class='slide1'>
                    <h3 class="col-lg-12 col-md-12 col-sm-12 text-center"><strong><b>Promo</b></strong></h3>
                    <h2 class="col-lg-12 col-md-12 col-sm-12 text-center">Paket Tour <b>Raja Ampat</b> Wayag-Piaynemo </h2>
                    <h2 class="col-lg-12 col-md-12 col-sm-12 text-center" ><hr class="block-line lineDsc"></h2>
                    <h5 class="col-lg-12 col-md-12 col-sm-12 text-center">
                      <div class="row cont-center pad-promo">
                        <div class="col-lg-4">
                          <h3>3</h3>
                          <h3><small><i>Days</i></small></h3>
                        </div>
                        <div class="col-lg-4 dividerCustom"></div>
                        <div class="col-lg-4">
                          <h3>2</h3><h3><small><i>Nights</i></small></h3>
                        </div>
                      </div>
                      <hr class="block-line lineDsc">
                    </h5>
                    <p class="col-lg-12 small-12 col-md-12 text-center">
                     Teluk Kabui – Arborek – Sawinggrai - Pasir Timbul Kri – Sauwandarek - Desa Yembeser
                   </p>
                   <h2 class="col-lg-12 col-md-12 small-12 text-center">
                    <button class="button reg-btn">Pesan Sekarang</button>
                  </h2> 
                </div>
                <div class='slide2'>
                  <h3 class="col-lg-12 col-md-12 small-12 text-center"><strong><b>Promo</b></strong></h3>
                  <h2 class="col-lg-12 col-md-12 small-12 text-center">Paket Tour <b>Bangkok</b> Pattaya</h2>
                  <h2 class="col-lg-12 col-md-12 small-12 text-center" ><hr class="block-line lineDsc"></h2>
                  <h5 class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <div class="row cont-center pad-promo">
                      <div class="col-lg-4">
                        <h3>3</h3>
                        <h3><small><i>Days</i></small></h3>
                      </div>
                      <div class="col-lg-4 dividerCustom"></div>
                      <div class="col-lg-4">
                        <h3>2</h3><h3><small><i>Nights</i></small></h3>
                      </div>
                    </div>
                    <hr class="block-line lineDsc">
                  </h5>
                  <p class="col-lg-12 small-12 col-md-12 text-center">
                   Teluk Kabui – Arborek – Sawinggrai - Pasir Timbul Kri – Sauwandarek - Desa Yembeser
                 </p>
                 <h2 class="col-lg-12 col-md-12 small-12 text-center">
                  <button class="button reg-btn">Pesan Sekarang</button>
                </h2>
              </div>
            </div>
            <div class="animate2 column col-lg-2 col-md-2 small-2 container-btnNext">
              <img onclick="animLayer1()" class="nextBtn right" src="<? echo base_url('assets/images/top-nav/play.svg'); ?>" alt="Logo" >
            </div>
          </div>        
        </div>      
      </div>
      <!--image slide-->
      <div class="ide1">
        <img class="slide1" src="<? echo base_url('assets/images/banner/rajaampat.jpg');?>">
        <img class="slide2" src="<? echo base_url('assets/images/banner/portfolio-1.jpg'); ?>">
      </div>
    </div>
  </div>
</section>

<section id="service" class="bg-white">
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

<section id="feature" class="bg-white">
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

<!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <h2 class="textModal text-center" id="firstModalTitle">Pilih Jenis Tour</h2></br>
                      <p class="textModal text-center"><button class="btnModal" onclick="location='<?php echo site_url('tour/int');?>'">Internasional</button></p><hr>
                      <p class="textModal text-center"><button class="btnModal" onclick="location='<?php echo site_url('tour/dom');?>'">Domestik</button></p>
                      <p class="textModal text-center">
                          <button type="button" class="" data-dismiss="modal">Close</button>
                      </p>
                    </div>

                  </div>
                </div>
<!-- end modal -->

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
<script type="text/javascript" src="<? echo base_url('assets/js/homeApp.js');?>"></script>
<script src="<? echo base_url('assets/js/SmoothScroll.min.js');?>"></script>
</body>
</html>