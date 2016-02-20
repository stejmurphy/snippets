<?php

$my_major_city_info = array();
$my_major_city_info[0] = 'Caracas';
$my_major_city_info['Carcas']= 'Venezuela';
$my_major_city_info[1] = 'Paris';
$my_major_city_info['Paris'] = 'France';
$my_major_city_info[2] = 'Dublin';
$my_major_city_info['Dublin'] = 'Ireland';


function city_by_number ($number_index, $city_array){
    //Array[key]
    if (isSet($city_array[$number_index]))
    {
        $the_city = $city_array[$number_index];
        $the_country = $city_array[$the_city];
        print ("$the_city is in $the_country<br>");
    }
}

city_by_number(0, $my_major_city_info);
city_by_number(1, $my_major_city_info);
city_by_number(2, $my_major_city_info);


//each example


function print_keys_and_values_each($city_array)
{
    reset($city_array);
    while($array_cell = each($city_array))
    {
        $current_value = $array_cell['value']; //case sensitive
        $current_key = $array_cell['key']; //case sensitive

        print("Key: $current_key ; Value: $current_value ;<br>");
    }
}

print_keys_and_values_each($my_major_city_info);


function print_value_length($array_value, $array_key_ignored)
{
    $the_length = strlen($array_value);
    print("The length of the $array_value is the $the_length<br>");
}

array_walk($my_major_city_info, print_value_length);