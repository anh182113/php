<?php 

$a = 1;
$b = 2;
$c = 3;

echo $a + $b + $c; // 6

echo $a - $b + $c;  // 2

echo $a * ($b + $c); // 5

echo $c / ($a + $b); // 1

echo $a > $b; // FALSE

echo $a + $b < $c; // FASLE

echo $a + $b === $c; // TRUE

echo $a < $c && $b > $c; // FALSE
