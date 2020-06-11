<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/HistorialFacade.php');
$idHistorial = strip_tags($_POST['idHistorial']);
$fechaHistorial = strip_tags($_POST['fechaHistorial']);
$Descripcion = strip_tags($_POST['Descripcion']);
$tipo = strip_tags($_POST['tipo']);
$Usuario_idUsuario = strip_tags($_POST['Usuario_idUsuario']);
$usuario = new Usuario();
$usuario->setIdUsuario($Usuario_idUsuario);
if ($idHistorial==="" || $fechaHistorial === "" || $Descripcion === "" || $tipo === "" || $Usuario_idUsuario === "") {
    echo $respuesta;
} else {
    $respuesta = HistorialFacade::update($idHistorial, $fechaHistorial, $Descripcion, $tipo, $usuario);
}
if ($respuesta > 0) {
    echo $respuesta = true;
} else {
    echo $respuesta;
}
echo true;
