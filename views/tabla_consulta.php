<!-- VER LA TABLA DE CONSULTAS MEDICO RESIDENTE -->
<div id="ver-consulta-tabla" class="seccion-menu residenteView" style="display: none;">
	<div class=" align-items-center justify-content-between text-center mb-5">
		<h1 class="h3 mb-0 text-gray-800">Historial Consultas</h1>
	</div>

	<?php 
       include('busqueda_residente.php'); 
	?>
		
	<div class="seccionOcultableResidentes" style="margin-top: 20px; display: none;"> 
		<div class="row text-center">
			<div class="col-12 mt-2">
				<button type="button" class="btn btn-success" id="boton-tabla-consulta" >Consultar</button>
			</div>
		</div>
	</div>
	<div class="card shadow mb-4" id="ver-tabla-consulta" style="display: none; margin-top: 20px;"> 
		<div class="card-body">
			<div class="table-responsive">
				<table id="tabla-consulta" class="table table-striped table-bordered " style="width:100%; ">
					<thead>
						<tr>
							<th class="d-none">Fecha ISO</th>
							<th>DNI Residente</th>
							<th>Nombre Medico</th>
							<th>Fecha</th>
							<th>Causa</th>
							<th>Síntomas</th>
							<th>Tratamiento</th>
							<th>Revisión</th>
							<th>Otros</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>