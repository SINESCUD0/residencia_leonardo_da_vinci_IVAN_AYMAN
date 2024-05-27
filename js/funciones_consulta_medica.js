function agregarConsulta(){
	
	let modoBusqueda = $('#ver-consulta').find('.modoBusquedaResidente').val();
	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-consulta'));
	
	let fecha = convertirFechaEspIngles(($('#fechaConsultaResidente').val()).substr(0,10))+($('#fechaConsultaResidente').val().substr(10,6))+":00";


   var postObj = {
        id_personal : idUsuario,
        id_residente : idResidente,
		fecha : fecha,
		causa : $('#causaConsulta').val(),
        sintomas : $('#sintomasConsulta').val(),
		tratamiento : $('#tratamientoConsulta').val(),
		revision : $('#revisionConsulta').val(),
		otros : $('#otrosConsulta').val(),
	}
	
	$.ajax({
        url: '../controllers/consulta_medica.php?task=insertarConsulta',
		type: "POST",
		async: false,
		data: postObj,
		dataType: "html",
		success: function(data) {
			let respuesta =  $.parseJSON(data);
			swal({
				title: "CREADA",
				text:  "Consulta creada correctamente",
				buttons: false,
				icon:  "success",
				timer: 1500,
			});
		
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

function cargarDatosConsultaMedica(){
	
	let modoBusqueda = $('#ver-consulta-tabla').find('.modoBusquedaResidente').val();
	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-consulta-tabla'));
	
	if(idResidente != undefined && idResidente != ""){
		$('#ver-tabla-consulta').show(); //tabla-horario
		tablaConsultaMedica(idResidente);		
	}else
		$('#ver-tabla-consulta').hide();	
}

function tablaConsultaMedica(id){

    var table = $('#tabla-consulta').DataTable({
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
                pageSize: 'A3'
            },
            {
                extend:    'print',
                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',
                titleAttr: 'Imprimir',
                className: 'btn btn-info'
            }
        ],
		"language": {
           "emptyTable":     "No hay consultas para este residente"
		},
        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta
        "ajax":{
			"method":"POST",
            "url":"../controllers/tablas.php?funcion=consultamedica&idResidente="+id+""
        },
		"order": [ 0, 'desc' ],
        "columns":[
			{"data":"fecha",visible: false},
            {"data":"dni_residente"},
            {"data":"nombre_personal"},
            {"data":"fecha","orderData": 0, render: function(date){
				return dateFns.format(date, 'DD/MM/YYYY hh:mm')
				}
			},
            {"data":"causa"},
			{"data":"sintomas"},
			{"data":"tratamiento"},
			{"data":"revision"},
			{"data":"otros"}
        ]
    });

}

function tablaTratamientos(id){

    var table = $('#tabla-tratamientos').DataTable({
        dom: 'Bfrtip',
		"ordering": false,
		"language": {
           "emptyTable":     "No hay consultas para este residente"
		},
        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta
		"searching": false,
		"autoWidth": false,
		"paging": false,
        "ajax":{
			"method":"POST",
            "url":"../controllers/tablas.php?funcion=tratamientos&idResidente="+id+""
        },
		"columns":[
			{"width": "20%","data":"fecha",render: function(date){
				return dateFns.format(date, 'DD/MM/YYYY')

				}
			},
			{"width": "80%","data":"tratamiento"}
		]	
    });
	   
	table.buttons().destroy();
	$('#tabla-tratamientos_info').remove();
 }
	
	
	
