<?php if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }?>

<?php
if ($env->_get['bcode']) {
	require_once RT_DOC_ROOT.$_def['path_app']."/theme/".$_bdinfo['theme']."/inc.common.menu.php";
}
?>

<form name="data_form" action="<?php echo $_def['path_app']."/".$__sd;?>/update.php" method="post" target="rt_ifrm">
<input type="hidden" name="mode" value="<?php echo $__cfg['mode'];?>">
<input type="hidden" name="bcode" value="<?php echo $env->_get['bcode'];?>">
<input type="hidden" name="sd" value="<?php echo $env->_get['sd'];?>">
<table class="rt_data_table">
	<caption>신청폼 연동</caption>
	<colgroup>
		<col style="width:15%"/>
		<col style="width:85%"/>
	</colgroup>
	<tbody>
		<tr>
			<th><p>신청폼 코드</p></th>
			<td>
				<?php if ($env->_get['bcode']) {?>
				<b><?php echo $_bdinfo['bcode'];?></b>
				<?php } else {?>
				<input name="bcode" class="rt_input_txt required" type="text" value="<?php echo $_bdinfo['bcode'];?>" msg="신청폼 코드를 입력해 주세요">
				<p class="rt_green">* 영문과 숫자만 사용</p>
				<?php }?>
			</td>
		</tr>
		<tr>
			<th><p>신청폼 이름</p></th>
			<td>
				<input name="name" class="rt_input_txt" type="text" value="<?php echo $_bdinfo['name'];?>" msg="신청폼 이름을 선택해 주세요">
			</td>
		</tr>
		<tr>
			<th><p>테마</p></th>
			<td class="rt_img_label">
			<?php if ($env->_get['bcode']) {?>
				<label>
					<p><?php echo $_cfg_appform_theme[$_bdinfo['theme']];?> (<?php echo $_bdinfo['theme'];?>)</p>
					<img src="<?php echo $_def['path_assets'];?>/img/thema_<?php echo $_bdinfo['theme'];?>.png" />
				</label>
			<?php } else { ?>
				<?php foreach ($_cfg_appform_theme as $k => $v) { ?>
				<label>
					<p><input type="radio" name="theme" value="<?php echo $k?>" <?php echo ($k=="cu")?"checked='checked'":""?> onclick="set_theme_skin('<?php echo $k;?>')"><?php echo $v;?> (<?php echo $k;?>)</p>
					<img src="<?php echo $_def['path_assets'];?>/img/thema_<?php echo $k;?>.png" />
				</label>
				<?php } ?>
			<?php } ?>
			</td>
		</tr>
		<tr>
			<th><p>운용 상태</p></th>
			<td>
				<p><label><input name="state" type="radio" value="on" <?php echo $state_on;?>> 사용함</label></p>
				<p><label><input name="state" type="radio" value="off" <?php echo $state_off;?>> 사용안함</label></p>
			</td>
		</tr>
	</tbody>
</table>
</form>

<div class="rt_button_wrap rt_tar">
	<?php if (empty($_bdinfo['bcode'])) {?>
	<a href="#;" id="btn-list" class="rt_btn_gray">목록 가기</a>
	<a href="#;" id="btn-form-submit" class="rt_btn_blue">새 신청폼 등록</a>
	<?php } else {?>
	<a href="#;" onclick="appform_delete('<?php echo $_bdinfo['bcode'];?>')" class="rt_btn_red">삭 제</a>
	<a href="#;" id="btn-form-submit" class="rt_btn_blue">정보 변경</a>
	<?php }?>
</div>
<br />
<div class="rt_bot_box">
	<h1>이용안내</h1>
	<p><em>-</em>신청폼 생성 시 <span class="rt_yellow">설정된 테마는 변경할 수 없습니다.</span></p>
	<p><em>-</em><span class="rt_red">신청폼 삭제 시 해당 신청폼의 모든 데이터가 삭제됩니다.</span></p>
</div>

<script src="<?php echo $_def['path_section'];?>/js/appform.admin.board.js" type="text/javascript"></script>

<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>