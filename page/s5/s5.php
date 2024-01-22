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


.process1 {width: 100%;position: relative;display: inline-block;float: left;}
.process1 ul {text-align: center;display: inline-block;font-size:16px; width:100%;}
.process1 li {display: inline-block; vertical-align: top; width: 31.5%;  margin: 0 5px 15px; padding: 50px 15px 0; border-radius:0%; background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; }
.process1 li:nth-child(2n) {background-color: #f3f8fd; z-index:1; }
.process1 li .txt_wrap {position: absolute; left: 0; width: 100%;  z-index: 1; color: #000; display:contents;}
.process1 li .txt_wrap .num {display: inline-block; line-height: 1; color:#000; padding-bottom: 10px; letter-spacing:-1px; font-weight:bold; border-bottom: 1px solid rgba(255,255,255,0.3); line-height:150%;}
.process1 li .txt_wrap .txt { text-align:left; }

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
	
	.process li {display: inline-block; vertical-align: top; width:45%;  margin: 0 10px 15px; padding: 45px 20px 0;  background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px;  height:150px !important;}
	.txt24 {font-size:18px;line-height:1.33;}
	
	.process1 li {display: inline-block; vertical-align: top; width:45%; height:215px !important; margin: 0 10px 15px; padding: 45px 20px 0; background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px; }
    
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
        <a href="/page/s5/s4.php" class="btn link ">지역희망박람회</a>
		<a href="/page/s5/s5.php" class="btn link current">대한민국 균형발전박람회</a>
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
        <div class="w1280"><img src="/assets/images/sub/home_ico.png" alt="home"> &nbsp; &gt; &nbsp; 역사관 &nbsp; &gt; &nbsp; <strong>대한민국 균형발전박람회</strong></div>
    </section>
    <!-- 서브 breadcrumb -->

    <section class="section-1">
       <div class="tabs w1200">
         <div class="inner">
            <a href="/page/s5/s5.php" class="active">2017</a>
            <a href="/page/s5/s51.php" class="">2018</a>
            <a href="/page/s5/s52.php" class="">2019</a>
            <a href="/page/s5/s53.php" class="">2020</a>
            <a href="/page/s5/s54.php" class="">2021</a>
        </div>
     </div>
		<div class="title-wrap">
			<h2 class="title">2017 대한민국 균형발전박람회</h2>
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
                                <td><span>2017. 11.22.(수) ~ 11.25.(토) / 부산 BEXCO 제2전시장</span></td>
                                <td rowspan="4"><p class="tac photo"><img src="/@resource/images/@temp/s54_2017.jpg"></p></td>
                            </tr>
                            <tr>
                                <th>슬 로 건</th>
                                <td><span class="blue" ><b>지역이 강한 나라, 균형잡힌 대한민국</b></span></td>
                            </tr>
                            <tr>
                                <th>주 제</th>
                                <td><span class="txt24 black_444" ><b>국가균형발전, 청년일자리</b></span></td>
                            </tr>
							<tr>
                                <th>추진 목적</th>
                                <td><span class="black_444" ><b>문재인 정부 출범에 따라 국정과제와 연계한 균형발전정책 비전을 제시하고,<span class="inline_768">국민‧지역의 관심도 제고를 위한 소통의 장 운영</span></b></span></td>
                            </tr>
							<tr>
                                <th>추진 체계</th>
                                <td colspan="2" ><p class="r_title" >주 최</p><span style="display:inline-block;">지역발전위원회 + 17개 광역 시‧도 + 13개 부처*</span><br>
                                <span class="blue">* 산업통상자원부, 기획재정부, 교육부, 과학기술정보통신부, 행정안전부, 문화체육관광부, 농림축산식품부, 보건복지부, 고용노동부, 여성가족부, &nbsp;&nbsp;국토교통부, 해양수산부, 중소벤처기업부</span><br>
                                       <p class="r_title" >주 관</p><span style="display:inline-block;">한국산업기술진흥원</span><br>
                                       <p class="r_title" >후 원</p><span style="display:inline-block;">일자리위원회</span>
                                </td>
                            </tr>
							<tr>
                                <th>행사 특징</th>
                                <td colspan="2"><span style="color:#1e8dc5;"><b>청년이 참여하는 청년 중심의 박람회이자 다양한 균형발전 정책을 제안하고 의견을 수렴하는 소통 중심의 박람회</b></span></td>
                            </tr>
                            <tr>
                                <th>주요 내용</th>
                                <td colspan="2"><span class="black_444" ><b>① 지역 및 국가발전의 주역으로서 청년들이 적극적으로 참여하는 한편, 일자리 창출을 촉진하는 계기 마련<bR>
② 공급자(정부) 중심의 단순 정책홍보가 아닌정책 수요자(국민) 의견이 반영되는 소통과 참여의 행사로 구성</b></span></td>
                            </tr>
                             <tr>
                                <th>행사 구성</th>
                                <td colspan="2">
                                
                                <div class="process">
                                   <ul class="tac">
					                   <li style=" height:160px;">
						                 <div class="txt_wrap">
							               <p class="num">본행사</p>
							               <p class="txt lh15">- 개막식, 전시회, 일자리박람회</p>
						                </div>
					                 </li>
                                   
                                     <li style="background-color:#fdf7f3; height:160px;">
						                 <div class="txt_wrap">
							               <p class="num">부대행사</p>
							               <p class="txt lh15">- 컨퍼런스, 청년소통의장, 우수사례발표회, 청년아트마켓</p>
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
                                <td><span class="black_444" ><b>新정부 균형발전 박람회의 첫 행사로 중앙∙지방간 소통 및 균형발전의 장 개막 선포</b><br>- 입장 및 국민의례, 균형발전 개막 선언, 개회사 및 환영사, 한전 에너지밸리 투자 협약식, 유공자 포상, 격려사</span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">전시회</th>
                                 <td><span class="black_444" ><b>균형발전정책의 5大핵심요소*   중심으로 31개 전시관**을 배치하고,일자리 정책 브리핑 등을 통해 現정부의 핵심가치 전시</b><br>* ❶ 공간중심 / ❷ 사람중심 / ❸ 산업중심 / ❹ 삶의질 / ❺ 지역혁신<br>
 ** 지역위 + 시도(17개) + 부처(11개) + 평창올림픽관 + 사회적경제관</span></td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">일자리<br>박람회</th>
                                 <td><span class="black_444" ><b>전국적인 일자리 활성화 촉진 위해 전국 동시 일자리 박람회 개최</b><br>- 채용설명회 : 부산지역 기업․기관의 인사담당자 참석‧채용설명<br>
 - 공공부문 채용지도 : 대형스크린으로 「한눈에 보는 '18년 지방이전 공공기관 채용 지도」를 게시하여 취업준비생들의 취업활동 지원<br>
 - 전국동시 일자리박람회 : 전국 15개 시·도 31개 행사 <br> 
 - 일자리위원회 : ‘지자체 일자리경진대회’ 통해 발굴된 우수 일자리 창출사례 등을 전시‧홍보 </span></td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">컨퍼런스</th>
                                 <td><span class="black_444" ><b>균형발전 관련 12개 주제별 컨퍼런스를 연계 개최하여 정책 비전을 공감 ∙ 확산하고, 적극적 소통의 장 마련</b></span><br>
                                 <p class="r_title3">균형발전 컨퍼런스</p><BR>
                                 <div style="width: 33%;  display: inline-block; vertical-align:top;">
                                 <span class="black_444" ><b>① 혁신도시 및 지역투자</b><br>- 지역특화금융 정책 심포지엄<br>
 - 지역별 혁신도시 시즌2 구상과 실천방안<br>
 - 지역시장 특화기반의 지역산업 육성전략<span class="inline_768">&nbsp; 정책토론회<br></span>
 - [지역교통체계개선]컨퍼런스</span></div>
                                
                                <div style="width: 33%;  display: inline-block; vertical-align:top;">
                                 <span class="black_444" ><b>② 지역자원 및 농산어촌</b><br>- 지역문화유산 발굴·육성<br>
 - 대한민국 균형 발전을 위한 지역 관광 활성화<span class="inline_768">&nbsp; 컨퍼런스<br></span>
 - 신 지역자원을 활용한 지역경제 활성화 사업<br>
 - 해양 신지역 자원을 활용한 지역경제<br>&nbsp;&nbsp;활성화 사업<br>
 - 농촌신활력플러스의 성공을 위한 전략모색<br>
 - 농촌의 사회적 경제와 사회적 농업<br><br></span></div>
                                    
                                    <div style="width: 33%;  display: inline-block; vertical-align:top;">
                                 <span class="black_444" ><b>③ 교육 및 글로벌 협력</b><br>- 지역대학 활성화 컨퍼런스<br>
 - 지방정부의 글로벌 협력 정책토론회</span></div>
 
                                  <p class="r_title3">지역혁신 컨퍼런스</p><BR>
<div style="width: 33%;  display: inline-block; vertical-align:top;">
 - 2017년 혁신도시 투자유치 설명회<BR>
 - 지역산업진흥 유공 시상식 및 우수사례발표<BR>
 - 제4기 지역사업 옴부즈만 1차 정기회의<BR>
 - 한국테크노파크협의회 이사회<BR>
 - 희망이음 프로젝트 Cheer-Up 캠프<BR>
 - 지역사업평가단 워크샵<BR>
 - 2017년 국가균형발전 정보협력 컨퍼런스</div>
 <div style="width: 33%;  display: inline-block; vertical-align:top;">
 - 국가균형발전을 위한 국제 지역정책 석학<span class="inline_768">&nbsp; 초청 좌담회<BR></span>
 - 지역 혁신성장·포용적 성장을 위한 균형발전전략<span class="inline_768">&nbsp; 모색 국제학술 심포지엄<BR></span>
 - 혁신성장시대, 지역을 바라보는 시각<BR>
 - 특성화고 취업진로 교육세미나<BR>
 - 지역기업 수출활성화 지원 성과공유회<BR>
 - (사)한국지역학회 특별 컨퍼런스<BR>
 - 2017년 풀뿌리기업육성사업 생산제품<br>&nbsp;&nbspMD 품평회<BR>
 - 지역중소·중견 R&D 산업인턴 지역사업 워크숍<BR>
 - 중소·중견기업 기술전략기획교육</div>
                                 
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">균형발전<BR>유공 시상식</th>
                                 <td><span class="black_444" ><b>① 공감대 형성 : 지역 주민이 체감할 수 있는 균형발전 우수사례 발표회를 통한 대국민 공감대 형성 및 사례 공유·확산<BR>
② 유공시상 : 지역 산업 경쟁력 제고 및 지역 경제 활성화에 기여한 공로자, 지역혁신 우수사례 선정자 등 유공자에 대한 포상 수여 </b><br> 
- 총 57점(대통령 6점, 국무총리 8점, 지역위원장 10점, 산업부 장관 33점) </span></td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">청년<BR>소통의 장</th>
                                 <td><span class="black_444" ><b>지역별 청년 공연 팀이 참여하며 관객들과 소통하고 공연 후 이어지는 청년CEO들의 강연으로 연결, 청년들의 박람회 참여 제고 추진</b><BR><br></span>
                                      <p class="r_title3">김제동의 특별강연</p><BR>- 서울 밖에도 청년이 있다 : 지역 청년들의 삶<BR>
 - 말은 제주로 보내고, 사람은 서울로 보내라고? : 균형발전이란?<BR>
 - 청년이여, 스스로 변방에 서라 : 서울 콤플렉스를 벗자                                 
                                 </td>
                            </tr>
                              
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">체험 및<br>주민참여<br>프로그램</th>
                                <td><span class="black_444" ><b>청년과 가족단위 방문객의 관심도 제고 및 즐기면서 박람회를 관람할 수 있는 다양한 프로그램 구성 (11.22~25 박람회기간 수시 운영)</b><BR><br></span>
                                <div class="process1">
                                   <ul class="tac">
					                   <li style=" height:290px;">
						                 <div class="txt_wrap">
							               <p class="num">청년 아트마켓 아마존</p>
							               <p class="txt lh15">- 청년 아티스트들이 직접 만든 공예품,<br>&nbsp; 악세서리 등으로 구성된 판매 품목이 주를<br>&nbsp; 이루어 청소년, 청년층들을 주 타겟으로<br>&nbsp;  활발한 분위기 조성 가능</p>
						                </div>
					                 </li>
                                     <li style=" height:290px;">
						                 <div class="txt_wrap">
							               <p class="num">휴게&체험존 구성</p>
							               <p class="txt lh15">- 관람객 휴식을 위한 공간인 동시에<br>&nbsp; 청년CEO들의 사업 아이템 체험 공간<br>&nbsp; 역할을 하는 휴게&체험존 조성</p>
						                </div>
					                 </li>
                                     <li style="background-color:#fdf7f3; height:290px;">
						                 <div class="txt_wrap">
							               <p class="num">청년CEO 라운지 - 스타트업, 식사는 하셨습니까</p>
							               <p class="txt lh15">- 스타트업 기업 청년CEO와 이색직업<br>&nbsp; 청년들의 제품, 아이디어를 소개하는 <br>&nbsp; 공간. 청년들이 소통하며 아이디어를<br>&nbsp; 공유하고, 교류하는 공간 구성<br>
 - 선배 CEO들이 방문하여 함께 식사하는 <br>&nbsp; 프로그램 연계</p>
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
               
               
               <h5 class="sv4-mtit pt50">홍보</h5><div class="table_wrap sv41-03 no-thumb">
           <div class="table_basic">
                    <table>
						<colgroup>
							<col width="13%" />
                            <col width="84%" />
						</colgroup>
                        <tbody>
                            <tr>
                                <th style="background-color:#f5fbea;">홍보 활동</th>
                                 <td><div class="box" style="width: 32%;  display: inline-block; "><p class="r_title3">언론</p><span>
- 보도자료<br>
 - 방송 뉴스 보도 : YTN, OBS, 목포KBS,<br>&nbsp;&nbsp;광주KBS, KNN 등 10건<br>
 - 방송 인터뷰 : KNN 파워토크, 11월 19일(일),<br>&nbsp;&nbsp;지역위원장 인터뷰<br>
 - 기획기사 <br>
 - 지면 인터뷰<br>
 - 기고</span></div>
                            <div class="box" style="width: 32%;  display: inline-block;  vertical-align:top; "><p class="r_title3">온라인</p><span>
 - 홈페이지를 중심으로, 배너, 키워드 광고,<br>&nbsp;&nbsp;블로그 기자단 등 다양한 온라인<br>&nbsp;&nbsp;홍보 프로그램 진행 </span></div>
 
                             <div class="box" style="width: 32%;  display: inline-block; vertical-align:top;  "><p class="r_title3">오프라인</p><span>
 - 통천, 현수막, 배너 등 세종, 서울, 대전, 과천 등<br>&nbsp;&nbsp;4개 정부청사 내 홍보<br>
 - KTX 매거진, 오송역 전광판 등 지역 관계자들에<br>&nbsp;&nbsp;특화된 홍보</span></div>
                                </td>
                            </tr>
                             <tr>
                                <th style="background-color:#f5fbea;">홍보 실적</th>
                                <td><span class="black_444" ><b>언론 </b><br> - 언론 보도 총 1,044건(방송 10건, 신문 118건, 온라인 916건)</span>
                                <span class="black_444" ><b>온라인 </b><br> - 홈페이지 방문자 일평균 31,590회 조회수로, 전년(7,209회)대비 4.38배 증가<br>
 - 바이럴 영상, 지역위원장 인터뷰 영상, 카드뉴스 등 SNS에 적합한 온라인 콘텐츠 제작 및 배포를 통해 청년층에 대한 인지도 제고 <br>
 * 1.5만회의 바이럴 영상 조회로 SNS 상의 박람회 노출 효과 극대화 <br>
 - 인기 팟캐스트 내 PPL 및 광고를 진행해서 정책 관심층에 대한 인지도 제고 등</span></td>
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
                                <td><span class="black_444" ><b>① 문재인 정부 출범 후 첫 번째 균형발전박람회로서 균형발전정책 방향에 대한 중앙-지역-주민간 소통 및 공감대 형성의 장 마련</b><br>
 &nbsp;&nbsp;* 개막식 868명, 전시회 36,710명, 일자리박람회(벡스코) 1,616명, 컨퍼런스 2,527명 등 총 41,721명 방문<br>
<b>② 국무총리, 지역위원장, 지방자치위원장, 17개 시도(단체장2, 부단체장15), 14개 부처․청(장관4, 차관급5) 등 참여하여 개막식, 전시회 참관</b><br>
<b>③ 지역청년들이 참여한 전시관 구성․운영으로 지역별 우수정책사례에 대한 보다 생생한 소개 및 공유‧확산의 장 마련<br>
&nbsp;&nbsp; * 총리 등 주요참석자들의 전시회 관람시 정책수혜자(지역기엄인‧청년 등)와의 소통으로 균형발전정책에 대한 공감대 형성의 장 마련</b><br>
<b>④ 15개 시도별 총 31개의 일자리 행사 개최(전국동시일자리박람회)</b><br>
&nbsp;&nbsp; * 총 692개 기업, 16,012명이 참여, 현장채용 524명, 1차 합격자 1,715명</span>
                               </td>
                            </tr>
                            <tr>
                                 <th>개선점 및<br>향후<br>추진 방향</th>
                                <td><span class="black_444" ><b>① 박람회 일정 확정 및 VIP 참석여부에 대한 경정이 늦어져서 효율적이고 체계적인 홍보 프로그램 진행에 다소 미흡</b><br>

<b>② 공급측면의 단순 정책 홍보가 아닌 수요자 중심의 소통 박람회 지향, 미래세대에 희망을 주는 일자리, 산업 중심의 박람회 개최 필요</b><br>
&nbsp;&nbsp; - 공급자(정부) 중심의 단순 정책홍보가 아닌 정책 수요자(국민) 의견이 반영되는 소통과 참여를 중시한 박람회로 방향설정<br>
&nbsp;&nbsp; - 지역 및 국가발전의 주역인 미래세대 청년들의 적극적 참여를 이끄는 일자리 창출을 촉진하는 박람회에 필요</span>
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
						<p class="square_img"><img src="/@resource/images/2017/01.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/02.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/03.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/04.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/05.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/06.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/07.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/08.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/2017-1.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/2017-2.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/2017-3.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/2017-4.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/2017-5.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/2017-6.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/2017-7.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/2017-8.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/2017-9.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2017/2017-10.png"></p>
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
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/iULGU2NWXQM" title="2017 대한민국균형발전박람회" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">2017 대한민국균형발전박람회</p>
					</li>
                    <li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/IooFygSgT74" title="[현장소식] 2017 대한민국 균형발전 박람회" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">[현장소식] 2017 대한민국 균형발전 박람회</p>
					</li>
                </ul>
                
                
         
        </div>
        </div>
	</section>
    
</div>
<!-- // 서브 본문 -->

<?php include_once('../../_tail.php');?>


