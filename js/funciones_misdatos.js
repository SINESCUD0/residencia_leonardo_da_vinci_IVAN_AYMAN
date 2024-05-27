function modificarMisDatos(idUsuario){
	var objetoCamposUpdate = {
		usuario : $('#usuario-misdatos').val()
	}

	if($('#contrasena-misdatos').val() != "")
		objetoCamposUpdate.contrasena = $('#contrasena-misdatos').val();
	
	var objetoCamposWhere = {			
		id_personal : idUsuario
	}

	$.ajax({
		url: '../controllers/personal.php?task=modificarMisDatos',
		type: "POST",
		async: false,
		data: {objetoCamposUpdate,objetoCamposWhere},
		dataType: "html",
		success: function(data) {
			let respuesta =  $.parseJSON(data);
			if(respuesta.status == "WARNING"){
				swal({
					title: "MODIFICADO CON WARNING",
					text:  respuesta.message,
					buttons: false,
					icon:  "warning",
					timer: 2500,
				});
				
			}else{
				swal({
					title: "MODIFICADO",
					text:  "Personal modificado correctamente",
					buttons: false,
					icon:  "success",
					timer: 1500,
				});
			}
			setTimeout('location.reload()',2000); 
		},
		error: function(data) {
			let respuesta =  $.parseJSON(data.responseText);
			swal({
				title: "ERROR",
				text:  respuesta.message,
				buttons: false,
				icon:  "error",
				timer: 2500,
			});
		}
	});
	
}

//FUNCION QUE CARGA LOS DATOS PERSONALES DEL PERFIL DE CADA USUARIO
function cargarMisDatos(idUsuario){

	var postObj = {			
		id_personal : idUsuario
	}

    $.ajax({
        url: '../controllers/personal.php?task=consultarPersonal',
        type: "POST",
        async: false,
        data: postObj,
		dataType: "html",
        success: function(data) {		
			respuesta =  $.parseJSON(data).datosTrabajador;
		}
	});
	if(respuesta != undefined && Object.keys(respuesta).length > 0){
		$('#dni-misdatos').val(respuesta.dni_personal);
        $('#nombre-misdatos').val(respuesta.nombre);
        $('#apellido1-misdatos').val(respuesta.apellido1);
        $('#apellido2-misdatos').val(respuesta.apellido2);
		$('#telefono-misdatos').val(respuesta.telefono);
		$('#email-misdatos').val(respuesta.email);
		$('#direccion-misdatos').val(respuesta.direccion);
		$('#codigoPostal-misdatos').val(respuesta.codigo_postal);
        $('#rol-misdatos').val(respuesta.rol);
        $('#tipoResponsabilidad-misdatos').val(respuesta.tipo_responsabilidad);
        $('#usuario-misdatos').val(respuesta.usuario);
		$('#planta-misdatos').val(respuesta.planta);
		$('#turno-misdatos').val(respuesta.descripcion_turno);
		if (respuesta.rol != "" && respuesta.rol != "mantenimiento" && respuesta.rol != "admin"){
			$('#labelPlanta-misdatos').show();
			$('#inputPlanta-misdatos').show();
		} else {
			$('#labelPlanta-misdatos').hide();
			$('#inputPlanta-misdatos').hide();
		}
		
	}else{
		$('#ver-misdatos').find($('.form-control')).each(function(index){
			$(this).val("");
		});			
	}
    
}