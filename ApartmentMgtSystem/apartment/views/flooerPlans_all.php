<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style>
body {
 background-color: lightyellow;
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


        
    body{
                background-image: url("../images/sky.jpg");
                

LEGEND { position: relative; width: 50 }
            
            p
{
background-color:yellow;
}
p.padding
{
padding-top:25px;
padding-bottom:25px;
padding-right:5px;
padding-left:50px;
}
            }
          
</style>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><section>
             <h1 style="background-color:lightseagreen; text-align:center;hight:40;color:white; font-family: Times New Roman;">Sunrise Apartments</h1>
 <h4 align="left"><a href="index.php"><em>Home Page</em></a></h4>
    <h4 align="center"><em>All this Apartments are available </em>
    </h4>

  
         <?php require '../Model/floorplan_repository.php';
        // $obj = new release_repository();
              $stud = connection_atendance();
              Print "<table border cellpadding=13>";  
              ?>
        <table BORDER="8" bgcolor="" cellspacing="6" cellpadding="10">
            <tr class="header">
                <td>Room no</td>
                <td>floor plan Details</td>
                <td>Bedrooms</td>
                <td>Number of bath</td>
                <td>sqrtft</td>
                  <td>Price</td>
                  <td> Floor Plan name</td>
            </tr>
              <?php   
while($info = mysql_fetch_array( $stud )) 
 { 
 Print "<tr>"; 
 Print " <td>".$info['roomID'] . "</td> "; 
 Print " <td>".$info['floorplanDeatils'] ."</td> "; 
  Print " <td>".$info['bed'] . " Bed </td>";
 Print " <td>".$info['bath'] . " Bath "." </td>";
 Print " <td>".$info['sqrft'] . "</td> ";
 Print " <td>".'$'.$info['price'] . "</td> ";
//  Print " <td>".''.$info['floorplanId'] . "</td> ";
 $id = floorplan_name($info['floorplanId']);
 while($info = mysql_fetch_array( $id )) 
 { 
 Print"<td>".$info['floorplanName']."</td>";
 }
  $email = $info['floor'];
  ?>
             
<?php } 
 Print "</table>";?>
 <div>
      <h4 style="font-size: 0.6em"><em>©2014  Residential. All Rights Reserved.. </em></h4>
      </div>
    
            </section>
           </body>
</html>
