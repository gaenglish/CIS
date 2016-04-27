<?php
/* 
Sum of Numbers
by: George English

This program use a recursive function to add all numbers from 1 to the number entered by the user.
Exapmle: if 4 is entered, 1 + 2 + 3 + 4 is calculated and returned.

*/

// Function for capturing user input.
function getUserInput() {
	$handle = fopen ("php://stdin","r");
	return fgets($handle);
}


// Prompt user to enter a number
echo "Enter a number. \n";
$n = intval(getUserInput());


function sumItUp($x) {
  if ($x == 1)
     return $x;
  else
    return ($x + sumItUp($x - 1));
}


// Display Results
$s = sumItUp($n);
echo "The sum of all the numbers from 1 to {$n} is {$s}. \n";

?>
