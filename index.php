 <!DOCTYPE html>
<html>
    <head>
        <title> MY HOMEPAGE</title>
        
           
        
        <style>
            
             h1{
                text-align: center;
                text-decoration-color: #2bab0d;
                text-transform: uppercase;
            }
        *
         {
    padding:100;
    margin: 1px;
 }
body
{
    
    background-image: url(fra.jpg);
    background-repeat: no-repeat;
    background-size: auto;
    background-position: center;
    box-sizing: border-box;
    font-family: sans-serif;
}
.menu-bar
{
    background:rgb(0,100,0);
    text-align:left ;
} 
.menu-bar ul
{
   display:inline-flex;
   list-style: none;
   color: #fff;
}
.menu-bar ul li
{
    width: 120px;
    margin: 20px;
    padding: 150x; 
}
.menu-bar ul li a
{
    text-decoration: none;
    color: #fff;
}
active,.menu-bar ul li a hover
{
background: #2bab0d;
border-radius: 3px;
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


    <label id="greetings">
    </label>    

        <script src="javascript.js"defer></script>
 <header>
      <div class="menu-bar">     
        <ul> 
          <li> <a href="home">home </a></li>
           <li><a href="intro.html">Introduction</a></li>
           <li><a href="skills.html">skills</a></li>
           <li><a href="MYWEBSITE.HTML">details</a></li>
           <li><a href="MYWEBSITE.HTML">contacts</a></li>
        </ul>
    </div>
 </header>
 <h1>welcome to my home  page of portifolio<h1>
 <img src="ch.jpg"image height="400" image width="500">

    
   

        
    </body>
    <script>
        var myDate= new Date();
        var hrs= myDate.getHours();
        var greet;
        if(hrs<12)
        greet ='good morning'
        else if(hrs>=12 && hrs <=17)
        greet = 'good afternoon' 
        else if (hrs>=17 && hrs <=24)
        greet = 'good evening'
        document.getElementById('greetings').innerHTML=greet+ ' and welcome to my website';
        
        </script>
      
</html>