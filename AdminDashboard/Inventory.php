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
      	
      	

            <div class="Inventory_details">
                <table class="table table-bordered" style="width:50%"align="center">
                    <thead>  <!--The <thead> tag is used to group header content in an HTML table.-->
                        <tr>
                            <th><strong>Console</strong></th>
                            <th><strong>Owner V-Number</strong></th>
                            <th><strong>Controllers</strong></th>
                            <th><strong>Edit/Delete</strong></th>
                        </tr>
                    </thead>
				
				<tbody>
				
          <?php
          
          
$dbserver="localhost";
$dbuser="root";
$dbpw="";
$dbname="tgcr";
$conn=mysqli_connect($dbserver,$dbuser,$dbpw,$dbname);

          
          
          
          $sel_query="SELECT * FROM consoles ORDER BY model desc;";
          $result = mysqli_query($conn,$sel_query);
          
            
            while($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <td align="center"><?php echo $row["Model"]; ?></td>
                <td align="center"><?php echo $row["VNumber"]; ?></td>
                <td align="center"><?php echo $row["Controllers"]; ?></td>
                <td align="center"><a href="edit.php?table=consoles&id=<?php echo $row["VNumber"]; ?>">Edit</a>
                <a href="delete.php?table=consoles&id=<?php echo $row["VNumber"]; ?>">Delete</a>
                </td>
              </tr>
              <?php }?>
          </tbody>

				</table>

	
	
				<br><br><br><br><br>
	
        <form action="AddInventory.php" method="post" class="form-inline">
          <div id="input">
            <!-- adding input types -->
            <div class="input1">
              <label for="Model">Console</label><br />
              <select type="text" name="Model" id="Model" placeholder ="Select Console" required >
              
              <option value="Switch">Nintendo Switch</option>
			<option value="Wii">Wii</option>
			<option value="Wii U">Wii U</option>
			<option value="Xbox One">Xbox One</option>
			<option value="Xbox Series X">Xbox Series X</option>
			<option value="Xbox Series S">Xbox Series S</option>
			<option value="PS3">Playstation 3</option>
			<option value="PS4">Playstation 4</option>
			<option value="PS5">Playstation 5</option>
			<option value="PC">Gaming PC</option>
              </select>
            </div>
            <!-- adding input types -->
            <div class="input1">
              <label for="VNumber">V-Number</label><br />
              <input type="text" id="VNumber" name="VNumber" placeholder ="Enter your V-number" required/>
            </div>
            <!-- adding input types -->
            <div class="input1">
              <label for="Controllers">Controllers</label><br />
              <input type="number" name="Controllers" id="Controllers" placeholder ="Number of Controllers" required/>
            </div>
          </div>
          
          <!-- adding button -->
          <button id="button1">Add</button>
          </form>
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