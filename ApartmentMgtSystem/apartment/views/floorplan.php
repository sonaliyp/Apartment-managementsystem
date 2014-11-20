<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>   <style> body{
       background-image: url("../images/sky.jpg");
   


//border: 3px dotted black;
margin: 10px;
padding-bottom: 20px;
 width:50%;
        margin:auto;
}
section {
    background-color: lavenderblush;
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
        <title></title>
    </head>
    <body>
       
 
 <section>
              <fieldset>
       <h4 style="background-color:#3B5998; text-align:center;color:white; font-family: Times New Roman;">All floor plans</h4>
                  <legend></legend>
            <form action="../controller/floorplan_con.php" method="post">
               
<div id="main">
            <h2><?php ?></h2>
            <ul class="nav">
                 <table BORDER="" bgcolor="lightcyan" cellspacing="6" cellpadding="10">
            <tr class="header">
                <td>Room no</td>
                <td>floor plan Details</td>
                <td>Bedroom</td>
                <td>Num bath</td>
                <td>sqrtft</td>
                  <td>Price</td>
           <td>Washer</td>
                    <td> Delete</td>
            </tr>
            
              <?php  // include '../Model/db_connect.php';
//include '../Model/floorplan_repository.php';
           //    $rooms = all_Rooms();
 foreach ($rooms as $room) :
 
 Print "<tr>"; 
 Print " <td>A".$room['roomID'] . "</td> "; 
 Print " <td>".$room['floorplanDeatils'] ."</td> "; 
  Print " <td>".$room['bed'] . " Bed </td>";
 Print " <td>".$room['bath'] . " Bath "." </td>";
 Print " <td>".$room['sqrft'] . "</td> ";
 Print " <td>".'$'.$room['price'] . "</td> ";
            Print " <td>".$room['washer_d'] . "</td> ";?>
   
        <?php  Print " <td>";?>  <a href="?action=view_book&book_id=<?php echo $room['roomID']; ?>"> Delete 
     <?php Print  "</td> ";?>
             <?php  endforeach; ?>
            </ul>
        </div>
            <br>
      
            
              </fieldset>
       
         
            </form>
      </section>
       
   <a href="../views/index.php">Log out</a><br>
   <a href="../views/Owner.php">Back</a><br>
    </body>
  
</html>
