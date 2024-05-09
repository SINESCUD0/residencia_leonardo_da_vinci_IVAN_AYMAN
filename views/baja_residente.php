<!-- BAJA DE RESIDENTE -->
<div id="ver-baja-residente" class="seccion-menu residenteView" style="display: none;">
	<div class=" align-items-center justify-content-between text-center mb-5">
		<h1 class="h3 mb-0 text-gray-800">Baja Residente</h1>
	</div>
	
	<?php 
       include('busqueda_residente.php'); 
	?> 

   
	<div class="seccionOcultableResidentes mt-5" style="display: none;">
	
		<div class="row mb-2">
			<div class="col-xl-6 col-lg-9 col-md-12 col-sm-12" >
				<div class="input-group form-group">
					<label class="col-xl-4 col-lg-4 col-md-12 col-sm-12 font-weight-bold text-gray-800">Fecha de la baja:</label>
					<div class="input-group-prepend ">
						<span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
					</div>
					<input type="text" class="form-control datepicker" name="fechaBajaResidente" id="fechaBajaResidente" placeholder="Seleccionar Fecha">	
				</div>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-xl-6 col-lg-9 col-md-12 col-sm-12" >
				<div class="input-group form-group">
					<label class="col-xl-4 col-lg-4 col-md-12 col-sm-12 font-weight-bold text-gray-800">Motivo de la baja:</label>
					<select class="custom-select form-control" id="motivoBajaResidente">
						<option value="">Seleccione el motivo </option>
						<option>Cambio de centro residencial</option>
						<option>Finalización de la estancia temporal</option>
						<option>Regreso a su domicilio habitual</option>
						<option>Regreso a domicilio de hijos/as u otros familiares</option>
						<option>Conducta inadecuada con los/as compañeros/as</option>
						<option>Conducta inadecuada con los/as profesionales</option>
						<option value="otras" >Otros</option>			
					</select>
				</div>
			</div>
			<div class="col-xl-6 col-lg-9 col-md-12 col-sm-12" id="otrasBajaResidente" style="display: none;">
				<div class="input-group form-group">
					<input type="text" class="form-control" id="textoOtrasBajaResidente" name="textoOtrasBajaResidente" placeholder="Indique el motivo de la baja">	
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
				<button type="button" class="btn btn-success" id="boton-baja-residente" >Baja Residente</button>
			</div>
		</div>
	</div>
</div>