<?php	// Collect encounters within timerange or zone, batch delete or create a raid definition
include 'actdb.php';

if(!isset($_GET['starttime']))
	$starttime = "";
else
	$starttime = $_GET['starttime'];

if(!isset($_GET['endtime']))
	$endtime = "";
else
	$endtime = $_GET['endtime'];

if(!isset($_GET['zone']))
	$zone = "";
else
	$zone = $_GET['zone'];

if($starttime != "")
	$where .= " starttime >= '$starttime' AND";
if($endtime != "")
	$where .= " starttime <= '$endtime' AND";
if($zone != "")
	$where .= " zone LIKE '%$zone%' AND";
if($where{strlen($where)-1} == 'D')
	$where = substr($where, 0, strlen($where)-4);

$query  = "SELECT * FROM encounter_table WHERE" . $where;
$result = mysql_query($query);

echo "<h2>Show encounters between dates:</h2>";
echo "<form action='search_encs_by_date.php' method='GET'>";
echo "Zone:<input type='text' name='zone' value='$zone'><br>";
echo "StartDate:<input type='text' name='starttime' value='$starttime'><br>";
echo "EndDate: <input type='text' name='endtime' value='$endtime'><br>";
echo "<input type='submit'></form><br>";

echo "$query<br>";
$encids = "";
echo "<table border='1'>";
echo "<tr><th>Title</th><th>Start</th><th>End</th><th>Duration</th><th>Damage</th><th>ExtDPS</th><th>Zone</th></tr>";
while($row = mysql_fetch_row($result))
{
	$encids .= "$row[0],";
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
if($encids{strlen($encids)-1} == ',')
	$encids = substr($encids, 0, strlen($encids)-1);
echo "<br><hr><a href='delete_encounters.php?encid=$encids'>Delete these encounters!</a><br><hr><br>";

echo "<h2>Create a raid definition from these...</h2>";
echo "<form action='create_raid_def.php' method='GET'>";
echo "Raid Title:<input type='text' name='raidname'><br>";
echo "<input type='hidden' name='encids' value='$encids'>";
echo "<input type='submit'></form><br>";
?>
