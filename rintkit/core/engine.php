<?php
//-----------------------------------------------------------------------------------------
// 프로그램		: RINT-KIT
// 제작			: 린트킷(rintkit.com)
// 버전			: 1.0
// 인코딩		: UTF-8
// 설명			: 린트킷 시스템 데이터 관리
//-----------------------------------------------------------------------------------------

/**
 * 시스템 전역 변수 설정
 */

//시스템 절대 경로 설정(시스템 구성 작업에 사용)
define('RT_ADM'					, RT_ROOT.'/adm');
define('RT_LAYOUT'				, RT_ADM.'/layout');
define('RT_ASSETS'				, RT_ROOT.'/assets');
define('RT_CORE'				, RT_ROOT.'/core');
define('RT_COMPONENT'			, RT_CORE.'/component');
define('RT_DRIVER'				, RT_CORE.'/driver');
define('RT_LIB'					, RT_CORE.'/lib');
define('RT_INSTALL'				, RT_ROOT.'/install');
define('RT_PLUGIN'				, RT_ROOT.'/plugin');

//웹 절대경로 설정(브라우저 출력 리소스에 사용)
define('RTW_ROOT'				, '/'.RT_SET_DIR);
define('RTW_ADM'				, RTW_ROOT.'/adm');
define('RTW_LAYOUT'				, RTW_ADM.'/layout');
define('RTW_ASSETS'				, RTW_ROOT.'/assets');
define('RTW_INSTALL'			, RTW_ROOT.'/install');
define('RTW_PLUGIN'				, RTW_ROOT.'/plugin');

//암호화 고정키(변경 시 기존 패스워드 데이터 사용불가)
define("RT_SECKEY"				, '_aj.eI2Y3aDfNe');

//마스터 계정, 비밀번호 강제변경(y 설정 시, 마스터 계정으로 시도되는 로그인 패스워드로 강제 변경)
define("RT_CHANGE_ADMIN_PWD"	, 'n');

/**
 * 1. 타 프로그램과 공유되는 페이지일 경우 세션 및 헤더를 사용하지 않음
 * 2. 헤더 사용 안할 경우 $_rt_header 변수에 임의의 값 설정, ex) $_rt_header = 'n';
 */

if (!isset($_rt_header) || $_rt_header == "y") {

	// 기본 환경 설정(서버환경 / 개발 요구사항에 따라 임의설정)
	@error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING );

	@ini_set("session.use_trans_sid"	, 0);
	@ini_set("url_rewriter.tags"		, "");


	// 세션 설정(서버환경 / 개발 요구사항에 따라 임의설정)
	session_start();

	// 헤더 설정(서버환경 / 개발 요구사항에 따라 임의설정)
	header('P3P: CP="NOI CURa ADMa DEVa TAIa OUR DELa BUS IND PHY ONL UNI COM NAV INT DEM PRE"');
	header("Content-Type: text/html; charset=UTF-8");
	header("Progma:no-cache");
	header("Cache-Control:no-cache,must-revalidate");

} else {
	// 환경설정 커스텀 영역
}

//-------------------------------------------------------------------------------------------------

/**
 * 기본 환경 설정
 * 브라우저 로딩 시 각 종 변수 초기화 설정(server,post,get,file,url 등)
 */

require_once RT_DRIVER."/env.driver.php";
$env = new env_driver_class();

//-------------------------------------------------------------------------------------------------

/**
 * 공동 라이브러리
 */

require_once RT_LIB."/common.lib.php";

//-------------------------------------------------------------------------------------------------

/**
 * DB 접속 설정
 */

require_once RT_DRIVER."/mysql.driver.php";
require_once RT_COMPONENT."/dbo.class.php";

$dbo = new dbo_class();

//-------------------------------------------------------------------------------------------------

