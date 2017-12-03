<?php

    include 'config.php';
 
       
    if($_POST['formSubmit'] == "Submit"){
         
        $username = $_POST['Uname'];
        $password = $_POST['Password'];
    }
    
    $query = "SELECT * FROM users WHERE  username='$username' && password='$password'";
    $result = mysqli_query($myConnection, $query);
    
    if ($result->num_rows == 0){
       
        echo "Not a user";
           
    }
    
    else{
        $cookie_name = "user";
        $cookie_value = $username;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        
        header ('Location: date.html');
           
        
    }

?>