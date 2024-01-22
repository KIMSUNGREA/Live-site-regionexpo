//detection
function detection() {
	var getAgent = document.documentElement;
	getAgent.setAttribute("data-useragent", navigator.userAgent);
	var sBrowser, sUsrAg = navigator.userAgent;

	var resetUserAgent = function (i, classname) {
		var classes = classname.split(' ');
		var rets = [];
		for (var i = 0; i < classes.length; i++) {
			if (classes[i].indexOf('browser-') !== -1) rets.push(classes[i]);
		}
		return rets.join(' ');
	};

	if (sUsrAg.indexOf("Firefox") > -1 || sUsrAg.indexOf('FxiOS') > -1) {
		sBrowser = "browser-firefox";
	} else if (sUsrAg.indexOf("KAKAOTALK") > -1) {
		sBrowser = "browser-kakao";
	} else if (sUsrAg.indexOf("SamsungBrowser") > -1) {
		sBrowser = "browser-samsung";
	} else if (sUsrAg.indexOf("Whale") > -1) {
		sBrowser = "browser-whale";
	} else if (sUsrAg.indexOf("NAVER") > -1) {
		sBrowser = "browser-naver";
	} else if (sUsrAg.indexOf("Opera") > -1 || sUsrAg.indexOf("OPR") > -1) {
		sBrowser = "browser-opera";
	} else if (sUsrAg.indexOf("Edge") > -1 || sUsrAg.indexOf("Edg") > -1) {
		sBrowser = "browser-edge";
	} else if (sUsrAg.indexOf("Trident") > -1) {
		sBrowser = "browser-explorer";
	} else if (sUsrAg.indexOf("Chrome") > -1 || sUsrAg.indexOf('CriOS') > -1) {
		sBrowser = "browser-chrome";
	} else if (sUsrAg.indexOf("Safari") > -1) {
		sBrowser = "browser-safari";
	} else if (sUsrAg.indexOf("Instagram") > -1) {
		sBrowser = "browser-instagram";
	}

	$('html').removeClass(resetUserAgent).addClass(sBrowser);

	var filter = "win16|win32|win64|mac|macintel";

	if (filter.indexOf(navigator.platform.toLowerCase()) > 0) {
		$('html').addClass('device-web');
		if ($('html').hasClass('device-ios, device-android')) {
			$('html').removeClass('device-ios, device-android');
		}
	} else {
		if (sUsrAg.match(/Android/i)) {
			$('html').addClass('device-android');
			if ($('html').hasClass('device-web, device-ios')) {
				$('html').removeClass('device-web, device-ios');
			}
			$('html').addClass('device-android').addClass('device-app');

		} else if (sUsrAg.match(/iPhone|iPad|iPod/i)) {
			$('html').addClass('device-ios');
			if ($('html').hasClass('device-web, device-android')) {
				$('html').removeClass('device-web, device-android');
			}
			$('html').addClass('is-ios').addClass('is-app');

			$('.input-text, textarea').bind('focus', function () {
				$('body').addClass('opened-keyboard');
			});
			$('.input-text, textarea').bind('blur', function () {
				$('body').removeClass('opened-keyboard');
			});
		}
	}
};


