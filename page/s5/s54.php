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
            <a href="/page/s5/s53.php" class="">2020</a>
            <a href="/page/s5/s54.php" class="active">2021</a>
        </div>
     </div>
		<div class="title-wrap">
			<h2 class="title">2021 대한민국 균형발전박람회 in 안동</h2>
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
                                <td><span>2021. 10.26(화)~28(목) / 경북 안동(온-오프라인 병행)</span></td>
                                <td rowspan="4"><p class="tac photo"><img src="/@resource/images/@temp/s54_2021.jpg"></p></td>
                            </tr>
                            <tr>
                                <th>슬 로 건</th>
                                <td><span class="blue" ><b>참여하는 지방자치,<br>함께 크는 균형발전</b></span></td>
                            </tr>
                            <tr>
                                <th>주 제</th>
                                 <td><span class="txt24 black_444" ><b>지역이 주도하는 초광역협력</b></span></td>
                            </tr>
							<tr>
                                <th>추진 목적</th>
                                <td><span class="black_444" ><b>지역중심의 혁신플랫폼 구축을 통해 지속적인 균형발전을 도모하는 소통과 참여의 장으로서「대한민국 균형발전박람회」개최</b></span></td>
                            </tr>
							<tr>
                                <th>추진 체계</th>
                                 <td colspan="2" ><p class="r_title" >주 최</p><span style="display:inline-block;">국가균형발전위원회, 산업통상자원부, 17개 시‧도</span><br>
                                   <p class="r_title" >주 관</p><span style="display:inline-block;">경상북도, 안동시, 한국산업기술진흥원, 한국생산성본부</span>
                                </td>
                            </tr>
							<tr>
                                <th>행사 특징</th>
                                <td colspan="2"><span style="color:#1e8dc5;"><b>개별적으로 개최되던 균형발전박람회와 지방자치박람회를 연계 개최</b></span>
<span class="black_444" >&nbsp;&nbsp; - 관계부처, 위원회 연계하여 주간 공동운영, 밀접한 관련이 있는 균형발전과 자치분권과 정책의 성과를 국민들에게 제시<br>
&nbsp;&nbsp;&nbsp;  * (지방자치 균형발전주간) 10.26(화)∼10.30(토), 5일 동안 운영<br>
&nbsp;&nbsp;  - 홈페이지 통합 운영, 연계 주간 기념 컨퍼런스 개최<br>
&nbsp;&nbsp;&nbsp;  * (통합 시그니처 프로그램) 지방자치 균형발전 공동 컨퍼런스, 10월28일 안동</span></td>
                            </tr>
                            <tr>
                                <th>주요 내용</th>
                                <td colspan="2"><span class="black_444" ><b>하이브리드(온-오프라인 병행) 박람회로 운영</b><br>
