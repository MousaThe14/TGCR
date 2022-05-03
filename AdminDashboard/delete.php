<?php
require("db.php");
include("auth.php");?>

<?php
$id=$_REQUEST['id'];
$model=$_REQUEST['model'];
$table=$_REQUEST['table'];

$dbserver="localhost";
$dbuser="root";
$dbpw="";
$dbname="tgcr";
$conn=mysqli_connect($dbserver,$dbuser,$dbpw,$dbname);

         

$query = "DELETE FROM $table WHERE VNumber= '$id'"; 

$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
header('Location: ' . $_SERVER['HTTP_REFERER']); 
?>