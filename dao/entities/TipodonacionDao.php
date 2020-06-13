<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Mátalos a todos, y que dios elija  \\

include_once realpath('../dao/interfaz/ITipodonacionDao.php');
include_once realpath('../dto/Tipodonacion.php');

class TipodonacionDao implements ITipodonacionDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Tipodonacion en la base de datos.
     * @param tipodonacion objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tipodonacion){
      $idTipoDonacion=$tipodonacion->getIdTipoDonacion();
$tipoDonacion=$tipodonacion->getTipoDonacion();
$descripcion=$tipodonacion->getDescripcion();

      try {
          $sql= "INSERT INTO `tipodonacion`( `idTipoDonacion`, `TipoDonacion`, `Descripcion`)"
          ."VALUES ('$idTipoDonacion','$tipoDonacion','$descripcion')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tipodonacion en la base de datos.
     * @param tipodonacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tipodonacion){
      $idTipoDonacion=$tipodonacion->getIdTipoDonacion();

      try {
          $sql= "SELECT `idTipoDonacion`, `TipoDonacion`, `Descripcion`"
          ."FROM `tipodonacion`"
          ."WHERE `idTipoDonacion`='$idTipoDonacion'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $tipodonacion->setIdTipoDonacion($data[$i]['idTipoDonacion']);
          $tipodonacion->setTipoDonacion($data[$i]['TipoDonacion']);
          $tipodonacion->setDescripcion($data[$i]['Descripcion']);

          }
      return $tipodonacion;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Tipodonacion en la base de datos.
     * @param tipodonacion objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tipodonacion){
      $idTipoDonacion=$tipodonacion->getIdTipoDonacion();
$tipoDonacion=$tipodonacion->getTipoDonacion();
$descripcion=$tipodonacion->getDescripcion();

      try {
          $sql= "UPDATE `tipodonacion` SET`idTipoDonacion`='$idTipoDonacion' ,`TipoDonacion`='$tipoDonacion' ,`Descripcion`='$descripcion' WHERE `idTipoDonacion`='$idTipoDonacion' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Tipodonacion en la base de datos.
     * @param tipodonacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tipodonacion){
      $idTipoDonacion=$tipodonacion->getIdTipoDonacion();

      try {
          $sql ="DELETE FROM `tipodonacion` WHERE `idTipoDonacion`='$idTipoDonacion'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tipodonacion en la base de datos.
     * @return ArrayList<Tipodonacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idTipoDonacion`, `TipoDonacion`, `Descripcion`"
          ."FROM `tipodonacion`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $tipodonacion= new Tipodonacion();
          $tipodonacion->setIdTipoDonacion($data[$i]['idTipoDonacion']);
          $tipodonacion->setTipoDonacion($data[$i]['TipoDonacion']);
          $tipodonacion->setDescripcion($data[$i]['Descripcion']);

          array_push($lista,$tipodonacion);
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