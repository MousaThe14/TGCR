
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta Name="viewport" content="width=device-with, initial-scale=1">
	<meta Name="Author" content="John Wright, Mousa Tour&eacute;">
	
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


<?php
require('db.php');


 $LoginTime = date("Y-m-d H:i:s");
 $Name = stripslashes($_REQUEST['Name']);
 $Name = mysqli_real_escape_string($conn,$Name); 
 $StudentID = stripslashes($_REQUEST['StudentID']);
 $StudentID = mysqli_real_escape_string($conn,$StudentID);


        $query = "INSERT into `login` (LoginTime, Name, StudentID) VALUES ('$LoginTime', '$Name', '$StudentID')";
		
        $result = mysqli_query($conn,$query);
		
        if($result){
            echo "<div class='personal'>
<h3>You Are Logged Into Today's Events.</h3>;
        }
    }else{ 
?>
<h1>Login</h1>
<div class="personal">

<fieldset>
<legend>Login Info</legend><!-- Name and Login Info-->
<form Name="login" action="" method="post">
<input type="text" Name="StudentID" placeholder="V00######" required /><br>
<input type="text" Name="Name" placeholder="First and Last Name" required /><br>

</fieldset>


<fieldset>
<input class="btn btn-primary" type="submit" Name="submit" value="Login" /><br>


</form>
</fieldset>

</div>
<?php } ?>

	<footer>
	</footer>

  <script src="js/jquery.min.js" />
  <script src="js/popper.min.js" />
  <script src="js/bootstrap.min.js" />
  
  
  
</body>
</html>
