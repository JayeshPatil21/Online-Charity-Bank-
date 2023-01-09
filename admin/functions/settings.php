

<?php 

// Database Connectuion
require_once "dbc.php";

// UPDATE PASSWORD

	
	if (isset($_POST['submit'])) {

       
		$password = password_hash($_POST['password'],PASSWORD_BCRYPT,array('cost'=>12));

		$user = $_POST["user"];

			$sql = "UPDATE login SET password = '$password' WHERE user = '$user' ";

	$stmt = $db->prepare($sql);


    try {
      $stmt->execute([$password]);
      header('Location:../index.php?set');

      }

     catch (Exception $e) {
        $e->getMessage();
        echo "Error";
    }

}


// UPDATE PASSWORD


?>