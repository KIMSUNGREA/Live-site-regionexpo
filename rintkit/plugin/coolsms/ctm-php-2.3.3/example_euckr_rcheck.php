<?php
/**
 * vi:set ts=4 sw=4 expandtab fileencoding=cp949:
 * Copyright(C) 2008-2010 D&SOFT
 * http://open.coolsms.co.kr
 */
header("Cache-Control: no-cache");
?>
<html lang="ko" xml:lang="ko" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=EUC-KR" />
</head>
<body>
<?php
require_once("coolsms.php");

function GetStatusStr($status)
{
	switch($status)
	{
		case "0":
			return "���۴��";
		case "1":
			return "���� �� ������";
		case "2":
			return "���ۿϷ�";
		case "9":
			return "���� �޽���ID";

	}
}

// ��ü�� �����մϴ�.
$sms = new coolsms();

/**
 * �׽�Ʈ / ������ ��� ����
 * �׽�Ʈ ���� Ȯ�� : http://open.coolsms.co.kr/?mid=test_report
 * ������ ���� Ȯ�� : http://www.coolsms.co.kr/?mid=report
 **/
$sms->setRealMode();
//$sms->setTestMode();


// ���̵�, ��й�ȣ�� �Է��մϴ�.
// �׽�Ʈ ����� ��� ���̵� �տ� XX�� �ٿ��ݴϴ�. ���̵� test��� XXtest
$sms->setuser("coolsms-user-id", "coolsms-user-password");

// ������ �����մϴ�.
if (!$sms->connect()) {
	echo "������ ������ �� �����ϴ�.";
	exit(1);
}

// �߼۵� ���ڸ޽����� ���� �� �ڵ����� ���۵� ����� ���ɴϴ�.
$result = $sms->rcheck("�޼���ID");	// �����κ��� ���� ���� �� Ȥ�� LocalKey

// ������ �����ϴ�.
$sms->disconnect();

// ����� ����մϴ�.
echo "Status:" . GetStatusStr($result["STATUS"]) . "<br />";
echo "Result-Code:" . $result["RESULT-CODE"] . "<br />";
echo "Result-Message:" . $result["RESULT-MESSAGE"] . "<br />";
?>
</body></html>
