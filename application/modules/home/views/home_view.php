<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<? echo base_url('assets/images/favicon.jpg'); ?>">
  <title>TRAVELGO</title>
  <link rel="stylesheet" href="<? echo base_url('assets/css/app.css'); ?>" />
  <link rel="stylesheet" href="<? echo base_url('assets/css/custom-styles.css'); ?>" />
  <!-- <link href="//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet"/> -->
  <script src="<? echo base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<? echo base_url('assets/js/foundation-datepicker.js'); ?>"></script>
  <script src="<? echo base_url('assets/js/locales/foundation-datepicker.vi.js'); ?>"></script>
  <script src="<? echo base_url('assets/js/TweenMax.min.js'); ?>"></script>

  <link href="//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet"/>
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="<? echo base_url('assets/css/foundation-datepicker.min.css');?>">
  <script src="<? echo base_url('assets/bower_components/modernizr/modernizr.js'); ?>"></script>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'/>

</head>
<body>
  <!--tiket-->
    <div class="cont-sub-layer2 large-12 medium-12 small-12">
      <div class="large-4 medium-6 small-12 container-logo left">
        <img onclick="goAbout()" class="logo-top" src="<? echo base_url('assets/images/logo.svg'); ?>" alt="Logo" style="cursor:pointer;">
        <img  id="tour" class="logo-top btn-top" src="<? echo base_url('assets/images/top-nav/tool.svg'); ?>" alt="Logo" data-reveal-id="tourModal">
        <img id="tiket" class="logo-top btn-top" src="<? echo base_url('assets/images/top-nav/tickets.svg'); ?>" alt="Logo">
        <img onclick="goB2b()" id="b2b" class="logo-top btn-top" src="<? echo base_url('assets/images/top-nav/social.svg'); ?>" alt="Logo">
        <img id="kontak" class="logo-top btn-top" src="<? echo base_url('assets/images/top-nav/telephone.svg'); ?>" alt="Logo">
        <img id="login" class="logo-top btn-top" src="<? echo base_url('assets/images/top-nav/login.svg'); ?>" alt="Logo">
      </div>
      <br/>
      <br/>
      <br/>
      <br/>
      <div class="row large-12 medium-12 small-12 tabTicket">
        <div class="small-centered headSubTicket columns large-12 medium-12 small-12">
          <h1 class="large-12 medium-12 small-12 text-center"><img src="<? echo base_url('assets/images/kapalLogo.svg'); ?>"></h1>
          <h3 class="large-12 medium-12 small-12 text-center">Cari <b>Tiket</b> dengan cepat dan mudah di sini!</h3>
          <div class="row cont-tiket">
            <div class="columns large-4 medium-4 small-2 tujuanPilih">
              <h3 class="insideTicket">TUJUAN</h3>
              <div class="large-9 asal">
                <select>
                  <option value="">Kota Asal</option>
                  <option value="starbuck">Jakarta</option>
                  <option value="hotdog">Bandung</option>
                  <option value="apollo">Medan</option>
                </select>
              </div>
              <div class="large-9 tujuan">
                <select>
                  <option value="">Kota Tujuan</option>
                  <option value="starbuck">Jakarta</option>
                  <option value="hotdog">Bandung</option>
                  <option value="apollo">Medan</option>
                </select>
              </div>
            </div>
            <div class="columns large-4 medium-4 small-2">
              <h3 class="text-center insideTicket">WAKTU</h3>
              <div class="large-9 asal tglTengah">
                <!--Tanggal Berangkat-->
                <div style="margin-left:31px;" class="row collapse date" id="dpMonths" data-date-format="mm/yyyy" data-start-view="year" data-min-view="year" style="max-width:200px;">
                  <div class="small-2 columns"> 
                    <span class="prefix"><i class="fa fa-calendar"></i></span>
                  </div>
                  <div class="small-10 columns">
                    <input size="16" type="text" placeholder="Tanggal Berangkat" id="dp1" readonly>  
                  </div>
                </div>                
                <input id="checkbox1" type="checkbox" style="margin-left:31px;"><label for="checkbox1">Pulang Pergi</label>
              </div>
              <div class="large-9 tglTengah">
               <!--Tanggal Pulang-->
               <div style="margin-left:31px;" class="row collapse date" id="dpMonths" data-date-format="mm/yyyy" data-start-view="year" data-min-view="year" style="max-width:200px;">
                <div class="small-2 columns"> 
                  <span class="prefix"><i class="fa fa-calendar"></i></span>
                </div>
                <div class="small-10 columns">
                  <input size="16" type="text" placeholder="Tanggal Pulang" id="dp2" readonly>  
                </div>
              </div> 
            </div>
          </div>
          <div class="columns large-4 medium-4 small-2">
            <h3 class="insideTicket tujuanPilih">JUMLAH PENUMPANG</h3>
            <div class="large-9 medium-9 small-6 asal">
              <input class="Penumpang" type="text" name="jumlah" placeholder="Penumpang Dewasa" style="margin-left:31px;"/>

            </div>
            <div class="large-9 medium-9 small-6 tujuan">
              <input class="Penumpang" type="text" name="jumlah" placeholder="Penumpang Anak" style="margin-left:31px;"/>
            </div>
          </div>
        </div>
        <div class="large-12 medium-12 small-12"><button onclick="cariTiket()" class="btn-cari-top">CARI</button><i class="bantuan">Bantuan</i></div>
      </div>
    </div>
  </div>
  <!--end tiket-->

  <!--tour-->
  <div class="large-12 medium-12 small-12">
    <div class="top-container  large-12 medium-12 small-12">
      <div class="top-circle-button large-12 medium-12 small-12">
        <!--desc-->
        <div class="center-desc">
          <div class="animate2 column large-2 medium-2 small-2 left container-btnNext">
            <img onclick="animLayer1()"  class="nextBtn prevBtn" src="<? echo base_url('assets/images/top-nav/play.svg'); ?>" alt="Logo">
          </div>
          <div class="animate1 columns large-8 medium-8 small-8">
            <div class='slide1'>
              <h3 class="large-12 medium-12 small-12 text-center"><strong><b>Promo</b></strong></h3>
              <h2 class="large-12 medium-12 small-12 text-center">Paket Tour <b>Raja Ampat</b> Wayag-Piaynemo </h2>
              <h2 class="large-12 medium-12 small-12 text-center" ><hr class="block-line lineDsc"></h2>
              <h2 class="large-12 medium-12 small-12 text-center">
                <ul class="lineDsc small-block-grid-2">
                  <li class="dividerCustom"><h3>5</h3><h3><small><i>Days</i></small></h3></li>
                  <li><h3>4</h3><h3><small><i>Nights</i></small></h3></li>
                  <!-- <li><h3>50k</h3><h3><small><i>Price</i></small></h3></li> -->
                </ul>
                <hr class="block-line lineDsc">
              </h2>
              <p class="large-12 small-12 medium-12 text-center">
                 Teluk Kabui – Arborek – Sawinggrai - Pasir Timbul Kri – Sauwandarek - Desa Yembeser
              </p>
              <h2 class="large-12 medium-12 small-12 text-center">
                <a href="#" class="button round">Pesan Sekarang</a>
                <a href="#" onClick='scrollTiket()' class="button round cari-tiket">Cari Tiket</a>
              </h2> 
            </div>
            <div class='slide2'>
              <h3 class="large-12 medium-12 small-12 text-center"><strong><b>Promo</b></strong></h3>
              <h2 class="large-12 medium-12 small-12 text-center">Paket Tour <b>Bangkok</b> Pattaya</h2>
              <h2 class="large-12 medium-12 small-12 text-center" ><hr class="block-line lineDsc"></h2>
              <h2 class="large-12 medium-12 small-12 text-center">
                <ul class="lineDsc small-block-grid-2">
                  <li class="dividerCustom"><h3>3</h3><h3><small><i>Days</i></small></h3></li>
                  <li><h3>2</h3><h3><small><i>Nights</i></small></h3></li>
                  <!-- <li><h3>50k</h3><h3><small><i>Price</i></small></h3></li> -->
                </ul>
                <hr class="block-line lineDsc">
              </h2>
              <p class="large-12 small-12 medium-12 text-center">
               Gems Jewelry - Nongnooch Village – MBK MALL (SHOOPING) 
              </p>
              <h2 class="large-12 medium-12 small-12 text-center">
                <a href="#" class="button round">Pesan Sekarang</a>
                <a href="#" onClick='scrollTiket()' class="button round cari-tiket">Cari Tiket</a>
              </h2> 
            </div>
          </div>
          <div class="animate2 column large-2 medium-2 small-2 container-btnNext">
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
    <!--end of top-->

  <div class="cont-layer2 large-12 medium-12 small-12">
    <div class="row">
      <div class="text-center large-12 medium-12 small-12">
        <h2>Our business to business Services</h2>
        <p>
            Lorem Ipsum is used for help people to reach their success day by day
        </p>
      </div>
      <div class="text-center columns large-4 medium-4 small-4">
        <img width="100" style="cursor:pointer;" class="services" src="<? echo base_url('assets/images/top-nav/tool.svg');?>" alt="">
        <h3>Tours</h3>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been typesetting industry 
        </p>
      </div>
      <div class="text-center columns large-4 medium-4 small-4">
        <img width="100" class="services" src="<? echo base_url('assets/images/top-nav/tickets.svg');?>" alt="">
        <h3>Tickets</h3>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been typesetting industry 
        </p>
      </div>
      <div class="text-center columns large-4 medium-4 small-4">
        <img width="100" class="services" src="<? echo base_url('assets/images/top-nav/social.svg'); ?>" alt="">
        <h3>B2B</h3>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been typesetting industry 
        </p>
      </div>
    </div>
    <br/>

    <div class="text-center large-12 medium-12 small-12">
      <h2>Partner</h2>
      <p>
          Every people is deserved to have a better Tours
      </p>
      <div class="columns large-6 medium-6 small-6">
        <div class="media">
            <img class="partner media-object pull-left" src="<? echo base_url('assets/imagesLanding/partner2.svg');?>" alt="Image">
            <div class="media-body text-left">
                <h4 class="media-heading">Garuda Indonesia</h4>
                <p>Start from now, you can easily manage your time and it has reminder to let you know every time.</p>
            </div>
        </div>
      </div>
      <div class="columns large-6 medium-6 small-6">
        <div class="media">
            <img class="partner media-object pull-left" src="<? echo base_url('assets/imagesLanding/partner1.svg');?>" alt="Image">
            <div class="media-body text-left">
                <h4 class="media-heading">Sriwijaya</h4>
                <p>Start from now, you can easily manage your time and it has reminder to let you know every time.</p>
            </div>
        </div>
      </div>
      <div class="columns large-6 medium-6 small-6">
        <div class="media">
            <img class="partner media-object pull-left" src="<? echo base_url('assets/imagesLanding/partner3.svg');?>" alt="Image">
            <div class="media-body text-left">
                <h4 class="media-heading">Lion Air</h4>
                <p>Start from now, you can easily manage your time and it has reminder to let you know every time.</p>
            </div>
        </div>
      </div>
      <div class="columns large-6 medium-6 small-6">
        <div class="media">
            <img class="partner media-object pull-left" src="<? echo base_url('assets/imagesLanding/partner2.svg');?>" alt="Image">
            <div class="media-body text-left">
                <h4 class="media-heading">Garuda Indonesia</h4>
                <p>Start from now, you can easily manage your time and it has reminder to let you know every time.</p>
            </div>
        </div>
      </div>
    </div>
  </div>

    <!--Footer-->
    <footer>
      <div class="row">
      <div class="columns large-12 medium-12 small-12">
        <p>Daftarkan email Anda untuk info tiket PROMO GRATIS!</p>
      </div>
       <div class='columns large-4 medium-4 small-4'>
          <input class="foot-text" type="text" placeholder="Example@email.com">
      </div>
      <div class='columns large-3 medium-3 small-3'>
        <button class="foot-btn">DAFTAR</button>
      </div>
      <div class='columns large-3 medium-3 small-3'></div>
      <div class="columns large-2 medium-2 small-2">
        <ul class="small-block-grid-2 medium-block-grid-2 large-block-grid-2">
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
      </div>
    </div>
    </footer>
    <!--end footer-->

    <!-- Reveal Modals begin -->
    <div id="tourModal" class="reveal-modal" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
      <h2 class="textModal text-center" id="firstModalTitle">Pilih Jenis Tour</h2></br>
      <p class="textModal text-center"><button class="btnModal" onclick="location='<?php echo site_url('tour/int');?>'">Internasional</button></p><hr>
      <p class="textModal text-center"><button class="btnModal" onclick="location='<?php echo site_url('tour/dom');?>'">Domestik</button></p>
      <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>

  <script src="<? echo base_url('assets/bower_components/foundation/js/foundation.min.js'); ?>"></script>
  <script src="<? echo base_url('assets/bower_components/foundation/js/foundation/foundation.reveal.js'); ?>"></script>
  <script src="<? echo base_url('assets/bower_components/foundation/js/foundation/foundation.tooltip.js'); ?>"></script>
   <script src="<? echo base_url('assets/js/SmoothScroll.min.js');?>"></script>
  <script src="<? echo base_url('assets/js/app.js'); ?>"></script>
  <script type="text/javascript">
   var Settings = {
        site_url: '<?php echo site_url()?>',
        base_url: '<?php echo base_url()?>'
    }
  </script>
</body>
</html>
