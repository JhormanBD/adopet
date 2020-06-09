<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Si mi madre entendiera mi código, estaría orgullosa  \\

include_once realpath('../dao/interfaz/IApadrinamientomascotausuarioDao.php');
include_once realpath('../dto/Apadrinamientomascotausuario.php');
include_once realpath('../dto/Mascota.php');
include_once realpath('../dto/Usuario.php');

class ApadrinamientomascotausuarioDao implements IApadrinamientomascotausuarioDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Apadrinamientomascotausuario en la base de datos.
     * @param apadrinamientomascotausuario objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($apadrinamientomascotausuario){
      $mascota_idMascota=$apadrinamientomascotausuario->getMascota_idMascota()->getIdMascota();
$usuario_idUsuario=$apadrinamientomascotausuario->getUsuario_idUsuario()->getIdUsuario();
$fechaApadrinamientoMascotaUsuariocol=$apadrinamientomascotausuario->getFechaApadrinamientoMascotaUsuariocol();
$estadoApadrinamiento=$apadrinamientomascotausuario->getEstadoApadrinamiento();

      try {
          $sql= "INSERT INTO `apadrinamientomascotausuario`( `Mascota_idMascota`, `Usuario_idUsuario`, `fechaApadrinamientoMascotaUsuariocol`, `estadoApadrinamiento`)"
          ."VALUES ('$mascota_idMascota','$usuario_idUsuario','$fechaApadrinamientoMascotaUsuariocol','$estadoApadrinamiento')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Apadrinamientomascotausuario en la base de datos.
     * @param apadrinamientomascotausuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($apadrinamientomascotausuario){
      $mascota_idMascota=$apadrinamientomascotausuario->getMascota_idMascota()->getIdMascota();
$usuario_idUsuario=$apadrinamientomascotausuario->getUsuario_idUsuario()->getIdUsuario();

      try {
          $sql= "SELECT `Mascota_idMascota`, `Usuario_idUsuario`, `fechaApadrinamientoMascotaUsuariocol`, `estadoApadrinamiento`"
          ."FROM `apadrinamientomascotausuario`"
          ."WHERE `Mascota_idMascota`='$mascota_idMascota' AND`Usuario_idUsuario`='$usuario_idUsuario'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $mascota = new Mascota();
           $mascota->setIdMascota($data[$i]['Mascota_idMascota']);
           $apadrinamientomascotausuario->setMascota_idMascota($mascota);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $apadrinamientomascotausuario->setUsuario_idUsuario($usuario);
          $apadrinamientomascotausuario->setFechaApadrinamientoMascotaUsuariocol($data[$i]['fechaApadrinamientoMascotaUsuariocol']);
          $apadrinamientomascotausuario->setEstadoApadrinamiento($data[$i]['estadoApadrinamiento']);

          }
      return $apadrinamientomascotausuario;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Apadrinamientomascotausuario en la base de datos.
     * @param apadrinamientomascotausuario objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($apadrinamientomascotausuario){
      $mascota_idMascota=$apadrinamientomascotausuario->getMascota_idMascota()->getIdMascota();
$usuario_idUsuario=$apadrinamientomascotausuario->getUsuario_idUsuario()->getIdUsuario();
$fechaApadrinamientoMascotaUsuariocol=$apadrinamientomascotausuario->getFechaApadrinamientoMascotaUsuariocol();
$estadoApadrinamiento=$apadrinamientomascotausuario->getEstadoApadrinamiento();

      try {
          $sql= "UPDATE `apadrinamientomascotausuario` SET`Mascota_idMascota`='$mascota_idMascota' ,`Usuario_idUsuario`='$usuario_idUsuario' ,`fechaApadrinamientoMascotaUsuariocol`='$fechaApadrinamientoMascotaUsuariocol' ,`estadoApadrinamiento`='$estadoApadrinamiento' WHERE `Mascota_idMascota`='$mascota_idMascota' AND `Usuario_idUsuario`='$usuario_idUsuario' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Apadrinamientomascotausuario en la base de datos.
     * @param apadrinamientomascotausuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($apadrinamientomascotausuario){
      $mascota_idMascota=$apadrinamientomascotausuario->getMascota_idMascota()->getIdMascota();
$usuario_idUsuario=$apadrinamientomascotausuario->getUsuario_idUsuario()->getIdUsuario();

      try {
          $sql ="DELETE FROM `apadrinamientomascotausuario` WHERE `Mascota_idMascota`='$mascota_idMascota' AND`Usuario_idUsuario`='$usuario_idUsuario'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Apadrinamientomascotausuario en la base de datos.
     * @return ArrayList<Apadrinamientomascotausuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `Mascota_idMascota`, `Usuario_idUsuario`, `fechaApadrinamientoMascotaUsuariocol`, `estadoApadrinamiento`"
          ."FROM `apadrinamientomascotausuario`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $apadrinamientomascotausuario= new Apadrinamientomascotausuario();
           $mascota = new Mascota();
           $mascota->setIdMascota($data[$i]['Mascota_idMascota']);
           $apadrinamientomascotausuario->setMascota_idMascota($mascota);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $apadrinamientomascotausuario->setUsuario_idUsuario($usuario);
          $apadrinamientomascotausuario->setFechaApadrinamientoMascotaUsuariocol($data[$i]['fechaApadrinamientoMascotaUsuariocol']);
          $apadrinamientomascotausuario->setEstadoApadrinamiento($data[$i]['estadoApadrinamiento']);

          array_push($lista,$apadrinamientomascotausuario);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Apadrinamientomascotausuario en la base de datos.
     * @param apadrinamientomascotausuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Apadrinamientomascotausuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByMascota_idMascota($apadrinamientomascotausuario){
      $lista = array();
      $mascota_idMascota=$apadrinamientomascotausuario->getMascota_idMascota()->getIdMascota();

      try {
          $sql ="SELECT `Mascota_idMascota`, `Usuario_idUsuario`, `fechaApadrinamientoMascotaUsuariocol`, `estadoApadrinamiento`"
          ."FROM `apadrinamientomascotausuario`"
          ."WHERE `Mascota_idMascota`='$mascota_idMascota'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $apadrinamientomascotausuario = new Apadrinamientomascotausuario();
           $mascota = new Mascota();
           $mascota->setIdMascota($data[$i]['Mascota_idMascota']);
           $apadrinamientomascotausuario->setMascota_idMascota($mascota);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $apadrinamientomascotausuario->setUsuario_idUsuario($usuario);
          $apadrinamientomascotausuario->setFechaApadrinamientoMascotaUsuariocol($data[$i]['fechaApadrinamientoMascotaUsuariocol']);
          $apadrinamientomascotausuario->setEstadoApadrinamiento($data[$i]['estadoApadrinamiento']);

          array_push($lista,$apadrinamientomascotausuario);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Apadrinamientomascotausuario en la base de datos.
     * @param apadrinamientomascotausuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Apadrinamientomascotausuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByUsuario_idUsuario($apadrinamientomascotausuario){
      $lista = array();
      $usuario_idUsuario=$apadrinamientomascotausuario->getUsuario_idUsuario()->getIdUsuario();

      try {
          $sql ="SELECT `Mascota_idMascota`, `Usuario_idUsuario`, `fechaApadrinamientoMascotaUsuariocol`, `estadoApadrinamiento`"
          ."FROM `apadrinamientomascotausuario`"
          ."WHERE `Usuario_idUsuario`='$usuario_idUsuario'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $apadrinamientomascotausuario = new Apadrinamientomascotausuario();
           $mascota = new Mascota();
           $mascota->setIdMascota($data[$i]['Mascota_idMascota']);
           $apadrinamientomascotausuario->setMascota_idMascota($mascota);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $apadrinamientomascotausuario->setUsuario_idUsuario($usuario);
          $apadrinamientomascotausuario->setFechaApadrinamientoMascotaUsuariocol($data[$i]['fechaApadrinamientoMascotaUsuariocol']);
          $apadrinamientomascotausuario->setEstadoApadrinamiento($data[$i]['estadoApadrinamiento']);

          array_push($lista,$apadrinamientomascotausuario);
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