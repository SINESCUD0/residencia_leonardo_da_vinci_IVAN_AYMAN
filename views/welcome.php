<!DOCTYPE html>

<html lang="es">



<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">



  <title>Residencia Leonardo</title>

  <link rel="icon" href="../ficheros-index/images/icono-residencia.ico">

 


   <!-- JQUERYUI css-->

  <!-- <link href="../plugins/css/jquery-ui.min.css" rel="stylesheet"/> -->
  <link href="../plugins/css/jquery-ui.min.css" rel="stylesheet"/> 

  <link href="../plugins/css/jquery-ui-timepicker-addon.min.css" rel="stylesheet"/>
  

 
  

  <!-- Custom fonts for this template-->

  <link href="../menu/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="../plugins/css/chart.min.css" rel="stylesheet" type="text/css">

  <link href="../plugins/css/font-awesome.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



  <!-- Custom styles for this template-->

  <link href="../menu/css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../plugins/css/bootstrap.min.css">

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"  onload="console.log('jquery')"></script> -->
  <script src="../plugins/js/jquery.js"></script>

  <!-- EDITADO PARA CALENTARIO Y NO FUNCIONA -->
  <script src="../plugins/js/bootstrap-datepicker-es.js" charset="UTF-8"></script>

  <!-- SELECT2   -->

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>  


  <script src="/residencialeonardo.atwebpages.com/js/katz.js" type="text/javascript"></script>






  <link rel="stylesheet" href="../plugins/css/jquery.dataTables.min.css">

  <!--<link rel="stylesheet" href="../plugins/buttons.dataTables.min.css">-->

  <!-- <link rel="stylesheet" href="../plugins/css/summernote.css">

  <link rel="stylesheet" href="../plugins/css/summernote-lite.css">

  <link rel="stylesheet" href="../plugins/css/summernote-bs4.css"> -->



  <link rel="stylesheet" href="../plugins/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="../plugins/css/estilos.css">



  <link rel="stylesheet" href="../ficheros-index/css/modal.css">



 
 



</head>



<body id="page-top">



  <!-- Page Wrapper -->

  <div id="wrapper">



    <!-- Sidebar -->

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">



		<!-- Sidebar - Brand -->

		<a class="sidebar-brand d-flex align-items-center justify-content-center" id="residencia" style="color: white; cursor: pointer;">

			<div class="sidebar-brand-icon">

				<i class="fa fa-building-o"></i>

			</div>

			<div class="sidebar-brand-text mx-3">Residencia Leonardo</div>

		</a>



		<!-- Divider -->

		<hr class="sidebar-divider">



		

		<!-- AREA RESIDENTES -->

		<li class="nav-item">

			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuResidentes" aria-expanded="true" aria-controls="collapseUtilities">

				<i class="fa fa-users" id="icono"></i>

				<span>RESIDENTES</span>

			</a>

			<div id="menuResidentes" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">

				<div>

					<ul class="navbar-nav sidebar-dark accordion" id="accordionResidentes">

						<!-- GESTION DE RESIDENTES -->

						<li class="nav-item">

							<a class="nav-link collapsed" id="navResidente" href="#" data-toggle="collapse" data-target="#menuResidente" aria-expanded="true" aria-controls="collapseTwo">

								<i class="fa fa-user" id="icono"></i>

								<span>Residente</span>

							</a>

							<div id="menuResidente" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionResidentes">

								<div class="bg-white collapse-inner rounded">

									<span class="collapse-item" id="alta-residente"><i class="fa fa-user-plus" id="icono-sub"></i>Alta Residente</span>

									<span class="collapse-item" id="baja-residente"><i class="fa fa-user-times" id="icono-sub"></i>Baja Residente</span>

									<span class="collapse-item" id="modificar-residente"><i class="fa fa-pencil" id="icono-sub"></i>Modificar Residente</span>         

									<span class="collapse-item" id="datos-contacto"><i class="fa fa-wpforms" id="icono-sub"></i>Datos de Contacto</span>

									<span class="collapse-item" id="residente"><i class="fa fa-bars" id="icono-sub"></i>Historial Residente</span>

								</div>

							</div>

						</li>

		

