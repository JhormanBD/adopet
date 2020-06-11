<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/FavoritomascotausuarioFacade.php');
$idUsuario = strip_tags($_POST['idUsuario']);
$list = FavoritomascotausuarioFacade::listByUser($idUsuario);
$rta = "";
foreach ($list as $obj => $Favoritomascotausuario) {
    $rta .= "{
	    \"idMascota\":\"{$Favoritomascotausuario->getMascota_idMascota()->getidMascota()}\",
	    \"idUsuario\":\"{$Favoritomascotausuario->getUsuario_idUsuario()->getidUsuario()}\",
	    \"idFavoritoMascotaUsuario\":\"{$Favoritomascotausuario->getidFavoritoMascotaUsuario()}\"
	       },";
}

if ($rta != "") {
    $rta = substr($rta, 0, -1);
    $msg = "{\"msg\":\"exito\"}";
} else {
    $msg = "{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
    $rta = "{\"result\":\"No se encontraron registros.\"}";
}
echo "[{$msg},{$rta}]";

