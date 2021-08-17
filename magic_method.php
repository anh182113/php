<?php

class People
{

    private $passport;
    protected $name;
    public $username;

    function __construct()
    {
    }

    function __get($name)
    {
        switch ($name) {
            case "name":
                return $this->name;
            case "username":
                return $this->username;
            case "passport":
                return $this->passport;
            default:
                return null;
        }
    }

    function __set($name, $value)
    {
        switch ($name) {
            case "name":
                $this->name = $value;
                $this->username = "hello $value";
                $this->passport = "passport of $name";
        }
    }

    function __destruct()
    {
    }

    static function  __callStatic($name, $arguments) // catch call static method is not exist in object
    {
        echo "method name 's $name with arguments are $arguments";
    }

    function __call($name, $arguments) // catch call method is not exist in object
    {
        echo "method name 's $name with arguments are $arguments";
    }
}

$people = new People();
