<?php /* Template_ 2.2.8 2022/10/19 11:19:32 /www_root/app/rtboard/template/info.dxphoto.list.html 000003440 */ 
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
						<option value="subjcont">제목+내용</option>
						<option value="subject">제목</option>
						<option value="content">내용</option>
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
				<a href="<?php echo $TPL_V1["상세페이지링크"]?>"><img src="<?php echo $TPL_V1["목록이미지경로"]?>" alt="썸네일" /></a>
			</div>
			<div class="rt-rwd-photo-substance">
				<p class="rt-rwd-photo-subject"><a href="<?php echo $TPL_V1["상세페이지링크"]?>"><?php echo $TPL_V1["줄임제목"]?></a></p>
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

	<!--페이지네이션 STR-->
	<?php echo $TPL_VAR["페이지인덱스"]?>

	<!--페이지네이션 END-->

	<!-- 반응형 CSS STR-->
	<script src="<?php echo $TPL_VAR["path_theme"]?>/user/js/rtboard.theme.info.user.js" type="text/javascript"></script>
	<!-- 반응형 CSS END-->
</div>
<style>
	.rt-rwd-photo-thumb a {padding-bottom:62%;}
</style>