<!-- INSERTAR INCIDENCIA RESPECTO AL RESIDENTE -->
					
<div id="ver-auxiliar-residente" class="seccion-menu residenteView" style="display: none;">
  <div class=" align-items-center justify-content-between text-center mb-5">
    <h1 class="h3 mb-0 text-gray-800">Agregar Incidencia</h1>
  </div>

	<?php 
       include('busqueda_residente.php'); 
	?> 

	<div class="seccionOcultableResidentes" style="margin-top: 20px; display: none;"> 
		<div class="col-xl-12 col-lg-12 col-md-10 col-sm-10" >
			<div class="input-group form-group">
				<input type="text" name="descripcionIncidencia" class="form-control" id="descripcionIncidencia" placeholder="Descripción breve de la incidencia">
			</div>
		</div>

		<div class="card shadow mb-4"> 
			<div class="card-header text-center">
				<h6 class="m-0 ">Contenido Incidencia</h6>
			</div>
			<div class="card-body">
				<div class="summernote" id="texto-diario"></div>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
				<button type="button" class="btn btn-success" id="boton-diario-auxiliar">Guardar</button>
			</div>
		</div>
	</div>
</div>