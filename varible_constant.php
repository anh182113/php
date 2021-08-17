<?php

echo 'Hello world';
echo ' ';

//=========== Varible

// Su dung dau nhay kep de chen bien, toc do se cham hon so voi nhay don
$person = "world";
echo "Hello $person";

//=========== Constant

define("Hello", "word");

echo Hello;

define("HELLO", "world");
echo HELLO;

var_dump( Hello === HELLO); // false

