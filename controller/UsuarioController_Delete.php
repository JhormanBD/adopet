<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/UsuarioFacade.php');

        $idUsuario = strip_tags($_POST['idUsuario']);
        $estado = strip_tags($_POST['estado']);

//        UsuarioFacade::insert($idUsuario, $tipousuario, $nombreUsuario, $apellidoUsuario, $cedula, $direccion, $correo, $password, $estado, $fechaNacimiento, $fechaIngreso, $foto);

        $respuesta = false;

//guiarse por los datos que recibe el insert
if ($tipousuario === '') {
    return $respuesta;
} else {

    //Delete devuelve es un numero si incerto   
    $respuesta =  UsuarioFacade::DeleteById($idUsuario,$estado);

    if ($respuesta > 0) {
        return $respuesta = true;
    } else {
        return $respuesta;
    }
}    