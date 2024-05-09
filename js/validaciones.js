

//FUNCION PARA VALIDAR EL EMAIL

function validaremail(email){

	var esCorrecto = false;

	var emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;



	 if (emailRegex.test(email)) 

      esCorrecto = true;



    return esCorrecto;

    



}



//FUNCION PARA VALIDAR EL TELEFONO

function validartelefono(tlf){

	var esCorrecto = false;

	var tfRegex = /^([9,7,6]{1})+([0-9]{8})$/;



	 if (tfRegex.test(tlf)) 

		esCorrecto = true;



    return esCorrecto;



}



//FUNCION PARA VALIDAR EL DNI, NIF O NIE

function validar_dni_nif_nie(value){

 

	  var validChars = 'TRWAGMYFPDXBNJZSQVHLCKET';

	  var nifRexp = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]{1}$/i;

	  var nieRexp = /^[XYZ]{1}[0-9]{7}[TRWAGMYFPDXBNJZSQVHLCKET]{1}$/i;

	  var str = value.toString().toUpperCase();



	  if (!nifRexp.test(str) && !nieRexp.test(str)) return false;



	  var nie = str

		  .replace(/^[X]/, '0')

		  .replace(/^[Y]/, '1')

		  .replace(/^[Z]/, '2');



	  var letter = str.substr(-1);

	  var charIndex = parseInt(nie.substr(0, 8)) % 23;



	  if (validChars.charAt(charIndex) === letter) return true;



	  return false;

}



//FUNCION PARA VALIDAR EL codigo postal

function validarCodigoPostal(codigoPostal){

	var esCorrecto = false;

	var codPostRegex = /^(?:0?[1-9]|[1-4]\d|5[0-2])\d{3}$/;



	 if (codPostRegex.test(codigoPostal)) 

     	esCorrecto = true;



    return esCorrecto;

}



//FUNCION PARA VALIDAR EL NUMERO DE LA SEG SOCIAL

function validarNSS(numero){

	let correcto= true;

	let unidades = "1234567890-/";

	let soloNumeros="";



	let longitud= numero.length;

	let indice = 0;

		while (indice <= longitud-1 && correcto ){

			if (!unidades.includes(numero.charAt(indice)))

				correcto = false;

			else if(numero.charAt(indice)!="/" || numero.charAt(indice)!="-")

				soloNumeros=soloNumeros+numero.charAt(indice);	

			indice+=1;

		}

		if(correcto && soloNumeros.length != 12)

			correcto = false;

		

	return correcto;

}



function validarModificarMisDatos(){

	var esCorrecto = true;

	

	if($('#usuario-misdatos').val() == ""){

		correcto = false;

		swal({

		  title: "ERROR!",

		  text:  "Algún campo incompleto",

		  buttons: false,

		  icon:  "error",

		  timer: 1500,

		});

	}

	return esCorrecto;

}



