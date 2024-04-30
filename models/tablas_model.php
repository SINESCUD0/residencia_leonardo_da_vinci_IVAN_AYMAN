<?php

function tablaPersonalHistorico($conn){

	$sql = "SELECT id_personal,dni_personal, nombre, apellido1, apellido2, rol, fecha_alta, fecha_baja, motivo_baja FROM personal  where fecha_baja is NOT NULL ORDER BY fecha_alta DESC";

	return json_encode(obtenerDatos($conn,$sql));

}



function tablaPersonalActivo($conn){

	$sql = "SELECT dni_personal, nombre, apellido1, apellido2, rol, tipo_responsabilidad, fecha_alta FROM personal where fecha_baja is NULL ORDER BY fecha_alta DESC";

	return json_encode(obtenerDatos($conn,$sql));

}



///////--FUNCIONES HISTORICO PERSONAL LIMPIEZA (NO ACTIVOS)-///

function tablaPersonalHistoricoLimpieza($conn){

    $sql = "SELECT id_personal,dni_personal, nombre, apellido1, apellido2, rol, fecha_alta, fecha_baja, motivo_baja FROM personal  where fecha_baja is NOT NULL AND rol='limpieza' ORDER BY fecha_alta DESC";

	return json_encode(obtenerDatos($conn,$sql));

}



///////--FUNCIONES PERSONAL LIMPIEZA (ACTIVOS)///

function tablaPersonalActivoLimpieza($conn){

	$sql = "SELECT dni_personal, nombre, apellido1, apellido2, direccion, telefono, email, turno.descripcion as turno, planta, rol, tipo_responsabilidad, fecha_alta FROM personal, turno where personal.id_turno=turno.id_turno AND fecha_baja is NULL AND rol='limpieza' ORDER BY fecha_alta DESC";

	return json_encode(obtenerDatos($conn,$sql));

}



///////--FUNCIONES HISTORICO PERSONAL MANTENIMIENTO (NO ACTIVOS)-///

function tablaPersonalHistoricoMantenimiento($conn){

    $sql = "SELECT id_personal,dni_personal, nombre, apellido1, apellido2, rol, fecha_alta, fecha_baja, motivo_baja FROM personal  where fecha_baja is NOT NULL AND rol='mantenimiento' ORDER BY fecha_alta DESC";

	return json_encode(obtenerDatos($conn,$sql));

}





/////--FUNCIONES PERSONAL MANTENIMIENTO (ACTIVOS)-///

function tablaPersonalActivoMantenimiento($conn){

	$sql = "SELECT dni_personal, nombre, apellido1, apellido2, direccion, telefono, email, turno.descripcion as turno, planta, rol, tipo_responsabilidad, fecha_alta FROM personal, turno where personal.id_turno=turno.id_turno AND fecha_baja is NULL AND rol='mantenimiento' ORDER BY fecha_alta DESC";

	return json_encode(obtenerDatos($conn,$sql));

}





///////--FUNCIONES HISTORICO PERSONAL RESTO (NO ACTIVOS)-///

function tablaPersonalHistoricoResto($conn){

    $sql = "SELECT id_personal,dni_personal, nombre, apellido1, apellido2, rol, fecha_alta, fecha_baja, motivo_baja FROM personal where fecha_baja is NOT NULL AND rol<>'limpieza' AND rol<>'mantenimiento' ORDER BY fecha_alta DESC";

	return json_encode(obtenerDatos($conn,$sql));

}



/////--FUNCIONES PERSONAL RESTO (ACTIVOS)-///

function tablaPersonalActivoResto($conn){

	// $sql = "SELECT dni_personal, nombre, apellido1, apellido2, direccion, telefono, email, turno.descripcion as turno, planta, rol, tipo_responsabilidad, fecha_alta FROM personal, turno where personal.id_turno=turno.id_turno AND fecha_baja is NULL AND rol<>'limpieza' AND rol<>'mantenimiento' ORDER BY fecha_alta DESC";

    $sql = "SELECT DISTINCT dni_personal, personal.nombre, personal.apellido1, personal.apellido2, direccion, telefono, email, turno.descripcion as turno, planta, rol, tipo_responsabilidad, personal.fecha_alta, residente.nombre as nombreresidente, residente.apellido1 as apellido1residente, residente.apellido2 as apellido2residente FROM personal, turno, residente where personal.id_turno=turno.id_turno AND personal.id_personal=residente.id_personal_responsable AND personal.fecha_baja is NULL AND rol<>'limpieza' AND rol<>'mantenimiento' ORDER BY fecha_alta DESC";

	return json_encode(obtenerDatos($conn,$sql));

}



