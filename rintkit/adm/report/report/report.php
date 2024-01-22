<?php if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }?>

<!-- 그래프 S //-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawVisualization);

function drawVisualization() {
	var data = google.visualization.arrayToDataTable([
		['Day', 'Visitors'],
		['10-24',304],
		['10-25',424],
		['10-26',342],
		['10-27',552],
		['10-28',524],
		['10-29',302],
		['10-30',274],
		['10-31',1365],
		['11-01',1374],
		['11-02',1581],
		['11-03',6612],
		['11-04',7733],
		['11-05',6441],
		['11-06',6860],
		['11-07',6903],
		['11-08',6404],
		['11-09',6398],
		['11-10',7833],
		['11-11',6744],
		['11-12',4144],
		['11-13',270],
		['11-14',340],
		['11-15',227],
		['11-16',189],
		['11-17',161],
		['11-18',163],
		['11-19',95],
		['11-20',129],
		['11-21',173],
		['11-22',114],
		['11-23',147],
		['11-24',162]
	]);

	var options = {
		title: '접속자 리포트',
		curveType: 'function',
		legend: { position: '' }
	};

	var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
	chart.draw(data, options);
}
</script>

<div id="chart_div" style="width: 100%; height: 500px; border:1px solid #eaeaea;"></div>
<!-- 그래프 E //-->

<br>

<div class="rt_move_day clearfix mb10">
	<div class="rt_fll">
		<form name="search_form">

		<a href="#;" class="rt_prev_day"><< 이전 </a>

		<select id="syear" name="syear" style="border:0px;">
			<option value="2017" >2017년</option><option value="2018" >2018년</option><option value="2019" >2019년</option><option value="2020" >2020년</option><option value="2021" >2021년</option><option value="2022" selected>2022년</option><option value="2023" >2023년</option><option value="2024" >2024년</option><option value="2025" >2025년</option><option value="2026" >2026년</option><option value="2027" >2027년</option>		</select>
		<select id="smonth" name="smonth" style="border:0px;">
			<option value="01" >1월</option><option value="02" >2월</option><option value="03" >3월</option><option value="04" >4월</option><option value="05" >5월</option><option value="06" >6월</option><option value="07" >7월</option><option value="08" >8월</option><option value="09" >9월</option><option value="10" >10월</option><option value="11" selected>11월</option><option value="12" >12월</option>		</select>

		<a href="#;" class="rt_next_day"> 다음 >> </a>
		</form>
	</div>
</div>

<table class="rt_list_table">
	<caption></caption>
	<colgroup>
		<col style=""/>
		<col style=""/>
		<col style=""/>
		<col style=""/>
	</colgroup>
	<thead>
		<tr>
			<th><p>Day</p></th>
			<th><p>Hits</p></th>
			<th><p>Visitors</p></th>
			<th><p>Bandwitch</p></th>
		</tr>
	</thead>
	<tbody>

