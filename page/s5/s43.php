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

.process1 {width: 100%;position: relative;display: inline-block;float: left;}
.process1 ul {text-align: center;display: inline-block;font-size:16px; width:100%;}
.process1 li {display: inline-block; vertical-align: top; width: 31.5%;  margin: 0 5px 15px; padding: 50px 15px 0; border-radius:0%; background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; }
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
	
    .process li br{ display:none !important;}
	
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
            <a href="/page/s5/s42.php" class="">2015</a>
            <a href="/page/s5/s43.php" class="active">2016</a>
        </div>
     </div>
		<div class="title-wrap">
			<h2 class="title">2016 대한민국 지역희망박람회</h2>
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
                                <td><span>2016.9.28.(수) ~ 10.1일(토) / 고양 킨텍스 제1전시장 및 야외전시장</span></td>
                                <td rowspan="4"><p class="tac photo"><img src="/@resource/images/@temp/s53_2016.jpg"></p></td>
                            </tr>
                            <tr>
                                <th>슬 로 건</th>
                                <td><span class="blue" ><b>지역에 희망을, 주민에게 행복을</b></span></td>
                            </tr>
                            <tr>
                                <th>주 제</th>
                                <td><span class="txt24 black_444" ><b style="line-height:170%;">“주민행복, 행복생활권”</b></span>활력있는 지역경제, 행복한 주민</td>
                            </tr>
							<tr>
                                <th>추진 목적</th>
                                <td><span class="black_444" ><b>박근혜 정부 지역정책의 성과와 정책을 홍보함으로써 지역발전정책에 대한 국민과 지자체의 이해 제고 및 공감대 형성</b></span></td>
                            </tr>
							<tr>
                                <th>추진 체계</th>
                                 <td colspan="2" ><p class="r_title" >주 최</p><span style="display: -webkit-inline-box;">지역발전위원회, 산업통상자원부, 기획재정부, 교육부, 미래창조과학부, 행정자치부, 문화체육관광부,<br>농림축산식품부, 보건복지부, 환경부, 고용노동부, 여성가족부, 국토교통부, 해양수산부, 17개 시·도</span><br><br>
                                <!-- <span class="blue">* 산업통상자원부, 교육부, 미래창조과학부, 행정자치부, 문화체육관광부, 농림축산식품부, 보건복지부, 고용노동부, 여성가족부, 국토교통부, &nbsp;&nbsp;해양수산부, 중소기업청</span><br> -->
                                       <p class="r_title" >주 관</p><span style="display:inline-block;">한국산업기술진흥원</span>
                                </td>
                            </tr>
							<tr>
                                <th>행사 특징</th>
                                <td colspan="2"><span style="color:#1e8dc5;"><b>정부의 지역발전정책의 성과와 정책을 홍보하고 지역발전정책에 대한 국민과 지자체의 이해 제고 및 공감대 형성</b></span></td>
                            </tr>
                            <tr>
                                <th>주요 내용</th>
                                <td colspan="2"><span class="black_444" ><b>일자리창출, 규제해소, 창조경제, 주민행복 관련 지역정책 성과와 규제<bR>
