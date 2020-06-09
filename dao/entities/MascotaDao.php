<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El código es tuyo, modifícalo como quieras  \\

include_once realpath('../dao/interfaz/IMascotaDao.php');
include_once realpath('../dto/Mascota.php');
include_once realpath('../dto/Especie.php');
include_once realpath('../dto/Historialmascota.php');
include_once realpath('../dto/Fundacion.php');
include_once realpath('../dto/Veterinaria.php');

class MascotaDao implements IMascotaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Mascota en la base de datos.
     * @param mascota objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($mascota){
      $idMascota=$mascota->getIdMascota();
$especie_idEspecie=$mascota->getEspecie_idEspecie()->getIdEspecie();
$historialMascota_idHistorialMascota=$mascota->getHistorialMascota_idHistorialMascota()->getIdHistorialMascota();
$nombreMascota=$mascota->getNombreMascota();
$edadMascota=$mascota->getEdadMascota();
$sexoMascota=$mascota->getSexoMascota();
$disponibilidadMascota=$mascota->getDisponibilidadMascota();
$esterilizado=$mascota->getEsterilizado();
$fundacion_idFundacion=$mascota->getFundacion_idFundacion()->getIdFundacion();
$fechaIngreso=$mascota->getFechaIngreso();
$fechaSalida=$mascota->getFechaSalida();
$fotoMascota=$mascota->getFotoMascota();
$mascota_creacion=$mascota->getMascota_creacion();
$apadrinamiento=$mascota->getApadrinamiento();
$veterinaria_idVeterinaria=$mascota->getVeterinaria_idVeterinaria()->getIdVeterinaria();

      try {
          $sql= "INSERT INTO `mascota`( `idMascota`, `Especie_idEspecie`, `HistorialMascota_idHistorialMascota`, `nombreMascota`, `edadMascota`, `sexoMascota`, `disponibilidadMascota`, `esterilizado`, `Fundacion_idFundacion`, `fechaIngreso`, `fechaSalida`, `fotoMascota`, `Mascota_creacion`, `Apadrinamiento`, `Veterinaria_idVeterinaria`)"
          ."VALUES ('$idMascota','$especie_idEspecie','$historialMascota_idHistorialMascota','$nombreMascota','$edadMascota','$sexoMascota','$disponibilidadMascota','$esterilizado','$fundacion_idFundacion','$fechaIngreso','$fechaSalida','$fotoMascota','$mascota_creacion','$apadrinamiento','$veterinaria_idVeterinaria')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Mascota en la base de datos.
     * @param mascota objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($mascota){
      $idMascota=$mascota->getIdMascota();

      try {
          $sql= "SELECT `idMascota`, `Especie_idEspecie`, `HistorialMascota_idHistorialMascota`, `nombreMascota`, `edadMascota`, `sexoMascota`, `disponibilidadMascota`, `esterilizado`, `Fundacion_idFundacion`, `fechaIngreso`, `fechaSalida`, `fotoMascota`, `Mascota_creacion`, `Apadrinamiento`, `Veterinaria_idVeterinaria`"
          ."FROM `mascota`"
          ."WHERE `idMascota`='$idMascota'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $mascota->setIdMascota($data[$i]['idMascota']);
           $especie = new Especie();
           $especie->setIdEspecie($data[$i]['Especie_idEspecie']);
           $mascota->setEspecie_idEspecie($especie);
           $historialmascota = new Historialmascota();
           $historialmascota->setIdHistorialMascota($data[$i]['HistorialMascota_idHistorialMascota']);
           $mascota->setHistorialMascota_idHistorialMascota($historialmascota);
          $mascota->setNombreMascota($data[$i]['nombreMascota']);
          $mascota->setEdadMascota($data[$i]['edadMascota']);
          $mascota->setSexoMascota($data[$i]['sexoMascota']);
          $mascota->setDisponibilidadMascota($data[$i]['disponibilidadMascota']);
          $mascota->setEsterilizado($data[$i]['esterilizado']);
           $fundacion = new Fundacion();
           $fundacion->setIdFundacion($data[$i]['Fundacion_idFundacion']);
           $mascota->setFundacion_idFundacion($fundacion);
          $mascota->setFechaIngreso($data[$i]['fechaIngreso']);
          $mascota->setFechaSalida($data[$i]['fechaSalida']);
          $mascota->setFotoMascota($data[$i]['fotoMascota']);
          $mascota->setMascota_creacion($data[$i]['Mascota_creacion']);
          $mascota->setApadrinamiento($data[$i]['Apadrinamiento']);
           $veterinaria = new Veterinaria();
           $veterinaria->setIdVeterinaria($data[$i]['Veterinaria_idVeterinaria']);
           $mascota->setVeterinaria_idVeterinaria($veterinaria);

          }
      return $mascota;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Mascota en la base de datos.
     * @param mascota objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($mascota){
      $idMascota=$mascota->getIdMascota();
$especie_idEspecie=$mascota->getEspecie_idEspecie()->getIdEspecie();
$historialMascota_idHistorialMascota=$mascota->getHistorialMascota_idHistorialMascota()->getIdHistorialMascota();
$nombreMascota=$mascota->getNombreMascota();
$edadMascota=$mascota->getEdadMascota();
$sexoMascota=$mascota->getSexoMascota();
$disponibilidadMascota=$mascota->getDisponibilidadMascota();
$esterilizado=$mascota->getEsterilizado();
$fundacion_idFundacion=$mascota->getFundacion_idFundacion()->getIdFundacion();
$fechaIngreso=$mascota->getFechaIngreso();
$fechaSalida=$mascota->getFechaSalida();
$fotoMascota=$mascota->getFotoMascota();
$mascota_creacion=$mascota->getMascota_creacion();
$apadrinamiento=$mascota->getApadrinamiento();
$veterinaria_idVeterinaria=$mascota->getVeterinaria_idVeterinaria()->getIdVeterinaria();

      try {
          $sql= "UPDATE `mascota` SET`idMascota`='$idMascota' ,`Especie_idEspecie`='$especie_idEspecie' ,`HistorialMascota_idHistorialMascota`='$historialMascota_idHistorialMascota' ,`nombreMascota`='$nombreMascota' ,`edadMascota`='$edadMascota' ,`sexoMascota`='$sexoMascota' ,`disponibilidadMascota`='$disponibilidadMascota' ,`esterilizado`='$esterilizado' ,`Fundacion_idFundacion`='$fundacion_idFundacion' ,`fechaIngreso`='$fechaIngreso' ,`fechaSalida`='$fechaSalida' ,`fotoMascota`='$fotoMascota' ,`Mascota_creacion`='$mascota_creacion' ,`Apadrinamiento`='$apadrinamiento' ,`Veterinaria_idVeterinaria`='$veterinaria_idVeterinaria' WHERE `idMascota`='$idMascota' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Mascota en la base de datos.
     * @param mascota objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($mascota){
      $idMascota=$mascota->getIdMascota();

      try {
          $sql ="DELETE FROM `mascota` WHERE `idMascota`='$idMascota'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Mascota en la base de datos.
     * @return ArrayList<Mascota> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idMascota`, `Especie_idEspecie`, `HistorialMascota_idHistorialMascota`, `nombreMascota`, `edadMascota`, `sexoMascota`, `disponibilidadMascota`, `esterilizado`, `Fundacion_idFundacion`, `fechaIngreso`, `fechaSalida`, `fotoMascota`, `Mascota_creacion`, `Apadrinamiento`, `Veterinaria_idVeterinaria`"
          ."FROM `mascota`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $mascota= new Mascota();
          $mascota->setIdMascota($data[$i]['idMascota']);
           $especie = new Especie();
           $especie->setIdEspecie($data[$i]['Especie_idEspecie']);
           $mascota->setEspecie_idEspecie($especie);
           $historialmascota = new Historialmascota();
           $historialmascota->setIdHistorialMascota($data[$i]['HistorialMascota_idHistorialMascota']);
           $mascota->setHistorialMascota_idHistorialMascota($historialmascota);
          $mascota->setNombreMascota($data[$i]['nombreMascota']);
          $mascota->setEdadMascota($data[$i]['edadMascota']);
          $mascota->setSexoMascota($data[$i]['sexoMascota']);
          $mascota->setDisponibilidadMascota($data[$i]['disponibilidadMascota']);
          $mascota->setEsterilizado($data[$i]['esterilizado']);
           $fundacion = new Fundacion();
           $fundacion->setIdFundacion($data[$i]['Fundacion_idFundacion']);
           $mascota->setFundacion_idFundacion($fundacion);
          $mascota->setFechaIngreso($data[$i]['fechaIngreso']);
          $mascota->setFechaSalida($data[$i]['fechaSalida']);
          $mascota->setFotoMascota($data[$i]['fotoMascota']);
          $mascota->setMascota_creacion($data[$i]['Mascota_creacion']);
          $mascota->setApadrinamiento($data[$i]['Apadrinamiento']);
           $veterinaria = new Veterinaria();
           $veterinaria->setIdVeterinaria($data[$i]['Veterinaria_idVeterinaria']);
           $mascota->setVeterinaria_idVeterinaria($veterinaria);

          array_push($lista,$mascota);
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