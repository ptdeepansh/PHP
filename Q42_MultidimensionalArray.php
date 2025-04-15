<?php

        $marks = array( 
            "Deepansh" => array(
                "physics" => 70,
                "maths" => 80,	
                "chemistry" => 90
                ),
            
            "Dhruv" => array(
                "physics" => 90,
                "maths" => 80,
                "chemistry" => 70
                ),
            
            "Prathu" => array(
                "physics" => 70,
                "maths" => 80,
                "chemistry" => 90
                )
            );
         
         echo "Marks for Deepanshu in physics : " ;
         echo $marks['Deepansh']['physics'] . "<br>"; 
         
         echo "Marks for Dhruv in maths : ";
         echo $marks['Dhruv']['maths'] . "<br>"; 
         
         echo "Marks for Prathu in chemistry : " ;
         echo $marks['Prathu']['chemistry'] . "<br>";
	 echo"This code is executed by Deepanshu Sharma!"; 
         
?>