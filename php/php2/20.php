<?php

    class User {
        //        propaerty
        public $name;

        //constructor
        public function __construct($name){
            $this ->name = $name;
        }
        //method
        public function sayHi(){
            echo "hi,i am $this->name!";
        }
    }

    class AdminUser extends User {
        public function sayHello(){
            echo "hello, from Admin";
        }
    }


    $tom = new User("tom");

    $steve = new AdminUser("Steve");

    echo $steve->name;
    $steve->sayHi();
    $steve->sayHello();

echo $tom->name;
$bob->sayHi();