<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Sabías que Anarchy se generó a sí mismo?  \\
include_once realpath('../facade/HistorialmascotaFacade.php');


class HistorialmascotaController {

    public static function insert(){
        $idHistorialMascota = strip_tags($_POST['idHistorialMascota']);
        $fechaVacunaHistorialMascota = strip_tags($_POST['fechaVacunaHistorialMascota']);
        $descripcion = strip_tags($_POST['descripcion']);
        $Observacion = strip_tags($_POST['Observacion']);
        HistorialmascotaFacade::insert($idHistorialMascota, $fechaVacunaHistorialMascota, $descripcion, $Observacion);
return true;
    }

    public static function listAll(){
        $list=HistorialmascotaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Historialmascota) {	
	       $rta.="{
	    \"idHistorialMascota\":\"{$Historialmascota->getidHistorialMascota()}\",
	    \"fechaVacunaHistorialMascota\":\"{$Historialmascota->getfechaVacunaHistorialMascota()}\",
	    \"descripcion\":\"{$Historialmascota->getdescripcion()}\",
	    \"Observacion\":\"{$Historialmascota->getObservacion()}\"
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