<?php	// Top level page used to view encounters
header('Content-Type: text/html; charset=utf-8');
include 'actdb.php';

$query  = "SELECT * FROM encounter_table";
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
