<?php

class User {
    //        propaerty
    public $name;

    public static $count = 0;
    //constructor
    public function __construct($name){
        $this ->name = $name;
        self::$count++;
    }
    //method
    public function sayHi(){
        echo "hi,i am $this->name!";
    }

    public static function getMessage(){
        echo "hello from User class";
    }
}


User::getMessage();


$bob = new User("bob");
$tom = new User("tom");
$any = new User("any");

echo User::$count;