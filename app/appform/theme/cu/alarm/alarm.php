<?if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }?>

<?php
if ($env->_get['bcode']) {
	require_once RT_DOC_ROOT.$_def['path_app']."/theme/".$_bdinfo['theme']."/inc.common.menu.php";
}
?>

<form name="dataform" action="<?php echo $_def['path_app']?>/<?php echo $__sd?>/update.php" method="post" target="rt_ifrm">
<input type="hidden" name="mode" value="modify">
<input type="hidden" name="bcode" value="<?php echo $env->_get['bcode'];?>">
<div class="rt_s_tit clearfix">
	<p>01<span></span></p>
	<h1>알림 설정</h1>
</div>
<table class="rt_field_table mb10">
	<caption>알림 설정</caption>
	<colgroup>
		<col style="width:15%"/>
		<col style="width:85%"/>
	</colgroup>
	<tr>
		<th><p>예약 시 SMS 발송</p></th>
		<td>
			<label><input name="sms_send_is" value="y" type="radio" <?php echo $sms_send_is_y;?>><span>사용함</span></label>
			<label><input name="sms_send_is" value="n" type="radio" <?php echo $sms_send_is_n;?>><span>사용하지 않음</span></label>
		</td>
	</tr>
</table>

<div class="rt_s_tit clearfix">
	<p>02<span></span></p>
	<h1>SMS 메시지 설정</h1>
</div>
<table class="rt_field_table mb10">
	<caption>문구 설정</caption>
	<colgroup>
		<col style="width:15%"/>
		<col style="width:85%"/>
	</colgroup>
	<tr>
		<th><p>발송 문구 설정</p></th>
		<td>
			<textarea id="tran_msg" name="sms_msg" onKeyUp="checklen()"><?php echo $r['sms_msg'];?></textarea>
			<div style="padding-right:5px;">
				<span id="msglen">0</span> / <span>80</span> 자
			</div>
		</td>
	</tr>
</table>

<div class="rt_s_tit clearfix">
	<p>03<span></span></p>
	<h1>수신자 설정</h1>
</div>
<table class="rt_field_table mb10">
	<caption>수신자 설정</caption>
	<colgroup>
		<col style="width:15%"/>
		<col style="width:85%"/>
	</colgroup>
	<tr>
		<th>수신 번호 설정</th>
		<td>
			<textarea name="sms_number"><?php echo $r['sms_number'];?></textarea>
			<p class="rt_brown rt_fln">휴대폰번호를 공백없이 쉼표로 구분하여 입력해 주세요. ex) 010-1111-2222,010-3333-4444,...</p>
		</td>
	</tr>
</table>
<div class="rt_button_wrap rt_tar">
	<a href="#;" id="btn-form-submit" class="rt_btn_blue">설정 변경</a>
</div>
</form>

<br />
<div class="rt_bot_box">
	<h1>이용 안내</h1>
	<p><em>-</em><span class="rt_mint">SMS 발송 알림</span>을 사용하기 위해서는 <span class="rt_mint">SMS 업체 정보</span>가 설정되어 있어야 합니다. <a href="<?php echo RTW_ADM;?>/config/?sd=config" class="rt_mint">(SMS 환경 설정하기)</a></p>
</div>

<script src="<?php echo $_def['path_section']?>/js/appform.admin.alarm.js" type="text/javascript"></script>

<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>