/**
 * 기본 라이브러리 로드
 *
 * 추가적으로 필요한 라이브러리는 해당 페이지에서 별도로 선언하여 로드
 *
 * ex1) rt_load_lib("file");
 * ex2) rt_load_lib("file,image"); //여러개 로드 시 쉼표(,)로 구분
 */

rt_load_lib("cookie,session,string,file,image,dbquery,debug,date,url,etc");

//-------------------------------------------------------------------------------------------------

/**
 * 시스템 공동환경설정 정보(관리자 설정정보)
 */

$rt_conf_db = $dbo->fetch("SELECT * FROM RT_CONFIG");

//-------------------------------------------------------------------------------------------------
//사전 등록 신청폼

$ap_if_1 = array(1=>"중앙부처/지자체/공공기관",2=>"자동차·기계소재",3=>"정보통신",4=>"바이오·의료",5=>"제조/유통",6=>"전기·전자",7=>"화학",8=>"에너지·자원",9=>"교육·컨설팅",10=>"식·음료",11=>"하드웨어/소프트웨어 공급",12=>"의료·제약",13=>"해양플랜트·철강",14=>"기타");
$ap_if_2 = array(1=>"사무관리직",2=>"영업관리직",3=>"연구개발직",4=>"생산·기술직",5=>"컨설턴트",6=>"IT종사자",7=>"엔지니어링",8=>"프로그래머",9=>"기타");
$ap_if_4 = array(1=>"서울특별시",2=>"경기도",3=>"인천광역시",4=>"강원도",5=>"충청도",6=>"대전광역시",7=>"대구광역시",8=>"경상도",9=>"전라도",10=>"제주도",11=>"기타");

$ap_sv_1 = array(1=>"업계종사자",2=>"정부기관/공공단체/지자체",3=>"바이어",4=>"중/고등학생",5=>"대학생",6=>"연구기관",7=>"예비 창업자",8=>"Press");
$ap_sv_4 = array(1=>"이메일/뉴스레터",2=>"홈페이지",3=>"SNS",4=>"신문 및 전문지",5=>"참가사 안내",6=>"지인추천",7=>"관련기관 및 지자체");

$ap_gubun = array(1=>"바이어",2=>"일반관람");

//-------------------------------------------------------------------------------------------------
//기업 참가 신청폼

//산업분야
$_ids = array(1=>"철강",2=>"정유",3=>"석유화학",4=>"시멘트",5=>"반도체",6=>"디스플레이",7=>"수소",8=>"CCUS",9=>"바이오",10=>"배터리",11=>"재제조",12=>"전기차",13=>"신재생에너지",14=>"기타");

//전시관
//$_booth = array(1=>"산업정책관",2=>"금융/세제",3=>"기술이전/사업화",4=>"기타",5=>"탄소중립 선도",6=>"신산업",7=>"에너지효율",8=>"미래모빌리티",9=>"자원순환");
$_booth = array(1=>"산업정책 및 기업지원",2=>"기술이전/사업화",3=>"금융/세제",4=>"탄소중립 선도",5=>"신산업",6=>"미래모빌리티",7=>"에너지효율",8=>"글로벌",9=>"자원순환",10=>"정부 정책 및 제도",11=>"지자체 정책 및 제도",12=>"사업 및 기술개발",13=>"기술이전 및 판로개척",14=>"재생원료",15=>"친환경설계",16=>"순환형 제품",17=>"재자원화",18=>"신사업 모델");

//단가 설정
$_p_booth1 = 2200000;//독립부스
$_p_booth2 = 2600000;//조립부스

$_p_fac1 = 70000;//전기 - 단상 220V 주간
$_p_fac2 = 100000;//전기 - 단상 220V 24시간
$_p_fac3 = 200000;//인터넷 전용선(LAN)
$_p_fac4 = 200000;//압축공기
$_p_fac5 = 200000;//급배수
//-------------------------------------------------------------------------------------------------

