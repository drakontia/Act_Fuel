<?php
include 'actdb.php';
include 'headercollection.php';

if(!isset($_GET['encid']))
    $encid = "00000000";
else
$encid = $_GET['encid'];

if(!isset($_GET['sortby']))
	$sortby = "";
else
	$sortby = $_GET['sortby'];

if(!isset($_GET['sortdir']))
	$sortdir = "DESC";
else
    $sortdir = $_GET['sortdir'];

$query = "SELECT " . 
	implode(", ", $ctablecols) . 
	" FROM combatant_table WHERE encid = '$encid'";
if($sortby != "")
	$query = $query . " ORDER BY $sortby $sortdir";
else
	$query = $query . " ORDER BY job $sortdir";

$result = mysql_query($query);

echo "$query";
echo "<table border='1'>";
echo "<tr>";
if($sortdir == "ASC")
{
	for($i = 0; $i < count($ctablecols); $i++)
	{
		$colname = ucfirst($ctablecols[$i]);
		$escapedurl = htmlentities("combatant_table.php?encid=$encid&sortby=$ctablecols[$i]&sortdir=DESC", ENT_QUOTES);
		echo "<th><a href='$escapedurl'>$colname</a></th>";
	}
}
else
{
	for($i = 0; $i < count($ctablecols); $i++)
	{
		$colname = ucfirst($ctablecols[$i]);
		$escapedurl = htmlentities("combatant_table.php?encid=$encid&sortby=$ctablecols[$i]&sortdir=ASC", ENT_QUOTES);
		echo "<th><a href='$escapedurl'>$colname</a></th>";
	}
}
echo "</tr>";
while($row = mysql_fetch_row($result))
{
	echo "<tr>";
	for($i = 0; $i < count($ctablecols); $i++)
	{
		if($ctablecols[$i] == "name")
		{
			$escapedurl = htmlentities("damagetype_table.php?encid=$encid&combatant=$row[$i]", ENT_COMPAT);
			$escapedurl = str_replace("'","%27", $escapedurl);
			echo "<td><a href='$escapedurl'>$row[$i]</a></td>";
		}
		elseif($ctablecols[$i] == "encdps")
        {
            $row2 = round($row[$i]);
			echo "<td>$row2</td>";
        }
		elseif($ctablecols[$i] == "enchps")
        {
            $row2 = round($row[$i]);
			echo "<td>$row2</td>";
        }
		else
			echo "<td>$row[$i]</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
