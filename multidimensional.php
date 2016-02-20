<?php
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

$kind_wanted = 'flower';
$colour_wanted = 'purple';

print ("The $colour_wanted $kind_wanted is " . $cornucopia[$kind_wanted][$colour_wanted]);