<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once realpath('../facade/UsuariosFacade.php');

//       $idusuarios = strip_tags($_POST['idusuarios']);

 
//        $nombre ='ASFDGFGJHJ';
        $nombre = strip_tags($_POST['nombre']);
        $pass = 'Tejar123';
        $estado = '1';
        $usuario = strip_tags($_POST['usuario']);
//      $usuario = 'asdfg@gmail.comk';
        $pass=md5($pass);
        
        $rta=UsuariosFacade::select2($usuario);
       
        if($rta==NULL){
         UsuariosFacade::insert($nombre, $pass, $estado, $usuario);
             echo 1;
        }else{
             echo 2;
        }
        
        
//        
        
        
