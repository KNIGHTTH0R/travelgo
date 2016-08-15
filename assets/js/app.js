/*$(document).foundation('topbar', 'reflow');
$(document).foundation('reveal', 'reflow');
$(document).foundation('tooltip', 'reflow');*/

$(document).foundation();

var maxWidth = window.screen.width;
var maxHeight = window.screen.height;
var scrollY = 0;
var topContent = 0;
var hitungSlide=1;

//set video
$(document).ready(function() {

  $('body').removeClass('f-topbar-fixed');
  $('.cont-layer2').css({'height':maxHeight});
  $('.bg-overlay').css({'width':maxWidth,'height':maxHeight});
  $('.cont-sub-layer2').css('height',maxHeight - 64);


  //set content layer
  $('.ide1 img').css({'width':maxWidth,'height':maxHeight});
  $('.top-container').css({'width':'100%','height':maxHeight});
  $('.slide2').hide();
  footerGo();
  


  

   // SVG / PNG
   if (!Modernizr.svg) {
     $('img[src*="svg"]').attr('src', function () {
       return $(this).attr('src').replace('.svg', '.png');
     });
   }

       //tgl berangkat
       $(function(){
        $('#dp1').fdatepicker({
          format: 'mm-dd-yyyy',
          disableDblClickSelection: true
        });
      });

       //tgl pulang
       $(function(){
        $('#dp2').fdatepicker({
          format: 'mm-dd-yyyy',
          disableDblClickSelection: true
        });
      });

       //btn Home
       if($("#homeBtn").hasClass("active")){
        $('#imgHome').attr('src','images/home.svg');
      }else{
        $('#imgHome').attr('src','images/homeOr.svg');
        $("#homeBtn").on('mouseover',gantiPutih);
        $("#homeBtn").on('mouseout',gantiHitam);
      }

       //scroll btn
       $('.logo-scroll').click(function(){

         scrollLayer1();

       });

       //cek event scroll
       $(window).scroll(function(e){
        scrollY = $(window).scrollTop();

        if(scrollY > 600){
          $('#onScroll').fadeIn();
        }else{
          $('#onScroll').fadeOut();
        }
      });

       //tooltip
       $('#tour').on('mouseover',function(){
        $('.container-logo').append(' <span data-selector="tooltip-inbvkb9r0" id="tooltip-inbvkb9r0" class="myToolTips tooltip" role="tooltip" style=" left: 182.422px;">Tour<span class="nub"></span></span>');
      }).on('mouseout',function(){
        $('.myToolTips').remove();
      });

      $('#tiket').on('mouseover',function(){
        $('.container-logo').append(' <span data-selector="tooltip-inbvkb9r0" id="tooltip-inbvkb9r0" class="myToolTips tooltip" role="tooltip" style=" left: 237.422px;">Tiket<span class="nub"></span></span>');
      }).on('mouseout',function(){
        $('.myToolTips').remove();
      });

      $('#b2b').on('mouseover',function(){
        $('.container-logo').append(' <span data-selector="tooltip-inbvkb9r0" id="tooltip-inbvkb9r0" class="myToolTips tooltip" role="tooltip" style=" left: 294.422px;">B2B<span class="nub"></span></span>');
      }).on('mouseout',function(){
        $('.myToolTips').remove();
      });

      $('#kontak').on('mouseover',function(){
        $('.container-logo').append(' <span data-selector="tooltip-inbvkb9r0" id="tooltip-inbvkb9r0" class="myToolTips tooltip" role="tooltip" style=" left: 351.422px;">kontak<span class="nub"></span></span>');
      }).on('mouseout',function(){
        $('.myToolTips').remove();
      });


      $('#login').on('mouseover',function(){
        $('.container-logo').append(' <span data-selector="tooltip-inbvkb9r0" id="tooltip-inbvkb9r0" class="myToolTips tooltip" role="tooltip" style=" left:406.422px;">Sign in<span class="nub"></span></span>');
      }).on('mouseout',function(){
        $('.myToolTips').remove();
      });



    });

// set timeout
var tid = setTimeout(mycode, 8000);
function mycode() {
  //animLayer1();
  tid = setTimeout(mycode, 8000); // repeat myself
}

