/** 
 * 필수 필드 체크
 * 
 * 특정 클래스가 폼함된 폼요소의 유효성 체크
 */

function rt_appform_chk_form(cls) {

	var auth = true;
	var cnt = 0;
	var inputtype = "";
	var exp = "";

	$("."+cls).each(function () {

		exp = $(this).attr("exp");
		inputtype = $(this).attr("type");

		if (inputtype == "checkbox") {

			if (!$(this).is(":checked")) {
				alert($(this).attr("msg"));
				auth = false;
				return false;
			}

		} else {

			if ($(this).val()=="") {

				$(this).focus();
				alert($(this).attr("msg"));
				auth = false;
				return false;

			} else if (exp) {

				if (!rt_appform_check_exp(exp, $(this).val())) {

					alert($(this).attr("exp_msg"));
					$(this).focus();
					auth = false;
					return false;
				}
			}
		}

		cnt++;
	});
	
	return auth;
}

/**
 *  정규식 검사
 * 
 *  @param String		exp			: 체크 정규식
 *  @param String		str			: 체크 문자열
 */

function rt_appform_check_exp(exp, str) {

	var is_ret = false;
	var reg_number = /^[0-9]*$/;
	var reg_phone = /^(01[016789]{1}|02|0[3-9]{1}[0-9]{1})-?[0-9]{3,4}-?[0-9]{4}$/;
	var reg_tel = /^0\d{1,2}-\d{3,4}-\d{4}$/;
	var reg_email = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i;
	var reg_password = /^[a-z0-9_]{6,40}$/;
	var reg_special = /[\{\}\[\]\/?.,;:|\)*~`!^\-_+<>@\#$%&\\\=\(\'\"]/gi;
	var reg_ip = /^(1|2)?\d?\d([.](1|2)?\d?\d){3}$/;

	switch (exp)
	{
		case "email"		: if (reg_email.test(str)) { is_ret = true; } break;
		case "phone"		: if (reg_phone.test(str)) { is_ret = true; } break;
		case "tel"			: if (reg_tel.test(str)) { is_ret = true; } break;
		case "number"		: if (reg_number.test(str)) { is_ret = true; } break;
		case "password"		: if (reg_password.test(str)) { is_ret = true; } break;
		case "special"		: if (reg_special.test(str)) { is_ret = true; } break;
		case "ip"			: if (reg_ip.test(str)) { is_ret = true; } break;
	}

	return is_ret;
}