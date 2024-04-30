
function altaResidente(){

		//Subir Fichero NORTON PDF
		const formFicheroPDF = document.forms.namedItem("formFichero");
		var idFicheroFinalNorton = subirPDF(formFicheroPDF);
		//Fin Fichero NORTON PDF

		//Subir Fichero MINIMENTAL PDF
		const formFicheroPDFMini = document.forms.namedItem("formFicheroMiniMental");
		var idFicheroFinalMini = subirPDF_MiniMental(formFicheroPDFMini);
		//Fin Fichero PDF
	
		//Subir Fichero BARTHEL PDF
		const formFicheroPDFBarthel = document.forms.namedItem("formFicheroBarthel");
		var idFicheroFinalBarthel = subirPDF_Barthel(formFicheroPDFBarthel);
		//Fin Fichero PDF
		
		 //Subir Fichero LAWTON PDF
		 const formFicheroPDFLawton = document.forms.namedItem("formFicheroLawton");
		 var idFicheroFinalLawton = subirPDF_Lawton(formFicheroPDFLawton);
		 //Fin Fichero PDF	
 
		 //Subir Fichero Painad PDF
		 const formFicheroPDFPainad = document.forms.namedItem("formFicheroPainad");
		 var idFicheroFinalPainad = subirPDF_Painad(formFicheroPDFPainad);
		 //Fin Fichero PDF	
 
		  //Subir Fichero Goldberg PDF
		  const formFicheroPDFGoldberg = document.forms.namedItem("formFicheroGoldberg");
		  var idFicheroFinalGoldberg = subirPDF_Goldberg(formFicheroPDFGoldberg);
		  //Fin Fichero PDF	
  
		  //Subir Fichero Downton PDF
		  const formFicheroPDFDownton = document.forms.namedItem("formFicheroDownton");
		  var idFicheroFinalDownton = subirPDF_Downton(formFicheroPDFDownton);
		  //Fin Fichero PDF	
 
 
		   //Subir Fichero DOLOR PDF
		   const formFicheroPDFDolor = document.forms.namedItem("formFicheroDolor");
		   var idFicheroFinalDolor = subirPDF_Dolor(formFicheroPDFDolor);
		   //Fin Fichero PDF	
   
		   //Subir Fichero FOTOS PDF
		   const formFicheroPDFFotos = document.forms.namedItem("formFicheroFotos");
		   var idFicheroFinalFotos = subirPDF_Fotos(formFicheroPDFFotos);
		   //Fin Fichero PDF	
 
		   //Subir Fichero Pfeiffer PDF
			 const formFicheroPDFPfeiffer = document.forms.namedItem("formFicheroPfeiffer");
			 var idFicheroFinalPfeiffer = subirPDF_Pfeiffer(formFicheroPDFPfeiffer);
		   //Fin Fichero PDF	
 
		   //Subir Fichero Morisky PDF
		   const formFicheroPDFMorisky = document.forms.namedItem("formFicheroMorisky");
		   var idFicheroFinalMorisky = subirPDF_Morisky(formFicheroPDFMorisky);
		   //Fin Fichero PDF
	
	var datosDiscapacidad=new Object();
	var datosSitMedica=new Object();
	
	var $discapacidadCheckBoxes = $("[class~='discapacidadAlta'] input[type=checkbox]");
	var $sitMedicaCheckBoxes = $("[class~='sitMedicaAlta'] input[type=checkbox]");
	
	$discapacidadCheckBoxes.each(function(index, check ){
		datosDiscapacidad[check.id] = check.checked;
		if(check.id == "otraDiscapacidad" && check.checked)
			datosDiscapacidad['otraDiscapacidadTexto'] = $("[name='otraDiscapacidadTexto']").val();			
	});
	
	$sitMedicaCheckBoxes.each(function(index, check ){
		datosSitMedica[check.id] = check.checked;
		if(check.id == "otraSitMedica" && check.checked)
			datosSitMedica['otraSitMedicaTexto'] = $("[name='otraSitMedicaTexto']").val();			
	});
	
	if($(".habIndividual").is(':checked')) 
		id_habitacion = $('#habitacionIndivAsignada').val();
	else
		id_habitacion = $('#habitacionDobleAsignada').val();
	var nExpediente= obtenerNumeroExpediente($('#apellido1Residente').val(),$('#nombreResidente').val());
	var varkath = resulkath();
	
	var datosFamiliar={
		
		dni_familiar : $('#dniFamiliar').val(),
        nombre_familiar : $('#nombreFamiliar').val(),
        apellidos : $('#apellidosFamiliar').val(),
        direccion_postal : $('#direccionFamiliar').val(),
		codigo_postal : $('#codigoPostalFamiliar').val(),
		parentesco : $('#parentescoFamiliar').val(),
        telefono : $('#telefonoFamiliar').val(),
        email : $('#emailFamiliar').val()
	};

	var numeroMedicacion = null;




	var medicamentos = $("#tabla-medicacion-res tbody tr");
	if(medicamentos.length >= 1){
		$.ajax({
			url: '../controllers/residente.php?task=nMedicacion',
			type: "POST",
			data: {},
			async: false,
			dataType: "html",
			success: function(data1) {	
				let respuesta1 =  $.parseJSON(data1);
				var numero = respuesta1.n_medicacion;
				numeroMedicacion = respuesta1.n_medicacion;
				$("#tabla-medicacion-res tbody tr").each(function(i){
					var fila = $(this);
					var columnas = fila.find("td");
					var datosMedicacion = {
						nombre: columnas[0].textContent,
						tipo: columnas[1].textContent,
						via: columnas[2].textContent,
						forma_farmaceutica: columnas[3].textContent,
						unidad: columnas[5].textContent,
						cantidad: columnas[4].textContent,
						desayuno: columnas[6].textContent,
						comida: columnas[7].textContent,
						cena: columnas[8].textContent,
						otros: columnas[9].textContent,
						n_medicacion: numero
					};
					$.ajax({
						url: '../controllers/residente.php?task=altaMedicacion',
						type: "POST",
						data: {datosMedicacion, numero},
						async: false,
						dataType: "html",
						success: function(data) {	
							let respuesta =  $.parseJSON(data);
							if(respuesta.status == "WARNING"){
								swal({
									title: "INSERTADA CON WARNING",
									text:  respuesta.message,
									buttons: false,
									icon:  "warning",
									timer: 2500,
								});
								
							}else{
								swal({
									title: "INSERTADA",
									text:  "Medicación insertada correctamente",
									buttons: false,
									icon:  "success",
									timer: 1500,
								});
							}
							// setTimeout('location.reload()',2000); 
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
				});
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

		//Aquí va a ir un for y se va a repetir 1 vez por cada medicamento en la medicación
		
		//Con esto tenemos todos los medicamentos en un array, en el que cada posición es un json convertido en cadena, que luego deserializaremos en php

		//Hasta aquí el for

		//TABLA MEDICACION

		
	}

	let alergia_registro=$('#alergiaResidente').val();
	if (alergia_registro=="1") {
		alergia_registro=$('#alergias_true').val();
	}else{
		alergia_registro;
	}


	
	let arrayMedicacion = [];

	arrayMedicacion.push(numeroMedicacion);


	var datosResidente ={

        dni_residente : $('#dniResidente').val(),
		n_expediente : nExpediente,
        nombre : $('#nombreResidente').val(),
        apellido1 : $('#apellido1Residente').val(),
        apellido2 : $('#apellido2Residente').val(),
        fecha_nacimiento : $('#fechaNacimiento').val(),
        sexo: $('#sexo').val(),
        grado_dependencia : $('#gradoDependencia').val(),
		discapacidad : JSON.stringify(datosDiscapacidad,escaparComillas),
		situacion_medica : JSON.stringify(datosSitMedica,escaparComillas),
		id_personal_responsable : $('#responsableResidente').val(),
		id_habitacion : id_habitacion,
		kath: varkath,
		barthel: idFicheroFinalBarthel,
		medicacion: JSON.stringify(arrayMedicacion),
		alergia: alergia_registro,
		norton: idFicheroFinalNorton,
		minimental: idFicheroFinalMini,
		lawton: idFicheroFinalLawton, 
		painad: idFicheroFinalPainad,
		goldberg: idFicheroFinalGoldberg,
		downton: idFicheroFinalDownton,
		escaladolor: idFicheroFinalDolor,
		testfotos: idFicheroFinalFotos,
		pfeiffer: idFicheroFinalPfeiffer,
		morisky: idFicheroFinalMorisky
	};
	

    //TABLA RESIDENTE
    $.ajax({
        url: '../controllers/residente.php?task=altaResidente',
        type: "POST",
        data: {datosResidente,datosFamiliar},
		async: false,
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
					text:  "Residente insertado correctamente",
					buttons: false,
					icon:  "success",
					timer: 1500,
				});
				
			}
			// setTimeout('location.reload()',2000); 
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

function subirPDF(formFicheroPDF)
{
	var id="";
	$.ajax({
           type: 'POST',
           url: '../controllers/residente.php?task=subirDocumentos',
           data: new FormData(formFicheroPDF),
           contentType: false,
           cache: false,
           processData:false,
           async: false, //MUY IMPORTANTE
           dataType: "html",
           success: function(idFichero){
               id = $.parseJSON(idFichero).id;
           }
    });

    return id;
}

function subirPDF_MiniMental(formFicheroPDFMini)
{
	var id="";
	$.ajax({
           type: 'POST',
           url: '../controllers/residente.php?task=subirDocumentoMini',
           data: new FormData(formFicheroPDFMini),
           contentType: false,
           cache: false,
           processData:false,
           async: false, //MUY IMPORTANTE
           dataType: "html",
           success: function(idFicheroMini){
               id = $.parseJSON(idFicheroMini).id;
           }
    });

    return id;
}

function subirPDF_Barthel(formFicheroPDFBarthel)
{
	var id="";
	$.ajax({
           type: 'POST',
           url: '../controllers/residente.php?task=subirDocumentoBarthel',
           data: new FormData(formFicheroPDFBarthel),
           contentType: false,
           cache: false,
           processData:false,
           async: false, //MUY IMPORTANTE
           dataType: "html",
           success: function(idFicheroBarthel){
               id = $.parseJSON(idFicheroBarthel).id;
           }
    });

    return id;
}

function subirPDF_Lawton(formFicheroPDF)
{
	var id="";
	$.ajax({
           type: 'POST',
           url: '../controllers/residente.php?task=subirDocumentoLawton',
           data: new FormData(formFicheroPDF),
           contentType: false,
           cache: false,
           processData:false,
           async: false, //MUY IMPORTANTE
           dataType: "html",
           success: function(idFicheroLawton){
               id = $.parseJSON(idFicheroLawton).id;
           }
    });
    return id;
}

function subirPDF_Painad(formFicheroPDF)
{
	var id="";
	$.ajax({
           type: 'POST',
           url: '../controllers/residente.php?task=subirDocumentoPainad',
           data: new FormData(formFicheroPDF),
           contentType: false,
           cache: false,
           processData:false,
           async: false, //MUY IMPORTANTE
           dataType: "html",
           success: function(idFicheroPainad){
               id = $.parseJSON(idFicheroPainad).id;
           }
    });
    return id;
}

function subirPDF_Goldberg(formFicheroPDF)
{
	var id="";
	$.ajax({
	type: 'POST',
	url: '../controllers/residente.php?task=subirDocumentoGoldberg',
	data: new FormData(formFicheroPDF),
	contentType: false,
	cache: false,
	processData:false,
	async: false, //MUY IMPORTANTE
	dataType: "html",
	success: function(idFicheroGoldberg){
		id = $.parseJSON(idFicheroGoldberg).id;
	}
	});
	return id;
}

function subirPDF_Downton(formFicheroPDF)
{
	var id="";
	$.ajax({
	type: 'POST',
	url: '../controllers/residente.php?task=subirDocumentoDownton',
	data: new FormData(formFicheroPDF),
	contentType: false,
	cache: false,
	processData:false,
	async: false, //MUY IMPORTANTE
	dataType: "html",
	success: function(idFicheroDownton){
		id = $.parseJSON(idFicheroDownton).id;
	}
	});
	return id;
}

function subirPDF_Dolor(formFicheroPDF)
{
	var id="";
	$.ajax({
	type: 'POST',
	url: '../controllers/residente.php?task=subirDocumentoDolor',
	data: new FormData(formFicheroPDF),
	contentType: false,
	cache: false,
	processData:false,
	async: false, //MUY IMPORTANTE
	dataType: "html",
	success: function(idFicheroDolor){
		id = $.parseJSON(idFicheroDolor).id;
	}
	});
	return id;
}

function subirPDF_Fotos(formFicheroPDF)
{
	var id="";
	$.ajax({
	type: 'POST',
	url: '../controllers/residente.php?task=subirDocumentoFotos',
	data: new FormData(formFicheroPDF),
	contentType: false,
	cache: false,
	processData:false,
	async: false, //MUY IMPORTANTE
	dataType: "html",
	success: function(idFicheroFotos){
		id = $.parseJSON(idFicheroFotos).id;
	}
	});
	return id;
}

function subirPDF_Pfeiffer(formFicheroPDF)
{
	var id="";
	$.ajax({
	type: 'POST',
	url: '../controllers/residente.php?task=subirDocumentoPfeiffer',
	data: new FormData(formFicheroPDF),
	contentType: false,
	cache: false,
	processData:false,
	async: false, //MUY IMPORTANTE
	dataType: "html",
	success: function(idFicheroPfeiffer){
		id = $.parseJSON(idFicheroPfeiffer).id;
	}
	});
	return id;
}

function subirPDF_Morisky(formFicheroPDF)
{
	var id="";
	$.ajax({
	type: 'POST',
	url: '../controllers/residente.php?task=subirDocumentoMorisky',
	data: new FormData(formFicheroPDF),
	contentType: false,
	cache: false,
	processData:false,
	async: false, //MUY IMPORTANTE
	dataType: "html",
	success: function(idFicheroMorisky){
		id = $.parseJSON(idFicheroMorisky).id;
	}
	});
	return id;
}

function traductkatz(katzbinario){
	if(katzbinario == null || katzbinario == undefined){
		return "?";
	}
	var bano;
    var vestido;
    var wc;
    var movilidad;

    var contador = 0;
    var clasificacion;
    var texto;

    var todos = true;

    //Ifs que te suman dependencia al contador e identifican en qué es esa dependencia

    if(katzbinario.charAt(0) == '0'){

        bano = false;

    }else if(katzbinario.charAt(0) == '1'){ 

        bano = true;

        contador++;

    }else{

        todos = false;

    }



    if(katzbinario.charAt(1) == '0'){

        vestido = false;

    }else if(katzbinario.charAt(1) == '1'){ 

        vestido = true;

        contador++;

    }else{

        todos = false;

    }



    if(katzbinario.charAt(2) == '0'){

        wc = false;

    }else if(katzbinario.charAt(2) == '1'){ 

        wc = true;

        contador++;

    }else{

        todos = false;

    }



    if(katzbinario.charAt(3) == '0'){

        movilidad = false;

    }else if(katzbinario.charAt(3) == '1'){ 

        movilidad = true;

        contador++;

    }else{

        todos = false;

    }



    if(katzbinario.charAt(4) == '0'){

    }else if(katzbinario.charAt(4) == '1'){

        contador++;

    }else{

        todos = false;

    }



    if(katzbinario.charAt(5) == '0'){

    }else if(katzbinario.charAt(5) == '1'){

        contador++;

    }else{

        todos = false;

    }



    if(contador == 0 || contador == 1){

        texto = "Ausencia de incapacidad o incapacidad leve";

    }else if(contador == 2 || contador == 3){

        texto = "Incapacidad moderada";

    }else{

        texto = "Incapacidad severa";

    }





    //If final que te saca la clasificación por letras



    if(contador == 0){

        clasificacion = "A";

    }else if(contador == 1){

        clasificacion = "B";

    }else if(contador == 2){

        if(bano){

            clasificacion = "C";

        }else{

            clasificacion = "H";

        }

    }else if(contador == 3){

        if(bano && vestido){

            clasificacion = "D";

        }else{

            clasificacion = "H";

        }

    }else if(contador == 4){

        if(bano && vestido && wc){

            clasificacion = "E";

        }else{

            clasificacion = "H";

        }

    }else if(contador == 5){

        if(bano && vestido && wc && movilidad){

            clasificacion = "F";

        }else{

            clasificacion = "H";

        }

    }else if(contador == 6){

        clasificacion = "G";

    }

	return contador + " " + clasificacion;
}

function resulkath(){
	var result = "";
	if($("#B[name='B']")[0].checked){
        result+="0";
    }else if($("#B[name='B']")[1].checked){ 
        result+="1";
    }

    if($("#V[name='V']")[0].checked){
        result+="0";
    }else if($("#V[name='V']")[1].checked){ 
        result+="1";
    }

    if($("#WC[name='WC']")[0].checked){
        result+="0";
    }else if($("#WC[name='WC']")[1].checked){ 
        result+="1";
    }

    if($("#M[name='M']")[0].checked){
        result+="0";
    }else if($("#M[name='M']")[1].checked){ 
        result+="1";
    }

    if($("#C[name='C']")[0].checked){
		result+="0";
    }else if($("#C[name='C']")[1].checked){
        result+="1";
    }

    if($("#A[name='A']")[0].checked){
		result+="0";
    }else if($("#A[name='A']")[1].checked){
        result+="1";
    }
	if(result.length != 6){
		result = null;
	}

	return result;
}

function resulkathmodificar(){
	var result = "";
	if($("#BM[name='BM']")[0].checked){
        result+="0";
    }else if($("#BM[name='BM']")[1].checked){ 
        result+="1";
    }

    if($("#L[name='L']")[0].checked){
        result+="0";
    }else if($("#L[name='L']")[1].checked){ 
        result+="1";
    }

    if($("#BC[name='BC']")[0].checked){
        result+="0";
    }else if($("#BC[name='BC']")[1].checked){ 
        result+="1";
    }

    if($("#T[name='T']")[0].checked){
        result+="0";
    }else if($("#T[name='T']")[1].checked){ 
        result+="1";
    }

    if($("#Z[name='Z']")[0].checked){
		result+="0";
    }else if($("#Z[name='Z']")[1].checked){
        result+="1";
    }

    if($("#O[name='O']")[0].checked){
		result+="0";
    }else if($("#O[name='O']")[1].checked){
        result+="1";
    }

	if(result.length != 6){
		result = null;
	}

	return result;
}

function obtenerNumeroExpediente(apellido1,nombre){
	
	var nExpediente="";
	var prefijo= (apellido1.substring(0,2) + nombre.substring(0,1)).toUpperCase();
	
	var postObj = {			
		prefijo : prefijo
	}
	
	$.ajax({
        url: '../controllers/residente.php?task=getExpediente',
        type: "POST",
        async: false,
        data: postObj,
		dataType: "html",
        success: function(data) {		
			nExpediente =  $.parseJSON(data).nExpediente;	
		}
	});
	
	return nExpediente;

}

function bajaResidente(){
	
	let modoBusqueda = $('#ver-baja-residente').find('.modoBusquedaResidente').val();
	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-baja-residente'));
	let motivoBaja;
	let fechaEng= convertirFechaEspIngles($('#fechaBajaResidente').val());
	let resultadoBusqueda = $('#busquedaBajaResidente').val();
	
	motivoBaja = $('#motivoBajaResidente').val();
	
	if(motivoBaja == "otras")
		motivoBaja = $('#textoOtrasBajaResidente').val();
			
	var objetoCamposUpdate = {			
		fecha_baja : fechaEng,
		motivo_baja : motivoBaja
	}
	
	var objetoCamposWhere = {			
		id_residente : idResidente
	}
	           
    $.ajax({
		url: '../controllers/residente.php?task=bajaResidente',
		type: "POST",
		async: false,
		data: {objetoCamposUpdate,objetoCamposWhere},
		dataType: "html",
		success: function(data) {
			swal({
				title: "ACTUALIZADO",
				text:  "Residente dado de baja correctamente",
				buttons: false,
				icon:  "success",
				timer: 2500,
			});
			
			// setTimeout('location.reload()',2000); 
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

function cargarDatosResidente(){
	
	let modoBusqueda = $('#ver-modificar-residente').find('.modoBusquedaResidente').val();
	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-modificar-residente'));
	let respuesta;
	let datosResidente;
	let $form = $('#seccionModificarResidente');
	let $discapacidadCheckBoxes = $("[class~='discapacidadModif'] input[type=checkbox]");
	let $sitMedicaCheckBoxes = $("[class~='sitMedicaModif'] input[type=checkbox]");
	
	let postObj = {			
		id_residente : idResidente
	}

    $.ajax({
        url: '../controllers/residente.php?task=consultarResidente',
        type: "POST",
        async: false,
        data: postObj,
		dataType: "html",
        success: function(data) {	
			respuesta = $.parseJSON(data);
			datosResidente =  respuesta.datosResidente;
			console.log(datosResidente)
			if(respuesta.status == "WARNING"){
				swal({
					title: "WARNING",
					text:  respuesta.message,
					buttons: false,
					icon:  "warning",
					timer: 2500,
				});
			}
		}
	});
	if(datosResidente != undefined && Object.keys(datosResidente).length > 0){
		
		//recuperamos los datos del residente, familiar...
		Object.entries(datosResidente).forEach(([clave, valor]) => {
			let name= "[name='" + clave +"']";
			$form.find(name).val(valor);
		});

		//Recuperamos el nombre del fichero PDF(escala norton) que se envio en alta_residente.php. Estamos en modificar_residente.php
  
        //Introduzco el nombre del PDF en el href en la vista modificar_residente.php
            $('#norton').click(function()
            {
            	if(datosResidente.norton!=""){
            		let newUrl= "../ficheros-index/escalaNorton_Residentes/"+ datosResidente.norton;
            		$('#norton').prop('href', newUrl); // href en la vista cambia a esta url

                }else{
                    $('#norton').prop('href', '../ficheros-index/escalas/ESCALA DE NORTON-UPP-33.pdf');//fichero vacio/original
                }
                
            });

		//RECUPERO EL NOMBRE DEL ARCHIVO PDF del test minimental QUE EL USUARIO ENVIO EN  alta_residente.php. Estamos en modificar_residente.php
   
        //Introduzco el nombre del PDF en el href en la vista modificar_residente.php
            $('#miniMental').click(function()
            {
            	if(datosResidente.minimental!="" && datosResidente.minimental!=null ){
            		let newUrl= "../ficheros-index/escalaMiniMental_Residentes/"+ datosResidente.minimental;
            		$('#miniMental').prop('href', newUrl); // href en la vista cambia a esta url

                }else{
                    $('#miniMental').prop('href', '../ficheros-index/escalas/MINI EXAMEN GOGNOSCITIVO-LOBO.pdf');//fichero vacio/original
                }
                
            });

		//RECUPERO EL NOMBRE DEL ARCHIVO PDF de Barthel QUE EL USUARIO ENVIO EN  alta_residente.php. Estamos en modificar_residente.php
    
         //Introduzco el nombre del PDF en el href en la vista modificar_residente.php
            $('#barthel').click(function()
            {
            	if(datosResidente.barthel!="" && datosResidente.barthel!=null ){
            		let newUrl= "../ficheros-index/escalaBarthel_Residentes/"+ datosResidente.barthel;
            		$('#barthel').prop('href', newUrl); // href en la vista cambia a esta url

                }else{
                    $('#barthel').prop('href', '../ficheros-index/escalas/ÍNDICE BARTHEL-ABVD-09.pdf');//fichero vacio/original
                }
                
            });

				//RECUPERO EL NOMBRE DEL ARCHIVO PDF de Lawton QUE EL USUARIO ENVIO EN  alta_residente.php. Estamos en modificar_residente.php
				$('#lawton').click(function()
				{
					if(datosResidente.lawton!="" && datosResidente.lawton!=null ){
						let newUrl= "../ficheros-index/escalaLawton_Residentes/"+ datosResidente.lawton;
						$('#lawton').prop('href', newUrl); // href en la vista cambia a esta url
	   
					}else{
						$('#lawton').prop('href', '../ficheros-index/escalas/ESCALA LAWTON BRODY-AIVD-08.pdf');//fichero vacio/original
					}
					
				});
	   
					//RECUPERO EL NOMBRE DEL ARCHIVO PDF de painad QUE EL USUARIO ENVIO EN  alta_residente.php. Estamos en modificar_residente.php
					$('#painad').click(function()
					{
						if(datosResidente.painad!="" && datosResidente.painad!=null ){
							let newUrl= "../ficheros-index/escalaPainad_Residentes/"+ datosResidente.painad;
							$('#painad').prop('href', newUrl); // href en la vista cambia a esta url
		   
						}else{
							$('#painad').prop('href', '../ficheros-index/escalas/ESCALA-PAINAD.pdf');//fichero vacio/original
						}
						
					});
	   
						//RECUPERO EL NOMBRE DEL ARCHIVO PDF de goldberg QUE EL USUARIO ENVIO EN  alta_residente.php. Estamos en modificar_residente.php
						$('#goldberg').click(function()
						{
							if(datosResidente.goldberg!="" && datosResidente.goldberg!=null ){
								let newUrl= "../ficheros-index/escalaGoldberg_Residentes/"+ datosResidente.goldberg;
								$('#goldberg').prop('href', newUrl); // href en la vista cambia a esta url
			   
							}else{
								$('#goldberg').prop('href', '../ficheros-index/escalas//GOLDBERG_depres.pdf');//fichero vacio/original
							}
							
						});
	   
						//RECUPERO EL NOMBRE DEL ARCHIVO PDF de downton QUE EL USUARIO ENVIO EN  alta_residente.php. Estamos en modificar_residente.php
						$('#downton').click(function()
						{
							if(datosResidente.downton!="" && datosResidente.downton!=null ){
								let newUrl= "../ficheros-index/escalaDownton_Residentes/"+ datosResidente.downton;
								$('#downton').prop('href', newUrl); // href en la vista cambia a esta url
			   
							}else{
								$('#downton').prop('href', '../ficheros-index/escalas/RIESGO CAÍDAS-DOWNTON.pdf');//fichero vacio/original
							}
							
						});
	   
	   
					   //RECUPERO EL NOMBRE DEL ARCHIVO PDF de dolor QUE EL USUARIO ENVIO EN  alta_residente.php. Estamos en modificar_residente.php
						$('#dolor').click(function()
						{
							if(datosResidente.escaladolor!="" && datosResidente.escaladolor!=null ){
								let newUrl= "../ficheros-index/escalaDolor_Residentes/"+ datosResidente.escaladolor;
								$('#dolor').prop('href', newUrl); // href en la vista cambia a esta url
			   
							}else{
								$('#dolor').prop('href', '../ficheros-index/escalas/VALORACIÓN-DOLOR.pdf');//fichero vacio/original
							}
							
						});
	   
	   
					   //RECUPERO EL NOMBRE DEL ARCHIVO PDF de fotos QUE EL USUARIO ENVIO EN  alta_residente.php. Estamos en modificar_residente.php
						$('#fotos').click(function()
						{
							if(datosResidente.testfotos!="" && datosResidente.testfotos!=null ){
								let newUrl= "../ficheros-index/escalaFotos_Residentes/"+ datosResidente.testfotos;
								$('#fotos').prop('href', newUrl); // href en la vista cambia a esta url
			   
							}else{
								$('#fotos').prop('href', '../ficheros-index/escalas/TEST FOTOS-DETERIORO COGNITIVO-30.pdf');//fichero vacio/original
							}
							
						});
	   
	   
				   //RECUPERO EL NOMBRE DEL ARCHIVO PDF de pfeiffer QUE EL USUARIO ENVIO EN  alta_residente.php. Estamos en modificar_residente.php
				   $('#pfeiffer').click(function()
				   {
					   if(datosResidente.pfeiffer!="" && datosResidente.pfeiffer!=null ){
						   let newUrl= "../ficheros-index/escalaPfeiffer_Residentes/"+ datosResidente.pfeiffer;
						   $('#pfeiffer').prop('href', newUrl); // href en la vista cambia a esta url
		  
					   }else{
						   $('#pfeiffer').prop('href', '../ficheros-index/escalas/TEST PFEIFFER-DETERIORO COGNITIVO-36.pdf');//fichero vacio/original
					   }
					   
				   });
	   
				   //RECUPERO EL NOMBRE DEL ARCHIVO PDF de morisky QUE EL USUARIO ENVIO EN  alta_residente.php. Estamos en modificar_residente.php
				   $('#morisky').click(function()
				   {
					   if(datosResidente.morisky!="" && datosResidente.morisky!=null ){
						   let newUrl= "../ficheros-index/escalaMorisky_Residentes/"+ datosResidente.morisky;
						   $('#morisky').prop('href', newUrl); // href en la vista cambia a esta url
		  
					   }else{
						   $('#morisky').prop('href', '../ficheros-index/escalas/TOMA DE MEDICACIÓN-06.pdf');//fichero vacio/original
					   }
					   
				   });

		//recuperamos los datos de la habitación y del responsable
		if(datosResidente.id_habitacion != null && datosResidente.id_habitacion != ""){
			$('#responsableResidenteModif').empty();
			$('#listadoResponsablesLabelModif').show();
			$('#listadoResponsablesSelectModif').show();
			$('#habitacionResidenteModif').val(datosResidente.id_habitacion);
			mostrarResponsablesPlanta(datosResidente.id_habitacion);
			$('#responsableResidenteModif').val(datosResidente.id_personal_responsable);
		}else{
			$('#habitacionResidenteModif').val("No tiene habitacion asignada");
			$('#responsableResidenteModif').empty();
			$('#listadoResponsablesLabelModif').hide();
			$('#listadoResponsablesSelectModif').hide();
		}
		
		//recuperamos los datos de DISCAPACIDAD y SITUACION MEDICA
		var respuestaDiscapacidad = $.parseJSON(datosResidente.discapacidad);
		var respuestaSitMedica = $.parseJSON(datosResidente.situacion_medica);
		
		
		
		$discapacidadCheckBoxes.each(function(index, check ){		
			$(check).prop('checked',respuestaDiscapacidad[check.id]);
			if(check.id == "otraDiscapacidad"){
				if(respuestaDiscapacidad[check.id]!=false){
					$("[name='otraDiscapacidadTextoModif']").val(respuestaDiscapacidad['otraDiscapacidadTexto']);
					$("#otraDiscapacidadTextoModif").show();
				}else{
					$("#otraDiscapacidadTextoModif").hide();
					$("[name='otraDiscapacidadTextoModif']").val("");
				}
			}
		});
		
		$sitMedicaCheckBoxes.each(function(index, check ){		
			$(check).prop('checked',respuestaSitMedica[check.id]);
			if(check.id == "otraSitMedica"){
				if(respuestaSitMedica[check.id]!=false){
					$("[name='otraSitMedicaTextoModif']").val(respuestaSitMedica['otraSitMedicaTexto']);
					$("#otraSitMedicaTextoModif").show();
				}else{
					$("#otraSitMedicaTextoModif").hide();
					$("[name='otraSitMedicaTextoModif']").val("");
				}
			}
		});
		
		//calculamos la edad
		$form.find($('[name="edad"]')).val(calcularEdad(datosResidente.fecha_nacimiento));

		//Marcamos los checks del test de katz

		console.log("En KATH")
		if(datosResidente.kath != ""){
			console.log(datosResidente.kath)
			$("[name='BM']")[parseInt(datosResidente.kath.charAt(0))].click();
			$("[name='L']")[parseInt(datosResidente.kath.charAt(1))].click();
			$("[name='BC']")[parseInt(datosResidente.kath.charAt(2))].click();
			$("[name='T']")[parseInt(datosResidente.kath.charAt(3))].click();
			$("[name='Z']")[parseInt(datosResidente.kath.charAt(4))].click();
			$("[name='O']")[parseInt(datosResidente.kath.charAt(5))].click();
			
			katz2();
		}else{
			console.log("Vacio")
			var radio = document.querySelectorAll('input[type=radio]:checked');
			radio.forEach(element => {
    			element.checked = false;
			});
			$("#IK2").val("");
        	$("#J2").val("");
		}
		
		
		//RELLENAMOS AQUI LA TABLA DE MEDICACIÓN
		$("#tabla-medicacion-mod").addClass("d-none");
		$("#btn-empty-medic-mod").addClass("d-none");
		$("#tabla-medicacion-res-mod tbody").remove();

		if(datosResidente.arrayMedActual != "nada"  && datosResidente.arrayMedActual.length > 0){
			$("#tabla-medicacion-res-mod").append("<tbody></tbody>");

			datosResidente.arrayMedActual[0].forEach(element => {
				var fila = "";
					fila+= "<tr>";
					fila += "<td>" + element.nombre + "</td>";
					fila += "<td>" + element.tipo + "</td>";
					fila += "<td>" + element.via + "</td>";
					fila += "<td>" + element.forma_farmaceutica + "</td>";
					fila += "<td>" + element.cantidad + "</td>";
					fila += "<td>" + element.unidad + "</td>";
					fila += "<td>" + element.desayuno + "</td>";
					fila += "<td>" + element.comida + "</td>";
					fila += "<td>" + element.cena + "</td>";
					fila += "<td>" + element.otros + "</td>";
					fila += "<td>" + element.Inicio + "</td>";
					fila+= "</tr>";
				$("#tabla-medicacion-res-mod tbody").append(fila);
			});

			$("#tabla-medicacion-mod").removeClass("d-none");
			$("#btn-empty-medic-mod").removeClass("d-none");
			$('#form-medic-1-mod').addClass("d-none");
			$('#form-medic-2-mod').addClass("d-none");
			$("#btn-new-medic-mod").removeClass("d-none");
		}else{
			$("#tabla-medicacion-mod").addClass("d-none");
		}
		

		
		
	}else{
		$form.find($('.form-control')).each(function(index){
			$(this).val("");
		});	
		$discapacidadCheckBoxes.each(function(index, check ){		
			$(check).prop('checked',false);
		});
		$sitMedicaCheckBoxes.each(function(index, check ){		
			$(check).prop('checked',false);
		});
		$('#habitacionResidenteModif').val("");
		$('#responsableResidenteModif').empty();
		$('#gradoDependenciaModif').val("0");
		
	}

}

function  busquedaIdResidente(modobusqueda,seccionMenu){

	let idResidente;
		
	if(modobusqueda=="busquedaDni")
		idResidente = $(seccionMenu).find($('.dni-residente')).val();
	else if(modobusqueda=="busquedaApellidos")
		idResidente = $(seccionMenu).find($('.apellidos-residente')).val();
	else if(modobusqueda=="busquedaExpediente")
		idResidente = $(seccionMenu).find($('.expediente-residente')).val();
	else
		idResidente = $(seccionMenu).find($('.habitacion-residente')).val();
		
	return idResidente;
}

function modificarResidente(){
	
	let modoBusqueda = $('#ver-modificar-residente').find('.modoBusquedaResidente').val();
	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-modificar-residente'));
	let respuesta;
	let datosDiscapacidad=new Object();
	let datosSitMedica=new Object();
	
	let $discapacidadCheckBoxes = $("[class~='discapacidadModif'] input[type=checkbox]");
	let $sitMedicaCheckBoxes = $("[class~='sitMedicaModif'] input[type=checkbox]");
	
	$discapacidadCheckBoxes.each(function(index, check ){
		datosDiscapacidad[check.id] = check.checked;
		if(check.id == "otraDiscapacidad"){
			if(check.checked)
				datosDiscapacidad['otraDiscapacidadTexto'] = $("[name='otraDiscapacidadTextoModif']").val();	
			else
				datosDiscapacidad['otraDiscapacidadTexto']="";
		}
	});
	
	$sitMedicaCheckBoxes.each(function(index, check ){
		datosSitMedica[check.id] = check.checked;
		if(check.id == "otraSitMedica"){
			if(check.checked)
				datosSitMedica['otraSitMedicaTexto'] = $("[name='otraSitMedicaTextoModif']").val();	
			else
				datosSitMedica['otraSitMedicaTexto']="";
		}
	});
	
	var datosResidente;

	//Subir Fichero Norton PDF
	 const formFicheroPDF_Modif = document.forms.namedItem("formFicheroModif");
	 var idFicheroFinalNorton_Modif = subirPDF(formFicheroPDF_Modif);
	//Fin Fichero Norton PDF

	//Subir Fichero MINIMENTAL PDF
	 const formFicheroPDFMini_Modif = document.forms.namedItem("formFicheroMiniMentalModif");
	 var idFicheroFinalMini_Modif = subirPDF_MiniMental(formFicheroPDFMini_Modif);
	 //Fin Fichero MINIMENTAL PDF

	 //Subir Fichero BARTHEL PDF
	 const formFicheroPDFBarthel_Modif = document.forms.namedItem("formFicheroBarthelModif");
	 var idFicheroFinalBarthel_Modif = subirPDF_Barthel(formFicheroPDFBarthel_Modif);
	 //Fin Fichero BARTHEL PDF

	   //Subir Fichero LAWTON PDF
	   const formFicheroPDFLawton_Modif = document.forms.namedItem("formFicheroLawtonModif");
	   var idFicheroFinalLawton_Modif = subirPDF_Lawton(formFicheroPDFLawton_Modif);
	   //Fin Fichero PDF	
	   //Subir Fichero Painad PDF
	   const formFicheroPDFPainad_Modif = document.forms.namedItem("formFicheroPainadModif");
	   var idFicheroFinalPainad_Modif = subirPDF_Painad(formFicheroPDFPainad_Modif);
	   //Fin Fichero PDF	
		//Subir Fichero Goldberg PDF
		const formFicheroPDFGoldberg_Modif = document.forms.namedItem("formFicheroGoldbergModif");
		var idFicheroFinalGoldberg_Modif = subirPDF_Goldberg(formFicheroPDFGoldberg_Modif);
		//Fin Fichero PDF	
		//Subir Fichero Downton PDF
		const formFicheroPDFDownton_Modif = document.forms.namedItem("formFicheroDowntonModif");
		var idFicheroFinalDownton_Modif = subirPDF_Downton(formFicheroPDFDownton_Modif);
		//Fin Fichero PDF	
		 //Subir Fichero DOLOR PDF
		 const formFicheroPDFDolor_Modif = document.forms.namedItem("formFicheroDolorModif");
		 var idFicheroFinalDolor_Modif = subirPDF_Dolor(formFicheroPDFDolor_Modif);
		 //Fin Fichero PDF	
		 //Subir Fichero FOTOS PDF
		 const formFicheroPDFFotos_Modif = document.forms.namedItem("formFicheroFotosModif");
		 var idFicheroFinalFotos_Modif = subirPDF_Fotos(formFicheroPDFFotos_Modif);
		 //Fin Fichero PDF	
		 //Subir Fichero Pfeiffer PDF
		   const formFicheroPDFPfeiffer_Modif = document.forms.namedItem("formFicheroPfeifferModif");
		   var idFicheroFinalPfeiffer_Modif = subirPDF_Pfeiffer(formFicheroPDFPfeiffer_Modif);
		 //Fin Fichero PDF	
		 //Subir Fichero Morisky PDF
		 const formFicheroPDFMorisky_Modif = document.forms.namedItem("formFicheroMoriskyModif");
		 var idFicheroFinalMorisky_Modif = subirPDF_Morisky(formFicheroPDFMorisky_Modif);
		 //Fin Fichero PDF

	 let numeroNuevo ;
 
	$.ajax({
		url: '../controllers/residente.php?task=nMedicacion',
		type: "POST",
		data: {},
		async: false,
		dataType: "html",
		success: function(data1) {	
			let respuesta1 =  $.parseJSON(data1);
			var numero = respuesta1.n_medicacion;
			numeroNuevo = numero;
			datosResidente ={
				id_residente : idResidente,
				dni_residente : $('#dniResidenteModif').val(),
				nombre : $('#nombreResidenteModif').val(),
				apellido1 : $('#apellido1ResidenteModif').val(),
				apellido2 : $('#apellido2ResidenteModif').val(),
				fecha_nacimiento: $('#fechaNacimientoModif').val(),
				grado_dependencia : $('#gradoDependenciaModif').val(),
				discapacidad : JSON.stringify(datosDiscapacidad,escaparComillas),
				situacion_medica : JSON.stringify(datosSitMedica,escaparComillas),
				id_personal_responsable : $('#responsableResidenteModif').val(),
				kath: resulkathmodificar(),
				barthel: idFicheroFinalBarthel_Modif,
				medicacion: numero,
				alergia: $('#alergiaResidenteModif').val(),
				norton: idFicheroFinalNorton_Modif,
				minimental: idFicheroFinalMini_Modif,
				lawton: idFicheroFinalLawton_Modif, 
				painad: idFicheroFinalPainad_Modif,
				goldberg: idFicheroFinalGoldberg_Modif,
				downton: idFicheroFinalDownton_Modif,
				escaladolor: idFicheroFinalDolor_Modif,
				testfotos: idFicheroFinalFotos_Modif,
				pfeiffer: idFicheroFinalPfeiffer_Modif,
				morisky: idFicheroFinalMorisky_Modif
			};
		}
	});
	
	var datosFamiliar={
		
		dni_familiar : $('#dniFamiliarModif').val(),
        nombre_familiar : $('#nombreFamiliarModif').val(),
        apellidos : $('#apellidosFamiliarModif').val(),
        direccion_postal : $('#direccionFamiliarModif').val(),
		codigo_postal : $('#codigoPostalFamiliarModif').val(),
		parentesco : $('#parentescoFamiliarModif').val(),
        telefono : $('#telefonoFamiliarModif').val(),
        email : $('#emailFamiliarModif').val()
	};
				
	var objetoCamposWhere = {			
		id_residente : idResidente		
	}
	
	let medicacion_act ;
	let medicacion_nueva ;

	let postObj = {			
		id_residente : idResidente
	}
	$.ajax({
        url: '../controllers/residente.php?task=consultarResidente',
        type: "POST",
        async: false,
        data: postObj,
		dataType: "html",
        success: function(data) {	
			respuesta = $.parseJSON(data);
			medicacion_act = $.parseJSON(respuesta.datosResidente.medicacion);
			//medicacion_act.push(respuesta.datosResidente.medicacion);
			
			var medicamentos =  respuesta.datosResidente.arrayMedicacion;
			
			//Obtenidos los datos de la medicación de esta persona, llamamos a nMedicacion Para obtener el numero de medicacion para la nueva medicacion
			$.ajax({
				url: '../controllers/residente.php?task=nMedicacion',
				type: "POST",
				data: {},
				async: false,
				dataType: "html",
				success: function(data1) {	
					let respuesta1 =  $.parseJSON(data1);
					var numero = respuesta1.n_medicacion;
					//Obtenida la medicacion de esta persona y su nuevo numero llamamos a modificarmedicacion
					if(medicamentos != undefined){
						var n_medicacion_persona = medicamentos[0].n_medicacion;
					}
					var n_medicacion_nuevo = numero;


				$.ajax({
					url: '../controllers/residente.php?task=modificarMedicacion',
					type: "POST",
					async: false,
					data: {medicacion_act},
					dataType: "html",
					success: function(data) {	
						respuesta = $.parseJSON(data);
					}
				});
				if($("#tabla-medicacion-res-mod tbody tr").length > 0){
					$("#tabla-medicacion-res-mod tbody tr").each(function(e){
						var fila = $(this);
						var columnas = fila.find("td");
						var datosMedicacion = {
							nombre: columnas[0].textContent,
							tipo: columnas[1].textContent,
							via: columnas[2].textContent,
							forma_farmaceutica: columnas[3].textContent,
							unidad: columnas[5].textContent,
							cantidad: columnas[4].textContent,
							desayuno: columnas[6].textContent,
							comida: columnas[7].textContent,
							cena: columnas[8].textContent,
							otros: columnas[9].textContent,
							n_medicacion: n_medicacion_nuevo
						};


						$.ajax({
							url: '../controllers/residente.php?task=altaMedicacion',
							type: "POST",
							data: {datosMedicacion, n_medicacion_nuevo},
							async: false,
							dataType: "html",
							success: function(data) {
								medicacion_nueva = n_medicacion_nuevo;
								let respuesta =  $.parseJSON(data);
								if(respuesta.status == "WARNING"){
									swal({
										title: "INSERTADA CON WARNING",
										text:  respuesta.message,
										buttons: false,
										icon:  "warning",
										timer: 2500,
									});
									
								}else{
									swal({
										title: "INSERTADA",
										text:  "Medicación insertada correctamente",
										buttons: false,
										icon:  "success",
										timer: 1500,
									});
								}
								// setTimeout('location.reload()',2000); 
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


					});
				}
					
				}
			});

			
			
		}
	});



	// for (let i = 0; i < medicacion_act.length; i++) {
	// 	if (medicacion_act[i] == null) {
	// 		if (medicacion_act[i] === null) {
	// 			medicacion_act.splice(i, 1);
	// 			i--; // Ajustamos el índice para evitar omitir el siguiente elemento
	// 		  }
	// 	}
	// }

	if (medicacion_nueva != undefined) {
		
		medicacion_act.push(medicacion_nueva);
	}


	if (datosResidente.norton === "") {
		delete datosResidente.norton;
	}
	if (datosResidente.barthel === "") {
		delete datosResidente.barthel;
	}
	if (datosResidente.lawton === "") {
		delete datosResidente.lawton;
	}
	if (datosResidente.painad === "") {
		delete datosResidente.painad;
	}
	if (datosResidente.goldberg === "") {
		delete datosResidente.goldberg;
	}
	if (datosResidente.minimental === "") {
		delete datosResidente.minimental;
	}
	if (datosResidente.downton === "") {
		delete datosResidente.downton;
	}
	if (datosResidente.escaladolor === "") {
		delete datosResidente.escaladolor;
	}
	if (datosResidente.testfotos === "") {
		delete datosResidente.testfotos;
	}
	if (datosResidente.pfeiffer === "") {
		delete datosResidente.pfeiffer;
	}
	if (datosResidente.morisky === "") {
		delete datosResidente.morisky;
	}

	datosResidente.medicacion = JSON.stringify(medicacion_act);


	$.ajax({
		url: '../controllers/residente.php?task=modificarResidente',
		type: "POST",
		async: false,
		data: {datosResidente,datosFamiliar,objetoCamposWhere},
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
					text:  "Residente modificado correctamente",
					buttons: false,
					icon:  "success",
					timer: 1500,
				});
			}
			// setTimeout('location.reload()',2000); 
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

function cargarDatosContacto(){
	
	let modoBusqueda = $('#ver-datos-contacto').find('.modoBusquedaResidente').val();
	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-datos-contacto'));
	
	if(idResidente != undefined && idResidente != ""){
		$('#ver-tabla-datos').show(); //tabla-horario
		tablaDatosContacto(idResidente);		
	}else
		$('#ver-tabla-datos').hide();	
}

function calcularEdad(fechaNacimiento){
	let hoy = new Date();
	let fechaArray= fechaNacimiento.split("/");
    let cumpleanos = new Date(fechaArray[2],fechaArray[1]-1,fechaArray[0]);
    let edad = hoy.getFullYear() - cumpleanos.getFullYear();
    let mes = hoy.getMonth() - cumpleanos.getMonth();

    if(edad <= 0)
		edad = 0;
	else if (mes < 0 || (mes == 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }
    return edad;	
}

function escaparComillas(key, value) {
	let resultado = value;
  if (typeof value === "string") {
	resultado = value.replace(/\"/g, '\\"');
  }
  return resultado;
}

function activarResidente(idResidente){

	var objetoCamposUpdate = {			
		fecha_baja : "null",
		motivo_baja : "null"
	}
	
	var objetoCamposWhere = {			
		id_residente : idResidente
	}

    $.ajax({
        url: '../controllers/residente.php?task=activarResidente',
        type: "POST",
        async: false,
        data: {objetoCamposUpdate,objetoCamposWhere},
		dataType: "html",
        success: function(data) {
			swal({
				title: "ACTUALIZADO",
				text:  "Residente activado correctamente",
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

//FUNCION QUE GENERA TABLA CON DATOS DE CONTACTO DEL RESIDENTE
var tablaDatosContacto = function(id){
    var table = $('#tabla-datos').DataTable({
       dom: '', //dom: 'Bfrtip',
       buttons: [
             /*'excel', 'pdf', 'print'*/
       ],
        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta
        "ajax":{
			"method":"POST",
			"url":"../controllers/tablas.php?funcion=datoscontacto&idResidente="+id+""
        },
        "columns":[
            {"data":"nombre_familiar"},
            {"data":"apellidos"},
            {"data":"direccion_postal"},
			{"data":"codigo_postal"},
            {"data":"telefono"},
            {"data":"email"},
			{"data":"parentesco"}
        ]
    });
}

//FUNCION QUE GENERA TABLA DE LOS RESIDENTES HISTORICOS (NO ACTIVOS)
var tablaResidenteHistorico = function(){
    var table = $('#tabla-residente-historico').DataTable({
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
          "url":"../controllers/tablas.php?funcion=residentehistorico"
        },
        "columns":[
			{"data":"fecha_alta",visible: false},
			{"data":"n_expediente"},
			{"data":"dni_residente"},
			{"data":"nombre"},
			{"data":"apellido1"},
			{"data":"apellido2"},
			{"data": "fecha_nacimiento",render: function(fecha){
				return calcularEdad(fecha);
				}
			},
			{"data":"discapacidad"},
			{"data":"situacion_medica"},
			{"data":"grado_dependencia"},
			{"data":"fecha_alta", "orderData": 0, render: function(date){
				return dateFns.format(date, 'DD/MM/YYYY HH:mm')
				}
			},
			{"data":"fecha_baja", render: function(date){
				return dateFns.format(date, 'DD/MM/YYYY HH:mm')
				}
			},
			{"data":"motivo_baja"},
			{"data":"id_residente", render: function(idResidente){
				return '<div style="text-align: center;" ><input class="btn btn-outline-primary botonActivar botonActivarResidente" type="button" value="Activar" id='+idResidente+'></div>'
				}
			},
			{"data":"kath", render: function(katz){
				return traductkatz(katz);
			}},
			{"data":"barthel"}
        ]
    });
	table.on( 'draw', function () {
		   $('.botonActivarResidente').click(function(){
				swal({
					title: "CAMBIAR A RESIDENTE EN ACTIVO",
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
							activarResidente($(this).attr("id"));
							tablaResidenteHistorico();
							if($('#de-alta-residente').is(':checked'))
								tablaResidenteDeAlta();
							setTimeout('location.reload()',2000);
							break;
						case "Cancelar":
							break;
					}
				});
			});
	   });
}

//FUNCION QUE GENERA TABLA CON TODOS LOS RESIDENTES ACTIVOS ACTUALES
var tablaResidenteDeAlta = function(){
      var table = $('#tabla-residente-de-alta').DataTable({
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
            "url":"../controllers/tablas.php?funcion=residentealta"
        },
        "columns":[
			{"data":"fecha_alta",visible: false},
            {"data":"n_expediente"},
			{"data":"dni_residente"},
			{"data":"nombre"},
			{"data":"apellido1"},
			{"data":"apellido2"},
			{"data": "fecha_nacimiento",render: function(fecha){
				return calcularEdad(fecha);
				}
			},
			{"data":"discapacidad"},
			{"data":"situacion_medica"},
			{"data":"grado_dependencia"},
			{"data":"fecha_alta", "orderData": 0, render: function(date){
				return dateFns.format(date, 'DD/MM/YYYY HH:mm')
				}
			},
			{"data":"kath", render: function(katz){
				return traductkatz(katz);
			}},
			{"data":"barthel"}
        ]
    });
}

function mostrarNewMedicacion(){
	$('#form-medic-1').removeClass("d-none");
	$('#form-medic-2').removeClass("d-none");
	$("#btn-new-medic").addClass("d-none");
}

function cancelarNuevaMedicacion(){
	$('#form-medic-1').addClass("d-none");
	$('#form-medic-2').addClass("d-none");
	$("#btn-new-medic").removeClass("d-none");
}

function addMedicacionTabla(){

	//Aqui comprobamos si es la primera medicación que se añade
	var a = $("#tabla-medicacion-res tbody");
	if($("#tabla-medicacion-res tbody").length == 0){
		$("#tabla-medicacion-res").append("<tbody></tbody>");
	}

	 //Para momento de administración si se elige otros
	 let momentoAdmOtros=$('#momentoAdm').val();
	 if (momentoAdmOtros=="abrirBox") {
		 momentoAdmOtros=$('#otrosMomentoAdm').val();
	 }else{
		 momentoAdmOtros;
	 }
 
	 //Por aqui añadimos cada campo a su columna
	 var fila = "";
	 fila+= "<tr>";
	 fila += "<td>" + $("#nombreMedicamento").val() + "</td>";
	fila += "<td>" + $("#medicacion").val() + "</td>";
	fila += "<td>" + $("#seleccionVia").find("option:selected").parent().attr("label") + "</td>";
	fila += "<td>" + $("#seleccionVia").val() + "</td>";
	fila += "<td>" + $("#cantidad").val() + "</td>";
	fila += "<td>" + $("#listadoUnidades").val() + "</td>";
	fila += "<td>" + $("#desayuno").val() + "</td>";
	fila += "<td>" + $("#comida").val() + "</td>";
	fila += "<td>" + $("#cena").val() + "</td>";
	fila += "<td>" + $("#otrosPosologia").val() + "</td>";
	 fila+= "</tr>";
	 $("#tabla-medicacion-res tbody").append(fila);


	//Ocultamos formulario y mostramos boton añadir, botón vaciar tabla y tabla

	$("#tabla-medicacion").removeClass("d-none");
	$("#btn-empty-medic").removeClass("d-none");
	$('#form-medic-1').addClass("d-none");
	$('#form-medic-2').addClass("d-none");
	$("#btn-new-medic").removeClass("d-none");
}

function limpiarTablaMedic(){
	$("#tabla-medicacion").addClass("d-none");
	$("#btn-empty-medic").addClass("d-none");

	$("#tabla-medicacion-res tbody").remove();
}

function validarNewMedicacion(){
	return $("#medicacion").val() != "" && $("#nombreMedicamento").val() != "" && $("#seleccionVia").val() != "" && $("#listadoUnidades").val() != "" && $("#desayuno").val() != "" && $("#comida").val() != "" && $("#cantidad").val() != "" && $("#cena").val() != "";

}

//VERSION MODIFICAR

function mostrarNewMedicacion_mod(){
	$('#form-medic-1-mod').removeClass("d-none");
	$('#form-medic-2-mod').removeClass("d-none");
	$("#btn-new-medic-mod").addClass("d-none");
}

function cancelarNuevaMedicacion_mod(){
	$('#form-medic-1-mod').addClass("d-none");
	$('#form-medic-2-mod').addClass("d-none");
	$("#btn-new-medic-mod").removeClass("d-none");
}

function addMedicacionTabla_mod(){

	//Aqui comprobamos si es la primera medicación que se añade
	var a = $("#tabla-medicacion-res-mod tbody");
	if($("#tabla-medicacion-res-mod tbody").length == 0){
		$("#tabla-medicacion-res-mod").append("<tbody></tbody>");
	}

	//Para momento de administración si se elige otros
	let momentoAdmOtrosModif=$('#momentoAdmModif').val();
	if (momentoAdmOtrosModif=="abrirBox") {
		momentoAdmOtrosModif=$('#otrosMomentoAdmModif').val();
	}else{
		momentoAdmOtrosModif;
	}

	//Por aqui añadimos cada campo a su columna
	var fila = "";
	fila+= "<tr>";
	fila += "<td>" + $("#nombreMedicamento-mod").val() + "</td>";
	fila += "<td>" + $("#medicacion-mod").val() + "</td>";
	fila += "<td>" + $("#seleccionVia-mod").find("option:selected").parent().attr("label") + "</td>";
	fila += "<td>" + $("#seleccionVia-mod").val() + "</td>";
	fila += "<td>" + $("#cantidad-mod").val() + "</td>";
	fila += "<td>" + $("#listadoUnidades-mod").val() + "</td>";
	fila += "<td>" + $("#desayuno-mod").val() + "</td>";
	fila += "<td>" + $("#comida-mod").val() + "</td>";
	fila += "<td>" + $("#cena-mod").val() + "</td>";
	fila += "<td>" + $("#otrosPosologia-mod").val() + "</td>";
	fila+= "</tr>";
	$("#tabla-medicacion-res-mod tbody").append(fila);


	//Ocultamos formulario y mostramos boton añadir, botón vaciar tabla y tabla

	$("#tabla-medicacion-mod").removeClass("d-none");
	$("#btn-empty-medic-mod").removeClass("d-none");
	$('#form-medic-1-mod').addClass("d-none");
	$('#form-medic-2-mod').addClass("d-none");
	$("#btn-new-medic-mod").removeClass("d-none");
}

function limpiarTablaMedic_mod(){
	$("#tabla-medicacion-mod").addClass("d-none");
	$("#btn-empty-medic-mod").addClass("d-none");

	$("#tabla-medicacion-res-mod tbody").remove();
}

function validarNewMedicacion_mod(){
	return $("#medicacion-mod").val() != "" && $("#nombreMedicamento-mod").val() != "" && $("#seleccionVia-mod").val() != "" && $("#listadoUnidades-mod").val() != "" && $("#desayuno-mod").val() != "" && $("#comida-mod").val() != "" && $("#cantidad-mod").val() != "" && $("#cena-mod").val() != "";
}