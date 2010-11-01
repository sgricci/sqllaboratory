<?php
/*

SQL Laboratory - Web based MySQL administration
http://projects.deepcode.net/sqllaboratory

logout.php
- end a session

MIT license

2008 Calvin Lough <http://calv.in>, 2010 Steve Gricci <http://deepcode.net>

*/

if (!session_id())
	session_start();

if (isset($_SESSION['SB_LOGIN'])) {
	$_SESSION['SB_LOGIN'] = null;
	unset($GLOBALS['_SESSION']['SB_LOGIN']);
}

if (isset($_SESSION['SB_LOGIN_STRING'])) {
	$_SESSION['SB_LOGIN_STRING'] = null;
	unset($GLOBALS['_SESSION']['SB_LOGIN_STRING']);
}

if (isset($_SESSION['SB_LOGIN_USER'])) {
	$_SESSION['SB_LOGIN_USER'] = null;
	unset($GLOBALS['_SESSION']['SB_LOGIN_USER']);
}

if (isset($_SESSION['SB_LOGIN_PASS'])) {
	$_SESSION['SB_LOGIN_PASS'] = null;
	unset($GLOBALS['_SESSION']['SB_LOGIN_PASS']);
}

header("Location: login.php");

?>
