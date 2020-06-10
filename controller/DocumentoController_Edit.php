<?php

include_once realpath('../facade/DocumentoFacade.php');

$idDocumento     = strip_tags($_POST['idDocumento']);
$nombreDocumento = strip_tags($_POST['nombreDocumento']);
$rutaDocumento   = strip_tags($_POST['rutaDocumento']);
$idUsuario       = strip_tags($_POST['idUsuario']);
$respuesta       = false;
if ($idDocumento === '' || $nombreDocumento === '' || $rutaDocumento === '' || $idUsuario === '') {
    echo $respuesta;
} else {
    $respuesta = DocumentoFacade::update($idDocumento,$nombreDocumento, $rutaDocumento, $idUsuario);
    if ($respuesta > 0) {
        echo $respuesta = true;
    } else {
        echo $respuesta;
    }
}
