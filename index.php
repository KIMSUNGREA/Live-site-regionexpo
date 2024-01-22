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
	<meta property="og:image" content="//regionexpo.kr/app/page/upload/sns_231014.png">
	<meta property="og:url" content="//<?php echo $__pg['main_url'];?>">

	<?php echo $__pg['meta_auth_naver'];?>

	<title><?php echo $__pg['meta_title'];?></title>

	<link rel="canonical" href="//<?php echo $__pg['main_url'];?>">
	<link type="text/css" href="/@resource/css/lib/swiper.min.css" rel="stylesheet" />
	<link type="text/css" href="/@resource/css/common.css?v=<?php echo time();?>" rel="stylesheet" />
	<link type="text/css" href="/@resource/css/main.css?v=<?php echo time();?>" rel="stylesheet" />

	<link rel="shortcut icon" href="/app/page/upload/sns_231015.png" type="image/x-icon">
	<link rel="icon" href="/app/page/upload/sns_231015.png" type="image/x-icon">

	<script src="/@resource/js/lib/jquery-3.2.1.min.js"></script>
	<script src="/@resource/js/lib/swiper-bundle.js"></script>
	<script src="/@resource/js/common.js?v=<?php echo time();?>"></script>

	<!-- Rint-kit define S //-->
	<script>
	var rt_path = Array();
	rt_path['root'] = "<?php echo RTW_ROOT?>";
	rt_path['rtboard'] = "<?php echo $_rt_rtboard['app_path']?>";
	rt_path['rtmember'] = "<?php echo $_rt_rtmember['app_path']?>";
	</script>
	<script src="<?php echo RTW_ASSETS?>/js/common.lib.js?v=<?php echo time();?>"></script>

	<!-- Rint-kit E //-->
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
				<!-- Slider main container -->
				<div class="swiper-intro">
				  <!-- Additional required wrapper -->
				  <div class="swiper-wrapper">
				    <!-- Slides -->
				    <!-- <div class="swiper-slide slide-1">
				    	<span class="bg-slide"></span>
				    	<div class="section-wrap">
							<div class="text-wrap">
								<h1>            
                                                                    <strong class="slide1"><img src="../@resource/images/common/slide_bg1.png" alt=""></strong>
								    <span class="slide1"><img src="../@resource/images/common/slide_bg1_text.png" alt=""></span>
								    <p>일 시:2023.11.1(수) ~ 11.3.(금),3일간</p>
								    <p>장 소:대전광역시 대전컨벤션센터(DCC)</p>
 	 						 	    <p>온라인:www.regionexpo.kr</p>
								</h1>

								<div class="buttons">
									<a href="" class="btn bdr slide1 medium">자세히 알아보기</a>
								</div>
							</div>
						</div>
				    </div> --> <!-- // swiper-slide 1 -->
				    <div class="swiper-slide slide-2">
				    	<span class="bg-slide"></span>
				    	<div class="section-wrap">
							<div class="text-wrap">
								<h1>이제는 지방시대, <br>
									다시 뛰는 대한민국! <br>
									<strong>‘지방시대’</strong>가 옵니다
									<span><img src="../@resource/images/common/text_intro_1.png" alt=""></span>
								</h1>

								<div class="buttons">
									<a href="/page/s1/s2.php" class="btn bdr medium">대한민국 지방시대 엑스포 소개</a>
								</div>
							</div>
						</div>
				    </div>
				    <div class="swiper-slide slide-3">
				    	<span class="bg-slide"></span>
				    	<div class="section-wrap">
							<div class="text-wrap">
								<h1>‘지방시대’를 위한 <br>
								<strong>윤석열 정부의 3가지 약속, </strong> <br>
								10대 국정과제</h1>

								<div class="buttons">
									<a href="/page/s1/s1.php" class="btn bdr font_s ww medium">윤석열 정부 지역균형발전 국정과제</a>
								</div>
							</div>
						</div>
				    </div> <!-- // swiper-slide 2 -->
				    <div class="swiper-slide slide-4">
				    	<span class="bg-slide"></span>
				    	<div class="section-wrap">
							<div class="text-wrap">
								<h1>모두가 함께 만들어가는 <br>
								#자율 #공정 #희망의  <br>
								<strong>‘지방시대’</strong></h1>

								<div class="buttons">
									<a href="/page/s1/s3.php" class="btn bdr medium">기념식 바로 가기 </a>
									<a href="/page/s2/s2.php" class="btn bdr medium">전시회 바로 가기</a>
									<a href="/page/s4/s11.php" class="btn bdr medium">부대행사 바로 가기</a>
								</div>
							</div>
						</div>
				    </div> <!-- // swiper-slide 3 -->
				  </div>
					<div class="swiper-pagination"></div>
					<!-- <div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div> -->
				</div>
			</section>

			<section class="live">
				<div class="title-wrap">
					<h2 class="title">지방시대 엑스포 영상관</h2>
				</div>
				<div class="live-wrap">
					<div class="section-wrap">
						<div class="item-wrap">
							<!-- 라이브영상 -->
							<div class="item">
								<div class="sub-title-wrap">
									<h3>영상관</h3>
								</div>
								<!-- 비디오 영역 -->
								<div class="video large">
								    <iframe width="560" height="349" src="https://www.youtube.com/embed/-x8VpTYdFJY?si=U9-T9PYx-U6dwE1h" frameborder="0" allowfullscreen></iframe>
								</div>

                                <!-- <div>
                                    <img src="/@resource/images/@temp/img_main_01.jpg">
                                </div> -->
								<!-- // 비디오 영역 -->
							</div>
							<!-- // 라이브영상 -->
							<!-- 영상관 -->
							<div class="item">
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
										<div class="video small">
											<img src="<?php echo $_dm[$m]['list_img_dir'];?><?php echo $_dm[$m]['list_img_new'];?>" style="width:192px;height:108px;">
										</div>
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
						<h2 class="title">2023 지방시대 엑스포 전시관</h2>
					</div>
					<div class="cont-wrap">
						
						<div class="item-wrap">
							<div class="sub-title-wrap">
								<h3>전시관<span>스토리 중심의 다양한 전시로 보는  지역균형발전 비전과 우리 지역의 변화</span></h3>
							</div>
                                                        <ul class="item-list col-4">
                        <li class="with">
                            <a href="/page/s2/s1.php">
                                <h4>전시관 개요</h4>
                                <div class="img-wrap img-pc"><img src="../@resource/images/common/exhibition_1.png" alt=""></div>
                                <div class="img-wrap img-mo" style="background-image: url(../@resource/images/common/exhibition_1.png);"></div>
                                <div class="hover-text">
                                    2023대한미국 지방시대 엑스포<br>전시관을 한눈에!
                                </div>
                            </a>
                        </li>
                        <li class="with">
                            <a href="/page/s2/s2.php">
                                <h4>지방시대관</h4>
                                <div class="img-wrap img-pc"><img src="../@resource/images/common/exhibition_2.png" alt=""></div>
                                <div class="img-wrap img-mo" style="background-image: url(../@resource/images/common/exhibition_2.png);"></div>
                                <div class="hover-text">
                                    새로운 지방시대 4대 특구 정책사례<br>지방시대관&개최사관
                                </div>
                            </a>
                        </li>
                        <li class="with">
                            <a href="/page/s2/s3.php">
                                <h4>스토리존</h4>
                                <div class="img-wrap img-pc"><img src="../@resource/images/common/exhibition_3.png" alt=""></div>
                                <div class="img-wrap img-mo" style="background-image: url(../@resource/images/common/exhibition_3.png);"></div>
                                <div class="hover-text">
                                    일자리,첨단산업,희망<br>4개스토리, 시도관
                                </div>
                            </a>
                        </li>
                        <li class="with">
                            <a href="/page/s2/s4.php">
                                <h4>테마존</h4>
                                <div class="img-wrap img-pc"><img src="../@resource/images/common/exhibition_4.png" alt=""></div>
                                <div class="img-wrap img-mo" style="background-image: url(../@resource/images/common/exhibition_4.png);"></div>
                                <div class="hover-text">
                                    지방자치,지역인재,지역활성화를 위한<br>중앙부처 3개 테마관
                                </div>
                            </a>
                        </li>
                        <li class="with">
                            <a href="/page/s2/s5.php">
                                <h4>비즈니스관</h4>
                                <div class="img-wrap img-pc"><img src="../@resource/images/common/exhibition_5.png" alt=""></div>
                                <div class="img-wrap img-mo" style="background-image: url(../@resource/images/common/exhibition_5.png);"></div>
                                <div class="hover-text">
                                    환경,복지 등 다양한 분야의 솔루션 제시<br>비즈니스관&외투기업관
                                </div>
                            </a>
                        </li>
                        <li class="with">
                            <a href="/page/s2/s4.php">
                                <h4>특별전시</h4>
                                <div class="img-wrap img-pc"><img src="../@resource/images/common/exhibition_6.png" alt=""></div>
                                <div class="img-wrap img-mo" style="background-image: url(../@resource/images/common/exhibition_6.png);"></div>
                                <div class="hover-text">
                                    주민자치 및 지역중소기업 우수사례 및 성과<br>주민참여박람회&지역혁신기업관
                                </div>
                            </a>
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
								</div>
							</a></li>
							<?php
						}?>
						</ul>
					</div>
					<div class="item-wrap">
						<div class="title-wrap left">
							<h2 class="title">콘텐츠관</h2>
						</div>
						<ul class="item-list col-1">
							<?php
							$_rf = $dbo->fetch("SELECT * FROM RT_RTBOARD_INFO WHERE bcode='reference' ORDER BY seq DESC LIMIT 1");
							?>
							<li><a href="/page/s6/s3.php?cf=view&seq=<?php echo $_rf['seq'];?>">
								<div class="img-wrap"><img src="<?php echo $_rf['list_img_dir'];?><?php echo $_rf['list_img_new'];?>" alt=""></div>
								<div class="text-wrap">
									<p class="text ellipsis-1"><?php echo $_rf['subject'];?></p>
								</div>
							</a></li>
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
							<span><img src="../@resource/images/common/footer_img1.jpg" alt=""></span>
							<span><img src="../@resource/images/common/footer_img2.jpg" alt=""></span>
							<span><img src="../@resource/images/common/footer_img3.jpg" alt=""></span>
							<span><img src="../@resource/images/common/footer_img4.jpg" alt=""></span>
							<span><img src="../@resource/images/common/footer_img5.jpg" alt=""></span>
							<span><img src="../@resource/images/common/footer_img6.jpg" alt=""></span>
							<span><img src="../@resource/images/common/footer_img7.jpg" alt=""></span>
						</div>
					</div>
					<div class="common_list">
						<span><img src="../@resource/images/common/common_list1.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list2.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list3.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list4.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list5.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list6.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list7.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list8.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list9.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list10.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list11.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list12.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list13.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list14.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list15.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list16.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list17.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list18.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list19.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list20.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list21.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list22.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list23.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list24.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list25.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list26.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list27.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list28.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list29.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list30.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list31.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list32.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list33.jpg" alt=""></span>
						<span><img src="../@resource/images/common/common_list34.jpg" alt=""></span>
					</div>
					<div class="line">
						<h5>주관</h5>
						<div class="list jus">
							<span><img src="../@resource/images/common/footer_img8.jpg" alt=""></span>
							<span><img src="../@resource/images/common/footer_img9.jpg" alt=""></span>
							<span><img src="../@resource/images/common/footer_img10.jpg" alt=""></span>
							<span><img src="../@resource/images/common/footer_img11.jpg" alt=""></span>
						</div>
					</div>
				</div>				
				</div>
				<div class="bottom">
					<div class="logo"><span class="blind">2023 지방시대 엑스포</span></div>
					<div class="text-wrap">
						<address>06152 서울 강남구 테헤란로 305 한국기술센터 5층</address>
						<div class="copyright">COPYRIGHT 2023 한국산업기술진흥원. ALL RIGHTS RESERVED.</div>
					</div>
				</div>	
			</div>
		</footer>
	</div><!-- // #wrap -->

	<script>
	const swiper = new Swiper('.swiper-intro', {
		loop: true,
		centeredSlides: true,
		autoplay: {
			delay: 5000, // 딜레이 10초
			disableOnInteraction: false,
		},
		effect: 'fade',
		fadeEffect: {
			crossFade: true
		},
		slidesPerView: 1,
			pagination: {
				el: '.swiper-pagination',
				clickable: true
			},
			/*
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			*/
			centeredSlides: true,
			on: {
				afterInit: function () {
					var swiper = this,
						swiperId = swiper.$el,
						swiperPage = swiper.pagination.$el,
						slideTotal = swiper.slides.length;

					if (slideTotal > 2) {

						//swiperAutoplayBtn
						$(swiperPage).append(
							'<button type="button" class="btn swiper-play"><span class="blind">play</span></button>'
						);
						$('.btn.swiper-play').on('click', function (e) {
							if ($(swiperId).hasClass('swiper-paused')) {
								swiper.autoplay.start();
							} else {
								swiper.autoplay.stop();
							}
							$(swiperId).toggleClass('swiper-paused');
						});

					}
				}
			},
		});

		$(function(){
			$( ".item-list > li.with > a" )
			.mouseover(function() {
				$(this).children('.hover-text').addClass('active');
			})
			.mouseout(function() {
				$(this).children('.hover-text').removeClass('active');
			});
		});
	</script>


	<?php include_once(RT_DOC_ROOT.$_rt_popup['app_path'].'/inc.popup.php');?>
</body>
</html>