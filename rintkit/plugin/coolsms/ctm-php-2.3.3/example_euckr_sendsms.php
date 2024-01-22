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
 * �Ʒ��� ������ ���ڸ޽����� ���� �� �ֽ��ϴ�.
 *
 * 1) $sms = new coolsms();                   // ��ü����
 * 2) $sms->appversion("���α׷���/����");    // ���α׷���/���� ����(��������).
 * 3) $sms->charset("euckr Ȥ�� utf8");       // �ѱ� ���ڵ� ����.
 * 4) $sms->setuser("���̵�", "��й�ȣ");    // �������� ����
 * 5) $sms->addsms("�޴¹�ȣ", "ȸ�Ź�ȣ", "�޽���");   // ���� �޽�����Ͽ� �߰�
 * 6) $sms->connect();      // ������ ����
 * 7) $sms->send();         // �޽��� ����
 * 8) $sms->disconnect();   // ���� ����
 **/

/**
 * coolsms ��ü�� �����մϴ�.
 **/
$sms = new coolsms();

/**
 * �׽�Ʈ / ������ ��� ����
 * �׽�Ʈ ���� Ȯ�� : http://open.coolsms.co.kr/?mid=test_report
 * ������ ���� Ȯ�� : http://www.coolsms.co.kr/?mid=report
 **/
$sms->setRealMode();
//$sms->setTestMode();

/**
 * ���α׷���� ������ �Է��մϴ�. (���������մϴ�.)
 * ����: ���α׷���/���� (���α׷���: �ݵ�� �����, ����: x.x.x �� ���� ����)
 * �Է¿�: TEST/1.0
 **/
$sms->appversion("TEST/1.0");

/**
 * �ѱ� ���ڵ� ����� �����մϴ�. (������ �⺻���� euckr�� ������)
 **/
$sms->charset("euckr");

/**
 * ���̵�/��й�ȣ�� �����մϴ�. (�𿡽�������(www.coolsms.co.kr)���� �����Ͻ� ���̵�, ��й�ȣ�� �־��ݴϴ�.)
 * �׽�Ʈ ����� ��� ���̵� �տ� XX�� �ٿ��ݴϴ�. ���̵� test��� XXtest
 **/
$sms->setuser("coolsms_user_id", "coolsms_user_password");

/**
 * ���� ���� �߰��ϱ�
 *
 * -- ���ǻ��� --
 * 1) �ִ� ���� �� �ִ� ������ ���̴� 80����Ʈ�̸� �ʰ��� 80����Ʈ �̳� ���ڸ� ���۵˴ϴ�.
 * 2) �����Ͻð� �����Ͻú��� ���� ��� �ٷ� ���۵˴ϴ�.
 * 3) ������ ���Ѿ��� addsms ȣ��� ���� ���ڸ�Ͽ� ��� �߰��� �� �ֽ��ϴ�.(send ȣ��� ��� ���۵˴ϴ�.)
 *
 * @param $rcvno  �޴¹�ȣ ; �޴� ����� �ڵ��� ��ȣ
 * @param $callback  ȸ�Ź�ȣ ; ������ ����� ����ó (�ڵ��� �� �Ϲ���ȭ��ȣ)
 * @param $message  ���ڳ���
 * @param $callname  ������ �̸� ; www.coolsms.co.kr [���۰��] ���� ��ȸ ����. (��������)
 * @param $reservdate  �����Ͻ� ; YYYYMMDDHHMISS ������ �����Ͻ�, ����ð����� ���� ��� �ٷ� ���� (��������)
 *
 * Examples)
 * // �Ϲ����� �߼�
 * $sms->addsms($rcvno, $callback, $message);
 * // �ƹ������� �߼� (������; �𿡽������� ���۰�� ���������� �̸����� Ȯ�� ����)
 * $sms->addsms($rcvno, $callback, $message, "�ƹ���");
 * // �ƹ������� 2008�� 05�� 20�� 13�� 20�� 01�ʿ� �߼ۿ���
 * $sms->addsms($rcvno, $callback, $message, "�ƹ���", "20080520132001");
 *
 **/
if (!$sms->addsms("0111234567", "0212341234", "80����Ʈ �̳��� ���ڳ����� �Է��ϼ���.")) {
    // ����ó��
    echo $sms->lasterror();
}


/**
 * ������ �����մϴ�.
 **/
if (!$sms->connect()) {
    // ����ó��
    echo "������ ������ �� �����ϴ�.";
    exit(1);
}

/**
 * �߰��� ���ڸ� ��� �����մϴ�.
 **/
$nsent = $sms->send();
// �����˻�
if ($sms->errordetected()) {
    echo "������ �߻��߽��ϴ� : " . $sms->lasterror();
}

/**
 * ������ �����ϴ�.
 **/
$sms->disconnect();

/**
 * ����� ����մϴ�.
 **/
echo "{$nsent} �ǿ� ���� ���۳����� ����մϴ�.<br />";
$sms->printr();

/**
 * �޽�������� ����ݴϴ�.
 **/
$sms->emptyall();
?>
</body>
</html>
