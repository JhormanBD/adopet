<?php
header("Access-Control-Allow-Origin: *");  
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");  
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");  
header('Content-Type: text/html; charset=utf-8');
header("content-type: application/json; charset=utf-8");
header('P3P: CP="IDC DSP COR CURa ADMa OUR IND PHY ONL COM STA"');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once realpath('../facade/HistorialFacade.php');

$JSONData = file_get_contents("php://input");
$dataObject = json_decode($JSONData);
//$idMascota = strip_tags($_POST['idMascota']);
$idUsuario = strip_tags($dataObject->idUsuario);
$list = HistorialFacade::listByUser($idUsuario);
$rta = "";
foreach ($list as $obj => $Historial) {
    $rta .= "{
	    \"idHistorial\":\"{$Historial->getidHistorial()}\",
	    \"fechaHistorial\":\"{$Historial->getfechaHistorial()}\",
	    \"Descripcion\":\"{$Historial->getDescripcion()}\",
	    \"tipo\":\"{$Historial->gettipo()}\",
	    \"idUsuario\":\"{$Historial->getUsuario_idUsuario()->getidUsuario()}\"
	       },";
}
if ($rta != "") {
    $rta = substr($rta, 0, -1);
    echo $rta = "[{$rta}]";
    $msg = "{\"msg\":\"exito\"}";
} else {
    $msg = "{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
    echo $rta = "{\"result\":\"No se encontraron registros.\"}";
}
