<?php

$my_major_city_info = array();
$my_major_city_info[0] = 'Carcas';
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