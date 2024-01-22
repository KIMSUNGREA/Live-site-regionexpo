<?php
//-------------------------------------------------------------------------------------------------
/*
 * $env->_post['mode'] 데이터 처리 구분
 */
//-------------------------------------------------------------------------------------------------
require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";
require_once "../../engine.php";

//-------------------------------------------------------------------------------------------------

$data = array();//DB 필드데이터

if ($env->_get['mode'] == "delete" && is_numeric($env->_get['seq'])) {

	$_r = $dbo->fetch("SELECT * FROM RT_APPLICATION2 WHERE seq='".$env->_get['seq']."'");

	if (!empty($_r)) {

		if ($dbo->query("DELETE FROM RT_APPLICATION2 WHERE seq='".$_r['seq']."'")) {

			//페이지 및 검색어 유지
			if (is_numeric($env->_get['pg'])) $add_url.= "&pg=".$env->_get['pg'];
			if (!empty($env->_get['searchstring'])) $add_url.= "&search=".$env->_get['search']."&searchstring=".$env->_get['searchstring'];
			
			rt_js_move("", "parent", "href", "../?sd=data&cf=list".$add_url);
		} else {
			rt_js_msg("시스템문제로 등록되지 않았습니다.");
		}
	}
}