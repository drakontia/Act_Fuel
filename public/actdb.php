<?php
// Connection Info used in each page
$dbhost = 'localhost:3306';
$dbuser = 'user_act';
$dbpass = 'ba7yd5lv';
$dbname = 'advanced_combat_tracker';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);
mysql_set_charset('utf8');
?>
