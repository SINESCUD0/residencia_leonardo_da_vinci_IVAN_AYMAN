function altaPersonal() {

		

	var postObj = {			

		dni_personal : $('#dni').val(),

		nombre : $('#nombre').val(),

		apellido1 : $('#apellido1').val(),

		apellido2 : $('#apellido2').val(),

		telefono : $('#telefono').val(),

		email : $('#email').val(),

		direccion : $('#direccion').val(),

		codigo_postal : $('#codigoPostal').val(),

		rol : $('#rol').val(),

		tipo_responsabilidad : $('#tipoResponsabilidad').val(),

		usuario : $('#usuario').val(),

		contrasena : $('#contrasena').val(),

		planta : $('#planta').val(),

		id_turno : $('#turno').val()

	}

			

	$.ajax({

		url: '../controllers/personal.php?task=altaPersonal',

		type: "POST",

		async: false,

		data: postObj,

		dataType: "html",

		success: function(data) {

			let respuesta =  $.parseJSON(data);

			if(respuesta.status == "WARNING"){

				swal({

					title: "INSERTADO CON WARNING",

					text:  respuesta.message,

					buttons: false,

					icon:  "warning",

					timer: 2500,

				});

				

			}else{

				swal({

					title: "INSERTADO",

					text:  "Personal insertado correctamente",

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



function bajaPersonal(){

	

	let modoBusqueda = $('#ver-baja-personal').find('.modoBusquedaPersonal').val();

	let idPersonal = busquedaIdPersonal(modoBusqueda,$('#ver-baja-personal'));

	let motivoBaja;

	let fechaEng= convertirFechaEspIngles($('#fechaBaja').val());

		

	motivoBaja = $('#motivo-baja').val();

	

	if(motivoBaja == "otras")

		motivoBaja = $('#textoOtrasBajaPersonal').val();

			

	var objetoCamposUpdate = {			

		fecha_baja : fechaEng,

		motivo_baja : motivoBaja

	}

	

	var objetoCamposWhere = {			

		id_personal : idPersonal

	}

	           

    $.ajax({

		url: '../controllers/personal.php?task=bajaPersonal',

		type: "POST",

		async: false,

		data: {objetoCamposUpdate,objetoCamposWhere},

		dataType: "html",

		success: function(data) {

			swal({

				title: "ACTUALIZADO",

				text:  "Personal dado de baja correctamente",

				buttons: false,

				icon:  "success",

				timer: 2500,

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



function  busquedaIdPersonal(modobusqueda,seccionMenu){



	let idPersonal ="";

		

	if(modobusqueda=="busquedaDniPersonal")

		idPersonal = $(seccionMenu).find($('.dni-personal')).val();

	else if(modobusqueda=="busquedaApellidosPersonal")

		idPersonal = $(seccionMenu).find($('.apellidos-personal')).val();

		

	return idPersonal;

}



function cargarDatosPersonal(){

	

	let modoBusqueda = $('#ver-modificar-personal').find('.modoBusquedaPersonal').val();

	let idPersonal = busquedaIdPersonal(modoBusqueda,$('#ver-modificar-personal'));

	let respuesta;

	

	var postObj = {			

		id_personal : idPersonal

	}



    $.ajax({

        url: '../controllers/personal.php?task=consultarPersonal',

        type: "POST",

        async: false,

        data: postObj,

		dataType: "html",

        success: function(data) {		

			respuesta =  $.parseJSON(data).datosTrabajador;

		},

		error: function(data) {

			respuesta = $.parseJSON(data.responseText);

			swal({

				title: "ERROR",

				text:  respuesta.message,

				buttons: false,

				icon:  "error",

				timer: 2500,

			});

		}

	});

	if(respuesta != undefined && Object.keys(respuesta).length > 0){

		$('#dni-input-modif-personal').val(respuesta.dni_personal);

        $('#nombre-modificar-personal').val(respuesta.nombre);

        $('#apellido1-modificar-personal').val(respuesta.apellido1);

        $('#apellido2-modificar-personal').val(respuesta.apellido2);

		$('#telefono-modificar-personal').val(respuesta.telefono);

		$('#email-modificar-personal').val(respuesta.email);

		$('#direccion-modificar-personal').val(respuesta.direccion);

		$('#codigoPostal-modificar-personal').val(respuesta.codigo_postal);

        $('#rol-modificar-personal').val(respuesta.rol);

        $('#tipoResponsabilidad-modificar-personal').val(respuesta.tipo_responsabilidad);

        $('#usuario-modificar-personal').val(respuesta.usuario);

		$('#planta-modificar-personal').val(respuesta.planta);

		$('#fechaBaja-modificar-personal').val(convertirFechaMysqlEsp(respuesta.fecha_baja));

		$('#motivoBaja-modificar-personal').val(respuesta.motivo_baja);

        if(respuesta.fecha_baja == null){

            $('#activado-personal').prop('checked',true);

			$('#turno-modificar-personal').val(respuesta.id_turno);

			$('#labelfechaBaja-modificar-personal').hide();

			$('#inputFechaBaja-modificar-personal').hide();

			$('#labelMotivoBaja').hide();

			$('#inputMotivoBaja').hide();

		}

        else {

            $('#activado-personal').prop('checked',false);

			$('#turno-modificar-personal').val("");

			$('#labelfechaBaja-modificar-personal').show();

			$('#inputFechaBaja-modificar-personal').show();

			$('#labelMotivoBaja').show();

			$('#inputMotivoBaja').show();

		}

		if (respuesta.rol != "" && respuesta.rol != "mantenimiento" && respuesta.rol != "admin"){

			$('#labelPlanta-modificar-personal').show();

			$('#inputPlanta-modificar-personal').show();

		} else {

			$('#labelPlanta-modificar-personal').hide();

			$('#inputPlanta-modificar-personal').hide();

		}

		

	}else{

		$('#seccionModificar').find($('.form-control')).each(function(index){

			$(this).val("");

		});	

		$('#activado-personal').prop('checked',false);

		$('#rol-modificar-personal').val("");	

		$('#tipoResponsabilidad-modificar-personal').val("");		

	}



}



function cargarDatosTablaHorario(){

	

	let modoBusqueda = $('#ver-horario-personal').find('.modoBusquedaPersonal').val();

	let idPersonal = busquedaIdPersonal(modoBusqueda,$('#ver-horario-personal'));

	

	if(idPersonal != undefined && idPersonal != ""){

		$('#ver-tabla-horario').show(); //tabla-horario

		tablaPersonalHorario(idPersonal);		

	}else

		$('#ver-tabla-horario').hide();	

}



function activarPersonal(){

	

	let modoBusqueda = $('#ver-modificar-personal').find('.modoBusquedaPersonal').val();

	let idPersonal = busquedaIdPersonal(modoBusqueda,$('#ver-modificar-personal'));



	var objetoCamposUpdate = {			

		fecha_baja : "null",

		motivo_baja : "null"

	}

	

	var objetoCamposWhere = {			

		id_personal : idPersonal

	}



    $.ajax({

        url: '../controllers/personal.php?task=activarPersonal',

        type: "POST",

        async: false,

        data: {objetoCamposUpdate,objetoCamposWhere},

		dataType: "html",

        success: function(data) {

			swal({

				title: "ACTUALIZADO",

				text:  "Personal activado correctamente",

				buttons: false,

				icon:  "success",

				timer: 2500,

			});

			$('#activado-personal').prop('checked',true);

			$('#fechaBaja-modificar-personal').val("");

			$('#motivoBaja-modificar-personal').val("");

			$('#labelfechaBaja-modificar-personal').hide();

			$('#inputFechaBaja-modificar-personal').hide();	

			$('#labelMotivoBaja').hide();

			$('#inputMotivoBaja').hide();	

		},

		error: function(data) {

			swal({

				title: "ERROR",

				text:  "No ha sido posible realizar la activación",

				buttons: false,

				icon:  "error",

				timer: 2500,

			});

			$('#activado-personal').prop('checked',false);

		}

	});

	

	

}



function activarPersonaldesdeHistorico(idPersonal){



	var objetoCamposUpdate = {			

		fecha_baja : "null",

		motivo_baja : "null"

	}

	

	var objetoCamposWhere = {			

		id_personal : idPersonal

	}



    $.ajax({

        url: '../controllers/personal.php?task=activarPersonal',

        type: "POST",

        async: false,

        data: {objetoCamposUpdate,objetoCamposWhere},

		dataType: "html",

        success: function(data) {

			swal({

				title: "ACTUALIZADO",

				text:  "Personal activado correctamente",

				buttons: false,

				icon:  "success",

				timer: 2500,

			});

		},

		error: function(data) {

			swal({

				title: "ERROR",

				text:  "No ha sido posible realizar la activación",

				buttons: false,

				icon:  "error",

				timer: 2500,

			});

		}

	});

	

	

}



function modificarPersonal(){

	

	let modoBusqueda = $('#ver-modificar-personal').find('.modoBusquedaPersonal').val();

	let idPersonal = busquedaIdPersonal(modoBusqueda,$('#ver-modificar-personal'));

	let nuevaContrasena = null ;

		

   var objetoCamposUpdate = {			

		dni_personal : $('#dni-input-modif-personal').val(),

		nombre : $('#nombre-modificar-personal').val(),

		apellido1 : $('#apellido1-modificar-personal').val(),

		apellido2 : $('#apellido2-modificar-personal').val(),

		telefono : $('#telefono-modificar-personal').val(),

		email : $('#email-modificar-personal').val(),

		direccion : $('#direccion-modificar-personal').val(),

		codigo_postal : $('#codigoPostal-modificar-personal').val(),

		rol : $('#rol-modificar-personal').val(),

		tipo_responsabilidad : $('#tipoResponsabilidad-modificar-personal').val(),

		usuario : $('#usuario-modificar-personal').val(),

		planta : $('#planta-modificar-personal').val(),

		id_turno : $('#turno-modificar-personal').val()

	}

	

	if($('#contrasena-modificar-personal').val()!="")

		objetoCamposUpdate.contrasena = $('#contrasena-modificar-personal').val();

		

	var objetoCamposWhere = {			

		id_personal : idPersonal

	}

	

	$.ajax({

		url: '../controllers/personal.php?task=modificarPersonal',

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



//FUNCION QUE ME GENERA LA TABLA PERSONAL HISTORICO

var tablaPersonalHistorico = function(){

    var table = $('#tabla-personal-historico').DataTable({

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

        "order": [ 0, 'desc' ],

        "destroy":true, 

        "ajax":{

			"method":"POST",

            "url":"../controllers/tablas.php?funcion=personalhistorico"

			},

			 "columns":[

				{"data":"fecha_alta",visible: false},

				{"data":"dni_personal"},

				{"data":"nombre"},

				{"data":"apellido1"},

				{"data":"apellido2"},

				{"data":"rol", render: function(rol){

					let rolConFormato="";

					switch (rol) {

						case "TrabajadorSocial":

							rolConFormato = "TRABAJADOR SOCIAL";

							break;

						case "admin":

							rolConFormato = "ADMINISTRADOR";

							break;

						case "TerapeutaOcupacional":

							rolConFormato = "TERAPEUTA OCUPACIONAL";

							break;

						default :

							rolConFormato = rol.toUpperCase();

					}			

					return rolConFormato;

				}

				},

				{"data":"fecha_alta","orderData": 0, render: function(date){

					return dateFns.format(date, 'DD/MM/YYYY HH:mm')

					}

				},

				{"data":"fecha_baja", render: function(date){

					return dateFns.format(date, 'DD/MM/YYYY')

					}

				},

				{"data":"motivo_baja"},

				{"data":"id_personal", render: function(idPersonal){

					return '<div style="text-align: center;" ><input class="btn btn-outline-primary botonActivarPersonal" type="button" value="Activar" id='+idPersonal+'></div>'

					}

				}

			]

    });

	table.on( 'draw', function () {

	   $('.botonActivarPersonal').click(function(){

			swal({

				title: "CAMBIAR A PERSONAL EN ACTIVO",

				text:  "¿Está seguro de que quiere cambiar el estado a ACTIVO?",

				buttons: {

					Cancelar: {text: "Cancelar"},

					Confirmar: {text: "Confirmar"},

				},

				icon:  "warning"

			})

			.then((value) => {

				switch (value) {

					case "Confirmar":

						activarPersonaldesdeHistorico($(this).attr("id"));

						tablaPersonalHistorico();

						if($('#personal-activo').is(':checked'))

							tablapersonalactivo(); 

						setTimeout('location.reload()',2000);

						break;

					case "Cancelar":

						break;

				}

			});

		});

	});

}



//FUNCION QUE ME GENERA LA TABLA PERSONAL ACTIVO

  var tablapersonalactivo = function(){

		var table = $('#tabla-personal-activo').DataTable({

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

			"order": [ 0, 'desc' ],

			"destroy":true, 

			"ajax":{

			"method":"POST",

			"url":"../controllers/tablas.php?funcion=personalactivo"

			},

			"columns":[

				{"data":"fecha_alta",visible: false},

				{"data":"dni_personal"},

				{"data":"nombre"},

				{"data":"apellido1"},

				{"data":"apellido2"},

				{"data":"rol", render: function(rol){

					let rolConFormato="";

					switch (rol) {

						case "TrabajadorSocial":

							rolConFormato = "TRABAJADOR SOCIAL";

							break;

						case "admin":

							rolConFormato = "ADMINISTRADOR";

							break;

						case "TerapeutaOcupacional":

							rolConFormato = "TERAPEUTA OCUPACIONAL";

							break;

						default :

							rolConFormato = rol.toUpperCase();

					}			

					return rolConFormato;

				}

				},

				{"data":"tipo_responsabilidad"},

				{"data":"fecha_alta","orderData": 0, render: function(date){

					return dateFns.format(date, 'DD/MM/YYYY HH:mm')

					}

				}

			]

     });

}



//



//FUNCION QUE ME GENERA LA TABLA PERSONAL HISTORICO DE LIMPIEZA

var tablaPersonalHistoricoLimpieza = function(){

    var table = $('#tabla-personal-historico-limpieza').DataTable({

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

                orientation: 'landscape',

                pageSize: 'A3',

                download: 'open'

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "order": [ 0, 'desc' ],

        "destroy":true, 

        "ajax":{

			"method":"POST",

            "url":"../controllers/tablas.php?funcion=personalhistoricolimpieza"

			},

			 "columns":[

				{"data":"fecha_alta",visible: false},

				{"data":"dni_personal"},

				{"data":"nombre"},

				{"data":"apellido1"},

				{"data":"apellido2"},

				{"data":"rol", render: function(rol){

					let rolConFormato="";

					switch (rol) {

						case "TrabajadorSocial":

							rolConFormato = "TRABAJADOR SOCIAL";

							break;

						case "admin":

							rolConFormato = "ADMINISTRADOR";

							break;

						case "TerapeutaOcupacional":

							rolConFormato = "TERAPEUTA OCUPACIONAL";

							break;

						default :

							rolConFormato = rol.toUpperCase();

					}			

					return rolConFormato;

				}

				},

				{"data":"fecha_alta","orderData": 0, render: function(date){

					return dateFns.format(date, 'DD/MM/YYYY HH:mm')

					}

				},

				{"data":"fecha_baja", render: function(date){

					return dateFns.format(date, 'DD/MM/YYYY')

					}

				},

				{"data":"motivo_baja"},

				{"data":"id_personal", render: function(idPersonal){

					return '<div style="text-align: center;" ><input class="btn btn-outline-primary botonActivarPersonal" type="button" value="Activar" id='+idPersonal+'></div>'

					}

				}

			]

    });

	table.on( 'draw', function () {

	   $('.botonActivarPersonal').click(function(){

			swal({

				title: "CAMBIAR A PERSONAL EN ACTIVO",

				text:  "¿Está seguro de que quiere cambiar el estado a ACTIVO?",

				buttons: {

					Cancelar: {text: "Cancelar"},

					Confirmar: {text: "Confirmar"},

				},

				icon:  "warning"

			})

			.then((value) => {

				switch (value) {

					case "Confirmar":

						activarPersonaldesdeHistorico($(this).attr("id"));

						tablaPersonalHistoricoLimpieza();

						if($('#personal-activo-limpieza').is(':checked'))

                        tablapersonalactivoLimpieza(); 

						setTimeout('location.reload()',2000);

						break;

					case "Cancelar":

						break;

				}

			});

		});

	});

}



//FUNCIÓN QUE GENERA TABLA CON PERSONAL DE LIMPIEZA ACTIVO

var tablapersonalactivoLimpieza = function(){

    var table = $('#tabla-personal-limpieza').DataTable({

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

        "order": [ 0, 'desc' ],

        "destroy":true, 

        "ajax":{

        "method":"POST",

        "url":"../controllers/tablas.php?funcion=personalactivolimpieza"

        },

        "columns":[

            {"data":"fecha_alta",visible: false},

            {"data":"dni_personal"},

            {"data":"nombre"},

            {"data":"apellido1"},

            {"data":"apellido2"},

            {"data":"direccion"},

            {"data":"telefono"},

            {"data":"email"},

            {"data":"rol", render: function(rol){

                let rolConFormato="";

                switch (rol) {

                    case "TrabajadorSocial":

                        rolConFormato = "TRABAJADOR SOCIAL";

                        break;

                    case "admin":

                        rolConFormato = "ADMINISTRADOR";

                        break;

                    case "TerapeutaOcupacional":

                        rolConFormato = "TERAPEUTA OCUPACIONAL";

                        break;

                    default :

                        rolConFormato = rol.toUpperCase();

                }			

                return rolConFormato;

            }

            },

            {"data":"turno"},

            {"data":"planta"},

            {"data":"fecha_alta","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY HH:mm')

                }

            }

        ]

    });

}



//FUNCION QUE ME GENERA LA TABLA PERSONAL HISTORICO DE MANTENIMIENTO 

var tablaPersonalHistoricoMantenimiento = function(){

    var table = $('#tabla-personal-historico-mantenimiento').DataTable({

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

        "order": [ 0, 'desc' ],

        "destroy":true, 

        "ajax":{

			"method":"POST",

            "url":"../controllers/tablas.php?funcion=personalhistoricomantenimiento"

			},

			 "columns":[

				{"data":"fecha_alta",visible: false},

				{"data":"dni_personal"},

				{"data":"nombre"},

				{"data":"apellido1"},

				{"data":"apellido2"},

				{"data":"rol", render: function(rol){

					let rolConFormato="";

					switch (rol) {

						case "TrabajadorSocial":

							rolConFormato = "TRABAJADOR SOCIAL";

							break;

						case "admin":

							rolConFormato = "ADMINISTRADOR";

							break;

						case "TerapeutaOcupacional":

							rolConFormato = "TERAPEUTA OCUPACIONAL";

							break;

						default :

							rolConFormato = rol.toUpperCase();

					}			

					return rolConFormato;

				}

				},

				{"data":"fecha_alta","orderData": 0, render: function(date){

					return dateFns.format(date, 'DD/MM/YYYY HH:mm')

					}

				},

				{"data":"fecha_baja", render: function(date){

					return dateFns.format(date, 'DD/MM/YYYY')

					}

				},

				{"data":"motivo_baja"},

				{"data":"id_personal", render: function(idPersonal){

					return '<div style="text-align: center;" ><input class="btn btn-outline-primary botonActivarPersonal" type="button" value="Activar" id='+idPersonal+'></div>'

					}

				}

			]

    });

	table.on( 'draw', function () {

	   $('.botonActivarPersonal').click(function(){

			swal({

				title: "CAMBIAR A PERSONAL EN ACTIVO",

				text:  "¿Está seguro de que quiere cambiar el estado a ACTIVO?",

				buttons: {

					Cancelar: {text: "Cancelar"},

					Confirmar: {text: "Confirmar"},

				},

				icon:  "warning"

			})

			.then((value) => {

				switch (value) {

					case "Confirmar":

						activarPersonaldesdeHistorico($(this).attr("id"));

						tablaPersonalHistoricoMantenimiento();

						if($('#personal-activo-mantenimiento').is(':checked'))

                        tablapersonalactivoMantenimiento(); 

						setTimeout('location.reload()',2000);

						break;

					case "Cancelar":

						break;

				}

			});

		});

	});

}





//FUNCIÓN QUE GENERA TABLA CON PERSONAL DE MANTENIMIENTO ACTIVO

var tablapersonalactivoMantenimiento = function(){

    var table = $('#tabla-personal-mantenimiento').DataTable({

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

        "order": [ 0, 'desc' ],

        "destroy":true, 

        "ajax":{

        "method":"POST",

        "url":"../controllers/tablas.php?funcion=personalactivomantenimiento"

        },

        "columns":[

            {"data":"fecha_alta",visible: false},

            {"data":"dni_personal"},

            {"data":"nombre"},

            {"data":"apellido1"},

            {"data":"apellido2"},

            {"data":"direccion"},

            {"data":"telefono"},

            {"data":"email"},

            {"data":"rol", render: function(rol){

                let rolConFormato="";

                switch (rol) {

                    case "TrabajadorSocial":

                        rolConFormato = "TRABAJADOR SOCIAL";

                        break;

                    case "admin":

                        rolConFormato = "ADMINISTRADOR";

                        break;

                    case "TerapeutaOcupacional":

                        rolConFormato = "TERAPEUTA OCUPACIONAL";

                        break;

                    default :

                        rolConFormato = rol.toUpperCase();

                }			

                return rolConFormato;

            }

            },

            {"data":"turno"},

            {"data":"fecha_alta","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY HH:mm')

                }

            }

        ]

    });

}





//FUNCION QUE ME GENERA LA TABLA PERSONAL HISTORICO DEL RESTO DEL PERSONAL 

var tablaPersonalHistoricoResto = function(){

    var table = $('#tabla-personal-historico-resto').DataTable({

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

                orientation: 'landscape',

                pageSize: 'A3',
				
                download: 'open'

            },

            {

                extend:    'print',

                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',

                titleAttr: 'Imprimir',

                className: 'btn btn-info'

            }

        ],

        "order": [ 0, 'desc' ],

        "destroy":true, 

        "ajax":{

			"method":"POST",

            "url":"../controllers/tablas.php?funcion=personalhistoricoresto"

			},

			 "columns":[

				{"data":"fecha_alta",visible: false},

				{"data":"dni_personal"},

				{"data":"nombre"},

				{"data":"apellido1"},

				{"data":"apellido2"},

				{"data":"rol", render: function(rol){

					let rolConFormato="";

					switch (rol) {

						case "TrabajadorSocial":

							rolConFormato = "TRABAJADOR SOCIAL";

							break;

						case "admin":

							rolConFormato = "ADMINISTRADOR";

							break;

						case "TerapeutaOcupacional":

							rolConFormato = "TERAPEUTA OCUPACIONAL";

							break;

						default :

							rolConFormato = rol.toUpperCase();

					}			

					return rolConFormato;

				}

				},

				{"data":"fecha_alta","orderData": 0, render: function(date){

					return dateFns.format(date, 'DD/MM/YYYY HH:mm')

					}

				},

				{"data":"fecha_baja", render: function(date){

					return dateFns.format(date, 'DD/MM/YYYY')

					}

				},

				{"data":"motivo_baja"},

				{"data":"id_personal", render: function(idPersonal){

					return '<div style="text-align: center;" ><input class="btn btn-outline-primary botonActivarPersonal" type="button" value="Activar" id='+idPersonal+'></div>'

					}

				}

			]

    });

	table.on( 'draw', function () {

	   $('.botonActivarPersonal').click(function(){

			swal({

				title: "CAMBIAR A PERSONAL EN ACTIVO",

				text:  "¿Está seguro de que quiere cambiar el estado a ACTIVO?",

				buttons: {

					Cancelar: {text: "Cancelar"},

					Confirmar: {text: "Confirmar"},

				},

				icon:  "warning"

			})

			.then((value) => {

				switch (value) {

					case "Confirmar":

						activarPersonaldesdeHistorico($(this).attr("id"));

						tablaPersonalHistoricoResto();

						if($('#personal-activo-resto').is(':checked'))

                        tablapersonalactivoResto(); 

						setTimeout('location.reload()',2000);

						break;

					case "Cancelar":

						break;

				}

			});

		});

	});

}





//FUNCIÓN QUE GENERA TABLA CON PERSONAL DE RESTO ACTIVO

var tablapersonalactivoResto = function(){

    var table = $('#tabla-personal-resto').DataTable({

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

        "order": [ 0, 'desc' ],

        "destroy":true, 

        "ajax":{

        "method":"POST",

        "url":"../controllers/tablas.php?funcion=personalactivoresto"

        },

        "columns":[

            {"data":"fecha_alta",visible: false},

            {"data":"dni_personal"},

            {"data":"nombre"},

            {"data":"apellido1"},

            {"data":"apellido2"},

            {"data":"direccion"},

            {"data":"telefono"},

            {"data":"email"},

            {"data":"rol", render: function(rol){

                let rolConFormato="";

                switch (rol) {

                    case "TrabajadorSocial":

                        rolConFormato = "TRABAJADOR SOCIAL";

                        break;

                    case "admin":

                        rolConFormato = "ADMINISTRADOR";

                        break;

                    case "TerapeutaOcupacional":

                        rolConFormato = "TERAPEUTA OCUPACIONAL";

                        break;

                    default :

                        rolConFormato = rol.toUpperCase();

                }			

                return rolConFormato;

            }

            },

            {"data":"turno"},

            {"data":"planta"},

            {"data":"fecha_alta","orderData": 0, render: function(date){

                return dateFns.format(date, 'DD/MM/YYYY HH:mm')

                }

            },

            {"data":"nombreresidente"},

            {"data":"apellido1residente"},

            {"data":"apellido2residente"}

        ]

    });

}









//FUNCION QUE GENERA TABLA CON DATOS DEL PERSONAL SELECCIONADO PARA GENERAR EL HORARIO

var tablaPersonalHorario = function(id){

  var table = $('#tabla-horario').DataTable({

	  dom: '', 

	  "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta

	  "ajax":{

		"method":"POST",

		"url":"../controllers/tablas.php?funcion=horariopersonal&idPersonal="+id+""

	  },

	  "columns":[

		{"data":"nombre"},

		{"data":"apellido1"},

		{"data":"apellido2"},

		{"data":"rol", render: function(rol){

			let rolConFormato="";

			switch (rol) {

				case "TrabajadorSocial":

					rolConFormato = "TRABAJADOR SOCIAL";

					break;

				case "admin":

					rolConFormato = "ADMINISTRADOR";

					break;

				case "TerapeutaOcupacional":

					rolConFormato = "TERAPEUTA OCUPACIONAL";

					break;

				default :

					rolConFormato = rol.toUpperCase();

			}			

			return rolConFormato;

		}

		},

		{"data":"horario"}

	  ]

   });

}

