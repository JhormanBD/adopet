<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La primera regla de Anarchy es no hablar de Anarchy  \\

include_once realpath('../dao/interfaz/IVeterinariaDao.php');
include_once realpath('../dto/Veterinaria.php');

class VeterinariaDao implements IVeterinariaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Veterinaria en la base de datos.
     * @param veterinaria objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($veterinaria){
      $idVeterinaria=$veterinaria->getIdVeterinaria();
$nombreVeterinaria=$veterinaria->getNombreVeterinaria();
$direccion=$veterinaria->getDireccion();
$nit=$veterinaria->getNit();
$telefono=$veterinaria->getTelefono();

      try {
          $sql= "INSERT INTO `veterinaria`( `idVeterinaria`, `nombreVeterinaria`, `direccion`, `nit`, `telefono`)"
          ."VALUES ('$idVeterinaria','$nombreVeterinaria','$direccion','$nit','$telefono')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Veterinaria en la base de datos.
     * @param veterinaria objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($veterinaria){
      $idVeterinaria=$veterinaria->getIdVeterinaria();

      try {
          $sql= "SELECT `idVeterinaria`, `nombreVeterinaria`, `direccion`, `nit`, `telefono`"
          ."FROM `veterinaria`"
          ."WHERE `idVeterinaria`='$idVeterinaria'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $veterinaria->setIdVeterinaria($data[$i]['idVeterinaria']);
          $veterinaria->setNombreVeterinaria($data[$i]['nombreVeterinaria']);
          $veterinaria->setDireccion($data[$i]['direccion']);
          $veterinaria->setNit($data[$i]['nit']);
          $veterinaria->setTelefono($data[$i]['telefono']);

          }
      return $veterinaria;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Veterinaria en la base de datos.
     * @param veterinaria objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($veterinaria){
      $idVeterinaria=$veterinaria->getIdVeterinaria();
$nombreVeterinaria=$veterinaria->getNombreVeterinaria();
$direccion=$veterinaria->getDireccion();
$nit=$veterinaria->getNit();
$telefono=$veterinaria->getTelefono();

      try {
          $sql= "UPDATE `veterinaria` SET`idVeterinaria`='$idVeterinaria' ,`nombreVeterinaria`='$nombreVeterinaria' ,`direccion`='$direccion' ,`nit`='$nit' ,`telefono`='$telefono' WHERE `idVeterinaria`='$idVeterinaria' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Veterinaria en la base de datos.
     * @param veterinaria objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($veterinaria){
      $idVeterinaria=$veterinaria->getIdVeterinaria();

      try {
          $sql ="DELETE FROM `veterinaria` WHERE `idVeterinaria`='$idVeterinaria'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Veterinaria en la base de datos.
     * @return ArrayList<Veterinaria> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idVeterinaria`, `nombreVeterinaria`, `direccion`, `nit`, `telefono`"
          ."FROM `veterinaria`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $veterinaria= new Veterinaria();
          $veterinaria->setIdVeterinaria($data[$i]['idVeterinaria']);
          $veterinaria->setNombreVeterinaria($data[$i]['nombreVeterinaria']);
          $veterinaria->setDireccion($data[$i]['direccion']);
          $veterinaria->setNit($data[$i]['nit']);
          $veterinaria->setTelefono($data[$i]['telefono']);

          array_push($lista,$veterinaria);
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