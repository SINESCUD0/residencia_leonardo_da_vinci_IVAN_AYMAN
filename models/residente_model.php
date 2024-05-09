<?php
//AÑADIR ALTAMEDICACIÓN, AVERIGUAR COMO SE COMPORTA EL ARRAY AL VIAJAR DE JS A PHP

function altaResidente($conn,$datosResidente,$datosFamiliar,$order,$limit){
	
	$table1="residente";
	$table2="familiar";
	$table3="rel_familiar_residente";
	$response=array();
	$parentesco=$datosFamiliar['parentesco'];	
	unset($datosFamiliar['parentesco']);
	$idHabitacion= $datosResidente['id_habitacion'];
	unset($datosResidente['id_habitacion']);
	$idFamiliar="";
	$idResidente="";
	if ($datosResidente['id_personal_responsable'] =="")
		$datosResidente['id_personal_responsable'] = "null";
	
	//comprobamos si el DNI ya existe en la tabla residente
	$residente= getItemJson($table1,"dni_residente",$datosResidente["dni_residente"],$order,$limit,$conn);
	if(!empty($residente)){
		http_response_code(400);
			$response=array(
				"status" => "ERROR",
				"message" => "Ya existe un residente con ese DNI"
			);		
	}else{
		$response = insertTable($conn,$datosResidente,$table1);
		if(isset($response["newIdCreated"]) && !empty($response["newIdCreated"])){		
			$idResidente=$response["newIdCreated"];
			//Hacemos el INSERT o UPDATE del familiar, segun corresponda
			$response = insertarFamiliar ($conn,$datosFamiliar,$table2,$order,$limit);			
			if(isset($response["status"]) && $response["status"]=="OK"){
				//Creamos el registro en la tabla rel
				$response=crearRelResidenteFamiliar ($conn,$response['id_familiar'],$idResidente,$parentesco,"1");			
				if(!isset($response["newIdCreated"] )){
					http_response_code(200);
					$response['message']= "Residente creado, pero no ha sido posible asignarle un familiar de contacto.";
					$response['status']= "WARNING";	
									
				}else{
					//por último, registramos al residente en la habitación seleccionada
					$response=crearRelResidenteHabitacion ($conn,$idHabitacion,$idResidente);
					if(!isset($response["newIdCreated"] )){
						http_response_code(200);
						$response['message']= "Residente creado, pero no ha sido posible asignarle la habitación solicitada.";
						$response['status']= "WARNING";	
					}
				}
			}else{
				http_response_code(200);
				$response['message']= "Residente creado, pero no ha sido posible registrar los datos del familiar de contacto.";
				$response['status']= "WARNING";
			}			
		}
	}	
	return json_encode($response);	
}

function bajaResidente($conn,$arrayCamposToUpdate,$arrayCamposWhere,$order,$limit){
	
	$table1="residente";
	$table2="historico_res_hab";
	$response=array();
	$fechaBaja = date("Y-m-d H:i:s", strtotime($arrayCamposToUpdate["fecha_baja"]));
	$fechaSinTime= date("Y-m-d", strtotime($arrayCamposToUpdate["fecha_baja"]));
	$arrayCamposToUpdate["fecha_baja"]= $fechaBaja;

	//comprobamos si existe ese id en la tabla residente
	$residente= getItemJson($table1,"id_residente",$arrayCamposWhere["id_residente"],$order,$limit,$conn);
	if(empty($residente)){
		http_response_code(400);
		$response=array(
			"status" => "ERROR",
			"message" => "No existe residente con ID " . $arrayCamposWhere["id_residente"]
		);		
	}else if($fechaSinTime < substr($residente[0]['fecha_alta'],0,10)){ //si existe, comprobamos que la fecha de alta no sea menor que la de bajaResidente
		http_response_code(400);
		$response=array(
			"status" => "ERROR",
			"message" => "La fecha de baja no puede ser menor que la fecha de alta"
		);	
	}
	else{
		//actualizamos el campo fecha_baja y motivo_baja de la tabla residente
		$response = updateTableWhereEquals($conn,$arrayCamposToUpdate,$table1,$arrayCamposWhere);
				
		if(isset($response["status"]) && $response["status"]=="OK"){
			//por último, actualizamos el historico de habitaciones
			$arrayCamposToUpdateHistorico = [
				"fecha_fin" => $arrayCamposToUpdate["fecha_baja"]
			];

			$arrayCamposWhereHistorico = [
				"id_residente" => $arrayCamposWhere["id_residente"],
				"fecha_fin" => "null"
			];				
			$response=updateTableWhereEquals($conn,$arrayCamposToUpdateHistorico,$table2,$arrayCamposWhereHistorico);
								
		}
	}			
	return json_encode($response);	
}
 
