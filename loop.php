<?php

use function PHPSTORM_META\map;

for ($i = 0; $i < 10; $i++) {
    echo $i;
}

$a = 1;

while($a < 10) {
    echo $a;
    $a ++;
}

do {
    echo $a;
    $a ++;
} while($a < 20);

$a = [1,2,3,4,5];

foreach($a as $key => $value) {
    echo $a;
}