<?php if($rolUsuario != "limpieza" && $rolUsuario != "mantenimiento"){?>

						<!-- PLAN DE ATENCIÓN INDIVICUALIZADO -->

						<li class="nav-item">

							<a class="nav-link collapsed" id="navPai" href="#" data-toggle="collapse" data-target="#menuPai" aria-expanded="true" aria-controls="collapsePages">

								<i class="fa fa-address-card-o" id="icono"></i>

							<span>PAI</span>

							</a>

							<div id="menuPai" class="collapse" aria-labelledby="headingPages" data-parent="#accordionResidentes">

								<div class="bg-white py-2 collapse-inner rounded">

									<span class="collapse-item" id="modificar-plan"><i class="fa fa-id-card-o" id="icono-sub"></i>Modificar PAI</span>

                  <span class="collapse-item" id="historial-pai"><i class="fa fa-bars" id="icono-sub"></i>Historial PAI</span>

								</div>

							</div>

						</li>

<?php } ?>

<?php if($rolUsuario != "limpieza" && $rolUsuario != "mantenimiento"){?>
            <!--  REGISTRO DE INTERVENCIONES  -->
          <li class="nav-item">
            <a class="nav-link collapsed" id="navRegistro" href="#" data-toggle="collapse" data-target="#menuRegistro" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fa fa-table" id="icono"></i>
              <span>REGISTRO DE INTERVENCIONES</span>
            </a>
            <div id="menuRegistro" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionResidentes">
              <div class="bg-white collapse-inner rounded">
                <span class="collapse-item" id="menu-registro"><i class="fa fa-th-large" id="icono-sub"></i>Alta Registros</span>
                <span class="collapse-item" id="historial-registro"><i class="fa fa-bars" id="icono-sub"></i>Historial Registros</span>
              </div>
            </div>
          </li>
<?php } ?>

					</ul>

				</div>

			</div>

		</li>

      <!-- AREA PROFESIONALES -->

		<li class="nav-item">

			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuProfesionales" aria-expanded="true" aria-controls="collapseTwo">

				<i class="fas fa-user-tie" id="icono"></i>

				<span>PROFESIONALES</span>

			</a>

			<div id="menuProfesionales" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

				<div>

					<ul class="navbar-nav sidebar-dark accordion" id="accordionProfesionales">

						<!-- GESTION DE PERSONAL -->

						<li class="nav-item">

							<a class="nav-link collapsed" id="navPersonal" href="#" data-toggle="collapse" data-target="#menuPersonal" aria-expanded="true" aria-controls="collapseTwo">

								<i class="fa fa-user" id="icono"></i>

								<span>Personal</span>

							</a>

							<div id="menuPersonal" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionProfesionales">

								<div class="bg-white collapse-inner rounded">

<?php if($rolUsuario == "admin"){ ?>

									<span class="collapse-item" id="alta-personal"><i class="fa fa-user-plus" id="icono-sub"></i>Alta Personal</span>

									<span class="collapse-item" id="baja-personal"><i class="fa fa-user-times" id="icono-sub"></i>Baja Personal</span>

									<span class="collapse-item" id="modificar-personal"><i class="fa fa-pencil" id="icono-sub"></i>Modificar Personal</span>

									<span class="collapse-item" id="personal"><i class="fa fa-bars" id="icono-sub"></i>Historial Personal</span>

<?php }?>

									<span class="collapse-item" id="horario-personal"><i class="fa fa-clock-o" id="icono-sub"></i>Horario Personal</span>

								</div>

							</div>

						</li>

						<!-- INCIDENCIAS -->

						<li class="nav-item">

							<a class="nav-link collapsed" id="navIncidencias" href="#" data-toggle="collapse" data-target="#menuIncidencias" aria-expanded="true" aria-controls="collapsePages">

								<i class="fa fa-address-book-o" id="icono"></i>

								<span>Incidencias</span>

							</a>

							<div id="menuIncidencias" class="collapse" aria-labelledby="headingPages" data-parent="#accordionProfesionales">

								<div class="bg-white collapse-inner rounded">

									<span class="collapse-item" id="auxiliar-residente"><i class="fa fa-plus-circle" id="icono-sub"></i>Agregar Incidencia</span>

									<span class="collapse-item" id="tabla-auxiliar-residente"><i class="fa fa-id-card-o" id="icono-sub"></i>Historial Incidencias</span>

								</div>

							</div>

						</li>

						<!-- CONSULTAS MEDICAS -->

      

