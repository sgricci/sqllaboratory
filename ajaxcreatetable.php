<?php
/*

SQL Laboratory - Web based MySQL administration
http://projects.deepcode.net/sqllaboratory

ajaxcreatetable.php
- called from dboverview.php to create a new table

MIT license

2008 Calvin Lough <http://calv.in>, 2010 Steve Gricci <http://deepcode.net>

*/

include "functions.php";

loginCheck();

if (isset($db))
	$conn->selectDB($db);

if (isset($_POST['query'])) {
	
	$queryList = splitQueryText($_POST['query']);
	
	foreach ($queryList as $query) {
		$sql = $conn->query($query) or ($dbError = $conn->error());
	}
	
	if (isset($dbError)) {
		echo $dbError;
	}
	
}

?>