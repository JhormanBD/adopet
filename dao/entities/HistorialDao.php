<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Don´t call me gringo you f%&ing beanner  \\

include_once realpath('../dao/interfaz/IHistorialDao.php');
include_once realpath('../dto/Historial.php');

class HistorialDao implements IHistorialDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Historial en la base de datos.
     * @param historial objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($historial){
      $idHistorial=$historial->getIdHistorial();
$fechaHistorial=$historial->getFechaHistorial();
$descripcion=$historial->getDescripcion();

      try {
          $sql= "INSERT INTO `historial`( `idHistorial`, `fechaHistorial`, `Descripcion`)"
          ."VALUES ('$idHistorial','$fechaHistorial','$descripcion')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Historial en la base de datos.
     * @param historial objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($historial){
      $idHistorial=$historial->getIdHistorial();

      try {
          $sql= "SELECT `idHistorial`, `fechaHistorial`, `Descripcion`"
          ."FROM `historial`"
          ."WHERE `idHistorial`='$idHistorial'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $historial->setIdHistorial($data[$i]['idHistorial']);
          $historial->setFechaHistorial($data[$i]['fechaHistorial']);
          $historial->setDescripcion($data[$i]['Descripcion']);

          }
      return $historial;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Historial en la base de datos.
     * @param historial objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($historial){
      $idHistorial=$historial->getIdHistorial();
$fechaHistorial=$historial->getFechaHistorial();
$descripcion=$historial->getDescripcion();

      try {
          $sql= "UPDATE `historial` SET`idHistorial`='$idHistorial' ,`fechaHistorial`='$fechaHistorial' ,`Descripcion`='$descripcion' WHERE `idHistorial`='$idHistorial' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Historial en la base de datos.
     * @param historial objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($historial){
      $idHistorial=$historial->getIdHistorial();

      try {
          $sql ="DELETE FROM `historial` WHERE `idHistorial`='$idHistorial'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Historial en la base de datos.
     * @return ArrayList<Historial> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idHistorial`, `fechaHistorial`, `Descripcion`"
          ."FROM `historial`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $historial= new Historial();
          $historial->setIdHistorial($data[$i]['idHistorial']);
          $historial->setFechaHistorial($data[$i]['fechaHistorial']);
          $historial->setDescripcion($data[$i]['Descripcion']);

          array_push($lista,$historial);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That`s all folks!