<?php 

// die;

for($a = 1; $a < 10; $a ++) {
    if($a = 2) {
        break; 
    }
    echo $a;
}

// exit;

for($a = 1; $a < 10; $a ++) {
    if($a = 2) {
        continue;
    }
    echo $a;
}

