<?php



/*extraigo el rol del usuario*/

function rolUsuario($idUser, $conn){

	$sql = "SELECT rol, nombre, apellido1 FROM personal WHERE id_personal = '$idUser'";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($result);

	

	return $row;

}	



//TOTAL DE PERSONAL

function totalPersonal($conn){

	$sql = "SELECT COUNT(id_personal) AS total FROM personal WHERE fecha_baja IS NULL";

	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);

	

	return $row['total'];

}



//TOTAL DE RESIDENTES

function totalResidente($conn){

	$sql = "SELECT COUNT(id_residente) AS total FROM residente WHERE fecha_baja IS NULL";

	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);

	

	return $row['total'];

}



//TOTAL DE HABITACIONES OCUPADAS

function habitacionesOcupadas($conn){

	$sql = "SELECT COUNT(id_habitacion) AS total FROM historico_res_hab WHERE fecha_fin IS NULL";

	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);



	return $row['total'];

}



//TOTAL DE HABITACIONES OCUPADAS que calcula el porcentaje para ponerlo en la progressbar del inicio

function totalHabitaciones($conn){

	$habitacionesOcupadas= habitacionesOcupadas($conn);

	$resultado=0;

	

	$sql1 = "SELECT sum(num_camas) AS total FROM habitacion";

	$result1 = mysqli_query($conn,$sql1);

	$row1 = mysqli_fetch_assoc($result1);



	if($habitacionesOcupadas>0){

		$resultado = (($habitacionesOcupadas * 100) / $row1['total']);

	}

	return number_format($resultado);

}



//LISTADO DEL PERSONAL EN ACTIVO

function listadoPersonalActivo($conn){	

	$listado=array();

	$sql= "SELECT id_personal,dni_personal,apellido1,apellido2,nombre FROM personal WHERE fecha_baja IS NULL ORDER BY apellido1,apellido2,nombre ASC ";

	$result = mysqli_query($conn,$sql);

	if($result){

		while($row=mysqli_fetch_assoc($result)){

			array_push($listado,array($row['id_personal'],$row['dni_personal'],$row['apellido1'],$row['apellido2'],$row['nombre']));

		}

	}else

		trigger_error ("Error en $sql , error: " . mysqli_error($conn));



	return $listado;

}



//LISTADO DEL PERSONAL, ACTIVO E INACTIVO

function listadoPersonal($conn){	

	$listado=array();

	$sql= "SELECT id_personal,dni_personal,apellido1,apellido2,nombre FROM personal ORDER BY apellido1,apellido2,nombre ASC ";

	$result = mysqli_query($conn,$sql);

	if($result){

		while($row=mysqli_fetch_assoc($result)){

			array_push($listado,array($row['id_personal'],$row['dni_personal'],$row['apellido1'],$row['apellido2'],$row['nombre']));

		}

	}else

		trigger_error ("Error en $sql , error: " . mysqli_error($conn));



	return $listado;

}



//LISTADO DE PLANTAS (en función de las habitaciones que haya en la base de datos)

function listadoPlantas($conn){	

	$listado=array();

	$sql= "SELECT DISTINCT SUBSTR(id_habitacion,1,1) as planta  FROM habitacion";

	$result = mysqli_query($conn,$sql);

	if($result){

		while($row=mysqli_fetch_assoc($result)){

			array_push($listado,array($row['planta']));

		}

	}else

		trigger_error ("Error en $sql , error: " . mysqli_error($conn));



	return $listado;

}



//LISTADO RESIDENTES EN ACTIVO

function listadoResidentesActivos($conn){

	$listado=array();

	$sql= "SELECT id_residente,dni_residente,apellido1,apellido2,nombre,n_expediente FROM residente WHERE fecha_baja IS NULL ORDER BY apellido1,apellido2,nombre ASC ";

	$result = mysqli_query($conn,$sql);

	if($result){

		while($row=mysqli_fetch_assoc($result)){

			array_push($listado,array($row['id_residente'],$row['dni_residente'],$row['apellido1'],$row['apellido2'],$row['nombre'],$row['n_expediente']));

		}

	}else

		trigger_error ("Error en $sql , error: " . mysqli_error($conn));



	return $listado;

}



function listadoResidentes($conn){

	$listado=array();

	$sql= "SELECT id_residente,dni_residente,apellido1,apellido2,nombre,n_expediente FROM residente ORDER BY apellido1,apellido2,nombre ASC ";

	$result = mysqli_query($conn,$sql);

	if($result){

		while($row=mysqli_fetch_assoc($result)){

			array_push($listado,array($row['id_residente'],$row['dni_residente'],$row['apellido1'],$row['apellido2'],$row['nombre'],$row['n_expediente']));

		}

	}else

		trigger_error ("Error en $sql , error: " . mysqli_error($conn));



	return $listado;

	

}



//LISTADO DE LAS HABITACIONES LIBRES POR TIPO (individual o doble)

function habitacionesLibresPorTipo($conn,$numCamas){

	$listado=array();

	$sql = "SELECT habitacion.id_habitacion  FROM habitacion WHERE habitacion.num_camas = '$numCamas' AND habitacion.num_camas > (SELECT COUNT(historico_res_hab.id_habitacion) FROM historico_res_hab WHERE habitacion.id_habitacion = historico_res_hab.id_habitacion AND historico_res_hab.fecha_fin IS NULL);";

	$result = mysqli_query($conn,$sql);



	if($result){

		while($row=mysqli_fetch_assoc($result)){

			array_push($listado,array($row['id_habitacion']));

		}

	}else

		trigger_error ("Error en $sql , error: " . mysqli_error($conn));



	return $listado;



}



