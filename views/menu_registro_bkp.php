<!-- MENU DE REGISTROS: Hay 8 registros/botones -->

<div id="ver-menu-registro"  class="seccion-menu residenteView" style="display: none;">

	<div class=" align-items-center justify-content-between text-center mb-5">

		<h1 class="h3 mb-0 text-gray-800">Alta Registros</h1>

	</div>

	<?php 
	include('busqueda_residente.php'); 
	?>


	<!-- <div class="seccionOcultableResidentes mt-1" id="seccionRegistros" style="display: none;">

		<div class="row justify-content-center">
			<div class="col-xl-3 col-lg-4 col-md-8 col-sm-9 ">
				<button type="button" class="btn btn-primary rounded-0 font-weight-bold shadow p-3 mb-5 btn-block" id="boton-constantes" >CONSTANTES VITALES Y<br> OTROS PARÁMETROS </button>
			</div>

			<div class="col-xl-3 col-lg-4 col-md-8 col-sm-9 ">
				<button type="button" class="btn btn-primary rounded-0 font-weight-bold shadow p-3 mb-5 btn-block" id="boton-eliminacion" >ELIMINACIÓN  </button>
			</div>

			<div class="col-xl-3 col-lg-4 col-md-8 col-sm-9 ">
				<button type="button" class="btn btn-primary rounded-0 font-weight-bold shadow p-3 mb-5 btn-block" id="boton-alimentacion" >ALIMENTACIÓN  </button>
			</div>
		</div>


		<div class="row justify-content-center">
			<div class="col-xl-3 col-lg-4 col-md-8 col-sm-9 text-center">
				<button type="button" class="btn btn-primary rounded-0 font-weight-bold shadow p-3 mb-5 btn-block" id="boton-movilizacion" >MOVILIZACIÓN </button>
			</div>

			<div class="col-xl-3 col-lg-4 col-md-8 col-sm-9 text-center">
				<button type="button" class="btn btn-primary rounded-0 font-weight-bold shadow p-3 mb-5 btn-block" id="boton-higiene" >HIGIENE  </button>
			</div>

			<div class="col-xl-3 col-lg-4 col-md-8 col-sm-9 text-center">
				<button type="button" class="btn btn-primary rounded-0 font-weight-bold shadow p-3 mb-5 btn-block" id="boton-medicacion" >MEDICACIÓN  </button>
			</div>
		</div>


		<div class="row justify-content-center">

			<div class="col-xl-3 col-lg-4 col-md-8 col-sm-9 text-center">

				<button type="button" class="btn btn-primary rounded-0 font-weight-bold shadow p-3 mb-5 btn-block" id="boton-descanso" >SUEÑO/DESCANSO  </button>
			</div>

			<div class="col-xl-3 col-lg-4 col-md-8 col-sm-9 text-center">

				<button type="button" class="btn btn-primary rounded-0 font-weight-bold shadow p-3 mb-5 btn-block" id="boton-incidencia" >INCIDENCIA </button>
			</div>

		</div> -->
