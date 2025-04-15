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
    
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<p>ID: " . $row["S_ID"].
    " | Name: " . $row["S_Name"].
    " | Email: " . $row["S_Email"].
    " | Contact: " . $row["S_Contact"]."</p>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    echo"<br>This code is executed by Deepanshu Sharma!";    
?>