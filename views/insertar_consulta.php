<!-- AGREGAR UNA CONSULTA DEL RESIDENTE AL MEDICO -->
<div id="ver-consulta" class="seccion-menu residenteView" style="display: none;">
	<div class=" align-items-center justify-content-between text-center mb-5">
		<h1 class="h3 mb-0 text-gray-800">Agregar Consulta</h1>
	</div>

	<?php 
       include('busqueda_residente.php'); 
	?>
	
	<div class="seccionOcultableResidentes" style="margin-top: 20px; display: none;"> 
		<div class="row">
			<div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
				<div class="input-group form-group">
					<label class="col-6 font-weight-bold text-gray-800">Fecha y hora de la consulta:</label>
					<input type="text" class="form-control datetimepicker" name="fechaConsultaResidente" id="fechaConsultaResidente">	
				</div>
			</div>
		</div>
		<div class="card shadow mt-4" id="ver-tabla-datos" style="margin-top: 20px;">
			<div class="card-header text-center">
				<h6 class="m-0 font-weight-bold text-primary">Consulta</h6>
			</div>
			<div class="card-body">
				<form>
					<div class="row">
						<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12" style="padding-top: 5px;">
							<label class="font-weight-bold text-gray-800" for="causaConsulta">Causa:</label>
							<textarea class="form-control rounded-1" id="causaConsulta" rows="5"></textarea>
						</div>
						<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12" style="padding-top: 5px;">
							<label class="font-weight-bold text-gray-800" for="sintomasConsulta">Síntomas:</label>
							<textarea class="form-control rounded-1" id="sintomasConsulta" rows="5"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12" style="padding-top: 5px;">
							<label class="font-weight-bold text-gray-800" for="tratamientoConsulta">Tratamiento:</label>
							<textarea class="form-control rounded-1" id="tratamientoConsulta" rows="3"></textarea>
						</div>
						<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12" style="padding-top: 5px;">
							<label class="font-weight-bold text-gray-800" for="revisiónConsulta">Revisión:</label>
							<textarea class="form-control rounded-1" id="revisionConsulta" rows="3"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-0 col-sm-0" style="padding-top: 5px;"></div>
						<div class=" form-group col-xl-6 col-lg-6 col-md-12 col-sm-12" style="padding-top: 5px;">
							<label class="font-weight-bold text-gray-800" for="otrosConsulta">Otros aspectos a incluir:</label>
							<textarea class="form-control rounded-1" id="otrosConsulta" rows="3"></textarea>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-0 col-sm-0" style="padding-top: 5px;"></div>
					</div>
				</form>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
				<button type="button" class="btn btn-success" id="boton-agregar-consulta">Agregar</button>
			</div>
		</div>
	</div>
</div>