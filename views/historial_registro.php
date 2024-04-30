<!-- HISTORIAL DE REGISTROS: Hay 8 registros. Aparecen tras  -->

<div id="ver-historial-registro"  class="seccion-menu residenteView" style="display: none;">

	<div class=" align-items-center justify-content-between text-center mb-5">

		<h1 class="h3 mb-0 text-gray-800">Historial Registros</h1>

	</div>

	<?php 
	include('busqueda_residente.php'); 
	?>
     

	<div class="seccionOcultableResidentes mt-1" id="seccionHistoricoRegistros" style="display: none;">

          
     <!-- |Inicio| Seleccionar dia/periodo -->
   <div class="row" id="desplegablePeriodoTiempoDiv">
     		<div class="col-xl-4 col-lg-4 col-md-3 col-sm-3"></div>

		<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" >

			<div class="input-group form-group">

				<label class="col-6 col-form-label text-center font-weight-bold text-gray-800"> Fecha :</label>

				<select class="custom-select" id="seleccionarPeriodo">

					<option value="">Elegir</option>

					<option value="selectUnaFecha">Día</option>

					<option value="selectDosFecha">Periodo</option>

				</select>     

			</div>

		</div>
</div>

     <!-- |Fin| Seleccionar dia/periodo -->



      <!-- |Inicio| Abrir 1 caja para introducir una fecha(dia)-->

     

      <div class="row mt-2" id="diaFecha" style="display: none; margin-left:15rem">

      	<div class="col-xl-4 col-lg-4 col-md-3 col-sm-3"></div>


      	<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">

      		<div class="select-group form-group">

      			 <label class="col-6 col-form-label text-center font-weight-bold text-gray-800"> Fecha :</label>

      			<input type="text" id="diaFechaId" name="diaFecha" class="form-control datepicker"

      			placeholder="Fecha" style="width:40%">

      		</div>

      	</div>

      </div>
      <!-- |Fin|  Abrir 1 cajas para introducir una fecha  -->




      <!-- |Inicio| Abrir 2 cajas para introducir fecha desde y fecha hasta -->


    <div class="row mt-2" id="periodoFecha" style="display: none; margin-left:15rem">

      	<div class="col-xl-4 col-lg-4 col-md-3 col-sm-3"></div>


      	<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">

      		<div class="select-group form-group">
                <label class="col-6 col-form-label text-center font-weight-bold text-gray-800"> Desde :</label>
      			<input type="text" id="fechaDesdeId" name="periodoFecha" class="form-control datepicker"

      			placeholder="Desde" style="width:40%">
                <label class="col-6 col-form-label text-center font-weight-bold text-gray-800"> Hasta :</label>
      			<input type="text" id="fechaHastaId" name="periodoFecha" class="form-control datepicker"

      			placeholder="Hasta" style="width:40%">

      		</div>

      	</div>

    </div>
	      <!-- |Fin| Abrir 2 cajas para introducir  fecha desde y fecha hasta -->


          <!-- BOTON (que al hacer click se muestran las 8 tablas de los registros) -->
	<div class="row text-center">

		<div class="col-12 mt-5">

			<button type="button" class="btn btn-success" id="boton-ver-historal-registros"  >Ver Registros</button>

		</div>

	</div>

     <!-- BOTON -->
		



	

	

	<div class="card shadow mb-4" id="ver-tabla-historicoConstantes" style="display: none; margin-top: 20px;">

			<div class="card-body">

				<div class="table-responsive">

				  <p class="h4 text-center text-secondary"><strong>CONSTANTES VITALES Y OTROS PARÁMETROS</strong></p>
					

					<table id="tabla-historicoConstantes" class="table table-bordered " style="width:100%; ">

						<thead>

							<tr>

								<th>Fecha</th>

								<th>DNI Residente</th>

								<th>Nombre De Residente</th>

								<th>FC</th>

								<th>TA</th>

								<th>Tª</th>

								<th>Glucemia</th>

								<th>Suma De Entradas</th>

								<th>Suma De Salidas</th>

								<th>Balance Hídrico(Entradas - Salidas)</th>

								<th>Profesional Que Registra</th>

                                <th>Turno</th>

							</tr>

						</thead>

					</table>

				</div>

			</div>

    </div>

         <!-- tabla 2: -->

         
		 <div class="card shadow mb-4" id="ver-tabla-historicoEliminacion" style="display: none; margin-top: 20px;">

			<div class="card-body">

				<div class="table-responsive">

					<p class="h4 text-center text-secondary"><strong>ELIMINACIÓN</strong></p>

					<table id="tabla-historicoEliminacion" class="table table-bordered " style="width:100%; ">

						<thead>

							<tr>

								<th>Fecha</th>

								<th>DNI Residente</th>

								<th>Nombre De Residente</th>

								<th>Diuresis</th>

								<th>Pañal Mojado</th>

								<th>Deposición</th>

								<th>Cambio Bolsa Clostomia</th>

                                <th>Enema</th>

                                <th>Vomitos</th>

                                <th>Otros</th>

								<th>Profesional Que Registra</th>

                                <th>Turno</th>					

							</tr>

						</thead>

					</table>

				</div>

			</div>

		</div>



		<div class="card shadow mb-4" id="ver-tabla-historicoAlimentacion" style="display: none; margin-top: 20px;">

			<div class="card-body">

				<div class="table-responsive">

				  <p class="h4 text-center text-secondary"><strong>ALIMENTACIÓN</strong></p>
					

					<table id="tabla-historicoAlimentacion" class="table table-bordered " style="width:100%; ">

						<thead>

							<tr>

								<th>Fecha</th>

								<th>DNI Residente</th>

								<th>Nombre De Residente</th>

								<th>Adecuada</th>

								<th>Inadecuada</th>

								<th>Observaciones</th>

								<th>Profesional Que Registra</th>

                                <th>Turno</th>

							</tr>

						</thead>

					</table>

				</div>

			</div>

        </div>


		<div class="card shadow mb-4" id="ver-tabla-historicoMovilizacion" style="display: none; margin-top: 20px;">

			<div class="card-body">

				<div class="table-responsive">

				  <p class="h4 text-center text-secondary"><strong>MOVILIZACIÓN</strong></p>
					

					<table id="tabla-historicoMovilizacion" class="table table-bordered " style="width:100%; ">

						<thead>

							<tr>

								<th>Fecha</th>

								<th>DNI Residente</th>

								<th>Nombre De Residente</th>

								<th>RH física</th>

								<th>Ejercicios pasivos en cama</th>

								<th>Cambio postural c/2h</th>

								<th>Levartar al sillón</th>
								<th>Encamado</th>
								<th>Otros</th>

								<th>Profesional Que Registra</th>

                                <th>Turno</th>

							</tr>

						</thead>

					</table>

				</div>

			</div>

        </div>


		<div class="card shadow mb-4" id="ver-tabla-historicoHigiene" style="display: none; margin-top: 20px;">

			<div class="card-body">

				<div class="table-responsive">

				  <p class="h4 text-center text-secondary"><strong>HIGIENE</strong></p>
					

					<table id="tabla-historicoHigiene" class="table table-bordered " style="width:100%; ">

						<thead>

							<tr>

								<th>Fecha</th>

								<th>DNI Residente</th>

								<th>Nombre De Residente</th>

								<th>Baño /ducha</th>

								<th>Aseo</th>
								<th>Higiene bucal</th>
								<th>Uñas manos</th>
								<th>Uñas pies</th>
								<th>Afeitado</th>

								<th>Higiene genital </th>
								<th>Vestido</th>

								<th>Otros</th>

								<th>Profesional Que Registra</th>

                                <th>Turno</th>

							</tr>

						</thead>

					</table>

				</div>

			</div>

        </div>


		<div class="card shadow mb-4" id="ver-tabla-historicoMedicacion" style="display: none; margin-top: 20px;">

			<div class="card-body">

				<div class="table-responsive">

				  <p class="h4 text-center text-secondary"><strong>MEDICACIÓN</strong></p>
					

					<table id="tabla-historicoMedicacion" class="table table-bordered " style="width:100%; ">

						<thead>

							<tr>

								<th>Fecha</th>

								<th>DNI Residente</th>

								<th>Nombre De Residente</th>

								<th>Oral</th>

								<th>Tópica</th>

								<th>Rectal</th>

								<th>Inhaladores</th>

								<th>Gotas óticas</th>

								<th>Gotas oftálmicas</th>

								<th>Gotas nasales</th>

								<th>Otros</th>

								<th>Profesional Que Registra</th>

                                <th>Turno</th>

							</tr>

						</thead>

					</table>

				</div>

			</div>

        </div>




		<div class="card shadow mb-4" id="ver-tabla-historicoDescanso" style="display: none; margin-top: 20px;">

			<div class="card-body">

				<div class="table-responsive">

				  <p class="h4 text-center text-secondary"><strong>SUEÑO/DESCANSO</strong></p>
					

					<table id="tabla-historicoDescanso" class="table table-bordered " style="width:100%; ">

						<thead>

							<tr>

								<th>Fecha</th>

								<th>DNI Residente</th>

								<th>Nombre De Residente</th>

								<th>Nocturno</th>

								<th>Siesta</th>

								<th>Profesional Que Registra</th>

                                <th>Turno</th>

							</tr>

						</thead>

					</table>

				</div>

			</div>

        </div>



		<div class="card shadow mb-4" id="ver-tabla-historicoIncidencia" style="display: none; margin-top: 20px;">

			<div class="card-body">

				<div class="table-responsive">

				  <p class="h4 text-center text-secondary"><strong>INCIDENCIA</strong></p>
					

					<table id="tabla-historicoIncidencia" class="table table-bordered " style="width:100%; ">

						<thead>

							<tr>

								<th>Fecha</th>

								<th>DNI Residente</th>

								<th>Nombre De Residente</th>

								<th>Incidencias</th>

								<th>Profesional Que Registra</th>

                                <th>Turno</th>

							</tr>

						</thead>

					</table>

				</div>

			</div>

        </div>
	</div> 
   

</div>