프리존을 통한 지역발전의 비전을 구체적인 사례 위주로 전시</b></span></td>
                            </tr>
                             <tr>
                                <th>행사 구성</th>
                                <td colspan="2">
                                
                                <div class="process">
                                   <ul class="tac">
					                   <li style=" height:200px;">
						                 <div class="txt_wrap">
							               <p class="num">본 행사</p>
							               <p class="txt lh15">- 개막식, 전시회</p>
						                </div>
					                 </li>
                                     <li style=" height:200px;">
						                 <div class="txt_wrap">
							               <p class="num">부대행사</p>
							               <p class="txt lh15">- 일자리박람회, 컨퍼런스 우수사례, 발표회 견학프로그램,<bR>&nbsp;&nbsp;지역나눔마켓(굿모닝 푸드트럭 페스티벌/Korea Sale FESTA <bR>&nbsp;&nbsp;우수상품할인전/푸른고양 나눔장터), 토크콘서트(문화공연)</p>
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
                                <td><span class="black_444" ><b>지역희망박람회의 첫 공식행사로 지역주민 삶의 변화를 공유하고 지역발전의 청사진 제시</b><br>- 입장 및 국민의례, 개회사, 환영사, 주제영상, 유공자포상, 격려사</span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">전시회</th>
                                 <td><span class="black_444" ><b>지역발전정책의 성과 및 사례를 공유하고 규제프리존을 통한 지역의 미래모습 전달</b></span><br>
                                       <p class="r_title1">지역위 및 시도관</p><span>- 시·도별로 대표적인 지역발전정책 성과와 규제프리존 도입에 따른 기대효과를 구체적인 사례를 통해 전시</span><br>
                                       <p class="r_title1">부처관</p><span>- 대표적인 지역발전정책 성과와 지역의 글로벌 경쟁력 강화정책 성과를 전시</span><br>
                                       <p class="r_title1">특별관</p><span>- 창조경제, 명품브랜드화, 내수기업의 수출기업화 지원과 같은 지역의 변화와 도약을 도운 정책의 성공사례 전시</span><br>
                                       <p class="r_title1">체험존</p><span>- 주민이 체험하고 즐길 수 있는 新산업, 주민행복, 창조융합 제품을 중심으로 체험공간 제공<br>
 - 신 사업관, 창조융합관, 주민행복관, 나눔쉼터 테마로 구성</span>
                                </td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">일자리<bR>박람회</th>
                                <td><span class="black_444" ><b>전국 17개 시·도에서 현장 면접·채용, 지방이전 공공기관의 지역인재 채용설명회(고용존 활용), 찾아가는 일자리버스 진행</b><br>- 17개 시도별 일자리 행사에 총 955개社, 30,471명이 참여, 1차 합격 3,359명, 현장채용 841명</span></td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">컨퍼런스</th>
                                 <td><span class="black_444" ><b>지역기업의 수출기업화 사례 확산을 위한 발표회 및 지역발전정책에 대한 토론의 장을 마련</b><br>- 지역위 및 정부･지자체, 유관기관, 학술･연구기관 등 지역발전 관련 기관 관계자 총 1,256명 참여 하여 일자리, 규제해소, 창조경제 등<span class="inline_768">&nbsp; 지역발전정책 관련 컨퍼런스 22건 운영<br></span><br>
                                 
                                 <p class="r_title2">컨퍼런스별 주요내용</p>
                                 <span style="line-height:170%;">- 2016 지역사업평가단 워크숍 : 전국지역사업평가단 현안사항 논의 및 임직원 업무역략 강화<br>
 - 제3기 지역사업 옴부즈만 제2차 정기회의 : 지역산업지원사업 건의사항 후속조치 논의<br>
 - 2016년 지역산업진흥 유공 시상식 및 우수사례 발표회 : 지역발전 성공모델에 대한 성과 및 사례를 공유하며 주민들과 공감하는 장 마련<br>
 - 한국테크노파크협의회 이사회 : 지역산업 발전의 거점기관인 전국 18개 테크노파크 원장단의 좌담회를 통해 지역산업 발전에 대한 정책 논의<br>
 - 새로운 일자리 생태계 ‘스타트업 창업 및 취업전략 특강’ <br>
 - 2016 혁신도시 합동투자유치설명회 : 혁신도시 투자여건 설명, 투자상담 <br>
 - 수출 토크콘서트: 수출? 객기와 용기 사이 : 수출전문가 집단의 사례중심의 수출 관련지식과 정보제공을 유쾌한 콘서트 형식으로 궁금증 해소<br>
 - 전환기 지역정책 방향 모색을 위한 국제학술 심포지엄, 사단법인 한국지역정책학회 정책토론회 : 글로벌 위기와 저성장 시대에 대응하는<span class="inline_768">&nbsp;&nbsp;새로운 지역산업정책의 전환과 도전을 제시, 지역행복생활권 등 정책기반의 효율적인 구축기반을 모색<br></span>
 - 2016 지역발전 정보협력 컨퍼런스 : 초연결시대의 지역발전 3.0과 정보협력 방안<br>
 - 2016년 푸드트럭 팸투어 : 푸드트럭 우수사례 및 활성화 방안 발표<br>
 - 2016년 혁신도시 발전방향 모색을 위한 컨퍼런스 : 혁신도시의 미래발전방향과 지자체, 공공기관의 역할 정립<br>
 - 지역 R&D발전을 위한 연구개발지원단 우수사례 공유 및 발전방향 토론회<br>
 - 2016년 스마트공장 확산사업 성과보고 워크숍 : 스마트공장 확산사업 성과보고 및 지원사례 발표, 애로사항 및 발전방안 토의 등<br>
 - 2016년 지역 창조경제 활성화 프로그램 5차 간담회 : 사업화신속지원 사업연구회 중간보고를 통한 그간의 운영내용 발표<br>
 - 포스터 클러스터정책과 지역발전 : 새로운 지역산업정책 대안으로서의 포스트 클러스터 정책의 방향성과 적용가능성 탐색<br>
 - 저성장시대의 삶의 질 향상과 지역발전 : 지역생활권의 삶의 질 향상의 방향 및 저성장시대 지역발전 전략 모색<br>
 - 농촌 지역발전 정책세미나(제18차 농어촌지역정책포럼) : 농촌에서 싹트는 지역발전의 새 희망과 동력<br>
 - 디지털경제 지역혁신을 위한 산학연 네트워크포럼 지역혁신분과 : ‘기술혁신 너머, 디지털 경제로’ 대주제를 바탕으로 디지털경제에 대응하는<span class="inline_768">&nbsp;&nbsp;지역산업의 새로운 지평과 전략<br></span>
 - 스마트지역: 지역의 혁신과 지속가능한 스마트성장 모델 : 스마트지역의 조건과 성공방안 토의<br>
 - 푸드트럭 창업 길라잡이 : 푸드트럭 창업 특강 및 사례발표, 질의응답<br>
 - 저성장시대의 지역발전전략 : 저출산, 고령화 및 저성장 기조의 고착화에 따른 새로운 국토의 미래 비전과 전략 마련<br>
 - 풀뿌리기업육성 수행기관 역량강화 교육 및 마케팅 추진단 간담회<br>
 - 한일지역발전공동세미나 : 사례발표 및 지역발전을 위한 논의</span>
 
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">우수사례<bR>발표회 및<bR>시상식</th>
                                <td><span class="black_444" ><b>경제발전, 주민 삶의 질 향상 등 지역발전 성공모델에 대한 시상과 우수사례 발표를 통해 성과를 공유하고 확산을 도모</b><br>- 경제발전, 주민 삶의 질 향상 등 3건의 지역발전 성공사례 발표 및 시상 <br>
 * 총 66점(대통령 표창 9점, 국무총리 표창 10점, 산업부장관 40점, 국토부장관 7점)</span></td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">토크<br>콘서트</th>
                                <td><span class="black_444" ><b>다양한 분야의 유명인사와 청중 ․ 지역주민 소통의 장 마련</b><br> - 열정더하기, 역경빼기, 비전강화하기, 행복 나누기 등 4가지 테마와 제목(꿈희망Job담쑈), 주제(꿈, 희망,직업)로 청년에게 희망을 더하는<span class="inline_768">&nbsp;&nbsp; ‘청년희망 아카데미’ 진행</span></span></td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">지역나눔<br>마켓</th>
                                <td><span class="black_444" ><b>푸드트럭 홍보 및 판매, Korea Sale FESTA 우수상품 할인전·홍보전, 지역주민이 참여하는 벼룩시장 진행</b></span><br>
                                <div class="process1">
                                   <ul class="tac">
					                   <li style=" height:240px;">
						                 <div class="txt_wrap">
							               <p class="num">[굿모닝 푸드트럭 페스티벌]</p>
							               <p class="txt lh15">- 푸드트럭 음식판매 17대 및 전시 3대<br>- 푸드트럭 음식경연대회<br>- 푸드트럭 창업 교육<br>&nbsp; (유명 셰프 및 성공창업자 초청 강연)</p>
						                </div>
					                 </li>
                                     <li style=" height:240px;">
						                 <div class="txt_wrap">
							               <p class="num">[Korea Sale FESTA 우수상품할인전]</p>
							               <p class="txt lh15">- 우수상품 할인전과 공동 홍보<br>&nbsp; (할인전 10동 및 홍보관 운영)</p>
						                </div>
					                 </li>
                                     <li style="background-color:#fdf7f3; height:240px;">
						                 <div class="txt_wrap">
							               <p class="num">[푸른고양 나눔장터]</p>
							               <p class="txt lh15">- 지역주민이 직접 중고물품 판매하는<br>&nbsp; 참여형 행사<br>&nbsp; (천막 31동, 돗자리 344개)</p>
						                </div>
					                 </li>
                                     
                                     </ul>
                                    
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">자유학기제<br>시행학교<br>견학프로그램</th>
                                <td><span class="black_444" ><b>중학교 교육과정 중 한 학기동안 중간·기말고사를 치르지 않고 진로탐색 등 다양한 체험활동이 가능하도록 교육과정을 운영하는<span class="inline_768">중학교 자유학기제 확산을 위한 프로그램</b></span> - 중학생 대상으로 체험활동이 가능한 프로그램을 선별하여 실질적인 체험기회 제공, 지역사회에 관심을 갖고 성장할 수 있는 기회 조성<br>
 - 토크콘서트와 현장견학형 프로그램으로 구성</span></td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
               </div>
               
               
               <h5 class="sv4-mtit pt50">홍보</h5><div class="table_wrap sv41-03 no-thumb">
           <div class="table_basic">
                    <table>
						<colgroup>
							<col width="12%" />
                            <col width="87%" />
						</colgroup>
                        <tbody>
                            <tr>
                                <th style="background-color:#f5fbea;">홍보 활동</th>
                                  <td class="td1"><div style="width: 48%;  display: inline-block; "><p class="r_title3">언론</p><span>
 - 보도자료<br>
 - 브리핑(춘추관, 산업부, 경기도청 출입기자단)<br>
 - 프레스센터<br>
 - 개막식 생중계(KTV, OBS)<br>
 - 뉴스(KBS 뉴스광장, MBC 뉴스데스크, SBS 뉴스 등)<br>
 - 특별방송(SBS 모닝와이드, TV조선 광화문의 아침 등)<br>
 - 지역위원장 인터뷰(동아일보, KBS)<br>
 - 기획기사 및 특집기사(조선, 중앙, 동아 등)<br>
 - 산업부 장관, KIAT 원장 기고(서울경제, 중앙일보)<br><br></span></div>
                            <div style="width: 48%;  display: inline-block;  vertical-align:top; "><p class="r_title3">온라인</p><span>
 - 홈페이지 운영<br>
 - SNS 계정 운영 및 서포터즈 통한 홍보<br>
 - HOPE 방송(페이스북, 유튜브 활용한 생중계)<br>
 - 네이버 키워드 검색 광고<br>
 - 배너(유관기관 홈페이지 게재)<br>
 - 뉴스레터(4회)</span></div>
 
                             <div style="width: 48%;  display: inline-block; vertical-align:top;  "><p class="r_title3">오프라인</p><span>
 - 옥외광고(육교 및 도로 현수막, 가로등 배너, 전광판, KTX 기내)<br>
 - 인쇄물(포스터, 초청장, 안내서)<br>
 - 광고(KTX매거진, 위클리공감)</span></div>
                              
                                </td>
                            </tr>
                             <tr>
                               <th style="background-color:#f5fbea;">홍보 실적</th>
                                <td><span class="black_444" ><b>언론 보도 총 1,396건(방송 32회, 신문 326회, 온라인 보도 1,038회)</b></span></td>
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
                                <td><span class="black_444" ><b>① 박근혜 정부 4년차를 맞아 17개 시 ․ 도와 지역발전 관계부처의 지역정책 성과와 규제프리존의 기대효과를 주민과 공감</b><br>
