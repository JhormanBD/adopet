<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once realpath('../facade/TendenciasFacade.php');
include_once realpath('../facade/ArchivosFacade.php');


                

//        $id_ten = '47';
//        $titulo_ten ='fsdfdsfdsfdsfdsfdsfds dsfdsfds';
////        $tipo_ten = strip_tags($_POST['tipo_ten']);
//        $publicado_ten ='2019-12-24';
////        $prioridad_ten = strip_tags($_POST['prioridad_ten']);
//        $descrip_ten = 'asdasdasd la poapsodpsaodsa';
//       $id_categoria = '1';
        $id_ten = strip_tags($_POST['id_ten']);
        $titulo_ten = strip_tags($_POST['titulo_ten']);
//        $tipo_ten = strip_tags($_POST['tipo_ten']);
        $publicado_ten = strip_tags($_POST['publicado_ten']);
//        $prioridad_ten = strip_tags($_POST['prioridad_ten']);
        $descrip_ten = strip_tags($_POST['descrip_ten']);
          $id_categoria = strip_tags($_POST['id_categoria']);
//          echo $id_categoria;
        
      TendenciasFacade::update2($id_ten, $titulo_ten, $publicado_ten, $descrip_ten);
    
  
  
              if($id_categoria==1){/*subir fotos*/
//                    $id_file = ArchivosFacade::select_id($id_ten);
//                   $tipo_arch = $tipoa;
//    $file_arch = NULL;
//     ArchivosFacade::update2($tipo_arch,$file_arch,'47');
//              
//      var_dump($id_categoria);
if(isset($_FILES['imagen2']) && $_FILES['imagen2']['tmp_name'] != ""){
                             
//     var_dump('ENTR');
    // Recibo los datos de la imagen
$carpetaDestino = '../../../tendencias/';

$origen = $_FILES["imagen2"]["tmp_name"];
$ext = substr($_FILES["imagen2"]["type"], 6,10);

//**********************para regsitrar el archivo *******************
//
      $nombrearchivo = "imagen2";
    $tipoa = GetTipoImagen($nombrearchivo);
    $tipo_arch = $tipoa;
    $file_arch = NULL;
     $id_file = ArchivosFacade::select_id($id_ten);
//     var_dump($id_file);
     ArchivosFacade::update2($tipo_arch,$file_arch,$id_ten);
//
//**********************para regsitrar el archivo *******************
$codigo_interno='tendencias-'.$id_ten.'-'.$id_file;

 $destino = $carpetaDestino . $codigo_interno.'.'.$tipoa;

    if ($_FILES["imagen2"]["size"] < 2067359) {
        # copiamos el archivo
        @copy($origen, $destino);       
        echo 1;
   ;
    } else {
        echo 3;
  
    }

             }
                  
              }if($id_categoria==2){
                   $link_ten=strip_tags($_POST['id_link']);
//                   $link_ten='https://www.lawebdelprogramador.com/foros/HTML/1489710-Acentos-y-n-HTML5.html';
                   $tipo_arch='LINK';
                    ArchivosFacade::update2($tipo_arch,$link_ten,$id_ten);
                    echo 1;
   
              }else{
                  echo 1;
              }
              
         

//             echo 1;
         
     

       function GetTipoImagen($nombrearchivo) {
     $tipoa = $_FILES["" . $nombrearchivo]['type'];
     
     switch ($tipoa) {
         case "image/jpeg":
             return "jpg";
         case "image/jpg":
             return "jpg";
         case "image/png":
             return "png";
         case "application/pdf":
               return "pdf";
       
     }
  
}        

//return true;