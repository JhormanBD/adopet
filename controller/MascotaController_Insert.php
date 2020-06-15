<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header("Access-Control-Allow-Origin: *");  
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");  
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("content-type: application/json; charset=utf-8");


include_once realpath('../facade/MascotaFacade.php');

 
$JSONData = file_get_contents("php://input");
$dataObject = json_decode($JSONData);

$Especie_idEspecie = strip_tags($dataObject->idEspecie);
$especie = new Especie();
$especie->setIdEspecie($Especie_idEspecie);
$nombreMascota = strip_tags($dataObject->nombreMascota);
$edadMascota = strip_tags($dataObject->edadMascota);
$sexoMascota = strip_tags($dataObject->sexoMascota);
$disponibilidadMascota = strip_tags($dataObject->disponibilidadMascota);
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

    