
<?php 

 
require_once "dbc.php";

if (isset($_POST["user"])) {

	$user = $_POST["user"];

	$sql = "DELETE FROM login WHERE user=?";
// echo $sql;
$stmt = $db->prepare($sql);


    try {
      $stmt->execute([$user]);
    header('Location:../users.php?deleted');

      }

     catch (Exception $e) {
        $e->getMessage();
        echo "Error";
    }

}
else {
	header('Location:../users.php?del_error');
}

	

?>