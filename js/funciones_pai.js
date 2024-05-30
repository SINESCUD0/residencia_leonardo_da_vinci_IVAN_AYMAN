function modificarPai(){

	//Subir Fichero NORTON PDF
	const formFicheroPDF = document.forms.namedItem("formFicheroPai");
	var idFicheroFinalNorton = subirPDF(formFicheroPDF);


	// //Subir Fichero MINIMENTAL PDF
	const formFicheroPDFMini = document.forms.namedItem("formFicheroMiniMentalPai");
	var idFicheroFinalMini = subirPDF_MiniMental(formFicheroPDFMini);

	//Subir Fichero BARTHEL PDF
	const formFicheroPDFBarthel = document.forms.namedItem("formFicheroBarthelPai");
	var idFicheroFinalBarthel = subirPDF_Barthel(formFicheroPDFBarthel);


	//Subir Fichero LAWTON PDF
	const formFicheroPDFLawton = document.forms.namedItem("formFicheroLawtonPai");
	var idFicheroFinalLawton = subirPDF_Lawton(formFicheroPDFLawton);

	//Subir Fichero PAINAD PDF
	const formFicheroPDFPainad = document.forms.namedItem("formFicheroPainadPai");
	var idFicheroFinalPainad = subirPDF_Painad(formFicheroPDFPainad);

	//Subir Fichero GOLDBERG PDF
	const formFicheroPDFGoldberg = document.forms.namedItem("formFicheroGoldbergPai");
	var idFicheroFinalGoldberg = subirPDF_Goldberg(formFicheroPDFGoldberg);


	//Subir Fichero DOWNTON PDF
	const formFicheroPDFDownton = document.getElementById("formFicheroDowntonPai");
	var idFicheroFinalDownton = subirPDF_Downton(formFicheroPDFDownton);

	//Subir Fichero ESCALA DOLOR PDF
	const formFicheroPDFDolor = document.forms.namedItem("formFicheroDolorPai");
	var idFicheroFinalDolor = subirPDF_Dolor(formFicheroPDFDolor);

	//Subir Fichero TEST FOTOS PDF
	const formFicheroPDFFotos = document.forms.namedItem("formFicheroTestFotosPai");
	var idFicheroFinalFotos = subirPDF_Fotos(formFicheroPDFFotos);

	//Subir Fichero PFEIFFER PDF
	const formFicheroPDFPfeiffer = document.forms.namedItem("formFicheroPfeifferPai");
	var idFicheroFinalPfeiffer = subirPDF_Pfeiffer(formFicheroPDFPfeiffer);

	//Subir Fichero MORISKY PDF
	const formFicheroPDFMorisky = document.getElementById("formFicheroMoriskyPai");
	var idFicheroFinalMorisky = subirPDF_Morisky(formFicheroPDFMorisky);




	$form=$('#formulario-pai');

	let modoBusqueda = $('#ver-modificar-plan').find('.modoBusquedaResidente').val();

	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-modificar-plan'));

	let respuesta;

	let data;

	let datosSociosanitarios=new Object();

	let areaSocial=new Object();

	let areaSanitaria=new Object();

	let areaPsicologica=new Object();

	let areaFuncional = new Object();

	let areaAnimacion = new Object();

	let dolor = new Object;

	let fechaElaboracion= $form.find('[name="fecha-evaluacion-pai"]').val();

	let fechaConvertida = convertirFechaEspIngles(fechaElaboracion.substr(0,10))+(fechaElaboracion.substr(11));	

	let $datosSociosanitariosFormControl = $(".datosSociosanitarios .form-control.anadir");

	let $areaSocialFormControl = $(".areaSocial .form-control");

	let $areaSanitariaFormControl = $(".areaSanitaria .form-control");

	let $areaPsicologicaFormControl = $(".areaPsicologica .form-control");

	let $areaFuncionalFormControl = $(".areaFuncional .form-control");

	let $areaAnimacionFormControl = $(".areaAnimacion .form-control");

	

	$datosSociosanitariosFormControl.each(function(index){

		datosSociosanitarios[$(this).attr('name')] = $(this).val();

	});

	

	$areaSocialFormControl.each(function(index){

		areaSocial[$(this).attr('name')] = $(this).val();

	});

	

	$areaSanitariaFormControl.each(function(index){

		if($(this).hasClass("summernote"))

			areaSanitaria[$(this).attr('name')] = $(this).summernote('code');

		else if($(this).hasClass("dolor"))

			dolor[$(this).attr('name')] = $(this).val();

		else

			areaSanitaria[$(this).attr('name')] = $(this).val();

	});

	

	$areaPsicologicaFormControl.each(function(index){

		areaPsicologica[$(this).attr('name')] = $(this).val();

	});

	

	$areaFuncionalFormControl.each(function(index){

		areaFuncional[$(this).attr('name')] = $(this).val();

	});

	

	$areaAnimacionFormControl.each(function(index){

		areaAnimacion[$(this).attr('name')] = $(this).val();

	});

	

	var $creenciasCheckbox = $("[class~='creenciasCheckbox'] input[type=checkbox]");

	var $areaSanitariaCheckbox = $("[class~='areaSanitariaCheckbox'] input[type=checkbox]");

	var $dolorCheckbox = $("[class~='dolorCheckbox'] input[type=checkbox]");

	var $areaPsicologicaCheckbox = $("[class~='areaPsicologicaCheckbox'] input[type=checkbox]");

	var $areaFuncionalCheckbox = $("[class~='areaFuncionalCheckbox'] input[type=checkbox]");

	var $areaAnimacionCheckbox = $("[class~='areaAnimacionCheckbox'] input[type=checkbox]");

	



	$creenciasCheckbox.each(function(index, check ){

		areaSocial[check.id] = check.checked;		

	});
	

	

	$areaSanitariaCheckbox.each(function(index, check ){

		areaSanitaria[check.id] = check.checked;		

	});

	

	$dolorCheckbox.each(function(index, check ){

		dolor[check.id] = check.checked;		

	});

	

	$areaPsicologicaCheckbox.each(function(index, check ){

		areaPsicologica[check.id] = check.checked;		

	});

	

	$areaFuncionalCheckbox.each(function(index, check ){

		areaFuncional[check.id] = check.checked;		

	});

	

	$areaAnimacionCheckbox.each(function(index, check ){

		areaAnimacion[check.id] = check.checked;		

	});

	

	areaSanitaria['dolor']=dolor;

	var numero;

	$.ajax({
		url: '../controllers/residente.php?task=nMedicacion',
		type: "POST",
		data: {},
		async: false,
		dataType: "html",
		success: function(data1) {	
			let respuesta1 =  $.parseJSON(data1);
			numero = respuesta1.n_medicacion;
		}
	});

	//AQUI OBTENEMOS EL NÚMERO DE LA NUEVA MEDICACIÓN

	var datosResidente={

		pai_datos_sociosanitarios : JSON.stringify(datosSociosanitarios,escaparSaltosLinea),

		pai_area_social : JSON.stringify(areaSocial,escaparSaltosLinea),

		pai_area_sanitaria : JSON.stringify(areaSanitaria,escaparSaltosLinea),

		pai_area_psicologica : JSON.stringify(areaPsicologica,escaparSaltosLinea),

		pai_area_funcional : JSON.stringify(areaFuncional,escaparSaltosLinea),

		pai_area_animacion : JSON.stringify(areaAnimacion,escaparSaltosLinea),

		grado_dependencia : $form.find('[name="grado_dependencia"]').val(),

		incapacidad_legal : $form.find('[name="incapacidad_legal"]').val(),

		pai_fecha_elaboracion : fechaConvertida,

		kath: convKathPAI(),

		 barthel: idFicheroFinalBarthel,
		norton: idFicheroFinalNorton,
		medicacion: numero,
		// alergia: alergia,
		lawton: idFicheroFinalLawton,
		painad: idFicheroFinalPainad,
		goldberg: idFicheroFinalGoldberg,
		minimental: idFicheroFinalMini,
		downton: idFicheroFinalDownton,
		escaladolor: idFicheroFinalDolor,
		testfotos: idFicheroFinalFotos,
		pfeiffer: idFicheroFinalPfeiffer,
		morisky: idFicheroFinalMorisky

		//AQUI AÑADIMOS EL NUMERO DE LA NUEVA MEDICACION
	};




	var datosHistorico ={

		pai_datos_sociosanitarios : JSON.stringify(datosSociosanitarios),

		pai_area_social : JSON.stringify(areaSocial),

		pai_area_sanitaria : JSON.stringify(areaSanitaria),

		pai_area_psicologica : JSON.stringify(areaPsicologica),

		pai_area_funcional : JSON.stringify(areaFuncional),

		pai_area_animacion : JSON.stringify(areaAnimacion)

	}
	

	var objetoCamposWhere = {			

		id_residente : idResidente		

	}

	

	var objetoCamposWhere = {			

		id_residente : idResidente		

	}



	if($("#otroFamiliar").prop('checked')){

		var datosOtroFamiliar={

			dni_familiar : $form.find('[name="dni-otros-pai"]').val(),

			nombre_familiar : $form.find('[name="nombre-otros-pai"]').val(),

			apellidos : $form.find('[name="apellidos-otros-pai"]').val(),

			telefono :  $form.find('[name="telefono-otros-pai"]').val(),

			parentesco : $form.find('[name="parentesco-otros-pai"]').val()				

		};

		

		data = {datosResidente,datosOtroFamiliar,objetoCamposWhere};

	

	}else{

		data = {datosResidente,objetoCamposWhere};

	}

	let medicacion_act ;
	let medicacion_nueva ;


	let postObj = {			
		id_residente : idResidente
	}


	let historialcompleto = sacarElHistorial(datosHistorico, idResidente);

	$.ajax({
        url: '../controllers/residente.php?task=consultarResidente',
        type: "POST",
        async: false,
        data: postObj,
		dataType: "html",
        success: function(data) {	
			respuesta = $.parseJSON(data);
			medicacion_act = $.parseJSON(respuesta.datosResidente.medicacion);

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
					var numeropai = respuesta1.n_medicacion;
					//Obtenida la medicacion de esta persona y su nuevo numero llamamos a modificarmedicacion
					var n_medicacion_persona = medicamentos[0].n_medicacion;
					var n_medicacion_nuevo = numeropai;
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
				if($("#tabla-medicacion-res-pai tbody tr").length > 0){
					$("#tabla-medicacion-res-pai tbody tr").each(function(e){
						var fila = $(this);
						var columnas = fila.find("td");
						var datosMedicacion = {
							nombre: columnas[0].textContent,
							tipo: columnas[1].textContent,
							via: columnas[2].textContent,
							forma_farmaceutica: columnas[3].textContent,
							unidad: columnas[4].textContent,
							cantidad: columnas[5].textContent,
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


					});
				}
					
				}
			});

			
			
		}
	});



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
		url: '../controllers/residente.php?task=modificarPai',
		type: "POST",
		async: false,
		data: data,
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
					text:  "Modificado correctamente",
					buttons: false,
					icon:  "success",
					timer: 1500,
				});
				if(historialcompleto != "false"){
					guardarHistorial(historialcompleto);
				}				
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

