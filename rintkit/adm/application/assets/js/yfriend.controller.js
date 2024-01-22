;(function($) {
	$(function() {

		$("#btn-list").click(function (){
			var form = document.data_form;
			var pg = form.pg.value;

			var schurl = "";
			if (form.searchstring.value != "") {
				schurl+= "&search="+form.search.value+"&searchstring="+form.searchstring.value;
			}
			location.href = rt_path['adm']+"/application/?sd=yfriends&cf=list&pg="+pg+schurl;
		});
	});
})(jQuery);

function btn_delete(seq) {
	if (seq) {
		if (confirm("정말로 삭제하시겠습니까?")) {
			$("#rt_ifrm").attr("src",rt_path['adm']+"/application/lulubilliard/update.php?mode=delete&seq="+seq);
		}
	} else {
		rt_alert("시스템문제로 처리되지 않았습니다");
	}
}
