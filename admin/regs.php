
<?php 
ob_start();
session_start();
require_once "functions/dbc.php";
//echo "not";

	
	if(isset($_POST['Reg'])){
	
		header("location:../UREG.php");
			  
}

?>