<?php  if($rolUsuario == "admin" || $rolUsuario == "medico"){ ?>



						<li class="nav-item">

							<a class="nav-link collapsed" id="navMedico" href="#" data-toggle="collapse" data-target="#menuMedico" aria-expanded="true" aria-controls="collapsePages">

								<i class="fas fa-stethoscope" id="icono"></i>

								<span>Médico</span>

							</a>

							<div id="menuMedico" class="collapse" aria-labelledby="headingPages" data-parent="#accordionProfesionales">

								<div class="bg-white py-2 collapse-inner rounded">

									<span class="collapse-item" id="agregar-consulta"><i class="fa fa-plus-square" id="icono-sub"></i>Agregar Consulta</span>

									<span class="collapse-item" id="consulta-tabla"><i class="fa fa-id-card-o" id="icono-sub"></i>Historial Consultas</span>

								</div>

							</div>

						</li>

<?php }?>

					</ul>

				</div>

			</div>

		</li>

 

 <?php  if($rolUsuario == "admin"){ ?>     



      <!-- AREA ADMINITRACION -->

		<li class="nav-item">

			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuAdministracion" aria-expanded="true" aria-controls="collapseTwo">

				<i class="fa fa-briefcase" id="icono"></i>

				<span>ADMINISTRACION</span>

			</a>

			<div id="menuAdministracion" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

				<div>

					<ul class="navbar-nav accordion" id="accordionAdministracion">

						<!-- GESTION DE HABITACIONES -->

						<li class="nav-item">

							<a class="nav-link collapsed" id="navHabitaciones" href="#" data-toggle="collapse" data-target="#menuHabitaciones" aria-expanded="true" aria-controls="collapsePages">

								<i class="fa fa-bed" id="icono"></i>

								<span>Habitaciones</span>

							</a>

							<div id="menuHabitaciones" class="collapse" aria-labelledby="headingPages" data-parent="#accordionAdministracion">

								<div class="bg-white py-2 collapse-inner rounded">

									<span class="collapse-item" id="mover-habitacion"><i class="fa fa-exchange" id="icono-sub"></i>Mover</span>

									<span class="collapse-item" id="tabla-residente-habitacion"><i class="fa fa-bars" id="icono-sub"></i>Historial Habitaciones</span>

								</div>

							</div>

						</li>

						<!-- GESTION DE PERSONAL -->

						<li class="nav-item">

							<a class="nav-link collapsed" id="navGestionPerosnal" href="#" data-toggle="collapse" data-target="#menuGestionPersonal" aria-expanded="true" aria-controls="collapsePages">

								<i class="fas fa-users-cog" id="icono"></i>

								<span>Personal</span>

							</a>

							<div id="menuGestionPersonal" class="collapse" aria-labelledby="headingPages" data-parent="#accordionAdministracion">

								<div class="bg-white py-2 collapse-inner rounded">

									<span class="collapse-item" id="personal-limpieza"><i class="fas fa-shower" id="icono-sub"></i>Limpieza</span>

									<span class="collapse-item" id="personal-mantenimiento"><i class="fas fa-wrench" id="icono-sub"></i>Mantenimiento</span>

									<span class="collapse-item" id="personal-resto"><i class="fa fa-user" id="icono-sub"></i>Resto</span>

								</div>

							</div>

						</li>

						<!-- PEDIDO MATERIAL -->

						<li class="nav-item">

							<a class="nav-link collapsed" href="#" id="navGestionMaterial">

								<i class="fas fa-shopping-basket" id="icono"></i>

								<span>Petición Material</span>

							</a>

						</li>

					</ul>

				</div>

			</div>

		</li>

<?php }?>

	</ul>



    <!-- Content Wrapper -->

    <div id="content-wrapper" class="d-flex flex-column">



      <!-- Main Content -->

      <div id="content">



        <!-- Topbar -->

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



          <!-- Sidebar Toggle (Topbar) -->

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">

            <i class="fa fa-bars"></i>

          </button>



          <!-- Topbar Navbar -->

          <ul class="navbar-nav ml-auto">



            <div class="topbar-divider d-none d-sm-block"></div>



            <!-- Nav Item - User Information -->

            <li class="nav-item dropdown no-arrow">

              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <!-- IMPRIMIR EL NOMBRE DE USUARIO Y APELLIDO -->

                <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                  <?php echo ($datos['nombre']." ".$datos['apellido1']); ?></span>

                <i class="fa fa-user-circle-o" style="font-size: 2rem;"></i>

              </a>

              <!-- Dropdown - User Information -->

              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <div class="dropdown-item" id="misdatos" style="cursor: pointer;">

                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>

                  Mis Datos

                </div>

                <div class="dropdown-divider"></div>

                <div class="dropdown-item" id="cerrar-sesion" data-toggle="modal" data-target="#logoutModal" style="cursor: pointer;">

                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                  Cerrar Sesión

                </div>

              </div>

            </li>



          </ul>



        </nav>

        <!-- End of Topbar -->



        <!-- Begin Page Content -->

        <div class="container-fluid">

          <div id="inicio" class="seccion-menu">

            <!-- Page Heading -->

            <div class=" align-items-center justify-content-between text-center mb-5">

              <h1 class="h3 mb-0 text-gray-800">Información</h1>

            </div>



            <!-- PRIMERA FILA -->

            <div class="row">

              <!-- TOTAL PERSONAL -->

              <div class="col-xl-6 col-md-6 mb-4">

                <div class="card border-left-warning shadow h-100 py-2">

                  <div class="card-body">

                    <div class="row no-gutters align-items-center">

                      <div class="col mr-2">

                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="font-size: 1rem;">Total Personal</div>

                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo totalPersonal($conn); ?></div>

                      </div>

                      <div class="col-auto">

                        <i class="fas fa-users fa-2x text-gray-300"></i>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <!-- TOTAL RESIDENTES -->

              <div class="col-xl-6 col-md-6 mb-4">

                <div class="card border-left-success shadow h-100 py-2">

                  <div class="card-body">

                    <div class="row no-gutters align-items-center">

                      <div class="col mr-2">

                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="font-size: 1rem;">Total Residentes</div>

                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo totalResidente($conn); ?></div>

                      </div>

                      <div class="col-auto">

                        <i class="fas fa-wheelchair fa-2x text-gray-300"></i>

                      </div>

                    </div>

                  </div>

                </div>

              </div>



            </div>

            <!-- CAMAS OCUPADAS -->

            <div class="row">

              <div class="col-xl-12 col-md-12 mb-4">

                <div class="card border-left-info shadow h-100 py-2">

                  <div class="card-body">

                    <div class="row no-gutters align-items-center">

                      <div class="col mr-2">

                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1" style="font-size: 1rem;">Camas Ocupadas</div>

                        <div class="row no-gutters align-items-center">

                          <div class="col-auto">

                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $totalHabitaciones; ?>%</div>

                          </div>

                          <div class="col">

                            <div class="progress progress-sm mr-2">

                              <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $totalHabitaciones; ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>

                            </div>

                          </div>

                        </div>

                      </div>

                      <div class="col-auto">

                        <i class="fas fa-bed fa-2x text-gray-300"></i>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>



             <!-- CHART -->

            <div class="row">

              <!-- Pie Chart -->

              <div class="col-xl-12 col-lg-12">

                <div class="card shadow mb-4">

                  <!-- Card Header - Dropdown -->

                  <div class="card-header py-3 flex-row align-items-center justify-content-between">

                    <!-- <h6 class="m-0 font-weight-bold text-primary text-center">Estadísticas</h6> -->

                  </div>

                  <!-- Card Body -->

                  <div class="card-body">

                    <div class="chart-pie pt-4 pb-2">

                      <!-- <canvas id="myPieChart"></canvas> -->

                    </div>

                    <div class="mt-4 text-center small">

                      <span class="mr-2">

                        <i class="fas fa-circle text-warning"></i> Personal

                      </span>

                      <span class="mr-2">

                        <i class="fas fa-circle text-success"></i> Residente

                      </span>

                      <span class="mr-2">

                        <i class="fas fa-circle text-info"></i> Camas

                      </span>

                    </div>

                  </div>

                </div>

              </div>

            </div>

		</div>

			

		<?php 



        include_once('mis_datos.php'); //MIS DATOS 



        /* BOTONES ADMINISTRACIÓN*/

        include_once('personal_limpieza.php'); //PERSONAL -> LIMPIEZA

        include_once('personal_mantenimiento.php'); //PERSONAL -> MANTENIMIENTO

        include_once('personal_resto.php'); //PERSONAL -> RESTO





        /*BOTÓN PETICIÓN MATERIAL */

        include_once('peticion_material.php'); //PETICIÓN MATERIAL





        /* BOTONES DE PERSONAL */

        include_once('alta_personal.php'); //ALTA PERSONAL

        include_once('baja_personal.php'); //BAJA PERSONAL

        include_once('tablas_personal.php'); //TABLAS PERSONAL

        include_once('modificar_personal.php'); //MODIFICAR PERSONAL

        include_once('horario_personal.php'); //HORARIO PERSONAL



        /* BOTONES DE RESIDENTE */
        include ($_SERVER['DOCUMENT_ROOT']."/residencialeonardo.atwebpages.com/models/modelo_habitacion.php");
        include_once('alta_residente.php'); //ALTA RESIDENTE

        include_once('baja_residente.php'); //BAJA RESIDENTE

        include_once('modificar_residente.php'); //MODIFICAR RESIDENTE

        include_once('contacto_residente.php'); //CONTACTO RESIDENTE

        include_once('tablas_residente.php'); //TABLAS RESIDENTE

        


        /* BOTONES REGISTRO DE INTERVENCIONES */
        include_once('menu_registro.php'); //ALTA REGISTROS
        include_once('historial_registro.php'); //HISTORIAL REGISTROS (van a ser 8 tablas)


        /* BOTONES HABITACIONES */

        include_once('mover_habitacion.php'); //MOVER HABITACION

        include_once('tabla_habitacion.php'); //TABLA HABITACIÓN



        /* BOTONES INCIDENCIA */

		include_once('insertar_incidencia.php'); //INSERTAR INCIDENCIA

		include_once('tabla_incidencia.php'); //TABLA INCIDENCIAS



		/* BOTONES CONSULTA */

		include_once('insertar_consulta.php'); //INSERTAR CONSULTA

		include_once('tabla_consulta.php'); //TABLA CONSULTA



		/* BOTONES PAI */

		include_once('modificar_pai.php'); //MODIFICAR PAI

    include_once('historial_pai.php'); //HISTORIAL PAI



        

        /* BOTONES ADMINISTRACIÓN*/

        // include_once('personal_limpieza.php'); //PERSONAL -> LIMPIEZA



        ?> 



        <!-- /.container-fluid -->

      </div>

      <!-- End of Main Content -->

    </div>

    <!-- End of Content Wrapper -->

  </div>

  <!-- End of Page Wrapper -->



  <!-- Scroll to Top Button-->

  <a class="scroll-to-top rounded" href="#page-top">

    <i class="fas fa-angle-up"></i>

  </a>



