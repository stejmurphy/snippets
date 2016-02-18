<?php

/**
 * Division Table Example
 *
 * This is an example of using bounded loops from the PHP5 Bible
 */


/**
 *  A global variable
 *
 * @var integer which stores the starting number in the loop params
 *
 *
**/
$start_num = 1;

/**
 *  A global variable
 *
 * @var integer which stores the final number in the loop params
 *
 *
 **/
$end_num = 10;

?>

<html>
<head>
<title>A Division Table</title>
</head>

<body>
<h2>A Division Table</h2>
<table border="1">
<?php


/**
 *  Print statements for the table row header
 */
print("<tr class='header'>");
print("<th> </th>");

/**
 * A For loop - we set the count to loop from 1-10 and then exit.
 *
 * @param $count_1 stores the data from $start_num and increment's until it hits $end_num
 * @return int $count_1 result of the two gloabl variables displayed within a html table head
 */
for ($count_1 = $start_num; // Initial Expression - start point
     $count_1 <= $end_num;  // termination check - end point
     $count_1++ ) // loop-expression  - go

print("<th>$count_1</th>");
print("</tr>");


/**
 * Outer loop - repeat of above set the count to loop from 1-10 and then exit
 * First print statement assigns this to a header tag
 *
 * inner for loop - create new var and assign the value of $start_num to it, increment until it hits the value of $end_num
 * divide the rows ($count_1) by the cols ($count_2) and store in the var $result
 *
 * Printf statement sets allowed results to the 3rd decimal place and prints the value of $result for each
 *
 */
for ($count_1 = $start_num;
     $count_1 <= $end_num;
     $count_1++)
	{
		print ("<tr> <th>$count_1</th>");

		for ($count_2 = $start_num;
		     $count_2 <= $end_num;
		     $count_2++)
		{
			$result = $count_1 / $count_2;
			printf("<td>%.3f</td>", $result);
		}
		print("</tr>\n");
	}
?>

</table>
</body>

</html>
