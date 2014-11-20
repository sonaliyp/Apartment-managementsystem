<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head> <style> body{
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
        <title></title>
    </head>
    <body><section>
              <fieldset>
            <legend></legend>
            
            <form method="post" action="../controller/Room_con.php">
                <h4 style="background-color:#3B5998; text-align:center;color:white; font-family: Times New Roman;">Add New Room</h4>

                    
                    <label for="roomID">RoomID</label><br>
                    <input type="text" name="roomID"><br>
                    
                    <label for="floorplanId">Floor Name</label><br>
                    <select name="floorplanId">
  <option value="1">Kipling Floorplan</option>
  <option value="2">Thoreau Floorplan</option>
  <option value="3">Emerson Floorplan</option>
  <option value="4">Hawthorne Floorplan</option>
</select>
                    <br>
                       <label for="floorplanDeatils">Details:</label><br />
                    <textarea id="floorplanDeatils" name="floorplanDeatils" rows="8" cols="40"></textarea><br />
                    <label for="bed">Number of Bed</label><br>
                    <input type="text" name="bed"><br>  
                    <label for="barh">Number of Bath</label><br>
                    <input type="text" name="bath"><br>
                      <label for="sqrft">sqrft</label><br>
                    <input type="text" name="sqrft"><br>
                    <label for="price">Price</label><br>
                    <input type="text" name="price"><br>
                    <label for="floor">Floor</label><br>
                    <input type="text" name="floor"><br>
                      <label for="washer_d">Washer & dryer</label><br>
                    <input type="text" name="washer_d"><br>
                    
                      <input type="Submit" name="Submit" value ="Submit"><br/>      </form>
            <br>
            <a href="../controller/floorplan_con.php">view apartments</a><br>
              <a href="../views/index.php">Log out</a><br>
              <h4 style="background-color:#3B5998; text-align:center;color:white; font-family: Times New Roman;">©2014  Residential. All Rights Reserved...</h4>
    
                    </section>
      
    </body>
</html>
