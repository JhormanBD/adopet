<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando Gregorio Samsa se despertó una mañana después de un sueño intranquilo, se encontró sobre su cama convertido en un monstruoso insecto.  \\


class Tendencias_has_usuarios {

  private $tendencias_id_ten;
  private $usuarios_idusuarios;
  private $tendencias_fecha;

    /**
     * Constructor de Tendencias_has_usuarios
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a tendencias_id_ten
     * @return tendencias_id_ten
     */
  public function getTendencias_id_ten(){
      return $this->tendencias_id_ten;
  }

    /**
     * Modifica el valor correspondiente a tendencias_id_ten
     * @param tendencias_id_ten
     */
  public function setTendencias_id_ten($tendencias_id_ten){
      $this->tendencias_id_ten = $tendencias_id_ten;
  }
    /**
     * Devuelve el valor correspondiente a usuarios_idusuarios
     * @return usuarios_idusuarios
     */
  public function getUsuarios_idusuarios(){
      return $this->usuarios_idusuarios;
  }

    /**
     * Modifica el valor correspondiente a usuarios_idusuarios
     * @param usuarios_idusuarios
     */
  public function setUsuarios_idusuarios($usuarios_idusuarios){
      $this->usuarios_idusuarios = $usuarios_idusuarios;
  }
    /**
     * Devuelve el valor correspondiente a tendencias_fecha
     * @return tendencias_fecha
     */
  public function getTendencias_fecha(){
      return $this->tendencias_fecha;
  }

    /**
     * Modifica el valor correspondiente a tendencias_fecha
     * @param tendencias_fecha
     */
  public function setTendencias_fecha($tendencias_fecha){
      $this->tendencias_fecha = $tendencias_fecha;
  }


}
//That`s all folks!