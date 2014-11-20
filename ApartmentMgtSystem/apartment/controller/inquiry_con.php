<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
         $sex = $_POST['sex'];
        $date1 = $_POST['birth'];
        $email = $_POST['address'];
        $phone = $_POST['phone'];
        //$county = $_POST['Cresidence'];
        $state = $_POST['Sresidence'];
     //  $year = $_POST['option_chosen'];
       $interst = $_POST['interst'];
         $question = $_POST['Question'];
        // echo $first_name   .'    '.$last_name .'        '  .$sex.'   '.$interst;
         if(isset($email))
         {
require_once 'Mail.php';
require_once 'Mail/RFC822.php'; 
$from = 'gadave.sonali22@gmail.com';
//$subject= $_POST['subject'];
//$subject = $_POST['subject'];//$_POST['subject'];
$text = " hi ";//$_POST['message'];
$smtp = array();
$smtp['host'] = 'ssl://smtp.gmail.com';
$smtp['port'] = 465;
$smtp['auth'] = true;
$smtp['username'] = 'gadave.sonali22@gmail.com';
$smtp['password'] = '9595263928';//removed password
$mailer = Mail::factory('smtp', $smtp);
$headers = array();
$headers['From'] = 'gadave.sonali22@gmail.com';
/*$dbc = mysqli_connect('localhost', 'root', '', 'customerdb') or die('Error
connecting to MySQL server.');
$query = "SELECT * FROM inquiry";
$result = mysqli_query($dbc, $query) or die('Error querying database.'); 
while ($row = mysqli_fetch_array($result)) {
$to = $row['email'];
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$msg = $_POST['message'];//"$subject Dear $first_name $last_name,\n$text";
$headers['to'] = $to;
$headers['subject'] = $subject;
$recipients=$to;
$mailer->send($recipients, $headers, $msg);
echo 'Email sent to: ' . $to . '<br />';
}*/
if($interst='12'){
$subject = "Apartment Eiquery";
$msg = "
Hello welcome to the aprtments.
This is the informention of our aprtments.
for 12 Month Lease
you have to give 200 deposit. befoure leaving apartments 1 month notice.
Details :-
    Air Conditioning
    Dishwasher
    Unfurnished Available
    Storage Space(s)
    Garage
    Pool
    Whirlpool(s)
    Residents Lounge
    Elevator
    Package Receiving
    Fitness Center: Free
    On-Site Management
    On-Site Maintenance
    Controlled Acces
Pets Allowed
Cats Allowed
Pet Restrictions
$500 pet deposit $20 monthly pet rent

Available Parking

    Parking Garage
    Assigned Parking
    Parking Lot
    Carport

Additional Parking Information
    1x1: 1 space 2x1: 1 space 2x2: 2 spaces 3x2: 2 spaces
    Number of Free Parking Spaces: 2";
}
if($interst='6'){
$subject = "Apartment Eiquery ";
$msg = "
Hello welcome to the aprtments.
This is the informention of our aprtments.
for 6 Month Lease
you have to give 500 deposit. befoure leaving apartments 2 month notice.
Details :-
    Air Conditioning
    Dishwasher
    Unfurnished Available
    Storage Space(s)
    Garage
    Pool
    Whirlpool(s)

    Residents Lounge
    Elevator
    Package Receiving
    Fitness Center: Free
    On-Site Management
    On-Site Maintenance
    Controlled Acces
Pets Allowed
Cats Allowed
Pet Restrictions
$500 pet deposit $20 monthly pet rent

Available Parking

    Parking Garage
    Assigned Parking
    Parking Lot
    Carport

Additional Parking Information
    1x1: 1 space 2x1: 1 space 2x2: 2 spaces 3x2: 2 spaces
    Number of Free Parking Spaces: 2";
}
if($interst='not'){
$subject = "Apartment Eiquery";
$msg = "
Hello welcome to the aprtments.
This is the informention of our aprtments.
for 6 Month Lease
you have to give 500 deposit. befoure leaving apartments 2 month notice.
Details :-
    Air Conditioning
    Dishwasher
    Unfurnished Available
    Storage Space(s)
    Garage
    Pool
    Whirlpool(s)

    Residents Lounge
    Elevator
    Package Receiving
    Fitness Center: Free
    On-Site Management
    On-Site Maintenance
    Controlled Acces
Pets Allowed
Cats Allowed
Pet Restrictions
$500 pet deposit $20 monthly pet rent

Available Parking

    Parking Garage
    Assigned Parking
    Parking Lot
    Carport

Additional Parking Information
    1x1: 1 space 2x1: 1 space 2x2: 2 spaces 3x2: 2 spaces
    Number of Free Parking Spaces: 2";
}
if($interst='un'){
$subject = "Apartment Eiquery";
$msg = "
Hello welcome to the aprtments.
This is the informention of our aprtments.
for 12 or more Month Lease
you have to give 250 deposit. befoure leaving apartments 2 month notice.
Details :-
    Air Conditioning
    Dishwasher
    Unfurnished Available
    Storage Space(s)
    Garage
    Pool
    Whirlpool(s)

    Residents Lounge
    Elevator
    Package Receiving
    Fitness Center: Free
    On-Site Management
    On-Site Maintenance
    Controlled Acces
Pets Allowed
Cats Allowed
Pet Restrictions
$500 pet deposit $20 monthly pet rent

Available Parking

    Parking Garage
    Assigned Parking
    Parking Lot
    Carport

Additional Parking Information
    1x1: 1 space 2x1: 1 space 2x2: 2 spaces 3x2: 2 spaces
    Number of Free Parking Spaces: 2";
}
$to=$email;

//mysqli_close($dbc);

$headers['to'] = $to;
$headers['subject'] = $subject;
$recipients=$to;
$mailer->send($recipients, $headers, $msg);
//echo 'Email sent to: ' . $to . '<br />';
include '../views/email_scuess.php';  
         }