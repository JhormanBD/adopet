<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Alguna vez Anarchy se llamó Molotov ( u.u) *Nostalgia  \\


class Historialmascota {

  private $idHistorialMascota;
  private $fechaVacunaHistorialMascota;
  private $descripcion;
  private $Observacion;

    /**
     * Constructor de Historialmascota
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idHistorialMascota
     * @return idHistorialMascota
     */
  public function getIdHistorialMascota(){
      return $this->idHistorialMascota;
  }

    /**
     * Modifica el valor correspondiente a idHistorialMascota
     * @param idHistorialMascota
     */
  public function setIdHistorialMascota($idHistorialMascota){
      $this->idHistorialMascota = $idHistorialMascota;
  }
    /**
     * Devuelve el valor correspondiente a fechaVacunaHistorialMascota
     * @return fechaVacunaHistorialMascota
     */
  public function getFechaVacunaHistorialMascota(){
      return $this->fechaVacunaHistorialMascota;
  }

    /**
     * Modifica el valor correspondiente a fechaVacunaHistorialMascota
     * @param fechaVacunaHistorialMascota
     */
  public function setFechaVacunaHistorialMascota($fechaVacunaHistorialMascota){
      $this->fechaVacunaHistorialMascota = $fechaVacunaHistorialMascota;
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
     * Devuelve el valor correspondiente a Observacion
     * @return Observacion
     */
  public function getObservacion(){
      return $this->Observacion;
  }

    /**
     * Modifica el valor correspondiente a Observacion
     * @param Observacion
     */
  public function setObservacion($observacion){
      $this->Observacion = $observacion;
  }


}
//That`s all folks!