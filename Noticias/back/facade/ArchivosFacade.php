<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ojitos de luz de luna  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Archivos.php');
require_once realpath('../dao/interfaz/IArchivosDao.php');
require_once realpath('../dto/Tendencias.php');

class ArchivosFacade {

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
   * Crea un objeto Archivos a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id_arch
   * @param tipo_arch
   * @param file_arch
   * @param id_tendencia
   */
  public static function insert( $id_arch,  $tipo_arch,  $file_arch,  $id_tendencia){
      $archivos = new Archivos();
      $archivos->setId_arch($id_arch); 
      $archivos->setTipo_arch($tipo_arch); 
      $archivos->setFile_arch($file_arch); 
      $archivos->setId_tendencia($id_tendencia); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $archivosDao =$FactoryDao->getarchivosDao(self::getDataBaseDefault());
     $rtn = $archivosDao->insert($archivos);
     $archivosDao->close();
     return $rtn;
  }

    public static function insert2( $tipo_arch,  $file_arch,  $id_tendencia){
//      $archivos = new Archivos();
////      $archivos->setId_arch($id_arch); 
//      $archivos->setTipo_arch($tipo_arch); 
//      $archivos->setFile_arch($file_arch); 
//      $archivos->setId_tendencia($id_tendencia); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $archivosDao =$FactoryDao->getarchivosDao(self::getDataBaseDefault());
     $rtn = $archivosDao->insert2($tipo_arch, $file_arch,$id_tendencia); 
     $archivosDao->close();
     return $rtn;
  }
  /**
   * Selecciona un objeto Archivos de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id_arch
   * @return El objeto en base de datos o Null
   */
  public static function select($id_arch){
      $archivos = new Archivos();
      $archivos->setId_arch($id_arch); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $archivosDao =$FactoryDao->getarchivosDao(self::getDataBaseDefault());
     $result = $archivosDao->select($archivos);
     $archivosDao->close();
     return $result;
  }
  
  public static function select_id($id_tendencia){


     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $archivosDao =$FactoryDao->getarchivosDao(self::getDataBaseDefault());
     $result = $archivosDao->select_id($id_tendencia);
     $archivosDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Archivos  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id_arch
   * @param tipo_arch
   * @param file_arch
   * @param id_tendencia
   */
  public static function update($id_arch, $tipo_arch, $file_arch, $id_tendencia){
      $archivos = self::select($id_arch);
      $archivos->setTipo_arch($tipo_arch); 
      $archivos->setFile_arch($file_arch); 
      $archivos->setId_tendencia($id_tendencia); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $archivosDao =$FactoryDao->getarchivosDao(self::getDataBaseDefault());
     $archivosDao->update($archivos);
     $archivosDao->close();
  }
  public static function update2( $tipo_arch, $file_arch, $id_tendencia){
//      $archivos = self::select($id_arch);
//      $archivos->setTipo_arch($tipo_arch); 
////      $archivos->setTipo_arch($tipo_arch); 
//      $archivos->setFile_arch($file_arch); 
//      $archivos->setId_tendencia($id_tendencia); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $archivosDao =$FactoryDao->getarchivosDao(self::getDataBaseDefault());
     $archivosDao->update2($tipo_arch, $file_arch, $id_tendencia);
     $archivosDao->close();
  }
  public static function update_foto(  $file_arch, $id_tendencia){
//      $archivos = self::select($id_arch);
//      $archivos->setTipo_arch($tipo_arch); 
////      $archivos->setTipo_arch($tipo_arch); 
//      $archivos->setFile_arch($file_arch); 
//      $archivos->setId_tendencia($id_tendencia); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $archivosDao =$FactoryDao->getarchivosDao(self::getDataBaseDefault());
     $archivosDao->update_foto( $file_arch, $id_tendencia);
     $archivosDao->close();
  }

  /**
   * Elimina un objeto Archivos de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id_arch
   */
  public static function delete($id_arch){
      $archivos = new Archivos();
      $archivos->setId_arch($id_arch); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $archivosDao =$FactoryDao->getarchivosDao(self::getDataBaseDefault());
     $archivosDao->delete($archivos);
     $archivosDao->close();
  }

  /**
   * Lista todos los objetos Archivos de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Archivos en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $archivosDao =$FactoryDao->getarchivosDao(self::getDataBaseDefault());
     $result = $archivosDao->listAll();
     $archivosDao->close();
     return $result;
  }


}
//That`s all folks!