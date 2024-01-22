<?php
//-----------------------------------------------------------------------------------------
// 프로그램		: RINT-KIT
// 제작			: 린트킷(rintkit.com)
// 버전			: 1.0
// 인코딩		: UTF-8
// 설명			: 사용자 팝업 소스 출력
//-----------------------------------------------------------------------------------------

if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }

//관리자 팝업 설정 아이프레임에서는 설정팝업을 출력 안함
if (is_numeric($env->_get['popseq'])) {
	$addqry = " AND seq!=".$env->_get['popseq'];
}

$today = date("Y-m-d");
$arr_pop = $dbo->fetch_list("SELECT * FROM RT_POPUP WHERE is_view='y' AND date_start <= '".$today."' AND date_end >= '".$today."'".$addqry);
for ($m = 0; $m < count($arr_pop); $m++) {


	if ($arr_pop[$m]['seq'] == 6) {
		$arr_pop[$m]['link_url'] = "window.open('https://form.office.naver.com/form/responseView.cmd?formkey=OTFmMmViYjYtODgyMS00YmE4LTllOWQtMTQxMmYxY2E2MWQ3&sourceId=editor')";
	}

	if ($arr_pop[$m]['seq'] == 7) {
		$arr_pop[$m]['link_url'] = "location.href='https://regionexpo.kr/page/s6/s1.php?cf=view&seq=257&pg=1'";
	}

	if ($arr_pop[$m]['pop_type'] == "1") {

		if ($arr_pop[$m]['content_type'] == "img") {

			if ($arr_pop[$m]['file1_new']) {

				?><div class="divform" id="divpop<?php echo $arr_pop[$m]['seq'];?>" style="display:none;z-index:996;padding:0px;"><?

				if ($arr_pop[$m]['link_is']=="y") {

					if ($arr_pop[$m]['link_type']=="url") {

						?><img src="<?php echo $arr_pop[$m]['file_subdir'];?>/<?php echo $arr_pop[$m]['file1_new'];?>" border="0" onclick="<?php echo $arr_pop[$m]['link_url'];?>" style="cursor:pointer;width:<?php echo $arr_pop[$m]['size_w'];?>px;height:<?php echo $arr_pop[$m]['size_h'];?>px;"><?

					} else if ($arr_pop[$m]['link_type']=="map") {

						?>
						<img src="<?php echo $arr_pop[$m]['file_subdir'];?>/<?php echo $arr_pop[$m]['file1_new'];?>" border="0" usemap="#popmap<?php echo $arr_pop[$m]['seq'];?>" style="width:<?php echo $arr_pop[$m]['size_w'];?>px;height:<?php echo $arr_pop[$m]['size_h'];?>px;">
						<map name="popmap<?php echo $arr_pop[$m]['seq'];?>" id="popmap<?php echo $arr_pop[$m]['seq'];?>">
						<?php echo rt_dbstr_decode($arr_pop[$m]['link_map']);?>
						</map>
						<?

					} else {

						?><img src="<?php echo $arr_pop[$m]['file_subdir'];?>/<?php echo $arr_pop[$m]['file1_new'];?>" border="0" style="width:<?php echo $arr_pop[$m]['size_w'];?>px;height:<?php echo $arr_pop[$m]['size_h'];?>px;"><?
					}

				} else {

					?><img src="<?php echo $arr_pop[$m]['file_subdir'];?>/<?php echo $arr_pop[$m]['file1_new'];?>" border="0" style="width:<?php echo $arr_pop[$m]['size_w'];?>px;height:<?php echo $arr_pop[$m]['size_h'];?>px;"><?
				}
			}

		} else if ($arr_pop[$m]['content_type'] == "html") {

			?><div class="divform" id="divpop<?php echo $arr_pop[$m]['seq'];?>" style="display:none;z-index:9999;background-color:#ffffff;width:<?php echo $arr_pop[$m]['size_w'];?>px;height:<?php echo $arr_pop[$m]['size_h'];?>px;"><?php echo rt_dbstr_decode($arr_pop[$m]['content_html']);?><?
		}
	?>
		<div class="closeWrap cfix">
			<p onclick="div_popup_close('divpop<?php echo $arr_pop[$m]['seq'];?>');"><span>오늘하루 창을 열지않음</span><span>클릭하면 오늘하루 OFF</span></p>
			<a href="#" onclick="$('#divpop<?php echo $arr_pop[$m]['seq'];?>').hide();" class="btn_popclose"><img src="/app/popup/assets/img/close_w.png" alt="창닫기"></a>
		</div>
	</div>
	<?php
	} else if ($arr_pop[$m]['pop_type'] == "2") {
	?>
	<div class="rolling_popup_wrap" id="divpop<?php echo $arr_pop[$m]['seq'];?>" style="display:none;width:<?php echo $arr_pop[$m]['size_w'];?>px;">
		<div class="rolling_popup_in">
			<ul class="rolling_popup_con" id="rolling_popup_con_<?php echo $arr_pop[$m]['seq'];?>">
			<?php
			$_img_cnt = 0;
			for ($f = 1 ; $f < 5 ; $f++) {
				if ($arr_pop[$m]['file'.$f.'_new']) {
			?>
				<li class="rolling_popup" onclick="location.href='<?php echo (!empty($arr_pop[$m]['link_url'.$f])) ? $arr_pop[$m]['link_url'.$f] : "#;";?>'"><img src="<?php echo $arr_pop[$m]['file_subdir'];?>/<?php echo $arr_pop[$m]['file'.$f.'_new'];?>" alt=""></li>
			<?php
				$_img_cnt++;
				}
			}
			?>
			</ul>
			<ul class="rolling_popup_nav" id="rolling_popup_nav_<?php echo $arr_pop[$m]['seq'];?>">
			<?php
			for ($f = 1 ; $f < 5 ; $f++) {
				if ($arr_pop[$m]['file'.$f.'_new']) {
			?>
				<li class="rolling_nav"><a href="#;"><?php echo $arr_pop[$m]['pop_title'.$f];?></a></li>
			<?php
				}
			}
			?>
			</ul>
		</div>
		<div class="closeWrap cfix">
			<p onclick="div_popup_close('divpop<?php echo $arr_pop[$m]['seq'];?>');"><span>오늘하루 창을 열지않음</span><span>클릭하면 오늘하루 OFF</span></p>
			<a href="#" onclick="$('#divpop<?php echo $arr_pop[$m]['seq'];?>').hide();" class="btn_popclose"><img src="/app/popup/assets/img/close_w.png" alt="창닫기"></a>
		</div>
	</div>
	<script>
	$(function() {
		
		$("#rolling_popup_con_<?php echo $arr_pop[$m]['seq'];?>").slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			autoplay: true,
			speed: 200,
			autoplaySpeed: 3000,
			asNavFor: "#rolling_popup_nav_<?php echo $arr_pop[$m]['seq'];?>"
		});
		$("#rolling_popup_nav_<?php echo $arr_pop[$m]['seq'];?>").slick({
			slidesToShow: <?php echo $_img_cnt;?>,
			slidesToScroll: 1,
			asNavFor: "#rolling_popup_con_<?php echo $arr_pop[$m]['seq'];?>",
			dots: false,
			arrows: false,
			focusOnSelect: true
		}); 

	});

	</script>
	<?php
	}
}
?>

