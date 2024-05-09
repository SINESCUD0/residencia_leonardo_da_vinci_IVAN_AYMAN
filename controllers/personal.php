<?php

ini_set('display_errors',1);

ini_set('display_startup_errors',1);	

error_reporting (E_ALL); 



include_once('../db/config.php');

include_once("../models/json.class.php");

require("../models/personal_model.php");

require("../models/CRUD_model.php");



$order = isset($_POST["order"]) ? " order by " . $_POST["order"] : "";

$limit = isset($_POST["limit"]) ? $_POST["limit"] : "";



if(isset($_GET["task"])){

	if($_GET["task"] == "altaPersonal"){

		$arrayCampos=$_POST;

		echo altaPersonal($conn,$arrayCampos,$order,$limit);

	}

	else if($_GET["task"] == "bajaPersonal"){

		$arrayCamposToUpdate=$_POST['objetoCamposUpdate'];

		$arrayCamposWhere = $_POST['objetoCamposWhere'];

		echo bajaPersonal($conn,$arrayCamposToUpdate,$arrayCamposWhere,$order,$limit);

	}

	else if($_GET["task"] == "consultarPersonal"){

		echo consultarTrabajador($conn,$_POST["id_personal"],$order,$limit);

	}	

	else if($_GET["task"] == "activarPersonal"){

		$arrayCamposToUpdate=$_POST['objetoCamposUpdate'];

		$arrayCamposWhere = $_POST['objetoCamposWhere'];

		echo activarTrabajador($conn,$arrayCamposToUpdate,$arrayCamposWhere);

	}

	else if($_GET["task"] == "modificarPersonal"){

		$arrayCamposToUpdate=$_POST['objetoCamposUpdate'];

		$arrayCamposWhere = $_POST['objetoCamposWhere'];

		echo modificarPersonal($conn,$arrayCamposToUpdate,$arrayCamposWhere,$order,$limit);

	}

	else if($_GET["task"] == "getResponsablesPlanta"){

		echo getResponsablesPlanta($conn,$_POST["planta"]);

	}

	else if($_GET["task"] == "modificarMisDatos"){

		$arrayCamposToUpdate=$_POST['objetoCamposUpdate'];

		$arrayCamposWhere = $_POST['objetoCamposWhere'];

		echo modificarMisDatos($conn,$arrayCamposToUpdate,$arrayCamposWhere,$order,$limit);

	}	else if($_GET["task"] == "idResponsableLogueado"){

		if (isset($_COOKIE['PHPSESSID'])) {

			session_start();

			$result =  $_SESSION['id_user'];

			echo $result;
			
		}
		
	}


	

	

	

	

	

}











?>