<?php
// CONTROLADOR PARA LOS 8 REGISTROS 
// Los task estan en funciones_registros.js
ini_set('display_errors',1);
ini_set('display_startup_errors',1);	
error_reporting (E_ALL); 

include_once('../db/config.php');
include_once("../models/json.class.php");
require("../models/registro_model.php");
require("../models/CRUD_model.php");

$order = isset($_POST["order"]) ? " order by " . $_POST["order"] : "";
$limit = isset($_POST["limit"]) ? $_POST["limit"] : "";

// $listadoResidentesActivos=array();

if(isset($_GET["task"])){ //Una task para cada registro
	//8 REGISTROS. Este es uno de los 8. REGISTRO SUEÑO/DESCANSO
	if($_GET["task"] == "altaRegistroDescanso"){
		echo insertarRegistroDescanso($conn,$_POST,$order,$limit);

	}else if ($_GET["task"] == "altaRegistroConstante"){
		echo insertarRegistroConstante($conn,$_POST,$order,$limit);

	}else if ($_GET["task"] == "altaRegistroEliminacion"){
		echo insertarRegistroEliminacion($conn,$_POST,$order,$limit);	

	}else if ($_GET["task"] == "altaRegistroAlimentacion"){

		echo insertarRegistroAlimentacion($conn,$_POST,$order,$limit);
		
	}else if ($_GET["task"] == "altaRegistroMovilizacion"){
		echo insertarRegistroMovilizacion($conn,$_POST,$order,$limit);

	}else if ($_GET["task"] == "altaRegistroHigiene"){
		echo insertarRegistroHigiene($conn,$_POST,$order,$limit);	

	}else if ($_GET["task"] == "altaRegistroMedicacion"){
		echo insertarRegistroMedicacion($conn,$_POST,$order,$limit);	

	}else if ($_GET["task"] == "altaRegistroIncidencia"){

		echo insertarRegistroIncidencia($conn,$_POST,$order,$limit);	
	}
		
}

// ********************* SE OBTIENE LAS SUMAS DE ENTRADAS, SALIDAS Y B.H.(ENTRADA-SALIDAS)*****************
//Se incertan los ID de entradas y salidas(Son el valor de los desplegables) en una tabla donde se almacenan temporalmente
//A partir del cada de Id_entrada se hace una consulta que devuelve la suma de sus valores en ml
if(isset($_GET['insertTMP']))

{   
  if(isset($_POST['id_hidrico_e']) && !empty($_POST['id_hidrico_e'])){
	$hidricos_e = $_POST['id_hidrico_e'];
	$otros=$_POST['otrosEntradaBox'];
	$id_residente=$_POST["id_residente"];
	
	$datos = insertarDatosParaSuma_Entradas($conn, $hidricos_e, $id_residente, $otros);

	echo json_encode($datos);

  }elseif(isset($_POST['id_hidrico_s']) && !empty($_POST['id_hidrico_s'])){
	$hidricos_s = $_POST['id_hidrico_s'];
	$diuresis=$_POST['diuresis_box'];
    $otros=$_POST['otros_box'];
	$id_residente=$_POST["id_residente"];
	
	
	$datos = insertarDatosParaSuma_Salidas($conn, $hidricos_s, $id_residente, $diuresis, $otros);

	echo json_encode($datos);	
  }
	
}


?>