<?php include_once('../../_head.php');?>
<!-- 컨텐츠 박스 STR -->

<article class="sv_wrap">
	<h2 class="blind">서브비주얼</h2>
	<div id="sv" class="sv1">
		<div class="visual"></div>
		<div class="txt_wrap tl-50 tac">
			<h3 class="tit txt42 white mb5"><b>소식</b></h3>
		</div>
	</div>
	<div class="navigation">
		<div class="w1297"><img src="/assets/images/sub/home_ico.png" alt="home"> &nbsp; > &nbsp; 소통DX &nbsp; > &nbsp;<strong> 소식</strong></div>
	</div>
</article>
<article class="board_wrap">
	<div class="w1100">
		<div class="notice_wrap">
			<h3 class="page_tit txt36"><b>소식</b></h3>
			<?php rt_app("rtboard","display",array("sosic"));?>
		</div>
	</div>
</article>


<!-- 컨텐츠 박스 END -->
<?php include_once('../../_tail.php');?>