<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/EspecieFacade.php');


        $list=EspecieFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Especie) {	
	       $rta.="{
	    \"idEspecie\":\"{$Especie->getidEspecie()}\",
	    \"nombreEspecie\":\"{$Especie->getnombreEspecie()}\"
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
    
