<?php

ob_start();
// require_once "functions/db.php";
require_once "functions/dbc.php";
// Initialize the session

session_start();

// If session variable is not set it will redirect to login page

if(!isset($_SESSION['user']) || empty($_SESSION['user'])){

  header("location: login.php");

  exit;
}

$user = $_SESSION['user'];

 header('content-type:image/jpeg');
$font =dirname(__FILE__) . '/BRUSHSCI.TTF';

//echo $font;
$image=imagecreatefromjpeg("certificate.jpg");
$color=imagecolorallocate($image,19,21,22);
$name=$user;
imagettftext($image, 40, 0, 380, 420, $color, $font, $name);

$date = date('d-m-Y');
$filetime=time().''.$user;
imagettftext($image, 20, 0, 450, 600, $color, $font, $date);
imagejpeg($image,"Certificate/".$filetime.".jpeg");

imagedestroy($image);   
header("location: index.php");
?>