<?php
header("Access-Control-Allow-Origin: *");  
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");  
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
include_once realpath('../facade/DocumentoFacade.php');
$idDocumento = strip_tags($_POST['idDocumento']);

DocumentoFacade::delete($idDocumento);