<!-- popup css //-->
<link rel="stylesheet" href="<?php echo $_rt_popup['app_path'];?>/assets/css/rt.popup.css?v=<?=time();?>" />
<link rel="stylesheet" href="<?php echo $_rt_popup['app_path'];?>/assets/css/rt.rolling_popup.css?v=<?=time();?>" />

<!-- popup js S //-->
<script type="text/javascript">
var contentWidth = "1200";//사이트 공통 width 사이즈 입력
var div_popup = Array();
<?php
for ($m = 0; $m < count($arr_pop); $m++) {

	if ($arr_pop[$m]['content_type'] == "img") {
		if ($arr_pop[$m]['file1_new']) {
		?>div_popup['divpop<?php echo $arr_pop[$m]['seq'];?>'] = "<?php echo $arr_pop[$m]['pos_x'];?>,<?php echo $arr_pop[$m]['pos_y'];?>";<?
		}
	} else if ($arr_pop[$m]['content_type'] == "html") {
		?>div_popup['divpop<?php echo $arr_pop[$m]['seq'];?>'] = "<?php echo $arr_pop[$m]['pos_x'];?>,<?php echo $arr_pop[$m]['pos_y'];?>";<?
	}
}
?>
</script>
<script language="javascript" src="<?php echo $_rt_popup['app_path'];?>/assets/js/rt.popup.js"></script>
<!-- popup js E //-->
