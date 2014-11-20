<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="inqary.css" />
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


        </style>
        <title>Inquiry</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        
      
        <fieldset>
            <legend></legend>
            
       <section>
 <h4 style="background-color:#3B5998; text-align:center;color:white; font-family: Times New Roman;">Inquiry Form</h4>
* indicates required fields.
<h4>Applicant Name *</h4>
<form method="post" action="../controller/inquiry_con.php">
 <table>
<tr>
First
<td><label for="first_name"><br/></label></td>
<td><input id="first_name" name="first_name" type="text" required></td>
&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Last
<td><label for="last_name"><br/></label></td>
<td><input id="last_name" name="last_name" type="text"></td>
</tr>
</table>
 <h3>Gender *</h3> 
 <form action="">
<input type="radio" name="sex" value="male">Male<br>
<input type="radio" name="sex" value="female">Female
  <h3>Date of Birth(MM-DD-YYYY)*</h3> 
  <label for="birth"></label>
  <input id ="birth" name="birth" type="date" placeholder="month-date-year" required>
   <h3>Email Address(for admissions correspondence) *</h3> 
   <label for="address"> </label>
   <input id ="address" name="address" size="50"type="email" required>
    <h3>Phone(xxx-xxx-xxxx)*</h3> 
    <label for="phone"></label>
    <input id="phone" name="phone" type="tel" size=="35" required>
    <h3>State of  Residence(for US)</h3> 
       <label for="Sresidence"></label>
    <input id="Sresidence" name="Sresidence" type="text" size="50" >
     
      <h3>I am interested in:*</h3> 
      <form action="">
          <input type="radio" name="interst" value="12">12 Months lease <br/>
          <input type="radio" name="interst" value="6">6 Months lease<br />
          <input type="radio" name="interst" value="not">Not decided<br/>
          <input type="radio" name="interst" value="un">12 Months or More lease<br/>
           
 <label for="message"><h3>Question/Comments:</h3></label>  <br /> 
  <textarea id="Question" name="Question" rows="8" cols="40"></textarea><br />
<input type="Submit" name="Submit" value ="Submit Form"><br/>
   </form>
      <a href="../views/index.php">Home page</a>
      <h4 style="background-color:#3B5998; text-align:center;color:white; font-family: Times New Roman;">©2014  Residential. All Rights Reserved...</h4>
         </section>
</fieldset>
         

    </body>
</html>
