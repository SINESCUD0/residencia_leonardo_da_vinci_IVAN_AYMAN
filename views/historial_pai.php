<!-- HISTORIAL PLAN DE ATENCION INDIVIDUALIZADO -->
<div id="ver-historial-pai" class="seccion-menu residenteView" style="display: none;">
    <div class=" align-items-center justify-content-between text-center mb-3">
        <h1 class="h3 mb-0 text-gray-800">Historial Plan de Atención Individualizado</h1>
    </div>

    <?php 
       include('busqueda_residente.php'); 
	?>


<div class="seccionOcultableResidentes mt-1" id="seccionHistorialPai" style="display: none;">
        <div class="form" id="formulario-historial-pai">
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
        </div>
</div>


<div class="card-body">
    <div class="table-responsive">
    <table id="tabla-historico-pai" class="table table-striped table-bordered d-none" style="width:100%;">
        <thead>
            <tr>
            <th>Fecha</th>
            <th>Responsable</th>
            <th>Modificaciones</th>
            </tr>
        </thead>
    </table>
    </div>
</div>



</div>
