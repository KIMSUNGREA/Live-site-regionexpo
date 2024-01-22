<?php if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }?>

<?php
if ($env->_get['bcode']) {
	require_once RT_DOC_ROOT.$_def['path_app']."/theme/".$_bdinfo['theme']."/inc.common.menu.php";
}
?>

<!-- 리스트 -->
<form name="search_form" method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="hidden" name="appcode" value="<?php echo $env->_get['appcode'];?>">
<input type="hidden" name="sd" value="<?php echo $env->_get['sd'];?>">
<input type="hidden" name="bcode" value="<?php echo $env->_get['bcode'];?>">
<div class="rt_search_wrap rt_tar">
	<div class="rt_button_wrap rt_fll">
		<a href="javascript:export_excel('<?php echo $env->_get['bcode'];?>')" class="rt_btn_purple btn_s">엑셀 다운로드</a>
	</div>
	<select name="search">
		<option value="name" <?php echo ($env->_get['search']=="name")?"selected":"";?>>신청자명</option>
		<option value="phone" <?php echo ($env->_get['search']=="phone")?"selected":"";?>>휴대폰</option>
	</select>
	<input type="text" value="<?php echo $env->_get['searchstring'];?>" name="searchstring" />
	<span class="rt_button_wrap"><a href="#;" id="btn-search" class="rt_btn_gray btn_s">검색</a></span>
</div>
</form>

<table class="rt_list_table">
	<caption> 게시판</caption>
	<colgroup>
		<col width="5%" />
		<col width="10%" />
		<col width="70%" />
		<col width="15%" />
	</colgroup>
	<thead>
		<tr>
			<th><p><input type="checkbox" name="" id="select_all" /></p></th>
			<th><p>번호</p></th>
			<th><p>이메일</p></th>
			<!-- <th><p>휴대폰</p></th>
			<th><p>문자발송</p></th> -->
			<th><p>등록일</p></th>
		</tr>
	</thead>
	<tbody>
		<?php
		if (!empty($_l)) {
			for ($i = 0; $i < count($_l); $i++) {
		?>
		<tr>
			<td><p><input type="checkbox" name="select_seq[]" class="select_post" value="<?php echo $_l[$i]['seq'];?>" /></td>
			<td><p><?php echo $_l[$i]['no'];?></td>
			<!-- <td>
				<p>
					<a href="<?php echo $_l[$i]['viewpage'];?>"><?php echo $_l[$i]['name'];?></a>
					<?php echo $_l[$i]['file'];?> <?php echo $_l[$i]['new'];?>
				</p>
			</td> -->
			<td class="rt_tal"><?php echo $_l[$i]['email'];?></td>
			<!-- <td>
				<?php if ($_l[$i]['phone']) {?>
				<p class="rt_button_wrap rt_tac">
					<a href="javascript:rt_win_open('<?php echo RTW_ADM;?>/sms/?smsnum=<?php echo $_l[$i]['phone'];?>', '850', '900');" class="rt_btn_orange btn_in" style="height:20px;font-size:10px;padding:4px 13px;margin-top:3px;">SMS</a>
				</p>
				<?php } ?>
			</td> -->
			<td><?php echo $_l[$i]['reg_date'];?></td>
		</tr>
		<?php
			}
		} else {
		?>
		<tr>
			<td colspan="4" style="height:100px;"><p>데이터가 없습니다.</p></td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>

<div class="rt_button_wrap clearfix">
	<a href="javascript:select_delete();" class="rt_btn_red">선택삭제</a>
	<div class="rt_flr">
		<a href="<?php echo RTW_ADM?>/app/?appcode=appform&sd=theme-cu-data&cf=form&bcode=<?php echo $env->_get['bcode'];?>" class="rt_btn_blue">수기 등록</a>
	</div>
</div>

<?php echo $cls_board->put_page_num($_SERVER['PHP_SELF'])?>

<form name="delete_form" method="post" action="<?php echo $_def['path_app'];?>/<?php echo $__sd;?>/update.php" method="post" target="rt_ifrm">
	<input type="hidden" name="mode" value="select_delete">
	<input type="hidden" name="seqstr" value="">
	<input type="hidden" name="pg" value="<?php echo $env->_get['pg'];?>">
	<input type="hidden" name="search" value="<?php echo $env->_get['search'];?>">
	<input type="hidden" name="searchstring" value="<?php echo $env->_get['searchstring'];?>">
</form>

<form name="move_form" method="post" action="<?php echo $_def['path_app'];?>/<?php echo $__sd;?>/update.php" method="post" target="rt_ifrm">
	<input type="hidden" name="mode" value="select_move">
	<input type="hidden" name="bcode" value="">
	<input type="hidden" name="seqstr" value="">
	<input type="hidden" name="pg" value="<?php echo $env->_get['pg'];?>">
	<input type="hidden" name="search" value="<?php echo $env->_get['search'];?>">
	<input type="hidden" name="searchstring" value="<?php echo $env->_get['searchstring'];?>">
</form>

<script src="<?php echo $_def['path_section']?>/js/appform.theme.cu.data.js" type="text/javascript"></script>

<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>