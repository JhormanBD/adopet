<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ojos de perro azul  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Usuarios.php');
require_once realpath('../dao/interfaz/IUsuariosDao.php');

class UsuariosFacade {

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
   * Crea un objeto Usuarios a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idusuarios
   * @param nombre
   * @param pass
   * @param estado
   * @param usuario
   */
  public static function insert(   $nombre,  $pass,  $estado,  $usuario){
      $usuarios = new Usuarios();
//      $usuarios->setIdusuarios($idusuarios); 
      $usuarios->setNombre($nombre); 
      $usuarios->setPass($pass); 
      $usuarios->setEstado($estado); 
      $usuarios->setUsuario($usuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuariosDao =$FactoryDao->getusuariosDao(self::getDataBaseDefault());
     $rtn = $usuariosDao->insert($usuarios);
     $usuariosDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Usuarios de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idusuarios
   * @return El objeto en base de datos o Null
   */
  public static function select($idusuarios){
      $usuarios = new Usuarios();
      $usuarios->setIdusuarios($idusuarios); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuariosDao =$FactoryDao->getusuariosDao(self::getDataBaseDefault());
     $result = $usuariosDao->select($usuarios);
     $usuariosDao->close();
     return $result;
  }
  public static function select2($idusuarios){
//      $usuarios = new Usuarios();
//      $usuarios->setIdusuarios($idusuarios); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuariosDao =$FactoryDao->getusuariosDao(self::getDataBaseDefault());
     $result = $usuariosDao->select2($idusuarios);
     $usuariosDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Usuarios  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idusuarios
   * @param nombre
   * @param pass
   * @param estado
   * @param usuario
   */
  public static function update($idusuarios, $nombre, $pass, $estado, $usuario){
      $usuarios = self::select($idusuarios);
      $usuarios->setNombre($nombre); 
      $usuarios->setPass($pass); 
      $usuarios->setEstado($estado); 
      $usuarios->setUsuario($usuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuariosDao =$FactoryDao->getusuariosDao(self::getDataBaseDefault());
     $usuariosDao->update($usuarios);
     $usuariosDao->close();
  }

  /**
   * Elimina un objeto Usuarios de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idusuarios
   */
  public static function delete($idusuarios){
      $usuarios = new Usuarios();
      $usuarios->setIdusuarios($idusuarios); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuariosDao =$FactoryDao->getusuariosDao(self::getDataBaseDefault());
     $usuariosDao->delete($usuarios);
     $usuariosDao->close();
  }

  /**
   * Lista todos los objetos Usuarios de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Usuarios en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuariosDao =$FactoryDao->getusuariosDao(self::getDataBaseDefault());
     $result = $usuariosDao->listAll();
     $usuariosDao->close();
     return $result;
  }
  
  public static function login_user($user,$pass){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuariosDao =$FactoryDao->getusuariosDao(self::getDataBaseDefault());
     $result = $usuariosDao->login_user($user,$pass);
     $usuariosDao->close();
     return $result;
  }


}
//That`s all folks!