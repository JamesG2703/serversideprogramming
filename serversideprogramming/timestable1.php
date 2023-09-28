<!DOCTYPE HTML>
<!--
Programmer: James
Date: 2020
Purpose: Part 1: PHP Programs, Exercise 2
-->
<html lang="en">
<?php include ('header.html'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Timestable1.php</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<?php
echo "<h1><u><center>Exercise 2</center></u></h1>";
for($i=1; $i<=12; $i++) //For loops to calculate a times table up to the 12 times table
{
	for($j=1; $j<=12; $j++)
	{
		echo "$i x $j = " . $i*$j. " | ";
	if($j==12) 
		echo "<br>"; //A new line to seperate the times table and link back to home
	}
}

?>
<a href="index.php">Back to home</a>
</body>
</html>