</body>



</html>



<!-- JQUERYUI JavaScript-->

<script type="text/javascript" src="../plugins/js/jquery.min.js"></script>

<script type="text/javascript" src="../plugins/js/jquery-ui.js"></script>

<script type="text/javascript" src="../plugins/js/jquery-ui-timepicker-addon.min.js"></script>



<!-- Bootstrap core JavaScript-->

<script type="text/javascript" src="../plugins/js/chart.min.js"></script>

<script type="text/javascript" src="../plugins/js/Chart.bundle.min.js"></script>

<script type="text/javascript" src="../plugins/js/summernote.js"></script>

<script type="text/javascript" src="../plugins/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="../plugins/js/date_fns.js"></script>



<!-- <script type="text/javascript" src="../plugins/dataTables.bootstrap4.min.js"></script> -->

<script type="text/javascript" src="../plugins/js/dataTables.buttons.min.js"></script>



<!-- FUNCIONES JS -->

<script type="text/javascript" src="../js/welcome.js"></script>

<script type="text/javascript" src="../js/funciones_misdatos.js"></script>

<script type="text/javascript" src="../js/funciones_personal.js"></script>

<script type="text/javascript" src="../js/funciones_residentes.js"></script>

<script type="text/javascript" src="../js/funciones_incidencias.js"></script>

