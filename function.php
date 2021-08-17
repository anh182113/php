<?php

function hello()
{
    echo "Hello world";
}

function hello2($name)
{
    echo "Hello $name";
}

$name2 = "oki";

function hello3(&$name)
{
    $name = "world";
    echo "Hello $name";
    global $name2;
    echo $name2;
    static $name3;
    $name3 = $name3 . "Hello";
    echo $name3;
}

hello();
hello3($name);
hello3($name);
hello2($name);
