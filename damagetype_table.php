<?php
include 'actdb.php';
include 'headercollection.php';

if(!isset($_GET['encid']))
	$encid = "00000000";
else
	$encid = $_GET['encid'];
 
if(!isset($_GET['combatant']))
	$combatant = "";
else
	$combatant = str_replace("'", "''", $_GET['combatant']);

$query = "SELECT " .
	implode(", ", $dtablecols) .
	" FROM damagetype_table WHERE encid = '$encid' AND combatant = '$combatant'";
$result = mysql_query($query);
$combatant = str_replace("''", "'", $combatant);

echo "$query";
echo "<table border='1'>";
echo "<tr>";
for($i = 0; $i < count($dtablecols); $i++)
{
	if($dtablecols[$i] != "grouping")
	{
		$colname = ucfirst($dtablecols[$i]);
		echo "<th>$colname</th>";
	}
}
echo "</tr>";
while($row = mysql_fetch_row($result))
{
	echo "<tr>";
	for($i = 0; $i < count($dtablecols); $i++)
	{
		if($dtablecols[$i] == "grouping")
		{
			$grouping = $row[$i];
			$escapedurl = htmlentities("attacktype_table.php?encid=$encid&$grouping", ENT_COMPAT);
			$escapedurl = str_replace("'","%27", $escapedurl);
		}
		else
		{
			if($dtablecols[$i] == "type")
			{
				echo "<td><a href='$escapedurl'>$row[$i]</a></td>";
			}
			else
				echo "<td>$row[$i]</td>";
		}
		
	}
	echo "</tr>";
}
echo "</table>";

?>
