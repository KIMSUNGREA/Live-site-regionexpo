<?php
//-----------------------------------------------------------------------------------------
// ���α׷�		: RINT-KIT
// ����			: ��ƮŶ(rintkit.com)
// ����			: 1.0
// ���ڵ�		: UTF-8
// ����			: ��ƮŶ ��� ����
//
// ���ǻ���		: �� ������ �ݵ�� �� ��� �ֻ��� ���丮�� ������ �ּ���.
// �� ���		: http://domain.com/_x_signpost.php
// �ý��� ���	: $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php"
//-----------------------------------------------------------------------------------------

define('RINTKIT'		, true);
define('RT_DOC_ROOT'	, $_SERVER['DOCUMENT_ROOT']);
define('RT_SET_DIR'		, 'rintkit');
define('RT_ROOT'		, str_replace("//", "/", RT_DOC_ROOT."/".RT_SET_DIR));

require_once RT_ROOT."/core/engine.php";

if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
	$redirect = 'https://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: ' . $redirect);
	exit();
}
//----------------------------------------------------------------------------------------------
?>