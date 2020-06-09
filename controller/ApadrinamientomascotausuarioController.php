<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La última regla es confiar en Arciniegas  \\
include_once realpath('../facade/ApadrinamientomascotausuarioFacade.php');


class ApadrinamientomascotausuarioController {

    public static function insert(){
        $Mascota_idMascota = strip_tags($_POST['Mascota_idMascota']);
        $mascota= new Mascota();
        $mascota->setIdMascota($Mascota_idMascota);
        $Usuario_idUsuario = strip_tags($_POST['Usuario_idUsuario']);
        $usuario= new Usuario();
        $usuario->setIdUsuario($Usuario_idUsuario);
        $fechaApadrinamientoMascotaUsuariocol = strip_tags($_POST['fechaApadrinamientoMascotaUsuariocol']);
        $estadoApadrinamiento = strip_tags($_POST['estadoApadrinamiento']);
        ApadrinamientomascotausuarioFacade::insert($mascota, $usuario, $fechaApadrinamientoMascotaUsuariocol, $estadoApadrinamiento);
return true;
    }

    public static function listAll(){
        $list=ApadrinamientomascotausuarioFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Apadrinamientomascotausuario) {	
	       $rta.="{
	    \"Mascota_idMascota_idMascota\":\"{$Apadrinamientomascotausuario->getMascota_idMascota()->getidMascota()}\",
	    \"Usuario_idUsuario_idUsuario\":\"{$Apadrinamientomascotausuario->getUsuario_idUsuario()->getidUsuario()}\",
	    \"fechaApadrinamientoMascotaUsuariocol\":\"{$Apadrinamientomascotausuario->getfechaApadrinamientoMascotaUsuariocol()}\",
	    \"estadoApadrinamiento\":\"{$Apadrinamientomascotausuario->getestadoApadrinamiento()}\"
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