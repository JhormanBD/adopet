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

//$Especie_idEspecie = strip_tags($dataObject->idEspecie);
//$especie = new Especie();
//$especie->setIdEspecie($Especie_idEspecie);
//$nombreMascota = strip_tags($dataObject->nombreMascota);
//$edadMascota = strip_tags($dataObject->edadMascota);
//$sexoMascota = strip_tags($dataObject->sexoMascota);
//$disponibilidadMascota = strip_tags($dataObject->disponibilidadMascota);
//$Fundacion_idFundacion = strip_tags($dataObject->idFundacion);
//$fundacion = new Fundacion();
//$fundacion->setIdFundacion($Fundacion_idFundacion);
//$fechaIngreso = strip_tags($dataObject->fechaIngreso);
//$Vinculacion_idVeterinaria = strip_tags($dataObject->idVeterinaria);
$respuesta = 0;

$Especie_idEspecie = "1";
$especie = new Especie();
$especie->setIdEspecie($Especie_idEspecie);
$nombreMascota = "gsfgfdg";
$edadMascota = "5";
$sexoMascota = "1";
$disponibilidadMascota = "1";
$Fundacion_idFundacion =  "1";
$fundacion = new Fundacion();
$fundacion->setIdFundacion($Fundacion_idFundacion);
$fechaIngreso = "2020-06-10";
$Vinculacion_idVeterinaria = "1";

//guiarse por los datos que recibe el insert
//if ($Especie_idEspecie === '' || $nombreMascota === '' || $edadMascota === '' || $sexoMascota === '' || $disponibilidadMascota === '' || $fundacion === '' || $fechaIngreso === ''  || $vinculacion === '') {
//   echo $respuesta;
//} else {

    /**insert devuelve es un numero si incerto   
    var_dump($especie);
    var_dump($nombreMascota);
    var_dump($edadMascota);
    var_dump($sexoMascota);
    var_dump($disponibilidadMascota);
    var_dump($fundacion);
    var_dump($fechaIngreso);
    var_dump($Vinculacion_idVeterinaria);
    */
   $respuesta = MascotaFacade::insert($especie, $nombreMascota, $edadMascota, $sexoMascota, $disponibilidadMascota, $fundacion, $fechaIngreso, $Vinculacion_idVeterinaria);
   //MascotaFacade::insert_1($especie);

    if ($respuesta > 0) {
       
        $rta = "{\"result\":\"true\"}";
        $msg = "{\"msg\":\"exito\"}";
        echo "[{$msg},{$rta}]";
       
    } else {
        $msg = "{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
        $rta = "{\"result\":\"false\"}";
        echo "[{$msg},{$rta}]";
    }
//}