<?php
//-------------------------------------------------------------------------------------------------
/**
 * 팝업 관리
 * 
 * $env->_post['mode'] 데이터 처리 구분
 * 
 * insert : 팝업 신규 등록
 * modify : 팝업 등록 정보 수정
 * delete : 팝업 삭제
 */
//-------------------------------------------------------------------------------------------------

require_once "../../engine.php";

//-------------------------------------------------------------------------------------------------

/**
 * 업로드 경로 설정
 */

$_app = $dbo->fetch("SELECT * FROM RT_APP WHERE app_code='popup'");
$upload_path = $_app['app_path']."/upload";

//-------------------------------------------------------------------------------------------------

/**
 * 업로드 콤포넌트 설정
 */

rt_load_component("fileupload");
$cls_F = new fileupload($upload_path);

//-------------------------------------------------------------------------------------------------

$udata = array();

if ($env->_post['mode'] == "insert")
{

	if ($env->_post['pop_type'] == "1") {

		$udata['pop_type'			] = $env->_post['pop_type'];
		$udata['title'			] = $env->_post['title'];
		$udata['is_view'		] = $env->_post['is_view'];
		$udata['content_type'	] = $env->_post['content_type'];
		$udata['content_html'	] = $env->_post['content_html'];
		$udata['pos_x'			] = $env->_post['pos_x'];
		$udata['pos_y'			] = $env->_post['pos_y'];
		$udata['link_is'		] = $env->_post['link_is'];
		$udata['link_type'		] = $env->_post['link_type'];
		$udata['link_url1'		] = $env->_post['link_url1'];
		$udata['link_map'		] = $env->_post['link_map'];
		$udata['date_start'		] = $env->_post['date_start'];
		$udata['date_end'		] = $env->_post['date_end'];
		$udata['size_w'			] = $env->_post['size_w'];
		$udata['size_h'			] = $env->_post['size_h'];
		$udata['file_subdir'	] = $upload_path;
		$udata['regdate'		] = date("Y-m-d H:i:s");

		for ($m = 1; $m < 2; $m++) {
			if (!empty($env->_files['file'.$m.'_1']['name'])) {
				$ar_info = $cls_F->upload($env->_files['file'.$m.'_1']);
				$udata['file'.$m.'_new'] = $ar_info['name_new'];
				$udata['file'.$m.'_ori'] = $ar_info['name'];
			}
		}
	} else if ($env->_post['pop_type'] == "2") {

		$udata['pop_type'			] = $env->_post['pop_type'];
		$udata['title'			] = $env->_post['title'];
		$udata['is_view'		] = $env->_post['is_view'];
		$udata['content_type'	] = $env->_post['content_type'];
		$udata['content_html'	] = $env->_post['content_html'];
		$udata['pos_x'			] = $env->_post['pos_x'];
		$udata['pos_y'			] = $env->_post['pos_y'];
		$udata['link_url1'		] = $env->_post['link_url1'];
		$udata['link_url2'		] = $env->_post['link_url2'];
		$udata['link_url3'		] = $env->_post['link_url3'];
		$udata['link_url4'		] = $env->_post['link_url4'];
		$udata['link_map'		] = $env->_post['link_map'];
		$udata['date_start'		] = $env->_post['date_start'];
		$udata['date_end'		] = $env->_post['date_end'];
		$udata['size_w'			] = $env->_post['size_w'];
		$udata['size_h'			] = $env->_post['size_h'];

		$udata['pop_title1'		] = $env->_post['pop_title1'];
		$udata['pop_title2'		] = $env->_post['pop_title2'];
		$udata['pop_title3'		] = $env->_post['pop_title3'];
		$udata['pop_title4'		] = $env->_post['pop_title4'];

		$udata['file_subdir'	] = $upload_path;
		$udata['regdate'		] = date("Y-m-d H:i:s");

		for ($m = 1; $m < 5; $m++) {
			if (!empty($env->_files['file'.$m.'_2']['name'])) {
				$ar_info = $cls_F->upload($env->_files['file'.$m.'_2']);
				$udata['file'.$m.'_new'] = $ar_info['name_new'];
				$udata['file'.$m.'_ori'] = $ar_info['name'];
			}
		}
	}

	if ($dbo->insert("RT_POPUP", $udata)) {
		rt_js_move("등록되었습니다.", "parent", "href", "../?sd=popup&cf=list");
	} else {
		rt_js_msg("시스템문제로 등록되지 않았습니다.");
	}
}
else if ($env->_post['mode'] == "modify" && is_numeric($env->_post['seq']))
{
	$_r = $dbo->fetch("SELECT * FROM RT_POPUP WHERE seq='".$env->_post['seq']."'");

	if (is_numeric($_r['seq'])) {

		if ($env->_post['pop_type'] == "1") {

			$udata['pop_type'		] = $env->_post['pop_type'];
			$udata['title'				] = $env->_post['title'];
			$udata['is_view'			] = $env->_post['is_view'];
			$udata['content_type'	] = $env->_post['content_type'];
			$udata['content_html'	] = $env->_post['content_html'];
			$udata['pos_x'			] = $env->_post['pos_x'];
			$udata['pos_y'			] = $env->_post['pos_y'];
			$udata['link_is'			] = $env->_post['link_is'];
			$udata['link_type'		] = $env->_post['link_type'];
			$udata['link_url1'		] = $env->_post['link_url1'];
			$udata['link_map'		] = $env->_post['link_map'];
			$udata['date_start'		] = $env->_post['date_start'];
			$udata['date_end'		] = $env->_post['date_end'];
			$udata['size_w'			] = $env->_post['size_w'];
			$udata['size_h'			] = $env->_post['size_h'];
			$udata['file_subdir'	] = $upload_path;
			$udata['regdate'		] = date("Y-m-d H:i:s");

			for ($m = 1; $m < 2; $m++) {
				if (!empty($env->_files['file'.$m.'_1']['name'])) {
					$ar_info = $cls_F->upload($env->_files['file'.$m.'_1']);
					$udata['file'.$m.'_new'] = $ar_info['name_new'];
					$udata['file'.$m.'_ori'] = $ar_info['name'];

					if ($ar_info['name_new'] && $_r['file'.$m.'_new']) {
						$cls_F->delete_file($_r['file'.$m.'_new']);
					}
				}
			}

		} else if ($env->_post['pop_type'] == "2") {

			$udata['pop_type'		] = $env->_post['pop_type'];
			$udata['title'				] = $env->_post['title'];
			$udata['is_view'			] = $env->_post['is_view'];
			$udata['pos_x'			] = $env->_post['pos_x'];
			$udata['pos_y'			] = $env->_post['pos_y'];
			$udata['link_url1'		] = $env->_post['link_url1'];
			$udata['link_url2'		] = $env->_post['link_url2'];
			$udata['link_url3'		] = $env->_post['link_url3'];
			$udata['link_url4'		] = $env->_post['link_url4'];
			$udata['link_map'		] = $env->_post['link_map'];
			$udata['date_start'		] = $env->_post['date_start'];
			$udata['date_end'		] = $env->_post['date_end'];
			$udata['size_w'			] = $env->_post['size_w'];
			$udata['size_h'			] = $env->_post['size_h'];
			$udata['pop_title1'		] = $env->_post['pop_title1'];
			$udata['pop_title2'		] = $env->_post['pop_title2'];
			$udata['pop_title3'		] = $env->_post['pop_title3'];
			$udata['pop_title4'		] = $env->_post['pop_title4'];
			$udata['file_subdir'	] = $upload_path;
			$udata['regdate'		] = date("Y-m-d H:i:s");

			for ($m = 1; $m < 5; $m++) {
				if (!empty($env->_files['file'.$m.'_2']['name'])) {
					$ar_info = $cls_F->upload($env->_files['file'.$m.'_2']);
					$udata['file'.$m.'_new'] = $ar_info['name_new'];
					$udata['file'.$m.'_ori'] = $ar_info['name'];

					if ($ar_info['name_new'] && $_r['file'.$m.'_new']) {
						$cls_F->delete_file($_r['file'.$m.'_new']);
					}
				}
			}
		}

		if ($dbo->update("RT_POPUP", $udata, "seq='".$env->_post['seq']."'")) {
			rt_js_move("정보가 변경되었습니다.", "parent", "reload", "");
		} else {
			rt_js_msg("시스템문제로 등록되지 않았습니다.");
		}

	} else {
		?><script>alert("접속경로가 올바르지 않습니다.");</script><?
		rt_js_move("", "parent", "href", "../?sd=popup&cf=list");
	}

}
else if ($env->_get['mode'] == "delete" && is_numeric($env->_get['seq']))
{
	$_r = $dbo->fetch("SELECT * FROM RT_POPUP WHERE seq='".$env->_get['seq']."'");

	if ($dbo->query("DELETE FROM RT_POPUP WHERE seq='".$env->_get['seq']."' LIMIT 1")) {

		$cls_F->delete_file($_r['file1_new']);

		rt_js_move("", "parent", "href", "../?sd=popup&cf=list");
	} else {
		rt_js_msg("시스템문제로 등록되지 않았습니다.");
	}
}
else if ($env->_get['mode'] == "imgdel" && is_numeric($env->_get['seq']))
{
	$_r = $dbo->fetch("SELECT * FROM RT_POPUP WHERE seq='".$env->_get['seq']."'");

	if ($dbo->query("UPDATE RT_POPUP SET file1_new='',file1_ori='' WHERE seq='".$env->_get['seq']."'")) {

		$cls_F->delete_file($_r['file1_new']);

		rt_js_move("", "parent", "reload");
	} else {
		rt_js_msg("시스템문제로 등록되지 않았습니다.");
	}
}
else
{
	rt_js_move("", "parent", "href", "../?sd=popup&cf=list");
}
exit;
?>