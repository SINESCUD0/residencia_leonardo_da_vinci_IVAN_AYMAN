<!-- BAJA DE PERSONAL -->
<div id="ver-baja-personal" class="seccion-menu personalView" style="display: none;">
	<div class=" align-items-center justify-content-between text-center mb-5">
		<h1 class="h3 mb-0 text-gray-800">Baja Personal</h1>
	</div>
  
	<?php 
       include('busqueda_personal.php'); 
	?>
  
	<div class="seccionOcultable mt-5" style="display: none;">
	
		<div class="row mb-2">
			<div class="col-xl-6 col-lg-9 col-md-12 col-sm-12" >
				<div class="input-group form-group">
					<label class="col-xl-4 col-lg-4 col-md-12 col-sm-12 font-weight-bold text-gray-800">Fecha de la baja:</label>
					<div class="input-group-prepend ">
						<span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
					</div>
					<input type="text" class="form-control datepicker" name="fechaBaja" id="fechaBaja" placeholder="Seleccionar Fecha">	
				</div>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-xl-6 col-lg-9 col-md-12 col-sm-12" >
				<div class="input-group form-group">
					<label class="col-xl-4 col-lg-4 col-md-12 col-sm-12 font-weight-bold text-gray-800">Motivo de la baja:</label>
					<select class="custom-select form-control" id="motivo-baja">
						<option value="">Seleccione el motivo </option>
						<option>Motivos personales</option>
						<option>Incumplimiento de sus funciones</option>
						<option>Conducta inadecuada con los/as compañeros/as</option>
						<option>Conducta inadecuada con los/as usuarios/as</option>
						<option value="otras" >Otros</option>			
					</select>
				</div>
			</div>
			<div class="col-xl-6 col-lg-9 col-md-12 col-sm-12" id="otrasBajaPersonal" style="display: none;">
				<div class="input-group form-group">
					<input type="text" class="form-control" id="textoOtrasBajaPersonal" name="textoOtrasBajaPersonal" placeholder="Indique el motivo de la baja">	
				</div>
			</div>
		</div>
		
		<div class="row mt-5">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
				<button type="button" class="btn btn-success" id="boton-baja-personal" >Baja Personal</button>
			</div>
		</div>
	</div>
</div>