<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);	
error_reporting (E_ALL); 

include_once('../db/config.php');
include_once("../models/json.class.php");
require("../models/residente_model.php");
require("../models/CRUD_model.php");

$order = isset($_POST["order"]) ? " order by " . $_POST["order"] : "";
$limit = isset($_POST["limit"]) ? $_POST["limit"] : "";

$listadoResidentesActivos=array();

if(isset($_GET["task"])){
	//TENEMOS QUE AÑADIR TASK ALTAMEDICACION
	if($_GET["task"] == "altaResidente"){
		$datosResidente=$_POST['datosResidente'];
		$datosFamiliar = $_POST['datosFamiliar'];
		echo altaResidente($conn,$datosResidente,$datosFamiliar,$order,$limit);
		
	}else if ($_GET["task"] == "getExpediente"){
		echo getExpediente($conn, $_POST['prefijo']);	
		
	}else if($_GET["task"] == "bajaResidente"){
		$arrayCamposToUpdate=$_POST['objetoCamposUpdate'];
		$arrayCamposWhere = $_POST['objetoCamposWhere'];
		echo bajaResidente($conn,$arrayCamposToUpdate,$arrayCamposWhere,$order,$limit);
	}
	else if($_GET["task"] == "consultarResidente"){
		echo consultarResidente($conn,$_POST["id_residente"],$order,$limit);
	}	
	else if($_GET["task"] == "modificarResidente"){
		$datosResidente=$_POST['datosResidente'];
		$datosFamiliar = $_POST['datosFamiliar'];
		$arrayCamposWhere = $_POST['objetoCamposWhere'];
		echo modificarResidente($conn,$datosResidente,$datosFamiliar,$arrayCamposWhere,$order,$limit);
	}
	else if($_GET["task"] == "modificarPai"){
		$datosOtroFamiliar = null;
		$datosResidente=$_POST['datosResidente'];
		$arrayCamposWhere = $_POST['objetoCamposWhere'];
		if (isset($_POST['datosOtroFamiliar'])){
			$datosOtroFamiliar = $_POST['datosOtroFamiliar'];
		}
		echo modificarPai($conn,$datosResidente,$datosOtroFamiliar,$arrayCamposWhere,$order,$limit);
	}
	else if($_GET["task"] == "consultarPai"){
		echo consultarPai($conn,$_POST["id_residente"],$order,$limit);

	}
	else if($_GET["task"] == "guardarHistorialPai"){
		$arrayHistorial = $_POST['historial'];
		echo guardarHistorialPai($conn,$arrayHistorial);
	}
	else if ($_GET["task"] == "consultarHistorialPai"){
		echo consultarHistorialPai($conn,$_POST["id_residente"],$order,$limit);
	}
	else if($_GET["task"] == "activarResidente"){
		$arrayCamposToUpdate=$_POST['objetoCamposUpdate'];
		$arrayCamposWhere = $_POST['objetoCamposWhere'];
		echo activarResidente($conn,$arrayCamposToUpdate,$arrayCamposWhere);
	}else if($_GET["task"] == "altaMedicacion"){
		$arrayMedicamentosMedicacion = $_POST['datosMedicacion'];
		$numero = $_POST['n_medicacion_nuevo'];
		echo altaMedicacion($conn, $arrayMedicamentosMedicacion, $numero);
	}else if($_GET['task'] == 'nMedicacion'){
		echo getMaxNmedicacion($conn);
	}else if($_GET['task'] == 'modificarMedicacion'){
		$nMedicacionPersona = $_POST['medicacion_act'];


		echo updateMedicacionTable($conn, $nMedicacionPersona);
	}else if($_GET['task'] == 'subirDocumentos')
	{

		if(!empty($_FILES['pdfNorton']['name']))
		{   $msg="";
		    $uploadedFile = '';
		    if(!empty($_FILES["pdfNorton"]["type"])){
		        $msg = "Tengo un fichero||";
		        $fileName = time().'_'.$_FILES['pdfNorton']['name'];
		        $valid_extensions = array("pdf");
		        $temporary = explode(".", $_FILES["pdfNorton"]["name"]);
		        $file_extension = end($temporary);
		        if(in_array($file_extension, $valid_extensions))
		        {
		            $msg .= "ESTA EN TIPO PERMITIDO||";
		            $sourcePath = $_FILES['pdfNorton']['tmp_name'];
		            $targetPath = "../ficheros-index/escalaNorton_Residentes/".$fileName;
		            if(move_uploaded_file($sourcePath,$targetPath)){
		                $msg .= "SE HA SUBIDO||".$sourcePath."|||".$targetPath;
		                $uploadedFile = $fileName;
		            }else{
		                $msg .= "NO SE HA SUBIDO".$sourcePath."|||".$targetPath;
		            }
		        }
		    }
		}

		

		$resFichero = array("id"=>strval($fileName));
		echo json_encode($resFichero);

	}else if($_GET['task'] == 'subirDocumentoMini')
	{

		if(!empty($_FILES['pdfMiniMental']['name']))
		{   $msg="";
		    $uploadedFile = '';
		    if(!empty($_FILES["pdfMiniMental"]["type"])){
		        $msg = "Tengo un fichero||";
		        $fileName = time().'_'.$_FILES['pdfMiniMental']['name'];
		        $valid_extensions = array("pdf");
		        $temporary = explode(".", $_FILES["pdfMiniMental"]["name"]);
		        $file_extension = end($temporary);
		        if(in_array($file_extension, $valid_extensions))
		        {
		            $msg .= "ESTA EN TIPO PERMITIDO||";
		            $sourcePath = $_FILES['pdfMiniMental']['tmp_name'];
		            $targetPath = "../ficheros-index/escalaMiniMental_Residentes/".$fileName;
		            if(move_uploaded_file($sourcePath,$targetPath)){
		                $msg .= "SE HA SUBIDO||".$sourcePath."|||".$targetPath;
		                $uploadedFile = $fileName;
		            }else{
		                $msg .= "NO SE HA SUBIDO".$sourcePath."|||".$targetPath;
		            }
		        }
		    }
		}

		$resFichero = array("id"=>strval($fileName));
		echo json_encode($resFichero);

	}else if($_GET['task'] == 'subirDocumentoBarthel')
	{
	

		if(!empty($_FILES['pdfBarthel']['name']))
		{   $msg="";
		    $uploadedFile = '';
		    if(!empty($_FILES["pdfBarthel"]["type"])){
		        $msg = "Tengo un fichero||";
		        $fileName = time().'_'.$_FILES['pdfBarthel']['name'];
		        $valid_extensions = array("pdf");
		        $temporary = explode(".", $_FILES["pdfBarthel"]["name"]);
		        $file_extension = end($temporary);
		        if(in_array($file_extension, $valid_extensions))
		        {
		            $msg .= "ESTA EN TIPO PERMITIDO||";
		            $sourcePath = $_FILES['pdfBarthel']['tmp_name'];
		            $targetPath = "../ficheros-index/escalaBarthel_Residentes/".$fileName;
		            if(move_uploaded_file($sourcePath,$targetPath)){
		                $msg .= "SE HA SUBIDO||".$sourcePath."|||".$targetPath;
		                $uploadedFile = $fileName;
		            }else{
		                $msg .= "NO SE HA SUBIDO".$sourcePath."|||".$targetPath;
		            }
		        }
		    }
		}
		$resFichero = array("id"=>strval($fileName));
		echo json_encode($resFichero);

	}else if($_GET['task'] == 'subirDocumentoLawton')
	{

		if(!empty($_FILES['pdfLawton']['name']))
		{   $msg="";
		    $uploadedFile = '';
		    if(!empty($_FILES["pdfLawton"]["type"])){
		        $msg = "Tengo un fichero||";
		        $fileName = time().'_'.$_FILES['pdfLawton']['name'];
		        $valid_extensions = array("pdf");
		        $temporary = explode(".", $_FILES["pdfLawton"]["name"]);
		        $file_extension = end($temporary);
		        if(in_array($file_extension, $valid_extensions))
		        {
		            $msg .= "ESTA EN TIPO PERMITIDO||";
		            $sourcePath = $_FILES['pdfLawton']['tmp_name'];
		            $targetPath = "../ficheros-index/escalaLawton_Residentes/".$fileName;
		            if(move_uploaded_file($sourcePath,$targetPath)){
		                $msg .= "SE HA SUBIDO||".$sourcePath."|||".$targetPath;
		                $uploadedFile = $fileName;
		            }else{
		                $msg .= "NO SE HA SUBIDO".$sourcePath."|||".$targetPath;
		            }
		        }
		    }
		}

		$resFichero = array("id"=>strval($fileName));
		echo json_encode($resFichero);//1111122
	}else if($_GET['task'] == 'subirDocumentoPainad')
	{

		if(!empty($_FILES['pdfPainad']['name']))
		{   $msg="";
		    $uploadedFile = '';
		    if(!empty($_FILES["pdfPainad"]["type"])){
		        $msg = "Tengo un fichero||";
		        $fileName = time().'_'.$_FILES['pdfPainad']['name'];
		        $valid_extensions = array("pdf");
		        $temporary = explode(".", $_FILES["pdfPainad"]["name"]);
		        $file_extension = end($temporary);
		        if(in_array($file_extension, $valid_extensions))
		        {
		            $msg .= "ESTA EN TIPO PERMITIDO||";
		            $sourcePath = $_FILES['pdfPainad']['tmp_name'];
		            $targetPath = "../ficheros-index/escalaPainad_Residentes/".$fileName;
		            if(move_uploaded_file($sourcePath,$targetPath)){
		                $msg .= "SE HA SUBIDO||".$sourcePath."|||".$targetPath;
		                $uploadedFile = $fileName;
		            }else{
		                $msg .= "NO SE HA SUBIDO".$sourcePath."|||".$targetPath;
		            }
		        }
		    }
		}

		$resFichero = array("id"=>strval($fileName));
		echo json_encode($resFichero);//1111122
	}else if($_GET['task'] == 'subirDocumentoGoldberg')
	{

		if(!empty($_FILES['pdfGoldberg']['name']))
		{   $msg="";
		    $uploadedFile = '';
		    if(!empty($_FILES["pdfGoldberg"]["type"])){
		        $msg = "Tengo un fichero||";
		        $fileName = time().'_'.$_FILES['pdfGoldberg']['name'];
		        $valid_extensions = array("pdf");
		        $temporary = explode(".", $_FILES["pdfGoldberg"]["name"]);
		        $file_extension = end($temporary);
		        if(in_array($file_extension, $valid_extensions))
		        {
		            $msg .= "ESTA EN TIPO PERMITIDO||";
		            $sourcePath = $_FILES['pdfGoldberg']['tmp_name'];
		            $targetPath = "../ficheros-index/escalaGoldberg_Residentes/".$fileName;
		            if(move_uploaded_file($sourcePath,$targetPath)){
		                $msg .= "SE HA SUBIDO||".$sourcePath."|||".$targetPath;
		                $uploadedFile = $fileName;
		            }else{
		                $msg .= "NO SE HA SUBIDO".$sourcePath."|||".$targetPath;
		            }
		        }
		    }
		}

		$resFichero = array("id"=>strval($fileName));
		echo json_encode($resFichero);//1111122
	}else if($_GET['task'] == 'subirDocumentoDownton')
	{

		if(!empty($_FILES['pdfDownton']['name']))
		{   $msg="";
		    $uploadedFile = '';
		    if(!empty($_FILES["pdfDownton"]["type"])){
		        $msg = "Tengo un fichero||";
		        $fileName = time().'_'.$_FILES['pdfDownton']['name'];
		        $valid_extensions = array("pdf");
		        $temporary = explode(".", $_FILES["pdfDownton"]["name"]);
		        $file_extension = end($temporary);
		        if(in_array($file_extension, $valid_extensions))
		        {
		            $msg .= "ESTA EN TIPO PERMITIDO||";
		            $sourcePath = $_FILES['pdfDownton']['tmp_name'];
		            $targetPath = "../ficheros-index/escalaDownton_Residentes/".$fileName;
		            if(move_uploaded_file($sourcePath,$targetPath)){
		                $msg .= "SE HA SUBIDO||".$sourcePath."|||".$targetPath;
		                $uploadedFile = $fileName;
		            }else{
		                $msg .= "NO SE HA SUBIDO".$sourcePath."|||".$targetPath;
		            }
		        }
		    }
		}

		$resFichero = array("id"=>strval($fileName));
		echo json_encode($resFichero);//1111122
	}else if($_GET['task'] == 'subirDocumentoDolor')
	{

		if(!empty($_FILES['pdfDolor']['name']))
		{   $msg="";
		    $uploadedFile = '';
		    if(!empty($_FILES["pdfDolor"]["type"])){
		        $msg = "Tengo un fichero||";
		        $fileName = time().'_'.$_FILES['pdfDolor']['name'];
		        $valid_extensions = array("pdf");
		        $temporary = explode(".", $_FILES["pdfDolor"]["name"]);
		        $file_extension = end($temporary);
		        if(in_array($file_extension, $valid_extensions))
		        {
		            $msg .= "ESTA EN TIPO PERMITIDO||";
		            $sourcePath = $_FILES['pdfDolor']['tmp_name'];
		            $targetPath = "../ficheros-index/escalaDolor_Residentes/".$fileName;
		            if(move_uploaded_file($sourcePath,$targetPath)){
		                $msg .= "SE HA SUBIDO||".$sourcePath."|||".$targetPath;
		                $uploadedFile = $fileName;
		            }else{
		                $msg .= "NO SE HA SUBIDO".$sourcePath."|||".$targetPath;
		            }
		        }
		    }
		}

		$resFichero = array("id"=>strval($fileName));
		echo json_encode($resFichero);//1111122
	}else if($_GET['task'] == 'subirDocumentoFotos')
	{

		if(!empty($_FILES['pdfFotos']['name']))
		{   $msg="";
		    $uploadedFile = '';
		    if(!empty($_FILES["pdfFotos"]["type"])){
		        $msg = "Tengo un fichero||";
		        $fileName = time().'_'.$_FILES['pdfFotos']['name'];
		        $valid_extensions = array("pdf");
		        $temporary = explode(".", $_FILES["pdfFotos"]["name"]);
		        $file_extension = end($temporary);
		        if(in_array($file_extension, $valid_extensions))
		        {
		            $msg .= "ESTA EN TIPO PERMITIDO||";
		            $sourcePath = $_FILES['pdfFotos']['tmp_name'];
		            $targetPath = "../ficheros-index/escalaFotos_Residentes/".$fileName;
		            if(move_uploaded_file($sourcePath,$targetPath)){
		                $msg .= "SE HA SUBIDO||".$sourcePath."|||".$targetPath;
		                $uploadedFile = $fileName;
		            }else{
		                $msg .= "NO SE HA SUBIDO".$sourcePath."|||".$targetPath;
		            }
		        }
		    }
		}

		$resFichero = array("id"=>strval($fileName));
		echo json_encode($resFichero);//1111122
	}else if($_GET['task'] == 'subirDocumentoMorisky')
	{

		if(!empty($_FILES['pdfMorisky']['name']))
		{   $msg="";
		    $uploadedFile = '';
		    if(!empty($_FILES["pdfMorisky"]["type"])){
		        $msg = "Tengo un fichero||";
		        $fileName = time().'_'.$_FILES['pdfMorisky']['name'];
		        $valid_extensions = array("pdf");
		        $temporary = explode(".", $_FILES["pdfMorisky"]["name"]);
		        $file_extension = end($temporary);
		        if(in_array($file_extension, $valid_extensions))
		        {
		            $msg .= "ESTA EN TIPO PERMITIDO||";
		            $sourcePath = $_FILES['pdfMorisky']['tmp_name'];
		            $targetPath = "../ficheros-index/escalaMorisky_Residentes/".$fileName;
		            if(move_uploaded_file($sourcePath,$targetPath)){
		                $msg .= "SE HA SUBIDO||".$sourcePath."|||".$targetPath;
		                $uploadedFile = $fileName;
		            }else{
		                $msg .= "NO SE HA SUBIDO".$sourcePath."|||".$targetPath;
		            }
		        }
		    }
		}

		$resFichero = array("id"=>strval($fileName));
		echo json_encode($resFichero);//1111122
	}else if($_GET['task'] == 'subirDocumentoPfeiffer')
	{

		if(!empty($_FILES['pdfPfeiffer']['name']))
		{   $msg="";
		    $uploadedFile = '';
		    if(!empty($_FILES["pdfPfeiffer"]["type"])){
		        $msg = "Tengo un fichero||";
		        $fileName = time().'_'.$_FILES['pdfPfeiffer']['name'];
		        $valid_extensions = array("pdf");
		        $temporary = explode(".", $_FILES["pdfPfeiffer"]["name"]);
		        $file_extension = end($temporary);
		        if(in_array($file_extension, $valid_extensions))
		        {
		            $msg .= "ESTA EN TIPO PERMITIDO||";
		            $sourcePath = $_FILES['pdfPfeiffer']['tmp_name'];
		            $targetPath = "../ficheros-index/escalaPfeiffer_Residentes/".$fileName;
		            if(move_uploaded_file($sourcePath,$targetPath)){
		                $msg .= "SE HA SUBIDO||".$sourcePath."|||".$targetPath;
		                $uploadedFile = $fileName;
		            }else{
		                $msg .= "NO SE HA SUBIDO".$sourcePath."|||".$targetPath;
		            }
		        }
		    }
		}

		$resFichero = array("id"=>strval($fileName));
		echo json_encode($resFichero);//1111122
	}
	
}

?>