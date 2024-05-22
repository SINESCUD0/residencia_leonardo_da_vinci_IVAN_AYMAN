<?php
require_once $_SERVER['DOCUMENT_ROOT']."/residencia_pruebas/modelo/modelo_habitacion.php";
$tabla = "";
if(isset($_POST['select'])){
	$piso = $_POST['select'];
	$habitaciones = obtenerHabitaciones($piso);
	$tabla = mostrarTabla($habitaciones);
	echo $tabla;
}
?>