&nbsp;&nbsp; * 개막식 534명, 전시회 38,854명, 일자리박람회(킨텍스) 1,320명, 컨퍼런스 1,256명, 푸드트럭 2,397명, 코리아 세일 페스타 8,909명,<br>&nbsp;&nbsp;&nbsp;&nbsp; 벼룩시장 15,000명 등 총 68,270명 방문(他시도 일자리 박람회 29,151명)<br>
&nbsp;&nbsp; - (개막식) VIP, 지역위원장, 자치위원장, 17개 시도지사(대참 6), 12개 부처 장관(대참 4) 등 참여하여 개막식, 전시관 참관?<br>
&nbsp;&nbsp; - (전시회) 지역주민이 다양한 지역발전정책의 현재와 미래를 직접 체감할 수 있도록 전시 내용을 구성하여 전국적으로 확산될 수 있도록 유도<br>
&nbsp;&nbsp; * 일반 관람객은 전시장 전반에서 지역 살림의 다양한 성과를 볼 수 있어 좋았다고 함<br>

<b>② 주민과 양방향 소통이 가능한 부대행사를 통해 정부와 지자체가 협업하여 지역정책의 성과와 비전에 대한 공감대 형성</b><br>
&nbsp;&nbsp; - (우수사례발표회) 벨기에 신부의 임실 활성화 사례 등 3건의 지역발전 성공사례를 발표하고 유공자 66명을 시상(정부포상 19점, 장관표창 47점)<br>
&nbsp;&nbsp; - (컨퍼런스) 국내외 전문가 및 지역주민 1,256명이 참여하여 저성장시대의 지역발전 방안 모색 등 22개 주제 논의<br>
&nbsp;&nbsp; - (토크콘서트) 9명의 유명인사들의 강연 및 문화창조융합벨트와 함께한 도시樂 콘서트 등으로 총 1,002명의 주민들이 참여<br>

