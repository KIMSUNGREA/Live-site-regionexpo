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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
 *
 */

/**
 * coolsms ��ü�� �����մϴ�.
 */
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
 */
$sms->setuser("coolsms_user_id", "coolsms_user_password");

/**
 * ���� ���� �߰��ϱ�
 *
 * -- MMS ���ǻ��� --
 * 1) ������ ���̴� 20����Ʈ�̸� �ʰ��� 20����Ʈ �̳��� ���� ���۵˴ϴ�.
 * 2) JPEG/JPG ������ 200KB �̸��� �̹������ϸ� ���۰����մϴ�.
 * 3) �ִ� ���� �� �ִ� TEXT�� ���̴� 2,000����Ʈ�̸� �ʰ��� 2,000����Ʈ �̳��� ���ڸ� ���۵˴ϴ�.
 * 4) �����Ͻð� �����Ͻú��� ���� ��� �ٷ� ���۵˴ϴ�.
 * 5) ���� ���Ѿ��� addlms ȣ��� ���� ���ڸ�Ͽ� ��� �߰��� �� �ֽ��ϴ�.(send ȣ��� ��� ���۵˴ϴ�.)
 *
 * @param $args->rcvnum      ���Ź�ȣ [�ʼ�]
 * @param $args->msg         2,000����Ʈ �ؽ�Ʈ [�ʼ�]
 * @param $args->subject     ���� (������ msg�� �� 20����Ʈ�� ����)
 * @param $args->callback    �߽Ź�ȣ (��������)
 * @param $args->callname    �������̸� (��������)
 * @param $args->reservdate  YYYYMMDDHHMISS ������ �����Ͻ�, ����ð����� ���� ��� �ٷ� ���� (��������)
 * @param $args->msgid       �޼���ID (������ �������� ����)
 * @param $args->groupid     �׷�ID (������ �������� ����)
 **/

$mmsobj = new StdClass();
$mmsobj->rcvnum = "01012345678";
$mmsobj->callback = "0212345678";
$mmsobj->subject = "�����Է�";
$mmsobj->msg = "���� ������ �Է��ϼ���.";
$mmsobj->attachment = "coolsms.jpg";
if (!$sms->addmmsobj($mmsobj)) {
    // ����ó��
    echo $sms->lasterror();
    exit(1);
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
 */
$sms->disconnect();

/**
 * ����� ����մϴ�.
 * $sms->getr(); ���� �߼۰�� array�� �����ͼ� ����� �� ����. ($sms->printr() �Լ� ����)
 */
echo "{$nsent} �ǿ� ���� ���۳����� ����մϴ�.<br />";
$sms->printr();

/**
 * �޽�������� ����ݴϴ�.
 **/
$sms->emptyall();
?>
</body>
</html>
