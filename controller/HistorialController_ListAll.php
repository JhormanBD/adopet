<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once realpath('../facade/HistorialFacade.php');
$list = HistorialFacade::listAll();
$rta = "";
foreach ($list as $obj => $Historial) {
    $rta .= "{
	    \"idHistorial\":\"{$Historial->getidHistorial()}\",
	    \"fechaHistorial\":\"{$Historial->getfechaHistorial()}\",
	    \"Descripcion\":\"{$Historial->getDescripcion()}\",
	    \"tipo\":\"{$Historial->gettipo()}\",
	    \"Usuario_idUsuario_idUsuario\":\"{$Historial->getUsuario_idUsuario()->getidUsuario()}\"
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
