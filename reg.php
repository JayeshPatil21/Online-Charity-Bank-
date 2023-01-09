<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Programs</title>

  <!-- Googlefont -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- CSS style sheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <!-- fontawesome -->
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js" charset="utf-8"></script>

  <!-- bootstrap script -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>

  <!-- Navigation/ Title  -->

<body>
<header>
  <h1> CHARITY <span> BANK </span></h1>
  <nav>
    <ul>
      <li><a href="index_after_login.html">Home</a></li>
      <li><a href="about_after_login.html">About</a></li>
      
      <li><a href="contact_after_login.html">Contact</a></li>
	  <li><a href="login2.php">Login</a></li>
    
    </ul>
  </nav>
</header>
</body>

<form action="reg.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">UserName</label>
      <input type="text" class="form-control" id="inputEmail4" name="username" placeholder="UserName">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password">
    </div>
	
  </div>
  <div class="form-group col-md-6">
      <label for="inputPassword4">ReTypePassword</label>
      <input type="password" class="form-control" id="inputPassword4" name="Retypepassword" placeholder="Password">
    </div>
    
  
  <button type="submit" class="btn btn-primary" name="sign">Sign in</button>

<?php

require "dbc.php";
if(isset($_POST['sign']))
{
	if($_POST['username']=="" && $_POST['password']=="" && $_POST['Retypepassword']=="")
	{
		echo '<script>alert("plase Enter the username and password")</script>';
	}
	elseif($_POST['password']!=$_POST['Retypepassword'])
	{
		echo '<script>alert("Pasword is not same plase Re Enter the Password")</script>';
	}
	else
	{
		$us=$_POST['username'];
		$up=$_POST['password'];
		$at="User";
		
		$qu="insert into login values('$us','$up','$at')";
		mysqli_query($conn,$qu);
		header("location:Login2.php");
		
	}
	
}
?>
</form>
</body>
</html>
