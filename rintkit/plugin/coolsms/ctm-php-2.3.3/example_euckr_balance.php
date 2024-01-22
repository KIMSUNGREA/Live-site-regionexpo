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

// ��ü�� �����մϴ�.
$sms = new coolsms();

// ���̵�, ��й�ȣ�� �Է��մϴ�.
$sms->setuser("coolsms-user-id", "coolsms-user-password");

// ������ �����մϴ�.
if (!$sms->connect()) {
	// ����ó��
	echo "������ ������ �� �����ϴ�.";
	exit(1);
}

// �ܾ��� �о�ɴϴ�.
$result = $sms->remain();

// ������ �����ϴ�.
$sms->disconnect();

// ����� ����մϴ�.
if ($result["RESULT-CODE"] == "00")	// RESULT-CODE �� 00�̸� ����.
{
    echo "ĳ��: " . $result["CASH"];
    echo "����Ʈ: " . $result["POINT"];
    echo "���ڹ��: " . $result["DROP"];
    echo "��ü SMS�Ǽ�: " . $result["CREDITS"];
} else {
    echo "Result Code: " . $result["RESULT-CODE"] . "<br />";
    echo "Result Message: " . $result["RESULT-MESSAGE"] . "<br />";
}
?>
</body>
</html>
