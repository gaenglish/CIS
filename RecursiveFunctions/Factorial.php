<?php
/*
factorial
by: George English

This program uses a recursive function for finding a number's factorial.

*/

// Function for capturing user input.
function getUserInput() {
	$handle = fopen ("php://stdin","r");
	return fgets($handle);
}


// Prompt user to enter a number
echo "Enter a number to find it's factorial. \n";
$n = intval(getUserInput());


function fact($n)
{
   if ($n == 0)
      return 1;
   else
      return $n * fact($n - 1);
}

// Display Results
$f = fact($n);
echo "The factorial of {$n} is {$f}. \n";

?>