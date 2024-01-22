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
	
	.process li {display: inline-block; vertical-align: top; width:45%;  margin: 0 10px 15px; padding: 45px 20px 0;  background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px;  height:190px !important;}
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
            <a href="/page/s5/s4.php" class="active">2013</a>
            <a href="/page/s5/s41.php" class="">2014</a>
            <a href="/page/s5/s42.php" class="">2015</a>
            <a href="/page/s5/s43.php" class="">2016</a>
        </div>
     </div>
		<div class="title-wrap">
			<h2 class="title">2013 대한민국 지역희망박람회</h2>
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
                                <td><span>2013. 11. 27(수) ~ 30(토) / 부산 BEXCO </span></td>
                                <td rowspan="4"><p class="tac photo"><img src="/@resource/images/@temp/s53_2013.jpg"></p></td>
                            </tr>
                            <tr>
                                <th>슬 로 건</th>
                                <td><span class="blue" ><b>지역에 희망을, 주민에게 행복을</b></span></td>
                            </tr>
                            <tr>
                                <th>주 제</th>
                                <td><span class="txt24 black_444" ><b>지역희망, 행복생활권</b></span></td>
                            </tr>
							<tr>
                                <th>추진 목적</th>
                                <td><span class="black_444" ><b>지역희망프로젝트 등 지역발전정책의 철학․방법론을 공유하고 <br>정부와 시․도의 협력 촉진 및 對국민 공감대 형성</b></span></td>
                            </tr>
							<tr>
                                <th>추진 체계</th>
                                <td colspan="2" ><p class="r_title" >주 최</p><span style="display:inline-block;">지역위, 17개 시․도, 기재부, 미래부, 교육부, 안행부, 문체부, 농림부, 산업부, 복지부, 환경부, 국토부, 해수부, 고용부</span><br>
                                       <p class="r_title">주 관</p><span style="display:inline-block;">한국산업기술진흥원</span><br>
                                       <p class="r_title">참 여</p><span style="display:inline-block;">한국산업단지공단, 대한무역투자진흥공사</span>
                                </td>
                            </tr>
							<tr>
                                <th>행사 특징</th>
                                <td colspan="2"><span style="color:#1e8dc5;"><b>지역희망프로젝트의 철학 등 대국민 메시지 전달, 지역발전에 대한 정부차원의 관심과 의지 표명</b></span></td>
                            </tr>
                            <tr>
                                <th>주요 내용</th>
                                <td colspan="2"><span class="black_444" ><b>박근혜 정부 출범 원년임을 감안, 정부의 지역발전정책 비전을 공유하고 대국민 공감대를 형성하는 場으로 활용</b></span></td>
                            </tr>
                             <tr>
                                <th>행사 구성</th>
                                <td colspan="2">
                                
                                <div class="process">
                                   <ul class="tac">
					                   <li style=" height:220px;">
						                 <div class="txt_wrap">
							               <p class="num">사전행사</p>
							               <p class="txt lh15">- 일자리 박람회</p>
						                </div>
					                 </li>
                                     <li style=" height:220px;">
						                 <div class="txt_wrap">
							               <p class="num">본행사</p>
							               <p class="txt lh15">- 개막식<br>- 전시회 : 부처, 시도, 베스트상품전 </p>
						                </div>
					                 </li>
                                     <li style="background-color:#fdf7f3; height:220px;">
						                 <div class="txt_wrap">
							               <p class="num">부대행사</p>
							               <p class="txt lh15">- 컨퍼런스, 우수사례발표회/시상식,<br>&nbsp; 주민참여마당(희망이음토크쇼,<br>&nbsp; 지식콘서트, 체험관),<br>&nbsp; 외국인투자유치설명회</p>
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
                                <td><span class="black_444" ><b>국민의례, 개회사, 환영사, 정책보고, 유공자포상, 격려사</b></span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">전시회</th>
                                 <td><p class="r_title1">정책존</p><span>- 지역발전정책관(1개) : 지역행복프로젝트의 비전과 전략<br>
 - 부처관(8개) : 부처별 주요 시책 및 주요 사례 전시</span><br>
                                       <p class="r_title1">지역존</p><span>- 시․도관 (17개) : 살기좋은 지역만들기 등 지역별 시책과 사업, 지역연고자원을 활용한 문화상품 홍보</span><br>
                                       <p class="r_title1">특별존</p><span>- 지역특화베스트상품전(1개) : 주민생활과 밀접한 지역사업 제품 홍보․판매</span>
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">컨퍼런스</th>
                                 <td><span class="black_444" ><b>8개 분야 23개 기관에서 총 203명의 전문가가 2,076명의 관계자․학생 등이 참관한 가운데 98편의 논문을 발표․토론</b></span><br>
                                 
                                 <p class="r_title2">개최기관별 주요내용</p>
                                 <span style="line-height:170%;">- LINC사업단협의회·한국연구재단 : 창조경제 실현 및 지역발전을 위한 산학협력 활성화 방안<br>
 - 한국지역학회 : 행복한 지역발전의 조건, 생활서비스 개선을 위한 지역공동체의 역할, 도시재생과 주민 삶의 질 향상방안에<span class="inline_768">&nbsp; 대한 발표 및 토론의 장을 마련<br></span>
 - 전국시도연구원협의회 : 창조경제시대 지역행복생활권 구축과 상생협력<br>
 - 국토교통부 공공기관지방이전추진단 : 혁신도시내 산학연 클러스터 부지의 조기 공급을 통한 산학연 클러스터 구축 및 지역발전의 성장동력 거점 확보<br>
 - 대통령직속지역발전위원회 좌담회 : 새로운 지역발전정책에 대한 대국민 홍보와 지역의견 수렴<br>
 - 대통령직속 지역발전위원회 기조강연 및 과제별 주제발표 : 지역발전 정책의 패러다임 변화에 대응, 새로운 지역발전정책에 맞는 분야별 과제를<span class="inline_768">&nbsp; 도출하며, 지역행복생활권 등 새로운 지역발전정책에 대한 국내외 유사 사례를 통한 시사점 도출<br></span>
 - 한국지역정책학회 좌담회 : 지역정책 분야의 국제 석학들을 초빙하여 좌담회를 개최<br>
 - 국토연구원 : 국민행복을 위한 新국토정책 방향<br>
 - 대한국토도시계획학회·부산광역시 : 지역공동체 기반의 도시재생을 위한 마을문화·산업 창출방안<br>
 - 한국지역특화산업협회 : 지역특화산업육성사업(3R) 협력방안 논의를 위한 토론회<br>
 - 한국중소기업학회 : 중앙 및 지방정부의 창조경제 정책과 글로벌 경쟁력을 강화하기 위한 중소기업들의 대응방안 논의<br>
 - 한국산업협력학회 : 지역인재육성과 산학협력활성화 방안<br>
 - 지역사업평가원협의회 : 창조경제시대의 지역산업 활성화 방안<br>
 - 한국지방재정학회 : 사회복지 서비스와 지역발전 관련 논문을 발표하고 지방재정의 역할과 정책과제 및 바람직한 실천방안 논의<br>
 - 부산광역시, 부산발전연구원 : 창조경제시대의 지역의 발전전략<br>
 - KIAT 지역산업발전종합계획 컨설팅 : 지역산업발전종합계획 수립을 위한 시도별 1차 산업선정(안)에 대해 중앙-지역 간 협의·조정<br>
 - 부산관광포럼 : 지역 커뮤니티·주민에 기반을 둔 여행프로그램 ‘공정관광’에 대한 이해를 넓히고, 다양한 관광자원을 체계적으로 연계한 지역 특화<span class="inline_768">&nbsp; 브랜드 및 관광 사업을 창출하는 ‘관광두레’를 통하여 지역의 창조적 관광경제 활성화 방안을 제시<br></span>
 - KIAT 광역거점지원사업 컨퍼런스 : 광역경제권거점기관지원사업 산업분야별(기계분과, 자동차분과, 전기전자분과, 섬유분과) 컨퍼런스<br>
 - 한국지역정책학회 국제 심포지엄 : 한국, 영국, 일본의 지역정책 추진 동향과 전망, 지역정책의 패러다임, 지역유형별 정책조합(policy-mix) 방향,<span class="inline_768">&nbsp; 지역균형발전 전략 등에 대한 주제발표 및 토론<br></span>
 - 지역발전위원회(해외사례 발표회) : 박근혜 정부의 지역발전 정책과 부합하는 지역행복생활권의 우수 선진지 사례 발표 및 토론회<br>
 - 광주광역시, 광주발전연구원 : 창조행정과 시민행복 관련 사례 발표를 통해 정책실현 방법을 공유하고, 발전적인 대안을 모색<br>
 - 한국지역사회복지학회 : 전통적 지역 빈곤해소, 빈민운동 그리고 지역개발 차원의 지역사회 복지전략을 넘어 주거, 환경,<span class="inline_768">&nbsp; 문화적 차원으로의 복지지형의 확장을 모색<br></span>
 - 한일산업기술협력재단 : 지역특화산업 일본시장진출 마케팅전략 세미나</span>
 
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">우수사례<bR>발표회 및<bR>시상식</th>
                                <td><span class="black_444" ><b>지역발전 우수사례의 발표․전파를 통해 전국적 확산을 도모하고, 유공자 포상으로 정부의 지역발전 의지 표명 및 사기진작</b><br>- 지역공동체 촉진, 지역협력, 특화산업 육성을 통한 일자리 창출 등 주민의 삶의 질 향상과 관련 있는 여러 분야로 시상 범위 확대<Br>
 * 총 60점 시상(대통령 6, 국무총리 9, 산업부장관 45) </span></td>
                            </tr>
                            <tr>
                                <th style=" background-color:#fdf7e3;">주민참여<bR>마당</th>
                                <td>
                                <div class="process1">
                                   <ul class="tac">
					                   <li style=" height:270px;">
						                 <div class="txt_wrap">
							               <p class="num">희망이음 토크쇼</p>
							               <p class="txt lh15">- 부산 지역 희망이음 참여기업인, 대학생을<br>&nbsp; 포함 110명이 참가하여 지역 중소기업에<br>&nbsp; 대한 인식을 제고<br>
 - 미니토크, 청년희망 종이학 이벤트 등으로<br>&nbsp; 학생들이 기업 CEO에게 자신의 고민을<br>&nbsp; 마음껏 터놓을 수 있는 편안한 분위기<br>&nbsp; 조성</p>
						                </div>
					                 </li>
                                     <li style=" height:270px;">
						                 <div class="txt_wrap">
							               <p class="num">지식콘서트</p>
							               <p class="txt lh15">- 주민․학생 등 359명이 참관하여<br>&nbsp; 자연스럽게 다양한 경험과 지식을<br>&nbsp; 공유하고, 궁금증을 해소할 수 있는<br>&nbsp; 기회 제공</p>
						                </div>
					                 </li>
                                     <li style="background-color:#fdf7f3; height:270px;">
						                 <div class="txt_wrap">
							               <p class="num">체험관</p>
							               <p class="txt lh15">- 주민․학생들이 지역산업의 우수성과를<br>&nbsp; 직접 경험하고 느껴봄으로써 지역에 대한<br>&nbsp; 애정과 이해도를 제고<br>
 - 한지체험, 천연염색, 고추장만들기 등을<br>&nbsp; 체험할 수 있으며, 체험존, 건강존,<br>&nbsp; 체험교실로 구성</p>
						                </div>
					                 </li>
                                     
                                     </ul>
                                    
                                </div> 
                                
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">외국인<br>투자유치<br>설명회</th>
                                 <td><div style="width: 48%;  display: inline-block; vertical-align:top;"><p class="r_title3">대한투자환경 설명회</p><span>- 프로젝트 소개 : 부산시, 인천시, 포항시, 시흥시, 새만금<br>
 - 프로젝트 소개 후 개별 상담회 진행(총 104건)</span></div>
                                 <div style="width: 48%;  display: inline-block; vertical-align:top;"><p class="r_title3">프로젝트 현장 시찰</p><span>- 부산시(17개사) : 동부산 관광단지, 신항<br>
 - 새만금(10개사) : 신시-야미 관광레저용지<br>
 - 대구시(7개사) : 첨복단지<br>
 - 제주도(7개사) : 풍산 드림랜드, 블랙스톤</span></div>

                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">베스트<br>상품전</th>
                                <td><span class="black_444" ><b>베스트상품전에 참여한 31개 지역특화사업단(77개 품목)이 국내 대형유통업체 13곳을* 초청하여 61건을 상담(약 16.58억원)</b><br>* 신세계백화점, 현대백화점, 이마트, 홈&쇼핑, CJ홈쇼핑, GS홈쇼핑, NS홈쇼핑, 롯데쇼핑, 코리아세븐, 미니스톱, 현대 홈쇼핑</span></td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">일자리<br>박람회</th>
                                <td><span class="black_444" ><b>산업부, 고용부, 부산시가 공동으로 부산지역의 인력난․구직난 해소에 도움을 주기 위하여 일자리 박람회를 개최</b><br>- 구인-구직자 면접·상담 이외에도 취업·이력서·이미지 컨설팅과 타로카드 취업운세, 이력서 사진 촬영 등 취업지원 서비스 제공</span></td>
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
                                  <td ><div class="box" style="width: 32%;  display: inline-block; "><p class="r_title3">온․오프라인 홍보물 제작․배포</p><span>
