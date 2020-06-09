<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Has escuchado hablar del grandioso señor Arciniegas?  \\


class Fundacion_foto {

  private $idfundacion_foto;
  private $fundacion_fotonomre;
  private $fundacion_foto_ruta;
  private $Fundacion_idFundacion;

    /**
     * Constructor de Fundacion_foto
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idfundacion_foto
     * @return idfundacion_foto
     */
  public function getIdfundacion_foto(){
      return $this->idfundacion_foto;
  }

    /**
     * Modifica el valor correspondiente a idfundacion_foto
     * @param idfundacion_foto
     */
  public function setIdfundacion_foto($idfundacion_foto){
      $this->idfundacion_foto = $idfundacion_foto;
  }
    /**
     * Devuelve el valor correspondiente a fundacion_fotonomre
     * @return fundacion_fotonomre
     */
  public function getFundacion_fotonomre(){
      return $this->fundacion_fotonomre;
  }

    /**
     * Modifica el valor correspondiente a fundacion_fotonomre
     * @param fundacion_fotonomre
     */
  public function setFundacion_fotonomre($fundacion_fotonomre){
      $this->fundacion_fotonomre = $fundacion_fotonomre;
  }
    /**
     * Devuelve el valor correspondiente a fundacion_foto_ruta
     * @return fundacion_foto_ruta
     */
  public function getFundacion_foto_ruta(){
      return $this->fundacion_foto_ruta;
  }

    /**
     * Modifica el valor correspondiente a fundacion_foto_ruta
     * @param fundacion_foto_ruta
     */
  public function setFundacion_foto_ruta($fundacion_foto_ruta){
      $this->fundacion_foto_ruta = $fundacion_foto_ruta;
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


}
//That`s all folks!