<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La última regla es confiar en Arciniegas  \\
include_once realpath('../facade/VeterinariaFacade.php');


class VeterinariaController {

    public static function insert(){
        $idVeterinaria = strip_tags($_POST['idVeterinaria']);
        $nombreVeterinaria = strip_tags($_POST['nombreVeterinaria']);
        $direccion = strip_tags($_POST['direccion']);
        $nit = strip_tags($_POST['nit']);
        $telefono = strip_tags($_POST['telefono']);
        VeterinariaFacade::insert($idVeterinaria, $nombreVeterinaria, $direccion, $nit, $telefono);
return true;
    }

    public static function listAll(){
        $list=VeterinariaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Veterinaria) {	
	       $rta.="{
	    \"idVeterinaria\":\"{$Veterinaria->getidVeterinaria()}\",
	    \"nombreVeterinaria\":\"{$Veterinaria->getnombreVeterinaria()}\",
	    \"direccion\":\"{$Veterinaria->getdireccion()}\",
	    \"nit\":\"{$Veterinaria->getnit()}\",
	    \"telefono\":\"{$Veterinaria->gettelefono()}\"
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