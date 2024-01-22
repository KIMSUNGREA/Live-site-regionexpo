<?php
require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";
require_once RT_ROOT."/engine.php";
?>
<!DOCTYPE html>
<html lang="ko">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="<?php echo $__pg['meta_desc'];?>">
	<meta name="keyword" content="<?php echo $__pg['meta_keyword'];?>">
	<meta name="robots" content="index">

	<!-- sns og tag-->
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo $__pg['meta_title'];?>">
	<meta property="og:description" content="<?php echo $__pg['meta_desc'];?>">
	<meta property="og:image" content="//regionexpo.kr/snsthumb.png">
	<meta property="og:url" content="//<?php echo $__pg['main_url'];?>">

	<?php echo $__pg['meta_auth_naver'];?>

	<title><?php echo $__pg['meta_title'];?></title>

	<link rel="canonical" href="//<?php echo $__pg['main_url'];?>">
	<link type="text/css" href="/@resource/css/common.css" rel="stylesheet" />
	<link type="text/css" href="/@resource/css/main.css" rel="stylesheet" />

	<link rel="shortcut icon" href="/app/page/upload/20221011004607-MQI4F.png" type="image/x-icon">
	<link rel="icon" href="/app/page/upload/20221011004607-MQI4F.png" type="image/x-icon">

	<script src="/@resource/js/lib/jquery-3.2.1.min.js"></script>
	<script src="/@resource/js/common.js"></script>
	</head>
