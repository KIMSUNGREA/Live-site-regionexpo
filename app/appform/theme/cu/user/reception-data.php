<?php
//-----------------------------------------------------------------------------------------
// 프로그램		: RINT-KIT
// 제작			: 린트킷(rintkit.com)
// 버전			: 1.0
// 인코딩		: UTF-8
// 설명			: 신청데이터 수집 페이지
//-----------------------------------------------------------------------------------------

require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";
require_once RT_ROOT."/engine.php";

//-------------------------------------------------------------------------------------------------

/**
 * 업로드 콤포넌트 설정
 */

rt_load_component("fileupload");
$upload_path = "/app/appform/files/cu";
$cls_F = new fileupload($upload_path);

//-------------------------------------------------------------------------------------------------


$udata = array();//업데이트 데이터

if ($env->_post['mode'] == "insert" && !empty($env->_post['bcode']))
{
	$_tmp = $dbo->fetch("SELECT * FROM  RT_APPFORM_CU WHERE bcode='".$env->_post['bcode']."' AND ip='".$env->_server['REMOTE_ADDR']."' ORDER BY seq DESC");
	if (is_numeric($_tmp['seq'])) {

		$nowtime = time();
		$regdate = rt_convert_date_to_unixtime($_tmp['reg_date']);

		$diff = $nowtime - $regdate;
		if ($diff < 60) {
			//rt_js_msg("신청후 1분이내에는 연속해서 이용할 수 없습니다.");exit;
		}
	}

	$arSz = array();

	/* 폼 데이터 처리 */
	foreach ($env->_post as $k => $v)
	{
		$arK = null;
		$arFV = null;

		$v = addslashes($v);
		$arK = explode("_", $k);

		if (is_numeric($arK[2])) {
			$arFV = $dbo->fetch("SELECT * FROM RT_APPFORM_ADD_FIELD WHERE seq='".$arK[2]."'");
		}

		if ($arK[0] == "form")
		{
			if ($arFV['is_special'] == "y")
			{
				if ($arFV['special_code'] == "name") {
					$name = $v;
				}
				if ($arFV['special_code'] == "phone") {
					$phone[$arK[3]] = $v;
				}
			}
			else if ($arFV['is_special'] == "n")
			{
				$arSz[$arK[2]]['type'] = $arFV['type'];
				$arSz[$arK[2]]['name'] = $arFV['name'];

				if ($arFV['type'] == "checkbox") {
					$arSz[$arK[2]]['val'][$arK[3]] = $v;
				} else {
					$arSz[$arK[2]]['val'] = $v;
				}
			}
		}
	}

	//전화번호가 한줄일 때
	if ($env->_post['phone_num'] == 1) {
		$phone = $phone[0];
	}

	/* Insert data */
	if ($phone[0] && $phone[1] && $phone[2]) {
		$phone = $phone[0]."-".$phone[1]."-".$phone[2];
	}

	$udata['bcode'		] = $env->_post['bcode'];
	$udata['name'		] = $name;
	$udata['phone'		] = $phone;
	$udata['extvar'		] = serialize($arSz);
	$udata['reg_date'	] = date("Y-m-d H:i:s");
	$udata['ip'			] = $env->_server['REMOTE_ADDR'];
	$udata['file_subdir'] = $upload_path;

	$upload_size_limit = 3;

	for ($m = 1; $m < 6; $m++) {
		if (!empty($env->_files['file'.$m]['name'])) {

			$total_size = $env->_files['file'.$m]['size'];
			$check_size = $total_size / 1000000;

			if ($check_size > $upload_size_limit) {
				rt_js_msg("한 개의 이미지당 ".$upload_size_limit."MB 이상 업로드할 수 없습니다");
				?>
				<script>
					parent.$("#btn-div").show();
					parent.$("#waiting").hide();
				</script>
				<?
				exit;
			}

			$ar_info = $cls_F->upload($env->_files['file'.$m]);
			$udata['file'.$m.'_new'] = $ar_info['name_new'];
			$udata['file'.$m.'_ori'] = $ar_info['name'];
		}
	}

	if ($dbo->insert("RT_APPFORM_CU", $udata)) {

		$_conf = $dbo->fetch("SELECT * FROM RT_APPFORM_CU_CONF WHERE bcode='".$env->_post['bcode']."'");

		// 예약 등록 알림 설정 시 SMS 발송
		if ($_conf['sms_send_is'] == "y") {

			rt_load_lib("sms");

			$phone_arr = explode(",", $_conf['sms_number']);
			foreach ($phone_arr as $k => $v) {

				$v = trim($v);
				if (!empty($v)) {
					$r_num = str_replace("-","",$v);
					$s_num = $rt_conf_db['sender_phone'];
					$s_msg = rt_dbstr_decode($_conf['sms_msg']);

					//SMS 발송
					rt_send_sms($r_num, $s_num, $s_msg);
				}
			}
		}

		//rt_js_msg("신청이 접수되었습니다.");
		rt_js_move("신청이 접수되었습니다.", "parent", "reload");
	} else {
		rt_js_msg("시스템문제로 등록되지 않았습니다.");
	}
}
?>