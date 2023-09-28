<!DOCTYPE html>
<!--
Programmer: James
Date: 2020
Purpose: Part 1: PHP Programs, Exercise 5
-->
<html lang="en">
<?php include ('header.html'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Feedback1.php</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<?php
echo "<h1><u><center>Exercise 5</center></u></h1>";
if ($_SERVER['REQUEST_METHOD'] != 'POST') //Code to put in the required information
{
	echo '
	<form action="feedback1.php" method="POST"> 
	<fieldset>
	<legend>Please Enter your firstname, surname and age</legend>
	<p>Firstname: <input type="text" name="Firstname"></p>
	<p>Surname: <input type="text" name="Surname"></p>
	<p>Age: <input type="text" name="Age"></p>
	</fieldset>
	<p><input type="Submit"></p>
	</form> ';
}
else //Presents the firstname on page after being entered
{
if( !empty ($_POST['Firstname']))
{
	$Firstname = $_POST['Firstname'];
	echo "Firstname: $Firstname<br>";
}
else //If there is no value, a message will appear to tell the user to enter an acceptable firstname
{
	$Firstname = NULL; echo "You must enter an acceptable Firstname<br>";
}
if( !empty ($_POST['Surname'])) //Presents the surname on page after being entered
{
	$Surname = $_POST['Surname'];
	echo "Surname: $Surname<br>";
}
else //If there is no value, a message will appear to tell the user to enter an acceptable surname
{
	$Surname = NULL; echo "You must enter an acceptable Surname<br>";
}
if( !empty ($_POST['Age'])) //Presents the age on page after being entered
{
	$Age = $_POST['Age'];
	echo "Age: $Age<br>";
}
else //If there is no value, a message will appear to tell the user to enter an acceptable age
{
	$Age = NULL; echo "You must enter an acceptable Age<br>";
}
}
?>
<a href="index.php">Back to home</a>
</body>
</html>