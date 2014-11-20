<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style> body{
       background-image: url("../images/sky.jpg");
   


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
        <meta charset="UTF-8">
        <title>Log in</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body><section>
              <fieldset>
            <legend></legend>
            <h4 style="background-color:#3B5998; text-align:center;color:white; font-family: Times New Roman;">Add Reviews</h4>

        <h3></h3>


       
            <?php
             session_name('varname');
               session_start();
            // echo 'Email ID = '.$email = $_SESSION['email'].'<br>';?>
                <fieldset>
                     <legend>Reviews </legend>
                     <form method="post" action="../controller/reviews_con.php">
                                       <label for="details">Details:</label><br />
                    <textarea id="details" name="details" rows="8" cols="40"></textarea><br />
                    <label for="date1">Date:</label><br>
                    <input type="date" name="date1"><br>
                      <input type="Submit" name="Submit" value ="Submit"><br/>      </form>
                </fieldset>
        <a href="index.php">Log out</a><br>
        <h4 style="background-color:#3B5998; text-align:center;color:white; font-family: Times New Roman;">©2014  Residential. All Rights Reserved...</h4>
   </fieldset>      </section>   
                
             
          

            
    </body>
</html>
