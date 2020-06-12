<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/FundacionvinculacionFacade.php');

$Fundacion_idFundacion = strip_tags($_POST['Fundacion_idFundacion']);

$list = FundacionvinculacionFacade::ListByID($Fundacion_idFundacion);

$rta = "";
foreach ($list as $obj => $Vinculacion) {
    $rta .= "{
	    \"idVeterinaria\":\"{$Vinculacion->getIdVeterinaria()}\",
	    \"nombreVinculacion\":\"{$Vinculacion->getNombreVinculacion()}\",
	    \"direccion\":\"{$Vinculacion->getDireccion()}\",
	    \"nit\":\"{$Vinculacion->getNit()}\",
	    \"telefono\":\"{$Vinculacion->getTelefono()}\"
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
