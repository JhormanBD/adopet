<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ella no te quiere </3 mejor ponte a programar  \\


class Usuarios {

  private $idusuarios;
  private $nombre;
  private $pass;
  private $estado;
  private $usuario;

    /**
     * Constructor de Usuarios
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idusuarios
     * @return idusuarios
     */
  public function getIdusuarios(){
      return $this->idusuarios;
  }

    /**
     * Modifica el valor correspondiente a idusuarios
     * @param idusuarios
     */
  public function setIdusuarios($idusuarios){
      $this->idusuarios = $idusuarios;
  }
    /**
     * Devuelve el valor correspondiente a nombre
     * @return nombre
     */
  public function getNombre(){
      return $this->nombre;
  }

    /**
     * Modifica el valor correspondiente a nombre
     * @param nombre
     */
  public function setNombre($nombre){
      $this->nombre = $nombre;
  }
    /**
     * Devuelve el valor correspondiente a pass
     * @return pass
     */
  public function getPass(){
      return $this->pass;
  }

    /**
     * Modifica el valor correspondiente a pass
     * @param pass
     */
  public function setPass($pass){
      $this->pass = $pass;
  }
    /**
     * Devuelve el valor correspondiente a estado
     * @return estado
     */
  public function getEstado(){
      return $this->estado;
  }

    /**
     * Modifica el valor correspondiente a estado
     * @param estado
     */
  public function setEstado($estado){
      $this->estado = $estado;
  }
    /**
     * Devuelve el valor correspondiente a usuario
     * @return usuario
     */
  public function getUsuario(){
      return $this->usuario;
  }

    /**
     * Modifica el valor correspondiente a usuario
     * @param usuario
     */
  public function setUsuario($usuario){
      $this->usuario = $usuario;
  }


}
//That`s all folks!