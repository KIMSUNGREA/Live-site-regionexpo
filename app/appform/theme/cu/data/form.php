<?php if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }?>

<?php
if ($env->_get['bcode']) {
	require_once RT_DOC_ROOT.$_def['path_app']."/theme/".$_bdinfo['theme']."/inc.common.menu.php";
}
?>

<form name="data_form" action="<?php echo $_def['path_app']?>/<?php echo $__sd?>/update.php" method="post" target="rt_ifrm" enctype="multipart/form-data">
<input type="hidden" name="mode" value="<?php echo $_def['mode']?>">
<input type="hidden" name="bcode" value="<?php echo $env->_get['bcode']?>">
<input type="hidden" name="seq" value="<?php echo $r['seq']?>">
<input type="hidden" name="pg" value="<?php echo $env->_get['pg']?>">
<input type="hidden" name="search" value="<?php echo $env->_get['search']?>">
<input type="hidden" name="searchstring" value="<?php echo $env->_get['searchstring']?>">

<div class="rt_s_tit clearfix">
	<p>01<span></span></p>
	<h1>기본 정보</h1>
</div>

<table class="rt_data_table">
<caption>신청 데이터</caption>
<colgroup>
	<col width="15%" />
	<col width="35%" />
	<col width="15%" />
	<col width="35%" />
</colgroup>
	<tbody>
	<tr>
		<th><p>이름</p></th>
		<td><p class="rt_fln"><input name="name" class="rt_input_txt required" type="text" value="<?php echo $r['name'];?>" msg="이름을 입력해 주세요" /></p></td>
		<th><p>휴대폰</p></th>
		<td><p class="rt_fln"><input name="phone" class="rt_input_txt" type="text" value="<?php echo $r['phone'];?>" /></p></td>
	</tr>
	<tr>
		<th><p>등록일</th>
		<td><p class="rt_fln"><input type="text" name="reg_date" id="reg_date" class="rt_input_txt rt_w250" value="<?php echo $r['reg_date'];?>" readonly /></p></td>
		<th><p>수정일</th>
		<td><p class="rt_fln"><input type="text" name="mod_date" id="mod_date" class="rt_input_txt rt_w250" value="<?php echo ($r['mod_date']=="0000-00-00 00:00:00" || empty($r['mod_date']))?"":$r['mod_date'];?>" readonly /></p></td>
	</tr>
	</tbody>
</table>

<?php if (count($_fset) > 0) { ?>
<div class="rt_s_tit clearfix">
	<p>02<span></span></p>
	<h1>추가 정보</h1>
</div>

<table class="rt_field_table mb10">
<caption>추가 정보</caption>
<colgroup>
	<col width="15%" />
	<col width="" />
</colgroup>
<tbody>
<tr>
	<th colspan="2">추가 정보</th>
</tr>
<?php for ($m = 0; $m < count($_fset); $m++) { ?>
<tr>
	<th><p><?php echo $_fset[$m]['name'];?></p></th>
	<td><p class="rt_fln"><?php echo $cls_af->formset($_fset[$m], $sz, true)?></p></td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } ?>
</form>

<div class="rt_button_wrap rt_tar mb25">
	<?php if ($_def['mode'] == "modify") {?>
	<a href="#;" id="btn-delete" class="rt_btn_red">삭제</a>
	<a href="#;" id="btn-form-submit" class="rt_btn_blue">수정</a>
	<?php } else {?>
	<a href="#;" id="btn-form-submit" class="rt_btn_blue">등록</a>
	<?php }?>
	<a href="#;" id="btn-list" class="rt_btn_gray">목록가기</a>
</div>

<script src="<?php echo $_def['path_section']?>/js/appform.theme.cu.data.js" type="text/javascript"></script>

<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>