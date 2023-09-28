<!--
Programmer: James
Date: 2020
Purpose: PHP document to display the results for part 3, assignment 2
-->
<?php
session_start();
?>

<?php
$fname = $_SESSION ['firstname']; //bank for name, predicted age range and timer
$answers = $_GET ['answers'];
$_SESSION ['answers'] = $answers;
$len = count($answers);
$sum = 0;
$decade = 0;
$numQ = $_SESSION ['numQ'];
$countertime = $_GET ['countertime'];
$_SESSION ['countertime'] = $countertime;
?>
<head>
<title>Results</title>
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
<body>
<form action="index.html">
<fieldset>
<legend>Thank you for Playing!</legend>
<br>
<?php
foreach ($answers as $field)
{
	$sum+= $field; //uses the sum to sum up your predicted age range
}
?>

<?php print htmlentities ($fname) //displays your name ?>
<?php
$decade = ($sum * 5) / $numQ; //times the sum by 5 in order to get the correct predicted age range
if ($decade <= "8")
{
    echo "<p>You're most likely to be aged 90-100";
}
elseif ($decade <= "12")
{
    echo "<p>You're most likely to be aged 70-80";
}
elseif ($decade <= "16")
{
	echo "<p>You're most likely to be aged 50-60";
}
elseif ($decade <="20")
{
    echo "<p>You're most likely to be aged 30-40";
}
elseif ($decade <="28")
{
	echo "<p>You're most likely to be aged 10-20";
}
?>
 <br>
 <br>
 <input type="submit" value="Try Again?">
 <br/>
<?php print 'You Took' .' ' .($countertime) .' ' .'Seconds'; //displays the time taken to complete the quiz ?>
</fieldset>
</form>
<!--Link to go back to home screen-->
<a href="index.php">Back to home</a>
</body>