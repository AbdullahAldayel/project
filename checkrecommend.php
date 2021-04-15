<?php 
$gener = "";
$rating = "";
$size = "";



if(!isset($_POST['gener']) || !isset($_POST['rating'] || !isset($_POST['size'] )){ 
   header('location:homepage.php');
}
else{
    $gener = $_POST['gener'];
   
    $rating = $_POST['rating'];
    $size = $_POST['size'];

    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
    if(mysqli_connect_errno())
    {
        die("cannot connect to the database".mysqli_connect_error());
    }
    
    
}
?>