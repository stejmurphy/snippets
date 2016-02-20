<?php
error_reporting(E_ALL);
//Multidimesnional array

$cornucopia = array('fruit' =>
                    array ( 'red'       => 'apple',
                            'orange'    => 'orange',
                            'yellow'    => 'banana',
                            'green'     => 'pear',
                    ),
                    'flower' =>
                    array ( 'red'       => 'rose',
                            'yellow'    => 'banana',
                            'purple'    => 'iris'
                        )

);

//$kind_wanted = 'flower';
//$colour_wanted = 'purple';

//print ("The $colour_wanted $kind_wanted is " . $cornucopia[$kind_wanted][$colour_wanted]); //so not to confuse PHP4 and lower

//print ("The thing we want is {$cornucopia[$kind_wanted][$colour_wanted]}"); // cleaner

$kind_wanted = 'fruit';

$colour_wanted ="purple";

//print("The $colour_wanted $kind_wanted is" . $cornucopia[$kind_wanted][$colour_wanted]); // returns an error as there is no key of purple within fruit



count($cornucopia); // will expect the first layer of the array assigned to the variable == 2

count($cornucopia['fruit']); //will expect the contents of the 'fruit' array == 4
