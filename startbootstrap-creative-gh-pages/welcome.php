<?php
    
    include 'config.php';

        
    $username = $_COOKIE['user'];
    $query = "SELECT * FROM users WHERE username = '" .$username . "'";
    $result = mysqli_query($myConnection, $query);
    
    while ($row = mysqli_fetch_row($result)){
         $name = $row[0];
         
     
        echo "Welcome " .$name;    
         
       }
?>