function cargarDatosPai(){

	

	let modoBusqueda = $('#ver-modificar-plan').find('.modoBusquedaResidente').val();

	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-modificar-plan'));

	let respuesta;

	var datosResidente;

	let datosOtroFamiliar;

	$form=$('#formulario-pai');

		

	var postObj = {			

		id_residente : idResidente

	}



	$.ajax({
		url: '../controllers/residente.php?task=consultarPai',
		type: "POST",
		async: false,
		data: postObj,
		dataType: "html",
		success: function(data) {
		  respuesta = $.parseJSON(data);
		  datosResidente = respuesta.datosResidente;



		  if (respuesta.datosOtroFamiliar != null)
			datosOtroFamiliar = respuesta.datosOtroFamiliar;
	  
		  if (respuesta.status == "WARNING") {
			swal({
			  title: "WARNING",
			  text: respuesta.message,
			  buttons: false,
			  icon: "warning",
			  timer: 2500,
			});
		  }
	  

		}
	  });



	if(datosResidente != undefined && Object.keys(datosResidente).length > 0){

		$("#tabla-medicacion-res-pai tbody").remove();
		$("#tabla-medTratam-res-pai tbody").remove();

		rellenarPai(datosResidente);





		if(datosOtroFamiliar != undefined && Object.keys(datosOtroFamiliar).length > 0){

			$("#otroFamiliar").prop('checked', true);

			$('.datosOtroFamiliar').prop('disabled', false);

			$form.find('[name="nombre-otros-pai').val(datosOtroFamiliar.nombre_familiar);

			$form.find('[name="apellidos-otros-pai').val(datosOtroFamiliar.apellidos);

			$form.find('[name="dni-otros-pai').val(datosOtroFamiliar.dni_familiar);

			$form.find('[name="telefono-otros-pai').val(datosOtroFamiliar.telefono);

			$form.find('[name="parentesco-otros-pai').val(datosOtroFamiliar.parentesco);



			

		}else{

			$("#otroFamiliar").prop('checked', false);

			$('.datosOtroFamiliar').prop('disabled', true);			

		}

        //Mostrar indice katz en el PAI
		
		// if(datosResidente.kath != "" || datosResidente.kath != null){
			if(datosResidente.kath.length == 6){

			$("#B[name='B']")[parseInt(datosResidente.kath.charAt(0)) + 2].click();

			$("#V[name='V']")[parseInt(datosResidente.kath.charAt(1)) + 2].click();

			$("#WC[name='WC']")[parseInt(datosResidente.kath.charAt(2)) + 2].click();

			$("#M[name='M']")[parseInt(datosResidente.kath.charAt(3)) + 2].click();

			$("#C[name='C']")[parseInt(datosResidente.kath.charAt(4)) + 2].click();

			$("#A[name='A']")[parseInt(datosResidente.kath.charAt(5)) + 2].click();



			katzpai();

		}else{

			var radio = document.querySelectorAll('#alerta input[type=radio]:checked');

			radio.forEach(element => {

    			element.checked = false;

			});

			$("#IKpai").val("");

        	$("#Jpai").val("");

		}


		

	}else{

		$('#seccionPai').find($('.form-control')).each(function(index){

			$(this).val("");

		});		

	}

	$("#tabla-medicacion-pai").addClass("d-none");
	$("#btn-empty-medic-pai").addClass("d-none");
	// $("#tabla-medicacion-res-pai tbody").remove();




}

