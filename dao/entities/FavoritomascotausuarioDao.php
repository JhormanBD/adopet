<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Nada mejor que el código hecho a mano.  \\

include_once realpath('../dao/interfaz/IFavoritomascotausuarioDao.php');
include_once realpath('../dto/Favoritomascotausuario.php');
include_once realpath('../dto/Mascota.php');
include_once realpath('../dto/Usuario.php');

class FavoritomascotausuarioDao implements IFavoritomascotausuarioDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Favoritomascotausuario en la base de datos.
     * @param favoritomascotausuario objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($favoritomascotausuario){
      $mascota_idMascota=$favoritomascotausuario->getMascota_idMascota()->getIdMascota();
$usuario_idUsuario=$favoritomascotausuario->getUsuario_idUsuario()->getIdUsuario();
      try {
          $sql= "INSERT INTO `favoritomascotausuario`( `Mascota_idMascota`, `Usuario_idUsuario`)"
          ."VALUES ('$mascota_idMascota','$usuario_idUsuario')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Favoritomascotausuario en la base de datos.
     * @param favoritomascotausuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($favoritomascotausuario){
      $idFavoritoMascotaUsuario=$favoritomascotausuario->getIdFavoritoMascotaUsuario();

      try {
          $sql= "SELECT `Mascota_idMascota`, `Usuario_idUsuario`, `idFavoritoMascotaUsuario`"
          ."FROM `favoritomascotausuario`"
          ."WHERE `idFavoritoMascotaUsuario`='$idFavoritoMascotaUsuario'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $mascota = new Mascota();
           $mascota->setIdMascota($data[$i]['Mascota_idMascota']);
           $favoritomascotausuario->setMascota_idMascota($mascota);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $favoritomascotausuario->setUsuario_idUsuario($usuario);
          $favoritomascotausuario->setIdFavoritoMascotaUsuario($data[$i]['idFavoritoMascotaUsuario']);

          }
      return $favoritomascotausuario;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Favoritomascotausuario en la base de datos.
     * @param favoritomascotausuario objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($favoritomascotausuario){
      $mascota_idMascota=$favoritomascotausuario->getMascota_idMascota()->getIdMascota();
$usuario_idUsuario=$favoritomascotausuario->getUsuario_idUsuario()->getIdUsuario();
$idFavoritoMascotaUsuario=$favoritomascotausuario->getIdFavoritoMascotaUsuario();

      try {
          $sql= "UPDATE `favoritomascotausuario` SET`Mascota_idMascota`='$mascota_idMascota' ,`Usuario_idUsuario`='$usuario_idUsuario' ,`idFavoritoMascotaUsuario`='$idFavoritoMascotaUsuario' WHERE `idFavoritoMascotaUsuario`='$idFavoritoMascotaUsuario' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Favoritomascotausuario en la base de datos.
     * @param favoritomascotausuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($favoritomascotausuario){
      $idFavoritoMascotaUsuario=$favoritomascotausuario->getIdFavoritoMascotaUsuario();

      try {
          $sql ="DELETE FROM `favoritomascotausuario` WHERE `idFavoritoMascotaUsuario`='$idFavoritoMascotaUsuario'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Favoritomascotausuario en la base de datos.
     * @return ArrayList<Favoritomascotausuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `Mascota_idMascota`, `Usuario_idUsuario`, `idFavoritoMascotaUsuario`"
          ."FROM `favoritomascotausuario`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $favoritomascotausuario= new Favoritomascotausuario();
           $mascota = new Mascota();
           $mascota->setIdMascota($data[$i]['Mascota_idMascota']);
           $favoritomascotausuario->setMascota_idMascota($mascota);
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $favoritomascotausuario->setUsuario_idUsuario($usuario);
          $favoritomascotausuario->setIdFavoritoMascotaUsuario($data[$i]['idFavoritoMascotaUsuario']);

          array_push($lista,$favoritomascotausuario);
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