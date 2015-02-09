<?php	// Create raid management tables.  Required to do only once before using raid php files
include 'actdb.php';

$query  = "CREATE TABLE raid_ids_table (raidid CHAR(8), encid CHAR(8))";
$result = mysql_query($query);

if($result == false)
	echo "Could not create raid_ids_table.<br>";
else
	echo "Table raid_ids_table made.<br>";

$query  = "CREATE TABLE raids_table (raidname VARCHAR(64), raidid CHAR(8))";
$result = mysql_query($query);

if($result == false)
	echo "Could not create raids_table.<br>";
else
	echo "Table raids_table made.<br>";
?>