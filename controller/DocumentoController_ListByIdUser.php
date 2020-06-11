<?php

include_once realpath('../facade/DocumentoFacade.php');

$idUser     = strip_tags($_POST['idUsuario']);
$list = DocumentoFacade::ListByIdUser($idUser);
$rta="";

foreach ($list as $obj => $Documento) {
    $rta .= "{
	    \"idDocumento\":\"{$Documento->getidDocumento()}\",
	    \"nombreDocumento\":\"{$Documento->getnombreDocumento()}\",
	    \"rutaDocumento\":\"{$Documento->getrutaDocumento()}\",
	    \"idUsuario\":\"{$Documento->getUsuario_idUsuario()->getidUsuario()}\"
	       },";
}

if ($rta != "") {
    $rta = substr($rta, 0, -1);
    $msg = "{\"msg\":\"exito\"}";
} else {
    $msg = "{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
    $rta = "{\"result\":\"No se encontraron registros.\"}";
}
echo "[{$msg},{$rta}]";