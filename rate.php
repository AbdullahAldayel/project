<?php

session_start();

include 'database.php';

$rating = "";
$movid = "";

 
if( !isset($_POST['rate']) || !isset($_POST['movid']) ){

    header('Location:homepage.php');
 
 }
 else
 {
    
    $rating = $_POST['rate'];
    $movid = $_POST['movid'];
    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
    if(mysqli_connect_errno())
    {
        die("cannot connect to the database".mysqli_connect_error());
    }
   // mysqli_query ($con ,"INSERT INTO user (email, password, role) VALUES ('$signupemail', '$signuppassword', '0')");

      mysqli_query ($con ,"INSERT INTO ratings (userId,  movieId , rating) VALUES (' $_SESSION[id] ' ,  '$movid' , ' $rating') ");
    
    
    mysqli_close($con);
      header('Location:homepage.php');
  
 }

?>