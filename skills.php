<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background-color: aqua;
            }
        </style> 

        <title> MY HOMEPAGE</title>
    </head>
    <body>
    <?php
//create connection
$conn= new mysqli( "localhost", "root", "", "cosmas");
//check connection
$sql="select*from contacts";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result));
{
echo $row["email"];
}

?>
    <a href="index.html"  > <button>home</button></a>
     <ul>
       <p>the skills are</p>
       <li>javascript</li>
       <li>jjava proramming</li>
       <li>css</li>
       <li>c programming</li>
       <li>multimedia</li>
    </body>
</html>