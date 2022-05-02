<!-- This HTML creates a website for a coffee shop that as four different link pages which are styled using css.-->
<?php
require('db.php');
include("auth.php");

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
	
	
	<fieldset class="fieldsetborder"> 
	  
	  
	<p>Welcome, <?php echo $_SESSION['VNumber'];?>. <br> Select from the following.</p>
  <br>
	<p><a class="btn btn-light" href="Membership.php" role="button" type="link">Manage Membership</a>
	<br> <!--The <button> tag defines a clickable button.-->
	
	<p><a class="btn btn-light" href="Inventory.php" role="button  type="link"">Manage Equipment</a>
	<br>
	
	<p><a class="btn btn-light" href="Attendance.php" role="button type="link"">View Attendance Logs</a>
	<br><br><br>
	
	<a class="btn btn-light" href="logout.php" role="button" type="logout">Log Out</a> <!--The <button> tag defines a clickable button.-->
	<br><br/>


</fieldset>


		</main>	
				</div>
				
				
	    <footer> <!--The <footer> tag defines a footer for a document or section.-->
       Copyright &copy; 2022 Trojan Gaming Club
      <br/>
      <a href="">TrojanGamingClub@VSU.com</a>
	</footer>
	
		  <script src="../js/jquery.min.js"> </script>
    <script src="../js/popper.min.js"> </script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>