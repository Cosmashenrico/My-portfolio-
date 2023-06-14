<?php
//create connection
$conn= new mysqli( "localhost", "root", "", "cosmas");
//check connection
<if(!$conn){
    die("error". mysqli_connect_error());
} 

?>


