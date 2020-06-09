<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Puedes sugerirnos frases nuevas, se nos están acabando ( u.u)  \\

include_once realpath('../dao/interfaz/IHistorialmascotaDao.php');
include_once realpath('../dto/Historialmascota.php');

class HistorialmascotaDao implements IHistorialmascotaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Historialmascota en la base de datos.
     * @param historialmascota objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($historialmascota){
      $idHistorialMascota=$historialmascota->getIdHistorialMascota();
$fechaVacunaHistorialMascota=$historialmascota->getFechaVacunaHistorialMascota();
$descripcion=$historialmascota->getDescripcion();
$observacion=$historialmascota->getObservacion();

      try {
          $sql= "INSERT INTO `historialmascota`( `idHistorialMascota`, `fechaVacunaHistorialMascota`, `descripcion`, `Observacion`)"
          ."VALUES ('$idHistorialMascota','$fechaVacunaHistorialMascota','$descripcion','$observacion')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Historialmascota en la base de datos.
     * @param historialmascota objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($historialmascota){
      $idHistorialMascota=$historialmascota->getIdHistorialMascota();

      try {
          $sql= "SELECT `idHistorialMascota`, `fechaVacunaHistorialMascota`, `descripcion`, `Observacion`"
          ."FROM `historialmascota`"
          ."WHERE `idHistorialMascota`='$idHistorialMascota'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $historialmascota->setIdHistorialMascota($data[$i]['idHistorialMascota']);
          $historialmascota->setFechaVacunaHistorialMascota($data[$i]['fechaVacunaHistorialMascota']);
          $historialmascota->setDescripcion($data[$i]['descripcion']);
          $historialmascota->setObservacion($data[$i]['Observacion']);

          }
      return $historialmascota;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Historialmascota en la base de datos.
     * @param historialmascota objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($historialmascota){
      $idHistorialMascota=$historialmascota->getIdHistorialMascota();
$fechaVacunaHistorialMascota=$historialmascota->getFechaVacunaHistorialMascota();
$descripcion=$historialmascota->getDescripcion();
$observacion=$historialmascota->getObservacion();

      try {
          $sql= "UPDATE `historialmascota` SET`idHistorialMascota`='$idHistorialMascota' ,`fechaVacunaHistorialMascota`='$fechaVacunaHistorialMascota' ,`descripcion`='$descripcion' ,`Observacion`='$observacion' WHERE `idHistorialMascota`='$idHistorialMascota' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Historialmascota en la base de datos.
     * @param historialmascota objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($historialmascota){
      $idHistorialMascota=$historialmascota->getIdHistorialMascota();

      try {
          $sql ="DELETE FROM `historialmascota` WHERE `idHistorialMascota`='$idHistorialMascota'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Historialmascota en la base de datos.
     * @return ArrayList<Historialmascota> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idHistorialMascota`, `fechaVacunaHistorialMascota`, `descripcion`, `Observacion`"
          ."FROM `historialmascota`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $historialmascota= new Historialmascota();
          $historialmascota->setIdHistorialMascota($data[$i]['idHistorialMascota']);
          $historialmascota->setFechaVacunaHistorialMascota($data[$i]['fechaVacunaHistorialMascota']);
          $historialmascota->setDescripcion($data[$i]['descripcion']);
          $historialmascota->setObservacion($data[$i]['Observacion']);

          array_push($lista,$historialmascota);
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