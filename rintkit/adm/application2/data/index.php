<?php
if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }

/**
 * 추가 컴포넌트 로드
 */

rt_load_component("board");


//-------------------------------------------------------------------------------------------------

//네비게이션 데이터
$__cfg = array();
$__cfg['nav'][0] = "기업참가 신청서";

switch ($__cf) {

	case "list"	:

		$__cfg['nav'][1] = "신청 목록";

		/**
		 * 게시판 환경 데이터
		 */

		$cls_board = new board("RT_APPLICATION2", 15);

		$add_qry = array(); //DB 쿼리 배열
		$add_url = ""; //전달 변수 배열

		//고정 쿼리
		$add_url.= "&sd=".$env->_get['sd']."&cf=".$env->_get['cf'];

		//변동 쿼리
		if ($env->_get['search'] && $env->_get['searchstring']) {
			if ($env->_get['search'] == "subjcont") {
				$add_qry[] = "((subject LIKE '%".$env->_get['searchstring']."%') OR (content LIKE '%".$env->_get['searchstring']."%'))";
			} else {
				$add_qry[] = "(".$env->_get['search']." LIKE '%".$env->_get['searchstring']."%')";
			}
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


	break;

	case "view"	:

		$__cfg['nav'][1] = "상세 데이터";

		$_r = $dbo->fetch("SELECT * FROM RT_APPLICATION2 WHERE seq=".$env->_get['seq']);

		$indust_cate = str_replace("|","<br>",$_r['indust_cate']);

	break;

}
?>