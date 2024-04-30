<!-- MODIFICAR PLAN DE ATENCION INDIVIDUALIZADO -->
<div id="ver-modificar-plan" class="seccion-menu residenteView" style="display: none;">
    <div class=" align-items-center justify-content-between text-center mb-3">
        <h1 class="h3 mb-0 text-gray-800">Modificar Plan de Atención Individualizado</h1>
    </div>

    <?php 
       include('busqueda_residente.php'); 
	?>

    <div class="seccionOcultableResidentes mt-1" id="seccionPai" style="display: none;">
        <div class="form" id="formulario-pai">
            <!-- Datos Residente -->
            <div class="card shadow" id="ver-tabla-datos" style="width:80%;margin-left:10%;">
                <div class="card-body">
                    <div class="row text-right">
                        <div class="col-xl-6 col-lg-5 col-md-4 col-sm-4"></div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-form-label-sm">
                            <label class="font-weight-bold text-gray-800" for="n_expediente">Número de
                                Expediente:</label>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                            <div class="input-group form-group">
                                <input type="text" name="n_expediente" class="form-control form-control-sm"
                                    placeholder="" readonly>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
                    </div>

                    <div class="row" style="margin-top:-15px;">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <label for="nombre-residente-pai"
                                class="col-form-label-sm font-weight-bold text-gray-800">Nombre y Apellidos:</label>
                            <div class="input-group form-group" style="margin-top:-10px;">
                                <input type="text" class="form-control form-control-sm" name="nombre-residente-pai"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <label for="responasable-pai"
                                class="col-form-label-sm font-weight-bold text-gray-800">Profesional de
                                Referencia:</label>
                            <div class="input-group form-group" style="margin-top:-10px;">
                                <select class="form-control form-control-sm responsableResidente"
                                    name="responasable-pai" readonly>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top:-15px;">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <label for="grado_dependencia"
                                class="col-form-label-sm font-weight-bold text-gray-800">Grado de dependencia:</label>
                            <div class="input-group form-group" style="margin-top:-10px;">
                                <select class="form-control form-control-sm" name="grado_dependencia">
                                    <option value="0">Seleccione Grado de Dependencia:</option>
                                    <option value="1">Grado I: Dependencia Moderada</option>
                                    <option value="2">Grado II: Dependencia Severa</option>
                                    <option value="3">Grado III: Gran Dependecia</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <label for="incapacidad_legal"
                                class="col-form-label-sm font-weight-bold text-gray-800">Incapacidad legal:</label>
                            <div class="input-group form-group" style="margin-top:-10px;">
                                <select class="form-control form-control-sm" name="incapacidad_legal"
                                    id="incapacidad_legal">
                                    <option value="">Elegir</option>
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top:-15px;">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <label for="fecha-alta-pai" class="col-form-label-sm font-weight-bold text-gray-800">Fecha
                                de Ingreso:</label>
                            <div class="input-group form-group" style="margin-top:-10px;">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" name="fecha-alta-pai" readonly>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <label for="fecha-elaboracion-pai"
                                class="col-form-label-sm font-weight-bold text-gray-800">Fecha de Elaboración:</label>
                            <div class="input-group form-group" style="margin-top:-10px;">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text"><i class="fa fa-calendar-minus-o"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" name="fecha-elaboracion-pai"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <label for="fecha-evaluacion-pai"
                                class="col-form-label-sm font-weight-bold text-gray-800">Fecha de Evaluación:</label>
                            <div class="input-group form-group" style="margin-top:-10px;">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text"><i class="fa fa-calendar-check-o"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" name="fecha-evaluacion-pai"
                                    readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="nav nav-pills nav-fill mt-5" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="sociosanitarios-tab" data-toggle="pill" href="#pills-sociosanitarios"
                        role="tab" aria-controls="pills-sociosanitarios" aria-selected="true">Datos Sociosanitarios</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="social-tab" data-toggle="pill" href="#pills-social" role="tab"
                        aria-controls="pills-social" aria-selected="false">Área Social</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="sanitaria-tab" data-toggle="pill" href="#pills-sanitaria" role="tab"
                        aria-controls="pills-sanitaria" aria-selected="false">Área Sanitaria</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="psicologica-tab" data-toggle="pill" href="#pills-psicologica" role="tab"
                        aria-controls="pills-psicologica" aria-selected="false">Área Psicológica</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="funcional-tab" data-toggle="pill" href="#pills-funcional" role="tab"
                        aria-controls="pills-funcional" aria-selected="false">Área Funcional</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="sociocultural-tab" data-toggle="pill" href="#pills-sociocultural" role="tab"
                        aria-controls="pills-sociocultural" aria-selected="false">Área Animación Sociocultural</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="indices-tab" data-toggle="pill" href="#pills-indices" role="tab"
                        aria-controls="pills-indices" aria-selected="false">Índices</a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active mt-3" id="pills-sociosanitarios" role="tabpanel"
                    aria-labelledby="pills-sociosanitarios">
                    <div class="accordion accordion-group datosSociosanitarios" id="datosSociosanitariosAccordion">
                        <div class="card shadow">
                            <div class="card-header" id="otrosDatosHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseOtrosDatos" aria-expanded="true"
                                        aria-controls="collapseOtrosDatos">
                                        Otros Datos del Usuario
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseOtrosDatos" class="collapse" aria-labelledby="otrosDatosHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                            <label for="fecha_nacimiento"
                                                class="col-form-label font-weight-bold text-gray-800">Fecha de
                                                Nacimiento:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm"
                                                    name="fecha_nacimiento" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                            <label for="lugarNacimiento"
                                                class="col-form-label font-weight-bold text-gray-800">Lugar de
                                                Nacimiento:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control anadir" name="lugarNacimiento">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                            <label for="EstadoCivil"
                                                class="col-form-label font-weight-bold text-gray-800">Estado
                                                Civil:</label>
                                            <div class="input-group">
                                                <select class="form-control anadir selectConOtras" name="EstadoCivil">
                                                    <option value="">Elegir</option>
                                                    <option>Soltero/a</option>
                                                    <option>Casado/a</option>
                                                    <option>Separado/a</option>
                                                    <option>Divorciado/a</option>
                                                    <option>Viudo/a</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group ">
                                                <input type="text" name="otrasEstadoCivil" id="otrasEstadoCivil"
                                                    class="form-control anadir d-none ocultable inputOtras"
                                                    placeholder="Especifique Otro Estado Civil">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                            <label for="dni_residente"
                                                class="col-form-label font-weight-bold text-gray-800">Nº de DNI:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="dni_residente" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                            <label for="NSS" class="col-form-label font-weight-bold text-gray-800">Nº
                                                Seguridad Social:</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control anadir" name="NSS" id="NSS">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="centroSalud"
                                                class="col-form-label font-weight-bold text-gray-800">Centro de Salud y
                                                Personal Sanitario de Referencia:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control anadir" name="centroSalud">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="famContactoHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold"
                                        title="pulsar para desplegar" type="button" data-toggle="collapse"
                                        data-target="#collapseFamContacto" aria-expanded="true"
                                        aria-controls="collapseFamContacto">
                                        Datos del Familiar de Contacto
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseFamContacto" class="collapse" aria-labelledby="famContactoHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="nombre-familiar-pai"
                                                class="col-form-label font-weight-bold text-gray-800">Nombre y
                                                Apellidos:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="nombre-familiar-pai"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="direccion_postal"
                                                class="col-form-label font-weight-bold text-gray-800">Dirección:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="direccion_postal"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 col-sm-12">
                                            <label for="codigo_postal"
                                                class="col-form-label font-weight-bold text-gray-800">Codigo
                                                Postal:</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="codigo_postal" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="email"
                                                class="col-form-label font-weight-bold text-gray-800">Email:</label>
                                            <div class="input-group">
                                                <input type="mail" class="form-control" name="email" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                            <label for="telefono"
                                                class="col-form-label font-weight-bold text-gray-800">Nº de
                                                Teléfono:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="telefono" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                            <label for="dni_familiar"
                                                class="col-form-label font-weight-bold text-gray-800">Nº de DNI:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="dni_familiar" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 col-sm-12">
                                            <label for="parentesco"
                                                class="col-form-label font-weight-bold text-gray-800">Parentesco:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="parentesco" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="otrosFamContactoHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseOtrosFamContacto"
                                        aria-expanded="true" aria-controls="collapseOtrosFamContacto">
                                        Datos Otros Familiares
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseOtrosFamContacto" class="collapse"
                                aria-labelledby="otrosFamContactoHeader">
                                <div class="card-body">
                                    <div class="row mt-3">
                                        <div class="form-check">
                                            <div class=" col-12 form-check">
                                                <input type="checkbox" class="form-check-input" id="otroFamiliar">
                                                <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                    for="otroFamiliar">Añadir datos de otro familiar</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="nombre-otros-pai"
                                                class="col-form-label font-weight-bold text-gray-800">Nombre:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control datosOtroFamiliar"
                                                    name="nombre-otros-pai" id="nombre-otros-pai" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="apellidos-otros-pai"
                                                class="col-form-label font-weight-bold text-gray-800">Apellidos:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control datosOtroFamiliar"
                                                    name="apellidos-otros-pai" id="apellidos-otros-pai" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="dni-otros-pai"
                                                class="col-form-label font-weight-bold text-gray-800">DNI:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control datosOtroFamiliar"
                                                    name="dni-otros-pai" id="dni-otros-pai" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="telefono-otros-pai"
                                                class="col-form-label font-weight-bold text-gray-800">Nº de
                                                Teléfono:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control datosOtroFamiliar"
                                                    name="telefono-otros-pai" id="telefono-otros-pai" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="parentesco-otros-pai"
                                                class="col-form-label font-weight-bold text-gray-800">Parentesco:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control datosOtroFamiliar"
                                                    name="parentesco-otros-pai" id="parentesco-otros-pai" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="otrosBiografiaHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseOtrosBiografia"
                                        aria-expanded="true" aria-controls="collapseOtrosBiografia">
                                        Otros Datos Biográficos
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseOtrosBiografia" class="collapse" aria-labelledby="otrosBiografiaHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="antecedentesLaborales"
                                                class="col-form-label font-weight-bold text-gray-800">Antecedentes
                                                laborales:</label>
                                            <div class="input-group">
                                                <textarea class="form-control anadir rounded-1"
                                                    name="antecedentesLaborales" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="formacion"
                                                class="col-form-label font-weight-bold text-gray-800">Nivel de Formación
                                                y Estudios:</label>
                                            <div class="input-group">
                                                <textarea class="form-control anadir rounded-1" name="formacion"
                                                    rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="historiaVida"
                                                class="col-form-label font-weight-bold text-gray-800">Historia de
                                                vida:</label>
                                            <div class="input-group">
                                                <textarea class="form-control anadir rounded-1" name="historiaVida"
                                                    rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="otrosDatosBiografia"
                                                class="col-form-label font-weight-bold text-gray-800">Otros:</label>
                                            <div class="input-group">
                                                <textarea class="form-control anadir rounded-1"
                                                    name="otrosDatosBiografia" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade mt-3" id="pills-social" role="tabpanel" aria-labelledby="social-tab">
                    <div class="accordion accordion-group areaSocial" id="areaSocialAccordion">
                        <div class="card shadow">
                            <div class="card-header" id="situacionLegalHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseSituacionLegal"
                                        aria-expanded="true" aria-controls="collapseSituacionLegal">
                                        Situación Legal y de Desprotección
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseSituacionLegal" class="collapse" aria-labelledby="situacionLegalHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="Autodeterminacion"
                                                class="col-form-label font-weight-bold text-gray-800">Capacidad de
                                                Autodeterminación:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="Autodeterminacion">
                                                    <option value="">Elegir</option>
                                                    <option>Toma decisiones sobre las AVD</option>
                                                    <option>Necesita pequeñas ayudas en las AVD</option>
                                                    <option>Necesita que otros decidan por él/ella</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="FacultadesMentales"
                                                class="col-form-label font-weight-bold text-gray-800">En Pleno Uso de
                                                sus Facultades Mentales:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="FacultadesMentales">
                                                    <option value="">Elegir</option>
                                                    <option>Autónomo en la toma de decisiones</option>
                                                    <option>Sus familiares toman las decisiones por él/ella</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group ">
                                                <input type="text" name="otrasAutodeterminacion"
                                                    id="otrasAutodeterminacion"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Otras Capacidad Autodeterminanción">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group ">
                                                <input type="text" name="otrasFacultadesMentales"
                                                    id="otrasFacultadesMentales"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Otras Facultades Mentales">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="ultimasVoluntades"
                                                class="col-form-label font-weight-bold text-gray-800">Existencia de
                                                Documento de Últimas Voluntades:</label>
                                            <div class="input-group">
                                                <select class="form-control" name="ultimasVoluntades">
                                                    <option value="">Elegir</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="situacionDesproteccion"
                                                class="col-form-label font-weight-bold text-gray-800">Situación de
                                                Desprotección:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="situacionDesproteccion"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="otrasSituacionLegal"
                                                class="col-form-label font-weight-bold text-gray-800">Otras:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="otrasSituacionLegal"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="habitosOcioHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold"
                                        title="pulsar para desplegar" type="button" data-toggle="collapse"
                                        data-target="#collapseHabitosOcio" aria-expanded="true"
                                        aria-controls="collapseHabitosOcio">
                                        Hábitos de Ocio
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseHabitosOcio" class="collapse" aria-labelledby="habitosOcioHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="HabitosOcio"
                                                class="col-form-label font-weight-bold text-gray-800">Hábitos de
                                                Ocio:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="HabitosOcio">
                                                    <option value="">Elegir</option>
                                                    <option>Le gustan las actividades en grupo</option>
                                                    <option>No le gustan las actividades en grupo</option>
                                                    <option>Le gustan las actvidades individuales</option>
                                                    <option value="otras">Otros</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group">
                                                <input type="text" name="otrasHabitosOcio" id="otrasHabitosOcio"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Otros Hábitos de Ocio">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="creenciasHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseCreencias" aria-expanded="true"
                                        aria-controls="collapseCreencias">
                                        Creencias y Valores
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseCreencias" class="collapse" aria-labelledby="creenciasHeader">
                                <div class="card-body">
                                    <div class="row  checkbox-row creenciasCheckbox">
                                        <div class="form-check">
                                            <div class=" col-12 form-check  mt-2">
                                                <input type="checkbox" class="form-check-input" id="creyente">
                                                <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                    for="creyente">Posee Creencias Religiosas</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 mt-2">
                                            <div class="input-group">
                                                <input type="text" name="poseeCreencias" id="poseeCreencias"
                                                    class="form-control d-none ocultable" placeholder="¿Cuáles?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row  checkbox-row creenciasCheckbox">
                                        <div class="form-check">
                                            <div class=" col-12 form-check">
                                                <input type="checkbox" class="form-check-input" id="acudeServicios">
                                                <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                    for="acudeServicios">Acude a Servicios religiosos</label>
                                            </div>
                                            <div class="form-group col-12 mt-2 d-none ocultable"
                                                id="frecuenciaServicioSelect">
                                                <div class="input-group">
                                                    <label class="form-label mr-3" for="FrecuenciaServicio">Indique
                                                        frecuencia: </label>
                                                    <select class="form-control selectConOtras"
                                                        name="FrecuenciaServicio">
                                                        <option value="">Elegir Frecuencia</option>
                                                        <option>Diaria</option>
                                                        <option>Dominical</option>
                                                        <option>Esporádica</option>
                                                        <option value="otras">Otras</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <div class="input-group">
                                                <input type="text" name="otrasFrecuenciaServicio"
                                                    id="otrasFrecuenciaServicio"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Frecuencia Asistenia Servicos Religiosos">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row  checkbox-row creenciasCheckbox">
                                        <div class="form-check">
                                            <div class=" col-12 form-check mt-1">
                                                <input type="checkbox" class="form-check-input" id="noCreyente">
                                                <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                    for="noCreyente">Sin Creencias específicas</label>
                                            </div>
                                            <div class=" col-12 form-check  mt-4">
                                                <input type="checkbox" class="form-check-input" id="otrasCreencias">
                                                <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                    for="otrasCreencias">Otras</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 mt-3">
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1 d-none ocultable inputOtras"
                                                    name="otrasAreaCreencias" id="otrasAreaCreencias" rows="3"
                                                    placeholder="Espeficique Otras Creencias"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="gestionesadministrativasHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold"
                                        title="pulsar para desplegar" type="button" data-toggle="collapse"
                                        data-target="#collapseGestionesAdministrativas" aria-expanded="true"
                                        aria-controls="collapseGestionesAdministrativas">
                                        Gestiones Administrativas
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseGestionesAdministrativas" class="collapse"
                                aria-labelledby="gestionesadministrativasHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="gestionesAdministrativas"
                                                class="col-form-label font-weight-bold text-gray-800">Gestiones
                                                Administrativas:</label>
                                            <div class="input-group">
                                                <select class="form-control" name="gestionesAdministrativas">
                                                    <option value="">Elegir</option>
                                                    <option>Puede realizarlas de manera autónoma</option>
                                                    <option>Puede realizarlas con pequeñas ayudas</option>
                                                    <option>Puede realizarlas con acompañamiento</option>
                                                    <option>Necesita grandes ayudas para realizarlas</option>
                                                    <option>Necesita otras personas para realizarlas</option>
                                                    <option value="gestiones">Gestiones que no puede realizar sin ayuda
                                                        externa</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group">
                                                <input type="text" name="otrasGestionesAdministrativas"
                                                    id="otrasGestionesAdministrativas"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Ayuda Gestiones Administrativas">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1 d-none ocultable inputOtras"
                                                    name="detalleGestiones" id="detalleGestiones" rows="2"
                                                    placeholder="Detalle las gestiones para las que necesita ayuda externa"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="interrelacionSocialHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold"
                                        title="pulsar para desplegar" type="button" data-toggle="collapse"
                                        data-target="#collapseInterrelacionSocial" aria-expanded="true"
                                        aria-controls="collapseInterrelacionSocial">
                                        Interrelación Social y Familiar
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseInterrelacionSocial" class="collapse"
                                aria-labelledby="interrelacionSocialHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="ConvivenciaAnterior"
                                                class="col-form-label font-weight-bold text-gray-800">Convivencia
                                                anterior al ingreso:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="ConvivenciaAnterior">
                                                    <option value="">Elegir</option>
                                                    <option>Vivía con su pareja</option>
                                                    <option>Vivía con sus hijos/as</option>
                                                    <option>Vivía sola/o</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group">
                                                <input type="text" name="otrasConvivenciaAnterior"
                                                    id="otrasConvivenciaAnterior"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Convivencia Anterior al Ingreso">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <label for="causasIngreso"
                                                class="col-form-label font-weight-bold text-gray-800">Causas del
                                                ingreso:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="causasIngreso"
                                                    id="causasIngreso" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="RedSocial"
                                                class="col-form-label font-weight-bold text-gray-800">A nivel
                                                social:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="RedSocial">
                                                    <option value="">Elegir</option>
                                                    <option>Tiene una red social sólida y estable</option>
                                                    <option>No mantiene red social</option>
                                                    <option>Le cuesta mantener relaciones con otras personas</option>
                                                    <option>No se relaciona con nadie</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="redFamiliar"
                                                class="col-form-label font-weight-bold text-gray-800">A nivel
                                                familiar:</label>
                                            <div class="input-group">
                                                <select class="form-control" name="redFamiliar">
                                                    <option value="">Elegir</option>
                                                    <option>Hijos/as que viven cerca y le visitan con frecuencia
                                                    </option>
                                                    <option>Hijos/as que viven cerca pero no le visitan con frecuencia
                                                    </option>
                                                    <option>Hijos/as que viven lejos y le visitan a menudo</option>
                                                    <option>Hijos/as que viven lejos y no le visitan demasiado</option>
                                                    <option>Hijos/as que no le visitan</option>
                                                    <option value="familiares">Recibe visitas de otros familiares
                                                    </option>
                                                    <option>Familiares e hijos no visitan con frecuencia, pero hablan a
                                                        diario</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group">
                                                <input type="text" name="otrasRedSocial" id="otrasRedSocial"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Otras Red social">
                                            </div>
                                        </div>

                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group">
                                                <input type="text" name="otrasRedFamiliar" id="otrasRedFamiliar"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Otras Red familiar">
                                                <input type="text" name="familiaresRedFamiliar"
                                                    id="familiaresRedFamiliar"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique qué familiares lo visitan y con qué frecuencia">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="regimenSalidas"
                                                class="col-form-label font-weight-bold text-gray-800">Régimen de
                                                Salidas:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="regimenSalidas"
                                                    id="regimenSalidas" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                            <label for="regimenVisitas"
                                                class="col-form-label font-weight-bold text-gray-800">Régimen de
                                                Visitas:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="regimenVisitas"
                                                    id="regimenVisitas" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                            <label for="otrasIniciativa"
                                                class="col-form-label font-weight-bold text-gray-800">Otras:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="otrasIniciativa"
                                                    id="otrasIniciativa" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="participacionHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold"
                                        title="pulsar para desplegar" type="button" data-toggle="collapse"
                                        data-target="#collapseParticipacion" aria-expanded="true"
                                        aria-controls="collapseParticipacion">
                                        Iniciativa y Participación
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseParticipacion" class="collapse" aria-labelledby="participacionHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="IniciativaSocial"
                                                class="col-form-label font-weight-bold text-gray-800">Iniciativa y
                                                Participación:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="IniciativaSocial">
                                                    <option value="">Elegir</option>
                                                    <option>Participa en las actividades de forma libre y autónoma
                                                    </option>
                                                    <option>Participa en las actividades si se le plantean directamente
                                                    </option>
                                                    <option>Hay que insistir mucho para que participe en las actividades
                                                    </option>
                                                    <option>Acude a las actividades, pero no participa, solo observa la
                                                        actividad</option>
                                                    <option>No participa en ninguna actividad</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group">
                                                <input type="text" name="otrasIniciativaSocial"
                                                    id="otrasIniciativaSocial"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Otras Iniciativa Social">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow areaSocial">
                        <div class="card-header">
                            <div class="row">
                                <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <label for="objetivosAreaSocial"
                                        class="col-form-label font-weight-bold text-gray-800">Objetivos:</label>
                                    <div class="input-group">
                                        <textarea class="form-control rounded-1" name="objetivosAreaSocial"
                                            id="objetivosAreaSocial" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <label for="accionesAreaSocial"
                                        class="col-form-label font-weight-bold text-gray-800">Acciones e
                                        Intervenciones:</label>
                                    <div class="input-group">
                                        <textarea class="form-control rounded-1" name="accionesAreaSocial"
                                            id="accionesAreaSocial" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <label for="responsableAreaSocial"
                                        class="col-form-label font-weight-bold text-gray-800">Responsable:</label>
                                    <div class="input-group">
                                        <textarea class="form-control rounded-1" name="responsableAreaSocial"
                                            id="responsableAreaSocial" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade mt-3" id="pills-sanitaria" role="tabpanel" aria-labelledby="sanitaria-tab">
                    <div class="accordion accordion-group areaSanitaria" id="areaSanitariaAccordion">
                        <div class="card shadow">
                            <div class="card-header" id="SituacionSanitariaHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseSituacionSanitaria"
                                        aria-expanded="true" aria-controls="collapseSituacionSanitaria">
                                        Situación Sanitaria
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseSituacionSanitaria" class="collapse"
                                aria-labelledby="SituacionSanitariaHeader">
                                <div class="card-body">
                                    <label class="col-form-label font-weight-bold text-gray-800">Antecedentes:</label>
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="enfermedades" class="col-form-label">Enfermedades:</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control rounded-1" name="enfermedades"
                                                        id="enfermedades" rows="6"></textarea>
                                                    </div>
                                            </div>
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="intervencionesQuirurgicas" class="col-form-label">Intervenciones Quirúrgicas:</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control rounded-1"
                                                            name="intervencionesQuirurgicas" id="intervencionesQuirurgicas"
                                                            rows="6"></textarea>
                                                    </div>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="ingresosHospitalarios" class="col-form-label">Ingresos Hospitalarios:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="ingresosHospitalarios"
                                                    id="ingresosHospitalarios" rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="otrasSituacioSanitaria"
                                                class="col-form-label">Otras:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="otrasSituacioSanitaria"
                                                    id="otrasSituacioSanitaria" rows="6"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="tratamientosHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold"
                                        title="pulsar para desplegar" type="button" data-toggle="collapse"
                                        data-target="#collapseTratamiento" aria-expanded="true"
                                        aria-controls="collapseTratamiento">
                                        Tratamientos
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseTratamiento" class="collapse" aria-labelledby="tratamientosHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table id="tabla-medTratam-res-pai" class="table table-striped table-bordered d-none"
                                                style="width:80%; margin-left:10%; ">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Tipo</th>
                                                        <th>Via de administración</th>
                                                        <th>Forma farmacéutica</th>
                                                        <th>Cantidad</th>
                                                        <th>Desayuno</th>
                                                        <th>Comida</th>
                                                        <th>Cena</th>
                                                        <th>Otros</th>
                                                        <th>Fecha Inicio</th>
                                                        <th>Fecha Fin</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="card shadow">
                            <div class="card-header" id="MedicacionActualHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseMedicacionActual"
                                        aria-expanded="true" aria-controls="collapseMedicacionActual">
                                        Medicación actual
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseMedicacionActual" class="collapse"
                                aria-labelledby="MedicacionActualHeader">
                                <div class="card-body">
                                            <div class="row">
                                                <div class="table-responsive">
                                                    <table id="tabla-medicacion-res-pai" class="table table-striped table-bordered d-none"
                                                        style="width:80%; margin-left:10%; ">
                                                        <thead>
                                                            <tr>
                                                            <th>Nombre</th>
                                                            <th>Tipo</th>
                                                            <th>Via de administración</th>
                                                            <th>Forma farmacéutica</th>
                                                            <th>Cantidad</th>
                                                            <th>Desayuno</th>
                                                            <th>Comida</th>
                                                            <th>Cena</th>
                                                            <th>Otros</th>
                                                            <th>Fecha Inicio</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="d-none flex-row-reverse d-flex text-center" id="div-btn-vaciar-medic-pai">         
                                                <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                                    <button type="button" class="btn btn-danger d-none" id="btn-empty-medic-pai" style="cursor: pointer !important;">Vaciar medicación</button>
                                                </div>
                                            </div>

                                        <!-- <div class="row mt-4">
                                            <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                                <button type="button" class="btn btn-primary" id="btn-new-medic-pai" style="cursor: pointer !important;">Añadir medicación</button>
                                            </div>
                                        </div> -->
