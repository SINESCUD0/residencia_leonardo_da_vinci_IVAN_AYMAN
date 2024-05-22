<?php

   include_once('session.php');

   include_once('../models/welcome_model.php');

   

	$idUser = $_SESSION['id_user'];



	$datos = rolUsuario($idUser, $conn);

	$rolUsuario = $datos['rol'];



	//para el CHART

	$totalHabitaciones = totalHabitaciones($conn);

	$totalPersonal = totalPersonal($conn); 

	$totalResidente = totalResidente($conn); 

	$habitacionesOcupadas= habitacionesOcupadas($conn);

  

	//para las busquedas

	$listadoPersonalActivo = listadoPersonalActivo($conn); //solo activo

	$listadoPersonal = listadoPersonal($conn); //activo e inactivo

	$listadoPlantas = listadoPlantas($conn);

	$listadoResidentes = listadoResidentes($conn); //activo e inactivo

	$listadoResidentesActivos = listadoResidentesActivos($conn);

	$listadoHabitaciones = listadoHabitaciones($conn); //carga todas las habitaciones

	$listadoHabitacionesOcupadasConResidentes = listadoHabitacionesOcupadasConResidentes($conn); //solo las ocupadas

	$habitacioneslibresIndividuales = habitacionesLibresPorTipo($conn,1); //carga las habitaciones individuales que estan libres

	$habitacioneslibresDobles = habitacionesLibresPorTipo($conn,2); //carga las habitaciones dobles que estan libres

  

	//carga los turnos creados en la BD

	$listadoTurnos = listadoTurnos($conn);



	//Carrito// - UPDATE

	$listadoProveedor = listaProveedorAlimentacion($conn);

	$listaHiguiene = listaProveedorHiguiene($conn);

	$listaLimpieza = listaProveedorLimpieza($conn);



     //CARGO LA TABLA hidrico_entrada EN LA BD PARA EL DESPLEGABLE ENTRADAS HIDRICO 
     $listaEntradasHidrico = listadoEntradasHidrico($conn);
   
 
    //CARGO LA TABLA hidrico_salida EN LA BD PARA EL DESPLEGABLE SALIDAS HIDRICO
	 $listaSalidasHidrico = listadoSalidasHidrico($conn);


	//



	include_once('../views/welcome.php');

	

	if(isset($_GET["task"])){

		if($_GET["task"] == "listarResidentes"){

			$listadoResidentesActivos = listadoResidentesActivos($conn);

			$listadoHabitacionesOcupadasConResidentes = listadoHabitacionesOcupadasConResidentes($conn);

		}

		else if($_GET["task"] == "listarPersonal"){

			$listadoPersonalActivo = listadoPersonalActivo($conn);

			$listadoPersonal = listadoPersonal($conn);

		}

	}



	

   

?>