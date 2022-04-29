
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta Name="viewport" content="width=device-with, initial-scale=1">
	  <meta Name="Author" content="John Wright, Mousa Tour&eacute;">
	  <meta charset="UTF-8"/>
	  	<meta http-equiv = "refresh" content = "2; url = EventLogin.html" />
	  
	  	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/tgcr.css" />
	
	 <title>Trojan Gaming Club</title>
  </head>
  
  <body>
    

	<header>
      <img src="SchoolLogo.png" alt="logocup" align="left"height="125" width="125";/> 
    <h1>Trojan Gaming Club</h1>
  </header>
  
<div id="wrapper">  
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <ul class="navbar-nav"> 
      
			  <li="nav-item">
			    <a href="Register.html">Register</a>
			  </li>
			  
        <li="nav-item">
          <a href="EventLogin.html">Event Login</a>
          </li>
          
            
        <li="nav-item">
          <a href="AdminLogin.html">Administration Dashboard</a>
          </li>
          
      </ul>
    </nav>
    </div>
  <main>
	
    <h2>Event Login</h2>
    
<?php
require('db.php');

if (isset($_POST['VNumber'])){

 $LoginDate = date("Y-m-d");
 $FirstName = stripslashes($_REQUEST['FirstName']);
 $FirstName = mysqli_real_escape_string($conn,$FirstName); 
 $VNumber = stripslashes($_REQUEST['VNumber']);
 $VNumber = mysqli_real_escape_string($conn,$VNumber);


        $sql = "INSERT INTO eventlogin (LoginDate, VNumber, FirstName) VALUES ('$LoginDate', '$VNumber', '$FirstName')";
		 
        $result = mysqli_query($conn,$sql);
		
        if($result){
            echo "<div class='personal'>
<h3>You Are Logged Into Today's Events.</h3></div>";
        }
    }else{ 
?>


</div>
<?php } ?>




	</main>
      	</div>
	    <footer class="container-fluid"> 
       Copyright &copy; 2022 Trojan Gaming Club
      <br/>
      <a href="">TrojanGamingClub@VSU.com</a>
	</footer>
	
	 <script src="js/jquery.min.js"> </script>
    <script src="js/popper.min.js"> </script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>