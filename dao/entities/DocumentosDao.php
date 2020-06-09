<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Era más fácil crear un framework que aprender a usar uno existente  \\

include_once realpath('../dao/interfaz/IDocumentosDao.php');
include_once realpath('../dto/Documentos.php');
include_once realpath('../dto/Usuario.php');

class DocumentosDao implements IDocumentosDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Documentos en la base de datos.
     * @param documentos objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($documentos){
      $idDocumentos=$documentos->getIdDocumentos();
$nombreDocumento=$documentos->getNombreDocumento();
$documentosRuta=$documentos->getDocumentosRuta();
$usuario_idUsuario=$documentos->getUsuario_idUsuario()->getIdUsuario();

      try {
          $sql= "INSERT INTO `documentos`( `idDocumentos`, `NombreDocumento`, `DocumentosRuta`, `Usuario_idUsuario`)"
          ."VALUES ('$idDocumentos','$nombreDocumento','$documentosRuta','$usuario_idUsuario')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Documentos en la base de datos.
     * @param documentos objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($documentos){
      $idDocumentos=$documentos->getIdDocumentos();

      try {
          $sql= "SELECT `idDocumentos`, `NombreDocumento`, `DocumentosRuta`, `Usuario_idUsuario`"
          ."FROM `documentos`"
          ."WHERE `idDocumentos`='$idDocumentos'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $documentos->setIdDocumentos($data[$i]['idDocumentos']);
          $documentos->setNombreDocumento($data[$i]['NombreDocumento']);
          $documentos->setDocumentosRuta($data[$i]['DocumentosRuta']);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $documentos->setUsuario_idUsuario($usuario);

          }
      return $documentos;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Documentos en la base de datos.
     * @param documentos objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($documentos){
      $idDocumentos=$documentos->getIdDocumentos();
$nombreDocumento=$documentos->getNombreDocumento();
$documentosRuta=$documentos->getDocumentosRuta();
$usuario_idUsuario=$documentos->getUsuario_idUsuario()->getIdUsuario();

      try {
          $sql= "UPDATE `documentos` SET`idDocumentos`='$idDocumentos' ,`NombreDocumento`='$nombreDocumento' ,`DocumentosRuta`='$documentosRuta' ,`Usuario_idUsuario`='$usuario_idUsuario' WHERE `idDocumentos`='$idDocumentos' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Documentos en la base de datos.
     * @param documentos objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($documentos){
      $idDocumentos=$documentos->getIdDocumentos();

      try {
          $sql ="DELETE FROM `documentos` WHERE `idDocumentos`='$idDocumentos'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Documentos en la base de datos.
     * @return ArrayList<Documentos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idDocumentos`, `NombreDocumento`, `DocumentosRuta`, `Usuario_idUsuario`"
          ."FROM `documentos`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $documentos= new Documentos();
          $documentos->setIdDocumentos($data[$i]['idDocumentos']);
          $documentos->setNombreDocumento($data[$i]['NombreDocumento']);
          $documentos->setDocumentosRuta($data[$i]['DocumentosRuta']);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $documentos->setUsuario_idUsuario($usuario);

          array_push($lista,$documentos);
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