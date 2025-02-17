<?php
	function greet(&$num){
		return $num * $num;
	}
	$num = 10; 
	$r = greet($num);
	echo "$r <br>";
	echo "This program is executed by Deepanshu Sharma!";
?>