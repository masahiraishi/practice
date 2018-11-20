<?php

class User {
    // public $name;
    // private $name;
    protected $name;
    public function __construct($name)
    {
        $this->name =$name;
    }
    public function sayHi()
    {
        echo "hi,Ii am $this->name!";
    }
}



    // インスタンスを生成
    $tom = new User("Tom");
    $bob = new User("Bob");

    echo $tom->name;
    $bob->sayHi();
    ?>
