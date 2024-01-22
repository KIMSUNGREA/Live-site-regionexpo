<?php include_once('../../_head.php'); ?>
<style>
.title-wrap h2{padding: 50px 0 50px;font-size: 42px;font-weight: 700;text-align: center;}

.sub .content-header .tab-wrap{width: 100%;max-width: 1161px;display: block;justify-content: space-between;gap:1px;margin: 0 auto;margin-top: -78px;}
.sub .content-header .tab-wrap .btn.link{flex: 1 1 0;justify-content: center;align-items: center;height: 77px;padding: 0 5px;background-color: rgba(255,255,255,0.9);font-size: 24px;color: #000;font-weight: 500;text-align: center;box-sizing: border-box;width: 33%;position: relative;display: inline-block;line-height: 77px;margin: 0 -1px 1px; vertical-align:top;}


.tabs {text-align: center; z-index: 1;  position: relative; margin:0 auto; padding:70px 0 0;}
.tabs .inner { font-size:0; display: flex; justify-content: center; }
.tabs a { position:relative; font-weight: 400; align-items: center; justify-content: center; border-bottom: 1px solid transparent; display: inline-flex;/* width:25%;*/  height:25px;  font-size:24px; color: #000; transition: all 0.3s ease; margin:0 20px; border-bottom: 2px solid #fff; padding-bottom:10px; }
.tabs a::after {content: ""; background: #000; position: absolute;  right: -20px; width:2px; height:22px;  display: block;  z-index: -1;}
.tabs a:last-child:after{content:""; background: #fff;}
.tabs a.active,
.tabs a:hover{ color: #000; font-weight:500; border-bottom: 2px solid #00b5ff; padding-bottom:10px; }
.tabs.flex { display: flex; justify-content: space-between; margin:0 -10px;  }

.s_tab4 {width: 100%; padding:0 0 20px; font-size: 0; position: relative; z-index:1; left:0; border-bottom:2px solid #0dace6; }
.s_tab4 li {display: inline-block; vertical-align: top;  border-radius:60px; }
.s_tab4 li { width: 198px; text-align: center; line-height:55px; font-size: 24px; color: #444;  background-color: #f3f8fd;  border:1px solid #dddddd;  margin-right:10px; font-weight:bold;}
.s_tab4 li.active {background-color: #0dace6; color: #fff; border:1px solid #0b95c7;}

.table_basic td, .table_basic th {padding: 1.5em 2em;height: 40px;border-bottom: 1px solid #d1d1d1;vertical-align: middle;}
.table_basic td span {display: inline-flex;align-items: center;gap: 1.8em;}
.tac { text-align:center}
.black_444 {color:#444; line-height:150%;}
.blue { color:#04a7e3;}
.txt24 {font-size:24px;line-height:1.33;}
.r_title {position: relative;background-color:#3496bd;padding: 2px 0;font-size:18px;color:#fff;font-weight: 500;border-radius: 30px;width: 65px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}
.pt50 { padding-top:50px;}
.pt30 { padding-top:30px;}

.process {width: 95%;position: relative;display: inline-block;float: left;}
.process ul {text-align: center;font-size: 0; font-size:16px;}
.process li {display: inline-block; vertical-align: top; width: 272px; height:272px; margin: 0 -15px 15px; padding: 70px 30px 0; border-radius:50%; background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; }
.process li:nth-child(2n) {background-color: #f3f8fd; z-index:1; }
.process li .txt_wrap {position: absolute; left: 0; width: 100%;  z-index: 1; color: #000; display:contents;}
.process li .txt_wrap .num {display: inline-block; line-height: 1; color:#000; padding-bottom: 10px; letter-spacing:-1px; font-weight:bold; border-bottom: 1px solid rgba(255,255,255,0.3);}

.square_img_wrap {}
.square_img_list {font-size: 0; margin-left: 10px;}
.square_img_list li {display: inline-block; width: 31%; margin: 0 10px 30px;  vertical-align: top; overflow: hidden;  }
.square_img_list li .square_img {position: relative; overflow: hidden;  transition:.5s;}
.square_img_list li .num {display: inline-block; width: 60px; height: 60px; background-color: #00aeb2; border-radius:50%; text-align: center; line-height: 60px; font-weight:500;  color: #fff; font-size: 22px; letter-spacing: 0; position: absolute; bottom: -26px; left: 50%; margin-left: -26px; z-index: 1;}
.square_img_list li .square_img img {width: 100%;}
.square_img_list li .txt { font-size: 16px;  font-weight:400;  text-align: center;  padding: 15px 0 15px; color:#444; word-break:keep-all; background-color:#fff; position:relative;   }
.square_img_list li .square_img:hover  { -webkit-transform:scale(1.1); transform:scale(1.1);}


@media all and (max-width: 960px){
	.sub .content-header .tab-wrap{box-sizing: border-box; margin-top: -34px; margin-left:1px; }
    .sub .content-header .tab-wrap .btn.link{height: 55px; font-size:14px; line-height:120%; box-sizing: border-box; display:inline-table; padding-top:17px}
	
	.tabs a { position:relative; font-weight: 400; align-items: center; justify-content: center; border-bottom: 1px solid transparent; display: inline-flex;/* width:25%;*/  height:25px;  font-size:18px; color: #000; transition: all 0.3s ease; margin:0 20px; border-bottom: 2px solid #fff; padding-bottom:10px; }
	.tabs a::after {content: ""; background: #000; position: absolute;  right: -20px; width:2px; height:18px;  display: block;  z-index: -1;}
	
	.title-wrap h2{padding: 50px 0 20px;font-size: 30px;}
	.title-wrap .text{font-size: 14px;}
	
	.table_wrap {width: 100%;overflow: hidden; padding-top:30px; background:url('/@resource/images/common/bg_hand.gif') 100% 0 no-repeat;}
    .table_basic {overflow-x: scroll;}
    .table_basic table {width: 100%;min-width:760px;}
	
    .process li {display: inline-block; vertical-align: top; width: 275px; height:275px; margin: 0 -15px 15px; padding: 75px 30px 0; border-radius:50%; background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px; }
	.process li:nth-child(2n) {background-color: #f3f8fd; z-index:1; display:block; }

	.txt24 {font-size:18px;line-height:1.33;}
	
	 .table_wrap .table_basic {overflow-x: scroll;}
     .table_wrap .table_basic table {width: 100%;min-width:760px;}

	
	.table_basic td, .table_basic th {padding: 1em 1em;height: 40px;border-bottom: 1px solid #d1d1d1;vertical-align: middle; font-size:13px;}
	.r_title {position: relative;background-color:#3496bd;padding: 2px 0;font-size:14px;color:#fff;font-weight: 500;border-radius: 30px;width: 65px;text-align: center;display: block; margin-right:10px; margin-bottom:5px; margin-top:10px;}
	
	.s_tab4 {width: 100%; padding:0 0 20px; font-size: 0; position: relative; z-index:1; left:0; border-bottom:2px solid #0dace6; }
    .s_tab4 li {display: inline-block; vertical-align: top;  border-radius:60px; }
    .s_tab4 li { width: 92px; text-align: center; line-height:45px; font-size:16px; color: #444;  background-color: #f3f8fd;  border:1px solid #dddddd;  margin-right:5px; font-weight:bold;}
    .s_tab4 li.active {background-color: #0dace6; color: #fff; border:1px solid #0b95c7;}
	
    .square_img_list {font-size: 0; margin-left: 0px;}	
	.square_img_list li {display: inline-block; width:48%; margin: 0 3px 30px;  vertical-align: top;}
	
}

   
    @media all and (max-width: 760px) {
	.sub .content-header .tab-wrap{box-sizing: border-box; margin-top: -55px; margin-left:1px; }
    .sub .content-header .tab-wrap .btn.link{height: 55px; font-size:14px; line-height:120%; box-sizing: border-box; display:inline-table; padding-top:17px}
	.sub .content-header .tab-wrap .btn.link:nth-child(5n) {height: 55px; font-size:14px; line-height:120%; box-sizing: border-box; display:inline-table; padding-top:10px; position:absolute; margin-left:2px; }
	.sub .content-header .tab-wrap .btn.link:nth-child(6n) {height: 55px; font-size:14px; line-height:120%; box-sizing: border-box; display:inline-table; padding-top:10px; position:absolute; margin-left:2px; right:3px;} 
	
	 .process { width:100%; margin:0 auto; padding-left:20px; }
	 
	 .table_basic td, .table_basic .box { width:50% !important;}
	 .table_basic td, .table_basic .photo img  {  }
	 
}
    
	
	@media all and (max-width: 470px) {
	 .table_wrap.sv41-03 .table_basic table {width: 100%;min-width: 760px;}
	 .s_tab4 li { width: 85px; text-align: center; line-height:45px; font-size:14px; color: #444;  background-color: #f3f8fd;  border:1px solid #dddddd;  margin-right:5px; font-weight:bold;}
	 .square_img_list li {display: inline-block; width:100%; margin: 0 0 30px;  vertical-align: top;}
	 
	 

}

@media all and (max-width: 360px) {
	 .sub .content-header .tab-wrap .btn.link{height: 55px; font-size:14px; line-height:120%; box-sizing: border-box; display:inline-table; padding-top:17px}
	 .sub .content-header .tab-wrap .btn.link:nth-child(5n) {height: 55px; font-size:14px; line-height:120%; box-sizing: border-box; display:inline-table; padding-top:10px; position:absolute; margin-left:2px; }
	 .sub .content-header .tab-wrap .btn.link:nth-child(6n) {height: 55px; font-size:14px; line-height:120%; box-sizing: border-box; display:inline-table; padding-top:10px; position:absolute; margin-left:2px; right:2px;}

}


</style>
<!-- 서브 상단 -->
<div class="content-header s51">
	<div class="header-wrap">
		<!--h1 class="title">윤석열 정부 지역균형발전 <strong>국정과제</strong></h1-->
	</div>
	<div class="tab-wrap col-3">
		<a href="/page/s5/s1.php" class="btn link current">지역혁신박람회</a>
		<a href="/page/s5/s2.php" class="btn link">지역투자박람회</a>
		<a href="/page/s5/s3.php" class="btn link">지역발전주간</a>
        <a href="/page/s5/s4.php" class="btn link">지역희망박람회</a>
		<a href="/page/s5/s5.php" class="btn link">대한민국 균형발전박람회</a>
		<a href="/page/s5/s6.php" class="btn link">대한민국 지방시대 엑스포</a>
	</div>
</div>
<!-- 서브 상단 -->

<!-- 서브 본문 -->
<div class="content-primary">
    <!-- 서브 breadcrumb -->
    <section class="navigation">
        <div class="w1280"><img src="/assets/images/sub/home_ico.png" alt="home"> &nbsp; &gt; &nbsp; 역사관 &nbsp; &gt; &nbsp; <strong>지역혁신박람회</strong></div>
    </section>
    <!-- 서브 breadcrumb -->

    <section class="section-1">
       <div class="tabs w1200">
         <div class="inner">
            <a href="/page/s5/s1.php" class="">2004</a>
            <a href="/page/s5/s11.php" class="">2005</a>
            <a href="/page/s5/s12.php" class="">2006</a>
            <a href="/page/s5/s13.php" class="active">2007</a>
        </div>
     </div>
		<div class="title-wrap">
			<h2 class="title">2007 지역혁신박람회(제4회 대한민국 지역혁신박람회)</h2>
		</div>
        <div class="contents-wrap">
            <div class="sv51-01">
                <h5 class="sv4-mtit">행사개요</h5>
                <div class="table_wrap sv41-03 no-thumb">
                <div class="table_basic">
                    <table>
						<colgroup>
							<col width="13%" />
							<col width="*" />
                            <col width="35%" />
						</colgroup>
                        <tbody>
                            <tr>
                                <th>일시/장소</th>
                                <td><span>2007.9.17.~9.18 / 서울 COEX</span></td>
                                <td rowspan="4"><p class="tac photo"><img src="/@resource/images/@temp/s51_2007.jpg"></p></td>
                            </tr>
                            <tr>
                                <th>슬 로 건</th>
                                <td><span class="blue" ><b>지역을 넘어 세계로</b></span></td>
                            </tr>
                            <tr>
                                <th>주 제</th>
                                <td><span class="txt24 black_444" ><b>지역혁신, 지방분권</b></span></td>
                            </tr>
							<tr>
                                <th>추진 목적</th>
                                <td><span class="black_444" ><b>참여정부의 균형발전 및 지역혁신정책의 성과를<br>공유하고 향후 발전 방향을 모색</b></span></td>
                            </tr>
							<tr>
                                <th>추진 체계</th>
                                <td colspan="2"><p class="r_title">주 최</p><span>국가균형발전위원회, 산업자원부, 행정자치부</span><br>
                                       <p class="r_title">주 관</p><span>한국산업기술재단</span>
                                </td>
                            </tr>
							<tr>
                                <th>행사 특징</th>
                                <td colspan="2"><span style="color:#1e8dc5;"><b>지역주도의 권역별 행사 개최, 국제컨퍼런스를 통해 선진국의 균형발전정책과 사례 학습</b></span></td>
                            </tr>
                            <tr>
                                <th>주요 내용</th>
                                <td colspan="2"><span class="black_444" ><b>① 10개 권역 지역혁신대회 개최<br>
② 5개 분야 지역혁신우수사례 발표<br>
③ 국제컨퍼런스 및 주요정책별 지역혁신컨퍼런스 개최<br>
④ 균형발전존, 혁신도시존, 북카페 등 전시관 운영<br>
⑤ 온라인전시관 개설<br>
⑥ 지역혁신에세이 공모</b></span></td>
                            </tr>
                             <tr>
                                <th>행사 구성</th>
                                <td colspan="2">
                                
                                <div class="process">
                                   <ul class="tac">
					                   <li>
						                 <div class="txt_wrap">
							               <p class="num">개막행사</p>
							               <p class="txt lh15">개막식,<br>환영오찬</p>
						                </div>
					                 </li>
                                     <li>
						                 <div class="txt_wrap">
							               <p class="num">국제컨퍼런스</p>
							               <p class="txt lh15">컨퍼런스,<br>환영오찬, 환영만찬</p>
						                </div>
					                 </li>
                                     <li style="background-color:#fdf7f3;">
						                 <div class="txt_wrap">
							               <p class="num">균형발전정책 컨퍼런스</p>
							               <p class="txt lh15">지역전략산업 : 신활력, 누리사업,<br>혁신도시,<br>살기좋은 지역만들기</p>
						                </div>
					                 </li>
                                    </ul>
                                    <ul class="tac">
                                     <li>
						                 <div class="txt_wrap">
							               <p class="num">기타 컨퍼런스</p>
							               <p class="txt lh15">지역혁신협의회총회,<br>연구회 총회,<br>학회연합심포지엄,<br>언론기관 워크샵 등</p>
						                </div>
					                 </li>
                                     <li>
						                 <div class="txt_wrap">
							               <p class="num">성공사례발표회</p>
							               <p class="txt lh15">시상 및 발표<br>(지자체, 대학, 연구기관,<br>중소기업, RIS체계)</p>
						                </div>
					                 </li>
                                     <li style="background-color:#fdf7f3;">
						                 <div class="txt_wrap">
							               <p class="num">권역별행사</p>
							               <p class="txt lh15">개막행사, 성공사례발표회, 현안토론회,<br>성과전시회, 경진대회 등</p>
						                </div>
					                 </li>
				                    </ul>
                                </div> 
                              </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            
            
            
            <h5 class="sv4-mtit pt50">미디어 콘텐츠 아카이빙</h5>
                <div class="s_tab4">
                  <li class="active">사진</li>
		          <!--li>카드뉴스</li>
                  <li>영상</li-->
	           </div>
               <ul class="square_img_list pt50">
					<li class="">
						<p class="square_img"><img src="/@resource/images/2007/01.png"></p>
					</li>
                </ul>
                
                
            <!--    
                <div class="s_tab4 pt50">
                  <li>사진</li>
		          <li class="active">카드뉴스</li>
                  <li>영상</li>
	           </div>
               <ul class="square_img_list pt50">
					<li class="">
						<p class="square_img"><img src="/@resource/images/@temp/photo_01.jpg"></p>
                        <p class="txt tac">카드뉴스입니다.</p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/@temp/photo_01.jpg"></p>
                        <p class="txt tac">카드뉴스입니다.</p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/@temp/photo_01.jpg"></p>
                        <p class="txt tac">카드뉴스입니다.</p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/@temp/photo_01.jpg"></p>
                        <p class="txt tac">카드뉴스입니다.</p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/@temp/photo_01.jpg"></p>
                        <p class="txt tac">카드뉴스입니다.</p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/@temp/photo_01.jpg"></p>
                        <p class="txt tac">카드뉴스입니다.</p>
					</li>
                </ul>
                
                
                <div class="s_tab4 pt50">
                  <li>사진</li>
		          <li>카드뉴스</li>
                  <li class="active">영상</li>
	           </div>
               <ul class="square_img_list pt50">
					<li class="">
						<p class="square_img"><img src="/@resource/images/@temp/photo_01.jpg"></p>
                        <p class="txt tac"> 영상입니다.</p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/@temp/photo_01.jpg"></p>
                        <p class="txt tac"> 영상입니다.</p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/@temp/photo_01.jpg"></p>
                        <p class="txt tac"> 영상입니다.</p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/@temp/photo_01.jpg"></p>
                        <p class="txt tac"> 영상입니다.</p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/@temp/photo_01.jpg"></p>
                        <p class="txt tac"> 영상입니다.</p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/@temp/photo_01.jpg"></p>
                        <p class="txt tac"> 영상입니다.</p>
					</li>
                </ul>
                
                -->
                
                
                
                
                
            </div>
        </div>
	</section>
    
</div>
<!-- // 서브 본문 -->

<?php include_once('../../_tail.php');?>


