<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Soy la sonrisa burlona y vengativa de Jack  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Documentos.php');
require_once realpath('../dao/interfaz/IDocumentosDao.php');
require_once realpath('../dto/Usuario.php');

class DocumentosFacade {

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
   * Crea un objeto Documentos a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idDocumentos
   * @param nombreDocumento
   * @param documentosRuta
   * @param usuario_idUsuario
   */
  public static function insert( $idDocumentos,  $nombreDocumento,  $documentosRuta,  $usuario_idUsuario){
      $documentos = new Documentos();
      $documentos->setIdDocumentos($idDocumentos); 
      $documentos->setNombreDocumento($nombreDocumento); 
      $documentos->setDocumentosRuta($documentosRuta); 
      $documentos->setUsuario_idUsuario($usuario_idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $documentosDao =$FactoryDao->getdocumentosDao(self::getDataBaseDefault());
     $rtn = $documentosDao->insert($documentos);
     $documentosDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Documentos de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idDocumentos
   * @return El objeto en base de datos o Null
   */
  public static function select($idDocumentos){
      $documentos = new Documentos();
      $documentos->setIdDocumentos($idDocumentos); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $documentosDao =$FactoryDao->getdocumentosDao(self::getDataBaseDefault());
     $result = $documentosDao->select($documentos);
     $documentosDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Documentos  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idDocumentos
   * @param nombreDocumento
   * @param documentosRuta
   * @param usuario_idUsuario
   */
  public static function update($idDocumentos, $nombreDocumento, $documentosRuta, $usuario_idUsuario){
      $documentos = self::select($idDocumentos);
      $documentos->setNombreDocumento($nombreDocumento); 
      $documentos->setDocumentosRuta($documentosRuta); 
      $documentos->setUsuario_idUsuario($usuario_idUsuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $documentosDao =$FactoryDao->getdocumentosDao(self::getDataBaseDefault());
     $documentosDao->update($documentos);
     $documentosDao->close();
  }

  /**
   * Elimina un objeto Documentos de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idDocumentos
   */
  public static function delete($idDocumentos){
      $documentos = new Documentos();
      $documentos->setIdDocumentos($idDocumentos); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $documentosDao =$FactoryDao->getdocumentosDao(self::getDataBaseDefault());
     $documentosDao->delete($documentos);
     $documentosDao->close();
  }

  /**
   * Lista todos los objetos Documentos de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Documentos en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $documentosDao =$FactoryDao->getdocumentosDao(self::getDataBaseDefault());
     $result = $documentosDao->listAll();
     $documentosDao->close();
     return $result;
  }


}
//That`s all folks!