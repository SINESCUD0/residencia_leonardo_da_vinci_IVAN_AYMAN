<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);	
error_reporting (E_ALL); 

include_once('../db/config.php');
include_once("../models/json.class.php");
require("../models/incidencia_model.php");
require("../models/CRUD_model.php");

$order = isset($_POST["order"]) ? " order by " . $_POST["order"] : "";
$limit = isset($_POST["limit"]) ? $_POST["limit"] : "";

if(isset($_GET["task"])){
	if($_GET["task"] == "insertarIncidencia")
		echo insertarIncidencia($conn,$_POST,$order,$limit);	
	
}

?>