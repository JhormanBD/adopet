<?php
header("Access-Control-Allow-Origin: *");  
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");  
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
include_once realpath('../facade/FavoritomascotausuarioFacade.php');
$list = FavoritomascotausuarioFacade::listAll();
$rta  = "";
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
