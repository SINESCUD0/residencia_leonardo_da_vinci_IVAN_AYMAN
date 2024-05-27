<?php
//require $_SERVER['DOCUMENT_ROOT']."/residencialeonardo.atwebpages.com/db/config.php";
// $tabla = "";
//HE CAMBIADO LAS CONSULTAS, YA QUE UTILIZA MSQLI Y CON LO QUE VIMOS CON ALFONSO, ES DECIR, EL PREPARE, EL BINDPARAM, EL EXECUTE, ETC... NO CHANA
function obtenerHabitaciones($conn,$piso){
	$objetosArray = array();
	$piso .= "%";
	$sql = "SELECT * FROM habitacion WHERE id_habitacion LIKE '$piso' ORDER BY id_habitacion;";
	$result = mysqli_query($conn,$sql);
	$informacion = mysqli_fetch_all($result,MYSQLI_ASSOC);
	foreach ($informacion as $row) {
		$idHabitacion = $row['id_habitacion'];
		$numeroCamas = $row['num_camas'];
		$objetosArray[$idHabitacion] = [];
		$sql2 = "SELECT residente.nombre, residente.apellido1, residente.apellido2, historico_res_hab.id_habitacion, historico_res_hab.fecha_fin, historico_res_hab.id_residente, residente.dni_residente FROM historico_res_hab INNER JOIN residente ON residente.id_residente = historico_res_hab.id_residente WHERE historico_res_hab.id_habitacion = '$idHabitacion';";
		$result2 = mysqli_query($conn,$sql2);
		$camas = mysqli_fetch_all($result2,MYSQLI_ASSOC);
		foreach($camas as $elementos){
			$nombre = $elementos['nombre'];
			$apellido1 = $elementos['apellido1'];
			$apellido2 = $elementos['apellido2'];
			$nombreResidente = [$apellido1,$apellido2];
			$id_habitacion = $elementos['id_habitacion'];
			$fecha_fin = $elementos['fecha_fin'];
			$id_residente = $elementos['id_residente'];
			$dni_residente = $elementos['dni_residente'];
			if(is_null($fecha_fin)){
				$objetosArray[$id_habitacion][$id_residente] = [join(" ",$nombreResidente),$dni_residente];
			}
		}
	}
	return $objetosArray;
}

function mostrarTabla($array){
	$tabla = "<div style='display:grid;grid-template-columns:repeat(5, 300px);grid-gap:10px;'>";
	foreach ($array as $idhabitacion => $elemento) {
		$tabla .= "<div class='card'>";
		$tabla .= "<div class='card-body'>";
		$tabla .= "<h5 id='".substr($idhabitacion,0,1)."' class='card-title'>".$idhabitacion."</h5>";
		if(!empty($elemento)){
			foreach($elemento as $idresidente => $elemento){
				// CORRECTO
				// $tabla .= "<div id='".$idresidente."PRUEBA'>".$elemento[0]."<br/><button id='".$idresidente."' class='boton_residente'>".$elemento[0]."<br/>".$elemento[1]."</button><br/><button id='constantesVitales'>Vitales</button><button id='eliminacion'>Eliminar</button><button id='alimentacion'>Alimentacion</button><button id='movilizacion'>Movilizacion</button><button id='higiene'>Higiene</button><button id='medicacion'>Medicación</button><button id='sleep'>Sueño/Descanso</button><button id='incidencia'>Incidencia</button></div>";
				
				// PRUEBAS
					// Información oculta útil
					$tabla .= "<input type='hidden' id='dni' value='$elemento[1]'/> <input type='hidden' id='id_residente' value='$idresidente'/>";
					$tabla .= "<div id='".$idresidente."'>".$elemento[0]."<br/><input type='button' id='".$idresidente."' class='boton_residente' value='$elemento[0]'><br/>".$elemento[1]."</input><br/>
																																																<input type='button' value='Vitales' id='boton-constantes'></input>
																																																<input type='button' value='Eliminar' id='boton-eliminacion'></input>
																																																<input type='button' value='Alimentacion' id='boton-alimentacion'></input>
																																																<input type='button' value='Movilizacion' id='boton-movilizacion'></input>
																																																<input type='button' value='Higiene' id='boton-higiene'></input>
																																																<input type='button' value='Medicación' id='boton-medicacion'></input>
																																																<input type='button' value='Sueño/Descanso' id='boton-descanso'></input>
																																																<input type='button' value='Incidencia' id='boton-incidencia'></input></div>";
				// FIN PRUEBAS
			}
		}else{
			// CORRECTO
			// $tabla .= "<div><button id='altaResidente'>Alta Residente</button></div>";

			// PRUEBAS
			$tabla .= "<div><input type='button' value='Alta Residente' id='altaResidente'></input></div>";
			// FIN PRUEBAS
		}
		$tabla .= "</div></div>";
	}
	$tabla .= "</div>";
	return $tabla;
}

?>