function consultarResidente($conn,$idResidente,$order,$limit){	

	$arrayRespuesta= getItemJson("residente","id_residente",$idResidente,$order,$limit,$conn);
	
		if(empty($arrayRespuesta)){
			http_response_code(400);
			$response=array(
				"status" => "ERROR",
				"message" => "No existe residente con ID " . $idResidente
			);	
		}else{
			$residente= $arrayRespuesta[0];
			$sql1 = "SELECT fam.*,rel.parentesco FROM familiar fam,rel_familiar_residente rel WHERE fam.id_familiar=rel.id_familiar AND rel.id_residente = " .$idResidente ." AND rel.es_contacto_principal=1;";
			$sql2 = "SELECT id_habitacion from historico_res_hab WHERE id_residente = " .$idResidente ." and fecha_fin IS NULL;";
			// $sql3 = "SELECT m.n_medicacion AS 'n_medicacion', m.nombre AS 'nombreMed', m.tipo AS 'tipoMed', m.via AS 'viaMed', m.forma_farmaceutica AS 'forma_farmaceuticaMed', m.unidad AS 'unidadMed', m.cantidad AS 'cantidadMed', m.desayuno AS 'desayunoMed', m.comida AS 'comidaMed', m.cena AS 'cenaMed', m.otros AS 'otrosMed' FROM medicacion m INNER JOIN residente r ON m.n_medicacion = r.medicacion WHERE r.id_residente = " .$idResidente." AND fecha_fin IS NULL;";
			$resultado=mysqli_query($conn,$sql1);
			if($resultado && mysqli_num_rows($resultado) > 0){
				$row=mysqli_fetch_assoc($resultado);
				foreach ($row as $clave => $valor){
					$residente[$clave]=$valor;
				};
				$resultado2=mysqli_query($conn,$sql2);
				if($resultado2 && mysqli_num_rows($resultado2) > 0){
					$row=mysqli_fetch_assoc($resultado2);
					$residente["id_habitacion"]=$row["id_habitacion"];
				}else
					$residente["id_habitacion"]="";
					
				// $resultado3 = mysqli_query($conn,$sql3);
				// if($resultado3 && mysqli_num_rows($resultado3) > 0){
				// 	$fila = 0;
				// 	$arrayMedicamentos = array();
				// 	while($row=mysqli_fetch_assoc($resultado3)){
				// 		foreach ($row as $clave => $valor) {
				// 			$arrayMedicamentos[$fila][$clave]=$valor;
				// 		}
				// 		$fila++;
				// 	}
				// 	$residente["arrayMedicacion"] = $arrayMedicamentos;
				// }else{
				// 	$residente["arrayMedicacion"] = "nada";
				// }


				//array medicacion de residente especifico
			$sqlArrMed = "SELECT medicacion FROM residente WHERE id_residente = $idResidente";
			$resultadoArrMed = mysqli_query($conn, $sqlArrMed);
			$arrayMed = array();
			if ($resultadoArrMed && mysqli_num_rows($resultadoArrMed) > 0) {
				$row = mysqli_fetch_assoc($resultadoArrMed);
				if (empty($row['medicacion'])) {
					$arrayMed = "nada";
				}else{
				$jsonstring = $row['medicacion'];
				$arrayMed = json_decode($jsonstring);
				}
				
			} else {

				$arrayMed = "nada";
			}


			if ($arrayMed != "nada"){
				$arrayMedActual = array();
				foreach ($arrayMed as $n_medicacion) {
					// Realiza la consulta SQL para obtener los datos del medicamento
					$sql7 = "SELECT nombre, tipo, via, forma_farmaceutica, unidad, cantidad, desayuno, comida, cena, otros, DATE_FORMAT(fecha_ini, '%Y-%m-%d') AS \"Inicio\" FROM medicacion WHERE n_medicacion = '".$n_medicacion."' AND fecha_fin IS NULL;";
					$resultado7 = mysqli_query($conn, $sql7);
				
					if ($resultado7 && mysqli_num_rows($resultado7) > 0) {
						$fila = 0;
						$medicamentos = array(); // Array para almacenar los datos de los medicamentos de esta iteración
						while ($row = mysqli_fetch_assoc($resultado7)) {
							foreach ($row as $clave => $valor) {
								$medicamentos[$fila][$clave] = $valor;
							}
							$fila++;
						}
						$arrayMedActual[] = $medicamentos; // Agregar los datos de esta iteración al array principal
					}
				}
				$residente["arrayMedActual"] = $arrayMedActual;
			}else{
				$arrayMedActual = "nada";
				$residente["arrayMedActual"] = $arrayMedActual;

			}

				$response=array(
				"status" => "OK",
				"datosResidente" => $residente
				);
			}else{
				$response=array(
				"status" => "WARNING",
				"message" => "No ha sido posible recuperar los datos del familiar",
				"datosResidente" => $residente
				);				
			}
		}
	return json_encode($response);		
}

