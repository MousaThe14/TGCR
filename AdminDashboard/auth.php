<?php
session_start();
if(!isset($_SESSION["VNumber"])){
header("Location: AdminLogin.php");
exit(); }
?>