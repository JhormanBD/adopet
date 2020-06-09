<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Vine a Comala porque me dijeron que acá vivía mi padre, un tal Pedro Páramo.  \\
include_once realpath('../facade/ConvenioFacade.php');


class ConvenioController {

    public static function insert(){
        $idConvenio = strip_tags($_POST['idConvenio']);
        $Veterinaria_idVeterinaria = strip_tags($_POST['Veterinaria_idVeterinaria']);
        $veterinaria= new Veterinaria();
        $veterinaria->setIdVeterinaria($Veterinaria_idVeterinaria);
        $Fundacion_idFundacion = strip_tags($_POST['Fundacion_idFundacion']);
        $fundacion= new Fundacion();
        $fundacion->setIdFundacion($Fundacion_idFundacion);
        $fechaConvenio = strip_tags($_POST['fechaConvenio']);
        $nombreConvenio = strip_tags($_POST['nombreConvenio']);
        $duracionConvenio = strip_tags($_POST['duracionConvenio']);
        ConvenioFacade::insert($idConvenio, $veterinaria, $fundacion, $fechaConvenio, $nombreConvenio, $duracionConvenio);
return true;
    }

    public static function listAll(){
        $list=ConvenioFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Convenio) {	
	       $rta.="{
	    \"idConvenio\":\"{$Convenio->getidConvenio()}\",
	    \"Veterinaria_idVeterinaria_idVeterinaria\":\"{$Convenio->getVeterinaria_idVeterinaria()->getidVeterinaria()}\",
	    \"Fundacion_idFundacion_idFundacion\":\"{$Convenio->getFundacion_idFundacion()->getidFundacion()}\",
	    \"fechaConvenio\":\"{$Convenio->getfechaConvenio()}\",
	    \"nombreConvenio\":\"{$Convenio->getnombreConvenio()}\",
	    \"duracionConvenio\":\"{$Convenio->getduracionConvenio()}\"
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