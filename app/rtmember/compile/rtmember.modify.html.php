<?php /* Template_ 2.2.8 2017/03/11 00:47:06 /home/rintkit.com/new/app/rtmember/template/rtmember.modify.html 000008227 */ 
$TPL_메일리스트_1=empty($TPL_VAR["메일리스트"])||!is_array($TPL_VAR["메일리스트"])?0:count($TPL_VAR["메일리스트"]);
$TPL_국번리스트_1=empty($TPL_VAR["국번리스트"])||!is_array($TPL_VAR["국번리스트"])?0:count($TPL_VAR["국번리스트"]);
$TPL_추가필드_1=empty($TPL_VAR["추가필드"])||!is_array($TPL_VAR["추가필드"])?0:count($TPL_VAR["추가필드"]);?>
<!-- 반응형 회원 시작 -->
<div class="rt-rwd-member-wrap">
	<!-- 폼 시작 -->
	<div class="rt-rwd-join-form-wrap">
		<!-- 폼 필드 시작 -->
		<form name="modify_form" action="<?php echo $TPL_VAR["ssl"]?><?php echo $TPL_VAR["path_user"]?>/update.php" method="post" target="">
			<input type="hidden" name="mode" value="modify" />
			<input type="hidden" name="path_user" value="<?php echo $TPL_VAR["path_user"]?>" />
			<input type="hidden" name="php_self" value="<?php echo $TPL_VAR["php_self"]?>" />
			<input type="hidden" name="pcd" value="<?php echo $TPL_VAR["페이지코드"]?>" />
			<input type="hidden" name="screen" value="<?php echo $TPL_VAR["이동화면"]?>" />
			<h1 class="rt-rwd-join-form-agree-title rt-rwd-join-form-agree-title-bdn clearfix">기본정보 <span class="rt-rwd-join-flr"><span class="rt-rwd-star">*</span> 필수입력사항</span></h1>
			<div class="rt-rwd-join-form-area">
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1>아이디</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-rwd-768-full-box">
							<p><?php echo $TPL_VAR["회원"]["아이디"]?></p>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1>비밀번호</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-rwd-768-full-box">
							<input type="password" value="" name="user_pw" />
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1>비밀번호 확인</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-rwd-768-full-box">
							<input type="password" value="" name="user_pw_re" />
						</div>
						<div class="rt-rwd-join-form-box">
							<p><span class="rt-rwd-star">*</span> 비밀번호를 입력시 변경됩니다.</p>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1>이름</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-rwd-768-full-box">
							<?php echo $TPL_VAR["회원"]["이름"]?>

						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1><span class="rt-rwd-star">* </span>이메일</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-32-box">
							<input type="text" name="email_id" id="email_id" msg="메일을 정확히 입력해 주세요" value="<?php echo $TPL_VAR["회원"]["이메일아이디"]?>"/>
						</div>
						<div class="rt-rwd-join-form-box rt-4-box">
							<p class="rt-join-form-tac">@</p>
						</div>
						<div class="rt-rwd-join-form-box rt-32-box">
							<input type="text" id="email_domain" name="email_domain" msg="메일을 정확히 입력해 주세요" value="<?php echo $TPL_VAR["회원"]["이메일도메인"]?>"/>
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
								<label><input type="radio" value="y" name="email_en" <?php if($TPL_VAR["회원"]["메일수신"]=='y'){?>checked="checked"<?php }?> /> <span>예</span></label>
								<label><input type="radio" value="n" name="email_en" <?php if($TPL_VAR["회원"]["메일수신"]=='n'){?>checked="checked"<?php }?> /> <span>아니오</span></label>
							</p>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1><span class="rt-rwd-star">* </span>연락처</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-33-box">
							<select name="phone1" id="phone1" msg="전화번호를 입력해 주세요">
								<option value="선택">선택</option>
<?php if($TPL_국번리스트_1){foreach($TPL_VAR["국번리스트"] as $TPL_V1){?>
								<option value="<?php echo $TPL_V1["국번"]?>" <?php if($TPL_V1["국번"]==$TPL_VAR["회원"]["전화번호1"]){?>selected="selected"<?php }?>><?php echo $TPL_V1["국번"]?></option>
<?php }}?>
							</select>
						</div>
						<div class="rt-rwd-join-form-box rt-33-box">
							<input type="text" name="phone2" id="phone2" maxlength="4" msg="전화번호를 입력해 주세요" value="<?php echo $TPL_VAR["회원"]["전화번호2"]?>"/>
						</div>
						<div class="rt-rwd-join-form-box rt-33-box">
							<input type="text" class="rt-join-input-phone" name="phone3" id="phone3" maxlength="4" msg="전화번호를 입력해 주세요" value="<?php echo $TPL_VAR["회원"]["전화번호3"]?>"/>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1><span class="rt-rwd-star">* </span>SMS 수신동의</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-full-box">
							<p>
								<label><input type="radio" value="y" name="sms_en" <?php if($TPL_VAR["회원"]["SMS수신"]=='y'){?>checked="checked"<?php }?> /> <span>예</span></label>
								<label><input type="radio" value="n" name="sms_en" <?php if($TPL_VAR["회원"]["SMS수신"]=='n'){?>checked="checked"<?php }?> /> <span>아니오</span></label>
							</p>
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
		</form>
		<!-- 폼 필드 끝 -->
	</div>
	<!-- 폼 끝 -->
	<!-- 버튼 시작 -->
	<div class="rt-button rt-button-tac">
		<a href="#;" id="btn-form-submit">회원 정보 수정</a>
		<a href="<?php echo $TPL_VAR["page_mypage"]?>">돌아가기</a>
	</div>
	<!-- 버튼 끝 -->
</div>
<!-- 반응형 회원 끝 -->

<script src="<?php echo $TPL_VAR["path_assets"]?>/js/rtmember.modify.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $TPL_VAR["path_assets"]?>/css/rt_member.css" />
<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>