<?
require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";

//파일명
$file_name = iconv("UTF-8","EUC-KR","2021_netzeroexpo_data2_".date("Ymdhis").".xls");

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
		<th>업체명(한글)</th>
		<th>업체명(영문)</th>
		<th>사업자등록번호</th>
		<th>대표자</th>
		<th>사업장 주소</th>
		<th>우편물 수령처</th>
		<th>담당자/부서/직급</th>
		<th>직통번호</th>
		<th>휴대전화</th>
		<th>담당자 e-mail</th>
		<th>홈페이지 주소</th>
		<th>주요출품품목</th>
		<th>주요출품품목(영문)</th>
		<th>산업분야</th>
		<th>전시관 선택</th>
		<th>독립부스-수량(부스)</th>
		<th>독립부스-금액</th>
		<th>조립부스-수량(부스)</th>
		<th>조립부스-금액</th>
		<th>조립부스-합계[A]</th>
		<th>부대시설-전기 주간-수량(KW)</th>
		<th>부대시설-전기 주간-금액</th>
		<th>부대시설-전기 24시간-수량(KW)</th>
		<th>부대시설-전기 24시간-금액</th>
		<th>부대시설-인터넷 전용선(LAN)-수량(Port)</th>
		<th>부대시설-인터넷 전용선(LAN)-금액</th>
		<th>부대시설-압축공기-수량(개소)</th>
		<th>부대시설-압축공기-금액</th>
		<th>부대시설-급배수-수량(개소)</th>
		<th>부대시설-급배수-금액</th>
		<th>부대시설-합계[B]</th>
		<th>비용 총계[A+B]</th>
		<th>VAT(부가세)</th>
		<th>총합계</th>
		<th>세미나참가 여부</th>
		<th>세미나참가 발표</th>
		<th>세금계산서-담당자</th>
		<th>부서명</th>
		<th>직급</th>
		<th>직통번호</th>
		<th>휴대폰번호</th>
		<th>담당자 e-mail</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$_list = $dbo->fetch_list("SELECT * FROM RT_APPLICATION2_2021 ORDER BY seq DESC");

	if (count($_list) <= 0) {
		rt_js_msg("등록된 데이터가 없습니다.");
		exit;
	}

	$num = count($_list);
	for ($m = 0 ; $m < count($_list) ; $m++) {

		$reg_date = substr($_list[$m]['reg_date'],0,10);
	?>
	<tr>
		<td><?php echo $num;?></td>
		<td><?php echo $reg_date;?></td>
		<td><?php echo $_list[$m]['comp_name'];?></td>
		<td><?php echo $_list[$m]['comp_name_eng'];?></td>
		<td><?php echo $_list[$m]['comp_number'];?></td>
		<td><?php echo $_list[$m]['comp_ceo'];?></td>
		<td><?php echo "(".$_list[$m]['addr1_post'].") ".$_list[$m]['addr1_txt1']." ".$_list[$m]['addr1_txt2'];?></td>
		<td><?php echo "(".$_list[$m]['addr2_post'].") ".$_list[$m]['addr2_txt1']." ".$_list[$m]['addr2_txt2'];?></td>
		<td><?php echo $_list[$m]['per_name'];?> / <?php echo $_list[$m]['per_depart'];?> / <?php echo $_list[$m]['per_position'];?></td>
		<td><?php echo $_list[$m]['per_tel'];?></td>
		<td><?php echo $_list[$m]['per_phone'];?></td>
		<td><?php echo $_list[$m]['per_email'];?></td>
		<td><?php echo $_list[$m]['homepage'];?></td>
		<td><?php echo $_list[$m]['item'];?></td>
		<td><?php echo $_list[$m]['item_eng'];?></td>
		<?php
		$indust_cate = str_replace("|","<br>",$_list[$m]['indust_cate']);
		?>
		<td><?php echo $indust_cate;?></td>
		<td><?php
			if ($_list[$m]['booth'] == 4) {
				echo "기타 : ".$_list[$m]['booth_txt'];
			} else {
				echo $_booth[$_list[$m]['booth']];
			}
		?></td>
		<?php
		$booth1_tot = $_list[$m]['p_booth1']*$_p_booth1;
		$booth2_tot = $_list[$m]['p_booth2']*$_p_booth2;
		$booth_total = $booth1_tot + $booth2_tot;
		?>
		<td><?php echo $_list[$m]['p_booth1'];?></td>
		<td><?php echo number_format($booth1_tot);?></td>
		<td><?php echo $_list[$m]['p_booth2'];?></td>
		<td><?php echo number_format($booth2_tot);?></td>
		<td><?php echo number_format($booth_total);?></td>
		<?php
		$fac1_tot = $_list[$m]['p_fac1']*$_p_fac1;
		$fac2_tot = $_list[$m]['p_fac2']*$_p_fac2;
		$fac3_tot = $_list[$m]['p_fac3']*$_p_fac3;
		$fac4_tot = $_list[$m]['p_fac4']*$_p_fac4;
		$fac5_tot = $_list[$m]['p_fac5']*$_p_fac5;
		$fac_total = $fac1_tot + $fac2_tot + $fac3_tot + $fac4_tot + $fac5_tot;
		?>
		<td><?php echo $_list[$m]['p_fac1'];?></td>
		<td><?php echo number_format($fac1_tot);?></td>
		<td><?php echo $_list[$m]['p_fac2'];?></td>
		<td><?php echo number_format($fac2_tot);?></td>
		<td><?php echo $_list[$m]['p_fac3'];?></td>
		<td><?php echo number_format($fac3_tot);?></td>
		<td><?php echo $_list[$m]['p_fac4'];?></td>
		<td><?php echo number_format($fac4_tot);?></td>
		<td><?php echo $_list[$m]['p_fac5'];?></td>
		<td><?php echo number_format($fac5_tot);?></td>
		<td><?php echo number_format($fac_total);?></td>
		<?php
		$total_price_sum = $booth_total + $fac_total;
		$total_price_vat = $total_price_sum * 0.1;
		$total_price = $total_price_sum + $total_price_vat;
		?>
		<td><?php echo number_format($total_price_sum);?></td>
		<td><?php echo number_format($total_price_vat);?></td>
		<td><?php echo number_format($total_price);?></td>
		<td><?php echo ($_list[$m]['seminar_en']=="y")?"O":"X";?></td>
		<td><?php
		if ($_list[$m]['seminar_en']=="y") {
			if ($_list[$m]['seminar'] == 1) {echo "10월 14일(목) 오전 / 탄소중립 우수기술 소개";}
			if ($_list[$m]['seminar'] == 2) {echo "10월 14일(목) 오후/ 탄소기술 기술이전·사업화 우수사례";}
			if ($_list[$m]['seminar'] == 3) {echo "10월 15일(금) 오전/ 新기술 및 제품소개";}
			if ($_list[$m]['seminar'] == 4) {echo "10월 15일(금) 오후/ 新기술 및 제품소개";}
		}
		?></td>
		<td><?php echo $_list[$m]['tax_name'];?></td>
		<td><?php echo $_list[$m]['tax_depart'];?></td>
		<td><?php echo $_list[$m]['tax_position'];?></td>
		<td><?php echo $_list[$m]['tax_tel'];?></td>
		<td><?php echo $_list[$m]['tax_phone'];?></td>
		<td><?php echo $_list[$m]['tax_email'];?></td>
	</tr>
		<?
		$num--;
	}?>
	</tbody>
</table>
