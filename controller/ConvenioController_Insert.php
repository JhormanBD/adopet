<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once realpath('../facade/ConvenioFacade.php');
        
        $Veterinaria_idVeterinaria = strip_tags($_POST['Veterinaria_idVeterinaria']);
        $veterinaria= new Veterinaria();
        $veterinaria->setIdVeterinaria($Veterinaria_idVeterinaria);
        $Fundacion_idFundacion = strip_tags($_POST['Fundacion_idFundacion']);
        $fundacion= new Fundacion();
        $fundacion->setIdFundacion($Fundacion_idFundacion);
        $fechaConvenio = strip_tags($_POST['fechaConvenio']);
        $nombreConvenio = strip_tags($_POST['nombreConvenio']);
        $duracionConvenio = strip_tags($_POST['duracionConvenio']);
        $respuesta=false;
       //guiarse por los datos que recibe el insert
        if ($veterinaria===''||$fundacion===''||$fechaConvenio===''||$nombreConvenio===''||$duracionConvenio===''){
            
            return $respuesta;
        }else{
            
         //insert devuelve es un numero si incerto   
         $respuesta=ConvenioFacade::insert($veterinaria_idVeterinaria, $fundacion_idFundacion, $fechaConvenio, $nombreConvenio, $duracionConvenio);
        if($respuesta>0){
            return $respuesta=true;
        }
            
        }
       
return true;

