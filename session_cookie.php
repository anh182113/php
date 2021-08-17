<?php
session_start();

var_dump($_SESSION);

setcookie("hello", "world", 360, "/");

var_dump($_COOKIE);

$hello = "Oki";

require "./test.php";

session_destroy();