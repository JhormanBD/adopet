<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




include_once realpath('../facade/UsuarioFacade.php');

$idUsuario = strip_tags($_POST['idUsuario']);

        $list=UsuarioFacade::listAllById($idUsuario);
        $rta="";
        foreach ($list as $obj => $Usuario) {	
	       $rta.="{
	    \"idUsuario\":\"{$Usuario->getidUsuario()}\",
	    \"idTipoUsuario\":\"{$Usuario->getTipoUsuario_idTipoUsuario()->getidTipoUsuario()}\",
	    \"nombreUsuario\":\"{$Usuario->getnombreUsuario()}\",
	    \"apellidoUsuario\":\"{$Usuario->getapellidoUsuario()}\",
	    \"cedula\":\"{$Usuario->getcedula()}\",
	    \"direccion\":\"{$Usuario->getdireccion()}\",
	    \"correo\":\"{$Usuario->getcorreo()}\",
	    \"password\":\"{$Usuario->getpassword()}\",
	    \"estado\":\"{$Usuario->getestado()}\",
	    \"fechaNacimiento\":\"{$Usuario->getfechaNacimiento()}\",
	    \"fechaIngreso\":\"{$Usuario->getfechaIngreso()}\",
	    \"foto\":\"{$Usuario->getfoto()}\"
	       },";
        }

        if($rta!=""){
	       $rta = substr($rta, 0, -1);
	       $msg="{\"msg\":\"exito\"}";
        }else{
	       $msg="{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
	       $rta="{\"result\":\"No se encontraron registros.\"}";	
        }
        echo  "[{$msg},{$rta}]";