&nbsp;&nbsp; - (온라인) 3D 가상전시관에서 균형발전박람회 운영<br>
&nbsp;&nbsp;&nbsp; * 주요행사, 전시(초광역협력, 지역균형뉴딜 전시 등) 구현<br>
&nbsp;&nbsp; - (오프라인) 균형발전정책관, 시도전시관(초광역협력, 지역뉴딜 등) 운영, 코로나19 상황에 맞게 정책박람회, 참여행사 운영</span></td>
                            </tr>
                             <tr>
                                <th>행사 구성</th>
                                <td colspan="2">
                                
                                <div class="process">
                                   <ul class="tac">
					                   <li style=" height:320px;">
						                 <div class="txt_wrap">
							               <p class="num">개막식</p>
							               <p class="txt lh15">- 개회사, 환영사, 축사 등</p>
						                </div>
					                 </li>
                                    <li style=" height:320px;">
						                 <div class="txt_wrap">
							               <p class="num">전시회</p>
							               <p class="txt lh15">- 시도전시관, 균형위정책관,<br>&nbsp;&nbsp;혁신관</p>
						                </div>
					                 </li>
                                   
                                     <li style="background-color:#fdf7f3; height:320px;">
						                 <div class="txt_wrap">
							               <p class="num">정책박람회</p>
							               <p class="txt lh15">- 균형발전 정책박람회</p>
						                </div>
					                 </li>
                                     
                                     <li style="background-color:#f5fbea; height:320px;">
						                 <div class="txt_wrap">
							               <p class="num">국민참여행사</p>
							               <p class="txt lh15">- 지역혁신가 성과공유대회,<br>&nbsp;&nbsp;희망이음 유니버스,<br>&nbsp;&nbsp;2021년 지역혁신협의회<br>&nbsp;&nbsp;전국총회, 혁신활동가<br>&nbsp;&nbsp;네트워크 협의회, 청년 정책<br>&nbsp;&nbsp;제안 보고회, 중견기업 유치<br>&nbsp;&nbsp;지자체 합동 IR, 혁신도시<br>&nbsp;&nbsp;투자유치설명회</p>
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
                                <td><span class="black_444" ><b>개회사, 환영사, 유공자 포상(총5점 : 훈장1․포장2․대표1․국표1), 축사, 퍼포먼스 </b></span></td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">전시회</th>
                                <td>
                                  <div style="width: 48%;  display: inline-block;  vertical-align:top; "> 
                                       <p class="r_title1">시도전시관</p><span>- 시도(18개) 주제별 전시</span><br>
                                  </div>
                                  <div style="width: 48%;  display: inline-block;  vertical-align:top; ">
                                       <p class="r_title1">균형위정책관</p><span>- (주제) 문재인 정부 국가균형발전 성과 집대성<br>
 - (내용) 국가균형발전의 성과를 청년, 혁신, 산업 등의 정책<br>&nbsp;&nbsp; 주제별 사례 영상 상영</span><br>
                                   </div>
                                    <div style="width: 48%;  display: inline-block;  vertical-align:top; ">
                                       <p class="r_title1">혁신관(혁신도시관)</p><span>- (주제) “지역이 주도하는 혁신, 다가오는 균형발전”<br>
 - (내용) 투자유치설명회 (10.27수, 안동문화예술의전당 웅부홀),<span class="inline_768">&nbsp; 홍보부스 운영 등<br></span>&nbsp; (10.26~28, 3일간, 안동탈춤축제장  야외광장 일원)<br><br></span>
                                    </div>
                                   <div style="width: 48%;  display: inline-block;  vertical-align:top; ">
                                       <p class="r_title1">혁신관(균형발전우수사례 NABIS관)</p><span>- (주제) 국가균형발전종합정보시스템 및 우수사례 홍보<br>
 - (내용) 균형발전 우수사례 요약 전시 및 균형발전종합정보시스템<span class="inline_768">&nbsp; (NABIS) 내용 전시 및 시연/체험</span>
                                    </div>
                                    
                                </td>
                            </tr>
                            
                             <tr>
                                <th style=" background-color:#fdf7e3;">균형발전<br>정책<br>박람회</th>
                                 <td><span class="black_444" ><b>문재인 정부 국가균형발전 정책의 성과공유 및 향후과제에 대한 학계, 연구자 등 지식인들의 집단지성과 공론의 장으로, 국가균형발전 관련 31개 학회, 20개 국책연구기관·지자체 등 51개 참여기관과 OECD 등 해외에서 발표·토론 참석</b><br>- 개막세션, 주제세션, 특별세션 등 54개 세션</span>
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">국민참여행사</th>
                                <td>
                                     <p class="r_title4">지역혁신가 성과공유대회</p><span>- 지역혁신가 우수 혁신사례 공유회로, 제4기 지역혁신가 우수 혁신사례 7인 발표</span><br>
                                     <p class="r_title4">희망이음 유니버스</p><span>- 희망 Talk! Talk!, 우수 지역 기업관, 희망이음 Agora, 희망이음 홍보존을 메타버스 플랫폼을 활용하여 운영</span><br>
                                     <p class="r_title4">2021년 지역혁신협의회 전국총회</p><span>- 2021년 대한민국 균형발전박람회와 연계 개최하여 지역혁신협의회의 다양한 혁신활동을 공유하는 네트워킹의 場 마련<br>
 - 지역혁신협의회의 활동 및 운영 성과를 공유하며, 지역별 협의회 교류 등을 통해 보고, 배우고, 나누는 형태로 운영<br>
 - 특별강연, 17개 시·도 지역혁신협의회 소개, 지역별토론회 성과보고, 지역혁신우수사례 발표, 유공자 포상 등<br>
 - 코로나 상황에 따라 유튜브, 네이버TV 등의 플랫폼을 통하여 협의회 위원, 혁신지원단 대상 실시간 온라인 방송 진행</span><br>
                                      <p class="r_title4">혁신활동가 네트워크 협의회</p><span>- 전국 부문영역 지역혁신가단체 주요 혁신활동가 등 1,000명(온라인) 내외 참석<br>
 - 단체세션 1개, 개별세션 6개</span><br>
                                       <p class="r_title4">청년 정책 제안 보고회</p><span>- 청년이 제안하는 정책을 통한 정책 시사점 모색 및 균형발전에 대한 다양한 시각을 교류하기 위함<br>
 - 정책 성과 보고, 정책 제안 발표 및 종합토론 등</span><br>
                                       <p class="r_title4">중견기업 유치 지자체 합동 IR</p><span>- 지자체, 중견연, 산단공, 지방투자 상생협력 협약(MOU) 체결<br>
 - 투자보조금, 지자체별 투자환경 소개(산업부, 14개 시ㆍ도 대표)<br>
 - 투자유치 상담회(지자체별 상담부스 운영) </span><br>
                                       <p class="r_title4">혁신도시 투자유치설명회</p><span>- (설 명 회) 혁신도시별 투자여건 설명, 질의응답 <br>
 - (전시, 상담) 혁신도시별 홍보부스 및 투자상담소 운영 <br>
 - (이 벤 트) MOU 체결, 성공사례 발표 등</span><br>
                                
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
                                 <td>
                                 <div class="box" style="width: 31.5%;  display: inline-block; vertical-align:top;  "><p class="r_title3">언론</p><span>
