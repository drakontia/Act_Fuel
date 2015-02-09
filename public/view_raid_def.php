<?php
include 'actdb.php';
include 'headercollection.php';

if(!isset($_GET['raidid']))
	die('Raid definition isn\'t defined.');
else
	$raidid = $_GET['raidid'];

$query = "SELECT et.* FROM encounter_table et, raids_table rt, raid_ids_table rit WHERE (et.encid = rit.encid) AND (rt.raidid = rit.raidid) AND (rt.raidid = '$raidid') ORDER BY starttime ASC";
$result = mysql_query($query);

echo "$query";
echo "<table border='1'>";
echo "<tr><th>Title</th><th>Start</th><th>End</th><th>Duration</th><th>Damage</th><th>ExtDPS</th><th>Zone</th></tr>";
while($row = mysql_fetch_row($result))
{
	$escapedurl = htmlentities("combatant_table.php?encid=$row[0]", ENT_QUOTES);
	
	echo "<tr>" .
	"<td><a href='$escapedurl'>$row[1]</a></td>" .
	"<td>$row[2]</td>" .
	"<td>$row[3]</td>" .
	"<td>$row[4]</td>" .
	"<td>$row[5]</td>" .
	"<td>$row[6]</td>" .
	"<td>$row[7]</td>" .
	"</tr>";
}
echo "</table>";
?>
