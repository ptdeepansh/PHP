<?php
    echo str_replace("Ji", "Pandit ji", "Ram Ram Ji!"); // Replace word
    echo "<br>". strpos("Hello world!","r"); // Get letter Index
    echo "<br>". strrev("Hello world!"); // Reverse a string
    $greet = "Ram Ram Ji!";
    echo "<br>". strlen($greet); // get length of string
    echo "<br>". strtolower($greet); // String to lowercase
    echo "<br>". strtoupper($greet); // String to uppercase
    echo "<br>". ucfirst("hello world!"); // First letter capital
    echo "<br>". ucwords("hello world"); // Uppercase first letter of word
    echo "<br>". str_word_count("Hello world!"); // Total number of word
    echo "<br>".substr("Hello world",6); // Sub String
    echo"<br>This code is executed by Deepanshu Sharma!";
?>