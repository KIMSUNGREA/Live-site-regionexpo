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

.s_tab4 {width: 100%; padding:0 0 20px; font-size: 0; position: relative; z-index:1; left:0; border-bottom:2px solid #0dace6; }.s_tab4 li {display: inline-block; vertical-align: top;  border-radius:60px; }
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
.process ul {text-align: center;display: inline-block;font-size:16px;}
.process li {display: inline-block;vertical-align: top;width: 31.5%;margin: 0 15px 15px 0;padding: 50px 15px;border-radius:0%;background-color: #fdf7e3;position: relative;float: left;word-break:keep-all;/* height: 350px; */}
.process li:nth-child(2n) {background-color: #f3f8fd; z-index:1; }
.process li .txt_wrap {position: absolute; left: 0; width: 100%;  z-index: 1; color: #000; display:contents;}
.process li .txt_wrap .num {display: inline-block; line-height: 1; color:#000; padding-bottom: 10px; letter-spacing:-1px; font-weight:bold; border-bottom: 1px solid rgba(255,255,255,0.3);}
.process li .txt_wrap .txt { text-align:left; }


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
    
	.process li {display: inline-block; vertical-align: top; width:45%;  margin: 0 10px 15px; padding: 45px 20px 0;  background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px;  height:280px !important;}
	.txt24 {font-size:18px;line-height:1.33;}
    
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
            <a href="/page/s5/s3.php" class="active">2010</a>
            <a href="/page/s5/s31.php" class="">2011</a>
            <a href="/page/s5/s32.php" class="">2012</a>
        </div>
     </div>
		<div class="title-wrap">
			<h2 class="title">2010 지역발전주간</h2>
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
                                <td><span>2010.9.15(수) ~ 17(금) / 대구 Exco</span></td>
                                <td rowspan="4"><p class="tac photo"><img src="/@resource/images/@temp/s53_2010.png"></p></td>
                            </tr>
                            <tr>
                                <th>슬 로 건</th>
                                <td><span class="blue" ><b>지역과 함께 열어가는 더 큰 대한민국</b></span></td>
                            </tr>
                            <tr>
                                <th>주 제</th>
                                <td><span class="txt24 black_444" ><b>광역경제권</b></span></td>
                            </tr>
							<tr>
                                <th>추진 목적</th>
                                <td><span class="black_444" ><b>기존 지역투자박람회를 확대하여 지역발전주간행사를 개최, 지역투자행사 이외에도 광역경제권 구축, 녹색성장 등 정부 및 지자체의 지역발전정책을 모두 아우르는 종합 행사로 확대</b></span></td>
                            </tr>
							<tr>
                                <th>추진 체계</th>
                                <td colspan="2" ><p class="r_title" >주 최</p><span style="display:inline-block;">지식경제부, 지역발전위원회, 16개 시‧도</span><br>
                                       <p class="r_title">후 원</p><span style="display: -webkit-inline-box;">기획재정부, 교육과학기술부, 행정안전부, 고용노동부, 국토해양부, 녹색성장위원회, 전국경제인연합회, 대한상공회의소, 한국무역협회,<br> 중소기업중앙회, KOTRA, 한국산업단지공단, 한국테크노파크협의회, 전국RIS협의회</span><br>
                                       <p class="r_title" >주 관</p><span style="display:inline-block;">한국산업기술진흥원</span>
                                </td>
                            </tr>
							<tr>
                                <th>행사 특징</th>
                                <td colspan="2"><span style="color:#1e8dc5;"><b>지역투자 중심에서 광역경제권 구축, 녹색성장 등 정부의 지역발전정책 중심으로 전환</b></span></td>
                            </tr>
                            <tr>
                                <th>주요 내용</th>
                                <td colspan="2"><span class="black_444" ><b>지역과의 소통을 통한 지역발전 방향을 모색하고, 지역의 선도산업 육성, 지역 일자리 창출 등 “지역경제 활성화”를 주제로 행사 추진</b></span></td>
                            </tr>
                             <tr>
                                <th>행사 구성</th>
                                <td colspan="2">
                                
                                <div class="process">
                                   <ul class="tac">
					                   <li style=" height:220px;">
						                 <div class="txt_wrap">
							               <p class="num">개막식</p>
							               <p class="txt lh15">- 지역발전주간 시작을 알리는<br>&nbsp; 개막식 개최 </p>
						                </div>
					                 </li>
                                     <li style=" height:220px;">
						                 <div class="txt_wrap">
							               <p class="num">전시행사</p>
							               <p class="txt lh15">- 16개 광역시도<br>- 기획관 : 지역발전정책관, 4대강관,<br>&nbsp; 광역선도산업관 등 12개 테마관</p>
						                </div>
					                 </li>
                                     <li style="background-color:#fdf7f3; height:220px;">
						                 <div class="txt_wrap">
							               <p class="num">투자행사</p>
							               <p class="txt lh15">- 지역기업 투자가 대상 상담회,<br>&nbsp; 외국인투자자 대상 설명회,<br>&nbsp; 외국인 투자가 지자체 현장 방문</p>
						                </div>
					                 </li>
                                     
                                     
                                      <li style=" height:330px;">
						                 <div class="txt_wrap">
							               <p class="num">지역발전 성공사례 발표대회</p>
							               <p class="txt lh15">- 지역발전 우수 성공사례 발표<br>
- 지자체, 지역기업, 지역특화부분으로 구성<br>
- 지역산업진흥 시상식(지역산업진흥<br>&nbsp; 우수사례 표창, 지역투자 활성화<br>&nbsp; 유공자 포상, 지역발전 정책 유공자 포상,<br>&nbsp; 대학생 지역전현장 체험 포상)</p>
						                </div>
					                 </li>
                                       <li style=" height:330px;">
						                 <div class="txt_wrap">
							               <p class="num">컨퍼런스</p>
							               <p class="txt lh15">- 광역경제권 선도산업 인재양성사업<br>&nbsp; 활성화<br>
 - 광역경제권 선도산업․연계협력 사업안내<br>
 - 2020 지역발전 구상<br>
 - 지역특화산업의 고도화를 통한<br>&nbsp; 지역발전 전략<br>
 - 지역발전과 중소기업<br>
 - 테크노파크의 지속적 성장과 발전을 위한<br>&nbsp; 정책방안</p>
						                </div>
					                 </li>
                                     <li style="background-color:#fdf7f3; height:330px;">
						                 <div class="txt_wrap">
							               <p class="num">유공자 포상</p>
							               <p class="txt lh15">- 지역의 투자유치에 공헌한<br>&nbsp; 유공자 및 유공단체</p>
						                </div>
					                 </li>
                                   
					                   <li>
						                 <div class="txt_wrap">
							               <p class="num">성과교류 워크샵</p>
							               <p class="txt lh15">- 지역발전주간의 개최 성과 평가 및<br>&nbsp; 개선방안을 논의하고 향후 지역<br>&nbsp; 경제정책의 개선방향 협의하는 장</p>
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
                                <td><span class="black_444" ><b>개회사, 환영사, 영상물상영(지역일자리창출), 유공자포상(총 10명), 격려사, 대학생 지역발전현장 체험단 영상상영, 지역발전 희망편지 전달식</b></span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">전시행사</th>
                                 <td><p class="r_title1">16개 시･도 홍보관</p><span>- 민선5기 시도지사의 지역경제살리기 정책 및 일자리창출방안 노출</span><br>
                                       <p class="r_title1">기획관</p><span>
 <div style="width: 45%;  display: inline-block; ">- 광역선도산업관<br>
 - 녹색인증 홍보관<br>
 - 경제자유구역관<br>
 - 산업단지관<br>
 - 지역발전정책관<br>
 - 지역특화산업육성사업관</div>
 <div style="width: 45%; display: inline-block;"> - 테크노파크 기술기업 육성관<br>
 - 혁신도시관<br>
 - 녹색성장관<br>
 - 4대강관<br>
 - 지역발전 현장 체험관<br>
 - 지역이벤트관</div></span>
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">투자행사</th>
                                 <td><p class="r_title2">대한투자설명회</p>
                                 <span>
 <div style="width: 40%;  display: inline-block; vertical-align:top;"> - 해외투자가 초청 투자행사(KOTRA)<br>
 - 투자가 환영 네트워킹 만찬<br>
 - 대한투자환경 설명회<br><br></div>
 <div style="width: 55%;  display: inline-block;"> - 지자체-투자가 일대일 상담회<br>
 - 지역발전주간 참여 지자체 및 유관기관 전시행사장에서 개별 상담진행<br>
 - 투자가 현장시찰 : 총 3개 지자체(서울특별시, 대구광역시, 제주특별자치도)</div></span>
 
                                       <p class="r_title2">프리보드 투자설명회</p><span>
 - 국내기술기업 IR(한국테크노파크협의회)<br>
 - 참가기업 : 프리보드 예비지정기업 7사<br>
 - 참관대상 : 일신창투 및 대경창투 등 기관투자자</span>
                                </td>
                            </tr>
                             <tr>
                                <th style=" background-color:#fdf7e3;">지역발전<bR>성공사례<bR>발표대회</th>
                                <td><span class="black_444" ><b>지자체, 지역기업, 지역특화 등 분야별 지역발전 우수사례를 발표·전파하여 관련기관·기업간 상호벤치마킹 기회 제공</b><br> - 우수사례로 선정된 11개의 지역산업 발전사례를 포상순위로 발표<br>
 - 총 5개 부문, 국무총리 표창 이하의 포상 진행(39점) </span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">컨퍼런스</th>
                                <td><span style="color:#1e8dc5;"><b>국내 지역정책 전문가가 참석하여 지역발전정책의 방향과 과제에 대해 폭넓게 논의하는 장으로, 참가인원 약 1,100명</b></span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">유공자<bR>포상</th>
                                <td><span class="black_444" ><b>지역투자 활성화, 지역산업 진흥 분야에 대한 포상 실시</b><br> - 총 41점(훈장 1, 포장 1, 대통령표창 4, 국무총리표장 6, 장관표창 29)</span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">성과교류<bR>워크샵</th>
                                <td><span class="black_444" ><b>2010 지역발전주간 성과정리 및 차년도 지역발전주간 개최관련 방향 설정 및 제안</b><br> - 지식경제부, 16개 시ㆍ도, 지역발전주간 참여기관 20여 명 참가</span></td>
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
                                <td><div class="box"  style="width: 32%;  display: inline-block; "><p class="r_title3">온·오프라인 홍보물 제작·배포</p><span>
 - 홈페이지 구축·운영<br>
 - 뉴스레터 발송<br>
 - 포스터, 리플릿 및 초청장 배포<br>
 - 전광판 등<br>
 - 옥외 홍보<br>
 - 디렉토리북<br><br></span></div>
                            <div class="box" style="width: 32%;  display: inline-block; "><p class="r_title3">對언론사 브리핑 및 자료배포</p><span>
 - 보도자료 <br>
 - 언론사 브리핑(2회)<br>
 - 기고(중앙일보)<br>
 - 특집 지상 좌담회/기획기사<br>
 - 공중파TV 기획방송(시사/정보)<br>
 - 방송 인터뷰<br><br></span></div>
 
                             <div class="box" style="width: 32%;  display: inline-block; vertical-align:top;  "><p class="r_title3">언론사·지자체·경제단체 등 홍보 지원</p><span>
 - 언론사 취재지원(프레스센터 운영 등)<br>
 - 경제단체 및 지자체 홍보지원</span></div>
                                </td>
                            </tr>
                             <tr>
                                <th style="background-color:#f5fbea;">홍보 실적</th>
                                <td><span class="black_444" ><b>언론 보도 총 389건(방송 31건, 신문 132건, 기고 1건, 기획기사 2건, 인터뷰 2건, 온라인 227건 등)</b></span></td>
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
                                <td><span class="black_444" ><b>① 지역개최로 행사의 본질적 취지 고취 : 정부의 지역발전 의지 표명</b><br>
&nbsp;&nbsp; - 지역발전관련 행사임에도 수도권에서 개최된 기행사의 한계를 극복하고, 본행사장을 지역으로 전환하여 행사의의를 고취<br>
&nbsp;&nbsp; - 지역개최임에도 불구, 약 25,000명의 참관객 방문<br>

<b>② 민선 5기 출범 후 VIP와 지자체 장과의 의견 교류의 장 마련</b><br>
&nbsp;&nbsp; - 민선 5기 지자체장 체제 출범 후 16개 시도의 역점사업에 대한 중앙과 지방정부간의 의견 및 정보교류<br>
&nbsp;&nbsp; - VIP P.I(President Indentity) 노출을 통해, 각 지자체별 역점사업에 대한 매체 노출 극대화<br>

<b>③ 사전 국민참여행사 전개로 본 행사 붐업 효과 발효</b><br>
&nbsp;&nbsp; - 산업단지 채용박람회, 대학생 지역발전현장 탐방보고대회, 지역발전 성공사례 발표대회 등을 사전행사로 진행, ‘10년 6월부터 5+2광역권별로<br>&nbsp;&nbsp;&nbsp;&nbsp; 순차적 개최, 본 행사 고지 및 관심 유도 <br>

<b>④ 국민참여행사 전개로 행사대상이 정책공급자에서 수요자로 확대됨</b></span></td>
                            </tr>
                            <tr>
                                <th>주요 성과</th>
                                <td><span class="black_444" ><b>① 대외적 공감대 형성이 용이한 행사명으로 변경<br>
② 행사주제 도출을 위한 ‘2011 지역발전정책 기조수립’TFT 구성<br>
③ 본 행사 참여대상群 확대<br>
④ 기행사 성공컨텐츠 심화 : 지역일자리 미스매칭 완화방안 전개<br>
⑤ 박람회와 국제포럼을 동시에 개최로 행사간 시너지 효과 증대<br>
⑥ 전시행사 기획 시 컨텐츠 형태 다각화</b></span></td>
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
						<p class="square_img"><img src="/@resource/images/2010/01.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2010/02.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2010/03.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2010/04.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2010/05.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2010/06.png"></p>
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


