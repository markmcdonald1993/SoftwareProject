<?php

        include "config.php";
        
        $age = $_GET['age'];
        $gender = $_GET['gender'];
            
        
        
        $query = "SELECT * FROM users WHERE age = '$age' && gender ='$gender'";
        

        if ($result = mysqli_query($myConnection, $query)) {
            $output = "<table style=overflow-x:auto;><tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Gender</th><th>Profile Picture</th></tr>";
            
        
            while($row = mysqli_fetch_row($result)){
                $output = $output . "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td><img src='profilepic/".$row[6]."' style='height:100px;'/></td></tr>";
                                    
             
            }
        
            $output = $output . "</table>";
            
        echo $output;
        
        
            

        }
    
?>