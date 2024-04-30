<?php
function insertarConsulta($conn,$arrayCampos,$order,$limit){
	$table1="consulta";
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
		}else
			$response = insertTable($conn,$arrayCampos,$table1);		
	}
	return json_encode($response);	
}
?>