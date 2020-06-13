<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Trabajo individual singifica ganancia individual  \\

include_once realpath('../dao/interfaz/IUsuariosDao.php');
include_once realpath('../dto/Usuarios.php');

class UsuariosDao implements IUsuariosDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Usuarios en la base de datos.
     * @param usuarios objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($usuarios){
//      $idusuarios=$usuarios->getIdusuarios();
$nombre=$usuarios->getNombre();
$pass=$usuarios->getPass();
$estado=$usuarios->getEstado();
$usuario=$usuarios->getUsuario();

      try {
          $sql= "INSERT INTO `usuarios`(  `nombre`, `pass`, `estado`, `usuario`)"
          ."VALUES ('$nombre','$pass','$estado','$usuario')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Usuarios en la base de datos.
     * @param usuarios objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($usuarios){
      $idusuarios=$usuarios->getIdusuarios();

      try {
          $sql= "SELECT `idusuarios`, `nombre`, `pass`, `estado`, `usuario`"
          ."FROM `usuarios`"
          ."WHERE `idusuarios`='$idusuarios'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $usuarios->setIdusuarios($data[$i]['idusuarios']);
          $usuarios->setNombre($data[$i]['nombre']);
          $usuarios->setPass($data[$i]['pass']);
          $usuarios->setEstado($data[$i]['estado']);
          $usuarios->setUsuario($data[$i]['usuario']);

          }
      return $usuarios;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }
  public function select2($idusuarios){
//      $idusuarios=$usuarios->getIdusuarios();
      $usuario=null;
      try {
          $sql= "SELECT `idusuarios`  FROM `usuarios` WHERE `usuario` ='$idusuarios'";
//  var_dump($sql);
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
//          $usuarios= new Usuarios();
          $usuario=$data[$i]['idusuarios'];
//          $usuarios->setNombre($data[$i]['nombre']);
//          $usuarios->setPass($data[$i]['pass']);
//          $usuarios->setEstado($data[$i]['estado']);
//          $usuarios->setUsuario($data[$i]['usuario']);

          }
      return $usuario;     
      }
      catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Usuarios en la base de datos.
     * @param usuarios objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($usuarios){
      $idusuarios=$usuarios->getIdusuarios();
$nombre=$usuarios->getNombre();
$pass=$usuarios->getPass();
$estado=$usuarios->getEstado();
$usuario=$usuarios->getUsuario();

      try {
          $sql= "UPDATE `usuarios` SET`idusuarios`='$idusuarios' ,`nombre`='$nombre' ,`pass`='$pass' ,`estado`='$estado' ,`usuario`='$usuario' WHERE `idusuarios`='$idusuarios' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Usuarios en la base de datos.
     * @param usuarios objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($usuarios){
      $idusuarios=$usuarios->getIdusuarios();

      try {
          $sql ="DELETE FROM `usuarios` WHERE `idusuarios`='$idusuarios'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Usuarios en la base de datos.
     * @return ArrayList<Usuarios> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idusuarios`, `nombre`, `pass`, `estado`, `usuario`"
          ."FROM `usuarios`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $usuarios= new Usuarios();
          $usuarios->setIdusuarios($data[$i]['idusuarios']);
          $usuarios->setNombre($data[$i]['nombre']);
          $usuarios->setPass($data[$i]['pass']);
          $usuarios->setEstado($data[$i]['estado']);
          $usuarios->setUsuario($data[$i]['usuario']);

          array_push($lista,$usuarios);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }
  
  public function login_user($user,$pass){
      $lista = array();
      try {
          $sql ="SELECT `idusuarios`, `nombre` FROM `usuarios`"
          ."WHERE `usuario`='$user' and  `pass`= '$pass' and `estado`=1 ";
//  var_dump($sql);
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $usuarios= new Usuarios();
          $usuarios->setIdusuarios($data[$i]['idusuarios']);
          $usuarios->setNombre($data[$i]['nombre']);
    

          array_push($lista,$usuarios);
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