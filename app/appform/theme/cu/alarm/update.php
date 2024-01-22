<?php
//-------------------------------------------------------------------------------------------------
/*
 * 데이터 처리
 * 
 * mode 별 데이터 처리 구분
 * 
 * modify : 알림 환경설정
 */
//-------------------------------------------------------------------------------------------------

require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";

//-------------------------------------------------------------------------------------------------

$udata = array();//업데이트 데이터
if($env->_post['mode'] == "modify") {

	$udata['sms_send_is'	] = ($env->_post['sms_send_is']=="y")?"y":"n";
	$udata['sms_msg'		] = $env->_post['sms_msg'];
	$udata['sms_number'		] = $env->_post['sms_number'];


	if ($dbo->update("RT_APPFORM_CU_CONF", $udata, "bcode='".$env->_post['bcode']."'")) {
		rt_js_msg("데이터가 변경되었습니다.");
	} else {
		rt_js_msg("시스템문제로 등록되지 않았습니다.");
	}
}
exit;
?>