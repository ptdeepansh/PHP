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
    
    $sql = "SELECT * FROM student;";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Name</th>
        <th>Email</th><th>Contact</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["S_ID"].
    "</td><td>" . $row["S_Name"].
    "</td><td>" . $row["S_Email"].
    "</td><td>" . $row["S_Contact"]."</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    echo"<br>This code is executed by Deepanshu Sharma!";  
?>