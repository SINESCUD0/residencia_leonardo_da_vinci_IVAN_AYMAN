<!-- VER DATOS DE CONTACTO DEL RESIDENTE -->
<div id="ver-datos-contacto" class="seccion-menu residenteView" style="display: none;">

  <div class=" align-items-center justify-content-between text-center mb-5">
    <h1 class="h3 mb-0 text-gray-800">Datos de Contacto del Residente</h1>
  </div>
  
	<?php 
       include('busqueda_residente.php'); 
	?> 

	
	<div class="row text-center">
		<div class="col-12 mt-5">
			<button type="button" class="btn btn-success" id="boton-ver-datos"  style="display: none;">Ver Datos</button>
		</div>
	</div>


  <div class="card shadow mb-4" id="ver-tabla-datos" style="display: none; margin-top: 20px;">
    <div class="card-body">
      <div class="table-responsive">
        <table id="tabla-datos" class="table table-striped table-bordered " style="width:100%; ">
          <thead>
              <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Dirección</th>
				<th>Codigo Postal</th>
                <th>Telefono</th>
                <th>Email</th>
				<th>Parentesco</th>
              </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

</div>