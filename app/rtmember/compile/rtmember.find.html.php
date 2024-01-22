<?php /* Template_ 2.2.8 2017/03/11 00:47:06 /home/admin2.co.kr/il/app/rtmember/template/rtmember.find.html 000002588 */ ?>
<!-- 반응형 회원 시작 -->
<input type="hidden" id="ssl" value="<?php echo $TPL_VAR["ssl"]?>" />
<div class="rt-rwd-member-wrap">
	<form name="findid_form" method="post" target="rt_ifrm">
		<div class="rt-rwd-login-wrap">
			<div class="rt-rwd-login-con">
				<h1 class="rt-rwd-login-title">아이디 찾기</h1>
				<div class="rt-rwd-login-box">
					<input type="text" id="findid_name" placeholder="이름" />
				</div>
				<div class="rt-rwd-login-box">
					<input type="text" id="findid_email" placeholder="가입 메일주소" />
				</div>
				<div class="rt-rwd-login-box">
					<p><span class="rt-form-bold" id="capcha_str_id"></span><a href="#;" class="rt-form-reflash" onclick="rt_get_capcha('id')">새로고침</a></p>
				</div>
				<div class="rt-rwd-login-box">
					<input type="text" name="sec_code" id="sec_code" placeholder="※ 보안문자를 입력해 주세요." />
				</div>
				<div class="rt-rwd-login-box">
					<a href="#;" class="rt-rwd-login-send" id="btn-find-id">확인</a>
				</div>
			</div>
		</div>
	</form>
	<form name="findpw_form" method="post" target="rt_ifrm">
		<div class="rt-rwd-login-wrap">
			<div class="rt-rwd-login-con">
				<h1 class="rt-rwd-login-title">비밀번호 찾기</h1>
				<div class="rt-rwd-login-box">
					<input type="text" placeholder="이름" id="findpw_name" />
				</div>
				<div class="rt-rwd-login-box">
					<input type="text" placeholder="아이디" id="findpw_id" />
				</div>
				<div class="rt-rwd-login-box">
					<input type="text" placeholder="가입 메일주소" id="findpw_email" />
				</div>
				<div class="rt-rwd-login-box">
					<p><span class="rt-form-bold" id="capcha_str_pw"></span><a href="#;" class="rt-form-reflash" onclick="rt_get_capcha('pw')">새로고침</a></p>
				</div>
				<div class="rt-rwd-login-box">
					<input type="text" placeholder="※ 보안문자를 입력해 주세요." name="sec_code2" id="sec_code2" />
				</div>
				<div class="rt-rwd-login-box">
					<a href="#;" class="rt-rwd-login-send" id="btn-find-pw">확인</a>
				</div>
			</div>
		</div>
	</form>
</div>
<!-- 반응형 회원 끝 -->
<script src="<?php echo $TPL_VAR["path_assets"]?>/js/rtmember.find.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $TPL_VAR["path_assets"]?>/css/rt_member.css" />
<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>