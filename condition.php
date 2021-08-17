<?php


if(isset($a)) {
    echo "Exist a varible";
} else {
    echo "Not exist a varible";
}

$a = 10;

switch($a) {
    case 1:
        echo "value of a is 1";
        break;
    case 10:
        echo "value of a is 10";
        break;
    default:
        echo "I dont know value of a varible";
        break;
}