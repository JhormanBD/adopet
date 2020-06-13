<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Hecho en sólo 6 días  \\
include_once realpath('../facade/Tendencias_has_usuariosFacade.php');


class Tendencias_has_usuariosController {

    public static function insert(){
        $Tendencias_id_ten = strip_tags($_POST['tendencias_id_ten']);
        $tendencias= new Tendencias();
        $tendencias->setId_ten($Tendencias_id_ten);
        $Usuarios_idusuarios = strip_tags($_POST['usuarios_idusuarios']);
        $usuarios= new Usuarios();
        $usuarios->setIdusuarios($Usuarios_idusuarios);
        $tendencias_fecha = strip_tags($_POST['tendencias_fecha']);
        Tendencias_has_usuariosFacade::insert($tendencias, $usuarios, $tendencias_fecha);
return true;
    }

    public static function listAll(){
        $list=Tendencias_has_usuariosFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Tendencias_has_usuarios) {	
	       $rta.="{
	    \"tendencias_id_ten_id_ten\":\"{$Tendencias_has_usuarios->gettendencias_id_ten()->getid_ten()}\",
	    \"usuarios_idusuarios_idusuarios\":\"{$Tendencias_has_usuarios->getusuarios_idusuarios()->getidusuarios()}\",
	    \"tendencias_fecha\":\"{$Tendencias_has_usuarios->gettendencias_fecha()}\"
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