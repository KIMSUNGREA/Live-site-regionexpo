<?php /* Template_ 2.2.8 2017/03/29 09:26:54 /home/rintkit.com/new/app/rtmember/template/rtmember.step2.html 000010748 */ 
$TPL_메일리스트_1=empty($TPL_VAR["메일리스트"])||!is_array($TPL_VAR["메일리스트"])?0:count($TPL_VAR["메일리스트"]);
$TPL_국번리스트_1=empty($TPL_VAR["국번리스트"])||!is_array($TPL_VAR["국번리스트"])?0:count($TPL_VAR["국번리스트"]);
$TPL_추가필드_1=empty($TPL_VAR["추가필드"])||!is_array($TPL_VAR["추가필드"])?0:count($TPL_VAR["추가필드"]);?>
<!-- 반응형 회원 시작 -->
<div class="rt-rwd-member-wrap">
	<!-- 폼 시작 -->
	<div class="rt-rwd-join-form-wrap">
		<!-- 폼 필드 시작 -->
		<form name="join_form" action="<?php echo $TPL_VAR["path_user"]?>/update.php" method="post" target="rt_ifrm">
			<input type="hidden" name="mode" value="insert" />
			<input type="hidden" name="path_user" value="<?php echo $TPL_VAR["path_user"]?>" />
			<input type="hidden" name="php_self" value="<?php echo $TPL_VAR["php_self"]?>" />
			<input type="hidden" name="id_check" value="" />
			<input type="hidden" name="pcd" value="<?php echo $TPL_VAR["페이지코드"]?>">
			<input type="hidden" name="screen" value="<?php echo $TPL_VAR["이동화면"]?>">
			<input type="hidden" id="join_check" value="n" />
			<input type="hidden" name="auth_sms_en" value="<?php echo $TPL_VAR["SMS인증"]?>" />
			<input type="hidden" name="is_sms_auth" value="n" />
			<input type="hidden" name="sms_auth_num" value="" />
			<h1 class="rt-rwd-join-form-agree-title rt-rwd-join-form-agree-title-bdn clearfix">기본정보 <span class="rt-rwd-join-flr"><span class="rt-rwd-star">*</span> 필수입력사항</span></h1>
			<div class="rt-rwd-join-form-area">
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1><span class="rt-rwd-star">* </span>아이디</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-rwd-768-full-box">
							<input type="text" placeholder="아이디를 입력해 주세요" class="required" name="user_id" id="user_id" msg="아이디를 입력해 주세요" />
						</div>
						<div class="rt-rwd-join-form-box">
							<a href="#;" id="btn-id-check" class="rt-rwd-id-check-button" >중복확인</a>
						</div>
						<div class="rt-rwd-join-form-box">
							<p><span class="rt-rwd-star">*</span> 4자 이상, 12자 이하 영문 및 숫자</p>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1><span class="rt-rwd-star">* </span>비밀번호</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-rwd-768-full-box">
							<input type="password" placeholder="비밀번호를 입력해 주세요" class="required" name="user_pw" msg="비밀번호를 입력해 주세요" />
						</div>
						<div class="rt-rwd-join-form-box">
							<p><span class="rt-rwd-star">*</span> 영문, 숫자조합으로 6 ~12자 이내로 사용하실 수 있습니다</p>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1><span class="rt-rwd-star">* </span>비밀번호 확인</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-rwd-768-full-box">
							<input type="password" placeholder="비밀번호를 다시 한번 입력해 주세요" class="required" name="user_pw_re" msg="비밀번호를 다시 한번 입력해 주세요" />
						</div>
						<div class="rt-rwd-join-form-box">
							<p><span class="rt-rwd-star">*</span> 비밀번호를 한번 더 입력하여 주십시오</p>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1><span class="rt-rwd-star">* </span>이름</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-rwd-768-full-box">
							<input type="text" placeholder="이름을 입력해 주세요" class="required" name="user_nm" msg="이름을 입력해 주세요" />
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1><span class="rt-rwd-star">* </span>이메일</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-32-box">
							<input type="text" placeholder="메일을 입력해 주세요" class="required" name="email_id" id="email_id" msg="메일을 정확히 입력해 주세요" />
						</div>
						<div class="rt-rwd-join-form-box rt-4-box">
							<p class="rt-join-form-tac">@</p>
						</div>
						<div class="rt-rwd-join-form-box rt-32-box">
							<input type="text" placeholder="메일을 입력해 주세요" class="required" id="email_domain" name="email_domain" msg="메일을 정확히 입력해 주세요" />
						</div>
						<div class="rt-rwd-join-form-box rt-32-box">
							<select onchange="$('#email_domain').val($(this).val());">
								<option value="직접입력">직접입력</option>