///



function tablaDatosContacto($conn,$idResidente){

	$sql = "SELECT familiar.*, rel_familiar_residente.parentesco FROM familiar,rel_familiar_residente WHERE rel_familiar_residente.id_familiar = familiar.id_familiar AND  rel_familiar_residente.id_residente = $idResidente AND es_contacto_principal = 1";

	return json_encode(obtenerDatos($conn,$sql));	

}



function tablaDatosResidenteHistorico($conn){

	$sql = "SELECT id_residente,n_expediente,dni_residente, nombre, apellido1, apellido2, fecha_nacimiento, discapacidad, situacion_medica,grado_dependencia, fecha_alta, fecha_baja, motivo_baja, barthel FROM residente WHERE fecha_baja IS NOT NULL ORDER BY fecha_alta DESC";

	$datos= obtenerDatos($conn,$sql);

	

	foreach($datos['data'] as $clave =>$valor){

		$datos['data'][$clave]['discapacidad']= convertirATextoDiscapacidad((array)json_decode($valor['discapacidad']));

		$datos['data'][$clave]['situacion_medica']=convertirATextoSituacionMedica((array)json_decode($valor['situacion_medica']));		

	}	

	return json_encode($datos);		

}

function tablaDatosResidenteAlta($conn){

	$sql = "SELECT n_expediente,dni_residente, nombre, apellido1, apellido2, fecha_nacimiento, discapacidad, situacion_medica,grado_dependencia, fecha_alta, kath, barthel FROM residente WHERE fecha_baja IS NULL ORDER BY fecha_alta DESC";

	$datos= obtenerDatos($conn,$sql);

	

	foreach($datos['data'] as $clave =>$valor){

		$datos['data'][$clave]['discapacidad']= convertirATextoDiscapacidad((array)json_decode($valor['discapacidad']));

		$datos['data'][$clave]['situacion_medica']=convertirATextoSituacionMedica((array)json_decode($valor['situacion_medica']));		

	}	

	return json_encode($datos);	

}



function tablaDatosIncidencias($conn){

	$sql = "SELECT personal.nombre, personal.apellido1, residente.dni_residente, incidencia.fecha, incidencia.descripcion, incidencia.contenido FROM incidencia, personal, residente WHERE incidencia.id_personal = personal.id_personal AND incidencia.id_residente = residente.id_residente ORDER BY incidencia.fecha DESC";

	return json_encode(obtenerDatos($conn,$sql));	

}



