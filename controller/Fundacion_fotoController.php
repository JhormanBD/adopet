<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No hay de qué so no más de papa  \\
include_once realpath('../facade/Fundacion_fotoFacade.php');


class Fundacion_fotoController {



    public static function listAll(){
        $list=Fundacion_fotoFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Fundacion_foto) {	
	       $rta.="{
	    \"idfundacion_foto\":\"{$Fundacion_foto->getidfundacion_foto()}\",
	    \"fundacion_fotonombre\":\"{$Fundacion_foto->getfundacion_fotonombre()}\",
	    \"fundacion_foto_ruta\":\"{$Fundacion_foto->getfundacion_foto_ruta()}\",
	    \"Fundacion_idFundacion_idFundacion\":\"{$Fundacion_foto->getFundacion_idFundacion()->getidFundacion()}\"
	       },";
        }

        if($rta!=""){
	       $rta = substr($rta, 0, -1);
	       $msg="{\"msg\":\"exito\"}";
        }else{
	       $msg="{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
	       $rta="{\"result\":\"No se encontraron registros.\"}";	
        }
        return "[{$msg},{$rta}]";
    }

}
//That`s all folks!