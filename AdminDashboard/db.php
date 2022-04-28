<?php

$dbserver="localhost";
$dbuser="root";
$dbpw="";
$dbname="tgcr";
$conn=mysqli_connect($dbserver,$dbuser,$dbpw,$dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
