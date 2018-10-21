<?php

// 例外処理

// function div($a,$b){
// 	echo $a/$b;
// }


function div($a,$b){
	try{
		if($a===0){
			throw new Eception("cannot divie by 0");
		}
		echo $a/$b;
	}catch(Eception $e){
		echo $e->getMessage;
	}
}


div(7,2);
div(5,0);

