<?php
// setcookie("login","", time() - 5000);
session_start();
unset($_SESSION["id"]);
header ('location:login.php?message=see you next time');
?>