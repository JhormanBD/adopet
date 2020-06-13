<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    gravitaban alrededor del astro de la noche, y por primera vez podía la vista penetrar todos sus misterios.  \\

include_once realpath('../dao/interfaz/IArchivosDao.php');
include_once realpath('../dto/Archivos.php');
include_once realpath('../dto/Tendencias.php');

class ArchivosDao implements IArchivosDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Archivos en la base de datos.
     * @param archivos objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($archivos){
//      $id_arch=$archivos->getId_arch();
$tipo_arch=$archivos->getTipo_arch();
$file_arch=$archivos->getFile_arch();
$id_tendencia=$archivos->getId_tendencia()->getId_ten();

      try {
          $sql= "INSERT INTO `archivos`( `id_arch`, `tipo_arch`, `file_arch`, `id_tendencia`)"
          ."VALUES ('$id_arch','$tipo_arch','$file_arch','$id_tendencia')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }
  
    public function insert2( $tipo_arch, $file_arch, $id_tendencia){
//      $id_arch=$archivos->getId_arch();
//$tipo_arch=$archivos->getTipo_arch();
//$file_arch=$archivos->getFile_arch();
//$id_tendencia=$archivos->getId_tendencia()->getId_ten();

      try {
          $sql= "INSERT INTO `archivos`(`tipo_arch`, `file_arch`, `id_tendencia`)"
          ."VALUES ('$tipo_arch','$file_arch','$id_tendencia')";
//  var_dump($sql);
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Archivos en la base de datos.
     * @param archivos objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($archivos){
      $id_arch=$archivos->getId_arch();

      try {
          $sql= "SELECT `id_arch`, `tipo_arch`, `file_arch`, `id_tendencia`"
          ."FROM `archivos`"
          ."WHERE `id_arch`='$id_arch'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $archivos->setId_arch($data[$i]['id_arch']);
          $archivos->setTipo_arch($data[$i]['tipo_arch']);
          $archivos->setFile_arch($data[$i]['file_arch']);
           $tendencias = new Tendencias();
           $tendencias->setId_ten($data[$i]['id_tendencia']);
           $archivos->setId_tendencia($tendencias);

          }
      return $archivos;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }
  
  public function select_id($id_tendencia){
     

      try {
          $sql= "SELECT `id_arch` FROM `archivos`"
          ."WHERE `id_tendencia`='$id_tendencia'";
          $data = $this->ejecutarConsulta($sql);
           for ($i=0; $i < count($data) ; $i++) {
              $archivos= new Archivos();
          $archivos=$data[$i]['id_arch'];
//          $archivos->setTipo_arch($data[$i]['tipo_arch']);
//          $archivos->setFile_arch($data[$i]['file_arch']);
//           $tendencias = new Tendencias();
//           $tendencias->setId_ten($data[$i]['id_tendencia']);
//           $archivos->setId_tendencia($tendencias);

//          array_push($lista,$archivos);
          }
      return $archivos;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Archivos en la base de datos.
     * @param archivos objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($archivos){
      $id_arch=$archivos->getId_arch();
$tipo_arch=$archivos->getTipo_arch();
$file_arch=$archivos->getFile_arch();
$id_tendencia=$archivos->getId_tendencia()->getId_ten();

      try {
          $sql= "UPDATE `archivos` SET`id_arch`='$id_arch' ,`tipo_arch`='$tipo_arch' ,`file_arch`='$file_arch' ,`id_tendencia`='$id_tendencia' WHERE `id_arch`='$id_arch' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }
  public function update2($tipo_arch, $file_arch, $id_tendencia){
//      $id_arch=$archivos->getId_arch();
//$tipo_arch=$archivos->getTipo_arch();
//$file_arch=$archivos->getFile_arch();
//$id_tendencia=$archivos->getId_tendencia()->getId_ten();

      try {
          $sql= "UPDATE `archivos` SET `tipo_arch`='$tipo_arch' ,`file_arch`='$file_arch'  WHERE `id_tendencia`='$id_tendencia' ";
//          var_dump($sql);
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }
  public function update_foto( $file_arch, $id_tendencia){
//      $id_arch=$archivos->getId_arch();
//$tipo_arch=$archivos->getTipo_arch();
//$file_arch=$archivos->getFile_arch();
//$id_tendencia=$archivos->getId_tendencia()->getId_ten();

      try {
          $sql= "UPDATE `archivos` SET `file_arch`='$file_arch'  WHERE `id_tendencia`='$id_tendencia' ";
//          var_dump($sql);
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Archivos en la base de datos.
     * @param archivos objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($archivos){
      $id_arch=$archivos->getId_arch();

      try {
          $sql ="DELETE FROM `archivos` WHERE `id_arch`='$id_arch'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Archivos en la base de datos.
     * @return ArrayList<Archivos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id_arch`, `tipo_arch`, `file_arch`, `id_tendencia`"
          ."FROM `archivos`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $archivos= new Archivos();
          $archivos->setId_arch($data[$i]['id_arch']);
          $archivos->setTipo_arch($data[$i]['tipo_arch']);
          $archivos->setFile_arch($data[$i]['file_arch']);
           $tendencias = new Tendencias();
           $tendencias->setId_ten($data[$i]['id_tendencia']);
           $archivos->setId_tendencia($tendencias);

          array_push($lista,$archivos);
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