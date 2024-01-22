<?php
//-------------------------------------------------------------------------------------------------
/*
 * APP CODE			: appform
 * APP SECTION		: theme-cu-data
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
 * 신청폼 개별환경 정보
 */

$_conf = $dbo->fetch("SELECT * FROM RT_APPFORM_".strtoupper($_bdinfo['theme'])."_CONF WHERE bcode='".$env->_get['bcode']."'");
$_fset = $dbo->fetch_list("SELECT * FROM RT_APPFORM_ADD_FIELD WHERE bcode='".$env->_get['bcode']."' AND is_use='y' AND is_special='n' ORDER BY formnum ASC");

//-------------------------------------------------------------------------------------------------

/**
 * 추가 컴포넌트 로드
 */

rt_load_component("board");

//-------------------------------------------------------------------------------------------------

/**
 * 신청폼 컨트롤러 로드
 */

$cls_board = new board("RT_APPFORM_CU",10,10);

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
$_def['func'] = ($env->_get['cf']) ? $env->_get['cf'] : "list";

//-------------------------------------------------------------------------------------------------

/**
 * 신청폼 환경 데이터
 */

$add_qry = array(); //DB 쿼리 배열
$add_url = ""; //전달 변수 배열


//고정 DB 쿼리
$add_qry[] = "bcode='".$env->_get['bcode']."'";

//고정 URL
$add_url.= "&appcode=appform";
$add_url.= "&sd=".$env->_get['sd'];
$add_url.= "&bcode=".$env->_get['bcode'];

//변동 쿼리
if ($env->_get['search'] && $env->_get['searchstring']) {
	$add_qry[] = "(".$env->_get['search']." LIKE '%".$env->_get['searchstring']."%')";
	$add_url.= "&search=".$env->_get['search']."&searchstring=".$env->_get['searchstring'];
	$add_sch_url = "&search=".$env->_get['search']."&searchstring=".$env->_get['searchstring'];
}

if (count($add_qry) > 0) {
	$str_add_qry = implode(" AND ", $add_qry);
	$cls_board->set_fix_where_qry($str_add_qry);
}
$cls_board->set_fix_url_val($add_url);
$cls_board->init();

//-------------------------------------------------------------------------------------------------

/**
 * 게시판 컨트롤러 로드
 */

require_once RT_DOC_ROOT.$_app['app_path']."/controller/appform.controller.php";
$cls_af = new appform();

//-------------------------------------------------------------------------------------------------

/**
 * 출력 데이터 세팅
 */

switch ($_def['func'])
{
	case "list"	:
		$__cfg['nav'][2] = "데이터 목록";

		$env->_get['pg'] = (empty($env->_get['pg'])) ? 1 : $env->_get['pg'];

		//게시판 리스트 데이터 설정
		if ($cls_board->list_rec_cnt > 0)
		{
			$num = $cls_board->list_rec_cnt;
			$_l = $cls_board->get_list("seq DESC");
			for ($i = 0; $i < count($_l); $i++)
			{
				$sz = unserialize(html_entity_decode($_l[$i]['extvar']));

				$_l[$i]['no'] = $num;
				$_l[$i]['bcode'] = $_l[$i]['bcode'];
				$_l[$i]['email'] = $sz[5]['val'];
				$_l[$i]['name'] = rt_dbstr_decode($_l[$i]['name']);
				$_l[$i]['phone'] = rt_dbstr_decode($_l[$i]['phone']);
				$_l[$i]['reg_date'] = substr($_l[$i]['reg_date'], 0, 10);
				$_l[$i]['mod_date'] = substr($_l[$i]['mod_date'], 0, 10);
				$_l[$i]['viewpage'] = "?appcode=appform&sd=theme-".$_bdinfo['theme']."-data&cf=view&bcode=".$env->_get['bcode']."&seq=".$_l[$i]['seq']."&pg=".$env->_get['pg'].$add_sch_url;

				//아이콘 설정
				$_l[$i]['new'] = (rt_is_new_post($_l[$i]['reg_date'], 1)) ? "<img src='".$_def['path_assets']."/img/new_ico.png' />":"";

				$num--;
			}
		}

	break;

	case "form"	:

		$__cfg['nav'][2] = "데이터 폼";

		if($env->_get['seq']){

			$_def['mode'] = "modify";

			$r = $dbo->fetch("SELECT * FROM RT_APPFORM_CU WHERE seq='".$env->_get['seq']."'");

			//추가 필드 정보
			$sz = unserialize(html_entity_decode($r['extvar']));

			foreach($r as $k => $v) $r[$k] = stripslashes($v);

			$mod_date = (empty($r['mod_date']) || $r['mod_date']=="0000-00-00 00:00:00") ? "" : $r['mod_date'];

		}else{
			$_def['mode'] = "insert";
		}

		${"use_is_".$r['use_is']} = "checked";
		$use_is_class = ($r['use_is'] == "y") ? "class='check'" : "";
	break;

	case "view"	:

		$__cfg['nav'][2] = "상세 보기";

		if (is_numeric($env->_get['seq'])) {

			$r = $dbo->fetch("SELECT * FROM RT_APPFORM_CU WHERE seq='".$env->_get['seq']."'");

			//추가 필드 정보
			$sz = unserialize(html_entity_decode($r['extvar']));

			foreach($r as $k => $v) $r[$k] = stripslashes($v);

		} else {
			rt_js_move("올바른 접근이 아닙니다.", "self", "href", RTW_ADM);
		}
	break;
}

$__cfg['page'] = "".$__cfg['page']." <span style='color:#999999;'> | ".$__cfg['nav'][2]."</span>";
?>