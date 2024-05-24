<?php
//LISTADO DE LAS HABITACIONES LIBRES POR TIPO (individual o doble)
function habitacionesLibresPorTipo($conn,$numCamas){
	$response=array();
	$listado=array();
	$sql = "SELECT habitacion.id_habitacion  FROM habitacion WHERE habitacion.num_camas = '$numCamas' AND habitacion.num_camas > (SELECT COUNT(historico_res_hab.id_habitacion) FROM historico_res_hab WHERE habitacion.id_habitacion = historico_res_hab.id_habitacion AND historico_res_hab.fecha_fin IS NULL);";
	$result = mysqli_query($conn,$sql);

	if($result){
		while($row=mysqli_fetch_assoc($result)){
			array_push($listado,array($row['id_habitacion']));
		}
		$response=array(
				"status" => "OK",
				"listadoHabitaciones" => $listado
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


// function listadoHabitaciones($conn){
// 	$response=array();
// 	$listado=array();
// 	$sql = "SELECT *  FROM habitacion;";
// 	$result = mysqli_query($conn,$sql);

// 	if($result){
// 		while($row=mysqli_fetch_assoc($result)){
// 			array_push($listado,array($row['id_habitacion']), array($row['num_camas']));
// 		}
// 		$response=array(
// 				"status" => "OK",
// 				"listadoHabitaciones" => $listado
// 		);
// 	}else{
// 		http_response_code(500);
// 		$response=array(
// 			"status" => "ERROR",
// 			"message" => mysqli_error($conn)
// 		);
		
// 	}
// 	return json_encode($response);
// }

function consultarHabitacion($conn,$idResidente,$order,$limit){
	$response=array();
	$datos=array();
	print($idResidente);
	print("<br>");
	print($order);
	print("<br>");
	print($limit);
	print("<br>");

	$sql = "SELECT habitacion.id_habitacion,habitacion.num_camas,personal.nombre,personal.apellido1,personal.apellido2  
		FROM habitacion INNER JOIN historico_res_hab ON (habitacion.id_habitacion = historico_res_hab.id_habitacion) 
		INNER JOIN residente ON (historico_res_hab.id_residente = residente.id_residente)
		LEFT JOIN personal ON(residente.id_personal_responsable = personal.id_personal ) 
		WHERE residente.id_residente= $idResidente
		AND historico_res_hab.fecha_fin IS NULL;";
	$resultado=mysqli_query($conn,$sql);

	if($resultado){
		if( mysqli_num_rows($resultado) > 0){
			$row=mysqli_fetch_assoc($resultado);
			foreach($row as $clave=>$valor){
				$datos[$clave]=$valor;
			}
			$response=array(
				"status" => "OK",
				"datosHabitacion" => $datos
			);
		}
	}else{
		http_response_code(500);
		$response=array(
			"status" => "ERROR",
			"message" => mysqli_error($conn)
		);
	}
	return json_encode($response);
}

function cambiarHabitacion($conn,$idResidente,$idHabitacion,$idResponsable){
	
	$fechaCambio = date("Y-m-d H:i:s");
	$table1="historico_res_hab";
	$table2="residente";
	if($idResponsable=="")
		$idResponsable="null";
	
	//actualizamos el historico de habitaciones: primero damos de baja la habitacion actual
	$arrayCamposToUpdateHistorico = [
		"fecha_fin" => $fechaCambio
	];

	$arrayCamposWhereHistorico = [
		"id_residente" => $idResidente,
		"fecha_fin" => "null"
	];				
	$response=updateTableWhereEquals($conn,$arrayCamposToUpdateHistorico,$table1,$arrayCamposWhereHistorico);
	
	if(isset($response["status"]) && $response["status"]=="OK"){
		//registramos al residente en la habitación seleccionada
		$response=crearRelResidenteHabitacion ($conn,$idHabitacion,$idResidente);
		if(!isset($response["newIdCreated"] )){
			http_response_code(500);
			$response['message']= "Se le ha dado de baja de la habiación actual, pero no ha sido posible asignarle la nueva habitación.";
			$response['status']= "ERROR";	
		}
		else{
			//Por último, actualizamos el nuevo responsable, si es que tiene
			$arrayCamposToUpdateResponsable = [
				"id_personal_responsable" => $idResponsable
			];
			$arrayCamposWhereResponsable = [
				"id_residente" => $idResidente,
			];				
			$response=updateTableWhereEquals($conn,$arrayCamposToUpdateResponsable,$table2,$arrayCamposWhereResponsable);	
		}
		
	
	}
	return json_encode($response);	
}
?>