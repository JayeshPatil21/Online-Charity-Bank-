
<?php 

 
require_once "dbc.php";

if (isset($_POST["SID"])) {

	$DName = $_POST["SID"];


    echo $DName;
	$sql = "DELETE FROM donationreg Where SID=?";
Echo $sql;
$stmt = $db->prepare($sql);


    try {
      $stmt->execute([$DName]);
      
      header('Location:../DonationDEL.php?deleted');

      }

     catch (Exception $e) {
        $e->getMessage();
        echo "Error";
    }

}
else {
	header('Location:../DonationDEL.php?del_error');
}

	

?>