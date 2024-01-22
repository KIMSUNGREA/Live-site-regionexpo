
var topTrigger = function(){
	var winWidth = $(window).width();
	var winScrTop = $(window).scrollTop();
	if (winScrTop > 120){
		$('#top_trigger').fadeIn();
	} else {
		$('#top_trigger').fadeOut();
	}
	if (winScrTop > 80){
		$('#header').addClass( 'stiky' );
	} else {
		$('#header').removeClass( 'stiky' );
	}
}



$(function(){

	$('img[usemap]').rwdImageMaps();
	$('#gnb .dep1_con .dep1').on('mouseenter', function(){
		$(this).next().stop(true,true).slideDown();
	});
	$('#gnb .dep1_con').on('mouseleave', function(){
		$(this).find('.dep2_wrap').stop(true,true).slideUp();
	});

	

	$('#header .open_sitemap a').on('click', function(e){
		e.preventDefault();
		$(this).toggleClass('active');
		if(!$(this).hasClass('active')){
			$(this).parent().removeClass('active');
			$('#header .sitemap').animate({right:-300 + '%'},300);
		} else {
			$(this).addClass('active');
			$(this).parent().addClass('active');
			$('#header .sitemap').animate({right:0},300);
		}
	});

	$('.sitemap .dep1_con .dep1').on('click', function(e){
		e.preventDefault();
		if($(this).next('.dep2_wrap').is(':visible')){
			//$(this).parent().removeClass('active');
			$(this).next('.dep2_wrap').stop().slideUp();
		} else {
			//$(this).parent().addClass('active');
			$(this).next('.dep2_wrap').stop().slideDown();
		}
	});
	
	$('.btn_agree').click(function(e){
		e.preventDefault();
		$(this).next('.agree_box').slideToggle();
	});
	
	$('#top_trigger').click(function(){
		$('html,body').animate({scrollTop:0},1000)
	});

	$(document).ready(function(){
		topTrigger();
	});
	$(window).scroll(function(){
		topTrigger();
	});
	
	$(window).on("resize", function(){
		var headerHeight = $('#header').outerHeight()
		var winWidth = $(window).width();
		$('#body_wrap').css({'padding-top':headerHeight + 'px'});
	});
	$(window).trigger("resize");  
	
	
	$('.ani_top').scrollex({
		top:'15%',
		bottom:'-100000px',
		enter: function(){
			$(this).addClass('move');
		}
	});
	$('.ani_left').scrollex({
		top:'15%',
		bottom:'-100000px',
		enter: function(){
			$(this).addClass('move');
		}
	});
	$('.ani_right').scrollex({
		top:'15%',
		bottom:'-100000px',
		enter: function(){
			$(this).addClass('move');
		}
	});
});