function rellenarPai(datosResidente){



				//CARGAR MEDICACION ACTUAL Y TRATAMIENTOS EN MODIFICAR PAI
				if(datosResidente.arrayMedActual != "nada" && datosResidente.arrayMedActual.length > 0){
					$("#tabla-medicacion-res-pai").append("<tbody></tbody>");
					$("#tabla-medAnticon-res-pai").append("<tbody></tbody>");
					$("#tabla-medDolor-res-pai").append("<tbody></tbody>");
					$("#tabla-medDormir-res-pai").append("<tbody></tbody>");

					$("#tabla-medicacion-res-pai").removeClass("d-none");
					
					// for (let index = 0; index < datosResidente.arrayMedActual.length; index++) {
						datosResidente.arrayMedActual[0].forEach(element => {
							var fila = "";
								fila+= "<tr>";
								fila += "<td>" + element.nombre + "</td>";
								fila += "<td>" + element.tipo + "</td>";
								fila += "<td>" + element.via + "</td>";
								fila += "<td>" + element.forma_farmaceutica + "</td>";
								fila += "<td>" + element.cantidad + " " + element.unidad + "</td>";
								fila += "<td>" + element.desayuno + "</td>";
								fila += "<td>" + element.comida + "</td>";
								fila += "<td>" + element.cena + "</td>";
								fila += "<td>" + element.otros + "</td>";
								fila += "<td>" + element.Inicio + "</td>";
								fila+= "</tr>";

							
							
							$("#tabla-medicacion-res-pai tbody").append(fila);
			
							var fila2 = "";
								fila2+= "<tr>";
								fila2 += "<td>" + element.nombre + "</td>";
								fila2 += "<td>" + element.via + "</td>";
								fila2 += "<td>" + element.forma_farmaceutica + "</td>";
								fila2 += "<td>" + element.cantidad + " " + element.unidad + "</td>";
								fila2 += "<td>" + element.desayuno + "</td>";
								fila2 += "<td>" + element.comida + "</td>";
								fila2 += "<td>" + element.cena + "</td>";
								fila2 += "<td>" + element.otros + "</td>";
								fila2 += "<td>" + element.Inicio + "</td>";
								fila2+= "</tr>";
			
							if(element.tipo == "analgesico") 
								$("#tabla-medDolor-res-pai tbody").append(fila2);
						
								
							if(element.tipo == "hipnotico" || element.tipo == "insomnio")
								$("#tabla-medDormir-res-pai tbody").append(fila2);
							
								
							if(element.tipo == "preservativo masculino" || element.tipo == "preservativo femenino" || element.tipo == "orales"
							|| element.tipo == "parches" || element.tipo == "inyectables" || element.tipo == "diu" || element.tipo == "anillo")
								$("#tabla-medAnticon-res-pai tbody").append(fila2);
							
								
			
						});
					// }
					
				}else{
					$("#tabla-medicacion-res-pai").addClass("d-none");
				}
			
				//CARGAR TRATAMIENTOS EN MODIFICAR PAI
				if(datosResidente.arrayMedTratam != "nada" && datosResidente.arrayMedTratam.length > 0){
					$("#tabla-medTratam-res-pai").append("<tbody></tbody>");
					$("#tabla-medTratam-res-pai").removeClass("d-none");
			
					for (let index = 0; index < datosResidente.arrayMedTratam.length; index++) {
						datosResidente.arrayMedTratam[index].forEach(element => {
							var fila = "";
								fila+= "<tr>";
								fila += "<td>" + element.nombre + "</td>";
								fila += "<td>" + element.tipo + "</td>";
								fila += "<td>" + element.via + "</td>";
								fila += "<td>" + element.forma_farmaceutica + "</td>";
								fila += "<td>" + element.cantidad + " " + element.unidad + "</td>";
								fila += "<td>" + element.desayuno + "</td>";
								fila += "<td>" + element.comida + "</td>";
								fila += "<td>" + element.cena + "</td>";
								fila += "<td>" + element.otros + "</td>";
								fila += "<td>" + element.Inicio + "</td>";
								fila += "<td>" + element.Fin + "</td>";
								fila+= "</tr>";
							$("#tabla-medTratam-res-pai tbody").append(fila);
						});
					}
			
					
				}else{
					$("#tabla-medTratam-res-pai").addClass("d-none");
				}


	//Recuperamos el nombre del fichero PDF(escala norton) 
		
			if(datosResidente.norton!=""){
				let newUrl= "../ficheros-index/escalaNorton_Residentes/"+ datosResidente.norton;
				$('#nortonPAI').removeClass('d-none');
				$('#nortonPAI').prop('href', newUrl); // href en la vista cambia a esta url

			}else{
				$('#nortonPAI').addClass('d-none');
			}

	//RECUPERO EL NOMBRE DEL ARCHIVO PDF del test minimental 
	
			if(datosResidente.minimental!="" && datosResidente.minimental!=null ){
				let newUrl= "../ficheros-index/escalaMiniMental_Residentes/"+ datosResidente.minimental;
				$('#miniMentalPAI').removeClass('d-none');
				$('#miniMentalPAI').prop('href', newUrl); // href en la vista cambia a esta url

			}else{
				$('#miniMentalPAI').addClass('d-none');
			}

	//RECUPERO EL NOMBRE DEL ARCHIVO PDF de Barthel 
			if(datosResidente.barthel!="" && datosResidente.barthel!=null ){
				let newUrl= "../ficheros-index/escalaBarthel_Residentes/"+ datosResidente.barthel;
				$('#barthelPAI').removeClass('d-none');
				$('#barthelPAI').prop('href', newUrl); // href en la vista cambia a esta url
				

			}else{
				$('#barthelPAI').addClass('d-none');
			}

			//RECUPERO EL NOMBRE DEL ARCHIVO PDF de lawton 
			if(datosResidente.lawton !="" && datosResidente.lawton!=null ){
				let newUrl= "../ficheros-index/escalaLawton_Residentes/"+ datosResidente.lawton;
				$('#lawtonPAI').removeClass('d-none');
				$('#lawtonPAI').prop('href', newUrl); // href en la vista cambia a esta url
				

			}else{
				$('#lawtonPAI').addClass('d-none');
			}

			//RECUPERO EL NOMBRE DEL ARCHIVO PDF de painad
			if(datosResidente.painad!="" && datosResidente.painad!=null ){
				let newUrl= "../ficheros-index/escalaPainad_Residentes/"+ datosResidente.painad;
				$('#painadPAI').removeClass('d-none');
				$('#painadPAI').prop('href', newUrl); // href en la vista cambia a esta url
				

			}else{
				$('#painadPAI').addClass('d-none');
			}

			//RECUPERO EL NOMBRE DEL ARCHIVO PDF de goldberg 
			if(datosResidente.goldberg!="" && datosResidente.goldberg!=null ){
				let newUrl= "../ficheros-index/escalaGoldberg_Residentes/"+ datosResidente.goldberg;
				$('#goldbergPAI').removeClass('d-none');
				$('#goldbergPAI').prop('href', newUrl); // href en la vista cambia a esta url
				

			}else{
				$('#goldbergPAI').addClass('d-none');
			}

			//RECUPERO EL NOMBRE DEL ARCHIVO PDF de downton 
			if(datosResidente.downton!="" && datosResidente.downton!=null ){
				let newUrl= "../ficheros-index/escalaDownton_Residentes/"+ datosResidente.downton;
				$('#downtonPAI').removeClass('d-none');
				$('#downtonPAI').prop('href', newUrl); // href en la vista cambia a esta url
				

			}else{
				$('#downtonPAI').addClass('d-none');
			}

			//RECUPERO EL NOMBRE DEL ARCHIVO PDF de escala dolor 
			if(datosResidente.escaladolor!="" && datosResidente.escaladolor!=null ){
				let newUrl= "../ficheros-index/escalaDolor_Residentes/"+ datosResidente.escaladolor;
				$('#escalaDolorPAI').removeClass('d-none');
				$('#escalaDolorPAI').prop('href', newUrl); // href en la vista cambia a esta url
				

			}else{
				$('#escalaDolorPAI').addClass('d-none');
			}

			//RECUPERO EL NOMBRE DEL ARCHIVO PDF de test fotos
			if(datosResidente.testfotos!="" && datosResidente.testfotos!=null ){
				let newUrl= "../ficheros-index/escalaFotos_Residentes/"+ datosResidente.testfotos;
				$('#testFotosPAI').removeClass('d-none');
				$('#testFotosPAI').prop('href', newUrl); // href en la vista cambia a esta url
				

			}else{
				$('#testFotosPAI').addClass('d-none');
			}

			//RECUPERO EL NOMBRE DEL ARCHIVO PDF de pfeiffer
			if(datosResidente.pfeiffer!="" && datosResidente.pfeiffer!=null ){
				let newUrl= "../ficheros-index/escalaPfeiffer_Residentes/"+ datosResidente.pfeiffer;
				$('#pfeifferPAI').removeClass('d-none');
				$('#pfeifferPAI').prop('href', newUrl); // href en la vista cambia a esta url
				

			}else{
				$('#pfeifferPAI').addClass('d-none');
			}

			//RECUPERO EL NOMBRE DEL ARCHIVO PDF de morisky
			if(datosResidente.morisky!="" && datosResidente.morisky!=null ){
				let newUrl= "../ficheros-index/escalaMorisky_Residentes/"+ datosResidente.morisky;
				$('#moriskyPAI').removeClass('d-none');
				$('#moriskyPAI').prop('href', newUrl); // href en la vista cambia a esta url
				

			}else{
				$('#moriskyPAI').addClass('d-none');
			}

	

	$form=$('#formulario-pai');

	let fechaActual = new Date();

	let fechaIngreso = new Date(datosResidente.fecha_alta);

	

	$form.find('[name="fecha-alta-pai').val(fechaIngreso.toLocaleString('en-GB'));

	$form.find('[name="fecha-evaluacion-pai').val(fechaActual.toLocaleString('en-GB'));

	

	if(datosResidente.pai_fecha_elaboracion!=null){

		let fechaElaboracion = new Date(datosResidente.pai_fecha_elaboracion);

		$form.find('[name="fecha-elaboracion-pai').val(fechaElaboracion.toLocaleString('en-GB'));

	}

	

	$form.find('[name="nombre-familiar-pai"]').val(datosResidente.apellidos + ", " + datosResidente.nombre_familiar);

	$form.find('[name="nombre-residente-pai"]').val(datosResidente.apellido1 + " " + datosResidente.apellido2 + ", " + datosResidente.nombre);



	//recuperamos los datos del residente, familiar, otro familiar...

	Object.entries(datosResidente).forEach(([clave, valor]) => {

		let name= "[name='" + clave +"']";

		$form.find(name).val(valor);

	});

	//Se oye?

	//añadimos el responable, si lo tuviera	

	if(datosResidente.id_habitacion != null && datosResidente.id_habitacion != "" && datosResidente.id_personal_responsable != null &&  datosResidente.id_personal_responsable != ""){

		$form.find('[name="responasable-pai"]').empty();

		mostrarResponsablesPlanta(datosResidente.id_habitacion);

		$form.find('[name="responasable-pai"] option').each(function(){

			if ($(this).val() != datosResidente.id_personal_responsable )        

				$(this).remove();	    

		});

	}else{

		$form.find('[name="responasable-pai"]').empty();

		$form.find('[name="responasable-pai"]').append($('<option>').text("No tiene responsable asignado").attr('value', ""));

	}



	//Recuperamos los diferentes JSON de la base de datos (de las diferentes áreas)

	let respuestaDatosSociosanitarios= $.parseJSON(datosResidente.pai_datos_sociosanitarios);

	let respuestaAreaSocial= $.parseJSON(datosResidente.pai_area_social);

	let respuestaAreaSanitaria= $.parseJSON(datosResidente.pai_area_sanitaria);	

	let respuestaAreaPsicologica= $.parseJSON(datosResidente.pai_area_psicologica);

	let respuestaAreaFuncional= $.parseJSON(datosResidente.pai_area_funcional);

	let respuestaAreaAnimacion= $.parseJSON(datosResidente.pai_area_animacion);

	

	//por otro lado, obtenemos los campos del formulario (por áreas) 

	let $datosSociosanitariosFormControl = $(".datosSociosanitarios .form-control.anadir");

	let $areaSocialFormControl = $(".areaSocial .form-control");

	let $creenciasCheckbox = $("[class~='creenciasCheckbox'] input[type=checkbox]");

	

	let $areaSanitariaFormControl = $(".areaSanitaria .form-control");

	let $areaSanitariaCheckbox = $("[class~='areaSanitariaCheckbox'] input[type=checkbox]");

	let $dolorCheckbox = $("[class~='dolorCheckbox'] input[type=checkbox]");

	

	let $areaPsicologicaFormControl = $(".areaPsicologica .form-control");

	let $areaPsicologicaCheckbox = $("[class~='areaPsicologicaCheckbox'] input[type=checkbox]");

	

	let $areaFuncionalFormControl = $(".areaFuncional .form-control");

	let $areaFuncionalCheckbox = $("[class~='areaFuncionalCheckbox'] input[type=checkbox]");

	

	let $areaAnimacionFormControl = $(".areaAnimacion .form-control");

	let $areaAnimacionCheckbox = $("[class~='areaAnimacionCheckbox'] input[type=checkbox]");

	

	//Si ya hay datos en la BD, asignamos estos valores a los campos del área SOCIOSANITARIA

	if(respuestaDatosSociosanitarios != undefined && Object.keys(respuestaDatosSociosanitarios).length > 0){

		$datosSociosanitariosFormControl.each(function(index){

			if(respuestaDatosSociosanitarios[$( this ).attr('name')] != undefined)

				$(this).val(respuestaDatosSociosanitarios[$( this ).attr('name')]);

		});

		

	}

	

	//Si ya hay datos en la BD, asignamos estos valores a los campos del área SOCIAL

	if(respuestaAreaSocial != undefined && Object.keys(respuestaAreaSocial).length > 0){

		$areaSocialFormControl.each(function(index){

			if(respuestaAreaSocial[$( this ).attr('name')] != undefined)

				$(this).val(respuestaAreaSocial[$( this ).attr('name')]);

		});

		

		//Hacemos lo propio con los checkboxes, y si están seleccionados aquellos que tienen campos ocultos, los mostramos

		$creenciasCheckbox.each(function(index, check ){		

			$(check).prop('checked',respuestaAreaSocial[check.id]);

			if(check.id == "acudeServicios"){

				if(respuestaAreaSocial[check.id]!=false){

					$("[name='frecuenciaServicio']").val(respuestaAreaSocial['frecuenciaServicio']);

					$("#frecuenciaServicioSelect").removeClass("d-none");

				}else{

					$("#frecuenciaServicioSelect").addClass('d-none');

					$("[name='frecuenciaServicio']").val("");

				}

			}

		});

	}

	

	//Si ya hay datos en la BD, asignamos estos valores a los campos del área SANITARIA

	if(respuestaAreaSanitaria != undefined && Object.keys(respuestaAreaSanitaria).length > 0){

		$areaSanitariaFormControl.each(function(index){

			if(respuestaAreaSanitaria[$(this).attr('name')] != undefined || respuestaAreaSanitaria['dolor'][$(this).attr('name')] != undefined){

				if($(this).hasClass("summernote"))

					$(this).summernote('code',respuestaAreaSanitaria[$(this).attr('name')]);

				else if($(this).hasClass("dolor"))

					$(this).val(respuestaAreaSanitaria['dolor'][$(this).attr('name')]);

				else

					$(this).val(respuestaAreaSanitaria[$(this).attr('name')]);

				

				

			}

		});

		

		//Hacemos lo propio con los checkboxes, y si están seleccionados aquellos que tienen campos ocultos, los mostramos

		$areaSanitariaCheckbox.each(function(index, check ){		

			$(check).prop('checked',respuestaAreaSanitaria[check.id]);

			if(check.id == "ulcerasPiel"){

				if(respuestaAreaSanitaria[check.id]!=false){

					$("#camposUlcera").removeClass("d-none");

				}else{

					$("#camposUlcera").addClass('d-none');

					$('#gradoUlceraVascular').val('');

					$('#tratamientosUlceraVascular').val('');

					$('#otrosDatosUlceraVascular').val('');

				}

			}



			if(check.id == "encamamiento"){

				if(respuestaAreaSanitaria[check.id]!=false)

					$("#camposEncamamiento").removeClass("d-none");

				else

					$("#camposEncamamiento").addClass('d-none');

			}

		});

		

		$dolorCheckbox.each(function(index, check ){		

			$(check).prop('checked',respuestaAreaSanitaria['dolor'][check.id]);

		});

		

	}

	

	//Si ya hay datos en la BD, asignamos estos valores a los campos del área Psicologica

	if(respuestaAreaPsicologica != undefined && Object.keys(respuestaAreaPsicologica).length > 0){

		$areaPsicologicaFormControl.each(function(index){

			if(respuestaAreaPsicologica[$( this ).attr('name')] != undefined)

				$(this).val(respuestaAreaPsicologica[$( this ).attr('name')]);

		});

		

		//Hacemos lo propio con los checkboxes, y si están seleccionados aquellos que tienen campos ocultos, los mostramos

		$areaPsicologicaCheckbox.each(function(index, check ){		

			$(check).prop('checked',respuestaAreaPsicologica[check.id]);

			if(check.id == "antecedentesPsiquiatricos"){

				if(respuestaAreaPsicologica[check.id]!=false)

					$("#antecedentesPsiquiatricosArea").removeClass("d-none");

				else

					$("#antecedentesPsiquiatricosArea").addClass('d-none');

			}

		});

	}

	

	

	//Si ya hay datos en la BD, asignamos estos valores a los campos del área Funcional

	if(respuestaAreaFuncional != undefined && Object.keys(respuestaAreaFuncional).length > 0){

		$areaFuncionalFormControl.each(function(index){

			if(respuestaAreaFuncional[$( this ).attr('name')] != undefined)

				$(this).val(respuestaAreaFuncional[$( this ).attr('name')]);

		});

		

		//Hacemos lo propio con los checkboxes, y si están seleccionados aquellos que tienen campos ocultos, los mostramos

		$areaFuncionalCheckbox.each(function(index, check ){		

			$(check).prop('checked',respuestaAreaFuncional[check.id]);

		});

	}

	

	

	//Si ya hay datos en la BD, asignamos estos valores a los campos del área Animacion Sociocultural

	if(respuestaAreaAnimacion != undefined && Object.keys(respuestaAreaAnimacion).length > 0){

		$areaAnimacionFormControl.each(function(index){

			if(respuestaAreaAnimacion[$( this ).attr('name')] != undefined)

				$(this).val(respuestaAreaAnimacion[$( this ).attr('name')]);

		});

		

		//Hacemos lo propio con los checkboxes, y si están seleccionados aquellos que tienen campos ocultos, los mostramos

		$areaAnimacionCheckbox.each(function(index, check ){		

			$(check).prop('checked',respuestaAreaAnimacion[check.id]);

		});

	}



	//por último, activamos los campos ocultos que tengan información

	let $camposOcultos = $form.find($(".d-none"));

		

		$camposOcultos.each(function(index){

			if($( this ).val()!="")

				$(this).removeClass("d-none");

			else 

				$(this).addClass("d-none");

		});

		

	//Lo mismo con los disabled

	let $camposDisabled = $form.find(":disabled");

		

		$camposDisabled.each(function(index){

			if($( this ).val()!="")

				$(this).prop('disabled', false);

			else 

				$(this).prop('disabled', true);

		});

		

	//rellenamos la tabla de tratamientos

	tablaTratamientos(datosResidente.id_residente);

	

}

