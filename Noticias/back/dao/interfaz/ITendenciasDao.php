<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    -¡UNO! -¡¡ +4 !!  \\


interface ITendenciasDao {

    /**
     * Guarda un objeto Tendencias en la base de datos.
     * @param tendencias objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tendencias);
    /**
     * Modifica un objeto Tendencias en la base de datos.
     * @param tendencias objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tendencias);
    /**
     * Elimina un objeto Tendencias en la base de datos.
     * @param tendencias objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tendencias);
    /**
     * Busca un objeto Tendencias en la base de datos.
     * @param tendencias objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tendencias);
    /**
     * Lista todos los objetos Tendencias en la base de datos.
     * @return Array<Tendencias> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!