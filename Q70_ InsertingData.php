<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newdb";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "INSERT INTO student
    (S_ID, S_Name, S_Email, S_Contact) VALUES
    (101, 'Deepansh', 'deepanshu@gmail.com', 9891567921),
    (102, 'Prathu', 'prathu@gmail.com', 9315488603);";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    echo"<br>This code is executed by Deepanshu Sharma!";    
?>