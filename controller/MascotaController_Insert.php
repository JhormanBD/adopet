<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/MascotaFacade.php');

$Especie_idEspecie = strip_tags($_POST['Especie_idEspecie']);
$especie = new Especie();
$especie->setIdEspecie($Especie_idEspecie);
$nombreMascota = strip_tags($_POST['nombreMascota']);
$edadMascota = strip_tags($_POST['edadMascota']);
$sexoMascota = strip_tags($_POST['sexoMascota']);
$disponibilidadMascota = strip_tags($_POST['disponibilidadMascota']);
$Fundacion_idFundacion = strip_tags($_POST['Fundacion_idFundacion']);
$fundacion = new Fundacion();
$fundacion->setIdFundacion($Fundacion_idFundacion);
$fechaIngreso = strip_tags($_POST['fechaIngreso']);
$fechaSalida = strip_tags($_POST['fechaSalida']);
$Vinculacion_idVeterinaria = strip_tags($_POST['Veterinaria_idVeterinaria']);
$vinculacion = new Vinculacion();
$vinculacion->setIdVeterinaria($Vinculacion_idVeterinaria);
$respuesta = false;

//guiarse por los datos que recibe el insert
if ($especie === '' || $nombreMascota === '' || $edadMascota === '' || $sexoMascota === '' || $disponibilidadMascota === '' || $fundacion === '' || $fechaIngreso === '' || $fechaSalida === '' || $vinculacion === '') {
    echo $respuesta;
} else {

    //insert devuelve es un numero si incerto   
    $respuesta = MascotaFacade::insert($especie, $nombreMascota, $edadMascota, $sexoMascota, $disponibilidadMascota, $fundacion, $fechaIngreso, $fechaSalida, $vinculacion);

    if ($respuesta > 0) {
        echo $respuesta = true;
    } else {
        echo $respuesta;
    }
}


    