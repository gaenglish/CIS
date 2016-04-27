<?php
/*
Greatest Common Divisor
by: George English

This program uses a recursive function for finding the greatest common divisor for two numbers.

*/

// Function for capturing user input.
function getUserInput() {
	$handle = fopen ("php://stdin","r");
	return fgets($handle);
}


// Prompt user to enter a number
echo "Let's find the greatest common divisor of two numbers. \n";
echo "Enter your first number. \n";
$x = intval(getUserInput());

echo "Enter your second number. \n";
$y = intval(getUserInput());

function gcd($x, $y) {
  if ($y == 0)
     return $x;
  else
     return gcd($y, $x % $y);
}

// Display Results
$r = gcd($x, $y);
echo "The greatest common divisor of {$x} and {$y} is {$r}. \n";

?>