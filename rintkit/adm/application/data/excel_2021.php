<?
require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";

//파일명
$file_name = iconv("UTF-8","EUC-KR","2021_netzeroexpo_data1_".date("Ymdhis").".xls");

header("Content-type: application/vnd.ms-excel"); 

header("Content-Disposition: attachment; filename=$file_name" ); 
header("Content-Description: PHP4 Generated Data" ); 

?>
<meta http-equiv="Content-Type" content="application/vnd.ms-excel;charset=utf-8"> 
<style>
table{
	width: 100%;
	border: 1px solid #CDCDCD;
	border-collapse: collapse;
	margin:0;
	font-size: 11px;
	font-family:'나눔고딕',NanumGothic,"dotum";
	text-align: center;
}
tr{
	height:30px;
}
th{
	font-weight:normal;
	background-color:#EEEEEE;
	border-bottom: 1px solid #CDCDCD;
	border-right: 1px solid #CDCDCD;
	text-align:center;
}

td{
	padding: 5px;
	border-bottom:1px solid lightgrey;
	border-right: 1px solid #CDCDCD;
	vertical-align:middle;
	text-align:left;
	color:#666666;
}
</style>
<table>
	<thead>
	<tr>
		<th>번호</th>
		<th>신청일</th>
		<th>이름</th>
		<th>소속</th>
		<th>부서</th>
		<th>직급</th>
		<th>휴대전화</th>
		<th>이메일</th>
		<th>업종 분야</th>
		<th>담당 직무</th>
		<th>참관예정일</th>
		<th>거주 지역</th>
		<th>참관객 구분</th>
		<th>참관목적</th>
		<th>관심분야</th>
		<th>인지경로</th>
		<th>선택정보 수신동의</th>
		<th>동의수단-이메일</th>
		<th>동의수단-SMS</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$_list = $dbo->fetch_list("SELECT * FROM RT_APPLICATION_2021 ORDER BY seq DESC");

	if (count($_list) <= 0) {
		rt_js_msg("등록된 데이터가 없습니다.");
		exit;
	}

	$num = count($_list);
	for ($m = 0 ; $m < count($_list) ; $m++) {

		$if_3 = null;
		$sv_2 = null;
		$sv_3 = null;
		$reg_date = substr($_list[$m]['reg_date'],0,10);
	?>
	<tr>
		<td><?php echo $num;?></td>
		<td><?php echo $reg_date;?></td>
		<td><?php echo $_list[$m]['name'];?></td>
		<td><?php echo $_list[$m]['comp_name'];?></td>
		<td><?php echo $_list[$m]['comp_depart'];?></td>
		<td><?php echo $_list[$m]['comp_position'];?></td>
		<td style=mso-number-format:'\@'><?php echo $_list[$m]['phone'];?></td>
		<td><?php echo $_list[$m]['email'];?></td>
		<td><?php
		if ($_list[$m]['if_1'] == 14) {
			echo "기타 : ".$_list[$m]['if_1_txt'];
		} else {
			echo $ap_if_1[$_list[$m]['if_1']];
		}
		?></td>
		<td><?php
		if ($_list[$m]['if_2'] == 9) {
			echo "기타 : ".$_list[$m]['if_2_txt'];
		} else {
			echo $ap_if_2[$_list[$m]['if_2']];
		}
		?></td>
		<td>
			<?php
				if ($_list[$m]['if_3_1']=="y") {$if_3[] = "10월 13일(수)";}
				if ($_list[$m]['if_3_2']=="y") {$if_3[] = "10월 14일(목)";}
				if ($_list[$m]['if_3_3']=="y") {$if_3[] = "10월 15일(금)";}

				echo implode("<br>",$if_3);
			?>
		</td>
		<td><?php
		if ($_list[$m]['if_4'] == 11) {
			echo "기타 : ".$_list[$m]['if_4_txt'];
		} else {
			echo $ap_if_4[$_list[$m]['if_4']];
		}
		?></td>
		<td><?php echo $ap_sv_1[$_list[$m]['sv_1']];?></td>
		<td>
			<?php
				if ($_list[$m]['sv_2_1']=="y") {$sv_2[] = "공공기관 및 지자체 정책 정보";}
				if ($_list[$m]['sv_2_2']=="y") {$sv_2[] = "부대행사 참여";}
				if ($_list[$m]['sv_2_3']=="y") {$sv_2[] = "업계동향파악";}
				if ($_list[$m]['sv_2_4']=="y") {$sv_2[] = "차기년도 참가검토";}
				if ($_list[$m]['sv_2_5']=="y") {$sv_2[] = "일반관람";}
				if ($_list[$m]['sv_2_6']=="y") {$sv_2[] = "정보수집 및 시장조사";}
				if ($_list[$m]['sv_2_7']=="y") {$sv_2[] = "기타";}

				echo implode("<br>",$sv_2);
			?>
		</td>
		<td>
			<?php
				if ($_list[$m]['sv_3_1']=="y") {$sv_3[] = "산업정책관";}
				if ($_list[$m]['sv_3_2']=="y") {$sv_3[] = "금융/세재";}
				if ($_list[$m]['sv_3_3']=="y") {$sv_3[] = "기술이전/사업화";}
				if ($_list[$m]['sv_3_4']=="y") {$sv_3[] = "탄소중립 선도기업";}
				if ($_list[$m]['sv_3_5']=="y") {$sv_3[] = "신사업";}
				if ($_list[$m]['sv_3_6']=="y") {$sv_3[] = "미래모빌리티";}
				if ($_list[$m]['sv_3_7']=="y") {$sv_3[] = "에너지효율";}
				if ($_list[$m]['sv_3_8']=="y") {$sv_3[] = "자원순환";}

				echo implode("<br>",$sv_3);
			?>
		</td>
		<td><?php echo $ap_sv_4[$_list[$m]['sv_4']];?></td>
		<td><?php echo ($_list[$m]['agree_ad']=="y")?"y":"n";?></td>
		<td><?php echo ($_list[$m]['agree_email_en']=="y")?"y":"n";?></td>
		<td><?php echo ($_list[$m]['agree_sms_en']=="y")?"y":"n";?></td>
	</tr>
		<?
		$num--;
	}?>
	</tbody>
</table>
