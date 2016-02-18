<?php

/**
 *
 * Better Deal example. Create a function to sort which deal is better
 *
 * @param $amount_1
 * @param $price_1
 * @param $amount_2
 * @param $price_2
 */


function better_deal($amount_1, $price_1, $amount_2, $price_2)
{
	$per_amount_1 = $price_1 / $amount_1;
	$per_amount_2 = $price_2 / $amount_2;

	if ($per_amount_1 < $per_amount_2)
	{
		print("The first Deal is better<br>");
	}
	else
	{
		print("The second deal is better <br>");
	}
}

$litres_1 = 1.0;
$price_1 = 1.59;

$litres_2 = 1.5;
$price_2 = 2.09;

//amount(litres1), price, amount2(litres2),price,2
better_deal($litres_1, $price_1, $litres_2, $price_2);