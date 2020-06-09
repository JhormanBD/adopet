<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    In Anarchy we trust  \\


class Documentos {

  private $idDocumentos;
  private $NombreDocumento;
  private $DocumentosRuta;
  private $Usuario_idUsuario;

    /**
     * Constructor de Documentos
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idDocumentos
     * @return idDocumentos
     */
  public function getIdDocumentos(){
      return $this->idDocumentos;
  }

    /**
     * Modifica el valor correspondiente a idDocumentos
     * @param idDocumentos
     */
  public function setIdDocumentos($idDocumentos){
      $this->idDocumentos = $idDocumentos;
  }
    /**
     * Devuelve el valor correspondiente a NombreDocumento
     * @return NombreDocumento
     */
  public function getNombreDocumento(){
      return $this->NombreDocumento;
  }

    /**
     * Modifica el valor correspondiente a NombreDocumento
     * @param NombreDocumento
     */
  public function setNombreDocumento($nombreDocumento){
      $this->NombreDocumento = $nombreDocumento;
  }
    /**
     * Devuelve el valor correspondiente a DocumentosRuta
     * @return DocumentosRuta
     */
  public function getDocumentosRuta(){
      return $this->DocumentosRuta;
  }

    /**
     * Modifica el valor correspondiente a DocumentosRuta
     * @param DocumentosRuta
     */
  public function setDocumentosRuta($documentosRuta){
      $this->DocumentosRuta = $documentosRuta;
  }
    /**
     * Devuelve el valor correspondiente a Usuario_idUsuario
     * @return Usuario_idUsuario
     */
  public function getUsuario_idUsuario(){
      return $this->Usuario_idUsuario;
  }

    /**
     * Modifica el valor correspondiente a Usuario_idUsuario
     * @param Usuario_idUsuario
     */
  public function setUsuario_idUsuario($usuario_idUsuario){
      $this->Usuario_idUsuario = $usuario_idUsuario;
  }


}
//That`s all folks!