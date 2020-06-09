<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Si crees que las mujeres son difíciles, no conoces Anarchy  \\
include_once realpath('../facade/DocumentosFacade.php');


class DocumentosController {

    public static function insert(){
        $idDocumentos = strip_tags($_POST['idDocumentos']);
        $NombreDocumento = strip_tags($_POST['NombreDocumento']);
        $DocumentosRuta = strip_tags($_POST['DocumentosRuta']);
        $Usuario_idUsuario = strip_tags($_POST['Usuario_idUsuario']);
        $usuario= new Usuario();
        $usuario->setIdUsuario($Usuario_idUsuario);
        DocumentosFacade::insert($idDocumentos, $NombreDocumento, $DocumentosRuta, $usuario);
return true;
    }

    public static function listAll(){
        $list=DocumentosFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Documentos) {	
	       $rta.="{
	    \"idDocumentos\":\"{$Documentos->getidDocumentos()}\",
	    \"NombreDocumento\":\"{$Documentos->getNombreDocumento()}\",
	    \"DocumentosRuta\":\"{$Documentos->getDocumentosRuta()}\",
	    \"Usuario_idUsuario_idUsuario\":\"{$Documentos->getUsuario_idUsuario()->getidUsuario()}\"
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