<script type="text/javascript" src="../js/funciones_consulta_medica.js"></script>

<script type="text/javascript" src="../js/peticion_material.js"></script>

<script type="text/javascript" src="../js/funciones_habitacion.js"></script>

<script type="text/javascript" src="../js/funciones_pai.js"></script>

<script type="text/javascript" src="../js/validaciones.js"></script>

<script type="text/javascript" src="../js/funciones_registros.js"></script>


<!-- Bootstrap SWEETALERT -->

<script type="text/javascript" src="../plugins/js/sweetalert.min.js"></script>



<!-- Core plugin JavaScript-->

<script src="../menu/vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="../menu/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



<!-- Custom scripts for all pages-->

<script src="../menu/js/sb-admin-2.min.js"></script>

  

<!-- MENU SCRIPT-->

<script type="text/javascript" src="../plugins/js/buttons.flash.min.js"></script>

<script type="text/javascript" src="../plugins/js/jszip.min.js"></script>

<script type="text/javascript" src="../plugins/js/pdfmake.min.js"></script>

<script type="text/javascript" src="../plugins/js/vfs_fonts.js"></script>

<script type="text/javascript" src="../plugins/js/buttons.html5.min.js"></script>

<script type="text/javascript" src="../plugins/js/buttons.print.min.js"></script>





<script>

	

	var idUsuario = <?php echo $idUser; ?>; //guardo la id del usuario en JS



	//DATOS PARA EL CHART

	var totalPersonal = <?php echo totalPersonal($conn); ?>; //guardo el total de personal en JS

	var totalResidente =<?php echo totalResidente($conn); ?>; //guardo el total de residentes en JS

	var habitacionesOcupadas=<?php echo habitacionesOcupadas($conn); ?> //guardo el total de habitaciones ocupadas en JS





</script>

