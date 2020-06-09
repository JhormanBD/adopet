<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Pero el ruiseñor no respondió; yacía muerto sobre las altas hierbas, con el corazón traspasado de espinas.  \\


class Veterinaria {

  private $idVeterinaria;
  private $nombreVeterinaria;
  private $direccion;
  private $nit;
  private $telefono;

    /**
     * Constructor de Veterinaria
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idVeterinaria
     * @return idVeterinaria
     */
  public function getIdVeterinaria(){
      return $this->idVeterinaria;
  }

    /**
     * Modifica el valor correspondiente a idVeterinaria
     * @param idVeterinaria
     */
  public function setIdVeterinaria($idVeterinaria){
      $this->idVeterinaria = $idVeterinaria;
  }
    /**
     * Devuelve el valor correspondiente a nombreVeterinaria
     * @return nombreVeterinaria
     */
  public function getNombreVeterinaria(){
      return $this->nombreVeterinaria;
  }

    /**
     * Modifica el valor correspondiente a nombreVeterinaria
     * @param nombreVeterinaria
     */
  public function setNombreVeterinaria($nombreVeterinaria){
      $this->nombreVeterinaria = $nombreVeterinaria;
  }
    /**
     * Devuelve el valor correspondiente a direccion
     * @return direccion
     */
  public function getDireccion(){
      return $this->direccion;
  }

    /**
     * Modifica el valor correspondiente a direccion
     * @param direccion
     */
  public function setDireccion($direccion){
      $this->direccion = $direccion;
  }
    /**
     * Devuelve el valor correspondiente a nit
     * @return nit
     */
  public function getNit(){
      return $this->nit;
  }

    /**
     * Modifica el valor correspondiente a nit
     * @param nit
     */
  public function setNit($nit){
      $this->nit = $nit;
  }
    /**
     * Devuelve el valor correspondiente a telefono
     * @return telefono
     */
  public function getTelefono(){
      return $this->telefono;
  }

    /**
     * Modifica el valor correspondiente a telefono
     * @param telefono
     */
  public function setTelefono($telefono){
      $this->telefono = $telefono;
  }


}
//That`s all folks!