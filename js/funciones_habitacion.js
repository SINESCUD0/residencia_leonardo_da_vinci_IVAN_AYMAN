function mostrarHabitaciones(tipoHabitacion){
	
	var postObj = {			
		tipo : tipoHabitacion
	}
	
    $.ajax({
        url: '../controllers/habitacion.php?task=getHabitacionesLibres',
        type: "POST",
        async: false,
        data: postObj,
		dataType: "html",
        success: function(data) {		
			respuesta =  $.parseJSON(data);
			$('#idHabitacionNueva').append($('<option>').text("Seleccione Habitación").attr('value', ""));
			if(respuesta.listadoHabitaciones.length > 0){
				$.each(respuesta.listadoHabitaciones, function(index, value) {
				   $('.idHabitacionLibre').append($('<option>').text(value[0]).attr('value', value[0]));
				});
			}				
		}
	});
		
}

function mostrarResponsablesPlanta(idHabitacion){
	
	var planta=idHabitacion.substring(0,1);
	
	var postObj = {			
		planta : planta
	}

    $.ajax({
        url: '../controllers/personal.php?task=getResponsablesPlanta',
        type: "POST",
        async: false,
        data: postObj,
		dataType: "html",
        success: function(data) {		
			respuesta =  $.parseJSON(data);
			if(respuesta.listadoResponsables.length > 0){
				$.each(respuesta.listadoResponsables, function(index, value) {
				   $('.responsableResidente').append($('<option>').text(value[1]+ " " + value[2] + ", " + value[3]).attr('value', value[0]));
				});
			}else
				$('.responsableResidente').append($('<option>').text("Planta sin responsables").attr('value', ""));			
		}
	});
		
}

function cargarDatosHabitacionActual(){
	
	let modoBusqueda = $('#ver-mover-habitacion').find('.modoBusquedaResidente').val();
	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-mover-habitacion'));
	let respuesta;
	let datosResidente;
		
	var postObj = {			
		id_residente : idResidente
	}

    $.ajax({
        url: '../controllers/habitacion.php?task=consultarHabitacion',
        type: "POST",
        async: false,
        data: postObj,
		dataType: "html",
        success: function(data) {	
			respuesta = $.parseJSON(data);
			datosHabitacion =  respuesta.datosHabitacion;
			if(respuesta.status == "WARNING"){
				swal({
					title: "WARNING",
					text:  respuesta.message,
					buttons: false,
					icon:  "warning",
					timer: 2500,
				});
			}
		},
		error: function(data) {	
			respuesta = $.parseJSON(data.responseText);
			if(respuesta.status == "ERROR"){
				swal({
					title: "ERROR",
					text:  "No se ha podido recuperar la información. " + respuesta.message,
					buttons: false,
					icon:  "error",
					timer: 2500,
				});
			}
		}
	});
	if(datosHabitacion != undefined && Object.keys(datosHabitacion).length > 0){
		$('#idHabitacionActual').val(datosHabitacion.id_habitacion);
		if(datosHabitacion.apellido1!=null)
			$('#responsableActual').val(datosHabitacion.apellido1 + " " + datosHabitacion.apellido2 + ", " + datosHabitacion.nombre);
		else
			$('#responsableActual').val("No tiene Responsable asignado");
		$("#habDobleActual").prop('disabled',false);
		$("#habIndividualActual").prop('disabled',false);
		if(datosHabitacion.num_camas==1){
			$("#habIndividualActual").prop('checked',true);
			$("#habDobleActual").prop('checked',false);
		}
		else{
			$("#habIndividualActual").prop('checked',false);
			$("#habDobleActual").prop('checked',true);
		}
		$("#habDobleActual").prop('disabled',true);
		$("#habIndividualActual").prop('disabled',true);

	}else{
		$('#idHabitacionActual').val("No tiene habitacion asignada");
		$('#responsableActual').val("No tiene Responsable asignado");
	}
}

function moverResidenteHabitacion(){
	
	let modoBusqueda = $('#ver-mover-habitacion').find('.modoBusquedaResidente').val();
	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-mover-habitacion'));
	let respuesta;
	let datosResidente;

	var postObj = {			
		id_residente : idResidente,
		id_habitacion : $('#idHabitacionNueva').val(),
		id_responsable : $('#responsableNuevo').val()
	}
	
	$.ajax({
		url: '../controllers/habitacion.php?task=cambiarHabitacion',
		type: "POST",
		async: false,
		data: postObj,
		dataType: "html",
		success: function(data) {
			let respuesta =  $.parseJSON(data);
			if(respuesta.status == "WARNING"){
				swal({
					title: "CAMBIADO CON WARNING",
					text:  respuesta.message,
					buttons: false,
					icon:  "warning",
					timer: 2500,
				});
				
			}else{
				swal({
					title: "MODIFICADO",
					text:  "Se ha reasignado correctamente al residente",
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

//FUNCION QUE GENERA LA TABLA RESIDENTE HABITACIÓN
var tablaResHab = function(){
  var table = $('#cargar-tabla-residente-habitacion').DataTable({
	  dom: 'Bfrtip',
	  buttons:[
			{
				extend:    'excelHtml5',
				text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success'
			},
			{
				extend:    'pdfHtml5',
				text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger',
				pageSize:  'A3'
			},
			{
				extend:    'print',
				text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',
				titleAttr: 'Imprimir',
				className: 'btn btn-info'
			}
		],
	  "order": [[ 1, "asc" ],[ 2, "asc" ],[ 0, "desc" ]],
	  "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta
	  "ajax":{
		"method":"POST",
		"url":"../controllers/tablas.php?funcion=historicoHabitaciones"
	  },
	  "columns":[
		{"data":"fecha_inicio",visible: false},
		{"data":"apellido1"},
		{"data":"nombre"},
		{"data":"dni"},
		{"data":"id_habitacion"},
		{"data":"fecha_inicio", "orderData": 0, render: function(date){
			return dateFns.format(date, 'DD/MM/YYYY HH:mm')
			}
		},
		{"data":"fecha_fin"}
	  ]
   });
}
