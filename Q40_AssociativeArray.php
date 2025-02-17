<?php
	echo "<h1>Associative Array</h1>";
	
	$student = array("Deepanshu"=>1000, "Prathu"=>1500, "Dhruv"=>2000);
	
	echo "Pocket Money of Deepanshu is: ". $student['Deepanshu']. "<br>";
	echo "Pocket Money of Prathu is: ". $student['Prathu']. "<br>";
	echo "Pocket Money of Dhruv is: ". $student['Dhruv']. "<br><br>";

	$student['Deepanshu'] = "High";
	$student['Prathu'] = "Medium";
	$student['Dhruv'] = "Low";
	
	echo "Pocket Money of Deepanshu is: ". $student['Deepanshu']. "<br>";
	echo "Pocket Money of Prathu is: ". $student['Prathu']. "<br>";
	echo "Pocket Money of Dhruv is: ". $student['Dhruv']. "<br><br>";

	echo "This program is executed by Deepanshu Sharma!";
?>