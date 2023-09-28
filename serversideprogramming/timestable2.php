<!DOCTYPE HTML>
<!--
Programmer: James
Date: 2020
Purpose: Part 1: PHP Programs, Exercise 3
-->
<html lang="en">
<?php include ('header.html'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Timestable2.php</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<?php
echo "<h1><u><center>Exercise 3</center></u></h1>";
echo "<table border = '2' style = 'border-collapse: collapse'>"; //A table to wrap the times table in
$i=0;
while ($i<12) //While loops to create a times table up to 12
{
	echo "\t<tr>\t";
	$i++;
	
	$j=1;
	while ($j<=12) 
	{
		echo "\t\t<td>$i x $j = " . $i * $j. "</td>\n";
		$j++;
	}
}
echo "</table>"
?>
<a href="index.php">Back to home</a> 
</body>
</html>