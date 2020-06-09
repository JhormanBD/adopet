<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando la gente cree que está muriendo, te escucha en lugar de esperar su turno para hablar.  \\


class Historial {

  private $idHistorial;
  private $fechaHistorial;
  private $Descripcion;

    /**
     * Constructor de Historial
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idHistorial
     * @return idHistorial
     */
  public function getIdHistorial(){
      return $this->idHistorial;
  }

    /**
     * Modifica el valor correspondiente a idHistorial
     * @param idHistorial
     */
  public function setIdHistorial($idHistorial){
      $this->idHistorial = $idHistorial;
  }
    /**
     * Devuelve el valor correspondiente a fechaHistorial
     * @return fechaHistorial
     */
  public function getFechaHistorial(){
      return $this->fechaHistorial;
  }

    /**
     * Modifica el valor correspondiente a fechaHistorial
     * @param fechaHistorial
     */
  public function setFechaHistorial($fechaHistorial){
      $this->fechaHistorial = $fechaHistorial;
  }
    /**
     * Devuelve el valor correspondiente a Descripcion
     * @return Descripcion
     */
  public function getDescripcion(){
      return $this->Descripcion;
  }

    /**
     * Modifica el valor correspondiente a Descripcion
     * @param Descripcion
     */
  public function setDescripcion($descripcion){
      $this->Descripcion = $descripcion;
  }


}
//That`s all folks!