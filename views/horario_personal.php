<!-- VER HORARIO DEL PERSONAL -->
<div id="ver-horario-personal" class="seccion-menu personalView"  style="display: none;">

  <div class=" align-items-center justify-content-between text-center mb-5">
    <h1 class="h3 mb-0 text-gray-800">Horario Personal</h1>
  </div>
  
  <?php 
       include('busqueda_personal.php'); 
	?>
	
	<div class="row text-center">
		<div class="col-12 mt-3">
			<button type="button" class="btn btn-success" id="boton-ver-horario"  style="display: none;">Ver Datos</button>
		</div>
	</div>
	

	<div class="card shadow mb-4" id="ver-tabla-horario" style="display: none; margin-top: 20px;">
		<div class="card-body">
		  <div class="table-responsive">
			<table id="tabla-horario" class="table table-striped table-bordered " style="width:100%; ">
			  <thead>
				  <tr>
					<th>Nombre Personal</th>
					<th>Primer Apellido</th>
					<th>Segundo Apellido</th>
					<th>Puesto Laboral</th>
					<th>Horario</th>
				  </tr>
			  </thead>
			</table>
		  </div>
		</div>
  </div>

</div>