<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Bookstore</title>
     
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
       
    </head>
    <body><section>
              <fieldset>
            <legend></legend>
            <form action="../controller/floorplan_con.php" method="post">
        <h1>Avaliable Apartments</h1>
        <table class="striped">
            
               <?php
               
               Print "<table border cellpadding=13>";
               
               print " <td>".'Floor plan Deatils' . "</td> "; 
 Print " <td>".'Bed '. "</td> "; 
  Print " <td>".'Bath' . " </td>";
 Print " <td>".'Sqrft' . " </td>";
 Print " <td>".'Price' . "</td> ";
 Print " <td>".'Floor'. "</td> ";
 Print " <td>".'Washer and dryer'. "</td> "; 
 print "</tr>";
 ?>
           
        <?php    

                
 Print "<tr>"; 
 Print " <td>".$floorplanDeatils . "</td> "; 
 Print " <td>".$bed . "</td> "; 
  Print " <td>".$bath . " </td>";
 Print " <td>".$sqrft . " </td>";
 Print " <td>".$price . "</td> ";
 Print " <td>".$floor. "</td> ";
 Print " <td>".$washer_d. "</td> ";
?>
 <a href="?action=view_book&book_id=<?php echo $room['roomID']; ?>">
                               <?php echo $room['floorplanDeatils']; ?>
                        </a>
     <?php                     Print "</tr>";
  Print "</table>";
   ?>
        </table>
     
        <a href="">Home</a><br>
        <a href="../controller/floorplan_con.php">Back to search</a>
        </form>
        </section>

    </body>
</html>
