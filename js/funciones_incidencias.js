
function agregarIncidencia(){
	
	let modoBusqueda = $('#ver-auxiliar-residente').find('.modoBusquedaResidente').val();
	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-auxiliar-residente'));
	
    var postObj = {
        id_personal : idUsuario,
        id_residente : idResidente,
		descripcion : $('#descripcionIncidencia').val(),
        contenido : $('#texto-diario').summernote('code')
	}
	
	$.ajax({
        url: '../controllers/incidencia.php?task=insertarIncidencia',
		type: "POST",
		async: false,
		data: postObj,
		dataType: "html",
		success: function(data) {
			let respuesta =  $.parseJSON(data);
			swal({
				title: "CREADA",
				text:  "Incidencia creada correctamente",
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

function tablaHistoricoIncidencias(){	//FUNCION QUE GENERA LA TABLA AUXILIAR RESIDENTE

    var table = $('#cargar-tabla-auxiliar-residente').DataTable({
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
        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta
        "ajax":{
            "method":"POST",
            "url":"../controllers/tablas.php?funcion=historicoincidencias"
        },
		"order": [ 0, 'desc' ],
        "columns":[
			{"data":"fecha",visible: false},
			{"data":"fecha", "orderData": 0, render: function(date){
				return dateFns.format(date, 'DD/MM/YYYY HH:mm')
				}
			},
			{"data":"dni_residente"},
            {"data":"nombre"},
            {"data":"apellido1"},   
			{"data":"descripcion"},
            {"data":"contenido"}
        ]
    
    });
}