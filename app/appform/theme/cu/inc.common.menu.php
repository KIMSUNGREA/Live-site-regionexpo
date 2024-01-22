<?php
if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }

$_tmp_sd = str_replace("-","_",$env->_get['sd']);
${"on_".$_tmp_sd} = "rt_active";

if ($cls_adm->auth_code == "master") {
	?>
<div class="rt_s_gnb">
	<a href="<?php echo RTW_ADM;?>/app/?appcode=appform&sd=admin-board" class="rt_depth1">신청폼 목록</a>
	<a href="<?php echo RTW_ADM;?>/app/?appcode=appform&sd=admin-board&cf=form&bcode=<?php echo $env->_get['bcode'];?>" class="rt_depth1 <?php echo $on_admin_board;?>">신청폼 정보</a>
	<a href="<?php echo RTW_ADM;?>/app/?appcode=appform&sd=theme-<?php echo $_bdinfo['theme'];?>-data&&bcode=<?php echo $env->_get['bcode'];?>" class="rt_depth1 <?php echo $on_theme_cu_data;?>">신청DB 관리</a>
	<a href="<?php echo RTW_ADM;?>/app/?appcode=appform&sd=admin-field&bcode=<?php echo $env->_get['bcode'];?>" class="rt_depth1 <?php echo $on_admin_field;?>">추가 필드</a>
	<a href="<?php echo RTW_ADM;?>/app/?appcode=appform&sd=theme-<?php echo $_bdinfo['theme'];?>-alarm&&bcode=<?php echo $env->_get['bcode'];?>" class="rt_depth1 <?php echo $on_theme_cu_alarm;?>">알림 설정</a>
	<a href="<?php echo RTW_ADM;?>/app/?appcode=appform&sd=theme-<?php echo $_bdinfo['theme'];?>-source&&bcode=<?php echo $env->_get['bcode'];?>" class="rt_depth1 <?php echo $on_theme_cu_source;?>">설치 소스</a>
</div>
	<?
} else {
	?>
<div class="rt_s_gnb">
	<a href="<?php echo RTW_ADM;?>/app/?appcode=appform&sd=theme-<?php echo $_bdinfo['theme'];?>-data&&bcode=<?php echo $env->_get['bcode'];?>" class="rt_depth1 <?php echo $on_theme_cu_data;?>">신청DB 관리</a>
	<a href="<?php echo RTW_ADM;?>/app/?appcode=appform&sd=theme-<?php echo $_bdinfo['theme'];?>-alarm&&bcode=<?php echo $env->_get['bcode'];?>" class="rt_depth1 <?php echo $on_theme_cu_alarm;?>">알림 설정</a>
</div>
	<?
}
?>