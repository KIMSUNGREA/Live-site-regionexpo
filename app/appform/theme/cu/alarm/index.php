<?php
//-------------------------------------------------------------------------------------------------
/*
 * APP CODE			: appform
 * APP SECTION		: theme-cu-alarm
 *
 * 설명 : 신청폼 데이터 관리
 */
//-------------------------------------------------------------------------------------------------

if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }

//-------------------------------------------------------------------------------------------------

/**
 * 신청폼 공통 환경정보
 */

$_bdinfo = $dbo->fetch("SELECT * FROM RT_APPFORM WHERE bcode='".$env->_get['bcode']."'");

if (empty($env->_get['bcode']) || empty($_bdinfo['bcode'])) {
	rt_js_move("신청폼 정보가 올바르지 않습니다.", "parent", "href", RTW_ADM);
	exit;
}

//-------------------------------------------------------------------------------------------------

/**
 * 네비게이션 데이터
 */

$__cfg = array();
$__cfg['nav'][0] = "신청폼 목록";
$__cfg['nav'][1] = $_bdinfo['name'];
$__cfg['page'] = $_bdinfo['name'];

//-------------------------------------------------------------------------------------------------

/**
 * 공동 데이터
 */

$_def = array();
$_def['path_app'] = $_app['app_path'];
$_def['path_admin'] = $_def['path_app']."/admin";
$_def['path_theme'] = $_def['path_app']."/theme/".$_bdinfo['theme'];
$_def['path_files'] = $_def['path_app']."/files";
$_def['path_assets'] = $_def['path_app']."/assets";
$_def['path_section'] = $_def['path_theme']."/".$__sc;
$_def['func'] = ($env->_get['cf']) ? $env->_get['cf'] : "alarm";

//-------------------------------------------------------------------------------------------------

/**
 * 페이지 별 출력 데이터 세팅
 */

switch ($_def['func'])
{
	case "alarm"	:

		$__cfg['nav'][2] = "알림 설정";

		//환경설정정보
		$r = $dbo->fetch("SELECT * FROM RT_APPFORM_CU_CONF WHERE bcode='".$env->_get['bcode']."'");

		foreach($r as $k => $v) $r[$k] = stripslashes($v);

		${"sms_send_is_".$r['sms_send_is']} = "checked";

	break;
}

$__cfg['page'] = "".$__cfg['page']." <span style='color:#999999;'> | ".$__cfg['nav'][2]."</span>";
?>