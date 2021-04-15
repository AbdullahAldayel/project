<?php

session_start();

include 'database.php';

$addname = "";
$addgener = "";

 
if( !isset($_POST['addname']) || !isset($_POST['addgener']) || !isset($_POST['addrating'])  ){
    // $email = $_POST['email'];
    //$pwd =  $_POST['pwd'];
    header('Location:homepage.php');
    //header('Location:homepage.php?error=Please fill Movie information');
 
 }
 else
 {
    
    $addname = $_POST['addname'];
    $addgener  = $_POST['addgener'];
    
    

    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
    if(mysqli_connect_errno())
    {
        die("cannot connect to the database".mysqli_connect_error());
    }
   // mysqli_query ($con ,"INSERT INTO user (email, password, role) VALUES ('$signupemail', '$signuppassword', '0')");

      mysqli_query ($con ,"INSERT INTO movies(title, genres) VALUES ('$addname', '$addgener')");
    
    
    mysqli_close($con);
    header('Location:homepage.php');
  
 }

?>