<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando la gente cree que está muriendo, te escucha en lugar de esperar su turno para hablar.  \\


interface IDocumentosDao {

    /**
     * Guarda un objeto Documentos en la base de datos.
     * @param documentos objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($documentos);
    /**
     * Modifica un objeto Documentos en la base de datos.
     * @param documentos objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($documentos);
    /**
     * Elimina un objeto Documentos en la base de datos.
     * @param documentos objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($documentos);
    /**
     * Busca un objeto Documentos en la base de datos.
     * @param documentos objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($documentos);
    /**
     * Lista todos los objetos Documentos en la base de datos.
     * @return Array<Documentos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!