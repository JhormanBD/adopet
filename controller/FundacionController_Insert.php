<?php
header("Access-Control-Allow-Origin: *");  
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");  
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once realpath('../facade/FundacionFacade.php');

//$idFundacion = strip_tags($_POST['idFundacion']);
$nombreFundacion = strip_tags($_POST['nombreFundacion']);
$direccionFundacion = strip_tags($_POST['direccionFundacion']);
$telefonoFundacion = strip_tags($_POST['telefonoFundacion']);
$nit = strip_tags($_POST['nit']);
$correo = strip_tags($_POST['correo']);
$nombrepropietario = strip_tags($_POST['nombrepropietario']);
$Usuario_idUsuario = strip_tags($_POST['idUsuario']);
$usuario = new Usuario();
$usuario->setIdUsuario($Usuario_idUsuario);

$response = false;

if ($nombreFundacion === '' || $direccionFundacion === '' || $telefonoFundacion === '' || $nit === '' || $correo === '' || $nombrepropietario === '' || $Usuario_idUsuario === '') {
    echo $response;
} else {
    $response = FundacionFacade::insert($nombreFundacion, $direccionFundacion, $telefonoFundacion, $nit, $correo, $nombrepropietario, $usuario);
if ($response > 0) {
    echo $response = true;
} else {
    echo $response;
}
}