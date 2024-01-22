<?php
//-----------------------------------------------------------------------------------------
// 프로그램		: RINT-KIT
// 제작			: 린트킷(rintkit.com)
// 버전			: 1.0
// 인코딩		: UTF-8
// 설명			: Appform Controller
//-----------------------------------------------------------------------------------------

if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }

if( !class_exists("appform") )
{
	class appform
	{
		var $env, $dbo, $app;

		//----------------------------------------------------------------------------------------------

		function appform() {

			global $env, $dbo;

			$this->env = $env;
			$this->dbo = $dbo;
		}

		//----------------------------------------------------------------------------------------------

		/** 
		 * 초기화
		 */

		function reset_app() {

			if ($this->dbo->query("TRUNCATE TABLE RT_APPFORM") && 
				$this->dbo->query("TRUNCATE TABLE RT_APPFORM_ADD_FIELD") && 
				$this->dbo->query("TRUNCATE TABLE RT_APPFORM_CU") && 
				$this->dbo->query("TRUNCATE TABLE RT_APPFORM_CU_CONF")) {

				return true;
			} else {
				return false;
			}
		}

		//----------------------------------------------------------------------------------------------

		/**
		* 폼 필드 출력 관리
		*
		* @param	array				$field			:	세팅된 필드 정보
		* @param	array				$data			:	입력된 필드 데이터
		* @param	boolean				$is_adm			:	관리자 모드 여부
		* @return	string
		**/

		function formset($field, $data, $is_adm=false)
		{
			$seq = $field['seq'];
			$fieldname = "rtfeild_".$seq;

			/* Common var */
			if ($is_adm) {
				$req_addcls = " rt_input_txt ";
			}
			if ($field['is_require']=="y") {
				$req_addcls.= " required";
				$req_msg = "msg='".$field['require_text']."'";
			} else {
				$req_addcls.="";$req_msg="";
			}
			$class = "appform-add-css-".$field['seq'];

			$size_h = "";
			if ($field['size_h'] > 0) {
				$size_h = "height:".$field['size_h']."px;";
			}

			$size_w = "";
			if ($field['size_w'] > 0) {
				$size_w = "width:".$field['size_w']."px;";
			}

			$ptr = "";
			switch ($field['type'])
			{
				case "text"	:

					$ptr.= "<input type='text' name='".$fieldname."' value='".$data[$seq]['val']."' style='".$size_w."' class='".$req_addcls."' ".$req_msg.">";
				break;

				case "checkbox"	:

					$data_arr = explode(",", $field['data']);
					foreach ($data_arr as $k => $v) {
						$checked = ($data[$seq]['val'][$k] == $v)?"checked":"";
						$ptr.= "<label><input type='checkbox' name='".$fieldname."_".$k."' value='".$v."' ".$checked." > ".$v."</label> ";
					}
				break;

				case "radio"	:

					$data_arr = explode(",", $field['data']);
					foreach ($data_arr as $k => $v) {
						$checked = ($data[$seq]['val'] == $v)?"checked":"";
						$ptr.= "<label><input type='radio' name='".$fieldname."' value='".$v."' ".$checked." > ".$v."</label> ";
					}
				break;

				case "select"	:

					$data_arr = explode(",", $field['data']);

					$ptr.= "<select name='".$fieldname."' style='".$size_w."' class='".$req_addcls."' ".$req_msg.">";
					foreach ($data_arr as $k => $v) {
						$selected = ($data[$seq]['val'] == $v)?"selected":"";
						$ptr.= "<option value='".$v."' ".$selected.">".$v."</option>";
					}
					$ptr.= "</select>";

				break;

				case "textarea"	:

					$ptr.= "<textarea name='".$fieldname."' style='".$size_w.$size_h."' ".$req_msg.">".$data[$seq]['val']."</textarea>";
				break;
			}
			return $ptr;
		}

		//----------------------------------------------------------------------------------------------

		/**
		* 폼 데이터 출력 관리
		*
		* @param	array				$field			:	세팅된 필드 정보
		* @param	array				$data			:	입력된 필드 데이터
		* @return	string
		**/

		function formset_data($field, $data)
		{
			$ptr = "";
			$seq = $field['seq'];
			if ($field['type'] == "checkbox") {
				$ptr_arr = array();
				if (count($data[$seq]['val']) > 0) {
					foreach ($data[$seq]['val'] as $k => $v) {
						$ptr_arr[] = $v;
					}
					$ptr = join(",", $ptr_arr);
				}
			} else if ($field['type'] == "textarea") {
				$ptr.= nl2br($data[$seq]['val']);
			} else {
				$ptr.= $data[$seq]['val'];
			}

			return $ptr;
		}

		//----------------------------------------------------------------------------------------------

		function source_guide($arForm)
		{
			$fieldname = "form_".$arForm['bcode']."_".$arForm['seq'];

			/* 필드 구분 출력 설정(특수 필드, 일반 필드) */
			if ($arForm['is_special'] == "y") {
				$switchData = $arForm['special_code'];
			} else {
				$switchData = $arForm['type'];
			}

			/* Common var */
			if ($arForm['is_require']=="y") {
				$req_addcls = "require";
				$req_msg = "msg='".$arForm['require_text']."'";
			} else {
				$req_addcls="";$req_msg="";
			}

			$ptr = "";
			switch ($switchData)
			{
				case "name"	:

					/* 이름 */
					$ptr.= "&lt;input type='text' name='".$fieldname."' style='width:".$arForm['size_w']."px;' class='".$req_addcls."' ".$req_msg."&gt;";

				break;

				case "phone"	:

					/* 휴대폰 */
					$arData = explode(",", $arForm['data']);

					$ptr.= "&lt;select name='".$fieldname."_0'&gt;<br />";
					foreach ($arData as $k => $v) {
						$ptr.= "&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value='".$v."'&gt;".$v."&lt;/option&gt;<br />";
					}
					$ptr.= "&lt;/select&gt;<br />";
					$ptr.= "&lt;input type='text' name='".$fieldname."_1' maxlength='4' style='width:".$arForm['size_w']."px;' class='".$req_addcls."' ".$req_msg."&gt;<br />";
					$ptr.= "&lt;input type='text' name='".$fieldname."_2' maxlength='4' style='width:".$arForm['size_w']."px;' class='".$req_addcls."' ".$req_msg."&gt;";

				break;

				case "text"	:

					$ptr.= "&lt;input type='text' name='".$fieldname."' style='width:".$arForm['size_w']."px;' class='".$req_addcls."' ".$req_msg."&gt;";

				break;

				case "checkbox"	:

					$arData = explode(",", $arForm['data']);

					foreach ($arData as $k => $v) {
						$ptr.= "&lt;label&gt;&lt;input type='checkbox' name='".$fieldname."_".$k."' value='".$v."' &gt; ".$v."&lt;/label&gt;<br />";
					}

				break;

				case "radio"	:

					$arData = explode(",", $arForm['data']);

					foreach ($arData as $k => $v) {
						$checked = ($k == 0) ? "checked":"";
						$ptr.= "&lt;label&gt;&lt;input type='radio' name='".$fieldname."' value='".$v."' ".$checked." &gt; ".$v."&lt;/label&gt;<br />";
					}

				break;

				case "select"	:

					$arData = explode(",", $arForm['data']);

					$ptr.= "&lt;select name='".$fieldname."' style='width:".$arForm['size_w']."px' class='".$req_addcls."' ".$req_msg."&gt;<br />";
					foreach ($arData as $k => $v) {
						$ptr.= "&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value='".$v."'&gt;".$v."&lt;/option&gt;<br />";
					}
					$ptr.= "&lt;/select&gt;";

				break;

				case "textarea"	:

					$ptr.= "&lt;textarea name='".$fieldname."' style='width:".$arForm['size_w']."px;height:".$arForm['size_h']."px;' class='".$req_addcls."' ".$req_msg."&gt;&lt;/textarea&gt;";

				break;
			}
			return $ptr;
		}
	}
}
?>