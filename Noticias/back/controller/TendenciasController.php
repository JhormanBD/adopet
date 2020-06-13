<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En un lugar de La Mancha, de cuyo nombre no quiero acordarme...  \\
include_once realpath('../facade/TendenciasFacade.php');


class TendenciasController {

    public static function insert(){
        $id_ten = strip_tags($_POST['id_ten']);
        $titulo_ten = strip_tags($_POST['titulo_ten']);
        $tipo_ten = strip_tags($_POST['tipo_ten']);
        $publicado_ten = strip_tags($_POST['publicado_ten']);
        $prioridad_ten = strip_tags($_POST['prioridad_ten']);
        $descrip_ten = strip_tags($_POST['descrip_ten']);
        TendenciasFacade::insert($id_ten, $titulo_ten, $tipo_ten, $publicado_ten, $prioridad_ten, $descrip_ten);
return true;
    }

    public static function listAll(){
        $list=TendenciasFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Tendencias) {	
	       $rta.="{
	    \"id_ten\":\"{$Tendencias->getid_ten()}\",
	    \"titulo_ten\":\"{$Tendencias->gettitulo_ten()}\",
	    \"tipo_ten\":\"{$Tendencias->gettipo_ten()}\",
	    \"publicado_ten\":\"{$Tendencias->getpublicado_ten()}\",
	    \"prioridad_ten\":\"{$Tendencias->getprioridad_ten()}\",
	    \"descrip_ten\":\"{$Tendencias->getdescrip_ten()}\"
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