function escaparSaltosLinea(key, value) {

	let resultado = value;

  if (typeof value === "string") {

	resultado = value.replace(/\n/g, "\\n").replace(/\"/g, '\\"');

  }

  return resultado;

}

function limpiarPai(){

	$form=$('#formulario-pai');
	$form.find($(".form-control")).each(function(index){
		$( this ).val("");
		if($(this).hasClass("summernote"))
			$(this).summernote('code',"");
		if($(this).hasClass("dolor") && $(this).hasClass("selectConOtras"))
			$(this).prop('disabled', true);
	});

	
	$form.find($("input[type=checkbox]")).each(function(index){
			$( this ).prop('checked',false);
	});

	$form.find($(".ocultable")).each(function(index){
		$(this).addClass("d-none");
	});

}


function calcularPAI(){

	var comer;

    var lavarse;

    var vestirse;

    var arreglarse="";

    var deposiciones="";

    var miccion="";

    var retrete="";

    var trasladarse="";

    var deambular="";

    var escaleras="";

    var relleno=true;

    var mensaje="";

    var contador = 0;

    var texto;



    //Ifs que te suman dependencia al contador e identifican en qué es esa dependencia

    if($("[name='unopai']").val() == "valuno"){

        comer = "Totalmente independiente";

        contador += 10;

    }else if($("[name='unopai']").val()=="valdos"){ 

        comer = "Necesita ayuda para cortar carne, el pan, etc.";

        contador += 5;

    }else if($("[name='unopai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        comer = "Dependiente.";

    }



    



    if($("[name='dospai']").val() == "valuno"){

        lavarse = "Independiente, entra y sale solo del baño.";

        contador += 5;

    }else if($("[name='dospai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        lavarse = "Dependiente.";

    }







    if($("[name='trespai']").val() == "valuno"){

        vestirse = "Independiente. Capaz de ponerse y quitarse la ropa, abotonarse y atarse los zapatos.";

        contador += 10;

    }else if($("[name='trespai']").val()=="valdos"){

        vestirse = "Necesita ayuda.";

        contador += 5;

    }else if($("[name='trespai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        vestirse = "Dependiente.";

    }







    if($("[name='cuatropai']").val() == "valuno"){

        arreglarse = "Independiente para lavarse la cara, las manos, peinarse, afeitarse, maquillarse, etc...";

        contador += 5;

    }else if($("[name='cuatropai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        arreglarse = "Dependiente.";

    }







    if($("[name='cincopai']").val() == "valuno"){

        deposiciones = "Continencia normal.";

        contador += 10;

    }else if($("[name='cincopai']").val()=="valdos"){

        deposiciones = "Ocasionalmente algún episodio de incontinencia, o necesita ayuda para administrarse supositorios o lavativas.";

        contador += 5;

    }else if($("[name='cincopai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        deposiciones = "Incontinencia.";

    }







    if($("[name='seispai']").val() == "valuno"){

        miccion = "Continencia normal, o es capaz de cuidarse de la sondsa si tiene una puesta.";

        contador += 10;

    }else if($("[name='seispai']").val()=="valdos"){

        miccion = "1 episodio diario como máximo de incontinencia, o necesita ayuda para cuidar de la sonda.";

        contador += 5;

    }else if($("[name='seispai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        miccion = "Incontinencia";

    }







    if($("[name='sietepai']").val() == "valuno"){

        retrete = "Independiente para ir al cuardo de aseo, quitarse y ponerse la ropa.";

        contador += 10;

    }else if($("[name='sietepai']").val()=="valdos"){

        retrete = "Necesita ayuda para ir al retrete, pero se limpia solo.";

        contador += 5;

    }else if($("[name='sietepai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        retrete = "Dependiente.";

    }







    if($("[name='ochopai']").val() == "valuno"){

        trasladarse = "Independiente para ir del sillón a la cama.";

        contador += 15;

    }else if($("[name='ochopai']").val()=="valdos"){

        trasladarse = "Mínima ayuda física o supervisión para hacerlo.";

        contador += 10;

    }else if($("[name='ochopai']").val()=="valtres"){

        trasladarse = "Necesita gran ayuda, pero es capaz de mantenerse sentado solo.";

        contador += 5;

    }else if($("[name='ochopai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        trasladarse = "Dependiente.";

    }







    if($("[name='nuevepai']").val() == "valuno"){

        deambular = "Independiente, camina solo 50 metros.";

        contador += 15;

    }else if($("[name='nuevepai']").val()=="valdos"){

        deambular = "Necesita ayuda física o supervisión para andar 50 metros.";

        contador += 10;

    }else if($("[name='nuevepai']").val()=="valtres"){

        deambular = "Independiente en silla de ruedas sin ayuda.";

        contador += 5;

    }else if($("[name='nuevepai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        deambular = "Dependiente.";

    }







    if($("[name='diezpai']").val() == "valuno"){

        escaleras = "Independiente para bajar y subir escaleras.";

        contador += 10;

    }else if($("[name='diezpai']").val()=="valdos"){

        escaleras = "Necesita ayuda física o supervisión para hacerlo.";

        contador += 5;

    }else if($("[name='diezpai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        escaleras = "Dependiente.";

    }





    if(contador < 20){

        texto = "Total ";

    }else if(contador >= 20 && contador <= 35){

        texto = "Grave";

    }else if(contador >= 40  && contador <= 55){

        texto = "Incaacidad moderada";

    }else if(contador >= 60 && contador != 100 ){

        texto = "Leve";

    }else{

        texto = "Independiente";

    }



    if(relleno){

        $("#resultadopai").val(contador);

        $("#resultado1pai").val(texto);

    }

}

function convKathPAI(){

	var result = "";

	if($("#B[name='B']")[2].checked){

        result+="0";

    }else if($("#B[name='B']")[3].checked){ 

        result+="1";

    }



    if($("#V[name='V']")[2].checked){

        result+="0";

    }else if($("#V[name='V']")[3].checked){ 

        result+="1";

    }



    if($("#WC[name='WC']")[2].checked){

        result+="0";

    }else if($("#WC[name='WC']")[3].checked){ 

        result+="1";

    }



    if($("#M[name='M']")[2].checked){

        result+="0";

    }else if($("#M[name='M']")[3].checked){ 

        result+="1";

    }



    if($("#C[name='C']")[2].checked){

		result+="0";

    }else if($("#C[name='C']")[3].checked){

        result+="1";

    }



    if($("#A[name='A']")[2].checked){

		result+="0";

    }else if($("#A[name='A']")[3].checked){

        result+="1";

    }

	if(result.length != 6){

		result = null;

	}



	return result;

}


//VERSION PAI FUNCIONES TABLA Y AÑADIR Y BORRAR

function mostrarNewMedicacion_pai(){
	$('#form-medic-1-pai').removeClass("d-none");
	$('#form-medic-2-pai').removeClass("d-none");
	$("#btn-new-medic-pai").addClass("d-none");

	$('#botones-acept-cancel-pai').removeClass("d-none");
}

function cancelarNuevaMedicacion_pai(){
	$('#form-medic-1-pai').addClass("d-none");
	$('#form-medic-2-pai').addClass("d-none");
	$("#btn-new-medic-pai").removeClass("d-none");

	$('#botones-acept-cancel-pai').addClass("d-none");
}

// function addMedicacionTabla_pai(){

// 	//Aqui comprobamos si es la primera medicación que se añade
// 	var a = $("#tabla-medicacion-res-pai tbody");
// 	if($("#tabla-medicacion-res-pai tbody").length == 0){
// 		$("#tabla-medicacion-res-pai").append("<tbody></tbody>");
// 	}

// 	 //Para momento de administración si se elige otros
// 	 let momentoAdmOtros=$('#momentoAdm-pai').val();
// 	 if (momentoAdmOtros=="abrirBox") {
// 		 momentoAdmOtros=$('#otrosMomentoAdm-pai').val();
// 	 }else{
// 		 momentoAdmOtros;
// 	 }

// 	//Por aqui añadimos cada campo a su columna
// 	var fila = "";
// 	fila+= "<tr>";
// 	fila += "<td>" + $("#nombreMedicamento-pai").val() + "</td>";
// 	fila += "<td>" + $("#medicacion-pai").val() + "</td>";
// 	fila += "<td>" + $("#seleccionVia-pai").val() + "</td>";
// 	fila += "<td>" + $("#listadoUnidades-pai").val() + "</td>";
// 	fila += "<td>" + $("#detallesUnidad-pai").val() + "</td>";
// 	fila += "<td>" + momentoAdmOtros + "</td>";
// 	fila+= "</tr>";
// 	$("#tabla-medicacion-res-pai tbody").append(fila);


// 	//Ocultamos formulario y mostramos boton añadir, botón vaciar tabla y tabla

// 	$("#tabla-medicacion-pai").removeClass("d-none");
// 	$("#btn-empty-medic-pai").removeClass("d-none");
// 	$('#form-medic-1-pai').addClass("d-none");
// 	$('#form-medic-2-pai').addClass("d-none");
// 	$("#btn-new-medic-pai").removeClass("d-none");
// }

// function limpiarTablaMedic_pai(){
// 	$("#tabla-medicacion-pai").addClass("d-none");
// 	$("#btn-empty-medic-pai").addClass("d-none");

// 	$("#tabla-medicacion-res-pai tbody").remove();
// }

function validarNewMedicacion_pai(){
	return $("#medicacion-pai").val() != "" && $("#nombreMedicamento-pai").val() != "" && $("#seleccionVia-pai").val() != "" && $("#listadoUnidades-pai").val() != "" && $("#momentoAdm-pai").val() != "";
}

function mostrarNewRehabilitacion_pai(){
	$('#form-rehabilitacion-1-pai').removeClass("d-none");
}

function cancelarNuevaRehabilitacion_pai(){
	$('#form-rehabilitacion-1-pai').addClass("d-none");
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

function subirPDF_MiniMental(formFicheroPDF)
{
	var id="";
	$.ajax({
           type: 'POST',
           url: '../controllers/residente.php?task=subirDocumentoMini',
           data: new FormData(formFicheroPDF),
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

function subirPDF_Barthel(formFicheroPDF)
{

	var id="";
	$.ajax({
           type: 'POST',
           url: '../controllers/residente.php?task=subirDocumentoBarthel',
           data:new FormData(formFicheroPDF),
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

//FUNCION NECESARIA HISTORIAL PAI
function cargarHistorialPai(){
	let modoBusqueda = $('#ver-historial-pai').find('.modoBusquedaResidente').val();
	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-historial-pai'));
	let respuesta;
	let datosResidente;
	$form=$('#formulario-pai');
	var postObj = {			
		id_residente : idResidente
	}

    $.ajax({

        url: '../controllers/residente.php?task=consultarHistorialPai',
        type: "POST",
        async: false,
        data: postObj,
		dataType: "html",
        success: function(data) {	
			respuesta = $.parseJSON(data);
			datosResidente =  respuesta.datosResidente;
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
		$("#tabla-historico-pai tbody").remove();
		
		rellenarHistorialPai(datosResidente);
	}else{
		$('#seccionHistorialPai').find($('.form-control')).each(function(index){
			$(this).val("");

		});		

	}


}

//FUNCION NECESARIA HISTORIAL PAI
function rellenarHistorialPai(datosResidente){
	$form=$('#formulario-historial-pai');

	let fechaActual = new Date();

	let fechaIngreso = new Date(datosResidente.fecha_alta);

	

	$form.find('[name="fecha-alta-pai').val(fechaIngreso.toLocaleString('en-GB'));

	$form.find('[name="fecha-evaluacion-pai').val(fechaActual.toLocaleString('en-GB'));

	

	if(datosResidente.pai_fecha_elaboracion!=null){

		let fechaElaboracion = new Date(datosResidente.pai_fecha_elaboracion);

		$form.find('[name="fecha-elaboracion-pai').val(fechaElaboracion.toLocaleString('en-GB'));

	}

	$form.find('[name="nombre-residente-pai"]').val(datosResidente.apellido1 + " " + datosResidente.apellido2 + ", " + datosResidente.nombre);

	
	//recuperamos los datos del residente, familiar, otro familiar...

	Object.entries(datosResidente).forEach(([clave, valor]) => {

		let name= "[name='" + clave +"']";

		$form.find(name).val(valor);

	});
	
	//añadimos el responable, si lo tuviera	

	if(datosResidente.id_habitacion != null && datosResidente.id_habitacion != "" && datosResidente.id_personal_responsable != null &&  datosResidente.id_personal_responsable != ""){

		$form.find('[name="responasable-pai"]').empty();

		mostrarResponsablesPlanta(datosResidente.id_habitacion);

		$form.find('[name="responasable-pai"] option').each(function(){

			if ($(this).val() != datosResidente.id_personal_responsable )        

				$(this).remove();	    

		});

	}else{

		$form.find('[name="responasable-pai"]').empty();

		$form.find('[name="responasable-pai"]').append($('<option>').text("No tiene responsable asignado").attr('value', ""));

	}

	if(datosResidente.historial_pai != null && datosResidente.historial_pai != "" && datosResidente.historial_pai != "nada"){

		$("#tabla-historico-pai").append("<tbody></tbody>");
		$("#tabla-historico-pai").removeClass("d-none");

		



		function formatOptions(opciones) {
			if (Array.isArray(opciones)) {
			  return opciones.map(opcion => formatOptions(opcion)).join(" -> ");
			} else if (typeof opciones === "object" && opciones !== null) {
			  return Object.entries(opciones).map(([key, value]) => `${key}: ${formatOptions(value)}`).join(", ");
			} else if (opciones === "") {
			  return "Vacío";
			} else {
			  return opciones;
			}
		  }
		  
		  datosResidente.historial_pai.forEach(element => {
			var cambios = JSON.parse(element.cambios);
		  
			// Construir la estructura de salida para las modificaciones
			var salida = "";
			Object.entries(cambios).forEach(([area, campos]) => {
			  salida += area + ": <br>";
			  Object.entries(campos).forEach(([campo, opciones]) => {
				var opcionesFormateadas = formatOptions(opciones);
				salida += "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + campo + ": " + opcionesFormateadas + "<br>";
			  });
			});
			salida = salida.slice(0, -4); // Eliminar el último "<br>"
		  
			// Construir la fila de la tabla
			var fila = "<tr>";
			fila += "<td>" + element.fecha + "</td>";
			fila += "<td>" + element.responsables[0].nombre + " " + element.responsables[0].apellido1 + " " + element.responsables[0].apellido2 + "</td>";
			fila += "<td>" + salida + "</td>";
			fila += "</tr>";
			$("#tabla-historico-pai tbody").append(fila);
		  });


		  var tablaHistoricoPai;

		  if (!$.fn.DataTable.isDataTable('#tabla-historico-pai')) {
			tablaHistoricoPai = $('#tabla-historico-pai').DataTable({
			  dom: 'Bfrtip', // Mostrar botones de exportación
			  buttons: [
				{
				  extend:    'pdfHtml5',
				  text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',
				  titleAttr: 'Exportar a PDF',
				  className: 'btn btn-danger',
				  pageSize: 'A3'
				}
			  ]
			});
		} else {
			
			tablaHistoricoPai.clear().rows.add($("#tabla-historico-pai tbody tr")).draw();
		}
	}else{
		$("#tabla-historico-pai").addClass("d-none");
	}

	
}

//Guardar el historial


function sacarElHistorial(datos,idResidente){

	let respuesta;

	let datosResidente;



	var postObj = {			

		id_residente : idResidente

	}



    $.ajax({
        url: '../controllers/residente.php?task=consultarPai',
        type: "POST",
        async: false,
        data: postObj,
		dataType: "html",
        success: function(data) {	
			respuesta = $.parseJSON(data);
			datosResidente =  respuesta.datosResidente;
			if(respuesta.datosOtroFamiliar!=null)
				datosOtroFamiliar =  respuesta.datosOtroFamiliar;
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



	var pai_datos_sociosanitarios = JSON.parse(datosResidente.pai_datos_sociosanitarios);
	var pai_area_social = JSON.parse(datosResidente.pai_area_social);
	var pai_area_sanitaria = JSON.parse(datosResidente.pai_area_sanitaria);
	var pai_area_psicologica = JSON.parse(datosResidente.pai_area_psicologica);
	var pai_area_funcional = JSON.parse(datosResidente.pai_area_funcional);
	var pai_area_animacion = JSON.parse(datosResidente.pai_area_animacion);


	var pai_datos_sociosanitarios_new = JSON.parse(datos.pai_datos_sociosanitarios);
	var pai_area_social_new = JSON.parse(datos.pai_area_social);
	var pai_area_sanitaria_new = JSON.parse(datos.pai_area_sanitaria);
	var pai_area_psicologica_new = JSON.parse(datos.pai_area_psicologica);
	var pai_area_funcional_new = JSON.parse(datos.pai_area_funcional);
	var pai_area_animacion_new = JSON.parse(datosResidente.pai_area_animacion);

	if(pai_datos_sociosanitarios != null){

		let pai_datos_sociosanitarios_history = compare(pai_datos_sociosanitarios,pai_datos_sociosanitarios_new);
		let pai_area_social_history = compare(pai_area_social,pai_area_social_new);
		let pai_area_sanitaria_history = compare(pai_area_sanitaria,pai_area_sanitaria_new);
		let pai_area_psicologica_history = compare(pai_area_psicologica,pai_area_psicologica_new);
		let pai_area_funcional_history = compare(pai_area_funcional,pai_area_funcional_new);
		let pai_area_animacion_history = compare(pai_area_animacion,pai_area_animacion_new);

		const datosPrincipales = {};

	if (historialNoVacio(pai_datos_sociosanitarios_history)) {

		datosPrincipales["Datos Sociosanitarios"] = pai_datos_sociosanitarios_history;
	}

	if (historialNoVacio(pai_area_social_history)) {
		datosPrincipales["Área Social"] = pai_area_social_history;
	}

	if (historialNoVacio(pai_area_sanitaria_history)) {
		datosPrincipales["Área Sanitaria"] = pai_area_sanitaria_history;
	}

	if (historialNoVacio(pai_area_psicologica_history)) {
		datosPrincipales["Área Psicológica"] = pai_area_psicologica_history;
	}

	if (historialNoVacio(pai_area_funcional_history)) {
		datosPrincipales["Área Funcional"] = pai_area_funcional_history;
	}

	if (historialNoVacio(pai_area_animacion_history)) {
		datosPrincipales["Área Animación Sociocultural"] = pai_area_animacion_history;
	}



	// Representación en forma de cadena del objeto JSON con las claves principales
	const resultado = JSON.stringify(datosPrincipales);

	// });


	// Obtener la fecha y hora actual
	var fechaHoraActual = new Date();

	// Obtener la fecha en formato YYYY-MM-DD
	var fechaActual = fechaHoraActual.toISOString().split('T')[0];

	// Obtener la hora en formato HH:MM:SS
	var horaActual = fechaHoraActual.toTimeString().split(' ')[0];

	// Concatenar la fecha y la hora
	var fechaHoraFormateada = fechaActual + ' ' + horaActual;


	// let devolucion = 

	let idLogueado = responsableLogueado();



	var cadena = idLogueado;
	var idLogueadoPass = cadena.replace(/\r\n/g, "");


	var todo = {

		id_residente : idResidente,
		id_responsable : idLogueadoPass,
		fecha : fechaHoraFormateada,
		historial : resultado

	};
	
	}else{
		todo = "false";
	}



	

	return todo;


	
	
}

function historialNoVacio(historial) {
	return Object.keys(historial).length > 0;
}

function responsableLogueado(){

	let idResponsabeleLogueado ;

	$.ajax({
		url: '../controllers/personal.php?task=idResponsableLogueado',
		type: "POST",
		async: false,
		dataType: "html",
		success: function(data) {
			idResponsabeleLogueado = data;
			if (respuesta.status == "WARNING") {
				swal({
					title: "WARNING",
					text: respuesta.message,
					buttons: false,
					icon: "warning",
					timer: 2500,
				});
			}
		}
	});

	return idResponsabeleLogueado;

}

function guardarHistorial(historial) {

	$.ajax({
		url: '../controllers/residente.php?task=guardarHistorialPai',
		type: "POST",
		async: false,
		data: { historial: historial }, // Pasar la variable externa en la solicitud
		dataType: "html",
		success: function(respuesta) {
			if (respuesta.status == "WARNING") {
				swal({
					title: "WARNING",
					text: respuesta.message,
					buttons: false,
					icon: "warning",
					timer: 2500,
				});
			}
		}
		
	});
	// return respuesta;
	
}

function compare(data1, data2) {
	const allKeys = new Set([...Object.keys(data1), ...Object.keys(data2)]);
	const differences = {};
  
	allKeys.forEach(key => {
	  const value1 = data1[key];
	  const value2 = data2[key];
  
	  if (isObject(value1) && isObject(value2)) {
		const nestedDiff = compare(value1, value2);
		if (Object.keys(nestedDiff).length > 0) {
		  differences[key] = nestedDiff;
		}
	  } else if (value1 !== value2 && value2 !== '' && !Array.isArray(value2)) {
		differences[key] = [value1, value2];
	  } else if (Array.isArray(value1) && Array.isArray(value2)) {
		const diff = compareArrays(value1, value2);
		if (Object.keys(diff).length > 0) {
		  differences[key] = diff;
		}
	  }
	});
  
	return differences;
  }

function isObject(value) {
return typeof value === 'object' && value !== null && !Array.isArray(value);
}
  
function compareArrays(arr1, arr2) {
const differences = {};
const maxLength = Math.max(arr1.length, arr2.length);

for (let i = 0; i < maxLength; i++) {
	const value1 = arr1[i];
	const value2 = arr2[i];

	if (value1 !== value2 && value2 !== '' && !Array.isArray(value2)) {
	differences[i] = [value1, value2];
	}
}

return differences;
}