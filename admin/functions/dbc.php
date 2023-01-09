<?php

  /* DATABASE CONNECTION*/

  
        $db['db_host'] = 'localhost';
        $db['db_user'] = 'root';
        $db['db_pass'] = "";
        $db['db_name'] = 'cb';

      foreach($db as $key=>$value){
          define(strtoupper($key),$value);
      }
      global 	$conn;
	  $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
      if(!$conn){
          die("Cannot Establish A Secure Connection To The Host Server At The Moment!");
      }

      try{
          $db = new PDO('mysql:dbhost=localhost;dbname=cb;charset=utf8','root',"");


      }
      catch(Exception $e){

          die('Cannot Establish A Secure Connection To The Host Server At The Moment!');
      }

      /*DATABASE CONNECTION */



?>