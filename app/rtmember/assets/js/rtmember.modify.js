
;(function($) {
	$(function() {

		$("#btn-form-submit").click(function (){

			var f = document.modify_form;

			if (rt_chk_form('required')) {
				if ((f.user_pw.value || f.user_pw_re.value) && (f.user_pw.value != f.user_pw_re.value)) {
					rt_alert("비밀번호를 정확히 입력해 주세요");
					f.user_pw.focus();
				} else {
					f.submit();
				}
			}
		});
	});
})(jQuery);