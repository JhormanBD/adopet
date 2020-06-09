<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Tu alma nos pertenece... Salve Mr. Arciniegas  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Apadrinamientomascotausuario.php');
require_once realpath('../dao/interfaz/IApadrinamientomascotausuarioDao.php');
require_once realpath('../dto/Mascota.php');
require_once realpath('../dto/Usuario.php');

class ApadrinamientomascotausuarioFacade {

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
   * Crea un objeto Apadrinamientomascotausuario a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param mascota_idMascota
   * @param usuario_idUsuario
   * @param fechaApadrinamientoMascotaUsuariocol
   * @param estadoApadrinamiento
   */
  public static function insert( $mascota_idMascota,  $usuario_idUsuario,  $fechaApadrinamientoMascotaUsuariocol,  $estadoApadrinamiento){
      $apadrinamientomascotausuario = new Apadrinamientomascotausuario();
      $apadrinamientomascotausuario->setMascota_idMascota($mascota_idMascota); 
      $apadrinamientomascotausuario->setUsuario_idUsuario($usuario_idUsuario); 
      $apadrinamientomascotausuario->setFechaApadrinamientoMascotaUsuariocol($fechaApadrinamientoMascotaUsuariocol); 
      $apadrinamientomascotausuario->setEstadoApadrinamiento($estadoApadrinamiento); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apadrinamientomascotausuarioDao =$FactoryDao->getapadrinamientomascotausuarioDao(self::getDataBaseDefault());
     $rtn = $apadrinamientomascotausuarioDao->insert($apadrinamientomascotausuario);
     $apadrinamientomascotausuarioDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Apadrinamientomascotausuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param mascota_idMascota
   * @param usuario_idUsuario
   * @return El objeto en base de datos o Null
   */
  public static function select($mascota_idMascota, $usuario_idUsuario){
      $apadrinamientomascotausuario = new Apadrinamientomascotausuario();
      $apadrinamientomascotausuario->setMascota_idMascota($mascota_idMascota); 
      $apadrinamientomascotausuario->setUsuario_idUsuario($usuario_idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apadrinamientomascotausuarioDao =$FactoryDao->getapadrinamientomascotausuarioDao(self::getDataBaseDefault());
     $result = $apadrinamientomascotausuarioDao->select($apadrinamientomascotausuario);
     $apadrinamientomascotausuarioDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Apadrinamientomascotausuario  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param mascota_idMascota
   * @param usuario_idUsuario
   * @param fechaApadrinamientoMascotaUsuariocol
   * @param estadoApadrinamiento
   */
  public static function update($mascota_idMascota, $usuario_idUsuario, $fechaApadrinamientoMascotaUsuariocol, $estadoApadrinamiento){
      $apadrinamientomascotausuario = self::select($mascota_idMascota, $usuario_idUsuario);
      $apadrinamientomascotausuario->setFechaApadrinamientoMascotaUsuariocol($fechaApadrinamientoMascotaUsuariocol); 
      $apadrinamientomascotausuario->setEstadoApadrinamiento($estadoApadrinamiento); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apadrinamientomascotausuarioDao =$FactoryDao->getapadrinamientomascotausuarioDao(self::getDataBaseDefault());
     $apadrinamientomascotausuarioDao->update($apadrinamientomascotausuario);
     $apadrinamientomascotausuarioDao->close();
  }

  /**
   * Elimina un objeto Apadrinamientomascotausuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param mascota_idMascota
   * @param usuario_idUsuario
   */
  public static function delete($mascota_idMascota, $usuario_idUsuario){
      $apadrinamientomascotausuario = new Apadrinamientomascotausuario();
      $apadrinamientomascotausuario->setMascota_idMascota($mascota_idMascota); 
      $apadrinamientomascotausuario->setUsuario_idUsuario($usuario_idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apadrinamientomascotausuarioDao =$FactoryDao->getapadrinamientomascotausuarioDao(self::getDataBaseDefault());
     $apadrinamientomascotausuarioDao->delete($apadrinamientomascotausuario);
     $apadrinamientomascotausuarioDao->close();
  }

  /**
   * Lista todos los objetos Apadrinamientomascotausuario de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Apadrinamientomascotausuario en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apadrinamientomascotausuarioDao =$FactoryDao->getapadrinamientomascotausuarioDao(self::getDataBaseDefault());
     $result = $apadrinamientomascotausuarioDao->listAll();
     $apadrinamientomascotausuarioDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Apadrinamientomascotausuario de la base de datos a partir de Mascota_idMascota.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param mascota_idMascota
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByMascota_idMascota($mascota_idMascota){
      $apadrinamientomascotausuario = new Apadrinamientomascotausuario();
      $apadrinamientomascotausuario->setMascota_idMascota($mascota_idMascota); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apadrinamientomascotausuarioDao =$FactoryDao->getapadrinamientomascotausuarioDao(self::getDataBaseDefault());
     $result = $apadrinamientomascotausuarioDao->listByMascota_idMascota($apadrinamientomascotausuario);
     $apadrinamientomascotausuarioDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Apadrinamientomascotausuario de la base de datos a partir de Usuario_idUsuario.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param usuario_idUsuario
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByUsuario_idUsuario($usuario_idUsuario){
      $apadrinamientomascotausuario = new Apadrinamientomascotausuario();
      $apadrinamientomascotausuario->setUsuario_idUsuario($usuario_idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $apadrinamientomascotausuarioDao =$FactoryDao->getapadrinamientomascotausuarioDao(self::getDataBaseDefault());
     $result = $apadrinamientomascotausuarioDao->listByUsuario_idUsuario($apadrinamientomascotausuario);
     $apadrinamientomascotausuarioDao->close();
     return $result;
  }


}
//That`s all folks!