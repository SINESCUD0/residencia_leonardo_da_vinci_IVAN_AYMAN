<!-- BUSQUEDA RESIDENTE -->
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
		<!-- <div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div> -->
		<!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8" > -->
			<div class="input-group form-group padre_alinearCentroHijos" >
					<select class="custom-select listadoResidentes dni-residente" hidden> <option> </option></select>
						<div class="listadoResidentes_tabla">
							<?php
								//include $_SERVER['DOCUMENT_ROOT']."/residencialeonardo.atwebpages.com/controllers/controlador_habitacion.php";
								// foreach($listadoResidentesActivos as $residente){
								// 	$nombre_apellidos = $residente[2].' '.$residente[3];
								// 	$dni = $residente[1];
								// 	$id = $residente[0];
								// 	echo '<button id="'.$id.'" class="boton_residente" >
								// 		'.$nombre_apellidos.'<br>'.$dni.'
								// 	</button>';
								// }
							?>
						</div>

						<?php
							// include $_SERVER['DOCUMENT_ROOT']."/residencialeonardo.atwebpages.com/db/config.php";
							include $_SERVER['DOCUMENT_ROOT']."/residencialeonardo.atwebpages.com/controllers/controlador_habitacion.php";
							// var_dump(array_values($listadoHabitaciones));

							

							
							// var_dump($habitacionesOcupadas);
							// var_dump($listadoHabitacionesOcupadasConResidentes);
							// var_dump($habitacioneslibresDobles);
							// var_dump($habitacioneslibresIndividuales);
							
							// for($i=0; $i<count($listadoHabitacionesOcupadasConResidentes); $i++){
								
								// $numero_habitacion = $listadoHabitacionesOcupadasConResidentes[$i][1];
							// 	print($numero_habitacion);
							// 	var_dump(array_values($habitacioneslibresIndividuales));
							// 	var_dump(array_values($habitacioneslibresDobles));
							// 	print("<br><br>");
								
								// if(in_array($numero_habitacion, array_values($habitacioneslibresIndividuales))){
								// 	array_push($listadoHabitacionesOcupadasConResidentes[$i], "individual");
								// }elseif(in_array($numero_habitacion, array_values($habitacioneslibresDobles))){
								// 	array_push($listadoHabitacionesOcupadasConResidentes[$i], "doble");
								// }
								
							// }

							// var_dump($listadoHabitacionesOcupadasConResidentes);
							// var_dump($habitacioneslibresDobles);
							// print("<br><br>");
							// var_dump($habitacioneslibresIndividuales);

							?>
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
