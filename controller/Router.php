<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ahora con 25% menos groserías  \\
include_once realpath('AlbergueController.php');
include_once realpath('ApadrinamientomascotausuarioController.php');
include_once realpath('CalificacionController.php');
include_once realpath('ConvenioController.php');
include_once realpath('DocumentosController.php');
include_once realpath('DonacionController.php');
include_once realpath('EspecieController.php');
include_once realpath('FavoritomascotausuarioController.php');
include_once realpath('Foto_mascotaController.php');
include_once realpath('FundacionController.php');
include_once realpath('Fundacion_fotoController.php');
include_once realpath('HistorialController.php');
include_once realpath('HistorialmascotaController.php');
include_once realpath('MascotaController.php');
include_once realpath('NotificacionesController.php');
include_once realpath('SolicitudController.php');
include_once realpath('TipodonacionController.php');
include_once realpath('TipousuarioController.php');
include_once realpath('UsuarioController.php');
include_once realpath('VeterinariaController.php');

$ruta = strip_tags($_POST['ruta']);
    	$rtn = "";
    	switch ($ruta) {
           case 'AlbergueInsert':
    			$rtn = AlbergueController::insert();
    			break;
    		case 'AlbergueList':
    			$rtn = AlbergueController::listAll();
    			break;
           case 'ApadrinamientomascotausuarioInsert':
    			$rtn = ApadrinamientomascotausuarioController::insert();
    			break;
    		case 'ApadrinamientomascotausuarioList':
    			$rtn = ApadrinamientomascotausuarioController::listAll();
    			break;
           case 'CalificacionInsert':
    			$rtn = CalificacionController::insert();
    			break;
    		case 'CalificacionList':
    			$rtn = CalificacionController::listAll();
    			break;
           case 'ConvenioInsert':
    			$rtn = ConvenioController::insert();
    			break;
    		case 'ConvenioList':
    			$rtn = ConvenioController::listAll();
    			break;
           case 'DocumentosInsert':
    			$rtn = DocumentosController::insert();
    			break;
    		case 'DocumentosList':
    			$rtn = DocumentosController::listAll();
    			break;
           case 'DonacionInsert':
    			$rtn = DonacionController::insert();
    			break;
    		case 'DonacionList':
    			$rtn = DonacionController::listAll();
    			break;
           case 'EspecieInsert':
    			$rtn = EspecieController::insert();
    			break;
    		case 'EspecieList':
    			$rtn = EspecieController::listAll();
    			break;
           case 'FavoritomascotausuarioInsert':
    			$rtn = FavoritomascotausuarioController::insert();
    			break;
    		case 'FavoritomascotausuarioList':
    			$rtn = FavoritomascotausuarioController::listAll();
    			break;
           case 'Foto_mascotaInsert':
    			$rtn = Foto_mascotaController::insert();
    			break;
    		case 'Foto_mascotaList':
    			$rtn = Foto_mascotaController::listAll();
    			break;
           case 'FundacionInsert':
    			$rtn = FundacionController::insert();
    			break;
    		case 'FundacionList':
    			$rtn = FundacionController::listAll();
    			break;
           case 'Fundacion_fotoInsert':
    			$rtn = Fundacion_fotoController::insert();
    			break;
    		case 'Fundacion_fotoList':
    			$rtn = Fundacion_fotoController::listAll();
    			break;
           case 'HistorialInsert':
    			$rtn = HistorialController::insert();
    			break;
    		case 'HistorialList':
    			$rtn = HistorialController::listAll();
    			break;
           case 'HistorialmascotaInsert':
    			$rtn = HistorialmascotaController::insert();
    			break;
    		case 'HistorialmascotaList':
    			$rtn = HistorialmascotaController::listAll();
    			break;
           case 'MascotaInsert':
    			$rtn = MascotaController::insert();
    			break;
    		case 'MascotaList':
    			$rtn = MascotaController::listAll();
    			break;
           case 'NotificacionesInsert':
    			$rtn = NotificacionesController::insert();
    			break;
    		case 'NotificacionesList':
    			$rtn = NotificacionesController::listAll();
    			break;
           case 'SolicitudInsert':
    			$rtn = SolicitudController::insert();
    			break;
    		case 'SolicitudList':
    			$rtn = SolicitudController::listAll();
    			break;
           case 'TipodonacionInsert':
    			$rtn = TipodonacionController::insert();
    			break;
    		case 'TipodonacionList':
    			$rtn = TipodonacionController::listAll();
    			break;
           case 'TipousuarioInsert':
    			$rtn = TipousuarioController::insert();
    			break;
    		case 'TipousuarioList':
    			$rtn = TipousuarioController::listAll();
    			break;
           case 'UsuarioInsert':
    			$rtn = UsuarioController::insert();
    			break;
    		case 'UsuarioList':
    			$rtn = UsuarioController::listAll();
    			break;
           case 'VeterinariaInsert':
    			$rtn = VeterinariaController::insert();
    			break;
    		case 'VeterinariaList':
    			$rtn = VeterinariaController::listAll();
    			break;
    		default:
    			$rtn="404 Ruta no encontrada.";
    			break;
    	}

echo $rtn;

//That`s all folks!