<?php

/**
 * Prime Number
 *
 * Prints a list of prime numbers(numbers not divisible by something other than 1 or the number itself)
 */

$limit = 500;
$to_test = 2;


// Outer loop - works through the numbers between 1 and 500, stops once it hits 500
while(true)
{
	$testdiv = 2;
	if ($to_test > $limit)
		break;
	// Inner Loop - testing with each possible divisor from 1 to 500.
	while(true)
	{
		// if (testdiv) is greater than the square root of (to_test)
		if ($testdiv > sqrt($to_test))
		{
			//print the number
			print "$to_test ";
			break;
		}
		//test if $to_test is divisible by $testdiv
		if ($to_test % $testdiv == 0)
			break;
		$testdiv = $testdiv + 1;
	}
	$to_test = $to_test + 1;
}

