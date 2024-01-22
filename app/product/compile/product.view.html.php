<?php /* Template_ 2.2.8 2021/03/22 17:01:25 /home/admin2.co.kr/green/app/product/template/product.view.html 000005098 */ 
$TPL_제품분류_1=empty($TPL_VAR["제품분류"])||!is_array($TPL_VAR["제품분류"])?0:count($TPL_VAR["제품분류"]);?>
<ul id="s_tab" class="col-9">
<?php if($TPL_제품분류_1){foreach($TPL_VAR["제품분류"] as $TPL_V1){?>
	<li><a href="?c=<?php echo $TPL_V1["분류코드"]?>" class="<?php echo $TPL_V1["active"]?>"><?php echo $TPL_V1["분류명"]?></a></li>
<?php }}?>
</ul>
<div class="prodocut_wrap">
	<!--conbody-->
	<div class="rt_product_wrap">

		<!-- 제품소개 뷰 시작 -->
<?php if($TPL_VAR["제품정보"]["페이지구성"]=='img'){?>
		<div class="rt_product_view_wrap rt_product_view_wrap2">
<?php if($TPL_VAR["제품정보"]["콘텐츠이미지"]){?>
			<!-- <img src="<?php echo $TPL_VAR["제품정보"]["콘텐츠이미지경로"]?>" /> -->
			<div class="rt_product_img_wrap">
				<div class="rt_product_img_box">
					<p class="rt_product_img"><img src="<?php echo $TPL_VAR["제품정보"]["콘텐츠이미지경로"]?>" onclick="imgPop(this.src)" style="cursor: pointer;"/></p>
					<p class="rt_product_txt"><span>이미지</span></p>
				</div>
				<div class="rt_product_img_box">
					<p class="rt_product_img"><img src="<?php echo $TPL_VAR["제품정보"]["콘텐츠이미지경로"]?>" onclick="imgPop(this.src)" style="cursor: pointer;"/></p>
					<p class="rt_product_txt"><span>도면</span></p>
				</div>
				<div class="rt_product_img_box">
					<p class="rt_product_img"><img src="<?php echo $TPL_VAR["제품정보"]["콘텐츠이미지경로"]?>" onclick="imgPop(this.src)" style="cursor: pointer;"/></p>
					<p class="rt_product_txt"><span>설치사례</span></p>
				</div>
			</div>
			<div class="rt_product_table_wrap">
				<table>
					<thead>
						<tr>
							<th>MODEL NO</th>
							<th>BODY SIZE</th>
							<th>MATERIALS</th>
							<th>LED TYPE</th>
							<th>COLOR<br>TEMPERATURE</th>
							<th>LED ANGLE</th>
							<th>INPUT<br>(V)</th>
							<th>WATT<br>(W)</th>
							<th>IP 지수</th>
							<th>REMARK</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>GR-FL1000</td>
							<td>(L)1000(mm)X (L)363(mm)</td>
							<td>Aluminium Extrude, Tempered Glass Cover </td>
							<td>Power Led</td>
							<td>3000K,5700K R.G.B</td>
							<td>12°30°60°90°</td>
							<td>24V</td>
							<td>54W</td>
							<td>65</td>
							<td>65</td>
						</tr>
						<tr>
							<td>GR-FL1000</td>
							<td>(L)1000(mm)X (L)363(mm)</td>
							<td>Aluminium Extrude, Tempered Glass Cover </td>
							<td>Power Led</td>
							<td>3000K,5700K R.G.B</td>
							<td>12°30°60°90°</td>
							<td>24V</td>
							<td>54W</td>
							<td>65</td>
							<td>65</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="img_wrap tac">
				<p class="mb10"><img src="<?php echo $TPL_VAR["제품정보"]["콘텐츠이미지경로"]?>" /></p>
				<p class="mb10"><img src="<?php echo $TPL_VAR["제품정보"]["콘텐츠이미지경로"]?>" /></p>
			</div>
			<div class="rt_product_view_info_pager">
				<a href="<?php echo $TPL_VAR["목록가기링크"]?>" class="rt_product_view_list_go"><span>목록</span></a>
			</div>
<?php }?>
		</div>
<?php }?>

<?php if($TPL_VAR["제품정보"]["페이지구성"]=='html'){?>
		<div class="rt_product_view_wrap rt_product_view_wrap2">
			<?php echo $TPL_VAR["제품정보"]["페이지HTML"]?>

			<div class="rt_product_view_info_pager">
				<a href="<?php echo $TPL_VAR["목록가기링크"]?>" class="rt_product_view_list_go"><span>목록</span></a>
			</div>
		</div>
<?php }?>
		<!-- 제품소개 뷰 끝 -->
	</div>
	<!--//conbody-->
</div>

<!-- 반응형 CSS STR-->
<link href="<?php echo $TPL_VAR["path_assets"]?>/css/rt_product.css" type="text/css" rel="stylesheet"/>
<!-- 반응형 CSS END-->

<script type="text/javascript">
function imgPop(url){
		var img=new Image();
		img.src=url;
		var img_width=img.width;
		var win_width=img.width+55;
		var img_height=img.height+1;
		var win=img.height+55;
		var OpenWindow=window.open('','_blank', 'width='+img_width+', height='+img_height+', menubars=no, scrollbars=auto');
		OpenWindow.document.write("<style>body{margin:0px;}</style><img src='"+url+"'>");
	 }
jQuery(function($){
	$('.rt_product_nav_con a').click(function(){
		$(this).parent().addClass('active').siblings().removeClass('active');
	});
	$('.rt_depth1_wrap .rt_depth1').click(function(){
		$(this).parent().addClass('active').siblings().removeClass('active');
	});
	$('.rt_product_info_thumb_wrap a').click(function(){
		var img_src = $(this).children().attr('data');
		$('.rt_product_view_thumb img').attr('src',img_src);
	});
	$('.rt_product_view_pager_wrap a').click(function(){
		var tmp = $(this).index();
		$(this).addClass('active').siblings().removeClass('active');
		$('.rt_produc_view_substance_wrap .rt_produc_view_substance').eq(tmp).show().siblings().hide();
	});

	
})
</script>