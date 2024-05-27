<?php

function insertarRegistroConstante($conn,$arrayCampos,$order,$limit){

	$table1="registro_constante";

	$response=array();

	$fecha = date("Y-m-d H:i:s", strtotime($arrayCampos["fecha"]));

	$arrayCampos["fecha"]= $fecha;



	//comprobamos si existe ese id en la tabla residente

	$residente= getItemJson("residente","id_residente",$arrayCampos["id_residente"],$order,$limit,$conn);

	// //compruebo que se seleccione al menos dos datos
	// $turno= getItemJson("residente","turno",$arrayCampos["turno"],$order,$limit,$conn);

	if(empty($residente)){

		http_response_code(400);

		$response=array(

			"status" => "ERROR",

			"message" => "No existe residente con ID " . $arrayCampos["id_residente"]

		);

	}else{

		//comprobamos si existe ese id en la tabla personal

		$personal= getItemJson("personal","id_personal",$arrayCampos["id_personal"],$order,$limit,$conn);

		if(empty($personal)){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "No existe personal con ID " . $arrayCampos["id_personal"]

			);

		}elseif($arrayCampos["turno"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "Turno no puede estar vacio" . $arrayCampos["turno"]
			);

		}elseif($arrayCampos["fc"]=="" && $arrayCampos["ta"]=="" && $arrayCampos["t"]=="" && $arrayCampos["glucemia"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "FC, TA, Tª, Glucemia, Entradas y Salidas. Todos no pueden estar vacios " 
			);

		}else

			 $response = insertTable($conn,$arrayCampos,$table1);

	}

	return json_encode($response);	

}
//---------------------------------------------------------------------------------------------------------------------
function insertarRegistroEliminacion($conn,$arrayCampos,$order,$limit){

	$table1="registro_eliminacion";

	$response=array();

	$fecha = date("Y-m-d H:i:s", strtotime($arrayCampos["fecha"]));

	$arrayCampos["fecha"]= $fecha;



	//comprobamos si existe ese id en la tabla residente

	$residente= getItemJson("residente","id_residente",$arrayCampos["id_residente"],$order,$limit,$conn);

	// //compruebo que se seleccione al menos dos datos
	// $turno= getItemJson("residente","turno",$arrayCampos["turno"],$order,$limit,$conn);

	if(empty($residente)){

		http_response_code(400);

		$response=array(

			"status" => "ERROR",

			"message" => "No existe residente con ID " . $arrayCampos["id_residente"]

		);

	}else{

		//comprobamos si existe ese id en la tabla personal

		$personal= getItemJson("personal","id_personal",$arrayCampos["id_personal"],$order,$limit,$conn);

		if(empty($personal)){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "No existe personal con ID " . $arrayCampos["id_personal"]

			);

		}elseif($arrayCampos["turno"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "Turno no puede estar vacio" . $arrayCampos["turno"]
			);

		}elseif($arrayCampos["diuresis"]=="" && $arrayCampos["panal_mojado"]=="" && $arrayCampos["deposicion"]=="" && $arrayCampos["bolsa_clostomia"]=="" && $arrayCampos["enema"]=="" && $arrayCampos["vomitos"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "Diuresis, Pañal mojado, Deposición, bolsa clostomia, enema y vomitos. Todos no pueden estar vacios " . $arrayCampos["diuresis"]
			);

		}else

			 $response = insertTable($conn,$arrayCampos,$table1);

	}

	return json_encode($response);	

}
//-------------------------------------------------------------------------------------------------------------------
function insertarRegistroAlimentacion($conn,$arrayCampos,$order,$limit){

	$table1="registro_alimentacion";

	$response=array();

	$fecha = date("Y-m-d H:i:s", strtotime($arrayCampos["fecha"]));

	$arrayCampos["fecha"]= $fecha;

	//comprobamos si existe ese id en la tabla residente

	$residente= getItemJson("residente","id_residente",$arrayCampos["id_residente"],$order,$limit,$conn);

	if(empty($residente)){

		http_response_code(400);

		$response=array(

			"status" => "ERROR",

			"message" => "No existe residente con ID " . $arrayCampos["id_residente"]

		);

	}else{

		//comprobamos si existe ese id en la tabla personal

		$personal= getItemJson("personal","id_personal",$arrayCampos["id_personal"],$order,$limit,$conn);

		if(empty($personal)){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "No existe personal con ID " . $arrayCampos["id_personal"]

			);

		}elseif($arrayCampos["turno"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "Turno no puede estar vacio" . $arrayCampos["turno"]
			);

		}elseif($arrayCampos["adecuada"]=="" && $arrayCampos["inadecuada"]=="" && $arrayCampos["observaciones"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "adecuada, inadecuada y observaciones. Todos no pueden estar vacios " . $arrayCampos["observaciones"]
			);

		}else

			 $response = insertTable($conn,$arrayCampos,$table1);

	}

	return json_encode($response);	

}
//------------------------------------------------------------------------------------
function insertarRegistroMovilizacion($conn,$arrayCampos,$order,$limit){

	$table1="registro_movilizacion";

	$response=array();

	$fecha = date("Y-m-d H:i:s", strtotime($arrayCampos["fecha"]));

	$arrayCampos["fecha"]= $fecha;

	//comprobamos si existe ese id en la tabla residente

	$residente= getItemJson("residente","id_residente",$arrayCampos["id_residente"],$order,$limit,$conn);

	if(empty($residente)){

		http_response_code(400);

		$response=array(

			"status" => "ERROR",

			"message" => "No existe residente con ID " . $arrayCampos["id_residente"]

		);

	}else{

		//comprobamos si existe ese id en la tabla personal

		$personal= getItemJson("personal","id_personal",$arrayCampos["id_personal"],$order,$limit,$conn);

		if(empty($personal)){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "No existe personal con ID " . $arrayCampos["id_personal"]

			);

		}elseif($arrayCampos["turno"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "Turno no puede estar vacio" . $arrayCampos["turno"]
			);

		}elseif($arrayCampos["rh_fisica"]=="" && $arrayCampos["ejercicios_cama"]=="" && $arrayCampos["cambio_postural"]=="" && $arrayCampos["levantar_alsillon"]=="" && $arrayCampos["encamado"]=="" && $arrayCampos["otros"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "rh_fisica, ejercicios_cama, cambio_postural, levantar_alsillon, encamado. Todos no pueden estar vacios " . $arrayCampos["otros"]
			);

		}else

			 $response = insertTable($conn,$arrayCampos,$table1);

	}

	return json_encode($response);	

}
//--------------------------------------------------------------------------------------------------------------------
function insertarRegistroHigiene($conn,$arrayCampos,$order,$limit){

	$table1="registro_higiene";

	$response=array();

	$fecha = date("Y-m-d H:i:s", strtotime($arrayCampos["fecha"]));

	$arrayCampos["fecha"]= $fecha;

	//comprobamos si existe ese id en la tabla residente

	$residente= getItemJson("residente","id_residente",$arrayCampos["id_residente"],$order,$limit,$conn);

	if(empty($residente)){

		http_response_code(400);

		$response=array(

			"status" => "ERROR",

			"message" => "No existe residente con ID " . $arrayCampos["id_residente"]

		);

	}else{

		//comprobamos si existe ese id en la tabla personal

		$personal= getItemJson("personal","id_personal",$arrayCampos["id_personal"],$order,$limit,$conn);

		if(empty($personal)){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "No existe personal con ID " . $arrayCampos["id_personal"]

			);

		}elseif($arrayCampos["turno"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "Turno no puede estar vacio" . $arrayCampos["turno"]
			);

		}elseif($arrayCampos["bano_ducha"]=="" && $arrayCampos["aseo"]=="" && $arrayCampos["higiene_bucal"]=="" && $arrayCampos["unas_manos"]=="" && $arrayCampos["unas_pies"]=="" && $arrayCampos["afeitado"]=="" && $arrayCampos["higiene_genital"]=="" && $arrayCampos["vestido"]=="" &&  $arrayCampos["otros"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "baño/ducha, aseo,higiene bucal, cambio_postural, uñas manos, uñas pies. Todos no pueden estar vacios " . $arrayCampos["otros"]
			);

		}else

			 $response = insertTable($conn,$arrayCampos,$table1);

	}

	return json_encode($response);	

}
//-----------------------------------------------------------------------------
function insertarRegistroMedicacion($conn,$arrayCampos,$order,$limit){

	$table1="registro_medicacion";

	$response=array();

	$fecha = date("Y-m-d H:i:s", strtotime($arrayCampos["fecha"]));

	$arrayCampos["fecha"]= $fecha;

	//comprobamos si existe ese id en la tabla residente

	$residente= getItemJson("residente","id_residente",$arrayCampos["id_residente"],$order,$limit,$conn);

	if(empty($residente)){

		http_response_code(400);

		$response=array(

			"status" => "ERROR",

			"message" => "No existe residente con ID " . $arrayCampos["id_residente"]

		);

	}else{

		//comprobamos si existe ese id en la tabla personal

		$personal= getItemJson("personal","id_personal",$arrayCampos["id_personal"],$order,$limit,$conn);

		if(empty($personal)){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "No existe personal con ID " . $arrayCampos["id_personal"]

			);

		}elseif($arrayCampos["turno"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "Turno no puede estar vacio" . $arrayCampos["turno"]
			);

		}elseif($arrayCampos["oral"]=="" && $arrayCampos["topica"]=="" && $arrayCampos["rectal"]=="" && $arrayCampos["inhaladores"]=="" && $arrayCampos["gotas_oticas"]=="" && $arrayCampos["gotas_oftalmicas"]=="" && $arrayCampos["gotas_nasales"]=="" &&  $arrayCampos["otros"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => ". Todos los campos no pueden estar vacios " . $arrayCampos["otros"]
			);

		}else

			 $response = insertTable($conn,$arrayCampos,$table1);

	}

	return json_encode($response);	

}
//--------------------------------------------------------------------------
function insertarRegistroDescanso($conn,$arrayCampos,$order,$limit){

	$table1="registro_descanso";

	$response=array();

	$fecha = date("Y-m-d H:i:s", strtotime($arrayCampos["fecha"]));

	$arrayCampos["fecha"]= $fecha;



	//comprobamos si existe ese id en la tabla residente

	$residente= getItemJson("residente","id_residente",$arrayCampos["id_residente"],$order,$limit,$conn);

	// //compruebo que se seleccione al menos dos datos
	// $turno= getItemJson("residente","turno",$arrayCampos["turno"],$order,$limit,$conn);

	if(empty($residente)){

		http_response_code(400);

		$response=array(

			"status" => "ERROR",

			"message" => "No existe residente con ID " . $arrayCampos["id_residente"]

		);

	}else{

		//comprobamos si existe ese id en la tabla personal

		$personal= getItemJson("personal","id_personal",$arrayCampos["id_personal"],$order,$limit,$conn);

		if(empty($personal)){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "No existe personal con ID " . $arrayCampos["id_personal"]

			);

		}elseif($arrayCampos["turno"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "Turno no puede estar vacio" . $arrayCampos["turno"]
			);

		}elseif($arrayCampos["nocturno"]=="" && $arrayCampos["siesta"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "Nocturno y Siesta. Ambos no pueden estar vacios " . $arrayCampos["nocturno"]
			);

		}else

			 $response = insertTable($conn,$arrayCampos,$table1);

	}

	return json_encode($response);	

}
//-----------------------------------------------------------------
function insertarRegistroIncidencia($conn,$arrayCampos,$order,$limit){

	$table1="registro_incidencia";

	$response=array();

	$fecha = date("Y-m-d H:i:s", strtotime($arrayCampos["fecha"]));

	$arrayCampos["fecha"]= $fecha;



	//comprobamos si existe ese id en la tabla residente

	$residente= getItemJson("residente","id_residente",$arrayCampos["id_residente"],$order,$limit,$conn);

	if(empty($residente)){

		http_response_code(400);

		$response=array(

			"status" => "ERROR",

			"message" => "No existe residente con ID " . $arrayCampos["id_residente"]

		);

	}else{

		//comprobamos si existe ese id en la tabla personal

		$personal= getItemJson("personal","id_personal",$arrayCampos["id_personal"],$order,$limit,$conn);

		if(empty($personal)){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "No existe personal con ID " . $arrayCampos["id_personal"]

			);

		}elseif($arrayCampos["turno"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "Turno no puede estar vacio" . $arrayCampos["turno"]
			);

		}elseif($arrayCampos["incidencias"]==""){

			http_response_code(400);

			$response=array(

				"status" => "ERROR",

				"message" => "Incidencias no puede estar vacio" . $arrayCampos["incidencias"]
			);

		}else

			 $response = insertTable($conn,$arrayCampos,$table1);

	}
        



	return json_encode($response);	

}

