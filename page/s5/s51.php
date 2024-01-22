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
	
	.process li {display: inline-block; vertical-align: top; width:45%;  margin: 0 10px 15px; padding: 45px 20px 0;  background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px;  height:250px !important;}
	.txt24 {font-size:18px;line-height:1.33;}
	
	.process1 li {display: inline-block; vertical-align: top; width:45%; height:455px !important; margin: 0 10px 15px; padding: 45px 20px 0; background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px; }
    
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
            <a href="/page/s5/s51.php" class="active">2018</a>
            <a href="/page/s5/s52.php" class="">2019</a>
            <a href="/page/s5/s53.php" class="">2020</a>
            <a href="/page/s5/s54.php" class="">2021</a>
        </div>
     </div>
		<div class="title-wrap">
			<h2 class="title">2018 대한민국 균형발전박람회</h2>
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
                                <td><span>2018. 9월 6일(목) ~ 8일(토) / 대전 컨벤션센터(DCC)</span></td>
                                <td rowspan="4"><p class="tac photo"><img src="/@resource/images/@temp/s54_2018.jpg"></p></td>
                            </tr>
                            <tr>
                                <th>슬 로 건</th>
                                <td><span class="blue" ><b>혁신, 지역을 깨우다!</b></span></td>
                            </tr>
                            <tr>
                                <th>주 제</th>
                                <td><span class="txt24 black_444" ><b>국가균형발전, 지역혁신</b></span></td>
                            </tr>
							<tr>
                                <th>추진 목적</th>
                                <td><span class="black_444" ><b>‘혁신’을 통해 발전하는 지역의 현재와 미래를 조망하고 지역리더 중심의 혁신플랫폼 구축을 통한 지속적인 균형발전 도모</b></span></td>
                            </tr>
							<tr>
                                <th>추진 체계</th>
                                <td colspan="2" ><p class="r_title" >주 최</p><span style="display:inline-block;">국가균형발전위원회, 산업통상자원부, 17개 시‧도</span><br>
                                   <p class="r_title">후 원</p><span style="display: -webkit-inline-box;">기획재정부, 교육부, 과학기술정보통신부, 행정안전부, 문화체육관광부, 농림축산식품부,<br>보건복지부, 환경부, 여성가족부, 국토교통부, 해양수산부, 중소벤처기업부</span><br>
                                   <p class="r_title" >주 관</p><span style="display:inline-block;">한국산업기술진흥원, 대전광역시</span>
                                </td>
                            </tr>
							<tr>
                                <th>행사 특징</th>
                                <td colspan="2"><span style="color:#1e8dc5;"><b>지역주도 혁신성장 우수사례 전시 및 지역혁신활동가들의 중심 사례를 공유하고, 체험‧공감하는 교류의 장 마련</b></span></td>
                            </tr>
                            <tr>
                                <th>주요 내용</th>
                                <td colspan="2"><span class="black_444" ><b>① 사람중심, 소통과 참여 중심의 지역혁신 축제의 장</b><br>
&nbsp;&nbsp; - ‘혁신’을 통해 발전하는 지역의 현재와 미래를 조망하고 지역리더 중심의 혁신플랫폼 구축을 통한 지속적인 균형발전 도모 <br>

