<?php if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }?>
<style>
.rt_field_table td,th {line-height:20px;}
</style>
<form name="data_form">
<input type="hidden" name="seq" value="<?php echo $_r['seq']?>">
<input type="hidden" name="pg" value="<?php echo $env->_get['pg']?>">
<input type="hidden" name="search" value="<?php echo $env->_get['search']?>">
<input type="hidden" name="searchstring" value="<?php echo $env->_get['searchstring']?>">

<div class="rt_s_tit clearfix">
	<p>01<span></span></p>
	<h1>신청/계약자</h1>
</div>
<table class="rt_field_table mb10">
	<caption>신청 데이터</caption>
	<colgroup>
		<col style="width:15%"/>
		<col style="width:35%"/>
		<col style="width:15%"/>
		<col style="width:35%"/>
	</colgroup>
	<tr>
		<th><p>업체명(한글)</p></th>
		<td><?php echo $_r['comp_name'];?></td>
		<th><p>업체명(영문)</p></th>
		<td><?php echo $_r['comp_name_eng'];?></td>
	</tr>
	<tr>
		<th><p>사업자등록번호</p></th>
		<td><?php echo $_r['comp_number'];?></td>
		<th><p>대표자</p></th>
		<td><?php echo $_r['comp_ceo'];?></td>
	</tr>
	<tr>
		<th><p>사업장 주소</p></th>
		<td colspan="3"><?php echo "(".$_r['addr1_post'].") ".$_r['addr1_txt1']." ".$_r['addr1_txt2'];?></td>
	</tr>
	<tr>
		<th><p>우편물 수령처</p></th>
		<td colspan="3"><?php echo "(".$_r['addr2_post'].") ".$_r['addr2_txt1']." ".$_r['addr2_txt2'];?></td>
	</tr>
	<tr>
		<th><p>담당자 / 부서 / 직급</p></th>
		<td colspan="3"><?php echo $_r['per_name'];?> / <?php echo $_r['per_depart'];?> / <?php echo $_r['per_position'];?></td>
	</tr>
	<tr>
		<th>직통번호</th>
		<td><?php echo $_r['per_tel'];?></td>
		<th>휴대전화</th>
		<td><?php echo $_r['per_phone'];?></td>
	</tr>
	<tr>
		<th>담당자 e-mail</th>
		<td><?php echo $_r['per_email'];?></td>
		<th>홈페이지 주소</th>
		<td><?php echo $_r['homepage'];?></td>
	</tr>
	<tr>
		<th>주요출품품목</th>
		<td><?php echo $_r['item'];?></td>
		<th>주요출품품목(영문)</th>
		<td><?php echo $_r['item_eng'];?></td>
	</tr>
	<tr>
		<th><p>산업분야</p></th>
		<td colspan="3"><?php echo $indust_cate;?></td>
	</tr>
	<tr>
		<th><p>사업자등록증</p></th>
		<td>
		<?php if ($_r['file1_new']) { ?>
			<!-- <img src="<?php echo $_r['file_subdir'];?>/<?php echo $_r['file1_new'];?>" style="max-width:150px;"> -->
			<p class="rt_button_wrap">
				<a href="./data/download.php?seq=<?php echo $_r['seq'];?>&filenum=1" target="rt_ifrm" class="rt_btn_gray btn_s">파일 다운로드</a>
			</p>
		<?php } ?>
		</td>
		<th><p>참가사 로고</p></th>
		<td>
		<?php if ($_r['file2_new']) { ?>
			<!-- <img src="<?php echo $_r['file_subdir'];?>/<?php echo $_r['file2_new'];?>" style="max-width:150px;"> -->
			<p class="rt_button_wrap">
				<a href="./data/download.php?seq=<?php echo $_r['seq'];?>&filenum=2" target="rt_ifrm" class="rt_btn_gray btn_s">파일 다운로드</a>
			</p>
		<?php } ?>
		</td>
	</tr>
</table>

<div class="rt_s_tit clearfix">
	<p>02<span></span></p>
	<h1>전시관</h1>
</div>
<table class="rt_field_table mb10">
	<caption>신청 데이터</caption>
	<colgroup>
		<col style="width:15%"/>
		<col style="width:85%"/>
	</colgroup>
	<tr>
		<th><p>탄소중립특별관 선택</p></th>
		<td><?php
		/*
			if ($_r['booth'] == 4) {
				echo "기타 : ".$_r['booth_txt'];
			} else {
				echo $_booth[$_r['booth']];
			}
		*/
			$addstr = ($_r['booth'] > 9)?"[순환경제] ":"[탄소중립] ";
			echo $addstr.$_booth[$_r['booth']];
		?></td>
	</tr>
	<!-- <tr>
		<th><p>순환경제 정책관 선택</p></th>
		<td><?php echo $_booth1[$_r['booth1']];?></td>
	</tr> -->
