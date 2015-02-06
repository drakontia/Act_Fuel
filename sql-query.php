<?php
include 'actdb.php';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to MySQL');
mysql_select_db($dbname);

if(!isset($_GET['query']))
	$query = "";
else
	$query = $_GET['query'];

echo "<form action='sql-query.php' method='GET'>";
echo "<input type='input' size='150' name='query'><br>";
echo "<input type='submit'></form>";

if($query != "")
{
	$query = str_replace("\\","",$query);
	echo "$query";
	$result = mysql_query($query);
	if($result != false)
	{
		$fieldCount = mysql_num_fields($result);
		echo "<br>Fields: $fieldCount";
		echo "<br>Rows: " . mysql_num_rows($result);
		echo "<table border='1'><tr>";
		
		for($i = 0; $i < $fieldCount; $i++)
		{
			$meta = mysql_fetch_field($result);
			echo "<th>" . $meta->name . "</th>";
		}

		echo "</tr>";
		while($row = mysql_fetch_row($result))
		{
			echo "<tr>";
			
			for($i = 0; $i < $fieldCount; $i++)
			{
				echo "<td>$row[$i]</td>";
			}

			echo "</tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "<br><br>";
		echo mysql_error();
	}
}
?>