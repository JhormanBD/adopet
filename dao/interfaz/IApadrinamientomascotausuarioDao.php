<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Caminante no hay camino, se hace camino al andar  \\


interface IApadrinamientomascotausuarioDao {

    /**
     * Guarda un objeto Apadrinamientomascotausuario en la base de datos.
     * @param apadrinamientomascotausuario objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($apadrinamientomascotausuario);
    /**
     * Modifica un objeto Apadrinamientomascotausuario en la base de datos.
     * @param apadrinamientomascotausuario objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($apadrinamientomascotausuario);
    /**
     * Elimina un objeto Apadrinamientomascotausuario en la base de datos.
     * @param apadrinamientomascotausuario objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($apadrinamientomascotausuario);
    /**
     * Busca un objeto Apadrinamientomascotausuario en la base de datos.
     * @param apadrinamientomascotausuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($apadrinamientomascotausuario);
    /**
     * Lista todos los objetos Apadrinamientomascotausuario en la base de datos.
     * @return Array<Apadrinamientomascotausuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Apadrinamientomascotausuario en la base de datos que coincidan con la llave primaria.
     * @param apadrinamientomascotausuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Apadrinamientomascotausuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByMascota_idMascota($apadrinamientomascotausuario);
    /**
     * Lista todos los objetos Apadrinamientomascotausuario en la base de datos que coincidan con la llave primaria.
     * @param apadrinamientomascotausuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Apadrinamientomascotausuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByUsuario_idUsuario($apadrinamientomascotausuario);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!