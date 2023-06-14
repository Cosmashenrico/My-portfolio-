<!DOCTYPE html>
<html>
    <head> 

        <title> MY HOMEPAGE</title>
        <style>
            body{
              background-color: aqua;
            }
        </style>
    </head>
    <body>
<?php
//create connection
$conn= new mysqli( "localhost", "root", "", "cosmas");
//check connection
if(!$conn){
    die("error". mysqli_connect_error());
} 
else
echo "connected successfully";
?>

    <a href="index.html"  > <button>home</button></a>
    <p> Iam cosmas henrico doing ICT at mzuzu university.</p>
    <p> I have  a wide range knowlege of front_end development and back_end developmentof websites</p>
    </body>
</html>