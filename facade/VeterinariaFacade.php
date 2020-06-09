<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿En serio? ¿Tantos buenos frameworks y estás usando Anarchy?  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Veterinaria.php');
require_once realpath('../dao/interfaz/IVeterinariaDao.php');

class VeterinariaFacade {

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
   * Crea un objeto Veterinaria a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idVeterinaria
   * @param nombreVeterinaria
   * @param direccion
   * @param nit
   * @param telefono
   */
  public static function insert( $idVeterinaria,  $nombreVeterinaria,  $direccion,  $nit,  $telefono){
      $veterinaria = new Veterinaria();
      $veterinaria->setIdVeterinaria($idVeterinaria); 
      $veterinaria->setNombreVeterinaria($nombreVeterinaria); 
      $veterinaria->setDireccion($direccion); 
      $veterinaria->setNit($nit); 
      $veterinaria->setTelefono($telefono); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $veterinariaDao =$FactoryDao->getveterinariaDao(self::getDataBaseDefault());
     $rtn = $veterinariaDao->insert($veterinaria);
     $veterinariaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Veterinaria de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idVeterinaria
   * @return El objeto en base de datos o Null
   */
  public static function select($idVeterinaria){
      $veterinaria = new Veterinaria();
      $veterinaria->setIdVeterinaria($idVeterinaria); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $veterinariaDao =$FactoryDao->getveterinariaDao(self::getDataBaseDefault());
     $result = $veterinariaDao->select($veterinaria);
     $veterinariaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Veterinaria  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idVeterinaria
   * @param nombreVeterinaria
   * @param direccion
   * @param nit
   * @param telefono
   */
  public static function update($idVeterinaria, $nombreVeterinaria, $direccion, $nit, $telefono){
      $veterinaria = self::select($idVeterinaria);
      $veterinaria->setNombreVeterinaria($nombreVeterinaria); 
      $veterinaria->setDireccion($direccion); 
      $veterinaria->setNit($nit); 
      $veterinaria->setTelefono($telefono); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $veterinariaDao =$FactoryDao->getveterinariaDao(self::getDataBaseDefault());
     $veterinariaDao->update($veterinaria);
     $veterinariaDao->close();
  }

  /**
   * Elimina un objeto Veterinaria de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idVeterinaria
   */
  public static function delete($idVeterinaria){
      $veterinaria = new Veterinaria();
      $veterinaria->setIdVeterinaria($idVeterinaria); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $veterinariaDao =$FactoryDao->getveterinariaDao(self::getDataBaseDefault());
     $veterinariaDao->delete($veterinaria);
     $veterinariaDao->close();
  }

  /**
   * Lista todos los objetos Veterinaria de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Veterinaria en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $veterinariaDao =$FactoryDao->getveterinariaDao(self::getDataBaseDefault());
     $result = $veterinariaDao->listAll();
     $veterinariaDao->close();
     return $result;
  }


}
//That`s all folks!