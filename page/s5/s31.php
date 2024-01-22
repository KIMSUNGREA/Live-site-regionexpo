<?php include_once('../../_head.php'); ?>
<style>
.title-wrap h2{padding: 50px 0 50px;font-size: 42px;font-weight: 700;text-align: center;}

.sub .content-header .tab-wrap{width: 100%;max-width: 1161px;display: block;justify-content: space-between;gap:1px;margin: 0 auto;margin-top: -78px;}
.sub .content-header .tab-wrap .btn.link{flex: 1 1 0;justify-content: center;align-items: center;height: 77px;padding: 0 5px;background-color: rgba(255,255,255,0.9);font-size: 24px;color: #000;font-weight: 500;text-align: center;box-sizing: border-box;width: 33%;position: relative;display: inline-block;line-height: 77px;margin: 0 -1px 1px;}


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
.table_basic td span {display: block;align-items: center;gap: 1.8em;}
.tac { text-align:center}
.black_444 {color:#444; line-height:150%;}
.blue { color:#04a7e3;}
.txt24 {font-size:24px;line-height:1.33;}
.r_title {position: relative;background-color:#3496bd;padding: 2px 0;font-size:18px;color:#fff;font-weight: 500;border-radius: 30px;width: 65px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}
.r_title1 {position: relative;background-color:#42d3e8;padding: 2px 0;font-size:18px;color:#fff;font-weight: 500;border-radius: 30px;width: 265px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}
.r_title2 {position: relative;background-color:#c1503e;padding: 2px 0;font-size:18px;color:#fff;font-weight: 500;border-radius: 30px;width: 265px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}
.r_title3 {position: relative;background-color:#0dace6;padding: 2px 0;font-size:18px;color:#fff;font-weight: 500;border-radius: 30px;width: 295px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}


.pt50 { padding-top:50px;}
.pt30 { padding-top:30px;}

.process {width: 100%;position: relative;display: inline-block;float: left;}
.process ul {text-align: center;display: inline-block;font-size:16px; width:100%;}
.process li {display: inline-block;vertical-align: top;width: 31.5%;margin: 0 15px 15px 0;padding: 50px 15px;border-radius:0%;background-color: #fdf7e3;position: relative;float: left;word-break:keep-all;/* height: 350px; */}
.process li:nth-child(2n) {background-color: #f3f8fd; z-index:1; }
.process li .txt_wrap {position: absolute; left: 0; width: 100%;  z-index: 1; color: #000; display:contents;}
.process li .txt_wrap .num {display: inline-block; line-height: 1; color:#000; padding-bottom: 10px; letter-spacing:-1px; font-weight:bold; border-bottom: 1px solid rgba(255,255,255,0.3);}
.process li .txt_wrap .txt { text-align:left; }


.process1 {width: 100%;position: relative;display: inline-block;float: left;}
.process1 ul {text-align: center;font-size: 0; font-size:16px;}
.process1 li {display: inline-block; vertical-align: top; width: 252px; height:252px; margin: 0 -15px 15px; padding: 70px 30px 0; border-radius:50%; background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; }
.process1 li:nth-child(2n) {background-color: #f3f8fd; z-index:1; }
.process1 li .txt_wrap {position: absolute; left: 0; width: 100%;  z-index: 1; color: #000; display:contents;}
.process1 li .txt_wrap .num {display: inline-block; line-height: 1; color:#000; padding-bottom: 10px; letter-spacing:-1px; font-weight:bold; border-bottom: 1px solid rgba(255,255,255,0.3);}


.square_img_wrap {}
.square_img_list {font-size: 0; margin-left: 10px;}
.square_img_list li {display: inline-block; width: 31%; margin: 0 10px 30px;  vertical-align: top; overflow: hidden;  }
.square_img_list li .square_img {position: relative; overflow: hidden;  transition:.5s;}
.square_img_list li .num {display: inline-block; width: 60px; height: 60px; background-color: #00aeb2; border-radius:50%; text-align: center; line-height: 60px; font-weight:500;  color: #fff; font-size: 22px; letter-spacing: 0; position: absolute; bottom: -26px; left: 50%; margin-left: -26px; z-index: 1;}
.square_img_list li .square_img img {width: 100%; height: 253px;}
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
	
	.process li {display: inline-block; vertical-align: top; width:45%;  margin: 0 10px 15px; padding: 45px 20px 0;  background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px;  height:150px !important;}
	.txt24 {font-size:18px;line-height:1.33;}
	
	.process1 li {display: inline-block; vertical-align: top; width: 205px; height:205px; margin: 0 -15px 15px; padding: 75px 30px 0; border-radius:50%; background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px; }
    
	.table_wrap .table_basic {overflow-x: scroll;}
    .table_wrap .table_basic table {width: 100%;min-width:760px;}
	
	.table_basic td, .table_basic th {padding: 1em 1em;height: 40px;border-bottom: 1px solid #d1d1d1;vertical-align: middle; font-size:13px;}
	.r_title {position: relative;background-color:#3496bd;padding: 2px 0;font-size:14px;color:#fff;font-weight: 500;border-radius: 30px;width: 65px;text-align: center;display: block; margin-right:10px; margin-bottom:10px;  margin-top:10px;}
    .r_title1 {position: relative;background-color:#42d3e8;padding: 2px 0;font-size:14px;color:#fff;font-weight: 500;border-radius: 30px;width: 285px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}
    .r_title2 {position: relative;background-color:#c1503e;padding: 2px 0;font-size:14px;color:#fff;font-weight: 500;border-radius: 30px;width: 265px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}
    .r_title3 {position: relative;background-color:#0dace6;padding: 2px 0;font-size:14px;color:#fff;font-weight: 500;border-radius: 30px;width: 295px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}
    .r_title4 {position: relative;background-color:#46b500;padding: 2px 0;font-size:14px;color:#fff;font-weight: 500;border-radius: 30px;width: 405px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}
    .r_title5 {position: relative;background-color:#d97f28;padding: 2px 0;font-size:14px;color:#fff;font-weight: 500;border-radius: 30px;width: 295px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}
	
	
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
	
	 .process { width:100%; margin:0 auto; padding-left:0; }
	 .process1 { width:70%; margin:0 auto; padding-left:20px; }
	 
	 .table_basic td, .table_basic .box { width:48% !important;}
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
	<div class="tab-wrap col-3" style="">
		<a href="/page/s5/s1.php" class="btn link ">지역혁신박람회</a>
		<a href="/page/s5/s2.php" class="btn link ">지역투자박람회</a>
		<a href="/page/s5/s3.php" class="btn link current">지역발전주간</a>
        <a href="/page/s5/s4.php" class="btn link">지역희망박람회</a>
		<a href="/page/s5/s5.php" class="btn link">대한민국 균형발전박람회</a>
		<a href="/page/s5/s6.php" class="btn link">대한민국 지방시대 엑스포</a>
	</div>
    <div class="tab-wrap col-3">
        
	</div>
</div>
<!-- 서브 상단 -->

<!-- 서브 본문 -->
<div class="content-primary">
    <!-- 서브 breadcrumb -->
    <section class="navigation">
        <div class="w1280"><img src="/assets/images/sub/home_ico.png" alt="home"> &nbsp; &gt; &nbsp; 역사관 &nbsp; &gt; &nbsp; <strong>지역발전주간</strong></div>
    </section>
    <!-- 서브 breadcrumb -->

    <section class="section-1">
       <div class="tabs w1200">
         <div class="inner">
            <a href="/page/s5/s3.php" class="">2010</a>
            <a href="/page/s5/s31.php" class="active">2011</a>
            <a href="/page/s5/s32.php" class="">2012</a>
        </div>
     </div>
		<div class="title-wrap">
			<h2 class="title">2011 지역발전주간</h2>
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
                                <td><span>2011.9.7.(수) ~ 9(금) / 광주 김대중컨벤션센터 </span></td>
                                <td rowspan="4"><p class="tac photo"><img src="/@resource/images/@temp/s53_2011.jpg"></p></td>
                            </tr>
                            <tr>
                                <th>슬 로 건</th>
                                <td><span class="blue" ><b>“더 큰 대한민국, 지역발전으로 이루어갑니다”</b></span></td>
                            </tr>
                            <tr>
                                <th>주 제</th>
                                <td><span class="txt24 black_444" ><b>광역경제권</b></span></td>
                            </tr>
							<tr>
                                <th>추진 목적</th>
                                <td><span class="black_444" ><b>지역발전정책에 대한 공감대를 확산하고,<br>지역산업발전의 동기 부여를 통한 지역경제 활성화 지원</b></span></td>
                            </tr>
							<tr>
                                <th>추진 체계</th>
                                 <td colspan="2" ><p class="r_title" >주 최</p><span style="display:inline-block;">지식경제부, 지역발전위원회, 16개 광역 시‧도</span><br>
                                       <p class="r_title" >주 관</p><span style="display:inline-block;">한국산업기술진흥원</span><br>
                                       <p class="r_title">참 여</p><span style="display: -webkit-inline-box;">27개 광주‧전남권 기초 지자체, KOTRA, 한국산업단지공단, 지방행정연구원, TP협의회, 전국 18개 TP, 7개 광역위원회,<br>7개 선도산업지원단, 특화산업협회(RIS, RIC, RRI), 15개 시도발전연구원, 중소기업진흥공단, 관련 학회,<br>대학 인재양성센터, 기업, 투자단체 등</span><br>

									   <p class="r_title">후 원</p><span style="display: -webkit-inline-box;">기획재정부, 행정안전부, 국토해양부, 고용노동부, 한국산업단지공단,KOTRA,수도권광역경제발전위원회,<br>충청권광역경제발전위원회,호남권광역경제발전위원회,대경권광역경제발전위원회, 동남권광역경제발전위원회,<br>강원권광역경제발전위원회,제주권광역경제발전위원회, 충청광역경제권선도산업지원단,<br>호남광역경제권선도산업지원단,대경광역경제권선도산업지원단, 동남광역경제권선도산업지원단,<br>강원광역경제권선도산업지원단,제주광역경제권선도산업지원단, 전국경제인연합회, 대한상공회의소,<br>한국무역협회,중소기업중앙회, 한국테크노파크협의회, 한국RIC협회, 한국지역특화산업협회,<br>지자체연구소협의회</span>
                                </td>
                            </tr>
							<tr>
                                <th>행사 특징</th>
                                <td colspan="2"><span style="color:#1e8dc5;"><b>지역발전정책에 대한 공감대 확산 및 지역산업발전의 동기 부여를 통한 지역경제 활성화 지원</b></span></td>
                            </tr>
                            <tr>
                                <th>주요 내용</th>
                                <td colspan="2"><span class="black_444" ><b>지역발전정책 성과 공유 및 지역상호간 벤치마킹의 장</b></span></td>
                            </tr>
                             <tr>
                                <th>행사 구성</th>
                                <td colspan="2">
                                
                                <div class="process">
                                   <ul class="tac">
					                   <li style=" height:170px;">
						                 <div class="txt_wrap">
							               <p class="num">사전행사</p>
							               <p class="txt lh15">- 희망이음 프로젝트, 지역참여상품 공모전,<br>&nbsp; 지역별 채용박람회, 성공사례 발굴</p>
						                </div>
					                 </li>
                                     <li style=" height:170px;">
						                 <div class="txt_wrap">
							               <p class="num">개막식행사</p>
							               <p class="txt lh15">- 개막식</p>
						                </div>
					                 </li>
                                     <li style="background-color:#fdf7f3; height:170px;">
						                 <div class="txt_wrap">
							               <p class="num">전시회</p>
							               <p class="txt lh15">- 정책존, 지역존, 참여존</p>
						                </div>
					                 </li>
                                     
                                     
                                      <li style=" height:170px;">
						                 <div class="txt_wrap">
							               <p class="num">컨퍼런스</p>
							               <p class="txt lh15">- 연계협력 컨퍼런스, 지역발전 컨퍼런스</p>
						                </div>
					                 </li>
                                       <li style=" height:170px;">
						                 <div class="txt_wrap">
							               <p class="num">부대행사</p>
							               <p class="txt lh15">- 투자유치설명회, 전시회 연계,<br>&nbsp; 성공사례발표회, 호남체험프로그램</p>
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
            
           <h5 class="sv4-mtit pt50">세부 내용</h5><div class="table_wrap sv41-03 no-thumb">
           <div class="table_basic">
                    <table>
						<colgroup>
							<col width="13%" />
                            <col width="87%" />
						</colgroup>
                        <tbody>
                            <tr>
                                <th style=" background-color:#fdf7e3;">개막식</th>
                                <td><span class="black_444" ><b>입장 및 국민의례, 개회사, 환영사, 주제영상 상영, 유공자포상, VIP 격려사, 퍼포먼스(“희망의 나무에 열매달기”)</b></span></td>
                            </tr>
                            <tr>
                               <th style=" background-color:#fdf7e3;">전시회</th>
                                 <td><p class="r_title1">정책존</p><span>- 지역발전정책종합관 : 지역발전정책의 역사, 지역발전정책 및 4대강 사업 성과, 공공기관 지방이전<br>
- 혁신도시관 : 10개 혁신도시의 조감도 등을 소개</span><br>
                                  <p class="r_title1">지역존</p><span>- 시도관 : 지자체 발전전략과 성과, 개발비전·프로젝트, 전략산업 및 특화사업의 내용·성과<br>
- 광역경제권 선도산업관 : 1단계 선도산업을 통한 지역기업의 글로벌 경쟁력 신장 및 2단계 선도산업의 비전</span><br>
                                   <p class="r_title1">참여존</p><span>- 산업단지관 : QWL 등 일하고 싶은 산업단지<br>
 - 채용박람회 : 지역발전선도기업 150개 기업 참가<br>
 - 지역참여상품전 : 미용, 의료, 헬스케어, 주방, 유아, 생활용품 등을 전시 (아이디어 상품관도 운영)<br>
 - 희망이음관 : 기업탐방 우수 사례 전시</span><br>  
                                       
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">컨퍼런스</th>
                                 <td>
 <div style="width: 45%;  display: inline-block; vertical-align:top;"><p class="r_title2">연계협력 및 지역 일자리 컨퍼런스</p>
                                 <span> 
- 지자체간의 연계협력과 갈등관리<br>
- 지역 일자리 창출 활성화<br>
- 지역 대학생 일자리 미스매칭 극복방안(희망이음프로젝트)</span></div>
                              <div style="width: 45%;  display: inline-block; vertical-align:top;"><p class="r_title2">지역경제 컨퍼런스</p>
                                 <span> 
- 지역산업 활성화를 위한 융합산업 육성 방안<br>
- 한반도 3대 해저터널의 타당성과 과제<br>
- 전북 RFT 산업의 동향과 발전 방향</span></div>
                                  
                                  <div style="width: 45%;  display: inline-block; vertical-align:top; padding-top:20px; "><p class="r_title2">선도산업 컨퍼런스</p>
                                 <span> 
- 해상풍력단지 개발 및 관리를 위한 한·중·일 국제 포럼<br>
- 글로벌 해양플랜트 시장진출 전략<br>
- 신약개발, 글로벌 경쟁력 확보 방안</span></div>
                                    <div style="width: 45%;  display: inline-block; vertical-align:top; padding-top:20px;"><p class="r_title2">지역특화산업 컨퍼런스</p>
                                 <span> 
- 지역경제 활성화를 위한 지역특화산업 발전 방안<br>
- 지역발전정책의 새로운 지평</span></div>

                                </td>
                            </tr>
                            
                            
                             <tr>
                                <th style=" background-color:#fdf7e3;">투자행사</th>
                                 <td><p class="r_title3">대한투자환경 설명회</p><span>- 외국인 투자가 환영 만찬, 네트워킹 오찬, 대한투자환경 설명회 및 상담회, 현장 시찰<br>
 * (현장시찰) 서울(DMC), 제주, 전북(새만금), 전남(광양FEZ) 등</span><br>
                                 <p class="r_title3">혁신도시 투자유치 합동설명회</p><span>- 클러스터 용지현황, 성장발전 여건 설명 및 투자가치 홍보, 투자기업 인센티브, 홍보 동영상 상영 등</span>

                                </td>
                            </tr>
                            
                             <tr>
                                <th style=" background-color:#fdf7e3;">성공사례<bR>발표회</th>
                                <td><span class="black_444" ><b>지자체, 지역기업, 지역특화 등 분야별 지역발전 성공사례를 발표․ 전파하여 관련기관․기업간 상호벤치마킹 기회 제공<br>
 - 광역경제권 예선(11.6~7월) 및 본선(7.13)을 통해 8개의 성공사례 선정</b><br>* 총 55점 시상(총리 9, 장관 46)</span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">지역참여<br>상품전</th>
                                <td><span style="color:#1e8dc5;"><b>이색 아이디어가 있는 생활주변의 친근한 생활용품을 상품군별로 구분․전시하고, 해외 바이어 등과의 개별상담 및 이벤트관 운영</b></span></td>
                            </tr>
                             <tr>
                                <th style=" background-color:#fdf7e3;">지역청년-우수기업<br>희망이음<br>프로젝트</th>
                                <td><span class="black_444" >16개 시․도 325개 기업 발굴 및 10,000여명 대학생 참여, 온라인 사이트 및 페이스북 구축․운영, 참가 대학생 대표 참여 발대식,<br>우수기업 탐방(314개 지역 우수기업에 대학생 4,500여명 탐방), 탐방 보고서 작성 및 우수 팀 시상</span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">유공자<bR>포상</th>
                                <td><span class="black_444" ><b>어려운 경제여건에서 지역투자 및 산업진흥을 통해 지역경제활성화와 지역발전에 기여한 유공자 격려</b><br> - 총 19점 포상</span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">개최지 특화<bR>프로그램<bR>[부대행사]</th>
                                <td><div class="process1">
                                   <ul class="tac">
					                   <li>
						                 <div class="txt_wrap">
							               <p class="num">광주 시티투어</p>
							               <p class="txt lh15">- 디자인비엔날레 관람코스<br>- 남도 코스<br>- 예향 코스</p>
						                </div>
					                 </li>
                                     <li>
						                 <div class="txt_wrap">
							               <p class="num">남도 먹거리 체험</p>
							               <p class="txt lh15">- 광주·전남 대표음식 시식<br>- 향토식품 판매</p>
						                </div>
					                 </li>
                                     <li style="background-color:#fdf7f3;">
						                 <div class="txt_wrap">
							               <p class="num">향토 문화공연</p>
							               <p class="txt lh15">- 예술팀 4팀(팀별 5~7명)이 매일 4회 공연(팀별 30분)</p>
						                </div>
					                 </li>
                                     </ul>
                                    
                                </div></td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
               </div>
               
               
               <h5 class="sv4-mtit pt50">홍보</h5><div class="table_wrap sv41-03 no-thumb">
           <div class="table_basic">
                    <table>
						<colgroup>
							<col width="13%" />
                            <col width="87%" />
						</colgroup>
                        <tbody>
                            <tr>
                                <th style="background-color:#f5fbea;">홍보 활동</th>
                                 <td ><div class="box" style="width: 48%;  display: inline-block; vertical-align:top;"><p class="r_title3">로고 제작</p><span>
 - 행사의 전체 방향 제시 및 key visual 형성</span></div>
                            <div style="width: 48%;  display: inline-block; vertical-align:top;"><p class="r_title3">온라인</p><span>
 - 홈페이지 제작 <br>
 - 뉴스레터<br><br></span></div>
 
                             <div class="box" style="width: 48%;  display: inline-block; vertical-align:top;  "><p class="r_title3">온프라인</p><span>
- 안내서 및 포스터 제작<br>
 - 개막식 초청장 및 안내서 발송<br>
 - 안내서 및 포스터 발송<br>
 - 디렉토리북<br>
 - 개막식 안내서<br>
 - 옥외광고<br>
 - 전광판<br>
 - 버스광고<br>
 - 지하철광고<br> 
 - 교통 중심지 광고판</span></div>
                               <div class="box" style="width: 48%;  display: inline-block; vertical-align:top;  "><p class="r_title3">언론</p><span>
- 보도자료<br>
 - 언론사 브리핑<br>
 - 공중파 TV 스팟 광고<br>
 - ‘공감’ 기사 기재<br>
 - 중앙지/경제지 기고<br>
 - 기획기사<br>
 - 현장 인터뷰 TV<br>
 - 공중파TV 특집 방송<br>
 - 공중파TV 행사소개 뉴스 보도<br>
 - KTV 특별 취재<br>
 - 프레스 센터 운영<br></span></div>
                                </td>
                            </tr>
                             <tr>
                                <th style="background-color:#f5fbea;">홍보 실적</th>
                                <td><span class="black_444" ><b>언론보도 총 539건(방송 39건, 지면 183건, 온라인 317건)</b></span></td>
                            </tr>
                            
                           
                        </tbody>
                    </table>
                </div>
               </div>
           
            
            
            
            <!--h5 class="sv4-mtit pt50">종합평가</h5><div class="table_wrap sv41-03 no-thumb">
                <div class="table_basic">
                    <table>
						<colgroup>
							<col width="15%" />
                            <col width="85%" />
						</colgroup>
                        <tbody>
							<tr>
                                <th>주요 성과</th>
                                <td><span class="black_444" ><b>① 단순 정책홍보를 지양하고 지역발전의 주체인 ‘지자체’가 주도적으로 참여하여 지역발전의 관심과 열기를 불어넣는 계기 마련</b><br>
&nbsp;&nbsp; - (지역주도) 전시관 및 컨퍼런스를 지자체 중심으로 구성하여 지역발전주간 본연의 취지에 맞게 지역이 국가발전의 주체임을 보여줌<br>
&nbsp;&nbsp; - (공감대 형성) 체험 및 성과 중심의 전시회, 컨퍼런스 주제의 다양화 및 전문화를 통해 대국민이 지역발전정책을 이해할 수 있는 장 마련<br>
&nbsp;&nbsp; - (참관객) 지역에서 개최되었음에도 불구하고 총 31,000여명(‘10년 25,000명 참여)의 기업인, 해외투자가, 공무원 지역민 등이 참여<br>

<b>② 지역발전주간 행사기간 이전 사전행사를 진행하여 사전붐업 및 대국민 공감대 형성 강화</b><br>
&nbsp;&nbsp; - 지역 대학생-우수기업 희망이음 프로젝트를 통하여 지역일자리 미스매칭 해소를 위한 계기 마련<br>
&nbsp;&nbsp; - 지역별 소규모 채용박람회를 개최하여 보다 실효성 있는 일자리 창출과 지역 기업구인난 해소 기여<br>
&nbsp;&nbsp; - 국민들이 실제 보고, 느끼고, 사용할 수 있는 생활용품 발굴 및 전시를 통해 지역발전주간의 관심도를 높여 정부<br> &nbsp;&nbsp; &nbsp; 지역발전정책발현의 범위를 확대할 수 있었음<br>

<b>③ 개최지역 체험프로그램 실시로 개최지역과 함께 지역발전주간 진행</b><br>
&nbsp;&nbsp; - 개최지역의 체험프로그램 진행으로 지역민 참여를 높이고 지역발전주간 참여자가 개최지역을 이해 할 수 있는 계기 마련</b></span></td>
                            </tr>
                            <tr>
                                <th>개선점 및<bR>향후 추진 방향</th>
                                <td><span class="black_444" ><b>① (지역주도) ‘지자체’의 주도적 참여 및 스스로 기획을 통해 지역 및 지역산업 중심 행사의 내실화<br>
② (지역정책 종합) 정부 지역정책의 종합적인 성과 보고 및 성공사례 발굴․확산, 유공자 격려<br>
③ (위상제고) 지역정책을 수행하는 전 부처와 관련기관, 지자체 그리고 학계 등 전문가들이 참여하는 유일한 행사로 자리매김</b></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div-->
            
            
            <h5 class="sv4-mtit pt50">미디어 콘텐츠 아카이빙</h5>
                <div class="s_tab4">
                  <li class="active">사진</li>
		          <!--li>카드뉴스</li>
                  <li>영상</li-->
	           </div>
               <ul class="square_img_list pt50">
					<li class="">
						<p class="square_img"><img src="/@resource/images/2011/01.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2011/02.png"></p>
					</li>
                     <li class="">
						<p class="square_img"><img src="/@resource/images/2011/2011(1).png"></p>
					</li>
                     <li class="">
						<p class="square_img"><img src="/@resource/images/2011/2011(2).png"></p>
					</li>
                     <li class="">
						<p class="square_img"><img src="/@resource/images/2011/2011(3).png"></p>
					</li>
                     <li class="">
						<p class="square_img"><img src="/@resource/images/2011/2011(4).png"></p>
					</li>
                     <li class="">
						<p class="square_img"><img src="/@resource/images/2011/2011(5).png"></p>
					</li>
                     <li class="">
						<p class="square_img"><img src="/@resource/images/2011/2011(6).png"></p>
					</li>
                     <li class="">
						<p class="square_img"><img src="/@resource/images/2011/2011(7).png"></p>
					</li>
                     <li class="">
						<p class="square_img"><img src="/@resource/images/2011/2011(8).png"></p>
					</li>
                     <li class="">
						<p class="square_img"><img src="/@resource/images/2011/2011(9).png"></p>
					</li>
                     <li class="">
						<p class="square_img"><img src="/@resource/images/2011/2011(10).png"></p>
					</li>
                     <li class="">
						<p class="square_img"><img src="/@resource/images/2011/2011(11).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2011/2011(12).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2011/2011(13).png"></p>
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


