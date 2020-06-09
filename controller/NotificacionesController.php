<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Se buscan memeros profesionales. Contacto: El benévolo señor Arciniegas  \\
include_once realpath('../facade/NotificacionesFacade.php');


class NotificacionesController {

    public static function insert(){
        $idmensaje = strip_tags($_POST['idmensaje']);
        $fechaMensaje = strip_tags($_POST['fechaMensaje']);
        $Fundacion_idFundacion = strip_tags($_POST['Fundacion_idFundacion']);
        $fundacion= new Fundacion();
        $fundacion->setIdFundacion($Fundacion_idFundacion);
        $Usuario_idUsuario = strip_tags($_POST['Usuario_idUsuario']);
        $usuario= new Usuario();
        $usuario->setIdUsuario($Usuario_idUsuario);
        $Descripcion = strip_tags($_POST['Descripcion']);
        NotificacionesFacade::insert($idmensaje, $fechaMensaje, $fundacion, $usuario, $Descripcion);
return true;
    }

    public static function listAll(){
        $list=NotificacionesFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Notificaciones) {	
	       $rta.="{
	    \"idmensaje\":\"{$Notificaciones->getidmensaje()}\",
	    \"fechaMensaje\":\"{$Notificaciones->getfechaMensaje()}\",
	    \"Fundacion_idFundacion_idFundacion\":\"{$Notificaciones->getFundacion_idFundacion()->getidFundacion()}\",
	    \"Usuario_idUsuario_idUsuario\":\"{$Notificaciones->getUsuario_idUsuario()->getidUsuario()}\",
	    \"Descripcion\":\"{$Notificaciones->getDescripcion()}\"
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