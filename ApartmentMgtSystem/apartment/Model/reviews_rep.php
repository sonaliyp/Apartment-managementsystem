<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include './db_connect.php';
//addr_eviews(1, "details added", "");

function display_eviews() {
   /* global $db;
    $query = "SELECT * FROM apartmentdb.reviews";
    $books = $db->query($query);
    return $books;*/
    $dbc = mysql_connect('localhost', 'root', '', 'apartmentdb') or die('Error inconnecting DB server');
 mysql_connect('localhost', 'root', '') or die(mysql_error()); 
 mysql_select_db("apartmentdb") or die(mysql_error()); 
    $query = "SELECT * FROM apartmentdb.reviews";
      $result = mysql_query($query)or die($query."<br/><br/>".mysql_error());
     // Print "<table border cellpadding=13>"; 
      if(!$result)
    {
        printf("Error: %s\n",$db->errorInfo()[2]);
    }else{
          // echo 'you</br>';
         }
       return $result;
    }

function addr_eviews($userID, $details, $date) {
    global $db;
    $query = "INSERT INTO apartmentdb.reviews(`userID`, `details`, `date`) VALUES ('$userID', '$details','$date')";
      //echo $query;
    if(!($db->exec($query)))
 {
     printf("Error: %s\n",$db->errorInfo()[2]);
 }
 else
 {
  //   echo 'Applicant Info Is added <br>';
   echo 'ThankYou For Submitting your reviews details .';
 }
}
