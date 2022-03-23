<script src="myscript.js"></script>

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

if (isset($_REQUEST['username'])){

 $username = stripslashes($_REQUEST['username']);

 $username = mysqli_real_escape_string($conn,$username); 
 $firstname = stripslashes($_REQUEST['firstname']);
 $firstname = mysqli_real_escape_string($conn,$firstname);
 $lastname = stripslashes($_REQUEST['lastname']);
 $lastname = mysqli_real_escape_string($conn,$lastname);
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($conn,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($conn,$password);
$phone = stripslashes($_REQUEST['phone']);
$phone = mysqli_real_escape_string($conn,$phone);
$address = stripslashes($_REQUEST['address']);
$address = mysqli_real_escape_string($conn,$address);
$addresstwo = stripslashes($_REQUEST['addresstwo']);
$addresstwo = mysqli_real_escape_string($conn,$addresstwo);
$state = stripslashes($_REQUEST['state']);
$state = mysqli_real_escape_string($conn,$state);
$zipcode = stripslashes($_REQUEST['zipcode']);
$zipcode = mysqli_real_escape_string($conn,$zipcode);


 $trn_date = date("Y-m-d H:i:s");
	
        $query = "INSERT into `apolocust` (username, firstname, lastname, userpassword, email, phone, address, addresstwo, usstate, zipcode, trn_date)VALUES ('$username', '$firstname', '$lastname', '".md5($password)."', '$email', '$phone', '$address', '$addresstwo', '$state', '$zipcode', '$trn_date')";
		
        $result = mysqli_query($conn,$query);
		
        if($result){
            echo "<div class='personal'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='custlogin.php'>Login</a></div>";
        }
    }else{ 
?>
<h1>Registration</h1>
<div class="personal">

<fieldset>
<legend>User Info</legend><!-- Name and Login Info-->
<form name="registration" action="" method="post">
<input type="text" name="firstname" placeholder="First Name" required /><br>
<input type="text" name="lastname" placeholder="Last Name" required /><br>
<input type="text" name="username" placeholder="Username" required /><br>
<input type="email" name="email" placeholder="Email" required /><br>
<input type="password" name="password" placeholder="Password" required /><br>

</fieldset>

<!--Address and contact info-->
<fieldset>
<legend>Contact Info</legend>
<input type="text" name="address" placeholder="Street Address" required /><br>
<input type="text" name="addresstwo" placeholder="Apt/Section/Block/etc" /><br>

	<!-- state list acquired from freeformatter.com/usa-state-list-select.html It's way too much to type in manually one by one-->
<select type="text" name="state" required>
			<option value=""> Please Select State </option>
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">District Of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
		</select>
		<br>
		<input type="text" name="zipcode" placeholder="Zip Code" required /> <br>
<input type="tel" name="phone" placeholder="Phone Number" required /> <br>


</fieldset>

<fieldset>
<input class="btn btn-primary" type="submit" name="submit" value="Register" /><br>


</form>
<p>Already Registered? <a href='custlogin.php'>Login Here</a></p>
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
