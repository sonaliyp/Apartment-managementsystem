<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Model/floorplan_repository.php';
include '../Model/db_connect.php';
$roomID=$_POST['roomID'];
$floorplanId= $_POST['floorplanId'];
$floorplanDeatils=$_POST['floorplanDeatils'];
$bed=$_POST['bed'];
$bath=$_POST['bath'];
$sqrft=$_POST['sqrft'];
$price=$_POST['price'];
$floor=$_POST['floor'];
$washer_d=$_POST['washer_d'];
//echo ' '.$washer_d.'  '.$roomID.' floorplanId =  '.$floorplanId.' '.$sqrft;
addr_rooms($roomID,$floorplanId, $floorplanDeatils, $bed, $bath, $sqrft,$price,$floor,$washer_d);
 $rooms = all_Rooms();
include '../views/floorplan.php';