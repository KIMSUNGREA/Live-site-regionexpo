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
	<h1>참관객 정보</h1>
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
		<th><p>관람 구분</p></th>
		<td colspan="3"><?php echo $ap_gubun[$_r['gubun']];?></td>
	</tr>
	<tr>
		<th><p>이름</p></th>
		<td><?php echo ($_r['name']);?></td>
		<th><p>소속</p></th>
		<td><?php echo ($_r['comp_name']);?></td>
	</tr>
	<tr>
		<th><p>부서</p></th>
		<td><?php echo ($_r['comp_depart']);?></td>
		<th><p>직급</p></th>
		<td><?php echo $_r['comp_position'];?></td>
	</tr>
	<tr>
		<th><p>휴대전화</p></th>
		<td><?php echo ($_r['phone']);?></td>
		<th><p>이메일</p></th>
		<td><?php echo ($_r['email']);?></td>
	</tr>
	<tr>
		<th><p>업종 분야</p></th>
		<td><?php
		if ($_r['if_1'] == 14) {
			echo "기타 : ".$_r['if_1_txt'];
		} else {
			echo $ap_if_1[$_r['if_1']];
		}
		?></td>
		<th><p>담당 직무</p></th>
		<td><?php
		if ($_r['if_2'] == 9) {
			echo "기타 : ".$_r['if_2_txt'];
		} else {
			echo $ap_if_2[$_r['if_2']];
		}
		?></td>
	</tr>
	<tr>
		<th>참관예정일</th>
		<td>
			<?php
				if ($_r['if_3_1']=="y") {$if_3[] = "5월 25일(수)";}
				if ($_r['if_3_2']=="y") {$if_3[] = "5월 26일(목)";}
				if ($_r['if_3_3']=="y") {$if_3[] = "5월 27일(금)";}

				echo implode("<br>",$if_3);
			?>
		</td>
		<th>거주 지역</th>
		<td><?php
		if ($_r['if_4'] == 11) {
			echo "기타 : ".$_r['if_4_txt'];
		} else {
			echo $ap_if_4[$_r['if_4']];
		}
		?></td>
	</tr>
	<tr>
		<th>국가</th>
		<td colspan="3"><?php 
		echo $ctr[$_r['country']];
		?></td>
	</tr>
	<tr>
		<th>선택정보 수신동의</th>
		<td><?php echo ($_r['agree_ad']=="y")?"<span class='rt_blue'>동의</span>":"미동의";?></td>
		<th>수신동의 수단</th>
		<td><?php
			echo ($_r['agree_email_en']=="y")?"이메일":"";
			echo "&nbsp;&nbsp;";
			echo ($_r['agree_sms_en']=="y")?"SMS":"";
		?></td>
	</tr>
	<tr>
		<th>신청일</th>
		<td colspan="3"><?php echo $_r['reg_date'];?></td>
	</tr>
</table>

<div class="rt_s_tit clearfix">
	<p>02<span></span></p>
	<h1>참관객 설문</h1>
</div>
<table class="rt_field_table mb10">
	<caption>신청 데이터</caption>
	<colgroup>
		<col style="width:15%"/>
		<col style="width:85%"/>
	</colgroup>
	<tr>
		<th><p>참관객 구분</p></th>
		<td><?php echo $ap_sv_1[$_r['sv_1']];?></td>
	</tr>
	<tr>
		<th><p>참관목적</p></th>
		<td>
			<?php
				if ($_r['sv_2_1']=="y") {$sv_2[] = "공공기관 및 지자체 정책 정보";}
				if ($_r['sv_2_2']=="y") {$sv_2[] = "부대행사 참여";}
				if ($_r['sv_2_3']=="y") {$sv_2[] = "업계동향파악";}
				if ($_r['sv_2_4']=="y") {$sv_2[] = "차기년도 참가검토";}
				if ($_r['sv_2_5']=="y") {$sv_2[] = "일반관람";}
				if ($_r['sv_2_6']=="y") {$sv_2[] = "정보수집 및 시장조사";}
				if ($_r['sv_2_7']=="y") {$sv_2[] = "기타";}

				echo implode("<br>",$sv_2);
			?>
		</td>
	</tr>
	<tr>
		<th><p>관심분야</p></th>
		<td>
			<?php
				if ($_r['sv_3_1']=="y") {$sv_3[] = "산업정책 및 기업지원";}
				if ($_r['sv_3_2']=="y") {$sv_3[] = "기술이전/사업화";}
				if ($_r['sv_3_3']=="y") {$sv_3[] = "금융,세제";}
				if ($_r['sv_3_4']=="y") {$sv_3[] = "탄소중립 선도기업";}
				if ($_r['sv_3_5']=="y") {$sv_3[] = "신사업";}
				if ($_r['sv_3_6']=="y") {$sv_3[] = "미래 모빌리티";}
				if ($_r['sv_3_7']=="y") {$sv_3[] = "에너지효율";}
				if ($_r['sv_3_8']=="y") {$sv_3[] = "글로벌";}
				if ($_r['sv_3_9']=="y") {$sv_3[] = "자원순환";}

				echo implode("<br>",$sv_3);
			?>
		</td>
	</tr>
	<tr>
		<th><p>인지경로</p></th>
		<td><?php echo $ap_sv_4[$_r['sv_4']];?></td>
	</tr>

</table>
</form>

<div class="rt_button_wrap rt_tar mb25">
	<a href="#;" id="" class="rt_btn_red" onclick="btn_delete('<?php echo $_r['seq']?>')">삭제하기</a>
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
			location.href = rt_path['adm']+"/application/?sd=data&cf=list&pg="+pg+schurl;
		});
	});
})(jQuery);

function btn_delete(seq) {
	if (seq) {
		if (confirm("신청서를 삭제하시겠습니까?")) {
			$("#rt_ifrm").attr("src",rt_path['adm']+"/application/data/update.php?mode=delete&seq="+seq);
		}
	} else {
		rt_alert("시스템문제로 처리되지 않았습니다");
	}
}

</script>

<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>