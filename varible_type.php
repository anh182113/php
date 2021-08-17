<?php

// INT
$varible_int = 1;
echo $varible_int;

$varible_numeric  = "1";
$varible_int = (int) $varible_numeric;
echo var_dump($varible_int); // int(1)
echo var_dump(is_integer($varible_int));

// Boolean

$varible_bool = FALSE;
echo $varible_bool;
var_dump(is_bool($varible_bool));

// float double
$varible_float = 3.4;
echo $varible_float;
var_dump(is_float($varible_float));

// array
$varible_array = [1,2,3,4, "Hello", "OKi"];
$varible_array2 = [
    "Hello" => "World",
    "Hello" => "Me",
];
$varible_array3 = array(
    "Hello" => "You",
);
var_dump($varible_array);
var_dump(is_array($varible_array));

// null
$a = null;

echo (int) $a; // 0
echo (bool) $a; // FALSE
echo (float) $a; // 0
echo (array) $a; // []

var_dump(is_null($a));