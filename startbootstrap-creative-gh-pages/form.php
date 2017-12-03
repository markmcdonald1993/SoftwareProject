<?php

    include "config.php"; 
    
        if(isset($_POST['formSubmit'])) {
                $first_name = $_POST["Fname"];
                $last_name =  $_POST['Lname'];
                $age= $_POST['Age'];
                $gender = $_POST['Gender'];
                $username = $_POST['Uname'];
                $password = $_POST['Password'];
                  
                $path = 'profilepic/';
                $filename = $_FILES['userfile']['name'];
                $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1);
                
                //https://stackoverflow.com/questions/20172353/html-form-for-php-image-upload-script/20172387
                
                if(move_uploaded_file($_FILES['userfile']['tmp_name'],$path . $filename)) {
                    
                    
              
               $check = "SELECT * FROM users WHERE username = '$username'";
               $resultCheck = mysqli_query ($myConnection, $check);
               
               if ($resultCheck->num_rows != 0){
                   echo "that name is already taken";
               
               }
               else{
                  
                   $query = "INSERT into users (`fname`,`lname`,`age`,`gender`,`username`,`password`,`profile`) values ('$first_name','$last_name','$age','$gender','$username','$password','$filename')";
                   $result = mysqli_query($myConnection, $query);
                   
                   header ('Location: index.html');
                }
            }
        }
              

?>