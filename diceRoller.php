<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>Rolling dices</title>
</head>
<body>
	<h1>Wonderland Casino</h1>
<?php

printGreeting();
printForm();

function printGreeting(){
	global $sidesNumber;

	$sidesNumber = filter_input(INPUT_POST, "sidesNumber");
	
	if (!filter_has_var(INPUT_POST, "sidesNumber")){
		print "<h1>How many sides would you like in your dice?</h1>";
	}else {
		if ($sidesNumber == 0 || $sidesNumber == 1) {
		print "<h2>Please try again</h2>";
	}else{
		$rollingDice = rand (1, $sidesNumber);
		print "<h1>You rolled a <span style= "color : blue"> $rollingDice</span> on a dice with $sidesNumber sides.</h1>";
		}
	
		
	}
}
function printForm(){
	global $sidesNumber;
	
	print <<<HERE
	
	<form name = "wonderlandCasino"
	action = ""
	method = "post">
		
	<fieldset>
	<h2>Sides:
	<input type = "text"
	name = "sidesNumber"
	size = "4"
	maxlength = "4"
	value = "" /> </h2>
	
	<input type= "submit" 
	value = "submit" >
	</fieldset>
	</form>
	<br/> <br/>
	<a href = "diceHelp.html">Hint</a>
	
	HERE;
	}
	?>
	</body>
	</html>