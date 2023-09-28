<!DOCTYPE>
<!--
Name: James
Date: 2020
Purpose: PHP document for name identification for part 3 exercise
-->
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Quizfeedback.php</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<?php
if ($_SERVER['Request_Method'] != 'get')
{
	echo '
	<form action="quizfeedback.php" method="get">
	<p>Name:</p>
	<input type="text" name="firstname"/>
	<p>How many Questions?</p>
	<select name="numQ">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	</select>
	<br/>
	<input type="submit" name="submit" value="play"/>
	</form>';
}
