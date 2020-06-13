<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/TendenciasFacade.php');


 $list=TendenciasFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Tendencias) {	
	       $rta.="{
	    \"id_ten\":\"{$Tendencias->getid_ten()}\",
	    \"titulo_ten\":\"{$Tendencias->gettitulo_ten()}\",

	    \"publicado_ten\":\"{$Tendencias->getpublicado_ten()}\",

	    \"descrip_ten\":\"{$Tendencias->getdescrip_ten()}\"
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
   
