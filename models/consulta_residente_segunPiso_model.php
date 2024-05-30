<?php

function obtenerHabitaciones($piso){

    include('../db/config.php');

	$objetosArray = array();
	$piso .= "%";
	try {
		$obtenerInfo = $conn->prepare("SELECT * FROM habitacion WHERE id_habitacion LIKE '$piso' ORDER BY id_habitacion;");
		$obtenerInfo->execute();

		$info=$obtenerInfo->get_result();
        $informacion=$info->fetch_all(MYSQLI_NUM);
		foreach ($informacion as $row) {
			$idHabitacion = $row[0];
			$numeroCamas = $row[1];
			$objetosArray[$idHabitacion] = [];
			$obtenerCamas = $conn->prepare("SELECT residente.nombre, residente.apellido1, residente.apellido2, historico_res_hab.id_habitacion, historico_res_hab.fecha_fin, historico_res_hab.id_residente, residente.dni_residente FROM historico_res_hab INNER JOIN residente ON residente.id_residente = historico_res_hab.id_residente WHERE historico_res_hab.id_habitacion = '$idHabitacion';");
			$obtenerCamas->execute();

			$infocamas=$obtenerCamas->get_result();
            $camas=$infocamas->fetch_all(MYSQLI_NUM);
			foreach($camas as $elementos){
				$nombre = $elementos[0];
				$apellido1 = $elementos[1];
				$apellido2 = $elementos[2];
				$nombreResidente = [$nombre,$apellido1,$apellido2];
				$id_habitacion = $elementos[3];
				$fecha_fin = $elementos[4];
				$id_residente = $elementos[5];
                $dni_residente = $elementos[6];
				if(is_null($fecha_fin)){
					$objetosArray[$id_habitacion][$id_residente] = [join(" ",$nombreResidente), $dni_residente];
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
	// $tabla = "";
	// foreach ($array as $idhabitacion => $elemento) {
	// 	$tabla .= "<div id='planta' class='".substr($idhabitacion,0,1)."'>";
	// 	$tabla .= "<div id='numeroHabitacion'>".$idhabitacion."</div>";
	// 	foreach($elemento as $idresidente => $elemento){
	// 		$tabla .= "<div id='".$idresidente."'>".$elemento[0]."</div>";
	// 	}
	// 	$tabla .= "</div>";
	// }
	// return $tabla;

	foreach ($array as $idhabitacion => $elemento) {
        
        foreach($elemento as $idresidente => $elemento){
            
?>
        <div id='<?php echo $idresidente;?>' class='boton_residente'><?php echo $elemento[0];?>
            <div class="minibotones_constantes" >
                <button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-constantes'>Constante</button>
                <button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-eliminacion'>Eliminar</button>
                <button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-alimentacion'>Alimentación</button>
                <button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-movilizacion'>Movilización</button>
                <button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-higiene'>Higiene</button>
                <button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-medicacion'>Medicación</button>
                <button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-descanso'>Descanso</button>
                <button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-incidencia'>Incidencia</button>
            </div>
        </div>

<?php
        }
	}
}

?>