function animLayer1(){
   //animate layer1
   $('.animate1').fadeOut();
   $('.animate2').fadeOut();
   $('.ide1').fadeOut(function(){
    if(hitungSlide == 1){
      hitungSlide = 2;
      $('.slide1').hide();
      $('.slide2').show();
    //console.log('masuk 1');
  }else{
    hitungSlide = 1;
    $('.slide2').hide();
    $('.slide1').show();
    //console.log('masuk 2');
  }
  TweenMax.fromTo($('.ide1'), .5, {autoAlpha:0, display:'block'}, {autoAlpha:1, ease:Expo.easeOut});
  TweenMax.fromTo($('.animate1'), 1, {scale:1.5, autoAlpha:0, display:'block'}, {scale:1, autoAlpha:1, ease:Expo.easeOut,delay:1});
  TweenMax.fromTo($('.animate2'), 1, {autoAlpha:0, display:'block'}, {autoAlpha:1, ease:Expo.easeOut,delay:1});  
});
   

 }

 function goAbout(){
  window.location = Settings.site_url+'/about';
}

function goB2b(){
  window.location = Settings.site_url+'/b2b';
}

function goInt(){
  window.location = Settings.site_url+'/tourInt';
}

function goDom(){
  window.location = Settings.site_url+'/tourDom';
}

function gantiPutih(){
  $('#imgHome').attr('src','images/homeOver.svg');
}

function gantiHitam(){
  $('#imgHome').attr('src','images/homeOr.svg');  
}

function scrollTiket(){
  scrollToElement('.cont-layer2');
}

//animate scroll
function scrollToElement(selector, callback){
  var animation = {scrollTop: $(selector).offset().top};
  //console.log(animation);
  $('html,body').animate(animation, 'slow', 'swing', function() {
    if (typeof callback == 'function') {
      callback();
    }
    callback = null;
  });
}

function cariTiket(){
  window.location = Settings.site_url+'/cariTiket';
}

function scrollLayer1(){
  scrollToElement('#MasterDiv');
  $('#kapal').hide();
  $('#teksLayer2').hide();
  $('#subLayer').hide();
  $('#subLayer1').hide();
  $('#subLayer2').hide();


  TweenMax.fromTo($('#kapal'), 1, {scale:1.5, autoAlpha:0, display:'block'}, {scale:1, autoAlpha:1, ease:Expo.easeOut,delay:1});
  TweenMax.fromTo($('#teksLayer2'), 1, {scale:1.5, autoAlpha:0, display:'block'}, {scale:1, autoAlpha:1, ease:Expo.easeOut,delay:1});
  TweenMax.fromTo($('#subLayer'), 1, {scale:1.5, autoAlpha:0, display:'block'}, {scale:1, autoAlpha:1, ease:Expo.easeOut,delay:1});
  TweenMax.fromTo($('#subLayer1'), 1, {scale:1.5, autoAlpha:0, display:'block'}, {scale:1, autoAlpha:1, ease:Expo.easeOut,delay:1});
  TweenMax.fromTo($('#subLayer2'), 1, {scale:1.5, autoAlpha:0, display:'block'}, {scale:1, autoAlpha:1, ease:Expo.easeOut,delay:1,onComplete:function(){
    console.log('selesai'); 
  }});
}

function footerGo(){
  window.onload = function() {
    stickyFooter();

    //you can either uncomment and allow the setInterval to auto correct the footer
    //or call stickyFooter() if you have major DOM changes
    //setInterval(checkForDOMChange, 1000);
  };

//check for changes to the DOM
function checkForDOMChange() {
  stickyFooter();
}

//check for resize event if not IE 9 or greater
window.onresize = function() {
  stickyFooter();
}

//lets get the marginTop for the <footer>
function getCSS(element, property) {

  var elem = document.getElementsByTagName(element)[0];
  var css = null;
  
  if (elem.currentStyle) {
    css = elem.currentStyle[property];

  } else if (window.getComputedStyle) {
    css = document.defaultView.getComputedStyle(elem, null).
    getPropertyValue(property);
  }
  
  return css;

}

function stickyFooter() {

  if (document.getElementsByTagName("footer")[0].getAttribute("style") != null) {
    document.getElementsByTagName("footer")[0].removeAttribute("style");
  }
  
  if (window.innerHeight != document.body.offsetHeight) {
    var offset = window.innerHeight - document.body.offsetHeight;
    var current = getCSS("footer", "margin-top");
    
    if (isNaN(current) == true) {
      document.getElementsByTagName("footer")[0].setAttribute("style","margin-top:0px;");
      current = 0;
    } else {
      current = parseInt(current);
    }

    if (current+offset > parseInt(getCSS("footer", "margin-top"))) {      
      document.getElementsByTagName("footer")[0].setAttribute("style","margin-top:"+(current+offset)+"px;");
    }
  }
}

/*
! end sticky footer
*/

}