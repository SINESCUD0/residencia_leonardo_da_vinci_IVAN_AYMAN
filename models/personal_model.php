<?php


function altaPersonal($conn,$arrayCampos,$order,$limit){
	
	$table1="personal";
	$response=array();

	//comprobamos si el DNI ya existe
	$personal= getItemJson("personal","dni_personal",$arrayCampos["dni_personal"],$order,$limit,$conn);
	if(!empty($personal)){
		http_response_code(400);
			$response=array(
				"status" => "ERROR",
				"message" => "Ya existe personal con ese DNI"
			);
			
	}else{
		//comprobamos si el usuario ya existe
		$personal= getItemJson("personal","usuario",$arrayCampos["usuario"],$order,$limit,$conn);
		if(!empty($personal)){
			http_response_code(400);
			$response=array(
				"status" => "ERROR",
				"message" => "Ya existe un usuario " . $arrayCampos["usuario"] . ". Por favor introduzca uno nuevo"
			);		
		}else{			
			$response = insertTable($conn,$arrayCampos,$table1);
		}			
	}	
	return json_encode($response);	
}


function bajaPersonal($conn,$arrayCamposToUpdate,$arrayCamposWhere,$order,$limit){
	
	$table1="personal";
	$response=array();
	$fechaBaja = date("Y-m-d H:i:s", strtotime($arrayCamposToUpdate["fecha_baja"]));
	$fechaSinTime= date("Y-m-d", strtotime($arrayCamposToUpdate["fecha_baja"]));
	$arrayCamposToUpdate["fecha_baja"]= $fechaBaja;

	//comprobamos si existe ese id en la tabla personal
	$personal= getItemJson($table1,"id_personal",$arrayCamposWhere["id_personal"],$order,$limit,$conn);
	if(empty($personal)){
		http_response_code(400);
			$response=array(
				"status" => "ERROR",
				"message" => "No existe personal con ID " . $arrayCamposWhere["id_personal"]
			);
			
	}else if($fechaSinTime < substr($personal[0]['fecha_alta'],0,10)){ //si existe, comprobamos que la fecha de alta no sea menor que la de bajaPersonal
		http_response_code(400);
		$response=array(
			"status" => "ERROR",
			"message" => "La fecha de baja no puede ser menor que la fecha de alta"
		);	
	}
	else{
		//actualizamos el campo fecha_baja y motivo_baja de la tabla persona
		$response = updateTableWhereEquals($conn,$arrayCamposToUpdate,$table1,$arrayCamposWhere);
				
		if(isset($response["status"]) && $response["status"]=="OK"){
			//por último, ponemos a null el id_responsable para aquellos residentes que tengan este empleado como responsable
			$response = eliminarResponsableResidente($conn,$arrayCamposWhere["id_personal"]);					
		}
	}			
	return json_encode($response);	
}


function consultarTrabajador($conn,$idPersonal,$order,$limit){	

	$arrayRespuesta= getItemJson("personal","id_personal",$idPersonal,$order,$limit,$conn);
	
		if(empty($arrayRespuesta)){
			http_response_code(400);
			$response=array(
				"status" => "ERROR",
				"message" => "No existe personal con ID " . $idPersonal
			);	
		}else{
			$trabajador= $arrayRespuesta[0];
			$sql = "SELECT turno.descripcion FROM personal,turno WHERE personal.id_turno=turno.id_turno AND personal.id_personal = " . $idPersonal . " ;";
			$resultado=mysqli_query($conn,$sql);
			if($resultado){
				$row=mysqli_fetch_assoc($resultado);
				$trabajador['descripcion_turno']=$row['descripcion'];
				$response=array(
				"status" => "OK",
				"datosTrabajador" => $trabajador
				);
			}
		}
	return json_encode($response);		
}

function activarTrabajador($conn,$arrayCamposToUpdate,$arrayCamposWhere){
	
	$response=array();
	$tableName="personal";
	
	$response = updateTableWhereEquals($conn,$arrayCamposToUpdate,$tableName,$arrayCamposWhere);
	return json_encode($response);
}

