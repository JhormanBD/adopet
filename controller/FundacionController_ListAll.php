<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/FundacionFacade.php');


$list = FundacionFacade::listAll();
$rta = "";
foreach ($list as $obj => $Fundacion) {
    $rta .= "{
	    \"idFundacion\":\"{$Fundacion->getidFundacion()}\",
	    \"nombreFundacion\":\"{$Fundacion->getnombreFundacion()}\",
	    \"direccionFundacion\":\"{$Fundacion->getdireccionFundacion()}\",
	    \"telefonoFundacion\":\"{$Fundacion->gettelefonoFundacion()}\",
	    \"nit\":\"{$Fundacion->getnit()}\",
	    \"correo\":\"{$Fundacion->getcorreo()}\",
	    \"nombrepropietario\":\"{$Fundacion->getnombrepropietario()}\",
	    \"Usuario_idUsuario_idUsuario\":\"{$Fundacion->getUsuario_idUsuario()->getidUsuario()}\"
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
