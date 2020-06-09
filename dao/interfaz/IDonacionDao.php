<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿En serio? ¿Tantos buenos frameworks y estás usando Anarchy?  \\


interface IDonacionDao {

    /**
     * Guarda un objeto Donacion en la base de datos.
     * @param donacion objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($donacion);
    /**
     * Modifica un objeto Donacion en la base de datos.
     * @param donacion objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($donacion);
    /**
     * Elimina un objeto Donacion en la base de datos.
     * @param donacion objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($donacion);
    /**
     * Busca un objeto Donacion en la base de datos.
     * @param donacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($donacion);
    /**
     * Lista todos los objetos Donacion en la base de datos.
     * @return Array<Donacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!