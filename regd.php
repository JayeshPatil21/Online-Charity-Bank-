?php

require_once "functions/dbc.php";
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
		$up= password_hash($_POST['password'],PASSWORD_BCRYPT,array('cost'=>12));
		$at="User";
	
		$qu="insert into login values('$us','$up','$at')";
		mysqli_query($conn,$qu);
		header("location:Login2.php");
		
	}
	
}
?>