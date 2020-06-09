<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Vaya! ¡Al fin harás algo mejor que una calculadora!  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Mascota.php');
require_once realpath('../dao/interfaz/IMascotaDao.php');
require_once realpath('../dto/Especie.php');
require_once realpath('../dto/Historialmascota.php');
require_once realpath('../dto/Fundacion.php');
require_once realpath('../dto/Veterinaria.php');

class MascotaFacade {

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
   * Crea un objeto Mascota a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idMascota
   * @param especie_idEspecie
   * @param historialMascota_idHistorialMascota
   * @param nombreMascota
   * @param edadMascota
   * @param sexoMascota
   * @param disponibilidadMascota
   * @param esterilizado
   * @param fundacion_idFundacion
   * @param fechaIngreso
   * @param fechaSalida
   * @param fotoMascota
   * @param mascota_creacion
   * @param apadrinamiento
   * @param veterinaria_idVeterinaria
   */
  public static function insert( $idMascota,  $especie_idEspecie,  $historialMascota_idHistorialMascota,  $nombreMascota,  $edadMascota,  $sexoMascota,  $disponibilidadMascota,  $esterilizado,  $fundacion_idFundacion,  $fechaIngreso,  $fechaSalida,  $fotoMascota,  $mascota_creacion,  $apadrinamiento,  $veterinaria_idVeterinaria){
      $mascota = new Mascota();
      $mascota->setIdMascota($idMascota); 
      $mascota->setEspecie_idEspecie($especie_idEspecie); 
      $mascota->setHistorialMascota_idHistorialMascota($historialMascota_idHistorialMascota); 
      $mascota->setNombreMascota($nombreMascota); 
      $mascota->setEdadMascota($edadMascota); 
      $mascota->setSexoMascota($sexoMascota); 
      $mascota->setDisponibilidadMascota($disponibilidadMascota); 
      $mascota->setEsterilizado($esterilizado); 
      $mascota->setFundacion_idFundacion($fundacion_idFundacion); 
      $mascota->setFechaIngreso($fechaIngreso); 
      $mascota->setFechaSalida($fechaSalida); 
      $mascota->setFotoMascota($fotoMascota); 
      $mascota->setMascota_creacion($mascota_creacion); 
      $mascota->setApadrinamiento($apadrinamiento); 
      $mascota->setVeterinaria_idVeterinaria($veterinaria_idVeterinaria); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $mascotaDao =$FactoryDao->getmascotaDao(self::getDataBaseDefault());
     $rtn = $mascotaDao->insert($mascota);
     $mascotaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Mascota de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idMascota
   * @return El objeto en base de datos o Null
   */
  public static function select($idMascota){
      $mascota = new Mascota();
      $mascota->setIdMascota($idMascota); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $mascotaDao =$FactoryDao->getmascotaDao(self::getDataBaseDefault());
     $result = $mascotaDao->select($mascota);
     $mascotaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Mascota  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idMascota
   * @param especie_idEspecie
   * @param historialMascota_idHistorialMascota
   * @param nombreMascota
   * @param edadMascota
   * @param sexoMascota
   * @param disponibilidadMascota
   * @param esterilizado
   * @param fundacion_idFundacion
   * @param fechaIngreso
   * @param fechaSalida
   * @param fotoMascota
   * @param mascota_creacion
   * @param apadrinamiento
   * @param veterinaria_idVeterinaria
   */
  public static function update($idMascota, $especie_idEspecie, $historialMascota_idHistorialMascota, $nombreMascota, $edadMascota, $sexoMascota, $disponibilidadMascota, $esterilizado, $fundacion_idFundacion, $fechaIngreso, $fechaSalida, $fotoMascota, $mascota_creacion, $apadrinamiento, $veterinaria_idVeterinaria){
      $mascota = self::select($idMascota);
      $mascota->setEspecie_idEspecie($especie_idEspecie); 
      $mascota->setHistorialMascota_idHistorialMascota($historialMascota_idHistorialMascota); 
      $mascota->setNombreMascota($nombreMascota); 
      $mascota->setEdadMascota($edadMascota); 
      $mascota->setSexoMascota($sexoMascota); 
      $mascota->setDisponibilidadMascota($disponibilidadMascota); 
      $mascota->setEsterilizado($esterilizado); 
      $mascota->setFundacion_idFundacion($fundacion_idFundacion); 
      $mascota->setFechaIngreso($fechaIngreso); 
      $mascota->setFechaSalida($fechaSalida); 
      $mascota->setFotoMascota($fotoMascota); 
      $mascota->setMascota_creacion($mascota_creacion); 
      $mascota->setApadrinamiento($apadrinamiento); 
      $mascota->setVeterinaria_idVeterinaria($veterinaria_idVeterinaria); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $mascotaDao =$FactoryDao->getmascotaDao(self::getDataBaseDefault());
     $mascotaDao->update($mascota);
     $mascotaDao->close();
  }

  /**
   * Elimina un objeto Mascota de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idMascota
   */
  public static function delete($idMascota){
      $mascota = new Mascota();
      $mascota->setIdMascota($idMascota); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $mascotaDao =$FactoryDao->getmascotaDao(self::getDataBaseDefault());
     $mascotaDao->delete($mascota);
     $mascotaDao->close();
  }

  /**
   * Lista todos los objetos Mascota de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Mascota en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $mascotaDao =$FactoryDao->getmascotaDao(self::getDataBaseDefault());
     $result = $mascotaDao->listAll();
     $mascotaDao->close();
     return $result;
  }


}
//That`s all folks!