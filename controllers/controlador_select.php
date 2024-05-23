<?php
include_once("../db/config.php");
include_once('../models/modelo_habitacion.php');
$tabla = "";
if(isset($_POST['select'])){
	$piso = $_POST['select'];
	$habitaciones = obtenerHabitaciones($conn,$piso);
	$tabla = mostrarTabla($habitaciones);
	echo $tabla;
}
?>