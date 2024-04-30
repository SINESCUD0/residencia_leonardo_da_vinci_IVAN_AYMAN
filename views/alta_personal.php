<!-- ALTA DE PERSONAL -->
<div id="ver-alta-personal"  class="seccion-menu"style="display: none;">
	<div class=" align-items-center justify-content-between text-center mb-5">
		<h1 class="h3 mb-0 text-gray-800">Alta Personal</h1>
	</div>

	<div class="row">
		<div class="col-12 mb-4 text-center titulo-seccion" >Datos Personales:</div>
	</div>

	<div class="row">
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
		  <label class="font-weight-bold text-gray-800">DNI:</label>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" >
		  <div class="input-group form-group">
			<div class="input-group-prepend ">
			  <span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
			</div>
			<input type="text" name="dni" class="form-control" id="dni" placeholder="">
		  </div>
		</div>
		<div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
		  <label class="font-weight-bold text-gray-800">Nombre:</label>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
		  <div class="input-group form-group">
			<input type="text" name="nombre" class="form-control" id="nombre" placeholder="">
		  </div>
		</div>
	</div>

	<div class="row">
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
		  <label class="font-weight-bold text-gray-800">Primer Apellido:</label>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" >
		  <div class="input-group form-group">
			<input type="text" name="apellido1" class="form-control" id="apellido1" placeholder="">
		  </div>
		</div>
		<div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
		  <label class="font-weight-bold text-gray-800">Segundo Apellido:</label>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
		  <div class="input-group form-group">
			<input type="text" name="apellido2" class="form-control" id="apellido2" placeholder="">
		  </div>
		</div>
	</div>
  
	<div class="row">
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
		  <label class="font-weight-bold text-gray-800">Dirección:</label>
		</div>
		<div class="col-xl-3 col-lg-9 col-md-10 col-sm-10" >
		  <div class="input-group form-group">
			<input type="text" name="direccion" class="form-control" id="direccion" placeholder="">
		  </div>
		</div>
		<div class="col-xl-1 col-lg-0 col-md-0 col-sm-0"></div>
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
		  <label class="font-weight-bold text-gray-800">Codigo Postal:</label>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
		  <div class="input-group form-group">
			<input type="number"  min="1000" max="52999" name="codigoPostal" class="form-control" id="codigoPostal" placeholder="">
		  </div>
		</div>
		<div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
		  <label class="font-weight-bold text-gray-800">Telefono:</label>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
		  <div class="input-group form-group">
			<input type="text" name="telefono" class="form-control" id="telefono" placeholder="">
		  </div>
		</div>
		<div class="col-xl-1 col-lg-0 col-md-0 col-sm-0"></div>
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
		  <label class="font-weight-bold text-gray-800">Email:</label>
		</div>
		<div class="col-xl-3 col-lg-9 col-md-10 col-sm-10" >
		  <div class="input-group form-group">
			<input type="email" name="email" class="form-control" id="email" placeholder="">
		  </div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-12 mb-4 mt-4 text-center titulo-seccion" >Datos Laborales:</div>
	</div>

	<div class="row">
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
			<label class="font-weight-bold text-gray-800">Puesto laboral:</label>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" >
			<div class="input-group mb-3">
				<select class="custom-select rol" id="rol">
					<option value="">Seleccione un Puesto Laboral:</option>
					<option value="admin">Administrador</option>
					<option value="auxiliar">Auxiliar</option>
					<option value="enfermero">Enfermero</option>
					<option value="Fisioterapeuta">Fisioterapeuta</option>
					<option value="limpieza">Limpieza</option>
					<option value="mantenimiento">Mantenimiento</option>
					<option value="medico">Médico</option>
					<option value="Psicologo">Psicólogo</option>
					<option value="TrabajadorSocial">Trabajador Social</option>
					<option value="TerapeutaOcupacional">Terapeuta Ocupacional</option>
				</select>
			</div>
		</div>
		<div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
		  <label class="font-weight-bold text-gray-800">Tipo de Responsabilidad:</label>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
			<div class="input-group mb-3">
				<select class="custom-select" id="tipoResponsabilidad" >
					<option value="">Seleccione un Tipo de Responsabilidad:</option>
					<option value="admin">Administrador</option>
					<option value="asistencial">Asistencial</option>
					<option value="coordinador">Coordinador</option>
					<option value="educativa">Educativa</option>
					<option value="encargado">Encargado</option>
					<option value="jefeEquipo">Jefe de Equipo</option>
					<option value="limpieza">Limpieza</option>
					<option value="mantenimiento">Mantenimiento</option>
					<option value="rehabilitadora">Rehabilitadora</option>
					<option value="sanitaria">Sanitaria</option>
					<option value="supervisor">Supervisor</option>
					<option value="Terapeutica">Terapéutica</option>
				</select>
			</div>
		</div>
    </div>	
	<div class="row">
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
			<label class="font-weight-bold text-gray-800">Horario:</label>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
			<div class="input-group mb-3">
				<div class="input-group-prepend ">
					<span class="input-group-text"><i class="fa fa-clock-o"></i></span>
				</div>
				<select class="custom-select" id="turno">
					<option value="">Seleccione turno</option>
					<?php
					foreach($listadoTurnos as $turno){
					?>
						<option value="<?php echo $turno[0] ?>"><?php echo $turno[1] ?></option>
					<?php 
					}
					?>
				</select>
			</div>
		</div>
		<div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 labelPlanta" id="labelPlanta" style="display: none; padding-top: 5px;">
			<label class="font-weight-bold text-gray-800">Planta Asignada:</label>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10 inputPlanta" id="inputPlanta" style="display: none;">
			<select class="custom-select" class="form-control" id="planta">
				<option value="">Seleccione una planta:</option>
				<?php
					foreach($listadoPlantas as $planta){
				?>
						<option value="<?php echo $planta[0] ?>"><?php echo $planta[0] ?></option>
		 
				<?php 
				}
				?>
			</select>
		</div>
	</div>
  
  	<div class="row">
		<div class="col-12 mb-4 mt-4 text-center titulo-seccion" >Datos Acceso:</div>
	</div>

	<div class="row">
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
		<label class="font-weight-bold text-gray-800">Usuario:</label>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" >
			<div class="input-group form-group">
				<div class="input-group-prepend ">
					<span class="input-group-text"><i class="fa fa-user"></i></span>
				</div>
				<input type="text" name="usuario" class="form-control" id="usuario" placeholder="">
			</div>
		</div>
		<div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
			<label class="font-weight-bold text-gray-800">Contraseña:</label>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
			<div class="input-group form-group">
				<div class="input-group-prepend ">
					<span class="input-group-text"><i class="fa fa-lock"></i></span>
				</div>
				<input type="password" name="contrasena" class="form-control" id="contrasena" placeholder="">
			</div>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
			<button type="button" class="btn btn-success" id="boton-alta-personal" >Alta Personal</button>
		</div>
	</div>
</div>