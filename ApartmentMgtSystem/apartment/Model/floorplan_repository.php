<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function all_floorplan(){
       
       global $db;
    $query = "SELECT * FROM apartmentdb.floorplan ORDER BY floorplanId";
    $floor = $db->query($query);
    return $floor;
     }
     function floorplan_name($apt){
       $dbc = mysql_connect('localhost', 'root', '', 'apartmentdb') or die('Error inconnecting DB server');
    mysql_connect('localhost', 'root', '') or die(mysql_error());
    mysql_select_db("apartmentdb") or die(mysql_error());
    $data = mysql_query("SELECT `floorplanName` 
FROM `floorplan` 
WHERE `floorplanId` =$apt") or die(mysql_error());
       //global $db;
    //$query = "SELECT floorplanName FROM apartmentdb.floorplan floorplanId = $apt";
    //$floor = $db->query($query);
   return $data;
     }
     function all_Rooms(){
       
       global $db;
    $query = "SELECT * FROM apartmentdb.rooms ORDER BY floorplanId";
    $floor = $db->query($query);
    return $floor;
     }
      function Delete_Rooms($id){
       
       global $db;
    $query = "DELETE FROM apartmentdb.rooms WHERE roomID = $id ";
  //  $floor = $db->query($query);
    if(!($db->query($query))){
               echo 'record deleted  ';
           }
         else {
               echo ' deleted ';
            }
     }
     function get_floorplan_by_name($publisher_id) {
    global $db;
    $query = "SELECT * FROM apartmentdb.rooms WHERE floorplanId = $publisher_id ORDER BY roomID";
    $books = $db->query($query);
    return $books;
}
function get_room($book_id) {
    global $db;
    $query = "SELECT * FROM apartmentdb.rooms WHERE roomID = $book_id";
    $book = $db->query($query);
    $book = $book->fetch();
    return $book;
}

function get_room_by_publisher($publisher_id) {
    global $db;
    $query = "SELECT * FROM books WHERE publisherID = $publisher_id ORDER BY isbn";
    $books = $db->query($query);
    return $books;
}


function connection_atendance() {
    $dbc = mysql_connect('localhost', 'root', '', 'apartmentdb') or die('Error inconnecting DB server');
    mysql_connect('localhost', 'root', '') or die(mysql_error());
    mysql_select_db("faulty") or die(mysql_error());
    $data = mysql_query("SELECT * FROM apartmentdb.rooms") or die(mysql_error());
     Print "<table border cellpadding=13>"; 
   /* while($info = mysql_fetch_array( $data )) 
     {
    Print "<tr>";
     Print "<th>Last Name:</th> <td>".$info['week'] . "</td> ";
      Print "<th>id :</th> <td>".$info['id'] . "</td> ";
     Print "<th>First Name:</th> <td>".$info['status'] . " </td>";
    Print "<th>id :</th> <td>".$info['date1'] . "</td> ". "</tr>";
     }*/
    return $data;
}

function addr_rooms($roomID,$floorplanId, $floorplanDeatils, $bed, $bath, $sqrft,$price,$floor,$washer_d) { 
    global $db;
    $query = "INSERT INTO apartmentdb.rooms(roomID, `floorplanId`, `floorplanDeatils`, `bed`, `bath`, `sqrft`, `price`, `floor`, `washer_d`) VALUES ('$roomID','$floorplanId', '$floorplanDeatils', '$bed', '$bath', '$sqrft','$price','$floor','$washer_d')";
      //echo $query;
    if(!($db->exec($query)))
 {     printf("Error: %s\n",$db->errorInfo()[2]);
 }
 else
 {
  //   echo 'Applicant Info Is added <br>';
   echo ' details submitedd ';
 }
}