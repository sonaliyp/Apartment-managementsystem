<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Model/db_connect.php';
include '../Model/user_repository.php';
//$userID=$_POST[userID];
$emailAddress = $_POST['emailAddress'];
$password=$_POST['password'];
 $firstName=$_POST['firstName'];
 $lastName=$_POST['lastName'];
  $city=$_POST['city'];
   $state=$_POST['state'];
     $country=$_POST['country'];
        $isAdmin=$_POST['interst'];
        //echo $emailAddress.'    '.$password.'   '. $firstName.'   '.$lastName.'   '.$city.'   '.$state.'   '.$country.'   '.$isAdmin;
       if(Add_newuser($emailAddress, $password, $firstName,$lastName,$city,$state,$country,$isAdmin))
       {
       echo 'not signup';
           
       }else{
          
           echo 'Scucefully signup';
           include '../views/Login.php';
       }