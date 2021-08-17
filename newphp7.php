<?php

// use strict mode
declare(strict_types=1);

function hello(string $name)
{
    echo "Hello $name";
}

hello("Marry"); // not throw error

hello(1); // throw error


// create constant
define("HOST", "localhost");
define("DB_NAME", "test");
define("USER", "root");
define("PASS", "");

define("DB_CONFIG", [
    "HOST" => "localhost",
    "DB_NAME" => "test",
    "USER" => "root",
    "PASS" => "",
]);

// class no name
$animal = new class
{
    function show()
    {
        echo "hello";
    }
};

$animal->show(); // hello