</table>

<div class="rt_s_tit clearfix">
	<p>03<span></span></p>
	<h1>부스신청 및 계약</h1>
</div>
<table class="rt_field_table mb10">
	<caption>신청 데이터</caption>
	<colgroup>
		<col style="width:25%"/>
		<col style="width:25%"/>
		<col style="width:25%"/>
		<col style="width:25%"/>
	</colgroup>
	<tr>
		<th><p>부스종류</p></th>
		<th><p>신청규모</p></th>
		<th><p>일반신청단가</p></th>
		<th><p>금액</p></th>
	</tr>
	<?php
	$booth1_tot = $_r['p_booth1']*$_p_booth1;
	$booth2_tot = $_r['p_booth2']*$_p_booth2;
	$booth_total = $booth1_tot + $booth2_tot;
	?>
	<tr>
		<th><p>독립부스</p></th>
		<td class="rt_tac">총 <?php echo $_r['p_booth1'];?> 부스</td>
		<td class="rt_tar">￦ <?php echo number_format($_p_booth1);?></td>
		<td>￦ <?php echo number_format($booth1_tot);?></td>
	</tr>
	<tr>
		<th><p>조립부스</p></th>
		<td class="rt_tac">총 <?php echo $_r['p_booth2'];?> 부스</td>
		<td class="rt_tar">￦ <?php echo number_format($_p_booth2);?></td>
		<td>￦ <?php echo number_format($booth2_tot);?></td>
	</tr>
	<tr>
		<td colspan="3" class="rt_tac">합계[A]</td>
		<td>￦ <?php echo number_format($booth_total);?></td>
	</tr>
</table>

<div class="rt_s_tit clearfix">
	<p>04<span></span></p>
	<h1>부대시설</h1>
</div>
<table class="rt_field_table mb10">
	<caption>신청 데이터</caption>
	<colgroup>
		<col style="width:20%"/>
		<col style="width:20%"/>
		<col style="width:20%"/>
		<col style="width:20%"/>
		<col style="width:20%"/>
	</colgroup>
	<tr>
		<th rowspan="7"><p>독립부스</p></th>
		<th><p>구분</p></th>
		<th><p>내역</p></th>
		<th><p>단가</p></th>
		<th><p>소계</p></th>
	</tr>
	<?php
	$fac1_tot = $_r['p_fac1']*$_p_fac1;
	$fac2_tot = $_r['p_fac2']*$_p_fac2;
	$fac3_tot = $_r['p_fac3']*$_p_fac3;
	$fac4_tot = $_r['p_fac4']*$_p_fac4;
	$fac5_tot = $_r['p_fac5']*$_p_fac5;
	$fac_total = $fac1_tot + $fac2_tot + $fac3_tot + $fac4_tot + $fac5_tot;
	?>
	<tr>
		<td>전기 - 단상 220V 주간</td>
		<td class="rt_tac"> <?php echo $_r['p_fac1'];?> KW</td>
		<td class="rt_tar">￦ <?php echo number_format($_p_fac1);?></td>
		<td>￦ <?php echo number_format($fac1_tot);?></td>
	</tr>
	<tr>
		<td>전기 - 단상 220V 24시간</td>
		<td class="rt_tac"> <?php echo $_r['p_fac2'];?> KW</td>
		<td class="rt_tar">￦ <?php echo number_format($_p_fac2);?></td>
		<td>￦ <?php echo number_format($fac2_tot);?></td>
	</tr>
	<tr>
		<td>인터넷 전용선(LAN)</td>
		<td class="rt_tac"> <?php echo $_r['p_fac3'];?> Port</td>
		<td class="rt_tar">￦ <?php echo number_format($_p_fac3);?></td>
		<td>￦ <?php echo number_format($fac3_tot);?></td>
	</tr>
	<tr>
		<td>압축공기</td>
		<td class="rt_tac"> <?php echo $_r['p_fac4'];?> 개소</td>
		<td class="rt_tar">￦ <?php echo number_format($_p_fac4);?></td>
		<td>￦ <?php echo number_format($fac4_tot);?></td>
	</tr>
	<tr>
		<td>급배수</td>
		<td class="rt_tac"> <?php echo $_r['p_fac5'];?> 개소</td>
		<td class="rt_tar">￦ <?php echo number_format($_p_fac5);?></td>
		<td>￦ <?php echo number_format($fac5_tot);?></td>
	</tr>
	<tr>
		<td colspan="3" class="rt_tac">합계[B]</td>
		<td>￦ <?php echo number_format($fac_total);?></td>
	</tr>
