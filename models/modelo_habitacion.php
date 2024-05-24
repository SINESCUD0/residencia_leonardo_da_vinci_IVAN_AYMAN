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
				var_dump($elemento);
				$tabla .= "<div id='".$idresidente."PRUEBA' >".$elemento[0]."<br/><button id='".$idresidente."' class='boton_residente'>".$elemento[0]."<br/>".$elemento[1]."</button><br/>
																																												<button 
																																												onclick = \"(()=> {

																																													id_de_caja = $(this).parent().find('button[id]').attr('id')
																																													cargarDatosResidente(id_de_caja)
																																													
																																													$('.boton_residente').val(id_de_caja)
																																													$('.listadoResidentes').trigger('change')

																																													$('#fechaBajaResidente').val('');
																																													$('#motivoBajaResidente').val('');
																																													$('#textoOtrasBajaResidente').val('');
																																													$('#otrasBajaResidente').hide();
																																													$('#boton-ver-datos').hide();
																																													$('#ver-tabla-consulta').hide();
																																													$('#ver-tabla-datos').hide();		
																																													if($(this).val() == ''){
																																														console.log('vaya...')
																																													$('.seccionOcultableResidentes').hide();	
																																													$('#boton-ver-datos').hide();
																																													}
																																													else{
																																													$('.seccionOcultableResidentes').show();
																																													$('#boton-ver-datos').show();
																																													}			



																																												})()\"





																																												name='boton-constantes'>Vitales</button>
																																															



																																												<button name='boton-eliminacion'>Eliminar</button>



																																												<button name='boton-alimentacion'>Alimentacion</button>



																																												<button name='boton-movilizacion'>Movilizacion</button>



																																												<button name='boton-higiene'>Higiene</button>



																																												<button name='boton-medicacion'>Medicación</button>



																																												<button name='boton-descanso'>Sueño/Descanso</button>



																																												<button name='boton-incidencia'>Incidencia</button>



																																											</div>";
			}
		}else{
			$tabla .= "<div><button id='altaResidente'>Alta Residente</button></div>";
		}
		$tabla .= "</div></div>";
	}
	$tabla .= "</div>";
	return $tabla;
}

?>