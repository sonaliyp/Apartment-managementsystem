<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//function valid admin
//include './db_connect.php';
//Add_newuser('emailAddress', 'password', 'firstName','lastName','city','state','country',2);
function is_valid_admin_login($email, $password) {
    global $db;
    $query = 'SELECT userID FROM apartmentdb.users
              WHERE emailAddress = :email AND password = :password AND isAdmin = 1';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $valid = ($statement->rowCount() >= 1);
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
    return $valid;
}
//vlaid user
function is_valid_admin_user($email, $password) {
    global $db;
    $query = 'SELECT userID FROM apartmentdb.users
              WHERE emailAddress = :email AND password = :password ';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $valid = ($statement->rowCount() >= 1);
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
    return $valid;
}

// insert reviews 
function insert_reviews($week_no) {
    global $db;
    $dbc = mysqli_connect('localhost','root','','faulty')or die('Error inconnecting DB server');
        $weekno = $_POST['week'];
        $duedate = $_POST['duedate'];
        $assignment_dec= $_POST['assignmentdec'];
       $totalpoint = $_POST['point'];
       $query = "INSERT INTO assignments(weekno ,duedate ,assignment_dec  ,totalpoint) VALUES('$weekno','$duedate','$assignment_dec','$totalpoint')";
       mysqli_query($dbc,$query)or die('Error querying database');
       echo 'Contact added.';
       
    //$query1 = "INSERT INTO `assignments`(`week`, `duedate`, `assignmentdec`, `point`) VALUES ([value-1],[value-2],[value-3],[value-4])";
    //$query = "SELECT * FROM faulty.assignments  WHERE week = $week_no ORDER BY week";
    $handout = $db->query($query);
    mysqli_close($dbc);
    return $handout;
}
function Add_newuser($emailAddress, $password, $firstName,$lastName,$city,$state,$country,$isAdmin) {
    global $db;
    $query = 'INSERT INTO apartmentdb.users (emailAddress, password, firstName, lastName, city, state, country, isAdmin)
              VALUES (:emailAddress, :password, :firstName,:lastName,:city,:state,:country,:isAdmin)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':emailAddress', $emailAddress);
         $statement->bindValue(':password', $password);
          $statement->bindValue(':firstName', $firstName);
           $statement->bindValue(':lastName', $lastName);
            $statement->bindValue(':city', $city);
             $statement->bindValue(':state', $state);
              $statement->bindValue(':country', $country);
               $statement->bindValue(':isAdmin', $isAdmin);
            
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function sending_mail (){
    
}