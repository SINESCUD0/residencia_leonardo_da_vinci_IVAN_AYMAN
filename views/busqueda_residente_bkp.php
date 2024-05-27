<!-- BUSQUEDA RESIDENTE -->
<div class="row">
		<div class="col-xl-4 col-lg-4 col-md-3 col-sm-3"></div>
		<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" >
			<div class="input-group form-group">
				<label class="col-6 col-form-label text-center font-weight-bold text-gray-800"> Buscar por :</label>
				<select class="custom-select modoBusquedaResidente">
					<option value="">Elegir</option>
					<option value="busquedaDni">DNI</option>
					<option value="busquedaApellidos">Apellidos</option>
					<option value="busquedaExpediente">Número de Expediente</option>
					<option value="busquedaHabitacion">Número de Habitación</option>
				</select>     
			</div>
		</div>
		<div class="col-xl-4 col-lg-4 col-md-3 col-sm-3"></div>
	</div>

	<div class="row busquedaDni selectOcultable" style="display: none;">
		<div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-8" >
			<div class="input-group form-group" >
				<div class="input-group-prepend ">
					<span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
				</div>
				<select class="custom-select listadoResidentes dni-residente">
					<option value="">Seleccione un DNI</option>
					<?php
						foreach($listadoResidentesActivos as $residente){
					?>
							<option value="<?php echo $residente[0] ?>"><?php echo $residente[1] ?></option>
             
					<?php 
					}
					?>
				</select>
			</div>
		</div>
    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
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
