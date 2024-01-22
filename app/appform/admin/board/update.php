<?php
//-------------------------------------------------------------------------------------------------
/*
 * 신청폼 정보 업데이트
 * 
 * mode			: 데이터 처리 구분
 * 
 * insert		: 신규 신청폼 등록
 * modify		: 신청폼 정보 수정
 * delete		: 신청폼 삭제
 */
//-------------------------------------------------------------------------------------------------

require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";
require_once RT_ADM."/engine.php";

//-------------------------------------------------------------------------------------------------

$data = array();//DB 필드데이터

if ($env->_post['mode'] == "insert")
{
	//bcode 중복 처리
	$_r = $dbo->fetch("SELECT * FROM RT_APPFORM WHERE bcode='".$env->_post['bcode']."'");
	if ($_r['bcode']) {
		rt_js_msg("신청폼코드가 중복되었습니다");exit;
	}

	$data['bcode'	] = $env->_post['bcode'];
	$data['name'	] = $env->_post['name'];
	$data['theme'	] = $env->_post['theme'];
	$data['state'	] = $env->_post['state'];

	if ($dbo->insert("RT_APPFORM", $data)) {

		//신청폼 기본 환경 설정 레코드 삽입
		$adata['bcode'] = $env->_post['bcode'];
		$dbo->insert("RT_APPFORM_".strtoupper($env->_post['theme'])."_CONF", $adata);

		// 기본 폼 셋 데이터 설정
		$qry_formset1 = "INSERT INTO `RT_APPFORM_ADD_FIELD` VALUES ('', '".$env->_post['bcode']."', 1, '이름', 'text', 200, 0, '', 'y', 'y', 'y', 'name', '이름을 입력해 주세요', '')";
		$dbo->query($qry_formset1);

		$qry_formset2 = "INSERT INTO `RT_APPFORM_ADD_FIELD` VALUES ('', '".$env->_post['bcode']."', 2, '휴대폰', 'text', 200, 0, '010,011,017,018,019', 'y', 'n', 'y', 'phone', '', '')";
		$dbo->query($qry_formset2);

		rt_js_move("새 신청폼이 등록되었습니다.", "parent", "href", RTW_ADM."/app/?appcode=appform&sd=".$env->_post['sd']);
	} else {
		rt_js_msg("시스템문제로 등록되지 않았습니다.");
	}
}
else if ($env->_post['mode'] == "modify" && $env->_post['bcode'])
{
	$data['name'	] = $env->_post['name'];
	$data['state'	] = $env->_post['state'];

	if ($dbo->update("RT_APPFORM", $data, "bcode='".$env->_post['bcode']."'")) {
		rt_js_msg("정보가 변경되었습니다.");
	} else {
		rt_js_msg("시스템문제로 등록되지 않았습니다.");
	}

}
else if ($env->_get['mode'] == "delete" && $env->_get['bcode'])
{
	$arr = $dbo->fetch("SELECT * FROM RT_APPFORM WHERE bcode='".$env->_get['bcode']."'");

	if ($dbo->query("DELETE FROM RT_APPFORM WHERE bcode='".$env->_get['bcode']."'")) {

		//신청폼 환경 설정 레코드 삭제
		$dbo->query("DELETE FROM RT_APPFORM_".strtoupper($arr['theme'])."_CONF WHERE bcode='".$arr['bcode']."'");

		//추가필드 데이터 삭제
		$dbo->query("DELETE FROM RT_APPFORM_ADD_FIELD WHERE bcode='".$arr['bcode']."'");

		//신청폼의 등록 게시물 삭제
		$dbo->query("DELETE FROM RT_APPFORM_".strtoupper($arr['theme'])." WHERE bcode='".$arr['bcode']."'");

		rt_js_move("", "parent", "href", RTW_ADM."/app/?appcode=appform&sd=".$env->_get['sd']);

	} else {
		rt_js_msg("시스템문제로 등록되지 않았습니다.");
	}

}
exit;
?>