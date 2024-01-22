
function appform_delete(bcode) {
	if (bcode) {
		if (confirm("신청폼을 삭제하시겠습니까?")) {
			var form = document.data_form;
			$("#rt_ifrm").attr("src",rt_path['app']+"/admin/board/update.php?mode=delete&sd="+form.sd.value+"&bcode="+bcode);
		}
	}
}

;(function($) {
	$(function() {

		$("#btn-list").click(function (){
			location.href = rt_path['adm']+"/app/?appcode=appform&sd=admin-board";
		});

		$("#btn-form-submit").click(function (){
			var form = document.data_form;
			if(rt_chk_form('required')){
				form.submit();
			}
		});
	});
})(jQuery);