- 미디어 브리핑 <br>
 - 기자간담회 <br>
 - 보도자료 <br>
 - 일간지 특별섹션 기획 및 제작 <br>
 - 공중파 특별 대담 기획․지원(KNN 특별대담) <br>
 - 개막식 생방송 기획 및 지원(KNN, TV조선,<br>&nbsp;&nbsp;YTN, 뉴스와이, KTV) <br>
 - 생활정보 프로그램 기획 및 제작(KNN <br>&nbsp;&nbsp;생방송투데이, 11.28(목) 방영) <br>
 - 프레스룸 운영<br><br></span></div>
                            <div class="box" style="width: 32%;  display: inline-block;  vertical-align:top; "><p class="r_title3">온라인</p><span>
 - 홈페이지 <br>
 - 2013 대한민국 지역희망박람회 SNS<br>
 - 뉴스레터<br><br></span></div>
 
                             <div class="box" style="width: 32%;  display: inline-block; vertical-align:top;  "><p class="r_title3">오프라인</p><span>
 - 초청장 및 안내서 제작</span></div>
                                </td>
                            </tr>
                             <tr>
                                <th style="background-color:#f5fbea;">홍보 실적</th>
                                <td><span class="black_444" ><b>언론 보도 총 1,179건(방송 59건, 신문 386건, 온라인 734건) </b></span></td>
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
                                <td><span class="black_444" ><b>① 지역희망프로젝트의 철학 등 對국민 메시지 전달 및 경제, 문화, 복지 등 다양한 분야의 전문가들이 참여하여 실천방안을 모색</b><br>
