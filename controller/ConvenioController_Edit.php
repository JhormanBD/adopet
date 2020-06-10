<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/ConvenioFacade.php');
$idConvenio = strip_tags($_POST['idConvenio']);
$Vinculacion_idVeterinaria = strip_tags($_POST['Veterinaria_idVeterinaria']);
$Fundacion_idFundacion = strip_tags($_POST['Fundacion_idFundacion']);
$fechaConvenio = strip_tags($_POST['fechaConvenio']);
$nombreConvenio = strip_tags($_POST['nombreConvenio']);
$duracionConvenio = strip_tags($_POST['duracionConvenio']);
$respuesta = false;
//guiarse por los datos que recibe el insert
if ($idConvenio === '' || $Vinculacion_idVeterinaria === '' || $Fundacion_idFundacion === '' || $fechaConvenio === '' || $nombreConvenio === '' || $duracionConvenio === '') {

    return $respuesta;
} else {

    //insert devuelve es un numero si incerto   
    $respuesta = ConvenioFacade::update($idConvenio, $Vinculacion_idVeterinaria, $fundacion_idFundacion, $fechaConvenio, $nombreConvenio, $duracionConvenio);
    if ($respuesta > 0) {
        return $respuesta = true;
    } else {
        return $respuesta;
    }
}
    