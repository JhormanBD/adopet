<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es tu vida y se acaba a cada minuto.  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Historial.php');
require_once realpath('../dao/interfaz/IHistorialDao.php');

class HistorialFacade {

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
   * Crea un objeto Historial a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idHistorial
   * @param fechaHistorial
   * @param descripcion
   */
  public static function insert( $idHistorial,  $fechaHistorial,  $descripcion){
      $historial = new Historial();
      $historial->setIdHistorial($idHistorial); 
      $historial->setFechaHistorial($fechaHistorial); 
      $historial->setDescripcion($descripcion); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $historialDao =$FactoryDao->gethistorialDao(self::getDataBaseDefault());
     $rtn = $historialDao->insert($historial);
     $historialDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Historial de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idHistorial
   * @return El objeto en base de datos o Null
   */
  public static function select($idHistorial){
      $historial = new Historial();
      $historial->setIdHistorial($idHistorial); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $historialDao =$FactoryDao->gethistorialDao(self::getDataBaseDefault());
     $result = $historialDao->select($historial);
     $historialDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Historial  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idHistorial
   * @param fechaHistorial
   * @param descripcion
   */
  public static function update($idHistorial, $fechaHistorial, $descripcion){
      $historial = self::select($idHistorial);
      $historial->setFechaHistorial($fechaHistorial); 
      $historial->setDescripcion($descripcion); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $historialDao =$FactoryDao->gethistorialDao(self::getDataBaseDefault());
     $historialDao->update($historial);
     $historialDao->close();
  }

  /**
   * Elimina un objeto Historial de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idHistorial
   */
  public static function delete($idHistorial){
      $historial = new Historial();
      $historial->setIdHistorial($idHistorial); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $historialDao =$FactoryDao->gethistorialDao(self::getDataBaseDefault());
     $historialDao->delete($historial);
     $historialDao->close();
  }

  /**
   * Lista todos los objetos Historial de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Historial en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $historialDao =$FactoryDao->gethistorialDao(self::getDataBaseDefault());
     $result = $historialDao->listAll();
     $historialDao->close();
     return $result;
  }


}
//That`s all folks!