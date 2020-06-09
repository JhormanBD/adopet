<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Anarchy! Apoyando la vagancia desde 2017  \\

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
     * Devuelve una instancia de AlbergueDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de AlbergueDao
     */
     public function getAlbergueDao($dbName){
        return new AlbergueDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de ApadrinamientomascotausuarioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ApadrinamientomascotausuarioDao
     */
     public function getApadrinamientomascotausuarioDao($dbName){
        return new ApadrinamientomascotausuarioDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de CalificacionDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CalificacionDao
     */
     public function getCalificacionDao($dbName){
        return new CalificacionDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de ConvenioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ConvenioDao
     */
     public function getConvenioDao($dbName){
        return new ConvenioDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de DocumentosDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de DocumentosDao
     */
     public function getDocumentosDao($dbName){
        return new DocumentosDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de DonacionDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de DonacionDao
     */
     public function getDonacionDao($dbName){
        return new DonacionDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de EspecieDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de EspecieDao
     */
     public function getEspecieDao($dbName){
        return new EspecieDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de FavoritomascotausuarioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de FavoritomascotausuarioDao
     */
     public function getFavoritomascotausuarioDao($dbName){
        return new FavoritomascotausuarioDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Foto_mascotaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Foto_mascotaDao
     */
     public function getFoto_mascotaDao($dbName){
        return new Foto_mascotaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de FundacionDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de FundacionDao
     */
     public function getFundacionDao($dbName){
        return new FundacionDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Fundacion_fotoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Fundacion_fotoDao
     */
     public function getFundacion_fotoDao($dbName){
        return new Fundacion_fotoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de HistorialDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de HistorialDao
     */
     public function getHistorialDao($dbName){
        return new HistorialDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de HistorialmascotaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de HistorialmascotaDao
     */
     public function getHistorialmascotaDao($dbName){
        return new HistorialmascotaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de MascotaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de MascotaDao
     */
     public function getMascotaDao($dbName){
        return new MascotaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de NotificacionesDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de NotificacionesDao
     */
     public function getNotificacionesDao($dbName){
        return new NotificacionesDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de SolicitudDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de SolicitudDao
     */
     public function getSolicitudDao($dbName){
        return new SolicitudDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de TipodonacionDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TipodonacionDao
     */
     public function getTipodonacionDao($dbName){
        return new TipodonacionDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de TipousuarioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TipousuarioDao
     */
     public function getTipousuarioDao($dbName){
        return new TipousuarioDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de UsuarioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de UsuarioDao
     */
     public function getUsuarioDao($dbName){
        return new UsuarioDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de VeterinariaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de VeterinariaDao
     */
     public function getVeterinariaDao($dbName){
        return new VeterinariaDao($this->conn->obtener($dbName));
    }

}
//That`s all folks!