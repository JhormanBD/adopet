<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Anarchy! Apoyando la vagancia desde 2017  \\


class Mascota {

  private $idMascota;
  private $Especie_idEspecie;
  private $HistorialMascota_idHistorialMascota;
  private $nombreMascota;
  private $edadMascota;
  private $sexoMascota;
  private $disponibilidadMascota;
  private $esterilizado;
  private $Fundacion_idFundacion;
  private $fechaIngreso;
  private $fechaSalida;
  private $fotoMascota;
  private $Mascota_creacion;
  private $Apadrinamiento;
  private $Veterinaria_idVeterinaria;

    /**
     * Constructor de Mascota
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idMascota
     * @return idMascota
     */
  public function getIdMascota(){
      return $this->idMascota;
  }

    /**
     * Modifica el valor correspondiente a idMascota
     * @param idMascota
     */
  public function setIdMascota($idMascota){
      $this->idMascota = $idMascota;
  }
    /**
     * Devuelve el valor correspondiente a Especie_idEspecie
     * @return Especie_idEspecie
     */
  public function getEspecie_idEspecie(){
      return $this->Especie_idEspecie;
  }

    /**
     * Modifica el valor correspondiente a Especie_idEspecie
     * @param Especie_idEspecie
     */
  public function setEspecie_idEspecie($especie_idEspecie){
      $this->Especie_idEspecie = $especie_idEspecie;
  }
    /**
     * Devuelve el valor correspondiente a HistorialMascota_idHistorialMascota
     * @return HistorialMascota_idHistorialMascota
     */
  public function getHistorialMascota_idHistorialMascota(){
      return $this->HistorialMascota_idHistorialMascota;
  }

    /**
     * Modifica el valor correspondiente a HistorialMascota_idHistorialMascota
     * @param HistorialMascota_idHistorialMascota
     */
  public function setHistorialMascota_idHistorialMascota($historialMascota_idHistorialMascota){
      $this->HistorialMascota_idHistorialMascota = $historialMascota_idHistorialMascota;
  }
    /**
     * Devuelve el valor correspondiente a nombreMascota
     * @return nombreMascota
     */
  public function getNombreMascota(){
      return $this->nombreMascota;
  }

    /**
     * Modifica el valor correspondiente a nombreMascota
     * @param nombreMascota
     */
  public function setNombreMascota($nombreMascota){
      $this->nombreMascota = $nombreMascota;
  }
    /**
     * Devuelve el valor correspondiente a edadMascota
     * @return edadMascota
     */
  public function getEdadMascota(){
      return $this->edadMascota;
  }

    /**
     * Modifica el valor correspondiente a edadMascota
     * @param edadMascota
     */
  public function setEdadMascota($edadMascota){
      $this->edadMascota = $edadMascota;
  }
    /**
     * Devuelve el valor correspondiente a sexoMascota
     * @return sexoMascota
     */
  public function getSexoMascota(){
      return $this->sexoMascota;
  }

    /**
     * Modifica el valor correspondiente a sexoMascota
     * @param sexoMascota
     */
  public function setSexoMascota($sexoMascota){
      $this->sexoMascota = $sexoMascota;
  }
    /**
     * Devuelve el valor correspondiente a disponibilidadMascota
     * @return disponibilidadMascota
     */
  public function getDisponibilidadMascota(){
      return $this->disponibilidadMascota;
  }

    /**
     * Modifica el valor correspondiente a disponibilidadMascota
     * @param disponibilidadMascota
     */
  public function setDisponibilidadMascota($disponibilidadMascota){
      $this->disponibilidadMascota = $disponibilidadMascota;
  }
    /**
     * Devuelve el valor correspondiente a esterilizado
     * @return esterilizado
     */
  public function getEsterilizado(){
      return $this->esterilizado;
  }

    /**
     * Modifica el valor correspondiente a esterilizado
     * @param esterilizado
     */
  public function setEsterilizado($esterilizado){
      $this->esterilizado = $esterilizado;
  }
    /**
     * Devuelve el valor correspondiente a Fundacion_idFundacion
     * @return Fundacion_idFundacion
     */
  public function getFundacion_idFundacion(){
      return $this->Fundacion_idFundacion;
  }

    /**
     * Modifica el valor correspondiente a Fundacion_idFundacion
     * @param Fundacion_idFundacion
     */
  public function setFundacion_idFundacion($fundacion_idFundacion){
      $this->Fundacion_idFundacion = $fundacion_idFundacion;
  }
    /**
     * Devuelve el valor correspondiente a fechaIngreso
     * @return fechaIngreso
     */
  public function getFechaIngreso(){
      return $this->fechaIngreso;
  }

    /**
     * Modifica el valor correspondiente a fechaIngreso
     * @param fechaIngreso
     */
  public function setFechaIngreso($fechaIngreso){
      $this->fechaIngreso = $fechaIngreso;
  }
    /**
     * Devuelve el valor correspondiente a fechaSalida
     * @return fechaSalida
     */
  public function getFechaSalida(){
      return $this->fechaSalida;
  }

    /**
     * Modifica el valor correspondiente a fechaSalida
     * @param fechaSalida
     */
  public function setFechaSalida($fechaSalida){
      $this->fechaSalida = $fechaSalida;
  }
    /**
     * Devuelve el valor correspondiente a fotoMascota
     * @return fotoMascota
     */
  public function getFotoMascota(){
      return $this->fotoMascota;
  }

    /**
     * Modifica el valor correspondiente a fotoMascota
     * @param fotoMascota
     */
  public function setFotoMascota($fotoMascota){
      $this->fotoMascota = $fotoMascota;
  }
    /**
     * Devuelve el valor correspondiente a Mascota_creacion
     * @return Mascota_creacion
     */
  public function getMascota_creacion(){
      return $this->Mascota_creacion;
  }

    /**
     * Modifica el valor correspondiente a Mascota_creacion
     * @param Mascota_creacion
     */
  public function setMascota_creacion($mascota_creacion){
      $this->Mascota_creacion = $mascota_creacion;
  }
    /**
     * Devuelve el valor correspondiente a Apadrinamiento
     * @return Apadrinamiento
     */
  public function getApadrinamiento(){
      return $this->Apadrinamiento;
  }

    /**
     * Modifica el valor correspondiente a Apadrinamiento
     * @param Apadrinamiento
     */
  public function setApadrinamiento($apadrinamiento){
      $this->Apadrinamiento = $apadrinamiento;
  }
    /**
     * Devuelve el valor correspondiente a Veterinaria_idVeterinaria
     * @return Veterinaria_idVeterinaria
     */
  public function getVeterinaria_idVeterinaria(){
      return $this->Veterinaria_idVeterinaria;
  }

    /**
     * Modifica el valor correspondiente a Veterinaria_idVeterinaria
     * @param Veterinaria_idVeterinaria
     */
  public function setVeterinaria_idVeterinaria($veterinaria_idVeterinaria){
      $this->Veterinaria_idVeterinaria = $veterinaria_idVeterinaria;
  }


}
//That`s all folks!