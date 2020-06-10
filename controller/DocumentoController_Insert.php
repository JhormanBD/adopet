<?php

include_once realpath('../facade/DocumentoFacade.php');

$nombreDocumento   = strip_tags($_POST['nombreDocumento']);
$rutaDocumento     = strip_tags($_POST['rutaDocumento']);
$idUsuario = strip_tags($_POST['idUsuario']);
$usuario           = new Usuario();
$usuario->setIdUsuario($idUsuario);
$respuesta = false;
if ($nombreDocumento === '' || $rutaDocumento === '' || $idUsuario === '') {
    echo $respuesta;
} else {
    $respuesta = DocumentoFacade::insert($nombreDocumento, $rutaDocumento, $usuario);
    if ($respuesta > 0) {
        echo $respuesta = true;
    } else {
        echo $respuesta;
    }
}
