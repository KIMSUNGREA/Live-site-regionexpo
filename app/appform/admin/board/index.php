<?php
//-------------------------------------------------------------------------------------------------
/*
 * APP CODE			: appform
 * APP SECTION		: board-list
 *
 * 설명 : 신청폼 생성/설정 관리
 */
//-------------------------------------------------------------------------------------------------

if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }

//-------------------------------------------------------------------------------------------------

/**
 * 네비게이션 데이터
 */

$__cfg = array();
$__cfg['nav'][0] = "신청폼 관리";

//-------------------------------------------------------------------------------------------------

/**
 * 공동 데이터
 */

$_def = array();
$_def['path_app'] = $_app['app_path'];
$_def['path_admin'] = $_def['path_app']."/admin";
$_def['path_assets'] = $_def['path_app']."/assets";
$_def['path_section'] = $_def['path_admin']."/".$__sc;
$_def['func'] = ($env->_get['cf']) ? $env->_get['cf'] : "list";

//-------------------------------------------------------------------------------------------------

/**
 * 공동환경 데이터 파일 로드
 */

require_once RT_DOC_ROOT.$_app['app_path']."/config.php";

//-------------------------------------------------------------------------------------------------

/**
 * 페이지 별 출력 데이터 세팅
 */

switch ($_def['func'])
{
	case "list"	:

		$__cfg['nav'][1] = "신청폼 목록";
		$__cfg['page'] = "신청품 목록";

		$default_url = RTW_ADM."/app/?appcode=appform";

		$_l = $dbo->fetch_list("SELECT * FROM RT_APPFORM ORDER BY bseq DESC");
	break;

	case "form"	:

		if ($env->_get['bcode']) {

			$_bdinfo = $dbo->fetch("SELECT * FROM RT_APPFORM WHERE bcode='".$env->_get['bcode']."'");

			$__cfg['nav'][1] = $_bdinfo['name'];
			$__cfg['nav'][2] = "신청폼 정보";
			$__cfg['page'] = $_bdinfo['name'];
			$__cfg['page'] = $__cfg['page']." <span style='color:#999999;'> | ".$__cfg['nav'][2]."</span>";

			$__cfg['mode'] = "modify";

			${"theme_".$_bdinfo['theme']} = "checked='checked'";
			${"theme_select_".$_bdinfo['theme']} = "style='border:5px solid #F29661;'";
			${"state_".$_bdinfo['state']} = "checked='checked'";

		} else {

			$__cfg['nav'][1] = "새 신청폼 등록";
			$__cfg['page'] = "새 신청폼 등록";
			$__cfg['mode'] = "insert";

			$theme_cu = "checked='checked'";
			$state_on = "checked='checked'";
		}
	break;
}
?>