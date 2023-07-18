<?php
include_once 'insert.php';
$result = mysqli_query($conn, "SELECT * FROM Skills");
?>
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
    <a href="index.php"  > <button>home</button></a>

    <?php
   if (mysqli_num_rows($result) > 0){
    ?>
    <table>
    <tr>
        <td>Skills</td>
        <td>Skills_description</td>
        <td>Skills_level</td>
       
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result)){
        ?>
        <tr>
      <td><?php echo $row["skills"];?></td>
      <td><?php echo $row["skills_description"];?></td>
      <td><?php echo $row["skills_level"];?></td>
      </tr>

      <?php

      $i++;
    }
    ?>
    </table>
    <?php
 
  }
  else{
    echo "no result";
}

?>
    
    
    </body>
</html> 