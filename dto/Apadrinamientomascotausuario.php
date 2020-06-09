<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Don´t call me gringo you f%&ing beanner  \\


class Apadrinamientomascotausuario {

  private $Mascota_idMascota;
  private $Usuario_idUsuario;
  private $fechaApadrinamientoMascotaUsuariocol;
  private $estadoApadrinamiento;

    /**
     * Constructor de Apadrinamientomascotausuario
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a Mascota_idMascota
     * @return Mascota_idMascota
     */
  public function getMascota_idMascota(){
      return $this->Mascota_idMascota;
  }

    /**
     * Modifica el valor correspondiente a Mascota_idMascota
     * @param Mascota_idMascota
     */
  public function setMascota_idMascota($mascota_idMascota){
      $this->Mascota_idMascota = $mascota_idMascota;
  }
    /**
     * Devuelve el valor correspondiente a Usuario_idUsuario
     * @return Usuario_idUsuario
     */
  public function getUsuario_idUsuario(){
      return $this->Usuario_idUsuario;
  }

    /**
     * Modifica el valor correspondiente a Usuario_idUsuario
     * @param Usuario_idUsuario
     */
  public function setUsuario_idUsuario($usuario_idUsuario){
      $this->Usuario_idUsuario = $usuario_idUsuario;
  }
    /**
     * Devuelve el valor correspondiente a fechaApadrinamientoMascotaUsuariocol
     * @return fechaApadrinamientoMascotaUsuariocol
     */
  public function getFechaApadrinamientoMascotaUsuariocol(){
      return $this->fechaApadrinamientoMascotaUsuariocol;
  }

    /**
     * Modifica el valor correspondiente a fechaApadrinamientoMascotaUsuariocol
     * @param fechaApadrinamientoMascotaUsuariocol
     */
  public function setFechaApadrinamientoMascotaUsuariocol($fechaApadrinamientoMascotaUsuariocol){
      $this->fechaApadrinamientoMascotaUsuariocol = $fechaApadrinamientoMascotaUsuariocol;
  }
    /**
     * Devuelve el valor correspondiente a estadoApadrinamiento
     * @return estadoApadrinamiento
     */
  public function getEstadoApadrinamiento(){
      return $this->estadoApadrinamiento;
  }

    /**
     * Modifica el valor correspondiente a estadoApadrinamiento
     * @param estadoApadrinamiento
     */
  public function setEstadoApadrinamiento($estadoApadrinamiento){
      $this->estadoApadrinamiento = $estadoApadrinamiento;
  }


}
//That`s all folks!