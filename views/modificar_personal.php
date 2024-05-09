<!-- MODIFICAR DATOS DE PERSONAL -->
<div id="ver-modificar-personal" class="seccion-menu personalView" style="display: none;">
	<div class=" align-items-center justify-content-between text-center mb-5">
		<h1 class="h3 mb-0 text-gray-800">Modificar Personal</h1>
	</div>

	<div class="row">
		<div class="col-xl-4 col-lg-4 col-md-3 col-sm-3"></div>
		<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" >
			<div class="input-group form-group">
				<label class="col-6 col-form-label text-center font-weight-bold text-gray-800"> Buscar por :</label>
				<select class="custom-select modoBusquedaPersonal">
					<option value="">Elegir</option>
					<option value="busquedaDniPersonal">DNI</option>
					<option value="busquedaApellidosPersonal">Apellidos</option>
				</select>     
			</div>
		</div>
		<div class="col-xl-4 col-lg-4 col-md-3 col-sm-3"></div>
	</div>

	<div class="row busquedaDniPersonal selectPersonalOcultable" style="display: none;">
		<div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-8" >
			<div class="input-group form-group" >
				<div class="input-group-prepend ">
					<span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
				</div>
				<select class="custom-select listadoPersonal dni-personal">
					<option value="">Seleccione un DNI</option>
					<?php
						foreach($listadoPersonal as $personal){
					?>
							<option value="<?php echo $personal[0] ?>"><?php echo $personal[1] ?></option>
             
					<?php 
					}
					?>
				</select>
			</div>
		</div>
    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
	</div>
  
    <div class="row busquedaApellidosPersonal selectPersonalOcultable"  style="display: none;">
		<div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-8" >
			<div class="input-group form-group">
				<div class="input-group-prepend ">
					<span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
				</div>
				<select class="custom-select listadoPersonal apellidos-personal">
					<option value="" >Seleccione apellidos y nombre </option>
					<?php
						foreach($listadoPersonal as $personal){
					?>
						<option value="<?php echo $personal[0] ?>"><?php echo $personal[2] . " " . $personal[3] . ", " . $personal[4]?></option>
					<?php 
					}
					?>
				</select>
			</div>
		</div>
		<div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
	</div>
	
    <div class="seccionOcultable mt-1" id="seccionModificar" style="display: none;">
	
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
					<input type="text" name="dni-modificar-personal" class="form-control" id="dni-input-modif-personal" placeholder="">
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
				<label class="font-weight-bold text-gray-800">Nombre:</label>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
				<div class="input-group form-group">
					<input type="text" name="nombre-modificar-personal" class="form-control" id="nombre-modificar-personal" placeholder="">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
				<label class="font-weight-bold text-gray-800">Primer Apellido:</label>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" >
				<div class="input-group form-group">
					<input type="text" name="apellido1-modificar-personal" class="form-control" id="apellido1-modificar-personal" placeholder="">
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
				<label class="font-weight-bold text-gray-800">Segundo Apellido:</label>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
			<div class="input-group form-group">
				<input type="text" name="apellido2-modificar-personal" class="form-control" id="apellido2-modificar-personal" placeholder="">
			</div>
			</div>
		</div>
  
		<div class="row">
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
				<label class="font-weight-bold text-gray-800">Dirección:</label>
			</div>
			<div class="col-xl-3 col-lg-9 col-md-10 col-sm-10" >
				<div class="input-group form-group">
					<input type="text" name="direccion-modificar-personal" class="form-control" id="direccion-modificar-personal" placeholder="">
				</div>
			</div>
			<div class="col-xl-1 col-lg-0 col-md-0 col-sm-0"></div>
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
				<label class="font-weight-bold text-gray-800">Codigo Postal:</label>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
				<div class="input-group form-group">
					<input type="number"  min="1000" max="52999" name="codigoPostal-modificar-personal" class="form-control" id="codigoPostal-modificar-personal" placeholder="">
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
				<label class="font-weight-bold text-gray-800">Telefono:</label>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
				<div class="input-group form-group">
					<input type="text" name="telefono-modificar-personal" class="form-control" id="telefono-modificar-personal" placeholder="">
				</div>
			</div>
			<div class="col-xl-1 col-lg-0 col-md-0 col-sm-0"></div>
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
				<label class="font-weight-bold text-gray-800">Email:</label>
			</div>
			<div class="col-xl-3 col-lg-9 col-md-10 col-sm-10" >
				<div class="input-group form-group">
					<input type="email" name="email-modificar-personal" class="form-control" id="email-modificar-personal" placeholder="">
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
					<select class="custom-select rol" id="rol-modificar-personal">
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
					<select class="custom-select" id="tipoResponsabilidad-modificar-personal" >
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
					<select class="custom-select" id="turno-modificar-personal">
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
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 labelPlanta" id="labelPlanta-modificar-personal" style="display: none; padding-top: 5px;">
				<label class="font-weight-bold text-gray-800">Planta Asignada:</label>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10 inputPlanta" id="inputPlanta-modificar-personal" style="display: none;">
				<select class="custom-select form-control" name="planta-modificar-personal" id="planta-modificar-personal">
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
		<div class="row mt-3">
				<div class="mb-4 col-xl-2 col-lg-12 col-md-12 col-sm-12 mt-2">
					<div class="ml-1 custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="activado-personal" style="cursor: pointer; padding-top: 5px;">
						<label class="custom-control-label font-weight-bold text-gray-800" for="activado-personal" style="cursor: pointer;">En Activo</label>
					</div>
				</div>
				<div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 mt-2" id="labelfechaBaja-modificar-personal"  style="display: none; padding-top: 5px;">
							<label class="font-weight-bold text-gray-800">Fecha Baja:</label>
				</div>
				<div class="col-xl-2 col-lg-3 col-md-10 col-sm-10" id="inputFechaBaja-modificar-personal"  style="display: none; padding-top: 5px;">
					<div class="input-group form-group">
						<input type="text" name="fechaBaja-modificar-personal" class="form-control" id="fechaBaja-modificar-personal" disabled>
					</div>
				</div>
				<div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" id="labelMotivoBaja"  style="display: none; padding-top: 5px;">
							<label class="font-weight-bold text-gray-800">Motivo Baja:</label>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" id="inputMotivoBaja"  style="display: none; padding-top: 5px;">
					<div class="input-group form-group">
						<input type="text" name="motivoBaja-modificar-personal" class="form-control" id="motivoBaja-modificar-personal" >
					</div>
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
					<input type="text" name="usuario-modificar-personal" class="form-control" id="usuario-modificar-personal" placeholder="">
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
					<input type="password" name="contrasena-modificar-personal" class="form-control" id="contrasena-modificar-personal" placeholder="Rellenar solo si desea cambiar contraseña">
				</div>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
				<button type="button" class="btn btn-success" id="boton-modificar-personal" >Modificar Personal</button>
			</div>
		</div>
	</div>
</div>