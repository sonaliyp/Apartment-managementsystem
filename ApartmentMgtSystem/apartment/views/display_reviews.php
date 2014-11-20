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
              <h4 style="background-color:purple; text-align:center;color:white; font-family: Times New Roman;">  This is the reviews of our apartments</h4>

       
        Resident Satisfaction 4.2 out of 5 stars <font color ="yellow">****</font> (1043)

        <p>Mill Creek Apartments reviews are based on the experiences of actual residents. All residents are surveyed and their responses are summarized within our Resident Satisfaction score. The reviews below contain insights into management and community amenities, as well as neighborhood tips for living in our South Bay apartments. Check out what residents have said about living at Mill Creek Apartments.</p>
        <table BORDER="0" bgcolor="pink" cellspacing="6" cellpadding="10">
            <?php  include '../Model/db_connect.php';
            include '../Model/reviews_rep.php';
            $stud = display_eviews();?>
            <tr>
            
                <th>Details </th>
                <th>Reviewed on: </th>
                </tr> 
           <?php    while($info = mysql_fetch_array( $stud )) 
 {
	Print "<tr>"; 


  Print " <td>".$info['details'] . "           "." </td>";
 Print " <td>".$info['date'] ."            ". " </td>";

  }?>
        </table>
          <a href="index.php">Home page</a>
       </section>
        </fieldset>
          <div id="footer">
            &copy;2014 24 Apartments Inc. 
        </div>
    </body>
</html>
