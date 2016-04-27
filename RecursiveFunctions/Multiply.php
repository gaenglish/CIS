<?php
/*
Multiply
by: George English

This program uses a recursive function for finding the product of two numbers.

*/

// Function for capturing user input.
function getUserInput() {
	$handle = fopen ("php://stdin","r");
	return fgets($handle);
}


// Prompt user to enter a number
echo "Let's multiply two numbers. \n";
echo "Enter your first number. \n";
$x = intval(getUserInput());

echo "Enter your second number. \n";
$y = intval(getUserInput());


function mult($x, $y) {
  if ($y == 0 || $x == 0)
     return 0;
  else
     return $x + mult($x, $y-1);
}


// Display Results
$r = mult($x, $y);
echo "The value of {$x} multiplied by {$y} is {$r}. \n";

?>