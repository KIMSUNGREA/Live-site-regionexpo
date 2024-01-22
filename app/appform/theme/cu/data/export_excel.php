<?php
//-------------------------------------------------------------------------------------------------
/*
 * 신청 데이터 엑셀다운
 */
//-------------------------------------------------------------------------------------------------

require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";
require_once RT_ADM."/engine.php";

//-------------------------------------------------------------------------------------------------

//파일명
$file_name = $_GET['bcode']."_DB_".date("Ymdhis").".xls";

header( "Content-type: application/octet-stream;charset=UTF-8");
header( "Content-Disposition: attachment; filename=$file_name" );
header("Content-Type: application/ms-excel");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8" />
	<style>
	table{
		width: 100%;
		border: 1px solid #CDCDCD;
		border-collapse: collapse;
		margin:0;
		font-size: 11px;
		font-family:'나눔고딕',NanumGothic,"dotum";
		text-align: center;
	}
	tr{
		height:30px;
	}
	th{
		font-weight:normal;
		background-color:#EEEEEE;
		border-bottom: 1px solid #CDCDCD;
		border-right: 1px solid #CDCDCD;
		text-align:center;
	}

	td{
		padding: 5px;
		border-bottom:1px solid lightgrey;
		border-right: 1px solid #CDCDCD;
		vertical-align:middle;
		text-align:left;
		color:#666666;
	}
	</style>
</head>
<body>
<table>
	<thead>
	<tr>
		<th>No.</th>
		<th>신청일</th>
		<?php
		$_fm = $dbo->fetch_list("SELECT * FROM RT_APPFORM_ADD_FIELD WHERE bcode='".$_GET['bcode']."'AND is_special='n' ORDER BY formnum ASC");
		for ($m = 0; $m < count($_fm); $m++) {
			?><th><?php echo $_fm[$m]['name'];?></th><?
		}
		?>
		</tr>
	</tr>
	</thead>
	<tbody>
	<?php
	$board = $dbo->fetch_list("SELECT * FROM RT_APPFORM_CU WHERE bcode='".$_GET['bcode']."' ORDER BY seq DESC");

	$num = count($board);
	for ($m = 0; $m < count($board); $m++)
	{
		$seq = $board[$m]['seq'];
		$bcode = $board[$m]['bcode'];
		$name= $board[$m]['name'];
		$phone = $board[$m]['phone'];
		$regdate = substr($board[$m]['reg_date'], 0, 10);
		?>
	<tr>
		<td><?php echo $num;?></td>
		<td><?php echo $regdate;?></td>
		<?php
		$_db = $dbo->fetch("SELECT * FROM RT_APPFORM_CU WHERE seq='".$seq."'");
		$sz = unserialize(html_entity_decode($_db['extvar']));

		for ($i = 0; $i < count($_fm); $i++)
		{
			$_seq = $_fm[$i]['seq'];
			?>
		<td>
			<?
			if ($sz[$_seq]['type'] == "checkbox") {

				foreach ($sz[$_seq]['val'] as $k => $v) {
					$num = $k + 1;
					echo "선택 ".$num." : ".$v."<br />";
				}

			} else {

				if ($_fm[$m]['type'] == "textarea") {
					echo nl2br($sz[$_seq]['val']);
				} else {
					echo $sz[$_seq]['val'];
				}
			}
			?>
		</td>
			<?
		}
		?>
	</tr>
		<?
		$num--;
	}?>
	</tbody>
</table>
</body>
</html>