//******************SUMA DE ENTRADAS Y SALIDAS DEL REGISTRO CONSTANTES VITALES************************

//-----------------------**ENTRADAS HIDRICAS**--------------------------
//INSERTAR LOS ID de entradas en la tabla tmp_hidricos
function insertarDatosParaSuma_Entradas($conn, $id_entradas, $id_residente, $otros)
{
	$sql = "DELETE FROM tmp_hidricos WHERE id_residente = ".$id_residente."";
	mysqli_query($conn, $sql);

	foreach($id_entradas as $id_entrada)
	{
		$sql= "INSERT INTO tmp_hidricos(id_residente, id_hidrico_e) VALUES (".$id_residente.", ".$id_entrada.");";
		mysqli_query($conn, $sql);
	}

	return totalValorHidricoEUsuario($conn, $id_residente, $otros);
}

//SUMA DE ENTRADAS
function totalValorHidricoEUsuario($conn, $id_residente, $otros)
{
	$sql = "SELECT SUM(ml) + '".$otros."' AS sumaEntradas FROM `hidrico_entrada` WHERE id_entrada IN ( SELECT id_hidrico_e from tmp_hidricos where id_residente = '".$id_residente."');";

	$resultado = mysqli_query($conn, $sql);

	$row=mysqli_fetch_assoc($resultado);

	return $row;
}
//-----------------------**SALIDAS HIDRICAS**--------------------------
//INSERTAR LOS ID de salidas en la tabla tmp_hidricos
function insertarDatosParaSuma_Salidas($conn, $id_salidas, $id_residente, $diuresis, $otros)
{
	$sql = "DELETE FROM tmp_hidricos WHERE id_residente = ".$id_residente."";
	mysqli_query($conn, $sql);

	foreach($id_salidas as $id_salida)
	{
		$sql= "INSERT INTO tmp_hidricos(id_residente, id_hidrico_s) VALUES (".$id_residente.", ".$id_salida.");";
		mysqli_query($conn, $sql);
	}

	return totalSumaSalidasUsuario($conn, $id_residente, $diuresis, $otros);
}

//SUMA DE SALIDAS
function totalSumaSalidasUsuario($conn, $id_residente, $diuresis, $otros)
{
	$sql = "SELECT SUM(ml) + '".$diuresis."' + '".$otros."' AS sumaSalidas FROM `hidrico_salida` WHERE id_salida IN ( SELECT id_hidrico_s from tmp_hidricos where id_residente = '".$id_residente."');";

	$resultado = mysqli_query($conn, $sql);

	$row=mysqli_fetch_assoc($resultado);

	return $row;
}

?>