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
.r_title4 {position: relative;background-color:#46b500;padding: 2px 0;font-size:18px;color:#fff;font-weight: 500;border-radius: 30px;width: 295px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}
.r_title5 {position: relative;background-color:#d97f28;padding: 2px 0;font-size:18px;color:#fff;font-weight: 500;border-radius: 30px;width: 295px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}

.pt50 { padding-top:50px;}
.pt30 { padding-top:30px;}

.process {width: 100%;position: relative;display: inline-block;float: left;}
.process ul {text-align: center;display: inline-block;font-size:16px; width:100%;}
.process li {display: inline-block;vertical-align: top;width: 23%;margin: 0 15px 15px 0;padding: 50px 15px;border-radius:0%;background-color: #fdf7e3;position: relative;float: left;word-break:keep-all;/* height: 350px; */}
.process li:nth-child(2n) {background-color: #f3f8fd; z-index:1; }
.process li .txt_wrap {position: absolute; left: 0; width: 100%;  z-index: 1; color: #000; display:contents;}
.process li .txt_wrap .num {display: inline-block; line-height: 1; color:#000; padding-bottom: 10px; letter-spacing:-1px; font-weight:bold; border-bottom: 1px solid rgba(255,255,255,0.3); line-height:150%;}
.process li .txt_wrap .txt { text-align:left; }


.process1 {width: 100%;position: relative;display: inline-block;float: left;}
.process1 ul {text-align: center;display: inline-block;font-size:16px; width:100%;}
.process1 li {display: inline-block; vertical-align: top; width: 48%;  margin: 0 5px 15px; padding: 50px 15px 0; border-radius:0%; background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; }
.process1 li:nth-child(2n) {background-color: #f3f8fd; z-index:1; }
.process1 li .txt_wrap {position: absolute; left: 0; width: 100%;  z-index: 1; color: #000; display:contents;}
.process1 li .txt_wrap .num {display: inline-block; line-height: 1; color:#000; padding-bottom: 10px; letter-spacing:-1px; font-weight:bold; border-bottom: 1px solid rgba(255,255,255,0.3);}
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
	
	.process li {display: inline-block; vertical-align: top; width:45%;  margin: 0 10px 15px; padding: 45px 20px 0;  background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px;  height:490px !important;}
	.txt24 {font-size:18px;line-height:1.33;}
	
	.process1 li {display: inline-block; vertical-align: top; width:45%; height:275px !important; margin: 0 10px 15px; padding: 45px 20px 0; background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px; }
    
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
            <a href="/page/s5/s5.php" class="">2017</a>
            <a href="/page/s5/s51.php" class="">2018</a>
            <a href="/page/s5/s52.php" class="active">2019</a>
            <a href="/page/s5/s53.php" class="">2020</a>
            <a href="/page/s5/s54.php" class="">2021</a>
        </div>
     </div>
		<div class="title-wrap">
			<h2 class="title">2019 대한민국 균형발전박람회</h2>
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
                                <td><span>2019. 9.25.(수) ~ 9.27.(금) / 순천만국가정원, 순천만생태문화교육원 일대<bR>※ 9.12.~10.20. 정원갈대축제연계</span></td>
                                <td rowspan="4"><p class="tac photo"><img src="/@resource/images/@temp/s54_2019.jpg"></p></td>
                            </tr>
                            <tr>
                                <th>슬 로 건</th>
                                <td><span class="blue" ><b>지역이 주도하는 혁신, 실현되는 균형발전</b></span></td>
                            </tr>
                            <tr>
                                <th>주 제</th>
                                 <td><span class="txt24 black_444" ><b style="line-height:170%;">“국가균형발전, 지역혁신”</b></span>혁신적 포용국가를 위한 균형발전</td>
                            </tr>
							<tr>
                                <th>추진 목적</th>
                                <td><span class="black_444" ><b>새로운 국가균형발전정책을 확산하고, 국민·지역의 관심도 제고 위한 소통의 장으로서「대한민국 균형발전박람회」개최</b></span></td>
                            </tr>
							<tr>
                                <th>추진 체계</th>
                               <td colspan="2" ><p class="r_title" >주 최</p><span style="display:inline-block;">국가균형발전위원회, 산업통상자원부, 17개 시‧도</span><br>
                                   <p class="r_title">후 원</p><span style="display: -webkit-inline-box;">기획재정부, 교육부, 과학기술정보통신부, 행정안전부, 문화체육관광부, 농림축산식품부, 보건복지부, 환경부, 국토교통부,<br>여성가족부, 해양수산부, 중소벤처기업부, 전라남도교육청</span><br>
                                   <p class="r_title" >주 관</p><span style="display:inline-block;">전라남도, 순천시, 한국산업기술진흥원, 한국생산성본부</span>
                                </td>
                            </tr>
							<tr>
                                <th>행사 특징</th>
                                <td colspan="2"><span style="color:#1e8dc5;"><b>사람‧공간‧산업 주제 지역별 우수사례를 전시하고, 지역혁신가, 전국단체, 지역혁신협의회 등을 중심으로 사례 공유 및 교류의 장 마련</b></span></td>
                            </tr>
                            <tr>
                                <th>주요 내용</th>
                                <td colspan="2"><span class="black_444" ><b>2004년 이후 매년 열리는 균형발전 성과 공유의 장으로서 사흘간 전시박람회, 정책박람회, 국민참여박람회 및 부대행사 진행</b></span></td>
                            </tr>
                             <tr>
                                <th>행사 구성</th>
                                <td colspan="2">
                                
                                <div class="process">
                                   <ul class="tac">
					                   <li style=" height:620px;">
						                 <div class="txt_wrap">
							               <p class="num">[본행사]<br>주요인사 참석</p>
							               <p class="txt lh15">‣ 개막식<br>‣ 개막 축하공연<br>&nbsp;&nbsp;- 순천교향악축제</p>
						                </div>
					                 </li>
                                    <li style=" height:620px;">
						                 <div class="txt_wrap">
							               <p class="num">[전시박람회]<br>일반국민대상</p>
							               <p class="txt lh15">‣ 균형발전정책관<br>
&nbsp;&nbsp;- 균형발전위원회<br>

‣ 시도전시관<br>
&nbsp;&nbsp;- 17개 광역시도<br>
&nbsp;&nbsp;- 순천시<br>

‣ 지역특별관<br>
 &nbsp;&nbsp;- 시군구 우수사례<br>
 &nbsp;&nbsp;  (별도공모선정)<br>

‣ 혁신관<br>
&nbsp;&nbsp;- 지역혁신활동사례 전시<br>&nbsp;&nbsp;&nbsp; 및 체험<br>
&nbsp;&nbsp;- 혁신도시/지역산업<br>&nbsp;&nbsp;&nbsp; 혁신 사례<br>
&nbsp;&nbsp;- 남해안남중권홍보<br>
&nbsp;&nbsp;- 혁신도시 공공기관<br>&nbsp;&nbsp;&nbsp; 우수사례<br>

‣ 지역 마켓<br>
&nbsp;&nbsp;- 17개 시도 특산품 전시<br>&nbsp;&nbsp;&nbsp; 및 판매</p>
						                </div>
					                 </li>
                                   
                                     <li style="background-color:#fdf7f3; height:620px;">
						                 <div class="txt_wrap">
							               <p class="num">[정책박람회]<br>학·연 전문가</p>
							               <p class="txt lh15">‣ 개막 세션<br>
&nbsp;&nbsp;- 정책컨퍼런스 개막<br>

‣ 학회세션<br>
&nbsp;&nbsp;- 포용, 혁신, 분권주제에<br>&nbsp;&nbsp;&nbsp; 따른 토론<br>

‣ 국제세션<br>
&nbsp;&nbsp;- 해외정책사례공유,<br>&nbsp;&nbsp;&nbsp; 논의(한‧일‧베)<br>

‣ 특별세션<br>
&nbsp;&nbsp;- 남해안 관광 벨트, c생활SOC</p>
						                </div>
					                 </li>
                                     
                                     <li style="background-color:#f5fbea; height:620px;">
						                 <div class="txt_wrap">
							               <p class="num">[국민참여박람회]<br>일반인·혁신활동가</p>
							               <p class="txt lh15">
‣ 지역혁신가대회<br>
&nbsp;&nbsp;- 혁신활동가네트워크<br>
&nbsp;&nbsp;- 지역혁신협의회총회<br>
&nbsp;&nbsp;- 지역혁신가워크샵<br>
&nbsp;&nbsp;- 청년혁신네트워크<br>

‣ 국민참여프로그램<br>
&nbsp;&nbsp;- 균형발전 아이디어 공모전<br>
&nbsp;&nbsp;- 전국사회혁신가대회<br>

‣ 지역특화프로그램<br>
&nbsp;&nbsp;- 정원갈대축제<br>
&nbsp;&nbsp;- 한평정원 페스티벌<br>
&nbsp;&nbsp;- 푸드아트페스티벌<br>
&nbsp;&nbsp;- 람사르협약<br>&nbsp;&nbsp;&nbsp; 독립자문위원회<br>&nbsp;&nbsp;&nbsp; 회의<br>
&nbsp;&nbsp;- 순천교향악축제
</p>
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
                                <td><span class="black_444" ><b>개회사, 축사, 유공자포상, 지역혁신 사례발표, 균형발전 퍼포먼스 등</b></span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">전시<br>박람회</th>
                                <td>
                                  <div style="width: 50%;  display: inline-block;  vertical-align:top; "> 
                                       <p class="r_title1">균형발전정책관</p><span>- 국민들에게 국가균형발전의 필요성을 인식시키고, 문재인 정부<span class="inline_768">;&nbsp;  국가균형발전 비전과 전략, 5개년계획을 바탕으로 주요정책 소개<br><br></span>
                                  </div>
                                  <div style="width: 48%;  display: inline-block;  vertical-align:top; ">
                                       <p class="r_title1">지역특별관</p><span>-기초지차제(시군구)의 균형발전 우수활동 사례 소개<br>
 * (사례발굴) 지역산업진흥 유공자 포상공고시 시군구 우수사례 공모</span>
                                   </div>
                                    <div style="width: 50%;  display: inline-block;  vertical-align:top; ">
                                       <p class="r_title1">시도 전시관</p><span>- 주제 : 개최지 (전남 및 순천)<br>
 - 주제 : 산업 (대전, 광주, 경남, 전북, 충북)<br>
 - 주제 : 공간(경기, 충남, 세종, 제주, 부산)<br>
 - 주제 : 사람 (강원, 대구, 경북, 서울, 인천, 울산)<br><br></span>
                                    </div>
                                   <div style="width: 48%;  display: inline-block;  vertical-align:top; ">
                                       <p class="r_title1">혁신관</p><span>- (전시 운영) 청년 지역혁신관, 산업통상자원부,<br>&nbsp;&nbsp; 남해안남중권발전협의회, 국토교통부, 한국수력원자력,<br>&nbsp;&nbsp; 한국토지주택공사, 한국산업기술평가관리원,<br>&nbsp;&nbsp; 혁신도시투자유치관</span>
                                    </div>
                                    <div style="width: 50%;  display: inline-block;  vertical-align:top; ">
                                       <p class="r_title1">지역마켓</p><span>-  각 지역별 특징을 표현한 대표 특산물 전시 및 판매<br>
 &nbsp;&nbsp; * 17개 시도 및 기초단체 지역까지 포함<br>
 - 박람회 관람객 및 운영인력 대상 푸드코트 조성<br>
 &nbsp;&nbsp;  * 푸드트럭 또는 푸드카트, 밥차 등 쉼터 및 식음공간 운영<br>
 - 10개 광역 지자체 참여, 총 68개 부스<br>
  &nbsp;&nbsp; * 전남(22), 순천시(11), 전북(6), 경남(7), 충남(5), 충북(2), <Br> &nbsp;&nbsp;&nbsp;&nbsp; 경기(2), 강원(1), 제주(5), 대전(3), 세종(4)</span>
                                    </div>
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">정책<br>박람회</th>
                                 <td><span class="black_444" ><b>문재인 정부 국가균형발전 정책의 중간 점검 및 향후과제에 대한 지식인들의 토론의 장 마련</b><br>- 수도권 인구 집중 등 지역 간 불균형 문제 해결을 위한 ‘중앙과 지방 협력 방안’모색<br>
 - 지역발전투자협약, 생활SOC사업, 지역산업활성화 등 균형발전정책에 대한 이론적 논의와 사례 발표<br>
&nbsp;&nbsp;* 슬로건 : 혁신으로 지역 상생<br>
&nbsp;&nbsp;** 주제 : ➊포용 ❷혁신 ❸분권 (문재인 정부 균형발전 3대가치)</span><br>
                                 <p class="r_title2">세션별 주요내용</p><BR>
&nbsp;&nbsp;* 1일차 : 개막식 및 개막세션, 국제세션, 학회세션 등으로 진행<br>
&nbsp;&nbsp;* 2일차 : 학회세션 등<br> 
 - 개막세션 : 대통령의 경제투어로 본 지역혁신<br>
 - 국제세션 : 일본과 베트남의 지역발전정책<br>
 - 학회세션 : 4부로 나누어서 진행, 포용·혁신·분권 중심 37개의 주제세션, 지역사회의 혁신과 청년, 지역도시의 재생을 위한 관광의 역할,<span class="inline_768">&nbsp; 인구감소와 지방소멸 대응전략, 청년의 인구 이동과 장소선택 등</span> 
                                 
                                </td>
                            </tr>
                            
                           

                            <tr>
                                <th style=" background-color:#fdf7e3;">국민참여<br>박람회<br>(지역혁신가 대회)</th>
                                <td><p class="r_title4">혁신활동가 네트워크 박람회</p><span>- 각 지역 현장에서 활동하는 혁신활동가, 단체를 발굴 및 네트워크화하여 지역혁신역량을 강화하고, 포용적 균형발전의 지역기반 마련<br>
 - 2019 대한민국 균형발전박람회(순천) 행사에서 ‘혁신활동가 전국 협의회’ 출범, 광역단위 부문영역 네트워크를 통한 지역협력 기반 조성과<span class="inline_768">&nbsp; 생활SOC 복합화 혁신역량 강화<br></span>
 - 국민생활과 밀접한 부문영역 지역혁신역량 확대를 통해 전국 어디서나 골고루 잘 살 수 있는 균형발전 정책과 사업을 226개 지방정부로 확산<br>
 &nbsp;&nbsp;* 개막세션 : 혁신활동가 전국협의회 출범식, 어울림한마당 등<br>
 &nbsp;&nbsp;* 개별세션 : 주제발표 및 토론 (병렬 개별세션 7개)<br>
 &nbsp;&nbsp;* 특별세션 : 혁신활동가 전국 정책집담 & 네트워크 파티, 기초지방정부 소통 워크숍</span><br>
                                   <p class="r_title4">지역혁신협의회 총회</p><span>- 전국총회 : 활동보고, 17개 시·도 지역혁신협의회 소개, 발전방안 제언 등<br>
- 정책세미나 : 기조강연(포용국가와 신균형발전), 유공자포상, 주제발표 및 토론 등</span><br>
                                   <p class="r_title4">지역혁신가 워크샵</p><span>- 2019 국가균형발전박람회의 주체로 직접 참가하여‘사람 중심 국가 균형발전의 주인공’으로서 지역혁신가의 위상 부여<bR>
 - 2018년에 이어 올해 신규 선정된 지역혁신가들 간 첫 만남으로, 다양한분야의 활동사례 공유를 통해 혁신에 혁신을 더하는 장 마련</span><br>
                                   <p class="r_title4">청년 혁신가 네트워킹</p><span>- 지역에 활력을 불어넣는 청년혁신가 사례공유 및  네트워크 형성<br>
 &nbsp;&nbsp* 사례발표 : 청년혁신 활동 사례발표 및 질의응답</span>
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">대한민국<BR>균형발전박람회<BR>대국민<BR>공모전</th>
                                <td><span class="black_444" ><b>균형발전 아이디어 피칭대회 & 사회혁신가 in 순천</b><br>- 2019 대한민국 균형발전박람회 대국민 공모전 본선 현장 발표 참여자들 중 희망자 접수<br>
 - 보팅시스템을 통해 아이디어 판정에 참여, “좋아요”를 누른 판정단 수에 따라 1~5 점의 가점 부여, 시민판정단에 균형발전박람회 기념품 제공</span>
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">부대행사</th>
                                <td><div class="process1">
                                   <ul class="tac">
					                   <li style=" height:300px;">
						                 <div class="txt_wrap">
							               <p class="num">토크콘서트 ‘대화의 정원’</p>
							               <p class="txt lh15">- 관람객과 패널이 함께 만들어가는<br>&nbsp; 오픈형 토크콘서트와 스타 릴레이<br>&nbsp; 강연으로 박람회 일반 관람객 유치<br>&nbsp; 및 행사 관심도 고취<br>
 - 서경석 토크콘서트 ‘나를 바꾸는 힘!’,<br>&nbsp; 릴레이 특강 ‘나를 깨우는 힘!’,<br>&nbsp; 릴레이 특강 ‘나를 만드는 힘!’</p>
						                </div>
					                 </li>
                                     <li style=" height:300px;">
						                 <div class="txt_wrap">
							               <p class="num">버스킹 가든 스테이지</p>
							               <p class="txt lh15">- 전국 청춘 예술가들에게 무대에 설 기회를<br>&nbsp; 제공하고 지역 예술문화 발전을 도모하기<br>&nbsp; 위해 각 지역을 중심으로 활발히<br>&nbsp; 활동하고 있는 로컬 및 인디밴드<br>&nbsp; 공연 진행 </p>
						                </div>
					                 </li>
                                     <li style="background-color:#fdf7f3; height:300px;">
						                 <div class="txt_wrap">
							               <p class="num">스탬프랠리</p>
							               <p class="txt lh15">- 17개 시도 전시관 및 정책관,<br>&nbsp; 공기업부스 등 전시관 내외 26개 부스에서<br>&nbsp; 스탬프를 받아오면 경품을 받을 수 있는<br>&nbsp; 스크래치 카드를 제공, 해당하는<br>&nbsp; 다양한 경품 제공</p>
						                </div>
					                 </li>
                                     
                                     </ul>
                                    
                                </div> 
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">지역특화<BR>및 기타<BR>프로그램</th>
                                <td><p class="r_title3">지역특화 프로그램</p><span>- 2019 정원갈대축제, 제6회 대한민국 한평정원 페스티벌, 2019 순천 푸드아트 페스티벌, 람사르협약 독립자문위원회 회의</span><br>
                                   <p class="r_title3">기타 프로그램</p><span>- 2019년 균형발전사업 우수사례 시상식, BH지역기자단, 순천시장 주재 만찬간담회, 혁신도시 투자유치설명회</span>
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
                            <col width="87%" />
						</colgroup>
                        <tbody>
                            <tr>
                                <th style="background-color:#f5fbea;">홍보 활동</th>
                                 <td><div class="box" style="width: 31.5%;  display: inline-block; "><p class="r_title3">언론</p><span>
 - 보도자료<br>
 - 보도사진<br>
 - 프레스센터<br>
 - 방송 대담<br>
 - 방송제작<br>
 - 방송보도<br>
 - 기고<br>
 - 기획기사<br>
 - 통신사 광고<br>
 - 방송 광고<br><br></span></div>
                            <div  class="box"style="width: 31.5%;  display: inline-block;  vertical-align:top; "><p class="r_title3">온라인</p><span>
 - 홈페이지<br>
 - 유튜브 및 유관기관 SNS 활용<br>
 - 키워드광고(네이버 및 다음 사이트)<br>
 - 카드뉴스<br>
 - 스팟영상</span></div>
 
                             <div  class="box" style="width: 31.5%;  display: inline-block; vertical-align:top;  "><p class="r_title3">오프라인</p><span>
- 옥외광고 : 전광판, 건물 외벽 통천,<br>&nbsp;&nbsp;도로 현수막, 가로등 배너, 포스터 등<br>
 * 코레일 : 역사 내 매체를 통한 행사 광고 게재<br>
 * 도로공사 : 전국 휴게소 TV에 홍보 영상 송출<br>
 * 정부청사 : 포스터, 배너, 현수막, 통천 등<br>&nbsp;&nbsp;부착 및 게시</span></div>
                                </td>
                            </tr>
                             <tr>
                                <th style="background-color:#f5fbea;">홍보 실적</th>
                                <td><span class="black_444" ><b>언론 </b><br> - 언론 보도 총 1,839건(방송 31건, 지면 481건, 온라인 1327건)</span><bR>
                                   <span class="black_444" ><b>온라인 </b><br> - 홈페이지(누적 페이지뷰 944,463 / 방문자 수 20,858)<br>
 - 유튜브(국가균형발전위원회 채널 활용, 스팟 영상, 박람회 온라인 생중계, 박람회 기록 영상 등)<br>
 - 유관기관 SNS 활용(균형위, 산업부, KIAT 및 유관기관의 페이스북, 트위터 등)<br>
 - 유튜브광고(노출수 146,177 / 조회수 33,311)<br>
 - 키워드광고(네이버 노출수 131,969, 조회수 507 / 다음 노출수 271,691, 클릭수 794) </span></td>
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
                                <td><span class="black_444" ><b>① 기초지자체 주관으로 중소도시에서 처음으로 개최되었고, 국가정원이라는 야외공간을 활용하여 특색있는 박람회 분위기 조성</b><br>
&nbsp;&nbsp;- (방문객) 총 60,287명 (‘18년대비 122%↑) <br>
&nbsp;&nbsp; * (‘15) 95,740명,인천→(‘16) 68,270명,경기→(’17) 40,781명,부산→(’18) 27,180명,대전<br>
<b>② 기존의 정책 성과 홍보 위주 방식에서 벗어나, 지난해에 이어 지역혁신가, 정책전문가 등 다양한 혁신주체 간의 소통과 참여의 장 마련</b></span><br>
                              <p class="r_title3">세부 성과</p>
<span class="black_444" ><b>① (개막식) 균형발전위원장, 자치분권위원장, 전남지사, 순천시장, 시·도관계자, 지역혁신가 등 1,085명 참여 및 혁신사례 발표・공유</b><br>
 &nbsp;&nbsp;* 당초 예정보다 30분 초과, 주요 인사들의 전동차 이동에 따른 지연, 음향설비 오류 발생 <br>

<b>② (전시박람회) 균형발전정책관, ‘사람・공간・산업’ 주제의 18개 시도관 외 지역특별관(시군구), 지역혁신관(혁신사례) 등 다양한 주제로 구성*</b><br>
&nbsp;&nbsp;* 혁신도시 투자유치관(10개 혁신도시,국토부), 낙후지역 재생사례(국토부), 지역산업혁신관(산업부), 혁신도시 공공기업관(한수원, LH), <br>&nbsp;&nbsp;&nbsp; 남해안 남중권 홍보관, NABIS(균형발전종합정보시스템), 지역마켓(지역특산품 전시 등) 등<br>
&nbsp;&nbsp;** (관람객) 3일간 총 49,026명 관람<br>

<b>③ (정책박람회) ‘포용・혁신・분권’을 주제로 중앙-지방 협력 방안, 국내외 균형발전사례 공유 및 논의 등 토론의 장 마련</b><br>
&nbsp;&nbsp; * 수도권인구집중 등 지역간 불균형문제, 지역발전투자협약, 생활SOC, 지역산업활성화 등 다양한 분야의 의제 논의 및 학제간 융합을<br>&nbsp;&nbsp;&nbsp; 시도하는 계기 마련<br>
&nbsp;&nbsp;** (참여) 46개 학회 및 50여개 유관기관의 전문가 총 1,173명 참여<br>

<b>④ (국민참여박람회) 마을만들기・지역재생・문화 등 전국단체, 지역혁신가, 지역혁신협의회의 활발한 교류와 대국민 공모전 추진</b><br>
&nbsp;&nbsp;* 다양한 분야의 혁신주체間 교류 기회 제공, 지역현안해결을 위한 아이디어 제안발표로 첫 시도한 대국민 공모전을 통해 국민들의 관심과<br>&nbsp;&nbsp;&nbsp; 참여 확대 계기 마련<br>
&nbsp;&nbsp;** (참여) 지역혁신가, 청년활동가, 지역혁신협의회 등 총 1,665명 참여<br>

<b>⑤ (부대행사) 정원 곳곳에서 토크콘서트, 버스킹 공연, 개막축하공연(교향악축제)을 통해 즐길거리 제공, 스탬프랠리를 통해 전시관람 유도</b><br>
&nbsp;&nbsp;* 토크콘서트, 개막축하공연(순천교향악축제) 등으로 7,338명 참석</span><br>
 
 
 
                               </td>
                            </tr>
                            <tr>
                                 <th>개선점 및<br>향후<br>추진 방향</th>
                                <td><span class="black_444" ><b>① 행사장소가 실내외로 분산되어 관람객의 도보이동 불편</b><br>
&nbsp;&nbsp; - 지난해 대비 상대적 넓은 공간에서 관람객 휴게공간 등 편의제공은 양호하였으나, 야외정원↔교육원 행사장소간 도보 이동 불편<br>

<b>② 더운 날씨로 인해 야외에 설치된 68개 시군구 지역마켓(전시관 앞 지역특산물 전시) 이용 저조 및 근무자들 애로 발생으로 조기 철수</b><br>

<b>③ 평일에 진행되어, 학생ㆍ직장인 등 일반시민 등이 참관할 수 있는 기회가 차단되었음(주말 활용시 다수의 인원이 참관 가능)</b><br>
&nbsp;&nbsp; * 향후 개최 시 주중야간시간(18시이후) 및 주말 포함 고려<br>

<b>④ 지자체 공무원, 지역혁신가, 학‧연 정책전문가 등 참여자간 서로 긴밀히 소통할 수 있는 교류 프로그램 필요</b><br>

<b>⑤ 중앙정부 주도에서 지역주도로의 박람회 개최를 위해 개최지 지역의 균형발전 이슈와 균형발전 박람회 대표 정책 이슈 통일</b><br>
&nbsp;&nbsp; - 중앙정부 주도에서 지자체 주도 강화를 위한 지역과 정책현안의 매칭<br>
&nbsp;&nbsp; - 광역지자체 혁신사례 중심에서 기초지자체 혁신사례로 확대<br>
&nbsp;&nbsp; - 중앙정부에서 지역혁신활동가 발굴참여에서 개최지역 현장에 맞는 지역혁신활동가 추가 발굴</span>
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
						<p class="square_img"><img src="/@resource/images/2019/01.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2019/02.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2019/03.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2019/04.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2019/05.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2019/06.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2019/07.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2019/08.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2019/09.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2019/10.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2019/11.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2019/2019-1.png"></p>
					</li>
                     <li class="">
						<p class="square_img"><img src="/@resource/images/2019/2019-2.png"></p>
					</li>
                     <li class="">
						<p class="square_img"><img src="/@resource/images/2019/2019-3.png"></p>
					</li>
                     <li class="">
						<p class="square_img"><img src="/@resource/images/2019/2019-4.png"></p>
					</li>
                     <li class="">
						<p class="square_img"><img src="/@resource/images/2019/2019-5.png"></p>
					</li> 
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2019/2019-6.png"></p>
					</li> 
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2019/2019-7.png"></p>
					</li> 
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2019/2019-8.png"></p>
					</li> 
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2019/2019-9.png"></p>
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
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/goP7QyQmiMw" title="2019 대한민국 균형발전박람회 개최" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac"> 2019 대한민국 균형발전박람회 개최</p>
					</li>
                    <li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/iSbfEPh9V0g" title="2019 국가균형발전정책박람회" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">2019 국가균형발전정책박람회</p>
					</li>
                    <li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/p8jICDtZFHk" title="축제/행사 ] 2019 균형발전 박람회 성과 보고 영상" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">축제/행사 ] 2019 균형발전 박람회 성과 보고 영상</p>
					</li>
                </ul>
                
                
         
        </div>
        </div>
	</section>
    
</div>
<!-- // 서브 본문 -->

<?php include_once('../../_tail.php');?>


