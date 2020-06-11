<?php

include_once realpath('../facade/DocumentoFacade.php');

$nombreDocumento   = strip_tags($_POST['nombreDocumento']);
$idUsuario = strip_tags($_POST['idUsuario']);
$usuario           = new Usuario();
$usuario->setIdUsuario($idUsuario);
$respuesta = false;
$nombre_ruta=saveDocument();
if ($nombreDocumento === '' || $nombre_ruta === '' || $idUsuario === '') {
    echo $respuesta;
} else {
    $respuesta = DocumentoFacade::insert($nombreDocumento, $nombre_ruta, $usuario);
    if ($respuesta > 0) {
        echo $respuesta = true;
    } else {
        echo $respuesta;
    }
}

function saveDocument()
{

    $name = "";
    $directorio = "../../documento";

    if (basename($_FILES["file"]["name"]) == null || basename($_FILES["file"]["name"]) == "") {
        return "";
    }
    $archivo = $directorio . basename($_FILES["file"]["name"]);

    //para validar tamaño del archivo
    $size = $_FILES["file"]["size"];
    $tipoArchivo = end(explode(".", $_FILES['file']['name']));
    //validar tipo de imagen
    if ($tipoArchivo != "pdf") {

    } else if (move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)) {

        $name = basename($_FILES["file"]["name"]);
        return $name;

        echo "El archivo se subió correctamente";
    } else {
        echo "Hubo un error en la subida del archivo";
    }
}
