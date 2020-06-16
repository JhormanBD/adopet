<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');
//header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");  
header('Content-Type: text/html; charset=utf-8');
header("content-type: application/json; charset=utf-8");
header('P3P: CP="IDC DSP COR CURa ADMa OUR IND PHY ONL COM STA"'); 


include_once realpath('../facade/MascotaFacade.php');

 
$JSONData = file_get_contents("php://input");
$dataObject = json_decode($JSONData);

$Especie_idEspecie = strip_tags($dataObject->idEspecie);
$especie = new Especie();
$especie->setIdEspecie($Especie_idEspecie);
$nombreMascota = strip_tags($dataObject->nombreMascota);
$edadMascota = strip_tags($dataObject->edadMascota);
$sexoMascota = strip_tags($dataObject->sexoMascota);
//$disponibilidadMascota = strip_tags($dataObject->disponibilidadMascota);
$disponibilidadMascota = "1";
$Fundacion_idFundacion = strip_tags($dataObject->idFundacion);
$fundacion = new Fundacion();
$fundacion->setIdFundacion($Fundacion_idFundacion);

//formatear la fecha
$originalDate = $dataObject->fechaIngreso;
$newDate = date("Y-m-d", strtotime($originalDate));
$fechaIngreso = strip_tags($newDate);
$fechaSalida = strip_tags($dataObject->fechaSalida);
$Vinculacion_idVeterinaria = strip_tags($dataObject->idVeterinaria);
$vinculacion= new Vinculacion();
$vinculacion->setIdVeterinaria($Vinculacion_idVeterinaria);
$respuesta = 0;

$nombreimg= savePicture();
var_dump($nombreimg);

//guiarse por los datos que recibe el insert
if ($Especie_idEspecie === '' || $nombreMascota === '' || $edadMascota === '' || $sexoMascota === '' || $disponibilidadMascota === '' || $fundacion === '' || $fechaIngreso === ''  || $vinculacion === '') {
    echo $respuesta;
} else {

    //insert devuelve es un numero si incerto   
    $respuesta = MascotaFacade::insert($especie, $nombreMascota, $edadMascota, $sexoMascota, $disponibilidadMascota, $fundacion, $fechaIngreso, $vinculacion);

    if ($respuesta > 0) {
   
    $rta ="{\"result\":\"ok\"}";
    $msg = "{\"msg\":\"exito\"}";
    echo "[{$rta}]";
   
    } else {
    $msg = "{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
    $rta = "{\"result\":\"false\"}";
    echo "[{$rta}]";
}
}

function savePicture(){

	$name = "";
	$directorio = "../../fotos/mascotas/";

	if(basename($_FILES["file"]["name"]) == NULL || basename($_FILES["file"]["name"])==""){
		return "";
	}
	$archivo = $directorio . basename($_FILES["file"]["name"]);

	$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

	// valida que es imagen
	$checarSiImagen = getimagesize($_FILES["file"]["tmp_name"]);

	if ($checarSiImagen != false) {

		//validando tamaño del archivo
		$size = $_FILES["file"]["size"];

		if ($size > 500000) {
		echo "El archivo tiene que ser menor a 500kb";
		} else {

			//validar tipo de imagen
			if ($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == "gif" || $tipoArchivo == "png") {
				// se validó el archivo correctamente
				if (move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)) {

				$name = basename($_FILES["file"]["name"]);
				return $name;

				echo "El archivo se subió correctamente";
				} else {
				echo "Hubo un error en la subida del archivo";
				}
			} else {
			echo "Solo se admiten archivos jpg/jpeg/png/gif";
			}
		}
	} else {
	echo "El documento no es una imagen";
	}
}




    