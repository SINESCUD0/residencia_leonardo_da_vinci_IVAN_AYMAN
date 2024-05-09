<?php


function insertTable($conn,$elements,$tableName){
	
	$response=array();
	if ($conn){	
	
		$array_keys = array_keys($elements);
		$sql = "insert into " . $tableName . " (";

		for ($i = 0; $i < count($array_keys); $i++) {
			if ($array_keys[$i] == "idName")
				continue;				
			if ($i != 0)
				$sql .= ", ";
			else
				$sql .= "";
			$sql .= $array_keys[$i];
			$sql .= "";
		}
			
		$sql .= ") values (";	
		for ($i = 0; $i < count($array_keys); $i++) {			
			if ($i != 0)
				$sql .= ",";		
			if ($array_keys[$i] == "contrasena") {
				$valor = $elements[$array_keys[$i]];
				$clave = password_hash($valor, PASSWORD_DEFAULT);
				
				$sql .= "'" . $clave . "'";
			}
			else {
				$val = $elements[$array_keys[$i]];
				if ($val == "null")	{
					$sql .= "null";
				} else if($val == "fecha_evaluacion"){
					$sql .= "now()";
				} else {
					$sql .= "'" . $val . "'";
				}
			}
		}
		
		$sql .= ")";
		
		if (mysqli_query($conn, $sql)) {
			$response=array(
				"status" => "OK",
				"newIdCreated" => mysqli_insert_id($conn),
				"queryFinal" => $sql
			);	
		}else{
			http_response_code(400);
			$response=array(
				"status" => "ERROR",
				"message" => mysqli_error($conn)
			);
		}
	}
	else{
		http_response_code(500);
		$response=array(
				"status" => "ERROR",
				"message" => mysqli_error($conn)
			);
	}
	return $response;
}

function updateTableWhereEquals($conn,$fieldsToUpdate,$tableName,$fieldsWhere){
	
	if ($conn){	
	
		$array_keys = array_keys($fieldsToUpdate);
		$array_keys_where = array_keys($fieldsWhere);
		$sql = "update " . $tableName . " set ";	
		$bFirst = true;
		for ($i = 0; $i < count($array_keys); $i++) {
			if (!$bFirst)
				$sql .= ",";					
			$val = $fieldsToUpdate[$array_keys[$i]];		
			if ($array_keys[$i] == "contrasena") { 
				$valor = $fieldsToUpdate[$array_keys[$i]];
				$clave = password_hash($valor, PASSWORD_DEFAULT);
				$val = $clave;
			}			
			if ($val == "null"){
				$sql .= $array_keys[$i] . " = null";
			} else if ($val == "fecha"){
				$sql .= $array_keys[$i] . " = now()";
			} else {
				$sql .= $array_keys[$i] . " = '" . $val . "'";
			}
			
			$bFirst = false;
		}
		
		$sql .= " where ";
		
		for ($i = 0; $i < count($array_keys_where); $i++) {
			if ($i > 0)
				$sql .= " AND ";
			
			$val = $fieldsWhere[$array_keys_where[$i]];		
			if ($val == "null")
				$sql .= $array_keys_where[$i] . " is null";	
			else
				$sql .= $array_keys_where[$i] . " = '" . $val . "'";

		}
		if (mysqli_query($conn, $sql)) {
			$response=array(
				"status" => "OK",
				"sql"=> $sql
			);	
		}else{
			http_response_code(400);
			$response=array(
				"status" => "ERROR",
				"message" => mysqli_error($conn)
			);
		}
	}
	else{
		http_response_code(500);
		$response=array(
				"status" => "ERROR",
				"message" => mysqli_error($conn)
			);
	}
	return $response;
	
}

function getItemJson($what,$idName,$id,$order,$limit,$conn){

    if ($conn){
        $sql = "select * from " . $what . " where " . $idName  . "='$id'" . $order;
        $rs = mysqli_query($conn, $sql);
        $jsonConverter = new jsonConverter;
        $table_name = $what;
        $element_name = "item";
        $rs = mysqli_query($conn, $sql);
        $jsonConverter->cdata = true;
        $response = $jsonConverter->xmlQueryResultConvert($rs);
        return $response;
    }else
        return "No conexion";
}
?>
