<?php
	function factorial($n){
		if($n == 0){
			return 1;
		}
		$result = $n * factorial($n - 1);
		return $result;
	}
	
	echo "Helloo Factorial";
	$r = factorial(3);
	echo " $r <br>";
	echo "This program is executed by Deepanshu Sharma!";
?>