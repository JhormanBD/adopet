<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase de prueba ¿Quieres ver la de verdad? ( ͡~ ͜ʖ ͡°)  \\
include_once realpath('../facade/MascotaFacade.php');


class MascotaController {

    public static function insert(){
        $idMascota = strip_tags($_POST['idMascota']);
        $Especie_idEspecie = strip_tags($_POST['Especie_idEspecie']);
        $especie= new Especie();
        $especie->setIdEspecie($Especie_idEspecie);
        $Historialmascota_idHistorialMascota = strip_tags($_POST['HistorialMascota_idHistorialMascota']);
        $historialmascota= new Historialmascota();
        $historialmascota->setIdHistorialMascota($Historialmascota_idHistorialMascota);
        $nombreMascota = strip_tags($_POST['nombreMascota']);
        $edadMascota = strip_tags($_POST['edadMascota']);
        $sexoMascota = strip_tags($_POST['sexoMascota']);
        $disponibilidadMascota = strip_tags($_POST['disponibilidadMascota']);
        $esterilizado = strip_tags($_POST['esterilizado']);
        $Fundacion_idFundacion = strip_tags($_POST['Fundacion_idFundacion']);
        $fundacion= new Fundacion();
        $fundacion->setIdFundacion($Fundacion_idFundacion);
        $fechaIngreso = strip_tags($_POST['fechaIngreso']);
        $fechaSalida = strip_tags($_POST['fechaSalida']);
        $fotoMascota = strip_tags($_POST['fotoMascota']);
        $Mascota_creacion = strip_tags($_POST['Mascota_creacion']);
        $Apadrinamiento = strip_tags($_POST['Apadrinamiento']);
        $Veterinaria_idVeterinaria = strip_tags($_POST['Veterinaria_idVeterinaria']);
        $veterinaria= new Veterinaria();
        $veterinaria->setIdVeterinaria($Veterinaria_idVeterinaria);
        MascotaFacade::insert($idMascota, $especie, $historialmascota, $nombreMascota, $edadMascota, $sexoMascota, $disponibilidadMascota, $esterilizado, $fundacion, $fechaIngreso, $fechaSalida, $fotoMascota, $Mascota_creacion, $Apadrinamiento, $veterinaria);
return true;
    }

    public static function listAll(){
        $list=MascotaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Mascota) {	
	       $rta.="{
	    \"idMascota\":\"{$Mascota->getidMascota()}\",
	    \"Especie_idEspecie_idEspecie\":\"{$Mascota->getEspecie_idEspecie()->getidEspecie()}\",
	    \"HistorialMascota_idHistorialMascota_idHistorialMascota\":\"{$Mascota->getHistorialMascota_idHistorialMascota()->getidHistorialMascota()}\",
	    \"nombreMascota\":\"{$Mascota->getnombreMascota()}\",
	    \"edadMascota\":\"{$Mascota->getedadMascota()}\",
	    \"sexoMascota\":\"{$Mascota->getsexoMascota()}\",
	    \"disponibilidadMascota\":\"{$Mascota->getdisponibilidadMascota()}\",
	    \"esterilizado\":\"{$Mascota->getesterilizado()}\",
	    \"Fundacion_idFundacion_idFundacion\":\"{$Mascota->getFundacion_idFundacion()->getidFundacion()}\",
	    \"fechaIngreso\":\"{$Mascota->getfechaIngreso()}\",
	    \"fechaSalida\":\"{$Mascota->getfechaSalida()}\",
	    \"fotoMascota\":\"{$Mascota->getfotoMascota()}\",
	    \"Mascota_creacion\":\"{$Mascota->getMascota_creacion()}\",
	    \"Apadrinamiento\":\"{$Mascota->getApadrinamiento()}\",
	    \"Veterinaria_idVeterinaria_idVeterinaria\":\"{$Mascota->getVeterinaria_idVeterinaria()->getidVeterinaria()}\"
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