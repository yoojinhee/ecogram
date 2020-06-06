<?php  
session_start();
unset($_SESSION['id']);
unset($_SESSION['password']);
unset($_SESSION['_id']);
header("Location: ../index.php");
?>