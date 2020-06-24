<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Mi satisfacción es hacerte un poco más vago  \\
include_once realpath('../facade/FundacionFacade.php');





        $list=FundacionFacade::listAllRamdon();
        $rta="";
        foreach ($list as $obj => $Fundacion) {	
	       $rta.="{
	    \"idFundacion\":\"{$Fundacion->getidFundacion()}\",
	    \"nombreFundacion\":\"{$Fundacion->getnombreFundacion()}\",
	    \"direccionFundacion\":\"{$Fundacion->getdireccionFundacion()}\",
	    \"telefonoFundacion\":\"{$Fundacion->gettelefonoFundacion()}\",
	    \"nit\":\"{$Fundacion->getnit()}\",
	    \"correo\":\"{$Fundacion->getcorreo()}\",
	    \"nombrepropietario\":\"{$Fundacion->getnombrepropietario()}\",
	    \"Usuario_idUsuario_idUsuario\":\"{$Fundacion->getUsuario_idUsuario()->getidUsuario()}\"
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



//That`s all folks!