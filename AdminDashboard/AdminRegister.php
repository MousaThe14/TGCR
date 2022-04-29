<?php
require('db.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta Name="viewport" content="width=device-with, initial-scale=1">
	  <meta Name="Author" content="John Wright, Mousa Tour&eacute;">
	  <meta charset="UTF-8"/>
	  
	  	<link rel="stylesheet" href="../css/bootstrap.min.css" />
  	<link rel="stylesheet" href="../css/tgcr.css" />
  	
  	
  	<title>Trojan Gaming Club</title>
  	
  	<style>
  	fieldset{
  	
  		font-family: sans-serif;
  		font-weight: bold;
  		border-radius: 20px;
  	}
  	</style>
  </head>
  
  
  
  <body>
    
    <header>
      <img src="../SchoolLogo.png" alt="logocup" align="left"height="125" width="125";/> <!-- add image to the left of webpage with a width of 150 and height of 150.-->
    <h1>Trojan Gaming Club</h1>
  </header>
  
  
<div id="wrapper">  
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <ul class="navbar-nav"> 
      
			  <li="nav-item">
			    <a href="../Register.html">Register</a>
			  </li>
			  
        <li="nav-item">
          <a href="../EventLogin.html">Event Login</a>
          </li>
          
            <!-- &nbsp means non-breaking space which is a space that will not break into a new line-->
            
        <li="nav-item">
          <a href="../AdminLogin.html">Administration Dashboard</a>
          </li>
          
      </ul>
    </nav>
    </div>
    
    <main>
	
    <h2 class="">Member Registration</h2>

<div class="container">

	<fieldset class="fieldsetborder"> <!--The <fieldset> tag draws a box around the related elements.-->
<?php
require('db.php');

$VNumber = stripslashes($_REQUEST['VNumber']);
 $VNumber = mysqli_real_escape_string($conn,$VNumber);
  $Password = stripslashes($_REQUEST['Password']);
 $Password = mysqli_real_escape_string($conn,$Password);

 $query = "INSERT INTO admin (VNumber, Password) VALUES ('$VNumber', '".md5($Password)."'); 
          UPDATE member SET admin = 1 WHERE VNumber = $VNumber;";
 

        $result = mysqli_multi_query($conn,$query);
		
        if($result){
            echo "<div class='personal'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='./AdminLogin.html'>Login</a></div>";
    }else{ echo "Error: " . $query . "<br>" . $conn->error;
?>
<?php } ?>

	</fieldset>




		</main>	
				</div>
				
				
	    <footer> <!--The <footer> tag defines a footer for a document or section.-->
       Copyright &copy; 2022 Trojan Gaming Club
      <br/>
      <a href="">TrojanGamingClub@VSU.com</a>
	</footer>
	
		  <script src="js/jquery.min.js"> </script>
    <script src="js/popper.min.js"> </script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>