&nbsp;&nbsp;  - 8개 분야 23개 기관에서* 총 203명의 전문가가 참여하여 98편의 논문을 발표․토론(총 2,076명 참관)하고 다양한 네트워킹을 형성<br>
&nbsp;&nbsp;  * 학술단체(8), 연구기관(4), 지역발전 관계기관(7), 정부기관(4)<br>

<b>② 경제, 문화, 농촌 등 여러 분야의 참여(1,285개 기관 참여)․협력으로 주민의 눈높이에 맞는 정책․사례 제시(약 4만명 참관)</b><br>
&nbsp;&nbsp;  - 전시회는 17개 시·도, 8개 부처, 287개 기관, 948개 기업(잠정)이 참여하여 약 33,751명이 참관(지역발전정책에 대한 이해도 제고에 도움: 76%)<br>
&nbsp;&nbsp;  - 한지, 머리띠 등 10개 분야 체험관에 3,713명이 참가하여 지역의 우수성과를 체험하고, 지식콘서트에 359명이 참관하여<br>&nbsp;&nbsp;&nbsp;&nbsp;  유명 전문가와 함께 “꿈”, “소통”, “희망”의 경험 공유*<br>
&nbsp;&nbsp;  * 지식콘서트 KNN 특집방송(11.30), You-Tube 스트리밍 방송<br>
&nbsp;&nbsp;  - 가족단위 관람 유도를 위해 주말까지 연장 운영(주말관람: 8,139명)<br>

