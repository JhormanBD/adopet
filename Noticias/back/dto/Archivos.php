<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Caminante no hay camino, se hace camino al andar  \\


class Archivos {

  private $id_arch;
  private $tipo_arch;
  private $file_arch;
  private $id_tendencia;

    /**
     * Constructor de Archivos
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a id_arch
     * @return id_arch
     */
  public function getId_arch(){
      return $this->id_arch;
  }

    /**
     * Modifica el valor correspondiente a id_arch
     * @param id_arch
     */
  public function setId_arch($id_arch){
      $this->id_arch = $id_arch;
  }
    /**
     * Devuelve el valor correspondiente a tipo_arch
     * @return tipo_arch
     */
  public function getTipo_arch(){
      return $this->tipo_arch;
  }

    /**
     * Modifica el valor correspondiente a tipo_arch
     * @param tipo_arch
     */
  public function setTipo_arch($tipo_arch){
      $this->tipo_arch = $tipo_arch;
  }
    /**
     * Devuelve el valor correspondiente a file_arch
     * @return file_arch
     */
  public function getFile_arch(){
      return $this->file_arch;
  }

    /**
     * Modifica el valor correspondiente a file_arch
     * @param file_arch
     */
  public function setFile_arch($file_arch){
      $this->file_arch = $file_arch;
  }
    /**
     * Devuelve el valor correspondiente a id_tendencia
     * @return id_tendencia
     */
  public function getId_tendencia(){
      return $this->id_tendencia;
  }

    /**
     * Modifica el valor correspondiente a id_tendencia
     * @param id_tendencia
     */
  public function setId_tendencia($id_tendencia){
      $this->id_tendencia = $id_tendencia;
  }


}
//That`s all folks!