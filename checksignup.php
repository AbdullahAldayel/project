<?php

session_start();

include 'database.php';

$signupemail = "";
$signuppassword = "";
 
if(!isset($_POST['signupemail']) || !isset($_POST['signuppassword'])){
    // $email = $_POST['email'];
    //$pwd =  $_POST['pwd'];
    header('Location:signup.php?error=Please fill your information');
 
 }
 else
 {
    
    $signupemail = $_POST['signupemail'];
    $signuppassword  = $_POST['signuppassword'];
    

    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
    if(mysqli_connect_errno())
    {
        die("cannot connect to the database".mysqli_connect_error());
    }
   // mysqli_query ($con ,"INSERT INTO user (email, password, role) VALUES ('$signupemail', '$signuppassword', '0')");

      mysqli_query ($con ,"INSERT INTO `users` (email, password ) VALUES ('$signupemail', '$signuppassword')");
    
    
    mysqli_close($con);
    header('Location:login.php');
  
 }

?>