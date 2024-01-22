$(function(){

	

	$('.mv_slide_wrap').slick({
		dots: true,
		arrow: true,
		infinite: true,
		speed: 300,
		autoplay: true,
		autoplaySpeed: 4500
	});
	
	$('.banner_slide').slick({
		dots: true,
		arrow: false,
		infinite: true,
		speed: 300,
		autoplay: true,
		autoplaySpeed: 3000
	});

	$(window).on("resize", function(){
		var headerHeight = $('#header').outerHeight()
		var winWidth = $(window).width();
		
	});
	$(window).trigger("resize");  
});