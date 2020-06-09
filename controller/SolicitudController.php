<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Hecho en sólo 6 días  \\
include_once realpath('../facade/SolicitudFacade.php');


class SolicitudController {

    public static function insert(){
        $idSolicitud = strip_tags($_POST['idSolicitud']);
        $Usuario_idUsuario = strip_tags($_POST['Usuario_idUsuario']);
        $usuario= new Usuario();
        $usuario->setIdUsuario($Usuario_idUsuario);
        $descripcion = strip_tags($_POST['descripcion']);
        $Aprobacion = strip_tags($_POST['Aprobacion']);
        $tipoSolucion = strip_tags($_POST['tipoSolucion']);
        SolicitudFacade::insert($idSolicitud, $usuario, $descripcion, $Aprobacion, $tipoSolucion);
return true;
    }

    public static function listAll(){
        $list=SolicitudFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Solicitud) {	
	       $rta.="{
	    \"idSolicitud\":\"{$Solicitud->getidSolicitud()}\",
	    \"Usuario_idUsuario_idUsuario\":\"{$Solicitud->getUsuario_idUsuario()->getidUsuario()}\",
	    \"descripcion\":\"{$Solicitud->getdescripcion()}\",
	    \"Aprobacion\":\"{$Solicitud->getAprobacion()}\",
	    \"tipoSolucion\":\"{$Solicitud->gettipoSolucion()}\"
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