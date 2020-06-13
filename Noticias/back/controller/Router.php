<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Cansado de escribir bugs? tranquilo, los escribimos por ti  \\
include_once realpath('ArchivosController.php');
include_once realpath('TendenciasController.php');
include_once realpath('Tendencias_has_usuariosController.php');
include_once realpath('UsuariosController.php');

$ruta = strip_tags($_POST['ruta']);
    	$rtn = "";
    	switch ($ruta) {
           case 'ArchivosInsert':
    			$rtn = ArchivosController::insert();
    			break;
    		case 'ArchivosList':
    			$rtn = ArchivosController::listAll();
    			break;
           case 'TendenciasInsert':
    			$rtn = TendenciasController::insert();
    			break;
    		case 'TendenciasList':
    			$rtn = TendenciasController::listAll();
    			break;
           case 'Tendencias_has_usuariosInsert':
    			$rtn = Tendencias_has_usuariosController::insert();
    			break;
    		case 'Tendencias_has_usuariosList':
    			$rtn = Tendencias_has_usuariosController::listAll();
    			break;
           case 'UsuariosInsert':
    			$rtn = UsuariosController::insert();
    			break;
    		case 'UsuariosList':
    			$rtn = UsuariosController::listAll();
    			break;
    		default:
    			$rtn="404 Ruta no encontrada.";
    			break;
    	}

echo $rtn;

//That`s all folks!