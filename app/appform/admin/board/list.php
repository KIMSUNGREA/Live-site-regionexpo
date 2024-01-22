<?php if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }?>

<!-- 게시판 목록 S -->
<table class="rt_list_table">
	<caption>게시판 목록</caption>
	<colgroup>
		<col style="width:5%"/>
		<col style="width:10%"/>
		<col style=""/>
		<col style="width:15%"/>
		<?php if ($cls_adm->auth_code == "master") { ?>
		<col style="width:15%"/>
		<?php } ?>
	</colgroup>
	<thead>
		<tr>
			<th><p>상태</p></th>
			<th><p>코드</p></th>
			<th><p>게시판 이름</p></th>
			<th><p>테마</p></th>
			<?php if ($cls_adm->auth_code == "master") { ?>
			<th><p>관리</p></th>
			<?php } ?>
		</tr>
	</thead>
	<tbody>
	<?php if (count($_l) > 0) { ?>
	<?php for ($m = 0; $m < count($_l); $m++) { ?>
		<tr>
			<td><?php echo ($_l[$m]['state']=="on")?"<p class='rt_blue'>ON</p>":"<p class='rt_red'>OFF</p>";?></p></td>
			<td><p><?php echo $_l[$m]['bcode'];?></p></td>
			<td class="rt_tal"><p><a href="<?php echo $default_url?>&sd=theme-<?php echo $_l[$m]['theme'];?>-data&bcode=<?php echo $_l[$m]['bcode'];?>"><?php echo $_l[$m]['name'];?></a></p></td>
			<td><p><?php echo $_cfg_appform_theme[$_l[$m]['theme']];?> (<?php echo $_l[$m]['theme'];?>)</p></td>
			<?php if ($cls_adm->auth_code == "master") { ?>
			<td>
				<p class="rt_button_wrap rt_tac">
					<a href="javascript:appform_delete('<?php echo $_l[$m]['bcode'];?>');" class="rt_btn_red btn_in">삭제</a>
					<a href="<?php echo $default_url?>&sd=<?php echo $env->_get['sd'];?>&cf=form&bcode=<?php echo $_l[$m]['bcode'];?>" class="rt_btn_blue btn_in">관리</a>
				</p>
			</td>
			<?php } ?>
		</tr>
	<?php }?>
	<?php } else { ?>
		<tr>
			<td colspan="<?php echo ($cls_adm->auth_code == "master")?"5":"4";?>" style="height:200px;">등록된 게시판이 없습니다.</td>
		</tr>
	<?php }?>
	</tbody>
</table>

<div class="rt_bot_box">
	<h1>이용안내</h1>
	<p><em>-</em>좌측메뉴의 신청폼 추가 메뉴를 이용하시면 <span class="rt_mint">신청폼을 새로 추가</span>할 수 있습니다.</p>
</div>

<form name="data_form">
	<input type="hidden" name="sd" value="<?php echo $env->_get['sd'];?>">
</form>

<script src="<?php echo $_def['path_section'];?>/js/appform.admin.board.js" type="text/javascript"></script>

<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>