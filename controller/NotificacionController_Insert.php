<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');
//header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");  
header('Content-Type: text/html; charset=utf-8');
header("content-type: application/json; charset=utf-8");
header('P3P: CP="IDC DSP COR CURa ADMa OUR IND PHY ONL COM STA"');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once realpath('../facade/NotificacionFacade.php');

        $JSONData = file_get_contents("php://input");
        $dataObject = json_decode($JSONData);
        
        $nombreEspecie = strip_tags($dataObject->nombreEspecie);
        
        $idmensaje = strip_tags($dataObject->idmensaje);
        $fechaMensaje = strip_tags($dataObject->fechaMensaje);
        $Fundacion_idFundacion = strip_tags($dataObject->Fundacion_idFundacion);
        $fundacion= new Fundacion();
        $fundacion->setIdFundacion($Fundacion_idFundacion);
        $Usuario_idUsuario = strip_tags($dataObject->Usuario_idUsuario);
        $usuario= new Usuario();
        $usuario->setIdUsuario($Usuario_idUsuario);
        $Descripcion = strip_tags($dataObject->Descripcion);
        
        $respuesta= false;
        
        if ($idmensaje === '' || $fechamensaje === '' || $Fundacion_idFundacion ==='' || $Usuario_idUsuario === '' || $Descripcion=== '' ) {
        
            echo $respuesta;
            
        }else{
            
            $respuesta= NotificacionFacade::insert($idmensaje, $fechaMensaje, $fundacion, $usuario, $Descripcion);
            
                if ($respuesta>0) {
                
                    echo $respuesta = true;}
                else{
                    echo $respuesta;
            }
        }  
        

