<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Hecho en sólo 6 días  \\

include_once realpath('../dao/entities/ArchivosDao.php');
include_once realpath('../dao/entities/TendenciasDao.php');
include_once realpath('../dao/entities/Tendencias_has_usuariosDao.php');
include_once realpath('../dao/entities/UsuariosDao.php');


interface IFactoryDao {
	
     /**
     * Devuelve una instancia de ArchivosDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ArchivosDao
     */
     public function getArchivosDao($dbName);
     /**
     * Devuelve una instancia de TendenciasDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TendenciasDao
     */
     public function getTendenciasDao($dbName);
     /**
     * Devuelve una instancia de Tendencias_has_usuariosDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Tendencias_has_usuariosDao
     */
     public function getTendencias_has_usuariosDao($dbName);
     /**
     * Devuelve una instancia de UsuariosDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de UsuariosDao
     */
     public function getUsuariosDao($dbName);

}
//That`s all folks!