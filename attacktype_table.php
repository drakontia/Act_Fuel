<?php
include 'actdb.php';
include 'headercollection.php';

if(!isset($_GET['encid']))
	$encid = "00000000";
else
	$encid = $_GET['encid'];
  
if(!isset($_GET['attacker']))
	$attacker = "";
else
	$attacker = str_replace("'", "''", $_GET['attacker']);
  
if(!isset($_GET['victim']))
	$victim = "";
else
	$victim = str_replace("'", "''", $_GET['victim']);
  
if(!isset($_GET['swingtype']))
	$swingtype = "";
else
	$swingtype = $_GET['swingtype'];
  
if(!isset($_GET['swingtype2']))
	$swingtype2 = "";
else
	$swingtype2 = $_GET['swingtype2'];
  
if(!isset($_GET['sortby']))
	$sortby = "";
else
	$sortby = $_GET['sortby'];
  
if(!isset($_GET['sortdir']))
	$sortdir = "DESC";
else
	$sortdir = $_GET['sortdir'];
  
$whereprefix = "encid = '$encid'";
if($attacker != "")
	$whereprefix .= " AND attacker = '$attacker'";
if($victim != "")
	$whereprefix .= " AND victim = '$victim'";

if($swingtype != "" && $swingtype2 != "")
{
	$where = $whereprefix . " AND (swingtype = '$swingtype' OR swingtype = '$swingtype2')" ;
}
else
{
	if($swingtype != "")
		$where = $whereprefix . " AND swingtype = '$swingtype'";
	else
		$where = $whereprefix;	
}
	
$query = "SELECT " . 
	implode(", ", $atablecols) . 
	" FROM attacktype_table WHERE $where";
if($sortby != "")
	$query = $query . " ORDER BY $sortby $sortdir";
$result = mysql_query($query);
$attacker = str_replace("''", "'", $attacker);
$victim = str_replace("''", "'", $victim);

echo "$query";
echo "<table border='1'>";
echo "<tr>";
if($sortdir == "ASC")
{
	for($i = 0; $i < count($atablecols); $i++)
	{
		$colname = ucfirst($atablecols[$i]);
		$escapedurl = htmlentities("attacktype_table.php?encid=$encid&attacker=$attacker&victim=$victim&swingtype=$swingtype&swingtype2=$swingtype2&sortby=$atablecols[$i]&sortdir=DESC", ENT_QUOTES);
		echo "<th><a href='$escapedurl'>$colname</a></th>";
	}
}
else
{
	for($i = 0; $i < count($atablecols); $i++)
	{
		$colname = ucfirst($atablecols[$i]);
		$escapedurl = htmlentities("attacktype_table.php?encid=$encid&attacker=$attacker&victim=$victim&swingtype=$swingtype&swingtype2=$swingtype2&sortby=$atablecols[$i]&sortdir=ASC", ENT_QUOTES);
		echo "<th><a href='$escapedurl'>$colname</a></th>";
	}
}
echo "</tr>";
while($row = mysql_fetch_row($result))
{
	echo "<tr>";
	for($i = 0; $i < count($atablecols); $i++)
	{
		if($atablecols[$i] == "type")
		{
			$escapedurl = htmlentities("swing_table.php?encid=$encid&attacker=$attacker&victim=$victim&swingtype=$swingtype&swingtype2=$swingtype2&attacktype=$row[$i]", ENT_COMPAT);
			$escapedurl = str_replace("'","%27", $escapedurl);
			echo "<td><a href='$escapedurl'>$row[$i]</a></td>";
		}
		else
			echo "<td>$row[$i]</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
