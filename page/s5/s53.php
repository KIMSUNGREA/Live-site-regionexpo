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
.process li {display: inline-block;vertical-align: top;width: 31.5%;margin: 0 15px 15px 0;padding: 50px 15px;border-radius:0%;background-color: #fdf7e3;position: relative;float: left;word-break:keep-all;/* height: 350px; */}
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
	
	.process li {display: inline-block; vertical-align: top; width:45%;  margin: 0 10px 15px; padding: 45px 20px 0;  background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px;  height:270px !important;}
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
            <a href="/page/s5/s52.php" class="">2019</a>
            <a href="/page/s5/s53.php" class="active">2020</a>
            <a href="/page/s5/s54.php" class="">2021</a>
        </div>
     </div>
		<div class="title-wrap">
			<h2 class="title">온라인 「2020 균형발전박람회」</h2>
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
                                <td><span>2020. 11.9.(월)∼12.(목) (4일간 온라인 행사), 홈페이지 상시운영(~12월)</span></td>
                                <td rowspan="4"><p class="tac"><img src="/@resource/images/@temp/s54_2020.jpg"></p></td>
                            </tr>
                            <tr>
                                <th>슬 로 건</th>
                                <td><span class="blue" ><b>지역균형 뉴딜, 새로운 희망!</b></span></td>
                            </tr>
                            <tr>
                                <th>주 제</th>
                                 <td><span class="txt24 black_444" ><b>뉴딜을 통한 지역이 강한 나라</b></span></td>
                            </tr>
							<tr>
                                <th>추진 목적</th>
                                <td><span class="black_444" ><b>한국판 뉴딜정책과 지역균형뉴딜 정책에 대해서 비대면으로 대국민 접촉 및 홍보 강화</b></span></td>
                            </tr>
							<tr>
                                <th>추진 체계</th>
                                 <td colspan="2" ><p class="r_title" >주 최</p><span style="display:inline-block;">국가균형발전위원회, 산업통상자원부, 17개 시‧도</span><br>
                                       <p class="r_title">주 관</p><span style="display:inline-block;">충청북도, 청주시, 한국산업기술진흥원, 한국생산성본부</span><br>
<p class="r_title">후 원</p><span style="display: -webkit-inline-box;">기획재정부, 교육부, 과학기술정보통신부, 행정안전부, 문화체육관광부, 농림축산식품부, 보건복지부,<br>환경부, 여성가족부, 국토교통부, 해양수산부, 중소벤처기업부</span>
                                </td>
                            </tr>
							<tr>
                                <th>행사 특징</th>
                                <td colspan="2"><span style="color:#1e8dc5;"><b>기존 기획된 박람회 프로그램을 활용하여 100% 온라인 추진</b></span></td>
                            </tr>
                            <tr>
                                <th>주요 내용</th>
                                <td colspan="2"><span class="black_444" ><b>① 코로나19 이후 경제 위기극복을 위한 ‘한국판 뉴딜’ 국정 기조에 맞춰, 각 지자체도 함께 현재의 위기를 기회로 활용하기 위한 ‘지역 뉴딜’ 본격 추진<br>
② 코로나19로 인해 사람, 공간, 산업에 찾아온 뉴노멀 시대에 맞춰 뉴딜을 통해 ‘지역이 강한 나라’로 만들기 위한 지자체의 다짐과 소통의 장 마련<br>
③ 지자체의 코로나19 선제적 대응사례를 발굴하여 그간의 노력을 격려하고, 지역경제 위기 극복을 위한 지역주도의 뉴딜 프로젝트 사례 공유<br>
④ ‘균형발전’과 ‘뉴딜’에 대한 국민의 관심과 이해를 제고하고, 정부‧전문가‧혁신가‧시민들 간 유기적인 소통 확대를 위한 교류의 場으로 마련</b></span></td>
                            </tr>
                             <tr>
                                <th>행사 구성</th>
                                <td colspan="2">
                                
                                <div class="process">
                                   <ul class="tac">
					                   <li style=" height:300px;">
						                 <div class="txt_wrap">
							               <p class="num">2020 대한민국 균형발전박람회</p>
							               <p class="txt lh15">‣ 영상축사<br>
‣ 박람회 소개<br>
‣ 개최지 소개<br>
&nbsp;&nbsp;- 문화제조창C<br>
&nbsp;&nbsp;- 충북 홍보관<br>
&nbsp;&nbsp;- 청주 홍보관<br>
‣ 균형위원장과 청년의 만남</p>
						                </div>
					                 </li>
                                    <li style=" height:300px;">
						                 <div class="txt_wrap">
							               <p class="num">지역균형 뉴딜관</p>
							               <p class="txt lh15">‣ 지역균형 뉴딜이란?<br>
‣ 지역균형 뉴딜관<br>
‣ 시군구 균형 발전 우수사례<br>
‣ 공공혁신 뉴딜관</p>
						                </div>
					                 </li>
                                   
                                     <li style="background-color:#fdf7f3; height:300px;">
						                 <div class="txt_wrap">
							               <p class="num">정책박람회</p>
							               <p class="txt lh15">‣ 행사소개<br>
 &nbsp;&nbsp;- 개요<br>
 &nbsp;&nbsp;- 전체일정<br>
‣ 개막세션<br>
‣ 학회세션<br>
‣ 특별세션</p>
						                </div>
					                 </li>
                                     
                                     <li style="height:330px;">
						                 <div class="txt_wrap">
							               <p class="num">시민참여 마당</p>
							               <p class="txt lh15">
‣ 혁신네트워크 협의회<br>
 &nbsp;&nbsp;- 행사소개<br>
 &nbsp;&nbsp;- 천인만상<br>
 &nbsp;&nbsp;- 연합세션<br>
 &nbsp;&nbsp;- 개별세션<br>

‣ 균형발전 아이디어공모전<br>
 &nbsp;&nbsp;- 행사개요<br>
 &nbsp;&nbsp;- 개최결과<br>
 &nbsp;&nbsp;- 개최영성</p>
						                </div>
					                 </li>
                                     
                                     <li style="height:330px;">
						                 <div class="txt_wrap">
							               <p class="num">균형발전 정책</p>
                                           <p class="txt lh15">
‣ 연혁<br>
‣ 비전과전략<br>
‣ 균형발전 프로젝트<br>
‣ 균형발전지표<br>
‣ 국가혁신 클러스터, 혁신도시시즌<br>
‣ 지역발전 투자협약<br>
‣ 취약지역 생활여건개조<br>
‣ 국제협력 거버넌스</p>
                                          </div>
					                 </li>
                                     <li style="height:330px;">
						                 <div class="txt_wrap">
							               <p class="num">커뮤니티</p>
                                           <p class="txt lh15">
‣  박람회 소식<br>
‣ 이벤트<br>
&nbsp;&nbsp; - 진행중 이벤트<br>
&nbsp;&nbsp; - 마감된 이벤트</p>
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
                                <th style=" background-color:#fdf7e3;">2020<br>대한민국<br>균형발전박람회</th>
                                <td>
                                <div style="width: 48%;  display: inline-block;  vertical-align:top; "> 
                                       <p class="r_title5">영상축사</p><span>- 국가균형발전위원장, 산업통상자원부장관, 충청북도지사, 청주시장</span><br>
                                 </div>
                                 <div style="width: 48%;  display: inline-block;  vertical-align:top; "> 
                                      <p class="r_title5">박람회 소개</p><span>- 균형발전박람회 주제 연혁 등 박람회 관련 내용 소개</span><br>
                                 </div>
                                 <div style="width: 48%;  display: inline-block;  vertical-align:top; "> 
                                      <p class="r_title5">개최지 소개</p><span> - 문화제조창C : 문화제조창C의 건립배경 설명 및 영상<br>
 - 충북홍보관 : 충북을 소개하는 설명 및 홍보관 영상<br>
 - 청주홍보관 : 청주를 소개하는 설명 및 홍보관 영상</span><br>
                                 </div>
                                 <div style="width: 48%;  display: inline-block;  vertical-align:top; "> 
                                      <p class="r_title5">균형발전위원장과 청년의 만남</p><span>- 균형발전위원장과 청년들과의 온라인 소통의 장(녹화 방식으로 진행) </span><br>
                                 </div>
                                
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">지역균형<br>뉴딜관</th>
                                <td>
                                <div style="width: 48%;  display: inline-block;  vertical-align:top; "> 
                                       <p class="r_title4">지역균형뉴딜이란?</p><span>- 지역균형뉴딜을 설명</span><br>
                                 </div>
                                 <div style="width: 48%;  display: inline-block;  vertical-align:top; "> 
                                      <p class="r_title4">지역균형뉴딜관</p><span>- 18개 시·도의 실물 전시관을 영상으로 설명</span><br>
                                 </div>
                                 <div style="width: 48%;  display: inline-block;  vertical-align:top; "> 
                                      <p class="r_title4">시군구 균형발전 우수사례</p><span>- 시군구 균형발전 우수사례 공유  </span><br>
                                 </div>
                                 <div style="width: 48%;  display: inline-block;  vertical-align:top; "> 
                                      <p class="r_title4">공공혁신뉴딜관</p><span>- LH, Keit 등 공공기관의 뉴딜정책 소개   </span><br>
                                 </div>
                                
                                </td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">정책<br>박람회</th>
                                <td><span class="black_444" ><b>정책박람회가 운영하는 세션들에 대한 실시간 중계 참관이나 편집영상 및 학술자료를 관람 및 열람 가능한 공간</b></span><br>
                                <div style="width: 48%;  display: inline-block;  vertical-align:top; "> 
                                       <p class="r_title2">행사소개</p><span>- 개요, 전체일정</span><br>
                                 </div>
                                 <div style="width: 48%;  display: inline-block;  vertical-align:top; "> 
                                      <p class="r_title2">개막세션</p><span>- 청주대학교 경상대학 및 온라인 진행(유튜브 균형발전TV)</span><br>
                                 </div>
                                 <div style="width: 48%;  display: inline-block;  vertical-align:top; "> 
                                      <p class="r_title2">학회세션</p><span>- 총 5개 세션으로 구성하여 11월 10일~11월 11일 2일 동안 진행</span><br>
                                 </div>
                                 <div style="width: 48%;  display: inline-block;  vertical-align:top; "> 
                                      <p class="r_title2">특별세션</p><span>- 총 8개 세선으로 구성하여 다양한 주제로 균형발전 정책 논의</span><br>
                                 </div>
                                
                                </td>
                            </tr>
                     
                            <tr>
                                <th style=" background-color:#fdf7e3;">시민참여<br>마당</th>
                                <td><p class="r_title4">혁신 네트워크 협의회</p><span>- '혁신 네트워크, 지역뉴딜로 새로운 삶 터를 만들다!'라는 주제로 11월 11일 온라인으로 진행<br>
 - 천인만상 : 지역/분야별 뉴딜 혁신사례 공유·확산의 장으로 분야별·지역별 대표 패널들과 토크콘서트 형식 진행<br>
 - 연합세션 및 개별세션 : 혁신 네트워크 협의회 단체들이 공통 주제를 함께 토의하고 정책 및 지속가능한 지역뉴딜 정책 아이디어 도출</span><br>
                                   <p class="r_title4">균형발전 아이디어 공모전</p><span>- 선정된 균형발전 아이디어에 대한 영상제작을 통해 홈페이지 게재</span>
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">균형발전<BR>정책</th>
                                <td><span class="black_444" ><b>그간 균형발전정책의 연혁과 주요 정책, 균형발전위원회 등에 대해 소개하는 공간</b><br>
- 연혁, 비전과전략, 균형발전프로젝트, 균형발전지표, 국가혁신클러스터, 혁신도시시즌, 지역발전투자협약, 취약지역생활여건개조, 국제협력거버넌스</span>
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">커뮤니티</th>
                                <td><span class="black_444" ><b>박람회 소식, 이벤트로 구성하여 박람회에서 진행하는 이벤트에 참여할 수 있도록 구성</b></span></td>
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
- 보도자료 : 11월 2일(월) 충청북도<br>&nbsp;&nbsp;배포(행사 개최 고지), 11월 9일(월) 균형위,<br>&nbsp;&nbsp;산업부 공동 배포(행사 개최 고지)<br>
 - 방송 : 뉴스(인터뷰) 및 라디오로 박람회 소개<br>
 - 지면 : 개막행사, 지역균형뉴딜 전시관,<br>&nbsp;&nbsp;정책박람회, 혁신 네트워크 협의회,<br>&nbsp;&nbsp;균형발전 아이디어 공모전 등을 주요 보도<br><br></span></div>
                            <div style="width: 31.5%;  display: inline-block;  vertical-align:top; "><p class="r_title3">온라인</p><span>
 - 홈페이지 배너 광고, 키워드 광고,<br>&nbsp;&nbsp;SNS 홍보영상, 라디오광고 등</span></div>
 
                             <div class="box"  style="width: 31.5%;  display: inline-block; vertical-align:top;  "><p class="r_title3">오프라인</p><span>
-  옥외전광판 활용<br>&nbsp;&nbsp;(대구, 대전, 부산, 서울)</span></div>
                                </td>
                            </tr>
                             <tr>
                                <th style="background-color:#f5fbea;">홍보 실적</th>
                                <td><span class="black_444" ><b>언론 </b><br> - 언론 보도 총 287건(방송 3회, 지면 9회, 라디오 방송 2회, 온라인 273회)</span><bR>
                                   <span class="black_444" ><b>온라인 </b><br> - 총 9,629명 방문, 50,362 페이지뷰(12월말 기준)<bR>
 * 행사 개최기간(11월9일-11월12일, 4일간)에 5,371명 방문, 29,790 페이지뷰</span><bR>
                                    <span class="black_444" ><b>유튜브 운영 </b><br> - ‘균형발전TV’를 통해 80개 영상 제공, 12,903회 조회<bR>
 * 개막행사 2,356회, 지역균형뉴딜관 4,427회, 정책박람회 3,479회, 시민참여마당 2,641회 등(12월말 기준)</span></td>
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
                                <td>
<span class="black_444" ><b>① 오프라인 행사에서 온라인 행사로 전환되었음에도 짧은 시간 내에 완성도 높은 행사를 개최</b><br>
&nbsp;&nbsp; - 코로나19로 대면박람회 개최가 불가능한 상황에서 기존 기획된 행사를 활용하여 100% 온라인 박람회로 개최<br>

<b>② 온라인으로 진행되어 공간적 제약을 탈피하여 더 많은 국민들이 18개 지자체의 지역균형뉴딜 정책과 사례를 홈페이지와 유튜브에서 확인</b><br>
&nbsp;&nbsp; - 온라인 박람회 특성상 불특정 다수의 사람들의 균형발전박람회에 참여할 수 있어 오프라인의 한계를 극복할 수 있었음<br>
&nbsp;&nbsp;&nbsp; * 18개 시도 뉴딜관 영상 제작, 정책박람회 라이브 스트리밍, 시민참여마당 등을 통해 균형발전과 지역균형뉴딜 정책과 사례 제공<br>

<b>③ 온라인 박람회에 최적화된 홈페이지 제작으로 시청자가 균형발전 정책을 한눈에 볼 수 있도록 직관적으로 구성</b><br> 
&nbsp;&nbsp; - 홈페이지 이벤트(지자체 협력) 구성으로 균형발전박람회 흥미 제고<br>

<b>④ 정책박람회, 접근이 용이한 온라인 중계 플랫폼을 활용하여 더 많은 시민들의 참관 및 소통 유도</b><br>
&nbsp;&nbsp; - 학회, 국책 및 시도 연구기관 등 유관기관 전문가들의 균형발전 관련 주제 토론을 통해 주요 정책현안 공유</span>
                               </td>
                            </tr>
                            <tr>
                                 <th>개선점 및<br>향후<br>추진 방향</th>
                                <td><span class="black_444" ><b>① 온라인 전환 후 개막까지 준비 시간이 부족해서 일부 시행착오 발생</b><br>
&nbsp;&nbsp; - 균형발전박람회 홈페이지에 단기간에 많은 양의 자료를 게재하여 홈페이지 안정화 작업 시간 부족<br>

<b>② 매년 유사 정책의 단순 나열이 아닌, 국민의 관심도를 높이고 체감도를 높이기 위해 국가균형발전의 상징적 대표 정책을 선정,<br>&nbsp;&nbsp;&nbsp; ‘선택과 집중’을 통한 국민 소통 진행</b><br>
&nbsp;&nbsp; - 지자체별 분산적 정책 나열이 아닌 지역뉴딜정책에 초첨을 맞춘 박람회 구성<br>
&nbsp;&nbsp; - 시의성 있는 주제로 공감대 형성 : 코로나19 이후 경제 위기 극복을 위한 ‘한국판 뉴딜’에 맞춰,<br>&nbsp;&nbsp;&nbsp; 각 지자체도 함께 현재의 위기를 기회로 활용하기 위한 ‘지역 뉴딜’ 본격 추진</span>
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
						<p class="square_img"><img src="/@resource/images/2020/01.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2020/02.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2020/03.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2020/04.jpg"></p>
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
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/CQmB7jf2QEY" title="2020 대한민국 균형발전박람회 공식 홍보영상" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">2020 대한민국 균형발전박람회 공식 홍보영상</p>
					</li>
                    <li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/zVax9tl1iow" title="2020 대한민국 균형발전 정책박람회 홍보영상" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">2020 대한민국 균형발전 정책박람회 홍보영상</p>
					</li>
                    <li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/F_GS69EUqIs" title="온라인 2020 대한민국 균형발전박람회 균형발전위원장 영상축사" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">온라인 2020 대한민국 균형발전박람회 균형발전위원장 영상축사</p>
					</li>
                </ul>
                
                
         
        </div>
        </div>
	</section>
    
</div>
<!-- // 서브 본문 -->

<?php include_once('../../_tail.php');?>


