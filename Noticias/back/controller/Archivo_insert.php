<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/ArchivosFacade.php');

//      $id_arch = strip_tags($_POST['id_arch']);
        $tipo_arch = strip_tags($_POST['tipo_arch']);
        $file_arch = strip_tags($_POST['file_arch']);
        $Tendencias_id_ten = strip_tags($_POST['id_tendencia']);
        $tendencias= new Tendencias();
        $tendencias->setId_ten($Tendencias_id_ten);
        ArchivosFacade::insert( $tipo_arch, $file_arch, $tendencias);
        
return true;