$(function(){
	//viewport
	detection();
	getViewports();
	nav.init();
	nav.resize();


	$(window).on("resize", function() {
		setTimeout(function () {
			detection()
		}, 50);
		getViewports();
		nav.init();
		nav.resize();
	});

	$(window).on('scroll', function () {
		nav.resize();
	});

	$(".square_img").click(function (){
		var src = $(this).find("img").eq(0).attr("src");
		var data = $(this).find("img").eq(0).attr("data");

		if (data) {
			
			$("#lay_photo_img").attr("src","/@resource/images/"+data);
		} else {
			$("#lay_photo_img").attr("src",src);
		}

		$('.photo_wrap').fadeIn();
	});
	
})
//nav
var nav = {
	gnbScrollTop: 0,
	delta: 80,
	openNav: function () {
		$('body').addClass("opened-nav");
	},

	//closeNav
	closeNav: function () {
		$('body').removeClass("opened-nav");
	},

	//init
	init: function () {

		var windowWidth = window.innerWidth;

		$(document).on('click', '.btn.menu', function () {
			if ($('body').hasClass('opened-nav')) {
				//nav.closeNav();
			} else {
				nav.openNav();
			}
		});

		$(document).on('click', '.btn.close-nav', function () {
			if ($('body').hasClass('opened-nav')) {
				nav.closeNav();
			}
		});

		if (windowWidth > 960) {

			$('body').removeClass('open-mo-nav');

			$('body').on('mouseenter focusin', '#nav > ul.gnb-list', function (e) {
				$('#header').addClass('nav-hover');
			});

			$('body').on('mouseleave', '#nav > ul.gnb-list', function (e) {
				$('#header').removeClass('nav-hover');
			});
			$('body').on('mouseenter focusin', '#nav > ul.gnb-list > li', function (e) {
				$(this).addClass('active');
			});

			$('body').on('mouseleave', '#nav > ul.gnb-list > li', function (e) {
				$(this).removeClass('active');
			});
			$('body').on('focusin', '#nav  > ul.user-util', function (e) {
				$('#header').removeClass('nav-hover');
			});
			$('body').on('focusin', '#header h1 a', function (e) {
				$('#header').removeClass('nav-hover');
			});

		} else {

			$('#header').removeClass('nav-hover');

			$('body').on('mouseenter focusin', '#nav > ul.gnb-list', function (e) {
				$('#header').removeClass('nav-hover');
			});

			$('body').on('click', '#nav a.has-depth', function (e) {
				e.stopImmediatePropagation();
				e.preventDefault();

				var moTarget = $(this).closest('li'),
					realTarget = $(this).attr('href');

				if ($(moTarget).hasClass('active')) {
					location.href = realTarget;
				} else {
					$(moTarget).addClass('active');
					$(moTarget).siblings('li').removeClass('active');
				}
			});
		}

		// 단체문의 x 클릭
		$(document).on('click', '#nav li.inquiry .btn.close', function () {
			$(this).parents('li.inquiry').addClass('hide');
		});

		if ($('#content').hasClass('purchase') == true) {
			if ($('.sticky-cont').length > 0) {
				var windowWidth = window.innerWidth;

				if (windowWidth > 960) { 
					$('.float-fixed').removeClass('gap-bottom');
				} else {
					$('.float-fixed').addClass('gap-bottom');
				}
			}
		}

	},

	//resize
	resize: function () {
		nav.headerChange();

		$(window).on("scroll", function(e) {
			var st = $(this).scrollTop();

			if (Math.abs(nav.gnbScrollTop - st) <= nav.delta) return;


			//scrollCheck
			if (st == 0) {
				$("body").addClass("scroll-zero").removeClass("scroll-has");
			} else {
				$("body").addClass("scroll-has").removeClass("scroll-zero");
			}

			//scroll up/down
			if ((st > nav.gnbScrollTop) && (nav.gnbScrollTop > 0)) {
				$("body").addClass("scroll-down").removeClass("scroll-up");
			} else {
				$("body").addClass("scroll-up").removeClass("scroll-down");
			}
			nav.gnbScrollTop = st;
		});
	},

	//headerChange
	headerChange: function () {
		var st = $(window).scrollTop(),
			$header = $("#header"),
			headerH = $header.outerHeight();

		//header Fix
		if (st > headerH) {
			$header.addClass("under-fixed");
		} else {
			$header.removeClass("under-fixed");
		}
	}
}


//getViewports
function getViewports() {
	var windowWidth = $(window).width(),
		windowHeight = $(window).height(),
		headerHeight = $('#header').height(),
		navHeight = $('#menu').height(),
		conHeight = windowHeight - navHeight - navHeight;

	if(windowWidth > 750) {
		$('html').addClass('is-desktop').removeClass('is-mobile');
	} else {
		$('html').addClass('is-mobile').removeClass('is-desktop');
	}

	if ($('html').hasClass('is-mobile')){
		if ($('#content').hasClass('splash')){
			$('#content').css({'min-height': windowHeight - headerHeight});
		} else{
			$('#content').css({'min-height': conHeight});
		}
	}
}

//input maxLengthCheck
function maxLengthCheck(obj){
	if(obj.value.length > obj.maxLength) {
		obj.value = obj.value.slice(0, object.maxLength);
	}
}
