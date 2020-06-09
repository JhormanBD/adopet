<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando uses Anarchy, Georgie, tú también flotarás  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Notificaciones.php');
require_once realpath('../dao/interfaz/INotificacionesDao.php');
require_once realpath('../dto/Fundacion.php');
require_once realpath('../dto/Usuario.php');

class NotificacionesFacade {

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
   * Crea un objeto Notificaciones a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idmensaje
   * @param fechaMensaje
   * @param fundacion_idFundacion
   * @param usuario_idUsuario
   * @param descripcion
   */
  public static function insert( $idmensaje,  $fechaMensaje,  $fundacion_idFundacion,  $usuario_idUsuario,  $descripcion){
      $notificaciones = new Notificaciones();
      $notificaciones->setIdmensaje($idmensaje); 
      $notificaciones->setFechaMensaje($fechaMensaje); 
      $notificaciones->setFundacion_idFundacion($fundacion_idFundacion); 
      $notificaciones->setUsuario_idUsuario($usuario_idUsuario); 
      $notificaciones->setDescripcion($descripcion); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $notificacionesDao =$FactoryDao->getnotificacionesDao(self::getDataBaseDefault());
     $rtn = $notificacionesDao->insert($notificaciones);
     $notificacionesDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Notificaciones de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idmensaje
   * @return El objeto en base de datos o Null
   */
  public static function select($idmensaje){
      $notificaciones = new Notificaciones();
      $notificaciones->setIdmensaje($idmensaje); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $notificacionesDao =$FactoryDao->getnotificacionesDao(self::getDataBaseDefault());
     $result = $notificacionesDao->select($notificaciones);
     $notificacionesDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Notificaciones  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idmensaje
   * @param fechaMensaje
   * @param fundacion_idFundacion
   * @param usuario_idUsuario
   * @param descripcion
   */
  public static function update($idmensaje, $fechaMensaje, $fundacion_idFundacion, $usuario_idUsuario, $descripcion){
      $notificaciones = self::select($idmensaje);
      $notificaciones->setFechaMensaje($fechaMensaje); 
      $notificaciones->setFundacion_idFundacion($fundacion_idFundacion); 
      $notificaciones->setUsuario_idUsuario($usuario_idUsuario); 
      $notificaciones->setDescripcion($descripcion); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $notificacionesDao =$FactoryDao->getnotificacionesDao(self::getDataBaseDefault());
     $notificacionesDao->update($notificaciones);
     $notificacionesDao->close();
  }

  /**
   * Elimina un objeto Notificaciones de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idmensaje
   */
  public static function delete($idmensaje){
      $notificaciones = new Notificaciones();
      $notificaciones->setIdmensaje($idmensaje); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $notificacionesDao =$FactoryDao->getnotificacionesDao(self::getDataBaseDefault());
     $notificacionesDao->delete($notificaciones);
     $notificacionesDao->close();
  }

  /**
   * Lista todos los objetos Notificaciones de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Notificaciones en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $notificacionesDao =$FactoryDao->getnotificacionesDao(self::getDataBaseDefault());
     $result = $notificacionesDao->listAll();
     $notificacionesDao->close();
     return $result;
  }


}
//That`s all folks!