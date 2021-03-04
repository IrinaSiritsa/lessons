<?php
$array=['ira',26];

var_dump($array[2]);

$assocArray=['name'=>'ira','age'=>26];

var_dump($assocArray['name']);

$office=[
    ['name'=>'dasha', 'age'=>26],
    ['name'=>'anna', 'age'=>30],
    ['name'=>'marta', 'age'=>33],
];

var_dump($office[0]['age']);

foreach($office as $key=>$value){
    var_dump($key);
}

$office=[
    'old de
    
    signer'=>['name'=>'dasha', 'age'=>26],
    'designer'=>['name'=>'anna', 'age'=>30],
    'manager'=>['name'=>'marta', 'age'=>33],
];

var_dump($office['old designer']['name']);

$categories=[
    [
        'name'=>'cloth',
        'url'=>'/cloth',
        'sub_categories'=>[
            [
                'name'=>'dresses','url'=>'dresses',
            ]
        ]

    ]
];

var_dump($categories[0]['url']);