<b>② ‘혁신‘을 주제로 한 균형·혁신·정책 등 3개 마당으로 구성‧운영</b><br>
&nbsp;&nbsp; - 균형마당 : 지역주도 혁신성장과 청년 일자리를 중심으로 구성한 지역 전시관<br>
&nbsp;&nbsp; - 혁신마당 : 지역 사회에서의 혁신활동을 공유·확산하는 지역혁신가 대회<br>
&nbsp;&nbsp; - 정책마당 : 국내 및 해외 학회와 공동으로 균형발전 정책 담론을 형성하는 場</span></td>
                            </tr>
                             <tr>
                                <th>행사 구성</th>
                                <td colspan="2">
                                
                                <div class="process">
                                   <ul class="tac">
					                   <li style=" height:220px;">
						                 <div class="txt_wrap">
							               <p class="num">본행사</p>
							               <p class="txt lh15">- 개막식, 균형마당(정책관/시도관/국제관), 혁신마당<span class="inline_768">&nbsp; (글로벌 혁신활동가 대회/지역‧청년 혁신활동가 네트워크),</span> &nbsp; 정책마당(정책학회), 폐막식</p>
						                </div>
					                 </li>
                                   
                                     <li style="background-color:#fdf7f3; height:220px;">
						                 <div class="txt_wrap">
							               <p class="num">부대행사</p>
							               <p class="txt lh15">- 휴양마을 체험부스, 균형발전 토크 콘서트, 북 콘서트,<span class="inline_768">&nbsp; 우리지역 버스킹 공연, 창작 공작소, 청년혁신카페, 혁신가의 식탁,</span>&nbsp; 페어웰 파티, 현장라이브방송, 혁신도시투자유치, 국민원탁포럼,<span class="inline_768">&nbsp; 균형발전옴브즈만</p>
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
                                <td><span class="black_444" ><b>균형발전위원장, 자치분권위원장, 대전시장 등 시·도 관계자, 정무수석, 지역혁신가, 전문가 등 477명이 참여하여 개막식, 전시회 참관</b><br>
 - 입장 및 국민의례, 오프닝 영상, 영상 메시지 상영, 환영사, 지역산업진흥 유공자 포상, 격려사, 개막 퍼포먼스 </span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">균형마당<br>(전시회)</th>
                                <td>
                                <span class="black_444" ><b> ‘지역주도 혁신성장’을 주제로 하는 17개 시도관, 해외정책(일본)을 소개하는 국제관, 균형발전의 역사와 비전을 보여주는 정책관으로 구성</b></span><br>
                                  <div style="width: 48%;  display: inline-block;  vertical-align:top; "> 
                                       <p class="r_title1">정책존</p><span>- 균형발전의 역사와 비전</span><br>
                                  </div>
                                  <div style="width: 48%;  display: inline-block;  vertical-align:top; ">
                                       <p class="r_title1">지역존</p><span>- “일자리를 만들어가는 지역주도형 혁신성장”</span>
                                   </div>
                                    <div style="width: 48%;  display: inline-block;  vertical-align:top; ">
                                       <p class="r_title1">기획관</p><span>- 국내외 혁신활동가들의 교류 촉진<br>- 지역혁신 활동가들의 다양한 기획 퍼포먼스 전시</span>
                                    </div>
                                   <div style="width: 48%;  display: inline-block;  vertical-align:top; ">
                                       <p class="r_title1">국제관</p><span>- 일본의 지역발전․균형발전 정책 사례</span>
                                       </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">혁신마당</th>
                                 <td>
                                  <span class="black_444" ><b>마을만들기, 지역재생, 청년창업, 문화 등 다양한 분야의 혁신활동가들이 각 지역의 특색을 살린 기술‧문화‧예술 등 활동 콘텐츠 소개</b></span><br>
                                  <p class="r_title2">글로벌 혁신활동가 대회</p><span>- 혁신 활동가들의 다양한 혁신사례 공유·네트워킹 및 워크숍<br>
 - 프로그램 : 글로벌 명사 강연 및 토론 「글로벌 토크 콘서트」, 지역혁신가 대회 「Better Together 챌린지」, 혁신활동가 열린토론회 「오픈보이스」,<span class="inline_768">&nbsp; 혁신활동가 사례 전시 및 혁신활동 문화체험 「Better Together 페어&스쿨」</span><br><br>
                                  <p class="r_title2">지역·청년 혁신활동가 네트워크</p><span>- 혁신가 네트워크 토론, 사례발표 및 전시<br>
 - 프로그램 : 지역재생 혁신가 라운드테이블, 마을혁신가 마당 <모두의 마을>, 지역발전 오디션 <지역 혁신가 릴레이 PT>,<bR>&nbsp;&nbsp;지역재생혁신가 거버넌스 토론마당, 지역혁신의 터닝포인트는 문화!(토론), 청년혁신카페(청년혁신가 발표 및 토론)</span>
 
 
 
                              </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">정책마당</th>
                                 <td><span class="black_444" ><b>균형발전 시대의 지역중심담론 형성과 이론 및 사례 공유를 통해 국가균형발전과 관련된 다양한 의제에 대해 토론</b><br>- 40개 학회 및 14개 연구기관의 전문가 738명 참여<br>
