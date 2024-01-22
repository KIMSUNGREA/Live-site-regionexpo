<?php /* Template_ 2.2.8 2017/03/11 00:47:06 /home/admin2.co.kr/il/app/rtmember/template/rtmember.step1.html 000002277 */ ?>
<!-- 반응형 회원 시작 -->
<div class="rt-rwd-member-wrap">
	<form name="agree_form" method="get" action="?">
		<input type="hidden" name="cf" value="step2">
		<input type="hidden" name="screen" value="<?php echo $TPL_VAR["이동화면"]?>">
<?php if($TPL_VAR["페이지코드"]){?>
		<input type="hidden" name="pcd" value="<?php echo $TPL_VAR["페이지코드"]?>">
<?php }?>
	</form>
	<!-- 가입동의 시작 -->
	<div class="rt-rwd-join-form-area clearfix">
		<div class="rt-rwd-join-form-box rt-full-box">
			<p><?php echo $TPL_VAR["agreement1_title"]?></p>
		</div>
		<div class="rt-rwd-join-form-box rt-full-box">
			<textarea class="rt-rwd-join-form-agree" readonly="readonly"><?php echo $TPL_VAR["agreement1_txt"]?></textarea>
		</div>
		<div class="rt-rwd-join-form-box rt-full-box rt-rwd-join-form-box-mb30 clearfix">
			<p class="rt-join-form-tar"><label for="agr1"><input type="checkbox" id="agr1" /> <span>동의합니다.</span></label></p>
		</div>
		<div class="rt-rwd-join-form-box rt-full-box">
			<p><?php echo $TPL_VAR["agreement2_title"]?></p>
		</div>
		<div class="rt-rwd-join-form-box rt-full-box">
			<textarea class="rt-rwd-join-form-agree" readonly="readonly"><?php echo $TPL_VAR["agreement2_txt"]?></textarea>
		</div>
		<div class="rt-rwd-join-form-box rt-full-box rt-rwd-join-form-box-mb30 clearfix">
			<p class="rt-join-form-tar"><label for="agr2"><input type="checkbox" id="agr2" /> <span>동의합니다.</span></label></p>
		</div>
		<div class="rt-rwd-join-form-box rt-full-box rt-rwd-join-form-box-mb30">
			<p class="rt-join-form-tac"><label for="agr-all"><input type="checkbox" id="agr-all" /><span>모두 동의합니다.</span></label></p>
		</div>
	</div>
	<!-- 가입동의 끝 -->
	<!-- 버튼 시작 -->
	<div class="rt-button rt-button-tac">
		<a href="#;" id="btn-agree">회원 정보 입력</a>
	</div>
	<!-- 버튼 끝 -->
</div>
<!-- 반응형 회원 끝 -->

<script src="<?php echo $TPL_VAR["path_assets"]?>/js/rtmember.join.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $TPL_VAR["path_assets"]?>/css/rt_member.css" />