<?php if($TPL_메일리스트_1){foreach($TPL_VAR["메일리스트"] as $TPL_V1){?>
								<option value="<?php echo $TPL_V1["도메인"]?>"><?php echo $TPL_V1["도메인"]?></option>
<?php }}?>
							</select>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1><span class="rt-rwd-star">* </span>메일링 동의</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-full-box">
							<p>
								<label><input type="radio" value="y" name="email_en" checked="checked"/><span>예</span></label>
								<label><input type="radio" value="n" name="email_en"/><span>아니오</span></label>
							</p>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1><span class="rt-rwd-star">* </span>휴대폰</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-33-box">
							<select name="phone1" id="phone1" msg="휴대폰번호를 입력해 주세요">
								<option value="선택">선택</option>
<?php if($TPL_국번리스트_1){foreach($TPL_VAR["국번리스트"] as $TPL_V1){?>
								<option value="<?php echo $TPL_V1["국번"]?>"><?php echo $TPL_V1["국번"]?></option>
<?php }}?>
							</select>
						</div>
						<div class="rt-rwd-join-form-box rt-33-box">
							<input type="text" placeholder="휴대폰번호를 입력해 주세요" name="phone2" id="phone2" maxlength="4" msg="휴대폰번호를 정확히 입력해 주세요" />
						</div>
						<div class="rt-rwd-join-form-box rt-33-box">
							<input type="text" placeholder="휴대폰번호를 입력해 주세요" name="phone3" id="phone3" maxlength="4" msg="휴대폰번호를 정확히 입력해 주세요" />
						</div>
					</div>
				</div>
<?php if($TPL_VAR["SMS인증"]=='y'){?>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1><span class="rt-rwd-star">* </span>휴대폰 인증</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-rwd-768-full-box">
							<div style="display:none;" id="auth">
								<input type="text" name="userinput_num" id="userinput_num" class="rt-join-input-phone w165 mr20" maxlength="5" size="5">
								<a href="#;" id="btnCheckAuthNum" class="rt-rwd-id-check-button">인증코드 확인</a>
							</div>
						</div>
						<div class="rt-rwd-join-form-box">
							<a href="#;" id="btnPhoneAuth" class="rt-rwd-id-check-button" >휴대폰 인증</a>
						</div>
					</div>
				</div>
<?php }?>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1><span class="rt-rwd-star">* </span>SMS 수신동의</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-full-box">
							<p>
								<label><input type="radio" value="y" name="sms_en" checked="checked"/><span>예</span></label>
								<label><input type="radio" value="n" name="sms_en"/><span>아니오</span></label>
							</p>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1>보안문자</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-full-box">
							<p><span class="rt-join-form-bold" id="capcha_str"></span><a href="#;" class="rt-join-form-reflash" onclick="rt_get_capcha('join')">새로고침</a></p>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con rt-rwd-non-title">
					<div class="rt-rwd-join-form-title">
						<h1></h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-px-box">
							<input type="text" placeholder="※ 보안문자를 입력해 주세요." name="sec_code" msg="보안문자를 입력해 주세요" />
						</div>
					</div>
				</div>
			</div>
			<!-- 폼 필드 끝 -->
			<!-- 추가 필드 시작 -->
<?php if($TPL_VAR["추가필드여부"]=='y'){?>
			<h1 class="rt-rwd-join-form-agree-title rt-rwd-join-form-agree-title-bdn">추가정보</h1>
			<div class="rt-rwd-join-form-area">
<?php if($TPL_추가필드_1){foreach($TPL_VAR["추가필드"] as $TPL_V1){?>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1><?php echo $TPL_V1["필드명"]?></h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap rt-full-box clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-rwd-768-full-box">
							<?php echo $TPL_V1["데이터"]?>

						</div>
					</div>
				</div>
<?php }}?>
			</div>
<?php }?>
			<!-- 추가 필드 끝 -->
		</div>
		<!-- 폼 끝 -->
		<!-- 버튼 시작 -->
		<div class="rt-button rt-button-tac">
			<a href="#;" id="btn-form-submit">완료</a>
		</div>
		<!-- 버튼 끝 -->
	</div>
	<!-- 반응형 회원 끝 -->

<script src="<?php echo $TPL_VAR["path_assets"]?>/js/rtmember.join.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $TPL_VAR["path_assets"]?>/css/rt_member.css" />
<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>