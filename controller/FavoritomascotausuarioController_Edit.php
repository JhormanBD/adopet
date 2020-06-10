<?php
include_once realpath('../facade/FavoritomascotausuarioFacade.php');

$idFavoritoMascotaUsuario = strip_tags($_POST['idFavoritoMascotaUsuario']);
$idMascota                = strip_tags($_POST['idMascota']);
$idUsuario                = strip_tags($_POST['idUsuario']);

if ($idFavoritoMascotaUsuario === '' || $idMascota === '' || $idUsuario === '') {
    echo $respuesta;
} else {
    $respuesta = FavoritomascotausuarioFacade::update($idFavoritoMascotaUsuario,$idMascota, $idUsuario);
    if ($respuesta > 0) {
        echo $respuesta = true;
    } else {
        echo $respuesta;
    }
}

