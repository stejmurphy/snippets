<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach</title>
</head>
<body>

<?php
    $ages = array(4,8,15,16,23,42);

    // (array as value
    foreach($ages as $age){
        echo "Age: {$age}<br />";
    }

//assoc version

$person = array(
    "first_name"    => "Bob",
    "last_name"     => "Dole",
    "address"       => "123 Main Street",
    "city"          => "Dublin",
    "country"       => "Ireland",
    "post_code"     => "D1"
);

// array as key => value
foreach($person as $attribute => $data){
    //clean up, take away underscores and uppercase first words
    $attr_nice = ucwords(str_replace("_", " ", $attribute));
    echo "{$attr_nice}: {$data}<br />";
}


?>
</body>
</html>