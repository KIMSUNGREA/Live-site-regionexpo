<div id="aside">
	<div class="rt_aside_bg">
		<div class="rt_aisde_arrow"><a href="#;"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_arrow.png" alt="화살표" /></a></div>
	</div>
	<ul class="rt_aside_wrap">
		<!-- <li class="rt_aside_depth1_wrap">
			<a href="http://<?php echo $rt_conf_db['domain'];?>" target="_blank" class="rt_aside_s"></a>
			<a href="http://<?php echo $rt_conf_db['domain'];?>" target="_blank" class="rt_aside_depth1 rt_font">내 홈페이지
				<span class="rt_aside_ico"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_homepage.png" alt="아이콘" /></span>
			</a>
		</li> -->
		<li class="rt_aside_first_wrap">
			<p>관리자</p>
		</li>

		<li class="rt_aside_depth1_wrap active">
			<a href="#;" class="rt_aside_s"></a>
			<a href="#;" class="rt_aside_depth1 rt_font <?php echo $__lnb_app_rtboard_on;?>">게시판 관리<span class="rt_aside_ico"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_tv.png" alt="아이콘" /></span></a>
			<div class="rt_aside_depth2_wrap">
				<?php for ($m = 0; $m < count($__left_board); $m++) { ?>
				<a href="<?php echo RTW_ADM;?>/app/?appcode=rtboard&sd=theme-<?php echo $__left_board[$m]['theme'];?>-data&bcode=<?php echo $__left_board[$m]['bcode'];?>" class="rt_aside_depth2 rt_font_s <?php echo ($__left_board[$m]['bcode'] == $env->_get['bcode'])?"class='on'":"";?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span><?php echo $__left_board[$m]['name'];?></span>
				</a>
				<?php } ?>
			</div>
		</li>
		<li class="rt_aside_depth1_wrap <?php echo $__lnb_application2_on;?>">
			<a href="#;" class="rt_aside_s"></a>
			<a href="<?php echo RTW_ADM;?>/application2/?sd=data&cf=list" class="rt_aside_depth1 rt_font <?php echo $__lnb_application2_on;?>">기업참가 신청서<span class="rt_aside_ico"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_tv.png" alt="아이콘"/></span></a>
		</li>
	</ul>
</div>