<b>③ (일자리 박람회) 부산의 262개 기업이 직․간접적으로 참여하고, 10,335명의 구직자가 참여하여 268명 채용* 확정</b><br>
&nbsp;&nbsp;  *  중․장년층 3,513명 중 110명 채용,  청년층 6,822명중 158명 채용<br>

<b>④ (외국인 투자유치설명회) 중국, 일본, 유럽, 동남아 등 41개사 53명이 참여하여 104건의 상담을 진행(상담결과 추후보고)</b><br>
&nbsp;&nbsp;  * 프로젝트 소개: 동부산 관광단지, 신항, 신시-야미 관광레저용지, 대구첨복단지, 풍산 드림랜드, 블랙스톤 등<br>

<b>⑤ (지역특화베스트상품전) 31개 사업단(77개 품목)이 참여하고, 국내 대형 유통업체* 13곳을 초청하여, 61건 상담(상담금액: 16.6억원)</b><br>
&nbsp;&nbsp;  * 신세계백화점, 현대백화점, CJ홈쇼핑, 롯데홈쇼핑, E마트 등</span></td>
                            </tr>
                            <tr>
                                <th>개선점 및<br>향후 <br>추진 방향</th>
                                <td><p class="r_title3">개선점</p><span class="black_444" ><b>① 기초자치단체, 마을단위까지 참여시킬 수 있는 접점이 미흡하였고, 다양한 사례(콘텐츠) 발굴을 통한 확산 등이 미흡<br>
