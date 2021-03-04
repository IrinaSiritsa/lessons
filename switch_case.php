<?php

switch (10) {
    case 2:
        var_dump(2);
        break;
    case 15:
        var_dump(15);
        break;
    case 5:
        var_dump(5);
        break;
    default:
        var_dump('Что-то другое');
}


$typeSite = 'magazine';
switch ($typeSite) {
    case 'blog':
        $theme = 'Светлая';
        break;
    case 'magazine':
        $theme = 'Темная';
        break;
    default:
        $theme = 'дефолтная';
}