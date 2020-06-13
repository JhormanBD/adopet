<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Traigo una pizza para ¿y se la creyó?  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Tendencias_has_usuarios.php');
require_once realpath('../dao/interfaz/ITendencias_has_usuariosDao.php');
require_once realpath('../dto/Tendencias.php');
require_once realpath('../dto/Usuarios.php');

class Tendencias_has_usuariosFacade {

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
   * Crea un objeto Tendencias_has_usuarios a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param tendencias_id_ten
   * @param usuarios_idusuarios
   * @param tendencias_fecha
   */
  public static function insert( $tendencias_id_ten,  $usuarios_idusuarios){
      $tendencias_has_usuarios = new Tendencias_has_usuarios();
      $tendencias_has_usuarios->setTendencias_id_ten($tendencias_id_ten); 
      $tendencias_has_usuarios->setUsuarios_idusuarios($usuarios_idusuarios); 
     

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tendencias_has_usuariosDao =$FactoryDao->gettendencias_has_usuariosDao(self::getDataBaseDefault());
     $rtn = $tendencias_has_usuariosDao->insert($tendencias_has_usuarios);
     $tendencias_has_usuariosDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Tendencias_has_usuarios de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param tendencias_id_ten
   * @param usuarios_idusuarios
   * @return El objeto en base de datos o Null
   */
  public static function select($tendencias_id_ten, $usuarios_idusuarios){
      $tendencias_has_usuarios = new Tendencias_has_usuarios();
      $tendencias_has_usuarios->setTendencias_id_ten($tendencias_id_ten); 
      $tendencias_has_usuarios->setUsuarios_idusuarios($usuarios_idusuarios); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tendencias_has_usuariosDao =$FactoryDao->gettendencias_has_usuariosDao(self::getDataBaseDefault());
     $result = $tendencias_has_usuariosDao->select($tendencias_has_usuarios);
     $tendencias_has_usuariosDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Tendencias_has_usuarios  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param tendencias_id_ten
   * @param usuarios_idusuarios
   * @param tendencias_fecha
   */
  public static function update($tendencias_id_ten, $usuarios_idusuarios, $tendencias_fecha){
      $tendencias_has_usuarios = self::select($tendencias_id_ten, $usuarios_idusuarios);
      $tendencias_has_usuarios->setTendencias_fecha($tendencias_fecha); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tendencias_has_usuariosDao =$FactoryDao->gettendencias_has_usuariosDao(self::getDataBaseDefault());
     $tendencias_has_usuariosDao->update($tendencias_has_usuarios);
     $tendencias_has_usuariosDao->close();
  }

  /**
   * Elimina un objeto Tendencias_has_usuarios de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param tendencias_id_ten
   * @param usuarios_idusuarios
   */
  public static function delete($tendencias_id_ten, $usuarios_idusuarios){
      $tendencias_has_usuarios = new Tendencias_has_usuarios();
      $tendencias_has_usuarios->setTendencias_id_ten($tendencias_id_ten); 
      $tendencias_has_usuarios->setUsuarios_idusuarios($usuarios_idusuarios); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tendencias_has_usuariosDao =$FactoryDao->gettendencias_has_usuariosDao(self::getDataBaseDefault());
     $tendencias_has_usuariosDao->delete($tendencias_has_usuarios);
     $tendencias_has_usuariosDao->close();
  }

  /**
   * Lista todos los objetos Tendencias_has_usuarios de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Tendencias_has_usuarios en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tendencias_has_usuariosDao =$FactoryDao->gettendencias_has_usuariosDao(self::getDataBaseDefault());
     $result = $tendencias_has_usuariosDao->listAll();
     $tendencias_has_usuariosDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Tendencias_has_usuarios de la base de datos a partir de tendencias_id_ten.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param tendencias_id_ten
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByTendencias_id_ten($tendencias_id_ten){
      $tendencias_has_usuarios = new Tendencias_has_usuarios();
      $tendencias_has_usuarios->setTendencias_id_ten($tendencias_id_ten); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tendencias_has_usuariosDao =$FactoryDao->gettendencias_has_usuariosDao(self::getDataBaseDefault());
     $result = $tendencias_has_usuariosDao->listByTendencias_id_ten($tendencias_has_usuarios);
     $tendencias_has_usuariosDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Tendencias_has_usuarios de la base de datos a partir de usuarios_idusuarios.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param usuarios_idusuarios
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByUsuarios_idusuarios($usuarios_idusuarios){
      $tendencias_has_usuarios = new Tendencias_has_usuarios();
      $tendencias_has_usuarios->setUsuarios_idusuarios($usuarios_idusuarios); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tendencias_has_usuariosDao =$FactoryDao->gettendencias_has_usuariosDao(self::getDataBaseDefault());
     $result = $tendencias_has_usuariosDao->listByUsuarios_idusuarios($tendencias_has_usuarios);
     $tendencias_has_usuariosDao->close();
     return $result;
  }


}
//That`s all folks!