function modificarPersonal($conn,$arrayCamposToUpdate,$arrayCamposWhere,$order,$limit){
	
	$table1="personal";
	$table2="historico_personal_turno";
	
	//comprobamos si existe ese id en la tabla personal
	$personal= getItemJson($table1,"id_personal",$arrayCamposWhere["id_personal"],$order,$limit,$conn);
	if(empty($personal)){
		http_response_code(400);
			$response=array(
				"status" => "ERROR",
				"message" => "No existe personal con ID " . $arrayCamposWhere["id_personal"]
			);		
	}else{
		//Si el usuario y el DNI ha cambiado, comprobamos si ya existía uno antes (no se pueden repetir usuarios ni DNIs)
		if(isset($arrayCamposToUpdate["usuario"]) && $personal[0]['usuario']!=$arrayCamposToUpdate["usuario"] && existeUsuario($conn,$arrayCamposToUpdate["usuario"],$arrayCamposWhere["id_personal"])){
			http_response_code(400);
			$response=array(
				"status" => "ERROR",
				"message" => "Ya existe un usuario " . $arrayCamposToUpdate["usuario"] . ". Por favor introduzca uno nuevo"
			);		
		}else if(isset($arrayCamposToUpdate['dni_personal']) && $personal[0]['dni_personal']!=$arrayCamposToUpdate["dni_personal"] && existeDni($conn,$arrayCamposToUpdate["dni_personal"],$arrayCamposWhere["id_personal"])){
			http_response_code(400);
			$response=array(
				"status" => "ERROR",
				"message" => "Ya existe otro trabajador con DNI " . $arrayCamposToUpdate["dni_personal"]
			);		
		}else{
			$hayCambioPlanta= hayCambioDePlanta($conn,$arrayCamposWhere['id_personal'],$arrayCamposToUpdate['planta']);
			$response = updateTableWhereEquals($conn,$arrayCamposToUpdate,$table1,$arrayCamposWhere);
				
			if(isset($response["status"]) && $response["status"]=="OK"){
				//por último, ponemos a null el id_responsable para aquellos residentes que tengan este empleado como responsable, SI ES QUE HA CAMBIADO DE PLANTA
				if($hayCambioPlanta)
					$response = eliminarResponsableResidente($conn,$arrayCamposWhere["id_personal"]);
				
			}
		}
	}			
	return json_encode($response);
}

function modificarMisDatos($conn,$arrayCamposToUpdate,$arrayCamposWhere,$order,$limit){
	
	$table1="personal";
	
	$personal= getItemJson($table1,"id_personal",$arrayCamposWhere["id_personal"],$order,$limit,$conn);
	if(empty($personal)){
		http_response_code(400);
			$response=array(
				"status" => "ERROR",
				"message" => "No existe personal con ID " . $arrayCamposWhere["id_personal"]
			);		
	}else{
		//Si el usuario ha cambiado, comprobamos si ya existía uno antes (no se pueden repetir usuarios)
		if(isset($arrayCamposToUpdate["usuario"]) && $personal[0]['usuario']!=$arrayCamposToUpdate["usuario"] && existeUsuario($conn,$arrayCamposToUpdate["usuario"],$arrayCamposWhere["id_personal"])){
			http_response_code(400);
			$response=array(
				"status" => "ERROR",
				"message" => "Ya existe un usuario " . $arrayCamposToUpdate["usuario"] . ". Por favor introduzca uno nuevo"
			);		
		}else{
			$response = updateTableWhereEquals($conn,$arrayCamposToUpdate,$table1,$arrayCamposWhere);
		}
	}
						
	return json_encode($response);
}

function getResponsablesPlanta($conn,$planta){
	$response=array();
	$listado=array();
	$sql = "SELECT id_personal,nombre,apellido1,apellido2 FROM personal WHERE rol !='limpieza' AND rol !='mantenimiento' AND planta = '$planta' AND fecha_baja IS NULL;";
	$result = mysqli_query($conn,$sql);
	if($result){
		while($row=mysqli_fetch_assoc($result)){
			array_push($listado,array($row['id_personal'],$row['apellido1'],$row['apellido2'],$row['nombre']));
		}
		$response=array(
				"status" => "OK",
				"listadoResponsables" => $listado
				);
	}else{
		http_response_code(500);
		$response=array(
			"status" => "ERROR",
			"message" => mysqli_error($conn)
		);
		
	}
	return json_encode($response);
}

function eliminarResponsableResidente($conn,$idPesonal){
	$response=array();
	$sql = "UPDATE residente set id_personal_responsable = NULL where id_personal_responsable = $idPesonal";

	if (mysqli_query($conn, $sql)) {
		$response=array(
			"status" => "OK"
		);
	}else{
		http_response_code(500);
		$response=array(
			"status" => "ERROR",
			"message" => mysqli_error($conn)
		);
		
	}
	return json_encode($response);	
}

function hayCambioDePlanta($conn,$idPersonal,$nuevaPlanta){
	$hayCambio = false;
	$sql = "select planta from personal where id_personal = $idPersonal";
	$result = mysqli_query($conn,$sql);

	if ($result) {
		$row = mysqli_fetch_assoc($result);
		if($row['planta']!=$nuevaPlanta)
			$hayCambio = true;
	}
	return $hayCambio;	
}


function existeUsuario($conn,$usuario,$idPersonal){
	$existeUsuario = false;
	$sql = "SELECT COUNT(id_personal) AS total FROM personal where usuario = '$usuario' and id_personal != $idPersonal";
	$result = mysqli_query($conn,$sql);
	if ($result){
		$row = mysqli_fetch_assoc($result);
		if($row['total']>0)
			$existeUsuario = true;
	}
	return $existeUsuario;			
}

function existeDni($conn,$dniPersonal,$idPersonal){
	$existeDni = false;
	$sql = "select count(id_personal) as total from personal where dni_personal = '$dniPersonal' and id_personal != $idPersonal";
	$result = mysqli_query($conn,$sql);
	if ($result){
		$row = mysqli_fetch_assoc($result);
		if($row['total']>0)
			$existeDni = true;
	}
	return $existeDni;	
}
?>
