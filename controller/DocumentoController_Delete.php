<?php

include_once realpath('../facade/DocumentoFacade.php');
$idDocumento = strip_tags($_POST['idDocumento']);

DocumentoFacade::delete($idDocumento);
