<?php
//-------------------------------------------------------------------------------------------------
/*
 * 파일 다운로드
 */
//-------------------------------------------------------------------------------------------------

require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";

//-------------------------------------------------------------------------------------------------

if($env->_get['bcode'] && is_numeric($env->_get['seq']) && is_numeric($env->_get['file_num'])) {
	$f = $dbo->fetch("SELECT * FROM RT_APPFORM_CU WHERE bcode='".$env->_get['bcode']."' AND seq=".$env->_get['seq']);
	rt_download($f['file'.$env->_get['file_num'].'_new'], $f['file'.$env->_get['file_num'].'_ori'], "/app/appform/files/cu/");
} else {
	rt_js_move("접속오류입니다. 다시 접속해 주세요", "parent", "href", RTW_ADM);
}
exit;
?>