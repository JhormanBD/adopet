<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Lolita, luz de mi vida, fuego de mis entrañas. Pecado mío, alma mía.  \\


interface IVeterinariaDao {

    /**
     * Guarda un objeto Veterinaria en la base de datos.
     * @param veterinaria objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($veterinaria);
    /**
     * Modifica un objeto Veterinaria en la base de datos.
     * @param veterinaria objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($veterinaria);
    /**
     * Elimina un objeto Veterinaria en la base de datos.
     * @param veterinaria objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($veterinaria);
    /**
     * Busca un objeto Veterinaria en la base de datos.
     * @param veterinaria objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($veterinaria);
    /**
     * Lista todos los objetos Veterinaria en la base de datos.
     * @return Array<Veterinaria> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!