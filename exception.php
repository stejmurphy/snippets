<?php

/**
 * Example of using exceptions to catch errors
 */

function print_header($title, $keywords, $description )
{
	if (strlen($description < 40))
		throw new Exception('A reasonable description length is required<br>');

	print ("<html><head>");
	print ("<title>$title</title>");
	print ("<meta name=\"Keywords\" content=\"$keywords\">");
	print ("<meta name=\"Description\" content=\"$description\">");
	print ("</head><body>");
}


try{// title, keywords, description
	print_header('My Page', 'PHP, Programming, Beer', 'description');
}
catch (Exception $e)
{
	echo($e->getMessage());
	//header("location: https://stackoverflow.com/search?q=[php]".$e->getMessage());
}
die();
