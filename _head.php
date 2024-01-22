<?php
require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";
require_once RT_ROOT."/engine.php";

//페이지 환경설정
require_once RT_DOC_ROOT.$_rt_page['app_path']."/page_conf.php";
?>
<!DOCTYPE html>
<html lang="ko">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="<?php echo $__pg['meta_desc'];?>">
	<meta name="keyword" content="<?php echo $__pg['meta_keyword'];?>">
	<meta name="robots" content="index">

	<!-- sns og tag-->
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo $__pg['meta_title'];?>">
	<meta property="og:description" content="<?php echo $__pg['meta_desc'];?>">
	<meta property="og:image" content="//regionexpo.kr/app/page/upload/sns_231014.png">
	<meta property="og:url" content="//<?php echo $__pg['main_url'];?>">

	<?php echo $__pg['meta_auth_naver'];?>

	<title><?php echo $__pg['meta_title'];?></title>

	<link rel="canonical" href="//<?php echo $__pg['main_url'];?>">
	<link type="text/css" href="/@resource/css/common.css?v=<?php echo time();?>" rel="stylesheet" />
	<link type="text/css" href="/@resource/css/sub.css?v=<?php echo time();?>" rel="stylesheet" />
	<link type="text/css" href="/@resource/css/location.css?v=<?php echo time();?>" rel="stylesheet" />
	<link rel="stylesheet" href="/assets/css/board.css?v=<?php echo time();?>"/>
	<link rel="shortcut icon" href="/app/page/upload/sns_231015.png" type="image/x-icon">
	<link rel="icon" href="/app/page/upload/sns_231015.png" type="image/x-icon">

	<script src="/@resource/js/lib/jquery-3.2.1.min.js"></script>
	<script src="/@resource/js/common.js?v=<?php echo time();?>"></script>

	<script>
	//<![CDATA[
	var a_num = "<?php echo $j_a_num?>";
	var b_num = "<?php echo $j_b_num?>";
	var c_num = "<?php echo $j_c_num?>";
	var c_sub = "<?php echo $j_c_sub?>";
	//]]>
	</script>
	<!--[if lt IE 9]>
	<script src="/assets/js/html5.js"></script>
	<script src="/assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Rint-kit define S //-->
	<script>
	var rt_path = Array();
	rt_path['root'] = "/rintkit";
	rt_path['rtboard'] = "";
	rt_path['rtmember'] = "";
	</script>
	<script src="/rintkit/assets/js/common.lib.js?v=<?php echo time();?>"></script>
	<!-- Rint-kit E //-->
	</head>
</head>
<body>

	<div class="skip-nav">
		<a href="#content">본문 바로가기</a>
	</div>

	<div id="wrap" class="wrap sub">
		<?php include_once('layout/header.php');?>
		<div id="content">
