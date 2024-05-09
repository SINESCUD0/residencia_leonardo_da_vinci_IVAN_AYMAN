<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);	
error_reporting (E_ALL); 

include_once('../db/config.php');
include_once("../models/json.class.php");
require("../models/habitacion_model.php");
require("../models/residente_model.php");
require("../models/CRUD_model.php");

$order = isset($_POST["order"]) ? " order by " . $_POST["order"] : "";
$limit = isset($_POST["limit"]) ? $_POST["limit"] : "";

if(isset($_GET["task"])){
	if($_GET["task"] == "getHabitacionesLibres"){
		if($_POST['tipo']=='INDIVIDUAL')
			echo habitacionesLibresPorTipo($conn,1); //carga las habitaciones individuales que estan libres
		else
			echo habitacionesLibresPorTipo($conn,2); //carga las habitaciones dobles que estan libres
	}else if($_GET["task"] =="consultarHabitacion")
		echo consultarHabitacion($conn,$_POST["id_residente"],$order,$limit);
	
	else if($_GET["task"] =="cambiarHabitacion"){
		$idResidente=$_POST['id_residente'];
		$idHabitacion = $_POST['id_habitacion'];
		$idResponsable = $_POST['id_responsable'];
		echo cambiarHabitacion($conn,$idResidente,$idHabitacion,$idResponsable);		
	}

}

?>