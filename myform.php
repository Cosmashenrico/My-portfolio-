
<?php
include_once 'insert.php';

?>
<!DOCTYPE html>
<html>
 <head> 
   <style>
      h2{
         text-align: center;
      }
      form{
         text-align:center;
         display:block;
      }
   </style>     
    <title> REGISTRATION FORM </title> 
 </head>
 <body>


   <a href="index.php"  > <button>home</button></a>
         
     <h2>REGISTRATION FORM</h2>
 <form action="conn.php" method="POST">
    <label for="Firstname">Firstname</label>
    <input type="text" name="firstname" required><br><br>

    <label for="Lastname">Lastname</label>
    <input type="text" name="lastname" required><br><br>

    <label for="Email">Email</label>
    <input type="email" name="email"placeholder="email here!!" required><br><br>
    
    <label for="Passwo4d">password</label>
    <input type="password" name="password"placeholder="password here!!"  required><br><br>
    <input type ="submit" name="submit"  value ="submit">
    

    </form>
 </body>
 </html>