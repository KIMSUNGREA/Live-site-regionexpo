<?php
//-------------------------------------------------------------------------------------------------
/*
 *
 * 설명 : 팝업 템플릿 관리
 */
//-------------------------------------------------------------------------------------------------

if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }

//-------------------------------------------------------------------------------------------------

/**
 * 네비게이션 데이터
 */
$__cfg = array();
$__cfg['nav'][0] = "팝업 관리";

//-------------------------------------------------------------------------------------------------

/**
 * 페이지 별 출력 데이터 세팅
 */

switch ($__cf)
{
	case "list"	:

		$__cfg['nav'][1] = "목록";

		$_list = $dbo->fetch_list("SELECT * FROM RT_POPUP_FORM_TPL ORDER BY ord ASC");
	break;

	case "form"	:

		$__cfg['nav'][1] = "수정";
		$__cfg['mode'] = "modify";

		$_r = $dbo->fetch("SELECT * FROM RT_POPUP_FORM_TPL WHERE seq='".$env->_get['seq']."'");

		foreach($_r as $k => $v) $_r[$k] = stripslashes($v);
	break;
}

$__cfg['page'] = $__cfg['nav'][0]." <span style='color:#999999;'> | ".$__cfg['nav'][1]."</span>";
?>