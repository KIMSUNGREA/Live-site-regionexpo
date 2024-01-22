<?php /* Template_ 2.2.8 2021/07/22 10:28:12 /www_root/app/rtboard/template/info.dxmovie.list.html 000004462 */ 
$TPL_글분류_1=empty($TPL_VAR["글분류"])||!is_array($TPL_VAR["글분류"])?0:count($TPL_VAR["글분류"]);
$TPL_리스트_1=empty($TPL_VAR["리스트"])||!is_array($TPL_VAR["리스트"])?0:count($TPL_VAR["리스트"]);?>
<div class="rt-rwd-webtoon-wrap">
	<div class="rt-rwd-list-top">
		<p class="total">총 게시물 : <?php echo $TPL_VAR["게시물수"]?></p>
		<!-- 검색폼 STR -->
		<div class="rt-rwd-search-wrap">
			<form name="search_form" method="get" action="">
			<input type="hidden" name="pcd" value="<?php echo $TPL_VAR["페이지코드"]?>">
			<input type="hidden" name="screen" value="<?php echo $TPL_VAR["이동화면"]?>">
				<div class="rt-rwd-search-select-wrap" style="display: none;">
<?php if($TPL_VAR["분류사용"]=='y'){?>
					<select class="rt-rwd-search-select" name="ct">
						<option value="">분류 선택</option>
<?php if($TPL_글분류_1){foreach($TPL_VAR["글분류"] as $TPL_V1){?>
						<option value="<?php echo $TPL_V1["분류명"]?>" <?php echo $TPL_V1["selected"]?>><?php echo $TPL_V1["분류명"]?></option>
<?php }}?>
					</select>
<?php }?>
				</div>
				<div class="rt-rwd-search-select-wrap">
					<select class="rt-rwd-search-select" name="search">
						<option value="subject">제목</option>
					</select>
				</div>
				<div class="rt-rwd-search-input-wrap">
					<input type="text" name="searchstring" class="rt-rwd-search-input" value="<?php echo $TPL_VAR["검색어"]?>"/>
				</div>
				<a href="javascript:document.search_form.submit();" class="rt-rwd-search-send"><img src="/assets/images/sub/icon_sch.png" alt="검색" width="17"></a>
			</form>
		</div>
		<!-- 검색폼 END -->
	</div>
	<!-- 게시판 리스트 STR -->
	<div class="rt-rwd-photo-wrap clearfix">
<?php if($TPL_VAR["게시물수"]> 0){?>
<?php if($TPL_리스트_1){foreach($TPL_VAR["리스트"] as $TPL_V1){?>
		<div class="rt-rwd-photo-con">
			<div class="rt-rwd-photo-thumb">
				<a href="#;" onclick="popView(event,'<?php echo $TPL_V1["줄임제목"]?>','<?php echo $TPL_V1["추가_영상주소"]?>');"><img src="<?php echo $TPL_V1["목록이미지경로"]?>" alt="썸네일" /></a>
			</div>
			<div class="rt-rwd-photo-substance">
				<p class="rt-rwd-photo-subject"><a href="#;" onclick="popView(event,'<?php echo $TPL_V1["줄임제목"]?>','<?php echo $TPL_V1["추가_영상주소"]?>');"><?php echo $TPL_V1["줄임제목"]?></a><span class="icon"><img src="/assets/images/sub/icon_youtube.png" alt=""></span></p>
				<div class="rt-rwd-photo-data-wrap clearfix">
<?php if($TPL_VAR["분류사용"]=='y'){?>
					<div class="rt-rwd-photo-data">
						<p><?php echo $TPL_V1["분류"]?></p>
					</div>
<?php }?>
					<div class="rt-rwd-photo-data">
						<p><?php echo $TPL_V1["작성자"]?></p>
					</div>
					<div class="rt-rwd-photo-data">
						<p><?php echo $TPL_V1["작성일"]?></p>
					</div>
				</div>
			</div>
		</div>
<?php }}?>
<?php }else{?>
		<div class="rt-rwd-list-nosearch clearfix">
		등록된 글이 없습니다.
	</div>
<?php }?>
	</div>

	<div class="popup popup_photo">
		<div class="layer">
			<div class="layer_in">
				<p class="close" onclick="popClose();"><img src="/assets/images/sub/board_layer_close.png" alt="팝업닫기"></p>
				<div class="layer_video_wrap">
					<div class="layer_tit">
						<h3 class="tit" id="video-tit"></h3>
					</div>
					<div class="video_wrap">
						<iframe id="video-src" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--페이지네이션 STR-->
	<?php echo $TPL_VAR["페이지인덱스"]?>

	<!--페이지네이션 END-->

	<!-- 반응형 CSS STR-->
	<script src="<?php echo $TPL_VAR["path_theme"]?>/user/js/rtboard.theme.info.user.js" type="text/javascript"></script>
	<!-- 반응형 CSS END-->
</div>
<style>
	.rt-rwd-photo-subject {padding-right: 40px;}
	.rt-rwd-photo-thumb a {padding-bottom: 62%;}
</style>
<script>
	
	function popView(event,tit,url) {
		event.preventDefault();

		$("#video-tit").text(tit);
		$("#video-src").attr("src",url);

		$('.popup').fadeIn();
	}
	function popClose() {
		$('.popup').hide();
	}
	
</script>