<?php
	define('DB_HOST', 'localhost');
    define('DB_USER', '');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'geekve');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server contact developer for assistance: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	?>