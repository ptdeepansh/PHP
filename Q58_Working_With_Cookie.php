<?php

    setcookie("username", "ptdeepanshu", time()+30*24*60*60);
    

    if(isset($_COOKIE["username"])){
        echo "Ram Ram Ji " . $_COOKIE["username"] . "<br>";
    } else{
        echo "Welcome Guest!<br>";
    
    }
    
    print_r($_COOKIE);
    echo"<br>This code is executed by Deepanshu Sharma!";

?>