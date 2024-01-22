<?php if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }?>

<!-- 리스트 -->
<!-- <form name="search_form" method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="hidden" name="sd" value="<?php echo $env->_get['sd'];?>">
<input type="hidden" name="cf" value="<?php echo $env->_get['cf'];?>">
<input type="hidden" name="cate" value="<?php echo $env->_get['cate'];?>">
<div class="rt_search_wrap rt_tar">
	<select name="search">
		<option value="subject" <?php echo ($env->_get['search']=="subject")?"selected":"";?>>이름</option>
	</select>
	<input type="text" value="<?php echo $env->_get['searchstring'];?>" name="searchstring" />
	<span class="rt_button_wrap"><a href="#;" id="btn-search" class="rt_btn_gray btn_s">검색</a></span>
</div>
</form> -->


<table class="rt_list_table">
	<caption> 게시판</caption>
	<colgroup>
		<!-- <col width="3%" /> -->
		<col width="5%" />
		<col width="20%" />
		<col width="15%" />
		<col width="15%" />
		<col width="" />
		<col width="10%" />
		<col width="10%" />
	</colgroup>
	<thead>
		<tr>
			<!-- <th><p><input type="checkbox" id="select_all" /></p></th> -->
			<th><p>번호</p></th>
			<th><p>이름</p></th>
			<th><p>소속</p></th>
			<th><p>직급</p></th>
			<th><p>휴대전화</p></th>
			<th><p>등록일</p></th>
			<th><p></p></th>
		</tr>
	</thead>
	<tbody>
		<?php
		$_url = RTW_ADM."/".$__dr;
		$num = $cls_board->list_rec_cnt;
		$_l = $cls_board->get_list("seq DESC");
		if (!empty($_l)) {
			for ($i = 0; $i < count($_l); $i++) {
		?>
			<tr>
				<!-- <td><p><input type="checkbox" name="select_seq[]" class="select_post" value="<?php echo $_l[$i]['seq'];?>" /></p></td> -->
				<td><p><?php echo $num;?></p></td>
				<td><p><a href="<?php echo $_url;?>/?sd=data&cf=view&seq=<?php echo $_l[$i]['seq'];?>"><?php echo $_l[$i]['name'];?></a></p></td>
				<td><p><a href="<?php echo $_url;?>/?sd=data&cf=view&seq=<?php echo $_l[$i]['seq'];?>"><?php echo $_l[$i]['comp_name'];?></a></p></td>
				<td><p><?php echo $_l[$i]['comp_position'];?></p></td>
				<td><p><?php echo $_l[$i]['phone'];?></p></td>
				<td><p><?php echo date("Y-m-d", strtotime($_l[$i]['reg_date']));?></p></td>
				<td>
					<p class="rt_button_wrap rt_tac">
						<a href="<?php echo $_url;?>/?sd=data&cf=view&seq=<?php echo $_l[$i]['seq'];?>" class="rt_btn_blue btn_in">보기</a>
					</p>
				</td>
			</tr>
		<?php
				$num--;
			}
		} else {
		?>
			<tr>
				<td colspan="7" style="height:100px;"><p>데이터가 없습니다.</p></td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>

<div class="rt_button_wrap clearfix">
	<a href="<?php echo $__sc?>/excel.php" class="rt_btn_blue" target="rt_ifrm">엑셀다운로드</a>
	<a href="<?php echo $__sc?>/excel_2021.php" class="rt_btn_gray" target="rt_ifrm">2021 접수 DB</a>
</div>

<?php echo $cls_board->put_page_num($_SERVER['PHP_SELF'])?>

<form name="delete_form" method="post" action="<?php echo $__sc?>/update.php" method="post" target="rt_ifrm">
	<input type="hidden" name="mode" value="select_delete">
	<input type="hidden" name="seqstr" value="">
	<input type="hidden" name="pg" value="<?php echo $env->_get['pg'];?>">
	<input type="hidden" name="search" value="<?php echo $env->_get['search'];?>">
	<input type="hidden" name="searchstring" value="<?php echo $env->_get['searchstring'];?>">
</form>

<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>
