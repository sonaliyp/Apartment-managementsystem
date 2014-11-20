<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Model/db_connect.php';
include '../Model/floorplan_repository.php';
//$action = 'view_book';//'floorplan';
//$book_id =1;
//$action == 'view_book';
//$book_id = 300;
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'floorplan';
}
if ($action == 'publisher_id') {
   // $publishers = all_floorplan();
    
    $id = $_GET['id'];
    
    $palns = all_floorplan();
    echo $id;
    $rooms = get_floorplan_by_name($id);
  // $book = get_room($book_id);
   $roomID = $rooms['roomID'];
}
//$id = $_GET['publisher_id'];
///echo 'id = '. $id;
if ($action == 'floorplan') {
    $publisher_id = 1;
  // $publisher_id = $_GET['floorplanId'];
   // echo "id = ".$publisher_id;
   /*if (isset($_GET['floorplanId'])) {
        $publisher_id = $_GET['floorplanId'];
        echo "id = ".$publisher_id;
    }*/
  $palns = all_floorplan();
    $rooms = all_Rooms();//get_floorplan_by_name($publisher_id);
    /*$publishers = get_publishers();
    $publisher_name = get_publisher_name($publisher_id);
    $books = get_books_by_publisher($publisher_id);
    */
  // include '../views/floorplan.php';
      include '../views/floorplan.php';
    
 }  else if ($action == 'view_book') {
    $publishers = all_floorplan();
    $book_id = $_GET['book_id'];
    echo $book_id;
    Delete_Rooms($book_id);
    $book = get_room($book_id);
    $palns = all_floorplan();
    $rooms = all_Rooms();
    // Get Book Information
    $roomID = $book['roomID'];
    $floorplanId =$book['floorplanId'];
    $floorplanDeatils =$book['floorplanDeatils'];
    $bed =$book['bed'];
    $bath =$book['bath'];
    $sqrft =$book['sqrft'];
    $price =$book['price'];
    $floor =$book['floor'];
    $washer_d =$book['washer_d'];
    
   // echo $bed .'   '. $sqrt;
    
  /*  $isbn = $book['isbn'];
    $title = $book['bookTitle'];
    $price = $book['bookPrice'];

    $discount_percent = 20;

    $discount_amount = round($price * ($discount_percent / 100.0), 2);
    $final_price = $price - $discount_amount;

    // Format the calculations
    $discount_amount = number_format($discount_amount, 2);
    $final_price = number_format($final_price, 2);

    // Get image URL and alternate text
    $image_filename = '../images/' . $isbn . '.png';
    $image_alt = 'Image: ' . $isbn . '.png';*/
   include '../views/floorplan.php';
 //include '../views/viewRooms.php';   
}




 