<!-- **INICIO** |1| TABLA CONSTANTES VITALES Y OTROS PARAMETROS PARA RELLENAR -->
		<div class="card shadow mb-4" id="ver-tabla-constante" style="margin-top: 20px;"> 
		   <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

              <a class="btn btn-warning" href="../ficheros-index/registros_en_blanco/registroConstante.pdf" target="_blank">PDF en blanco</a><br>

           </div>

			<div class="card-body">

				<div class="table-responsive">

					<table id="tabla-constante" class="table table-bordered" style="width:100%; ">
						<thead>
							<th scope="col">FECHA:</th>
							<td colspan="1" id="fecha_constante"><input type="text" class="form-control datetimepicker" name="fechaRegistroconstante" id="fechaRegistroconstante" required></td>
						</thead>

						<thead>

							<tr>
								<!-- <th class="d-none">Fecha ISO</th> -->
								<th scope="col">ACTIVIDAD<br>CONSTANTES VITALES Y OTROS PARÁMETROS</th>

								<th scope="col">TURNO: <br><select name="turnos" id="turnos_constante" required class="form-control">
									<option value=""> </option>
									<option value="M">M</option>
									<option value="T">T</option>
									<option value="N">N</option>
								</select> </th>

								</tr>

							</thead>
							<tbody>

								<tr>
									<th scope="row">F.C.</th>
									<td><input type="text" class="form-control" id="fc"></td>
								</tr>
								<tr>
									<th scope="row">T.A.</th>
									<td><input type="text" class="form-control" id="ta"></td>
								</tr>
								<tr>
									<th scope="row">Tª</th>
									<td><input type="text" class="form-control" id="t_a"></td>
								</tr>
								<tr>
									<th scope="row">Glucemia</th>
									<td><input type="text" class="form-control" id="glucemia"></td>
								</tr>

                                <tr>
									<th scope="row">Entradas hídricas</th>
									<td><select name="bal_hidrico_entrada" multiple="multiple" id="hidrico_select_entrada"class="form-control mySelect2">
										<?php

										foreach($listaEntradasHidrico as $entrada){

											?>

											<optgroup label="<?php echo ucfirst($entrada[1]); ?>" >
												<?php if(is_null($entrada[2])!=true){

												 ?>
												<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;<?php 
												  	echo ucfirst($entrada[2]);
												  
											     ?>">
											 <?php } 
											 ?>
     											   <option value="<?php echo $entrada[0]; ?>">
     											       	<?php
                                                        if(is_null($entrada[2])!=true && is_null($entrada[3])!=true){
                                                        	 echo $entrada[3]." - ". $entrada[4]." ml";
                                                        }
     											       	elseif(is_null($entrada[2]) && is_null($entrada[3]) && $entrada[4]!="0" )
     											       	{
     											       		echo $entrada[4]." ml";
     											        }elseif(is_null($entrada[2]) && is_null($entrada[3]) && $entrada[4]==0 ){
                                                            echo $entrada[1];
     											       	}   

     											       	?>   

     											   </option>
     											</optgroup>
     										</optgroup>
     
												<?php 

											}


											?>
							
										</select>
										<div class="row mt-2" id="cajaTextOtros" style="display: none; margin-left:1rem;">

											<div class=" col-xl-8 col-lg-5 col-md-12 col-sm-12 ">

												<div class="select-group form-group">

												    <label for="cajaTextEntradaOtros">Otros:</label>
													<input type="text" id="otrosEntrada_true" name="cajaTextOtros" class="form-control form-control-sm"

													placeholder="ml" style="width:50%">

												</div>

											</div>

										</div></td>

								</tr>
								<!-- ***Inicio: SALIDAS -->
								<tr>
								<th scope="row">Salidas hídricas</th>
								<td>
									<select name="bal_hidrico_salida" id="hidrico_select_salida" multiple="multiple" class="form-control mySelect2">
									<?php
									$salida_tipo = '';
									foreach ($listaSalidasHidrico as $salida) {
										if ($salida_tipo != $salida[1]) {
											if ($salida_tipo != '') {
												echo '</optgroup>';
											}
											echo '<optgroup label="'.ucfirst($salida[1]).' ">';
										}

										if($salida[2]!="0"){
										echo '<option value="'.$salida[0].'">'.htmlspecialchars($salida[2])." ml".'</option>';
										$salida_tipo = $salida[1];   //Importante para que se agrupe por optgroup tipo
										}else{
											echo '<option value="'.$salida[0].'">'.htmlspecialchars($salida[1]).'</option>';
										
										} 
									}
									if ($salida_tipo != '') {
										echo '</optgroup>';
									}
									?>
								</select>

								<div class="row mt-2" id="cajaTextDiuresis" style="display: none; margin-left:1rem">

									<div class=" col-xl-8 col-lg-5 col-md-12 col-sm-12 ">

										<div class="select-group form-group">

											<label for="cajaTextSalidaOtros">Diuresis:</label>

											<input type="text" id="diuresisEntrada_true" name="cajaTextDiuresis" class="form-control form-control-sm"

											placeholder="ml" style="width:50%">

										</div>

									</div>

								</div>

								<div class="row mt-2" id="cajaTextSalidaOtros" style="display: none; margin-left:1rem">

									<div class=" col-xl-8 col-lg-5 col-md-12 col-sm-12 ">

										<div class="select-group form-group">

											<label for="cajaTextSalidaOtros">Otros:</label>

											<input type="text" id="otrosSalida_true" name="cajaTextSalidaOtros" class="form-control form-control-sm"

											placeholder="ml" style="width:50%">

										</div>

									</div>

								</div>

							</td>
							    </tr>

							    <tr>
									<th scope="row">Suma de entradas</th>
									<td><input type="text" class="form-control" id="sumEntradas" readonly></td>
								</tr>
								
								<tr>
									<th scope="row">Suma de salidas</th>
									<td><input type="text" class="form-control" id="sumSalidas" readonly></td>
								</tr>
								

								<tr>
									<th scope="row">Balance hídrico (Suma entradas - Suma salidas)</th>
									<td><input type="text" class="form-control" id="balanceResultado" readonly></td>
								</tr>

							</tbody>
					</table>

				</div>
			

				<div class="row mt-5">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
						<button type="button" class="btn btn-success" id="boton-agregar-constante">Alta Constantes</button>
						<button type="button" class="btn btn-success" id="boton-agregar-constante-guardarSiguiente">Guardar y Siguiente</button>
					</div>
				</div>
            </div>
	
        </div>
 <!-- **FIN** |1| TABLA CONSTANTES VITALES Y OTROS PARAMETROS PARA RELLENAR -->
 
 <!-- **INICIO** |2| TABLA ELIMINACION PARA RELLENAR -->
		<div class="card shadow mb-4" id="ver-tabla-eliminacion" style="display: none; margin-top: 20px;"> 
		   <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

              <a class="btn btn-warning" href="../ficheros-index/registros_en_blanco/registroEliminacion.pdf" target="_blank">PDF en blanco</a><br>

           </div>

			<div class="card-body">

				<div class="table-responsive">

					<table id="tabla-eliminacion" class="table table-bordered" style="width:100%; ">
						<thead>
							<th scope="col">FECHA:</th>
							<td colspan="1" id="fecha_eliminacion"><input type="text" class="form-control datetimepicker" name="fechaRegistroeliminacion" id="fechaRegistroeliminacion" required></td>
						</thead>

						<thead>

							<tr>
								<!-- <th class="d-none">Fecha ISO</th> -->
								<th scope="col">ACTIVIDAD<br>ELIMINACIÓN</th>

								<th scope="col">TURNO: <br><select name="turnos" id="turnos_eliminacion" required class="form-control">
									<option value=""> </option>
									<option value="M">M</option>
									<option value="T">T</option>
									<option value="N">N</option>
								</select> </th>

							</tr>

						</thead>
							<tbody>

								<tr>
									<th scope="row">Diuresis</th>
										<td><input type="text" class="form-control " id="diuresis"></td>
									
								</tr>
								<tr>
									<th scope="row">Pañal mojado</th>
									<td class="text-center">
										<div class="form-check form-check-inline grande">
											<input class="form-check-input pan_mojado" type="checkbox" id="panalMojado1" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input pan_mojado" type="checkbox" id="panalMojado2" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input pan_mojado" type="checkbox" id="panalMojado3" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input pan_mojado" type="checkbox" id="panalMojado4" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input pan_mojado" type="checkbox" id="panalMojado5" value="1" aria-label="...">
										</div>
									</td>
											
									
								</tr>
								<tr>

									<th scope="row">Deposición</th>
									<td class="text-center ">
										<div class="form-check form-check-inline grande">
											<input class="form-check-input deposicion" type="checkbox" id="deposicion1" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input deposicion" type="checkbox" id="deposicion2" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input deposicion" type="checkbox" id="deposicion3" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input deposicion" type="checkbox" id="deposicion4" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input deposicion" type="checkbox" id="deposicion5" value="1" aria-label="...">
										</div>
											
											</td>

									
								</tr>
										<tr>
									<th scope="row">Cambio bolsa clostomía</th>
										<td class="text-center">
											<div class="form-check form-check-inline grande">
											<input class="form-check-input cambioBolsa" type="checkbox" id="cambioBolsa1" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input cambioBolsa" type="checkbox" id="cambioBolsa2" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input cambioBolsa" type="checkbox" id="cambioBolsa3" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input cambioBolsa" type="checkbox" id="cambioBolsa4" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input cambioBolsa" type="checkbox" id="cambioBolsa5" value="1" aria-label="...">
										</div>
										</td>
									
								</tr>
								<tr>
									<th scope="row">Enema</th>
									<td class="text-center">
										<div class="form-check form-check-inline grande">
											<input class="form-check-input enema" type="checkbox" id="enema1" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input enema" type="checkbox" id="enema2" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input enema" type="checkbox" id="enema3" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input enema" type="checkbox" id="enema4" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input enema" type="checkbox" id="enema5" value="1" aria-label="...">
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">Vomitos</th>
											<td><input type="text" class="form-control "  name="vomitos" id="vomitos"></td>
								</tr>
								<tr>
									<th scope="row">Otros</th>
											<td><input type="text" class="form-control" name="otros_eliminacion" id="otros_eliminacion"></td>
								</tr>
							</tbody>
					</table>

				</div>
			

				<div class="row mt-5">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
						<button type="button" class="btn btn-success" id="boton-agregar-eliminacion">Alta Eliminación</button>
					</div>
				</div>
            </div>
	
        </div>
 <!-- **FIN** TABLA ELIMINACION PARA RELLENAR -->

 <!-- **INICIO** |3| TABLA ALIMENTACION PARA RELLENAR -->
		<div class="card shadow mb-4" id="ver-tabla-alimentacion" style="display: none; margin-top: 20px;"> 
		   <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

              <a class="btn btn-warning" href="../ficheros-index/registros_en_blanco/registroAlimentacion.pdf" target="_blank">PDF en blanco</a><br>

           </div>

			<div class="card-body">

				<div class="table-responsive">

					<table id="tabla-alimentacion" class="table table-bordered" style="width:100%; ">
						<thead>
							<th scope="col">FECHA:</th>
							<td colspan="1" id="fecha_alimentacion"><input type="text" class="form-control datetimepicker" name="fechaRegistroalimentacion" id="fechaRegistroalimentacion" required></td>
						</thead>

						<thead>

							<tr>
								<!-- <th class="d-none">Fecha ISO</th> -->
								<th scope="col">ACTIVIDAD<br>ALIMENTACIÓN</th>

								<th scope="col">TURNO: <br><select name="turnos" id="turnos_alimentacion" required class="form-control">
									<option value=""> </option>
									<option value="M">M</option>
									<option value="T">T</option>
									<option value="N">N</option>
								</select> </th>

							</tr>

						</thead>
							<tbody>

								<tr>
									<th scope="row">Adecuada</th>
										<td><input type="checkbox" class="form-control " name="adecuada" value="1" id="adecuada"></td>
									
								</tr>
								<tr>
									<th scope="row">Inadecuada</th>
											<td><input type="checkbox" class="form-control " name="inadecuada" value="1" id="inadecuada"></td>
								</tr>
								
								<tr>
									<th scope="row">Observaciones</th>
											<td><input type="text" class="form-control " id="observacion_alimentacion"></td>
								</tr>
							</tbody>
					</table>

				</div>
			

				<div class="row mt-5">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
						<button type="button" class="btn btn-success" id="boton-agregar-alimentacion">Alta Alimentación</button>
					</div>
				</div>
            </div>
	
        </div>
 <!-- **FIN** TABLA ALIMENTACION PARA RELLENAR -->

 <!-- **INICIO** |4| TABLA MOVILIZACION PARA RELLENAR -->
		<div class="card shadow mb-4" id="ver-tabla-movilizacion" style="display: none; margin-top: 20px;"> 
		   <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

              <a class="btn btn-warning" href="../ficheros-index/registros_en_blanco/registroMovilizacion.pdf" target="_blank">PDF en blanco</a><br>

           </div>

			<div class="card-body">

				<div class="table-responsive">

					<table id="tabla-movilizacion" class="table table-bordered" style="width:100%; ">
						<thead>
							<th scope="col">FECHA:</th>
							<td colspan="1" id="fecha_movilizacion"><input type="text" class="form-control datetimepicker" name="fechaRegistromovilizacion" id="fechaRegistromovilizacion" required></td>
						</thead>

						<thead>

							<tr>
								<!-- <th class="d-none">Fecha ISO</th> -->
								<th scope="col">ACTIVIDAD<br>MOVILIZACIÓN</th>

								<th scope="col">TURNO: <br><select name="turnos" id="turnos_movilizacion" required class="form-control">
									<option value=""> </option>
									<option value="M">M</option>
									<option value="T">T</option>
									<option value="N">N</option>
								</select> </th>

							</tr>

						</thead>
							<tbody>

								<tr>
									<th scope="row">RH física</th>
									<td><input type="checkbox" class="form-control " name="rh_fisica" value="1" id="rh_fisica"></td>
									
								</tr>
								<tr>
									<th scope="row">Ejercicios pasivos en cama</th>
									<td><input type="checkbox" class="form-control " name="ejer_cama" value="1" id="ejer_cama"></td>
								</tr>
								<tr>
									<th scope="row">Cambio postural c/2h </th>
									<td class="text-center">
										<div class="form-check form-check-inline grande">
											<input class="form-check-input form-control-lg camPost" type="checkbox" id="camPost1" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input form-control-lg camPost" type="checkbox" id="camPost2" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input form-control-lg camPost" type="checkbox" id="camPost3" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input form-control-lg camPost" type="checkbox" id="camPost4" value="1" aria-label="...">
										</div>
										<div class="form-check form-check-inline grande">
											<input class="form-check-input form-control-lg camPost" type="checkbox" id="camPost5" value="1" aria-label="...">
										</div>
								    </td>
								</tr>
								<tr>
									<th scope="row">Levartar al sillón </th>
									<td><input type="checkbox" class="form-control " name="lev_sillon" value="1" id="lev_sillon"></td>
								</tr>
								<tr>
									<th scope="row">Encamado </th>
									<td><input type="checkbox" class="form-control " name="encamado" value="1" id="encamado"></td>
								</tr>
								
								<tr>
									<th scope="row">Otros</th>
											<td><input type="text" class="form-control " id="otros_movilizacion"></td>
								</tr>
							</tbody>
					</table>

				</div>
			

				<div class="row mt-5">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
						<button type="button" class="btn btn-success" id="boton-agregar-movilizacion">Alta Movilización</button>
					</div>
				</div>
            </div>
	
        </div>
 <!-- **FIN** TABLA MOVILIZACION PARA RELLENAR -->

 <!-- **INICIO** |5| TABLA HIGIENE PARA RELLENAR -->
		<div class="card shadow mb-4" id="ver-tabla-higiene" style="display: none; margin-top: 20px;"> 
		   <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

              <a class="btn btn-warning" href="../ficheros-index/registros_en_blanco/registroHigiene.pdf" target="_blank">PDF en blanco</a><br>

           </div>

			<div class="card-body">

				<div class="table-responsive">

					<table id="tabla-higiene" class="table table-bordered" style="width:100%; ">
						<thead>
							<th scope="col">FECHA:</th>
							<td colspan="1" id="fecha_higiene"><input type="text" class="form-control datetimepicker" name="fechaRegistrohigiene" id="fechaRegistrohigiene" required></td>
						</thead>

						<thead>

							<tr>
								<!-- <th class="d-none">Fecha ISO</th> -->
								<th scope="col">ACTIVIDAD<br>HIGIENE</th>

								<th scope="col">TURNO: <br><select name="turnos" id="turnos_higiene" required class="form-control">
									<option value=""> </option>
									<option value="M">M</option>
									<option value="T">T</option>
									<option value="N">N</option>
								</select> </th>

							</tr>

						</thead>
							<tbody>

								<tr>
									<th scope="row">Baño/ducha</th>
									<td><input type="checkbox" class="form-control " name="bano_ducha"  id="bano_ducha"></td>
									
								</tr>
								<tr>
									<th scope="row">Aseo</th>
									<td><input type="checkbox" class="form-control " name="aseo"  id="aseo"></td>
								</tr>
								<tr>
									<th scope="row">Higiene bucal</th>
									<td><input type="checkbox" class="form-control " name="h_bucal"  id="h_bucal"></td>
								</tr>
								<tr>
									<th scope="row">Uñas manos</th>
									<td><input type="checkbox" class="form-control " name="u_manos"  id="u_manos"></td>
								</tr>
								<tr>
									<th scope="row">Uñas pies</th>
									<td><input type="checkbox" class="form-control " name="u_pies"  id="u_pies"></td>
								</tr>

								<tr>
									<th scope="row">Afeitado</th>
									<td><input type="checkbox" class="form-control " name="afeitado"  id="afeitado"></td>
								</tr>

								<tr>
									<th scope="row">Higiene genital</th>
									<td><input type="checkbox" class="form-control " name="h_genital"  id="h_genital"></td>
								</tr>
								<tr>
									<th scope="row">Vestido</th>
									<td><input type="checkbox" class="form-control " name="vestido"  id="vestido"></td>
								</tr>
								
								<tr>
									<th scope="row">Otros</th>
											<td><input type="text" class="form-control " id="otros_higiene"></td>
								</tr>
							</tbody>
					</table>

				</div>
			

				<div class="row mt-5">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
						<button type="button" class="btn btn-success" id="boton-agregar-higiene">Alta Higiene</button>
					</div>
				</div>
            </div>
	
        </div>
 <!-- **FIN** TABLA HIGIENE PARA RELLENAR -->

  <!-- **INICIO** |6| TABLA MEDICACION PARA RELLENAR -->
  <div class="card shadow mb-4" id="ver-tabla-medicacion" style="display: none; margin-top: 20px;"> 
    <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

              <a class="btn btn-warning" href="../ficheros-index/registros_en_blanco/registroMedicacion.pdf" target="_blank">PDF en blanco</a><br>

           </div>

   <div class="card-body">

	<div class="table-responsive">

		<table id="tabla-medicacion" class="table table-bordered" style="width:100%; ">
			<thead>
				<th scope="col">FECHA:</th>
				<td colspan="1" id="fecha_medicacion"><input type="text" class="form-control datetimepicker" name="fechaRegistromedicacion" id="fechaRegistromedicacion" required></td>
			</thead>

			<thead>

				<tr>
					<!-- <th class="d-none">Fecha ISO</th> -->
					<th scope="col">ACTIVIDAD<br>MEDICACIÓN</th>

					<th scope="col">TURNO: <br><select name="turnos" id="turnos_medicacion" required class="form-control">
						<option value=""> </option>
						<option value="M">M</option>
						<option value="T">T</option>
						<option value="N">N</option>
					</select> </th>

				</tr>

			</thead>
				<tbody>

					<tr>
						<th scope="row">Oral</th>
						<td><input type="checkbox" class="form-control " name="oral" value="si" id="oral"></td>
						
					</tr>
					<tr>
						<th scope="row">Tópica </th>
						<td><input type="checkbox" class="form-control " name="topica" value="si" id="topica"></td>
					</tr>
					<tr>
						<th scope="row">Rectal</th>
						<td><input type="checkbox" class="form-control " name="rectal" value="si" id="rectal"></td>
					</tr>
					<tr>
						<th scope="row">Inhaladores</th>
						<td><input type="checkbox" class="form-control " name="inhalador" value="si" id="inhalador"></td>
					</tr>
					<tr>
						<th scope="row">Gotas óticas</th>
						<td><input type="checkbox" class="form-control " name="g_otica" value="si" id="g_otica"></td>
					</tr>

					<tr>
						<th scope="row">Gotas oftálmicas</th>
						<td><input type="checkbox" class="form-control " name="g_oftalmica" value="si" id="g_oftalmica"></td>
					</tr>

					<tr>
						<th scope="row">Gotas nasales</th>
						<td><input type="checkbox" class="form-control " name="g_nasal" value="si" id="g_nasal"></td>
					</tr>
					
					<tr>
						<th scope="row">Otros</th>
								<td><input type="text" class="form-control " id="otrosMedicacion"></td>
					</tr>
				</tbody>
		</table>

	</div>

	<div class="row mt-5">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
			<button type="button" class="btn btn-success" id="boton-agregar-medicacion">Alta medicacion</button>
		</div>
	</div>
