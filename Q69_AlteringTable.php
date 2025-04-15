<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // sql to create table
    $sql = "ALTER TABLE student
    ADD PRIMARY KEY (S_ID),
    ADD UNIQUE KEY Stud_Email (S_Email);";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table students altered successfully";
    } else {
        echo "Error altering table: " . $conn->error;
    }
    
    $conn->close();
        echo"<br>This code is executed by Deepanshu Sharma!"
?>