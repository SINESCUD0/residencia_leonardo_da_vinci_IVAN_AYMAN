<?php
// require $_SERVER['DOCUMENT_ROOT']."/residencialeonardo.atwebpages.com/db/config.php";
// $tabla = "";

echo "mierda";
	function obtenerHabitaciones($piso){
		$objetosArray = array();
		$piso .= "%";
		try {
			$obtenerInfo = $conn->prepare("SELECT * FROM habitacion WHERE id_habitacion LIKE :piso ORDER BY id_habitacion;");
			$obtenerInfo->bindParam(':piso', $piso);
			$obtenerInfo->execute();
			$informacion=$obtenerInfo->fetchAll();
			foreach ($informacion as $row) {
				$idHabitacion = $row[0];
				$numeroCamas = $row[1];
				$objetosArray[$idHabitacion] = [];
				$obtenerCamas = $conn->prepare("SELECT residente.nombre, residente.apellido1, residente.apellido2, historico_res_hab.id_habitacion, historico_res_hab.fecha_fin, historico_res_hab.id_residente FROM historico_res_hab INNER JOIN residente ON residente.id_residente = historico_res_hab.id_residente WHERE historico_res_hab.id_habitacion = :habitacion;");
				$obtenerCamas->bindParam(':habitacion', $idHabitacion);
				$obtenerCamas->execute();
				$camas=$obtenerCamas->fetchAll();
				foreach($camas as $elementos){
					$nombre = $elementos[0];
					$apellido1 = $elementos[1];
					$apellido2 = $elementos[2];
					$nombreResidente = [$nombre,$apellido1,$apellido2];
					$id_habitacion = $elementos[3];
					$fecha_fin = $elementos[4];
					$id_residente = $elementos[5];
					if(is_null($fecha_fin)){
						$objetosArray[$id_habitacion][$id_residente] = [join(" ",$nombreResidente)];
					}
				}
			}
			return $objetosArray;
		} catch (PDOException $ex) {
			echo $ex->getMessage();
			return false;
		}
	}





	function mostrarTabla($array){
	
		foreach ($array as $idhabitacion => $elemento) {
			$tabla .= "<div id='planta' class='".substr($idhabitacion,0,1)."'>";
			$tabla .= "<div id='numeroHabitacion'>".$idhabitacion."</div>";
			foreach($elemento as $idresidente => $elemento){
				$tabla .= "<div id='".$idresidente."'>".$elemento[0]."</div>";
			}
			$tabla .= "</div>";
		}
		return $tabla;
	}

?>