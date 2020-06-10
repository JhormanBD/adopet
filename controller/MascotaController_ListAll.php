<?php

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
	    \"Especie_idEspecie_idEspecie\":\"{$Mascota->getEspecie_idEspecie()->getidEspecie()}\",
	    \"nombreMascota\":\"{$Mascota->getnombreMascota()}\",
	    \"edadMascota\":\"{$Mascota->getedadMascota()}\",
	    \"sexoMascota\":\"{$Mascota->getsexoMascota()}\",
	    \"disponibilidadMascota\":\"{$Mascota->getdisponibilidadMascota()}\",
	    \"Fundacion_idFundacion_idFundacion\":\"{$Mascota->getFundacion_idFundacion()->getidFundacion()}\",
	    \"fechaIngreso\":\"{$Mascota->getfechaIngreso()}\",
	    \"fechaSalida\":\"{$Mascota->getfechaSalida()}\",
	    \"Veterinaria_idVeterinaria_idVeterinaria\":\"{$Mascota->getVeterinaria_idVeterinaria()->getidVeterinaria()}\"
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
