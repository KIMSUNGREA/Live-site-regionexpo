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
.r_title1 {position: relative;background-color:#42d3e8;padding: 2px 0;font-size:18px;color:#fff;font-weight: 500;border-radius: 30px;width: 285px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}
.r_title2 {position: relative;background-color:#c1503e;padding: 2px 0;font-size:18px;color:#fff;font-weight: 500;border-radius: 30px;width: 265px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}
.r_title3 {position: relative;background-color:#0dace6;padding: 2px 0;font-size:18px;color:#fff;font-weight: 500;border-radius: 30px;width: 295px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}
.r_title4 {position: relative;background-color:#46b500;padding: 2px 0;font-size:18px;color:#fff;font-weight: 500;border-radius: 30px;width: 50%;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}
.r_title5 {position: relative;background-color:#d97f28;padding: 2px 0;font-size:18px;color:#fff;font-weight: 500;border-radius: 30px;width: 295px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}


.pt50 { padding-top:50px;}
.pt30 { padding-top:30px;}
.pt10 { padding-top:10px;}
.mt10 { margin-top:10px;}

.process {width: 100%;position: relative;display: inline-block;float: left;}
.process ul {text-align: center;font-size: 0; font-size:16px;width:100%;}
.process li {display: inline-block; vertical-align: top; width: 245px; height:245px; margin: 0 -15px 15px; padding: 75px 30px 0; border-radius:50%; background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; }
.process li:nth-child(2n) {background-color: #f3f8fd; z-index:1; }
.process li .txt_wrap {position: absolute; left: 0; width: 100%;  z-index: 1; color: #000; display:contents;}
.process li .txt_wrap .num {display: inline-block; line-height: 1; color:#000; padding-bottom: 10px; letter-spacing:-1px; font-weight:bold; border-bottom: 1px solid rgba(255,255,255,0.3);}

.process1 {width: 100%;position: relative;display: inline-block;float: left;}
.process1 ul {text-align: center;display: inline-block;font-size:16px; width:100%;}
.process1 li {display: inline-block; vertical-align: top; width: 31.5%;  margin: 0 5px 15px; padding: 50px 15px 0; border-radius:0%; background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; }
.process1 li:nth-child(2n) {background-color: #f3f8fd; z-index:1; }
.process1 li .txt_wrap {position: absolute; left: 0; width: 100%;  z-index: 1; color: #000; display:contents;}
.process1 li .txt_wrap .num {display: inline-block; line-height: 1; color:#000; padding-bottom: 10px; letter-spacing:-1px; font-weight:bold; border-bottom: 1px solid rgba(255,255,255,0.3);}
.process1 li .txt_wrap .txt { text-align:left;}


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
	 
   
    .process li {display: inline-block; vertical-align: top; width: 205px; height:205px; margin: 0 -15px 15px; padding: 75px 30px 0; border-radius:50%; background-color: #fdf7e3; position: relative; float: left; word-break:keep-all; font-size:13px; }
	.process li:nth-child(2n) {background-color: #f3f8fd; z-index:1; display:block; }


  
	.txt24 {font-size:18px;line-height:1.33;}
	
	 .table_wrap .table_basic {overflow-x: scroll;}
     .table_wrap .table_basic table {width: 100%;min-width:760px;}

	
	.table_basic td, .table_basic th {padding: 1em 1em;height: 40px;border-bottom: 1px solid #d1d1d1;vertical-align: middle; font-size:13px;}
	.table_basic td, .table_basic .img1 { }
	.table_basic td, .table_basic .img1  img{ width:100%;}
	.r_title {position: relative;background-color:#3496bd;padding: 2px 0;font-size:14px;color:#fff;font-weight: 500;border-radius: 30px;width: 65px;text-align: center;display: block; margin-right:10px; margin-bottom:5px; margin-top:10px;}
	.r_title {position: relative;background-color:#3496bd;padding: 2px 0;font-size:14px;color:#fff;font-weight: 500;border-radius: 30px;width: 65px;text-align: center;display: inline-block; margin-right:10px; margin-bottom:10px;}
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
	
	 .process { width:70%; margin:0 auto; padding-left:20px; }
	 
	 .table_basic td, .table_basic .td1 div { width:50% !important;}
	 .table_basic td, .table_basic .photo img  { }
	 
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
		<a href="/page/s5/s5.php" class="btn link ">대한민국 균형발전박람회</a>
		<a href="/page/s5/s6.php" class="btn link current">대한민국 지방시대 엑스포</a>
	</div>
    <div class="tab-wrap col-3">
        
	</div>
</div>
<!-- 서브 상단 -->

<!-- 서브 본문 -->
<div class="content-primary">
    <!-- 서브 breadcrumb -->
    <section class="navigation">
        <div class="w1280"><img src="/assets/images/sub/home_ico.png" alt="home"> &nbsp; &gt; &nbsp; 역사관 &nbsp; &gt; &nbsp; <strong>대한민국 지방시대 엑스포</strong></div>
    </section>
    <!-- 서브 breadcrumb -->

    <section class="section-1">
       <div class="tabs w1200">
         <div class="inner">
            <a href="/page/s5/s5.php" class="active">2022</a>
        </div>
     </div>
		<div class="title-wrap">
			<h2 class="title">2022 대한민국 지방시대 엑스포 in 부산</h2>
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
                                <td><span>2022.11.10.(목)~11.12.(토) / 부산 벡스코 제1전시장, 야외광장</span></td>
                                <td rowspan="4"><p class="tac photo"><img src="/@resource/images/@temp/s54_2022.jpg"></p></td>
                            </tr>
                            <tr>
                                <th>슬 로 건</th>
                                <td><span class="blue" ><b>새로운 대한민국, 살기 좋은 지방시대</b></span></td>
                            </tr>
                            <tr>
                                <th>주 제</th>
                                 <td><span class="txt24 black_444" ><b>자율, 공정, 희망, 약속</b></span></td>
                            </tr>
							<tr>
                                <th>추진 목적</th>
                                <td><span class="black_444" ><b>새 정부 국정철학과 지역균형발전 비전의 추진 동력 확보 및 국민적 기대감 조성</b></span></td>
                            </tr>
							<tr>
                                <th>추진 체계</th>
                                 <td colspan="2" ><p class="r_title" >주 최</p><span style="display:inline-block;">균형발전위원회, 자치분권위원회, 행정안전부, 산업통상자원부, 17개 시·도</span><br>
                                       <p class="r_title">주 관</p><span style="display:inline-block;">부산광역시, 한국산업기술진흥원, 한국생산성본부</span><br>
                                </td>
                            </tr>
							<tr>
                                <th>행사 특징</th>
                                <td colspan="2"><span style="color:#1e8dc5;"><b>윤석열정부의 강력한 지역균형발전 의지를 표출하는 대국민 약속의 장이자 지방시대의 서막을 알리고자<br> 
기존의 지방자치박람회와 균형발전박람회가 통합되어 열린 첫 엑스포</b></span></td>
                            </tr>
                            <tr>
                                <th>주요 내용</th>
                                <td colspan="2"><span class="black_444" ><b>주요 정책 키워드를 활용한 프로그램 테마를 설정하고, 지자체와 지역민의 동참과 협력 유도 및 국민적 공감대 형성 프로그램 구성</b></span></td>
                            </tr>
                             <tr>
                                <th>행사 구성</th>
                                <td colspan="2">
                                
                                <div class="process">
                                   <ul class="tac">
					                   <li>
						                 <div class="txt_wrap">
							               <p class="num">기념행사</p>
							               <p class="txt lh15">기념식</p>
						                </div>
					                 </li>
                                     <li>
						                 <div class="txt_wrap">
							               <p class="num">전시회</p>
							               <p class="txt lh15">지방시대관, 시도전시관, 특별관</p>
						                </div>
					                 </li>
                                   
                                     <li style="background-color:#fdf7f3;">
						                 <div class="txt_wrap">
							               <p class="num">정책 컨퍼런스</p>
							               <p class="txt lh15">특별 세션, 주제 세션</p>
						                </div>
					                 </li>
                                     
                                     <li style="background-color:#f5fbea;">
						                 <div class="txt_wrap">
							               <p class="num">국민참여행사</p>
							               <p class="txt lh15">청년·기업 참여행사<br>주민자치행사, 국민참여행사</p>
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
                                <th style=" background-color:#fdf7e3;"><!--img src="/@resource/images/@temp/s51_icon_01.png"-->기념식</th>
                                <td><span class="black_444" ><b>국민의례, 개회사, 환영사, 유공자 포상, 축사, 브릿지 영상, 지방시대 퍼포먼스 </b></span></td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">전시회</th>
                                <td><p class="tac img1"><img src="/@resource/images/@temp/s54_2022_01.jpg"></p></td>
                            </tr>
                            
                             <tr>
                                <th style=" background-color:#fdf7e3;">정책 컨퍼런스</th>
                                 <td><span class="black_444 pt10" ><b>윤석열 정부 지역균형발전 정책의 철학에 따른 미래 비전과 전략에 대한 국민적 공감대 확산하고,<br>
새 정부 비전과 전략에 따른 다양한 제안을 통해 참신한 정책을 수립하고 효과적인 추진방안 마련</b></span>
                               <span class="black_444 pt10" ><b> [세션별 주요내용]</b></span>
                               <p class="r_title2 mt10">특별세션</p><span class="black_444">- (특별강연)자유와 공정의 가치에서 본 새 정부 지방시대, <br>
- (특별대담)미국 기회특구의 구축과 한국에의 시사점</span><br>
                                <p class="r_title2">주제세션(10개)</p><span class="black_444">교육자유특구를 통한 지역인재육성, 기회발전특구를 활용한 지역투자촉진, 지방이 주도하는 자치분권-균형발전 통합법률 제정, 지역의 산업혁신생태계 구축, 
지방시대를 실현을 위한 지방분권과 지방재정력 강화, 지역혁신 네트워크 강화를 위한 지방대학의 역할, 외국인 우수인재 유치를 위한 지역특화형 비자발급, 
시장원리에 입각한 지역 차등 전력요금제, 지방재정 자율성과 책임성의 조화, 수도권 기능이전 정책의 성과와 과제</span><br>
                                 <p class="r_title2">유관단체 세션(14개) </p><span class="black_444">지방시대 실현과 지역혁신방안, 2030 부산엑스포 유치와 부울경의 발전전략, 자치분권·균형발전 정책의 쟁점과 시민주체의 육성강화, 
균형발전특별회계 제도개선 방안, 지방시대 지방의회의 역할과 대응과제, 초광역협력과 균형발전, 지방의회의 위상정립 방안, 
지방시대를 위한 지역언론의 역할, 지방시대 출범과 대학의 역할, 지방시대 출범과 전문대학의 역할, 이웃사촌 시범마을 조성사업의 성과와 과제, 
기초자치단체 재정기반 및 거버넌스 강화, 주민 중심의 자치경찰제도 개선방향, 지방소멸 위기대응 성과 및 추진방향</span>
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">청년·기업<br>참여행사</th>
                                <td>
                                     <p class="r_title4">희망이음 유쾌한 취업캠프</p><span class="black_444">- 희망이음 서포터즈, 출향 청년 대상 잡투어 등을 통해 지역기업·일자리 관심도 제고 및 MZ세대향 박람회 홍보 추진<br>
 - 잡투어 : 부울경 우수기업인 오토닉스 탐방<br>
 - 취업캠프 : 말랑말랑간담회, 댄스챌린지, 취업선배 및 인플루언서 특강<br>
 - 부대행사 : 엑스포 관람 및 MZ형 홍보컨텐츠 제작, 인생네컷 운영 등</span><br>
                                     <p class="r_title4">희망이음-부울경 청년 엑스포</p><span class="black_444"> - 희망이음과 연계하여 부·울·경 우수기업 및 해외기업 초청, 청년-기업 간 만남의 장 형성 및 다양한 취업기회 제공<br>
 - 전시상담 : 부·울·경 우수기업, 강소기업 32개사, 해외기업 73개사 취업상담 부스, 희망이음 및 부산시 청년정책 홍보 부스 운영<br>
 - 취업연계 : 특강·설명회(이력서·면접 컨설팅 등), 현장채용면접, 취업상담·컨설팅 등을 통해 청년 대상 원스톱 취업 연계 지원<br>
 - 부대행사 : 취준생 퍼스널컬러, 증명사진 촬영, 스탬프 릴레이 등</span><br>
                                      <p class="r_title4">지역기업 행사</p><span class="black_444">- 혁신도시별 지원 우수사례 공유, 투자정보 제공 등을 통해 산학연 클러스터에 기업 투자유치 활성화<br>
 - 설명회 : 혁신 도시별 투자 여건 비교 등 투자 정보 제공을 위한 합동 설명, 질의응답 등 운영<br>
 - 전시상담 : 혁신도시별 홍보부스 및 투자상담소 운영</span>
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">주민자치행사</th>
                                <td>
                                     <p class="r_title4" style=" width:47%">제21회 주민자치박람회</p><span class="black_444"> - 주민자치 활동 우수사례 선발·공유를 통한 주민자치 확산 및 활성화</span><br>
                                     <p class="r_title4" style=" width:47%">2022년 지방의회 우수사례 경진대회</p><span class="black_444"> - 지방의회 의정활동 우수사례 발굴을 통해 지방의회의 노력과 성과를 평가하고, 주민생활 접점에서 생활정치를 실현하는 지방의회 우수사례를 확산</span><br>
                                     <p class="r_title4" style=" width:47%">2022년 지방행정혁신 우수기관 인증패 수여식</p><span class="black_444"> - 제3기 지역혁신협의회 출범 및 위원 위촉 등</span><br>
                                     <p class="r_title4" style=" width:47%">지방소멸 대응 업무 담당자 워크숍</p><span class="black_444"> - 인구감소 및 지방소멸 대응 업무의 본격 추진에 따라, 지방소멸대응기금을 활용할 수 있는 우수사업 발표</span><br>
                                     <p class="r_title4" style=" width:47%">제3기 부산광역시 지역혁신협의회 출범식</p><span class="black_444"> - 제3기 지역혁신협의회 출범 및 위원 위촉 등</span><br>
                                     <p class="r_title4" style=" width:47%">2022년 지자체 저출산 대응 우수사례 경진대회</p><span class="black_444">  - 2022년 지자체 저출산 대응 우수사례 경진대회에서 우수한 성적을 거둔 지자체에 대해 정부 기관 시상을 수여하여<br>&nbsp;&nbsp;지자체 저출산 대응 우수사례 발굴·전파 및 정책 관심도를 제고</span>
                                       
                                
                                </td>
                            </tr>
                            
                            <tr>
                                <th style=" background-color:#fdf7e3;">국민참여행사</th>
                                <td>
                                     <p class="r_title4">대한민국 로컬 대축전(“지역을 혁신하는 사람들의 이야기”)</p><span class="black_444">  - 로컬크리에이터 타운 : 로컬크리에이터, 창업가 등 청년들이 모여 소통하고 네트워킹을 할 수 있는 공간 구성<br>
 - 청년 콘서트 : 대한민국과 세계를 변화시켜 나가는 지역 청년들의 혁신 사례를 듣는 강연<br>
 <span style="color:#46b500"> * 강연자(안) : 천영석(트위니, 대전), 전주연(모모스커피, 부산) 등</span>
 - 찾아오는 지역 만들기 : 잠재 관광 자원을 발굴·활용하여 지역을 바꿔가고 있는 사람들의 이야기<br>
 <span style="color:#46b500"> * 지역축제의 내일(페랩), 우리 동네 노거수(노찾사), 술과 지역성(술펀) 등</span></span><br>
                                    <p class="r_title4">고향사랑기부 캠페인</p><span class="black_444"> - 일일홍보대사 : 이대호 선수를 ‘23년부터 시행되는 고향사랑기부제의 일일홍보대사로 임명하여 제도에 대한 부산시민과 국민들의 관심 및 참여 유도<br>
 - 이벤트 : 고향사랑기부 캠페인관에서 주빈 및 위원장, 장관, 시장과 함께 홍보대사 수여 이벤트 진행</span><br>
                                     <p class="r_title4">방방곡곡 로컬푸드트럭</p><span class="black_444"> - 지역 특산물을 활용한 메뉴 개발 및 판매, 소형 버스킹 공연</span>
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
                                 <td class="td1">
                                 <div style="width: 55%;  display: inline-block; vertical-align:top;  "><p class="r_title3">온라인</p><span class="black_444">
 - 홈페이지 개설 및 운영<bR>
 - 홍보영상 제작 <bR>
 - 유튜브 제휴(시사전문 채널 스픽스TV에 라이브 프로그램 전후 CM 광고 집행) <bR>
 - 포털 키워드 광고(네이버, 다음 사이트)<bR>
 - 카드뉴스<bR><bR></span></div>
                                 <div style="width: 42%;  display: inline-block; "><p class="r_title3">언론</p><span class="black_444">
 - 방송 프로그램<bR>
 - 인터뷰<bR>
 - 기고 등</span></div>
                                </td>
                            </tr>
                             <tr>
                                <th style="background-color:#f5fbea;">홍보 실적</th>
                                <td><span class="black_444" ><b>언론 보도 총 1,219건(방송 20, 지면 120, 온라인 1,079)</b></span></td>
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
<span class="black_444" ><b>기존 ‘균형발전박람회’와 ‘지방자치박람회’의 첫 통합박람회이자 새 정부 출범 이후 ‘어디서나 살기 좋은 지방시대’의 시작을 알리는 자리로,<br>
지방분권 선도도시이자 균형발전의 새로운 축인 부산에서 처음으로 개최되어 그 의미를 더함<br>
<span style="color:#0dace6;"> - 사흘 간의 행사 기간 동안 본 행사에는 53,067명이 방문했고, 홈페이지에는 49,123명이 방문하면서 관계자들과 주민들의 많은 관심을 얻음</span></b></span>
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
						<p class="square_img"><img src="/@resource/images/2022/01.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/02.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/03.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/04.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/05.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/06.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/07.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/08.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/09.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/10.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/11.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/12.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/13.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/14.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/15.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/16.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/17.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/18.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/19.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/20.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/21.jpg"></p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/22.jpg"></p>
					</li>
                </ul>
                
                
          
                <div class="s_tab4 pt50">
                  <li>사진</li>
		          <li class="active">카드뉴스</li>
                  <li>영상</li>
	           </div>
               <ul class="square_img_list pt50">
					<li class="">
						<p class="square_img"><img src="/@resource/images/2022/card/01_s.png" data="2022/card/01.png"></p>
                        <p class="txt tac">지방시대엑스포 개막 카드뉴스</p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/card/02_s.png" data="2022/card/02.png"></p>
                        <p class="txt tac">지방시대엑스포 컨퍼런스 카드뉴스</p>
					</li>
                    <li class="">
						<p class="square_img"><img src="/@resource/images/2022/card/03_s.png" data="2022/card/03.png"></p>
                        <p class="txt tac">노거수를 아시나요?</p>
					</li>
                </ul>
                
                
                <div class="s_tab4 pt50">
                  <li>사진</li>
		          <li>카드뉴스</li>
                  <li class="active">영상</li>
	           </div>
               <ul class="square_img_list pt50">
					
                    <li class="">
						<p class="square_img"><iframe  width="100%" height="214px" src="https://www.youtube.com/embed/n__Ou7Cvixo" title="2022 대한민국 지방시대 엑스포 홍보 영상" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">2022 대한민국 지방시대 엑스포 홍보 영상</p>
					</li>
                    <li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/WQGHYkCwoHg" title="[2022 대한민국 지방시대 엑스포] 초대_우동기 국가균형발전위원장" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">[2022 대한민국 지방시대 엑스포] 초대_우동기 국가균형발전위원장</p>
					</li>
                    <li class="">
						<p class="square_img"><iframe width="100%" height="214px" src="https://www.youtube.com/embed/rCYK5DcAP_0" title="2022 대한민국 지방시대 엑스포 소개 영상" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                        <p class="txt tac">2022 대한민국 지방시대 엑스포 소개 영상</p>
					</li>
                  
                </ul>
        </div>
        </div>
	</section>

    
</div>
<!-- // 서브 본문 -->

<?php include_once('../../_tail.php');?>


