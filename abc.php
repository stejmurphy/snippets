<?php
/**
 * Function scope and the use of static variables
 *
 */

function ABC()
{
	static $count = 0; // assignment only if first time called

	$limit = 10;

	while($count < $limit)
	{
		print(chr(ord('A') + $count ));
		$count = $count + 1;
	}
	print ("<br>Now I know $count letters<br>");

}

$count = 0;

// Go once
ABC();

$count = $count + 1;
print("Now I have made $count function calls. <br>");
// 1 call

//Go again
ABC();

$count = $count + 1;
print("Now I have made $count function calls. <br>");

// 2 calls


/**
 * The first time ABC executes, $count is set to 0.
 * The second time ABC executes $count continues from where it left off.
 *
**/