<?php
header("Access-Control-Allow-Origin: *");  
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");  
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
include_once realpath('../facade/FavoritomascotausuarioFacade.php');
$idFavoritoMascotaUsuario = strip_tags($_POST['idFavoritoMascotaUsuario']);

FavoritomascotausuarioFacade::delete($idFavoritoMascotaUsuario);