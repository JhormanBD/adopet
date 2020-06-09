<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    404 Frase no encontrada  \\


class Solicitud {

  private $idSolicitud;
  private $Usuario_idUsuario;
  private $descripcion;
  private $Aprobacion;
  private $tipoSolucion;

    /**
     * Constructor de Solicitud
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idSolicitud
     * @return idSolicitud
     */
  public function getIdSolicitud(){
      return $this->idSolicitud;
  }

    /**
     * Modifica el valor correspondiente a idSolicitud
     * @param idSolicitud
     */
  public function setIdSolicitud($idSolicitud){
      $this->idSolicitud = $idSolicitud;
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
     * Devuelve el valor correspondiente a descripcion
     * @return descripcion
     */
  public function getDescripcion(){
      return $this->descripcion;
  }

    /**
     * Modifica el valor correspondiente a descripcion
     * @param descripcion
     */
  public function setDescripcion($descripcion){
      $this->descripcion = $descripcion;
  }
    /**
     * Devuelve el valor correspondiente a Aprobacion
     * @return Aprobacion
     */
  public function getAprobacion(){
      return $this->Aprobacion;
  }

    /**
     * Modifica el valor correspondiente a Aprobacion
     * @param Aprobacion
     */
  public function setAprobacion($aprobacion){
      $this->Aprobacion = $aprobacion;
  }
    /**
     * Devuelve el valor correspondiente a tipoSolucion
     * @return tipoSolucion
     */
  public function getTipoSolucion(){
      return $this->tipoSolucion;
  }

    /**
     * Modifica el valor correspondiente a tipoSolucion
     * @param tipoSolucion
     */
  public function setTipoSolucion($tipoSolucion){
      $this->tipoSolucion = $tipoSolucion;
  }


}
//That`s all folks!