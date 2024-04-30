<?php

   // define('DB_SERVER', 'fdb1029.awardspace.net');
   define('DB_SERVER', 'localhost');

   // define('DB_USERNAME', '4325628_resileo');
   define('DB_USERNAME', 'root');

   // define('DB_PASSWORD', 'ResidenciaLeonardo2023.');
   define('DB_PASSWORD', 'root');

   //bbdd_residencia-leonardo.sql 
   define('DB_DATABASE', '4325628_resileo');

   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   mysqli_set_charset($conn, "utf8");

   

   if (!$conn) {

		die("Error conexión con la BBDD: " . mysqli_connect_error());

	}

  

?>