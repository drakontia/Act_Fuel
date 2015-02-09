<?php	// Delete encounters from list (Separated by commas)
include 'actdb.php';

if(!isset($_GET['encid']))
	die('No Encounters Selected');
else
	$encid = $_GET['encid'];

$encids = explode(",", $encid); // No spaces around commas

for($i = 0; $i < count($encids); $i++)
{
	$id = $encids[$i];
	$query  = "DELETE FROM encounter_table WHERE encid = '$id'";
	echo "$query<br>";
	$result = mysql_query($query);
	if($result == false)
		die('Could not delete encounter $id from encounter_table');
	$query  = "DELETE FROM combatant_table WHERE encid = '$id'";
	echo "$query<br>";
	$result = mysql_query($query);
	if($result == false)
		die('Could not delete encounter $id from combatant_table');
	$query  = "DELETE FROM damagetype_table WHERE encid = '$id'";
	echo "$query<br>";
	$result = mysql_query($query);
	if($result == false)
		die('Could not delete encounter $id from damagetype_table');
	$query  = "DELETE FROM attacktype_table WHERE encid = '$id'";
	echo "$query<br>";
	$result = mysql_query($query);
	if($result == false)
		die('Could not delete encounter $id from attacktype_table');
	$query  = "DELETE FROM swing_table WHERE encid = '$id'";
	echo "$query<br>";
	$result = mysql_query($query);
	if($result == false)
		die('Could not delete encounter $id from swing_table');
}
?>
