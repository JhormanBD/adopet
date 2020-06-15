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





//$Especie_idEspecie = "2";
$Especie_idEspecie = strip_tags($dataObject->idEspecie);
$especie = new Especie();
$especie->setIdEspecie($Especie_idEspecie);
//$nombreMascota = strip_tags($dataObject->nombreMascota);
//var_dump($especie);
//
//
//$Especie_idEspecie = strip_tags($_POST['idEspecie']);
//$especie = new Especie();
//$especie->setIdEspecie($Especie_idEspecie);
//$nombreMascota = strip_tags($_POST['nombreMascota']);
//$edadMascota = strip_tags($_POST['edadMascota']);
//$sexoMascota = strip_tags($_POST['sexoMascota']);
//$disponibilidadMascota = strip_tags($_POST['disponibilidadMascota']);
//$Fundacion_idFundacion = strip_tags($_POST['idFundacion']);
//$fundacion = new Fundacion();
//$fundacion->setIdFundacion($Fundacion_idFundacion);
//$fechaIngreso = strip_tags($_POST['fechaIngreso']);
////$fechaSalida = strip_tags($_POST['fechaSalida']);
//$Vinculacion_idVeterinaria = strip_tags($_POST['idVeterinaria']);
//
//$Especie_idEspecie = "1";
//$especie = new Especie();
//$especie->setIdEspecie($Especie_idEspecie);
//$nombreMascota = "gsfgfdg";
//$edadMascota = "5";
//$sexoMascota = "1";
//$disponibilidadMascota = "1";
//$Fundacion_idFundacion =  "1";
//$fundacion = new Fundacion();
//$fundacion->setIdFundacion($Fundacion_idFundacion);
//$fechaIngreso = "2020-06-10";
//
//$Vinculacion_idVeterinaria = "1";
//
//$vinculacion = new Vinculacion();
//$vinculacion->setIdVeterinaria($Vinculacion_idVeterinaria);
$respuesta = 1;
//
////guiarse por los datos que recibe el insert
//if ($Especie_idEspecie === '' || $nombreMascota === '' || $edadMascota === '' || $sexoMascota === '' || $disponibilidadMascota === '' || $fundacion === '' || $fechaIngreso === ''  || $vinculacion === '') {
//    echo $respuesta;
//} else {

    //insert devuelve es un numero si incerto   
   $respuesta = MascotaFacade::insert_1($especie);

     if ($respuesta > 0) {
   
    $rta ="{\"result\":\"ok\"}";
    $msg = "{\"msg\":\"exito\"}";
    echo "[{$msg},{$respuesta}]";
   
} else {
    $msg = "{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
    $rta = "{\"result\":\"false\"}";
    echo "[{$msg},{$rta}]";
}


    