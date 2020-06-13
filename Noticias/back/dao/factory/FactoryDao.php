<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Don´t call me gringo you f%&ing beanner  \\

include_once realpath('../dao/conexion/Conexion.php');
include_once realpath('../dao/interfaz/IFactoryDao.php');

class FactoryDao implements IFactoryDao{
	
     private $conn;
     public static $NULL_GESTOR = -1;
    public static $MYSQL_FACTORY = 0;
    public static $POSTGRESQL_FACTORY = 1;
    public static $ORACLE_FACTORY = 2;
    public static $DERBY_FACTORY = 3;

     public function __construct($gestor){
        $this->conn=new Conexion($gestor);
     }
     /**
     * Devuelve una instancia de ArchivosDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ArchivosDao
     */
     public function getArchivosDao($dbName){
        return new ArchivosDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de TendenciasDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TendenciasDao
     */
     public function getTendenciasDao($dbName){
        return new TendenciasDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Tendencias_has_usuariosDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Tendencias_has_usuariosDao
     */
     public function getTendencias_has_usuariosDao($dbName){
        return new Tendencias_has_usuariosDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de UsuariosDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de UsuariosDao
     */
     public function getUsuariosDao($dbName){
        return new UsuariosDao($this->conn->obtener($dbName));
    }

}
//That`s all folks!