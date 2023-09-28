<!DOCTYPE html>
<!--
Programmer: James
Date: 2020
Purpose: Part 1: PHP Programs, Exercise 4
-->
<html lang="en">
<?php include ('header.html'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Feedback.php</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<?php
$Firstname = $_POST['Firstname'];
$Surname = $_POST['Surname'];
$Age = $_POST['Age'];

//displays the user inputted firstname, surname and age
echo "<p>Thanks for your input $Firstname $Surname...</p>";
echo "<p>You are aged $Age</p>";
?>
<a href="index.php">Back to home</a>
</body>
</html>