function validarAltaPersonal(){

	

	var correcto= true;

	

	if(validar_dni_nif_nie($('#dni').val()) == false){

			correcto = false;

			swal({

				title: "ERROR!",

				text:  "El DNI/NIF/NIE es incorrecto",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

		

		}else if(validaremail($('#email').val()) == false){

			correcto = false;

			swal({

				title: "ERROR!",

				text:  "El Email es incorrecto",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

		}else if(validartelefono($('#telefono').val()) == false){

			correcto = false;

			swal({

				title: "ERROR!",

				text:  "El Telefono es incorrecto",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

			

		}else if(validarCodigoPostal($('#codigoPostal').val()) == false){

			correcto = false;

			swal({

				title: "ERROR!",

				text:  "El Codigo Postal es incorrecto",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

			

		}else if($('#nombre').val() == "" || $('#apellido1').val() == "" || $('#apellido2').val() == "" || $('#direccion').val() == "" || $('#rol').val() == "" || $('#tipoResponsabilidad').val() == "" || $('#usuario').val() == "" || $('#contrasena').val() == ""){

			correcto = false;

			swal({

			  title: "ERROR!",

			  text:  "Algún campo incompleto",

			  buttons: false,

			  icon:  "error",

			  timer: 1500,

			});

			

		}else if($('#turno').val() == ""){

			correcto = false;

			swal({

			  title: "ERROR!",

			  text:  "Debe seleccionar un horario",

			  buttons: false,

			  icon:  "error",

			  timer: 1500,

			});		

		}



	return correcto; 

}





function validarBajaPersonal(){

	

	var correcto= true;

	

	if($('#fechaBaja').val() == ""){

        correcto = false;

        swal({

          title: "ERROR!",

          text:  "Debe introducir una fecha de baja",

          buttons: false,

          icon:  "error",

          timer: 1500,

        });

    } 

    else if ($('#motivo-baja').val() == "" ||  ($('#motivo-baja').val() == "otras" && $('#textoOtrasBajaPersonal').val() == "")){

        correcto = false;

        swal({

			title: "ERROR!",

            text: "Debe introducir el motivo de la baja",

            buttons: false,

            icon:  "error",

            timer: 1500,

        });

    }

	else{

		let fechaEng=convertirFechaEspIngles($('#fechaBaja').val());

		

		if(fechaEng == ""){

			correcto = false;

			swal({

				title: "ERROR!",

				text: "La fecha introducida no es válida",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

		}

	}



	return correcto; 

}



function validarFecha(dia,mes,año){

	let fecha=new Date(año,mes-1,dia);

    return ((dia==fecha.getDate()) && (mes-1==fecha.getMonth()) && (año==fecha.getFullYear()));

}

 

function convertirFechaEspIngles(fechaEsp){

    var regExpFechaEsp=new RegExp("^([0-9]{1,2})([/])([0-9]{1,2})([/])(19|20)+([0-9]{2})$");

	let fechaEng="";

    if(regExpFechaEsp.test(fechaEsp)){

		var arrayFecha=fechaEsp.split("/");

		if(validarFecha(arrayFecha[0],arrayFecha[1],arrayFecha[2]))

			fechaEng= arrayFecha[2]+"-"+arrayFecha[1]+"-"+arrayFecha[0];

                

            

    }

    return fechaEng;

}



function convertirFechaMysqlEsp(fechaDb){

    let fecha=new Date(fechaDb);

	return fecha.getDate()+"/"+((Number.parseInt(fecha.getMonth(),10)+1).toString())+"/"+fecha.getFullYear();                

}



function validarModificarPersonal(){

	

	var correcto= true;

	

	if(validar_dni_nif_nie($('#dni-input-modif-personal').val()) == false){

			correcto = false;

			swal({

				title: "ERROR!",

				text:  "El DNI/NIF/NIE es incorrecto",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

		

		}else if(validaremail($('#email-modificar-personal').val()) == false){

			correcto = false;

			swal({

				title: "ERROR!",

				text:  "El Email es incorrecto",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

		}else if(validartelefono($('#telefono-modificar-personal').val()) == false){

			correcto = false;

			swal({

				title: "ERROR!",

				text:  "El Telefono es incorrecto",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

			

		}else if(validarCodigoPostal($('#codigoPostal-modificar-personal').val()) == false){

			correcto = false;

			swal({

				title: "ERROR!",

				text:  "El Codigo Postal es incorrecto",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

			

		}else if($('#nombre-modificar-personal').val() == "" || $('#apellido1-modificar-personal').val() == "" || $('#apellido2-modificar-personal').val() == "" || $('#direccion-modificar-personal').val() == "" || $('#rol-modificar-personal').val() == "" || $('#tipoResponsabilidad-modificar-personal').val() == "" || $('#usuario-modificar-personal').val() == ""){

			correcto = false;

			swal({

			  title: "ERROR!",

			  text:  "Algún campo incompleto",

			  buttons: false,

			  icon:  "error",

			  timer: 1500,

			});

			

		} else if($('#turno-modificar-personal').val() == ""){

			correcto = false;

			swal({

			  title: "ERROR!",

			  text:  "Debe seleccionar un horario",

			  buttons: false,

			  icon:  "error",

			  timer: 1500,

			});		

		}





	return correcto; 

}



function validarAltaResidente(){

	var correcto = true;

    if(validar_dni_nif_nie($('#dniResidente').val()) == false){

		correcto = false;

        swal({

          title: "ERROR!",

          text:  "El DNI/NIF/NIE es incorrecto",

          buttons: false,

          icon:  "error",

          timer: 1500,

        });

    }else if(validar_dni_nif_nie($('#dniFamiliar').val()) == false){

        correcto = false;

        swal({

          title: "ERROR!",

          text:  "El DNI/NIF/NIE es incorrecto",

          buttons: false,

          icon:  "error",

          timer: 1500,

        });

	}else if(validaremail($('#emailFamiliar').val()) == false){

        correcto = false;

        swal({

          title: "ERROR!",

          text:  "El Email es incorrecto",

          buttons: false,

          icon:  "error",

          timer: 1500,

        });

    }else if(validartelefono($('#telefonoFamiliar').val()) == false){

        correcto = false;

        swal({

          title: "ERROR!",

          text:  "El Telefono es incorrecto",

          buttons: false,

          icon:  "error",

          timer: 1500,

        });

	}else if(validarCodigoPostal($('#codigoPostalFamiliar').val()) == false){

			correcto = false;

			swal({

				title: "ERROR!",

				text:  "El Codigo Postal es incorrecto",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

    }else if($('#dniResidente').val() == "" || $('#nombreResidente').val() == "" || $('#apellido1Residente').val() == "" || $('#apellido2Residente').val() == "" || $('#fechaNacimiento').val() == "" ||

					$('#gradoDependencia').val() == "" ||$('#dniFamiliar').val() == "" || $('#telefonoFamiliar').val() == "" || $('#nombreFamiliar').val() == "" || $('#apellidosFamiliar').val() == "" || 

						$('#direccionFamiliar').val() == "" || $('#codigoPostalFamiliar').val() == "" || $('#parentescoFamiliar').val() == "" || $('#emailFamiliar').val() == "") {

          correcto = false;

          swal({

            title: "ERROR!",

            text:  "Algún campo incompleto",

            buttons: false,

            icon:  "error",

            timer: 1500,

          });

    }else if($('#habitacionIndivAsignada').val()=="" && $('#habitacionDobleAsignada').val()==""){

		correcto = false;

          swal({

            title: "ERROR!",

            text:  "Debe asignar una habitación",

            buttons: false,

            icon:  "error",

            timer: 1500,

          });	

	}else{

		let fechaEng=convertirFechaEspIngles($('#fechaNacimiento').val());

		if(fechaEng == ""){

			correcto = false;

			swal({

				title: "ERROR!",

				text: "Debe seleccionar una fecha de nacimiento válida",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

		}

	}

	return correcto;

}





function validarBajaResidente(){

	

	var correcto= true;

	

	if($('#fechaBajaResidente').val() == ""){

        correcto = false;

        swal({

          title: "ERROR!",

          text:  "Debe introducir una fecha de baja",

          buttons: false,

          icon:  "error",

          timer: 1500,

        });

    } 

    else if ($('#motivoBajaResidente').val() == "" ||  ($('#motivoBajaResidente').val() == "otras" && $('#textoOtrasBajaResidente').val() == "")){

        correcto = false;

        swal({

			title: "ERROR!",

            text: "Debe introducir el motivo de la baja",

            buttons: false,

            icon:  "error",

            timer: 1500,

        });

    }

	else{

		let fechaEng=convertirFechaEspIngles($('#fechaBajaResidente').val());

		

		if(fechaEng == ""){

			correcto = false;

			swal({

				title: "ERROR!",

				text: "La fecha introducida no es válida",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

		}

	}



	return correcto; 

}

function validarModificarResidente(){

	var correcto = true;

    if(validar_dni_nif_nie($('#dniResidenteModif').val()) == false){

		correcto = false;

        swal({

          title: "ERROR!",

          text:  "El DNI/NIF/NIE es incorrecto",

          buttons: false,

          icon:  "error",

          timer: 1500,

        });

    }else if(validar_dni_nif_nie($('#dniFamiliarModif').val()) == false){

        correcto = false;

        swal({

          title: "ERROR!",

          text:  "El DNI/NIF/NIE es incorrecto",

          buttons: false,

          icon:  "error",

          timer: 1500,

        });

	}else if(validaremail($('#emailFamiliarModif').val()) == false){

        correcto = false;

        swal({

          title: "ERROR!",

          text:  "El Email es incorrecto",

          buttons: false,

          icon:  "error",

          timer: 1500,

        });

    }else if(validartelefono($('#telefonoFamiliarModif').val()) == false){

        correcto = false;

        swal({

          title: "ERROR!",

          text:  "El Telefono es incorrecto",

          buttons: false,

          icon:  "error",

          timer: 1500,

        });

	}else if(validarCodigoPostal($('#codigoPostalFamiliarModif').val()) == false){

		correcto = false;

		swal({

			title: "ERROR!",

			text:  "El Codigo Postal es incorrecto",

			buttons: false,

			icon:  "error",

			timer: 1500,

		});

    }else if($('#dniResidenteModif').val() == "" || $('#nombreResidenteModif').val() == "" || $('#apellido1ResidenteModif').val() == "" || $('#apellido2ResidenteModif').val() == "" || $('#fechaNacimientoModif').val() == "" ||

					$('#gradoDependenciaModif').val() == "" ||$('#dniFamiliarModif').val() == "" || $('#telefonoFamiliarModif').val() == "" || $('#nombreFamiliarModif').val() == "" || $('#apellidosFamiliarModif').val() == "" || 

						$('#direccionFamiliarModif').val() == "" || $('#codigoPostalFamiliarModif').val() == "" || $('#parentescoFamiliarModif').val() == "" || $('#emailFamiliarModif').val() == "") {

		correcto = false;

		swal({

			title: "ERROR!",

			text:  "Algún campo incompleto",

			buttons: false,

			icon:  "error",

			timer: 1500,

		});

	}else{

		let fechaEng=convertirFechaEspIngles($('#fechaNacimientoModif').val());

		if(fechaEng == ""){

			correcto = false;

			swal({

				title: "ERROR!",

				text: "Debe seleccionar una fecha de nacimiento válida",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

		}

	}

	

	return correcto;

	

}

	

function validarIncidencia(){

	

	var correcto = true;

	

	if ($('#texto-diario').summernote('code') == "<p><br></p>"){

		correcto = false;

        swal({

			title: "ERROR!",

			text:  "No has agregado ninguna incidencia",

			buttons: false,

			icon:  "error",

			timer: 1500,

        });

	}

	

	else if($('#descripcionIncidencia').val()==""){

		correcto = false;

		 swal({

			title: "ERROR!",

			text:  "Debe incluir una breve descripción",

			buttons: false,

			icon:  "error",

			timer: 1500,

        });

		

	}

	return correcto;

}	





function validarConsulta(){

	

	var correcto = true;

	

	if ($('#causaConsulta').val()=="" || $('#sintomasConsulta').val()=="" || $('#tratamientoConsulta').val()=="" || $('#revisionConsulta').val()==""){

		correcto = false;

        swal({

			title: "ERROR!",

			text:  "Falta algún campo por rellenar",

			buttons: false,

			icon:  "error",

			timer: 1500,

        });

	}else{

		let fechaEng=convertirFechaEspIngles($('#fechaConsultaResidente').val().substring(0,10));

		

		if(fechaEng == ""){

			correcto = false;

			swal({

				title: "ERROR!",

				text: "La fecha introducida no es válida",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

		}

	}

	

	return correcto;

}



function validarCambioHabitacion(){

	var correcto = true;

	

	if ($('#idHabitacionNueva').val()==""){

		correcto = false;

        swal({

			title: "ERROR!",

			text:  "Debe selecionar nueva habitación y responsable",

			buttons: false,

			icon:  "error",

			timer: 1500,

        });

	}

	else if ($('#idHabitacionNueva').val()==$('#idHabitacionActual').val()){

		correcto = false;

        swal({

			title: "ERROR!",

			text:  "Debe selecionar habitación diferente a la que tiene asignada actualmente",

			buttons: false,

			icon:  "error",

			timer: 2500,

        });

	}		

	return correcto;	

}



function validarPai(){

	

	var correcto = true;

	var $form=$('#formulario-pai');

	var mensaje="";

	

	$form.find($(".inputOtras")).each(function(index){

		if(!$(this).hasClass("d-none") && $(this).val()==""){

			correcto = false;

			mensaje= mensaje + $(this).attr("placeholder") + "\n";

		}

	});

	if(!correcto){

		swal({

			title: "ERROR!",

			text:  mensaje,

			buttons: false,

			icon:  "error",

			timer: 2500,

        });

	}else{

		

		if($("#otroFamiliar").prop('checked')){

			if($('#nombre-otros-pai').val() == "" || $('#apellidos-otros-pai').val() == "" || $('#parentesco-otros-pai').val() == "" || $('#telefono-otros-pai').val() == "" || $('#dni-otros-pai').val() == ""){

				correcto = false;

					swal({

					title: "ERROR!",

					text:  "Falta algún campo de Otros Familiares por rellenar",

					buttons: false,

					icon:  "error",

					timer: 1500,

				});

			}	

		}

	

		if ($('#incapacidad_legal').val()==""){

			correcto = false;

			swal({

				title: "ERROR!",

				text:  "Debe seleccionar si existe o no incapacidad legal",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

		}

		else if($('#dni-otros-pai').val() !="" && !validar_dni_nif_nie($('#dni-otros-pai').val())){

			correcto = false;

			swal({

				title: "ERROR!",

				text:  "DNI Otros Familiares no válido",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

			

		}

		else if($('#telefono-otros-pai').val() !="" && !validartelefono($('#telefono-otros-pai').val())){

			correcto = false;

			swal({

				title: "ERROR!",

				text:  "Telefono Otros Familiares no válido",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

			

		}

		else if($('#NSS').val() !="" && ! validarNSS($('#NSS').val())){

			correcto = false;

			swal({

				title: "ERROR!",

				text:  "NSS no válido: debe constar de 12 dígitos",

				buttons: false,

				icon:  "error",

				timer: 1500,

			});

			

		}

	}

	

	return correcto;

}

//FUNCIONES PARA VALIDAR SOLO NUMEROS ENTEROS EN LA CAJAS DE TEXTO ML(MILILITROS)
$( "#otrosEntrada_true" ).on( "keypress", function(elevento) {
	let event=elevento || window.event;
    if(isNaN(event.key)==true ){
        event.preventDefault(); 
    }
  } );

  $( "#diuresisEntrada_true" ).on( "keypress", function(elevento) {
	let event=elevento || window.event;
    if(isNaN(event.key)==true ){
        //alert('Solo números enteros');
        event.preventDefault(); 
    }
  } );

  $( "#otrosSalida_true" ).on( "keypress", function(elevento) {
	let event=elevento || window.event;
    if(isNaN(event.key)==true ){
        //alert('Solo números enteros');
        event.preventDefault(); 
    }
  } );

