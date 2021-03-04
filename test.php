<?php

//echo 234234234;
$integer = 111;
$float = 2.5;
$bool = true;
$bool = false;
//$string = 'Ирка - няшка';
$string2 = 'Ирка - няшка {$float} {$integer}';
$string = "Ирка - няшка, {$float} {$integer}";
$sum = $integer + $float;


$productPrice = 100;
$tax = 5; // percent
$result = ($productPrice / $tax) - 5;
var_dump($result);

//$sum = 10 - 6.1;
//$sum = 10 / 6.1;
//$sum = (10 * 6.1) - 14;

if (30 > 18) {
    var_dump('Да');
} else {
    var_dump('Нет');
}

//var_dump($integer, $float, (3 > 4), $string, $string2);
var_dump($sum);
echo "\n\r";

