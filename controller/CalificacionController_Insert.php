<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');
//header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: text/html; charset=utf-8');
header("content-type: application/json; charset=utf-8");
header('P3P: CP="IDC DSP COR CURa ADMa OUR IND PHY ONL COM STA"');

include_once realpath('../facade/CalificacionFacade.php');

$JSONData = file_get_contents("php://input");
$dataObject = json_decode($JSONData);

$Fundacion_idFundacion = strip_tags($dataObject->idFundacion);
$fundacion = new Fundacion();
$fundacion->setIdFundacion($Fundacion_idFundacion);
$Usuario_idUsuario = strip_tags($dataObject->idUsuario);
$usuario = new Usuario();
$usuario->setIdUsuario($Usuario_idUsuario);
$calificacion = strip_tags($dataObject->calificacion);

$respuesta = 0;

//guiarse por los datos que recibe el insert
if ($fundacion === '' || $usuario === '' || $calificacion === '' ) {
    echo $respuesta;
} else {

    //insert devuelve es un numero si incerto   
    $respuesta = CalificacionFacade::insert($fundacion, $usuario, $calificacion);

    
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