&nbsp;&nbsp; * 슬로건 : 혁신의 바람이 분다!<br>
&nbsp;&nbsp; ** 주제 : ① 분권, ② 혁신, ③ 포용</span><br>
                                 <p class="r_title3">세션별 주요내용</p><BR>
                                - 개막세션 : 국가균형발전과 지역 간 상생방안<BR>
 - 일반세션 : ‘분권·혁신·포용’ 중심 24개 주제의 세션<BR>
 - 국제세션 : 일본, 중국, 프랑스의 국가균형발전 정책 사례 소개, 균형발전 선진국과 정책협력 채널 구축 및 강화<BR>
 - 특별세션 : 혁신도시 향후계획 및 발전방향, 지역공동번영의 조건과 과제<BR>
 - 종합세션 : 분권·혁신·포용별 주제세션의 주요 논의결과에 따른 국가균형발전의 정책적 함의 공유
                                 
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">균형발전<BR>유공 시상</th>
                                 <td><span class="black_444" ><b>지역산업 경쟁력 제고 및 지역경제 활성화에 기여한 성과를 격려하고, 선정자에 대한 포상 수여</b><br> 
- 총 59점(철탑산업훈장 1점, 산업포장 1점, 대통령표창 8점, 국무총리표창 9점, 산업부장관표창 40점)</span></td>
                            </tr>

                            <tr>
                                <th style=" background-color:#fdf7e3;">부대행사</th>
                                <td>
                                <div class="process1">
                                   <ul class="tac">
					                   <li style=" height:410px;">
						                 <div class="txt_wrap">
							               <p class="num">휴양마을체험부스</p>
							               <p class="txt lh15">- 휴양마을 체험 프로그램을 통한 다양한 농촌 문화체험</p>
						                </div>
					                 </li>
                                     <li style=" height:410px;">
						                 <div class="txt_wrap">
							               <p class="num">균형발전 토크콘서트</p>
							               <p class="txt lh15">- 명사 강연, 토크쇼, 요리 토크쇼 등 대중 참여 프로그램으로 박람회<Br>&nbsp;&nbsp;일반 관람객 유치 및 행사 관심도 고취 <br>
 - 동감 Talk : 청년들에게 예정없이 만나는 역경이라도 당당하게<span class="inline_768">&nbsp; 맞설 수 있는 청년 혁신을 위한 이야기.<Br></span>&nbsp; 대전출신의 개그맨 서경석이 강의 진행<br>
 - 공감 Talk : 자기혁신으로 자신만의 영역을 만들어낸 패널들과<span class="inline_768">&nbsp; 함께, JTBC 톡투유 형태로 ‘나를 깨우는 우리의 성장 스토리’를<span class="inline_768">&nbsp; 주제로 한 토크콘서트, 박경림 사회로 패널(김수영 작가,</span>&nbsp; 배우 정상훈)과 관람객이 함께 소통<br>
 - 미감 Talk : 한사람의 행복을 넘어 우리 모두가 행복해지는 음식을<span class="inline_768">&nbsp; 통한 행복한 소통, 미카엘 셰프의 색다른 요리토크쇼</span></p>
						                </div>
					                 </li>
                                     <li style="height:220px;">
						                 <div class="txt_wrap">
							               <p class="num">북 콘서트</p>
							               <p class="txt lh15">- 전시장 내 북 카페에서 편안한 휴식과 함께 유익한 저자의<Br>&nbsp;&nbsp;강연을 들을 수 있는 리프레쉬 프로그램<br>
 - <마을이 숨쉰다> 이영미 작가, <골목길 자본론> 모종린 작가,<Br>&nbsp;&nbsp;<메트로폴리스 서울의 탄생> 임동근 작가</p>
						                </div>
					                 </li>
                                     
                                      <li style="height:220px;">
						                 <div class="txt_wrap">
							               <p class="num">우리지역 버스킹 공연</p>
							               <p class="txt lh15">- 지역에서 활동하고 있는 로컬밴드 공연으로 박람회에 재미와<span class="inline_768">&nbsp; 활력을 주는 엔터테인먼트 프로그램<br></span>
 - 대구 사필성 밴드, 제주 사우스카니발, 대전 다브다(DABBDA)</p>
						                </div>
					                 </li>
                                     
                                      <li style="height:200px;">
						                 <div class="txt_wrap">
							               <p class="num">창작공작소</p>
							               <p class="txt lh15">- 지역에 활력을 불어넣는 지역재생 체험 프로그램<br>
 - 친환경 콜크클레이 미니 화분 만들기, 글라스본 유리병 공예, <span class="inline_768">&nbsp; 감성글씨 캘리그라피 엽서 만들기</span></p>
						                </div>
					                 </li>
                                     
                                     
                                      <li style="height:200px;">
						                 <div class="txt_wrap">
							               <p class="num">대한민국 농촌융복합 산업 홍보부스</p>
							               <p class="txt lh15">- 농촌융복합 산업 활성화 지원사업 홍보</p>
						                </div>
					                 </li>
                                     
                                     
                                      <li style="height:150px;">
						                 <div class="txt_wrap">
							               <p class="num">혁신가의 식탁(네트워킹 파티)</p>
							               <p class="txt lh15">- 박람회 참가 혁신활동가 및 관계자 네트워크 기회제공 </p>
						                </div>
					                 </li>
                                     
                                     <li style="height:150px;">
						                 <div class="txt_wrap">
							               <p class="num">페어웰파티</p>
							               <p class="txt lh15">- 박람회 기간동안 함께한  참가자들 즐기는 페어웰 파티 </p>
						                </div>
					                 </li>
                                     
                                     <li style="height:180px;">
						                 <div class="txt_wrap">
							               <p class="num">[생생한 지역혁신 현장 라이브]</p>
							               <p class="txt lh15">- 박람회 현장 리포터 라이브 실시간 박람회 홍보</p>
						                </div>
					                 <li style="height:180px;">
						                 <div class="txt_wrap">
							               <p class="num">혁신도시 투자유치 설명회</p>
							               <p class="txt lh15">- 산·학·연 클러스터 활성화를 위한 적극적인 투자활동 전개<br>
