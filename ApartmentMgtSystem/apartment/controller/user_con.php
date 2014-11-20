<?php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../Model/db_connect.php';
include '../Model/user_repository.php';
//$username = 'a';//'sonali@gmail.com';//'admin@yahoo.com';//'sonali@gmail.com';
//$pas = 'A';//'abc';
$username = $_POST['username'];
$pas = $_POST['password'];
if(isset($_SESSION['username'])){
echo ' session set ' .$_SESSION['username'];

}
if(is_valid_admin_login($username,$pas)){
   // echo 'scussfully admin';
    include '../views/Owner.php';
    //include '../controller/floorplan_con.php';
}
elseif (is_valid_admin_user($username, $pas)) {
    //echo 'not an admin<br> user';
    include '../views/userReq.php';
}
else{
    echo '<h3><font color="red">! wrong username and password please try again..</font><h3>';
    include '../views/Login.php';
}