</head>
<body>

	<div class="skip-nav">
		<a href="#content">본문 바로가기</a>
	</div>

	<div id="wrap" class="wrap main">

		<?php include_once('layout/header.php');?>

		<div id="content">
			<section class="intro">
				<div class="section-wrap">
					<div class="text-wrap">
						<h1>모두가 함께 만들어가는 <br>
						#자율 #공정 #희망의  <br>
						<strong>‘지방시대’</strong></h1>

						<div class="buttons">
							<a href="/page/s1/s3.php" class="btn bdr medium">개막행사 바로 가기 </a>
							<a href="/page/s4/s1.php" class="btn bdr medium">청년·기업 행사 바로 가기</a>
							<a href="/page/s4/s2.php" class="btn bdr medium">국민참여 행사 바로 가기</a>
						</div>
					</div>
				</div>
			</section>

			<section class="live">
				<div class="title-wrap">
					<h2 class="title">라이브 영상 X 영상관</h2>
					<p class="text">2022 대한민국 지방시대 엑스포 라이브 스트리밍 및 홍보영상</p>
				</div>
				<div class="live-wrap">
					<div class="section-wrap">
						<div class="schedule">
							<div class="item">
								<i class="ico live"></i>
								<dl>
									<dt>2022 대한민국 지방시대 엑스포 in 부산</dt>
									<dd>11/10(목) 오전 11시 개막행사</dd>
								</dl>
							</div>
							<div class="item">
								<i class="ico live"></i>
								<dl>
									<dt>2022 대한민국 지방시대 엑스포 in 부산</dt>
									<dd>11/10(목) 오전 11시 개막행사</dd>
								</dl>
							</div>
						</div>
						<div class="item-wrap">
							<!-- 라이브영상 -->
							<div class="item">
								<div class="sub-title-wrap">
									<h3>라이브 영상</h3>
									<i class="ico ing"></i>
									<span>지금은 라이브 방송중입니다.</span>
								</div>
								<!-- 비디오 영역 -->
								<div class="video large">
								    <iframe width="560" height="349" src="http://www.youtube.com/embed/AmjAkqmifJ8" frameborder="0" allowfullscreen></iframe>
								</div>

                                <!-- <div>
                                    <img src="/@resource/images/@temp/img_main_01.jpg">
                                </div> -->
								<!-- // 비디오 영역 -->
							</div>
							<!-- // 라이브영상 -->
							<!-- 영상관 -->
							<div class="item">
								<div class="sub-title-wrap">
									<h3>영상관</h3>
								</div>
								<p class="text">대한민국 모든 지역에 균등한 기회를! <br>
								영상으로 보는 공정, 자율, 희망의 지방시대</p>
								<ul class="video-list">
								<?php
								$_dm = $dbo->fetch_list("SELECT * FROM RT_RTBOARD_INFO WHERE bcode='dxmovie' ORDER BY seq DESC LIMIT 2");
								for ($m = 0; $m < count($_dm); $m++) {
									$_dm[$m]['subject'] = rt_dbstr_decode($_dm[$m]['subject']);

									$sz = unserialize(html_entity_decode($_dm[$m]['extvar']));
									?>
									<li><a href="/page/s6/s4.php">
										<!-- 비디오 영역 -->
                                        <img src="<?php echo $_dm[$m]['list_img_dir'];?><?php echo $_dm[$m]['list_img_new'];?>" style="width:192px;height:108px;">
										<!-- <div class="video small">
										  <iframe width="560" height="349" src="<?php echo $sz[2]['val'];?>" frameborder="0" allowfullscreen></iframe>
										</div> -->
										<!-- // 비디오 영역 -->
										<div class="text-wrap">
											<p class="text ellipsis-3"><?php echo $_dm[$m]['subject'];?></p>
											<div class="date"><?php echo substr($_dm[$m]['reg_date'],0,10);?></div>
										</div>
									</a></li>
									<?php
								}?>
								</ul>
								<div class="btn-area">
									<a href="/page/s6/s4.php" class="btn small bdr">영상관 더보기<i class="ico plus"></i></a>
								</div>
							</div>
							<!-- // 영상관 -->
						</div>
					</div>
				</div>
			</section>

			<!-- 전시관 & 국민참여관 -->
			<section class="exhibit">
				<div class="section-wrap">
					<div class="title-wrap">
						<h2 class="title">전시관 X 국민참여관</h2>
						<p class="text">2022 대한민국 지방시대 엑스포 전시관 및 국민참여관 소개    </p>
					</div>
					<div class="cont-wrap">
						
						<div class="item-wrap">
							<div class="sub-title-wrap">
								<h3>전시관<span>스토리 중심의 다양한 전시로 보는  지역균형발전 비전과 우리 지역의 변화</span></h3>
							</div>
							<ul class="item-list col-3">
								<li><a href="/page/s2/s2.php">
									<h4>지방시대관</h4>
									<div class="img-wrap"><img src="../@resource/images/common/img_exhibit.jpg" alt=""></div>
								</a></li>
								<li><div>
									<h4>시·도전시관</h4>
									<div class="img-wrap"><img src="../@resource/images/common/img_exhibit_2.jpg" alt=""></div>
									<ul class="place-list">
										<li><a href="/page/s2/s3.php">강원</a></li>
										<li><a href="/page/s2/s3.php">인천</a></li>
										<li><a href="/page/s2/s3.php">서울</a></li>
										<li><a href="/page/s2/s3.php">경기</a></li>
										<li><a href="/page/s2/s3.php">충북</a></li>
										<li><a href="/page/s2/s3.php">충남</a></li>
										<li><a href="/page/s2/s3.php">대전</a></li>
										<li><a href="/page/s2/s3.php">세종</a></li>
										<li><a href="/page/s2/s3.php">전북</a></li>
										<li><a href="/page/s2/s3.php">광주</a></li>
										<li><a href="/page/s2/s3.php">전남</a></li>
										<li><a href="/page/s2/s3.php">경북</a></li>
										<li><a href="/page/s2/s3.php">대구</a></li>
										<li><a href="/page/s2/s3.php">울산</a></li>
										<li><a href="/page/s2/s3.php">경남</a></li>
										<li><a href="/page/s2/s3.php">부산</a></li>
										<li><a href="/page/s2/s3.php">제주</a></li>
									</ul>
								</div></li>
								<li><a href="/page/s2/s4.php">
									<h4>특별관</h4>
									<div class="img-wrap"><img src="../@resource/images/common/img_exhibit_3.jpg" alt=""></div>
								</a></li>
							</ul>
						</div>
						<div class="item-wrap">
							<div class="sub-title-wrap">
								<h3>국민참여관<span>국민과 함께 하는 엑스포 </span></h3>
							</div>
							<ul class="item-list col-1">
								<li class="join">
									<div class="item">
										<h5>청년기업행사</h5>
										<div class="img-wrap"><img src="../@resource/images/common/img_join.jpg" alt=""></div>
										<ul class="link-wrap">
											<li><a href="javascript:void(0)">희망이음취업캠프</a></li>
											<li><a href="javascript:void(0)">희망이음-부울경 취업박람회</a></li>
											<li><a href="javascript:void(0)">청년마을 행사</a></li>
											<li><a href="javascript:void(0)">혁신도시 투자유치설명회</a></li>
										</ul>
									</div>
									<div class="item">
										<h5>국민참여행사</h5>
										<div class="img-wrap"><img src="../@resource/images/common/img_join_2.jpg" alt=""></div>
										<ul class="link-wrap">
											<li><a href="javascript:void(0)">대한민국 로컬 대축전</a></li>
											<li><a href="javascript:void(0)">고향사랑기부캠페인</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- // 전시관 & 국민참여관 -->

			<!-- 사진관 & 콘텐츠관 -->
			<section class="photo">
				<div class="section-wrap">
					<div class="item-wrap">
						<div class="title-wrap left">
							<h2 class="title">사진관</h2>
							<p class="text">2022 대한민국 지방시대 엑스포 사진관</p>
						</div>
						<ul class="item-list col-2">
						<?php
						$_dp = $dbo->fetch_list("SELECT * FROM RT_RTBOARD_INFO WHERE bcode='dxphoto' ORDER BY seq DESC LIMIT 2");
						for ($m = 0; $m < count($_dp); $m++) {
							$_dp[$m]['content'] = rt_dbstr_decode($_dp[$m]['content']);
							$cont = rt_str_length_cut(strip_tags(nl2br($_dp[$m]['content'])), 200, "..");
							?>
							<li><a href="/page/s6/s5.php?cf=view&seq=<?php echo $_dp[$m]['seq'];?>">
								<div class="img-wrap"><img src="<?php echo $_dp[$m]['list_img_dir'];?><?php echo $_dp[$m]['list_img_new'];?>" alt=""></div>
								<div class="text-wrap">
									<p class="text ellipsis-2"><?php echo $cont;?></p>
									<div class="date"><?php echo substr($_dp[$m]['reg_date'],0,10);?></div>
								</div>
							</a></li>
							<?php
						}?>
						</ul>
					</div>
					<div class="item-wrap">
						<div class="title-wrap left">
							<h2 class="title">콘텐츠관</h2>
							<p class="text">2022 대한민국 지방시대 엑스포 콘텐츠관</p>
						</div>
						<ul class="item-list col-2">
						<?php
						$_rf = $dbo->fetch_list("SELECT * FROM RT_RTBOARD_INFO WHERE bcode='reference' ORDER BY seq DESC LIMIT 2");
						for ($m = 0; $m < count($_rf); $m++) {
							$_rf[$m]['content'] = rt_dbstr_decode($_rf[$m]['content']);
							$cont = rt_str_length_cut(strip_tags(nl2br($_rf[$m]['content'])), 200, "..");
							?>
							<li><a href="/page/s6/s3.php?cf=view&seq=<?php echo $_rf[$m]['seq'];?>">
								<div class="img-wrap"><img src="<?php echo $_rf[$m]['list_img_dir'];?><?php echo $_rf[$m]['list_img_new'];?>" alt=""></div>
								<div class="text-wrap">
									<p class="text ellipsis-2"><?php echo $cont;?></p>
									<div class="date"><?php echo substr($_rf[$m]['reg_date'],0,10);?></div>
								</div>
							</a></li>
							<?php
						}?>
						</ul>
					</div>
				</div>
			</section>
			<!-- // 사진관 & 콘텐츠관 -->

			<!-- 공지사항 & 보도자료 -->
			<section class="list">
				<div class="section-wrap">
					<div class="item-wrap">
						<div class="title-wrap left">
							<h2 class="title">공지사항</h2>
							<p class="text">2022 대한민국 지방시대 엑스포 주요소식을 전해드립니다.</p>
						</div>
						<ul class="data-list">
						<!-- 7개 출력 -->
						<?php
						$_a = $dbo->fetch_list("SELECT * FROM RT_RTBOARD_INFO WHERE bcode='notice' ORDER BY seq DESC LIMIT 7");
						for ($m = 0; $m < count($_a); $m++) {
							$_a[$m]['content'] = rt_dbstr_decode($_a[$m]['content']);
							$cont = rt_str_length_cut(strip_tags(nl2br($_a[$m]['content'])), 200, "..");
							?>
							<li>
								<span class="tag medium">공지사항</span>
								<a href="/page/s6/s1.php?cf=view&seq=<?php echo $_a[$m]['seq'];?>"><?php echo $_a[$m]['subject'];?></a>
							</li>
							<?php
						}?>
						</ul>
					</div>
					<div class="item-wrap">
						<div class="title-wrap left">
							<h2 class="title">보도자료</h2>
							<p class="text">2022 대한민국 지방시대 엑스포 보도자료</p>
						</div>
						<ul class="data-list">
						<?php
						$_b = $dbo->fetch_list("SELECT * FROM RT_RTBOARD_INFO WHERE bcode='sosic' ORDER BY seq DESC LIMIT 7");
						for ($m = 0; $m < count($_b); $m++) {
							$_b[$m]['content'] = rt_dbstr_decode($_b[$m]['content']);
							$cont = rt_str_length_cut(strip_tags(nl2br($_b[$m]['content'])), 200, "..");
							?>
							<li>
								<span class="tag medium">보도자료</span>
								<a href="/page/s6/s2.php?cf=view&seq=<?php echo $_b[$m]['seq'];?>"><?php echo $_b[$m]['subject'];?></a>
							</li>
							<?php
						}?>
						</ul>
					</div>
				</div>
			</section>
			<!-- // 공지사항 & 보도자료 -->
		</div><!-- // #content -->

		<footer id="footer" class="footer">
			<div class="footer-inner">
				<div class="sponsor padding_no">
				<div class="footer_icon">
					<div class="line">
						<h5>주최</h5>
						<div class="list">
							<span><img src="../@resource/images/common/footer_img5.png" alt=""></span>
							<span><img src="../@resource/images/common/footer_img1.png" alt=""></span>
							<span><img src="../@resource/images/common/ico_s_3.jpg" alt=""></span>
							<span><img src="../@resource/images/common/ico_s_4.jpg" alt=""></span>
							<span><img src="../@resource/images/common/footer_img2.png" alt=""></span>
							<span><img src="../@resource/images/common/footer_img3.png" alt=""></span>
							<span><img src="../@resource/images/common/footer_img4.png" alt=""></span>
						</div>
					</div>
					<div class="common_list">
						<span><img src="../@resource/images/common/common_list1.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list2.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list3.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list4.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list5.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list6.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list7.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list8.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list9.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list10.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list11.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list12.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list13.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list14.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list15.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list16.png" alt=""></span>
						<span><img src="../@resource/images/common/common_list17.png" alt=""></span>
					</div>
					<div class="line">
						<h5>주관</h5>
						<div class="list">
							<span><img src="../@resource/images/common/footer_img6.png" alt=""></span>
							<span><img src="../@resource/images/common/ico_s2_2.jpg" alt=""></span>
							<span><img src="../@resource/images/common/footer_img7.png" alt=""></span>
							<span><img src="../@resource/images/common/ico_s2_3.jpg" alt=""></span>
						</div>
					</div>
				</div>				
				</div>
				<div class="bottom">
					<div class="logo"><span class="blind">2023 지방시대 엑스포</span></div>
					<div class="text-wrap">
						<address>03171 서울특별시 종로구 세종대로 209(세종로) 정부서울청사 4층</address>
						<div class="copyright">COPYRIGHT 2023 한국산업기술진흥원. ALL RIGHTS RESERVED.</div>
					</div>
				</div>	
			</div>
		</footer>
	</div><!-- // #wrap -->
</body>
</html>