<!-- BUSQUEDA RESIDENTE -->

<script>

	function miniboton_constantes(event){

		let padre = event.target.parentElement.parentElement;
		let id_guardado_enValue = event.target.value;

		// Activar SOLO SI se usa el Select para cambiar de Pisos
		$('.listadoResidentes').children().replaceWith("<option value="+padre.id+" selected >"+padre.id+" </option>");
		$('.listadoResidentes').trigger("change");
		// Fin de Activar SOLO SI se usa el Select para cambiar de Pisos
		
		
		padre.click();
		document.getElementById(id_guardado_enValue).dispatchEvent(new Event('click'));
		
	}

	function select_piso(event){

		//let piso = event.target.value;
		let piso = event;
		var xhr = new XMLHttpRequest();
        xhr.open('POST', '../controllers/consulta_residente_segunPiso.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

		xhr.onload = function() {
            if (xhr.status === 200) {
                var texto = xhr.responseText;
				// document.getElementById('habitaciones').innerHTML = texto;
				$(".listadoResidentes_tabla").html(texto);
                console.log(xhr.responseText);
            } else {
                console.error('Error en la solicitud. Estado:', xhr.status);
            }
        };

		// xhr.send('piso=' + encodeURIComponent(piso));
		xhr.send('piso=' + piso);
	}

</script>

<div class="row">
		<div class="col-xl-4 col-lg-4 col-md-3 col-sm-3"></div>
		<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" >
			<div class="input-group form-group">

				<select class="custom-select modoBusquedaResidente" hidden> <option value='busquedaDni' selected>DNI</option></select>
			</div>
		</div>
		<div class="col-xl-4 col-lg-4 col-md-3 col-sm-3"></div>
	</div>

	<div class="row busquedaDni">

	<!--<select id="select_piso" name="select_piso" onchange="select_piso(event)" onfocus="this.selectedIndex = 0;">
		<option>Selecciona el piso</option>
		<option value="1">Piso 1</option>
		<option value="2">Piso 2</option>
		<option value="3">Piso 3</option>
	</select>-->

	<div class="radio-inputs">
		<label class="radio">
			<input type="radio" name="radio" onclick="select_piso(1)">
			<span class="name">PISO 1</span>
		</label>
		<label class="radio">
			<input type="radio" name="radio" onclick="select_piso(2)">
			<span class="name">PISO 2</span>
		</label>
		<label class="radio">
			<input type="radio" name="radio" onclick="select_piso(3)">
			<span class="name">PISO 3</span>
		</label>
	</div>

	<input type="hidden" value="" id="secret_piso"/>
		<!-- <div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div> -->
		<!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8" > -->
			<div class="input-group form-group padre_alinearCentroHijos" >

					<select class="custom-select listadoResidentes dni-residente" hidden="inherit"> <option> </option></select>

						<div class="listadoResidentes_tabla">
							<!--
							<?php
								foreach($listadoResidentesActivos as $residente){
									$nombre_apellidos = $residente[2].' '.$residente[3];
									$dni = $residente[1];
									$id = $residente[0];
							?>
									<div id="<?php echo $id;?>" class="boton_residente" >
										
										<?php echo $nombre_apellidos ?> <br> <?php echo $dni ?>

										<br>
										<div class="minibotones_constantes" >
											<button id='<?php echo $id ?>' onclick="miniboton_constantes(event)" value='boton-constantes'>Constante</button>
											<button id='<?php echo $id ?>' onclick="miniboton_constantes(event)" value='boton-eliminacion'>Eliminar</button>
											<button id='<?php echo $id ?>' onclick="miniboton_constantes(event)" value='boton-alimentacion'>Alimentación</button>
											<button id='<?php echo $id ?>' onclick="miniboton_constantes(event)" value='boton-movilizacion'>Movilización</button>
											<button id='<?php echo $id ?>' onclick="miniboton_constantes(event)" value='boton-higiene'>Higiene</button>
											<button id='<?php echo $id ?>' onclick="miniboton_constantes(event)" value='boton-medicacion'>Medicación</button>
											<button id='<?php echo $id ?>' onclick="miniboton_constantes(event)" value='boton-descanso'>Descanso</button>
											<button id='<?php echo $id ?>' onclick="miniboton_constantes(event)" value='boton-incidencia'>Incidencia</button>
										</div>

									</div>
					
							<?php 
								}
							?>
							-->
						</div>
			</div>
		<!-- </div> -->
    <!-- <div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div> -->
	</div>
  
    <div class="row busquedaApellidos selectOcultable"  style="display: none;">
		<div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-8" >
			<div class="input-group form-group">
				<div class="input-group-prepend ">
					<span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
				</div>
				<select class="custom-select listadoResidentes apellidos-residente">
					<option value="" >Seleccione apellidos y nombre </option>
					<?php
						foreach($listadoResidentesActivos as $residente){
					?>
						<option value="<?php echo $residente[0] ?>"><?php echo $residente[2] . " " . $residente[3] . ", " . $residente[4]?></option>
					<?php 
					}
					?>
				</select>
			</div>
		</div>
		<div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
	</div>
	
	<div class="row busquedaExpediente selectOcultable"  style="display: none;">
		<div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-8" >
			<div class="input-group form-group">
				<div class="input-group-prepend ">
					<span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
				</div>
				<select class="custom-select listadoResidentes expediente-residente">
					<option value="" >Seleccione el número de expediente </option>
					<?php
						foreach($listadoResidentesActivos as $residente){
					?>
						<option value="<?php echo $residente[0] ?>"><?php echo $residente[5]?></option>
					<?php 
					}
					?>
				</select>
			</div>
		</div>
		<div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
	</div>
	
	<div class="row busquedaHabitacion selectOcultable"  style="display: none;">
		<div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-8" >
			<div class="input-group form-group">
				<div class="input-group-prepend ">
					<span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
				</div>
				<select class="custom-select listadoResidentes habitacion-residente">
					<option value="" >Seleccione número de habitación </option>
					<?php
						foreach($listadoHabitacionesOcupadasConResidentes as $row){
					?>
						<option value="<?php echo $row[0] ?>"><?php echo "Nº Hab: ". $row[1] . ". Residente: " . $row[2] . " " . $row[3] . ", " . $row[4]?></option>
					<?php 
					}
					?>
				</select>
			</div>
		</div>
		<div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
	</div>
