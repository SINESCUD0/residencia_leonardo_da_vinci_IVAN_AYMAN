<?php
    require("../models/consulta_residente_segunPiso_model.php");

    if(isset($_POST['piso'])){
        $listadoResidentesSegunPiso = obtenerHabitaciones($_POST['piso']);
        $tabla = mostrarTabla($listadoResidentesSegunPiso);
        // echo $tabla;
    }

    return "error";


?>