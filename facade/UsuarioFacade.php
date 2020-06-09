<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Hey ¿cómo se llama tu café internet?  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Usuario.php');
require_once realpath('../dao/interfaz/IUsuarioDao.php');
require_once realpath('../dto/Historial.php');
require_once realpath('../dto/Tipousuario.php');

class UsuarioFacade {

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
   * Crea un objeto Usuario a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idUsuario
   * @param historial_idHistorial
   * @param tipoUsuario_idTipoUsuario
   * @param nombreUsuario
   * @param apellidoUsuario
   * @param cedula
   * @param direccion
   * @param correo
   * @param contraseÃÂ±a
   * @param estado
   * @param fechanacimiento
   * @param fechaIngreso
   * @param foto
   */
  public static function insert( $idUsuario,  $historial_idHistorial,  $tipoUsuario_idTipoUsuario,  $nombreUsuario,  $apellidoUsuario,  $cedula,  $direccion,  $correo,  $contraseÃÂ±a,  $estado,  $fechanacimiento,  $fechaIngreso,  $foto){
      $usuario = new Usuario();
      $usuario->setIdUsuario($idUsuario); 
      $usuario->setHistorial_idHistorial($historial_idHistorial); 
      $usuario->setTipoUsuario_idTipoUsuario($tipoUsuario_idTipoUsuario); 
      $usuario->setNombreUsuario($nombreUsuario); 
      $usuario->setApellidoUsuario($apellidoUsuario); 
      $usuario->setCedula($cedula); 
      $usuario->setDireccion($direccion); 
      $usuario->setCorreo($correo); 
      $usuario->setContraseÃÂ±a($contraseÃÂ±a); 
      $usuario->setEstado($estado); 
      $usuario->setFechanacimiento($fechanacimiento); 
      $usuario->setFechaIngreso($fechaIngreso); 
      $usuario->setFoto($foto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $rtn = $usuarioDao->insert($usuario);
     $usuarioDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Usuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idUsuario
   * @return El objeto en base de datos o Null
   */
  public static function select($idUsuario){
      $usuario = new Usuario();
      $usuario->setIdUsuario($idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $result = $usuarioDao->select($usuario);
     $usuarioDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Usuario  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idUsuario
   * @param historial_idHistorial
   * @param tipoUsuario_idTipoUsuario
   * @param nombreUsuario
   * @param apellidoUsuario
   * @param cedula
   * @param direccion
   * @param correo
   * @param contraseÃÂ±a
   * @param estado
   * @param fechanacimiento
   * @param fechaIngreso
   * @param foto
   */
  public static function update($idUsuario, $historial_idHistorial, $tipoUsuario_idTipoUsuario, $nombreUsuario, $apellidoUsuario, $cedula, $direccion, $correo, $contraseÃÂ±a, $estado, $fechanacimiento, $fechaIngreso, $foto){
      $usuario = self::select($idUsuario);
      $usuario->setHistorial_idHistorial($historial_idHistorial); 
      $usuario->setTipoUsuario_idTipoUsuario($tipoUsuario_idTipoUsuario); 
      $usuario->setNombreUsuario($nombreUsuario); 
      $usuario->setApellidoUsuario($apellidoUsuario); 
      $usuario->setCedula($cedula); 
      $usuario->setDireccion($direccion); 
      $usuario->setCorreo($correo); 
      $usuario->setContraseÃÂ±a($contraseÃÂ±a); 
      $usuario->setEstado($estado); 
      $usuario->setFechanacimiento($fechanacimiento); 
      $usuario->setFechaIngreso($fechaIngreso); 
      $usuario->setFoto($foto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $usuarioDao->update($usuario);
     $usuarioDao->close();
  }

  /**
   * Elimina un objeto Usuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idUsuario
   */
  public static function delete($idUsuario){
      $usuario = new Usuario();
      $usuario->setIdUsuario($idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $usuarioDao->delete($usuario);
     $usuarioDao->close();
  }

  /**
   * Lista todos los objetos Usuario de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Usuario en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $result = $usuarioDao->listAll();
     $usuarioDao->close();
     return $result;
  }


}
//That`s all folks!