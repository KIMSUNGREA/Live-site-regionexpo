
function checklen()
{
	var msgtext, msglen;
	var i=0,l=0;
	var temp,lastl;

	msgtext = $("#tran_msg").val();
	msglen = parseInt($("#msglen").text());

	while(i < msgtext.length)
	{
		temp = msgtext.charAt(i);
		if (escape(temp).length > 4) l+=2;
		else if (temp!='\r') l++;
		if (temp=='\r' && l>79)
		{
			msgtext = msgtext.substr(0,i);
		}

		lastl = l;
		i++;
	}
	$("#msglen").text(l);

	if( l > 80) {
		alert("메시지란에 허용 길이 이상의 글을 쓰셨습니다.\n메시지란에는 한글 40자, 영문/숫자 80자까지만 쓰실 수 있습니다.");
	}
}

;(function($) {
	$(function() {

		var f = document.dataform;

		$("#btn-form-submit").click(function (){
			f.submit();
		});

		checklen();
	});
})(jQuery);