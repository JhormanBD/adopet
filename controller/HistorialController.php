<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La última regla es confiar en Arciniegas  \\
include_once realpath('../facade/HistorialFacade.php');


class HistorialController {

    public static function insert(){
        $idHistorial = strip_tags($_POST['idHistorial']);
        $fechaHistorial = strip_tags($_POST['fechaHistorial']);
        $Descripcion = strip_tags($_POST['Descripcion']);
        HistorialFacade::insert($idHistorial, $fechaHistorial, $Descripcion);
return true;
    }

    public static function listAll(){
        $list=HistorialFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Historial) {	
	       $rta.="{
	    \"idHistorial\":\"{$Historial->getidHistorial()}\",
	    \"fechaHistorial\":\"{$Historial->getfechaHistorial()}\",
	    \"Descripcion\":\"{$Historial->getDescripcion()}\"
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