<tr><td class="rt_tac"><p>2022-10-24</p></td><td class="rt_tac"><p>8,512</p></td><td class="rt_tac"><p>304</p></td><td class="rt_tac"><p>201.52 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-10-25</p></td><td class="rt_tac"><p>15,360</p></td><td class="rt_tac"><p>424</p></td><td class="rt_tac"><p>337 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-10-26</p></td><td class="rt_tac"><p>6,078</p></td><td class="rt_tac"><p>342</p></td><td class="rt_tac"><p>132.77 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-10-27</p></td><td class="rt_tac"><p>14,604</p></td><td class="rt_tac"><p>552</p></td><td class="rt_tac"><p>344.68 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-10-28</p></td><td class="rt_tac"><p>22,438</p></td><td class="rt_tac"><p>524</p></td><td class="rt_tac"><p>453.59 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-10-29</p></td><td class="rt_tac"><p>5,162</p></td><td class="rt_tac"><p>302</p></td><td class="rt_tac"><p>108.81 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-10-30</p></td><td class="rt_tac"><p>5,626</p></td><td class="rt_tac"><p>274</p></td><td class="rt_tac"><p>132.28 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-10-31</p></td><td class="rt_tac"><p>58,949</p></td><td class="rt_tac"><p>1,365</p></td><td class="rt_tac"><p>1.67 GiB</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-01</p></td><td class="rt_tac"><p>56,096</p></td><td class="rt_tac"><p>1,374</p></td><td class="rt_tac"><p>1.63 GiB</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-02</p></td><td class="rt_tac"><p>69,225</p></td><td class="rt_tac"><p>1,581</p></td><td class="rt_tac"><p>1.93 GiB</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-03</p></td><td class="rt_tac"><p>313,395</p></td><td class="rt_tac"><p>6,612</p></td><td class="rt_tac"><p>9.01 GiB</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-04</p></td><td class="rt_tac"><p>338,664</p></td><td class="rt_tac"><p>7,733</p></td><td class="rt_tac"><p>9.6 GiB</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-05</p></td><td class="rt_tac"><p>317,766</p></td><td class="rt_tac"><p>6,441</p></td><td class="rt_tac"><p>8.83 GiB</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-06</p></td><td class="rt_tac"><p>296,156</p></td><td class="rt_tac"><p>6,860</p></td><td class="rt_tac"><p>8.27 GiB</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-07</p></td><td class="rt_tac"><p>316,422</p></td><td class="rt_tac"><p>6,903</p></td><td class="rt_tac"><p>9.17 GiB</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-08</p></td><td class="rt_tac"><p>278,729</p></td><td class="rt_tac"><p>6,404</p></td><td class="rt_tac"><p>8.43 GiB</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-09</p></td><td class="rt_tac"><p>304,209</p></td><td class="rt_tac"><p>6,398</p></td><td class="rt_tac"><p>9.25 GiB</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-10</p></td><td class="rt_tac"><p>368,348</p></td><td class="rt_tac"><p>7,833</p></td><td class="rt_tac"><p>11.03 GiB</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-11</p></td><td class="rt_tac"><p>294,345</p></td><td class="rt_tac"><p>6,744</p></td><td class="rt_tac"><p>8.83 GiB</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-12</p></td><td class="rt_tac"><p>174,812</p></td><td class="rt_tac"><p>4,144</p></td><td class="rt_tac"><p>6.39 GiB</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-13</p></td><td class="rt_tac"><p>5,806</p></td><td class="rt_tac"><p>270</p></td><td class="rt_tac"><p>263.13 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-14</p></td><td class="rt_tac"><p>12,158</p></td><td class="rt_tac"><p>340</p></td><td class="rt_tac"><p>634.03 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-15</p></td><td class="rt_tac"><p>6,776</p></td><td class="rt_tac"><p>227</p></td><td class="rt_tac"><p>366.27 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-16</p></td><td class="rt_tac"><p>5,822</p></td><td class="rt_tac"><p>189</p></td><td class="rt_tac"><p>276.16 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-17</p></td><td class="rt_tac"><p>4,267</p></td><td class="rt_tac"><p>161</p></td><td class="rt_tac"><p>230.97 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-18</p></td><td class="rt_tac"><p>4,014</p></td><td class="rt_tac"><p>163</p></td><td class="rt_tac"><p>182.95 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-19</p></td><td class="rt_tac"><p>955</p></td><td class="rt_tac"><p>95</p></td><td class="rt_tac"><p>126.42 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-20</p></td><td class="rt_tac"><p>1,334</p></td><td class="rt_tac"><p>129</p></td><td class="rt_tac"><p>151.62 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-21</p></td><td class="rt_tac"><p>2,712</p></td><td class="rt_tac"><p>173</p></td><td class="rt_tac"><p>237.41 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-22</p></td><td class="rt_tac"><p>2,147</p></td><td class="rt_tac"><p>114</p></td><td class="rt_tac"><p>214.65 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-23</p></td><td class="rt_tac"><p>2,864</p></td><td class="rt_tac"><p>147</p></td><td class="rt_tac"><p>235.41 Mib</p></td></tr>
<tr><td class="rt_tac"><p>2022-11-24</p></td><td class="rt_tac"><p>2,062</p></td><td class="rt_tac"><p>162</p></td><td class="rt_tac"><p>203.97 Mib</p></td></tr>

	</tbody>
</table>