
function select_delete() {

	var form = document.delete_form;
	var seqstr = "";
	var cnt = 0;

	$(".select_post").each(function () {

		if ($(this).is(":checked") == true) {
			seqstr+= $(this).val() + "/";
			cnt++;
		}
	});

	if (cnt < 1) {
		alert("삭제할 데이터을 한 개 이상 선택해 주세요");
	} else {
		if (confirm("선택한 데이터를 삭제하시겠습니까?")) {
			form.seqstr.value = seqstr;
			form.submit();
		}
	}
}

function export_excel(bcode) {

	if (confirm("신청DB를 엑셀 파일로 받으시겠습니까?")) {
		$("#rt_ifrm").attr("src",rt_path['app']+"/theme/cu/data/export_excel.php?bcode="+bcode);
	}
}

;(function($) {
	$(function() {

		$("#select_all").click(function (){

			if ($(this).is(":checked") == true) {
				$(".select_post").attr("checked",true);
			} else {
				$(".select_post").attr("checked",false);
			}
		});

		$("#btn-search").click(function (){
			document.search_form.submit();
		});

		$("#btn-list").click(function (){
			var form = document.data_form;
			var bcode = form.bcode.value;
			var pg = form.pg.value;

			var schurl = "";
			if (form.searchstring.value != "") {
				schurl+= "&search="+form.search.value+"&searchstring="+form.searchstring.value;
			}
			location.href = rt_path['adm']+"/app/?appcode=appform&sd=theme-cu-data&bcode="+bcode+"&pg="+pg+schurl;
		});

		$("#btn-form-submit").click(function (){
			var form = document.data_form;

			if(rt_chk_form('required')){
				form.submit();
			}
		});

		$("#btn-modify").click(function (){
			var form = document.data_form;
			var bcode = form.bcode.value;
			var seq = form.seq.value;
			var pg = form.pg.value;

			var schurl = "";
			if (form.searchstring.value != "") {
				schurl+= "&search="+form.search.value+"&searchstring="+form.searchstring.value;
			}
			location.href = rt_path['adm']+"/app/?appcode=appform&sd=theme-cu-data&cf=form&bcode="+bcode+"&seq="+seq+"&pg="+pg+schurl;
		});

		$("#btn-view").click(function (){
			var form = document.data_form;
			var bcode = form.bcode.value;
			var seq = form.seq.value;
			var pg = form.pg.value;

			var schurl = "";
			if (form.searchstring.value != "") {
				schurl+= "&search="+form.search.value+"&searchstring="+form.searchstring.value;
			}
			location.href = rt_path['adm']+"/app/?appcode=appform&sd=theme-cu-data&cf=view&bcode="+bcode+"&seq="+seq+"&pg="+pg+schurl;
		});

		$("#btn-delete").click(function (){
			var form = document.data_form;
			var bcode = form.bcode.value;
			var seq = form.seq.value;
			var pg = form.pg.value;

			var schurl = "";
			if (form.searchstring.value != "") {
				schurl+= "&search="+form.search.value+"&searchstring="+form.searchstring.value;
			}

			if (confirm("이 데이터를 삭제하시겠습니까?")) {
				$("#rt_ifrm").attr("src",rt_path['app']+"/theme/cu/data/update.php?mode=delete&bcode="+bcode+"&seq="+seq+"&pg="+pg+schurl);
			}
		});

		$("#reg_date,#mod_date").datepicker({
			monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
			dateFormat: 'yy-mm-dd',
			buttonText: '달 력',
			prevText: '이전달',
			nextText: '다음달'
		});
	});
})(jQuery);