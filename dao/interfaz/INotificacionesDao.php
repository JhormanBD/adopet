<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La segunda regla de Anarchy es no hablar de Anarchy  \\


interface INotificacionesDao {

    /**
     * Guarda un objeto Notificaciones en la base de datos.
     * @param notificaciones objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($notificaciones);
    /**
     * Modifica un objeto Notificaciones en la base de datos.
     * @param notificaciones objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($notificaciones);
    /**
     * Elimina un objeto Notificaciones en la base de datos.
     * @param notificaciones objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($notificaciones);
    /**
     * Busca un objeto Notificaciones en la base de datos.
     * @param notificaciones objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($notificaciones);
    /**
     * Lista todos los objetos Notificaciones en la base de datos.
     * @return Array<Notificaciones> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!