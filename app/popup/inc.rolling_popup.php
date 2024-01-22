<div class="rolling_popup_wrap">
	<div class="rolling_popup_in">
		<ul class="rolling_popup_con">
			<li class="rolling_popup"><img src="/assets/images/common/pop1.jpg" alt=""></li>
			<li class="rolling_popup"><img src="/assets/images/common/pop2.jpg" alt=""></li>
			<li class="rolling_popup"><img src="/assets/images/common/pop3.jpg" alt=""></li>
		</ul>
		<ul class="rolling_popup_nav">
			<li class="rolling_nav"><a href="#;">팝업1</a></li>
			<li class="rolling_nav"><a href="#;">팝업2</a></li>
			<li class="rolling_nav"><a href="#;">팝업3</a></li>
		</ul>
	</div>
	<div class="closeWrap cfix">
		<p><span>오늘하루 창을 열지않음</span><span>클릭하면 오늘하루 OFF</span></p>
		<a href="#" onclick="$('.rolling_popup_wrap').hide();" class="btn_popclose"><img src="/app/popup/assets/img/close_w.png" alt="창닫기"></a>
	</div>
</div>

<!-- popup css //-->
<link rel="stylesheet" href="<?php echo $_rt_popup['app_path'];?>/assets/css/rt.rolling_popup.css" />

<!-- popup js S //-->
<script>

$(function() {
	
	 $('.rolling_popup_con').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 3000,
		asNavFor: '.rolling_popup_nav'
	});
	$('.rolling_popup_nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.rolling_popup_con',
		dots: false,
		arrows: false,
		focusOnSelect: true
	});

});

</script>