</div>

</div>
<!-- **FIN** TABLA MEDICACION PARA RELLENAR -->


<!-- **INICIO** |7| TABLA DESCANSO/SUEÑO PARA RELLENAR -->
		<div class="card shadow mb-4" id="ver-tabla-descanso" style="display: none; margin-top: 20px;"> 

		   <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

              <a class="btn btn-warning" href="../ficheros-index/registros_en_blanco/registroDescanso.pdf" target="_blank">PDF en blanco</a><br>

           </div>

			<div class="card-body">

				<div class="table-responsive">

					<table id="tabla-descanso" class="table table-bordered" style="width:100%; ">
						<thead>
							<th scope="col">FECHA:</th>
							<td colspan="1" id="fecha_descanso"><input type="text" class="form-control datetimepicker" name="fechaRegistroDescanso" id="fechaRegistroDescanso" required></td>
						</thead>

						<thead>

							<tr>
								<!-- <th class="d-none">Fecha ISO</th> -->
								<th scope="col">ACTIVIDAD<br>SUEÑO(Nº HORAS)</th>

								<th scope="col">TURNO: <br>
								   <select name="turnos" id="turnos_descanso" required class="form-control">
									  <option value=""> </option>
									  <option value="M">M</option>
									  <option value="T">T</option>
									  <option value="N">N</option>
								   </select> </th>
								</tr>

							</thead>
							<tbody>

								<tr>
									<th scope="row">Nocturno</th>
										<td><input type="text" class="form-control" id="nocturnoHoras"></td>							
								</tr>
								<tr>
									<th scope="row">Siesta</th>
											<td><input type="text" class="form-control" id="siestaHoras"></td>			
								</tr>
							</tbody>
					</table>

				</div>
			

				<div class="row mt-5">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
						<button type="button" class="btn btn-success" id="boton-agregar-descanso">Alta Descanso</button>
					</div>
				</div>
            </div>
	
        </div>
 <!-- **FIN** TABLA DESCANSO/SUEÑO PARA RELLENAR -->

 <!-- **INICIO** |8| TABLA INCIDENCIA PARA RELLENAR -->
 <div class="card shadow mb-4" id="ver-tabla-incidencia" style="display: none; margin-top: 20px;"> 
          <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

              <a class="btn btn-warning" href="../ficheros-index/registros_en_blanco/registroIncidencia.pdf" target="_blank">PDF en blanco</a><br>

           </div>

  <div class="card-body">

	<div class="table-responsive">

		<table id="tabla-incidencia" class="table table-bordered" style="width:100%; ">
			<thead>
				<th scope="col">FECHA:</th>
				<td colspan="1" id="fecha_incidencia"><input type="text" class="form-control datetimepicker" name="fechaRegistroincidencia" id="fechaRegistroincidencia" required></td>
			</thead>

			<thead>

				<tr>
					<!-- <th class="d-none">Fecha ISO</th> -->
					<th scope="col">ACTIVIDAD<br>INCIDENCIAS</th>

					<th scope="col">TURNO: <br>
					   <select name="turnos" id="turnos_incidencia" required class="form-control">
						  <option value=""> </option>
						  <option value="M">M</option>
						  <option value="T">T</option>
						  <option value="N">N</option>
					   </select> </th>
					</tr>

				</thead>
				<tbody>
					<tr>
						<th scope="row">Incidencias</th>
							<td><input type="text" class="form-control" id="incidencia_text"></td>							
					</tr>
				</tbody>
		</table>

	</div>

	<div class="row mt-5">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
			<button type="button" class="btn btn-success" id="boton-agregar-incidencia">Alta Incidencia</button>
		</div>
	</div>
</div>

</div>
<!-- **FIN** TABLA INCIDENCIA PARA RELLENAR -->

	</div>



</div>
