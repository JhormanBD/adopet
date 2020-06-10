<?php

include_once realpath('../facade/FavoritomascotausuarioFacade.php');
$idFavoritoMascotaUsuario = strip_tags($_POST['idFavoritoMascotaUsuario']);

FavoritomascotausuarioFacade::delete($idFavoritoMascotaUsuario);