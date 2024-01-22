<?php include_once('../../_head.php');?>
<!-- 컨텐츠 박스 STR -->


<article class="board_wrap">
	<div class="w1100">
		<div class="rt-rwd-faq-wrap">
			<div class="rt-rwd-list-top">
				<p class="total">총 게시물 : 45</p>
				<!-- 검색폼 STR -->
				<div class="rt-rwd-search-wrap">
					<form name="search_form" method="get" action="">
					<input type="hidden" name="pcd" value="{페이지코드}">
					<input type="hidden" name="screen" value="{이동화면}">
						<div class="rt-rwd-search-select-wrap">
							<select class="rt-rwd-search-select" name="search">
								<option value="all">전체</option>
								<option value="subject">제목</option>
								<option value="content">내용</option>
								<option value="subjcont">제목+내용</option>
							</select>
						</div>
						<div class="rt-rwd-search-input-wrap">
							<input type="text" name="searchstring" class="rt-rwd-search-input" value=""/>
						</div>
						<a href="javascript:document.search_form.submit();" class="rt-rwd-search-send"><img src="/assets/images/sub/icon_sch.png" alt="검색" width="17"></a>
					</form>
				</div>
				<!-- 검색폼 END -->
			</div>
			<!-- 게시판 리스트 STR -->
			<div class="rt-rwd-faq-list-wrap">
				<div class="rt-rwd-list-con rt-rwd-list-con-head rt-rwd-list-norm-con clearfix">
					<div class="rt-rwd-list-subject"><p>질문</p></div>
					<div class="rt-rwd-list-type-wrap">
							<div class="rt-rwd-list-type-con clearfix">
								<div class="rt-rwd-list-type rt-rwd-list-type-file">
									<p>답변보기</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="rt-rwd-faq-list-con">
					<a href="#;" class="rt-rwd-faq-list rt-rwd-faq-list-q">
						<span class="rt-rwd-faq-ico">Q.</span>
						<div class="rt-rwd-faq-substance-q">2020년 6대 연대 산업디지털전환 결과보고 성황리 마쳐</div>
						<span class="icon_arr"></span>
					</a>
					<div class="rt-rwd-faq-list rt-rwd-faq-list-a">
						<span class="rt-rwd-faq-ico">A.</span>
						<div class="rt-rwd-faq-substance-a">
							<p>□ 뉴딜펀드는 한국판 뉴딜의 성공적 추진을 뒷받침하고, 시중 유동성을 뉴딜 등 생산적인 분야로 유도하며, 그 성과를 국민들과 공유하기 위해 조성되는 펀드로서,<br> ➊정책형 뉴딜펀드,<br> ➋뉴딜 인프라펀드,<br> ➌민간 뉴딜펀드의 3가지 축으로 구성됩니다.<br> ❶ (정책형 뉴딜펀드) 정부와 정책금융기관의 출자로 모펀드를 조성하여 투자 위험을 일부 분담하고, 민간 투자자금 매칭을 통해 자펀드를 조성하여 뉴딜 분야에 집중<br> ☞ ’21년중 정책형 뉴딜펀드 조성이 본격적으로 개시되면 재정을 통한 투자위험 분담을 바탕으로 한국판 뉴딜의 혁신적인 분야에 적극적으로 투자할 예정입니다.<br> ❷ (뉴딜 인프라펀드) 뉴딜 분야 인프라에 집중적으로 투자할 수 있도록 세제 혜택*을 제공하는 펀드입니다.<br> * 뉴딜 인프라에 일정비율 이상 투자하는 펀드에 대해, 투자금액 2억원 한도 내에서 9%의 배당소득 분리과세 적용</p>
						</div>
					</div>
				</div>
				<!-- <div class="rt-rwd-list-nosearch clearfix rt-bdb">
					등록된 글이 없습니다.
				</div> -->
			</div>
			<!-- 게시판 리스트 시작 -->
			<!-- 페이지네이션 END -->
			<div class="rt-page-index">
				<a href="/page/s6/s1.php?pg=1&amp;&amp;bcode=notice" class="prev prev-all">&lt;&lt;</a>
				<a href="/page/s6/s1.php?pg=1&amp;&amp;bcode=notice" class="prev">&lt;</a>
				<a href="#;" class="on">1</a>
				<a href="#;">2</a>
				<a href="#;">3</a>
				<a href="#;">4</a>
				<a href="#;">5</a>
				<a href="/page/s6/s1.php?pg=1&amp;&amp;bcode=notice" class="next">&gt;</a>
				<a href="/page/s6/s1.php?pg=1&amp;&amp;bcode=notice" class="next next-all">&gt;&gt;</a>
			</div>
			<!-- 페이지네이션 END -->
		</div>
	</div>
</article>
<script>
	$(function(){
		$('.rt-rwd-faq-list-q').on('click',function(e){
			e.preventDefault();
			$('.rt-rwd-faq-list-q').removeClass('active');
			if($(this).next().is(':visible')){
					$(this).next().slideUp();
			} else if($(this).next().is(':hidden')){
					$('.rt-rwd-faq-list-q').next().slideUp();
					$(this).addClass('active');
					$(this).next().slideDown();
			}
		});
	})
</script>
<!-- 컨텐츠 박스 END -->
<?php include_once('../../_tail.php');?>
