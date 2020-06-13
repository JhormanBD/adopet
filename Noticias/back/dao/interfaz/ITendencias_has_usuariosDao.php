<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Alguna vez Anarchy se llamó Molotov ( u.u) *Nostalgia  \\


interface ITendencias_has_usuariosDao {

    /**
     * Guarda un objeto Tendencias_has_usuarios en la base de datos.
     * @param tendencias_has_usuarios objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tendencias_has_usuarios);
    /**
     * Modifica un objeto Tendencias_has_usuarios en la base de datos.
     * @param tendencias_has_usuarios objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tendencias_has_usuarios);
    /**
     * Elimina un objeto Tendencias_has_usuarios en la base de datos.
     * @param tendencias_has_usuarios objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tendencias_has_usuarios);
    /**
     * Busca un objeto Tendencias_has_usuarios en la base de datos.
     * @param tendencias_has_usuarios objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tendencias_has_usuarios);
    /**
     * Lista todos los objetos Tendencias_has_usuarios en la base de datos.
     * @return Array<Tendencias_has_usuarios> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Tendencias_has_usuarios en la base de datos que coincidan con la llave primaria.
     * @param tendencias_has_usuarios objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Tendencias_has_usuarios> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByTendencias_id_ten($tendencias_has_usuarios);
    /**
     * Lista todos los objetos Tendencias_has_usuarios en la base de datos que coincidan con la llave primaria.
     * @param tendencias_has_usuarios objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Tendencias_has_usuarios> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByUsuarios_idusuarios($tendencias_has_usuarios);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!