<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La gente siempre me pregunta si conozco a Tyler Durden.  \\
include_once realpath('../facade/UsuariosFacade.php');


class UsuariosController {

    public static function insert(){
        $idusuarios = strip_tags($_POST['idusuarios']);
        $nombre = strip_tags($_POST['nombre']);
        $pass = strip_tags($_POST['pass']);
        $estado = strip_tags($_POST['estado']);
        $usuario = strip_tags($_POST['usuario']);
        UsuariosFacade::insert($idusuarios, $nombre, $pass, $estado, $usuario);
return true;
    }

    public static function listAll(){
        $list=UsuariosFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Usuarios) {	
	       $rta.="{
	    \"idusuarios\":\"{$Usuarios->getidusuarios()}\",
	    \"nombre\":\"{$Usuarios->getnombre()}\",
	    \"pass\":\"{$Usuarios->getpass()}\",
	    \"estado\":\"{$Usuarios->getestado()}\",
	    \"usuario\":\"{$Usuarios->getusuario()}\"
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