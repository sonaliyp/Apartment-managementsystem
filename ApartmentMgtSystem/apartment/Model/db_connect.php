<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dsn = 'mysql:host=localhost;dname=apartmentdb';
$username='root';
$password='';//?
//echo '<br>   data base connection   </br>';
try{
    $db= new PDO($dsn,$username,$password);
  //  echo 'Connected to db </br>';
    
} catch (Exception $ex) {
 $error_msg = $ex->getMessage();//?
    include('../errors/db_error.php');
    exit();
}