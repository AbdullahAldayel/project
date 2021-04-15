<?php 
include 'database.php';

$validateid = "";

if(!isset($_POST['validateid'])){ 
   header('location:adminValidate.php');
}
else{
    $validateid = $_POST['validateid'];
   
    

    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
    if(mysqli_connect_errno())
    {
        die("cannot connect to the database".mysqli_connect_error());
    }
    mysqli_query($con,"UPDATE movies SET status=1 WHERE movieId='$validateid'");

    mysqli_close($con);
    header('Location:adminValidate.php');
    
}
?>