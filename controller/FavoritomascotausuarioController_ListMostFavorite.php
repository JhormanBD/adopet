<?php
include_once realpath('../facade/FavoritomascotausuarioFacade.php');

$list = FavoritomascotausuarioFacade::listMostFavorite();
$rta  = "";
foreach ($list as $obj => $Favoritomascotausuario) {
    $rta .= "{
	    \"idMascota\":\"{$Favoritomascotausuario->idMascota}\",
	    \"TopMascotas\":\"{$Favoritomascotausuario->TopMascotas}\"
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
