
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
        
      }
   </style>     
    <title> REGISTRATION FORM </title> 
 </head>
 <body>


   <a href="index.html"  > <button>home</button></a>
         
     <h2>REGISTRATION FORM</h2>
         <form action="insert.php" method="POST">
             <p>username <input type="text" name="username"></p> 
             <p>email <input type="text" name="email"></p>
             <p>phone number <input type="text" name="phone number"></p>
          </form> 
          <form>
          <label> gender  </label>
          <select>
             <option value="select">select</option>
             <option value="male">male</option>
             <option value="female">female</option>
          </select>
            </form>
          <form>
             <p>comment <input type="text"/></p>
             <button>submit</button>
          </form>
 </body>
 </html>