<b>③ 지역주민 일자리 창출, Korea Sale FESTA 연계, 푸드트럭 페스티벌 등을 통하여 지역경제 활성화에 실질적으로 기여</b><br>
&nbsp;&nbsp; - (일자리박람회) 17개 시도에서 일자리박람회 및 채용설명회를 개최하여 현재까지 841명을 고용<br>
&nbsp;&nbsp; - (Korea Sale FESTA 연계) 국가 대규모 쇼핑 관광축제와 연계하여 행사 홍보 및 10개 우수 중소기업 제품 할인 판매<br>
&nbsp;&nbsp; - (푸드트럭 페스티벌 등) 옥외 전시장에 경기도 푸드트럭의 음식 판매 및 고양시민 대상 나눔장터(벼룩시장) 운영으로 17,397명의 주민 참여</span></td>
                            </tr>
                            <tr>
                                <th>개선점 및<br>향후<br>추진 방향</th>
                                <td><span class="black_444" ><b>개최지의 교통 및 숙박 여건이 예상보다 좋지 않아 관람객 수가 전년보다 감소</b><br>
* (방문객) 95,740명(’15년) → 68,270명(’16년)</span>
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
					</li><li class="">
						<p class="square_img"><img src="/@resource/images/2016/01.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2016/02.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2016/03.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2016/04.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2016/05.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2016/2016-1.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2016/2016-2.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2016/2016-3.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2016/2016-4.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2016/2016-5.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2016/2016-6.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2016/2016-7.png"></p>
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
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/3RMAC1E2v0Q" title="2016지역희망박람회" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">2016지역희망박람회</p>
					</li>
                    <li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/ltWRS_ThjCg" title="2016 지역희망박람회 현장리포팅" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac"> 2016 지역희망박람회 현장리포팅</p>
					</li>
                </ul>
        </div>
        </div>
	</section>
    
</div>
<!-- // 서브 본문 -->

<?php include_once('../../_tail.php');?>


