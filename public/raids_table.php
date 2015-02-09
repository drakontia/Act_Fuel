<?php	// Top level page used to view raid definitions
include 'actdb.php';

$query  = "SELECT * FROM raids_table";
$result = mysql_query($query);

echo "$query";
echo "<table border='1'>";
echo "<tr><th>Raid Title</th></tr>";
while($row = mysql_fetch_row($result))
{
	$escapedurl = htmlentities("view_raid_def.php?raidid=$row[1]", ENT_QUOTES);
	
	echo "<tr>" .
	"<td><a href='$escapedurl'>$row[0]</a></td>" .
	"</tr>";
}
echo "</table>";
?>
