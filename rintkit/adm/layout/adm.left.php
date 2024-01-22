<div id="aside">
	<div class="rt_aside_bg">
		<div class="rt_aisde_arrow"><a href="#;"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_arrow.png" alt="화살표" /></a></div>
	</div>
	<ul class="rt_aside_wrap">
		<li class="rt_aside_first_wrap">
			<p>관리자</p>
		</li>
		<li class="rt_aside_depth1_wrap <?php echo $__lnb_dashboard_on;?>">
			<a href="<?php echo RTW_ADM;?>/dashboard/?sd=dashboard" class="rt_aside_s"></a>
			<a href="<?php echo RTW_ADM;?>/dashboard/?sd=dashboard" class="rt_aside_depth1 rt_font <?php echo $__lnb_dashboard_on;?>">대시보드
				<span class="rt_aside_ico"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_home.png" alt="아이콘" /></span>
			</a>
		</li>
		<li class="rt_aside_depth1_wrap <?php echo $__lnb_account_on;?>">
			<a href="#;" class="rt_aside_s"></a>
			<a href="#;" class="rt_aside_depth1 rt_font <?php echo $__lnb_account_on;?>">계정 관리<span class="rt_aside_ico"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_people.png" alt="아이콘" /></span></a>
			<div class="rt_aside_depth2_wrap">
				<?php if ($cls_adm->auth_code == "master") { ?>
				<a href="<?php echo RTW_ADM;?>/account/?sd=master" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_account_master_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>마스터 계정 정보</span>
				</a>
				<?php } ?>
				<a href="<?php echo RTW_ADM;?>/account/?sd=account" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_account_account_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>관리자 계정 정보</span>
				</a>
			</div>
		</li>

		<?php if ($cls_adm->auth_code == "master") { ?>
		<!-- <li class="rt_aside_depth1_wrap <?php echo $__lnb_app_appform_on;?>">
			<a href="#;" class="rt_aside_s"></a>
			<a href="#;" class="rt_aside_depth1 rt_font <?php echo $__lnb_app_appform_on;?>">상담 신청 관리<span class="rt_aside_ico"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_tv.png" alt="아이콘" /></span></a>
			<div class="rt_aside_depth2_wrap">
				<a href="<?php echo RTW_ADM;?>/app/?appcode=appform&sd=admin-board" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_app_appform_admin_board_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>신청폼 리스트</span>
				</a>
				<a href="<?php echo RTW_ADM;?>/app/?appcode=appform&sd=admin-board&cf=form" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_app_appform_admin_board_form_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>신청폼 추가</span>
				</a>
			</div>
		</li> -->
		<?php } else { ?>
		<!-- <li class="rt_aside_depth1_wrap <?php echo $__lnb_app_appform_on;?>">
			<a href="#;" class="rt_aside_s"></a>
			<a href="#;" class="rt_aside_depth1 rt_font <?php echo $__lnb_app_appform_on;?>">상담 신청 관리<span class="rt_aside_ico"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_tv.png" alt="아이콘" /></span></a>
			<div class="rt_aside_depth2_wrap">
				<?php for ($m = 0; $m < count($__left_appform); $m++) { ?>
				<a href="<?php echo RTW_ADM;?>/app/?appcode=appform&sd=theme-<?php echo $__left_appform[$m]['theme'];?>-data&bcode=<?php echo $__left_appform[$m]['bcode'];?>" class="rt_aside_depth2 rt_font_s <?php echo ($__left_appform[$m]['bcode'] == $env->_get['bcode'])?"class='on'":"";?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span><?php echo $__left_appform[$m]['name'];?></span>
				</a>
				<?php } ?>
			</div>
		</li> -->
		<?php } ?>
		<?php if ($cls_adm->auth_code == "master") { ?>
		<li class="rt_aside_depth1_wrap <?php echo $__lnb_app_rtboard_on;?>">
			<a href="#;" class="rt_aside_s"></a>
			<a href="#;" class="rt_aside_depth1 rt_font <?php echo $__lnb_app_rtboard_on;?>">게시판 관리<span class="rt_aside_ico"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_tv.png" alt="아이콘" /></span></a>
			<div class="rt_aside_depth2_wrap">
				<a href="<?php echo RTW_ADM;?>/app/?appcode=rtboard&sd=admin-board" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_app_rtboard_admin_board_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>게시판 리스트</span>
				</a>
				<a href="<?php echo RTW_ADM;?>/app/?appcode=rtboard&sd=admin-board&cf=form" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_app_rtboard_admin_board_form_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>게시판 추가</span>
				</a>
				<a href="<?php echo RTW_ADM;?>/app/?appcode=rtboard&sd=admin-group" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_app_rtboard_admin_group_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>게시판 그룹 관리</span>
				</a>
				<a href="<?php echo RTW_ADM;?>/app/?appcode=rtboard&sd=admin-comment" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_app_rtboard_admin_comment_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>전체 댓글 보기</span>
				</a>
				<a href="<?php echo RTW_ADM;?>/app/?appcode=rtboard&sd=admin-formtpl" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_app_rtboard_admin_formtpl_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>글쓰기 템플릿 관리</span>
				</a>
			</div>
		</li>
		<?php } else { ?>
		<li class="rt_aside_depth1_wrap <?php echo $__lnb_app_rtboard_on;?>">
			<a href="#;" class="rt_aside_s"></a>
			<a href="#;" class="rt_aside_depth1 rt_font <?php echo $__lnb_app_rtboard_on;?>">게시판 관리<span class="rt_aside_ico"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_tv.png" alt="아이콘" /></span></a>
			<div class="rt_aside_depth2_wrap">
				<?php for ($m = 0; $m < count($__left_board); $m++) { ?>
				<a href="<?php echo RTW_ADM;?>/app/?appcode=rtboard&sd=theme-<?php echo $__left_board[$m]['theme'];?>-data&bcode=<?php echo $__left_board[$m]['bcode'];?>" class="rt_aside_depth2 rt_font_s <?php echo ($__left_board[$m]['bcode'] == $env->_get['bcode'])?"class='on'":"";?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span><?php echo $__left_board[$m]['name'];?></span>
				</a>
				<?php } ?>
				<a href="<?php echo RTW_ADM;?>/app/?appcode=rtboard&sd=admin-comment" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_app_rtboard_admin_comment_on;?>">
					<span class="rt_aside_depth2_txt" style="color:brown;"><span class="rt_dot"></span>전체 댓글 보기</span>
				</a>
				<a href="<?php echo RTW_ADM;?>/app/?appcode=rtboard&sd=admin-formtpl" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_app_rtboard_admin_formtpl_on;?>">
					<span class="rt_aside_depth2_txt" style="color:brown;"><span class="rt_dot"></span>글쓰기 템플릿 관리</span>
				</a>
			</div>
		</li>
		<?php } ?>
		<li class="rt_aside_depth1_wrap <?php echo $__lnb_page_on;?>">
			<a href="#;" class="rt_aside_s"></a>
			<a href="#;" class="rt_aside_depth1 rt_font <?php echo $__lnb_page_on;?>">페이지 관리<span class="rt_aside_ico"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_page.png" alt="아이콘" /></span></a>
			<div class="rt_aside_depth2_wrap">
				<a href="<?php echo RTW_ADM;?>/page/?sd=sitemap" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_page_sitemap_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>페이지 관리</span>
				</a>
				<a href="<?php echo RTW_ADM;?>/page/?sd=conf" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_page_conf_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>공통 환경 설정</span>
				</a>
				<?php if ($cls_adm->auth_code == "master") { ?>
				<a href="<?php echo RTW_ADM;?>/page/?sd=forward" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_page_forward_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>포워딩 환경 설정</span>
				</a>
				<a href="<?php echo RTW_ADM;?>/page/?sd=code" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_page_code_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>전체 연동 소스</span>
				</a>
				<?php } ?>
			</div>
		</li>
		<li class="rt_aside_depth1_wrap <?php echo $__lnb_content_on;?>">
			<a href="#;" class="rt_aside_s"></a>
			<a href="#;" class="rt_aside_depth1 rt_font <?php echo $__lnb_content_on;?>">디자인 콘텐츠 관리<span class="rt_aside_ico"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_bulb.png" alt="아이콘"/></span></a>
			<div class="rt_aside_depth2_wrap">
				<a href="<?php echo RTW_ADM;?>/content/?sd=content" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_content_content_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>콘텐츠 리스트</span>
				</a>
				<a href="<?php echo RTW_ADM;?>/content/?sd=group" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_content_group_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>콘텐츠 그룹 관리</span>
				</a>
			</div>
		</li>
		<li class="rt_aside_depth1_wrap <?php echo $__lnb_popup_on;?>">
			<a href="#;" class="rt_aside_s"></a>
			<a href="#;" class="rt_aside_depth1 rt_font <?php echo $__lnb_popup_on;?>">팝업 관리<span class="rt_aside_ico"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_popup.png" alt="아이콘"/></span></a>
			<div class="rt_aside_depth2_wrap">
				<a href="<?php echo RTW_ADM;?>/popup/?sd=popup&cf=list" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_popup_popup_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>팝업 관리</span>
				</a>
				<a href="<?php echo RTW_ADM;?>/popup/?sd=formtpl&cf=list" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_popup_formtpl_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>팝업 템플릿 관리</span>
				</a>
			</div>
		</li>
		<?php if ($cls_adm->auth_code == "master") { ?>
		<li class="rt_aside_depth1_wrap <?php echo $__lnb_appsetup_on;?>">
			<a href="<?php echo RTW_ADM;?>/appsetup/?sd=applist&cf=list" class="rt_aside_s"></a>
			<a href="<?php echo RTW_ADM;?>/appsetup/?sd=applist&cf=list" class="rt_aside_depth1 rt_font <?php echo $__lnb_appsetup_on;?>">APP 관리<span class="rt_aside_ico"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_app.png" alt="아이콘"/></span></a>
		</li>
		<?php } ?>
		<li class="rt_aside_depth1_wrap <?php echo $__lnb_confs_on;?>">
			<a href="#;" class="rt_aside_s"></a>
			<a href="#;" class="rt_aside_depth1 rt_font <?php echo $__lnb_confs_on;?>">환경 설정<span class="rt_aside_ico"><img src="<?php echo RTW_LAYOUT;?>/images/common/aside_set.png" alt="아이콘"/></span></a>
			<div class="rt_aside_depth2_wrap">
				<a href="<?php echo RTW_ADM;?>/company/?sd=company" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_company_company_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>회사 정보 설정</span>
				</a>
				<a href="<?php echo RTW_ADM;?>/source/?sd=source" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_source_source_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>외부 소스 관리</span>
				</a>
				<a href="<?php echo RTW_ADM;?>/ipset/" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_ipset_list_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>관리자 접속IP 관리</span>
				</a>
				<a href="<?php echo RTW_ADM;?>/gnb/?sd=gnb" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_gnb_gnb_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>관리자 상단 메뉴 설정</span>
				</a>
				<a href="<?php echo RTW_ADM;?>/config/?sd=config" class="rt_aside_depth2 rt_font_s <?php echo $__lnb_config_config_on;?>">
					<span class="rt_aside_depth2_txt"><span class="rt_dot"></span>시스템 환경 정보</span>
				</a>
			</div>
		</li>
	</ul>
</div>