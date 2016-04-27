<?php
/*
Towers of Hanoi.
by: George English

This program uses a recursive function for calculating the number of moves needed to solve the Towers of Hanoi problem.

*/

// Function for capturing user input.
function getUserInput() {
	$handle = fopen ("php://stdin","r");
	return fgets($handle);
}


// Prompt user to enter a number
echo "Let's play Towers of Hanoi. \n";
echo "How tall is your tower? \n";
$x = intval(getUserInput());


function hanoi($x) {
  if ($x == 1)
     return 1;
  else
    return (2 * hanoi($x-1) + 1);
}


// Display Results
$steps = hanoi($x);
echo "It will take {$s} steps to move yout {$x} tall tower. \n";

?>
