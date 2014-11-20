<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *

    session_start();
  
 $_SESSION['variable_name'] =$i ;
//if($publisher_id == 1){
  //  echo 'display id ';
//}
  if(isset($_GET['i'])){
            $id = $_GET['i'];
          //  echo 'email = '.$email;}
          echo '$id';
        }
/*$sid = $_POST['id'];
if (isset($_GET['sid'])) {
        $publisher_id = $_GET['sid'];
        echo '$publisher_id';
    }else
     *   echo 'not set';*/
   include '../Model/db_connect.php';
   include '../Model/reviews_rep.php';
   
 if(isset($_POST['details'])){
           $details = $_POST['details'];
           $date = $_POST['date1'];
           session_name('varname');
              session_start();
              if(isset($_SESSION['email'])){
                  $userID = $_SESSION['email'];
                   addr_eviews($userID, $details, $date);
                   include '../views/userReq.php';
              }
 else {
      $userID = 'Abc@dkg';
                   addr_eviews($userID, $details, $date);
                   include '../views/userReq.php';
 }
              
              // addr_eviews($userID, $details, $date);
          //  echo 'email = '.$email;}
        }
        /*   $_SESSION['variable_name'] =$id ;
           echo $id;
           if(id == 1){
               include '../views/userReq.php';
           }
         * */
        else
        {
            include '../../apartment/views/display_reviews.php';
        }
         