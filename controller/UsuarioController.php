<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Todo lo que alguna vez amaste te rechazará o morirá.  \\
include_once realpath('../facade/UsuarioFacade.php');


class UsuarioController {

    public static function insert(){
        $idUsuario = strip_tags($_POST['idUsuario']);
        $Historial_idHistorial = strip_tags($_POST['Historial_idHistorial']);
        $historial= new Historial();
        $historial->setIdHistorial($Historial_idHistorial);
        $Tipousuario_idTipoUsuario = strip_tags($_POST['TipoUsuario_idTipoUsuario']);
        $tipousuario= new Tipousuario();
        $tipousuario->setIdTipoUsuario($Tipousuario_idTipoUsuario);
        $nombreUsuario = strip_tags($_POST['nombreUsuario']);
        $apellidoUsuario = strip_tags($_POST['apellidoUsuario']);
        $cedula = strip_tags($_POST['cedula']);
        $direccion = strip_tags($_POST['direccion']);
        $correo = strip_tags($_POST['correo']);
        $contraseÃÂ±a = strip_tags($_POST['contraseÃÂ±a']);
        $estado = strip_tags($_POST['estado']);
        $fechanacimiento = strip_tags($_POST['fechanacimiento']);
        $fechaIngreso = strip_tags($_POST['fechaIngreso']);
        $foto = strip_tags($_POST['foto']);
        UsuarioFacade::insert($idUsuario, $historial, $tipousuario, $nombreUsuario, $apellidoUsuario, $cedula, $direccion, $correo, $contraseÃÂ±a, $estado, $fechanacimiento, $fechaIngreso, $foto);
return true;
    }

    public static function listAll(){
        $list=UsuarioFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Usuario) {	
	       $rta.="{
	    \"idUsuario\":\"{$Usuario->getidUsuario()}\",
	    \"Historial_idHistorial_idHistorial\":\"{$Usuario->getHistorial_idHistorial()->getidHistorial()}\",
	    \"TipoUsuario_idTipoUsuario_idTipoUsuario\":\"{$Usuario->getTipoUsuario_idTipoUsuario()->getidTipoUsuario()}\",
	    \"nombreUsuario\":\"{$Usuario->getnombreUsuario()}\",
	    \"apellidoUsuario\":\"{$Usuario->getapellidoUsuario()}\",
	    \"cedula\":\"{$Usuario->getcedula()}\",
	    \"direccion\":\"{$Usuario->getdireccion()}\",
	    \"correo\":\"{$Usuario->getcorreo()}\",
	    \"contraseÃÂ±a\":\"{$Usuario->getcontraseÃÂ±a()}\",
	    \"estado\":\"{$Usuario->getestado()}\",
	    \"fechanacimiento\":\"{$Usuario->getfechanacimiento()}\",
	    \"fechaIngreso\":\"{$Usuario->getfechaIngreso()}\",
	    \"foto\":\"{$Usuario->getfoto()}\"
	       },";
        }

        if($rta!=""){
	       $rta = substr($rta, 0, -1);
	       $msg="{\"msg\":\"exito\"}";
        }else{
	       $msg="{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
	       $rta="{\"result\":\"No se encontraron registros.\"}";	
        }
        return "[{$msg},{$rta}]";
    }

}
//That`s all folks!