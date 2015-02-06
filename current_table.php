<?php	// Used to view the 'current_table' data that ACT can export every few seconds.
include 'actdb.php';
include 'headercollection.php';
  
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
	" FROM current_table";
if($sortby != "")
	$query = $query . " ORDER BY $sortby $sortdir";
$result = mysql_query($query);

echo "$query";
echo "<table border='1'>";
echo "<tr>";
if($sortdir == "ASC")
{
	for($i = 0; $i < count($ctablecols); $i++)
	{
		$colname = ucfirst($ctablecols[$i]);
		$escapedurl = htmlentities("current_table.php?sortby=$ctablecols[$i]&sortdir=DESC", ENT_QUOTES);
		echo "<th><a href='$escapedurl'>$colname</a></th>";
	}
}
else
{
	for($i = 0; $i < count($ctablecols); $i++)
	{
		$colname = ucfirst($ctablecols[$i]);
		$escapedurl = htmlentities("current_table.php?sortby=$ctablecols[$i]&sortdir=ASC", ENT_QUOTES);
		echo "<th><a href='$escapedurl'>$colname</a></th>";
	}
}
echo "</tr>";
while($row = mysql_fetch_row($result))
{
	echo "<tr>";
	for($i = 0; $i < count($ctablecols); $i++)
	{
		echo "<td>$row[$i]</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