② 민선 6기로 자치단체가 새롭게 출범함에 따라 정부-지역간 소통과 협력의 장 마련 및 정책적 공감대 형성의 필요성 증가<br>
③ ｢균특법｣ 개정안 발효, 행복생활권계획 수립 등 지역발전정책이 본격적인 궤도에 오름에 따라 가시적 성과에 대한 수요도 증가<br>
④ 청년실업문제의 심화 등으로 지역의 일자리 창출에 대한 화두도 민선 6기 출범과 함께 대두 예상</b></span><br>
                                <p class="r_title3">향후 추진 방향</p><span class="black_444" ><b>① 지역위 중심의 관계부처 협력 강화<br>
② 정부와 지역의 정책공유 및 소통과 협력 촉진<br>
③ 시․도가 주관하는 사전행사(우수사례 예선전)를 개최를 통해 기초자치단체 뿐 아니라 마을단위(읍․면․동)까지 참여를 확산<br>
④ 일자리 연계 및 지역경제 활성화<br>
⑤ 시․도와의 역할분담을 통한 유기적인 홍보체계 구축</b></span>
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
						<p class="square_img"><img src="/@resource/images/2013/01.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2013/02.png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2013/2013 (1).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2013/2013 (2).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2013/2013 (3).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2013/2013 (4).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2013/2013 (5).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2013/2013 (6).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2013/2013 (7).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2013/2013 (8).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2013/2013 (9).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2013/2013 (10).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2013/2013 (11).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2013/2013 (12).png"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2013/2013 (13).png"></p>
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
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/7U-DthoqqvQ" title="2013 대한민국 지역희망박람회 지식콘서트 &amp; 체험관" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">2013 대한민국 지역희망박람회 지식콘서트 & 체험관</p>
					</li>
                    <li class="">
						<p class="square_img"><iframe  width="100%" height="214px" src="https://www.youtube.com/embed/TF4icTh_Imc" title="[2013 대한민국 지역희망박람회] 지식콘서트_꿈꾸다_이정권 (2013년 11월 29일)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">[2013 대한민국 지역희망박람회] 지식콘서트_꿈꾸다_이정권 (2013년 11월 29일)</p>
					</li>
                    <li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/VhsZDLJv1mY" title="2013 지역희망박람회 하이라이트" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">2013 지역희망박람회 하이라이트</p>
					</li>
                </ul>
        </div>
        </div>
	</section>
    
</div>
<!-- // 서브 본문 -->

<?php include_once('../../_tail.php');?>


