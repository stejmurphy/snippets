<?php
/**
 * Approximating a Square Root
 *
 * A unbounded loop example from the PHP Bible
 * The purpose of this is to approximate the square root of 81.
 * It starts with a guess of 1 and then zeros in on the actual square root of 9 by improving on it's guesses.
 *
 */

?>

<html>
<head>
	<title>Approximating a Square Root</title>
</head>
<body>
<h3>Approximating a Square Root</h3>
<?php

$target = 81; //int
$guess = 1.0; //double
$precision = 0.0000001; //double

// 1.0 * 1.0
$guess_squared = $guess * $guess;

//1.0 - 81 > 0.0000001 or 1.0 - 81 < - 0.0000001
while (($guess_squared - $target  > $precision) or ($guess_squared - $target < - $precision))
	{
		// print out
		print("Current guess: $guess is the square root of $target<br>");
		// first loop
		//81 / 1.0 = 81 + 1.0 = 82.0 / 2 = 41 (guess)
		$guess = ($guess + ($target / $guess)) / 2;
		// 41 * 41 = 1681 ($guess_squared)
		$guess_squared =  $guess * $guess;

		//loop back and print Current Guess: 41(guess) us the square root of 81(target)
	}
print ("$guess squared = $guess_squared<br>");
?>
</body>
</html>
