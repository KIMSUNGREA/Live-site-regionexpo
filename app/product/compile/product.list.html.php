<?php /* Template_ 2.2.8 2021/03/22 15:27:01 /home/admin2.co.kr/green/app/product/template/product.list.html 000004431 */ 
$TPL_제품분류_1=empty($TPL_VAR["제품분류"])||!is_array($TPL_VAR["제품분류"])?0:count($TPL_VAR["제품분류"]);
$TPL_제품리스트_1=empty($TPL_VAR["제품리스트"])||!is_array($TPL_VAR["제품리스트"])?0:count($TPL_VAR["제품리스트"]);?>
<ul id="s_tab" class="col-9">
<?php if($TPL_제품분류_1){foreach($TPL_VAR["제품분류"] as $TPL_V1){?>
	<li><a href="?c=<?php echo $TPL_V1["분류코드"]?>" class="<?php echo $TPL_V1["active"]?>"><?php echo $TPL_V1["분류명"]?></a></li>
<?php }}?>
</ul>
<div class="prodocut_wrap">
	<!--conbody-->
	<div class="rt_product_wrap">
<?php if($TPL_VAR["분류대표이미지명"]){?>
		<img src="<?php echo $TPL_VAR["분류대표이미지경로"]?>" alt="제품소개 비주얼" class="rt_product_visual" />
<?php }?>

<?php if($TPL_VAR["페이지구성"]=='none'){?>

		<!-- 제품소개 리스트 시작 -->
		<div class="rt_product_wrap">
<?php if($TPL_VAR["게시물수"]> 0){?>
			<ul class="rt_product_con rt_product_thumb_wrap">
<?php if($TPL_제품리스트_1){foreach($TPL_VAR["제품리스트"] as $TPL_V1){?>
				<li class="rt_product_thumb_con">
					<a href="<?php echo $TPL_V1["상세페이지링크"]?>" class="rt_thumb"><img src="<?php echo $TPL_V1["목록이미지경로"]?>" alt="제품 썸네일" /></a>
					<p class="rt_product_subject"><a href="<?php echo $TPL_V1["상세페이지링크"]?>"><?php echo $TPL_V1["줄임제품명"]?></a></p>
				</li>
<?php }}?>
			</ul>
<?php }?>

<?php if($TPL_VAR["게시물수"]> 0){?>
			<ul class="rt_product_con rt_product_list_wrap blind">
<?php if($TPL_제품리스트_1){foreach($TPL_VAR["제품리스트"] as $TPL_V1){?>
				<li class="rt_product_list_con">
					<div class="rt_thumb_wrap">
						<a href="<?php echo $TPL_V1["상세페이지링크"]?>" class="rt_thumb"><img src="<?php echo $TPL_V1["목록이미지경로"]?>" alt="제품 썸네일" /></a>
					</div>
					<div class="rt_product_list_box">
						<div class="rt_product_list_tit_wrap">
							<h1 class="rt_product_list_tit"><?php echo $TPL_V1["제품명"]?></h1>
						</div>
						<table class="rt_product_list_info">
							<caption>제품정보</caption>
							<colgroup>
								<col width="90px"/>
								<col width="*"/>
							</colgroup>
							<tr>
								<th><p>- <?php echo $TPL_V1["옵션명1"]?></p></th>
								<td><p><?php echo $TPL_V1["옵션1"]?></p></td>
							</tr>
							<tr>
								<th><p>- <?php echo $TPL_V1["옵션명2"]?></p></th>
								<td><p><?php echo $TPL_V1["옵션2"]?></p></td>
							</tr>
							<tr>
								<th><p>- <?php echo $TPL_V1["옵션명3"]?></p></th>
								<td><p><?php echo $TPL_V1["옵션3"]?></p></td>
							</tr>
							<tr>
								<th><p>- <?php echo $TPL_V1["옵션명4"]?></p></th>
								<td><p><?php echo $TPL_V1["옵션4"]?></p></td>
							</tr>
							<tr>
								<th><p>- <?php echo $TPL_V1["가상옵션명1"]?></p></th>
								<td><p><?php echo $TPL_V1["가상옵션1"]?></p></td>
							</tr>
						</table>
					</div>
				</li>
<?php }}?>
			</ul>
<?php }?>
		</div>
		<!-- 제품소개 리스트 끝 -->
	</div>

	<!--페이지네이션 STR-->
	<?php echo $TPL_VAR["페이지인덱스"]?>

	<!--페이지네이션 END-->

<?php }?>

<?php if($TPL_VAR["페이지구성"]=='img'){?>
		<img src="<?php echo $TPL_VAR["분류콘텐츠이미지"]?>" alt="" />
<?php }?>

<?php if($TPL_VAR["페이지구성"]=='html'){?>
		<?php echo $TPL_VAR["분류페이지HTML"]?>

<?php }?>
</div>
<!-- 반응형 CSS STR-->
<link href="<?php echo $TPL_VAR["path_assets"]?>/css/rt_product.css" type="text/css" rel="stylesheet"/>
<!-- 반응형 CSS END-->

<!--//conbody-->
<script type="text/javascript">
jQuery(function($){
	$('.rt_product_nav_option_con .rt_product_nav_option_type').click(function(){
		var tmp = $(this).index();
		$(this).addClass('active').siblings().removeClass('active');
		$('.rt_product_wrap .rt_product_con').eq(tmp).show().siblings().hide();
	});
	$('.rt_product_nav_con a').click(function(){
		$(this).parent().addClass('active').siblings().removeClass('active');
	});
	$('.rt_depth1_wrap .rt_depth1').click(function(){
		$(this).parent().addClass('active').siblings().removeClass('active');
	});
})
</script>