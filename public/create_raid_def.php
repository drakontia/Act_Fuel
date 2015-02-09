<?php	// Create a raid def from the URL (ref: search_encs_by_date.php)
include 'actdb.php';

if(!isset($_GET['raidname']))
	die('No raid name entered');
else
	$raidname = $_GET['raidname'];

if(!isset($_GET['encids']))
	die('No encounters entered');
else
	$encids = $_GET['encids'];

if($raidname == "")
	die('No raid name entered');

$raidid  = sprintf('%08X', crc32($raidname . time()));

$query  = "INSERT INTO raids_table (raidname, raidid) VALUES ('$raidname','$raidid')";
$result = mysql_query($query);

if($result == false)
	die('Could not create raid definition.');
else
	echo "Raid \"$raidname\" definition made.<br>";
	
$idarray = explode(",", $encids);
for($i = 0; $i < count($idarray); $i++)
{
	$query = "INSERT INTO raid_ids_table (raidid, encid) VALUES ('$raidid','$idarray[$i]')";
	$result = mysql_query($query);
	if($result == false)
		die('Could not map raid definitions. ($i)<br>$query');
}
echo "Raid \"$raidname\" definition defined.<br>";

?>
