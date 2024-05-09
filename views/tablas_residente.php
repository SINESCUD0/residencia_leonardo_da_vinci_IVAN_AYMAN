<!-- VER LA TABLA RESIDENTES -->
<div id="ver-residente-tabla" class="seccion-menu" style="display: none;">
  <div class="align-items-center justify-content-between text-center mb-5">
    <h1 class="h3 mb-0 text-gray-800">Historial Residentes</h1>
  </div>

  <div class="custom-control custom-checkbox" style="cursor: pointer;">
    <input type="checkbox" class="custom-control-input" id="historico-residente" value="historico" style="cursor: pointer;">
    <label class="custom-control-label font-weight-bold text-gray-800" for="historico-residente" style="cursor: pointer;">Residentes no Activos</label>
  </div>

  <div class="custom-control custom-checkbox mt-2" style="cursor: pointer;">
    <input type="checkbox" class="custom-control-input" id="de-alta-residente" value="de-alta-residente" style="cursor: pointer;">
    <label class="custom-control-label font-weight-bold text-gray-800" for="de-alta-residente" style="cursor: pointer;">Residentes Activos</label>
  </div>

  <!--Ver histórico tabla residentes -->
  <div class="card shadow mb-4" id="ver-residente-tabla-historico" style="display: none; margin-top: 20px;"> 
    <div class="card-header py-3 text-center">
      <h6 class="m-0 font-weight-bold text-primary">Residentes no Activos</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="tabla-residente-historico" class="table table-striped table-bordered " style="width:100%; ">
          <thead>
              <tr>
				<th class="d-none">Fecha ISO</th>
				<th>Número Expediente</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segudo Apellido</th>
                <th>Edad</th>
                <th>Discapacidad</th>
                <th>Situación Medica</th>
				<th>Grado Dependencia</th>
                <th>Fecha Alta</th>
                <th>Fecha Baja</th>
				<th>Motivo Baja</th>
				<th>Activar Residente</th>
                <th>Indice Katz</th>
                <th>Indice de Barthel</th>
              </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

  <!--Ver todos los residentes dados de alta -->
  <div class="card shadow mb-4" id="ver-residente-tabla-de-alta" style="display: none; margin-top: 20px;">
    <div class="card-header py-3 text-center">
      <h6 class="m-0 font-weight-bold text-primary">Residentes Activos</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="tabla-residente-de-alta" class="table table-striped table-bordered" style="width:50%; ">
          <thead>
              <tr>
				<th class="d-none">Fecha ISO</th>
                <th>Número Expediente</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segudo Apellido</th>
                <th>Edad</th>
                <th>Discapacidad</th>
                <th>Situación Medica</th>
				<th>Grado Dependencia</th>
                <th>Fecha Alta</th>
                <th>Indice Katz</th>
                <th>Indice Barthel</th>
              </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

</div> 