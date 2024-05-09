<?php
	include_once("../db/config.php");
	//include_once('../views/login.php');
	include_once('../models/login.php');
	

if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

      $result = resultado($myusername, $mypassword, $conn);

      if($result != 0) {
		 session_start(); //poner session_start en el controlador y en el archivo session
		 $_SESSION['id_user'] = $result;
		 //header ("location: ../controllers/welcome?id=".$result."");
		 header ("location: ./welcome.php?id=".$result."");
      }else {
      	include_once('../views/errorlogin.php');
      	include_once('../views/login.php');
      }
   }
   include_once('../views/login.php');


?>


