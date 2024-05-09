<!--BUSQUEDA PERSONAL RESTO -->

<div id="ver-resto-personal" class="seccion-menu personalView" style="display: none;">
    <div class=" align-items-center justify-content-between text-center mb-5">
            <h1 class="h3 mb-0 text-gray-800">Resto de personal</h1>
    </div>
    <div class="custom-control custom-checkbox" style="cursor: pointer;">
    <input type="checkbox" class="custom-control-input" id="historico-personal-resto" value="historico-personal-resto" style="cursor: pointer;">
    <label class="custom-control-label font-weight-bold text-gray-800" for="historico-personal-resto" style="cursor: pointer;">Personal no Activo</label>
    </div>

    <div class="custom-control custom-checkbox mt-2" style="cursor: pointer;">
        <input type="checkbox" class="custom-control-input" id="personal-activo-resto" value="personal-activo-resto" style="cursor: pointer;">
        <label class="custom-control-label font-weight-bold text-gray-800" for="personal-activo-resto" style="cursor: pointer;">Personal en Activo</label>
    </div>


        <!--Ver tabla personal resto historico-->

        <div class="card shadow mb-4" id="ver-tabla-personal-historico-resto" style="display: none; margin-top: 20px;">
            <div class="card-header py-3 text-center">
                <h6 class="m-0 font-weight-bold text-primary">Personal no Activo</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tabla-personal-historico-resto" class="table table-striped table-bordered " style="width:100%; ">
                        <thead>
                            <tr>
                                <th class="d-none">Fecha ISO</th>
                                <th>DNI</th>
                                <th>Nombre</th>
                                <th>Primer Apellido</th>
                                <th>Segudo Apellido</th>
                                <th>Puesto laboral</th>
                                <th>Fecha Alta</th>
                                <th>Fecha Baja</th>
                                <th>Motivo Baja</th>
                                <th>Cambiar a Personal en activo</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <!--Ver tabla personal activo-->
        <div class="card shadow mb-4" id="ver-tabla-personal-activo-resto" style="display: none; margin-top: 20px;">
            <div class="card-header py-3 text-center">
                <h6 class="m-0 font-weight-bold text-primary">Personal en Activo</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tabla-personal-resto" class="table table-striped table-bordered " style="width:100%; ">
                        <thead>
                            <tr>
                                <th class="d-none">Fecha ISO</th>
                                <th>DNI</th>
                                <th>Nombre</th>
                                <th>Primer Apellido</th>
                                <th>Segudo Apellido</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <th>Puesto Laboral</th>
                                <th>Turno</th>
                                <th>Planta Asignada</th>
                                <th>Fecha Alta</th>
                                <th>Usuarios asignados</th>
                                <th> Primero apellido Residente</th>
                                <th> Segundo apellido Residente</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
</div>