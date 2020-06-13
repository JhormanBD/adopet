<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Tienes que considerar la posibilidad de que a Dios no le caes bien.  \\

include_once realpath('../dao/interfaz/ITendenciasDao.php');
include_once realpath('../dto/Tendencias.php');

class TendenciasDao implements ITendenciasDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Tendencias en la base de datos.
     * @param tendencias objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tendencias){
//      $id_ten=$tendencias->getId_ten();
$titulo_ten=$tendencias->getTitulo_ten();
$tipo_ten=$tendencias->getTipo_ten();
$publicado_ten=$tendencias->getPublicado_ten();
$prioridad_ten=$tendencias->getPrioridad_ten();
$descrip_ten=$tendencias->getDescrip_ten();

      try {
          $sql= "INSERT INTO `tendencias`( `titulo_ten`, `tipo_ten`, `publicado_ten`, `prioridad_ten`, `descrip_ten`)"
          ."VALUES ('$titulo_ten','$tipo_ten','$publicado_ten','$prioridad_ten','$descrip_ten')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tendencias en la base de datos.
     * @param tendencias objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tendencias){
      $id_ten=$tendencias->getId_ten();

      try {
          $sql= "SELECT `id_ten`, `titulo_ten`, `tipo_ten`, `publicado_ten`, `prioridad_ten`, `descrip_ten`"
          ."FROM `tendencias`"
          ."WHERE `id_ten`='$id_ten'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $tendencias->setId_ten($data[$i]['id_ten']);
          $tendencias->setTitulo_ten($data[$i]['titulo_ten']);
          $tendencias->setTipo_ten($data[$i]['tipo_ten']);
          $tendencias->setPublicado_ten($data[$i]['publicado_ten']);
          $tendencias->setPrioridad_ten($data[$i]['prioridad_ten']);
          $tendencias->setDescrip_ten($data[$i]['descrip_ten']);

          }
      return $tendencias;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Tendencias en la base de datos.
     * @param tendencias objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tendencias){
      $id_ten=$tendencias->getId_ten();
$titulo_ten=$tendencias->getTitulo_ten();
$tipo_ten=$tendencias->getTipo_ten();
$publicado_ten=$tendencias->getPublicado_ten();
$prioridad_ten=$tendencias->getPrioridad_ten();
$descrip_ten=$tendencias->getDescrip_ten();

      try {
          $sql= "UPDATE `tendencias` SET`id_ten`='$id_ten' ,`titulo_ten`='$titulo_ten' ,`tipo_ten`='$tipo_ten' ,`publicado_ten`='$publicado_ten' ,`prioridad_ten`='$prioridad_ten' ,`descrip_ten`='$descrip_ten' WHERE `id_ten`='$id_ten' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }
  public function update2($tendencias){
      $id_ten=$tendencias->getId_ten();
$titulo_ten=$tendencias->getTitulo_ten();
//$tipo_ten=$tendencias->getTipo_ten();
$publicado_ten=$tendencias->getPublicado_ten();
//$prioridad_ten=$tendencias->getPrioridad_ten();
$descrip_ten=$tendencias->getDescrip_ten();

      try {
          $sql= "UPDATE `tendencias` SET `titulo_ten`='$titulo_ten'  ,`publicado_ten`='$publicado_ten' ,`descrip_ten`='$descrip_ten' WHERE `id_ten`='$id_ten' ";
//          var_dump($sql);
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Tendencias en la base de datos.
     * @param tendencias objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tendencias){
      $id_ten=$tendencias->getId_ten();

      try {
          $sql ="DELETE FROM `tendencias` WHERE `id_ten`='$id_ten'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tendencias en la base de datos.
     * @return ArrayList<Tendencias> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id_ten`, `titulo_ten`, `tipo_ten`, `publicado_ten`, `prioridad_ten`, LEFT(`descrip_ten` , 50) as descrip_ten FROM `tendencias` WHERE 1 ORDER BY id_ten DESC";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $tendencias= new Tendencias();
          $tendencias->setId_ten($data[$i]['id_ten']);
          $tendencias->setTitulo_ten($data[$i]['titulo_ten']);
          $tendencias->setTipo_ten($data[$i]['tipo_ten']);
          $tendencias->setPublicado_ten($data[$i]['publicado_ten']);
          $tendencias->setPrioridad_ten($data[$i]['prioridad_ten']);
          $tendencias->setDescrip_ten($data[$i]['descrip_ten']);

          array_push($lista,$tendencias);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }
  public function listAll_id($id_ten){
      $lista = array();
      try {
          $sql ="SELECT t.`id_ten`, t.`titulo_ten`, a.file_arch as tipo_ten, t.`publicado_ten`,  t.`descrip_ten` FROM `tendencias` t
INNER JOIN archivos a
ON a.id_tendencia=t.id_ten 
 WHERE `id_ten`='$id_ten'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $tendencias= new Tendencias();
          $tendencias->setId_ten($data[$i]['id_ten']);
          $tendencias->setTitulo_ten($data[$i]['titulo_ten']);
          $tendencias->setTipo_ten($data[$i]['tipo_ten']);
          $tendencias->setPublicado_ten($data[$i]['publicado_ten']);
//          $tendencias->setPrioridad_ten($data[$i]['prioridad_ten']);
          $tendencias->setDescrip_ten($data[$i]['descrip_ten']);

          array_push($lista,$tendencias);
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