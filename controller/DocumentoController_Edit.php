<?php
header("Access-Control-Allow-Origin: *");  
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");  
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
include_once realpath('../facade/DocumentoFacade.php');

$idDocumento     = strip_tags($_POST['idDocumento']);
$nombreDocumento = strip_tags($_POST['nombreDocumento']);
$rutaDocumento   = strip_tags($_POST['rutaDocumento']);
$respuesta       = false;
if ($idDocumento === '' || $nombreDocumento === '' || $rutaDocumento === '' ) {
    echo $respuesta;
} else {
    $respuesta = DocumentoFacade::update($idDocumento,$nombreDocumento, $rutaDocumento);
    if ($respuesta > 0) {
        echo $respuesta = true;
    } else {
        echo $respuesta;
    }
}