- 이전 의향 기업과의 MOU 체결로 실질적 투자유치 성과 거양</p>
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
                            <col width="87%" />
						</colgroup>
                        <tbody>
                            <tr>
                                <th style="background-color:#f5fbea;">홍보 활동</th>
                                 <td><div class="box" style="width: 48%;  display: inline-block; "><p class="r_title3">언론</p><span>
 - 보도자료<br>
 - 보도사진<br>
 - 프레스센터 <br>
 - 개막식 생중계(9개 전국 지역 민방)<br>
 - 방송토론<br>
 - 방송보도<br>
 - 방송제작<br><br></span></div>
                            <div class="box" style="width: 48%;  display: inline-block;  vertical-align:top; "><p class="r_title3">온라인</p><span>
 - 홈페이지<br>
 - 유튜브 및 유관기관 SNS 활용<br>
 - 뉴스레터<br>
 - 키워드광고(네이버 및 다음 사이트)<br>
 - 카드뉴스<br>
 - 스팟영상(영상 제작 및 유투브 등을 통한 광고<br>
 - 온라인생중계</span></div>
 
                             <div class="box"  style="width: 48%;  display: inline-block; vertical-align:top;  "><p class="r_title3">오프라인</p><span>
- 옥외광고(전광판, 건물 외벽 통천, 도로 현수막,<bR>&nbsp;&nbsp;가로등 배너, 포스터 등)<br>
 * 코레일 : 8.13~9.5 역사 내 매체를 통한 행사 광고 게재 <br>
 * 정부청사 : 8.17~ 포스터, 배너, 현수막, 통천 등 부착 및 게시<br>
 - 박람회 포스터 및 초청장 배포</span></div>
                                <div style="width: 48%;  display: inline-block; vertical-align:top;  "><p class="r_title3">광고</p><span>
- 정부청사 및 행사장 주변 현수막, 옥외전광판 활용 <br>
- (KTX) 전광판 홍보영상, 주요 역사 포스터</span></div>
                                </td>
                            </tr>
                             <tr>
                                <th style="background-color:#f5fbea;">홍보 실적</th>
                                <td><span class="black_444" ><b>언론 </b><br> - 언론 보도 총 836건(방송18회, 신문114회, 온라인704회)</span></td>
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
                                <td><span class="black_444" ><b>지역혁신활동가 및 전문가 중심의 박람회 개최, 지역혁신사례를 공유·확산하고 지역혁신 주체 간 소통·교류 확대</b><br>
 &nbsp;&nbsp; * 개막식 477명, 전시회 24,505명, 혁신마당 789명, 정책마당 738명, 부대행사 671명 등 총 27,180명 방문</span><br>
                              <p class="r_title3">세부 성과</p>
<span class="black_444" ><b>① (개막식) 균형발전위원장, 자치분권위원장, 대전시장 등 시·도 관계자, 정무수석, 지역혁신가, 전문가 등 477명이 참여하여 개막식, 전시회 참관</b><br>
<b>② (전시회) ‘지역주도 혁신성장’을 주제로 하는 17개 시도관*, 해외정책(일본)을 소개하는 국제관, 균형발전의 역사와 비전을 보여주는 정책관으로 구성</b><br>
 &nbsp;&nbsp; * 3일간 총 24,505명 관람  * 1일차(8,563명), 2일차(8,540명), 3일차(7,402명)<br>

③ (혁신마당) 마을만들기, 지역재생, 청년창업, 문화 등 다양한 분야의 혁신활동가들이 각 지역의 특색을 살린 기술‧문화‧예술 등 활동 콘텐츠 소개<br>
 &nbsp;&nbsp; * 30개 단체 및 지역혁신활동가 789명 참여<br>

<b>④ (정책마당) 균형발전 시대의 지역중심담론 형성과 이론 및 사례 공유를 통해 국가균형발전과 관련된 다양한 의제에 대해 토론</b><br>
 &nbsp;&nbsp; * 40개 학회 및 14개 연구기관의 전문가 738명 참여<br>

<b>⑤ (부대행사) 토크콘서트, 북 콘서트, 휴양마을 체험부스, 창작공작소 등 지역의 삶과 문화를 체험할 수 있는 다양한 프로그램 운영</b><br>
 &nbsp;&nbsp; * 토크콘서트 등 다양한 프로그램에 3일간 671명 참가</span><br>
 
 
 
                               </td>
                            </tr>
                            <tr>
                                 <th>개선점 및<br>향후<br>추진 방향</th>
                                <td><span class="black_444" ><b>① 지역혁신활동가들의 자긍심 촉진과 활동가들의 네트워크 활성화 박람회 개최<br>
② 균형발전의 새로운 모델 개발을 위한 상상력을 높여줄 해외사례 및 비전을 보여주는 정책박람회 필요</b></span>
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
						<p class="square_img"><img src="/@resource/images/2018/01.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/02.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/03.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/04.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/05.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/06.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/07.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/08.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/09.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/06.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/10.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/11.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/12.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/13.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/14.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/15.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/16.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/17.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/18.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/19.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/20.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/21.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/22.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/23.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/24.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/25.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2018/26.jpg"></p>
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
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/A-vnNFP33Jg" title="[2018 대한민국 균형발전박람회 개최]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">2018 대한민국 균형발전박람회 개최</p>
					</li>
                    <!--li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/C41LR700uLQ" title="2018 대한민국 균형발전박람회 김태진의 실시간 LIVE​" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">2018 대한민국 균형발전박람회 김태진의 실시간 LIVE​</p>
					</li-->
                    <li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/ek0XnoCd71U" title="[대전MBC뉴스]2018 대한민국 균형발전박람회 내일 개막" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">[대전MBC뉴스]2018 대한민국 균형발전박람회 내일 개막</p>
					</li>
                </ul>
                                
        </div>
        </div>
	</section>
    
</div>
<!-- // 서브 본문 -->

<?php include_once('../../_tail.php');?>


