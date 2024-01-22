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
.table_basic td .r_title span { display:inline-block;}

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
	
    .process li {display: inline-block; vertical-align: top; width:45%;  margin: 0 10px 15px; padding: 45px 20px 0;  background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px;  height:170px !important;}
	.txt24 {font-size:18px;line-height:1.33;}
	
	.process1 li {display: inline-block; vertical-align: top; width: 205px; height:205px; margin: 0 -15px 15px; padding: 45px 30px 0; border-radius:50%; background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px; }
    
	.table_wrap .table_basic {overflow-x: scroll;}
    .table_wrap .table_basic table {width: 100%;min-width:760px;}
	
	.table_basic td, .table_basic th {padding: 1em 1em;height: 40px;border-bottom: 1px solid #d1d1d1;vertical-align: middle; font-size:13px;}
	.r_title {position: relative;background-color:#3496bd;padding: 2px 0;font-size:14px;color:#fff;font-weight: 500;border-radius: 30px;width: 65px;text-align: center;display: block; margin-right:10px; margin-bottom:10px; margin-top:10px;}
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
            <a href="/page/s5/s31.php" class="">2011</a>
            <a href="/page/s5/s32.php" class="active">2012</a>
        </div>
     </div>
		<div class="title-wrap">
			<h2 class="title">2012 지역발전주간</h2>
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
                                <td><span>2012.9.24(월)~9.26(수) / 경남 창원컨벤션센터</span></td>
                                <td rowspan="4"><p class="tac photo"><img src="/@resource/images/@temp/s53_2012.jpg"></p></td>
                            </tr>
                            <tr>
                                <th>슬 로 건</th>
                                <td><span class="blue" ><b>지역에 희망을, 청년에게 일자리를!</b></span></td>
                            </tr>
                            <tr>
                                <th>주 제</th>
                                <td><span class="txt24 black_444" ><b>광역경제권</b></span></td>
                            </tr>
							<tr>
                                <th>추진 목적</th>
                                <td><span class="black_444" ><b>이명박 정부 5년간 지역발전정책 성과 공유와 확산을 위한<bR>공감대를 형성하고 지역주민과의 소통과 화합의 장(場) 마련</b></span></td>
                            </tr>
							<tr>
                                <th>추진 체계</th>
                                <td colspan="2" ><p class="r_title" >주 최</p><span style="display:inline-block;">17개 시·도, 지식경제부, 지역발전위원회</span><br>
                                       <p class="r_title">주 관</p><span style="display:inline-block;">한국산업기술진흥원</span><br>
									   <p class="r_title">후 원</p><span style="display: -webkit-inline-box;">기획재정부, 행정안전부, 국토해양부, 고용노동부, 한국산업단지공단,KOTRA,수도권광역경제발전위원회,<br>충청권광역경제발전위원회,호남권광역경제발전위원회,대경권광역경제발전위원회, 동남권광역경제발전위원회,<br>강원권광역경제발전위원회,제주권광역경제발전위원회, 충청광역경제권선도산업지원단,<br>호남광역경제권선도산업지원단,대경광역경제권선도산업지원단, 동남광역경제권선도산업지원단,<br>강원광역경제권선도산업지원단,제주광역경제권선도산업지원단, 전국경제인연합회, 대한상공회의소,<br>한국무역협회,중소기업중앙회, 한국테크노파크협의회, 한국RIC협회, 한국지역특화산업협회,<br>지자체연구소협의회</span>
                                </td>
                            </tr>
							<tr>
                                <th>행사 특징</th>
                                <td colspan="2"><span style="color:#1e8dc5;"><b>이명박 정부 5년간의 지역발전정책 성과 공유/확산, 지역주민의 공감대 형성을 위한 소통과 화합의 장 마련</b></span></td>
                            </tr>
                            <tr>
                                <th>주요 내용</th>
                                <td colspan="2"><span class="black_444" ><b>전국적 Boom-up 조성을 위한 지역별 사전행사, 개막식 및 전시회 등 본 행사와 다양한 부대행사로 구성</b></span></td>
                            </tr>
                             <tr>
                                <th>행사 구성</th>
                                <td colspan="2">
                                
                                <div class="process">
                                   <ul class="tac">
					                   <li style=" height:190px;">
						                 <div class="txt_wrap">
							               <p class="num">사전행사</p>
							               <p class="txt lh15">- 희망이음 프로젝트, 지역발전 UCC<br>&nbsp; 공모전, 지역별 일자리박람회,<br>&nbsp; 희망이음 자전거길 국토 대장정</p>
						                </div>
					                 </li>
                                     <li style=" height:190px;">
						                 <div class="txt_wrap">
							               <p class="num">본 행사</p>
							               <p class="txt lh15">- 개막식, 전시회, 오찬 간담회</p>
						                </div>
					                 </li>
                                     <li style="background-color:#fdf7f3; height:190px;">
						                 <div class="txt_wrap">
							               <p class="num">부대행사</p>
							               <p class="txt lh15">- 일자리박람회, 지역특화 베스트 상품전,<br>&nbsp; 지역발전 컨퍼런스, 외국인 투자유치행사,<br>&nbsp; 성공사례 발표회, 지역민 참여행사</p>
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
                                <td><span class="black_444" ><b>국민의례, 개회사, 환영사, 주제영상(이명박 정부 5년간의 지역발전 성과), 유공자포상, VIP 격려사, 퍼포먼스 “즐탁동시”(오픈벌룬)</b></span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">전시회</th>
                                 <td><p class="r_title1">정책존</p><span>- 지역발전정책종합관 : 지역발전정책의 종합적 성과, 4대강 사업성과, 연계협력사업 및 REDIS사업 소개<br>
 - 혁신도시관 : 공공기관 지방이전 및 녹색혁신도시 건설 비전</span><br>
                                  <p class="r_title1">지역존</p><span>- 시도관 : 지자체 발전전략과 성과, 개발비전·프로젝트, 전략산업 및 특화사업의 내용·성과<br>

 - 광역경제권 선도산업관 : 1단계 선도산업을 통한 지역기업의 글로벌 경쟁력 신장 및 2단계 선도산업의 비전</span><br>

                                   <p class="r_title1">특별존</p><span>- 산업단지 기업지원관 : QWL을 통한 양질의 일자리 창출 프로그램<br>
- 권역별 산업집적지 경쟁력 강화 사업 성과<br>
 - 일자리 박람회 : 개최권역 우수기업의 채용면접 및 취업컨설팅 등 청년 대상 채용박람회<br>
 - 지역특화 베스트 상품전 : 지역특화산업 및 지역특구육성 참여 기업의 베스트 상품전 개최를 통해 사업성과 홍보와 판로개척 지원<br>
 - 희망이음관 : 대학생 지역 우수기업 탐방기와 사례, 지역발전 UCC 공모전·희망이음 자전거길 국토대장정 성과물 전시</span><br>  
                                       
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">일자리<br>박람회</th>
                                 <td><span class="black_444" ><b>개최지 산업단지 입주기업과 청년 구직자가 단시간에 집중적으로 일자리와 인력을 탐색․확보할 수 있도록 일자리 박람회 진행</b>
                                 <br>- 구인-구직자 면접·상담 이외에도 취업·이력서·이미지 컨설팅과  타로카드 취업운세, 이력서 사진 촬영 등 취업지원 서비스 제공</span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">지역특화<br>베스트<br>상품전</th>
                                 <td><span class="black_444" ><b>정부의 지역특화산업 및 지역특구육성사업 참여 기업의 베스트 상품전 개최를 통해 사업성과 홍보와 판로개척 지원</b>
                                 <br>- 78개 기업의 448개 상품 전시, 특화제품 체험관과 상담관을 운영</span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">외국인<br>투자유치 행사</th>
                                 <td><span class="black_444" ><b>외국 투자가에 대한 투자환경 소개, 내․외국인에 대한 지자체별 프로젝트 설명, 개별상담 및 현장시찰 등 진행</b></span></td>
                            </tr>
                            
                            
                             <tr>
                                <th style=" background-color:#fdf7e3;">지역발전<br>컨퍼런스</th>
                                 <td><span class="black_444" ><b>지역발전 관계자 및 전문가 1천여 명이 8개 주제로 지역발전정책 성과종합 및 향후 지역산업 육성방안, 지역발전 정책 방향에 대해 논의하고 대안을 모색</b></span><br>
                                <div style="width: 48%;  display: inline-block; vertical-align:top;  "><p class="r_title3">지역 정책 및 일자리 컨퍼런스</p><span>- 지역상생발전 정책방향과 사례<br>
- 지속성장을 위한 지역 및 광역권 산업정책 방향<br>
- 2012 희망이음 프로젝트 우수사례 발표회 및 시상식<br>
- 지역산업육성 정책의 회고와 과제 및 바람직한 방향<br>
- 외국인 투자유치 활성화 방안</span></div>
                                <div style="width: 48%;  display: inline-block; vertical-align:top;  ">
                                 <p class="r_title3">지역산업 컨퍼런스</p><span>- 지역특화산업 성공모델 공유 및 지역간 협력 활성화<br>
- 한국자동차산업의 현재와 미래<br>
- 해양플랜트산업 기술로드맵 공청회</span></div>

                                </td>
                            </tr>
                            
                             <tr>
                                <th style=" background-color:#fdf7e3;">지역발전<bR>성공사례<bR>발표회</th>
                                <td><span class="black_444" ><b>지역발전 성공사례의 발표․전파를 통해 전국적 확산을 도모하고,<br>유공자를 포상하여 정부의 지역발전 정책의지 표명 및 사기진작</b></span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">지역민<br>참여행사</th>
                                <td><span style="color:#1e8dc5;"><b>지역민 소통과 화합을 위한 K-POP 콘서트, 경남사랑 알뜰장터, 경남 Fam Tour 진행 </b></span></td>
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
                                 <td class="td1">
                                 <span class="black_444" ><b>기고문, 기획기사, 행사소개 등 지역발전에 대한 관심제고 및 정책홍보</b></span><br>
                                 <div style="width: 48%;  display: inline-block; vertical-align:top;"><p class="r_title3">지면/온라인 매체</p><span>
- 보도자료<br>
- 브리핑<br>
- 기고<br>
- 기획기사<br>
- 광고(KTX 매거진, 공감, 대학내일)</span></div>
                            <div style="width: 48%;  display: inline-block; vertical-align:top;"><p class="r_title3">방송</p><span>
- 사전 인터뷰<br>
- 라디오 프로그램 소개<br>
- 뉴스 보도<br>
- 시사/정보 프로그램<br>
- 방송 광고<br>
- 녹화방송<br><br></span></div>
 
                             <div style="width: 48%;  display: inline-block; vertical-align:top;  "><p class="r_title3">온라인</p><span>
- 홈페이지<br>
- SNS 및 커뮤니티<br>
- 배너<br>
- 뉴스레터<br><br></span></div>
                               <div style="width: 48%;  display: inline-block; vertical-align:top;  "><p class="r_title3">오프라인</p><span>- 옥외 광고<br>- 인쇄물(포스터, 리플렛, 초청장 등)</span></div>
                               <div style="width: 48%;  display: inline-block; vertical-align:top;  "><p class="r_title3">기타 홍보지원 활동</p><span>-  언론사 취재지원<br>
- 프레스센터 운영<br>
- 경제단체 및 지자체 홍보지원</span></div>
                                </td>
                            </tr>
                             <tr>
                                <th style="background-color:#f5fbea;">홍보 실적</th>
                                <td><span class="black_444" ><b>언론 보도 총 417건(방송 30건, 지면 121건, 온라인 266)</b></span></td>
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
                                <td><span class="black_444" ><b>① 이명박 정부 5년간의 지역발전정책 성과 공유와 확산, 국민이 직접 참여하는 다채로운 행사 진행과 지역경제활성화에 실질적인 기여</b><br>
<b>② 광역경제권 발전 및 4대강 살리기 등 이명박 정부 5년간의 성과 종합홍보로 지역발전정책에 대한 국민적 공감대 형성</b><br>
&nbsp;&nbsp; - 일간 전시회에 3만여 명이 참관하였으며, 참관객 대상 설문조사 결과 지역발전 성과를 대체로 이해하게 되었다고 응답<br>
&nbsp;&nbsp;  * 전체 응답자 1,046명 중 670명(64%)이 긍정적 응답<br>
&nbsp;&nbsp;  - 지역발전 컨퍼런스에서는 8개 주제로 1천여 명의 국내외 지역발전 전문가ㆍ관계자가 참석하여 그간의 성과와 향후 지역발전 방향 모색<br>

<b>③ 관(官) 주도의 일방적 홍보가 아닌 국민이 직접 참여하는 다채로운 행사를 연중 진행하여 지역발전에 대한 공감대 형성</b><br>
&nbsp;&nbsp; - 희망이음 자전거길 국토대장정) 전국의 청년들이 4대강 자전거길을 따라 지역발전 현장을 직접 탐방<br>
&nbsp;&nbsp; - (지역발전 UCC 공모전) 국민의 입장에서 지역의 발전상을 UCC로 표현하는 사전행사 진행하여 응모작 102건 중 총11건 시상<br>
&nbsp;&nbsp; - (희망이음 프로젝트) 대학생ㆍ고교생 등 8천 여명이 480여개 지역기업을 탐방하고, 기업정보를 수집하여 동료학생들과 공유<br>
&nbsp;&nbsp; - (K-POP콘서트) K-POP콘서트*를 개최하여 지역 축제의 장 마련<br>
&nbsp;&nbsp; * 일반인 이외에 지역 소외계층, 외국인 관광객, 외국인 근로자 등 특별초대<br>

<b>④ 1회성 행사를 지양하고 일자리 창출, 외국인 투자유치 행사 등 지역경제 활성화에 실질적으로 기여</b><br>
&nbsp;&nbsp; - (일자리 박람회) 3일간 120개 기업, 6,538명의 구직자가 참여하였으며, 현장합격 42명, 2차 면접 477명 후 101명 취업확정(`12.12월 기준) 등<br>&nbsp;&nbsp;&nbsp;&nbsp;  구인-구직자간 일자리 알선<br>
&nbsp;&nbsp; * 경남은행은 고졸 신입행원 등 3명을 현장에서 채용함<br>
&nbsp;&nbsp; - (외국인 투자유치 설명회) 11개국 57개사 63명의 외국인투자가가 방한하여 160건, 2억 7천만불 이상(투자금액을 밝힌 건수합산)의 투자상담 진행<br>
&nbsp;&nbsp; * 투자유력 프로젝트 : 미국 Kozar社(70백만불, 부동산), 프랑스 Decathlon社(100백만불, 유통업), 미국Houzer社(50백만불, 주방가구생산,<br>&nbsp;&nbsp;&nbsp;&nbsp;  중국공장 한국이전) 등<br>
&nbsp;&nbsp; - (지역 특화상품전) 국내·외 바이어를 초청하여 87건(264만불)의 수출상담을 하였으며, 총 3건 45만불 규모의 MOU체결
</span></td>
                            </tr>
                            <tr>
                                <th>개선점 및<bR>향후 추진 방향</th>
                                <td><span class="black_444" ><b>① 지역발전주간 행사의 년차별 홍보 핵심메시지 발굴<br>
② 지역발전위원회 및 지역발전정책 수행 관련부처의 적극적 참여<br>
③ 행사장소·시기의 조기 확정<br>
④ 세부행사의 선택과 집중 필요</b></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div-->
            
            
            <h5 class="sv4-mtit pt50">미디어 콘텐츠 아카이빙</h5>
                <div class="s_tab4">
                  <li class="active">사진</li>
		          <!--li>카드뉴스</li-->
                  <li>영상</li>
	           </div>
               <ul class="square_img_list pt50">
					<li class="">
						<p class="square_img"><img src="/@resource/images/2012/01.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2012/02.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2012/2012 (1).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2012/2012 (2).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2012/2012 (3).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2012/2012 (4).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2012/2012 (5).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2012/2012 (6).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2012/2012 (7).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2012/2012 (8).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2012/2012 (9).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2012/2012 (10).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2012/2012 (11).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2012/2012 (12).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2012/2012 (13).png"></p>
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
                </ul-->
                
                
                <div class="s_tab4 pt50">
                  <li>사진</li>
		          <!--li>카드뉴스</li-->
                  <li class="active">영상</li>
	           </div>
               <ul class="square_img_list pt50">
					<li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/NKNFNlptdyo" title="&#39;2012 지역발전주간&#39;행사 경남서 개막" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac"> '2012 지역발전주간'행사 경남서 개막</p>
					</li>
                </ul>
        </div>
        </div>
	</section>
    
</div>
<!-- // 서브 본문 -->

<?php include_once('../../_tail.php');?>


