<!--
Programmer: James
Date: 2020
Purpose: PHP document to display questions for part 3, assignment 2
-->
<?php
session_start();
?>
<?php
$fname = $_GET ['firstname'];
$numQ = $_GET ['numQ'];
$_SESSION ['firstname'] = $fname;
$_SESSION ['numQ'] = $numQ
?>
<html>
<head>
<title>Questions</title>
<script>
var second = 0;
function myCounter(){
	if(second>=0) //return;
 ++second;
 document.getElementById('resulttime').innerHTML = second + ' sec';
 setTimeout('myCounter()',1000)
//timer will start from 1 second and count up to 60 seconds
 if (second == 60) {
 alert('Out of Time');
//if the time reaches 60 seconds, the user will be returned back to index.html
window.location = 'index.html';
}
}
function postto(){
document.getElementById('countertime').value = second;
document.getElementById('form').submit();
}
</script>
<style>
body {
background-image: url('spacebackground.jpg');
background-repeat: no-repeat;
background-attachment: fixed;  
background-size: cover;
color: white;
text-align: center;
font-size: 30px;
}
</style>
</head>
<body onload="myCounter()">
<div id="resulttime"></div>
<h1>Hello <?php print htmlentities ($fname) ?>.</h1>
<br/>
<?php
include "questionBank.php";
?>
<form action="results.php" method="get">
<input type="hidden" name="countertime" id="countertime">
<?php
print "<h3>Please answer the following questions for your our prediction of your age</h3>"; //list to show questions based on user's input of how many questions they want
for($i = 0; $i<$numQ; $i++)
{
	print "<br/> <br/>" .$questions[$i] ." "."<select name='answers[]'>"; //prints the question
	
	for($j = 0; $j<count($answers[$i]); $j++)
	{
		print "<option value= '".($j+1)."'> " .$answers[$i][$j] . "</option>"; //displays the options for the answer to the question
	}
	print "</select>";
}
?>
<br/> <br/>
<input type="submit" name="submit" value="Reveal predicted answer?" onclick="postto()">
</form>
<!--Link to go back to home screen-->
<a href="index.php">Back to home</a>
</body>
</html>