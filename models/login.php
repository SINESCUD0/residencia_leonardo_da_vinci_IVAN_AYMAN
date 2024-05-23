<?php

/*funcion que extrae el id del usuario*/
function cliente($myusername, $mypassword, $conn){
	$sql = "SELECT id_personal FROM personal WHERE usuario = '$myusername' AND contrasena = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	return $row;
}

/*funcion que extrae si existe el usuario en la BBDD para logearse*/
function resultado($myusername, $mypassword, $conn){
	$sql_clave = "SELECT id_personal, contrasena FROM personal WHERE usuario = '$myusername'  AND fecha_baja IS NULL";
	$rs_clave = mysqli_query($conn,$sql_clave);
	$result_clave = mysqli_fetch_assoc($rs_clave);
	
	if(password_verify($mypassword,$result_clave['contrasena'])){
		return $result_clave['id_personal'];
	} else {
		return 0;
	}

}

/*saco los datos del usuario para mostrarlos en la pantalla welcome*/
function datosWelcome($conn, $cliente){
	$selectDatos = "SELECT username, passcode, customer_id, email FROM users, customer WHERE users.id = $cliente AND customer.customer_id = $cliente;";
	$queryDatos = mysqli_query($conn,$selectDatos);
    $datos = mysqli_fetch_array($queryDatos,MYSQLI_ASSOC);
	
	return $datos;
}



?>