<?php
header("Access-Control-Allow-Origin: *");  
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");  
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/MascotaFacade.php');


$list = MascotaFacade::listAll();
$rta = "";
foreach ($list as $obj => $Mascota) {
    $rta .= "{
	    \"idMascota\":\"{$Mascota->getidMascota()}\",
	    \"idEspecie\":\"{$Mascota->getEspecie_idEspecie()->getidEspecie()}\",
	    \"nombreMascota\":\"{$Mascota->getnombreMascota()}\",
	    \"edadMascota\":\"{$Mascota->getedadMascota()}\",
	    \"sexoMascota\":\"{$Mascota->getsexoMascota()}\",
	    \"disponibilidadMascota\":\"{$Mascota->getdisponibilidadMascota()}\",
	    \"idFundacion\":\"{$Mascota->getFundacion_idFundacion()->getidFundacion()}\",
	    \"fechaIngreso\":\"{$Mascota->getfechaIngreso()}\",
	    \"fechaSalida\":\"{$Mascota->getfechaSalida()}\",
	    \"idVeterinaria\":\"{$Mascota->getVeterinaria_idVeterinaria()->getidVeterinaria()}\"
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