function modificarResidente($conn,$datosResidente,$datosFamiliar,$arrayCamposWhere,$order,$limit){
	
	$table1="residente";
	$table2="familiar";
	$table3="rel_familiar_residente";
	$response=array();
	$parentesco=$datosFamiliar['parentesco'];	
	unset($datosFamiliar['parentesco']);

	
	if ($datosResidente['id_personal_responsable'] =="")
		$datosResidente['id_personal_responsable'] = "null";
	
	$response = updateTableWhereEquals($conn,$datosResidente,$table1,$arrayCamposWhere);
				
	if(isset($response["status"]) && $response["status"]=="OK"){
		//modificamos la tabla familiar o generamos un nuevo registro, si el familiar de contacto ha cambiado	
		$response=insertarFamiliar($conn,$datosFamiliar,$table2,$order,$limit);
		if(isset($response["status"]) && $response["status"]=="OK"){
			//modificamos la tabla de rel
			$arrayCamposRel = [
				"parentesco" => $parentesco,
				"id_familiar" => $response['id_familiar']				
			];	
			$arrayCamposWhereRel = [
				"id_residente" => $datosResidente['id_residente'],
				"es_contacto_principal" => '1'
			];
			$response=updateTableWhereEquals($conn,$arrayCamposRel,$table3,$arrayCamposWhereRel);
			if($response["status"]!="OK"){
				http_response_code(200);
				$response['message']= "Residente modificado, pero no ha sido posible asignarle la persona de contacto.";
				$response['status']= "WARNING";			
			}			
		}else{
			http_response_code(200);
			$response['message']= "Residente modificado, pero no ha sido posible modificar los datos de la persona de contacto.";
			$response['status']= "WARNING";	
		}		
	
	}			
	return json_encode($response);
}

