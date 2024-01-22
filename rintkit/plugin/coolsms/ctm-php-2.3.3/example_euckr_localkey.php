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

/**
 * �޽���ID�� Ŭ���̾�Ʈ���� �����Ͽ� ���� �� �ֽ��ϴ�. 
 * ($localkey ���� �Է����� ������ �������� �޽���ID�� �����Ͽ� �����մϴ�.)
 * ���� ���۰���� �� �޽���ID�� Ȯ�ΰ����ϰ� �˴ϴ�.
 * �޽���ID�� �� ������ ���Ͽ� �ݵ�� ������ ���̾�� �ϹǷ� coolsms::keygen() �� ����Ͻ� ���� �����մϴ�.
 */

// ��ü�� �����մϴ�.
$sms = new coolsms();

/**
 * �׽�Ʈ / ������ ��� ����
 * �׽�Ʈ ���� Ȯ�� : http://open.coolsms.co.kr/?mid=test_report
 * ������ ���� Ȯ�� : http://www.coolsms.co.kr/?mid=report
 **/
$sms->setRealMode();
//$sms->setTestMode();


// ���α׷���/������ �����մϴ�.
$sms->appversion("TEST/1.0");

// �ѱ����ڵ� ����
$sms->charset("euckr");

// ���̵�, ��й�ȣ�� �Է��մϴ�.
// �׽�Ʈ ����� ��� ���̵� �տ� XX�� �ٿ��ݴϴ�. ���̵� test��� XXtest
$sms->setuser("coolsms_user_id", "coolsms_user_password");

// �޽���ID�� �����մϴ�.
$localkey = coolsms::keygen();
echo "������ ����Ű : {$localkey}<br />";

// ������ �޽����� �߰��մϴ�. $sms->add(�޴¹�ȣ, ȸ�Ź�ȣ, ���ڳ���, �������̸�, �����Ͻ�(YYYYMMDDHHMISS), ����Ű);
$sms->add("0111234567", "0212341234", "Localkey �׽�Ʈ �Դϴ�.", "ȫ�浿", "", $localkey);

// ������ �����մϴ�.
if (!$sms->connect()) {
	// ����ó��
	echo "������ ������ �� �����ϴ�.";
	exit(1);
}

// �߰��� ���ڸ޽����� �߼��մϴ�.
$sms->send();

// �����˻�
if ($sms->errordetected()) {
    echo "������ �߻��߽��ϴ� : " . $sms->lasterror();
}

// ������ �����ϴ�.
$sms->disconnect();

// �߼۰�� ��� (Message ID ���� $localkey ���� �״�� ���ϵ˴ϴ�.)
echo "<p>�����κ��� ���ϵ� ��� ���<br />";
$sms->printr();

// �޽������ ����
$sms->emptyall();
?>
</body>
</html>
