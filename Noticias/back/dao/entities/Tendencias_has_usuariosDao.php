<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Lolita, luz de mi vida, fuego de mis entrañas. Pecado mío, alma mía.  \\

include_once realpath('../dao/interfaz/ITendencias_has_usuariosDao.php');
include_once realpath('../dto/Tendencias_has_usuarios.php');
include_once realpath('../dto/Tendencias.php');
include_once realpath('../dto/Usuarios.php');

class Tendencias_has_usuariosDao implements ITendencias_has_usuariosDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Tendencias_has_usuarios en la base de datos.
     * @param tendencias_has_usuarios objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tendencias_has_usuarios){
      $tendencias_id_ten=$tendencias_has_usuarios->getTendencias_id_ten()->getId_ten();
$usuarios_idusuarios=$tendencias_has_usuarios->getUsuarios_idusuarios()->getIdusuarios();
//$tendencias_fecha=$tendencias_has_usuarios->getTendencias_fecha();

      try {
          $sql= "INSERT INTO `tendencias_has_usuarios`( `tendencias_id_ten`, `usuarios_idusuarios`)"
          ."VALUES ('$tendencias_id_ten','$usuarios_idusuarios')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tendencias_has_usuarios en la base de datos.
     * @param tendencias_has_usuarios objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tendencias_has_usuarios){
      $tendencias_id_ten=$tendencias_has_usuarios->getTendencias_id_ten()->getId_ten();
$usuarios_idusuarios=$tendencias_has_usuarios->getUsuarios_idusuarios()->getIdusuarios();

      try {
          $sql= "SELECT `tendencias_id_ten`, `usuarios_idusuarios`, `tendencias_fecha`"
          ."FROM `tendencias_has_usuarios`"
          ."WHERE `tendencias_id_ten`='$tendencias_id_ten' AND`usuarios_idusuarios`='$usuarios_idusuarios'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $tendencias = new Tendencias();
           $tendencias->setId_ten($data[$i]['tendencias_id_ten']);
           $tendencias_has_usuarios->setTendencias_id_ten($tendencias);
           $usuarios = new Usuarios();
           $usuarios->setIdusuarios($data[$i]['usuarios_idusuarios']);
           $tendencias_has_usuarios->setUsuarios_idusuarios($usuarios);
          $tendencias_has_usuarios->setTendencias_fecha($data[$i]['tendencias_fecha']);

          }
      return $tendencias_has_usuarios;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Tendencias_has_usuarios en la base de datos.
     * @param tendencias_has_usuarios objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tendencias_has_usuarios){
      $tendencias_id_ten=$tendencias_has_usuarios->getTendencias_id_ten()->getId_ten();
$usuarios_idusuarios=$tendencias_has_usuarios->getUsuarios_idusuarios()->getIdusuarios();
$tendencias_fecha=$tendencias_has_usuarios->getTendencias_fecha();

      try {
          $sql= "UPDATE `tendencias_has_usuarios` SET`tendencias_id_ten`='$tendencias_id_ten' ,`usuarios_idusuarios`='$usuarios_idusuarios' ,`tendencias_fecha`='$tendencias_fecha' WHERE `tendencias_id_ten`='$tendencias_id_ten' AND `usuarios_idusuarios`='$usuarios_idusuarios' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Tendencias_has_usuarios en la base de datos.
     * @param tendencias_has_usuarios objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tendencias_has_usuarios){
      $tendencias_id_ten=$tendencias_has_usuarios->getTendencias_id_ten()->getId_ten();
$usuarios_idusuarios=$tendencias_has_usuarios->getUsuarios_idusuarios()->getIdusuarios();

      try {
          $sql ="DELETE FROM `tendencias_has_usuarios` WHERE `tendencias_id_ten`='$tendencias_id_ten' AND`usuarios_idusuarios`='$usuarios_idusuarios'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tendencias_has_usuarios en la base de datos.
     * @return ArrayList<Tendencias_has_usuarios> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `tendencias_id_ten`, `usuarios_idusuarios`, `tendencias_fecha`"
          ."FROM `tendencias_has_usuarios`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $tendencias_has_usuarios= new Tendencias_has_usuarios();
           $tendencias = new Tendencias();
           $tendencias->setId_ten($data[$i]['tendencias_id_ten']);
           $tendencias_has_usuarios->setTendencias_id_ten($tendencias);
           $usuarios = new Usuarios();
           $usuarios->setIdusuarios($data[$i]['usuarios_idusuarios']);
           $tendencias_has_usuarios->setUsuarios_idusuarios($usuarios);
          $tendencias_has_usuarios->setTendencias_fecha($data[$i]['tendencias_fecha']);

          array_push($lista,$tendencias_has_usuarios);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Tendencias_has_usuarios en la base de datos.
     * @param tendencias_has_usuarios objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Tendencias_has_usuarios> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByTendencias_id_ten($tendencias_has_usuarios){
      $lista = array();
      $tendencias_id_ten=$tendencias_has_usuarios->getTendencias_id_ten()->getId_ten();

      try {
          $sql ="SELECT `tendencias_id_ten`, `usuarios_idusuarios`, `tendencias_fecha`"
          ."FROM `tendencias_has_usuarios`"
          ."WHERE `tendencias_id_ten`='$tendencias_id_ten'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $tendencias_has_usuarios = new Tendencias_has_usuarios();
           $tendencias = new Tendencias();
           $tendencias->setId_ten($data[$i]['tendencias_id_ten']);
           $tendencias_has_usuarios->setTendencias_id_ten($tendencias);
           $usuarios = new Usuarios();
           $usuarios->setIdusuarios($data[$i]['usuarios_idusuarios']);
           $tendencias_has_usuarios->setUsuarios_idusuarios($usuarios);
          $tendencias_has_usuarios->setTendencias_fecha($data[$i]['tendencias_fecha']);

          array_push($lista,$tendencias_has_usuarios);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Tendencias_has_usuarios en la base de datos.
     * @param tendencias_has_usuarios objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Tendencias_has_usuarios> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByUsuarios_idusuarios($tendencias_has_usuarios){
      $lista = array();
      $usuarios_idusuarios=$tendencias_has_usuarios->getUsuarios_idusuarios()->getIdusuarios();

      try {
          $sql ="SELECT `tendencias_id_ten`, `usuarios_idusuarios`, `tendencias_fecha`"
          ."FROM `tendencias_has_usuarios`"
          ."WHERE `usuarios_idusuarios`='$usuarios_idusuarios'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $tendencias_has_usuarios = new Tendencias_has_usuarios();
           $tendencias = new Tendencias();
           $tendencias->setId_ten($data[$i]['tendencias_id_ten']);
           $tendencias_has_usuarios->setTendencias_id_ten($tendencias);
           $usuarios = new Usuarios();
           $usuarios->setIdusuarios($data[$i]['usuarios_idusuarios']);
           $tendencias_has_usuarios->setUsuarios_idusuarios($usuarios);
          $tendencias_has_usuarios->setTendencias_fecha($data[$i]['tendencias_fecha']);

          array_push($lista,$tendencias_has_usuarios);
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