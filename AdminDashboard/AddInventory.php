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
	  	<meta http-equiv = "refresh" content = "2; url = Inventory.html" />
	  	
	  	<link rel="stylesheet" href="../css/bootstrap.min.css" />
  	<link rel="stylesheet" href="../css/tgcr.css" />
  	
  	
	<style>
	 /*  styling form by adding border and changing margin etc */
     
      /* styling input */
      /* changing display type for input element */
      #input {
        display: flex;
        align-items: center;
        margin: 10px;
		
      }
      .input1 {
        padding-left: 15px;
		
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
      	
      	

            <?php
require('db.php');

if (isset($_POST['VNumber'])){

 $Model = stripslashes($_REQUEST['Model']);
 $Model = mysqli_real_escape_string($conn,$Model); 
 $VNumber = stripslashes($_REQUEST['VNumber']);
 $VNumber = mysqli_real_escape_string($conn,$VNumber);
  $Controllers = stripslashes($_REQUEST['Controllers']);
 $Controllers = mysqli_real_escape_string($conn,$Controllers);


        $sql = "INSERT INTO consoles(VNumber, Model, Controllers) VALUES ('$VNumber', '$Model', '$Controllers')";
		 
        $result = mysqli_query($conn,$sql);
		
        if($result){
            echo "<div class='personal'>
<h3>Inventory added.</h3></div>";
        }
    }else{ echo "Error: " . $sql . "<br>" . $conn->error;
?>


</div>
<?php } ?>
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