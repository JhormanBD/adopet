<?php
header("Access-Control-Allow-Origin: *");  
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");  
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/UsuarioFacade.php');

//    $idUsuario = strip_tags($_POST['idUsuario']);
        $Tipousuario_idTipoUsuario = "2";
        $tipousuario= new Tipousuario();
        $tipousuario->setIdTipoUsuario($Tipousuario_idTipoUsuario);
        $nombreUsuario = "Ponchi";
        $apellidoUsuario ="lolaaaa";
        $cedula = "1234567890";
        $direccion = "sdasdasdasd  qwdqwe";
        $correo = "afasfasfsfasf";
        $password = "sdad";
        $estado = "1";
        $fechaNacimiento = "2012-05-02";
//        $fechaIngreso ="";
        $foto = "ruta";
//        $Tipousuario_idTipoUsuario = strip_tags($_POST['idTipoUsuario']);
//        $tipousuario= new Tipousuario();
//        $tipousuario->setIdTipoUsuario($Tipousuario_idTipoUsuario);
//        $nombreUsuario = strip_tags($_POST['nombreUsuario']);
//        $apellidoUsuario = strip_tags($_POST['apellidoUsuario']);
//        $cedula = strip_tags($_POST['cedula']);
//        $direccion = strip_tags($_POST['direccion']);
//        $correo = strip_tags($_POST['correo']);
//        $password = strip_tags($_POST['password']);
//        $estado = strip_tags($_POST['estado']);
//        $fechaNacimiento = strip_tags($_POST['fechaNacimiento']);
//        $fechaIngreso = strip_tags($_POST['fechaIngreso']);
//        $foto = strip_tags($_POST['foto']);
//        UsuarioFacade::insert($idUsuario, $tipousuario, $nombreUsuario, $apellidoUsuario, $cedula, $direccion, $correo, $password, $estado, $fechaNacimiento, $fechaIngreso, $foto);

       $respuesta = 0;  
 
//guiarse por los datos que recibe el insert
if ($tipousuario === '' || $nombreUsuario === '' || $apellidoUsuario === '' || $cedula === '' || $direccion === '' || $correo === '' || $password === ''|| $estado === ''|| $fechaNacimiento === ''|| $foto === '') {
//    var_dump($respuesta);
    echo $respuesta;
} else {
             
     $rpta =  UsuarioFacade::buscarCc($cedula) ;
    
     if($rpta){//si el usuario ya existe
//          var_dump($rpta);
       echo   $respuesta = 2;
     } else {//si la usuario No esta Registrado
         
             //insert devuelve es un numero si incerto   
    $respuesta =  UsuarioFacade::insert( $tipousuario, $nombreUsuario, $apellidoUsuario, $cedula, $direccion, $correo, $password, $estado, $fechaNacimiento, $foto);

    if ($respuesta > 0) {
        echo $respuesta = true;
    } else {
        echo $respuesta;
    }
}
        
     }
         
     
    
    
 
     
        
        
        
    
    