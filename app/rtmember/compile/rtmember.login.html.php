<?php /* Template_ 2.2.8 2017/03/11 00:47:06 /home/admin2.co.kr/il/app/rtmember/template/rtmember.login.html 000001989 */ ?>
<!-- 반응형 회원 시작 -->
<div class="rt-rwd-member-wrap">
	<form name="login_form" method="post" action="<?php echo $TPL_VAR["path_user"]?>/update.php" target="rt_ifrm">
		<input type="hidden" name="mode" value="login">
		<input type="hidden" name="pcd" value="<?php echo $TPL_VAR["페이지코드"]?>">
<?php if($TPL_VAR["prepage"]){?>
		<input type="hidden" name="prepage" value="<?php echo $TPL_VAR["prepage"]?>">
<?php }?>
		<div class="rt-rwd-login-wrap">
			<div class="rt-rwd-login-con">
				<div class="rt-rwd-login-box">
					<input type="text" name="userid" value="<?php echo $TPL_VAR["아이디"]?>" id="userid" placeholder="아이디" msg="아이디를 입력해 주세요"/>
				</div>
				<div class="rt-rwd-login-box">
					<input type="password" name="userpw" id="userpw" placeholder="패스워드" msg="비밀번호를 입력해 주세요"/>
				</div>
				<div class="rt-rwd-login-box">
					<p>
						<label for="is_memory"><input type="checkbox" name="is_memory" id="is_memory" value="y" <?php echo $TPL_VAR["아이디기억하기"]?> /> ID 기억하기</label>
					</p>
				</div>
				<div class="rt-rwd-login-box">
					<a href="#;" class="rt-rwd-login-send" id="btn-login">로그인</a>
				</div>
				<div class="rt-rwd-login-box">
					<p class="rt-rwd-login-tac">
						<a href="<?php echo $TPL_VAR["page_find"]?>">아이디 / 패스워드 찾기</a>
						<a href="<?php echo $TPL_VAR["page_join"]?>">회원가입</a>
					</p>
				</div>
			</div>
		</div>
	</form>
</div>
<!-- 반응형 회원 끝 -->

<script src="<?php echo $TPL_VAR["path_assets"]?>/js/rtmember.login.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $TPL_VAR["path_assets"]?>/css/rt_member.css" />
<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>