<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No dejes el código del futuro en manos humanas  \\

include_once realpath('../dao/interfaz/INotificacionesDao.php');
include_once realpath('../dto/Notificaciones.php');
include_once realpath('../dto/Fundacion.php');
include_once realpath('../dto/Usuario.php');

class NotificacionesDao implements INotificacionesDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Notificaciones en la base de datos.
     * @param notificaciones objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($notificaciones){
      $idmensaje=$notificaciones->getIdmensaje();
$fechaMensaje=$notificaciones->getFechaMensaje();
$fundacion_idFundacion=$notificaciones->getFundacion_idFundacion()->getIdFundacion();
$usuario_idUsuario=$notificaciones->getUsuario_idUsuario()->getIdUsuario();
$descripcion=$notificaciones->getDescripcion();

      try {
          $sql= "INSERT INTO `notificaciones`( `idmensaje`, `fechaMensaje`, `Fundacion_idFundacion`, `Usuario_idUsuario`, `Descripcion`)"
          ."VALUES ('$idmensaje','$fechaMensaje','$fundacion_idFundacion','$usuario_idUsuario','$descripcion')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Notificaciones en la base de datos.
     * @param notificaciones objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($notificaciones){
      $idmensaje=$notificaciones->getIdmensaje();

      try {
          $sql= "SELECT `idmensaje`, `fechaMensaje`, `Fundacion_idFundacion`, `Usuario_idUsuario`, `Descripcion`"
          ."FROM `notificaciones`"
          ."WHERE `idmensaje`='$idmensaje'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $notificaciones->setIdmensaje($data[$i]['idmensaje']);
          $notificaciones->setFechaMensaje($data[$i]['fechaMensaje']);
           $fundacion = new Fundacion();
           $fundacion->setIdFundacion($data[$i]['Fundacion_idFundacion']);
           $notificaciones->setFundacion_idFundacion($fundacion);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $notificaciones->setUsuario_idUsuario($usuario);
          $notificaciones->setDescripcion($data[$i]['Descripcion']);

          }
      return $notificaciones;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Notificaciones en la base de datos.
     * @param notificaciones objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($notificaciones){
      $idmensaje=$notificaciones->getIdmensaje();
$fechaMensaje=$notificaciones->getFechaMensaje();
$fundacion_idFundacion=$notificaciones->getFundacion_idFundacion()->getIdFundacion();
$usuario_idUsuario=$notificaciones->getUsuario_idUsuario()->getIdUsuario();
$descripcion=$notificaciones->getDescripcion();

      try {
          $sql= "UPDATE `notificaciones` SET`idmensaje`='$idmensaje' ,`fechaMensaje`='$fechaMensaje' ,`Fundacion_idFundacion`='$fundacion_idFundacion' ,`Usuario_idUsuario`='$usuario_idUsuario' ,`Descripcion`='$descripcion' WHERE `idmensaje`='$idmensaje' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Notificaciones en la base de datos.
     * @param notificaciones objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($notificaciones){
      $idmensaje=$notificaciones->getIdmensaje();

      try {
          $sql ="DELETE FROM `notificaciones` WHERE `idmensaje`='$idmensaje'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Notificaciones en la base de datos.
     * @return ArrayList<Notificaciones> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idmensaje`, `fechaMensaje`, `Fundacion_idFundacion`, `Usuario_idUsuario`, `Descripcion`"
          ."FROM `notificaciones`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $notificaciones= new Notificaciones();
          $notificaciones->setIdmensaje($data[$i]['idmensaje']);
          $notificaciones->setFechaMensaje($data[$i]['fechaMensaje']);
           $fundacion = new Fundacion();
           $fundacion->setIdFundacion($data[$i]['Fundacion_idFundacion']);
           $notificaciones->setFundacion_idFundacion($fundacion);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $notificaciones->setUsuario_idUsuario($usuario);
          $notificaciones->setDescripcion($data[$i]['Descripcion']);

          array_push($lista,$notificaciones);
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