</table>

<table class="rt_field_table mb10">
	<caption>신청 데이터</caption>
	<colgroup>
		<col style="width:20%"/>
		<col style="width:20%"/>
		<col style="width:60%"/>
	</colgroup>
	<?php
	$total_price_sum = $booth_total + $fac_total;
	$total_price_vat = $total_price_sum * 0.1;
	$total_price = $total_price_sum + $total_price_vat;
	?>
	<tr>
		<th rowspan="3"><p>비용 총계</p></th>
		<td class="rt_tac"><p>합계[A] + 합계[B]</p></td>
		<td>￦ <?php echo number_format($total_price_sum);?></td>
	</tr>
	<tr>
		<td class="rt_tac">VAT(부가세)</td>
		<td>￦ <?php echo number_format($total_price_vat);?></td>
	</tr>
	<tr>
		<td class="rt_tac">총합계</td>
		<td>￦ <?php echo number_format($total_price);?></td>
	</tr>
</table>

<div class="rt_s_tit clearfix">
	<p>05<span></span></p>
	<h1>세미나참가</h1>
</div>
<table class="rt_field_table mb10">
	<caption>신청 데이터</caption>
	<colgroup>
		<col style="width:15%"/>
		<col style="width:85%"/>
	</colgroup>
	<tr>
		<th rowspan="2"><p>세미나 참가</p></th>
		<td>
			<?php echo ($_r['seminar_en']=="y")?"세미나 발표 참여를 희망합니다.":"세미나 발표 참여를 희망하지 않습니다.";?>
		</td>
	</tr>
	<tr>
		<td><?php
		if ($_r['seminar_en']=="y") {
			if ($_r['seminar'] == 1) {echo "5월 26일(목) 오전/ 탄소기술 기술이전·사업화 우수사례";}
			if ($_r['seminar'] == 2) {echo "5월 26일(목) 오후/ 탄소기술 기술이전·사업화 우수사례";}
			if ($_r['seminar'] == 3) {echo "5월 27일(금) 오전/ 新기술 및 제품소개";}
			if ($_r['seminar'] == 4) {echo "5월 27일(금) 오후/ 新기술 및 제품소개";}
		}
		?></td>
	</tr>
</table>

<div class="rt_s_tit clearfix">
	<p>06<span></span></p>
	<h1>세금계산서 담당자 정보</h1>
</div>
<table class="rt_field_table mb10">
	<caption>신청 데이터</caption>
	<colgroup>
		<col style="width:15%"/>
		<col style="width:35%"/>
		<col style="width:15%"/>
		<col style="width:35%"/>
	</colgroup>
	<tr>
		<th><p>성명</p></th>
		<td><?php echo $_r['tax_name'];?></td>
		<th><p>부서명</p></th>
		<td><?php echo $_r['tax_depart'];?></td>
	</tr>
	<tr>
		<th><p>직급</p></th>
		<td><?php echo $_r['tax_position'];?></td>
		<th><p>직통번호</p></th>
		<td><?php echo $_r['tax_tel'];?></td>
	</tr>
	<tr>
		<th><p>휴대폰번호</p></th>
		<td><?php echo $_r['tax_phone'];?></td>
		<th><p>담당자 e-mail</p></th>
		<td><?php echo $_r['tax_email'];?></td>
	</tr>
</table>
</form>

<div class="rt_button_wrap rt_tar mb25">
	<?php if ($cls_adm->adm_id == "admin") { ?>
	<a href="#;" id="" class="rt_btn_red" onclick="btn_delete('<?php echo $_r['seq']?>')">삭제하기</a>
	<?php } ?>
	<a href="#;" id="btn-list" class="rt_btn_gray">목록가기</a>
</div>

<script type="text/javascript">
;(function($) {
	$(function() {

		$("#btn-list").click(function (){
			var form = document.data_form;
			var pg = form.pg.value;

			var schurl = "";
			if (form.searchstring.value != "") {
				schurl+= "&search="+form.search.value+"&searchstring="+form.searchstring.value;
			}
			location.href = rt_path['adm']+"/application2/?sd=data&cf=list&pg="+pg+schurl;
		});
	});
})(jQuery);

function btn_delete(seq) {
	if (seq) {
		if (confirm("신청서를 삭제하시겠습니까?")) {
			$("#rt_ifrm").attr("src",rt_path['adm']+"/application2/data/update.php?mode=delete&seq="+seq);
		}
	} else {
		rt_alert("시스템문제로 처리되지 않았습니다");
	}
}

</script>

<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>