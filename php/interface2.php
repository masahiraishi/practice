<?php


interface sayHi{
    public function sayHi();
}

interface sayHello{
    public function sayHello();
}

class User implements sayHi,sayHello{
    public function sayHi(){
        echo "Hi";
    }
    public function sayHello(){
        echo "hello";
    }
}

$bob = new User;

$bob->sayHi();