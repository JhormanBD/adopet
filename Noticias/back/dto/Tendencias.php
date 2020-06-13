<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Pero el ruiseñor no respondió; yacía muerto sobre las altas hierbas, con el corazón traspasado de espinas.  \\


class Tendencias {

  private $id_ten;
  private $titulo_ten;
  private $tipo_ten;
  private $publicado_ten;
  private $prioridad_ten;
  private $descrip_ten;

    /**
     * Constructor de Tendencias
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a id_ten
     * @return id_ten
     */
  public function getId_ten(){
      return $this->id_ten;
  }

    /**
     * Modifica el valor correspondiente a id_ten
     * @param id_ten
     */
  public function setId_ten($id_ten){
      $this->id_ten = $id_ten;
  }
    /**
     * Devuelve el valor correspondiente a titulo_ten
     * @return titulo_ten
     */
  public function getTitulo_ten(){
      return $this->titulo_ten;
  }

    /**
     * Modifica el valor correspondiente a titulo_ten
     * @param titulo_ten
     */
  public function setTitulo_ten($titulo_ten){
      $this->titulo_ten = $titulo_ten;
  }
    /**
     * Devuelve el valor correspondiente a tipo_ten
     * @return tipo_ten
     */
  public function getTipo_ten(){
      return $this->tipo_ten;
  }

    /**
     * Modifica el valor correspondiente a tipo_ten
     * @param tipo_ten
     */
  public function setTipo_ten($tipo_ten){
      $this->tipo_ten = $tipo_ten;
  }
    /**
     * Devuelve el valor correspondiente a publicado_ten
     * @return publicado_ten
     */
  public function getPublicado_ten(){
      return $this->publicado_ten;
  }

    /**
     * Modifica el valor correspondiente a publicado_ten
     * @param publicado_ten
     */
  public function setPublicado_ten($publicado_ten){
      $this->publicado_ten = $publicado_ten;
  }
    /**
     * Devuelve el valor correspondiente a prioridad_ten
     * @return prioridad_ten
     */
  public function getPrioridad_ten(){
      return $this->prioridad_ten;
  }

    /**
     * Modifica el valor correspondiente a prioridad_ten
     * @param prioridad_ten
     */
  public function setPrioridad_ten($prioridad_ten){
      $this->prioridad_ten = $prioridad_ten;
  }
    /**
     * Devuelve el valor correspondiente a descrip_ten
     * @return descrip_ten
     */
  public function getDescrip_ten(){
      return $this->descrip_ten;
  }

    /**
     * Modifica el valor correspondiente a descrip_ten
     * @param descrip_ten
     */
  public function setDescrip_ten($descrip_ten){
      $this->descrip_ten = $descrip_ten;
  }


}
//That`s all folks!