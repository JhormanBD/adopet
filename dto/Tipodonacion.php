<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿No es más sencillo hacer todo en el Main?  \\


class Tipodonacion {

  private $idTipoDonacion;
  private $TipoDonacion;
  private $Descripcion;

    /**
     * Constructor de Tipodonacion
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idTipoDonacion
     * @return idTipoDonacion
     */
  public function getIdTipoDonacion(){
      return $this->idTipoDonacion;
  }

    /**
     * Modifica el valor correspondiente a idTipoDonacion
     * @param idTipoDonacion
     */
  public function setIdTipoDonacion($idTipoDonacion){
      $this->idTipoDonacion = $idTipoDonacion;
  }
    /**
     * Devuelve el valor correspondiente a TipoDonacion
     * @return TipoDonacion
     */
  public function getTipoDonacion(){
      return $this->TipoDonacion;
  }

    /**
     * Modifica el valor correspondiente a TipoDonacion
     * @param TipoDonacion
     */
  public function setTipoDonacion($tipoDonacion){
      $this->TipoDonacion = $tipoDonacion;
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