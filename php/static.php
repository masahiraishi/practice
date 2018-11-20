<?php


class User {

    public $name;
    public static $count = 0;
    public function __construct($name){
        $this->name = $name;
        self::$vount++;
    }
    public function sayHi(){
        echo "hi,i am $this->>name!";
    }
    public function getMessage(){
        echo "helo from User classs!";
    }
//        User::getMessage;

}