-  기획기사, 인터뷰, 방송 등 </span></div>
                                 <div class="box" style="width: 31.5%;  display: inline-block; "><p class="r_title3">온라인</p><span>
- 언론 매체 홈페이지 배너 광고<bR>
 - 한국지역신문협회 회원사 홈페이지 배너 광고<bR>
 - 네이버 배너 광고<bR>
 - 카카오 비즈보드 배너 광고<bR>
 - 유튜브 영상 광고<bR>
 - 페이스북 포스팅 광고<bR>
 - 팟캐스트 프리롤 광고<bR>
 - 카드뉴스</span></div>
                                </td>
                            </tr>
                             <tr>
                                <th style="background-color:#f5fbea;">홍보 실적</th>
                                <td><span class="black_444" ><b>언론 보도 총 919건(지면 131, 방송 27, 온라인 663, 사진기사 98)</b></span></td>
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
<span class="black_444" ><b>① 온-오프라인으로 총 51,033명 참가</b><br>
<b>② (균형발전 관심제고) 초광역협력, 지역균형뉴딜, 상생형 일자리, 탄소중립 등 최근의 국정 아젠다와 정책에 대한 이해와 관심 제고</b><br>
<b>③ (초광역협력 집중홍보) 지역주도의 초광역협력을 강조한 개막식 퍼포먼스를 진행하고, 지역의 초광역협력사업을 전시하는 한편, <br>&nbsp;&nbsp;&nbsp; 정책박람회 기조강연ㆍ세션운영 등에서 초광역협력을 집중 논의</b><br>
<b>④ (청년층 참여) 지역의 미래를 이끌어 갈 청년들이 개막식, 토크콘서트 등 주요행사에 참여해 균형발전 정책의 미래상 제시</b><br>
<b>⑤ (지역투자 활성화) 기존의 혁신도시 IR 외에 새롭게 중견기업 지역투자 협약식을 개최해 정부의 일자리 창출 노력을 보여줌</b><br>
<b>⑥ (중소도시 개최) 인구 20만 이하의 중소도시에서 개최된 최초의 박람회로, 개최지에서 추진하는 균형발전 사업을 알리는 계기 마련</b><br>
<b>⑦ (홍보 다양화) 지면ㆍ방송 등 전통적인 방식뿐만 아니라 유튜버, 메타버스 등 새로운 유형의 방식을 활용해 다양하게 정책을 홍보<</b></span>
                               </td>
                            </tr>
                            <tr>
                                 <th>개선점 및<br>향후<br>추진 방향</th>
                                <td><span class="black_444" ><b>① 행사장(개막식 및 전시관)과 정책박람회 등 주요 행사장소가 분산돼 이동 시간이 소요되고 행사 간 연결성 부족</b><br>