//LISTADO DE LAS HABITACIONES OCUPADAS (AMBAS, individual y doble) Y SUS OCUPANTES

function listadoHabitacionesOcupadasConResidentes($conn){

	$listado=array();

	$sql = "SELECT habitacion.id_habitacion, residente.id_residente, residente.nombre,residente.apellido1,residente.apellido2 FROM habitacion,historico_res_hab,residente  WHERE habitacion.id_habitacion = historico_res_hab.id_habitacion AND historico_res_hab.id_residente=residente.id_residente AND historico_res_hab.fecha_fin IS NULL order by id_habitacion ASC;";

	$result = mysqli_query($conn,$sql);

	if($result){

		while($row=mysqli_fetch_assoc($result)){

			array_push($listado,array($row['id_residente'],$row['id_habitacion'],$row['apellido1'],$row['apellido2'],$row['nombre']));

		}

	}else

		trigger_error ("Error en $sql , error: " . mysqli_error($conn));



	return $listado;

	

	

}



//LISTADO DE LOS TURNOS

function listadoTurnos($conn){

	$listado=array();

	$sql= "SELECT id_turno,descripcion FROM turno";

	$result = mysqli_query($conn,$sql);

	if($result){

		while($row=mysqli_fetch_assoc($result)){

			array_push($listado,array($row['id_turno'],$row['descripcion']));

		}

	}else

		trigger_error ("Error en $sql , error: " . mysqli_error($conn));



	return $listado;

	

	

}







//------------------ CARRITO --------------// - UPDATE



//LISTADO DE PRODUCTOS

function listadoCategoriaProducto($conn){	

	$listado=array();

	$sql= "SELECT DISTINCT id_articulo, nombre, categoria, precio_unitario, stock FROM articulo GROUP BY categoria";

	$result = mysqli_query($conn,$sql);

	if($result){

		while($row=mysqli_fetch_assoc($result)){

			array_push($listado,array($row['id_articulo'],$row['nombre'],$row['categoria'],$row['precio_unitario'],$row['sotck']));

		}

	} else{

		trigger_error ("Error en $sql , error: " . mysqli_error($conn));

	}



	return $listado;

}



//LISTADO DE PROOVEDORES DE ALIMENTACIÓN

function listaProveedorAlimentacion($conn){	

	$listado=array();

	$sql = "SELECT id_proveedor, nombre FROM proveedor WHERE id_proveedor='8' OR id_proveedor='2' OR id_proveedor='3' OR id_proveedor='7' OR id_proveedor='4' OR id_proveedor='6' ORDER BY nombre";

	$result = mysqli_query($conn,$sql);

	if($result){

		while($row=mysqli_fetch_assoc($result)){

			array_push($listado,array($row['id_proveedor'],$row['nombre']));

		}

	} else{

		trigger_error ("Error en $sql , error: " . mysqli_error($conn));

	}



	return $listado;

}



//LISTADO DE PROOVEDORES DE HIGIENE

function listaProveedorHiguiene($conn){	

	$listado=array();

	$sql = "SELECT id_proveedor, nombre FROM proveedor WHERE id_proveedor='5' ORDER BY nombre";

	$result = mysqli_query($conn,$sql);

	if($result){

		while($row=mysqli_fetch_assoc($result)){

			array_push($listado,array($row['id_proveedor'],$row['nombre']));

		}

	} else{

		trigger_error ("Error en $sql , error: " . mysqli_error($conn));

	}



	return $listado;

}



//LISTADO DE PROOVEDORES DE LIMPIEZA

function listaProveedorLimpieza($conn){	

	$listado=array();

	$sql = "SELECT id_proveedor, nombre FROM proveedor WHERE id_proveedor='9' ORDER BY nombre";

	$result = mysqli_query($conn,$sql);

	if($result){

		while($row=mysqli_fetch_assoc($result)){

			array_push($listado,array($row['id_proveedor'],$row['nombre']));

		}

	} else{

		trigger_error ("Error en $sql , error: " . mysqli_error($conn));

	}



	return $listado;

}


// --------------------**INICIO: DESPLEGABLE ENTRADAS**-------------------------------
//Hago una consulta de todos los datos de la tabla hidrico_entrada para mostrar esos datos en un desplegable
function listadoEntradasHidrico($conn){	

	$listaDesplegable=array();

	$sql= "SELECT * FROM hidrico_entrada ORDER BY id_entrada";

	$result = mysqli_query($conn,$sql);

	if($result){

		while($row=mysqli_fetch_assoc($result)){

			array_push($listaDesplegable,array($row['id_entrada'],$row['tipo'],$row['envase'],$row['numero'],$row['ml']));

		}

	}else{
		trigger_error ("Error en $sql , error: " . mysqli_error($conn));
	}

	return $listaDesplegable;

}

// --------------------**FIN: DESPLEGABLE ENTRADAS**-------------------------------


// --------------------**INICIO: DESPLEGABLE salidas**-------------------------------
//Hago una consulta de todos los datos de la tabla hidrico_salida para mostrar esos datos en un desplegable
function listadoSalidasHidrico($conn){	

	$listaDesplegable=array();

	$sql= "SELECT * FROM hidrico_salida ORDER BY id_salida ";

	$result = mysqli_query($conn,$sql);

	if($result){

		while($row=mysqli_fetch_assoc($result)){

			array_push($listaDesplegable,array($row['id_salida'],$row['tipo'],$row['ml']));

		}

	}else{
		trigger_error ("Error en $sql , error: " . mysqli_error($conn));
	}

	return $listaDesplegable;

}
// --------------------**FIN: DESPLEGABLE salidas**-------------------------------


?>