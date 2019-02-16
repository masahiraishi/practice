<?php

//アクセス権
//private  そのクラスからのみアクセス可能
//protected　そのクラス＋親クラスからアクセス可能
//publlic　どこからでもアクセス可能


class User {
    //        propaerty
//    public $name;
private $name;
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


//echo $tom->name;
$bob->sayHi();