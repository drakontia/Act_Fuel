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

if(!isset($_GET['attacktype']))
	$attacktype = "";
else
	$attacktype = str_replace("'", "''", $_GET['attacktype']);
  
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
if($attacktype != "All")
	$whereprefix .= " AND attacktype = '$attacktype'";
	
	
if($swingtype != "" && $swingtype2 != "")
{
	$where = $whereprefix . " AND (swingtype = '$swingtype' OR swingtype = '$swingtype2')";
}
else
{
	if($swingtype != "")
		$where = $whereprefix . " AND swingtype = '$swingtype'";
	else
		$where = $whereprefix;	
}

$query = "SELECT " . 
	implode(", ", $stablecols) . 
	" FROM swing_table WHERE $where";
if($sortby != "")
	$query = $query . " ORDER BY $sortby $sortdir";
$result = mysql_query($query);
$attacktype = str_replace("''", "'", $attacktype);
$attacker = str_replace("''", "'", $attacker);
$victim = str_replace("''", "'", $victim);

echo "$query";
echo "<table border='1'>";
echo "<tr>";
if($sortdir == "ASC")
{
	for($i = 0; $i < count($stablecols); $i++)
	{
		$colname = ucfirst($stablecols[$i]);
		$escapedurl = htmlentities("swing_table.php?encid=$encid&attacker=$attacker&victim=$victim&attacktype=$attacktype&swingtype=$swingtype&sortby=$stablecols[$i]&sortdir=DESC", ENT_QUOTES);
		echo "<th><a href='$escapedurl'>$colname</a></th>";
	}
}
else
{
	for($i = 0; $i < count($stablecols); $i++)
	{
		$colname = ucfirst($stablecols[$i]);
		$escapedurl = htmlentities("swing_table.php?encid=$encid&attacker=$attacker&victim=$victim&attacktype=$attacktype&swingtype=$swingtype&sortby=$stablecols[$i]&sortdir=ASC", ENT_QUOTES);
		echo "<th><a href='$escapedurl'>$colname</a></th>";
	}
}
echo "</tr>";
while($row = mysql_fetch_row($result))
{
	echo "<tr>";
	for($i = 0; $i < count($stablecols); $i++)
	{
		echo "<td>$row[$i]</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
