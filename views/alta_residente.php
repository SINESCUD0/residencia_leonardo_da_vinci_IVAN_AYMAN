<head>

    <!--modal style-->



    <style>

    </style>

    <!--End script modal-->

</head>







<!-- ALTA DE RESIDENTE -->

<div id="ver-alta-residente" class="seccion-menu" style="display: none;">

    <div class=" align-items-center justify-content-between text-center mb-5">

        <h1 class="h3 mb-0 text-gray-800">Alta Residente</h1>

    </div>



    <div class="row">

        <div class="col-12 mb-4 text-center titulo-seccion">Datos del Residente:</div>

    </div>



    <div class="row">

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">DNI:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group form-group">

                <div class="input-group-prepend ">

                    <span class="input-group-text"><i class="fa fa-id-card-o"></i></span>

                </div>

                <input type="text" name="dniResidente" class="form-control" id="dniResidente" placeholder="">

            </div>

        </div>

        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">Nombre:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group form-group">

                <input type="text" name="nombreResidente" class="form-control" id="nombreResidente" placeholder="">

            </div>

        </div>

        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

    </div>



    <div class="row">

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">Primer Apellido:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group form-group">

                <input type="text" name="apellido1Residente" class="form-control" id="apellido1Residente"

                    placeholder="">

            </div>

        </div>

        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">Segundo Apellido:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group form-group">

                <input type="text" name="apellido2Residente" class="form-control" id="apellido2Residente"

                    placeholder="">

            </div>

        </div>

        <!--otro-->



        <!--otro-->

        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

    </div>



    <div class="row">

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">Fecha de Nacimiento:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group form-group">

                <input type="text" class="form-control datepicker" name="fechaNacimiento" id="fechaNacimiento"

                    placeholder="Seleccionar Fecha">

            </div>

        </div>

        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">Grado de Dependecia:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group mb-3">

                <select class="custom-select" id="gradoDependencia">

                    <option value="0">Seleccione Grado de Dependencia:</option>

                    <option value="1">Grado I: Dependencia Moderada</option>

                    <option value="2">Grado II: Dependencia Severa</option>

                    <option value="3">Grado III: Gran Dependecia</option>

                </select>

            </div>

        </div>

    </div>



    <div class="row">

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">Edad:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group form-group">

                <input type="number" name="edad" class="form-control" id="edadResidente" disabled>

            </div>

        </div>

        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800" for="">Indice de katz:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

            <form>

                <button type="button" class="btn btn-warning" data-toggle="modal"

                    data-target="#exampleModalCenter">Seleccionar</button>

            </form>

        </div>



        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800" for="">Sexo:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group mb-3">

                <select class="custom-select" id="sexo">

                    <option value="">Selecciona sexo: </option>

                    <option value="Masculino">Masculino</option>

                    <option value="Femenino">Femenino</option>

                    <option value="1">Otro</option>

                    <!--Se añade otro sexo-->

                </select>

            </div>

        </div>

    <!-- INICIO Barthel -->
        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800" for="">Indice de Barthel:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

            <a class="btn btn-warning" href="../ficheros-index/escalas/ÍNDICE BARTHEL-ABVD-09.pdf" target="_blank">Seleccionar</a><br>

            <form method="post" enctype="multipart/form-data" id="formFicheroBarthel">
             <label for="file"></label>
             <input type="file" id="pdfBarthel" name="pdfBarthel"  size="33" accept=".pdf" /> 
       
            </form>

        </div>
        <!-- FIN Barthel -->

        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

        <div class="row mt-2" id="otroSexo" style="display: none; margin-left:15rem">

            <div class=" col-xl-12 col-lg-5 col-md-12 col-sm-12 ">

                <div class="select-group form-group">

                    <input type="text" name="otroSexo" class="form-control form-control-sm"

                        placeholder="Introduzca Sexo">

                </div>

            </div>

        </div>



        <div style="background-color: rgba(0, 0, 0, 0.1); display: none;" class="modal fade" id="exampleModalCenter"

            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content" style="border-radius: 5000px; width:800px;">

                    <div class="modal-header" style="margin-bottom: -24px;border-radius:10px; border:none;">

                        <h5 class="modal-title" id="exampleModalLabel"></h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"

                            style="z-index: 1;margin-top:-30px; margin-right:-15px;">

                            <span aria-hidden="true">×</span>

                        </button>

                    </div>

                    <div class="modal-body" style="background-color:#4e73df;background-image: linear-gradient(

                180deg,#4e73df 10%,#224abe 100%);background-size: cover; border-radius:20px;">

                        <form action="">

                            <div id="alerta">

                                <h3 data-fontsize="16" data-lineheight="22.4px"

                                    class="fusion-responsive-typography-calculated titu"

                                    style="--fontSize:16; line-height: 1.4; --minFontSize:16;">Indice de Katz:</h3>

                                <table id="tabla" border="1" style="border: 1px solid #e0dede;">

                                    <tbody>

                                        <tr>

                                            <td colspan="1" rowspan="2" style="color:white;"><strong>

                                                    <center>1. Baño</center>

                                                </strong></td>

                                            <td style="padding: 0 10px; color:white;">Independiente: Se baña solo o

                                                precisa ayuda para lavar alguna zona, como la espalda, o una extremidad

                                                con minusvalía</td>

                                            <td>

                                                <left><input id="B" type="radio" name="B" value="0" size="2"></left>

                                            </td>

                                        </tr>

                                        <tr>

                                            <td style="padding: 0 10px; color:white;">Dependiente: Precisa ayuda para

                                                lavar más de una zona, para salir o entrar en la bañera, o no puede

                                                bañarse solo</td>

                                            <td>

                                                <left><input id="B" type="radio" name="B" value="1" size="2"></left>

                                            </td>

                                        </tr>





                                        <tr>

                                            <td colspan="1" rowspan="2" style="color:white;"><strong>

                                                    <center>2. Vestido</center>

                                                </strong></td>

                                            <td style="padding: 0 10px; color:white;">Independiente: Saca ropa de

                                                cajones y armarios, se la pone, y abrocha. Se excluye el acto de atarse

                                                los zapatos</td>

                                            <td>

                                                <left><input id="V" type="radio" name="V" value="0" size="2"></left>

                                            </td>

                                        </tr>

                                        <tr>

                                            <td style="padding: 0 10px; color:white;">Dependiente: No se viste por sí

                                                mismo, o permanece parcialmente desvestido </td>

                                            <td>

                                                <left><input id="V" type="radio" name="V" value="1" size="2"></left>

                                            </td>

                                        </tr>





                                        <tr>

                                            <td colspan="1" rowspan="2" style="color:white;"><strong>

                                                    <center>3. Uso del WC</center>

                                                </strong></td>

                                            <td style="padding: 0 10px; color:white;">Independiente: Va al WC solo, se

                                                arregla la ropa y se limpia </td>

                                            <td><input id="WC" type="radio" name="WC" value="0" size="2"></td>

                                        </tr>

                                        <tr>

                                            <td style="padding: 0 10px; color:white;">Dependiente: Precisa ayuda para ir

                                                al WC </td>

                                            <td><input id="WC" type="radio" name="WC" value="1" size="2"></td>

                                        </tr>





                                        <tr>

                                            <td colspan="1" rowspan="2" style="color:white;"><strong>

                                                    <center>4. Movilidad</center>

                                                </strong></td>

                                            <td style="padding: 0 10px; color:white;">Independiente: Se levanta y

                                                acuesta en la cama por sí mismo, y puede levantarse de una silla por sí

                                                mismo</td>

                                            <td><input id="M" type="radio" name="M" value="0" size="2"></td>

                                        </tr>

                                        <tr>

                                            <td style="padding: 0 10px; color:white;">Dependiente: Precisa ayuda para

                                                levantarse y acostarse en la cama o silla. No realiza uno o más

                                                desplazamientos</td>

                                            <td><input id="M" type="radio" name="M" value="1" size="2"></td>

                                        </tr>





                                        <tr>

                                            <td colspan="1" rowspan="2" style="color:white;"><strong>

                                                    <center>5. Continencia</center>

                                                </strong></td>

                                            <td style="padding: 0 10px; color:white;">Independiente: Control completo de

                                                micción y defecación </td>

                                            <td><input id="C" type="radio" name="C" value="0" size="2"></td>

                                        </tr>

                                        <tr>

                                            <td style="padding: 0 10px; color:white;">Dependiente: Incontinencia parcial

                                                o total de la micción o defecación </td>

                                            <td><input id="C" type="radio" name="C" value="1" size="2"></td>

                                        </tr>





                                        <tr>

                                            <td colspan="1" rowspan="2" style="width:140px; color:white;"><strong>

                                                    <center>6. Alimentación</center>

                                                </strong></td>

                                            <td style="padding: 0 10px; color:white;">Independiente: Lleva el alimento a

                                                la boca desde el plato o equivalente (se excluye cortar la carne)</td>

                                            <td><input id="A" type="radio" name="A" value="0" size="2"></td>

                                        </tr>

                                        <tr>

                                            <td style="padding: 0 10px; color:white;">Dependiente: Precisa ayuda para

                                                comer, no come en absoluto, o requiere alimentación parenteral</td>

                                            <td><input id="A" type="radio" name="A" value="1" size="2"></td>

                                        </tr>

                                    </tbody>

                                </table>

                                <br>

                                <br>





                                Indice de Katz <input id="IK" name="IK" size="4" readonly><br>

                                <br>



                                Valoración: <input id="J" name="J" size="35" readonly> <br>

                                <br>

                            </div>

                        </form>

                    </div>



                </div>

            </div>

        </div>


    </div>


    <!-- INICIO  Añado campo alergia: -->
    <div class="row mt-2">
  
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800" for="">Alergias:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group mb-3">

                <select class="custom-select" id="alergiaResidente">

                    <option value="">Selecciona una opción: </option>

                    <option value="No">No</option>

                    <option value="1">Si</option>

                    <!-- Se añade una o más alergias en una caja de texto -->

                </select>

            </div>

        </div>

        <!-- INICIO ESCALA DE NORTON -->

        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800" for="">Escala de Norton:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

             <a class="btn btn-warning" href="../ficheros-index/escalas/ESCALA DE NORTON-UPP-33.pdf" target="_blank">Seleccionar</a><br>

             <form method="post" enctype="multipart/form-data" id="formFichero">
                <label for="file"></label>
                <input type="file" id="pdfNorton" name="pdfNorton"  size="33" accept=".pdf" /> 
             </form>
     
        </div>
        <!-- FIN ESCALA DE NORTON -->

    </div>
     <!-- FIN  Añado campo alergia: -->

     <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

     <div class="row mt-2" id="alergiasVarias" style="display: none; margin-left:15rem">

        <div class=" col-xl-4 col-lg-3 col-md-10 col-sm-12 ">

            <div class="select-group form-group">

                <input type="text" id="alergias_true" name="alergiasVarias" class="form-control form-control-sm"

                placeholder="Introduzca Alergias">

            </div>

        </div>

    </div>





    <div class="row mt-2">

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">Asignar Habitación:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="row mt-1">

                <div class="col-12 text-center">

                    <div class="form-check form-check-inline">

                        <input class="form-check-input habIndividual" type="radio" name="tipoHabitacion"

                            value="INDIVIDUAL">

                        <label class="form-check-label" for="habIndividual">Individual</label>

                    </div>

                    <div class="form-check form-check-inline">

                        <input class="form-check-input habDoble" type="radio" name="tipoHabitacion" value="DOBLE">

                        <label class="form-check-label" for="habDoble">Doble</label>

                    </div>

                </div>

            </div>

            <div class="row mt-1 habitacionIndividual" style="display: none;">

                <div class="col-12 text-center">

                    <div class="input-group mb-3 ">

                        <select class="custom-select form-control-sm" id="habitacionIndivAsignada">

                            <option value="">Seleccione Habitación</option>

                            <?php

							foreach($habitacioneslibresIndividuales as $habitacion){

							?>

                            <option value="<?php echo $habitacion[0] ?>"><?php echo $habitacion[0] ?></option>

                            <?php 

							}

							?>

                        </select>

                    </div>

                </div>

            </div>

            <div class="row mt-1 habitacionDoble" style="display: none;">

                <div class="col-12 text-center">

                    <div class="input-group mb-3 ">

                        <select class="custom-select form-control-sm" id="habitacionDobleAsignada">

                            <option value="">Seleccione Habitación</option>

                            <?php

							foreach($habitacioneslibresDobles as $habitacion){

							?>

                            <option value="<?php echo $habitacion[0] ?>"><?php echo $habitacion[0] ?></option>

                            <?php 

							}

							?>

                        </select>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

        <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2" id="listadoResponsablesLabel"

            style="padding-top: 5px; display: none;">

            <label class="font-weight-bold text-gray-800">Profesional Responsable:</label>

        </div>

        <div class="mt-4 col-xl-3 col-lg-3 col-md-10 col-sm-10" id="listadoResponsablesSelect"

            style="padding-top: 5px; display: none;">

            <div class="input-group mb-3">

                <select class="custom-select responsableResidente" id="responsableResidente">

                    <option value="">Seleccione Responsable</option>

                </select>

            </div>

        </div>

    </div>

    <div class="row mt-4">
         <!-- INICIO Test Minimental para la valoración cognitiva -->
         <div class="col-xl-6 col-lg-6 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800" for="">Test Minimental:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

             <a class="btn btn-warning" href="../ficheros-index/escalas/MINI EXAMEN GOGNOSCITIVO-LOBO.pdf" target="_blank">Seleccionar</a><br>

             <form method="post" enctype="multipart/form-data" id="formFicheroMiniMental">
                <label for="file"></label>
                <input type="file" id="pdfMiniMental" name="pdfMiniMental"  size="33" accept=".pdf" /> 
             </form>
     
        </div>
        <!-- FIN Test Minimental para la valoración cognitiva -->
    </div>


    <div class="row mt-4">
         <!-- INICIO Indice de LAWTON  -->
         <div class="col-xl-6 col-lg-6 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800" for="">Escala de Lawton Brody:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

             <a class="btn btn-warning" href="../ficheros-index/escalas/ESCALA LAWTON BRODY-AIVD-08.pdf" target="_blank">Seleccionar</a><br>

             <form method="post" enctype="multipart/form-data" id="formFicheroLawton">
                <label for="file"></label>
                <input type="file" id="pdfLawton" name="pdfLawton"  size="33" accept=".pdf" /> 
             </form>
     
        </div>
        <!-- FIN LAWTON -->
    </div>


    <div class="row mt-4">
         <!-- INICIO Indice de Painad  -->
         <div class="col-xl-6 col-lg-6 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800" for="">Escala Painad:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

             <a class="btn btn-warning" href="../ficheros-index/escalas/ESCALA-PAINAD.pdf" target="_blank">Seleccionar</a><br>

             <form method="post" enctype="multipart/form-data" id="formFicheroPainad">
                <label for="file"></label>
                <input type="file" id="pdfPainad" name="pdfPainad"  size="33" accept=".pdf" /> 
             </form>
     
        </div>
        <!-- FIN Painad -->
    </div>


    <div class="row mt-4">
         <!-- INICIO Indice de Goldberg  -->
         <div class="col-xl-6 col-lg-6 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800" for="">Escala Goldberg:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

             <a class="btn btn-warning" href="../ficheros-index/escalas/GOLDBERG_depres.pdf" target="_blank">Seleccionar</a><br>

             <form method="post" enctype="multipart/form-data" id="formFicheroGoldberg">
                <label for="file"></label>
                <input type="file" id="pdfGoldberg" name="pdfGoldberg"  size="33" accept=".pdf" /> 
             </form>
     
        </div>
        <!-- FIN Goldberg -->
    </div>


    <div class="row mt-4">
         <!-- INICIO Indice de Downton  -->
         <div class="col-xl-6 col-lg-6 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800" for="">Escala Downton:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

             <a class="btn btn-warning" href="../ficheros-index/escalas/RIESGO CAÍDAS-DOWNTON.pdf" target="_blank">Seleccionar</a><br>

             <form method="post" enctype="multipart/form-data" id="formFicheroDownton">
                <label for="file"></label>
                <input type="file" id="pdfDownton" name="pdfDownton"  size="33" accept=".pdf" /> 
             </form>
     
        </div>
        <!-- FIN Downton -->
    </div>


    <div class="row mt-4">
         <!-- INICIO Indice de Dolor  -->
         <div class="col-xl-6 col-lg-6 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800" for="">Escala de valoración del dolor:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

             <a class="btn btn-warning" href="../ficheros-index/escalas/VALORACIÓN-DOLOR.pdf" target="_blank">Seleccionar</a><br>

             <form method="post" enctype="multipart/form-data" id="formFicheroDolor">
                <label for="file"></label>
                <input type="file" id="pdfDolor" name="pdfDolor"  size="33" accept=".pdf" /> 
             </form>
     
        </div>
        <!-- FIN Dolor -->
    </div>


    <div class="row mt-4">
         <!-- INICIO Indice de  fotos  -->
         <div class="col-xl-6 col-lg-6 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800" for="">Test fotos deterioro cognitivo:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

             <a class="btn btn-warning" href="../ficheros-index/escalas/TEST FOTOS-DETERIORO COGNITIVO-30.pdf" target="_blank">Seleccionar</a><br>

             <form method="post" enctype="multipart/form-data" id="formFicheroFotos">
                <label for="file"></label>
                <input type="file" id="pdfFotos" name="pdfFotos"  size="33" accept=".pdf" /> 
             </form>
     
        </div>
        <!-- FIN  fotos -->
    </div>


    
    <div class="row mt-4">
         <!-- INICIO Indice de  Pfeiffer  -->
         <div class="col-xl-6 col-lg-6 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800" for="">Test de Pfeiffer:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

             <a class="btn btn-warning" href="../ficheros-index/escalas/TEST PFEIFFER-DETERIORO COGNITIVO-36.pdf" target="_blank">Seleccionar</a><br>

             <form method="post" enctype="multipart/form-data" id="formFicheroPfeiffer">
                <label for="file"></label>
                <input type="file" id="pdfPfeiffer" name="pdfPfeiffer"  size="33" accept=".pdf" /> 
             </form>
     
        </div>
        <!-- FIN  Pfeiffer -->
    </div>


    <div class="row mt-4">
         <!-- INICIO Indice de  Morisky  -->
         <div class="col-xl-6 col-lg-6 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800" for="">Test de Morisky:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">

             <a class="btn btn-warning" href="../ficheros-index/escalas/TOMA DE MEDICACIÓN-06.pdf" target="_blank">Seleccionar</a><br>

             <form method="post" enctype="multipart/form-data" id="formFicheroMorisky">
                <label for="file"></label>
                <input type="file" id="pdfMorisky" name="pdfMorisky"  size="33" accept=".pdf" /> 
             </form>
     
        </div>
        <!-- FIN  Morisky -->
    </div>

    <div class="row mt-4">

        <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800" for="">Medicación:</label>

        </div>

        <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2">

            <button type="button" class="btn btn-primary" id="btn-new-medic" style="cursor: pointer !important;">Añadir medicación</button>

        </div>

    </div>

    <!--Medicación - UPDATE -->

    <div class="container">

        <div class="row d-none" id="tabla-medicacion">

            <div class="table-responsive">

                <table id="tabla-medicacion-res" class="table table-striped table-bordered mt-4" style="width:100%;">

                    <thead>

                        <tr>

                            <th>Nombre</th>

                            <th>Tipo</th>

                            <th>Via de administración</th>

                            <th>Forma farmacéutica</th>
                            <th>Cantidad</th>
                            <th>Unidad de medida</th>

                            
                            <th>Desayuno</th>
                            <th>Comida</th>
                            <th>Cena</th>
                            <th>Otros</th>
                        </tr>

                    </thead>

                </table>

            </div>

        </div>

        <div class="d-none flex-row-reverse d-flex text-center" id="div-btn-vaciar-medic">         

            <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2">

                <button type="button" class="btn btn-danger d-none" id="btn-empty-medic" style="cursor: pointer !important;">Vaciar medicación</button>

            </div>

        </div>

    </div>

    <div class="row d-none" id="form-medic-1">

        

        <div class="mt-4 col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group mb-3">

                <select class="custom-select" id="medicacion">

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

                    <option value="antiinflamatorio">Antiinflamatorios</option>

                    <option value="antipiretico">Antipiréticos</option>

                    <option value="antitusivo">Antitusivos y mucolíticos</option>

                    <option value="insomnio">Insomnio</option>

                    <option value="artrosis">Artrosis</option>

                    <option value="hipertension">Hipertensión</option>

                    <option value="colesterol">Colesterol</option>

                    <option value="anticoagulante">Anticoagulantes</option>

                    <option value="diuretico">Diuréticos</option>

                    <option value="vitaminico">Vitamínicos</option>

                    <option value="insuficiencia respiratoria">Insuficiencia respiratoria</option>

                     <!-- INICIO || AÑADIDOS Fármacos Sistema Nervioso  Y  Anticonceptivos Pag.2-->
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

                            <option value="preservativo masculino">Preservativo masculino</option>
                            <option value="preservativo femenino">Preservativo femenino</option>

                         </optgroup>

                       <option value="orales">&nbsp;&nbsp;&nbsp;Orales</option>

                       <option value="parches">&nbsp;&nbsp;&nbsp;Parches (intradérmicos)</option>

                       <option value="inyectables">&nbsp;&nbsp;&nbsp;Inyectables</option>

                         <optgroup label="&nbsp;&nbsp;Intragenitales">

                            <option value="diu">DIU</option>
                            <option value="anillo">Anillo</option>

                         </optgroup>

                    </optgroup>

                    <!-- FIN || AÑADIDOS Fármacos Sistema Nervioso  Y  Anticonceptivos -->

                </select>

            </div>

        </div>

        



        <div class="mt-4 col-xl-2 col-lg-1 col-md-0 col-sm-0">

            <div class="input-group form-group" id="tipoMedicamento" style="display:none;">

                <input type="text" name="nombreMedicamento" class="form-control" id="nombreMedicamento" placeholder="Nombre medicamen.">

            </div>

        </div>

        <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2" id="listadoViaLabel"

            style="padding-top: 5px; display: none;">

            <label class="font-weight-bold text-gray-800">Vía administración:</label>

        </div>

        <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10" id="listadoViaSelect"

            style="padding-top: 5px; display: none;">

            <div class="input-group mb-3">

                <select class="custom-select seleccionVia" id="seleccionVia">
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

        <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2" >

            <select class="custom-select" name="listadoUnidades" id="listadoUnidades" style="padding-top: 5px;display: none;">
                
                <option value="">Seleccione ud. de medida</option>
                <option value="miligramos">Miligramos</option>
                <optgroup label="U.I. (insulina)">
                <option value="U.I. insulina rapida">Rápida</option>
                <option value="U.I. insulina lenta">Lenta</option>
                </optgroup>
                <option value="mililitros">Milílitros</option>
                <option value="unidades">Unidades</option>
            </select>   

        </div>

    </div>

    <div class="row d-none" id="form-medic-2">
          <!-- INICIO caja de texto CANTIDAD para escribir aparece y desaparece -->
          <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10" id="boxCantidad" style="display: none;">
        <div class="input-group mb-3">
            <input type="text" name="nameCantidad" class="form-control" id="cantidad" placeholder="Cantidad">
        </div>
    </div>


        <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2" id="posologiaLabel"

            style="padding-top: 5px;display: none;">

            <label class="font-weight-bold text-gray-800" for="">Posología:</label>

        </div>


        <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10" id="listaDesayuno" style="display: none;">
            <div class="input-group mb-3">
                <select class="custom-select" id="desayuno">
                    <option value="">Desayuno</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
        </div>

        <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10" id="listaComida" style="display: none;">
            <div class="input-group mb-3">
            <select class="custom-select" id="comida">
                    <option value="">Comida</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    </select>
            </div>
        </div>

        <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10" id="listaCena" style="display: none;">
        <div class="input-group mb-3">
        <select class="custom-select" id="cena">
                    <option value="">Cena</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                </div>
        </div>

        <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10" id="listaOtros" style="display: none;">
            <div class="input-group mb-3">
                <input type="text" name="otrosPosologia" class="form-control" id="otrosPosologia" placeholder="Otros">
            </div>
        </div>

        <div class="row">
          <div class="flex-row-reverse d-flex align-items-right justify-content-right text-center">
            <div class="mt-4 col-6">

                <button type="button" class="btn btn-success" id="btn-add-medic" style="cursor: pointer !important;">Añadir medicación</button>

            </div>

            <div class="mt-4 col-6">

                <button type="button" class="btn btn-secondary" id="btn-cancel-medic" style="cursor: pointer !important;">Cancelar</button>

            </div>

        </div>

    </div>
    </div>

    <div class="row mt-4">

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">

            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 " style="padding-top: 5px;">

                    <label class="font-weight-bold text-gray-800">Discapacidad:</label>

                </div>

            </div>

            <div class="row  checkbox-row discapacidadAlta">

                <div class="col-10 form-check">

                    <div class=" col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input" id="intelectual">

                        <label class="form-check-label mr-1" for="intelectual">Intelectual</label>

                    </div>

                    <div class=" col-xl-3 col-lg-3 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input" id="fisica">

                        <label class="form-check-label mr-1" for="fisica">Física</label>

                    </div>

                    <div class=" col-xl-3 col-lg-3  col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input" id="visual">

                        <label class="form-check-label" for="visual">Visual</label>

                    </div>

                </div>

            </div>

            <div class="row  checkbox-row discapacidadAlta">

                <div class=" col-10 form-check">

                    <div class=" col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input mr-1" id="enfermendadMental">

                        <label class="form-check-label" for="enfermendadMental">Enf. Mental</label>

                    </div>

                    <div class=" col-xl-3 col-lg-3 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input mr-1" id="demencia">

                        <label class="form-check-label mr-1" for="demencia">Demencia</label>

                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input" id="otraDiscapacidad">

                        <label class="form-check-label" for="otraDiscapacidad">Otra</label>

                    </div>

                </div>

            </div>

            <div class="row mt-2" id="otraDiscapacidadTexto" style="display: none;">

                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">

                    <div class="input-group form-group">

                        <input type="text" name="otraDiscapacidadTexto" class="form-control form-control-sm"

                            placeholder="Introduzca Discapacidad">

                    </div>

                </div>

            </div>

        </div>





    </div>



    <div class="row mt-4">

        <div class="col-12" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">Situación Médica:</label>

        </div>

        <div class="col-12 form-check">

            <div class="row  checkbox-row sitMedicaAlta">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class=" col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input" id="enfermedadLeve">

                        <label class="form-check-label" for="enfermedadLeve">Enfermedad leve</label>

                    </div>

                    <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input" id="pronosticoReservado">

                        <label class="form-check-label mr-1" for="pronosticoReservado">Pronóstico reservado (en espera

                            de resultados)</label>

                    </div>



                </div>

            </div>

            <div class="row  checkbox-row sitMedicaAlta">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class=" col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input" id="tratamCurativo">

                        <label class="form-check-label mr-1" for="tratamCurativo">Tratamiento curativo</label>

                    </div>

                    <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input" id="tratamPaliativo">

                        <label class="form-check-label" for="tratamPaliativo">Tratamiento paliativo</label>

                    </div>

                </div>

            </div>

            <div class="row  checkbox-row sitMedicaAlta">

                <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class=" col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input mr-1" id="tratamFarmaTemp">

                        <label class="form-check-label" for="tratamFarmaTemp">Tratamiento farmacológico temporal</label>

                    </div>

                    <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input mr-1" id="tratamFarmaCron">

                        <label class="form-check-label mr-1" for="tratamFarmaCron">Tratamiento farmacológico

                            crónico</label>

                    </div>

                </div>

            </div>

            <div class="row  checkbox-row sitMedicaAlta">

                <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class=" col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input" id="deterioroCognitivo">

                        <label class="form-check-label" for="deterioroCognitivo">Deterioro cognitivo</label>

                    </div>

                    <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input" id="debilidadDebMotriz">

                        <label class="form-check-label" for="debilidadDebMotriz">Debilidad motriz</label>

                    </div>

                </div>

            </div>

            <div class="row  checkbox-row sitMedicaAlta">

                <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class=" col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input" id="desorientacion">

                        <label class="form-check-label" for="desorientacion">Desorientación</label>

                    </div>

                    <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input" id="DificultadLenguaje">

                        <label class="form-check-label" for="DificultadLenguaje">Dificultades del Lenguaje</label>

                    </div>

                </div>

            </div>

            <div class="row  checkbox-row sitMedicaAlta">

                <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class=" col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                          <input type="checkbox" class="form-check-input" id="disfagia">

                          <label class="form-check-label" for="disfagia">Disfagia</label>

                    </div>

                    <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 form-check form-check-inline mt-2">

                        <input type="checkbox" class="form-check-input" id="otraSitMedica">

                        <label class="form-check-label" for="otraSitMedica">Otra</label>

                    </div>

                </div>

            </div>

            <div class="row mt-2" id="otraSitMedicaTexto" style="display: none;">

                <div class=" col-xl-5 col-lg-5 col-md-12 col-sm-12 ">

                    <div class="input-group form-group">

                        <input type="text" name="otraSitMedicaTexto" class="form-control form-control-sm"

                            placeholder="Introduzca Situación Médica">

                    </div>

                </div>

            </div>

        </div>



    </div>





    <div class="row mt-2">

        <div class="col-12 mb-4 mt-4 text-center titulo-seccion">Datos Persona de Contacto:</div>

    </div>



    <div class="row">

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">Parentesco:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group form-group">

                <input type="text" name="parentesco" class="form-control" id="parentescoFamiliar" placeholder="">

            </div>

        </div>

        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">DNI:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group form-group">

                <div class="input-group-prepend ">

                    <span class="input-group-text"><i class="fa fa-id-card-o"></i></span>

                </div>

                <input type="text" name="dni" class="form-control" id="dniFamiliar" placeholder="">

            </div>

        </div>

    </div>



    <div class="row">

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">Nombre:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group form-group">

                <input type="text" name="nombre" class="form-control" id="nombreFamiliar" placeholder="">

            </div>

        </div>

        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">Apellidos:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group form-group">

                <input type="text" name="apellidos" class="form-control" id="apellidosFamiliar" placeholder="">

            </div>

        </div>

    </div>



    <div class="row">

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">Dirección Postal:</label>

        </div>

        <div class="col-xl-3 col-lg-9 col-md-10 col-sm-10">

            <div class="input-group form-group">

                <input type="text" name="direccion" class="form-control" id="direccionFamiliar" placeholder="">

            </div>

        </div>

        <div class="col-xl-1 col-lg-0 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">Codigo Postal:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group form-group">

                <input type="number" min="1000" max="52999" name="codigoPostal" class="form-control"

                    id="codigoPostalFamiliar" placeholder="">

            </div>

        </div>

        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">Telefono:</label>

        </div>

        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">

            <div class="input-group form-group">

                <input type="text" name="telefono" class="form-control" id="telefonoFamiliar" placeholder="">

            </div>

        </div>

        <div class="col-xl-1 col-lg-0 col-md-0 col-sm-0"></div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">

            <label class="font-weight-bold text-gray-800">Email:</label>

        </div>

        <div class="col-xl-3 col-lg-9 col-md-10 col-sm-10">

            <div class="input-group form-group">

                <input type="email" name="email" class="form-control" id="emailFamiliar" placeholder="">

            </div>

        </div>

    </div>



    <div class="row mt-5">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">

            <button type="button" class="btn btn-success" id="boton-alta-residente">Alta Residente</button>

        </div>

    </div>



</div>