function modificarPai($conn,$datosResidente,$datosOtroFamiliar,$arrayCamposWhere,$order,$limit){
	
	$table1="residente";
	$table2="familiar";
	$table3="rel_familiar_residente";
	$response=array();
	$idResidente= $arrayCamposWhere['id_residente'];

	$response = updateTableWhereEquals($conn,$datosResidente,$table1,$arrayCamposWhere);
				
	if($datosOtroFamiliar!=null && isset($response["status"]) && $response["status"]=="OK"){		
		//modificamos la tabla familiar o generamos un nuevo registro, si el otro familiar ha cambiado	
		$parentesco=$datosOtroFamiliar['parentesco'];	
		unset($datosOtroFamiliar['parentesco']);
		$response=insertarFamiliar($conn,$datosOtroFamiliar,$table2,$order,$limit);
		if(isset($response["status"]) && $response["status"]=="OK"){
			//comprobamos si ya hay un registro en la tabla rel
			if (obtenerRelNoPrincipal($conn,$idResidente) > 0){
				//Upadate tabla REL
				$arrayCamposRel = [
					"parentesco" => $parentesco,
					"id_familiar" => $response['id_familiar']				
				];	
				$arrayCamposWhereRel = [
					"id_residente" => $idResidente,
					"es_contacto_principal" => '0'
				];
				$response=updateTableWhereEquals($conn,$arrayCamposRel,$table3,$arrayCamposWhereRel);
				
				if($response["status"]!="OK"){
					http_response_code(200);
					$response['message']= "Modificado, pero no ha sido posible asignarle el otro familiar.";
					$response['status']= "WARNING";			
				}
			}else {
				//creamos el registro en la tabla rel
				$response=crearRelResidenteFamiliar ($conn,$response['id_familiar'],$idResidente,$parentesco,"0");
				
				if(!isset($response["newIdCreated"] )){
					http_response_code(200);
					$response['message']= "Modificado, pero no ha sido posible asignarle el otro familiar.";
					$response['status']= "WARNING";									
				}	
				
			}				
		}else{
			http_response_code(200);
			$response['message']= "Modificado, pero no ha sido posible registrar los datos del otro familiar.";
			$response['status']= "WARNING";	
		}		
	
	}else if($datosOtroFamiliar==null && isset($response["status"]) && $response["status"]=="OK"){	
		//Si desde el front se deshabilita la opción de otro familiar, comprobamos si ya existía un registro en la tabla de rel, y si es así, lo eliminamos
		if (obtenerRelNoPrincipal($conn,$idResidente) > 0){
			$response=borrarRelResidenteFamiliar ($conn,$idResidente);
		}
	
	}	
	return json_encode($response,JSON_UNESCAPED_UNICODE);	
}

function crearRelResidenteFamiliar ($conn,$idFamiliar,$idResidente,$parentesco,$esContactoPrincipal){
	$table1="rel_familiar_residente";
	$response=array();
	$arrayCamposRel = [
		"id_familiar" => $idFamiliar,
		"id_residente" => $idResidente,
		"parentesco" => $parentesco,
		"es_contacto_principal" => $esContactoPrincipal
	];	
	$response=insertTable($conn,$arrayCamposRel,$table1);
	return $response;
}

