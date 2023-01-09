
<?php 

require_once "dbc.php";


  // session_start();

  // // If session variable is not set it will redirect to login page

  // if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
  //     header('Location:../login.php');
  //   exit;

  // }

  // $email = $_SESSION['email'];
  $DName = $_POST['DName'];
  $EID = $_POST['EID'];
  $AMT=0;
  // $content = $_POST['content'];
  $FQ="select * from donationreg";
  $FQ2=mysqli_query($conn,$FQ);
    $rc=mysqli_num_rows($FQ2);
    $SID=$rc+1;
    //echo $rn3;
    
  

  if (isset($_POST["savedata"])) {
    // Add task to DB
    $sql = "INSERT INTO donationreg(DName,EID,AMT,SID)
    VALUES (?,?,?,?)";
echo $sql;
    $stmt = $db->prepare($sql);


    try {
      $stmt->execute([$DName, $EID,$AMT,$SID]);
      header('Location:../index.php');

      }

     catch (Exception $e) {
        $e->getMessage();
        echo "Error";
    }
  }













?>