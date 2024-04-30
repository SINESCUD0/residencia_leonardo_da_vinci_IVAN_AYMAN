<?php
   
   session_start();
   require('../db/config.php');

   $user_check = $_SESSION['id_user'];
     
   $ses_sql = mysqli_query($conn,"SELECT usuario FROM personal WHERE id_personal = '$user_check' AND fecha_baja IS NULL;");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['usuario'];//cambiar por el nombre del campo que tenga la tabla
   
	// $datos = datosWelcome($conn, $cliente);
   
   if(!isset($_SESSION['id_user'])){
      header("location: ../login.php");
      die();
   }
?>