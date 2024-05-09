<!-- MOVER EL RESIDENTE DE HABITACION-->
<div id="ver-mover-habitacion" class="seccion-menu residenteView" style="display: none;">
	<div class=" align-items-center justify-content-between text-center mb-5">
		<h1 class="h3 mb-0 text-gray-800">Mover de Habitación</h1>
	</div>

	<?php 
       include('busqueda_residente.php'); 
	?>
	
	<div class="seccionOcultableResidentes" style="margin-top: 20px; display: none;"> 
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" style="padding-top: 5px;">
				<div class="card shadow mt-4" id="card-habitacion-actual" style="margin-top: 20px;">
					<div class="card-header text-center">
						<h6 class="m-0 font-weight-bold text-primary">Asignado a:</h6>
					</div>
					<div class="card-body">
						<form id="habitacionActual">
							<div class="row mr-5 ml-5 mt-3 mb-3">
								<div class="form-check form-check-inline  mr-4 ml-3">
									<input class="form-check-input" id="habIndividualActual" type="radio" name="tipoHabitacionActual" value="INDIVIDUAL" disabled>
									<label class="form-check-label font-weight-bold text-gray-800" for="habIndividualActual">Individual</label>
								</div>
								<div class="form-check form-check-inline  mr-4 ml-3">
									<input class="form-check-input" id="habDobleActual" type="radio" name="tipoHabitacionActual" value="DOBLE" disabled>
									<label class="form-check-label font-weight-bold text-gray-800" for="habDobleActual">Doble</label>
								</div>
							</div>
							<div class="row mr-5 ml-5">
								<div class="form-group col-12" style="padding-top: 5px;">
									<label class="font-weight-bold text-gray-800" for="idHabitacionActual">Número de habitación:</label>
									<input type="text" class="form-control rounded-1" id="idHabitacionActual" disabled>
								</div>
							</div>
							<div class="row mr-5 ml-5">
								<div class="form-group col-12" style="padding-top: 5px;">
									<label class="font-weight-bold text-gray-800" for="responsableActual">Personal Responsable:</label>
									<input type="text" class="form-control rounded-1" id="responsableActual" disabled>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12" style="padding-top: 5px;">
				<div class="card shadow mt-4" id="card-habitacion-nueva" style="margin-top: 20px;">
					<div class="card-header text-center">
						<h6 class="m-0 font-weight-bold text-primary">Trasladar a:</h6>
					</div>
					<div class="card-body">
						<form id="habitacionNueva">
							<div class="row mr-5 ml-5 mt-3 mb-3">
								<div class="form-check form-check-inline  mr-4 ml-3">
									<input class="form-check-input" id="habIndividualNueva" type="radio" name="tipoHabitacion" value="INDIVIDUAL">
									<label class="form-check-label font-weight-bold text-gray-800" for="habIndividualNueva">Individual</label>
								</div>
								<div class="form-check form-check-inline  mr-4 ml-3">
									<input class="form-check-input" id="habDobleNueva" type="radio" name="tipoHabitacion" value="DOBLE">
									<label class="form-check-label font-weight-bold text-gray-800" for="habDobleNueva">Doble</label>
								</div>
							</div>
							<div class="row mr-5 ml-5">
								<div class="form-group mb-3 col-12" style="padding-top: 5px;">
									<label class="font-weight-bold text-gray-800" for="idHabitacionNueva">Seleccione Habitación:</label>
									<div class="input-group">
										<select class="custom-select idHabitacionLibre" id="idHabitacionNueva" disabled>
											<option value="">Seleccione Habitación</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row mr-5 ml-5">
								<div class="form-group mb-3 col-12" style="padding-top: 5px;">
									<label class="font-weight-bold text-gray-800" for="responsableNuevo ">Personal Responsable:</label>
									<div class="input-group">
										<select class="custom-select responsableResidente" id="responsableNuevo" disabled>
											<option value="">Seleccione Responsable</option>
										</select>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
				<button type="button" class="btn btn-success" id="boton-mover-habitacion" >Mover Residente</button>
			</div>
		</div>
	</div>
</div>