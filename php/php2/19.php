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

    $tom = new User("tom");
    $bob = new User("bob");


    echo $tom->name;
    $bob->sayHi();