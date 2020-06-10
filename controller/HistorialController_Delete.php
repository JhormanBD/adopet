<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/ConvenioFacade.php');
$idHistorial = strip_tags($_POST['idHistorial']);
if($idHistorial===""){
    echo $respuesta;
}else{
    $respuesta = HistorialFacade::delete($idHistorial);
}
if ($respuesta > 0) {
    echo $respuesta = true;
} else {
    echo $respuesta;
}
echo true;