<b>② 관람인원 제한, 지역축제 등 부대행사 취소로 일반 국민이 참여하고 체험할 수 있는 프로그램 운영에 한계</b><br>
&nbsp;&nbsp; - 방역 여건의 불확실성으로 인해 오프라인 전시회의 개회 여부 결정에 어려움을 겪는 등 충분한 준비시간 확보가 다소 부족 <br>
<b>③ 코로나 상황 지속 여파에 따른 온라인을 통한 국민 소통 창구 지속개발 필요성과 차기정부가 승계할 주요 국가균형발전 최우선 아젠다 선정 필요</b><br>
&nbsp;&nbsp; - 지역 소도시 개최를 통해 균형발전 정책에 관심과 참여를 확대하여, 균형발전 취지에 부합하는 박람회 개최<br>
&nbsp;&nbsp; - 시의적절한 초광력협력을 주요 아젠다로 설정, 단 코로나 상황으로 인해 축소개최됨에 따라 국민적 호응 반감, <br>&nbsp;&nbsp;&nbsp;&nbsp; 이에 따라 차기년도 축제에서 지속적으로 초광력협력 아젠다에 집중, 재확산 필요
                                </span>
                               </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div-->
                        
            <h5 class="sv4-mtit pt50">미디어 콘텐츠 아카이빙</h5>
                <div class="s_tab4">
                  <li class="active">사진</li>
		          <li>카드뉴스</li>
                  <li>영상</li>
	           </div>
               <ul class="square_img_list pt50">
					<li class="">
						<p class="square_img"><img src="/@resource/images/2021/01.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/02.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/03.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/04.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/05.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/06.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/07.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/08.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/09.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/2021-1.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/2021-2.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/2021-3.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/2021-4.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/2021-5.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/2021-6.png"></p>
					</li>
                </ul>
                
                
          
                <div class="s_tab4 pt50">
                  <li>사진</li>
		          <li class="active">카드뉴스</li>
                  <li>영상</li>
	           </div>
                <ul class="square_img_list pt50">
					<li class="">
						<p class="square_img"><img src="/@resource/images/2021/card/01_s.png" data="2021/card/01.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/card/02_s.png" data="2021/card/02.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/card/03_s.png" data="2021/card/03.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2021/card/04_s.png" data="2021/card/04.png"></p>
					</li>
                </ul>
                
                
                <div class="s_tab4 pt50">
                  <li>사진</li>
		          <li>카드뉴스</li>
                  <li class="active">영상</li>
	           </div>
               <ul class="square_img_list pt50">
					<li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/AqGaZaeQMZ4" title="2021 균형발전박람회 홍보영상" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">2021 균형발전박람회 홍보영상</p>
					</li>
                    <li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/tBtH7611D3Y" title="[2021 균형발전박람회] 부산광역시 전시관" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">[2021 균형발전박람회] 부산광역시 전시관</p>
					</li>
                    <li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/gg1Gy7t9ZA0" title="[2021 균형발전박람회] 세종특별자치시 전시관" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">[2021 균형발전박람회] 세종특별자치시 전시관</p>
					</li>
                </ul>
                
                
         
        </div>
        </div>
	</section>
    
</div>
<!-- // 서브 본문 -->

<?php include_once('../../_tail.php');?>


