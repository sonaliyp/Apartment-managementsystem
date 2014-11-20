<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
//session_name('varname');
//
//session_start();
 // $j = $_SESSION['variable_name'];
 //session_name('password');

//session_start();
//echo 'passw = '.$_SESSION['password'];
?>
<html>
    <head>  <style>
body {
     background-image: url("../images/sky.jpg");
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
        <meta charset="UTF-8">
        <title>My Bookstore</title>
        <link rel="stylesheet" type="text/css" href="../style1.css" />
    </head>
    <body> <fieldset>
                    <legend> </legend><section>
        <h3> </h3>
        <h4 style="background-color:#3B5998; text-align:center;color:white; font-family: Times New Roman;">*****    Welcome to user page   *****</h4>

            <h4><font color ="gray">This is the User page here you can add your reviews for this apartments <br>
                you can view new events in our apartments. <br>
                If you join that events that will be great.</font></h4>
        <a href="../views/review.php">Add reviews</a><br>
        <a href="../views/display_events.php">View Events</a><br>
        <a href="../views/index.php">Log out</a><br> 
        <h4 style="background-color:#3B5998; text-align:center;color:white; font-family: Times New Roman;">©2014  Residential. All Rights Reserved...</h4>
    
       </section>
    </body>
</html>

