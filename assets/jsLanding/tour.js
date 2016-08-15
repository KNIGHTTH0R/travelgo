var maxWidth = window.screen.width;
var maxHeight = window.screen.height;

function goDetail(d){
	var select = $(d).attr('data-tour');
	if(select =='bangkok'){
		window.location= Settings.site_url+"/detailTour?data="+select;
	}
}

$(document).ready(function(){
	$('#price').hide();
	$('#terms').hide();
	
	
	
});

function showPlan(){
	$('#planning').fadeIn();
	$('#price').fadeOut();
	$('#terms').fadeOut();
}

function showPrice(){
	$('#planning').fadeOut();
	$('#price').fadeIn();
	$('#terms').fadeOut();
}

function showTerms(){
	$('#planning').fadeOut();
	$('#price').fadeOut(function(){
		$('#terms').append('<object id="pdf" data="'+Settings.base_url+'assets/doc/syarat.pdf"/>');
		$('#pdf').css({'width':'100%','height':'700px'});
		$('#terms').fadeIn();
	});
	
}