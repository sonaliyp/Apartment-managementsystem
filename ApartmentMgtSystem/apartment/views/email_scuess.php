<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head> <style>
body {
 //background-color: lightyellow;
  background-image: url("apartment/images/sky.jpg");
          
//border: 3px dotted black;
margin: 10px;
padding-bottom: 20px;
 width:70%;
        margin:auto;
}
section {
   background-color: pink;
//border: 2px solid black;
width: 950px;
margin: 20px; /* all four sides */
padding:100px //10px; /* all four sides */
}
h1,p{
    //background-color: white; 
//border: 1px dashed black;
padding: 10px;
}
h1 ,p{
    
margin: .0em 0 0em; /* .5em top, 0 right and left, .25em bottom */
padding-left: 10px;
}
p {
    
margin: 0; /* all four sides */
padding-left: 15px;
}



ul
{
float:left;
width:100%;
padding:0;
margin:0;
list-style-type:none;
}
a
{
float:left;
//width:em;
text-decoration:none;
color:white;
background-color:purple;
padding:0.2em 0.6em;
border-right:1px solid white;
}
a:hover {background-color:#ff3300;}
li {display:inline;}
</style>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <legend></legend>
            
       <section>
           <h4 style=" text-align:center;color:blue; font-family: Times New Roman;">Thank you for your interest in our Apartments </h4>
    
        
       <font color ="yellow"></font> 

        <p>Thank you <?php echo $first_name;?>.
            Detail email send to  <?php echo $email; ?>  account</p>
        regarding to your <?php if($interst ='un'){echo '12 Months or More lease'.'interest';}
        else if($interst ='6'){echo '6 Months lease'.'interest';}
        else if($interst ='12'){echo '12 Months lease'.'interest';}
        else if($interst ='not'){echo ''.'interest';  }
         ?>.
        Please check that.<br>
        Contact us.
       <br>
Apartments<br>
440 Dixon Landing Road, Milpitas, CA 95035.<br>
Phone 110-110-111<br>
        <br>
    
        <a href="../views/index.php">Home page</a>
       </section>
        </fieldset>
          <div id="footer">
            &copy;2014 24 Apartments Inc. 
        </div>
    </body>
</html>
