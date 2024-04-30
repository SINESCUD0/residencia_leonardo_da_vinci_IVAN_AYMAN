<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3"></div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="input-group form-group">
            <label class="col-6 col-form-label text-center font-weight-bold text-gray-800"> Buscar por :</label>
            <select class="custom-select modoBusquedaCategoria" id="selectCategoria">
                <option value="">Categoría:</option>
                <option value="busquedaAlimentacion">Alimentación</option>
                <option value="busquedaHigiene">Higiene y cuidado personal</option>
                <option value="busquedaLimpieza">Limpieza</option>

            </select>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3"></div>
</div>

<div class="row busquedaAlimentacion selecCategoriaOcultable" id="" style="display: none;">
    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8">
        <div class="input-group form-group">
            <div class="input-group-prepend ">
                <span class="input-group-text"><i class="fas fa-truck-moving"></i></span>
            </div>
            <select class="custom-select dni-personal" id="selectProveedor">
                <option value="">Seleccione proveedor</option>
                <?php
                        foreach($listadoProveedor as $proveedor){
                    ?>
                <option value="<?php echo $proveedor[0] ?>"><?php echo $proveedor[1] ?></option>

                <?php 
                    }
                    ?>
            </select>
        </div>
    </div>
    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
</div>

<div class="row busquedaAlimentacion selecCategoriaHiguieneOcultable" id="" style="display: none;">
    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8">
        <div class="input-group form-group">
            <div class="input-group-prepend ">
                <span class="input-group-text"><i class="fas fa-truck-moving"></i></span>
            </div>
            <select class="custom-select dni-personal" id="selectProveedorHiguiene">
                <option value="">Seleccione proveedor</option>
                <?php
                        foreach($listaHiguiene as $higuiene){
                    ?>
                <option value="<?php echo $higuiene[0] ?>"><?php echo $higuiene[1] ?></option>

                <?php 
                    }
                    ?>
            </select>
        </div>
    </div>
    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
</div>

<div class="row busquedaAlimentacion selecCategoriaLimpiezaOcultable" id="" style="display: none;">
    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8">
        <div class="input-group form-group">
            <div class="input-group-prepend ">
                <span class="input-group-text"><i class="fas fa-truck-moving"></i></span>
            </div>
            <select class="custom-select dni-personal" id="selectProveedorLimpieza">
                <option value="">Seleccione proveedor</option>
                <?php
                        foreach($listaLimpieza as $limpieza){
                    ?>
                <option value="<?php echo $limpieza[0] ?>"><?php echo $limpieza[1] ?></option>

                <?php 
                    }
                    ?>
            </select>
        </div>
    </div>
    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-2"></div>
</div>