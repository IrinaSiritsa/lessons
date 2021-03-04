<?php


// if - условный оператор
// >, <, ==... - операторы сравнения

//$yourAge = 2;
//if ($yourAge >= 18) {
//    var_dump('мы тут');
//    $ffff=2;
//    $dd=2+2;
//
//    // something
//} else {
//
//    var_dump('Подрости');
//}

//>
//<
//==
//===
//>=
//<=
//!=
//!==


//var_dump(1 > 2);

//var_dump('3' !== 3);










$name='Sasha';
$massage = 1;

if($name!=5){
    $massage='всё ОК';
}else{
    $massage='не хватает маны';
}

//var_dump($massage);









// AND, OR, &&, ||
// AND, && - логический опертор "И"
// OR, || - логический опертор "Или"
$userAge = 22;
if ($userAge > 20 && $userAge < 25) {
    var_dump('Всё гуд');
}

//$userAge > 20 AND $userAge< 25

$customer="40";
if ($customer===40
    || $customer===18
    || 2 == 7
    || (5==5 || 4==66)

){
//    echo 'нормас';
}








if (1==1) {
    var_dump(1);
} elseif (11==11) {
    var_dump(2);
} else {
    var_dump(2);
}




$int= 2;
$float =1.2;
$bool = true;
$string = "2234234";
$null = null;

$array = [12,345];
$object = (object)[];





$resource = '';