<?php
session_start();

// If the session vars aren't set, try to set them with a cookie
/*if (!isset($_SESSION['user_id'])) {
    if (isset($_COOKIE['user_id']) && isset($_COOKIE['username'])) {
        $_SESSION['user_id'] = $_COOKIE['user_id'];
        $_SESSION['username'] = $_COOKIE['username'];
    }
}*/
// session_start();
//$_SESSION['username'];
?>


<html>
    <head>
        
               <style>
body {
 //background-color: lightyellow;
//border: 3px dotted black;
margin: 10px;
padding-bottom: 20px;
 width:50%;
        margin:auto;
}
section {
   background-color: white;
//border: 2px solid black;
width: 700px;
margin: 20px; /* all four sides */
padding: 10px; /* all four sides */
}
h1,p{
    //background-color: white; 
//border: 1px dashed black;
padding: 10px;
}
h1 ,p{
    
margin: .0em 0 0em; /* .5em top, 0 right and left, .25em bottom */
padding-left: 15px;
}
p {
    
margin: 0; /* all four sides */
padding-left: 15px;
}


        </style>
        <style> body{
       background-image: url("../images/sky.jpg");
        }</style>
        <meta charset="UTF-8">
        <title>Log in</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h3>Log In</h3>


        <form method="post" action="../controller/user_con.php">
                <fieldset>
                    <legend>Log In</legend><section>
                    <label for="username">Username</label>
                    <input type="text" name="username" value="<?php if (!empty($username)) echo $username; ?>" /></br>
                   
                    <label for="password"> Password:</label>
                    <input type="password" name="password" /><br>
               </br></br>
                    <input type="submit" value="Log In" name="submit" />
                
             
                    <a href="../views/Signup.php" name ="signup" value ="signup">Sign up</a>
         
<section>
 </fieldset>            </form>

            <?php
       
        ?>
    </body>
</html>