function tablaDatosConsultaMedica($conn,$idResidente){

	$sql = "SELECT residente.dni_residente, personal.nombre AS nombre_personal, consulta.fecha, consulta.causa, consulta.sintomas, consulta.tratamiento, consulta.revision, consulta.otros FROM residente, personal, consulta WHERE consulta.id_residente = $idResidente AND consulta.id_residente = residente.id_residente AND personal.id_personal = consulta.id_personal ORDER BY consulta.fecha DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}



function tablaDatosTratamientos($conn,$idResidente){

	$sql = "SELECT fecha, tratamiento FROM consulta WHERE id_residente = $idResidente ORDER BY fecha DESC";

	return json_encode(obtenerDatos($conn,$sql));	

}

function tablaDatosHabitaciones($conn){

	$sql = "SELECT residente.nombre, residente.apellido1, residente.dni_residente AS dni, historico_res_hab.id_habitacion, historico_res_hab.fecha_inicio AS fecha_inicio, DATE_FORMAT(historico_res_hab.fecha_fin, '%d/%m/%Y %H:%i') AS fecha_fin FROM residente, historico_res_hab WHERE historico_res_hab.id_residente = residente.id_residente";

	return json_encode(obtenerDatos($conn,$sql));

}



function tablaHorarioPersonal($conn,$idPersonal){

	$sql = "SELECT personal.nombre, personal.apellido1, personal.apellido2, personal.rol, turno.descripcion as horario FROM personal,turno where turno.id_turno=personal.id_turno AND personal.id_personal = $idPersonal ;";

	return json_encode(obtenerDatos($conn,$sql));

}







function obtenerDatos($conn,$sql){

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



//Seteamos correctamente la información a partir del JSON de la base de datos para DISCAPACIDAD

 function convertirATextoDiscapacidad($discapacidadArray){

	$discapacidadTexto="";



	foreach($discapacidadArray as $claveDiscapacidad =>$valorDiscapacidad){

			

		if(isset($discapacidadArray['otraDiscapacidadTexto']) && $claveDiscapacidad=='otraDiscapacidad' && $valorDiscapacidad==true)

			$discapacidadTexto=$discapacidadTexto.ucfirst($discapacidadArray['otraDiscapacidadTexto'])."<br/>";

		else if($claveDiscapacidad!='otraDiscapacidad' && $claveDiscapacidad!='otraDiscapacidadTexto'){

			if($claveDiscapacidad=='enfermendadMental' && $valorDiscapacidad==true)

				$discapacidadTexto=$discapacidadTexto."Enfermendad Mental"."<br/>";

			else if($valorDiscapacidad==true)

				$discapacidadTexto=$discapacidadTexto.ucfirst($claveDiscapacidad)."<br/>";

		}

	}

	return $discapacidadTexto;

 }

 

 function convertirATextoSituacionMedica($sitMedicaArray){

	 //Seteamos correctamente la información a partir del JSON de la base de datos para SITUACION MEDICA

	$sitMedicaTexto="";

	foreach($sitMedicaArray as $claveSitMedica =>$valorSitMedica){	

		if(isset($sitMedicaArray['otraSitMedicaTexto']) && $claveSitMedica=='otraSitMedica' && $valorSitMedica==true)

			$sitMedicaTexto=$sitMedicaTexto.ucfirst($sitMedicaArray['otraSitMedicaTexto'])."<br/>";

		else if($claveSitMedica!='otraSitMedica' && $claveSitMedica!='otraSitMedicaTexto'){

			if($claveSitMedica=='DificultadLenguaje' && $valorSitMedica==true)

				$sitMedicaTexto=$sitMedicaTexto."Dificultades del lenguaje"."<br/>";

			else if($claveSitMedica=='debilidadDebMotriz' && $valorSitMedica==true)

				$sitMedicaTexto=$sitMedicaTexto."Debilidad motriz"."<br/>";

			else if($claveSitMedica=='deterioroCognitivo' && $valorSitMedica==true)

				$sitMedicaTexto=$sitMedicaTexto."Deterioro cognitivo"."<br/>";

			else if($claveSitMedica=='enfermedadLeve' && $valorSitMedica==true)

				$sitMedicaTexto=$sitMedicaTexto."Enfermedad leve"."<br/>";

			else if($claveSitMedica=='pronosticoReservado' && $valorSitMedica==true)

				$sitMedicaTexto=$sitMedicaTexto."Pronóstico reservado"."<br/>";

			else if($claveSitMedica=='tratamCurativo' && $valorSitMedica==true)

				$sitMedicaTexto=$sitMedicaTexto."Tratamiento curativo"."<br/>";

			else if($claveSitMedica=='tratamFarmaCron' && $valorSitMedica==true)

				$sitMedicaTexto=$sitMedicaTexto."Tratamiento farmacológico crónico"."<br/>";

			else if($claveSitMedica=='tratamFarmaTemp' && $valorSitMedica==true)

				$sitMedicaTexto=$sitMedicaTexto."Tratamiento farmacológico temporal"."<br/>";

			else if($claveSitMedica=='tratamPaliativo' && $valorSitMedica==true)

				$sitMedicaTexto=$sitMedicaTexto."Tratamiento paliativo"."<br/>";

			else if($claveSitMedica=='desorientacion' && $valorSitMedica==true)

				$sitMedicaTexto=$sitMedicaTexto."Desorientación"."<br/>";

			}

		}

		return $sitMedicaTexto; 

 }

function tablaDatosHistorialPai($conn){

	$sql = "SELECT id_residente,n_expediente,dni_residente, nombre, apellido1, apellido2, fecha_nacimiento, discapacidad, situacion_medica,grado_dependencia, fecha_alta, fecha_baja, motivo_baja, barthel FROM residente WHERE fecha_baja IS NOT NULL ORDER BY fecha_alta DESC";

	$datos= obtenerDatos($conn,$sql);

	

	foreach($datos['data'] as $clave =>$valor){

		$datos['data'][$clave]['discapacidad']= convertirATextoDiscapacidad((array)json_decode($valor['discapacidad']));

		$datos['data'][$clave]['situacion_medica']=convertirATextoSituacionMedica((array)json_decode($valor['situacion_medica']));		

	}	

	return json_encode($datos);		

}


//-----------**|1|Mostrar historial de la tabla CONSTANTES**-------------------------------
function tablaDatosRegistroConstantes($conn,$idResidente,$fecha){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente, CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_constante.fecha, registro_constante.fc, registro_constante.ta, registro_constante.t, registro_constante.glucemia, registro_constante.suma_entradas, registro_constante.suma_salidas,registro_constante.bh_resultado, registro_constante.turno FROM residente, personal,registro_constante WHERE registro_constante.id_residente = residente.id_residente AND personal.id_personal = registro_constante.id_personal AND registro_constante.id_residente = '$idResidente' AND DATE(registro_constante.fecha)='$fecha' ORDER BY DATE(registro_constante.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}

//fechas
function tablaDatosRegistroConstantesIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente,  CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_constante.fecha, registro_constante.fc, registro_constante.ta, registro_constante.t, registro_constante.glucemia, registro_constante.suma_entradas, registro_constante.suma_salidas,registro_constante.bh_resultado, registro_constante.turno FROM residente, personal,registro_constante WHERE registro_constante.id_residente = residente.id_residente AND personal.id_personal = registro_constante.id_personal AND registro_constante.id_residente = '$idResidente' AND DATE(registro_constante.fecha)>='$fechaDesde' AND DATE(registro_constante.fecha)<='$fechaHasta' ORDER BY DATE(registro_constante.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}
//-----------**|1|Mostrar historial de la tabla CONSTANTES**-------------------------------

//-------------------------**|2|Mostrar historial de la tabla ELIMINACIÓN**--------
function tablaDatosRegistroEliminacion($conn,$idResidente,$fecha){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente, CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_eliminacion.fecha, registro_eliminacion.diuresis, registro_eliminacion.panal_mojado, registro_eliminacion.deposicion, registro_eliminacion.bolsa_clostomia, registro_eliminacion.enema, registro_eliminacion.vomitos, registro_eliminacion.otros, registro_eliminacion.turno FROM residente, personal,registro_eliminacion WHERE registro_eliminacion.id_residente = residente.id_residente AND personal.id_personal = registro_eliminacion.id_personal AND registro_eliminacion.id_residente = '$idResidente' AND DATE(registro_eliminacion.fecha)='$fecha' ORDER BY DATE(registro_eliminacion.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}

function tablaDatosRegistroEliminacionIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente, CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_eliminacion.fecha, registro_eliminacion.diuresis, registro_eliminacion.panal_mojado, registro_eliminacion.deposicion, registro_eliminacion.bolsa_clostomia, registro_eliminacion.enema, registro_eliminacion.vomitos, registro_eliminacion.otros, registro_eliminacion.turno FROM residente, personal,registro_eliminacion WHERE registro_eliminacion.id_residente = residente.id_residente AND personal.id_personal = registro_eliminacion.id_personal AND registro_eliminacion.id_residente = '$idResidente' AND DATE(registro_eliminacion.fecha)>='$fechaDesde' AND DATE(registro_eliminacion.fecha)<='$fechaHasta' ORDER BY DATE(registro_eliminacion.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}
//-----------**|2|Mostrar TABLAS REGISTRO_**-------------------------------


//-------------------------**|3|Mostrar historial de la tabla ALIMENRACIÓN**--------
function tablaDatosRegistroAlimentacion($conn,$idResidente,$fecha){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente, CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_alimentacion.fecha, registro_alimentacion.adecuada, registro_alimentacion.inadecuada, registro_alimentacion.observaciones, registro_alimentacion.turno FROM residente, personal,registro_alimentacion WHERE registro_alimentacion.id_residente = residente.id_residente AND personal.id_personal = registro_alimentacion.id_personal AND registro_alimentacion.id_residente = '$idResidente' AND DATE(registro_alimentacion.fecha)='$fecha' ORDER BY DATE(registro_alimentacion.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}

function tablaDatosRegistroAlimentacionIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente, CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_alimentacion.fecha, registro_alimentacion.adecuada, registro_alimentacion.inadecuada, registro_alimentacion.observaciones, registro_alimentacion.turno FROM residente, personal,registro_alimentacion WHERE registro_alimentacion.id_residente = residente.id_residente AND personal.id_personal = registro_alimentacion.id_personal AND registro_alimentacion.id_residente = '$idResidente' AND DATE(registro_alimentacion.fecha)>='$fechaDesde' AND DATE(registro_alimentacion.fecha)<='$fechaHasta' ORDER BY DATE(registro_alimentacion.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}
//-----------**|3|Mostrar TABLAS REGISTRO ALIMENRACIÓN**-------------------------------



//-------------------------**|4|Mostrar historial de la tabla MOVILIZACIÓN**--------
function tablaDatosRegistroMovilizacion($conn,$idResidente,$fecha){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente, CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_movilizacion.fecha, registro_movilizacion.rh_fisica, registro_movilizacion.ejercicios_cama, registro_movilizacion.cambio_postural, registro_movilizacion.levantar_alsillon, registro_movilizacion.encamado, registro_movilizacion.otros, registro_movilizacion.turno FROM residente, personal,registro_movilizacion WHERE registro_movilizacion.id_residente = residente.id_residente AND personal.id_personal = registro_movilizacion.id_personal AND registro_movilizacion.id_residente = '$idResidente' AND DATE(registro_movilizacion.fecha)='$fecha' ORDER BY DATE(registro_movilizacion.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}

function tablaDatosRegistroMovilizacionIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente, CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_movilizacion.fecha, registro_movilizacion.rh_fisica, registro_movilizacion.ejercicios_cama, registro_movilizacion.cambio_postural, registro_movilizacion.levantar_alsillon, registro_movilizacion.encamado, registro_movilizacion.otros, registro_movilizacion.turno FROM residente, personal,registro_movilizacion WHERE registro_movilizacion.id_residente = residente.id_residente AND personal.id_personal = registro_movilizacion.id_personal AND registro_movilizacion.id_residente = '$idResidente' AND DATE(registro_movilizacion.fecha)>='$fechaDesde' AND DATE(registro_movilizacion.fecha)<='$fechaHasta' ORDER BY DATE(registro_movilizacion.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}
//-----------**|4|Mostrar TABLAS REGISTRO MOVILIZACIÓN**-------------------------------




//-------------------------**|5|Mostrar historial de la tabla HIGIENE**--------
function tablaDatosRegistroHigiene($conn,$idResidente,$fecha){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente, CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_higiene.fecha, registro_higiene.bano_ducha, registro_higiene.aseo, registro_higiene.higiene_bucal, registro_higiene.unas_manos, registro_higiene.unas_pies, registro_higiene.afeitado,registro_higiene.higiene_genital, registro_higiene.vestido, registro_higiene.otros, registro_higiene.turno FROM residente, personal,registro_higiene WHERE registro_higiene.id_residente = residente.id_residente AND personal.id_personal = registro_higiene.id_personal AND registro_higiene.id_residente = '$idResidente' AND DATE(registro_higiene.fecha)='$fecha' ORDER BY DATE(registro_higiene.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}

function tablaDatosRegistroHigieneIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente, CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_higiene.fecha, registro_higiene.bano_ducha, registro_higiene.aseo, registro_higiene.higiene_bucal, registro_higiene.unas_manos, registro_higiene.unas_pies, registro_higiene.afeitado, registro_higiene.higiene_genital, registro_higiene.vestido, registro_higiene.otros, registro_higiene.turno FROM residente, personal,registro_higiene WHERE registro_higiene.id_residente = residente.id_residente AND personal.id_personal = registro_higiene.id_personal AND registro_higiene.id_residente = '$idResidente' AND DATE(registro_higiene.fecha)>='$fechaDesde' AND DATE(registro_higiene.fecha)<='$fechaHasta' ORDER BY DATE(registro_higiene.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}
//-----------**|5|Mostrar TABLAS REGISTRO HIGIENE**-------------------------------



//-------------------------**|6|Mostrar historial de la tabla MEDICACION**--------
function tablaDatosRegistroMedicacion($conn,$idResidente,$fecha){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente, CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_medicacion.fecha, registro_medicacion.oral, registro_medicacion.topica, registro_medicacion.rectal, registro_medicacion.inhaladores, registro_medicacion.gotas_oticas, registro_medicacion.gotas_oftalmicas,registro_medicacion.gotas_nasales, registro_medicacion.otros, registro_medicacion.turno FROM residente, personal,registro_medicacion WHERE registro_medicacion.id_residente = residente.id_residente AND personal.id_personal = registro_medicacion.id_personal AND registro_medicacion.id_residente = '$idResidente' AND DATE(registro_medicacion.fecha)='$fecha' ORDER BY DATE(registro_medicacion.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}

function tablaDatosRegistroMedicacionIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente, CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_medicacion.fecha, registro_medicacion.oral, registro_medicacion.topica, registro_medicacion.rectal, registro_medicacion.inhaladores, registro_medicacion.gotas_oticas, registro_medicacion.gotas_oftalmicas, registro_medicacion.gotas_nasales, registro_medicacion.otros, registro_medicacion.turno FROM residente, personal,registro_medicacion WHERE registro_medicacion.id_residente = residente.id_residente AND personal.id_personal = registro_medicacion.id_personal AND registro_medicacion.id_residente = '$idResidente' AND DATE(registro_medicacion.fecha)>='$fechaDesde' AND DATE(registro_medicacion.fecha)<='$fechaHasta' ORDER BY DATE(registro_medicacion.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}
//-----------**|6|Mostrar TABLAS REGISTRO MEDICACION**-------------------------------


//-------------------------**|7|Mostrar historial de la tabla DESCANSO**--------
function tablaDatosRegistroDescanso($conn,$idResidente,$fecha){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente, CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_descanso.fecha, registro_descanso.nocturno, registro_descanso.siesta, registro_descanso.turno FROM residente, personal,registro_descanso WHERE registro_descanso.id_residente = residente.id_residente AND personal.id_personal = registro_descanso.id_personal AND registro_descanso.id_residente = '$idResidente' AND DATE(registro_descanso.fecha)='$fecha' ORDER BY DATE(registro_descanso.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}

function tablaDatosRegistroDescansoIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente, CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_descanso.fecha, registro_descanso.nocturno, registro_descanso.siesta, registro_descanso.turno FROM residente, personal,registro_descanso WHERE registro_descanso.id_residente = residente.id_residente AND personal.id_personal = registro_descanso.id_personal AND registro_descanso.id_residente = '$idResidente' AND DATE(registro_descanso.fecha)>='$fechaDesde' AND DATE(registro_descanso.fecha)<='$fechaHasta' ORDER BY DATE(registro_descanso.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}
//-----------**|7|Mostrar TABLAS REGISTRO DESCANSO**-------------------------------

//-------------------------**|8|Mostrar historial de la tabla INCIDENCIA**--------
function tablaDatosRegistroIncidencia($conn,$idResidente,$fecha){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente, CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_incidencia.fecha, registro_incidencia.incidencias, registro_incidencia.turno FROM residente, personal,registro_incidencia WHERE registro_incidencia.id_residente = residente.id_residente AND personal.id_personal = registro_incidencia.id_personal AND registro_incidencia.id_residente = '$idResidente' AND DATE(registro_incidencia.fecha)='$fecha' ORDER BY DATE(registro_incidencia.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}

function tablaDatosRegistroIncidenciaIntervalo($conn,$idResidente,$fechaDesde,$fechaHasta){

	$sql = "SELECT residente.dni_residente, CONCAT(residente.nombre,' ', residente.apellido1) AS nombre_residente, CONCAT(personal.nombre,' ', personal.apellido1) AS nombre_personal, registro_incidencia.fecha, registro_incidencia.incidencias, registro_incidencia.turno FROM residente, personal,registro_incidencia WHERE registro_incidencia.id_residente = residente.id_residente AND personal.id_personal = registro_incidencia.id_personal AND registro_incidencia.id_residente = '$idResidente' AND DATE(registro_incidencia.fecha)>='$fechaDesde' AND DATE(registro_incidencia.fecha)<='$fechaHasta' ORDER BY DATE(registro_incidencia.fecha) DESC ";

	return json_encode(obtenerDatos($conn,$sql));	

}
//-----------**|8|Mostrar TABLAS REGISTRO INCIDENCIA**-------------------------------



?>
