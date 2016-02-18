<?php

for ($x = 1; $x <10; $x++)
{
	// if $x is odd. break out
	if ($x %2 !=0)
		break;
	print ("$x ");

	//this will never run because 1 is odd
}


for ($x = 1; $x <10; $x++)
{
	// if $x is odd skip this loop
	if ($x %2 !=0)
		continue;
	print ("$x ");
	// prints 2 4 6 8
}