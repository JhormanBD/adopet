<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Oh! (°o° ) ¡es Fredy Arciniegas, el intelectualoide millonario!  \\
include_once realpath('../facade/ArchivosFacade.php');


class ArchivosController {

    public static function insert(){
        $id_arch = strip_tags($_POST['id_arch']);
        $tipo_arch = strip_tags($_POST['tipo_arch']);
        $file_arch = strip_tags($_POST['file_arch']);
        $Tendencias_id_ten = strip_tags($_POST['id_tendencia']);
        $tendencias= new Tendencias();
        $tendencias->setId_ten($Tendencias_id_ten);
        ArchivosFacade::insert($id_arch, $tipo_arch, $file_arch, $tendencias);
return true;
    }

    public static function listAll(){
        $list=ArchivosFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Archivos) {	
	       $rta.="{
	    \"id_arch\":\"{$Archivos->getid_arch()}\",
	    \"tipo_arch\":\"{$Archivos->gettipo_arch()}\",
	    \"file_arch\":\"{$Archivos->getfile_arch()}\",
	    \"id_tendencia_id_ten\":\"{$Archivos->getid_tendencia()->getid_ten()}\"
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