var hitungSlide=1;

$(document).ready(function(){
	// SVG / PNG
	if (!Modernizr.svg) {
		$('img[src*="svg"]').attr('src', function () {
			return $(this).attr('src').replace('.svg', '.png');
		});
	}

	 $('[data-toggle="tooltip"]').tooltip();
	 $('#tglBerangkat').datepicker();

	 //action pp button
	 $('#ppBtn').click(function(){
	 	if( $('#ppBtn').is(':checked')){
	 		$('#pp').append('<div id="groupPP" class="form-group"><div class="input-group date" id="tglBerangkat"><input type="text" class="form-control" name="waktuPulang" placeholder="Waktu Pulang" /><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div></div>');
	 	}else{
	 		$('#groupPP').remove();
	 		console.log('hilang');
	 	}
	 });
	 $('.slide2').hide();
	 $('.ide1 img').css({'width':maxWidth,'height':maxHeight});
	 $('#service').css({'padding-top':'100px'});
	 $('#feature').css({'padding':'0'});

});

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