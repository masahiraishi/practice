<?php

// 継承
class User {

    protected $name;

    public function __construct($name)
    {
          $this->name =$name;
    }
    final public function sayHi()
    {
    echo "hi,Ii am $this->name!";
    }
}

class AdminUser extends User{
        public function sayHello(){
            echo "hello from Adimn";
        }
         public function sayHi()
        {
            echo "[ADMIN] hi,Ii am $this->name!";
        }
}


$tom = new User("Tom");
$steve = new AdminUser("Steve");
$tom->sayHi();
$steve->sayHi();

