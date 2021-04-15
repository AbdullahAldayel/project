<?php 
session_start();

include 'database.php';

$email = "";
$pwd = "";

if(!isset($_POST['email']) || !isset($_POST['pwd'])){
   // $email = $_POST['email'];
   //$pwd =  $_POST['pwd'];
   header('Location:login.php?error=Please fill your information');

}

else{
    
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
    if(mysqli_connect_errno()){
        die("cannot connect to the database".mysqli_connect_error());
    }

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$pwd'";

    $result = mysqli_query($con, $query);
    $row  = mysqli_fetch_array($result);

    if(is_array($row)){
    //    setcookie("login","yes",time()+4000,"/");
        $_SESSION['id'] = $row['userId'];
        mysqli_close($con);
        if(isset($_SESSION["id"])) {

            if($row['role'] == 1) {
                header ('Location:adminpage.php');
            } else {
                header ('Location:homepage.php');
    
            }
        } else {
            
        }

    }

    else{
        mysqli_close($con);
        header('Location: login.php?error=Wrong username or password');
    }
            

}

?>