<!-- 
                                        <div class="row d-none" id="form-medic-1-pai">
                                        <div class="mt-4 col-xl-3 col-lg-3 col-md-10 col-sm-10">
                                            <div class="input-group mb-3">
                                                <select class="custom-select" id="medicacion-pai">
                                                    <option value="">Selecciona medicación: </option>
                                                    <option value="analgesico">Analgésicos</option>
                                                    <option value="antiacido">Antiácidos y antiulcerosos</option>
                                                    <option value="antialergico">Antialérgicos</option>
                                                    <option value="antidiarrea">Antidiarreicos y laxantes</option>
                                                    <optgroup label="Antiinfecciosos">
                                                        <option value="antibiotico">Antibióticos</option>
                                                        <option value="antifungico">Antifúngicos</option>
                                                        <option value="antiviral">Antivirales</option>
                                                        <option value="antiparasito">Antiparasitarios</option>
                                                    </optgroup>
                                                    <option value="antiinflamo">Antiinflamatorios</option>
                                                    <option value="antipire">Antipiréticos</option>
                                                    <option value="antitusi">Antitusivos y mucolíticos</option>
                                                    <option value="antidepre">Antidepresivos y ansiolíticos</option>
                                                    <option value="insomio">Insomnio</option>
                                                    <option value="artrosis">Artrosis</option>
                                                    <option value="hipertension">Hipertensión</option>
                                                    <option value="colesterol">Colesterol</option>
                                                    <option value="anticoago">Anticoagulantes</option>
                                                    <option value="diuretico">Diuréticos</option>
                                                    <option value="vitamina">Vitamínicos</option>
                                                    <option value="insuficiente">Insuficiencia respiratoria</option>
                                                    <optgroup label="Fármacos Sistema Nervioso">
                                                        <option value="hipnotico">Hipnóticos y trastorno del sueño</option>
                                                        <option value="psicoestimulantes">Psicoestimulantes</option>
                                                        <option value="antipsicotico">Antipsicóticos o neurolépticos</option>
                                                        <option value="antiepileptico">Antiepilépticos</option>
                                                        <option value="antiparkinsoniano">Antiparkinsonianos</option>
                                                        <option value="demencia">Demencia (Alzheimer)</option>
                                                        <option value="anestesico">Anestésicos</option>
                                                        <option value="antiseptico">Antisépticos y ansiolíticos</option>
                                                    </optgroup>
                                                    <optgroup label="Anticonceptivos">
                                                        <optgroup label="&nbsp;&nbsp;Uso externo">
                                                            <option value="Preservativo masculino">Preservativo masculino</option>
                                                            <option value="Preservativo femenino">Preservativo femenino</option>
                                                        </optgroup>
                                                    <option value="Orales">&nbsp;&nbsp;&nbsp;Orales</option>
                                                    <option value="Parches">&nbsp;&nbsp;&nbsp;Parches (intradérmicos)</option>
                                                    <option value="Inyectables">&nbsp;&nbsp;&nbsp;Inyectables</option>
                                                        <optgroup label="&nbsp;&nbsp;Intragenitales">
                                                            <option value="DIU">DIU</option>
                                                            <option value="Anillo">Anillo</option>
                                                        </optgroup>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mt-4 col-xl-2 col-lg-2 col-md-12 col-sm-12">
                                            <div class="input-group form-group" id="tipoMedicamento-pai" style="display:none;">
                                                <input type="text" name="nombreMedicamento" class="form-control" id="nombreMedicamento-pai" placeholder="Nombre medicamen.">
                                            </div>
                                        </div>

                                        <div class="mt-4 col-xl-2 col-lg-2 col-md-12 col-sm-12" id="listadoViaLabel-pai"
                                            style="padding-top: 5px; display: none;">
                                            <label class="font-weight-bold text-gray-800">Vía administración:</label>
                                        </div>

                                        <div class="mt-4 col-xl-2 col-lg-2 col-md-12 col-sm-12" id="listadoViaSelect-pai"
                                            style="padding-top: 5px; display: none;">
                                            <div class="input-group mb-3">
                                                <select class="custom-select seleccionVia" id="seleccionVia-pai">
                                                <option value="">Seleccione Vía</option>
                                                    <optgroup label="Oral">
                                                        <option value="jarabe">Jarabes</option>
                                                        <option value="comprimido">Comprimidos</option>
                                                        <option value="capsula">Cápsulas</option>
                                                        <option value="polvo">Polvos (sobres)</option>
                                                    </optgroup>
                                                    <optgroup label="Intravenoso">
                                                        <option value="sueroterapia">Sueroterapia (mililitros)</option>
                                                        <option value="medIntravenosa">Medicación intravenosa (miligramos)</option> 
                                                    </optgroup>
                                                    <optgroup label="Inyectables">
                                                        <option value="intravenoso">Intravenosos (miligramos)</option>
                                                        <option value="intramuscular">Intramuscular (miligramos)</option>  
                                                            <optgroup label="&nbsp;&nbsp;&nbsp;Subcutánea">
                                                                <option value="insulina">Insulina (U.I.)</option>
                                                                <option value="heparina">Heparina (miligramos)</option>  
                                                            </optgroup>
                                                    </optgroup>
                                                    <optgroup label="Intradérmicos">
                                                        <option value="parches">Parches (unidad)</option>
                                                    </optgroup>
                                                    <optgroup label="Rectal">
                                                        <option value="supositorio">Supositorios (unidad)</option>
                                                        <optgroup label="&nbsp;&nbsp;&nbsp;Enemas">
                                                            <option value="enema preparado">Preparados (unidad)</option>
                                                        </optgroup>
                                                    </optgroup>
                                                    <optgroup label="Vaginal">
                                                        <option value="ovulo">Óvulos (unidad)</option>
                                                    </optgroup>
                                                    <optgroup label="Enteral">
                                                        <option value="sondaNasogastrica">Sonda nasogástrica</option>
                                                        <option value="gastrostomia">Gastrostomía (CEP)</option>
                                                    </optgroup>
                                                    <optgroup label="Cutánea">  
                                                        <option value="pomada">Pomada (aplicación)</option>
                                                        <option value="pasta">Pastas (aplicación)</option>
                                                        <option value="unguento">Ungüento (aplicación)</option>
                                                    </optgroup>
                                                    <optgroup label="Soluciones">
                                                        <option value="otica">Óticas (Gotas/aplicación)</option>
                                                        <option value="oftalmica">Oftálmicas (aplicación)</option>
                                                        <option value="nasal">Nasales (nebulización)</option>
                                                    </optgroup>
                                                    <optgroup label="Respiratoria">
                                                    <option value="inhaladores">Inhaladores (nebulización)</option>
                                                    <option value="aerosolterapia">Aerosolterapia (milímetros/ gotas – aplicación)</option>  
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>

                                            <div class="mt-4 col-xl-3 col-lg-3 col-md-12 col-sm-12" >
                                                <select class="custom-select" name="listadoUnidades" id="listadoUnidades-pai" style="padding-top: 5px;display: none;">
                                                    <option value="">UNIDADES/COMPRIMIDOS</option>
                                                    <option value="capsula">Cápsulas (miligramos) OPEN</option>
                                                    <option value="pastilla">Pastillas – miligramos OPEN</option>
                                                    <optgroup label="Otros">
                                                        <option value="supositorios">Supositorios</option>
                                                        <option value="parches">Parches</option>
                                                        <option value="enemas">Enemas</option>
                                                        <option value="ovulos">Óvulos</option>
                                                    </optgroup>
                                                    <optgroup label="U.I. (insulina)">
                                                        <option value="rapida">Rápida OPEN</option>
                                                        <option value="lenta">Lenta OPEN</option>
                                                    </optgroup>
                                                    <option value="mililitros">Milílitros OPEN</option>
                                                </select>    
                                            </div>
                                        </div> -->

                                        <!-- <div class="row d-none" id="form-medic-2-pai">
                                            <div class="mt-4 col-xl-3 col-lg-3 col-md-12 col-sm-12" id="boxDetallesUnidad-pai"
                                                style="padding-top: 5px;display: none;">
                                                <input type="text" name="detallesUnidad" class="form-control" id="detallesUnidad-pai" placeholder="Detalles unidad de medida">
                                            </div>

                                            <div class="mt-4 col-xl-3 col-lg-3 col-md-12 col-sm-12" id="posologiaLabel-pai"
                                                style="padding-top: 5px;display: none;">
                                                <label class="font-weight-bold text-gray-800" for="">Momento de administración:</label>
                                            </div>

                                            <div class="mt-4 col-xl-3 col-lg-3 col-md-12 col-sm-12" id="listaComida-pai" style="display: none;">
                                                <div class="input-group mb-3">
                                                    <select class="custom-select" id="momentoAdm-pai">
                                                        <option value=""> </option>
                                                        <option value="desayuno">Desayuno</option>
                                                        <option value="comida">Comida</option>
                                                        <option value="cena">Cena</option>
                                                        <option value="abrirBox">Otros</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mt-4 col-xl-3 col-lg-3 col-md-12 col-sm-12" id="boxOtroMomentoAdm-pai" style="display: none;">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="otrosMomentoAdm" class="form-control" id="otrosMomentoAdm-pai" placeholder="Otros">
                                                </div>
                                            </div>
                                        </div> -->
                                            <!-- <div class="row d-none" id="botones-acept-cancel-pai">
                                                <div class="flex-row-reverse d-flex align-items-right justify-content-right text-center">
                                                    <div class="mt-4 col-6">
                                                        <button type="button" class="btn btn-success" id="btn-add-medic-pai" style="cursor: pointer !important;">Añadir medicación</button>
                                                    </div>

                                                    <div class="mt-4 col-6">
                                                        <button type="button" class="btn btn-secondary" id="btn-cancel-medic-pai" style="cursor: pointer !important;">Cancelar</button>
                                                    </div>
                                                </div>
                                            </div> -->
                                    
                                </div>
                            </div>
                            </div>
                                                            <!-- aqui final tabla -->
                            <div class="card shadow">
                                <div class="card-header" id="pielHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapsePiel" aria-expanded="true"
                                            aria-controls="collapsePiel">
                                            Estado de la Piel -UPP
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapsePiel" class="collapse" aria-labelledby="pielHeader">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="estadoPielIntegridad"
                                                    class="col-form-label font-weight-bold text-gray-800">Estado de la
                                                    piel/Integridad:</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" name="estadoPielIntegridad" id="estadoPielIntegridad">
                                                        <option value="">Elegir</option>
                                                        <option>Sin UPP</option>
                                                        <option>Riesgo bajo de UPP</option>
                                                        <option>Riesgo moderado de UPP</option>
                                                        <option>Riesgo alto de UPP</option>
                                                        <option>Con UPP</option>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasestadoPielIntegridad" id="otrasestadoPielIntegridad"
                                                    class="form-control mt-2 d-none ocultable inputOtras" placeholder="Especifique otro estado de la piel/integridad">
                                            </div>
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12" id="uppParte-mod" style="display: none;">
                                            <label class="col-form-label text-white">Parte afectada:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="uppParte" id="uppParte" multiple="multiple">
                                                        <option>Codo derecho</option>
                                                        <option>Codo izquierdo</option>
                                                        <option>Sacro</option>
                                                        <option>Trocánter derecho</option>
                                                        <option>Trocánter izquierdo</option>
                                                        <option>Talón derecho</option>
                                                        <option>Talón izquierdo</option>
                                                        <option>Rodilla derecha</option>
                                                        <option>Rodilla izquierda</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasestadoPielIntegridad" id="otrasestadoPielIntegridad"
                                                    class="form-control mt-2 d-none ocultable inputOtras" placeholder="Especifique otro estado de la piel/integridad">
                                            </div>
                                        </div>

                                        <div class="row">
                                                <label class="col-12 font-weight-bold text-gray-800">Uñas:</label>
                                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                        <label for="estadoManosUñas" class="col-form-label">Manos:</label>
                                                        <div class="input-group">
                                                            <select class="form-control" name="estadoManosUñas" id="estadoManosUnias">
                                                                <option value="">Elegir</option>
                                                                <option>Revisión 3 días</option>
                                                                <option>Revisión semanal</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <label for="estadoManosPies" class="col-form-label">Pies:</label>
                                                        <div class="input-group">
                                                            <select class="form-control" name="estadoManosPies" id="estadoManosPies">
                                                                <option value="">Elegir</option>
                                                                <option>Podólogo semanal</option>
                                                                <option>Podólogo mensual</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="otrosProblemasCutaneos" class="col-form-label font-weight-bold text-gray-800">Otros
                                                    problemas
                                                    cutáneos:</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" id="otrosProblemasCutaneo" name="otrosProblemasCutaneo">
                                                        <option value="">Elegir</option>
                                                        <option>Dermatitis</option>
                                                        <option>Erosiones</option>
                                                        <option>Hematomas</option>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasotrosProblemasCutaneo" id="otrasotrosProblemasCutaneo"
                                                    class="form-control mt-2 d-none ocultable inputOtras" placeholder="Especifique otros problemas cutáneos">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="nutricionHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseNutricion" aria-expanded="true"
                                            aria-controls="collapseNutricion">
                                            Estado Nutricional/Hidratación
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseNutricion" class="collapse" aria-labelledby="nutricionHeader">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="estadoBoca"
                                                    class="col-form-label font-weight-bold text-gray-800">Estado de la
                                                    boca:</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" name="estadoBoca">
                                                        <option value="">Elegir</option>
                                                        <option>Prótesis parcial</option>
                                                        <option>Prótesis total</option>
                                                        <option>Dentadura íntegra</option>
                                                        <option>Faltan piezas</option>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasestadoBoca"
                                                class="form-control mt-2 d-none ocultable inputOtras"
                                                placeholder="Especifique otros estados de la boca">
                                            </div>
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="alteracionesIngesta"
                                                    class="col-form-label font-weight-bold text-gray-800">Alteraciones
                                                    en la
                                                    ingesta:</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" name="alteracionesIngesta">
                                                        <option value="">Elegir</option>
                                                        <option>Masticación</option>
                                                        <option>Disfagia (dif. deglución)</option>
                                                        <option>Regurgitación</option>
                                                        <option>Vómitos</option>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasalteracionesIngesta"
                                                class="form-control mt-2 d-none ocultable inputOtras"
                                                placeholder="Especifique otras alteraciones de la ingesta">
                                            </div>
                                        </div>

                                        <div class="row checkbox-row mt-3 areaSanitariaCheckbox">
                                            <label class="col-12 font-weight-bold text-gray-800">Modificaciones en el
                                                peso:</label>
                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="desnutricion">
                                                    <label class="form-check-label ml-2"
                                                        for="desnutricion">Desnutricion</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="obesidad">
                                                    <label class="form-check-label ml-2" for="obesidad">Obesidad</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="trastornoAlimenticio">
                                                    <label class="form-check-label ml-2"
                                                        for="trastornoAlimenticio">Trastornos alimenticios</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="otrasModifPeso">
                                                    <label class="form-check-label ml-2"
                                                        for="otrasModifPeso">Otros</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 mt-3">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrasModifPesoTexto"
                                                        id="otrasModifPesoTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Otras Modificaciones Peso">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row mt-4">
                                            <label for="metodoNutricionHidratacion" class="col-12 font-weight-bold text-gray-800">Método de Nutrición e
                                                Hidratación:</label>
                                            <div class="form-group col-xl-2 col-lg-2 col-md-12 col-sm-12">
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" name="metodoNutricionHidratacion" id="metodoNutrHid-mod">
                                                    <option value="">Elegir</option>
                                                        <option>Oral</option>
                                                        <option>Enteral</option>
                                                        <option value="otras">Suplemento dietético entre comidas</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasmetodoNutricionHidratacion"
                                                class="form-control mt-2 d-none ocultable inputOtras"
                                                placeholder="Especifique suplemento">
                                            </div>

                                            <div class="form-group col-xl-3 col-lg-2 col-md-12 col-sm-12"  id="seleccionOral-mod" style="display: none;">
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="seleccionOral" id="seleccionOral" multiple= "multiple">
                                                        <option>Líquido</option>
                                                        <option>Líquido con espesantes</option>
                                                        <option>Sólido</option>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasseleccionOral" id="otrasseleccionOral"
                                                class="form-control mt-2" style="display: none;"
                                                placeholder="Especifique otro método de nutrición e hidratación oral">
                                            </div>


                                            <div class="form-group col-xl-3 col-lg-2 col-md-12 col-sm-12"  id="seleccionEnteral-mod" style="display: none;">
                                                    <div class="input-group">
                                                        <select class="form-control" name="seleccionEnteral" id="seleccionEnteral">
                                                            <option value="">Elegir</option>
                                                            <option>Sonda Nasogástrica</option>
                                                            <option>GEP (Gastrostomía Enteral Percutánea)</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group col-xl-3 col-lg-2 col-md-12 col-sm-12"  id="seleccionEnteralSonda-mod" style="display: none;">
                                                    <div class="input-group">
                                                        <select class="form-control" name="seleccionEnteralSondal" id="seleccionEnteralSonda">
                                                            <option value="">Elegir</option>
                                                            <option>Túrmix con embolada</option>
                                                            <option>Perfusión</option>
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>

                                        

                                        <div class="row checkbox-row areaSanitariaCheckbox mt-3">
                                            <label
                                                class="col-12 font-weight-bold text-gray-800">Intolerancia/Alergias:</label>
                                            <div class="form-check col-xl-4 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="gluten">
                                                    <label class="form-check-label ml-2" for="gluten">Gluten</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="lactosa">
                                                    <label class="form-check-label ml-2" for="lactosa">Lactosa</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="fructosa">
                                                    <label class="form-check-label ml-2" for="fructosa">Fructosa</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="sacarosa">
                                                    <label class="form-check-label ml-2" for="sacarosa">Sacarosa</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="galactosa">
                                                    <label class="form-check-label ml-2" for="galactosa">Galactosa</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="frutosSecos">
                                                    <label class="form-check-label ml-2" for="frutosSecos">Frutos secos</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="mariscos">
                                                    <label class="form-check-label ml-2" for="mariscos">Mariscos</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="fruta">
                                                    <label class="form-check-label ml-2" for="fruta">Fruta</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="otrasAlergias">
                                                    <label class="form-check-label ml-2"
                                                        for="otrasAlergias">Otras</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrasAlergiasTexto" id="otrasAlergiasTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Otras Alergias">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="dieta"
                                                    class="col-form-label font-weight-bold text-gray-800">Dieta:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="dieta" id="dieta" multiple="multiple">
                                                        <option>Absoluta</option>
                                                        <option>Líquida</option>
                                                        <option>Blanda</option>
                                                        <option>Normal</option>
                                                        <option>Diabética</option>
                                                        <option>Hipertensa/Sin sal</option>
                                                        <option>Hipocolesterolémica (baja grasa)</option>
                                                        <option>Hipoprotéica</option>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasdieta" id="otrasdieta"
                                                class="form-control mt-2" style="display: none;"
                                                placeholder="Especifique otra dieta">
                                            </div>
                                            <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                                <label for="balanceHidrico"
                                                    class="col-form-label font-weight-bold text-gray-800">Balance
                                                    Hídrico:</label>
                                                <div class="input-group">
                                                    <select class="form-control" name="balanceHidrico" id="balanceHidrico">
                                                        <option value="">Elegir</option>
                                                        <option>Sí</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-12 col-lg-12  col-md-12 col-sm-12">
                                                <label for="otrosNutricion"
                                                    class="col-form-label font-weight-bold text-gray-800">Otros:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="otrosNutricion"
                                                        id="otrosNutricion" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="patronEliminacionHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapsepatronEliminacion" aria-expanded="true"
                                            aria-controls="collapsepatronEliminacion">
                                            Patrón de Eliminación
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapsepatronEliminacion" class="collapse"
                                    aria-labelledby="patronEliminacionHeader">
                                    <div class="card-body">
                                        <div class="row checkbox-row areaSanitariaCheckbox mt-3">
                                            <label class="col-12 font-weight-bold text-gray-800">Incontinencia:</label>
                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="fecal">
                                                    <label class="form-check-label ml-2" for="fecal">Fecal</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="urinaria">
                                                    <label class="form-check-label ml-2" for="urinaria">Urinaria</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row checkbox-row areaSanitariaCheckbox mt-4">
                                            <label class="col-12 font-weight-bold text-gray-800">Ritmo
                                                intestinal:</label>
                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="ritmoRegular">
                                                    <label class="form-check-label ml-2"
                                                        for="ritmoRegular">Regular</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="estrenimiento">
                                                    <label class="form-check-label ml-2"
                                                        for="estrenimiento">Estreñimiento</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="diarrea">
                                                    <label class="form-check-label ml-2" for="diarrea">Diarrea</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-3">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="otrosRitmoIntestinal">
                                                    <label class="form-check-label ml-2"
                                                        for="otrosRitmoIntestinal">Otros</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 ">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrosRitmoIntestinalTexto"
                                                        id="otrosRitmoIntestinalTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Otro Ritmo Intestinal">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <label class="col-12 font-weight-bold text-gray-800" for="dispositivoEliminacion">Dispositivos:</label>
                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <select class="form-control selectConOtras" id="dispositivo" name="dispositivoEliminacion">
                                                <option value="">Elegir</option>
                                                <option>Sonda Vesical</option>
                                                <option>Colector</option>
                                                <option>Absorbente</option>
                                                <option>Ostomía</option>
                                                <option value="otras">Otros</option>
                                                </select>
                                                <input type="text" name="otrasdispositivoEliminacion"
                                                        class="form-control mt-2 d-none ocultable inputOtras"
                                                        placeholder="Especifique otro dispositivo">
                                            </div>

                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="ostomiaOptions" style="display:none;">
                                                <select class="form-control" id="tipoOstomia">
                                                <option value="">Tipo Ostomía</option>
                                                <option>Colostomía Ascendente</option>
                                                <option>Colostomía Descendente</option>
                                                <option>Ileostomía</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="cantidadPiezasOptions" style="display:none;">
                                                <select class="form-control" id="cantidadPiezas">
                                                <option value="">Nº Piezas</option>
                                                <option>Una Pieza</option>
                                                <option>Dos Piezas</option>
                                                <option>Tres Piezas</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-12 col-lg-12  col-md-12 col-sm-12">
                                                <label for="otrosPatroneliminacion"
                                                    class="col-form-label font-weight-bold text-gray-800">Otros:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1"
                                                        name="otrosPatronEliminacion" id="otrosPatronEliminacion"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="movilidadHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseMovilidad" aria-expanded="true"
                                            aria-controls="collapseMovilidad">
                                            Movilidad - Deambulación
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseMovilidad" class="collapse" aria-labelledby="movilidadHeader">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="nivelAutonomiaMovilidad" class="col-form-label font-weight-bold text-gray-800">Nivel de autonomía</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" name="nivelAutonomiaMovilidad" id="nivelAutonomiaMovilidad">
                                                        <option value="">Elegir</option>
                                                        <option>Necesita ayuda ligera</option>
                                                        <option>Necesita bastante ayuda</option>
                                                        <option>No colabora</option>
                                                        <option>Independiente</option>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasnivelAutonomiaMovilidad" id="otrasnivelAutonomiaMovilidad" class="form-control mt-2 d-none ocultable inputOtras"
                                                placeholder="Especifique otro nivel de autonomía">
                                            </div>

                                            <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <label for="marchaMovilidad" class="col-form-label font-weight-bold text-gray-800">Marcha:</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" name="marchaMovilidad" id="marchaMovilidad-mod">
                                                        <option value="">Elegir</option>
                                                        <option>Independiente</option>
                                                        <option>Necesita ayudas técnicas</option>
                                                        <option>Dependiente total</option>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasmarchaMovilidad" id="otrasmarchaMovilidad" class="form-control mt-2 d-none ocultable inputOtras"
                                                placeholder="Especifique otra marcha">
                                            </div>

                                            <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12" id="marchaMovilidadAyudas-mod" style="display:none;">
                                            <label for="marchaMovilidadAyudas" class="col-form-label font-weight-bold text-white">etiqueta</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="marchaMovilidadAyudas" id="marchaMovilidadAyudas" multiple="multiple">
                                                            <option>Andador</option>
                                                            <option>Muletas</option>
                                                            <option>Bastón</option>
                                                            <option>Silla de ruedas</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row  checkbox-row areaSanitariaCheckbox mb-3">
                                            <div class="form-check col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="encamamiento">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="encamamiento">Requiere encamamiento</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row checkbox-row ml-5 areaSanitariaCheckbox d-none ocultable"
                                            id="camposEncamamiento">
                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="temporal">
                                                    <label class="form-check-label ml-2" for="temporal">Temporal</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="permanente">
                                                    <label class="form-check-label ml-2"
                                                        for="permanente">Permanente</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="otrasEncamamento">
                                                    <label class="form-check-label ml-2"
                                                        for="otrasEncamamento">Posibilidad
                                                        de movilidad</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrasEncamamentoTexto"
                                                        id="otrasEncamamentoTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Posibilidad de Movilidad">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <label class="col-12 font-weight-bold text-gray-800" for="metodosTransferencia">Métodos de Transferencia</label>
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class="input-group">
                                                    <select class="form-control" name="metodosTransferencia" id="metodosTransferencia">
                                                        <option value="">Elegir</option>
                                                        <option>Mecánicos</option>
                                                        <option>Manuales</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12" id="metodosMecanicosTransferencia-mod" style="display:none;">
                                                <div class="input-group">
                                                    <select class="form-control" name="metodosMecanicosTransferencia" id="metodosMecanicosTransferencia">
                                                        <option value="">Elegir</option>
                                                        <option>Tabla</option>
                                                        <option>Grúa</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-12 col-lg-12  col-md-12 col-sm-12">
                                                <label for="otrosMovilidad"
                                                    class="col-form-label font-weight-bold text-gray-800">Otros:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="otrosMovilidad"
                                                        id="otrosMovilidad" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="suenoHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseSueno" aria-expanded="true"
                                            aria-controls="collapseSueno">
                                            Sueño - Agitación
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseSueno" class="collapse" aria-labelledby="suenoHeader">
                                    <div class="card-body">
                                        <div class="row">
                                            <label class="col-12 font-weight-bold text-gray-800">Horas de sueño / día:</label>
                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <label class="col-form-label" for="suenoNocturno">Nocturno:</label>
                                                    <div class="input-group">
                                                        <select class="form-control" id="suenoNocturno" name="suenoNocturno">
                                                        <option value="">Elegir</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>                                                        
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        </select>
                                                    </div>
                                            </div>


                                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                        <label class="col-form-label" for="suenoSiesta">Siesta:</label>
                                                            <div class="input-group">
                                                                <select class="form-control" id="suenoSiesta" name="suenoSiesta">
                                                                    <option value="">Elegir</option>
                                                                    <option>30 minutos</option>
                                                                    <option>1 hora</option>
                                                                    <option>1:30 horas</option>
                                                                    <option>2 horas</option>
                                                                </select>
                                                            </div>
                                                    </div>

                                                    <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                        <div class=" form-check mt-2">
                                                            <input type="checkbox" class="form-check-input" id="otrosHorasSueno">
                                                            <label class="form-check-label ml-2" for="otrosHorasSueno">Otros</label>
                                                        </div>
                                                        <input type="text" name="otrosSuenoBox" id="otrosSuenoBox"
                                                            class="form-control form-control-sm mt-2" placeholder="Especifique otras horas sueño/día" style="display:none;">
                                                    </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label class="col-form-label font-weight-bold text-gray-800" for="suenoConciliar">Dificultad para conciliar el sueño:</label>
                                                <div class="input-group">
                                                    <select class="form-control" id="suenoConciliar" name="suenoConciliar">
                                                    <option value="">Elegir</option>
                                                    <option>Sí</option>
                                                    <option>No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label class="col-form-label font-weight-bold text-gray-800" for="suenoMantener">Dificultad para mantener el sueño:</label>
                                                <div class="input-group">
                                                    <select class="form-control" id="suenoMantener" name="suenoMantener">
                                                    <option value="">Elegir</option>
                                                    <option>Sí</option>
                                                    <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label class="col-form-label font-weight-bold text-gray-800" for="suenoMediacion">Medicación para dormir:</label>
                                                <div class="input-group">
                                                    <select class="form-control" id="suenoMediacion" name="suenoMediacion">
                                                        <option value="">Elegir</option>
                                                        <option>Sí</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label class="col-form-label font-weight-bold text-gray-800" for="suenoRecurso">Recursos para inducir / facilitar el sueño:</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" id="suenoRecurso" name="suenoRecurso">
                                                    <option value="">Elegir</option>
                                                    <option>Peluches</option>
                                                    <option>Mantas/Tela</option>
                                                    <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrassuenoRecurso"
                                                        class="form-control mt-2 d-none ocultable inputOtras"
                                                        placeholder="Especifique otro recurso">
                                            </div>
                                        </div>

                                        <div class="row" id="tabla-medDormir-pai" style="display: none;">
                                            <div class="table-responsive">
                                                <table id="tabla-medDormir-res-pai" class="table table-striped table-bordered mt-4" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Via de administración</th>
                                                            <th>Forma farmacéutica</th>
                                                            <th>Cantidad</th>
                                                            <th>Desayuno</th>
                                                            <th>Comida</th>
                                                            <th>Cena</th>
                                                            <th>Otros</th>
                                                            <th>Fecha Inicio</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="dolorHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseDolor" aria-expanded="true"
                                            aria-controls="collapseDolor">
                                            Dolor
                                        </a>
                                    </h2>
                                </div>


                                

                                <div id="collapseDolor" class="collapse" aria-labelledby="dolorHeader">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label class="col-12 font-weight-bold text-gray-800" for="manifiestaDolor">Manifiesta dolor:</label>
                                                <div class="input-group">
                                                    <select class="form-control" id="manifiestaDolor-mod" name="manifiestaDolor">
                                                        <option value="">Elegir</option>
                                                        <option>Sí</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-2">
                                            <label class="col-form-label" for="tipoDolor"></label>
                                                <div class="input-group ">
                                                    <select class="form-control" id="tipoDolor" name="tipoDolor" style="display:none;">
                                                        <option value="">Elegir</option>
                                                        <option>Generalizado</option>
                                                        <option>Localizado</option>
                                                        <option>Agudo</option>
                                                        <option>Crónico</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row  checkbox-row dolorCheckbox mb-3" id="partesDolorCheckbox" style="display: none;">
                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="Cabeza">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="Cabeza">Cabeza</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaCabeza" id="FrecuenciaCabeza" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option>Puntual</option>
                                                            <option>Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadCabeza" id="IntensidadCabeza" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option>Baja</option>
                                                            <option>Media</option>
                                                            <option>Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="MomentoCabeza" id="MomentoCabeza" disabled>
                                                            <option value="">Indicar momento del día</option>
                                                            <option>Al levantarse</option>
                                                            <option>En la mañana</option>
                                                            <option>En la tarde</option>
                                                            <option>Al acostarse</option>
                                                            <option>Durante la noche</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaCabeza"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia">
                                                        <input type="text" name="otrasIntensidadCabeza"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad">
                                                        <input type="text" name="otrasMomentoCabeza"
                                                        class="form-control dolor d-none ocultable inputOtras"
                                                        placeholder="Indique momento">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="Cuello">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="Cuello">Cuello</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaCuello" id="FrecuenciaCuello" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option>Puntual</option>
                                                            <option>Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadCuello" id="IntensidadCuello" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option>Baja</option>
                                                            <option>Media</option>
                                                            <option>Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="MomentoCuello" id="MomentoCuello" disabled>
                                                            <option value="">Indicar momento del día</option>
                                                            <option>Al levantarse</option>
                                                            <option>En la mañana</option>
                                                            <option>En la tarde</option>
                                                            <option>Al acostarse</option>
                                                            <option>Durante la noche</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaCuello"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor cuello">
                                                        <input type="text" name="otrasIntensidadCuello"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor cuello">
                                                        <input type="text" name="otrasMomentoCuello"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique momento">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="Espalda">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="Espalda">Espalda</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaEspalda" id="FrecuenciaEspalda" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option>Puntual</option>
                                                            <option>Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadEspalda" id="IntensidadEspalda" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option>Baja</option>
                                                            <option>Media</option>
                                                            <option>Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="MomentoEspalda" id="MomentoEspalda" disabled>
                                                            <option value="">Indicar momento del día</option>
                                                            <option>Al levantarse</option>
                                                            <option>En la mañana</option>
                                                            <option>En la tarde</option>
                                                            <option>Al acostarse</option>
                                                            <option>Durante la noche</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaEspalda"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor espalda">
                                                        <input type="text" name="otrasIntensidadEspalda"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor espalda">
                                                        <input type="text" name="otrasMomentoEspalda"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique momento">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="BrazoDerecho">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="BrazoDerecho">Brazo derecho</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaBrazoDerecho" id="FrecuenciaBrazoDerecho" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option>Puntual</option>
                                                            <option>Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadBrazoDerecho" id="IntensidadBrazoDerecho" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option>Baja</option>
                                                            <option>Media</option>
                                                            <option>Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="MomentoBrazoDerecho" id="MomentoBrazoDerecho" disabled>
                                                            <option value="">Indicar momento del día</option>
                                                            <option>Al levantarse</option>
                                                            <option>En la mañana</option>
                                                            <option>En la tarde</option>
                                                            <option>Al acostarse</option>
                                                            <option>Durante la noche</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaBrazoDerecho"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor brazo derecho">
                                                        <input type="text" name="otrasIntensidadBrazoDerecho"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor brazo derecho">
                                                        <input type="text" name="otrasMomentoBrazoDerecho"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique momento">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="BrazoIzquierdo">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="BrazoIzquierdo">Brazo izquierdo</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaBrazoIzquierdo" id="FrecuenciaBrazoIzquierdo" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option>Puntual</option>
                                                            <option>Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadBrazoIzquierdo" id="IntensidadBrazoIzquierdo" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option>Baja</option>
                                                            <option>Media</option>
                                                            <option>Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="MomentoBrazoIzquierdo" id="MomentoBrazoIzquierdo" disabled>
                                                            <option value="">Indicar momento del día</option>
                                                            <option>Al levantarse</option>
                                                            <option>En la mañana</option>
                                                            <option>En la tarde</option>
                                                            <option>Al acostarse</option>
                                                            <option>Durante la noche</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaBrazoIzquierdo"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor brazo izquierdo">
                                                        <input type="text" name="otrasIntensidadBrazoIzquierdo"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor brazo izquierdo">
                                                        <input type="text" name="otrasMomentoBrazoIzquierdo"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique momento">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="manoDerecha">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="manoDerecha">Mano derecha</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciamanoDerecha" id="FrecuenciamanoDerecha" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option>Puntual</option>
                                                            <option>Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadmanoDerecha" id="IntensidadmanoDerecha" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option>Baja</option>
                                                            <option>Media</option>
                                                            <option>Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="MomentomanoDerecha" id="MomentomanoDerecha" disabled>
                                                            <option value="">Indicar momento del día</option>
                                                            <option>Al levantarse</option>
                                                            <option>En la mañana</option>
                                                            <option>En la tarde</option>
                                                            <option>Al acostarse</option>
                                                            <option>Durante la noche</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciamanoDerecha"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor mano derecha">
                                                        <input type="text" name="otrasIntensidadmanoDerecha"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor mano derecha">
                                                        <input type="text" name="otrasMomentomanoDerecha"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique momento">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="manoIzquierda">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="manoIzquierda">Mano izquierda</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciamanoIzquierda" id="FrecuenciamanoIzquierda" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option>Puntual</option>
                                                            <option>Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadmanoIzquierda" id="IntensidadmanoIzquierda" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option>Baja</option>
                                                            <option>Media</option>
                                                            <option>Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="MomentomanoIzquierda" id="MomentomanoIzquierda" disabled>
                                                            <option value="">Indicar momento del día</option>
                                                            <option>Al levantarse</option>
                                                            <option>En la mañana</option>
                                                            <option>En la tarde</option>
                                                            <option>Al acostarse</option>
                                                            <option>Durante la noche</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciamanoIzquierda"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor mano izquierda">
                                                        <input type="text" name="otrasIntensidadmanoIzquierda"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor mano izquierda">
                                                        <input type="text" name="otrasMomentomanoIzquierda"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique momento">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="PiernaDerecha">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="PiernaDerecha">Pierna derecha</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaPiernaDerecha" id="FrecuenciaPiernaDerecha" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option>Puntual</option>
                                                            <option>Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadPiernaDerecha" id="IntensidadPiernaDerecha" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option>Baja</option>
                                                            <option>Media</option>
                                                            <option>Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="MomentoPiernaDerecha" id="MomentoPiernaDerecha" disabled>
                                                            <option value="">Indicar momento del día</option>
                                                            <option>Al levantarse</option>
                                                            <option>En la mañana</option>
                                                            <option>En la tarde</option>
                                                            <option>Al acostarse</option>
                                                            <option>Durante la noche</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaPiernaDerecha"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor pierna derecha">
                                                        <input type="text" name="otrasIntensidadPiernaDerecha"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor pierna derecha">
                                                        <input type="text" name="otrasMomentoPiernaDerecha"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique momento">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="PiernaIzquierda">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="PiernaIzquierda">Pierna izquierda</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaPiernaIzquierda" id="FrecuenciaPiernaIzquierda" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option>Puntual</option>
                                                            <option>Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadPiernaIzquierda" id="IntensidadPiernaIzquierda" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option>Baja</option>
                                                            <option>Media</option>
                                                            <option>Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="MomentoPiernaIzquierda" id="MomentoPiernaIzquierda" disabled>
                                                            <option value="">Indicar momento del día</option>
                                                            <option>Al levantarse</option>
                                                            <option>En la mañana</option>
                                                            <option>En la tarde</option>
                                                            <option>Al acostarse</option>
                                                            <option>Durante la noche</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaPiernaIzquierda"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor pierna izquierda">
                                                        <input type="text" name="otrasIntensidadPiernaIzquierda"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor pierna izquierda">
                                                        <input type="text" name="otrasMomentoPiernaIzquierda"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique momento">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="PieDerecho">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="PieDerecho">Pie Derecho</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaPieDerecho" id="FrecuenciaPieDerecho" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option>Puntual</option>
                                                            <option>Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadPieDerecho" id="IntensidadPieDerecho" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option>Baja</option>
                                                            <option>Media</option>
                                                            <option>Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="MomentoPieDerecho" id="MomentoPieDerecho" disabled>
                                                            <option value="">Indicar momento del día</option>
                                                            <option>Al levantarse</option>
                                                            <option>En la mañana</option>
                                                            <option>En la tarde</option>
                                                            <option>Al acostarse</option>
                                                            <option>Durante la noche</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaPieDerecho"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor pie derecho">
                                                        <input type="text" name="otrasIntensidadPieDerecho"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor pie derecho">
                                                        <input type="text" name="otrasMomentoPieDerecho"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique momento">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="PieIzquierdo">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="PieIzquierdo">Pie izquierdo</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaPieIzquierdo" id="FrecuenciaPieIzquierdo" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option>Puntual</option>
                                                            <option>Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadPieIzquierdo" id="IntensidadPieIzquierdo" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option>Baja</option>
                                                            <option>Media</option>
                                                            <option>Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="MomentoPieIzquierdo" id="MomentoPieIzquierdo" disabled>
                                                            <option value="">Indicar momento del día</option>
                                                            <option>Al levantarse</option>
                                                            <option>En la mañana</option>
                                                            <option>En la tarde</option>
                                                            <option>Al acostarse</option>
                                                            <option>Durante la noche</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaPieIzquierdo"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor pie izquierdo">
                                                        <input type="text" name="otrasIntensidadPieIzquierdo"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor pie izquierdo">
                                                        <input type="text" name="otrasMomentoPieIzquierdo"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique momento">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="OtrasLocalizacionDolor">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="OtrasLocalizacionDolor">Otros</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaOtrasLocalizacionDolor" id="FrecuenciaOtrasLocalizacionDolor" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option>Puntual</option>
                                                            <option>Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadOtrasLocalizacionDolor" id="IntensidadOtrasLocalizacionDolor" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option>Baja</option>
                                                            <option>Media</option>
                                                            <option>Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="MomentoOtrasLocalizacionDolor" id="MomentoOtrasLocalizacionDolor" disabled>
                                                            <option value="">Indicar momento del día</option>
                                                            <option>Al levantarse</option>
                                                            <option>En la mañana</option>
                                                            <option>En la tarde</option>
                                                            <option>Al acostarse</option>
                                                            <option>Durante la noche</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaOtrasLocalizacionDolor"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor Otros">
                                                        <input type="text" name="otrasIntensidadOtrasLocalizacionDolor"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor Otros">
                                                        <input type="text" name="otrasMomentoOtrasLocalizacionDolor"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique momento">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label class="col-12 font-weight-bold text-gray-800" for="analgesiaDolor">Analgesia para el dolor:</label>
                                                <div class="input-group">
                                                    <select class="form-control" id="analgesiaDolor" name="analgesiaDolor">
                                                        <option value="">Elegir</option>
                                                        <option>Sí</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label class="col-12 font-weight-bold text-gray-800" for="origenDolor">Origen del dolor:</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" id="origenDolor" name="origenDolor">
                                                        <option value="">Elegir</option>
                                                        <option>Oncológico</option>
                                                        <option>Traumático</option>
                                                        <option>Neurológico</option>
                                                        <option>Psicosomático</option>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasorigenDolor"
                                                            class="form-control mt-2 dolor d-none ocultable inputOtras"
                                                            placeholder="Indique otro origen del dolor">
                                            </div>
                                        </div>

                                        <div class="row" id="tabla-medDolor-pai" style="display: none;">
                                            <div class="table-responsive">
                                                <table id="tabla-medDolor-res-pai" class="table table-striped table-bordered mt-4" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Via de administración</th>
                                                            <th>Forma farmacéutica</th>
                                                            <th>Cantidad</th>
                                                            <th>Desayuno</th>
                                                            <th>Comida</th>
                                                            <th>Cena</th>
                                                            <th>Otros</th>
                                                            <th>Fecha Inicio</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-12 col-lg-12  col-md-12 col-sm-12">
                                                <label for="otrosDolor"
                                                    class="col-form-label font-weight-bold text-gray-800">Otros:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1 dolor" id="otrosDolor"
                                                        name="otrosDolor" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="AlteracionConductaHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseAlteracionConducta" aria-expanded="true"
                                            aria-controls="collapseAlteracionConducta">
                                            Alteraciones Conducta
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseAlteracionConducta" class="collapse"
                                    aria-labelledby="AlteracionConductaHeader">
                                    <div class="card-body">
                                        <div class="row mt-3">
                                            <label class="col-12 font-weight-bold text-gray-800">Memoria:</label>
                                            <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="input-group">
                                                        <select class="form-control select2-multiple" name="alteracionesMemoria" id="alteracionesMemoria-mod" multiple="multiple">
                                                            <option>Olvidos</option>
                                                            <option>Dificultad en el reconocimiento de amigos y familiares</option>
                                                            <option>Dificultad en la manifestación y reconocimiento de emociones y sentimientos propios</option>
                                                            <option>Dificultad en la manifestación y reconocimiento de emociones y sentimientos ajenos</option>
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">      
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12"  id="seleccionOlvidosFrecuentes-mod" style="display: none;">
                                        <label for="seleccionOlvidosFrecuentes-mod">Olvidos frecuentes:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="seleccionOlvidosFrecuentes" id="seleccionOlvidosFrecuentes" multiple="multiple">
                                                        <optgroup label="ABVD">
                                                            <option>Higiene</option>
                                                            <option>Vestido</option>
                                                            <option>Deambulación</option>
                                                            <option>Alimentación</option>
                                                            <option value="otrasABVD">Otras</option>
                                                        </optgroup>
                                                        <optgroup label="AIVD">
                                                            <option>Manejo del dinero</option>
                                                            <option>Manejo de medicación</option>
                                                            <option>Uso del teléfono</option>
                                                            <option>Uso del transporte público</option>
                                                            <option>Realizar comidas</option>
                                                            <option>Cuidado de la ropa (lavado y plancha)</option>
                                                            <option value="otrasAIVD">Otras</option>
                                                        </optgroup>
                                                        <optgroup label="AAVD">
                                                            <option>Ir al cine/teatro</option>
                                                            <option>Quedar con amigos</option>
                                                            <option value="otrasAAVD">Otras</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <input type="text" name="seleccionOlvidosFrecuentesABVD"
                                                    class="form-control" id="seleccionOlvidosFrecuentesABVD"
                                                    placeholder="Indique otros ABVD" style="display: none;">
                                                <input type="text" name="seleccionOlvidosFrecuentesAIVD"
                                                    class="form-control" id="seleccionOlvidosFrecuentesAIVD"
                                                    placeholder="Indique otros AIVD" style="display: none;">
                                                <input type="text" name="seleccionOlvidosFrecuentesAAVD"
                                                    class="form-control" id="seleccionOlvidosFrecuentesAAVD"
                                                    placeholder="Indique otros AAVD" style="display: none;">
                                        </div>

                                        
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12" id="seleccionOlvidosEsporadicos-mod" style="display: none;">
                                        <label for="seleccionOlvidosEsporadicos">Olvidos Esporádicos:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="seleccionOlvidosEsporadicos" id="seleccionOlvidosEsporadicos" multiple="multiple">
                                                        <optgroup label="ABVD">
                                                            <option>Higiene</option>
                                                            <option>Vestido</option>
                                                            <option>Deambulación</option>
                                                            <option>Alimentación</option>
                                                            <option value="otrasABVD">Otras</option>
                                                        </optgroup>
                                                        <optgroup label="AIVD">
                                                            <option>Manejo del dinero</option>
                                                            <option>Manejo de medicación</option>
                                                            <option>Uso del teléfono</option>
                                                            <option>Uso del transporte público</option>
                                                            <option>Realizar comidas</option>
                                                            <option>Cuidado de la ropa (lavado y plancha)</option>
                                                            <option value="otrasAIVD">Otras</option>
                                                        </optgroup>
                                                        <optgroup label="AAVD">
                                                            <option>Ir al cine/teatro</option>
                                                            <option>Quedar con amigos</option>
                                                            <option value="otrasAAVD">Otras</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <input type="text" name="seleccionOlvidosEsporadicosABVD"
                                                    class="form-control" id="seleccionOlvidosEsporadicosABVD"
                                                    placeholder="Indique otros ABVD" style="display: none;">
                                                <input type="text" name="seleccionOlvidosEsporadicosAIVD"
                                                    class="form-control" id="seleccionOlvidosEsporadicosAIVD"
                                                    placeholder="Indique otros AIVD" style="display: none;">
                                                <input type="text" name="seleccionOlvidosEsporadicosAAVD"
                                                    class="form-control" id="seleccionOlvidosEsporadicosAAVD"
                                                    placeholder="Indique otros AAVD" style="display: none;">
                                        </div>
                                    </div>

                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="tomaDecisiones" class="col-form-label font-weight-bold text-gray-800">Capacidad para tomar decisiones:</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" name="tomaDecisiones" id="tomaDecisiones">
                                                        <option value="">Elegir</option>
                                                        <option>Autonomía total</option>
                                                        <option>Dependencia parcial</option>
                                                        <option>Dependencia parcial</option>
                                                        <option value="otras">Otras</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrastomaDecisiones"
                                                            class="form-control mt-2 dolor d-none ocultable inputOtras"
                                                            placeholder="Indique otra capacidad de toma de decisiones">
                                            </div>
                                        </div>

                                        <div class="row">
                                            
                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="estiloComunicacion" class="col-form-label font-weight-bold text-gray-800">Estilo de comunicación:</label>
                                                <div class="input-group">
                                                    <select class="form-control" name="estiloComunicacion" id="estiloComunicacion">
                                                        <option value="">Elegir</option>
                                                        <option>Se comunica oralmente</option>
                                                        <option>Se comunica gestualmente</option>
                                                        <option>Alternativas comunicativas</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="estiloComunicacionOral-mod" style="display: none;">
                                            <label for="estiloComunicacionOral" class="col-form-label">Oral:</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" name="estiloComunicacionOral" id="estiloComunicacionOral">
                                                        <option value="">Elegir</option>
                                                        <option>En cualquier situación</option>
                                                        <option>En situaciones estresantes</option>
                                                        <option>Con cualquier persona</option>
                                                        <option>Con personas concretas</option>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasestiloComunicacionOral"
                                                            class="form-control mt-2 d-none ocultable inputOtras"
                                                            placeholder="Indique otra situación de comunicación oral">
                                            </div>

                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="estiloComunicacionGestual-mod" style="display: none;">
                                            <label for="estiloComunicacionGestual" class="col-form-label">Gestual:</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" name="estiloComunicacionGestual" id="estiloComunicacionGestual">
                                                        <option value="">Elegir</option>
                                                        <option>En cualquier situación</option>
                                                        <option>En situaciones estresantes</option>
                                                        <option>Con cualquier persona</option>
                                                        <option>Con personas concretas</option>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasestiloComunicacionGestual"
                                                            class="form-control mt-2 d-none ocultable inputOtras"
                                                            placeholder="Indique otra situación de comunicación gestual">
                                            </div>

                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="estiloComunicacionAlternativas-mod" style="display: none;">
                                            <label for="estiloComunicacionAlternativas" class="col-form-label">Alternativas:</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" name="estiloComunicacionAlternativas" id="estiloComunicacionAlternativas">
                                                        <option value="">Elegir</option>
                                                        <option>Software específico</option>
                                                        <option>Tablero de comunicación</option>
                                                        <option>LSE apoyada</option>
                                                        <option>LSE al aire</option>
                                                        <option>Braille</option>
                                                        <option>Dactilológico en palma</option>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="softwareestiloComunicacionAlternativas"
                                                            class="form-control mt-2" id="softwareestiloComunicacionAlternativas"
                                                            placeholder="Indique software específico" style="display: none;">
                                                <input type="text" name="otrasestiloComunicacionAlternativas"
                                                            class="form-control mt-2 d-none ocultable inputOtras"
                                                            placeholder="Indique otra alternativa comunicativa">
                                            </div>

                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="estiloComunicacionPersonas-mod" style="display: none;">
                                            <label for="estiloComunicacionPersonas" class="col-form-label">Personas concretas:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="estiloComunicacionPersonas" id="estiloComunicacionPersonas" multiple="multiple">
                                                        <option>Compañeros/as</option>
                                                        <option>Familiares</option>
                                                        <option>Trabajadores/as</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <label class="col-12 font-weight-bold text-gray-800">Patrón sexual:</label>
                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="mantieneRelaciones" class="col-form-label">Mantiene relaciones sexuales:</label>
                                                <div class="input-group">
                                                    <select class="form-control" name="mantieneRelaciones" id="mantieneRelaciones">
                                                        <option value="">Elegir</option>
                                                        <option>Sí</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="mantieneRelacionesSatisfactorias-mod" style="display: none;">
                                            <label for="mantieneRelacionesSatisfactorias" class="col-form-label">Mantiene relaciones sexuales satisfactorias:</label>
                                                <div class="input-group">
                                                    <select class="form-control" name="mantieneRelacionesSatisfactorias" id="mantieneRelacionesSatisfactorias">
                                                        <option value="">Elegir</option>
                                                        <option>Sí</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="nomantieneRelacionesSatisfactorias"
                                                            class="form-control mt-2" id="nomantieneRelacionesSatisfactorias" style="display: none;"
                                                            placeholder="Especifique">
                                            </div>

                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="usaAnticonceptivos-mod" style="display: none;">
                                            <label for="usaAnticonceptivos" class="col-form-label">Utiliza métodos anticonceptivos:</label>
                                                <div class="input-group">
                                                    <select class="form-control" name="usaAnticonceptivos" id="usaAnticonceptivos">
                                                        <option value="">Elegir</option>
                                                        <option>Sí</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" id="tabla-medAnticon-pai" style="display: none;">
                                            <div class="table-responsive">
                                                <table id="tabla-medAnticon-res-pai" class="table table-striped table-bordered mt-4" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Via de administración</th>
                                                            <th>Forma farmacéutica</th>
                                                            <th>Cantidad</th>
                                                            <th>Desayuno</th>
                                                            <th>Comida</th>
                                                            <th>Cena</th>
                                                            <th>Otros</th>
                                                            <th>Fecha Inicio</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check mt-2">
                                                    <input type="checkbox" class="form-check-input" id="otrosAlteracionesConducta">
                                                    <label class="form-check-label ml-2" for="otrosAlteracionesConducta">Otros</label>
                                                </div>
                                                <input type="text" name="otrosAlteracionesConductaBox" id="otrosAlteracionesConductaBox"
                                                    class="form-control form-control-sm mt-2" placeholder="Especifique otras alteraciones de conducta" style="display:none;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="resticcionesHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseRestricciones" aria-expanded="true"
                                            aria-controls="collapseRestricciones">
                                            Seguridad - Restricciones
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseRestricciones" class="collapse" aria-labelledby="resticcionesHeader">
                                    <div class="card-body">
                                    <div class="row mt-3">
                                                <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <label for="seguridadMediacion" class="col-form-label font-weight-bold text-gray-800">Seguridad en la mediación:</label>
                                                    <div class="input-group">
                                                        <select class="form-control selectConOtras" name="seguridadMediacion" id="seguridadMediacion">
                                                            <option value="">Elegir</option>
                                                            <option>Autonomía total</option>
                                                            <option>Necesita una pequeña supervisión</option>
                                                            <option>Necesita una gran supervisión</option>
                                                            <option>Dependencia total</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                    </div>
                                                        <input type="text" name="otrasseguridadMediacion"
                                                        class="form-control mt-2 d-none ocultable inputOtras"
                                                        placeholder="Especifique otra seguridad en la mediación">
                                                </div>


                                                <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <label for="seguridadEntorno" class="col-form-label font-weight-bold text-gray-800">Seguridad en el entorno:</label>
                                                    <div class="input-group">
                                                        <select class="form-control" name="seguridadEntorno" id="seguridadEntorno-mod">
                                                                <option value="" disabled>Uso de sujeciones/contenciones</option>
                                                                <option>Sí</option>
                                                                <option>No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="seguridadEntornoSujeciones-mod" style="display: none;">
                                                <label for="seguridadEntorno" class="col-form-label">Sujeciones / contenciones:</label>
                                                    <div class="input-group">
                                                        <select class="form-control selectConOtras" name="seguridadEntornoSujeciones" id="seguridadEntornoSujeciones">
                                                            <option value="">Elegir</option>
                                                            <option>Sentado</option>
                                                            <option>Encamado</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                    </div>
                                                    <input type="text" name="sentadoseguridadEntornoSujeciones" id="sentadoseguridadEntornoSujeciones"
                                                        class="form-control mt-2"  placeholder="Especifique sentado" style="display: none;">
                                                        <input type="text" name="encamadoseguridadEntornoSujeciones" id="encamadoseguridadEntornoSujeciones"
                                                        class="form-control mt-2" placeholder="Especifique encamado" style="display: none;">
                                                    <input type="text" name="otrasseguridadEntornoSujeciones"
                                                        class="form-control mt-2 d-none ocultable inputOtras"
                                                        placeholder="Especifique otro uso de sujeciones/contenciones">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="marchaHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseMarcha" aria-expanded="true"
                                            aria-controls="collapseMarcha">
                                            Marcha - Equilibrio
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseMarcha" class="collapse" aria-labelledby="marchaHeader">
                                    <div class="card-body">
                                        <div class="row">
                                        <label for="MarchaEquilibrio" class="col-12 font-weight-bold text-gray-800">Marcha:</label>
                                                <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                    <div class="input-group">
                                                        <select class="form-control selectConOtras" name="MarchaEquilibrio" id="MarchaEquilibrio">
                                                            <option value="">Elegir</option>
                                                            <option>Estable</option>
                                                            <option>Inestable</option>
                                                            <option value="otras">Otros</option>
                                                        </select>
                                                    </div>
                                                    <input type="text" name="otrasMarchaEquilibrio"
                                                    id="otrasMarchaEquilibrio"
                                                    class="form-control form-control-sm mt-2 d-none ocultable inputOtras"
                                                    placeholder="Especifique Otros Marcha-Equilibrio">
                                                </div>

                                                <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                    <div class="input-group">
                                                        <select class="form-control" name="MarchaEquilibrioEstable" id="MarchaEquilibrioEstable" style="display:none;">
                                                            <option value="">Elegir (Estable)</option>
                                                            <option>Con ayuda</option>
                                                            <option>Sin ayuda</option>
                                                        </select>
                                                        <select class="form-control" name="MarchaEquilibrioInestable" id="MarchaEquilibrioInestable" style="display:none;">
                                                            <option value="">Elegir (Inestable)</option>
                                                            <option>Con ayuda</option>
                                                            <option>Sin ayuda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-12 font-weight-bold text-gray-800">Tono muscular:</label>
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="mantieneTonoMuscular" class="col-form-label">Mantiene el tono íntegro:</label>
                                                    <div class="input-group">
                                                        <select class="form-control" id="mantieneTonoMuscular" name="mantieneTonoMuscular">
                                                            <option value="">Elegir</option>
                                                            <option>Sí</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12" id="parteTonoMuscular-mod" style="display:none;">
                                                <label for="parteTonoMuscular" class="col-form-label">Parte afectada:</label>
                                                    <div class="input-group">
                                                        <select class="form-control select2-multiple" id="parteTonoMuscular" name="parteTonoMuscular" multiple="multiple">
                                                            <option>Cuello</option>
                                                            <optgroup label="Miembros superiores">
                                                                <option>Brazo izquierdo</option>
                                                                <option>Brazo derecho</option>
                                                            </optgroup>
                                                            <optgroup label="Miembros inferiores">
                                                                <option>Pierna izquierda</option>
                                                                <option>Pierna izquierda</option>
                                                            </optgroup>
                                                            <option>Tórax</option>
                                                            <option>Abdomen</option>
                                                            <option>Pelvis</option>
                                                            <option value="otras">Otros</option>
                                                        </select>
                                                    </div>
                                                    <input type="text" name="otrasparteTonoMuscular"
                                                    id="otrasparteTonoMuscular"
                                                    class="form-control form-control-sm mt-2"
                                                    placeholder="Especifique otra parte afectada" style="display:none;">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="fuerza" class="col-form-label font-weight-bold text-gray-800">Fuerza (mantiene la fuerza):</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" id="fuerza" name="fuerza">
                                                        <option value="">Elegir</option>
                                                        <option>Sí</option>
                                                        <optgroup label="No">
                                                            <option>Pérdida leve</option>
                                                            <option>Pérdida moderada</option>
                                                            <option>Pérdida severa</option>
                                                            <option>Pérdida total</option>
                                                            <option value="otras">Otros</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasfuerza"
                                                    id="otrasfuerza"
                                                    class="form-control form-control-sm mt-2 d-none ocultable inputOtras"
                                                    placeholder="Especifique otro tipo de pérdida">
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12" id="parteAfectadaFuerza-mod" style="display:none;">
                                                <label for="parteAfectadaFuerza" class="col-form-label">Parte afectada:</label>
                                                    <div class="input-group">
                                                        <select class="form-control select2-multiple" id="parteAfectadaFuerza" name="parteAfectadaFuerza" multiple="multiple">
                                                            <optgroup label="Miembros superiores">
                                                                <option>Brazo izquierdo</option>
                                                                <option>Brazo derecho</option>
                                                            </optgroup>
                                                            <optgroup label="Miembros inferiores">
                                                                <option>Pierna izquierda</option>
                                                                <option>Pierna izquierda</option>
                                                            </optgroup>
                                                            <option value="otras">Otros</option>
                                                        </select>
                                                    </div>
                                                    <input type="text" name="otrasparteAfectadaFuerza"
                                                    id="otrasparteAfectadaFuerza"
                                                    class="form-control form-control-sm mt-2"
                                                    placeholder="Especifique otra parte afectada" style="display:none;">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-12 col-lg-12  col-md-12 col-sm-12">
                                                <label for="otrasMarchaEquilibrioGeneral font-weight-bold text-gray-800"
                                                    class="col-form-label font-weight-bold text-gray-800">Otros:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1"
                                                        name="otrasMarchaEquilibrioGeneral"
                                                        id="otrasMarchaEquilibrioGeneral" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card shadow areaSanitaria">
                            <div class="card-header">
                                <div class="row">
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="objetivosAreaSanitaria"
                                            class="col-form-label font-weight-bold text-gray-800">Objetivos:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="objetivosAreaSanitaria"
                                                name="objetivosAreaSanitaria" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="accionesAreaSanitaria"
                                            class="col-form-label font-weight-bold text-gray-800">Acciones e
                                            Intervenciones:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="accionesAreaSanitaria"
                                                name="accionesAreaSanitaria" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="responsableAreaSanitaria"
                                            class="col-form-label font-weight-bold text-gray-800">Responsable:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="responsableAreaSanitaria"
                                                name="responsableAreaSanitaria" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade mt-3" id="pills-psicologica" role="tabpanel"
                        aria-labelledby="psicologica-tab">
                        <div class="accordion accordion-group areaPsicologica" id="areaPsicologicaAccordion">
                            <div class="card shadow">
                                <div class="card-header" id="valoracionCognitivaHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseValoracionCognitiva"
                                            aria-expanded="true" aria-controls="collapseValoracionCognitiva">
                                            Valoración Cognitiva
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseValoracionCognitiva" class="collapse"
                                    aria-labelledby="valoracionCognitivaHeader">
                                    <div class="card-body">
                                        <div class="row">
                                            <label class="col-12 font-weight-bold text-gray-800">Atención:</label>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="atencionVoluntaria"
                                                    class="col-form-label">Voluntaria:</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" name="atencionVoluntaria" id="atencionVoluntaria">
                                                        <option value="">Elegir</option>
                                                        <option>Es capaz de prestar atención de forma voluntaria a diferentes actividades</option>
                                                        <option>En ocasiones necesita que se le redirija la atención hacia una actividad y/o acción</option>
                                                        <option>No mantiene la atención de manera voluntaria</option>
                                                        <option value="otras">Otras</option>
                                                    </select>
                                                </div>
                                                    <input type="text" name="otrasatencionVoluntaria"
                                                    class="form-control mt-2 d-none ocultable inputOtras"
                                                    placeholder="Especifique otro tipo de atención voluntaria">
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="atencionInvoluntaria"
                                                    class="col-form-label">Involuntaria:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="atencionInvoluntaria" id="atencionInvoluntaria" multiple="multiple">
                                                        <option>Responde a estímulos externos sonoros</option>
                                                        <option>Responde a estímulos externos visuales</option>
                                                        <option>Responde a estímulos externos táctiles</option>
                                                        <option>No esponde a estímulos externos de ningún tipo</option>
                                                        <option value="otras">Otras</option>
                                                    </select>
                                                </div>
                                                    <input type="text" name="otrasatencionInvoluntaria"
                                                    id="otrasatencionInvoluntaria"
                                                    class="form-control mt-2"
                                                    placeholder="Especifique otro tipo de atención involuntaria" style="display: none;">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-12 font-weight-bold text-gray-800">Percepción:</label>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-xl-12">
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="tipoPercepcion" id="tipoPercepcion" multiple="multiple">
                                                        <option>Identifica y nombra adecuadamente objetos cotidianos del entorno</option>
                                                        <option>Identifica y nombra adecuadamente situaciones básicas del entorno</option>
                                                        <option>Identifica y nombra adecuadamente situaciones complejas del entorno</option>
                                                        <option>Identifica y nombra adecuadamente personas cercanas del entorno</option>
                                                        <option value="otras">Otras</option>
                                                    </select>
                                                </div>
                                                    <input type="text" name="otrastipoPercepcion" id="otrastipoPercepcion"
                                                    class="form-control mt-2" style="display: none;"
                                                    placeholder="Especifique otro tipo de percepción">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12" id="percepcionObjetosCotidianos-mod" style="display: none;">
                                                <label for="percepcionObjetosCotidianos"
                                                    class="col-form-label">Objetos cotidianos:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="percepcionObjetosCotidianos" id="percepcionObjetosCotidianos" multiple="multiple">  
                                                        <option>En todas las situaciones</option>
                                                        <option>En la mayoría de las situaciones</option>
                                                        <option>En algunas situaciones puntuales</option>
                                                        <option>En ninguna situación</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12" id="percepcionSituacionesBasicas-mod" style="display: none;">
                                                <label for="percepcionSituacionesBasicas"
                                                    class="col-form-label">Situaciones básicas:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="percepcionSituacionesBasicas" id="percepcionSituacionesBasicas" multiple="multiple">
                                                        <option>En todas las situaciones</option>
                                                        <option>En la mayoría de las situaciones</option>
                                                        <option>En algunas situaciones puntuales</option>
                                                        <option>En ninguna situación</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12" id="percepcionSituacionesComplejas-mod" style="display: none;">
                                                <label for="percepcionSituacionesComplejas"
                                                    class="col-form-label">Situaciones complejas:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="percepcionSituacionesComplejas" id="percepcionSituacionesComplejas" multiple="multiple">
                                                        <option>En todas las situaciones</option>
                                                        <option>En la mayoría de las situaciones</option>
                                                        <option>En algunas situaciones puntuales</option>
                                                        <option>En ninguna situación</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12" id="percepcionPersonasCercanas-mod" style="display: none;">
                                                <label for="percepcionPersonasCercanas"
                                                    class="col-form-label">Personas cercanas:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="percepcionPersonasCercanas" id="percepcionPersonasCercanas" multiple="multiple">
                                                        <option>En todas las situaciones</option>
                                                        <option>En la mayoría de las situaciones</option>
                                                        <option>En algunas situaciones puntuales</option>
                                                        <option>En ninguna situación</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-12 font-weight-bold text-gray-800">Memoria:</label>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-xl-12">
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="tipoMemoria" id="tipoMemoria" multiple="multiple">
                                                        <option>Recuerda situaciones recientes</option>
                                                        <option>Recuerda situaciones pasadas, pero no presentes</option>
                                                        <option>Recuerda situaciones pasadas y presentes</option>
                                                        <option>Recuerda personas cercanas</option>
                                                        <option>Recuerda personas cercanas, pero no del pasado</option>
                                                        <option>Recuerda personas cercanas y del pasado</option>
                                                        <option value="otras">Otras</option>
                                                    </select>
                                                </div>
                                                    <input type="text" name="otrastipoMemoria" id="otrastipoMemoria"
                                                    class="form-control mt-2" style="display: none;"
                                                    placeholder="Especifique otro tipo de memoria">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="memoriaSituacionReciente-mod" style="display: none;">
                                                <label for="memoriaSituacionReciente"
                                                    class="col-form-label">Recuerda situaciones recientes:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="memoriaSituacionReciente" id="memoriaSituacionReciente" multiple="multiple">  
                                                        <option>Siempre</option>
                                                        <option>Frecuentemente</option>
                                                        <option>A veces</option>
                                                        <option>Raramente</option>
                                                        <option>Nunca</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="memoriaSituacionPasada-mod" style="display: none;">
                                                <label for="memoriaSituacionPasada"
                                                    class="col-form-label">Recuerda situaciones pasadas pero no presentes:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="memoriaSituacionPasada" id="memoriaSituacionPasada" multiple="multiple">
                                                        <option>Siempre</option>
                                                        <option>Frecuentemente</option>
                                                        <option>A veces</option>
                                                        <option>Raramente</option>
                                                        <option>Nunca</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="memoriaSituacionPasadaPresente-mod" style="display: none;">
                                                <label for="memoriaSituacionPasadaPresente"
                                                    class="col-form-label">Recuerda situaciones pasadas y presentes:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="memoriaSituacionPasadaPresente" id="memoriaSituacionPasadaPresente" multiple="multiple">
                                                        <option>Siempre</option>
                                                        <option>Frecuentemente</option>
                                                        <option>A veces</option>
                                                        <option>Raramente</option>
                                                        <option>Nunca</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="memoriaPersonaCercana-mod" style="display: none;">
                                                <label for="memoriaPersonaCercana"
                                                    class="col-form-label">Recuerda personas cercanas:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="memoriaPersonaCercana" id="memoriaPersonaCercana" multiple="multiple">  
                                                        <option>Siempre</option>
                                                        <option>Frecuentemente</option>
                                                        <option>A veces</option>
                                                        <option>Raramente</option>
                                                        <option>Nunca</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="memoriaPersonaCercanaNoPasado-mod" style="display: none;">
                                                <label for="memoriaPersonaCercanaNoPasado"
                                                    class="col-form-label">Recuerda personas cercanas y no del pasado:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="memoriaPersonaCercanaNoPasado" id="memoriaPersonaCercanaNoPasado" multiple="multiple">
                                                        <option>Siempre</option>
                                                        <option>Frecuentemente</option>
                                                        <option>A veces</option>
                                                        <option>Raramente</option>
                                                        <option>Nunca</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="memoriaPersonaCercanaPasado-mod" style="display: none;">
                                                <label for="memoriaPersonaCercanaPasado"
                                                    class="col-form-label">Recuerda personas cercanas y del pasado:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="memoriaPersonaCercanaPasado" id="memoriaPersonaCercanaPasado" multiple="multiple">
                                                        <option>Siempre</option>
                                                        <option>Frecuentemente</option>
                                                        <option>A veces</option>
                                                        <option>Raramente</option>
                                                        <option>Nunca</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-12 font-weight-bold text-gray-800">Orientación:</label>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <label for="orientacionEspacial"
                                                    class="col-form-label">Espacial:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="orientacionEspacial" id="orientacionEspacial" multiple="multiple">
                                                        <optgroup label="Nombra/reconoce">
                                                            <option>Su continente</option>
                                                            <option>Su país de residencia</option>
                                                            <option>Su Comunidad Autónoma</option>
                                                            <option>Su provincia</option>
                                                            <option>Su barrio</option>
                                                            <option>Su calle</option>
                                                            <option>El piso en el que vive</option>
                                                            <option value="reconoceotras">Otros</option>
                                                        </optgroup> 
                                                        <optgroup label="Realiza recorridos sencillos">
                                                            <option>De manera autónoma</option>
                                                            <option>Con pequeñas ayudas/orientaciones</option>
                                                            <option>Con grandes ayudas</option>
                                                            <option>Es dependiente</option>
                                                            <option value="recorridosotros">Otros</option>
                                                        </optgroup> 
                                                        <option value="otrosorientacion">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasreconoceotras" id="otrasreconoceotras"
                                                class="form-control mt-2"
                                                placeholder="Especifique otros nombra/reconoce" style="display: none;">
                                                <input type="text" name="otrasrecorridosotros" id="otrasrecorridosotros"
                                                class="form-control mt-2"
                                                placeholder="Especifique otros recorridos" style="display: none;">
                                                <input type="text" name="otrosorientacionEspacial" id="otrosorientacionEspacial"
                                                class="form-control mt-2"
                                                placeholder="Especifique otra orientación espacial" style="display: none;">
                                            </div>

                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <label for="orientacionTemporal"
                                                    class="col-form-label">Temporal:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="orientacionTemporal" id="orientacionTemporal" multiple="multiple">
                                                        <optgroup label="Identifica adecuadamente">
                                                            <option>Mes de año</option>
                                                            <option>Día de la semana</option>
                                                            <option>Día numérico del mes</option>
                                                            <option>Hora del día</option>
                                                            <option>Momento del día</option>
                                                            <option>Estación del año</option>
                                                            <option value="identificaotras">Otros</option>
                                                                <optgroup label="Condiciones meteorológicas">
                                                                    <option>Soleado</option>
                                                                    <option>Nublado</option>
                                                                    <option>Lluvioso</option>
                                                                    <option>Granizo</option>
                                                                    <option>Nevado</option>
                                                                    <option value="condicionesotras">Otros</option>
                                                                </optgroup>
                                                        </optgroup>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                    <input type="text" name="otrasidentifica" id="otrasidentifica"
                                                    class="form-control mt-2"
                                                    placeholder="Especifique otros identifica adecuadamente" style="display: none;">
                                                    <input type="text" name="otrascondiciones" id="otrascondiciones"
                                                    class="form-control mt-2"
                                                    placeholder="Especifique otras condiciones meteorológicas" style="display: none;">
                                                    <input type="text" name="otrosorientacionTemporal" id="otrosorientacionTemporal"
                                                    class="form-control mt-2"
                                                    placeholder="Especifique otra orientación temporal" style="display: none;">
                                            </div>

                                            <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <label for="orientacionPersonal"
                                                    class="col-form-label">Personal:</label>
                                                <div class="input-group">
                                                    <select class="form-control select2-multiple" name="orientacionPersonal" id="orientacionPersonal" multiple="multiple">
                                                        <option>Recuerda su nombre</option>
                                                        <option>Recuerda en qué año nació</option>
                                                        <option>Recuerda qué edad tiene</option>
                                                        <option>Recuerda si tiene hijos</option>
                                                        <option>Recuerda los nombres de sus hijos</option>
                                                        <option>Recuerda si tiene nietos</option>
                                                        <option>Recuerda los nombres de sus nietos</option>
                                                        <option>Recuerda fechas de nacimiento/edad de sus familiares cercanos</option>
                                                        <option>Recuerda su estado civil</option>
                                                        <option>Recuerda su número de teléfono</option>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasorientacionPersonal" id="otrasorientacionPersonal"
                                                class="form-control mt-2"
                                                placeholder="Especifique otra orientación personal" style="display: none;">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="tomaDecisiones"
                                                    class="col-form-label font-weight-bold text-gray-800">Capacidad de
                                                    tomar
                                                    decisiones:</label>
                                                    <div class="input-group">
                                                    <select class="form-control selectConOtras" name="tomaDecisiones" id="tomaDecisiones">
                                                        <option value="">Elegir</option>
                                                        <option>Independiente</option>
                                                        <option>Necesita ayuda ligera</option>
                                                        <option>Necesita bastante ayuda</option>
                                                        <option>No colabora</option>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrastomaDecisiones"
                                                class="form-control mt-2 d-none ocultable inputOtras"
                                                placeholder="Especifique otra capacidad de tomar decisiones">
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="deterioroCognitivo"
                                                    class="col-form-label font-weight-bold text-gray-800">Valoración y
                                                    graduación de deterioro cognitivo:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" id="deterioroCognitivo"
                                                        name="deterioroCognitivo" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-12 font-weight-bold text-gray-800">Lenguaje:</label>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="lenguajeCorrecto"
                                                    class="col-form-label">Identifica correctamente las palabras y su significado:</label>
                                                <div class="input-group">
                                                    <select class="form-control" name="lenguajeCorrecto" id="lenguajeCorrecto">
                                                        <option value="">Elegir</option>
                                                        <option>Siempre</option>
                                                        <option>Frecuentemente</option>
                                                        <option>A veces</option>
                                                        <option>Raramente</option>
                                                        <option>Nunca</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="lenguajeAdecuado"
                                                    class="col-form-label">Usa palabras adecuadas al tema y/o contexto de la comunicación:</label>
                                                <div class="input-group">
                                                    <select class="form-control" name="lenguajeAdecuado" id="lenguajeAdecuado">
                                                        <option value="">Elegir</option>
                                                        <option>Siempre</option>
                                                        <option>Frecuentemente</option>
                                                        <option>A veces</option>
                                                        <option>Raramente</option>
                                                        <option>Nunca</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="lenguajeDisartria"
                                                    class="col-form-label">Dificultad en la articulación de palabras (disartria):</label>
                                                <div class="input-group">
                                                    <select class="form-control" name="lenguajeDisartria" id="lenguajeDisartria">
                                                        <option value="">Elegir</option>
                                                        <option>Siempre</option>
                                                        <option>Frecuentemente</option>
                                                        <option>A veces</option>
                                                        <option>Raramente</option>
                                                        <option>Nunca</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="lenguajeConfunde"
                                                    class="col-form-label">Confunde palabras básicas y las utiliza incorrectamente en la comunicación:</label>
                                                <div class="input-group">
                                                    <select class="form-control" name="lenguajeConfunde" id="lenguajeConfunde">
                                                        <option value="">Elegir</option>
                                                        <option>Siempre</option>
                                                        <option>Frecuentemente</option>
                                                        <option>A veces</option>
                                                        <option>Raramente</option>
                                                        <option>Nunca</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="lenguajeCambioOrden"
                                                    class="col-form-label">Cambia el orden de las letras en palabras básicas:</label>
                                                <div class="input-group">
                                                    <select class="form-control" name="lenguajeCambioOrden" id="lenguajeCambioOrden">
                                                        <option value="">Elegir</option>
                                                        <option>Siempre</option>
                                                        <option>Frecuentemente</option>
                                                        <option>A veces</option>
                                                        <option>Raramente</option>
                                                        <option>Nunca</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="lenguajeEcolalia"
                                                    class="col-form-label">Repetición de palabras y/o frases (ecolalia):</label>
                                                <div class="input-group">
                                                    <select class="form-control" name="lenguajeEcolalia" id="lenguajeEcolalia">
                                                        <option value="">Elegir</option>
                                                        <option>Siempre</option>
                                                        <option>Frecuentemente</option>
                                                        <option>A veces</option>
                                                        <option>Raramente</option>
                                                        <option>Nunca</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check mt-2">
                                                    <input type="checkbox" class="form-check-input" id="otrosLenguaje">
                                                    <label class="form-check-label ml-2" for="otrosLenguaje">Otros</label>
                                                </div>
                                                <input type="text" name="otrosLenguajeBox" id="otrosLenguajeBox"
                                                    class="form-control form-control-sm mt-2" placeholder="Especifique otros lenguaje" style="display:none;">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <label for="otrosValoracionCognitiva"
                                                    class="col-form-label font-weight-bold text-gray-800">Otros:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1"
                                                        id="otrosValoracionCogonitiva" name="otrosValoracionCognitiva"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="valoracionAfectivaHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseValoracionAfectiva" aria-expanded="true"
                                            aria-controls="collapseValoracionAfectiva">
                                            Valoración Afectiva y Emocional
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseValoracionAfectiva" class="collapse"
                                    aria-labelledby="valoracionAfectivaHeader">
                                    <div class="card-body">
                                        <div class="row checkbox-row areaPsicologicaCheckbox mt-3">
                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="afliccion">
                                                    <label class="form-check-label ml-2" for="afliccion">Mantiene
                                                        expresiones de aflicción</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="dificultadesSueno">
                                                    <label class="form-check-label ml-2"
                                                        for="dificultadesSueno">Dificultades con los ciclos de
                                                        sueño</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="tristeza">
                                                    <label class="form-check-label ml-2" for="tristeza">Apariencia de
                                                        tristeza o apatía</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="ansiedad">
                                                    <label class="form-check-label ml-2" for="ansiedad">Apariencia
                                                        ansiosa</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="perdidaInteres">
                                                    <label class="form-check-label ml-2" for="perdidaInteres">Pérdida de
                                                        interés por las cosas</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="apetito">
                                                    <label class="form-check-label ml-2" for="apetito">Trastorno del
                                                        apetito</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="CambiosAnimo">
                                                    <label class="form-check-label ml-2" for="CambiosAnimo">Cambios en
                                                        el
                                                        estado anímico y labilidad emocional</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="ideaMuerte">
                                                    <label class="form-check-label ml-2" for="ideaMuerte">Ideación de
                                                        muerte/ideación o tentativas autolíticas</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="quejasSomaticas">
                                                    <label class="form-check-label ml-2" for="quejasSomaticas">Quejas
                                                        somáticas</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="otrosValoracionAfectiva">
                                                    <label class="form-check-label ml-2"
                                                        for="otrosValoracionAfectiva">Otros</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 mt-3">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrosValoracionAfectivaTexto"
                                                        id="otrosValoracionAfectivaTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Otros Valoración Afectiva y Emocional">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="trastornosConductaHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseTrastornosConducta" aria-expanded="true"
                                            aria-controls="collapseTrastornosConducta">
                                            Trastornos de Conducta
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseTrastornosConducta" class="collapse"
                                    aria-labelledby="trastornosConductaHeader">
                                    <div class="card-body">
                                        <div class="row checkbox-row areaPsicologicaCheckbox mt-2">
                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="demenciaFamiliar">
                                                    <label class="form-check-label ml-2" for="demenciaFamiliar">Historia
                                                        familiar de demencia</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row checkbox-row areaPsicologicaCheckbox mt-1">
                                            <div class="form-check col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="antecedentesPsiquiatricos">
                                                    <label class="form-check-label ml-2"
                                                        for="antecedentesPsiquiatricos">Antecedentes
                                                        psiquiátricos</label>
                                                    <div class="form-group col-11 d-none ocultable "
                                                        id="antecedentesPsiquiatricosArea">
                                                        <label for="antecedentesPsiquiatricosTexto"
                                                            class="col-form-label">Indique antecedentes:</label>
                                                        <div class="input-group">
                                                            <textarea class="form-control rounded-1"
                                                                id="antecedentesPsiquiatricosTexto"
                                                                name="antecedentesPsiquiatricosTexto"
                                                                rows="5"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row checkbox-row areaPsicologicaCheckbox mt-1">
                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="deambulacion">
                                                    <label class="form-check-label ml-2" for="deambulacion">Deambulación
                                                        -
                                                        vagabundeo</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="lenguajeOfensivo">
                                                    <label class="form-check-label ml-2" for="lenguajeOfensivo">Lenguaje
                                                        ofensivo</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="agresividadFisica">
                                                    <label class="form-check-label ml-2"
                                                        for="agresividadFisica">Agresividad
                                                        física</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="rechazoCuidados">
                                                    <label class="form-check-label ml-2" for="rechazoCuidados">Rechazo a
                                                        los
                                                        cuidados</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="delirios">
                                                    <label class="form-check-label ml-2" for="delirios">Delirios</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="agitacionPsicomotriz">
                                                    <label class="form-check-label ml-2"
                                                        for="agitacionPsicomotriz">Agitación psicomotriz</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="alucinaciones">
                                                    <label class="form-check-label ml-2"
                                                        for="alucinaciones">Alucinaciones</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="comportamientoInadecuado">
                                                    <label class="form-check-label ml-2"
                                                        for="comportamientoInadecuado">Comportamiento social
                                                        inadecuado</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12 mb-3">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="otrosTrastornoConducta">
                                                    <label class="form-check-label ml-2"
                                                        for="otrosTrastornoConducta">Otros</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12">
                                                <div class="input-group form-group">
                                                    <input type="text" name="comportamientoInadecuadoTexto"
                                                        id="comportamientoInadecuadoTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Comportamiento Social">
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 ">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrosTrastornoConductaTexto"
                                                        id="otrosTrastornoConductaTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Otros Trastornos Conducta">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header">
                                <div class="row areaPsicologica">
                                    <div class="form-group col-xl-2 col-lg-2 col-md-12 col-sm-12">
                                        <label for="proximaRevision" class="col-form-label font-weight-bold text-gray-800">Próxima revisión:</label>
                                        <div class="input-group">
                                            <input type="text" class="datepicker2" id="proximaRevision" placeholder="Seleccione fecha">
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="frecuenciaRevision" class="col-form-label font-weight-bold text-gray-800">Frecuencia:</label>
                                        <div class="input-group">
                                            <select class="form-control" name="frecuenciaRevision" id="frecuenciaRevision">
                                                <option value="">Elegir</option>
                                                <option>Semanal</option>
                                                <option>Quincenal</option>
                                                <option>Mensual</option>
                                                <option>Trimestral</option>
                                                <option>Semestral</option>
                                                <option>Anual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="responsableAreaSocial"
                                            class="col-form-label font-weight-bold text-gray-800">Responsable:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="responsableAreaPsicologica"
                                                name="responsableAreaPsicologica" rows="1"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade mt-3" id="pills-funcional" role="tabpanel"
                        aria-labelledby="funcional-tab">
                        <div class="card shadow">
                            <div class="card-header text-center text-primary font-weight-bold">
                                <p class="mb-0">Área Funcional (Terapia Ocupacional)</p>
                            </div>

                            <div class="card-body">
                                <div class="row  areaFuncional">
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="Ducha"
                                            class="col-form-label font-weight-bold text-gray-800">Ducha:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="Ducha">
                                                <option value="">Elegir</option>
                                                <option>Ayuda Ligeramente</option>
                                                <option>Proporciona bastante ayuda</option>
                                                <option>No puede ayudar</option>
                                                <option value="otras">Otras</option>
                                            </select>
                                        </div>
                                        <input type="text" name="otrasDucha"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique Otras Ayuda ducha">
                                    </div>

                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="Aseo"
                                            class="col-form-label font-weight-bold text-gray-800">Aseo:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="Aseo">
                                                <option value="">Elegir</option>
                                                <option>Ayuda Ligeramente</option>
                                                <option>Proporciona bastante ayuda</option>
                                                <option>No puede ayudar</option>
                                                <option value="otras">Otras</option>
                                            </select>
                                        </div>
                                        <input type="text" name="otrasAseo"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique Otras Ayuda Aseo">
                                    </div>
                                </div>

                                <div class="row areaFuncional">
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="Vestido"
                                            class="col-form-label font-weight-bold text-gray-800">Vestido:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="Vestido">
                                                <option value="">Elegir</option>
                                                <option>Ayuda Ligeramente</option>
                                                <option>Proporciona bastante ayuda</option>
                                                <option>No puede ayudar</option>
                                                <option value="otras">Otras</option>
                                            </select>
                                        </div>
                                        <input type="text" name="otrasVestido"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique Otras Ayuda Vestido">
                                    </div>

                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="UsoRetrete"
                                            class="col-form-label font-weight-bold text-gray-800">Uso
                                            del retrete:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="UsoRetrete">
                                                <option value="">Elegir</option>
                                                <option>Ayuda Ligeramente</option>
                                                <option>Proporciona bastante ayuda</option>
                                                <option>No puede ayudar</option>
                                                <option value="otras">Otras</option>
                                            </select>
                                        </div>
                                        <input type="text" name="otrasUsoRetrete"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique Otras Ayuda Uso Retrete">
                                    </div>
                                </div>

                                <div class="row checkbox-row mt-3 areaFuncional areaFuncionalCheckbox">
                                    <label class="col-12 font-weight-bold text-gray-800">Deambulación:</label>
                                    <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                        <div class=" form-check  mt-2">
                                            <input type="checkbox" class="form-check-input" id="rehabilitacion">
                                            <label class="form-check-label ml-2" for="rehabilitacion">Recibe
                                                rehabilitación</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                        <div class=" form-check  mt-2">
                                            <input type="checkbox" class="form-check-input" id="ayudaDesplazamiento">
                                            <label class="form-check-label ml-2" for="ayudaDesplazamiento">Precisa ayuda
                                                para desplazarse</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                        <div class=" form-check  mt-2">
                                            <input type="checkbox" class="form-check-input" id="ayudaTecnicas">
                                            <label class="form-check-label ml-2" for="ayudaTecnicas">Necesita ayuda para
                                                utilizar las ayudas técnicas</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-3">
                                        <div class=" form-check  mt-2">
                                            <input type="checkbox" class="form-check-input" id="otrasDeambulacion">
                                            <label class="form-check-label ml-2" for="otrasDeambulacion">Otras</label>
                                        </div>
                                    </div>

                                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                        <div class="input-group form-group">
                                            <input type="text" name="otrasDeambulacionTexto" id="otrasDeambulacionTexto"
                                                class="form-control form-control-sm d-none ocultable inputOtras"
                                                placeholder="Especifique Otras Deambulación">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="ayudasTecnicas"
                                            class="col-form-label">Ayudas técnicas:</label>
                                        <div class="input-group">
                                        <select class="form-control selectConOtras" name="ayudasTecnicas">
                                                <option value="">Elegir</option>
                                                <option>Andador</option>
                                                <option>Muletas</option>
                                                <option>Bastón</option>
                                                <option>Silla de ruedas</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="Encamamiento"
                                            class="col-form-label">Encamamiento:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="Encamamiento">
                                                <option value="">Elegir</option>
                                                <option>Total</option>
                                                <option>Vida cama - sillón</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row areaFuncional">
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="Transferencias"
                                            class="col-form-label font-weight-bold text-gray-800">Transferencias:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="Transferencias">
                                                <option value="">Elegir</option>
                                                <option>Ayuda en las transferencias</option>
                                                <option>No puede ayudar en las transferencias</option>
                                                <option>Grúa</option>
                                                <option value="otras">Otras</option>
                                            </select>
                                        </div>
                                        <input type="text" name="otrasTransferencias"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique Otras Ayuda en las Transferencias">
                                    </div>
                                </div>

                                <div class="row areaFuncional">
                                <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="Alimentacion"
                                            class="col-form-label font-weight-bold text-gray-800">Alimentación:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="Alimentacion">
                                                <option value="">Elegir</option>
                                                <option>Come solo/a</option>
                                                <option>Come con poca ayuda</option>
                                                <option>Come con mucha ayuda</option>
                                                <option value="otras">Otras</option>
                                            </select>
                                        </div>
                                        <input type="text" name="otrasAlimentacion"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique Otras Ayuda Alimentación">
                                    </div>

                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <label for="AlimentacionAyudasTecnicas" class="col-form-label">Usa ayudas técnicas: </label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="AlimentacionAyudasTecnicas" id="AlimentacionAyudasTecnicas">
                                                <option value="">Elegir</option>
                                                <option>Cubiertos adaptados</option>
                                                <option>Vajilla adaptada</option>
                                                <option value="otras">Otros</option>
                                            </select>
                                        </div>
                                        <input type="text" name="otrasAlimentacionAyudasTecnicas"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique otras ayudas técnicas">
                                    </div>
                                </div>

                                <div class="row col-12 mt-4 areaFuncional">
                                    <label class="col-form-label font-weight-bold text-gray-800">Actividades
                                        Instrumentales:</label>
                                </div>

                                <div class="row">
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="usoTelefono"
                                                class="col-form-label">Uso del Teléfono:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="usoTelefono">
                                                    <option value="">Elegir</option>
                                                    <option>Independiente</option>
                                                    <option>Necesita ayuda ligera</option>
                                                    <option>Necesita bastante ayuda</option>
                                                    <option>No colabora</option>
                                                    <option value="otras">Otros</option>
                                                </select>
                                            </div>
                                            <input type="text" name="otrasusoTelefono"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique otro uso del teléfono">
                                    </div>

                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="transportePublico"
                                                class="col-form-label">Transporte público:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="transportePublico">
                                                    <option value="">Elegir</option>
                                                    <option>Independiente</option>
                                                    <option>Necesita ayuda ligera</option>
                                                    <option>Necesita bastante ayuda</option>
                                                    <option>No colabora</option>
                                                    <option value="otras">Otros</option>
                                                </select>
                                            </div>
                                            <input type="text" name="otrastransportePublico"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique otro uso del transporte público">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="transportePrivado"
                                                class="col-form-label">Transporte privado:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="transportePrivado">
                                                    <option value="">Elegir</option>
                                                    <option>Independiente</option>
                                                    <option>Necesita ayuda ligera</option>
                                                    <option>Necesita bastante ayuda</option>
                                                    <option>No colabora</option>
                                                    <option value="otras">Otros</option>
                                                </select>
                                            </div>
                                            <input type="text" name="otrastransportePrivado"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique otro uso del transporte privado">
                                    </div>

                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="gestionesBanco"
                                                class="col-form-label">Gestiones en el banco:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="gestionesBanco">
                                                    <option value="">Elegir</option>
                                                    <option>Independiente</option>
                                                    <option>Necesita ayuda ligera</option>
                                                    <option>Necesita bastante ayuda</option>
                                                    <option>No colabora</option>
                                                    <option value="otras">Otros</option>
                                                </select>
                                            </div>
                                            <input type="text" name="otrasgestionesBanco"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique otro tipo gestiones en el banco">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="gestionesMedicas"
                                                class="col-form-label">Gestiones médicas:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="gestionesMedicas">
                                                    <option value="">Elegir</option>
                                                    <option>Independiente</option>
                                                    <option>Necesita ayuda ligera</option>
                                                    <option>Necesita bastante ayuda</option>
                                                    <option>No colabora</option>
                                                    <option value="otras">Otros</option>
                                                </select>
                                            </div>
                                            <input type="text" name="otrasgestionesMedicas"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique otro tipo gestiones médicas">
                                    </div>

                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="otrasGestiones"
                                                class="col-form-label">Otras gestiones (farmacia, compra...):</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="otrasGestiones">
                                                    <option value="">Elegir</option>
                                                    <option>Independiente</option>
                                                    <option>Necesita ayuda ligera</option>
                                                    <option>Necesita bastante ayuda</option>
                                                    <option>No colabora</option>
                                                    <option value="otras">Otros</option>
                                                </select>
                                            </div>
                                            <input type="text" name="otrasotrasGestiones"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique otras gestiones">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="manejoDinero"
                                                class="col-form-label">Manejo del dinero:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="manejoDinero">
                                                    <option value="">Elegir</option>
                                                    <option>Independiente</option>
                                                    <option>Necesita ayuda ligera</option>
                                                    <option>Necesita bastante ayuda</option>
                                                    <option>No colabora</option>
                                                    <option value="otras">Otros</option>
                                                </select>
                                            </div>
                                            <input type="text" name="otrasmanejoDinero"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique otro manejo del dinero">
                                    </div>

                                        <div class="form-check col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class=" form-check mt-2">
                                                <input type="checkbox" class="form-check-input" id="otrosActividadesInstrumentales">
                                                <label class="form-check-label ml-2" for="otrosActividadesInstrumentales">Otros</label>
                                            </div>
                                            <input type="text" name="otrosActividadesInstrumentalesBox" id="otrosActividadesInstrumentalesBox"
                                                class="form-control form-control-sm mt-2" placeholder="Especifique otras actividades instrumentales" style="display:none;">
                                        </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <label for="recibeRehabilitacionFisica"
                                                class="col-form-label font-weight-bold text-gray-800">Recibe rehabilitación física:</label>
                                        <div class="input-group">
                                            <select class="form-control" name="recibeRehabilitacionFisica" id="recibeRehabilitacionFisica">
                                                <option value="">Elegir</option>
                                                <option>Sí</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="frecuenciaRehabilitacionFisica-mod" style="display: none;">
                                            <label for="frecuenciaRehabilitacionFisica" class="col-form-label">Frecuencia:</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras"  name="frecuenciaRehabilitacionFisica" id="frecuenciaRehabilitacionFisica">
                                                        <option value="">Elegir</option>
                                                        <option>Diaria</option>
                                                        <option>Días alternos</option>
                                                        <option>Semanal</option>
                                                        <option value="otras">Otras</option>
                                                    </select>
                                                </div> 
                                                <input type="text" name="otrasfrecuenciaRehabilitacionFisica" id="otrasfrecuenciaRehabilitacionFisica"
                                                        class="form-control mt-2 d-none ocultable inputOtras"
                                                        placeholder="Especifique otra frecuencia">
                                    </div>

                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12" id="tipoRehabilitacionFisica-mod" style="display: none;">
                                            <label for="tipoRehabilitacionFisica" class="col-form-label">Tipo:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="tipoRehabilitacionFisica" id="tipoRehabilitacionFisica">
                                                <option value="">Elegir</option>
                                                <option>Pasiva</option>
                                                <option>Activa</option>
                                                <option value="otras">Otros</option>
                                            </select>    
                                        </div>
                                        <input type="text" name="otrastipoRehabilitacionFisica" id="otrastipoRehabilitacionFisica"
                                                        class="form-control mt-2 d-none ocultable inputOtras"
                                                        placeholder="Especifique otro tipo">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header">
                                <div class="row areaFuncional">
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="objetivosAreaFuncional"
                                            class="col-form-label font-weight-bold text-gray-800">Objetivos:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="objetivosAreaFuncional"
                                                name="objetivosAreaFuncional" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="accionesAreaFuncional"
                                            class="col-form-label font-weight-bold text-gray-800">Acciones e
                                            Intervenciones:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="accionesAreaFuncional"
                                                name="accionesAreaFuncional" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div
                                        class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12 font-weight-bold text-gray-800">
                                        <label for="responsableAreaFuncional"
                                            class="col-form-label">Responsable:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="responsableAreaFuncional"
                                                name="responsableAreaFuncional" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade mt-3" id="pills-sociocultural" role="tabpanel"
                        aria-labelledby="sociocultural-tab">
                        <div class="card shadow">
                            <div class="card-header text-center text-primary font-weight-bold">
                                <p class="mb-0">Área Animación Sociocultural</p>
                            </div>

                            <div class="card-body">
                                <div class="row areaAnimacion">
                                    <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                        <label for="Aficiones"
                                            class="col-form-label font-weight-bold text-gray-800">Aficiones e
                                            Intereses:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="Aficiones">
                                                <option value="">Elegir</option>
                                                <option>Manifiesta intereses y aficiones variados</option>
                                                <option>Manifiesta algunos intereses y aficiones</option>
                                                <option>No manifiesta interses ni aficiones</option>
                                                <option value="otras">Otras</option>
                                            </select>
                                        </div>
                                        <input type="text" name="otrasAficiones"
                                            class="form-control d-none ocultable inputOtras"
                                            placeholder="Especifique Aficiones">
                                    </div>
                                </div>

                                <div class="row checkbox-row mt-3 areaAnimacion">
                                    <label class="col-12 font-weight-bold text-gray-800">Ocupación del tiempo
                                        libre:</label>
                                    <div class="form-check col-xl-4 col-lg-3 col-md-12 col-sm-12">
                                        <div class=" form-check  mt-2 areaAnimacionCheckbox">
                                            <input type="checkbox" class="form-check-input" id="actividadesManuales">
                                            <label class="form-check-label ml-2" for="actividadesManuales">Realiza
                                                actividades manuales (tejer,coser, manualidades...)</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <div class=" form-check  mt-2 areaAnimacionCheckbox">
                                            <input type="checkbox" class="form-check-input" id="juegosMesa">
                                            <label class="form-check-label ml-2" for="juegosMesa">Juega a las cartas y a
                                                otros juegos de mesa</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <div class=" form-check  mt-2 areaAnimacionCheckbox">
                                            <input type="checkbox" class="form-check-input" id="leer">
                                            <label class="form-check-label ml-2" for="leer">Le gusta leer</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <div class=" form-check  mt-2 areaAnimacionCheckbox">
                                            <input type="checkbox" class="form-check-input" id="tv">
                                            <label class="form-check-label ml-2" for="tv">Le gusta ver la TV</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3">
                                        <div class=" form-check  mt-2 areaAnimacionCheckbox">
                                            <input type="checkbox" class="form-check-input" id="otrasTiempoLibre">
                                            <label class="form-check-label ml-2" for="otrasTiempoLibre">Otras</label>
                                        </div>
                                    </div>

                                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                        <div class="input-group form-group">
                                            <input type="text" name="otrasTiempoLibreTexto" id="otrasTiempoLibreTexto"
                                                class="form-control form-control-sm d-none ocultable inputOtras"
                                                placeholder="Especifique Otras Ocupación Tiempo Libre">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 areaAnimacion">
                                    <label class="col-12 mb-2 font-weight-bold text-gray-800">Participación en
                                        actividades:</label>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                                        <div class="form-group">
                                            <label for="relacionarseRange">Capacidad para relacionarse con otros</label>
                                            <input type="range" min="0" max="100"
                                                class="form-control form-control-range" name="relacionarseRange"
                                                id="relacionarseRange">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                                        <div class="form-group">
                                            <label for="actividadesRange">Iniciativa para participar en distintas
                                                actividades</label>
                                            <input type="range" min="0" max="100"
                                                class="form-control form-control-range" name="actividadesRange"
                                                id="actividadesRange">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                                        <div class="form-group">
                                            <label for="actividadesPlanificadasRange">Iniciativa para realizar
                                                actividades
                                                planificadas</label>
                                            <input type="range" min="0" max="100"
                                                class="form-control form-control-range"
                                                name="actividadesPlanificadasRange" id="actividadesPlanificadasRange">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                                        <div class="form-group">
                                            <label for="iniciativaPropiaRange">Facilidad para realizar actividades por
                                                iniciativa propia</label>
                                            <input type="range" min="0" max="100"
                                                class="form-control form-control-range" name="iniciativaPropiaRange"
                                                id="iniciativaPropiaRange">
                                        </div>
                                    </div>
                                    <div class="form-check col-12 areaAnimacionCheckbox">
                                        <div class=" form-check  mt-2">
                                            <input type="checkbox" class="form-check-input" id="objetivosPropios">
                                            <label class="form-check-label ml-2" for="objetivosPropios">Establece sus
                                                propios Objetivos</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-12 mb-3 areaAnimacionCheckbox">
                                        <div class=" form-check  mt-2">
                                            <input type="checkbox" class="form-check-input" id="otrasActividades">
                                            <label class="form-check-label ml-2" for="otrasActividades">Otras</label>

                                        </div>
                                    </div>

                                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                        <div class="input-group form-group">
                                            <input type="text" name="otrasActividadesTexto" id="otrasActividadesTexto"
                                                class="form-control form-control-sm d-none ocultable inputOtras"
                                                placeholder="Especifique Otras Participación en Actividades">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header">
                                <div class="row areaAnimacion">
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="objetivosAreaAnimacion"
                                            class="col-form-label font-weight-bold text-gray-800">Objetivos:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="objetivosAreaAnimacion"
                                                name="objetivosAreaAnimacion" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="accionesAreaAnimacion"
                                            class="col-form-label font-weight-bold text-gray-800">Acciones e
                                            Intervenciones:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="accionesAreaAnimacion"
                                                name="accionesAreaAnimacion" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="responsableAreaAnimacion"
                                            class="col-form-label font-weight-bold text-gray-800">Responsable:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="responsableAreaAnimacion"
                                                name="responsableAreaAnimacion" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade mt-3" id="pills-social" role="tabpanel" aria-labelledby="social-tab">
                        <div class="accordion accordion-group areaSocial" id="areaSocialAccordion">
                            <div class="card shadow">
                                <div class="card-header" id="situacionLegalHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseSituacionLegal"
                                            aria-expanded="true" aria-controls="collapseSituacionLegal">
                                            Situación Legal y de Desprotección
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseSituacionLegal" class="collapse"
                                    aria-labelledby="situacionLegalHeader">

                                </div>

                                <div class="card shadow">
                                    <div class="card-header" id="habitosOcioHeader">
                                        <h2 class="mb-0">
                                            <a class="btn btn-block text-center text-primary font-weight-bold"
                                                title="pulsar para desplegar" type="button" data-toggle="collapse"
                                                data-target="#collapseHabitosOcio" aria-expanded="true"
                                                aria-controls="collapseHabitosOcio">
                                                Hábitos de Ocio
                                            </a>
                                        </h2>
                                    </div>

                                    <div id="collapseHabitosOcio" class="collapse" aria-labelledby="habitosOcioHeader">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <label for="HabitosOcio"
                                                        class="col-form-label font-weight-bold text-gray-800">Hábitos de
                                                        Ocio:</label>
                                                    <div class="input-group">
                                                        <select class="form-control selectConOtras" name="HabitosOcio">
                                                            <option value="">Elegir</option>
                                                            <option>Le gustan las actividades en grupo</option>
                                                            <option>No le gustan las actividades en grupo</option>
                                                            <option>Le gustan las actvidades individuales</option>
                                                            <option value="otras">Otros</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div
                                                    class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                                    <div class="input-group">
                                                        <input type="text" name="otrasHabitosOcio" id="otrasHabitosOcio"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique Otros Hábitos de Ocio">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow">
                                    <div class="card-header" id="creenciasHeader">
                                        <h2 class="mb-0">
                                            <a class="btn btn-block text-center text-primary font-weight-bold"
                                                type="button" data-toggle="collapse" data-target="#collapseCreencias"
                                                aria-expanded="true" aria-controls="collapseCreencias">
                                                Creencias y Valores
                                            </a>
                                        </h2>
                                    </div>

                                    <div id="collapseCreencias" class="collapse" aria-labelledby="creenciasHeader">
                                        <div class="card-body">
                                            <div class="row  checkbox-row creenciasCheckbox">
                                                <div class="form-check">
                                                    <div class=" col-12 form-check  mt-2">
                                                        <input type="checkbox" class="form-check-input" id="creyente">
                                                        <label
                                                            class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                            for="creyente">Posee Creencias Religiosas</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" name="poseeCreencias" id="poseeCreencias"
                                                            class="form-control d-none ocultable"
                                                            placeholder="¿Cuáles?">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row  checkbox-row creenciasCheckbox">
                                                <div class="form-check">
                                                    <div class=" col-12 form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="acudeServicios">
                                                        <label
                                                            class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                            for="acudeServicios">Acude a Servicios religiosos</label>
                                                    </div>
                                                    <div class="form-group col-12 mt-2 d-none ocultable"
                                                        id="frecuenciaServicioSelect">
                                                        <div class="input-group">
                                                            <label class="form-label mr-3"
                                                                for="FrecuenciaServicio">Indique
                                                                frecuencia: </label>
                                                            <select class="form-control selectConOtras"
                                                                name="FrecuenciaServicio">
                                                                <option value="">Elegir Frecuencia</option>
                                                                <option>Diaria</option>
                                                                <option>Dominical</option>
                                                                <option>Esporádica</option>
                                                                <option value="otras">Otras</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class="input-group">
                                                        <input type="text" name="otrasFrecuenciaServicio"
                                                            id="otrasFrecuenciaServicio"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique Frecuencia Asistenia Servicos Religiosos">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row  checkbox-row creenciasCheckbox">
                                                <div class="form-check">
                                                    <div class=" col-12 form-check mt-1">
                                                        <input type="checkbox" class="form-check-input" id="noCreyente">
                                                        <label
                                                            class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                            for="noCreyente">Sin Creencias específicas</label>
                                                    </div>
                                                    <div class=" col-12 form-check  mt-4">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otrasCreencias">
                                                        <label
                                                            class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                            for="otrasCreencias">Otras</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 mt-3">
                                                    <div class="input-group">
                                                        <textarea
                                                            class="form-control rounded-1 d-none ocultable inputOtras"
                                                            name="otrasAreaCreencias" id="otrasAreaCreencias" rows="3"
                                                            placeholder="Espeficique Otras Creencias"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow">
                                    <div class="card-header" id="gestionesadministrativasHeader">
                                        <h2 class="mb-0">
                                            <a class="btn btn-block text-center text-primary font-weight-bold"
                                                title="pulsar para desplegar" type="button" data-toggle="collapse"
                                                data-target="#collapseGestionesAdministrativas" aria-expanded="true"
                                                aria-controls="collapseGestionesAdministrativas">
                                                Gestiones Administrativas
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseGestionesAdministrativas" class="collapse"
                                        aria-labelledby="gestionesadministrativasHeader">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <label for="gestionesAdministrativas"
                                                        class="col-form-label font-weight-bold text-gray-800">Gestiones
                                                        Administrativas:</label>
                                                    <div class="input-group">
                                                        <select class="form-control" name="gestionesAdministrativas">
                                                            <option value="">Elegir</option>
                                                            <option>Puede realizarlas de manera autónoma</option>
                                                            <option>Puede realizarlas con pequeñas ayudas</option>
                                                            <option>Puede realizarlas con acompañamiento</option>
                                                            <option>Necesita grandes ayudas para realizarlas</option>
                                                            <option>Necesita otras personas para realizarlas</option>
                                                            <option value="gestiones">Gestiones que no puede realizar
                                                                sin
                                                                ayuda externa</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div
                                                    class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                                    <div class="input-group">
                                                        <input type="text" name="otrasGestionesAdministrativas"
                                                            id="otrasGestionesAdministrativas"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique Ayuda Gestiones Administrativas">
                                                    </div>
                                                </div>
                                                <div
                                                    class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                                    <div class="input-group">
                                                        <textarea
                                                            class="form-control rounded-1 d-none ocultable inputOtras"
                                                            name="detalleGestiones" id="detalleGestiones" rows="2"
                                                            placeholder="Detalle las gestiones para las que necesita ayuda externa"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow">
                                    <div class="card-header" id="interrelacionSocialHeader">
                                        <h2 class="mb-0">
                                            <a class="btn btn-block text-center text-primary font-weight-bold"
                                                title="pulsar para desplegar" type="button" data-toggle="collapse"
                                                data-target="#collapseInterrelacionSocial" aria-expanded="true"
                                                aria-controls="collapseInterrelacionSocial">
                                                Interrelación Social y Familiar
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseInterrelacionSocial" class="collapse"
                                        aria-labelledby="interrelacionSocialHeader">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <label for="ConvivenciaAnterior"
                                                        class="col-form-label font-weight-bold text-gray-800">Convivencia
                                                        anterior al ingreso:</label>
                                                    <div class="input-group">
                                                        <select class="form-control selectConOtras"
                                                            name="ConvivenciaAnterior">
                                                            <option value="">Elegir</option>
                                                            <option>Vivía con su pareja</option>
                                                            <option>Vivía con sus hijos/as</option>
                                                            <option>Vivía sola/o</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div
                                                    class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                                    <div class="input-group">
                                                        <input type="text" name="otrasConvivenciaAnterior"
                                                            id="otrasConvivenciaAnterior"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique Convivencia Anterior al Ingreso">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                    <label for="causasIngreso"
                                                        class="col-form-label font-weight-bold text-gray-800">Causas del
                                                        ingreso:</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control rounded-1" name="causasIngreso"
                                                            id="causasIngreso" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <label for="RedSocial"
                                                        class="col-form-label font-weight-bold text-gray-800">A nivel
                                                        social:</label>
                                                    <div class="input-group">
                                                        <select class="form-control selectConOtras" name="RedSocial">
                                                            <option value="">Elegir</option>
                                                            <option>Tiene una red social sólida y estable</option>
                                                            <option>No mantiene red social</option>
                                                            <option>Le cuesta mantener relaciones con otras personas
                                                            </option>
                                                            <option>No se relaciona con nadie</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <label for="redFamiliar"
                                                        class="col-form-label font-weight-bold text-gray-800">A nivel
                                                        familiar:</label>
                                                    <div class="input-group">
                                                        <select class="form-control" name="redFamiliar">
                                                            <option value="">Elegir</option>
                                                            <option>Hijos/as que viven cerca y le visitan con frecuencia
                                                            </option>
                                                            <option>Hijos/as que viven cerca pero no le visitan con
                                                                frecuencia</option>
                                                            <option>Hijos/as que viven lejos y le visitan a menudo
                                                            </option>
                                                            <option>Hijos/as que viven lejos y no le visitan demasiado
                                                            </option>
                                                            <option>Hijos/as que no le visitan</option>
                                                            <option value="familiares">Recibe visitas de otros
                                                                familiares
                                                            </option>
                                                            <option>Familiares e hijos no visitan con frecuencia, pero
                                                                hablan a diario</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div
                                                    class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                                    <div class="input-group">
                                                        <input type="text" name="otrasRedSocial" id="otrasRedSocial"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique Otras Red social">
                                                    </div>
                                                </div>

                                                <div
                                                    class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                                    <div class="input-group">
                                                        <input type="text" name="otrasRedFamiliar" id="otrasRedFamiliar"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique Otras Red familiar">
                                                        <input type="text" name="familiaresRedFamiliar"
                                                            id="familiaresRedFamiliar"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique qué familiares lo visitan y con qué frecuencia">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <label for="regimenSalidas"
                                                        class="col-form-label font-weight-bold text-gray-800">Régimen de
                                                        Salidas:</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control rounded-1" name="regimenSalidas"
                                                            id="regimenSalidas" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                                    <label for="regimenVisitas"
                                                        class="col-form-label font-weight-bold text-gray-800">Régimen de
                                                        Visitas:</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control rounded-1" name="regimenVisitas"
                                                            id="regimenVisitas" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                                    <label for="otrasIniciativa"
                                                        class="col-form-label font-weight-bold text-gray-800">Otras:</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control rounded-1" name="otrasIniciativa"
                                                            id="otrasIniciativa" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow">
                                    <div class="card-header" id="participacionHeader">
                                        <h2 class="mb-0">
                                            <a class="btn btn-block text-center text-primary font-weight-bold"
                                                title="pulsar para desplegar" type="button" data-toggle="collapse"
                                                data-target="#collapseParticipacion" aria-expanded="true"
                                                aria-controls="collapseParticipacion">
                                                Iniciativa y Participación
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseParticipacion" class="collapse"
                                        aria-labelledby="participacionHeader">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <label for="IniciativaSocial"
                                                        class="col-form-label font-weight-bold text-gray-800">Iniciativa
                                                        y
                                                        Participación:</label>
                                                    <div class="input-group">
                                                        <select class="form-control selectConOtras"
                                                            name="IniciativaSocial">
                                                            <option value="">Elegir</option>
                                                            <option>Participa en las actividades de forma libre y
                                                                autónoma
                                                            </option>
                                                            <option>Participa en las actividades si se le plantean
                                                                directamente</option>
                                                            <option>Hay que insistir mucho para que participe en las
                                                                actividades</option>
                                                            <option>Acude a las actividades, pero no participa, solo
                                                                observa
                                                                la actividad</option>
                                                            <option>No participa en ninguna actividad</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div
                                                    class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                                    <div class="input-group">
                                                        <input type="text" name="otrasIniciativaSocial"
                                                            id="otrasIniciativaSocial"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique Otras Iniciativa Social">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow areaSocial">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="objetivosAreaSocial"
                                                class="col-form-label font-weight-bold text-gray-800">Objetivos:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="objetivosAreaSocial"
                                                    id="objetivosAreaSocial" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="accionesAreaSocial"
                                                class="col-form-label font-weight-bold text-gray-800">Acciones e
                                                Intervenciones:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="accionesAreaSocial"
                                                    id="accionesAreaSocial" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="responsableAreaSocial"
                                                class="col-form-label font-weight-bold text-gray-800">Responsable:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="responsableAreaSocial"
                                                    id="responsableAreaSocial" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!--INDICES KATZ Y BARTHEL-->

                    <div class="tab-pane fade mt-3" id="pills-indices" role="tabpanel" aria-labelledby="indices-tab">
                        <div class="accordion accordion-group areaSocial" id="areaSocialAccordion">
                            <div class="card shadow">
                                <div class="card-header" id="indiceHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseIndice" aria-expanded="true"
                                            aria-controls="collapseIndice">
                                            Índice de Katz
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseIndice" class="collapse" aria-labelledby="indiceHeader">
                                    <div class="card-body">
                                        <div class="card shadow d-flex align-items-center">
                                            <form action="">
                                                <div id="alerta">
                                                    <!-- <h3 data-fontsize="16" data-lineheight="22.4px"
                                                class="fusion-responsive-typography-calculated titu"
                                                style="--fontSize:16; line-height: 1.4; --minFontSize:16;">Indice de Katz</h3> -->
                                                    <table id="tabla" border="1" style="border: 1px solid #e0dede;">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="1" rowspan="2" style="color:#595c69;">
                                                                    <strong>
                                                                        <center>1. Baño</center>
                                                                    </strong></td>
                                                                <td style="padding: 0 10px; color:#595c69;">
                                                                    Independiente: Se baña solo o
                                                                    precisa ayuda para lavar alguna zona, como la
                                                                    espalda, o una
                                                                    extremidad
                                                                    con minusvalía</td>
                                                                <td>
                                                                    <left><input id="B" type="radio" name="B" value="0"
                                                                            size="2"></left>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 10px; color:#595c69;">Dependiente:
                                                                    Precisa ayuda
                                                                    para
                                                                    lavar más de una zona, para salir o entrar en la
                                                                    bañera, o no puede
                                                                    bañarse solo</td>
                                                                <td>
                                                                    <left><input id="B" type="radio" name="B" value="1"
                                                                            size="2"></left>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="1" rowspan="2" style="color:#595c69;">
                                                                    <strong>
                                                                        <center>2. Vestido</center>
                                                                    </strong></td>
                                                                <td style="padding: 0 10px; color:#595c69;">
                                                                    Independiente: Saca ropa de
                                                                    cajones y armarios, se la pone, y abrocha. Se
                                                                    excluye el acto de
                                                                    atarse
                                                                    los zapatos</td>
                                                                <td>
                                                                    <left><input id="V" type="radio" name="V" value="0"
                                                                            size="2"></left>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 10px; color:#595c69;">Dependiente:
                                                                    No se viste por
                                                                    sí
                                                                    mismo, o permanece parcialmente desvestido </td>
                                                                <td>
                                                                    <left><input id="V" type="radio" name="V" value="1"
                                                                            size="2"></left>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="1" rowspan="2" style="color:#595c69;">
                                                                    <strong>
                                                                        <center>3. Uso del WC</center>
                                                                    </strong></td>
                                                                <td style="padding: 0 10px; color:#595c69;">
                                                                    Independiente: Va al WC solo,
                                                                    se
                                                                    arregla la ropa y se limpia </td>
                                                                <td><input id="WC" type="radio" name="WC" value="0"
                                                                        size="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 10px; color:#595c69;">Dependiente:
                                                                    Precisa ayuda
                                                                    para ir
                                                                    al WC </td>
                                                                <td><input id="WC" type="radio" name="WC" value="1"
                                                                        size="2"></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="1" rowspan="2" style="color:#595c69;">
                                                                    <strong>
                                                                        <center>4. Movilidad</center>
                                                                    </strong></td>
                                                                <td style="padding: 0 10px; color:#595c69;">
                                                                    Independiente: Se levanta y
                                                                    acuesta en la cama por sí mismo, y puede levantarse
                                                                    de una silla por
                                                                    sí
                                                                    mismo</td>
                                                                <td><input id="M" type="radio" name="M" value="0"
                                                                        size="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 10px; color:#595c69;">Dependiente:
                                                                    Precisa ayuda
                                                                    para
                                                                    levantarse y acostarse en la cama o silla. No
                                                                    realiza uno o más
                                                                    desplazamientos</td>
                                                                <td><input id="M" type="radio" name="M" value="1"
                                                                        size="2"></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="1" rowspan="2" style="color:#595c69;">
                                                                    <strong>
                                                                        <center>5. Continencia</center>
                                                                    </strong></td>
                                                                <td style="padding: 0 10px; color:#595c69;">
                                                                    Independiente: Control
                                                                    completo de
                                                                    micción y defecación </td>
                                                                <td><input id="C" type="radio" name="C" value="0"
                                                                        size="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 10px; color:#595c69;">Dependiente:
                                                                    Incontinencia
                                                                    parcial
                                                                    o total de la micción o defecación </td>
                                                                <td><input id="C" type="radio" name="C" value="1"
                                                                        size="2"></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="1" rowspan="2"
                                                                    style="width:140px; color:#595c69;"><strong>
                                                                        <center>6. Alimentación</center>
                                                                    </strong></td>
                                                                <td style="padding: 0 10px; color:#595c69;">
                                                                    Independiente: Lleva el
                                                                    alimento a
                                                                    la boca desde el plato o equivalente (se excluye
                                                                    cortar la carne)
                                                                </td>
                                                                <td><input id="A" type="radio" name="A" value="0"
                                                                        size="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 10px; color:#595c69;">Dependiente:
                                                                    Precisa ayuda
                                                                    para
                                                                    comer, no come en absoluto, o requiere alimentación
                                                                    parenteral</td>
                                                                <td><input id="A" type="radio" name="A" value="1"
                                                                        size="2"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <br>
                                                    Indice de Katz <input id="IKpai" name="IK" size="4" readonly><br>
                                                    <br>

                                                    Valoración: <input id="Jpai" name="J" size="35" readonly> <br>
                                                    <br>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header" id="indiceBarthel">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseBarthel" aria-expanded="true"
                                            aria-controls="collapseBarthel">
                                            Índice de Barthel
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseBarthel" class="collapse" aria-labelledby="indiceBarthel">
                                    <div class="card-body">
                                        <div class="card shadow d-flex align-items-center">
                                            <div class="row">
                                                <div class="col-12 mb-3 mt-3" style="padding-top: 5px;">
                                                    <a class="btn btn-warning" href="../ficheros-index/escalas/ÍNDICE BARTHEL-ABVD-09.pdf" target="_blank">Descargar plantilla</a>                                     
                                                    <a href="#" id="barthelPAI" name="barthelPAI" class="btn btn-success d-none" target="_blank" >Descargar PDF</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <form method="post" enctype="multipart/form-data" id="formFicheroBarthelPai">
                                                        <label for="pdfBarthel">Subir archivo: </label>
                                                        <input type="file" id="pdfBarthel" name="pdfBarthel"  size="33" accept=".pdf" /> 
                                                    </form>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header" id="escalaNorton">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseNorton" aria-expanded="true"
                                            aria-controls="collapseNorton">
                                            Escala de Norton-UPP
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseNorton" class="collapse" aria-labelledby="escalaNorton">
                                    <div class="card-body">
                                        <div class="card shadow d-flex align-items-center">
                                            <div class="row">
                                                <div class="col-12 mb-3 mt-3" style="padding-top: 5px;">
                                                    <a class="btn btn-warning" href="../ficheros-index/escalas/ESCALA DE NORTON-UPP-33.pdf" target="_blank">Descargar plantilla</a>                                     
                                                    <a href="#" id="nortonPAI" name="nortonPAI" class="btn btn-success d-none" target="_blank">Descargar PDF</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <form method="post" enctype="multipart/form-data" id="formFicheroPai">
                                                        <label for="pdfNorton">Subir archivo: </label>
                                                        <input type="file"  id="pdfNorton" name="pdfNorton"  size="33" accept=".pdf" /> 
                                                    </form>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header" id="escalaLawton">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseLawton" aria-expanded="true"
                                            aria-controls="collapseLawton">
                                            Escala de Lawton Brody
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseLawton" class="collapse" aria-labelledby="escalaLawton">
                                    <div class="card-body">
                                        <div class="card shadow d-flex align-items-center">
                                            <div class="row">
                                                <div class="col-12 mb-3 mt-3" style="padding-top: 5px;">
                                                    <a class="btn btn-warning" href="../ficheros-index/escalas/ESCALA LAWTON BRODY-AIVD-08.pdf" target="_blank">Descargar plantilla</a>                                     
                                                    <a href="#" id="lawtonPAI" name="lawtonPAI" class="btn btn-success d-none" target="_blank">Descargar PDF</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <form method="post" enctype="multipart/form-data" id="formFicheroLawtonPai">
                                                        <label for="pdfLawton">Subir archivo: </label>
                                                        <input type="file" id="pdfLawton" name="pdfLawton"  size="33" accept=".pdf" /> 
                                                    </form>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header" id="escalaPainad">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapsePainad" aria-expanded="true"
                                            aria-controls="collapsePainad">
                                            Escala Painad
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapsePainad" class="collapse" aria-labelledby="escalaPainad">
                                    <div class="card-body">
                                        <div class="card shadow d-flex align-items-center">
                                            <div class="row">
                                                <div class="col-12 mb-3 mt-3" style="padding-top: 5px;">
                                                    <a class="btn btn-warning" href="../ficheros-index/escalas/ESCALA-PAINAD.pdf" target="_blank">Descargar plantilla</a>                                     
                                                    <a href="#" id="painadPAI" name="painadPAI" class="btn btn-success d-none" target="_blank">Descargar PDF</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <form method="post" enctype="multipart/form-data" id="formFicheroPainadPai">
                                                        <label for="pdfPainad">Subir archivo: </label>
                                                        <input type="file" id="pdfPainad" name="pdfPainad"  size="33" accept=".pdf" /> 
                                                    </form>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header" id="escalaGoldberg">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseGoldberg" aria-expanded="true"
                                            aria-controls="collapseGoldberg">
                                            Escala de ansiedad y depresión de Goldberg
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseGoldberg" class="collapse" aria-labelledby="escalaGoldberg">
                                    <div class="card-body">
                                        <div class="card shadow d-flex align-items-center">
                                            <div class="row">
                                                <div class="col-12 mb-3 mt-3" style="padding-top: 5px;">
                                                    <a class="btn btn-warning" href="../ficheros-index/escalas/GOLDBERG_depres.pdf" target="_blank">Descargar plantilla</a>                                     
                                                    <a href="#" id="goldbergPAI" name="goldbergPAI" class="btn btn-success d-none" target="_blank">Descargar PDF</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <form method="post" enctype="multipart/form-data" id="formFicheroGoldbergPai">
                                                        <label for="pdfGoldberg">Subir archivo: </label>
                                                        <input type="file" id="pdfGoldberg" name="pdfGoldberg"  size="33" accept=".pdf" /> 
                                                    </form>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header" id="escalaLobo">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseLobo" aria-expanded="true"
                                            aria-controls="collapseLobo">
                                            Mini examen cosnoscitivo de Lobo
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseLobo" class="collapse" aria-labelledby="escalaLobo">
                                    <div class="card-body">
                                        <div class="card shadow d-flex align-items-center">
                                            <div class="row">
                                                <div class="col-12 mb-3 mt-3" style="padding-top: 5px;">
                                                    <a class="btn btn-warning" href="../ficheros-index/escalas/MINI EXAMEN GOGNOSCITIVO-LOBO.pdf" target="_blank">Descargar plantilla</a>                                     
                                                    <a href="#" id="miniMentalPAI" name="miniMentalPAI" class="btn btn-success d-none" target="_blank">Descargar PDF</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <form method="post" enctype="multipart/form-data" id="formFicheroMiniMentalPai">
                                                        <label for="pdfMiniMental">Subir archivo: </label>
                                                        <input type="file" id="pdfMiniMental" name="pdfMiniMental"  size="33" accept=".pdf" /> 
                                                    </form>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header" id="escalaCaidas">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseCaidas" aria-expanded="true"
                                            aria-controls="collapseCaidas">
                                            Escala de riesgo de caídas (Downton)
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseCaidas" class="collapse" aria-labelledby="escalaCaidas">
                                    <div class="card-body">
                                        <div class="card shadow d-flex align-items-center">
                                            <div class="row">
                                                <div class="col-12 mb-3 mt-3" style="padding-top: 5px;">
                                                    <a class="btn btn-warning" href="../ficheros-index/escalas/RIESGO CAÍDAS-DOWNTON.pdf" target="_blank">Descargar plantilla</a>                                     
                                                    <a href="#" id="downtonPAI" name="downtonPAI" class="btn btn-success d-none" target="_blank">Descargar PDF</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <form method="post" enctype="multipart/form-data" id="formFicheroDowntonPai">
                                                        <label for="pdfDownton">Subir archivo: </label>
                                                        <input type="file" id="pdfDownton" name="pdfDownton"  size="33" accept=".pdf" /> 
                                                    </form>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header" id="escalaValDolor">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseValDolor" aria-expanded="true"
                                            aria-controls="collapseValDolor">
                                            Escala de valoracion del dolor
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseValDolor" class="collapse" aria-labelledby="escalaValDolor">
                                    <div class="card-body">
                                        <div class="card shadow d-flex align-items-center">
                                            <div class="row">
                                                <div class="col-12 mb-3 mt-3" style="padding-top: 5px;">
                                                    <a class="btn btn-warning" href="../ficheros-index/escalas/VALORACIÓN-DOLOR.pdf" target="_blank">Descargar plantilla</a>                                     
                                                    <a href="#" id="escalaDolorPAI" name="escalaDolorPAI" class="btn btn-success d-none" target="_blank">Descargar PDF</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <form method="post" enctype="multipart/form-data" id="formFicheroDolorPai">
                                                        <label for="pdfDolor">Subir archivo: </label>
                                                        <input type="file" id="pdfDolor" name="pdfDolor"  size="33" accept=".pdf" /> 
                                                    </form>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header" id="escalaFotos">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseFotos" aria-expanded="true"
                                            aria-controls="collapseFotos">
                                            Test fotos deterioro cognifivo
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseFotos" class="collapse" aria-labelledby="escalaFotos">
                                    <div class="card-body">
                                        <div class="card shadow d-flex align-items-center">
                                            <div class="row">
                                                <div class="col-12 mb-3 mt-3" style="padding-top: 5px;">
                                                    <a class="btn btn-warning" href="../ficheros-index/escalas/TEST FOTOS-DETERIORO COGNITIVO-30.pdf" target="_blank">Descargar plantilla</a>                                     
                                                    <a href="#" id="testFotosPAI" name="testFotosPAI" class="btn btn-success d-none" target="_blank">Descargar PDF</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <form method="post" enctype="multipart/form-data" id="formFicheroTestFotosPai">
                                                        <label for="pdfFotos">Subir archivo: </label>
                                                        <input type="file" id="pdfFotos" name="pdfFotos"  size="33" accept=".pdf" /> 
                                                    </form>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header" id="escalaPfeiffer">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapsePfeiffer" aria-expanded="true"
                                            aria-controls="collapsePfeiffer">
                                            Test de Pfeiffer
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapsePfeiffer" class="collapse" aria-labelledby="escalaPfeiffer">
                                    <div class="card-body">
                                        <div class="card shadow d-flex align-items-center">
                                            <div class="row">
                                                <div class="col-12 mb-3 mt-3" style="padding-top: 5px;">
                                                    <a class="btn btn-warning" href="../ficheros-index/escalas/TEST PFEIFFER-DETERIORO COGNITIVO-36.pdf" target="_blank">Descargar plantilla</a>                                     
                                                    <a href="#" id="pfeifferPAI" name="pfeifferPAI" class="btn btn-success d-none" target="_blank">Descargar PDF</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <form method="post" enctype="multipart/form-data" id="formFicheroPfeifferPai">
                                                        <label for="pdfPfeiffer">Subir archivo: </label>
                                                        <input type="file" id="pdfPfeiffer" name="pdfPfeiffer"  size="33" accept=".pdf" /> 
                                                    </form>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header" id="escalaMorisky">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseMorisky" aria-expanded="true"
                                            aria-controls="collapseMorisky">
                                            Test de Morisky (Toma de medicación)
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseMorisky" class="collapse" aria-labelledby="escalaMorisky">
                                    <div class="card-body">
                                        <div class="card shadow d-flex align-items-center">
                                            <div class="row">
                                                <div class="col-12 mb-3 mt-3" style="padding-top: 5px;">
                                                    <a class="btn btn-warning" href="../ficheros-index/escalas/TEST PFEIFFER-DETERIORO COGNITIVO-36.pdf" target="_blank">Descargar plantilla</a>                                     
                                                    <a href="#" id="moriskyPAI" name="moriskyPAI" class="btn btn-success d-none" target="_blank">Descargar PDF</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <form method="post" enctype="multipart/form-data" id="formFicheroMoriskyPai">
                                                        <label for="pdfMorisky">Subir archivo: </label>
                                                        <input type="file" id="pdfMorisky" name="pdfMorisky"  size="33" accept=".pdf" /> 
                                                    </form>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--End INDICES-->

                    <div class="row mt-5">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                            <button type="button" class="btn btn-success" id="boton-modificar-pai">Modificar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>