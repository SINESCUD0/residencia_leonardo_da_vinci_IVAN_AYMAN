<?php

ini_set('display_errors',1);

ini_set('display_startup_errors',1);	

error_reporting (E_ALL); 



include_once('../db/config.php');

require("../models/tablas_model.php");



if(isset($_REQUEST["funcion"])){

	if($_REQUEST["funcion"] == "personalhistorico")

		echo tablaPersonalHistorico($conn);

	

	else if($_REQUEST["funcion"] == "personalactivo")

		echo tablaPersonalActivo($conn);

    ///Personal hisorico limpieza

    else if($_REQUEST["funcion"] == "personalhistoricolimpieza")

		echo tablaPersonalHistoricoLimpieza($conn);

    ///Personal-Limpieza

    else if($_REQUEST["funcion"] == "personalactivolimpieza")

		echo tablaPersonalActivoLimpieza($conn);

    /// Personal historico mantenimiento

    else if($_REQUEST["funcion"] == "personalhistoricomantenimiento")

		echo tablaPersonalHistoricoMantenimiento($conn);

    /// Personal  mantenimiento activo

    else if($_REQUEST["funcion"] == "personalactivomantenimiento")

		echo tablaPersonalActivoMantenimiento($conn);    

    /// Personal historico resto

    else if($_REQUEST["funcion"] == "personalhistoricoresto")

		echo tablaPersonalHistoricoResto($conn);

    /// Personal resto activo

    else if($_REQUEST["funcion"] == "personalactivoresto")

		echo tablaPersonalActivoResto($conn);

    ///

	else if($_REQUEST['funcion'] == "datoscontacto"){ //Datos de contacto de cada residente

		$idResidente = $_REQUEST['idResidente'];	

		echo tablaDatosContacto($conn,$idResidente);

	}

	else if($_REQUEST['funcion'] == "residentehistorico")

		echo tablaDatosResidenteHistorico($conn);

	

	else if($_REQUEST['funcion'] == "residentealta")

		echo tablaDatosResidenteAlta($conn);

	

	else if($_REQUEST['funcion'] == "historicoincidencias")

		echo tablaDatosIncidencias($conn);
	
	
	else if($_REQUEST['funcion'] == "paihistorico")

		echo tablaDatosHistorialPai($conn);

	

	else if($_REQUEST['funcion'] == "consultamedica"){

		$idResidente = $_REQUEST['idResidente'];

		echo tablaDatosConsultaMedica($conn,$idResidente);

	}

	else if($_REQUEST['funcion'] == "historicoHabitaciones"){

		echo tablaDatosHabitaciones($conn);

	}

	else if($_REQUEST['funcion'] == "tratamientos"){

		$idResidente = $_REQUEST['idResidente'];

		echo tablaDatosTratamientos($conn,$idResidente);

	}

	else if($_REQUEST['funcion'] == "horariopersonal"){

		$idPersonal = $_REQUEST['idPersonal'];

		echo tablaHorarioPersonal($conn,$idPersonal);

	}

	else if($_REQUEST['funcion'] == "historicoconstante"){

		$idResidente = $_REQUEST['idResidente'];
		 $fecha = $_REQUEST['mifecha'];

		echo tablaDatosRegistroConstantes($conn,$idResidente,$fecha);
		

	}else if($_REQUEST['funcion'] == "pintarintervalo"){

		$idResidente = $_REQUEST['idResidente'];
		 $fechaDesde = $_REQUEST['mifecha1'];
		 $fechaHasta = $_REQUEST['mifecha2'];

		echo tablaDatosRegistroConstantesIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta);

	}
	else if($_REQUEST['funcion'] == "historicoeliminacion"){

		$idResidente = $_REQUEST['idResidente'];
		 $fecha = $_REQUEST['mifecha'];

		echo tablaDatosRegistroEliminacion($conn,$idResidente,$fecha);
		

	}else if($_REQUEST['funcion'] == "historicoeliminacionintervalo"){

		$idResidente = $_REQUEST['idResidente'];
		 $fechaDesde = $_REQUEST['mifecha1'];
		 $fechaHasta = $_REQUEST['mifecha2'];

		echo tablaDatosRegistroEliminacionIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta);
		

	}
	else if($_REQUEST['funcion'] == "historicoalimentacion"){

		$idResidente = $_REQUEST['idResidente'];
		 $fecha = $_REQUEST['mifecha'];

		echo tablaDatosRegistroAlimentacion($conn,$idResidente,$fecha);
		

	}else if($_REQUEST['funcion'] == "historicoalimentacionintervalo"){

		$idResidente = $_REQUEST['idResidente'];
		 $fechaDesde = $_REQUEST['mifecha1'];
		 $fechaHasta = $_REQUEST['mifecha2'];

		echo tablaDatosRegistroAlimentacionIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta);
		
	}
	else if($_REQUEST['funcion'] == "historicomovilizacion"){

		$idResidente = $_REQUEST['idResidente'];
		 $fecha = $_REQUEST['mifecha'];

		echo tablaDatosRegistroMovilizacion($conn,$idResidente,$fecha);
		

	}else if($_REQUEST['funcion'] == "historicomovilizacionintervalo"){

		$idResidente = $_REQUEST['idResidente'];
		 $fechaDesde = $_REQUEST['mifecha1'];
		 $fechaHasta = $_REQUEST['mifecha2'];

		echo tablaDatosRegistroMovilizacionIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta);
	}
	else if($_REQUEST['funcion'] == "historicohigiene"){

		$idResidente = $_REQUEST['idResidente'];
		 $fecha = $_REQUEST['mifecha'];

		echo tablaDatosRegistroHigiene($conn,$idResidente,$fecha);
		

	}else if($_REQUEST['funcion'] == "historicohigieneintervalo"){

		$idResidente = $_REQUEST['idResidente'];
		 $fechaDesde = $_REQUEST['mifecha1'];
		 $fechaHasta = $_REQUEST['mifecha2'];

		echo tablaDatosRegistroHigieneIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta);
	}

	else if($_REQUEST['funcion'] == "historicomedicacion"){

		$idResidente = $_REQUEST['idResidente'];
		 $fecha = $_REQUEST['mifecha'];

		echo tablaDatosRegistroMedicacion($conn,$idResidente,$fecha);
		

	}else if($_REQUEST['funcion'] == "historicomedicacionintervalo"){

		$idResidente = $_REQUEST['idResidente'];
		 $fechaDesde = $_REQUEST['mifecha1'];
		 $fechaHasta = $_REQUEST['mifecha2'];

		echo tablaDatosRegistroMedicacionIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta);
	}

	else if($_REQUEST['funcion'] == "historicodescanso"){

		$idResidente = $_REQUEST['idResidente'];
		 $fecha = $_REQUEST['mifecha'];

		echo tablaDatosRegistroDescanso($conn,$idResidente,$fecha);
		

	}else if($_REQUEST['funcion'] == "historicodescansointervalo"){

		$idResidente = $_REQUEST['idResidente'];
		 $fechaDesde = $_REQUEST['mifecha1'];
		 $fechaHasta = $_REQUEST['mifecha2'];

		echo tablaDatosRegistroDescansoIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta);
	}

	else if($_REQUEST['funcion'] == "historicoincidencia"){

		$idResidente = $_REQUEST['idResidente'];
		 $fecha = $_REQUEST['mifecha'];

		echo tablaDatosRegistroIncidencia($conn,$idResidente,$fecha);
		

	}else if($_REQUEST['funcion'] == "historicoincidenciaintervalo"){

		$idResidente = $_REQUEST['idResidente'];
		 $fechaDesde = $_REQUEST['mifecha1'];
		 $fechaHasta = $_REQUEST['mifecha2'];

		echo tablaDatosRegistroIncidenciaIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta);
	}

}



?>