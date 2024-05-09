<!-- BUSQUEDA PERSONAL -->
<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3"></div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
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
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8">
        <div class="input-group form-group">
            <div class="input-group-prepend ">
                <span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
            </div>
            <select class="custom-select listadoPersonal dni-personal">
                <option value="">Seleccione un DNI</option>
                <?php
						foreach($listadoPersonalActivo as $personal){
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

<div class="row busquedaApellidosPersonal selectPersonalOcultable" style="display: none;">
    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8">
        <div class="input-group form-group">
            <div class="input-group-prepend ">
                <span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
            </div>
            <select class="custom-select listadoPersonal apellidos-personal">
                <option value="">Seleccione apellidos y nombre </option>
                <?php
						foreach($listadoPersonalActivo as $personal){
					?>
                <option value="<?php echo $personal[0] ?>">
                    <?php echo $personal[2] . " " . $personal[3] . ", " . $personal[4]?></option>
                <?php 
					}
					?>
            </select>
        </div>
    </div>
    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
</div>