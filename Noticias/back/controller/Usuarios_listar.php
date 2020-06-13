<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/UsuariosFacade.php');

        $list=UsuariosFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Usuarios) {	
            if($Usuarios->getestado()==1){
                $estado='Activo';
            }else{
                $estado='Inacctivo';
            }
	       $rta.="{
	    \"idusuarios\":\"{$Usuarios->getidusuarios()}\",
	    \"nombre\":\"{$Usuarios->getnombre()}\",
	    \"usuario\":\"{$Usuarios->getusuario()}\",
                 \"estado\":\"{$estado}\"
	       },";
        }

        if($rta!=""){
	       $rta = substr($rta, 0, -1);
	       $msg="{\"msg\":\"exito\"}";
        }else{
	       $msg="{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
	       $rta="{\"result\":\"No se encontraron registros.\"}";	
        }
        echo "[{$msg},{$rta}]";
        
//           foreach ($list as $obj => $Usuarios) {	
//	       $rta.="{
//	    \"idusuarios\":\"{$Usuarios->getidusuarios()}\",
//	    \"nombre\":\"{$Usuarios->getnombre()}\",
//	    \"pass\":\"{$Usuarios->getpass()}\",
//	    \"estado\":\"{$Usuarios->getestado()}\",
//	    \"usuario\":\"{$Usuarios->getusuario()}\"
//	       },";
//        }