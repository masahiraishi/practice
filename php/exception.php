<?php


function div ($a,$b){
    try{
        if($b ===0){
//           例外のインスタンス生成
            throw new Exception("cannot divide by 0");
        }
        echo $a/$b;
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

div(7,2);
div(5,0);