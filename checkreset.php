<?php
session_start();

include 'database.php';

$email = "";
$oldpwd = "";
$newpwd = "";

if(!isset($_POST['email']) || !isset($_POST['oldpwd']) || !isset($_POST['newpwd']) )
{
    header('Location:reset.php?error=Please fill your information');
 }

 else
 {
    
    $email = $_POST['email'];
    $oldpwd = $_POST['oldpwd'];
    $newpwd = $_POST['newpwd'];

    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
    if(mysqli_connect_errno())
    {
        die("cannot connect to the database".mysqli_connect_error());
    }

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$oldpwd'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result)>0)
    {

        mysqli_query($con,"UPDATE users SET password ='$newpwd' WHERE email='$email' AND password='$oldpwd'");
        
        //  setcookie("login","yes",time()+4000,"/");
      //  $_SESSION['login'] = Mohammed;
          mysqli_close($con);
          header ('Location:login.php');
           
    }
    else{
        mysqli_close($con);
        header('Location: reset.php?error=Wrong username or password');
    }

 }
?>