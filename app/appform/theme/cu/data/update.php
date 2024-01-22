<?php
//-------------------------------------------------------------------------------------------------
/*
 * 데이터 처리
 * 
 * mode 데이터 처리 구분
 * 
 * insert			: 신규 입력
 * modify			: 정보 수정
 * delete			: 데이터 삭제
 * select_delete	: 선택 데이터 삭제
 */
//-------------------------------------------------------------------------------------------------

require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";
require_once RT_ADM."/engine.php";

//-------------------------------------------------------------------------------------------------

$udata = array();//업데이트 데이터

if ($env->_post['mode'] == "insert")
{
	//게시판 환경 정보
	$_conf = $dbo->fetch("SELECT * FROM RT_APPFORM_CU_CONF WHERE bcode='".$env->_post['bcode']."'");

	//DB 입력 데이터 설정
	$reg_date = ($env->_post['reg_date']) ? $env->_post['reg_date'] : date("Y-m-d H:i:s");
	$mod_date = ($env->_post['mod_date']) ? $env->_post['mod_date'] : date("Y-m-d H:i:s");

	$udata['bcode'		] = $env->_post['bcode'];
	$udata['name'		] = $env->_post['name'];
	$udata['phone'		] = $env->_post['phone'];
	$udata['reg_date'	] = $reg_date;
	$udata['mod_date'	] = $mod_date;

	/* 추가 폼 데이터 처리 S */
	$arSz = array();
	foreach ($env->_post as $k => $v)
	{
		$arK = null;
		$arFV = null;

		$arK = explode("_", $k);

		if (is_numeric($arK[1])) {
			$arFV = $dbo->fetch("SELECT * FROM RT_APPFORM_ADD_FIELD WHERE seq='".$arK[1]."'");
		}

		if ($arK[0] == "rtfeild") {

			$arSz[$arK[1]]['type'] = $arFV['type'];
			$arSz[$arK[1]]['name'] = $arFV['name'];

			if ($arFV['type'] == "checkbox") {
				$arSz[$arK[1]]['val'][$arK[2]] = $v;
			} else {
				$arSz[$arK[1]]['val'] = $v;
			}
		}
	}
	$udata['extvar'] = serialize($arSz);
	/* 추가 폼 데이터 처리 E */

	if ($dbo->insert("RT_APPFORM_CU", $udata)) {
		rt_js_move("등록되었습니다.", "parent", "href", RTW_ADM."/app/?appcode=appform&sd=theme-cu-data&bcode=".$env->_post['bcode']);
	} else {
		rt_js_msg("시스템문제로 등록되지 않았습니다.");
	}
}
else if($env->_post['mode'] == "modify" && is_numeric($env->_post['seq']))
{
	//게시판 환경 정보
	$_conf = $dbo->fetch("SELECT * FROM RT_APPFORM_CU_CONF WHERE bcode='".$env->_post['bcode']."'");

	//수정할 게시물 정보
	$r = $dbo->fetch("SELECT * FROM RT_APPFORM_CU WHERE seq=".$env->_post['seq']);

	//DB 입력 데이터 설정
	$udata['name'		] = $env->_post['name'];
	$udata['phone'		] = $env->_post['phone'];
	if ($env->_post['reg_date']) {
		$udata['reg_date'] = $env->_post['reg_date'];
	}
	if ($env->_post['mod_date']) {
		$udata['mod_date'] = $env->_post['mod_date'];
	} else {
		$udata['mod_date'] = date("Y-m-d H:i:s");
	}

	/* 추가 폼 데이터 처리 S */
	$arSz = array();
	foreach ($env->_post as $k => $v)
	{
		$arK = null;
		$arFV = null;

		$arK = explode("_", $k);

		if (is_numeric($arK[1])) {
			$arFV = $dbo->fetch("SELECT * FROM RT_APPFORM_ADD_FIELD WHERE seq='".$arK[1]."'");
		}

		if ($arK[0] == "rtfeild") {

			$arSz[$arK[1]]['type'] = $arFV['type'];
			$arSz[$arK[1]]['name'] = $arFV['name'];

			if ($arFV['type'] == "checkbox") {
				$arSz[$arK[1]]['val'][$arK[2]] = $v;
			} else {
				$arSz[$arK[1]]['val'] = $v;
			}
		}
	}
	$udata['extvar'] = serialize($arSz);
	/* 추가 폼 데이터 처리 E */

	if ($dbo->update("RT_APPFORM_CU", $udata, "seq='".$env->_post['seq']."'")) {

		//검색 페이지, 검색어
		if (is_numeric($env->_post['pg'])) $add_url.= "&pg=".$env->_post['pg'];
		if (!empty($env->_post['searchstring'])) $add_url.= "&search=".$env->_post['search']."&searchstring=".$env->_post['searchstring'];

		rt_js_move("정보가 변경되었습니다.", "parent", "href", RTW_ADM."/app/?appcode=appform&sd=theme-cu-data&bcode=".$env->_post['bcode']."&cf=view&seq=".$env->_post['seq'].$add_url);
	} else {
		rt_js_msg("시스템문제로 등록되지 않았습니다.");
	}
}
else if($env->_get['mode'] == "delete" && is_numeric($env->_get['seq']))
{
	if ($dbo->query("DELETE FROM RT_APPFORM_CU WHERE seq='".$env->_get['seq']."'")) {

		//페이지 및 검색어 유지
		if (is_numeric($env->_get['pg'])) $add_url.= "&pg=".$env->_get['pg'];
		if (!empty($env->_get['searchstring'])) $add_url.= "&search=".$env->_get['search']."&searchstring=".$env->_get['searchstring'];
		
		rt_js_move("", "parent", "href", RTW_ADM."/app/?appcode=appform&sd=theme-cu-data&bcode=".$env->_get['bcode'].$add_url);
	} else {
		rt_js_msg("시스템문제로 등록되지 않았습니다.");
	}
}
else if($env->_post['mode'] == "select_delete" && $env->_post['seqstr'])
{
	$arr_seq = explode("/", $env->_post['seqstr']);

	foreach ($arr_seq as $k => $v) {

		if (!empty($v)) {
			$dbo->query("DELETE FROM RT_APPFORM_CU WHERE seq='".$v."'");
		}
	}
	rt_js_move("데이터가 삭제되었습니다.", "parent", "reload");
}
else
{
	rt_js_move("접속오류입니다. 다시 접속해 주세요", "parent", "href", RTW_ADM);
}
exit;
?>