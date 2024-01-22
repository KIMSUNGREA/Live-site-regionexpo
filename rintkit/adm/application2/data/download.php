<?php
//-------------------------------------------------------------------------------------------------
/*
 * 파일 다운로드
 */
//-------------------------------------------------------------------------------------------------

$_rt_header = 'n';
require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";

//-------------------------------------------------------------------------------------------------

if(is_numeric($env->_get['seq']) && is_numeric($env->_get['filenum'])) {

	$f = $dbo->fetch("SELECT * FROM RT_APPLICATION2 WHERE seq=".$env->_get['seq']);

	$f['file_subdir'] = $f['file_subdir']."/";

	rt_download($f['file'.$env->_get['filenum'].'_new'], $f['file'.$env->_get['filenum'].'_ori'], $f['file_subdir']);
} else {
	rt_js_msg("접속오류입니다. 다시 접속해 주세요");
}
exit;
?>