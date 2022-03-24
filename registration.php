
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-with, initial-scale=1">
	<meta name="Author" content="John Wright, Mousa Tour&eacute;">
	
	<title>Trojan Gaming Club Membership Registration</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/groupproject.css" />

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

if (isset($_REQUEST['username']))
{

 $name = stripslashes($_REQUEST['name']);
 $name = mysqli_real_escape_string($conn,$name); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($conn,$email);
 $studentid = stripslashes($_REQUEST['studentid']);
 $studentid = mysqli_real_escape_string($conn,$studentid);

 $trn_date = date("Y-m-d H:i:s");
	
        $query = "INSERT into `membership` (name, email, studentid, trn_date) VALUES ('$name', '$email', '$studentid', '$trn_date')";
		
        $result = mysqli_query($conn,$query);
		
        if($result){
            echo "<div class='personal'>
<h3>You are registered successfully. Welcome to the Trojan Gaming Club.</h3>
<br/>Click here to <a href='custlogin.php'>Login</a></div>";
        }
    }else{ 
?>
<h1>Registration</h1>
<div class="personal">

<fieldset>
<legend>Club Member Info</legend><!-- Name and Login Info-->
<form name="registration" action="" method="post">
<input type="text" name="name" placeholder="Name" required /><br>
<input type="text" name="studentid" placeholder="V00######" required /><br>
<input type="email" name="email" placeholder="Email" required /><br>

</fieldset>


<fieldset>
<input class="btn btn-primary" type="submit" name="submit" value="Register" /><br>


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