function borrarRelResidenteFamiliar ($conn,$idResidente){
	$response=array();
	$table1="rel_familiar_residente";
	$sql = "DELETE FROM rel_familiar_residente WHERE id_residente = $idResidente AND es_contacto_principal = 0";
	$resultado=mysqli_query($conn,$sql);
	if($resultado){
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


function crearRelResidenteHabitacion ($conn,$idHabitacion,$idResidente){
	$table1="historico_res_hab";
	$response=array();
	$arrayCamposRel = [
		"id_residente" => $idResidente,
		"id_habitacion" => $idHabitacion
	];	
	$response = insertTable($conn,$arrayCamposRel,$table1);	
		
	return $response;	
}


function getExpediente($conn, $prefijo){
	$response=array();
	$nExpediente="";
	$sql = "SELECT max(n_expediente) as maximo FROM residente WHERE n_expediente LIKE '$prefijo%';";
	$resultado=mysqli_query($conn,$sql);
	if($resultado){
		$row=mysqli_fetch_assoc($resultado);
		if($row['maximo']!=NULL){
			$parteNumerica=(int)substr($row['maximo'], 0, -4);
			$nExpediente=$prefijo.str_pad(strval($parteNumerica+1),4, "0", STR_PAD_LEFT);
		}else{
			$nExpediente=$prefijo."0000";
		}
		$response=array(
				"status" => "OK",
				"nExpediente" => $nExpediente
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

function insertarFamiliar($conn,$datosFamiliar,$table,$order,$limit){
	$response=array();
	//comprobamos si el DNI ya existe en la tabla familiar
	$familiar= getItemJson("familiar","dni_familiar",$datosFamiliar["dni_familiar"],$order,$limit,$conn);
	
	if(!empty($familiar) && isset($familiar[0]['id_familiar'])){
		//Si el familiar ya existía, hacemos un UPDATE		
		$response= updateFamiliar($conn,$datosFamiliar,$familiar[0]['id_familiar'],$table);
		$response['id_familiar']=$familiar[0]['id_familiar'];
	}else{
		//Si no hay registro de ese familiar, lo creamos
		$response = insertTable($conn,$datosFamiliar,$table);
		if(isset($response["newIdCreated"]) && !empty($response["newIdCreated"]))
			$response['id_familiar']=$response['newIdCreated'];	
	}
	return $response;
}

function updateFamiliar($conn,$datosFamiliar,$idFamiliar,$table){
	$response=array();
	$arrayCamposWhereFamiliar = [
	"id_familiar" => $idFamiliar
	];			
	$response = updateTableWhereEquals($conn,$datosFamiliar,$table,$arrayCamposWhereFamiliar);
	
	return $response;
}

function obtenerRelNoPrincipal($conn,$idResidente){
	$sql = "SELECT COUNT(*) AS total FROM rel_familiar_residente WHERE id_residente = $idResidente AND es_contacto_principal=0";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	return $row['total'];	
}


function consultarPai($conn,$idResidente,$order,$limit){
	
	$otroFamiliar=array();	
	$arrayRespuesta= getItemJson("residente","id_residente",$idResidente,$order,$limit,$conn);
	if(empty($arrayRespuesta)){
		http_response_code(400);
		$response=array(
			"status" => "ERROR",
			"message" => "No existe residente con ID " . $idResidente
		);	
	}else{
		$residente= $arrayRespuesta[0];
		$sql1 = "SELECT fam.*,rel.parentesco,rel.es_contacto_principal FROM familiar fam,rel_familiar_residente rel WHERE fam.id_familiar=rel.id_familiar AND rel.id_residente = " .$idResidente .";";
		$sql2 = "SELECT id_habitacion from historico_res_hab WHERE id_residente = " .$idResidente ." and fecha_fin IS NULL;";
		// $sql3 = "SELECT m.n_medicacion AS 'n_medicacion', m.nombre AS 'nombreMed', m.tipo AS 'tipoMed', m.via AS 'viaMed', m.unidad AS 'unidadMed', m.detalles AS 'detallesMed', m.momento_adm AS 'momento_admMed' FROM medicacion m INNER JOIN residente r ON m.n_medicacion = r.medicacion WHERE r.id_residente = $idResidente AND fecha_fin IS NULL";
		$resultado=mysqli_query($conn,$sql1);
		
		if($resultado && mysqli_num_rows($resultado) > 0){
			while($row=mysqli_fetch_assoc($resultado)){
				if($row['es_contacto_principal'] == 1){
					foreach ($row as $clave => $valor){
						$residente[$clave]=$valor;
					};	
				}else{
					foreach ($row as $clave => $valor){
						$otroFamiliar[$clave]=$valor;
					};
				}
			}		
			$resultado2=mysqli_query($conn,$sql2);
			if($resultado2 && mysqli_num_rows($resultado2) > 0){
				$row=mysqli_fetch_assoc($resultado2);
				$residente["id_habitacion"]=$row["id_habitacion"];
			}else
				$residente["id_habitacion"]="";
			
			// $resultado3 = mysqli_query($conn,$sql3);
			// if($resultado3 && mysqli_num_rows($resultado3) > 0){
			// 	$fila = 0;
			// 	$arrayMedicamentos = array();
			// 	while($row=mysqli_fetch_assoc($resultado3)){
			// 		foreach ($row as $clave => $valor) {
			// 			$arrayMedicamentos[$fila][$clave]=$valor;
			// 		}
			// 		$fila++;
			// 	}
			// 	$residente["arrayMedicacion"] = $arrayMedicamentos;
			// }else{
			// 	$residente["arrayMedicacion"] = "nada";
			// }


		//array medicacion de residente especifico
			$sqlArrMed = "SELECT medicacion FROM residente WHERE id_residente = $idResidente";
			$resultadoArrMed = mysqli_query($conn, $sqlArrMed);
			$arrayMed = array();
			if ($resultadoArrMed && mysqli_num_rows($resultadoArrMed) > 0) {
				$row = mysqli_fetch_assoc($resultadoArrMed);
				if (empty($row['medicacion'])) {
					$arrayMed = "nada";
				}else{
					
				$jsonstring = $row['medicacion'];

				$arrayMed = json_decode($jsonstring);
				}
				
			} else {

				$arrayMed = "nada";
			}

			//añadir medicacion en modificar PAI
			if ($arrayMed != "nada"){
				$arrayMedActual = array();
				foreach ($arrayMed as $n_medicacion) {
					// Realiza la consulta SQL para obtener los datos del medicamento
					$sql7 = "SELECT nombre, tipo, via, forma_farmaceutica, unidad, cantidad, desayuno, comida, cena, otros, DATE_FORMAT(fecha_ini, '%Y-%m-%d') AS \"Inicio\" FROM medicacion WHERE n_medicacion = '".$n_medicacion."' AND fecha_fin IS NULL;";
					$resultado7 = mysqli_query($conn, $sql7);
				
					if ($resultado7 && mysqli_num_rows($resultado7) > 0) {
						$fila = 0;
						$medicamentos = array(); // Array para almacenar los datos de los medicamentos de esta iteración
						while ($row = mysqli_fetch_assoc($resultado7)) {
							foreach ($row as $clave => $valor) {
								$medicamentos[$fila][$clave] = $valor;
							}
							$fila++;
						}
						$arrayMedActual[] = $medicamentos; // Agregar los datos de esta iteración al array principal
					}
				}
	
				$residente["arrayMedActual"] = $arrayMedActual;

	
	
				$arrayMedTratam = array();
				foreach ($arrayMed as $n_medicacion) {
					// Realiza la consulta SQL para obtener los datos del medicamento
					$sql8 = "SELECT nombre, tipo, via, forma_farmaceutica, unidad, cantidad, desayuno, comida, cena, otros, DATE_FORMAT(fecha_ini, '%Y-%m-%d') AS \"Inicio\", DATE_FORMAT(fecha_fin, '%Y-%m-%d') AS \"Fin\" FROM medicacion WHERE n_medicacion = '".$n_medicacion."' AND fecha_fin IS NOT NULL;";
					$resultado8 = mysqli_query($conn, $sql8);
				
					if ($resultado8 && mysqli_num_rows($resultado8) > 0) {
						$fila = 0;
						$medicamentos2 = array(); // Array para almacenar los datos de los medicamentos de esta iteración
						while ($row = mysqli_fetch_assoc($resultado8)) {
							foreach ($row as $clave => $valor) {
								$medicamentos2[$fila][$clave] = $valor;
							}
							$fila++;
						}
						$arrayMedTratam[] = $medicamentos2; // Agregar los datos de esta iteración al array principal
					}
				}
				$residente["arrayMedTratam"] = $arrayMedTratam;	
			}else{

				$arrayMedActual = "nada";
				$arrayMedTratam = "nada";

				$residente["arrayMedActual"] = $arrayMedActual;
				$residente["arrayMedTratam"] = $arrayMedTratam;	

			}


			$response=array(
			"status" => "OK",
			"datosResidente" => $residente,
			"datosOtroFamiliar" => $otroFamiliar
			);
		}else{
			$response=array(
			"status" => "WARNING",
			"message" => "No ha sido posible recuperar los datos del familiar",
			"datosResidente" => $residente
			);				
		}
	}	
	
	return json_encode($response, JSON_UNESCAPED_UNICODE);
}

function activarResidente($conn,$arrayCamposToUpdate,$arrayCamposWhere){
	
	$response=array();
	$tableName="residente";
	
	$response = updateTableWhereEquals($conn,$arrayCamposToUpdate,$tableName,$arrayCamposWhere);
	return json_encode($response);
}

function maxTablaMedicacion($conn){
	$sql = "SELECT MAX(n_medicacion) AS 'n_medicacion' FROM medicacion";
	return consultaNmedicacion($conn,$sql);
}

function consultaNmedicacion($conn,$sql){
	$array ['data']= array();
	$resultado = mysqli_query($conn,$sql);
	if($resultado){
		while($data = mysqli_fetch_assoc($resultado)){
			$array['data'][] = $data;
		}
	}else
		trigger_error ("Error en $sql , error: " . mysqli_error($conn));
	
	return $array;
}
//Funcion medicación
function altaMedicacion($conn, $arrayMedicamentosMedicacion, $numero){
	$response = array();
	$response = insertTable($conn, $arrayMedicamentosMedicacion, 'medicacion');


	return json_encode($response);
}

function getMaxNmedicacion($conn){
	$response = array("n_medicacion" => intval(maxTablaMedicacion($conn)['data'][0]['n_medicacion']) + 1);
	return json_encode($response);
}

function updateMedicacionTable($conn, $n_medicacion_actual){

	print_r($n_medicacion_actual);

	for ($i=0; $i < count($n_medicacion_actual); $i++) { 
		$sql = "UPDATE medicacion SET fecha_fin = CURRENT_TIMESTAMP WHERE n_medicacion = $n_medicacion_actual[$i] AND fecha_fin IS NULL";
		$respuesta = mysqli_query($conn, $sql);
	}
	return json_encode($respuesta);
}


function consultarHistorialPai($conn,$idResidente,$order,$limit){
	$arrayRespuesta = getItemJson("residente", "id_residente", $idResidente, $order, $limit, $conn);

	if (empty($arrayRespuesta)) {
		http_response_code(400);
		$response = array(
			"status" => "ERROR",
			"message" => "No existe residente con ID " . $idResidente
		);
	} else {
		$residente = $arrayRespuesta[0];
		$sql1 = "SELECT id_habitacion FROM historico_res_hab WHERE id_residente = " . $idResidente . " AND fecha_fin IS NULL;";

		$resultado1 = mysqli_query($conn, $sql1);
		if ($resultado1 && mysqli_num_rows($resultado1) > 0) {
			$row = mysqli_fetch_assoc($resultado1);
			$residente["id_habitacion"] = $row["id_habitacion"];
		} else {
			$residente["id_habitacion"] = "";
		}

		$sql2 = "SELECT * FROM historico_pai WHERE id_residente = " . $idResidente . ";";
		$resultado2 = mysqli_query($conn, $sql2);
		$arrayHistorialPai = array();

		if ($resultado2 && mysqli_num_rows($resultado2) > 0) {
			$fila = 0;
			$historial_pai = array(); // Array para almacenar los datos del historial en esta iteración
			while ($row = mysqli_fetch_assoc($resultado2)) {
				foreach ($row as $clave => $valor) {
					$historial_pai[$fila][$clave] = $valor;
				}
				$fila++;
			}
			$arrayHistorialPai[] = $historial_pai; // Agregar los datos de esta iteración al array principal
			$residente["historial_pai"] = $arrayHistorialPai;
			$arrayResponsables = array();
		foreach ($residente["historial_pai"][0] as $element) {
			$id_responsable = $element["id_responsable"];
			$sql3 = "SELECT nombre, apellido1, apellido2 FROM personal WHERE id_personal = " . $id_responsable . ";";
			$resultado3 = mysqli_query($conn, $sql3);
		
			if ($resultado3 && mysqli_num_rows($resultado3) > 0) {
				$responsables = array(); // Array para almacenar los datos del responsable en esta iteración
		
				while ($row = mysqli_fetch_assoc($resultado3)) {
					$responsable = array(
						"nombre" => $row["nombre"],
						"apellido1" => $row["apellido1"],
						"apellido2" => $row["apellido2"]
					);
					$responsables[] = $responsable;
				}
		
				$element["responsables"] = $responsables; // Agregar los datos del responsable a la variable $element
			} else {
				$element["responsables"] = array("nombre" => "", "apellido1" => "", "apellido2" => ""); // Agregar valores vacíos si no se encontraron responsables
			}
		
			$arrayResponsables[] = $element; // Agregar el elemento actual al array principal
		}
		
		$residente["historial_pai"] = $arrayResponsables;
		
		} else {
			$arrayHistorialPai = "nada";
			$residente["historial_pai"] = $arrayHistorialPai;
		}

		$response = array(
			"status" => "OK",
			"datosResidente" => $residente
		);
		
		
		return json_encode($response, JSON_UNESCAPED_UNICODE);
	}
}

//insert tabla historial_pai
function guardarHistorialPai($conn,$arrayHistorial){

	$id_residente = $arrayHistorial['id_residente'];
	$id_responsable = $arrayHistorial['id_responsable'];
	$fecha = $arrayHistorial['fecha'];
	$cambios = mysqli_real_escape_string($conn, $arrayHistorial['historial']);


	$sql = "INSERT INTO historico_pai VALUES ($id_residente, $id_responsable,'$fecha', '$cambios')";
	$respuesta = mysqli_query($conn, $sql);
		

	return json_encode($respuesta);	
	
}

?>