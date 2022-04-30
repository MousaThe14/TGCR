<!-- This HTML creates a website for a coffee shop that as four different link pages which are styled using css.-->

<?php
require("db.php");
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
      <img src="SchoolLogo.png" alt="logocup" align="left"height="125" width="125";/> <!-- add image to the left of webpage with a width of 150 and height of 150.-->
    <h1>Trojan Gaming Club</h1>
  </header>
  
  
<div id="wrapper">  
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <ul class="navbar-nav"> 
      
			  <li="nav-item">
			    <a href="Register.html">../Register</a>
			  </li>
			  
        <li="nav-item">
          <a href="EventLogin.html">../Event Login</a>
          </li>
          
            <!-- &nbsp means non-breaking space which is a space that will not break into a new line-->
            
        <li="nav-item">
          <a href="AdminLogin.html">../Administration Dashboard</a>
          </li>
          
      </ul>
    </nav>
    </div>
    
    <main>
	
    <h2 class="">Add Member</h2>

<div class="container">
   
<?php
require('db.php');

if (isset($_POST['VNumber'])){

 $FirstName = stripslashes($_REQUEST['FirstName']);
 $FirstName = mysqli_real_escape_string($conn,$FirstName); 
  $LastName = stripslashes($_REQUEST['LastName']);
 $LastName = mysqli_real_escape_string($conn,$LastName); 
 $VNumber = stripslashes($_REQUEST['VNumber']);
 $VNumber = mysqli_real_escape_string($conn,$VNumber);
  $Phone = stripslashes($_REQUEST['Phone']);
 $Phone = mysqli_real_escape_string($conn,$Phone);
   $Email = stripslashes($_REQUEST['Email']);
 $Email = mysqli_real_escape_string($conn,$Email);
 $InventoryContributor= $_REQUEST['InventoryContributor'];
 $Admin= $_REQUEST['Admin'];
 $ContactPhone= $_REQUEST['ContactPhone'];
 
 $ContactEmail= $_REQUEST['ContactEmail'];

 


        $sql = "INSERT INTO member(VNumber, FirstName, LastName, Email, Phone, Admin, InventoryContributor, ContactPhone, ContactEmail) VALUES ('$VNumber', '$FirstName', '$LastName', '$Email', '$Phone', '$Admin', '$InventoryContributor', '$ContactPhone', '$ContactEmail')";
		 
        $result = mysqli_query($conn,$sql);
		
        if($result){
            echo "<div class='personal'>
<h3>Member Added.</h3></div>";
        }
    }else{ echo "Error: " . $sql . "<br>" . $conn->error;
?>


</div>
<?php } ?>


		</div>
			</main>
		
	    <footer> <!--The <footer> tag defines a footer for a document or section.-->
       Copyright &copy; 2022 Trojan Gaming Club
      <br/>
      <a href="">TrojanGamingClub@VSU.com</a>
	</footer>
</body>
</html>