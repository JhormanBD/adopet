<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once realpath('../facade/TendenciasFacade.php');
include_once realpath('../facade/ArchivosFacade.php');
include_once realpath('../facade/Tendencias_has_usuariosFacade.php');


//        $titulo_ten = strip_tags($_POST['titulo_ten']);
   
       $titulo_ten= str_replace("\"", "\'", strip_tags($_POST['titulo_ten']));
       
        $tipo_ten = strip_tags($_POST['tipo_ten']);
       
         $publicado_ten = strip_tags($_POST['publicado_ten']);
         
        $prioridad_ten = strip_tags($_POST['prioridad_ten']);
  
       $descrip_ten1= str_replace("\"", "\'",  strip_tags($_POST['descrip_ten']));
       
        $id_categoria = strip_tags($_POST['id_categoria']);
        
      $rta=TendenciasFacade::insert( $titulo_ten, $tipo_ten, $publicado_ten, $prioridad_ten, $descrip_ten1);
      

        if($rta>0||$rta!='0'||$rta!=NULL){
            
            
        $Tendencias_id_ten =$rta;
        $tendencias= new Tendencias();
        $tendencias->setId_ten($Tendencias_id_ten);
        $Usuarios_idusuarios = strip_tags($_POST['usuarios_idusuarios']);
        $usuarios= new Usuarios();
        $usuarios->setIdusuarios($Usuarios_idusuarios);
      
        Tendencias_has_usuariosFacade::insert($tendencias, $usuarios);
   
            
            
            
  
            if($id_categoria==1){/*subir fotos*/
                
                    // Recibo los datos de la imagen
$carpetaDestino = '../../../tendencias/';

$origen = $_FILES["imagen"]["tmp_name"];
$ext = substr($_FILES["imagen"]["type"], 6,10);




//**********************para regsitrar el archivo *******************
//
    $nombrearchivo = "imagen";
    $tipoa = GetTipoImagen($nombrearchivo);
    $tipo_arch = $tipoa;
    $file_arch = NULL;
    $id_file = ArchivosFacade::insert2($tipo_arch, $file_arch, $rta);

//
//**********************para regsitrar el archivo *******************
$codigo_interno='tendencias-'.$rta.'-'.$id_file;

$nombrearchivo=$codigo_interno.'.'.$tipoa;
 ArchivosFacade::update_foto($nombrearchivo,$rta);
 
 $destino = $carpetaDestino . $codigo_interno.'.'.$tipoa;

    if ($_FILES["imagen"]["size"] < 2067359) {
        # copiamos el archivo
        @copy($origen, $destino);       
        echo 1;
   
    } else {
        echo 3;
    }
            }else{ /*subir link*/
                  $link_ten=$_POST['id_link'];
                   $id_file = ArchivosFacade::insert2('LINK',$link_ten,$rta);
                   
                   echo 1;
   
            }
            
//echo 1;
   
        }

        
                
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