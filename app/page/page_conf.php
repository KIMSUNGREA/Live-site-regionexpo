<?php
//-----------------------------------------------------------------------------------------
// 페이지 레이아웃 데이터 생성
//-----------------------------------------------------------------------------------------

$arr_dir = explode("/", $env->_server["PHP_SELF"]);

$div_dir = $arr_dir[1];			//최상위 구분 디렉토리
$sub_dir = $arr_dir[2];			//서브 디렉토리
$now_page = $arr_dir[3];		//현재 페이지

$section_name = "";				//섹션명
$page_name = "";				//페이지명

//-----------------------------------------------------------------------------------------
// 직접 제작된 페이지 별 레이아웃 데이터 설정
//-----------------------------------------------------------------------------------------

// 1차 디렉토리 : /page/
if($div_dir == "page") {

	// 2차 디렉토리 별 설정
	switch ($sub_dir) {

		case "s1" :
			$a_num = "1";
			$section_name = "안내관";
			$section_txt="윤석열 정부 지역균형발전 국정과제";

			// 디렉토리 내 페이지 별 데이터 설정
			switch ($now_page) {
				case "s1.php" : $page_name="윤석열 정부 지역균형발전 국정과제";	$b_num="1";		$c_num=""; break;
				case "s2.php" : $page_name="대한민국 지방시대 엑스포 소개";		$b_num="2";		$c_num="";  break;
				case "s3.php" : $page_name="기념행사";						$b_num="3";		$c_num="";  break;
			}
			//$page_navi_str = $section_name."&nbsp;&nbsp;>&nbsp;&nbsp;".$page_name; //네비정보 직접설정
		break;

		case "s2" :
			$a_num = "2";
			$section_name = "전시관";
			$section_txt="윤석열 정부 지역균형발전 국정과제";

			// 디렉토리 내 페이지 별 데이터 설정
			switch ($now_page) {
				case "s1.php" : $page_name="전시회 개요";			$b_num="1";		$c_num=""; break;
				case "s2.php" : $page_name="지방시대관";			$b_num="2";		$c_num=""; break;
				case "s3.php" : $page_name="시&middot;도 전시관";	$b_num="3";		$c_num=""; break;
				case "s4.php" : $page_name="특별관";				$b_num="4";		$c_num=""; break;
			}
			//$page_navi_str = $section_name."&nbsp;&nbsp;>&nbsp;&nbsp;".$page_name; //네비정보 직접설정
		break;

		case "s3" :
			$a_num = "3";
			$section_name = "컨퍼런스관";
			$section_txt="윤석열 정부 지역균형발전 국정과제"; 

			// 디렉토리 내 페이지 별 데이터 설정
			switch ($now_page) {
				case "s1.php" : $page_name="2022 지방시대 정책 컨퍼런스";		$b_num="1";		$c_num="";  break;
				case "s2.php" : $page_name="개막세션";						$b_num="2";		$c_num="";  break;
				case "s3.php" : $page_name="주제세션";						$b_num="3";		$c_num="";  break;
			}
			//$page_navi_str = $section_name."&nbsp;&nbsp;>&nbsp;&nbsp;".$page_name; //네비정보 직접설정
		break;

		case "s4" :
			$a_num = "4";
			$section_name = "국민참여관";
			$section_txt="윤석열 정부 지역균형발전 국정과제";

			// 디렉토리 내 페이지 별 데이터 설정
			switch ($now_page) {
				case "s11.php" : $page_name="청년&middot;기업 참여행사";		$b_num="1";		$c_num="";  break; 
				case "s31.php" : $page_name="주민자치행사";					$b_num="3";		$c_num="";  break; 
				case "s21.php" : $page_name="국민참여 행사";					$b_num="2";		$c_num="";  break; 
			}
			//$page_navi_str = $section_name."&nbsp;&nbsp;>&nbsp;&nbsp;".$page_name; //네비정보 직접설정
		break;

		case "s6" :
			$a_num = "6";
			$section_name = "프레스관";
			$section_txt="윤석열 정부 지역균형발전 국정과제"; 

			// 디렉토리 내 페이지 별 데이터 설정
			switch ($now_page) {
				case "s1.php" : $page_name="공지사항";			$b_num="1";		$c_num="";   break;
				case "s2.php" : $page_name="보도자료";			$b_num="2";		$c_num="";     break;
				case "s3.php" : $page_name="콘텐츠관";			$b_num="3";		$c_num="";     break;
				case "s4.php" : $page_name="영상관";			$b_num="4";		$c_num="";     break;
				case "s5.php" : $page_name="사진관";			$b_num="5";		$c_num="";     break;
			}
			//$page_navi_str = $section_name."&nbsp;&nbsp;>&nbsp;&nbsp;".$page_name; //네비정보 직접설정
		break;
		
		
		
		case "s5" :
			$a_num = "5";
			$section_name = "역사관";
			$section_txt="윤석열 정부 지역균형발전 국정과제"; 

			// 디렉토리 내 페이지 별 데이터 설정
			switch ($now_page) {
				case "s1.php" : $page_name="지역혁신박람외";			$b_num="1";		$c_num="";   break;
				case "s2.php" : $page_name="지역투자박람회";			$b_num="2";		$c_num="";     break;
				case "s3.php" : $page_name="지역발전주간";			$b_num="3";		$c_num="";     break;
				case "s4.php" : $page_name="지역희망박람회";			$b_num="4";		$c_num="";     break;
				case "s5.php" : $page_name="대한민국 균형발전박람회";			$b_num="5";		$c_num="";     break;
				case "s6.php" : $page_name="대한민국 지방시대 엑스포";			$b_num="6";		$c_num="";     break;
			}
			//$page_navi_str = $section_name."&nbsp;&nbsp;>&nbsp;&nbsp;".$page_name; //네비정보 직접설정
		break;
		
		
		
		
		

		case "etc" :
			$a_num = "terms";
			$section_name = "서비스 이용안내";
			$page_name = "서비스 이용안내";
			$page_txt = "서비스 이용안내";
			$_sub = "no";

		break;
	}

	// CASE 내에 정의된 네비 정보가 없으면 기본 설정에 따름
	$page_navi_str = (empty($page_navi_str)) ? $section_name."&nbsp;&nbsp;>&nbsp;&nbsp;".$page_name : $page_navi_str;

//-----------------------------------------------------------------------------------------
// 가상 URL을 사용하는 페이지 레이아웃 데이터 설정
//-----------------------------------------------------------------------------------------

} else if($div_dir == "app" && !empty($pcd)) {

	// 페이지 코드(GET으로만 처리)
	$pcd = $env->_get['pcd'];

	// 레이아웃 변수 설정
	$a_num = $__pg['u_data1']; // 사용자 정의 데이터1
	$b_num = $__pg['u_data2']; // 사용자 정의 데이터2
	$c_num = $__pg['u_data3']; // 사용자 정의 데이터3

	// 타이틀 설정
	$cls_ct->getCateInfo($pcd);

	$page_navi_str = $cls_ct->data[1]."&nbsp;>&nbsp;".$cls_ct->data[0];
	$section_name = $cls_ct->data[1];
	$page_name = $cls_ct->data[0];
}

//-----------------------------------------------------------------------------------------
// 이하 공통 데이터
//-----------------------------------------------------------------------------------------

// 메뉴 활성 여부
${"class_active_".$b_num} = "class='active'";

// javascript에서 사용할 변수 설정
$j_a_num = $a_num-1; if($j_a_num=="-1"){$j_a_num = "";}
$j_b_num = $b_num-1; if($j_b_num=="-1"){$j_b_num = "";}
$j_c_num = $c_num-1; if($j_c_num=="-1"){$j_c_num = "";}
?>