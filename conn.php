<?php
include_once 'insert.php';
if(isset($_POST['submit'])){ //fetching information from the form

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO details(FIRSTNAME,SURNAME,EMAIL,PASSWORD)VALUES('$firstname','$lastname','$email','$password')";
    
     if (mysqli_query($conn, $sql)){
        //insert querry of sql
       
        echo "data inserted successfully";
      
    
    }
    else{
        echo "failed";
        
    }
    mysqli_close($conn);
}
?>