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
			$objetosArray[$idHabitacion][$numeroCamas] = [];
			$obtenerCamas = $conn->prepare("SELECT residente.nombre, residente.apellido1, residente.apellido2, historico_res_hab.id_habitacion, historico_res_hab.fecha_fin, historico_res_hab.id_residente, residente.dni_residente FROM historico_res_hab INNER JOIN residente ON residente.id_residente = historico_res_hab.id_residente WHERE historico_res_hab.id_habitacion = '$idHabitacion';");
			$obtenerCamas->execute();

			$infocamas=$obtenerCamas->get_result();
            $camas=$infocamas->fetch_all(MYSQLI_NUM);
			foreach($camas as $elementos){
				$nombre = $elementos[0];
				$apellido1 = $elementos[1];
				$apellido2 = $elementos[2];
				$nombreResidente = [$apellido1,$apellido2,$nombre];
				$id_habitacion = $elementos[3];
				$fecha_fin = $elementos[4];
				$id_residente = $elementos[5];
				$dni_residente = $elementos[6];
				if(is_null($fecha_fin)){
					$objetosArray[$id_habitacion][$numeroCamas][$id_residente] = [join(" ",$nombreResidente), $dni_residente];
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
	foreach ($array as $idhabitacion => $camas) {
		$numeroCamas = 0;
		?>
		<div class='boton_residente'>HABITACION Nº<?php echo $idhabitacion;?>
		<?php
		foreach($camas as $numero => $residente){
			if(!empty($residente)){
				foreach($residente as $idresidente => $variable){
					?>
					<div id='<?php echo $idresidente;?>'><?php echo $variable[0]?><br/>DNI: <?php echo $variable[1];?><br/>
						<div class="minibotones_constantes" >
							<button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-constantes'><img src="../photos/latido-del-corazon.png" width="40"></button>
							<button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-eliminacion'><img src="../photos/quitar-usuario.png" width="40" style="color:white;"></button>
							<button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-alimentacion'><img src="../photos/comida.png" width="40"></button>
							<button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-movilizacion'><img src="../photos/cama.png" width="40"></button>
							<button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-higiene'><img src="../photos/higiene.png" width="40"></button>
							<button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-medicacion'><img src="../photos/medicacion.png" width="40"></button>
							<button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-descanso'><img src="../photos/reloj.png" width="40"></button>
							<button id='<?php echo $idresidente; ?>' onclick="miniboton_constantes(event)" value='boton-incidencia'><img src="../photos/exclamacion.png" width="40"></button>
						</div>
					</div>
				<?php
					$numeroCamas += 1;
				}
				if($numero != $numeroCamas){
					?>
					DAR DE ALTA NUEVO RESIDENTE
					<div class="minibotones_constantes">
						<button id='altaResidente'>Alta Residente</button>
					</div>
					<?php
				}
			}else{
				if($numero == 2){
				?>
					<div class="minibotones_constantes"><button id='altaResidente'>Alta Residente</button></div>
					<div class="minibotones_constantes"><button id='altaResidente'>Alta Residente</button></div>
				<?php
				}else{
					?>
					<div class="minibotones_constantes"><button id='altaResidente'>Alta Residente</button></div>
					<?php
				}
			}
		}
		?></div>
		<?php
	}
}

?>