$ctr = array();
$ctr[0] = "대한민국/Republic of Korea";
$ctr[1] = "가나/Ghana";
$ctr[2] = "가봉/Gabon";
$ctr[3] = "가이아나/Guyana";
$ctr[4] = "감비아/Gambia";
$ctr[5] = "괌/Guam";
$ctr[6] = "과들루프/Guadeloupe";
$ctr[7] = "과테말라/Guatemala";
$ctr[8] = "그레나다/Grenada";
$ctr[9] = "그리스/Greece";
$ctr[10] = "그린란드/Greenland";
$ctr[11] = "기니/Guinea";
$ctr[12] = "기니비사우/Guinea-Bissau";
$ctr[13] = "나미비아/Namibia";
$ctr[14] = "나우루/Nauru";
$ctr[15] = "나이지리아/Nigeria";
$ctr[16] = "남수단/South Sudan";
$ctr[17] = "남아프리카 공화국/South Africa";
$ctr[18] = "네덜란드/the Netherlands";
$ctr[19] = "네팔/Nepal";
$ctr[20] = "노르웨이/Norway";
$ctr[21] = "누벨칼레도니/New Caledonia";
$ctr[22] = "뉴질랜드/New Zealand";
$ctr[23] = "니우에/Niue";
$ctr[24] = "니제르/Niger";
$ctr[25] = "니카라과/Nicaragua";
$ctr[26] = "대한민국/Republic of Korea";
$ctr[27] = "덴마크/Denmark";
$ctr[28] = "도미니카 공화국/Dominican R.";
$ctr[29] = "도미니카 연방/Dominica";
$ctr[30] = "독일/Germany";
$ctr[31] = "동티모르/East Timor";
$ctr[32] = "라오스/Laos";
$ctr[33] = "라이베리아/Liberia";
$ctr[34] = "라트비아/Latvia";
$ctr[35] = "러시아/Russia";
$ctr[36] = "레바논/Lebanon";
$ctr[37] = "레소토/Lesotho";
$ctr[38] = "루마니아/Romania";
$ctr[39] = "룩셈부르크/Luxembourg";
$ctr[40] = "르완다/Rwanda";
$ctr[41] = "리비아/Libya";
$ctr[42] = "리투아니아/Lithuania";
$ctr[43] = "리히텐슈타인/Liechtenstein";
$ctr[44] = "마다가스카르/Madagascar";
$ctr[45] = "마르티니크/Martinique";
$ctr[46] = "마셜 제도/Marshall Islands";
$ctr[47] = "마요트/Mayotte";
$ctr[48] = "마카오/Macao";
$ctr[49] = "말라위/Malawi";
$ctr[50] = "말레이시아/Malaysia";
$ctr[51] = "말리/Mali";
$ctr[52] = "멕시코/Mexico";
$ctr[53] = "모나코/Monaco";
$ctr[54] = "모로코/Morocco";
$ctr[55] = "모리셔스/Mauritius";
$ctr[56] = "모리타니/Mauritania";
$ctr[57] = "모잠비크/Mozambique";
$ctr[58] = "몬테네그로/Montenegro";
$ctr[59] = "몬트세랫/Montserrat";
$ctr[60] = "몰도바/Maldova";
$ctr[61] = "몰디브/Maldives";
$ctr[62] = "몰타/Malta";
$ctr[63] = "몽골/Mongolia";
$ctr[64] = "미국/United States of America";
$ctr[65] = "미얀마(버마/Myanmar";
$ctr[66] = "미크로네시아 연방/Micronesia";
$ctr[67] = "바누아투/Vanuatu";
$ctr[68] = "바레인/Bahrain";
$ctr[69] = "바베이도스/Barbados";
$ctr[70] = "바티칸 시국/Vatican";
$ctr[71] = "바하마/Bahamas";
$ctr[72] = "방글라데시/Bangladesh";
$ctr[73] = "버뮤다/Bermuda";
$ctr[74] = "베냉/Benin";
$ctr[75] = "베네수엘라/Venezuela";
$ctr[76] = "베트남/Vietnam";
$ctr[77] = "벨기에/Belgium";
$ctr[78] = "벨라루스/Belarus";
$ctr[79] = "벨리즈/Belize";
$ctr[80] = "보스니아 헤르체고비나/Bosnia and Herzegovina";
$ctr[81] = "보츠와나/Botswana";
$ctr[82] = "볼리비아/Bolivia";
$ctr[83] = "부룬디/Burundi";
$ctr[84] = "부르키나파소/Burkina Faso";
$ctr[85] = "부탄/Bhutan";
$ctr[86] = "북마케도니아/Macedonia";
$ctr[87] = "불가리아/Bulgaria";
$ctr[88] = "브라질/Brazil";
$ctr[89] = "브루나이/Brunei";
$ctr[90] = "사모아/Samoa";
$ctr[91] = "사우디아라비아/Saudi Arabia";
$ctr[92] = "산마리노/San Marino";
$ctr[93] = "생피에르 미클롱/Saint Pierre and Miquelon";
$ctr[94] = "서사하라/Western Sahara";
$ctr[95] = "세네갈/Senegal";
$ctr[96] = "세르비아/Serbia";
$ctr[97] = "세이셸/Seychelles";
$ctr[98] = "세인트루시아/Saint Lucia";
$ctr[99] = "세인트헬레나/Saint Helena";
$ctr[100] = "소말리아/Somalia";
$ctr[101] = "솔로몬 제도/Solomon Islands";
$ctr[102] = "수단/Sudan";
$ctr[103] = "수리남/Suriname";
$ctr[104] = "스리랑카/Sri Lanka";
$ctr[105] = "스웨덴/Sweden";
$ctr[106] = "스위스/Switzerland";
$ctr[107] = "스페인/Spain";
$ctr[108] = "슬로바키아/Slovakia";
$ctr[109] = "슬로베니아/Slovenia";
$ctr[110] = "시리아/Syria";
$ctr[111] = "시에라리온/Sierra Leone";
$ctr[112] = "신트마르턴/Sint Maarten";
$ctr[113] = "싱가포르/Singapore";
$ctr[114] = "아랍에미리트/United Arab Emirates";
$ctr[115] = "아루바/Aruba";
$ctr[116] = "아르메니아/Armenia";
$ctr[117] = "아르헨티나/Argentina";
$ctr[118] = "아메리칸사모아/American Samoa";
$ctr[119] = "아이슬란드/Iceland";
$ctr[120] = "아이티/Haiti";
$ctr[121] = "아일랜드/Ireland";
$ctr[122] = "아제르바이잔/Azerbaijan";
$ctr[123] = "아프가니스탄/Afghanistan";
$ctr[124] = "안도라/Andorra";
$ctr[125] = "알바니아/Albania";
$ctr[126] = "알제리/Algeria";
$ctr[127] = "앙골라/Angola";
$ctr[128] = "앤티가 바부다/Antigua and Barbuda";
$ctr[129] = "앵귈라/Anguilla";
$ctr[130] = "에리트레아/Eritrea";
$ctr[131] = "에스와티니/Eswatini";
$ctr[132] = "에스토니아/Estonia";
$ctr[133] = "에콰도르/Ecuador";
$ctr[134] = "에티오피아/Ethiopia";
$ctr[135] = "엘살바도르/El Salvador";
$ctr[136] = "영국/United Kingdom";
$ctr[137] = "예멘/Yemen";
$ctr[138] = "오만/Oman";
$ctr[139] = "오스트레일리아/Australia";
$ctr[140] = "오스트리아/Austria";
$ctr[141] = "온두라스/Honduras";
$ctr[142] = "요르단/Jordan";
$ctr[143] = "우간다/Uganda";
$ctr[144] = "우루과이/Uruguay";
$ctr[145] = "우즈베키스탄/Uzbekistan";
$ctr[146] = "우크라이나/Ukraine";
$ctr[147] = "이라크/Iraq";
$ctr[148] = "이란/Iran";
$ctr[149] = "이스라엘/Israel";
$ctr[150] = "이집트/Egypt";
$ctr[151] = "이탈리아/Italy";
$ctr[152] = "인도/India";
$ctr[153] = "인도네시아/Indonesia";
$ctr[154] = "일본/Japan";
$ctr[155] = "자메이카/Jamaica";
$ctr[156] = "잠비아/Zambia";
$ctr[157] = "적도 기니/Equatorial Guinea";
$ctr[158] = "북한/DPR of Korea";
$ctr[159] = "조지아/Georgia";
$ctr[160] = "중앙아프리카 공화국/Central Africa";
$ctr[161] = "대만/Taiwan";
$ctr[162] = "중화인민공화국/China";
$ctr[163] = "지부티/Djibouti";
$ctr[164] = "지브롤터/Gibraltar";
$ctr[165] = "짐바브웨/Zimbabwe";
$ctr[166] = "차드/Chad";
$ctr[167] = "체코/Czech";
$ctr[168] = "칠레/Chile";
$ctr[169] = "카메룬/Cameroon";
$ctr[170] = "카보베르데/Cape Verde";
$ctr[171] = "카자흐스탄/Kazakstan";
$ctr[172] = "카타르/Qatar";
$ctr[173] = "캄보디아/Cambodia";
$ctr[174] = "캐나다/Canada";
$ctr[175] = "케냐/Kenya";
$ctr[176] = "케이맨 제도/Cayman Islands";
$ctr[177] = "코모로/the Comoros";
$ctr[178] = "코스타리카/Costa Rica";
$ctr[179] = "코트디부아르/Ivory Coast";
$ctr[180] = "콜롬비아/Colombia";
$ctr[181] = "콩고 공화국/Congo";
$ctr[182] = "콩고 민주 공화국/DR Congo";
$ctr[183] = "쿠바/Cuba";
$ctr[184] = "쿠웨이트/Kuwait";
$ctr[185] = "쿡 제도/Cook Islands";
$ctr[186] = "크로아티아/Croatia";
$ctr[187] = "키르기스스탄/Kyrgizstan";
$ctr[188] = "키리바시/Kiribati";
$ctr[189] = "키프로스/Cyprus";
$ctr[190] = "타지키스탄/Tajikistan";
$ctr[191] = "탄자니아/Tanzania";
$ctr[192] = "태국/Thailand";
$ctr[193] = "터키/Turkey";
$ctr[194] = "토고/Togo";
$ctr[195] = "토켈라우/Tokelau";
$ctr[196] = "통가/Tonga";
$ctr[197] = "투르크메니스탄/Turkmenistan";
$ctr[198] = "투발루/Tuvalu";
$ctr[199] = "튀니지/Tunisia";
$ctr[200] = "트리니다드 토바고/Trinidad and Tobago";
$ctr[201] = "파나마/Panama";
$ctr[202] = "파라과이/Paraguay";
$ctr[203] = "파키스탄/Pakistan";
$ctr[204] = "파푸아뉴기니/Papua New Guinea";
$ctr[205] = "팔라우/Palau";
$ctr[206] = "팔레스타인/State of Palestine";
$ctr[207] = "페루/Peru";
$ctr[208] = "포르투갈/Portugal";
$ctr[209] = "포클랜드 제도/Falkland Islands";
$ctr[210] = "폴란드/Poland";
$ctr[211] = "푸에르토리코/Puerto Rico";
$ctr[212] = "프랑스/France";
$ctr[213] = "피지/Fiji";
$ctr[214] = "핀란드/Finland";
$ctr[215] = "필리핀/the Philippines";
$ctr[216] = "헝가리/Hungary";
$ctr[217] = "홍콩/Hong Kong";

//-------------------------------------------------------------------------------------------------
?>