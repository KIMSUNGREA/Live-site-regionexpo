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
.process li {display: inline-block;vertical-align: top;width: 48%;margin: 0 15px 15px 0;padding: 50px 15px;border-radius:0%;background-color: #fdf7e3;position: relative;float: left;word-break:keep-all;/* height: 350px; */}
.process li:nth-child(2n) {background-color: #f3f8fd; z-index:1; }
.process li .txt_wrap {position: absolute; left: 0; width: 100%;  z-index: 1; color: #000; display:contents;}
.process li .txt_wrap .num {display: inline-block; line-height: 1; color:#000; padding-bottom: 10px; letter-spacing:-1px; font-weight:bold; border-bottom: 1px solid rgba(255,255,255,0.3);}
.process li .txt_wrap .txt { text-align:left; }


.square_img_wrap {}
.square_img_list {font-size: 0; margin-left: 10px;}
.square_img_list li {display: inline-block; width: 31%; margin: 0 10px 30px;  vertical-align: top; overflow: hidden;  }
.square_img_list li .square_img {position: relative; overflow: hidden;  transition:.5s;}
.square_img_list li .num {display: inline-block; width: 60px; height: 60px; background-color: #00aeb2; border-radius:50%; text-align: center; line-height: 60px; font-weight:500;  color: #fff; font-size: 22px; letter-spacing: 0; position: absolute; bottom: -26px; left: 50%; margin-left: -26px; z-index: 1;}
.square_img_list li .square_img img {width: 100%; height: 253px;}
.square_img_list li .txt { font-size: 16px;  font-weight:400;  text-align: center;  padding: 15px 0 15px; color:#444; word-break:keep-all; background-color:#fff; position:relative;   }
.square_img_list li .square_img:hover  { -webkit-transform:scale(1.1); transform:scale(1.1);}

.inline_768 {display: block !important;}
.inline_486 {display: block !important;}

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
	
	.process li {display: inline-block; vertical-align: top; width:45%;  margin: 0 10px 15px; padding: 45px 20px 0;  background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px;  height:200px !important;}
	.txt24 {font-size:18px;line-height:1.33;}
	
	.process1 li {display: inline-block; vertical-align: top; width:45%; height:185px !important; margin: 0 10px 15px; padding: 45px 20px 0; background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px; }
    
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
    
@media all and (max-width: 768px) {
	.sub .content-header .tab-wrap{box-sizing: border-box; margin-top: -55px; margin-left:1px; }
    .sub .content-header .tab-wrap .btn.link{height: 55px; font-size:14px; line-height:120%; box-sizing: border-box; display:inline-table; padding-top:17px}
	.sub .content-header .tab-wrap .btn.link:nth-child(5n) {height: 55px; font-size:14px; line-height:120%; box-sizing: border-box; display:inline-table; padding-top:10px; position:absolute; margin-left:2px; }
	.sub .content-header .tab-wrap .btn.link:nth-child(6n) {height: 55px; font-size:14px; line-height:120%; box-sizing: border-box; display:inline-table; padding-top:10px; position:absolute; margin-left:2px; right:3px;} 
	
	 .process { width:100%; margin:0 auto; padding-left:0; }
	 .process1 { width:100%; margin:0 auto; padding-left:0; }
	 
	 .table_basic td, .table_basic .box { width:48% !important;}
	 .table_basic td, .table_basic .photo img  {  }
	
	.inline_768 {display: inline  !important;}
    .inline_486 {display: inline !important;}
	 
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
		<a href="/page/s5/s3.php" class="btn link ">지역발전주간</a>
        <a href="/page/s5/s4.php" class="btn link  current">지역희망박람회</a>
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
        <div class="w1280"><img src="/assets/images/sub/home_ico.png" alt="home"> &nbsp; &gt; &nbsp; 역사관 &nbsp; &gt; &nbsp; <strong>지역희망박람회</strong></div>
    </section>
    <!-- 서브 breadcrumb -->

    <section class="section-1">
       <div class="tabs w1200">
         <div class="inner">
            <a href="/page/s5/s4.php" class="">2013</a>
            <a href="/page/s5/s41.php" class="active">2014</a>
            <a href="/page/s5/s42.php" class="">2015</a>
            <a href="/page/s5/s43.php" class="">2016</a>
        </div>
     </div>
		<div class="title-wrap">
			<h2 class="title">2014 대한민국 지역희망박람회</h2>
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
                                <td><span>2014. 12.3(수) ~ 12.6(토) / 광주 김대중컨벤션센터</span></td>
                                <td rowspan="4"><p class="tac photo"><img src="/@resource/images/@temp/s53_2014.jpg"></p></td>
                            </tr>
                            <tr>
                                <th>슬 로 건</th>
                                <td><span class="blue" ><b>지역에 희망을, 주민에게 행복을<br>* 캐치프레이즈 : 대한민국 희망 스토리, 우리 지역에서 만들어갑니다.</b></span></td>
                            </tr>
                            <tr>
                                <th>주 제</th>
                                <td><span class="txt24 black_444" ><b style="line-height:170%;">“주민행복, 행복생활권”</b></span>정부와 지역이 함께하는 지역행복생활권으로 주민희망시대를 열어가겠습니다.</td>
                            </tr>
							<tr>
                                <th>추진 목적</th>
                                <td><span class="black_444" ><b><span class="inline_768">주민행복 시대를 위한 박근혜 정부의 지역발전정책 비전과 성과를 공유하고</span>대국민 공감대를 확산</b></span></td>
                            </tr>
							<tr>
                                <th>추진 체계</th>
                               <td colspan="2" >
								<p class="r_title" >주 최</p>
									<span style="display: -webkit-inline-box;">지역발전위원회, 산업통상자원부, 기획재정부, 미래창조과학부, 교육부, 안전행정부, 문화체육관광부, 농림축산식품부, 보건복지부,<br>환경부, 고용노동부, 여성가족부, 국토교통부, 해양수산부, 17개 시·도</span><br>
                                       <p class="r_title" >주 관</p><span style="display:inline-block;">한국산업기술진흥원</span>
                                </td>
                            </tr>
							<tr>
                                <th>행사 특징</th>
                                <td colspan="2"><span style="color:#1e8dc5;"><b>주민행복시대를 위한 박근혜 정부의 새로운 지역발전정책의 비전을 알리고 철학을 공유</b></span></td>
                            </tr>
                            <tr>
                                <th>주요 내용</th>
                                <td colspan="2"><span class="black_444" ><b>① 17개 시도와 지역정책 관계부처가 참여하여 정부의 지역발전정책을 주민들이 쉽게 이해할 수 있도록 사례 중심으로 구성<bR>
② 지역 구직자와 중소중견기업간의 구인구직 미스매치 해소를 위한 광주전남지역 일자리 박람회 개최<bR>
③ 지역의 창의적인 비즈니스 아이디어(BI) 발굴 및 사업화 지원을 위한 BI 경진대회 개최</b></span></td>
                            </tr>
                             <tr>
                                <th>행사 구성</th>
                                <td colspan="2">
                                
                                <div class="process">
                                   <ul class="tac">
					                   <li style=" height:220px;">
						                 <div class="txt_wrap">
							               <p class="num">본 행사</p>
							               <p class="txt lh15">- 개막식, 전시회</p>
						                </div>
					                 </li>
                                     <li style=" height:220px;">
						                 <div class="txt_wrap">
							               <p class="num">부대행사</p>
							               <p class="txt lh15">- 컨퍼런스, 지역발전 우수사례 발표회, <br>&nbsp; 지역 비즈니스아이디어 경진대회, <br>&nbsp; 토크콘서트, 체험관, 지역희망 일자리박람회</p>
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
                                <td><span class="black_444" ><b>지역희망박람회의 첫 행사로, 주민행복시대를 위한 박근혜 정부의 지역발전정책을 알리고 철학을 공유</b><br>- 입장 및 국민의례, 개회사, 환영사, 주제영상, 유공자포상, 격려사</span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">전시회</th>
                                 <td><span class="black_444" ><b>지역행복, 주민생활과 밀접한 다양한 지원제도와 사례 등을 주민의 눈높이에 맞춰 직접 보고, 체험할 수 있도록 전시</b></span><br>
                                      <p class="r_title1">정책존</p><span>- 지역발전 희망의 문(1개) : 행복생활권 사업 내용 및 지역발전정책의 취지·목표 제시<br>
 - 부처관(9개) : 부처별 주요 정책 및 사업을 테마형으로 전시</span><br>
                                       <p class="r_title1">지역존</p><span>- 시․도관(17개) : 행복생활권, 지역특화발전 프로젝트, 지역발전전략에 대하여 직관적 전시</span><br>
                                       <p class="r_title1">특별존</p><span>- 체험관(4개) : 주민생활과 관련된 콘텐츠를 주민들이 참여하고 즐길 수 있는 체험으로 구성</span>
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">컨퍼런스</th>
                                 <td><span class="black_444" ><b>지역발전 관계자·전문가의 지역정책 심층 논의 및 지역 주민들이 소통하는 자리를 통해 자발적 참여를 유도</b></span><br>
                                 
                                 <p class="r_title2">컨퍼런스별 주요내용</p>
                                 <span style="line-height:170%;">- 산학헙력 선도대학(LINC) 제4차 포럼 : 창조경제 실현 및 지역대학과 지역기업의 상생발전 방안<br>
 - 2014 혁신도시 합동투자유치설명회 : 혁신도시별 공공기관 관련 기업 등의 클러스터 구축 촉진과, 혁신도시 조기 정착을 통한 지역발전과<span class="inline_768">&nbsp; 지속가능한 성장동력 거점 육성<br></span>
 - 시·도 생활권발전협의회 워크숍 : 지역행복생활권 우수사례 공유 및 토론을 통하여 지역발전정책 발전방향 모색<br>
 - 제32차 한국테크노파크협의회 총회 : 전국 18개 테크노파크 원장단과 지역경제정책관과의 좌담회를 통해 테크노파크 지역혁신거점기능<span class="inline_768">&nbsp; 강화 방안을 논의<br></span>
 - 2014 광주·전남 기술거래로드쇼(Road Show)/기술이전 및 기업지원 상담회 : 연구기관 및 대학 우수기술 소개 및 전시<br>
 - 2014년도 전국시도연구원협의회 공동 세미나 : ‘지역의 상생발전을 위한 새로운 디자인’이라는 주제로 지방재정조정제도의 개선과 현재 수립된<span class="inline_768">&nbsp; 지역발전계획에 대한 점검, 지역발전을 위한 현실적이고 미래지향적인 이슈를 발굴하여 다양한 실천방안 모색<br></span>
 - 2014년 지역산업진흥 연석협의회 : 지역산업육성사업 지역간 협력 촉진, 추진주체간 성과 공유<br>
 - 2015 지역발전사업 평가지문단 위촉식 및 평가설명회 : ’14년도 평가자문단 신규 구성에 따른 위촉장 수여 및 지역 발전정책 공유,<span class="inline_768">&nbsp; 평가제도 개선방향 등 안내<br></span>
 - 지역 옴부즈만 4차 정기회의 : 1~3차 활동보고서 건의사항 후속 조치 경과 보고, 활동내용 및 처리방안 논의<br>
 - 2014 RIS 중국 바이어 초청 무역상담회 : 1:1 비즈니스 상담회를 통한 RIS사업단 및 수혜기업의 중국시장 수출확대 및 신규판로 개척 지원<br>
 - 제2회 (사)한국지역정책학회 국제학술 심포지엄 : 미래를 위한 지역산업정책 경험의 국제적 공유·협력<br>
 - 정부 3.0에 따른 기업의 현장정보 공유·확산 및 우수 지역기업-지역인재의 취업연계 활성화를 위한 부처 간 업무협력 : 지역인재의 취업활성화를 위한<span class="inline_768">&nbsp; 부처간 MOU<br></span>
 - 제4차 창조산업 전략포럼-문화융성을 위한 지역콘텐츠 활성화 전략 : 문화융성을 위한 지역콘텐츠 개발과 글로컬 콘텐츠로 발전하기 위한<span class="inline_768">&nbsp; 세부 전략 수립 및 지역간 협력 네트워크 구축 방안 모색<br></span>
 - 지역행복생활권 정책현황과 향후과제 : 지역행복생활권을 위한 문화 활성화 방안과 일자리창출 활성화 방안 제시<br>
 - [2015년도 실시]2014 지역발전사업 추진실적 평가계획 설명회 : 새로 개편된 지역발전사업 추진실적 평가계획을 지자체 담당자에게 설명<br>
 - 2014년 (사)한국산학협력학회 학술포럼<br>
 - 광주마을공동체 생태계 만들기 : “00이 마을이다” : 주민참여형 컨퍼런스로 지난 90년대 중반부터 실시되어 온 광주의 마을만들기를<span class="inline_768">&nbsp; 마을공동체 운동으로 전환하고 활성화를 위한 연대와 협력을 논의<br></span>
 - 주민자치가 희망이다 : 주민자치의 현실과 발전방안<br>
 - 2014 지역과 함께하는 지역사업평가원 워크숍 : 지역사업 추진주체로서 기능과 역할을 강화하고 지역경제 활성화 방안을 모색,<span class="inline_768">&nbsp; 업무역량 및 소통강화<br></span>
 - 희망이음 프로젝트 우수사례 발표회 및 시상식<br>
 - 2014년 RIS사업 일본 바이어 초청 상담회 : 지역특화산업단(RIS사업단) 제품의 일본시장진출을 지원하기 위해 일본 바이어를<span class="inline_768">&nbsp; 초청하여 비즈니스상담회를 개최<br></span>
 - 2014년도 사단법인 한국지역정책학회 정기학술대회<br>
 - 2014년 어촌발전 포럼<br>
 - 2014 지역발전정책 세미나<br>
 - 2014 마을만들기 오픈테이블-마을에서 길을 묻다 : 마을만들기 7대 가치 및 100대 과제 토론<br>
 - 2014 광역경제권거점기관지원사업 산업분야별 컨퍼런스</span>
 
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">우수사례<bR>발표회 및<bR>시상식</th>
                                <td><span class="black_444" ><b>지역산업진흥 성공사례, 지역활력 증진 등 타 지역이 보고 배울 수 있는 성공사례를 발표회를 통해 발굴․전파</b><br>- 주민 삶의 질 향상과 관련 있는 지역행복생활권 분야를 추가하여 발굴․시상<Br>
 * 총 51점(대통령 표창 5점, 국무총리 표창 9점 및 산업통상자원부 장관 37점)</span></td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">토크<br>콘서트</th>
                                <td><span class="black_444" ><b>일상생활에서 벌어지는 다양한 소재를 중심으로 개인의 삶에 대한 이야기를 유명인·전문가와 이야기하는 場 마련)</b><br> - 지역주민과 학생의 눈높이에 맞추어 “행복”이라는 주제로<br>&nbsp;&nbsp; ① 해보자, ② 놀자, ③ 함께하자 라는 3개의 테마와 제목/주제(“樂수다 왔수다” : 행복수다/행복)를 선정</span></td>
                            </tr>
                            
                            <tr>
                               <th style=" background-color:#fdf7e3;">지역 비즈니스<br>아이디어<br>경진대회</th>
                                <td><span class="black_444" ><b>지역의 창의적인 비즈니스 아이디어 발굴 및 사업화 지원을 통해 지역기업의 성장과 지역경제 활성화를 지원</b></span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">지역 특화<br>상품전</th>
                                <td><span class="black_444" ><b>주민 생활 밀착형 우수 지역특화상품을 전시·홍보·판매함으로써 지역경제 활력 제고</b></span></td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">지역희망<br>일자리<br>박람회</th>
                                <td><span class="black_444" ><b>지역 구직자와 중소․중견기업간의 구인․구직 미스매치 해소를 통해 광주․전남지역의 일자리 여건 개선을 위한 일자리 박람회 개최</b><br> - 광주·전남 지역의 87개 기업, 11개 유관기관이 직․간접적으로 참여하고, 4,379명의 구직자가 참여하여 233명 채용</span></td>
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
                                 <td><div class="box" style="width: 32%;  display: inline-block; "><p class="r_title3">언론</p><span>
- 미디어 브리핑<br>
 - 기자간담회<br>
 - 보도자료 배포<br> 
 - 프레스룸 운영<br>
 - 특집기사<br>
 - 지면 인터뷰<br>
 - 기고 <br>
 - 방송 특집 프로그램(토론회, 대담,<bR>&nbsp;&nbsp;개막식 생방송, 생활정보 프로그램)<br><br></span></div>
                            <div  class="box" style="width: 32%;  display: inline-block;  vertical-align:top; "><p class="r_title3">온라인</p><span>
 - 홈페이지<br>
 - SNS  <br>
 - 배너<br>
 - 뉴스레터<br><br></span></div>
 
                             <div  class="box" style="width: 32%;  display: inline-block; vertical-align:top;  "><p class="r_title3">오프라인</p><span>
 - 옥외광고(육교현수막, 시내 가로 현수막,<bR>&nbsp;&nbsp; 전광판, 버스 안내판)<br>
 - 인쇄물(포스터, 안내서, 초청장,<bR>&nbsp;&nbsp;현장 안내서(리플렛))</span></div>
                                </td>
                            </tr>
                             <tr>
                                <th style="background-color:#f5fbea;">홍보 실적</th>
                                <td><span class="black_444" ><b>언론 보도 총 994건(방송 59건, 신문 202건, 온라인 732건 등) </b></span></td>
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
                                <td><span class="black_444" ><b>① 다양한 정책․사례 공유 및 확산(60,334명 참여)</b><br>
&nbsp;&nbsp;  - (전시회) 일반 주민들이 참여해 즐길 수 있도록 주민 체감형 정책을 실제 사례 중심으로 구성(4일간 51,485명 관람)<br>
&nbsp;&nbsp;  - (컨퍼런스) 국내․외 지역발전 전문가 및 지역주민 2,703명이 참여하여 지역발전 방향 모색 및 다양한 실천방안 논의<br>
&nbsp;&nbsp;  - (안전사고 제로) 안전한 박람회 개최를 위하여 안전요원 배치, 구급차 상시 대기 등 안전 주민 축제의 장 마련)<br>

<b>② 관(官) 주도의 일방적 정책홍보가 아닌 주민이 직접 발굴한 지역의 사례를, 주민이 직접 소개하여 공감대 형성</b><br>
&nbsp;&nbsp;  - (토크콘서트) 양준혁, 김태원 등 유명인의 인생에 대한 이야기를 통해 주민들과 소통하고, 즐길 수 있는 축제의 장(1,278명 관람)<br>
&nbsp;&nbsp;  - 지역 BI 경진대회) 일반 주민을 대상으로 공모한 비즈니스 아이디어 130건 중 지역예선 및 공개발표 심사를 통해 5건 시상<br>

<b>③ 지역기업과 지역인재 및 여성인력 일자리 매칭, 바이어 초청 상담 등 지역 활성화에 실질적으로 기여</b><br>
&nbsp;&nbsp;  - (정보공유) 지역우수기업-지역인재의 취업연계 활성화를 위한 4개 부처․청 간 정보공유 MOU 체결<br>
&nbsp;&nbsp; - (일자리 박람회) 광주․전남지역 87개 기업, 11개 유관기관 채용상담<br>
&nbsp;&nbsp; - (바이어초청 상담) 지역특화상품전 개최를 통해 지역별 우수 특화상품(115개)을 전시․홍보․판매 상담</span></td>
                            </tr>
                            <tr>
                                <th>개선점 및<br>향후<br>추진 방향</th>
                                <td><span class="black_444" ><b>① 행사 주제의 조기 선정 및 주제에 맞는 콘텐츠 사전 발굴</b><br>
&nbsp;&nbsp; - ‘14년에 처음으로 도입한 행사 주제를 차년도에는 조기에 선정하여 전시회를 비롯한 전체 행사를 주제에 맞게 추진<br>
&nbsp;&nbsp; - 주제에 맞는 지역의 우수사례를 중앙차원에서 조기에 발굴하고 스토리텔링화하여 전시회, 홍보, 주제영상 등에 활용<br>

<b>② 총괄 차원의 지원을 통한 개별 전시관의 전반적 수준 제고 유도<br>
&nbsp;&nbsp; - 시‧도 및 부처 전시관별 주제와 전시 기법에 대한 기획․자문․조정을 위한 전시 PM(Project Manager) 도입 검토</b><br>
&nbsp;&nbsp; - 시‧도의 전시 주관부서 및 전시회 참여부처를 미리 확정하고, 전시대행사도 조기에 선정하게 함으로써 준비기간을 확보<br>

<b>③ 각 시·도와 부처 차원의 협력을 통하여 행사 개최 기반 강화</b><br>
&nbsp;&nbsp; - 개최지 선정 시 관련 예산 및 자원 지원 등 협력방안 사전 조율을 통해 행사 준비의 효율성 증대<br>
&nbsp;&nbsp; - 각 시·도 별 차년도 박람회 예산 편성 시 부처 차원의 협조를 통해 전시관 조성 예산 확보 필요</span>
                               </td>
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
						<p class="square_img"><img src="/@resource/images/2014/01.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2014/2.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2014/2014 (1).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2014/2014 (2).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2014/2014 (3).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2014/2014 (4).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2014/2014 (5).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2014/2014 (6).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2014/2014 (7).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2014/2014 (8).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2014/2014 (9).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2014/2014 (10).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2014/2014 (11).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2014/2014 (12).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2014/2014 (13).png"></p>
					</li>

                    
                </ul>
                
                
            
                <!--div class="s_tab4 pt50">
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
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/KJijo-nnXo0" title="[KTV 활짝 청와대이야기] 2014 지역희망박람회 대한민국 방방곡곡 희망스토리!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">[KTV 활짝 청와대이야기]<br>2014 지역희망박람회 대한민국 방방곡곡 희망스토리!</p>
					</li>
                    <li class="">
						<p class="square_img"><iframe width="100%" height="214px"  src="https://www.youtube.com/embed/wOUdeDJkGyk" title="2014 대한민국 지역희망박람회 스팟영상" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">2014 대한민국 지역희망박람회 스팟영상</p>
					</li>
                </ul>
        </div>
        </div>
	</section>
    
</div>
<!-- // 서브 본문 -->

<?php include_once('../../_tail.php');?>


