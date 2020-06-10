<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/MascotaFacade.php');

$idMascota = strip_tags($_POST['idMascota']);
$Especie_idEspecie = strip_tags($_POST['Especie_idEspecie']);
$nombreMascota = strip_tags($_POST['nombreMascota']);
$edadMascota = strip_tags($_POST['edadMascota']);
$sexoMascota = strip_tags($_POST['sexoMascota']);
$disponibilidadMascota = strip_tags($_POST['disponibilidadMascota']);
$Fundacion_idFundacion = strip_tags($_POST['Fundacion_idFundacion']);
$fechaIngreso = strip_tags($_POST['fechaIngreso']);
$fechaSalida = strip_tags($_POST['fechaSalida']);
$Vinculacion_idVeterinaria = strip_tags($_POST['Veterinaria_idVeterinaria']);

//guiarse por los datos que recibe el insert
if ($idMascota === '' || $Especie_idEspecie === '' || $nombreMascota === '' || $edadMascota === '' || $sexoMascota === '' || $disponibilidadMascota === '' || $Fundacion_idFundacion === '' || $fechaIngreso === '' || $fechaSalida === '' || $Vinculacion_idVeterinaria === '') {
    echo $respuesta;
} else {

    //insert devuelve es un numero si incerto   
    $respuesta = MascotaFacade::update($idMascota, $Especie_idEspecie, $nombreMascota, $edadMascota, $sexoMascota, $disponibilidadMascota, $Fundacion_idFundacion, $fechaIngreso, $fechaSalida, $Vinculacion_idVeterinaria);

    if ($respuesta > 0) {
        echo $respuesta = true;
    } else {
        echo $respuesta;
    }
}