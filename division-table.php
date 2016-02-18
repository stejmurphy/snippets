<?php

$start_num = 1;
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
print("<tr>");
print("<th> </th>");



for ($count_1 = $start_num; // Initial Expression - start point
     $count_1 <= $end_num;  // termination check - end point
     $count_1++ ) // loop-expression  - go

print("<th>$count_1</th>");
print("</tr>");

for ($count_1 = $start_num; $count_1 <= $end_num; $count_1++)
	{
		print ("<tr> <th>$count_1</th>");
		for ($count_2 = $start_num; $count_2 <= $end_num; $count_2++)
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
