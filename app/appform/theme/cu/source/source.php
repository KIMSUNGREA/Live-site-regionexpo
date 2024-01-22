<?if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }?>

<?php
if ($env->_get['bcode']) {
	require_once RT_DOC_ROOT.$_def['path_app']."/theme/".$_bdinfo['theme']."/inc.common.menu.php";
}
?>

<div class="rt_s_tit clearfix">
	<p>01<span></span></p>
	<h1>설치 소스</h1>
</div>
<table class="rt_field_table mb10">
	<caption>폼 시작 HTML</caption>
	<colgroup>
		<col style="width:15%"/>
		<col style="width:85%"/>
	</colgroup>
	<tr>
		<th><p class="rt_red">폼 시작 태그<br />(삽입 시작)</p></th>
		<td>
			<p>
			&lt;form name="app_form_<?php echo $env->_get['bcode'];?>" method="post" action="http://<?php echo $rt_conf_db['domain']?><?php echo $_app['app_path']?>/theme/cu/user/reception-data.php" target="rt_ifrm_appform" &gt;<br />
			&lt;input type="hidden" name="mode" value="insert"&gt;<br />
			&lt;input type="hidden" name="bcode" value="<?php echo $env->_get['bcode'];?>"&gt;
			</p>
		</td>
	</tr>
	<?
	$form_cnt = count($_fset);
	if ($form_cnt > 0) {
		for ($m = 0; $m < $form_cnt; $m++) {
		?>
	<tr>
		<th><?php echo $_fset[$m]['name']?></th>
		<td>
			<div class="col-sm-12">
				<?php echo $cls_af->source_guide($_fset[$m]);?>
			</div>
		</td>
	</tr>
		<?
		}
	}?>
	<tr>
		<th><p>이용동의처리</p></th>
		<td>
			<p>
				&lt;input type="checkbox" class='require' msg="개인정보처리방침에 동의해 주세요" /&gt;
			</p>
		</td>
	</tr>
	<tr>
		<th><p class="rt_red">보내기 버튼</p></th>
		<td>
			<p>
				&lt;img src="이미지경로" id="formSubmit" /&gt;
			</p>
		</td>
	</tr>
	<tr>
		<th><p class="rt_red">폼 닫기</p></th>
		<td>
			<p>
				&lt;/form&gt;
			</p>
		</td>
	</tr>
	<tr>
		<th><p class="rt_red">Javascript<br />(마지막 삽입)</p></th>
		<td>
			<p>
				&lt;script src="http://<?php echo $rt_conf_db['domain']?><?php echo $_app['app_path']?>/theme/cu/user/js/appform.theme.cu.user.js"&gt;&lt;/script&gt;<br />
				&lt;script&gt;
				$("#formSubmit").click(function (){

					if (rt_appform_chk_form("require")) {
						var f = document.app_form_<?php echo $env->_get['bcode'];?>;
						f.submit();
						f.reset();
					}
				}).css("cursor","pointer");
				&lt;/script&gt;
			</p>
		</td>
	</tr>
	<tr>
		<th><p class="rt_red">기타 소스<br />(최하단 삽입)</p></th>
		<td>
			<p>
				&lt;iframe name="rt_ifrm_appform" id="rt_ifrm_appform" style="display:none;"&gt;&lt;/iframe&gt;
			</p>
		</td>
	</tr>
</table>



<br />
<div class="rt_bot_box">
	<h1>이용 안내</h1>
	<p><em>-</em>폼 필드의 name, require 설정 외 <span class="rt_mint">디자인적 CSS 요소는 자유롭게 수정</span>하셔도 됩니다.</p>
	<p><em>-</em><span class="rt_red">붉은 필드명</span>은 수정 시 <span class="rt_yellow">오작동</span>을 일으킬 수 있으니 주의해 주세요.</p>
	<p><em>-</em>위 HTML 소스는 <span class="rt_mint">폼필드관리 메뉴에서 적용한 데이터가 반영</span>된 소스입니다. </p>
</div>

<script src="<?php echo $_def['path_section']?>/js/appform.admin.alarm.js" type="text/javascript"></script>

<iframe name="rt_appform_ifrm" id="rt_appform_ifrm" style="width:100%;height:700px;display:none;"></iframe>