<?php
header("Access-Control-Allow-Origin: *");  
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");  
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
include_once realpath('../facade/FavoritomascotausuarioFacade.php');

//$idMascota = strip_tags($_POST['idMascota']);
$mascota           = new Mascota();
$mascota->setIdMascota(2);
//$idUsuario = strip_tags($_POST['idUsuario']);
$usuario           = new Usuario();
$usuario->setIdUsuario(1);
$respuesta = false;
//if ($idMascota === '' || $idUsuario === '') {
//    echo $respuesta;
//} else {
    $respuesta = FavoritomascotausuarioFacade::insert($mascota, $usuario);
    if ($respuesta > 0) {
        echo $respuesta = true;
    } else {
        echo $respuesta;
    }
}
