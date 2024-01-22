<?php if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }?>

<?php
if ($env->_get['bcode']) {
	require_once RT_DOC_ROOT.$_def['path_app']."/theme/".$_bdinfo['theme']."/inc.common.menu.php";
}
?>

<form name="data_form">
<input type="hidden" name="bcode" value="<?php echo $env->_get['bcode']?>">
<input type="hidden" name="seq" value="<?php echo $r['seq']?>">
<input type="hidden" name="pg" value="<?php echo $env->_get['pg']?>">
<input type="hidden" name="search" value="<?php echo $env->_get['search']?>">
<input type="hidden" name="searchstring" value="<?php echo $env->_get['searchstring']?>">

<div class="rt_s_tit clearfix">
	<p>01<span></span></p>
	<h1>기본 정보</h1>
</div>

<table class="rt_field_table mb10">
	<caption>신청 데이터</caption>
	<colgroup>
		<col style="width:15%"/>
		<col style="width:35%"/>
		<col style="width:15%"/>
		<col style="width:35%"/>
	</colgroup>
	<tr>
		<th><p>이름</p></th>
		<td><?php echo $r['name'];?></td>
		<th><p>휴대폰</p></th>
		<td><?php echo $r['phone'];?></td>
	</tr>
	<tr>
		<th>등록일</th>
		<td><?php echo $r['reg_date'];?></td>
		<th>수정일</th>
		<td><?php echo ($r['mod_date']=="0000-00-00 00:00:00" || empty($r['mod_date']))?"":$r['mod_date'];?></td>
	</tr>
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
	<th style="min-width:100px;"><?php echo $_fset[$m]['name'];?></th>
	<td><?php echo rt_dbstr_decode($cls_af->formset_data($_fset[$m], $sz));?></td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } ?>

<div class="rt_s_tit clearfix">
	<p>03<span></span></p>
	<h1>첨부파일</h1>
</div>

<table class="rt_field_table mb10">
<caption>첨부파일</caption>
<colgroup>
	<col width="15%" />
	<col width="" />
</colgroup>
<tbody>
<tr>
	<th colspan="2">첨부파일</th>
</tr>
<?php
$__arr = array("1"=>"정면 사진", "2"=>"45도(좌) 사진", "3"=>"45도(우) 사진", "4"=>"측면(좌) 사진", "5"=>"측면(우) 사진");
for ($m = 1; $m < 6; $m++) {
?>
<tr>
	<th style="min-width:100px;"><?php echo $__arr[$m];?></th>
	<td>
	<?php if (!empty($r['file'.$m.'_new'])) { ?>
		<img src="/app/appform/files/cu/<?php echo $r['file'.$m.'_new'];?>" style="width:200px;">
		<p class="rt_button_wrap" style="margin-top:10px;">
			<a href="<?php echo $_def['path_theme'];?>/data/download.php?mode=download&bcode=<?php echo $env->_get['bcode'];?>&seq=<?php echo $r['seq'];?>&file_num=<?php echo $m;?>" class="rt_btn_blue btn_in" >다운로드</a>
		</p>
	<?php } ?>
	</td>
</tr>
<?php } ?>
</tbody>
</table>
</form>

<div class="rt_button_wrap rt_tar mb25">
	<a href="#;" id="btn-delete" class="rt_btn_red">삭제</a>
	<a href="#;" id="btn-modify" class="rt_btn_blue">수정</a>
	<a href="#;" id="btn-list" class="rt_btn_gray">목록가기</a>
</div>

<script src="<?php echo $_def['path_section']?>/js/appform.theme.cu.data.js" type="text/javascript"></script>

<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>