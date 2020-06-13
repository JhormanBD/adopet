<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Podrías agradecernos con unos cuantos billetes _/(n.n)\_  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Tendencias.php');
require_once realpath('../dao/interfaz/ITendenciasDao.php');

class TendenciasFacade {

  /**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexión
   */
  private static function getGestorDefault(){
      return DEFAULT_GESTOR;
  }
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return DEFAULT_DBNAME;
  }
  /**
   * Crea un objeto Tendencias a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id_ten
   * @param titulo_ten
   * @param tipo_ten
   * @param publicado_ten
   * @param prioridad_ten
   * @param descrip_ten
   */
  public static function insert(   $titulo_ten,  $tipo_ten,  $publicado_ten,  $prioridad_ten,  $descrip_ten){
      $tendencias = new Tendencias();
//      $tendencias->setId_ten($id_ten); 
      $tendencias->setTitulo_ten($titulo_ten); 
      $tendencias->setTipo_ten($tipo_ten); 
      $tendencias->setPublicado_ten($publicado_ten); 
      $tendencias->setPrioridad_ten($prioridad_ten); 
      $tendencias->setDescrip_ten($descrip_ten); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tendenciasDao =$FactoryDao->gettendenciasDao(self::getDataBaseDefault());
     $rtn = $tendenciasDao->insert($tendencias);
     $tendenciasDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Tendencias de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id_ten
   * @return El objeto en base de datos o Null
   */
  public static function select($id_ten){
      $tendencias = new Tendencias();
      $tendencias->setId_ten($id_ten); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tendenciasDao =$FactoryDao->gettendenciasDao(self::getDataBaseDefault());
     $result = $tendenciasDao->select($tendencias);
     $tendenciasDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Tendencias  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id_ten
   * @param titulo_ten
   * @param tipo_ten
   * @param publicado_ten
   * @param prioridad_ten
   * @param descrip_ten
   */
  public static function update($id_ten, $titulo_ten, $tipo_ten, $publicado_ten, $prioridad_ten, $descrip_ten){
      $tendencias = self::select($id_ten);
      $tendencias->setTitulo_ten($titulo_ten); 
      $tendencias->setTipo_ten($tipo_ten); 
      $tendencias->setPublicado_ten($publicado_ten); 
      $tendencias->setPrioridad_ten($prioridad_ten); 
      $tendencias->setDescrip_ten($descrip_ten); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tendenciasDao =$FactoryDao->gettendenciasDao(self::getDataBaseDefault());
     $tendenciasDao->update($tendencias);
     $tendenciasDao->close();
  }
  public static function update2($id_ten, $titulo_ten,  $publicado_ten, $descrip_ten){
      $tendencias = self::select($id_ten);
      $tendencias->setTitulo_ten($titulo_ten); 
//      $tendencias->setTipo_ten($tipo_ten); 
      $tendencias->setPublicado_ten($publicado_ten); 
//      $tendencias->setPrioridad_ten($prioridad_ten); 
      $tendencias->setDescrip_ten($descrip_ten); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tendenciasDao =$FactoryDao->gettendenciasDao(self::getDataBaseDefault());
     $tendenciasDao->update2($tendencias);
     $tendenciasDao->close();
  }

  /**
   * Elimina un objeto Tendencias de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id_ten
   */
  public static function delete($id_ten){
      $tendencias = new Tendencias();
      $tendencias->setId_ten($id_ten); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tendenciasDao =$FactoryDao->gettendenciasDao(self::getDataBaseDefault());
     $tendenciasDao->delete($tendencias);
     $tendenciasDao->close();
  }

  /**
   * Lista todos los objetos Tendencias de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Tendencias en base de datos o Null
   */
  public static function listAll_id($id_ten){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tendenciasDao =$FactoryDao->gettendenciasDao(self::getDataBaseDefault());
     $result = $tendenciasDao->listAll_id($id_ten);
     $tendenciasDao->close();
     return $result;
  }
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tendenciasDao =$FactoryDao->gettendenciasDao(self::getDataBaseDefault());
     $result = $tendenciasDao->listAll();
     $tendenciasDao->close();
     return $result;
  }


}
//That`s all folks!