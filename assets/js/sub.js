$(function(){
	
	$(document).ready(function(){
		$('#gnb .dep1_con').eq(a_num).addClass('active').children().eq(b_num).addClass('active');
		$('.sitemap .dep1_con').eq(a_num).addClass('active').find('.dep2_con').eq(b_num).addClass('active');
		$('.s_tab a').eq(b_num).addClass('active');
	});

	
});