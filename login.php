
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta Name="viewport" content="width=device-with, initial-scale=1">
	<meta Name="Author" content="John Wright, Mousa Tour&eacute;">
	<meta http-equiv = "refresh" content = "2; url = login.html" />
	
	<title>Trojan Gaming Club Membership Login</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/tgcr.css" />

</head>


<header>
    <div class="container">
		  <nav>
		    <ul>
	        <li><a href="index.html"> <img src = "none.png" width="120" height="30" alt = "Home Link" class="logo"></a></li>
		  
		      <li><a href="adminlogin.php"><img src = "none.png" width="25" height="25" alt = "Login Link" class="btns"></a></li>
        </ul>
      </nav>
    </div>
</header>

<h1>Login</h1>
<div class="personal">
<?php
require('db.php');

if (isset($_POST['Name'])){

 $LoginDate = date("Y-m-d);
  $LoginTime = date("H:i:s");
 $FirstName = stripslashes($_REQUEST['FirstName']);
 $FirstName = mysqli_real_escape_string($conn,$FirstName); 
 $StudentID = stripslashes($_REQUEST['StudentID']);
 $StudentID = mysqli_real_escape_string($conn,$StudentID);


        $sql = "INSERT INTO eventlogin (LoginDate,LoginTime, FirstName, StudentID) VALUES ('$LoginDate', 'LoginTime', '$FirstName', '$StudentID')";
		 
        $result = mysqli_query($conn,$sql);
		
        if($result){
            echo "<div class='personal'>
<h3>You Are Logged Into Today's Events.</h3></div>";
        }
    }else{ 
?>


</div>
<?php } ?>

	<footer>
	</footer>

  <script src="js/jquery.min.js" />
  <script src="js/popper.min.js" />
  <script src="js/bootstrap.min.js" />
  
  
  
</body>
</html>
