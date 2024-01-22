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
.txt20 {font-size:20px;line-height:1.33;}
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
	.r_title {position: relative;background-color:#3496bd;padding: 2px 0;font-size:14px;color:#fff;font-weight: 500;border-radius: 30px;width: 65px;text-align: center;display: block; margin-right:10px; margin-bottom:10px;}
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
            <a href="/page/s5/s41.php" class="">2014</a>
            <a href="/page/s5/s42.php" class="active">2015</a>
            <a href="/page/s5/s43.php" class="">2016</a>
        </div>
     </div>
		<div class="title-wrap">
			<h2 class="title">2015 대한민국 지역희망박람회</h2>
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
                                <td><span>2015. 9.9(수) ~ 9.12(토) / 인천 송도 컨벤시아</span></td>
                                <td rowspan="4"><p class="tac photo"><img src="/@resource/images/@temp/s53_2015.jpg"></p></td>
                            </tr>
                            <tr>
                                <th>슬 로 건</th>
                                <td><span class="blue" ><b>지역에 희망을, 주민에게 행복을</b></span></td>
                            </tr>
                            <tr>
                                <th>주 제</th>
                                <td><span class="txt24 black_444" ><b style="line-height:170%;">“주민행복, 행복생활권”</b></span>희망찬 주민행복 시대</td>
                            </tr>
							<tr>
                                <th>추진 목적</th>
                                <td><span class="black_444" ><b>17개 시･도와 중앙정부가 함께 개최하는 국내 최대의 지역발전 종합 행사로서 지역발전정책 비전과 성과를 공유하고 대국민 공감대를 확산</b></span></td>
                            </tr>
							<tr>
                                <th>추진 체계</th>
                                  <td colspan="2" ><p class="r_title" >주 최</p><span style="display:inline-block;">지역위, 17개 시‧도, 14개 부처‧청*</span><br>
                                <span class="blue">* 산업통상자원부, 기획재정부, 교육부, 미래창조과학부, 행정자치부, 문화체육관광부, 농림축산식품부, 보건복지부, 환경부, 고용노동부, 국토교통부, &nbsp;&nbsp;해양수산부, 여성가족부 및 중소기업청</span><br>
                                       <p class="r_title" >주 관</p><span style="display:inline-block;">한국산업기술진흥원</span>
                                </td>
                            </tr>
							<tr>
                                <th>행사 특징</th>
                                <td colspan="2"><span style="color:#1e8dc5;"><b>주민의 ‘삶의 질’ 향상을 주제로, 박근혜 정부 3년차의 다양한 지역정책 및 사례를 공유확산</b></span></td>
                            </tr>
                            <tr>
                                <th>주요 내용</th>
                                <td colspan="2"><span class="black_444" ><b>① 17개 시도의 지역주민 삶의 질 향상성과, 창조경제를 통한 지역 확산, 지역경제 활성화를 통한 일자리 창출 성과 등 전시<br>
② 주민생활 밀착형 인천 우수시장제품 및 주민 축제 연계 개최<br>
③ 우수시장과 연계하여 생활형 대표제품 및 지역특화 상품 등 체험 및 판매<br>
④ 지역주민이 운영하는 벼룩시장 운영</b></span></td>
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
							               <p class="txt lh15">- 컨퍼런스, 일자리 박람회, 우수사례발표회,<br>&nbsp; 지역나눔마켓(인천 우수시장박람회/<br>&nbsp; 지역특화상품전/학교기업 상품전/ 송도 굿 마켓), 토크콘서트</p>
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
							<col width="15%" />
                            <col width="85%" />
						</colgroup>
                        <tbody>
                            <tr>
                                <th style=" background-color:#fdf7e3;">개막식</th>
                                <td><span class="black_444" ><b>박근혜 정부 3년차로 지역발전 관계자와 주민들이 함께 지역발전정책 및 성과에 대해 공감하고 소통하는 장</b><br>- 입장 및 국민의례, 개회사, 환영사, 주제영상, 유공자포상, 격려사</span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">전시회</th>
                                 <td><span class="black_444" ><b>정부의 지역발전정책 및 성과를 주민들이 쉽게 이해 할 수 있도록 사례 중심의 체험형 전시로 구성</b></span><br>
                                       <p class="r_title1">정책존</p><span>- 지역발전정책관(1개) / 부처･청관(12개) : 지역주민행복 및 지역경제활력 중심의 정책 소개 및 사례 전시</span><br>
                                       <p class="r_title1">지역존</p><span>- 시･도관(17개) : 17개 시･도의 지역정책 추진 성과 및 사례 전시</span><br>
                                       <p class="r_title1">지역특화상품전 (1개)</p><span>- 지역특화산업을 통하여 개발된 상품들을 전시하고 명인명촌 등 우수지역･특화 상품의 전시 및 판로확대 지원</span><br>
                                       <p class="r_title1">체험존</p><span>- 휴게공간 및 체험관(4개) : 지역발전 성과를 즐겁게 체험 할 수 있는 문화체험</span>
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">컨퍼런스</th>
                                 <td><span class="black_444" ><b>지역발전 관계자･전문가들의 지역정책 심층 논의 및 지역 주민들의 자발적 참여를 유도하여 소통의 장(場) 마련
 - 지역위 및 정부･지자체, 유관기관, 학술･연구기관 등 지역발전 관련 기관 관계자 총 1,500명 참여 하여 지역창조경제 활성화 방안 모색 등 18개 주제 논의 </b></span><br>
                                 
                                 <p class="r_title2">컨퍼런스별 주요내용</p>
                                 <span style="line-height:170%;">- 2015년도 운영성과 우수지역특구 시상식<br>
 - 지역사업 옴부즈만 제2차 정기회의 : 활동내용 및 처리방안 논의, 1차 활동보고서 건의사항 후속 조치 경과 보고 등<br>
 - 지역 현안 논의를 위한 전국시도지사 협의회 총회 : 전국시도지사협의회 신임 임원단 선출 및 지방현안 논의<br>
 - 지역사업 연계강화 사업운영 합동워크숍 : RIC를 포함한 지역기업 및 사업 실무자들을 위한 사업운영 컨퍼런스<br>
 - 2015 혁신도시 합동투자유치설명회 : 산학연 클러스터의 성공적 구축방안과 발전 방향, 혁신도시별 투자유치 우수사례 발표 및 상담부스 설치<br>
 - 지역산업 발전 정책 논의를 위한 한국테크노파크협의회 제51차 이사회 : 지역산업 발전의 거점기관인 전국 18개 테크노파크 원장단의<span class="inline_768">&nbsp; 좌담회를 통해 지역산업 발전에 대한 정책 논의<br></span>
 - 지역사업평가단 워크숍 : 지역사업의 공정한 평가관리를 위한 평가단의 역할 등<br>
 - 지역창조경제 활성화 포럼 : 창조경제 연계를 통한 지역산업 생태계 활성화<br>
 - 지역산업 창조경제 확산을 위한 사업화신속지원 간담회 : 창조경제 확산을 위해 시·도별 추진 중인 창조경제 프로그램 성과 공유 및 개선방안 논의<br>
 - 전환기 새로운 지역발전 패러다임 모색을 위한 국제학술 심포지엄 : 글로벌 위기와 저성장 시대에 대응하는 새로운 지역산업정책의 전환과 도전을 모색,<span class="inline_768">&nbsp; 관련 해외 지역산업정책 동향 논의 등<br></span>
 - 지역특화상품 마케팅 역량강화 워크숍 : 지역상품의 판로확대 및 세계화를 위한 마케팅 전략 수립<br>
 - 지역특화상품 판매 촉진 및 판로 확대를 위한 국내바이어 상담회 : 지역특화제품 생산기업 판매유통 개척 및 확장 지원<br>
 - 우리지역 우수기업 알리기 UCC 경진대회 : UCC 경진대회 예선을 통과한 5편을 현장에서 상영하고 관람객들과 관계자 심사를 통해 최종 수상작 3편을<span class="inline_768">&nbsp; 선정 후 시상식 진행<br></span>
 - 2015 산학협력 제도 발전방향 모색을 위한 학술포럼 : IPP형 일학습병행제, 장기현장실습제도 운영 및 제도 개선 방안 <br>
 - 박근혜정부 지역발전정책의 성공적 추진방향 모색을 위한 컨퍼런스 : 지역행복생활권 개선방향 및 활성화 과제 제시, 공공기관 지방이전의 추진으로<span class="inline_768">&nbsp; 새로운 지역발전거점 마련<br></span>
 - 2015년도 광역경제권거점기관지원사업 산업분야별 컨퍼런스 : 4개분야(기계소재, 자동차, 전자전기, 기타) 전문가 발표 및 토의로 소통의 장 마련<br>
 - 사단법인 한국지역정책학회 정책포럼 : 전환기 새로운 지역발전 패러다임 모색<br>
 - 지역콘텐츠산업 발전을 위한 중장기 전략포럼 : 지역콘텐츠산업 발전을 위한 정책 수립 및 실행 방안 토론</span>
 
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">우수사례<bR>발표회 및<bR>시상식</th>
                                <td><span class="black_444" ><b>지역 주도 발전, 주민의 삶의 질 향상 등 지역발전 성공모델에 대한 시상 및 사례발표를 통한 공유 및 확산</b><br>- 폐광지역 재건 사례 등 4건의 지역발전 성공사례를 발표하고 유공자 48명을 시상 (정부포상 14점, 장관 표창 34점)<br> * 총 48점(대통령 표창 5점, 국무총리 표창 9점 및 산업통상자원부 장관 34점)</span></td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">토크<br>콘서트</th>
                                <td><span class="black_444" ><b>일상생활에서 벌어지는 다양한 소재를 중심으로 개인의 삶에 대한 이야기를 유명인･전문가와 이야기하는 場 마련</b><br> - 지역주민과 학생의 눈높이에 맞추어 “희망을 Dream니다”라는 주제로<br>&nbsp;&nbsp; ① 행복, ② 창조, ③ 희망을 소재로 하는 3개의 테마와 제목/주제(“희망을 Dream니다”)를 선정</span></td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">지역나눔<br>마켓</th>
                                <td><span class="black_444" ><b>지역 전통시장 상품, 특산품, 우수상품 등의 홍보 및 판매기회 제공으로 매출 증대를 통한 지역경제 활력제고</b><br>- (프로그램 구성) 지역특화인천 우수시장 박람회, 지역특화상품 판매전, 학교기업 상품 판매전, 송도 굿 마켓</span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">일자리<br>박람회</th>
                                <td><span class="black_444" ><b>지역 구직자와 중소･중견기업간의 구인･구직 미스매치 해소를 위한 ‘Job Day’ 개최</b><br> - 8개 시･도에서 449개사 10,065명이 참여하여, 1차 합격 1,059명, 현장 채용 153명</span></td>
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
                                 <td ><div class="box" style="width: 48%;  display: inline-block; "><p class="r_title3">언론</p><span>
 - 미디어 브리핑 <br>
 - 보도자료 <br>
 - HOPE 기자단 운영<br>
 - 프레스룸 운영<br> 
 - 특집기사<br>
 - 방송 특집프로그램(개막식 생방송, 인터뷰, <br>&nbsp;&nbsp;생활 정보 프로그램, 라디오)<br><br></span></div>
                            <div class="box" style="width: 48%;  display: inline-block;  vertical-align:top; "><p class="r_title3">온라인</p><span>
 - 홈페이지 운영<br>
 - HOPE 기자단(152건 포스팅) 및 SNS 4채널 운영<br>
 - 뉴스레터(4차)<br>
 - 배너 광고</span></div>
 
                             <div class="box" style="width: 48%;  display: inline-block; vertical-align:top;  "><p class="r_title3">오프라인</p><span>
 - 옥외 광고(가로등 배너, 현수막, 전광판 등)<br>
 - KTX 매거진<br>
 - KBS 스팟 광고</span></div>
                              <div style="width:48%;  display: inline-block; vertical-align:top;  "><p class="r_title3">광고</p><span>
 - 지면 광고<br>
 - 방송 광고  <br>
 - 온라인 광고</span></div>
                                </td>
                            </tr>
                             <tr>
                                <th style="background-color:#f5fbea;">홍보 실적</th>
                                <td><span class="black_444" ><b>언론 보도 총 1,954건(방송 52건, 신문 543건, 온라인 1,359건 등) </b></span></td>
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
                                <td><span class="black_444" ><b>① 주민의 ‘삶의 질’ 향상을 주제로, 現 정부 3년차의 지역발전을 위한 다양한 정책･사례 공유 및 확산(98,740명 참여)</b><br>
 &nbsp;&nbsp; - (전시회) 주민 체감형 정책 사례와 관람객이 참여･체험 할 수 있는 콘텐츠 구성을 통해 관람객들 참여도를 높임(4일간 50,790명 관람)<br>
 &nbsp;&nbsp; - (안전사고 대비) 안전한 박람회 개최를 위하여 안전요원 배치, 구급차 상시 대기 등 관람객 응급상황 신속대처로 안전한 주민 축제의 장 마련<br>

<b>② 관(官) 주도의 일방적 정책홍보가 아닌 정부와 주민의 양방향 소통이 가능한 부대행사를 통해 지역발전에 대한 공감대 형성 </b><br>
&nbsp;&nbsp;  - (컨퍼런스) 국내･외 지역발전 전문가 및 지역주민 1,500명이 참여하여 지역발전 방향 모색 및 다양한 실천방안 논의<br>
&nbsp;&nbsp;  - (토크콘서트) 아웃사이더, 홍석천 등 유명인의 인생에 대한 이야기를 통해 주민들과 소통하고, 즐길 수 있는 축제의 장 마련(1,540명 관람)<br>
&nbsp;&nbsp;  - (우수사례발표회) 폐광지역 재건 사례 등 3건의 지역발전 성공사례를 발표하고 유공자 48명을 시상(정부포상 14점, 장관표창 34점) <br>

<b>③ 지역일자리매칭, 지역특화상품 홍보, 지역나눔마켓을 통해 지역경제 활성화에 실질적으로 기여</b><br>
 &nbsp;&nbsp; - (일자리박람회) 개최지인 인천광역시 뿐만 아니라 전국 8개 시･도에서 13건의 일자리 박람회 개최<br>
 &nbsp;&nbsp; - (지역나눔마켓) 야외 전시장에 지역특화상품, 전통시장 상품, 학교기업 상품, 송도굿마켓(벼룩시장)을 열어 많은 주민들이 참여<br>
&nbsp;&nbsp;  * 지역특화상품 홍보 및 야외판매 : 400만원<br>
&nbsp;&nbsp;  * 바이어 구매 상담(31건)을 통해 1.3억원 상담, 10백만원 현장 계약 체결</span></td>
                            </tr>
                            <tr>
                                <th>개선점 및<br>향후<br>추진 방향</th>
                                <td><span class="black_444" ><b>① 행사 주제의 조기 선정 및 주제에 맞는 콘텐츠 사전 발굴</b><br>
&nbsp;&nbsp; - 전시회를 비롯한 전체 행사를 주제에 맞게 추진할 수 있도록 행사 주제를 조기에 선정하여 행사 추진 일정에 무리가 없도록 기획 <br>
&nbsp;&nbsp; - 주제에 맞는 지역의 우수사례를 중앙차원에서 조기에 발굴하고 스토리텔링화하여 전시회, 홍보, 주제영상 등에 활용<br>

<b>② 총괄 차원의 지원을 통한 개별 전시관의 전반적 수준 제고 유도</b><br>
&nbsp;&nbsp; - 시･도의 전시 주관부서 및 전시회 참여부처를 미리 확정하고, 전시대행사도 조기에 선정하게 함으로써 준비기간을 확보<br>
&nbsp;&nbsp; - 전시관별 주제 선정 및 세부 콘텐츠 조율 시간을 고려하여 전문가 컨설팅을 전시관 조성 계획 초기 단계에 1차 진행 필요<br>

<b>③ 각 시･도와 부처 차원의 협력을 통하여 행사 개최 기반 강화</b><br>
&nbsp;&nbsp; - 개최지 선정 시 관련 예산 및 자원 지원 등 협력방안 사전 조율을 통해 행사 준비의 효율성 증대 <br>
&nbsp;&nbsp; - 각 시･도 별 차년도 박람회 예산 편성 시 부처 차원의 협조를 통해 전시관 조성 예산 확보 필요<br>

<b>④ 각 시･도와 부처 차원의 협력을 통하여 사전 홍보 강화</b><br>
 &nbsp;&nbsp;- 많은 주민이 방문할 수 있도록 개최도시의 적극적인 사전 홍보 필요<br>
&nbsp;&nbsp; - 정책을 입안하고 이행하는 중앙부처 및 지역 공무원들의 방문 부족<br>
&nbsp;&nbsp; * 공무원연수원(인재개발원) 등과 연계한 교육 및 세미나 프로그램 편성 모색</span>
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
						<p class="square_img"><img src="/@resource/images/2015/1.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2015/2.png"></p>
					</li>
                   
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2015/4.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2015/5.png"></p>
					</li>
                   
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2015/07.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2015/8.png"></p>
					</li>
                  
                 
                  
                  
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2015/2015 (2).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2015/2015 (3).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2015/2015 (4).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2015/2015 (5).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2015/2015 (6).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2015/2015 (7).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2015/2015 (8).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2015/2015 (9).png"></p>
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
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/LgBrvJZGW2g" title="2015년 지역희망박람회 주제영상" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">2015년 지역희망박람회 주제영상</p>
					</li>
                    <li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/JQM4ixiq5hU" title="지역발전위원회" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">지역발전위원회</p>
					</li>
                </ul>
        </div>
        </div>
	</section>
    
</div>
<!-- // 서브 본문 -->

<?php include_once('../../_tail.php');?>


