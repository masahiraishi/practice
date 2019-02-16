<?php

//抽象クラスー警鐘を前提としたクラス

abstract class BaseUser{
    public $name;

//必ず実装してくださいというメソッド
    abstract public function sayHi();
}

//抽象クラスが存在することで子クラスでの実装もれを防ぐことができる

    class User extends BaseUser{
        public function sayHi(){
             echo "hello, I am ken";
        }
    }